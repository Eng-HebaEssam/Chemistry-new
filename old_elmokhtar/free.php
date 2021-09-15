<?php
    ob_start();
    session_start();
    $pageTitle = 'free';
    $Title = '';
    if (isset($_SESSION['user'])) {
		header('Location: main.php');
	}
    include 'inital.php';
?>
<body>
    <?php include $tpl . 'partial/header.php'; ?>
    <section class="section2_6">
        <div class="container">
            <h2><span class="strong">فيديوهات</span> مجانية</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <img src="layouts/img/smalllog2.jpg" alt="">
                        <i class="fab fa-youtube" data-toggle="modal" data-target="#exampleModal"></i>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                    <img src="layouts/img/smalllog2.jpg" alt="">
                        <i class="fab fa-youtube" data-toggle="modal" data-target="#exampleModal_2"></i>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                    <img src="layouts/img/smalllog2.jpg" alt="">
                        <i class="fab fa-youtube" data-toggle="modal" data-target="#exampleModal_3"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <iframe width="100%" height="550" src="https://www.youtube.com/embed/V4LEwkJSD-M" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModal_2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <iframe width="100%" height="550" src="https://www.youtube.com/embed/dXTtxUD4WkU" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>            
                </div>
        </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModal_3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <iframe width="100%" height="550" src="https://www.youtube.com/embed/v72RINgBFMQ" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>            
                </div>
        </div>
        </div>
    </div>
    <?php 
        include $tpl . 'partial/footer.php';
        include $tpl . 'partial/login.php';
    ?>
    <div id="scroll-top">
        <i class="fa fa-angle-double-up fa-2x"></i>
    </div>
</body>
<?php 
include $tpl . 'scripts.php'; 
ob_end_flush();
?>