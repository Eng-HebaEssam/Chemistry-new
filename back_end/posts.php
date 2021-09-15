<?php
    ob_start();
    if(!isset($_SESSION)){session_start();} 
    $pageTitle = 'posts';
    $Title = 'posts';
    if (isset($_SESSION['user'])) {
		header('Location: main.php');
	}
    include 'inital.php';
    include $tpl . 'header.php';   
?>

<main id="main" dir="rtl">
    <section id="departments" class="departments">
        <div class="container">
  
          <div class="section-header mb-5">
            <h3 class="section-title">المقالات </h3>
          </div>
  
          <div class="row">
            <div class="col-lg-3">
              <ul class="nav nav-tabs flex-column">
                <li class="nav-item">
                  <a class="nav-link active show" data-toggle="tab" href="#tab-1">الخواص المغناطيسية للمواد</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#tab-2">الفينولات</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#tab-3">عدد الكم الرئيسى</a>
                </li>
              </ul>
            </div>
            <div class="col-lg-9 mt-4 mt-lg-0">
              <div class="tab-content">
                <div class="tab-pane active show" id="tab-1">
                  <div class="row">
                    <div class="col-lg-8 details order-2 order-lg-1">
                      <h3>الخواص المغناطيسية للمواد</h3>
                      <p>
                        تتألف جميع المواد من ذرات بها نواة موجبة الشحنة تدور حولها الكترونات سالبة الشحنة فحركة هذه الشحنات السالبة، تُكون تيـارات كهربائية صغيـرة مما يتسبب في احــداث مجال ذري له عزم مغناطيسي ذري.تتالف المواد على اختلاف انواعها سواء كانت سئلة او صلبة او غازية
                      </p>
                    </div>
                    <div class="col-lg-2 text-center order-1 order-lg-2">
                      <a href="log.php"><button>المزيد</button></a>
                      </div>
                  </div>
                  <div class="col-lg-8 text-center order-1 order-lg-2">
                    <img src="assets/img/material.png" alt="" class="img-fluid">
                  </div>
                </div>
                <div class="tab-pane" id="tab-2">
                  <div class="row">
                    <div class="col-lg-8 details order-2 order-lg-1">
                      <h3>الفينولات</h3>
                      <p>الفينولات هي صنف من المركبات الكيميائية العضوية تتألف بنيوياً من ارتباط مجموعة هيدروكسيل وظيفية بشكل مباشر مع هيدروكربون عطري. ينسب اسم الفينولات إلى أبسط هذه المركبات وهو الفينول C6H5OH. يمكن أن تكون الفينولات بسيطة، كما يمكن أن تكون متعددة حسب عدد وحدات الفينول في الجزيء.</p>
                    </div>
                    <div class="col-lg-2 text-center order-1 order-lg-2">
                      <a href="log.php"><button>المزيد</button></a>
                      </div>
                </div>
                <div class="col-lg-8 text-center order-1 order-lg-2">
                  <img src="assets/img/Phenol_chemical_structure.png" alt="" class="img-fluid">
                </div>
                </div>
                <div class="tab-pane" id="tab-3">
                  <div class="row">
                    <div class="col-lg-8 details order-2 order-lg-1">
                      <h3>عدد الكم الرئيسى</h3>
                      <p> رقم الكم لمدار إلكتروني رئيسي. وهو يمثل بصفة عامة طاقة المدار ومدى بعده عن النواة. وكل منها له طاقة كمومية محددة تسمى مستوى طاقة.

                        عرفت مستويات الطاقة في الذرة من توزيع خطوط طيفها . فقد درست أطياف العناصر أواخر القرن التاسع عشر وأوائل القرن العشرين وعرف العلماء منها أن لكل عنصر طيفه الخاص الذي يدل عليه وحده. وأطلق العلماء على مجموعات خطوط الطيف تسميات استخدموا لها حروف مثل K و L و M وغيرها للتمييز بينها . ثم جاء القرن العشرين وبدأ العلماء يفهمون البنية الذرية وما يحكمها من سلوك كمومي في اكتساب الطاقة وإصدارها </p>
                    </div>
                    <div class="col-lg-2 text-center order-1 order-lg-2">
                    <a href="log.php"><button>المزيد</button></a>
                    </div>
                  </div>
                  <div class="col-lg-8 text-center order-1 order-lg-2">
                    <img src="assets/img/kam.png" alt="" class="img-fluid">
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