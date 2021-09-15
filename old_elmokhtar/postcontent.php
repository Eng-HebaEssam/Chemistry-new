<?php
ob_start();
session_start();
$pageTitle = 'posts';
$Title = '';
include 'inital.php';
include "check_token.php";
$getUser = $con->prepare("SELECT * FROM members WHERE username = ?");
$getUser->execute(array($sessionUser));
$info = $getUser->fetch();
if (isset($_SESSION['user']) && $info['regstatus'] == 1) { 
    $post_id = isset($_GET['postid']) && is_numeric($_GET['postid']) ? intval($_GET['postid']) : 0;
    $getposts = $con->prepare("SELECT * FROM post where post_id = ?");
    $getposts->execute(array($post_id));
    $post = $getposts->fetch();
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $comment 	= filter_var($_POST['comment'], FILTER_SANITIZE_STRING);
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
    <section class="section2_7 text-right">
        <div class="container">
            <?php
                if (isset($post['post_image']) && $post['post_image'] !== '') {
                    echo '<img src="admin/uploads/'.$post['post_image'].'" class="card-img-top" style="height: 500px;">';
                } else{
                    echo '<img src="layouts/img/important.jpg" class="card-img-top" style="height: 500px;">';
                }
            ?>
            <h2><?php echo $post['post_name'] ;?></h2>
            <hr>
            <div class="main">
                <p><?php echo $post['post_description'] ;?></p>
            </div>
            <hr>
            <h3>التعليقات</h3>
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
                $stmt->execute(array($post['post_id']));
                $comments = $stmt->fetchAll();
            ?>
            <div class="comments">
                <?php 
                    foreach ($comments as $comment) {
                        ?>
                            <div class="row">
                            <div class="col-md-11 content">
                                <h4><?php echo $comment['Member'] ?></h4>
                                <p><?php echo $comment['comment'] ?></p>
                            </div>
                            <div class="col-md-1">
                                <?php
                                    if (isset($comment['image']) && $comment['image'] !== '') {
                                        echo '<img src="layouts/img/'.$comment['image'].'" class="card-img-top" alt="...">';
                                    } else{
                                        echo '<img src="layouts/img/img.png" class="card-img-top" alt="...">';
                                    }
                                ?>
                            </div>
                        </div>
                        <?php
                    }
                ?>
            </div>
            <hr>
            <section class="section2_5">
                    <div class="container text-right">
                        <h3>اضافة تعليق</h3>
                        <div class="row">
                            <div class="modal-body">
                                <form action="postcontent.php?postid=<?php echo $post['post_id'] ;?>" method="POST">
                                    <div class="form-group">
                                        <label>التعليق</label>
                                        <i class="fas fa-comments"></i>
                                        <textarea name="comment"></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-orange"> اضافة تعليق</button>
                                </form>
                            </div>
                        </div>
                    </div>
            </section>
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
}else {
    header('Location: reg.php');
    exit();
}
ob_end_flush();
?>
