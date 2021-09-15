<?php
    ob_start();
    session_start();
    $pageTitle = 'register';
    $Title = '';
    if (isset($_SESSION['user'])) {
		header('Location: main.php');
	}
    include 'inital.php';
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		if (isset($_POST['sign'])) {
            $formErrors = array();
            $token = getToken(10);
			$username 	= filter_var($_POST['username'],FILTER_SANITIZE_STRING);
			$password 	= filter_var($_POST['password'],FILTER_SANITIZE_STRING);
            $password2 	= filter_var($_POST['password2'],FILTER_SANITIZE_STRING);
            $email      = filter_var($_POST['email'],FILTER_SANITIZE_EMAIL);
            $phone      = filter_var($_POST['phone'],FILTER_SANITIZE_NUMBER_INT);
            $class      = $_POST['parent'];
			if (isset($username)) {
				if (strlen($username) < 4) {$formErrors[] = 'اسم المستخدم يجب ان يكون اكبر من 4 احرف';}
			}
            if (isset($password)) {
				if (strlen($password) < 4) {$formErrors[] = 'كلمة المرور يجب ان تكون اكبر من 4 ارقام';}
			}
			if (isset($password) && isset($password2)) {
				if (empty($password)) {$formErrors[] = ' كلمة المرور لا يجب ان تكون فارغة ';}
				if (sha1($password) !== sha1($password2)) {$formErrors[] = 'كلمة المرور غير متطابقة';}
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
<body>
    <?php include $tpl . 'partial/header.php'; ?>
    <section class="section2_5">
        <div class="container text-right">
            <h2 class="text-center"><span>انشاء</span> حساب</h2>
            <div class="the-errors text-center">
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
                    </div>
            <div class="row">
                <div class="col-lg-3 text-center order-lg-2">
                    <img src="layouts/img/img.png" class="img-thumbnail">
                    <h3 class="live-title">الاسم</h3>
                    <h4 class="live-email">user@domain.com</h4>
                </div>
                <div class="col-lg-9">
                    <div class="modal-body">
                    <form class="sign" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
                            <div class="form-group">
                                <label>اسم المستخدم</label>
                                <i class="fa fa-user"></i>
                                <input type="text" class="form-control live username" name="username" autocomplete="off" data-class=".live-title" required>
                            </div>
                            <div class="form-group">
                                <label>البريد الالكتروني</label>
                                <i class="fas fa-at"></i>
                                <input type="email" class="form-control live email" data-class=".live-email" name="email">
                            </div>
                            <div class="form-group">
                                <label> رقم الهاتف</label>
                                <i class="fas fa-mobile-alt"></i>
                                <input type="tel" class="form-control phone" value="<?php if (isset($phone)) {echo $phone;}?>" name="phone" >
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6 order-2">
                                    <div class="row">
                                        <div class="col-2"><i class="far fa-eye show-pass"></i></div>
                                        <div class="col-10">
                                            <label>كلمة المرور</label>
                                            <i class="fas fa-unlock-alt"></i>
                                            <input type="password" class="form-control showpass password" name="password" autocomplete="password" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <div class="row">
                                        <div class="col-2"><i class="far fa-eye show-pass-2"></i></div>
                                        <div class="col-10">
                                            <label>اعادة كلمة المرور</label>
                                            <i class="fa fa-redo-alt"></i>
                                            <input type="password" class="form-control showpass-2 password2" name="password2" autocomplete="password" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6 order-2">
                                    <label>الشعبة</label>
                                    <i class="fas fa-user-friends"></i>
                                    <select class="custom-select main_select">
                                        <option selected>اختر</option>
                                        <option value="1" data-show="1">الاعدادية</option>
                                        <option value="2" data-show="2">الثانوية</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6 order-1">
                                    <label>الصف</label>
                                    <i class="fas fa-layer-group"></i>
                                    <select class="custom-select">
                                        <option selected>اختر</option>
                                    </select>
                                    <select class="custom-select" name="parent" style="display: none;" id="1">
                                        <option selected>اختر</option>
                                        <option value="1">الاول</option>
                                        <option value="2">الثاني</option>
                                        <option value="3">الثالث</option>
                                    </select>
                                    <select class="custom-select" name="parent" style="display: none;" id="2">
                                        <option selected>اختر</option>
                                        <option value="4">الاول</option>
                                        <option value="5">الثاني</option>
                                        <option value="6">الثالث</option>
                                    </select>
                                </div>
                            </div>
                            <button type="submit" name="sign" class="btn btn-orange">انشاء حساب</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
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