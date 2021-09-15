<header id="header" class="fixed-top header-transparent" style="background: rgba(3,4,50, 0.9);">
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-xl-11 d-flex align-items-center">
          <!-- <h1 class="logo mr-auto"><a href="index.html"></a></h1> -->
          <!-- Uncomment below if you prefer to use an image logo -->
          <nav class="nav-menu d-none d-lg-block">
            <ul class="ml-5 text-right">
              <li class="<?php if($pageTitle == 'Homepage'){ echo 'active';}?>"><a href="index.php">الرئيسية</a></li>
              <li class="<?php if($pageTitle == 'free'){ echo 'active';}?>"><a href="free.php">الفيديوهات المجانية</a></li>
              <li class="<?php if($pageTitle == 'posts'){ echo 'active';}?>"><a href="posts.php">المقالات</a></li>
              <li class="<?php if($pageTitle == 'register'){ echo 'active';}?>"><a href="register.php">أنشاء حساب</a></li>
              <li class="<?php if($pageTitle == 'login'){ echo 'active';}?>"><a href="login.php">تسجيل الدخول</a></li>
            </ul>
          </nav>
          <a href="index.php" class="logo mr-auto"><img src="assets/img/logo_2.jpg" alt="" class="img-fluid"></a><!-- .nav-menu -->
        </div>
      </div>
    </div>
  </header>