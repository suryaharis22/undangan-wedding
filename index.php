<!DOCTYPE html>
<?php
include 'auth.php';
?>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="color-scheme" content="light dark">
    <meta name="supported-color-schemes" content="light dark">
    <meta name="keywords" content="undangan nikah online, undangan pernikahan online, undangan online pernikahan, undangan akad nikah online, undangan pernikahan web, undangan website pernikahan, web undangan pernikahan, buat undangan pernikahan online, bikin undangan pernikahan online, undangan pernikahan online gratis" />
    <meta name="author" content="itzmevant" />
    <meta name="csrf-token" content="<?= $_SESSION['csrf_token'] ?>">
    <meta name="robots" content="" />
    <meta name="description" content="Minggu, 11 Maret 2023" />
    <meta property="og:locale" content="id_ID" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="The Wedding of Ronggo and Ayu" />
    <meta property="og:description" content="Minggu, 11 Maret 2023" />
    <meta property="og:image" content="assets/uploads/imgproject/2-0f9b3c9f62a5a34ba3b642179256bec8.jpeg /">
    <meta property=" og:image:width" content="371" />
    <meta property="og:image:height" content="392" />
    <meta property="og:url" content="https://undangan-ronggo/ronggo-ayu" />
    <meta property="og:site_name" content="Sang Mempelai | Undangan Digital" />
    <!-- <meta property="article:published_time" content="2021-07-07T05:26:38+00:00" /> <meta property="article:modified_time" content="2021-07-10T05:26:08+00:00" /> -->
    <meta name="format-detection" content="telephone=no">
    <meta property="fb:app_id" content="550695616171149" />
    <!--<meta property="fb:admins" content="&#123;100000283983854&#125;"/>-->
    <!--<meta property="fb:admins" content="100000283983854"/>-->
    <!-- FAVICONS ICON -->
    <link rel="icon" href="assets/uploads/system/custom/fixico1.ico" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="assets/uploads/system/custom/fixico1.ico" />
    <!-- PAGE TITLE HERE -->
    <title>The Wedding of Ronggo and Ayu</title> <!-- MOBILE SPECIFIC -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--[if lt IE 9]> <script src="js/html5shiv.min.js"></script> <script src="js/respond.min.js"></script> <![endif]-->
    <!-- STYLESHEETS -->
    <link rel="stylesheet" type="text/css" href="webview/template/front/pata/css/plugins.css">
    <link rel="stylesheet" type="text/css" href="webview/template/front/pata/css/style.css">
    <link rel="stylesheet" type="text/css" href="webview/template/front/pata/css/templete.css">
    <link class="skin" rel="stylesheet" type="text/css" href="webview/template/front/pata/css/skin/skin-4.css">
    <style>
        /*@import url('https://fonts.googleapis.com/css2?family=Alex+Brush&family=Comic+Neue:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&family=Playball&display=swap');*/
        @import url('https://fonts.googleapis.com/css2?family=Comic+Neue:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&amp;family=Playball&amp;display=swap');

        h1,
        h2 {
            font-family: 'Alex Brush', cursive;
            /* font-family: "north", Sans-serif; */
            /* font-family: 'fontWavy', cursive; */
        }

        body {
            font-family: 'Comic Neue', cursive;
        }

        h3,
        h4,
        h5,
        h6 {
            font-family: 'Comic Neue', cursive;
        }

        p {
            font-size: 18px;
        }

        h6 {
            font-size: 18px;
        }

        @font-face {
            font-family: fontWavy;
            src: url(webview/template/front/font/ChopinScript.ttf);
        }

        /* @import url('https://fonts.googleapis.com/css2?family=Aladin&display=swap'); .fontMempelai{ font-family: 'Aladin'!important; font-style: italic; }*/
        /*@import url('https://fonts.googleapis.com/css2?family=Playball&display=swap');*/
        .fontMempelai {
            font-family: 'Playball' !important;
        }

        .site-footer .footer-top,
        .site-footer .footer-bottom {
            background-color: #eeeeee;
        }

        .overlay-blue-light:after,
        .overlay-blue-middle:after,
        .overlay-blue-dark:after {
            background-color: #080807;
            /*background-image: linear-gradient(280deg,#3567ff 26%,#f2295b 100%);*/
            /*background-image: linear-gradient(280deg,#f0c7ae78 26%,#ede7f673 100%);*/
            content: "";
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            /*height: 100%;*/
            height: 140vh;
        }

        .bg-main {
            /*background: #eae8dc!important;*/
            background: #dfd2cd !important;
            overflow: hidden;
        }

        .btnColor {
            /*background: #474544!important; background-image: linear-gradient(to bottom right,#474544 0,#474544 50%,#73706f 100%)!important;*/
            background: #f7d1c6 !important;
            background-image: linear-gradient(to bottom right, #f7d1c6 0, #f7d1c6 50%, #f0d7cf 100%) !important;
            color: #333 !important;
            /*box-shadow: rgb(181 158 122 / 50%) 0px 1px 2px 0px, #a37f7f80 0px 1px 8px 0px;*/
            /*box-shadow: rgb(181 158 122 / 50%) 0px 1px 2px 0px, rgb(235 242 232) 0px 1px 8px 0px;*/
            /*box-shadow: rgb(181 158 122 / 50%) 0px 1px 2px 0px, rgb(235 242 232 / 41%) 0px 1px 8px 0px;*/
        }

        .themeWeb {
            max-width: 100%;
            margin-left: auto;
            margin-right: auto;
            position: relative;
            overflow: hidden;
            background-image: url(webview/template/bg/background.png);
            background-size: cover;
            background-position: center center;
            background-repeat: no-repeat;
            padding: 0px 0px !important;
            margin-bottom: 0px !important;
            /*border-radius: 50px;*/
        }

        .boxedTheme {
            /*padding: 0 70px;*/
            /*width: 90%;*/
            width: 60%;
            /*width: 55%;*/
            margin-left: auto;
            margin-right: auto;
            /*background: #ede7f6!important;*/
            background: #dfd2cd !important;
        }

        .btnSong {
            background: rgba(255, 255, 255, 0.9) none repeat scroll 0 0;
            /*background: transparent;*/
            border-color: #ED0F5F;
            border-radius: 20px;
            border-style: solid;
            border-width: 0;
            bottom: 53%;
            box-shadow: 2px 2px 12px -5px #000000;
            color: #efbb20;
            cursor: pointer;
            display: none;
            height: 40px;
            line-height: 26px;
            margin: 0;
            position: fixed;
            right: 15px;
            text-align: center;
            width: 40px;
            z-index: 999;
        }

        .btnSong i {
            /* color: #f9af87;*/
            color: #474544;
        }

        .fit_pic {
            width: auto !important;
            object-fit: cover !important;
        }

        .fit_pic_cover {
            width: 170px !important;
            max-width: 170px !important;
            height: 170px !important;
            object-fit: cover !important;
            border-radius: 100% !important;
        }

        @media only screen and (max-width: 500px) {
            .fit_pic_cover {
                width: 150px !important;
                max-width: 150px !important;
                height: 150px !important;
                object-fit: cover !important;
                border-radius: 100% !important;
            }
        }

        .fit_pic_mempelai {
            width: 150px !important;
            max-width: 150px !important;
            height: 150px !important;
            object-fit: cover !important;
            border-radius: 100% !important;

            border: 4px solid rgb(235 242 232);
            box-shadow: rgb(181 158 122 / 50%) 0px 1px 2px 0px, #a39696 0px 1px 8px 0px;
        }

        @media only screen and (max-width: 500px) {
            .fit_pic_mempelai {
                width: 150px !important;
                max-width: 150px !important;
                height: 150px !important;
                object-fit: cover !important;
                border-radius: 100% !important;
                border: 4px solid rgb(235 242 232);
                box-shadow: rgb(181 158 122 / 50%) 0px 1px 2px 0px, #a39696 0px 1px 8px 0px;
            }
        }

        body.modal-opened {
            overflow: hidden;
        }

        .mapGoogle iframe {
            width: 100% !important;
            height: 450px !important;
        }

        .navMobile {
            width: 60%;
            display: block;
            margin-right: auto;
            margin-left: auto;
        }

        .videoPreWedding iframe {
            width: 100% !important;
        }

        .site-footer.style1 .footer-bottom {
            padding: 35px 0 85px 0;
        }

        @media only screen and (max-width: 767px) {
            .site-footer.style1 .footer-bottom {
                padding: 35px 0 100px 0;
            }

            .boxedTheme {
                /*padding: 0 15px;*/
                width: 100%;
            }

            .themeWeb {
                padding: 0px 0px !important;
                margin-bottom: 15px !important;
            }

            #home {
                margin-bottom: 15px;
            }

            .navMobile {
                width: 100%;
            }

            .imageTop {
                left: -290px !important;
                top: -230px !important;
                transform: scale(.5) translateX(0%) rotate(3deg) !important;
            }

            .imageTopRight {
                right: -270px !important;
                top: -310px !important;
                transform: scale(.5) translateX(0%)rotate(179deg) !important;
            }

            .imageBtm {
                right: -310px !important;
                bottom: -230px !important;
                transform: scale(.5) translateX(0%) rotate(182deg) !important;
            }

            .imageBtmLeft {
                left: -260px !important;
                bottom: -310px !important;
                transform: scale(.5) rotate(356deg) !important;
            }
        }

        /*Fb Comments Width Fix*/
        .fb_iframe_widget_fluid_desktop,
        .fb_iframe_widget_fluid_desktop span,
        .fb_iframe_widget_fluid_desktop iframe {
            max-width: 100% !important;
            width: 100% !important;
        }

        .borderStyle {
            /*border: 10px solid #757472; border-style: double;*/
            /*border: 5px double #757472; outline: 1px solid #757472; outline-offset: -9px;*/
            /*border: 3px solid #757472; outline: 1px solid #757472;*/
            /*border: 3px solid #c4b7db; outline: 1px solid #c4b7db;*/
            /*border: 3px solid #9b93aa; outline: 1px solid #9b93aa; outline-offset: -7px;*/
            padding: 120px 20px;
            box-shadow: rgb(206 206 204 / 26%) 0px 0px 25px 5px;
            /*background: #fff3e075;*/
            /*position: relative;*/
            overflow: hidden;
            /*border: 10px solid #f4e7c7;*/
            /*border: 3px solid #3f5949;*/
            /*border-radius: 50px;*/
        }

        .borderStyle:before {
            /*content: ""; position: absolute !important; z-index: 100; top: 0; left: 0; border-right: 40px solid; border-bottom: 40px solid; -moz-border-radius: 0 0 50px 0; -webkit-border-radius: 0 0 50px 0; border-radius: 0 0 50px 0;*/
            content: "";
            background-image: url(webview/template/front/div/wavy-sfe-01-btm.png);
            position: absolute;
            left: 0;
            width: 100%;
            height: 86px;
            background-size: 100%;
            background-repeat: no-repeat;
            bottom: -1px;
            background-position: bottom;
            z-index: 99;
        }

        .borderStyle:after {
            /* content: ""; position: absolute !important; z-index: 100; top: 0; right: 0; border-left: 40px solid; border-bottom: 40px solid; -moz-border-radius: 0 0 0 50px; -webkit-border-radius: 0 0 0 50px; border-radius: 0 0 0 50px;*/
            content: "";
            background-image: url(webview/template/front/div/wavy-sfe-01-top.png);
            position: absolute;
            left: 0;
            width: 100%;
            height: 86px;
            background-size: 100%;
            background-repeat: no-repeat;
            top: -1px;
            background-position: top;
            z-index: 99;
        }

        /*.borderStyle .row:before { content: ""; position: absolute !important; z-index: 100; bottom: 0; left: 0; border-bottom: 40px solid; border-left: 40px solid; -moz-border-radius: 0 0 50px 0; -webkit-border-radius: 0 0 50px 0; border-radius: 0 50px 0 0; } .borderStyle .row:after { content: ""; position: absolute !important; z-index: 100; bottom: 0; right: 0; border-bottom: 40px solid; border-right: 40px solid; -moz-border-radius: 0 0 0 50px; -webkit-border-radius: 0 0 0 50px; border-radius: 50px 0 0 0; }*/
        .dlab-bnr-inr.dlab-bnr-inr-shap:before {
            content: "";
            background-image: url(webview/template/front/div/wavy-sfe-01-btm.png);
            position: absolute;
            left: 0;
            width: 100%;
            height: 86px;
            background-size: 100%;
            background-repeat: no-repeat;
            bottom: -1px;
            background-position: bottom;
            z-index: 99;
        }

        .imageTop {
            /* position: absolute;
            left: -250px;
            top: -190px;
            margin-bottom: -10px;
            display: block;
            content: '';
            background: url(webview/template/bg/0e07db07e520c120bd35c9e7037d8573.png) no-repeat;
            height: 720px;
            width: 720px;
            transform: scale(.7) translateX(0%) rotate(3deg);
            opacity: .8; */

            /*margin-top: -25px;*/
            /*border-radius: 50px 0 0 0;*/
            /*-moz-animation: moveEfek 2s infinite; -webkit-animation: moveEfek 2s infinite; animation: moveEfek 2s infinite; transform: translateX(0%);*/
        }

        /* .imageBtm {
            position: absolute;
            right: -260px;
            bottom: -180px;
            display: block;
            content: '';
            background: url(webview/template/bg/0e07db07e520c120bd35c9e7037d8573.png) no-repeat;
            height: 720px;
            width: 720px;
            transform: scale(.7) translateX(0%) rotate(182deg);
            opacity: .8;
        } */

        /* .imageBtmLeft {
            position: absolute;
            left: -220px;
            bottom: -250px;
            display: block;
            content: '';
            background: url(webview/template/bg/87cd8425ddeb0f0ffc2fc8359f42400e.png) no-repeat;
            height: 720px;
            width: 720px;
            transform: scale(.7) rotate(356deg);
            opacity: .8;
        } */

        /* .imageTopRight {
            position: absolute;
            right: -225px;
            top: -255px;
            display: block;
            content: '';
            background: url(webview/template/bg/87cd8425ddeb0f0ffc2fc8359f42400e.png) no-repeat;
            height: 720px;
            width: 720px;
            transform: scale(.7) translateX(0%)rotate(179deg);
            opacity: .8;
        } */

        #content {
            width: 100%;
            height: 100%;
            left: 0;
            overflow: hidden;
            position: absolute;
        }

        #snowflake {
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
            left: 0;
            overflow: hidden;
        }

        .snowRoll {
            position: absolute;
            opacity: 0;
            -webkit-animation-name: mysnow;
            -webkit-animation-duration: 20s;
            -moz-animation-name: mysnow;
            -moz-animation-duration: 20s;
            height: 80px;
        }

        @-webkit-keyframes mysnow {
            0% {
                bottom: 100%;
            }

            50% {
                -webkit-transform: rotate(1080deg);
            }

            100% {
                -webkit-transform: rotate(0deg) translate3d(50px, 50px, 50px);
            }
        }

        @-moz-keyframes mysnow {
            0% {
                bottom: 100%;
            }

            50% {
                -moz-transform: rotate(1080deg);
            }

            100% {
                -moz-transform: rotate(0deg) translate3d(50px, 50px, 50px);
            }
        }

        .bounceArrow {
            -moz-animation: bounceArrow 2s infinite;
            -webkit-animation: bounceArrow 2s infinite;
            animation: bounceArrow 2s infinite;
        }

        @keyframes bounceArrow {

            0%,
            20%,
            50%,
            80%,
            100% {
                transform: translateY(0);
            }

            40% {
                transform: translateY(-30px);
            }

            60% {
                transform: translateY(-15px);
            }
        }

        @keyframes moveEfek {
            0% {
                transform: rotate(0deg) translate(-15px) rotate(0deg);
            }

            100% {
                transform: rotate(360deg) translate(-15px) rotate(-360deg);
            }
        }
    </style>
</head>

<body id="bg" class="boxedTheme modal-opened notranslate">
    <div id="fb-root"></div>
    <!--<script async defer crossorigin="anonymous" src="https://connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v11.0&appId=550695616171149&autoLogAppEvents=1" nonce="1UyKFg2T"></script>-->
    <!--<script async defer crossorigin="anonymous" src="https://connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v11.0&appId=550695616171149&autoLogAppEvents=1" nonce="9ELh8C4U"></script>-->
    <!--<script async defer src="https://connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v3.2"></script>--> <button class="btnSong" style="display: inline-block;"><i class="fa fa-pause"></i></button>
    <!-- <audio id="myAudio"> --> <audio id="myAudio" src="assets/uploads/lagu/lagu1.mp3" type="audio/mpeg" loop="loop">
        <source src="assets/uploads/lagu/lagu1.mp3" type='audio/mpeg'> Your user agent does
        not support the HTML5 Audio element.
    </audio> <!-- Bottom Navbar -->
 <nav class="navbar px-0 pb-0 navbar-dark navbar-expand fixed-bottom navMobile"
        style="background: #eeeeee!important;">
        <ul class="navbar-nav nav-justified w-100">
            <li class="nav-item"> <a href="#home" class="nav-link pt-0 text-dark">
                    <div><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-house" fill="currentColor"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
                            <path fill-rule="evenodd"
                                d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z" />
                        </svg></div> Home
                </a> </li>
            <li class="nav-item"> <a href="#mempelai" class="nav-link pt-0 text-dark">
                    <div><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-heart" viewBox="0 0 16 16">
                            <path
                                d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
                        </svg></div>Mempelai
                </a> </li>
            <li class="nav-item"> <a href="#acara" class="nav-link pt-0 text-dark">
                    <div><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                            <path
                                d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
                        </svg></div>Acara
                </a> </li>
            <li class="nav-item"> <a href="#galeri" class="nav-link pt-0 text-dark">
                    <div><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-image" viewBox="0 0 16 16">
                            <path d="M6.002 5.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
                            <path
                                d="M2.002 1a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2h-12zm12 1a1 1 0 0 1 1 1v6.5l-3.777-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12V3a1 1 0 0 1 1-1h12z" />
                        </svg></div>Galeri
                </a> </li>
            <li class="nav-item"> <a href="#ucapan" class="nav-link pt-0 text-dark">
                    <div><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-chat" viewBox="0 0 16 16">
                            <path
                                d="M2.678 11.894a1 1 0 0 1 .287.801 10.97 10.97 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8.06 8.06 0 0 0 8 14c3.996 0 7-2.807 7-6 0-3.192-3.004-6-7-6S1 4.808 1 8c0 1.468.617 2.83 1.678 3.894zm-.493 3.905a21.682 21.682 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a9.68 9.68 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105z" />
                        </svg></div>Ucapan
                </a> </li>
        </ul>
    </nav> 
    <!-- <div class="imageTop"></div> <div class="imageBtm"></div> -->
    <!-- inner page banner -->
    <div style="z-index: 20000;position: fixed;width: 100%;height: 100%;top: 0;left: 0;transform: translateY(0);background-image:url(assets/uploads/imgproject/Foto5.jpeg);background-size: cover;background-position: top center;background-repeat: no-repeat;" class="modalUndangan"></div>
    <div style="z-index: 20001;position: fixed;width: 100%;height: 100vh;top: 0;left: 0;overflow: auto;background:#080807d4" class="modalUndangan">
        <div class="container" style="height: 200vh;">
            <div class="row justify-content-center" style="height: 90vh;position:relative;top: 30px;">
                <div class="d-flex justify-content-center align-items-center col-lg-5 col-md-5 text-center cb" style="border-radius: 20px;margin-left: 20px;margin-right: 20px;opacity: .9">
                    <div>
                        <h4 class="text-white">The Wedding Of</h4>
                        <!-- <div class="gambar">
                            <img src="webview/template/front/pata/css/skin/flower2.png" alt="">
                        </div> -->
                        <img src="assets/uploads/imgproject/2-0f9b3c9f62a5a34ba3b642179256bec8.jpeg" class="d-block mx-auto fit_pic_cover mb-3">

                        <h2 style="font-size: 2.5em;line-height:1.3em;margin-bottom: 20px;margin-bottom: 20px" class="text-white">Ronggo & Ayu </h2>
                        <h3 style="font-size:18px;width:100%" class="text-white">Kpd. Bpk/Ibu/Saudara/i <div style="font-size:18px;width:100%;font-weight: 600;" class="text-white"></div>
                        </h3> <button class="btn btnColor" style="border-radius: 20px 20px 20px 20px;" onclick="openInvitation();"><i class="fa fa-envelope"></i> Buka Undangan</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id='content'>
        <div id="snowflake"></div>
    </div>
    <div class="page-wraper">
        <!-- <div class="cube-transition" id="loading-area"><div></div><div></div></div> -->
        <!-- Content -->
        <div class="page-content bg-main">
            <div id="home" class="dlab-bnr-inr dlab-bnr-inr-shap dlab-bnr-inr-lg overlay-blue-middle home-banner style1 pt-0 pt-lg-5 pt-md-5" style=" background-image:url(assets/uploads/imgproject/Foto3.jpg); background-size: cover; background-position: top center; background-repeat: no-repeat;height: 140vh;">
                <div class="container">
                    <div class="dlab-bnr-inr-entry text-white">
                        <div class="row align-items-center">
                            <div class="col-lg-12 col-md-12 text-center">
                                <h3 class="wow zoomIn" data-wow-duration="2s" data-wow-delay="0.2s" style="font-size: 20px">The Wedding</h3>
                                <h1 class="wow zoomIn" data-wow-duration="2s" data-wow-delay="0.2s" style="text-shadow: 0 0 20px #232323;font-size: 3em;line-height:60px;font-weight:400!important;">
                                    Ronggo<br>&<br>Ayu<br> </h1>
                                <table class="wow zoomIn" style="width: 100%;color:#fff" data-wow-duration="2s" data-wow-delay="0.2s">
                                    <tbody>
                                        <tr>
                                            <td></td>
                                            <td style="border-right:1px solid #cdcdcd;width: 150px;text-align: right;padding: 0px 8px 0px 0px;width: 100px;font-size:20px">
                                                <b> Sabtu </b>
                                            </td>
                                            <td style="width: 45px;text-align:center">
                                                <div style="font-size: 30px;padding: 5px 5px;margin: -10px 0px 0px 0px">
                                                    <b> 11 </b>
                                                </div>
                                                <div style="margin:-9px 0px -10px 0px;"> 2023 </div>
                                            </td>
                                            <td style="border-left: 1px solid #cdcdcd;width: 150px;text-align: left;padding: 0px 0px 0px 8px;width: 100px;font-size:20px">
                                                <b> Maret </b>
                                            </td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- inner page banner END -->
            <div class="content-block">
                <div id="mempelai" class="section-full bg-main about-service-area1 content-inner py-0">
                    <div class="container py-5 my-0 themeWeb">
                        <!-- <div class="row justify-content-center"> <div class="col-md-12"> -->
                        <div class="borderStyle">
                            <div class="imageTop"></div>
                            <div class="imageTopRight"></div>
                            <div class="imageBtm"></div>
                            <div class="imageBtmLeft"></div>
                            <div class="row justify-content-center">
                                <!-- <div class="col-lg-12 col-md-12 mb-4"> <img src="webview/template/bg/" class="d-block mx-auto" style="max-width: 350px;width: 100%;"> </div> -->
                                <div class="col-md-8 m-b30 wow fadeInUp text-center" data-wow-duration="2s" data-wow-delay="0.3s"> <img src="webview/template/front/img/bismillah.png" style="margin-bottom: -30px;height: 150px;">
                                    <h6>Assalamu'alaikum Warahmatullaahi Wabarakaatuh</h6>
                                    <p>Maha Suci Allah yang telah menciptakan makhluk-Nya berpasang-pasangan. Ya Allah
                                        semoga ridho-Mu tercurah mengiringi pernikahan kami.</p>
                                </div>
                                <div class="col-lg-5 col-md-6 m-b30 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.6s">
                                    <div class="center"> <img src="assets/uploads/imgproject/ronggo.png" class="d-block mx-auto fit_pic_mempelai" style="background-position: top;">
                                        <div class="icon-content mt-3 text-center">
                                            <h2 class="dlab-title font-weight-bold fontMempelai" style="font-size: 30px;line-height: 35px;margin-bottom: 5px;font-weight: 400!important">
                                                Ronggo Kinantoputro </h2> <img src="webview/template/front/div/wavy-sfe-01.png" style="width: 180px;margin-bottom: 10px;">
                                            <p>Putra tunggal dari<br />Bapak Marwoto Hardjono (Alm)<br /> dan Ibu Nanik
                                                Ngudiarti </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5 col-md-6 m-b30 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.6s">
                                    <div class="center"> <img src="assets/uploads/imgproject/ayu3.png" class="d-block mx-auto fit_pic_mempelai" style="background-position: top;">
                                        <div class="icon-content mt-3 text-center">
                                            <h2 class="dlab-title font-weight-bold fontMempelai" style="font-size: 30px;line-height:35px;margin-bottom: 5px;font-weight: 400!important">
                                                Ayu Adhitya Prihandini</h2> <img src="webview/template/front/div/wavy-sfe-01.png" style="width: 180px;margin-bottom: 10px;">
                                            <p>Putri Bungsu dari<br /> Bapak Yudhie Slamet Pratikno<br /> dan Ibu
                                                Adji Silviarni </p>
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="col-lg-12 col-md-12 mt-4"> <img src="webview/template/bg/" class="d-block mx-auto" style="max-width: 350px;width: 100%;"> </div> -->
                            </div>
                            <div class="row mt-5 justify-content-center">
                                <div class="col-lg-12 text-center">
                                    <h3 class="wow fadeIn" data-wow-duration="2s" data-wow-delay="0.2s" style="font-size: 18px;">Minggu, 11 Maret 2023</h3>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-3 m-b30 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.2s">
                                    <div class="counter-style-1 px-0 py-2">
                                        <div>
                                            <div id="days" style="font-size: 2em;color: #333;font-weight: 600;">00</div>
                                        </div> <span class="counter-title">Days</span>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-3 m-b30 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.4s">
                                    <div class="counter-style-1 px-0 py-2">
                                        <div> <span id="hours" style="font-size: 2em;color: #333;font-weight: 600;">00</span> </div>
                                        <span class="counter-title">Hours</span>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-3 m-b30 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.6s">
                                    <div class="counter-style-1 px-0 py-2">
                                        <div> <span id="mins" style="font-size: 2em;color: #333;font-weight: 600;">00</span> </div>
                                        <span class="counter-title">Min</span>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-3 m-b30 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.8s">
                                    <div class="counter-style-1 px-0 py-2">
                                        <div> <span id="secs" style="font-size: 2em;color: #333;font-weight: 600;">00</span> </div>
                                        <span class="counter-title">Sec</span>
                                    </div>
                                </div>
                                <div class="col-lg-12 mt-3 text-center wow bounceInUp" data-wow-duration="2s" data-wow-delay="0.2s"> <a href="https://calendar.google.com/calendar/event?action=TEMPLATE&tmeid=MWU4dTZzdDFoaTcxM2FlaDZwaWZubjJscDIgcm9uZ2dva3BAbQ&tmsrc=ronggokp%40gmail.com" class="btn btn-outline btnColor" style="border-radius: 30px;border:0px;" target="_blank"><i class="fa fa-calendar-check-o"></i> Ingatkan via Google
                                        Kalender</a> </div>
                            </div>
                        </div> <!-- </div> </div> -->
                    </div>
                </div> <!-- About services End -->
                <!-- business info -->
                <div id="acara" class="section-full bg-main content-inner py-0">
                    <div class="container py-5 my-0 themeWeb">
                        <!-- <div class="row justify-content-center"> <div class="col-md-12"> -->
                        <div class="borderStyle">
                            <div class="imageTop"></div>
                            <div class="imageTopRight"></div>
                            <div class="imageBtm"></div>
                            <div class="imageBtmLeft"></div>
                            <div class="row justify-content-center">
                                <!-- <div class="col-md-12 mb-4"> <img src="webview/template/bg/" class="d-block mx-auto" style="max-width: 350px;width: 100%;"> </div> -->
                                <div class="col-lg-5 col-md-8 my-4">
                                    <div class="business-solution wow fadeIn h-100" data-wow-duration="2s" data-wow-delay="0.2s" style=" background-color: #fff;box-shadow: 0 0 25px 5px rgb(206 206 204 / 40%);border-radius: 10px;text-align: center;padding: 30px;">
                                        <h2 class="text-center mt-2" style="font-size: 35px;">Akad Nikah</h2>
                                        <p class="text-center"><i class="fa fa-calendar-check-o"></i> Sabtu, 11
                                            Maret 2023 </p>
                                        <!-- <p class="text-center"><i class="fa fa-clock-o"></i> </p> -->
                                        <p><i class="fa fa-clock-o"></i> 09.00 - 11.30 WIB </p>
                                        <h6>Lokasi / Tempat Acara:</h6>
                                        <p class="text-center">Masjid Jaami Daarul Adzkaar,<br /> Jl. Karang Tengah
                                            Raya, RT.6/RW.4, Lb. Bulus, Kec. Cilandak, Kota Jakarta Selatan, Daerah
                                            Khusus Ibukota Jakarta 12440 </p>
                                    </div>
                                </div>
                                <div class="col-lg-5 col-md-8 my-4">
                                    <div class="business-solution wow fadeIn h-100" data-wow-duration="2s" data-wow-delay="0.4s" style=" background-color: #fff;box-shadow: 0 0 25px 5px rgb(206 206 204 / 40%);border-radius: 10px;text-align: center;padding: 30px;">
                                        <h2 class="text-center mt-2" style="font-size: 35px;">Resepsi </h2>
                                        <p class="text-center"><i class="fa fa-calendar-check-o"></i> Sabtu, 11
                                            Maret 2023</p>
                                        <!-- <p class="text-center"><i class="fa fa-clock-o"></i> </p> -->
                                        <p><i class="fa fa-clock-o"></i> 11.30 - 13.00 WIB </p>
                                        <h6>Lokasi / Tempat Acara:</h6>
                                        <p class="text-center">Masjid Jaami Daarul Adzkaar,<br /> Jl. Karang Tengah
                                            Raya, RT.6/RW.4, Lb. Bulus, Kec. Cilandak, Kota Jakarta Selatan, Daerah
                                            Khusus Ibukota Jakarta 12440 </p>
                                    </div>
                                </div>
                                <div class="col-md-8 mt-4 mb-4">
                                    <p class="text-center">Merupakan kehormatan serta kebahagiaan bagi kami sekeluarga
                                        apabila Bapak/Ibu/Saudara/i berkenan hadir untuk memberikan doa restu kepada
                                        kedua mempelai.</p>
                                    <h6 class="text-center" style="margin-bottom:30px;"> Jazakumullah Khairan
                                        Katsiran<br>Wassalamuallaikum Warrahmatullahi Wabarakatuh </h6>
                                    <h6 class="text-center"> Kami yang berbahagia, </h6>
                                    <h2 class="text-center" style="margin-bottom:5px;font-size:30px;"> Ronggo & Ayu
                                    </h2>
                                    <h6 class="text-center"> Beserta keluarga besar kedua mempelai </h6> <img src="webview/template/front/div/wavy-sfe-01.png" style="width: 180px;margin-bottom: 20px;display: block;margin-right: auto;margin-left: auto;margin-top: 40px;">
                                </div>
                                <div class="col-lg-8 col-md-8 wow zoomIn" data-wow-duration="2s" data-wow-delay="0.2s">
                                    <h2 class="text-center" style="font-size: 35px;">Denah Lokasi</h2>
                                    <div class="mapGoogle business-solution text-center" style="box-shadow: 0 0 25px 5px rgb(206 206 204 / 40%);"> <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d31725.432660728835!2d106.7814037227539!3d-6.30582703188383!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x81957c18884ee9b1!2sMasjid%20Jaami%20Daarul%20Adzkaar%2C%20Jl.%20Karang%20Tengah%20Raya%2C%20RT.6%2FRW.4%2C%20Lb.%20Bulus%2C%20Kec.%20Cilandak%2C%20Kota%20Jakarta%20Selatan%2C%20Daerah%20Khusus%20Ibukota%20Jakarta%2012440!5e0!3m2!1sid!2sid!4v1673517735308!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> </div>
                                    <div class="text-center mt-4"> <a href="https://goo.gl/maps/cYb5B2gxS2dQnywC8" class="btn btn-outline btnColor" style="border-radius: 30px;border:0px;" target="_blank"><i class="fa fa-location-arrow"></i> Lihat Lokasi Acara</a>
                                    </div>
                                </div>
                                <!-- <div class="col-md-12 mt-5"> <img src="webview/template/bg/" class="d-block mx-auto" style="max-width: 350px;width: 100%;"> </div> -->
                            </div>
                        </div> <!-- </div> </div> -->
                    </div>
                </div> <!-- business info end -->
                <!-- business info -->
                <div class="section-full bg-main content-inner py-0">
                    <div class="container py-5 my-0 wow fadeInUp themeWeb" data-wow-duration="2s" data-wow-delay="0.2s">
                        <!-- <div class="row justify-content-center"> <div class="col-md-12"> -->
                        <div class="borderStyle">
                            <div class="imageTop"></div>
                            <div class="imageTopRight"></div>
                            <div class="imageBtm"></div>
                            <div class="imageBtmLeft"></div>
                            <div class="row justify-content-center">
                                <!-- <div class="col-md-12 mb-4"> <img src="webview/template/bg/" class="d-block mx-auto" style="max-width: 350px;width: 100%;"> </div> -->
                                <div class="col-md-8 wow fadeIn" data-wow-duration="2s" data-wow-delay="0.2s">
                                    <h5 class="text-center" style="font-size: 18px;">
                                        <div style="font-size:25px;font-weight:bold;margin-bottom:30px;line-height: 40px;">
                                            وَمِنۡ اٰيٰتِهٖۤ اَنۡ خَلَقَ لَكُمۡ مِّنۡ اَنۡفُسِكُمۡ اَزۡوَاجًا
                                            لِّتَسۡكُنُوۡۤا اِلَيۡهَا وَجَعَلَ بَيۡنَكُمۡ مَّوَدَّةً وَّرَحۡمَةً  ؕ
                                            اِنَّ فِىۡ ذٰ لِكَ لَاٰيٰتٍ لِّقَوۡمٍ يَّتَفَكَّرُوۡنَ </div> “Dan di antara
                                        tanda-tanda kekuasaan-Nya ialah Dia menciptakan untukmu istri-istri dari jenismu
                                        sendiri, supaya kamu cenderung dan merasa tentram kepadanya, dan dijadikan-Nya
                                        di antaramu rasa kasih dan sayang. Sesungguhnya pada yang demikian itu
                                        benar-benar terdapat tanda-tanda bagi kaum yang berpikir.”
                                    </h5>
                                    <h6 style="font-size:18px" class="mt-4 text-center">QS Ar-Rum: 21</h6>
                                </div>
                                <!-- <div class="col-md-12 mt-4"> <img src="webview/template/bg/" class="d-block mx-auto" style="max-width: 350px;width: 100%;"> </div> -->
                            </div>
                        </div> <!-- </div> </div> -->
                    </div>
                </div> <!-- business info end -->
                <!-- business info -->
                <div id="galeri" class="section-full bg-main content-inner py-0">
                    <div class="container py-5 my-0 wow fadeInUp themeWeb" data-wow-duration="2s" data-wow-delay="0.2s">
                        <!-- <div class="row justify-content-center"> <div class="col-md-12"> -->
                        <div class="borderStyle">
                            <div class="imageTop"></div>
                            <div class="imageTopRight"></div>
                            <div class="imageBtm"></div>
                            <div class="imageBtmLeft"></div>
                            <div class="row justify-content-center">
                                <!-- <div class="col-md-12 mb-4"> <img src="webview/template/bg/" class="d-block mx-auto" style="max-width: 350px;width: 100%;"> </div> -->
                                <div class="col-md-8">
                                    <h2 class="text-center mb-5" style="font-size: 35px">Memorable Moment</h2>
                                    <div class="clearfix">
                                        <ul id="masonry" class="dlab-gallery-listing gallery-grid-4 lightgallery gallery port-style1">
                                            <li class="card-container col-lg-6 col-md-6 col-sm-6 m-b30 wow fadeIn" data-wow-duration="2s" data-wow-delay="0.2s">
                                                <div class="dlab-box dlab-gallery-box">
                                                    <div class="dlab-media dlab-img-overlay8 primary"> <a href="javascript:void(0);"> <img src="assets/uploads/imgproject/Foto1.jpg" class="fit_pic" alt=""> </a>
                                                        <div class="overlay-bx">
                                                            <div class="overlay-icon text-center">
                                                                <div class="port-box"> <span data-exthumbimage="assets/uploads/imgproject/Foto1.jpg" data-src="assets/uploads/imgproject/Foto1.jpg" class="check-km port-full la la-plus" title=""></span> </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="card-container col-lg-6 col-md-6 col-sm-6 m-b30 wow fadeIn" data-wow-duration="2s" data-wow-delay="0.2s">
                                                <div class="dlab-box dlab-gallery-box">
                                                    <div class="dlab-media dlab-img-overlay8 primary"> <a href="javascript:void(0);"> <img src="assets/uploads/imgproject/Foto2.jpg" class="fit_pic" alt=""> </a>
                                                        <div class="overlay-bx">
                                                            <div class="overlay-icon text-center">
                                                                <div class="port-box"> <span data-exthumbimage="assets/uploads/imgproject/Foto2.jpg" data-src="assets/uploads/imgproject/Foto2.jpg" class="check-km port-full la la-plus" title=""></span> </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="card-container col-lg-6 col-md-6 col-sm-6 m-b30 wow fadeIn" data-wow-duration="2s" data-wow-delay="0.2s">
                                                <div class="dlab-box dlab-gallery-box">
                                                    <div class="dlab-media dlab-img-overlay8 primary"> <a href="javascript:void(0);"> <img src="assets/uploads/imgproject/Foto3.jpg" class="fit_pic" alt=""> </a>
                                                        <div class="overlay-bx">
                                                            <div class="overlay-icon text-center">
                                                                <div class="port-box"> <span data-exthumbimage="assets/uploads/imgproject/Foto3.jpg" data-src="assets/uploads/imgproject/Foto3.jpg" class="check-km port-full la la-plus" title=""></span> </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="card-container col-lg-6 col-md-6 col-sm-6 m-b30 wow fadeIn" data-wow-duration="2s" data-wow-delay="0.2s">
                                                <div class="dlab-box dlab-gallery-box">
                                                    <div class="dlab-media dlab-img-overlay8 primary"> <a href="javascript:void(0);"> <img src="assets/uploads/imgproject/Foto4.jpg" class="fit_pic" alt=""> </a>
                                                        <div class="overlay-bx">
                                                            <div class="overlay-icon text-center">
                                                                <div class="port-box"> <span data-exthumbimage="assets/uploads/imgproject/Foto4.jpg" data-src="assets/uploads/imgproject/Foto4.jpg" class="check-km port-full la la-plus" title=""></span> </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div style="padding:20px;background: #fafafa;opacity:0.9;box-shadow: rgb(206 206 204 / 40%) 0px 0px 25px 5px;border-radius: 30px;" class="wow bounceInUp" data-wow-duration="2s" data-wow-delay="0.2s">
                                        <h2 class="text-center my-4" style="font-size: 35px">Our Story</h2>
                                        <p class="text-center">Awal hubungan kita bertemu di restoran saat buka puasa
                                            bersama, sebelumnya memang sudah dikenalkan oleh teman dan hanya sekedar tau
                                            lewat instagram aja. <br /> <br /> Dan akhirnya kita bertemu juga pas buka
                                            puasa bersama, disitu lucu yaa karna kita udh tau kalau kita sama-sama
                                            pengen kenal jadinya tebar pesona deh hehe. <br /> <br /> Setelah kenalan
                                            dan selesai acara buka puasa bersama kita jadi berlanjut deh PDKT, chatan,
                                            telfonan dll. Berjalannya waktu kita semakin kenal dan dekat. <br /> <br />
                                            4 Agustus 2013 <br /> akhirnya isa beranikan diri ngomong ke feby kalau mau
                                            jadi pacar feby, ga kerasa ya udh 9 tahun aja kita sama-sama. <br /> <br />
                                            Banyak cerita dan pengalaman kita lewati. Alhamdulillah hubungan kita
                                            berlanjut ke jenjang yang lebih serius dan memutuskan untuk menikah.<br />
                                            <br /> Di tahun 2022 yg sangat spesial ini, momen spesial kita akan dimulai
                                            dari titik ini, momen kebahagiaan bersama membangun keluarga kecil kita.
                                            Semoga Allah SWT memberikan keberkahan untuk pernikahan kita Aamiin. <br />
                                            <br /> Kebahagiaan di hari yang sakral ini, tentunya tak akan lengkap tanpa
                                            doa dan restu dari sahabat dan keluarga.
                                        </p>
                                    </div>
                                </div>
                                <!-- <div class="col-md-12 mt-4"> <img src="webview/template/bg/" class="d-block mx-auto" style="max-width: 350px;width: 100%;"> </div> -->
                            </div>
                        </div> <!-- </div> </div> -->
                    </div>
                </div> <!-- business info end -->
                <!-- business info -->
                <div class="section-full bg-main content-inner py-0">
                    <div class="container py-5 my-0 wow zoomInUp themeWeb" data-wow-duration="2s" data-wow-delay="0.2s">
                        <!-- <div class="row justify-content-center"> <div class="col-md-12"> -->
                        <div class="borderStyle">
                            <div class="imageTop"></div>
                            <div class="imageTopRight"></div>
                            <div class="imageBtm"></div>
                            <div class="imageBtmLeft"></div>
                            <div class="row justify-content-center">
                                <!-- <div class="col-md-12 mb-4"> <img src="webview/template/bg/" class="d-block mx-auto" style="max-width: 350px;width: 100%;"> </div> -->
                                <div class="col-md-8 text-center">
                                    <h2 style="font-size: 35px;  ">Wedding Gift</h2>
                                    <p>Doa Restu Anda merupakan karunia yang sangat berarti bagi kami. Dan jika memberi
                                        adalah ungkapan tanda kasih Anda, Anda dapat memberi kado secara cashless.</p>
                                    <div> <img src="webview/template/front/amplop/40fc5c042265bc203fea6827bca563ca.png" style="max-height:85px; width: 160px;"> </div>
                                    <h6 class="mb-3"> 4970657024<br /> a.n Ronggo Kinantoputro </h6>
                                    <div class="text-center mb-4"> <button class="btn btn-outline btnColor" style="border-radius: 30px;border:0px;padding:10px;" onclick="copasLink('4970657024')"><i class="fa fa-copy"></i> Salin Nomer
                                            Rekening</button> </div>
                                    <div class="mb-3"> <img src="webview/template/front/amplop/bsi.png" style="max-height:85px; width: 160px;"> </div>
                                    <h6 class="mb-3"> 7211400147<br /> a.n Ronggo Kinantoputro </h6>
                                    <div class="text-center mb-4"> <button class="btn btn-outline btnColor" style="border-radius: 30px;border:0px;padding:10px;" onclick="copasLink('7211400147')"><i class="fa fa-copy"></i> Salin
                                            Nomer Rekening</button> </div>
                                </div>
                                <!-- <div class="col-md-12 mt-4"> <img src="webview/template/bg/" class="d-block mx-auto" style="max-width: 350px;width: 100%;"> </div> -->
                            </div>
                        </div> <!-- </div> </div> -->
                    </div>
                </div> <!-- business info end -->
                <!-- business info -->
                <div id="ucapan" class="section-full bg-main content-inner py-0">
                    <div class="container py-5 my-0 wow fadeInUp themeWeb" data-wow-duration="2s" data-wow-delay="0.2s">
                        <!-- <div class="row justify-content-center"> <div class="col-md-12"> -->
                        <div class="borderStyle">
                            <div class="imageTop"></div>
                            <div class="imageTopRight"></div>
                            <div class="imageBtm"></div>
                            <div class="imageBtmLeft"></div>
                            <div class="row justify-content-center">
                                <h2 class="text-center" style="font-size: 40px;">Kirim Ucapan & Doa Restu</h2>
                                <div class="col-md-8 text-center">
                                    <form class="form-data" id="form-data" method="post">
                                        <div class="text-center mb-4">
                                            <input type="hidden" name="id" id="id">

                                            <label for="nama" class="col-4 col-form-label">Nama</label>

                                            <div class="col-12">
                                                <input id="nama" name="nama" type="text" class="form-control" style="background-color: #f5d3c9; border-radius: 10px; ">
                                                <p class="text-danger" id="err_nama"></p>
                                            </div>

                                        </div>
                                        

                                        <div class="text-center mb-4">

                                            <label for="isi_pesan" class="col-5 col-form-label">Ucapan</label>

                                            <div class="col-12">
                                                <textarea id="isi_pesan" name="isi_pesan" cols="40" rows="40" class="form-control" style="background-color: #f5d3c9; border-radius: 10px; height: 70px;"></textarea>
                                                <p class="text-danger" id="err_isi_pesan"></p>
                                            </div>

                                        </div>

                                        <div class="text-center mb-4">

                                            <label class="col-5">Kehadiran</label>

                                            <div class="text-center mb-4">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="kehadiran" id="kehadiran1" value="Hadir">
                                                    <label class="form-check-label" for="kehadiran1">Hadir</label>

                                                    <input class="form-check-input" type="radio" name="kehadiran" id="kehadiran2" value="Tidak">
                                                    <label class="form-check-label" for="kehadiran2">Tidak</label>
                                                </div>
                                                <p class="text-danger" id="err_kehadiran"></p>

                                            </div>

                                        </div>

                                        <div class="text-center mb-4">

                                            <button style="border-radius: 30px;border:0px;padding:10px; background-color: #f5d3c9; color: black" type="button" name="simpan" id="simpan"><i class="fa fa-send"></i> Kirim </button>

                                        </div>
                                    </form>
                                </div>
                            </div>

                            <h2 class="text-center mt-5" style="font-size: 35px;"><i class="fa fa-heart"></i> Lovely Words <i class="fa fa-heart"></i></h2>

                            <div class="data"></div>

                        </div>

                    </div>
                </div> <!-- business info end -->
            </div>
        </div> <!-- Content END-->
        <!-- pesan -->


        <!-- Footer -->
        <footer class="site-footer style1">
            <!-- <div class="footer-bottom border-0 bg-main"> -->
            <div class="footer-bottom border-0 bg-main">
                <div class="container">
                    <div class="row">
                        
                    </div>
                </div>
            </div>
        </footer> <!-- Footer End -->
        <!-- <button class="scroltop fa fa-chevron-up" ></button> -->
    </div>

    <!-- JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- DataTable -->
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            //Mengirimkan Token Keamanan
            $.ajaxSetup({
                headers: {
                    'Csrf-Token': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $('.data').load("data.php");
        });
    </script>

    <script type="text/javascript">
        $(document).ready(function() {
            //Mengirimkan Token Keamanan
            $.ajaxSetup({
                headers: {
                    'Csrf-Token': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $('.data').load("data.php");
            $("#simpan").click(function() {
                var data = $('.form-data').serialize();
                var kehadiran1 = document.getElementById("kehadiran1").value;
                var kehadiran2 = document.getElementById("kehadiran2").value;
                var nama = document.getElementById("nama").value;
                var isi_pesan = document.getElementById("isi_pesan").value;

                if (nama == "") {
                    document.getElementById("err_nama").innerHTML = "Nama  Harus Diisi";
                } else {
                    document.getElementById("err_nama").innerHTML = "";
                }
                if (isi_pesan == "") {
                    document.getElementById("err_isi_pesan").innerHTML = "isi_pesan  Harus Diisi";
                } else {
                    document.getElementById("err_isi_pesan").innerHTML = "";
                }

                if (document.getElementById("kehadiran1").checked == false && document.getElementById("kehadiran2").checked == false) {
                    document.getElementById("err_kehadiran").innerHTML = "Jenis Kehadiran Harus Dipilih";
                } else {
                    document.getElementById("err_kehadiran").innerHTML = "";
                }

                if (nama != "" && isi_pesan != "" && (document.getElementById("kehadiran1").checked == true || document.getElementById("kehadiran2").checked == true)) {
                    $.ajax({
                        type: 'POST',
                        url: "form_action.php",
                        data: data,
                        success: function() {
                            $('.data').load("data.php");
                            document.getElementById("id").value = "";
                            document.getElementById("form-data").reset();
                        },
                        error: function(response) {
                            console.log(response.responseText);
                        }
                    });
                }

            });
        });
    </script>

    <!-- JAVASCRIPT FILES ========================================= -->
    <script src="webview/template/front/pata/js/jquery.min.js"></script><!-- JQUERY.MIN JS -->
    <script src="webview/template/front/pata/plugins/wow/wow.js"></script><!-- WOW JS -->
    <script src="webview/template/front/pata/plugins/bootstrap/js/popper.min.js"></script><!-- BOOTSTRAP.MIN JS -->
    <script src="webview/template/front/pata/plugins/bootstrap/js/bootstrap.min.js"></script><!-- BOOTSTRAP.MIN JS -->
    <script src="webview/template/front/pata/plugins/bootstrap-select/bootstrap-select.min.js"></script><!-- FORM JS -->
    <script src="webview/template/front/pata/plugins/bootstrap-touchspin/jquery.bootstrap-touchspin.js"></script>
    <!-- FORM JS -->
    <script src="webview/template/front/pata/plugins/lightgallery/js/lightgallery-all.min.js"></script>
    <!-- LIGHTGALLERY JS -->
    <script src="webview/template/front/pata/plugins/magnific-popup/magnific-popup.js"></script><!-- LIGHTGALLERY JS -->
    <script src="webview/template/front/pata/plugins/counter/waypoints-min.js"></script><!-- WAYPOINTS JS -->
    <script src="webview/template/front/pata/plugins/counter/counterup.min.js"></script><!-- COUNTERUP JS -->
    <script src="webview/template/front/pata/plugins/imagesloaded/imagesloaded.js"></script><!-- IMAGESLOADED -->
    <script src="webview/template/front/pata/plugins/masonry/masonry-3.1.4.js"></script><!-- MASONRY -->
    <script src="webview/template/front/pata/plugins/masonry/masonry.filter.js"></script><!-- MASONRY -->
    <script src="webview/template/front/pata/plugins/owl-carousel/owl.carousel.js"></script><!-- OWL SLIDER -->
    <script src="webview/template/front/pata/plugins/scroll/scrollbar.min.js"></script><!-- OWL SLIDER -->
    <script src="webview/template/front/pata/js/custom.js"></script><!-- CUSTOM FUCTIONS -->
    <script src="webview/template/front/pata/js/dz.carousel.js"></script><!-- SORTCODE FUCTIONS -->

    <!-- <script src="webview/template/front/pata/js/dz.ajax.js"></script> <script src="webview/template/front/pata/plugins/loading/anime.js"></script> <script src="webview/template/front/pata/plugins/loading/anime-app.js"></script> -->
    <script type="text/javascript">
        function openInvitation() {
            $("body").removeClass("modal-opened");
            $(".modalUndangan").animate({
                top: '100vh',
                opacity: '0'
            });
            // $(".modalUndangan").fadeOut(1000);
            // $(".modalUndangan").css('display','none');

            // cari panjang halaman website
            var panjangHalaman = $(document).height();
            var totalPanjang = panjangHalaman * 0.4;
            // console.log(panjangHalaman);

            // trigger when scroll over digit pixel
            var hasBeenTrigged = false;
            $(window).scroll(function() {
                if ($(this).scrollTop() >= totalPanjang && !
                    hasBeenTrigged) { // if equal to or greater than 100 and hasBeenTrigged is set to false.
                    // alert("You've scrolled 100 pixels.");

                    $('#myModal').modal("show");
                    hasBeenTrigged = true;
                }
            });
            // end trigger when scroll

            $("#myAudio").get(0).play();
        }


        $(document).ready(function() {

            var playing = true;
            $('.btnSong').click(function() {
                if (playing == false) {
                    document.getElementById('myAudio').play();
                    playing = true;
                    $(this).html('<i class="fa fa-pause"></i>');

                } else {
                    document.getElementById('myAudio').pause();
                    playing = false;
                    $(this).html('<i class="fa fa-play"></i>');
                }
            });



            // Scroll smooth
            $('a[href*="#"]')
                // Remove links that don't actually link to anything
                .not('[href="#"]')
                .not('[href="#0"]')
                .not('[href^="#collapse"]')
                .not('[href^="#cek"]')
                .click(function(event) {
                    // On-page links
                    if (
                        location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') &&
                        location.hostname == this.hostname
                    ) {
                        // Figure out element to scroll to
                        var target = $(this.hash);

                        target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                        // Does a scroll target exist?
                        if (target.length) {
                            // Only prevent default if animation is actually gonna happen
                            event.preventDefault();
                            $('html, body').animate({
                                scrollTop: target.offset().top
                                // scrollTop: target.offset().top+cek

                            }, 400, function() {
                                // Callback after animation
                                // Must change focus!
                                var $target = $(target);
                                $target.focus();
                                if ($target.is(":focus")) { // Checking if the target was focused
                                    return false;
                                } else {
                                    $target.attr('tabindex',
                                        '-1'); // Adding tabindex for elements not focusable
                                    $target.focus(); // Set focus again
                                };
                            });
                        }
                    }
                });



        });
    </script>
    <script>
        new WOW().init();
    </script>
    <script>
        // Set the date we're counting down to
        // var countDownDate = new Date("Jan 5, 2022 15:37:25").getTime();
        // var countDownDate = new Date("7/9/2021 23:39:00").getTime();
        var countDownDate = new Date("03/11/2023 09:00:00").getTime(); // m/d/Y H:i:s

        // Update the count down every 1 second
        var x = setInterval(function() {

            // Get today's date and time
            var now = new Date().getTime();

            // Find the distance between now and the count down date
            var distance = countDownDate - now;

            // Time calculations for days, hours, minutes and seconds
            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

            if (days > 0 || hours > 0 || minutes > 0 || seconds > 0) {
                document.getElementById("days").innerHTML = days;
                document.getElementById("hours").innerHTML = hours;
                document.getElementById("mins").innerHTML = minutes;
                document.getElementById("secs").innerHTML = seconds;
            } else {
                document.getElementById("days").innerHTML = '00';
                document.getElementById("hours").innerHTML = '00';
                document.getElementById("mins").innerHTML = '00';
                document.getElementById("secs").innerHTML = '00';
            }



            // If the count down is finished, write some text
            if (distance < 0) {
                clearInterval(x);
                // document.getElementById("cdExpired").innerHTML = "COUNTDOWN ALREADY EXPIRED";
            }
        }, 1000);



        document.onkeydown = function(e) {
            if (event.keyCode == 123) {
                return false;
            }
            if (e.ctrlKey && e.shiftKey && e.keyCode == 'I'.charCodeAt(0)) {
                return false;
            }
            if (e.ctrlKey && e.shiftKey && e.keyCode == 'C'.charCodeAt(0)) {
                return false;
            }
            if (e.ctrlKey && e.shiftKey && e.keyCode == 'J'.charCodeAt(0)) {
                return false;
            }
            if (e.ctrlKey && e.keyCode == 'U'.charCodeAt(0)) {
                return false;
            }
        }


        // klik kanan
        // if (document.addEventListener) {
        //     document.addEventListener('contextmenu', function (e) {

        //         e.preventDefault();
        //     }, false);
        // } else {
        //     document.attachEvent('oncontextmenu', function () {

        //         window.event.returnValue = false;
        //     });
        // }
    </script>
    <script src="webview/template/front/jquery.transit.js"></script>
    <script type="text/javascript">
        $(function() {


            //animasi falling
            var snowflakeURl = [
                // 'webview/template/front/falling-effect/rose1.png',
                // 'webview/template/front/falling-effect/rose2.png',
                // 'webview/template/front/falling-effect/rose1.png',
                'webview/template/front/falling-effect/kelopak.png',
                'webview/template/front/falling-effect/kelopak.png',
                'webview/template/front/falling-effect/kelopak.png',
                'webview/template/front/falling-effect/kelopak.png',
                'webview/template/front/falling-effect/kelopak.png',
                'webview/template/front/falling-effect/kelopak.png',
                
            ]

            var container = $("#content");
            visualWidth = container.width();
            visualHeight = container.height();
            //Get the width and height of content
            ///////
            //Snowflakes / /
            ///////
            function snowflake() {
                // Snowflake container
                var $flakeContainer = $('#snowflake');

                // Six random graphs
                function getImagesName() {
                    return snowflakeURl[[Math.floor(Math.random() * 7)]];
                }
                // Create a snowflake element
                function createSnowBox() {
                    var url = getImagesName();
                    return $('<div class="snowbox" />').css({
                        // 'width': 40,
                        // 'height': 45,
                        'width': 50,
                        'height': 55,
                        'position': 'fixed',
                        'backgroundSize': 'cover',
                        'zIndex': 17000,
                        // 'top': '-41px',
                        // 'backgroundImage': 'url(' + url + ')'
                        // 'backgroundImage': 'url(webview/template/front/falling-effect/flower-2.png)'
                        'backgroundImage': 'url(' + url + ')'
                    }).addClass('snowRoll');
                }
                // Began to float flowers
                setInterval(function() {
                    // Trajectory of motion
                    var startPositionLeft = Math.random() * visualWidth - 100,
                        startOpacity = 1,
                        endPositionTop = visualHeight - 40,
                        endPositionLeft = startPositionLeft - 100 + Math.random() * 500,
                        duration = visualHeight * 10 + Math.random() * 5000;

                    // Random transparency, no less than 0.5
                    var randomStart = Math.random();
                    randomStart = randomStart < 0.5 ? startOpacity : randomStart;
                    // Create a snowflake
                    var $flake = createSnowBox();
                    // Design start position
                    $flake.css({
                        left: startPositionLeft,
                        opacity: randomStart
                    });
                    // Add to container
                    $flakeContainer.append($flake);
                    // Start animation
                    /* $flake.transition({
                        top: endPositionTop,
                        left: endPositionLeft,
                        opacity: 0.7
                    }, duration, 'ease-out', function() {
                        $(this).remove() //Delete after end
                    }); */

                    //jquery does not introduce other js writing methods
                    $flake.animate({
                        top: endPositionTop,
                        left: endPositionLeft,
                        opacity: 0.7
                    }, duration, 'linear', function() {
                        $(this).remove() //Delete after end
                    });

                }, 1200); // default 200
            }
            snowflake()
            //Execution function

        })
    </script>
    <script>
        window.fbAsyncInit = function() {
            FB.init({
                appId: '550695616171149',
                autoLogAppEvents: true,
                xfbml: true,
                version: 'v3.2'
            });
        };
    </script>
    <!-- <script async defer src="../connect.facebook.net/id_ID/sdk.js"></script>  -->
    <!-- COMMENTS -->
    <link rel="stylesheet" href="webview/template/front/viima-jquery-comments/css/jquery-comments.css">
    <script src="webview/template/front/viima-jquery-comments/js/jquery-comments.js"></script> <!-- END COMMENTS -->
    <script>
        //     function komentarCustom(selector) {

        //         $(selector).comments({

        //             // Current User
        //             profilePictureURL: 'webview/template/front/img/komentar-profile.png',
        //             youText: '',


        //             fieldMappings: {
        //                 id: 'id_komentar_undangan',
        //                 parent: 'sub_id_komentar',
        //                 created: 'tgl_komentar_undangan',
        //                 modified: 'modified_komentar_undangan',
        //                 content: 'isi_komentar_undangan',
        //                 fullname: 'nama_komentar_undangan',
        //                 profileURL: 'profile_url',
        //                 profilePictureURL: 'gambar',
        //                 isNew: 'is_new',
        //                 createdByAdmin: 'created_by_admin',
        //                 // createdByCurrentUser: 'id_user',
        //                 createdByCurrentUser: 'created_by_current_user',
        //                 // upvoteCount: 'upvote_count',
        //                 // userHasUpvoted: 'user_has_upvoted'
        //             },

        //             refresh: function () {
        //                 $(selector).addClass('rendered');
        //             },

        //             getComments: function (success, error) {
        //                 $.ajax({
        //                     type: 'get',
        //                     // url: url_get,
        //                     url: 'komentar/getKomentar/4862',
        //                     dataType: 'json',
        //                     // processData: false, 
        //                     // contentType: false,
        //                     // enctype: 'multipart/form-data',
        //                     success: function (commentsArray) {
        //                         // console.log(commentsArray);
        //                         success(commentsArray);


        //                     },
        //                     error: error
        //                 });
        //             },

        //             postComment: function (commentJSON, success, error) {
        //                 // var val = {
        //                 //     // commentJSON : JSON.stringify(commentJSON),
        //                 //     commentJSON,
        //                 //     nama_komentar_undangan: $("#namaKomentar").val(),
        //                 // }

        //                 commentJSON.namaKomentar = $("#nama_komentar_undangan").val();

        //                 // console.log(commentJSON);
        //                 // console.log(val);
        //                 $.ajax({
        //                     type: 'post',
        //                     // url: url_post,
        //                     url: 'komentar/postKomentar/4862',
        //                     data: commentJSON,
        //                     // data: val,
        //                     dataType: 'json',
        //                     // processData: false, 
        //                     // contentType: false,
        //                     // enctype: 'multipart/form-data',
        //                     success: function (comment) {
        //                         $("#nama_komentar_undangan").val("");
        //                         // console.log(comment);
        //                         success(comment)
        //                     },
        //                     error: error
        //                 });
        //                 // console.log(val);
        //             },

        //             putComment: function (commentJSON, success, error) {
        //                 $.ajax({
        //                     type: 'post',
        //                     // type: 'put',
        //                     // url: url_put + commentJSON.id_komentar,
        //                     url: 'komentar/putKomentar/' + commentJSON
        //                         .id_komentar_undangan,
        //                     data: commentJSON,
        //                     dataType: 'json',
        //                     success: function (comment) {
        //                         // console.log(comment);
        //                         success(comment)
        //                     },
        //                     error: error
        //                 });
        //             },

        //             deleteComment: function (commentJSON, success, error) {
        //                 $.ajax({
        //                     type: 'delete',
        //                     url: 'komentar/deleteKomentar/' + commentJSON
        //                         .id_komentar_undangan,
        //                     success: success,
        //                     error: error
        //                 });
        //                 // console.log(success);
        //             },

        //             // Strings
        //             textareaPlaceholderText: "Tulis ucapan & doa restu...",
        //             newestText: 'Ucapan Terbaru',
        //             oldestText: 'Paling Lama',
        //             // popularText: '',
        //             // attachmentsText: '',
        //             sendText: 'Kirim',
        //             replyText: 'Balas',
        //             editText: 'Ubah',
        //             editedText: 'Diubah',
        //             // youText: 'Anda',
        //             saveText: 'Perbarui',
        //             deleteText: 'Hapus',
        //             viewAllRepliesText: 'Lihat __replyCount__ Balasan',
        //             hideRepliesText: 'Sembunyikan',
        //             noCommentsText: 'Data Belum Ditemukan',
        //             // noAttachmentsText: 'There are no attachments',
        //             // attachmentDropText: 'Drop here',

        //             //Colors
        //             highlightColor: '#23A6F0',
        //             // deleteButtonColor: 'red',

        //             // Functionalities
        //             // currentUserIsAdmin: true, // non-aktif
        //             enableDeleting: false, // false
        //             enableEditing: false, // false

        //             enableReplying: false,
        //             enableUpvoting: false,

        //             // enableDeletingCommentWithReplies: true,
        //             // enableAttachments: true,
        //             // enableHashtags: true,
        //             enableNavigation: false,
        //             // postCommentOnEnter: true,
        //             // forceResponsive: true,
        //             // readOnly: true,

        //             // Formatters
        //             // textFormatter: function(text) {
        //             //     return i18n.translate(text);
        //             // },
        //             // timeFormatter: function(time) {
        //             //     return moment(time).fromNow();
        //             // },

        //             // Miscellaneous
        //             // defaultNavigationSortKey: 'popularity',
        //             roundProfilePictures: true,
        //             // textareaRows: 1,
        //             // textareaRowsOnFocus: 3,
        //             // textareaMaxRows: false,
        //             maxRepliesVisible: 0

        //         });

        //     }

        //     $(function () {


        //         komentarCustom("#comments-container");


        //     });
        // 
    </script>
    <script>
        function copasLink(value) {
            var tempInput = document.createElement("input");
            tempInput.style = "position: absolute; left: -1000px; top: -1000px";
            tempInput.value = value;
            document.body.appendChild(tempInput);
            tempInput.select();
            document.execCommand("copy");
            document.body.removeChild(tempInput);
            alert("Berhasil Salin Nomer Rekening: " + value);
        }
    </script>
</body>

</html>