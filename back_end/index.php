<?php
    ob_start();
    if(!isset($_SESSION)){session_start();} 
    $pageTitle = 'Homepage';
    $Title = 'Homepage';
    if (isset($_SESSION['user'])) {
		header('Location: main.php');
	}
    include 'inital.php';
?>
<body dir="rtl">
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-transparent">
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-xl-11 d-flex align-items-center">
          <!-- <h1 class="logo mr-auto"><a href="index.html"></a></h1> -->
          <!-- Uncomment below if you prefer to use an image logo -->
          <nav class="nav-menu d-none d-lg-block">
            <ul class="ml-5">
              <li class="<?php if($pageTitle == 'Homepage'){ echo 'active';}?>"><a href="index.php">الرئيسية</a></li>
              <li class="<?php if($pageTitle == 'free'){ echo 'active';}?>"><a href="free.php">الفيديوهات المجانية</a></li>
              <li class="<?php if($pageTitle == 'posts'){ echo 'active';}?>"><a href="posts.php">المقالات</a></li>
              <li class="<?php if($pageTitle == 'contact'){ echo 'active';}?>"><a href="#contact">تواصل معنا</a></li>
              <li class="<?php if($pageTitle == 'register'){ echo 'active';}?>"><a href="register.php">أنشاء حساب</a></li>
              <li class="<?php if($pageTitle == 'login'){ echo 'active';}?>"><a href="login.php">تسجيل الدخول</a></li>
            </ul>
          </nav>
          <a href="index.php" class="logo mr-auto"><img src="assets/img/logo_2.png" alt="" class="img-fluid"></a><!-- .nav-menu -->
        </div>
      </div>
    </div>
  </header>
  <!-- ======= Intro Section ======= -->
  <section id="intro" dir="ltr">
    <div class="intro-container">
      <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">
        <ol class="carousel-indicators"></ol>
        <div class="carousel-inner" role="listbox">
          <div class="carousel-item active" style="background-image: url(assets/img/intro-carousel/1.jpg)">
            <div class="carousel-container">
              <div class="container">
                <h2 class="animate__animated animate__fadeInDown">المختار فى الكيمياء</h2>
                <p class="animate__animated animate__fadeInUp">الكيمياء ببساطة</p>
                <a href="#featured-services" class="btn-get-started scrollto animate__animated animate__fadeInUp">أبدأ الان</a>
              </div>
            </div>
          </div>
          <div class="carousel-item" style="background-image: url(assets/img/intro-carousel/2.jpg)">
            <div class="carousel-container">
              <div class="container">
                <h2 class="animate__animated animate__fadeInDown">المختار فى الكيمياء</h2>
                <p class="animate__animated animate__fadeInUp">كل ما هو جديد لدينا </p>
                <a href="#featured-services" class="btn-get-started scrollto animate__animated animate__fadeInUp">أبدأ الان</a>
              </div>
            </div>
          </div>
          <div class="carousel-item" style="background-image: url(assets/img/intro-carousel/3.jpg)">
            <div class="carousel-container">
              <div class="container">
                <h2 class="animate__animated animate__fadeInDown">المختار فى الكيمياء </h2>
                <p class="animate__animated animate__fadeInUp">شرح وافى وامتحانات شامله </p>
                <a href="#featured-services" class="btn-get-started scrollto animate__animated animate__fadeInUp">ابدأ الان</a>
              </div>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
  </section>
  <main id="main" class="m-0">
    <section id="featured-services">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 box">
            <i class="ion-ios-bookmarks-outline"></i>
            <h4 class="title"><a href="log.php">تدريبات على الدروس</a></h4>
            <p class="description">سوف تجد بعد كل درس جزء تطبيقي عليه وسيتم تسجيل النتيجه في ملفك الشخصى</p>
          </div>
          <div class="col-lg-4 box box-bg">
            <i class="ion-ios-stopwatch-outline"></i>
            <h4 class="title"><a href="log.php">امتحانات جزئية وشاملة</a></h4>
            <p class="description">الكثير من الامتحانات الشاملة والجزئيه وراء كل درس وكل وحدة</p>
          </div>
          <div class="col-lg-4 box">
            <i class="ion-ios-heart-outline"></i>
            <h4 class="title"><a href="log.php">تواصل مع مدرسك</a></h4>
            <p class="description">يمكنك التواصل معنا عن طريق الرسائل او خلال البث المباشر  </p>
          </div>
        </div>
      </div>
    </section>
    <section id="about">
      <div class="container" data-aos="fade-up">
        <header class="section-header">
          <h3>نبذه تعريفية</h3>
          <p>المختار منصة فى الكيمياء تهدف الى تعليم الكيمياء ببساطة وبأستخدام أحدث أساليب التعليم الحديثة</p>
        </header>
        <div class="row about-cols">
          <div class="col-md-4 d-flex" data-aos="fade-up" data-aos-delay="100">
            <div class="about-col">
              <div class="img">
                <img src="assets/img/about-mission.jpg" alt="" class="img-fluid">
                <div class="icon"><i class="ion-ios-speedometer-outline"></i></div>
              </div>
              <h2 class="title">مهمتنا</h2>
              <p>
                اعداد الطالب اعدادا جيدا لفهم المادة جيدا مع التدريب على اجتياز الأمتحان بجدارة
              </p>
            </div>
          </div>
          <div class="col-md-4 d-flex" data-aos="fade-up" data-aos-delay="200">
            <div class="about-col">
              <div class="img">
                <img src="assets/img/about-plan.jpg" alt="" class="img-fluid">
                <div class="icon"><i class="ion-ios-list-outline"></i></div>
              </div>
              <h2 class="title">خطتنا</h2>
              <p>
                شرح مبسط ووافى امتحانات شاملة وجزيئه الكثير من الدروس والبث المباشر 
              </p>
            </div>
          </div>
          <div class="col-md-4 d-flex" data-aos="fade-up" data-aos-delay="300">
            <div class="about-col">
              <div class="img">
                <img src="assets/img/about-vision.jpg" alt="" class="img-fluid">
                <div class="icon"><i class="ion-ios-eye-outline"></i></div>
              </div>
              <h2 class="title">رؤيتنا</h2>
              <p>
                اجتياز امتحان الكيمياء لا يتطلب الحفظ بقدر الفهم الجيد منصتنا تهدف الى جعل الطالب  يفهم المادة فهما جيدا مع السرعة فى اداء امتحانات التابلت
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="portfolio">
      <div class="container" data-aos="fade-up">
        <header class="section-header">
          <h3 class="section-title">أخر الأعمال</h3>
        </header>
        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
          <div  class="col-lg-6 col-md-6 portfolio-item filter-free mb-5">
            <div class="portfolio-wrap">
              <figure>
                <img src="assets/img/portfolio/video.jpg" width="100%" height="100%" alt="">
                <a href="free.php" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>
              <div class="portfolio-info">
                <h4><a href="free.php">الفيديوهات المجانية</a></h4>
                <p>
                  الدرس ليس عبارة عن فيديو فقط بل هو عبارة عن موضوع له مرفقات من فيديو وورق شرح وامتحانات جزئية</p>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 portfolio-item filter-act mb-5">
            <div class="portfolio-wrap">
              <figure>
                <img src="assets/img/portfolio/act.jpg" width="100%" height="100%" alt="">
                <a href="log.php" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>
              <div class="portfolio-info">
                <h4><a href="log.php">المنشورات</a></h4>
                <p>عند الدخول للمنصة يوجد الكثير من المنشورات التى تخبرك بكل جديد عن المنصة</p>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 portfolio-item filter-event mb-5">
            <div class="portfolio-wrap">
              <figure>
                <img src="assets/img/portfolio/events.jpg" width="100%" height="100%" alt="">
                <a href="log.php" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>
              <div class="portfolio-info">
                <h4><a href="log.php">المهام</a></h4>
                <p>
                  عند الدخول للمنصة يوجد الكثير من المهمات التي يجب الاطلاع عليها</p>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 portfolio-item filter-posts">
            <div class="portfolio-wrap">
              <figure>
                <img src="assets/img/portfolio/post.jpg" width="100%" height="100%" alt="">
                <a href="posts.php" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>
              <div class="portfolio-info">
                <h4><a href="posts.php">المقالات</a></h4>
                <p>
                  يوجد الكثير من المقالات التي يمكنك الاطلاع عليها ومناقشة معلمك واصدقائك فيها</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="testimonials" class="section-bg" dir="ltr">
      <div class="container" data-aos="fade-up">
        <header class="section-header">
          <h3>أراء طلابنا</h3>
        </header>
        <div class="owl-carousel testimonials-carousel">
          <div class="testimonial-item">
            <img src="assets/img/download.png" class="testimonial-img" alt="">
            <h3>Rawda Fawzy</h3>
            <p>
              <img src="assets/img/quote-sign-left.png" class="quote-sign-left" alt="">
              الله ينور يا سير ربنا يعينك ويجازيك خير 
              <img src="assets/img/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
          </div>
          <div class="testimonial-item">
            <img src="assets/img/1.png" class="testimonial-img" alt="">
            <h3>عمر رضا</h3>
            <p>
              <img src="assets/img/quote-sign-left.png" class="quote-sign-left" alt="">
              شرح مميز ورائع جدا يا احلى سير
              <img src="assets/img/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
          </div>
          <div class="testimonial-item">
            <img src="assets/img/download.png" class="testimonial-img" alt="">
            <h3>خواطر الأيمان</h3>
            <p>
              <img src="assets/img/quote-sign-left.png" class="quote-sign-left" alt="">
              بارك الله فيكم ومجوداتكم  وجعله فى ميزان حسناتكم
              <img src="assets/img/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
          </div>
          <div class="testimonial-item">
            <img src="assets/img/1.png" class="testimonial-img" alt="">
            <h3>Ahmed Mohaned</h3>
            <p>
              <img src="assets/img/quote-sign-left.png" class="quote-sign-left" alt="">
              شرحك جميل يااحلى سير
              <img src="assets/img/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
          </div>
          <div class="testimonial-item">
            <img src="assets/img/1.png" class="testimonial-img" alt="">
            <h3>معاذ صبري عطيه</h3>
            <p>
              <img src="assets/img/quote-sign-left.png" class="quote-sign-left" alt="">
                ممتاز جدا والله العظيم
              <img src="assets/img/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
          </div>
        </div>
      </div>
    </section>
    <section id="team">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h3>فريق العمل </h3>
          <p>نحن فى خدمتكم دائما </p>
        </div>
        <div class="row">
          <div class="col-lg-6 col-md-6">
            <div class="member" data-aos="fade-up" data-aos-delay="100">
              <img src="assets/img/elmokhtar.png" height="100%" width="100%" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>الأستاذ رضا مختار</h4>
                  <span>مدرس الكيمياء</span>
                  <div class="social">
                    <a href="https://wa.me/+0201020320379 "><i class="fa fa-whatsapp"></i></a>
                  <a href="https://www.facebook.com/profile.php?id=100004984097804"><i class="fa fa-facebook"></i></a>
                  <a href="https://www.youtube.com/channel/UCVlfE4b9bIjfGXsNGGlKs2w"><i class="fa fa-youtube"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6">
            <div class="member" data-aos="fade-up" data-aos-delay="200">
              <img src="assets/img/master.png" height="100%" width="100%" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>MasterCode</h4>
                  <span>التصميم والأعمال البرمجية</span>
                  <div class="social">
                    <a href="https://api.whatsapp.com/send?phone=01066343874"><i class="fa fa-whatsapp "></i></a>
                    <a href="https://www.facebook.com/MasterC0de"><i class="fa fa-facebook "></i></a>
                    <a href="https://www.linkedin.com/mynetwork/"><i class="fa fa-linkedin "></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="contact" class="section-bg">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h3>تواصل معنا </h3>
          <p>يشرفنا تواصلكم ويسعدنا خدمتكم </p>
        </div>
        <div class="row contact-info">
          <div class="col-md-4">
            <div class="contact-address">
              <i class="ion-ios-location-outline"></i>
              <h3>العنوان</h3>
              <address>كفر الشيخ</address>
            </div>
          </div>
          <div class="col-md-4">
            <div class="contact-phone">
              <i class="ion-ios-telephone-outline"></i>
              <h3>رقم الهاتف</h3>
              <p><a href="tel:01020320379">01020320379</a></p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="contact-email">
              <i class="ion-ios-email-outline"></i>
              <h3>البريد الألكترونى</h3>
              <p><a href="mailto:redamokhtar7890@gmail">redamokhtar7890@gmail </a></p>
            </div>
          </div>
        </div>
        <?php
                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    $username 	= filter_var($_POST['username'], FILTER_SANITIZE_STRING);
                    $email 	    = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
                    $comment 	= filter_var($_POST['message'], FILTER_SANITIZE_STRING);
                    if (! empty($comment)) {
                        $stmt = $con->prepare("INSERT INTO 
                            message(message, username, email, date)
                            VALUES(:message, :username, :email, NOW())");
                        $stmt->execute(array(
                            'message'   => $comment,
                            'username'  => $username,
                            'email'     => $email
                        ));
                        if ($stmt) {
                            echo '<div class="alert alert-success text-center alert-dismissible fade show" role="alert" id="alert-message">
                                    تم ارسال الرسالة بنجاح
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>';
                        }
                    } else {
                        echo '<div class="alert alert-warning alert-dismissible text-center fade show" role="alert" id="alert-message">
                                يجب عليك اضافة الرساله
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>';
                    }
                }
            ?>
        <div class="form">
          <form action="#contact" method="POST" role="form" class="php-form-email">
              <div class="form-group">
                <input type="text" name="username" class="form-control" id="name" placeholder="الأسم" data-rule="minlen:4" data-msg="يجب ان يزيد عن 4 حروف" />
                <div class="validate"></div>
              </div>
              <div class="form-group ">
                <input type="email" class="form-control" name="email" id="email" placeholder="البريد الألكترونى" data-rule="email" data-msg="يرجى أضافه بريد ألكترونى صالح" />
                <div class="validate"></div>
              </div>
            <div class="form-group">
              <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="يرجى كتابة الرسالة" placeholder="الرسالة"></textarea>
              <div class="validate"></div>
            </div>
            <div class="text-center"><button type="submit">أرسال</button></div>
          </form>
        </div>
      </div>
    </section>
  </main>
<?php 
    include $tpl . 'footer.php'; 
    include $tpl . 'scripts.php'; 
    ob_end_flush();
?>