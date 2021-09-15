<?php
ob_start(); // Output Buffering Start
session_start();
$pageTitle = 'Exams';
if (isset($_SESSION['username'])) {
    include 'inital.php';
    include 'includes/templates/header.php';
    include 'includes/templates/side.php';
    ?>
            <div class="main-panel ">
                <div class="content-wrapper ">
                    <div class="page-header ">
                        <h3 class="page-title ">
                            <span class="page-title-icon bg-gradient-primary text-white mr-2 ">
                                <i class="mdi mdi-home "></i>
                            </span>&nbsp; الأمتحانات 
                        </h3>
                        <button style="margin-right:150px; color:darkblue;font-size:15px " type="button " class="btn btn-outline-info btn-sm" data-toggle="modal" data-target="#add">أضافة أمتحان</button>
                    </div>
                    <?php 
                        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                            if (isset($_POST['add'])) {
                                $name 	     = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
                                if(isset($_POST['category'])){
                                    $category  = filter_var($_POST['category'], FILTER_SANITIZE_NUMBER_INT);
                                } else{
                                    $category = '';
                                }
                                if(isset($_POST['lesson'])){
                                    $lesson  = filter_var($_POST['lesson'], FILTER_SANITIZE_NUMBER_INT);
                                } else{
                                    $lesson = '';
                                }
                                $link        = filter_var($_POST['link'],FILTER_SANITIZE_STRING);
                                if (isset($name)) {
                                    if (strlen($name) < 4) {$formErrors[] = 'يجب وضع اسم للدرس ';}
                                }
                                // Check If There's No Error Proceed The User Add
                                if (empty($formErrors)) {
                                        $stmt = $con->prepare("INSERT INTO 
                                                    exams(exam_name, exam_date, categ_id, member_id, lesson_id, link)
                                                    VALUES(:exam_name, now(), :categ_id, :member_id, :lesson_id, :link)");
                                        $stmt->execute(array(
                                            'exam_name'  => $name,
                                            'categ_id'   => $category,
                                            'member_id'  => $_SESSION['ID'],
                                            'lesson_id'  => $lesson,
                                            'link'       => $link
                                        ));
                                        if ($stmt) {
                                            echo '<div class="alert alert-success text-center alert-dismissible fade show" role="alert" id="alert-message">
                                                    تم اضافة الامتحان بنجاح
                                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>';
                                        }
                                } else{
                                    foreach($formErrors as $formError){
                                        echo '<div class="alert alert-danger text-center alert-dismissible fade show" role="alert" id="alert-message">
                                                    '.$formError.'
                                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>';
                                    }
                                }
                            }
                            if (isset($_POST['remove'])) {
                                $examid = filter_var($_POST['examid'], FILTER_SANITIZE_NUMBER_INT);
                                $check  = checkItem('exam_id', 'exams', $examid);
                                // If There's Such ID Show The Form
                                if ($check > 0) {
                                    $stmt = $con->prepare("DELETE FROM exams WHERE exam_id = :exam_id");
                                    $stmt->bindParam(":exam_id", $examid);
                                    $stmt->execute();
                                    if ($stmt) {
                                        echo '<div class="alert alert-success text-center alert-dismissible fade show" role="alert" id="alert-message">
                                                تم حذف الامتحان بنجاح
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>';
                                    }
                                } else {
                                    echo '<div class="alert alert-danger text-center alert-dismissible fade show" role="alert" id="alert-message">
                                            هذا الامتحان غير موجود 
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>';
                                }
                            }
                            if (isset($_POST['edit'])) {
                                $name 	     = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
                                $category    = filter_var($_POST['category'], FILTER_SANITIZE_NUMBER_INT);
                                $examid      = filter_var($_POST['examid'], FILTER_SANITIZE_NUMBER_INT);
                                if(isset($_POST['lesson'])){
                                    $lesson  = filter_var($_POST['lesson'], FILTER_SANITIZE_NUMBER_INT);
                                } else{
                                    $lesson = '';
                                }
                                $link        = filter_var($_POST['link'],FILTER_SANITIZE_STRING);
                                if (isset($name)) {
                                    if (strlen($name) < 4) {$formErrors[] = 'يجب وضع اسم للدرس ';}
                                }
                                // Check If There's No Error Proceed The User Add
                                if (empty($formErrors)) {
                                        $stmt = $con->prepare("INSERT INTO 
                                                    exams(exam_name, exam_date, categ_id, member_id, lesson_id, link)
                                                    VALUES(:exam_name, now(), :categ_id, :member_id, :lesson_id, :link)");
                                        $stmt->execute(array(
                                            'exam_name'  => $name,
                                            'categ_id'   => $category,
                                            'member_id'  => $_SESSION['ID'],
                                            'lesson_id'  => $lesson,
                                            'link'       => $link
                                        ));
                                        $stmt = $con->prepare("UPDATE exams 
                                                                SET exam_name = ?, categ_id = ?, lesson_id = ?, link = ?
                                                                WHERE exam_id = ?");
                                        $stmt->execute(array($name, $category, $lesson , $link, $examid));
                                        if ($stmt) {
                                            echo '<div class="alert alert-success text-center alert-dismissible fade show" role="alert" id="alert-message">
                                                    تم تعديل الامتحان بنجاح
                                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>';
                                        }
                                } else{
                                    foreach($formErrors as $formError){
                                        echo '<div class="alert alert-danger text-center alert-dismissible fade show" role="alert" id="alert-message">
                                                    '.$formError.'
                                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>';
                                    }
                                }
                            }
                        }
                        $stmt = $con->prepare("SELECT 
                                                exams.*,category.category_name AS category_name
                                            FROM 
                                                exams
                                            INNER JOIN 
                                                category 
                                            ON 
                                                category.category_id = exams.categ_id 
                                            ORDER BY 
                                                exam_id DESC");
                        $stmt->execute();
                        $rows = $stmt->fetchAll();
                        if (! empty($rows)) {
                    ?>
                    <div class="row ">
                        <div class="col-12 grid-margin ">
                            <div class="card ">
                                <div class="card-body ">
                                    <h4 class="card-title ">أخر الأمتحانات</h4>
                                    <div class="table-responsive ">
                                        <table class="table "id="datatableid">
                                            <thead>
                                                <tr>
                                                    <th>رقم الأمتحان</th>
                                                    <th>اسم الأمتحان </th>
                                                    <th>تاريخ الامتحان</th>
                                                    <th> القسم</th>
                                                    <th>امتحان شامل</th>
                                                    <th>لوحة التحكم</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php
							            foreach($rows as $row) {?>
                                            <tr>
                                                <td> <?php echo $row['exam_id'];?></td>
                                                <td><?php echo $row['exam_name'];?></td>
                                                <td> <?php echo $row['exam_date'];?></td>
                                                <td> <?php echo $row['category_name'];?></td>
                                                <td> 
                                                    <?php 
                                                        if($row['link']==''){echo'<label class="badge badge-gradient-warning">ليس امتحان شامل</label>';}
                                                        else {echo'<label class="badge badge-gradient-success"> امتحان شامل</label>';}
                                                    ?>
                                                </td>
                                                <td>
                                                    <button type="button " class="btn btn-outline-warning btn-sm main_view"
                                                    value="<?php echo $row['exam_id'];?>" 
                                                    >اظهار النتائج</button>
                                                    <button type="button " class="btn btn-outline-success btn-sm edit_exam" data-toggle="modal" data-target="#edit">تعديل</button>
                                                    <input type="hidden" value="<?php echo $row['exam_id'];?>" id="exam">
                                                    <button type="button " class="btn btn-outline-danger btn-sm exam_delete"data-toggle="modal" data-target="#remove">حذف</button>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="remove" tabindex="-1" aria-labelledby="removeLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header bg-danger">
                                    <h2 class="text-light">حذف الامتحان </h2>
                                </div>
                                <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
                                    <div class="modal-body">
                                        <h3 class="text-center">هل تريد حذف هذا الامتحان</h3>
                                    </div>
                                    <div class="modal-footer">
                                        <input type="hidden" value="" name="examid" id="examid">
                                        <button type="submit" class="btn btn-danger" name="remove">حذف</button>
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">الغاء</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="edit" tabindex="-1" aria-labelledby="editLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header bg-success">
                                    <h2 class="text-light">تعديل الامتحان</h2>
                                </div>
                                <form class="float-right" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
                                    <div class="modal-body">
                                            <div class="form-group ">
                                                <h4>عنوان الامتحان</h4>
                                                <input type="text" name="name" placeholder="اسم الامتحان" class="form-control" required>
                                            </div>
                                            <div class="form-group ">
                                                <h4>القسم</h4>
                                                <select name="category" class="form-control" required>
                                                    <option disabled selected>...</option>
                                                    <?php
                                                        $allCats = getAllFrom("*", "category", "where parent = 0", "", "ordering", "asc");
                                                        foreach ($allCats as $cat) {
                                                            echo "<option disabled >" . $cat['category_name'] . "</option>";
                                                            $childCats = getAllFrom("*", "category", "where parent = {$cat['category_id']}", "", "ordering", "asc");
                                                            foreach ($childCats as $child) {
                                                                echo "<option value='" . $child['category_id'] . "'>--- " . $child['category_name'] . "</option>";
                                                            }
                                                        }
                                                    ?>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <h4>الدرس المرتبط به</h4>
                                                <select name="lesson" class="form-control" >
                                                    <option disabled selected>...</option>
                                                    <?php
                                                        $allMembers = getAllFrom("*", "lessons", "", "", "lesson_id");
                                                        foreach ($allMembers as $lesson) {
                                                            echo "<option value='" . $lesson['lesson_id'] . "'>" . $lesson['lesson_name'] . "</option>";
                                                        }
                                                    ?>
                                                </select>
                                            </div>
                                            <div class="form-group ">
                                                <h4>لنك الامتحان</h4>
                                                <textarea class="form-control" name="link" style="height: 100px;"></textarea>
                                            </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit " class="btn btn-success" name="edit">تعديل امتحان</button> 
                                        <input type="hidden" value="" name="examid" id="exam_2">
                                        <button type="button " class="btn btn-secondary" data-dismiss="modal">الغاء</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="mark" tabindex="-1" aria-labelledby="removeLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header bg-warning">
                                    <h2 class="text-light">جميع نتائج الامتحان</h2>
                                </div>
                                    <div class="modal-body">
                                        <div class="table-responsive" id="divToPrint">
                                            <table class="text-center table table-bordered main_td">
                                            </table>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-warning" value="print" onclick="PrintDiv();">اطبع الاجابات</button>
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">الغاء</button>
                                    </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
                <div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="addlabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header bg-info">
                                    <h2 class="text-light">اضافة امتحان </h2>
                                </div>
                                <form class="float-right" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
                                    <div class="modal-body">
                                            <div class="form-group ">
                                                <h4>عنوان الامتحان</h4>
                                                <input type="text" name="name" placeholder="اسم الامتحان" class="form-control" required>
                                            </div>
                                            <div class="form-group ">
                                                <h4>القسم</h4>
                                                <select name="category" class="form-control" required>
                                                    <option disabled selected>...</option>
                                                    <?php
                                                        $allCats = getAllFrom("*", "category", "where parent = 0", "", "ordering", "asc");
                                                        foreach ($allCats as $cat) {
                                                            echo "<option disabled >" . $cat['category_name'] . "</option>";
                                                            $childCats = getAllFrom("*", "category", "where parent = {$cat['category_id']}", "", "ordering", "asc");
                                                            foreach ($childCats as $child) {
                                                                echo "<option value='" . $child['category_id'] . "'>--- " . $child['category_name'] . "</option>";
                                                            }
                                                        }
                                                    ?>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <h4>الدرس المرتبط به</h4>
                                                <select name="lesson" class="form-control" >
                                                    <option disabled selected>...</option>
                                                    <?php
                                                        $allMembers = getAllFrom("*", "lessons", "", "", "lesson_id");
                                                        foreach ($allMembers as $lesson) {
                                                            echo "<option value='" . $lesson['lesson_id'] . "'>" . $lesson['lesson_name'] . "</option>";
                                                        }
                                                    ?>
                                                </select>
                                            </div>
                                            <div class="form-group ">
                                                <h4>رابط الامتحان</h4>
                                                <textarea class="form-control" name="link" style="height: 100px;"></textarea>
                                            </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit " class="btn btn-info" name="add">اضافة امتحان</button>    
                                        <button type="button " class="btn btn-secondary" data-dismiss="modal">الغاء</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                <?php
include 'includes/templates/footer.php';
?>
<script>
        $('.main_view').click(function () {
            let id = $(this).val();
            var url = "mark.php";
            $.ajax({
                type:"POST",
                url:url,
                data:"id="+id,
                success:function(data){
                    $('.main_td').html(data);
                    $('#mark').modal('show');
                }
            });
        });
</script>
<script type="text/javascript">     
    function PrintDiv() {    
    var divToPrint = document.getElementById('divToPrint');
    var popupWin = window.open('', '_blank', 'width=600,height=600');
    popupWin.document.open();
    popupWin.document.write('<html><body onload="window.print()">' + divToPrint.innerHTML + '</html>');
    popupWin.document.close();
        }
</script>
<?php
} else {
    header('Location: index.php');
    exit();
}
ob_end_flush(); 
?>