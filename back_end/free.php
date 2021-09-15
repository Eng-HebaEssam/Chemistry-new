<?php
    ob_start();
    session_start();
    $pageTitle = 'free';
    $Title = 'free';
    if (isset($_SESSION['user'])) {
		header('Location: main.php');
	}
    include 'inital.php';
    include $tpl . 'header.php'; 
?>
  <main id="main">
    <section id="account" class="account mt-4">
      <div class="container">
        <div class="section-header mb-5">
            <h3 class="section-title">الفيديوهات المجانية</h3>
          </div>
      </div>
    </section>
    <section id="courses" class="courses">
      <div class="container" data-aos="fade-up">
        <div class="row mb-5" data-aos="zoom-in" data-aos-delay="100">
          <div class="col-lg-6 col-md-6 d-flex align-items-stretch">
            <div class="course-item">
              <img src="assets/img/free.jpg" class="img-fluid w-100" alt="...">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                </div>
                <h3><a href="https://www.youtube.com/watch?v=dXTtxUD4WkU">عدد الكم الرئيسى</a></h3>
                <p>رقم الكم لمدار إلكتروني رئيسي.</p>
                <div class="trainer d-flex justify-content-between align-items-center">
                  <div class="trainer-profile d-flex align-items-center">
                  <h4><a style="color:#fff" href="https://www.youtube.com/watch?v=dXTtxUD4WkU" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true">مشاهدة </a></h4>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 d-flex align-items-stretch">
            <div class="course-item">
              <img src="assets/img/free.jpg" class="img-fluid w-100" alt="...">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                </div>
                <h3><a href="https://youtu.be/oIs5CsYwHu8">حل أسئلة الالكانات</a></h3>
                <p>الجزء الأول من حل أسئلة الالكانات</p>
                <div class="trainer d-flex justify-content-between align-items-center">
                  <div class="trainer-profile d-flex align-items-center">
                  <h4><a style="color:#fff" href="https://youtu.be/oIs5CsYwHu8" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true">مشاهدة </a></h4>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row mb-5" data-aos="zoom-in" data-aos-delay="100"> 
          <div class="col-lg-6 col-md-6 d-flex align-items-stretch">
            <div class="course-item">
              <img src="assets/img/free.jpg" class="img-fluid w-100" alt="...">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                </div>
                <h3><a href="https://www.youtube.com/watch?v=V4LEwkJSD-M">الخواص المغناطيسية</a></h3>
                <p>تتألف جميع المواد من ذرات بها نواة تدور حولها الكترونات سالبة الشحنة فحركة هذه الشحنات السالبة، تُكون تيـارات كهربائية صغيـرة مما يتسبب في احــداث مجال ذري </p>
                <div class="trainer d-flex justify-content-between align-items-center">
                  <div class="trainer-profile d-flex align-items-center">
                  <h4><a style="color:#fff" href="https://www.youtube.com/watch?v=V4LEwkJSD-M" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true">مشاهدة </a></h4>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 d-flex align-items-stretch">
            <div class="course-item">
              <img src="assets/img/free.jpg" class="img-fluid w-100" alt="...">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                </div>
                <h3><a href="https://www.youtube.com/watch?v=v72RINgBFMQ">الفينولات</a></h3>
                <p>الفينولات هي صنف من المركبات الكيميائية العضوية تتألف بنيوياً من ارتباط مجموعة هيدروكسيل وظيفية بشكل مباشر مع هيدروكربون عطري. </p>
                <div class="trainer d-flex justify-content-between align-items-center">
                  <div class="trainer-profile d-flex align-items-center">
                  <h4><a style="color:#fff" href="https://www.youtube.com/watch?v=v72RINgBFMQ" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true">مشاهدة </a></h4>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <?php 
    include $tpl . 'footer.php'; 
    include $tpl . 'scripts.php'; 
    ob_end_flush();
?>