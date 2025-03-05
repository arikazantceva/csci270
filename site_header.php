<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Home page for a semester-long project for CSCI270 Web Development, taught at Lake Forest College.">
    <meta name="keywords" content="HTML, CSS, computer science, project">
    <meta name="author" content="Ari Kazantceva">

    <link rel="stylesheet" href="normalize.css">
    <link rel="stylesheet" href="style.css">

    <!-- if there are extra stylesheets defined, this will pull them -->
    <? if ( is_array($extra_stylesheets) ) { ?>
        <? foreach ($extra_stylesheets as $stylesheet) { ?>
        <link rel="stylesheet" type="text/css" href="<?=$stylesheet?>" >
        <? } ?>
    <? } ?>

    <link rel="icon" type="image/x-icon" href="images/favicon.ico">
    
    <!-- imported some google fonts for body text and headings -->
    <link href='https://fonts.googleapis.com/css?family=Open Sans' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@100..700&display=swap" rel="stylesheet">

    <!-- pulls custom page title -->
    <title><?= $page_title ?></title>
</head>

<body>
    <!-- top of page anchor -->
    <a id="top"></a>

    <!-- HEADER -->
    <div class="bg_white">
        <div class="header content grid-container col5">
            <div class="logo">
                <img src="images/long_logo.png" alt="ari kazantceva logo" height="128px" width="656px">
            </div>
            <div class="title">
                <h2>CSCI 270<br>Project Website</h2>
            </div>
        </div>
    </div>



    <!-- NAVBAR -->
    <div class="bg_red">
        <div class="navbar content">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="worksheet_blocks.php">Box Model</a></li>
                <li><a href="worksheet_lists.php">Lists</a></li>
                <li><a href="worksheet_bg_images.php">CSS Images</a></li>
                <div class="clear_float"></div>
            </ul>
        </div>
    </div>