<?php
ob_start();
session_start();
$pageTitle = 'login';
$Title = 'login';
include 'connect.php';
include 'includes/functions/function.php';
if (isset($_SESSION['user'])) {
    header('Location: main.php');
}
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		if (isset($_POST['login'])) {
			$user = filter_var($_POST['username'],FILTER_SANITIZE_STRING);
			$pass = filter_var($_POST['password'],FILTER_SANITIZE_STRING);
			$hashedPass = sha1($pass);
			// Check If The User Exist In Database
			$stmt = $con->prepare("SELECT 
								        userid, username, password, only ,regstatus 
									FROM 
										members 
									WHERE 
										username = ? 
									AND 
										password = ?");
			$stmt->execute(array($user, $hashedPass));
			$get = $stmt->fetch();
			$count = $stmt->rowCount();
            // If Count > 0 This Mean The Database Contain Record About This Username
            if ($count > 0) {
                if ($get['regstatus'] == 1) {
                    $token = getToken(10);
                    $_SESSION['user'] = $user; // Register Session Name
                    $_SESSION['uid'] = $get['userid']; // Register User ID in Session
                    $_SESSION['token'] = $token;
                    // Update user token 
                    $result_token = $con->prepare("select count(*) as allcount from user_token where username = ? ");
                    $result_token->execute(array($user));
                    $row_token = $result_token->rowCount();
                    if ($row_token > 0) {
                        $mod = $con->prepare("update user_token set token = ? where username = ?");
                        $mod->execute(array($token, $user)); 
                    } else {
                        $ins = $con->prepare("insert into user_token(username,token) VALUES(:zuser, :ztoken)");
                        $ins->execute(array(
                            'zuser' 	=> $user,
                            'ztoken'		=> $token
                        ));
                    }
                    header('Location:main.php'); // Redirect To Dashboard Page
                    exit();
                } else {
                    $_SESSION['uid'] = $get['userid'];
                    header('Location:free.php'); // Redirect To Dashboard Page
                    exit();
                }
            } else {
                $formErrors = array();
                $formErrors[] = 'خطا بالتسجيل';
            }
		} 
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Elmokhtar Chemistry</title>
    <meta content="موقع الاستاذ رضا مختار لتعليم الكيمياء" name="description">
    <meta content=", master code رضا مختار " name="keywords">
    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/forms.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Almarai:wght@700;800&display=swap" rel="stylesheet">
</head>
<body>
<section class="sectionlogin p-0">
    <div class="row">
        <div class="col-md-8 order-2 order-md-1">
            <div class="main second_v">
                <h1> تسجيل <strong> الدخول</strong></h1>
                <h4>ليس لديك حساب ؟<a href="register.php">أنشاء حساب</a></h4>
                <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
                    <input type="text" class="username" name="username" placeholder="اسم المستخدم" required>
                    <input type="password" class="password" name="password" placeholder="كلمة المرور" required>
                    <button type="submit" name="login">تسجيل الدخول</button>
                </form>
                <div class="social">
                    <h3>تواصل معنا</h3>
                    <a href="https://www.facebook.com/" class="face">فيس بوك</a>
                    <a href="https://wa.me/+0201020320379" class="whats">واتس اب </a>
                </div>
            </div>
        </div>
        <div class="col-md-4 order-1 order-md-2">
            <div class="second">
                <a href="index.php"><img src="assets/img/logo_2.png" width="250px"></a>
            </div>
        </div>
    </div>
</section>
<a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
<!-- Vendor JS Files -->
<script src="assets/vendor/jquery/jquery.min.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Template Main JS File -->
<script src="assets/js/forms.js"></script>
</body>
</html>