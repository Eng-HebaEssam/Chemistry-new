<?php
    ob_start();
    session_start();
    $pageTitle = 'Homepage';
    $Title = '';
    if (isset($_SESSION['user'])) {
		header('Location: main.php');
	}
    include 'inital.php';
?>
<body>
    <header>
        <div class="main_img">
            <nav class="navbar navbar-expand-lg navbar-light" id="navbar">
                <a href="index.php"><img src="layouts/img/logo_2.png" class="pl-2" width="160"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse pr-4" id="navbarTogglerDemo01">
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0 text-center">
                        <li class="nav-item">
                            <a class="nav-link_cust" data-toggle="modal" data-target="#login">تسجيل الدخول</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link_cust" href="register.php">انشاء حساب</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link_cust" href="contact_us_2.php">تواصل معنا</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link_cust" href="posts_2.php"> المقالات</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link_cust" href="free.php">الكورسات المجانية</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link_cust active_link_cust" href="index.php">الرئيسية <span class="sr-only">(current)</span></a>
                        </li>
                    </ul>
                </div>
            </nav>
            <div class="content ">
                <h1>المختار في<span class="strong"> الكيمياء </span></h1>
                <span class="arrow"><i class="fa fa-angle-double-down" ></i></span>
            </div>
        </div>
        
    </header>
    <section class="features">
            <div class="container text-center">
                <h2>اهم <span class="strong">المميزات</span>  &#9672; </h2>
                <div class="row">
                    <div class="col-md-6 col-lg-3 bottom">
                        <i class="fas fa-chart-line fa-4x rounded-circle"></i>
                        <h3>أحصل علي مهارات جديدة</h3>
                        <p>أحصل على مهارات جديده من خلال التعلم بشكل صحيح ومحاوله التطبيق الجيد على المعلومات الجديدة</p>    
                    </div>
                    
                    <div class="col-md-6 col-lg-3">
                        <i class="fas fa-comments fa-4x rounded-circle"></i>
                        <h3>تواصل مع معلمك</h3>
                        <p>سوف يتم تحديد اوقات في الاسبوع للرد على الاسئلة والاستفسارات من خلال تطبيقات الفصول الأفتراضية </p>    
                    </div>
                    
                    <div class="col-md-6 col-lg-3">
                        <i class="fas fa-users fa-4x rounded-circle"></i>
                        <h3>الأطلاع علي أهم الأخبار </h3>
                        <p>لا تنسى الدخول الى قسم المنشورات والاطلاع على اهم المنشورات والاخبار الدراسية وأجددها</p>    
                    </div>
                    
                    <div class="col-md-6 col-lg-3 bottom">
                        <i class="fas fa-pen-square fa-4x rounded-circle"></i>
                        <h3>تدرب علي جميع الدروس </h3>
                        <p>  سوف تجد بعد كل درس جزء تطبيقي عليه وسيتم تسجيل النتيجه في ملفك الشخصى للاطلااع عليها لاحقا </p>    
                    </div>
                </div>
            </div>
            <hr>
        </section>
    <section class="section3 section2_6">
            <h2>أخر <span class="strong">الفيديوهات</span> &#9672; </h2>
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card">
                            <img src="layouts/img/smalllog2.jpg" alt="">
                            <i class="fab fa-youtube" data-toggle="modal" data-target="#exampleModal"></i>
                            <h3 class="text-center">الخواص المغناطيسية</h3>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <img src="layouts/img/smalllog2.jpg" alt="">
                            <i class="fab fa-youtube" data-toggle="modal" data-target="#exampleModal_2"></i>
                            <h3 class="text-center">عدد الكم الرئيسي</h3>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <img src="layouts/img/smalllog2.jpg" alt="">
                            <i class="fab fa-youtube" data-toggle="modal" data-target="#exampleModal_3"></i>
                            <h3 class="text-center">الفينولات</h3>
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
    <section>
        <div id="services" class="cards-2">
            <div class="container">
            <h2>المقالات  &#9672;</h2>
                <div class="row">
                        <div class="col-lg-4">
                            <!-- Card -->
                            <div class="card">
                                <div class="card-image">
                                    <img class="img-fluid" width="100%" src="layouts/img/b96a3bf6-d2a0-4fc9-ba3b-7a8dd309ceef.jfif" alt="alternative">
                                </div>
                                <div class="card-body">
                                    <h3 class="card-title">الخواص المغناطيسية للمواد</h3>
                                    <p class="text-right">تتألف جميع المواد من ذرات بها نواة موجبة الشحنة تدور حولها الكترونات سالبة الشحنة فحركة هذه الشحنات السالبة، تُكون تيـارات كهربائية صغيـرة مما يتسبب في احــداث مجال ذري له عزم مغناطيسي ذري.تتالف المواد على اختلاف انواعها سواء كانت سئلة او صلبة او غازية</p>
                                    <div>
                                        <a href="opps.php">.... اكمل القراءة</a>
                                    </div> 
                                </div>
                            </div>
                            <!-- end of card -->
                        </div>
                        <div class="col-lg-4">
                            <!-- Card -->
                            <div class="card">
                                <div class="card-image">
                                    <img class="img-fluid" width="100%" src="layouts/img/kam.jfif" alt="alternative">
                                </div>
                                <div class="card-body">
                                    <h3 class="card-title">أعداد الكم</h3>
                                    <p class="text-right"> نتجت الأعداد الثلاثة الأولى من الحل الرياضي لمعادلة شرودنجر لذرة الهيدروجين، وهي تبين موقع مدار الإلكترون في الذرة واتجاه المدار وإتجاه مغناطيسيته. تلك الأعداد الكمومية ترمز إلى حالات يمكن ان يتخذها الإلكترون في الذرة، تسمى مستويات طاقة. وعندما يقفز الإلكترون من مستوى طاقة عالي إلى مستوى</p>
                                    <div>
                                    <a href="opps.php">.... اكمل القراءة</a>
                                    </div> 
                                </div>
                            </div>
                            <!-- end of card -->
                        </div>
                        <div class="col-lg-4">
                            <!-- Card -->
                            <div class="card">
                                <div class="card-image">
                                    <img class="img-fluid" width="100%" src="layouts/img/phenol.png" alt="alternative">
                                </div>
                                <div class="card-body">
                                    <h3 class="card-title">الفينولات</h3>
                                    <p class="text-right"> هي صنف من المركبات الكيميائية العضوية تتألف بنيوياً من ارتباط مجموعة هيدروكسيل وظيفية بشكل مباشر مع هيدروكربون عطري. ينسب اسم الفينولات إلى أبسط هذه المركبات وهو الفينول C6H5OH. يمكن أن تكون الفينولات بسيطة، كما يمكن أن تكون متعددة حسب عدد وحدات الفينول في الجزيء.</p>
                                    <div>
                                    <a href="opps.php">.... اكمل القراءة</a>
                                    </div> 
                                </div>
                            </div>
                            <!-- end of card -->
                        </div>
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div> <!-- end of cards-2 -->
    </section>
    <section class="information">
            <div class="alert alert-info alert-dismissible fade show text-right" role="alert">
                <button type="button" class="close pull-left" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h3>تعليمات تسجيل الدخول</h3>
                <ul class="list-unstyled">
                    <li>عند <strong>انشاء حساب </strong> يجب عليك مراجعة البيانات المرسلة جيدا لانها سيترتب عليها ظهور صفحات خاص بك</li>
                    <li>يجب عليك بعد انشاء حساب <strong>تسجيل الدخول</strong></li>
                    <li>لا يمكن الدخول من اكثر من متصفح في نفس الوقت</li>
                </ul>
                <h3>تعليمات التصفح داخل المنصة</h3>
                <ul class="list-unstyled">
                    <li>عند الدخول للقسم الخاص بك يوجد قسم المحاضرات وتنقسم الي قسمين</li>
                    <li>
                        <ol class="list-unstyled">
                            <li>دروس شرح غير مرتبطة بامتحان تسطيع تصفحها مباشرة --- </li>
                            <li>دروس شرح مرتبطة بامتحان يجب عليك اداء الامتحان اولا لتسطيع تصفحها --- </li>
                        </ol>
                    </li>
                    <li>عند اضاة اى تعليق داخل المنصة سيتم مراجعتة قبل نشرة</li>
                    <li>عند وجود اى اعلانات من ادارة المنصة سيتم ادراجها بقسم المنشورات لاذلك احرص على متابعته دائما</li>
                </ul>
                <p>المنصة قيد التطوير لذلك عند وجود اى مشاكل او استفسار سواء فى المنصة بشكل عام او التسجيل بشكل خاص يرجى التواصل معنا </p>
            </div>
        </section>
    <section class="section4">
        <h2>فيديو <span class="strong">تعريفى</span> &#9672; </h2>
        <div class="row">
        <iframe width="1000" height="500" src="https://www.youtube.com/embed/1wf1NHqSd60" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>        </div>
    </section>
    <?php include $tpl . 'partial/footer.php'; ?>
    <div id="scroll-top">
        <i class="fa fa-angle-double-up fa-2x"></i>
    </div>
    <?php include $tpl . 'partial/login.php'; ?>
</body>
<script>
    
</script>
<?php 
include $tpl . 'scripts.php'; 
ob_end_flush();
?>