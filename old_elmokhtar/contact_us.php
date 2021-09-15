<?php
ob_start();
session_start();
$pageTitle = 'contact';
$Title = '';
include 'inital.php';
include "check_token.php";
$getUser = $con->prepare("SELECT * FROM members WHERE username = ?");
$getUser->execute(array($sessionUser));
$info = $getUser->fetch();
if (isset($_SESSION['user']) && $info['regstatus'] == 1) { 
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $comment 	= filter_var($_POST['comment'], FILTER_SANITIZE_STRING);
        $userid 	= $_SESSION['uid'];
        if (! empty($comment)) {
            $stmt = $con->prepare("INSERT INTO 
                message(message, user_id, date)
                VALUES(:message, :user_id, NOW())");
            $stmt->execute(array(
                'message' => $comment,
                'user_id' => $userid
            ));
            if ($stmt) {
                echo '<div class="alert alert-success text-center alert-dismissible fade show" role="alert" id="alert-message">
                        تم ارسال الرسالة بنجاح
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>';
            }
        } else {
            echo '<div class="alert alert-warning alert-dismissible text-center fade show" role="alert" id="alert-message">
                    يجب عليك اضافة الرساله
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>';
        }
    }
?>
<body>
<?php include $tpl . 'partial/header_2.php'; ?>
<section class="section2_5">
        <div class="container text-right">
            <h2 class="text-center"><span>تواصل</span> معنا</h2>
            <div class="row">
                <div class="col-lg-3 text-center order-lg-2" style="padding: 0;">
                    <img src="layouts/img/front-view-two-telephone-receivers-hanging-from-cord.jpg" class="img-edit">
                    <div class="main_con">
                        <label>كفر الشيخ</label>
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <div class="main_con">
                        <label> 01020320379</label>
                        <i class="fas fa-phone-square"></i>
                    </div>
                    <div class="main_con">
                        <label> redamokhtar7890@gmail</label>
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div class="main_con">
                        <label> Reda Mokhtar</label>
                        <i class="fab fa-facebook-square"></i>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="modal-body">
                        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
                            <div class="alert alert-primary text-right" role="alert">
                                <h4 class="alert-heading">Well done!</h4>
                                <p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
                                <hr>
                                <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
                            </div>
                            <div class="form-group">
                                <label>الرساله</label>
                                <i class="fas fa-comments"></i>
                                <textarea name="comment" ></textarea>
                            </div>
                            <button type="submit" class="btn btn-orange"> ارسال رسالة</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section2_6">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d638578.8656879187!2d30.85574933025395!3d30.795411189402884!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sar!2seg!4v1603370690272!5m2!1sar!2seg" width="100%" height="550" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>    
    </section>
<?php include $tpl . 'partial/footer.php'; ?>
<div id="scroll-top">
<i class="fa fa-angle-double-up fa-2x"></i>
</div>
</body>
<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
<?php
include $tpl . 'scripts.php'; 
}else {
    header('Location: reg.php');
    exit();
}
ob_end_flush();
?>