<?php
ob_start();
session_start();
$pageTitle = 'main';
$Title = '';
include 'inital.php';
include "check_token.php";
$getUser = $con->prepare("SELECT * FROM members WHERE username = ?");
$getUser->execute(array($sessionUser));
$info = $getUser->fetch();
if (isset($_SESSION['user']) && $info['regstatus'] == 1) { ?>
<body>
<?php include $tpl . 'partial/header_2.php'; ?>
<section class="section_reg">
        <div class="container">
            <h2 class="text-center alert alert-warning" style="margin-top: 1.5rem;">للاسف لقد انتهي وقت الامتحان</h2>
            <img src="layouts/img/timeout.jpg" style="width: 100%;">
        </div>
    </section>
    <?php 
        include $tpl . 'partial/footer.php';
    ?>
</body>
<?php
include $tpl . 'scripts.php'; 
}else {
    header('Location: reg.php');
    exit();
}
ob_end_flush();
?>