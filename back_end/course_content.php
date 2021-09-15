<?php
	ob_start();
	session_start();
    $pageTitle = 'main';
    $Title = 'coursecontent';
	include 'inital.php';
    include "check_token.php";
    $getUser = $con->prepare("SELECT * FROM members WHERE username = ?");
    $getUser->execute(array($sessionUser));
    $info = $getUser->fetch();
    if (isset($_SESSION['user']) && $info['regstatus'] == 1) {
        include $tpl . 'header2.php'; 
        $username  = $info['username'];
        $groupid  = $info['groupid'];
        $category_id = isset($_GET['catygory_id']) && is_numeric($_GET['catygory_id']) ? intval($_GET['catygory_id']) : 0;
        $getlessons = $con->prepare("SELECT * FROM lessons WHERE cat_id = ?");
        $getlessons->execute(array($category_id));
        $count = $getlessons->rowCount();
        if ($count > 0) {
            $lessons = $getlessons->fetchAll();
            $categories = $con->prepare("SELECT category_name, image, category_description FROM category where category_id = ?");
            $categories->execute(array($category_id));
            $category = $categories->fetch();
?>
<main id="main" dir="rtl">
    <section id="account" class="account mt-4">
        <div class="container">
            <div class="section-header mb-5">
                <h3 class="section-title">الكورسات</h3>
            </div>
        </div>
    </section>
    <section id="section11" class="section11">
        <div class="container">
            <div class="row">
                <div class="card text-center">
                    <div class="card-header">
                        <h2><?php echo $category['category_name'];?></h2>
                        <p><?php echo $category['category_description'];?></p>
                    </div>
                    <div class="card-body">
                        <section id="services" class="services">
                            <div class="row row-eq-height">
                                <?php foreach($lessons as $index => $lesson){ ?>
                                <div class="col-lg-4 d-block mb-4">
                                    <div class="icon-box">
                                        <div class="icon">
                                            <?php 
                                            $vars = array("icofont-instrument", "icofont-mathematical-alt-2", "icofont-math", "icofont-mathematical-alt-1");
                                            $key = array_rand($vars);
                                            ?>
                                            <i class="<?php echo $vars[$key]; ?>"></i>
                                        </div>
                                        <div class="main">
                                            <h4><?php echo $lesson['lesson_name']; ?></h4>
                                            <p>
                                            <?php
                                                $stringCut = substr( $lesson['lesson_description'], 0, 100);
                                                $endPoint = strrpos($stringCut, ' ');
                                                $string = $endPoint? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
                                                echo $string ;?>
                                            </p>
                                        </div>
                                        <div class="second mt-4">
                                            <?php 
                                                $getexam = $con->prepare("SELECT exam_id FROM exams WHERE lesson_id = ? AND type = 1 ");
                                                $getexam->execute(array($lesson['lesson_id']));
                                                $getexam = $getexam->fetch();
                                                if(! empty($getexam)){
                                                    echo '<a href="exam.php?exam_id='.$getexam['exam_id'].'" >الامتحان</a>';
                                                }
                                            ?>
                                            <a href="lesson.php?lesson_id=<?php echo $lesson['lesson_id']; ?>" >الدرس</a>
                                        </div>
                                    </div>
                                </div>
                                <?php } ?>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php 
        include $tpl . 'footer2.php'; 
        include $tpl . 'scripts.php'; 
        } else { 
            header('Location: none.php');
            exit();
        }
}else {
    header('Location: index.php');
    exit();
}
ob_end_flush();
?>