<?php
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		if (isset($_POST['login'])) {
			$user = filter_var($_POST['username'],FILTER_SANITIZE_STRING);
			$pass = filter_var($_POST['password'],FILTER_SANITIZE_STRING);
			$hashedPass = sha1($pass);
			// Check If The User Exist In Database
			$stmt = $con->prepare("SELECT 
								        userid, username, password, regstatus 
									FROM 
										members 
									WHERE 
										username = ? 
									AND 
                                        password = ?
                                ");
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
                    header('Location:reg.php'); // Redirect To Dashboard Page
                    exit();
                }
            } else {
                $formErrors = array();
                $formErrors[] = 'خطا بالتسجيل';
            }
		} 
	}
?>
<section class="login text-right">
    <div class="modal fade" id="login" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="ModalLabel">تسجيل الدخول</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                <form class="login" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
                        <div class="form-group">
                            <label>اسم المستخدم</label>
                            <i class="fa fa-user"></i>
                            <input type="text" class="form-control username_login" name="username" autocomplete="off" required>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-1"><i class="far fa-eye show-pass"></i></div>
                                <div class="col-11">
                                    <label>كلمة المرور</label>
                                    <i class="fas fa-unlock-alt"></i>
                                    <input type="password" class="form-control showpass password_login" autocomplete="password" name="password" required>
                                </div>
                            </div>
                        </div>
                        <button type="submit" name="login" class="btn btn-orange">تسجيل الدخول</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>