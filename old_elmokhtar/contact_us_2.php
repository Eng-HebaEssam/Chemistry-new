<?php
    ob_start();
    session_start();
    $pageTitle = 'contact';
    $Title = '';
    if (isset($_SESSION['user'])) {
		header('Location: main.php');
	}
    include 'inital.php';
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $username 	= filter_var($_POST['username'], FILTER_SANITIZE_STRING);
        $email 	= filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
        $comment 	= filter_var($_POST['comment'], FILTER_SANITIZE_STRING);
        if (! empty($comment)) {
            $stmt = $con->prepare("INSERT INTO 
                message(message, username, email, date)
                VALUES(:message, :username, :email, NOW())");
            $stmt->execute(array(
                'message'   => $comment,
                'username'  => $username,
                'email'     => $email
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
    <?php include $tpl . 'partial/header.php'; ?>
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
                            <div class="form-group">
                                <label>اسم المستخدم</label>
                                <i class="fa fa-user"></i>
                                <input type="text" class="form-control username" name="username">
                            </div>
                            <div class="form-group">
                                <label>البريد الالكتروني</label>
                                <i class="fas fa-at"></i>
                                <input type="email" class="form-control email" name="email">
                            </div>
                            <div class="form-group">
                                <label>الرساله</label>
                                <i class="fas fa-mobile-alt"></i>
                                <textarea name="comment" ></textarea>
                            </div>
                            <button type="submit" class="btn btn-orange">ارسال رسالة </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section2_6">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d638578.8656879187!2d30.85574933025395!3d30.795411189402884!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sar!2seg!4v1603370690272!5m2!1sar!2seg" width="100%" height="550" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>    
    </section>
    <?php 
        include $tpl . 'partial/footer.php'; 
        include $tpl . 'partial/login.php';
    ?>
</body>
<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
<?php 
include $tpl . 'scripts.php'; 
ob_end_flush();
?>