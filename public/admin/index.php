<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <title>Admin</title>

    <style>
        @import url('https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700&subset=vietnamese');
        @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:ital@0;1&display=swap');

        * {
            margin: 0;
            padding: 0;

        }

        body .body {
            min-width: 990px;
            margin: auto;
        }

        a {
            text-decoration: none;
            font-style: normal;
            color: #000;
            display: block;

        }



        ul,
        li {
            list-style: none;
            margin: 0;
            padding: 0;

        }


        menu .menu-manage-admin {
            position: relative;

        }

        .header-admin {
            background-color: #10304c;
            color: #fff;
        }

        .header-admin p {
            font-size: 35px;
            font-family: 'Playfair Display', serif !important;
            text-transform: inherit;
            font-style: italic;
            margin: 0;
            margin-bottom: 15px;
        }

        .container-fluid {
            max-width: 1600px;
            margin-left: auto;
            margin-right: auto;
        }





        .type-menu {
            position: relative;
            float: left;
        }

        ul.main-menu {
            display: flex;
            justify-content: center;
        }

        .main-menu li a {
            text-decoration: none;
            color: #000;
            text-transform: uppercase;
        }

        .main-menu>li>a {
            border: 1px solid #000;
            margin-right: 15px;
            position: relative;
            white-space: nowrap;
            padding: 0 5px;
            background-color: #fff;

        }

        .main-menu>li>a:hover {
            background-color: rgba(0, 0, 0, 0.3) !important;
        }

        .main-menu .sub-menu {
            top: 22px;
            position: absolute;
            border: 1px solid #000;
            font-size: 14px;
            margin-right: 15px;
            padding: 0;
            white-space: nowrap;
            min-width: 120px;
            display: none;
            background-color: #fff;
        }

        li.type-menu:hover>ul.sub-menu {
            display: block;

        }

        .sub-menu li {
            border-top: 1px solid #000;
        }

        .sub-menu li:hover {
            background-color: rgba(0, 0, 0, 0.3) !important;
        }

        .sub-menu li a {
            margin: 0 5px;
        }

        #content-main {
            font-size: 25px;
            font-family: 'Playfair Display', serif !important;
            text-transform: inherit;
            font-style: italic;
            margin: 0;
            padding: 15px 0;
        }


        table tr,
        th,
        td {
            border: 1px solid #000;
            font-family: 'Quicksand';
        }

        th {
            text-align: center;
        }

        td {
            font-weight: 400;
            padding-left: 5px;
        }

        menu {
            margin-bottom: 60px;
        }

        input {
            width: 100%;
            padding: 0 5px;
            border: none;
        }

        input.btn-tsx {
            background-color: #10304c;
            color: #fff;
            margin-top: 2px;
        }

        table {
            margin-bottom: 60px;
        }

        #mota td {
            padding: 0;
            margin: 0;
        }

        textarea {
            display: block;
            width: 100%;
            border: none;
            padding-left: 5px;
            resize: none;
            outline: none;
        }



        .img-upload {
            width: 125px;
            height: 161px;
            position: relative;
            margin: 0;
            padding: 0;
        }

        .img-upload img {
            width: 100%;
            height: 100%;
            top: 0;

        }
    </style>


</head>

<body>
    <div class="body">
        <header>
            <?php
            include("./config/config.php");
            include("modules/header.php");
            ?>
        </header>
        <menu>
            <?php
            include("modules/menu.php");
            ?>
        </menu>

        <main>
            <?php
            include("modules/main.php");
            ?>
        </main>
    </div>
</body>

</html>