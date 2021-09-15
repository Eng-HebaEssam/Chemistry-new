<section class="header">
    <nav class="navbar navbar-expand-lg navbar-light">
    <a href="index.php"><img src="layouts/img/logo_2.png" class="pl-2" width="160"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0 text-center">
                <li class="nav-item " style="margin-bottom: 9px;">
                    <a class="nav-link_cust" href="logout.php">تسجيل الخروج</a>
                </li>
                <li class="nav-item <?php if($pageTitle == 'account') {echo 'active';} ?>" style="margin-bottom: 9px;">
                    <a class="nav-link_cust <?php if($pageTitle == 'account') {echo 'active_link_cust';} ?>" href="account.php"> الحساب الشخصى</a>
                </li>
                <li class="nav-item <?php if($pageTitle == 'contact') {echo 'active';} ?>" style="margin-bottom: 9px;">
                    <a class="nav-link_cust <?php if($pageTitle == 'contact') {echo 'active_link_cust';} ?>" href="contact_us.php">تواصل معنا</a>
                </li>
                <li class="nav-item <?php if($pageTitle == 'activities') {echo 'active';} ?>" >
                    <a class="nav-link_cust <?php if($pageTitle == 'activities') {echo 'active_link_cust';} ?>" href="activities.php"> المنشورات</a>
                </li>
                <li class="nav-item <?php if($pageTitle == 'posts') {echo 'active';} ?>" style="margin-bottom: 9px;">
                    <a class="nav-link_cust <?php if($pageTitle == 'posts') {echo 'active_link_cust';} ?>" href="posts.php">المقالات</a>
                </li>
                <li class="nav-item <?php if($pageTitle == 'main' || $pageTitle == 'course_content') {echo 'active';} ?>" style="margin-bottom: 9px;">
                    <a class="nav-link_cust <?php if($pageTitle == 'main' || $pageTitle == 'course_content') {echo 'active_link_cust';} ?>" href="main.php">الرئيسية <span class="sr-only">(current)</span></a>
                </li>
            </ul>
        </div>
    </nav>
</section>