<header id="header"  class="fixed-top header-transparent" style="background: rgba(3,4,50, 0.9);">
    <div class="container-fluid">

      <div class="row justify-content-center">
        <div class="col-xl-11 d-flex align-items-center">
          <!-- <h1 class="logo mr-auto"><a href="index.html"></a></h1> -->
          <!-- Uncomment below if you prefer to use an image logo -->
          <nav class="nav-menu d-none d-lg-block">
            <ul class="ml-5 text-right">
              <li class="<?php if($pageTitle == 'main'){ echo 'active';}?>"><a href="main.php">الرئيسية</a></li>
              <li class="<?php if($pageTitle == 'posts2' || $pageTitle == 'postdetails'){ echo 'active';}?>"><a href="posts2.php">المقالات</a></li>
              <li class="<?php if($pageTitle == 'activities'){ echo 'active';}?>"><a href="activities.php">المنشورات</a></li>
              <li class="<?php if($pageTitle == 'events'){ echo 'active';}?>"><a href="events.php">المهام</a></li>
              <li class="<?php if($pageTitle == 'account'){ echo 'active';}?>"><a href="account.php">الحساب الشخصى</a></li>
              <li><a href="logout.php">تسجيل الخروج</a></li>
            </ul>
          </nav>
          <a href="main.php" class="logo mr-auto"><img src="assets/img/logo_2.png" alt="" class="img-fluid"></a><!-- .nav-menu -->
        </div>
      </div>

    </div>
  </header>