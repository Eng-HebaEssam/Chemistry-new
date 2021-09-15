<?php
ob_start();
session_start();
$pageTitle = 'account';
$Title = '';
include 'inital.php';
include "check_token.php";
$getUser = $con->prepare("SELECT * FROM members WHERE username = ?");
$getUser->execute(array($sessionUser));
$info = $getUser->fetch();
if (isset($_SESSION['user']) && $info['regstatus'] == 1) { 
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Get Variables From The Form
        $username 	= filter_var($_POST['username'],FILTER_SANITIZE_STRING);
        $email 	    = filter_var($_POST['email'],FILTER_SANITIZE_EMAIL);
        $phone      = filter_var($_POST['phone'],FILTER_SANITIZE_NUMBER_INT);
        $password   = filter_var($_POST['password'],FILTER_SANITIZE_STRING);
        $password2  = filter_var($_POST['password2'],FILTER_SANITIZE_STRING);
        $hashedPass = sha1($password);
        // Validate The Form
        $formErrors = array();
        if (strlen($username) < 4) {
            $formErrors[] = 'الاسم لا يجب ان يكون اقل من 4 احرف';
        }
        if (empty($username)) {
            $formErrors[] = 'الاسم لا يجب ان يكون فارغ';
        }
        if (isset($password)) {
            if (strlen($password) < 4) {$formErrors[] = 'كلمة المرور يجب ان تكون اكبر من 4 ارقام';}
        }
        if (isset($password) && isset($password2)) {
            if (empty($password)) {$formErrors[] = ' كلمة المرور لا يجب ان تكون فارغة ';}
            if (sha1($password) !== sha1($password2)) {$formErrors[] = 'كلمة المرور غير متطابقة';}
        }
        // Loop Into Errors Array And Echo It
        foreach($formErrors as $error) {
            echo '<div class="alert alert-danger alert-dismissible text-center fade show" role="alert" id="alert-message">
                    ' . $error . '
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>';
        }
        // Check If There's No Error Proceed The Update Operation
        if (empty($formErrors)) {
            // Update The Database With This Info
            $stmt = $con->prepare("UPDATE members SET username = ?, email = ?, phone = ?, password = ? WHERE userid = ?");
            $stmt->execute(array($username, $email, $phone, $hashedPass, $_SESSION['uid'] ));
            // Echo Success Message
            echo '<div class="alert alert-success alert-dismissible text-center fade show" role="alert" id="alert-message">
                    تم تعديل البيانات بنجاح
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>';
        }
    }
?>
<body>
    <?php include $tpl . 'partial/header_2.php'; ?>
    <section class="section2_5 section5">
        <div class="container text-right">
            <h2 class="text-center"><span>بيانات</span> الحساب</h2>
            <div class="modal-body">
                <?php
                    if (isset($info['avatar']) && $info['avatar'] !== '') {
                        echo '<img src="layouts/img/'.$info['avatar'].'" class="img-thumbnail">';
                    } else{
                        echo '<img src="layouts/img/img.png" class="img-thumbnail">';
                    }
                ?>
                <form>
                    <div class="form-group">
                        <label>اسم المستخدم</label>
                        <i class="fa fa-user"></i>
                        <input type="text" class="form-control" placeholder="<?php echo $info['username'];?>" readonly>
                    </div>
                    <div class="form-group">
                        <label>البريد الالكتروني</label>
                        <i class="fas fa-at"></i>
                        <input type="text" class="form-control" placeholder="<?php echo $info['email'];?>" readonly>
                    </div>
                    <div class="form-group">
                        <label> رقم الهاتف</label>
                        <i class="fas fa-mobile-alt"></i>
                        <input type="text" class="form-control" placeholder="<?php echo $info['phone'];?> " readonly>
                    </div>
                    <button type="button" class="btn btn-orange" data-toggle="modal" data-target="#results">نتائج الامتحانات</button>
                    <button type="button" class="btn btn-orange" data-toggle="modal" data-target="#sign">تعديل الحساب</button>
                </form>
            </div>
        </div>
    </section>
    <section class="sign text-right">
        <div class="modal fade " id="results" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="ModalLabel"> نتائج الامتحانات</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <div class="modal-body">
                    <div class="table-responsive">
                            <table class="text-center table table-bordered">
                                <tr class="bg-dark text-light" style="font-weight: bold;">
                                    <td> نتيجة الامتحان</td>
                                    <td> تاريخ اداء الامتحان</td>
                                    <td >اسم الامتحان</td>
                                </tr>
                                    <?php
                                    $formErrors = array(); 
                                    $stmt = $con->prepare("SELECT 
                                                                answer.*, exams.exam_name AS exam_name  
                                                            FROM 
                                                                answer
                                                            INNER JOIN 
                                                                exams 
                                                            ON 
                                                                exams.exam_id = answer.exam_id 
                                                            WHERE 
                                                                user_id = ? 
                                                            ORDER BY date desc");
                                    $stmt->execute(array($_SESSION['uid']));
                                    $exams = $stmt->fetchAll();
                                    foreach ($exams as $exam) {  ?>
                                    <tr>
                                        <td ><?php echo $exam['mark'] ?></td>
                                        <td><?php echo $exam['date'] ?></td>
                                        <td><?php echo $exam['exam_name'] ?></td>
                                    </tr>
                                <?php }?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="sign text-right">
        <div class="modal fade" id="sign" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="ModalLabel">تعديل الحساب</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <div class="modal-body">
                        <form class="sign" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
                            <div class="form-group">
                                <label>اسم المستخدم</label>
                                <i class="fa fa-user"></i>
                                <input type="text" class="form-control username" name="username" autocomplete="off" placeholder="<?php echo $info['username'];?>" required>
                            </div>
                            <div class="form-group">
                                <label>البريد الالكتروني</label>
                                <i class="fas fa-at"></i>
                                <input type="email" class="form-control email" name="email" placeholder="<?php echo $info['email'];?>" >
                            </div>
                            <div class="form-group">
                                <label> رقم الهاتف</label>
                                <i class="fas fa-mobile-alt"></i>
                                <input type="text" class="form-control phone" name="phone" placeholder="<?php echo $info['phone'];?> ">
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-1"><i class="far fa-eye show-pass"></i></div>
                                    <div class="col-md-11">
                                        <label>كلمة المرور</label>
                                        <i class="fas fa-unlock-alt"></i>
                                        <input type="password" class="form-control showpass password" name="password" autocomplete="password" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-1"><i class="far fa-eye show-pass-2"></i></div>
                                    <div class="col-md-11">
                                        <label>اعادة كلمة المرور</label>
                                        <i class="fa fa-redo-alt"></i>
                                        <input type="password" class="form-control showpass-2 password2" name="password2" autocomplete="password" required>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-orange">تعديل الحساب</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php include $tpl . 'partial/footer.php'; ?>
<div id="scroll-top">
<i class="fa fa-chevron-up fa-2x"></i>
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