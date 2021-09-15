<?php
    ob_start();
    session_start();
    $pageTitle = 'post';
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
            <h2 class="text-center alert alert-warning" style="margin-top: 1.5rem;">يجب عليك <strong>تسجيل الدخول</strong> للاطلاع علي المقال</h2>
            <div class="container"> <img src="layouts/img/opps.jpg" style="width: 100%; height:700px"></div>
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