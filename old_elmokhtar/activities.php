<?php
ob_start();
session_start();
$pageTitle = 'activities';
$Title = '';
include 'inital.php';
include "check_token.php";
$getUser = $con->prepare("SELECT * FROM members WHERE username = ?");
$getUser->execute(array($sessionUser));
$info = $getUser->fetch();
if (isset($_SESSION['user']) && $info['regstatus'] == 1) { 
    $getposts = $con->prepare("SELECT * FROM post where type = 0 AND cat_id = ?");
    $getposts->execute(array($info['groupid']));
    $activities = $getposts->fetchAll();
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $comment 	= filter_var($_POST['comment'], FILTER_SANITIZE_STRING);
        $post_id 	= filter_var($_POST['post_id'], FILTER_SANITIZE_NUMBER_INT);
        $userid 	= $_SESSION['uid'];
        if (! empty($comment)) {
            $stmt = $con->prepare("INSERT INTO 
                comments(comment, status, comment_data, post_id, member_id)
                VALUES(:zcomment, 0, NOW(), :post_id, :zuserid)");
            $stmt->execute(array(
                'zcomment' => $comment,
                'post_id' => $post_id,
                'zuserid' => $userid
            ));
            if ($stmt) {
                echo '<div class="alert alert-success text-center alert-dismissible fade show" role="alert" id="alert-message">
                        تم اضافة التعليق في انتظار الموافقة
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>';
            }
        } else {
            echo '<div class="alert alert-warning alert-dismissible text-center fade show" role="alert" id="alert-message">
                    يجب عليك اضافة التعليق
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>';
        }
    }
?>
<body>
    <?php include $tpl . 'partial/header_2.php'; ?>
    <section class="section6" style="min-height: 600px;">
        <div class="container">
            <div class="main_content">
                <h2 class="text-center"><span>المنشورات</span></h2>
                <?php 
                    foreach($activities as $activity) {
                        ?>
                            <div class="main_item text-right">
                                <h3> <?php echo $activity['post_name'];?></h3>
                                <p><?php echo $activity['post_description'];?></p>
                                <span class="text-left data_span"><?php echo $activity['post_data'];?> <i class="far fa-calendar-alt"></i></span>
                                <?php
                                    if (isset($activity['post_image']) && $activity['post_image'] !== '') {
                                        echo '<img src="admin/uploads/'.$activity['post_image'].'" class="card-img-top" style="height: 450px;">';
                                    } else{
                                        echo '<img src="layouts/img/important.jpg" class="card-img-top" style="height: 450px;">';
                                    }
                                ?>
                                <div class="buttons text-center" style="margin-top: 20px;">
                                    <button class="main btn show_btn" data-show_item="show">التعليقات <i class="fa fa-comments"></i></button>
                                    <button class="main btn show_btn" data-show_item="add">اضافة تعليق <i class="fa fa-plus"></i></button>
                                </div>
                                <div class="comment_show show_item" id="show">
                                <?php    
                                    $stmt = $con->prepare("SELECT 
                                                                comments.*, members.username AS Member, members.avatar As image  
                                                            FROM 
                                                                comments
                                                            INNER JOIN 
                                                                members 
                                                            ON 
                                                                members.userid = comments.member_id
                                                            WHERE 
                                                                post_id = ?
                                                            AND 
                                                                status = 1
                                                            ORDER BY 
                                                                post_id desc");
                                    $stmt->execute(array($activity['post_id']));
                                    $comments = $stmt->fetchAll();
                                ?>
                                    <div class="comments">
                                    <?php 
                                        foreach ($comments as $comment) {
                                            ?>
                                                <div class="row">
                                                    <div class="col-2 order-2">
                                                        <?php
                                                            if (isset($comment['image']) && $comment['image'] !== '') {
                                                                echo '<img src="layouts/img/'.$comment['image'].'">';
                                                            } else{
                                                                echo '<img src="layouts/img/img.png">';
                                                            }
                                                        ?>
                                                    </div>
                                                    <div class="col-10 lead">
                                                        <h4><?php echo $comment['Member'] ?></h4>
                                                        <p><?php echo $comment['comment'] ?></p>
                                                        <span class="text-left data_span" style="font-size: 14px;"><?php echo $comment['comment_data'] ?></span>
                                                    </div>
                                                </div>
                                            <?php
                                        }
                                    ?>
                                    </div>
                                    <hr>
                                </div>
                                <div class="add_comment show_item" id="add">
                                    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
                                        <div class="form-group">
                                            <label>التعليق</label>
                                            <i class="far fa-comments"></i>
                                            <textarea class="form-control comment" name="comment" required></textarea>
                                            <input type="hidden" name="post_id" value="<?php echo $activity['post_id'];?>">
                                        </div>
                                        <button type="submit" class="btn btn-orange">اضافة تعليق</button>
                                    </form>
                                </div>
                            </div>
                        <?php
                    }
                ?>
                <hr>
            </div>
        </div>
    </section>
<?php include $tpl . 'partial/footer.php'; ?>
<div id="scroll-top">
<i class="fa fa-angle-double-up fa-2x"></i>
</div>
</body>
<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
<?php
include $tpl . 'scripts.php'; 
?>
<script>
$('.show_btn').on('click', function(){
    $selected = $(this).data('show_item');
    $(this).parent().nextAll("#"+ $selected).fadeIn().siblings('.show_item').fadeOut();
});
</script>
<?php
}else {
    header('Location: reg.php');
    exit();
}
ob_end_flush();
?>