<?php
	ob_start();
	session_start();
    $pageTitle = 'course_content';
    $Title = '';
	include 'inital.php';
    include "check_token.php";
    $getUser = $con->prepare("SELECT * FROM members WHERE username = ?");
    $getUser->execute(array($sessionUser));
    $info = $getUser->fetch();
    if (isset($_SESSION['user']) && $info['regstatus'] == 1) {
        $username  = $info['username'];
        $groupid  = $info['groupid'];
         // Check If Get Request item Is Numeric & Get Its Integer Value
        $category_id = isset($_GET['category_id']) && is_numeric($_GET['category_id']) ? intval($_GET['category_id']) : 0;
        $getlessons = $con->prepare("SELECT * FROM lessons WHERE cat_id = ?");
        $getlessons->execute(array($category_id));
        $count = $getlessons->rowCount();
        if ($count > 0) {
            $lessons = $getlessons->fetchAll();
?>
<body>
    <div class="wrapper d-flex align-items-stretch">
		<nav id="sidebar" class="order-last text-right" >
			<div class="">
                <?php 
                    $categories = $con->prepare("SELECT category_name, image FROM category where category_id = ?");
                    $categories->execute(array($category_id));
                    $category = $categories->fetch();
                ?>
                <?php
                    if (isset($category['image']) && $category['image'] !== '') {
                        echo '<img src="admin/uploads/'.$category['image'].'" class="card-img-top" alt="...">';
                    } else{
                        echo '<img src="layouts/img/default.jpg" class="card-img-top" alt="...">';
                    }
                ?>
				<h2 class="text-center"><a href="index.php" class="logo"><?php echo $category['category_name'];?></a></h2>
				<ul class="list-unstyled components mb-5">
                    <?php 
                        $key_2=1;
                        $key_1=1;
                        foreach($lessons as $key=>$lesson){
                            if($key_2==$key)
                                {
                                    if($key_1==$key){
                                        $key=$key+1;
                                    } else{
                                        $key=$key+$key_1;
                                    }
                                }else{
                                    $key = $key+$key_2;
                                }
                            ?>
                                <li class="<?php 
                                            if($key==1){echo'active ';} 
                                            echo $key;
                                            ?>">
                                    <button value="<?php echo $key;?>"><?php echo $lesson['lesson_name'];?><span class="fas fa-play-circle mr-3"></span></button>
                                </li>
                            <?php
                            $key_1=$key;
                            if (isset($lesson['lesson_id']) && $lesson['lesson_id'] !== '') {
                                $getexam = $con->prepare("SELECT * FROM exams WHERE lesson_id = ?");
                                $getexam->execute(array($lesson['lesson_id']));
                                $count = $getexam->rowCount();
                                if ($count > 0) {
                                    $getexam = $getexam->fetch();
                                    $key_1=$key+1;
                                    echo'
                                    <li class="'.$key_1.'">
                                        <button value="'.$key_1.'"> '.$getexam['exam_name'].' <span class="fas fa-question-circle mr-3"></span></button>
                                    </li>
                                    ';
                                }
                            }
                            if (isset($lesson['pdf']) && $lesson['pdf'] !== '') {
                                if(isset($key_1)&&$key_1==$key)
                                {
                                    $key_2=$key+1;
                                }else{
                                    $key_2=$key+2;
                                }
                                echo '
                                <li class="'. $key_2.'">
                                    <button value="'.$key_2.'"> رابط شرح <span class="fas fa-file-pdf mr-3"></span></button>
                                </li>
                                ';
                            }
                        }
                    ?>
				</ul>
			</div>
		</nav>
		<!-- Page Content  -->
		<div id="content">
            <section class="header">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a href="index.php"><img src="layouts/img/logo_2.png" class="pl-2" width="160"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                        <ul class="navbar-nav mr-auto mt-2 mt-lg-0 text-center">
                            <li class="nav-item " style="margin-bottom: 9px;">
                                <a class="nav-link_cust" href="logout.php">تسجيل الخروج</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link_cust" href="account.php"> الحساب الشخصى</a>
                            </li>
                            <li class="nav-item" >
                                <a class="nav-link_cust" href="contact_us.php">تواصل معنا</a>
                            </li>
                            <li class="nav-item" >
                                <a class="nav-link_cust" href="activities.php"> المنشورات</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link_cust" href="posts.php">المقالات</a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link_cust active_link_cust" href="main.php">الرئيسية <span class="sr-only">(current)</span></a>
                            </li>
                        </ul>
                    </div>
                    <button id="sidebarCollapse"><i class="fa fa-bars"></i></button>
                </nav>
            </section>
			<section class="section7">
				<div class="container content">
                <?php 
                        $key_2=1;
                        $key_1=1;
                        foreach($lessons as $key=>$lesson){
                            if($key_2==$key)
                                {
                                    if($key_1==$key){
                                        $key=$key+1;
                                    } else{
                                        $key=$key+$key_1;
                                    }
                                }else{
                                    $key = $key+$key_2;
                                } ?> 
                                <div class="video <?php echo $key; ?> <?php if($key > 1){echo'hidden_val';} ?>" data-index="<?php echo $key; ?>">
                                <?php
                            $stmt = $con->prepare("SELECT 
                                                    answer.mark  
                                                FROM 
                                                    answer
                                                INNER JOIN 
                                                    exams 
                                                ON 
                                                    exams.exam_id = answer.exam_id
                                                where 
                                                    exams.lesson_id = ?
                                                ");
                        $stmt->execute(array($lesson['lesson_id']));
                        $mark = $stmt->fetch();
                            if ($lesson['Approve'] > 0 || $mark['mark'] > 5){
                                ?>                            
                                    <div class="card text-right">
                                    <?php echo $lesson['video'];?>							
                                        <div class="card-body">
                                            <h2><?php echo $lesson['lesson_name'];?></h2>
                                            <p class="card-text"><?php echo $lesson['lesson_description'];?></p>
                                        </div>
                                    </div>
                            <?php } else {
                                echo '
                                <div class="alert alert-warning alert-dismissible fade show text-center" style="font-size:20px;margin-top:50px;" role="alert">
                                هذا الدرس غير متوفر الا عند اداء الامتحان المخصص له 
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                                ';
                            }
                            echo '</div>';
                            $key_1=$key;
                            if (isset($lesson['lesson_id']) && $lesson['lesson_id'] !== '') {
                                $getexam = $con->prepare("SELECT * FROM exams WHERE lesson_id = ?");
                                $getexam->execute(array($lesson['lesson_id']));
                                $count = $getexam->rowCount();
                                if ($count > 0) {
                                    $getexam = $getexam->fetch();
                                    $key_1=$key+1;
                                    echo'
                                    <div class="exam ' .$key_1. ' hidden_val" data-index="'.$key_1.'">
                                        <div class="card text-right">
                                            <img src="layouts/img/exam.jpg" class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <h2>'. $getexam['exam_name'].' </h2>
                                                <p class="card-text">'. $getexam['exam_desc'].'</p>
                                                <a href="exam.php?exam_id='.$getexam['exam_id'].'" class="btn brown">الذهاب للامتحان</a>
                                            </div>
                                        </div>
                                    </div>
                                    ';
                                }
                            }
                            if (isset($lesson['pdf']) && $lesson['pdf'] !== '') {
                                if(isset($key_1)&&$key_1==$key)
                                {
                                    $key_2=$key+1;
                                }else{
                                    $key_2=$key+2;
                                }
                                echo '
                                <div class="pdf '.$key_2.' hidden_val"  data-index="'.$key_2.'">
                                    <div class="card text-right">
                                        <div class="card-body">
                                            <h2>ورق الشرح</h2>
                                            <a href="'.$lesson['pdf'].'" class="btn brown">الحصول علي الورق</a>
                                        </div>
                                    </div>
                                </div>
                                ';
                            }
                            ?><?php
                        }
                    ?>
                    <input type="text" class="index" style="display: none;" value="<?php echo $key_2; ?>">
				</div>
				<div class="content_control text-center">
					<div class="center_content">
						<button class="btn" id="next">التالى</button>
						<button class="btn" id="previous">السابق</button>
					</div>
				</div>
			</section>
		</div>
	</div>
<?php include $tpl . 'partial/footer.php'; ?>
</body>
<?php
include $tpl . 'scripts.php'; 
}else {
    ?>
    <body>
        <?php include $tpl . 'partial/header_2.php'; ?>
        <div class="container">
        <h2 class="text-center alert alert-danger" style="margin-top: 1.5rem;">لا يوجد دروس بهذا القسم بعد</h2>
            <div class="container"> <img src="layouts/img/opps.jpg" style="width: 100%; height:700px"></div>
        </div>
        <?php include $tpl . 'partial/footer.php'; ?>
    </body>
    <?php
}
}else {
    header('Location: reg.php');
    exit();
}
ob_end_flush();
?>