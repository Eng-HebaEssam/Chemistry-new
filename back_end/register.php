<?php
    ob_start();
    session_start();
    $pageTitle = 'register';
    $Title = 'register';
    if (isset($_SESSION['user'])) {
		header('Location: main.php');
	}
    include 'connect.php';
    include 'includes/functions/function.php';
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		if (isset($_POST['sign'])) {
            $formErrors = array();
            $token = getToken(10);
			$username 	= filter_var($_POST['username'],FILTER_SANITIZE_STRING);
			$password 	= filter_var($_POST['password'],FILTER_SANITIZE_STRING);
            $email      = filter_var($_POST['email'],FILTER_SANITIZE_EMAIL);
            $phone      = filter_var($_POST['phone'],FILTER_SANITIZE_NUMBER_INT);
            $class      = $_POST['parent'];
			if (isset($username)) {
				if (strlen($username) < 4) {$formErrors[] = 'اسم المستخدم يجب ان يكون اكبر من 4 احرف';}
			}
            if (isset($password)) {
				if (strlen($password) < 4) {$formErrors[] = 'كلمة المرور يجب ان تكون اكبر من 4 ارقام';}
			}
            if (isset($phone)) {
				if (strlen($phone) < 8) {$formErrors[] = 'رقم الهاتف يجب ان يكون اكبر من 8 ارقام';}
			}
			// Check If There's No Error Proceed The User Add
			if (empty($formErrors)) {
				// Check If User Exist in Database
				$check = checkItem("username", "members", $username);
				if ($check == 1) {
					$formErrors[] = 'هذا المستخدم موجود عليك استخدام اسم مستخدم اخر';
				} else {
					// Insert Userinfo In Database
					$stmt = $con->prepare("INSERT INTO 
								members(username, password, phone, groupid, email, regstatus, date)
										VALUES(:zuser, :zpass, :zphone, :zclass, :zemail, 0, now())");
					$stmt->execute(array(
						'zuser' => $username,
						'zpass' => sha1($password),
						'zphone' => $phone,
                        'zclass' => $class,
                        'zemail' => $email
					));
                    // Update user token 
                    $ins = $con->prepare("insert into user_token(username,token) VALUES(:zuser, :ztoken)");
                    $ins->execute(array(
                        'zuser' 	=> $username,
                        'ztoken'	=> $token
                    ));
					// Echo Success Message
                    $succesMsg = 'لقد تم تسجيل البيانات قم بتسجيل الدخول';
                    header('Location: reg.php');
                    exit();
                    
				}
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
                <?php 
                    if (!empty($formErrors)) {
                        foreach ($formErrors as $error) {
                            echo '<div class="msg error alert alert-danger" style="margin-top:30px">' . $error . '</div>';
                        }
                    }
                    if (isset($succesMsg)) {
                        echo '<div class="msg success alert alert-success" style="margin-top:30px">' . $succesMsg . '</div>';
                    }
                ?>
                <h1> انشاء حساب</h1>
                <h4> لديك حساب ؟<a href="login.php">تسجيل الدخول</a></h4>
                <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
                <input type="text" class="username" name="username" placeholder="اسم المستخدم" required>
                    <input type="email" class="email" name="email" placeholder="البريد الالكتروني">
                    <input type="number" class="phone" name="phone" placeholder="رقم الهاتف">
                    <input type="password" class="password" name="password" placeholder="كلمة المرور" required>
                    <select name="parent" class="form-control form-control-lg show_btn" required>
                        <option selected disabled>الصف الدراسي</option>
                        <option Value="1">الاول الاعدادى</option>
                        <option Value="2">الثانى الاعدادى</option>
                        <option Value="3">الثالث الاعدادى</option>
                        <option Value="4">الاول الثانوى</option>
                        <option value="5">الثانى الثانوى</option>
                        <option value="6">الثالث الثانوى</option>
                    </select>
                    <button type="submit" name="sign">تسجيل الدخول</button>
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
<?php 
ob_end_flush();
?>