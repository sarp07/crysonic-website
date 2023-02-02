<?php
require 'session.php';
?>

<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yavuz Alpay</title>

    <!-- Styles -->
    <link rel="stylesheet" href="app/bootstrap/css/bootstrap.min.css">

    <link rel="stylesheet" href="app/dist/app.css?2.3">
    <link href="app/dist/aos.css" rel="stylesheet">
    <!-- end Styles -->

    <!-- Favicon and Touch Icons  -->
    <link rel="shortcut icon" href="assets/images/logo/favicon.png">
    <link rel="apple-touch-icon-precomposed" href="assets/images/logo/favicon.png">
</head>

<body class="home-nft header-fixed" data-magic-cursor="show" style="background-color: #050231 !important;">
    <!-- Preloading -->
    <div class="preloader">
        <div class=" loader">
            <div class="square"></div>
            <div class="path">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
            <p class="text-load"><?php echo $lang['loading']?></p>
        </div>
    </div>
    <!-- End Preloading -->

    <!-- MAGIC CURSOR -->
    <div class="mouse-cursor cursor-outer"></div>
    <div class="mouse-cursor cursor-inner"></div>
    <!-- /MAGIC CURSOR -->

    <!-- Header -->
    <header id="header_main" class="header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="header__body">
                        <div class="header__logo">
                            <a href="./">
                                <img id="site-logo" src="assets/images/logo/logo-nft.png" alt="Monteno" width="165" height="40" data-retina="assets/images/logo/logo-main@x2.png" data-width="165" data-height="40">
                            </a>
                        </div>