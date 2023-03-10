<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web_S&W</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="./CSS/styles.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link href="./aos-master/dist/aos.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.3.js"></script>
    <script src="https://use.fontawesome.com/d62e012459.js"></script>
    <script src="./aos-master/dist/aos.js"></script>

    <style>
        @import url('https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700&subset=vietnamese');

        .clearf {
            padding: 0;
            margin: 0;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            color: #10304c;
            margin: 0 0 13px 0;
            font-weight: 500;
            line-height: 1.2
        }

        h1 {
            font-size: 36px;
        }

        h2 {
            font-size: 28px;
        }

        h3 {
            font-size: 24px;
        }

        h4 {
            font-size: 13px;
            line-height: 18px;
        }

        h5 {
            font-size: 12px;
            line-height: 18px;
        }

        h6 {
            font-size: 10px;
            line-height: 18px;
            text-transform: uppercase;
        }

        ul,
        li {
            list-style-type: none;
        }

        a {
            text-decoration: none;
            color: #000;
            text-transform: uppercase;

        }

        .menu-desktop a {
            transition: opacity 150ms linear, color 150ms linear, background 150ms linear;
        }



        .menu-desktop a:hover {
            color: #000;
            color: rgba(0, 0, 0, 0.3);
        }

        p {
            margin: 0 0 10px 0;
            line-height: 21px;
        }

        * {
            font-family: 'Quicksand', sans-serif !important;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .main-body {
            line-height: 1.4;
            font-size: 14px;
            color: #252a2b;
            background: #fff;
            background-color: #fff;
        }

        @media(min-width:1200px) {
            .container-fluid {
                max-width: 1600px;
                padding: 0 85px;
            }

            .wrapper-home-information .container-fluid {
                padding-left: 0;
            }

            .layout-pageContact .container-fluid {
                padding-left: 0;
            }
        }

        .container-fluid {
            max-width: 1600px;
            margin-left: auto;
            margin-right: auto;
        }



        .topbar-content p {
            padding: 4px 0;
            margin-bottom: 0;
            font-size: 12px;
        }

        .text-center {
            text-align: center;

        }

        .top-header {
            position: relative;
        }

        .menu-logo {
            /* position: absolute; */
            width: 100%;
            left: 0;
            right: 0;
            bottom: 0;
            display: block;
            background-color: #fff;
            border-bottom: 1px solid #f8f8f8;
        }

        .main-nav {
            background-color: #fff;
        }

        .main-nav>ul>li {
            position: relative;
            float: none;
            display: inline-block;
            z-index: 10
        }

        #slider-link {
            margin: 0 44px;
            display: block;
        }

        #slider-link img {
            width: 100%;
        }

        .wrap-logo a img {
            width: 100%;
            height: 50px;
        }

        .navbar {
            padding: 0;
        }

        .type-home a {
            border-bottom: 2px solid #252a2b;
        }

        li.type-menu a,
        .type-home a {
            display: block;
            font-size: 15px;
            font-weight: 400;
            padding: 25px 0;
            margin: 0 12px;
            position: relative;
            text-transform: uppercase;

        }

        .main-nav li {
            position: relative;
        }

        .main-nav li a {
            display: block;

        }

        li i.bi-chevron-down {
            font-size: 13px;
            margin: 4px;
            margin-bottom: 2px;
        }

        .main-nav ul.sub-menu {
            position: absolute;
            background-color: #fff;
            min-width: 120px;
            display: none;
            border-top: 2px solid #252a2b;
        }

        ul.sub-menu a {
            padding: 9px 18px;
            list-style: none;
            font-size: 14px;
            margin: 0;
            white-space: nowrap;
        }

        ul.sub-menu li {
            border-top: 1px solid #ecf0f1;
            display: list-item;
        }

        ul.sub-menu a:hover {
            color: #000;
        }



        li.type-menu:hover>ul.sub-menu {
            display: block;

        }




        .flex-headercontent {
            display: flex;
            align-items: center;
            justify-content: space-between;

        }

        .header {
            background-color: #10304c;
            color: #fff;
        }

        .img-icon {
            height: auto;
            width: 20px;
        }

        .flex-headercontent>div[class*='header-upper-'] {
            padding: 0 15px;
        }

        .header-text {
            display: inline-block;
            margin-left: 12px;
            position: relative;
        }

        @media(min-width: 992px) {

            .header-dropdown_content {
                width: 340px;
            }
        }




        .header-dropdown_content {
            display: none;
            position: absolute;
            visibility: visible;
            background-color: #fff;
            min-width: 280px;
            right: -40px;
            left: auto;
            top: calc(100% + 15px);
            color: #000;
            border: 1px solid #dfe3e8;
            box-shadow: 0 1px 5px 2px rgb(0 0 0 / 10%);
            border-radius: 3px;
            z-index: 1;
            padding: 20px 0px;
        }

        .site_account_inner input {
            font-size: 16px;
            margin-bottom: 14px;
        }

        .header-dropdown_content #siteNav-account {
            padding: 0;
        }

        .panel {
            display: flex;
        }

        .box-triangle {
            position: absolute;
            box-shadow: 0 1px 5px 2px rgb(0 0 0 / 10%);
            width: 14px;
            height: 14px;
            background-color: #fff;
            left: calc(100% - 59px);
            top: -7px;
            transform: rotate(45deg);
            border-left: 7px solid #10304c;
            border-right: 7px solid transparent;
            border-top: 7px solid #10304c;
            border-bottom: 7px solid transparent;


        }

        .site_account_header .site_account_title {
            margin-bottom: 4px;
            font-size: 17px;
            font-weight: 500;
            font-style: normal;
            text-transform: uppercase;
            color: #10304c;
            line-height: 1.2;
        }

        .site_account_legend {
            font-size: 12px;
            color: #677279;
        }

        .form__field {
            display: block;
            padding: 14px 10px 3px;
            border-radius: 2px;
            border: 1px solid #d4d6d8;
            width: 100%;
            line-height: normal;
            height: 42px;
            color: #1e2d7d;

            resize: none;
            font-size: 12px;
            outline: none;
            box-shadow: 0 1px rgb(212 214 216 / 25%) inset;
            transition: border-color 0.2s ease-in-out, box-shadow 0.2s ease-in-out, color 0.2s ease-in-out;
        }

        .form__submit {
            width: 100%;
            outline: none;
            padding: 0px 28px;
            height: 42px;
            line-height: 42px;
            border: 1px solid #ffffff;
            position: relative;
            transition: 1s;
            transition-delay: 0.45s;
            background-color: #4a90e2;
        }

        .form__submit:hover {
            background-color: rgba(0, 0, 0, 0.02);
        }

        #form_submit-login p {
            color: #000;
        }

        #form_submit-login span {
            position: absolute;
            background-color: #000;
            display: block;
            transition: all 0.15s linear;
        }

        #form_submit-login span:nth-child(1) {
            top: 0;
            left: 0;
            width: 0%;
            height: 1px;

        }

        #form_submit-login span:nth-child(2) {
            top: 0;
            right: 0;
            width: 1px;
            height: 0%;
            transition-delay: 0.15s;
        }

        #form_submit-login span:nth-child(3) {
            bottom: 0;
            right: 0;
            width: 0%;
            height: 1px;
            transition-delay: 0.3s;
        }

        #form_submit-login span:nth-child(4) {
            bottom: 0;
            left: 0;
            width: 1px;
            height: 0%;
            transition-delay: 0.45s;
        }

        #form_submit-login:hover span:nth-child(odd) {
            width: 100%;
        }

        #form_submit-login:hover span:nth-child(even) {
            height: 100%;
        }


        button.js-link.link {
            border: none;
            background-color: #fff;
        }

        .site_account_secondary-action {
            font-size: 12px;
            text-align: center;
            margin-top: 14px;
        }

        .site_account_secondary-action p {
            margin: 0 0 4px 0;
        }

        .site_account_secondary-action a,
        button {
            color: #4a90e2;
        }

        .classify {
            margin: 50px 0;
        }

        /* .section 

        


        .classify {
            opacity: 0;
        }

        @keyframes bounce {
            from {
                transform: translateY(0px);
            }

            to {
                transform: translateY(60px);
            }
        } */

        .wrapper-heading-home h2 {
            font-size: 37px;
            line-height: 1.6;
            margin: 0;
            font-weight: 500;
            text-transform: uppercase;
        }

        .wrapper-heading-home a:hover {
            color: #000;
        }

        .row {
            margin: 0 15px;
        }

        .content-product-list {
            padding: 0;
            margin: 0;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(15rem, 1fr));
            justify-items: center;
        }


        .content-product-list .product-li {
            width: 100%;
            max-width: 280px;
            padding: 0 15px;
            text-align: center;

        }

        .content-product-list .product-li img {
            width: 100%;
        }

        .content-product-list .product-li .img2 {
            opacity: 0;
            position: absolute;
            top: 0;
            left: 0;

        }

        .content-product-list .product-li:hover .img2 {
            opacity: 1;
            transition: all 0.3s;
        }

        .content-product-list .product-li:hover .product-quick-wiew {
            opacity: 1;
            transition: all 0.3s;
        }


        .product-detail p {
            margin: 0;
            padding: 0;
        }

        .product-detail {
            padding-top: 15px;
            padding-bottom: 50px;
        }

        .buttum {
            background-color: #10304c;
            padding: 10px 32px;
            color: #fff;
            font-size: 12px;
            border: 1px solid #fff;
            position: relative;
            margin: 15px;
        }

        .buttum:hover {
            color: #fff;
        }

        .product-img {
            position: relative;
        }

        .product-img a {
            display: block;
        }

        .product-quick-wiew {
            position: absolute;
            bottom: 0;
            width: 100%;
            display: flex;
            opacity: 0;
            height: 100%;
            align-items: flex-end;


        }

        .action {
            width: 50%;
            height: 15%;
            border: none;
            font-size: 12px;
            font-weight: 300;
            text-transform: capitalize;
        }

        .wraper-home-banner {
            width: 100%;
            height: auto;
            margin-top: 60px;
        }



        .banner-main {

            height: auto;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            overflow: hidden;
        }



        .home-banner {
            width: 33.333%;
            min-width: 280px;
            position: relative;
            overflow: hidden;
        }

        .home-banner:hover img {
            transform: scale(1.2);
        }

        @media (max-width:620px) {
            .wraper-home-banner .home-banner {
                width: 100%;
            }
        }

        @media (max-width:840px) {
            .banner-main {
                display: flex;
                flex-direction: column;
                align-content: center;
            }


            .wraper-home-banner .home-banner {
                display: inline-block;
                width: 50%;
            }
        }

        .block-banner {
            position: relative;
        }

        .block-banner a {
            display: block;
        }

        .block-banner img {
            width: 100%;
            transition: all 6s;

        }

        .btn-banner {
            position: absolute;
            bottom: 50px;
            padding: 0 50px;
            align-items: flex-end;
            width: 100%;
        }


        .btn-banner a {
            font-weight: 400;
            font-size: 13px;
            background-color: rgba(0, 0, 0, 0.3);
            padding: 10px 28px;
            width: 37%;
            min-width: 206px;
            letter-spacing: 1px;
            text-align: center;
            position: relative;

        }

        .btn-banner a:hover {
            background-color: rgba(0, 0, 0, 0.02) !important;
            transition: 1s;
            transition-delay: 0.45s;
            color: #000;
        }



        .btn-banner a span {
            position: absolute;
            background-color: #000;
            display: block;
            transition: all 0.15s linear;
        }

        .btn-banner a span:nth-child(1) {
            top: 0;
            left: 0;
            width: 0%;
            height: 2px;

        }

        .btn-banner a span:nth-child(2) {
            top: 0;
            right: 0;
            width: 2px;
            height: 0%;
            transition-delay: 0.15s;
        }

        .btn-banner a span:nth-child(3) {
            bottom: 0;
            right: 0;
            width: 0%;
            height: 2px;
            transition-delay: 0.3s;
        }

        .btn-banner a span:nth-child(4) {
            bottom: 0;
            left: 0;
            width: 2px;
            height: 0%;
            transition-delay: 0.45s;
        }

        .btn-banner a:hover span:nth-child(odd) {
            width: 100%;
        }

        .btn-banner a:hover span:nth-child(even) {
            height: 100%;
        }


        .btn-banner h3 {
            font-size: 23px;
            color: #000;
        }

        .heading-bottom-main {
            padding-top: 50px;
            padding-bottom: 50px;
        }

        .heading-bottom-main #heading {
            font-size: 37px;
            line-height: 1.6;
            margin: 0;
            font-weight: 500;
        }

        .topfooter {
            background-color: #f3f3f3;
            padding: 15px;
        }

        .footer input {
            height: 46px;
        }


        .title_newsletter {
            display: flex;
            align-items: center;
            width: 26%;
            min-width: 180px;
        }

        .title_newsletter .bi {
            margin-right: 10px;
        }

        .title_newsletter h2 {
            text-align: center;
            margin: 0;
            font-size: 15px;
            font-weight: 400;
        }

        .form_newsletter {
            width: 100%;
            min-width: 200px;
        }

        .form-inline {
            position: relative;
        }

        .form-group {
            display: inline-block;
            margin: 0;
            height: 46px;
            width: 100%;

        }

        .form-control {
            border-radius: 0;
        }

        .btn-email {
            position: absolute;
            border: 1px solid #4a90e2;
            padding: 10px 25px;
            display: inline-block;
            height: 46px;
            text-transform: uppercase;
            font-size: 13px;
            position: absolute;
            right: 0;
            top: 0;
            background-color: #4a90e2;
            display: block;
            color: #fff;
            transition: 1s cubic-bezier(0.075, 0.82, 0.165, 1);
        }

        .btn-email:hover {
            background-color: #fff;
            color: #000;

        }

        .area_phone_contact .number_phone i {
            border: 1px solid #000;
            padding: 4px;
        }

        .area_phone_contact {
            height: 100%;
            align-items: center;
            display: flex;
            min-width: 250px;
        }

        .number_phone {
            margin: 0;
            font-size: 14px;
        }

        .number_phone a {
            color: #254e9e;
            font-size: 16px;
        }


        .main-footer {
            border-top: 1px solid #e7e7e7;
            border-bottom: 1px solid #e7e7e7;
            padding-top: 50px;
            padding-bottom: 30px;
        }

        .footer-list {
            margin-left: 15px;
            margin-right: 15px;

        }

        .footer-col {
            min-width: 155px;
            height: 100%;
            margin-left: 40px;
        }


        @media (max-width: 991px) {
            .footer-list.footer .col-lg {
                width: 50%;

            }

            .footer-list {
                text-align: center;
            }

            .footer-col {
                margin: 0;
            }
        }

        @media (max-width:990px) {
            .footer .col-lg {
                width: 100%;
            }
        }

        .footer h4,
        ul {
            padding-left: 0;
            margin-bottom: 20px;
            font-size: 20px;
        }

        .footer-col-1 img {
            width: 70%;
        }


        .footer-col li,
        h4 {
            font-size: 15px;
        }

        .footer-col #link-facebook {
            font-size: 20px;
            color: #254e9e;
        }

        .bottom-footer {
            margin-top: 20px;
            margin-bottom: 20px;
        }

        .bottom-footer p {
            font-size: 14px;
        }

        .bottom-footer a {
            text-transform: capitalize;
        }

        /* =================Tạo tài khoản người dùng================ */
        .mainContent-theme {
            padding-top: 100px;
            min-height: 80vh;
        }

        .wrapbox-heading-account {
            display: flex;
            display: -webkit-flex;
            align-items: center;
            align-items: center;
            justify-content: center;
        }

        .wrapbox-heading-account .header-page {
            position: relative;
        }

        .wrapbox-heading-account .header-page:after {
            content: "";
            background: #000;
            display: block;
            width: 60px;
            height: 4px;
            margin-top: 70px;
        }

        .wrapbox-heading-account .header-page h1 {
            font-size: 54px;
            font-weight: 700;
            margin: 0px 0;
            line-height: initial;
        }

        .wrapbox-heading-account .header-page p {
            font-size: 14px;
            opacity: .66;
            margin: 20px 0 0 0;
            position: relative;
        }

        .wrapbox-heading-account .header-page p span {
            font-weight: 600;
        }

        .userbox h2 {
            font-size: 20px;
            margin: 0 0 20px;
            font-weight: 600;
        }

        .large_form {
            margin-bottom: 30px;
        }

        .large_form.large_form-mr10 {
            margin-bottom: 10px;
        }

        .icon-field {
            display: none;
        }


        .userbox input {
            width: 100%;
            height: 55px;
            border: 1px solid transparent;
            background: #ededed;
            color: #252a2b;
            padding: 0 20px;
            font-weight: 500;
        }


        .userbox input:focus {
            background: #fff;
            border-color: #ededed;
        }

        .action_account_custommer .action_bottom,
        .action_account_custommer .req_pass {
            display: inline-block;
            vertical-align: middle;
        }

        .action_account_custommer .req_pass {
            margin-left: 20px;
        }

        .userbox .action_bottom {
            padding: 0;
        }

        .userbox .action_bottom .btn {
            display: inline-block;
            border-radius: 0;
            padding: 0 30px;
            height: 55px;
            line-height: 55px;
            text-transform: uppercase;
            font-weight: 600;
            background: transparent;
        }

        .req_pass {
            color: #959898;
            font-weight: 500;
        }

        .come-back {
            margin-top: 35px;
            display: block;
            font-weight: 500;
        }

        .come-back i {
            margin-right: 20px
        }

        .userbox .errors a {
            color: red;
        }

        @-moz-keyframes ripple {

            5%,
            100% {
                opacity: 0;
            }

            5% {
                opacity: 1;
            }
        }

        @-webkit-keyframes ripple {

            5%,
            100% {
                opacity: 0;
            }

            5% {
                opacity: 1;
            }
        }

        @keyframes ripple {

            5%,
            100% {
                opacity: 0;
            }

            5% {
                opacity: 1;
            }
        }

        #form-gender input[type="radio"] {
            display: none;
        }

        #form-gender input[type="radio"]+label {
            position: relative;
            cursor: pointer;
            padding-left: 28px;
            margin: 0 20px 0 0;
        }

        #form-gender input[type="radio"]+label:before,
        input[type="radio"]+label:after {
            content: "";
            position: absolute;
            border-radius: 50%;
            transition: all 0.3s ease;
        }

        #form-gender input[type="radio"]+label:before {
            top: 0;
            left: 0;
            width: 18px;
            height: 18px;
            background: #4a90e2;
            box-shadow: inset 0 0 0 18px #efefef;
        }

        #form-gender input[type="radio"]+label:after {
            top: 49%;
            left: 9px;
            width: 54px;
            height: 54px;
            opacity: 0;
            background: rgba(255, 255, 255, 0.3);
            transform: translate(-50%, -50%) scale(0);
        }

        #form-gender input[type="radio"]:checked+label:before {
            box-shadow: inset 0 0 0 4px #efefef;
        }

        #form-gender input[type="radio"]:checked+label:after {
            -moz-transform: translate(-50%, -50%) scale(1);
            -ms-transform: translate(-50%, -50%) scale(1);
            -webkit-transform: translate(-50%, -50%) scale(1);
            transform: translate(-50%, -50%) scale(1);
            -moz-animation: ripple 1s none;
            -webkit-animation: ripple 1s none;
            animation: ripple 1s none;
        }
    </style>

</head>

<body>
    <div class="main-body">
        <?php
        include('./admin/config/config.php');
        include("pages/header.php");
        include("pages/main.php");
        include("pages/banner.php");
        include("pages/heading_bottom.php");
        include("pages/footer.php");
        ?>
    </div>
</body>
<script>
    AOS.init();
</script>

</html>