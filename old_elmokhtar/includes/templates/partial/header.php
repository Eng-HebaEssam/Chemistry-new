<section class="header">
    <nav class="navbar navbar-expand-lg navbar-light">
    <a href="index.php"><img src="layouts/img/logo_2.png" class="pl-2" width="160"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0 text-center">
                <li class="nav-item">
                    <a class="nav-link_cust" data-toggle="modal" data-target="#login">تسجيل الدخول</a>
                </li>
                <li class="nav-item <?php if($pageTitle == 'register') {echo 'active';} ?> ">
                    <a class="nav-link_cust <?php if($pageTitle == 'register') {echo 'active_link_cust';} ?>" href="register.php">انشاء حساب</a>
                </li>
                <li class="nav-item <?php if($pageTitle == 'contact') {echo 'active';} ?>">
                    <a class="nav-link_cust <?php if($pageTitle == 'contact') {echo 'active_link_cust';} ?>" href="contact_us_2.php">تواصل معنا</a>
                </li>
                <li class="nav-item <?php if($pageTitle == 'post') {echo 'active';} ?>">
                    <a class="nav-link_cust <?php if($pageTitle == 'post') {echo 'active_link_cust';} ?>" href="posts_2.php"> المقالات</a>
                </li>
                <li class="nav-item <?php if($pageTitle == 'free') {echo 'active';} ?>">
                    <a class="nav-link_cust <?php if($pageTitle == 'free') {echo 'active_link_cust';} ?>" href="free.php">الكورسات المجانية</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link_cust" href="index.php">الرئيسية <span class="sr-only">(current)</span></a>
                </li>
            </ul>
        </div>
    </nav>
</section>