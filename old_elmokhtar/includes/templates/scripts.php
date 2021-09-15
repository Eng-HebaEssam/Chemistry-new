<script src="layouts/js/jquery-3.5.1.min.js "></script>
<script src="layouts/js/popper.min.js "></script>
<script src="layouts/js/bootstrap.min.js "></script>
<?php 
    if ($pageTitle == 'Homepage') {
        echo '
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
        <script type="text/javascript" src="layouts/js/jquery.easing.1.3.js"></script>
        <script type="text/javascript" src="layouts/js/jquery.mousewheel.js"></script>
        <script type="text/javascript" src="layouts/js/jquery.contentcarousel.js"></script>
        <script type="text/javascript">
            $("#ca-container").contentcarousel();
        </script>
        ';
    }
?>
<script src="layouts/js/index.js "></script>
<?php 
    if ($pageTitle == 'course_content') {
        echo'
        <script src="layouts/js/mains.js"></script>
        ';
}?>
<?php 
    if ($Title == 'exams') {
        echo'
        <script src="layouts/js/countdowns.js"></script>
        <script>
        window.addEventListener("load", function () {
            counter.init("demoB", 1800, function(idx){
                window.location.replace("final.php");
            });
        });
        </script>
        ';
}?>
</html>