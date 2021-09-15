<?php
    ob_start();
    session_start();
    $pageTitle = 'register';
    $Title = '';
    if (isset($_SESSION['user'])) {
		header('Location: main.php');
	}
    include 'inital.php';
?>
<body>
    <?php include $tpl . 'partial/header.php'; ?>
    <section class="section_reg">
        <div class="container">
            <h2 class="text-center alert alert-primary" style="margin-top: 1.5rem;">لقد قمت بتسجيل الدخول <strong>في انتظار التفعيل</strong></h2>
            <img src="layouts/img/14048.jpg" style="width: 100%;">
        </div>
    </section>
    <?php 
        include $tpl . 'partial/footer.php';
        include $tpl . 'partial/login.php';
    ?>
</body>
<?php 
include $tpl . 'scripts.php'; 
ob_end_flush();
?>