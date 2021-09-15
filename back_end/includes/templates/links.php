<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Elmokhtar Chemistry</title>
  <meta content="موقع الاستاذ رضا مختار لتعليم الكيمياء" name="description">
    <meta content=", master code رضا مختار " name="keywords">

    <link href="assets/img/favicon.ico" rel="icon">
  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Almarai:wght@700;800&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="assets/vendor/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet"> 
    <?php 
        if($pageTitle == 'register' || $pageTitle == 'login' ){
            echo '<link href="assets/css/forms.css" rel="stylesheet">';
        }
        if($pageTitle == 'free'|| $pageTitle == 'posts2'){
            echo '<link href="assets/css/main.css" rel="stylesheet">';
        }
        if($pageTitle == 'main' || $pageTitle == 'lesson' || $pageTitle == 'coursecontent' ){
            echo '<link rel="stylesheet" href="assets/css/main_content.css">';
        }
        if($pageTitle == 'exam' || $pageTitle == 'fullexam' ){
            echo '
                <link rel="stylesheet" href="assets/css/main_content.css">
                <link rel="stylesheet" href="assets/css/countdown-lights.css">
            ';
        }
        if($pageTitle == 'events'){
            echo '
                <link rel="stylesheet" href="assets/css/main.css">
                <link rel="stylesheet" href="assets/css/forms.css">
            ';
        }
        if($pageTitle == 'postdetails'){
            echo '
                <link rel="stylesheet" href="assets/css/posts.css">
            ';
        }
        if($pageTitle == 'activities'){
            echo '
                <link rel="stylesheet" href="assets/css/posts.css">
                <link rel="stylesheet" href="assets/css/forms.css">
            ';
        }
        if($pageTitle == 'account'){
            echo '
            <link rel="stylesheet" href="assets/css/main_content.css">
            <link rel="stylesheet" href="assets/css/forms.css">
            ';
        }
    ?>
</head>
<body dir="rtl">