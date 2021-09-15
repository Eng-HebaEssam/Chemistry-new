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
        if (isset($_POST['exam'])) {
            $i=0;
            $exam_id = isset($_GET['exam_id']) && is_numeric($_GET['exam_id']) ? intval($_GET['exam_id']) : 0;
            $stmt = $con->prepare("SELECT * FROM question where exam_id = ?");
            $stmt->execute(array($exam_id));
            $exams = $stmt->fetchAll();
            ?>
            <body>
                <?php include $tpl . 'partial/header_2.php'; ?>
                <section class="section2_6">
                    <h2>اجابات <span class="strong">الامتحان</span></h2>
                    <div class="container text-right">
                        <div class="row">
                            <div class="col-md-9">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr class="bg-dark text-light" style="font-weight: bold;">
                                            <th scope="col">اجابتك</th>
                                            <th scope="col">السؤال</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($exams as $key=>$exam ) { 
                                            if(isset($_POST[$exam['id']])){
                                                $ques = $_POST[$exam['id']];
                                            } else {
                                                $ques = 'لا يوجد اجابة';
                                            }
                                            if(isset($_POST[$exam['right_answer']])){
                                                $answer = $_POST[$exam['right_answer']];
                                            } else {
                                                $answer = '666';
                                            }
                                            if($ques == $answer){$i++;}?>
                                                <tr>
                                                    <td class="
                                                    <?php 
                                                        if($ques == $answer){echo'bg-success text-light';}
                                                        else{echo'bg-danger text-light';}
                                                    ?>"
                                                    ><?php echo $ques;?></td>
                                                    <td><?php echo $exam['ques'];?></td>
                                                </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-md-3 table-bordered text-center" style="margin-bottom: 10px;">
                                <h3 style="margin-top: 10px;
                                        color: #030432;
                                        font-size: 30px;
                                        font-weight: bold;">: لقد حصلت علي</h3>
                                <div class="main_res table-bordered" style="margin-bottom: 15px;">
                                    <h4 style="border-bottom: 2px solid;
                                                margin: 14px;
                                                padding-bottom: 8px;"><span><?php echo $i;?></h4>
                                    <h4><span><?php echo $key+1;?></span></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <?php include $tpl . 'partial/footer.php'; ?>
            </body>
            <?php
            include $tpl . 'scripts.php'; 
            $stmt = $con->prepare("SELECT user_id FROM answer WHERE user_id = ?");
            $stmt->execute(array($_SESSION['uid']));
            $count = $stmt->rowCount();
            if ($count ==  0) { 
               $stmt = $con->prepare("INSERT INTO 
                                     answer(exam_id, mark, user_id, date)
                                 VALUES(:exam_id, :mark, :user_id, now())");
             $stmt->execute(array(
                 'exam_id'   => $exam_id,
                 'mark'      => $i,
                 'user_id'   => $_SESSION['uid']
             ));
             }
        } else {
            ?>
            <body>
                <?php include $tpl . 'partial/header_2.php'; ?>
                <div class="container">
                <h2 class="text-center alert alert-danger" style="margin-top: 1.5rem;">لا يوجد نتيجة للامتحان بعد</h2>
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
?>