<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="layouts/css/bootstrap.min.css">
    <link rel="stylesheet" href="layouts/css/all.min.css">
    <link rel="stylesheet" href="layouts/css/index.css">
    <link rel="stylesheet" href="layouts/css/style.css">
    <link rel="stylesheet" href="layouts/css/mains.css">
    <?php 
    if ($pageTitle == 'course_content') {
        echo'
            <link rel="stylesheet" href="layouts/css/style2s.css">
            ';
        }?>
    <?php 
    if ($Title == 'exams') {
            echo'
            <link rel="stylesheet" href="layouts/css/countdown-lights.css" />
            ';
    }?>
    <title>chemstry</title>
</head>