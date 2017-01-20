<!DOCTYPE html>
<html lang="th">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?= TITLE_SYSTEM_NAME ?></title>
        <!--[Favicon]-->
        <link rel="shortcut icon" type="image/x-icon" href="<?= URL; ?>public/images/favicon.ico" />
        <link rel="shortcut icon" type="image/ico" href="<?= URL; ?>public/images/favicon.ico" />
        <link rel="icon" href="<?= URL; ?>public/images/favicon.ico" sizes="64x64"/>

        <!--[theme bootstrap]-->
        <link href="<?= URL; ?>public/bootstrap-3.3.5/dist/css/bootstrap.css" rel="stylesheet" type="text/css"/>

        <!--[theme widgets]-->
        <link rel="stylesheet" href="<?= URL; ?>public/bootstrap-select/css/bootstrap-select.css" type="text/css"/>

        <!--[Custom CSS]-->
        <link rel="stylesheet" href="<?= URL; ?>public/css/pagecss.css" type="text/css"/>


        <!--[Scripts]-->
        <script src="<?= URL; ?>public/js/jquery-2.1.3.js" type="text/javascript"></script>
<!--        <script src="<?= URL; ?>public/js/jquery.xdomainajax.js" type="text/javascript"></script>-->
        <script src="<?= URL; ?>public/bootstrap-select/js/bootstrap-select.js"></script>
        <script src="<?= URL; ?>public/js/moment.js" type="text/javascript"></script>

        <!--[Bootstrap JS]-->        
        <script src="<?= URL; ?>public/bootstrap-3.3.5/dist/js/bootstrap.js" type="text/javascript"></script>


        <!--[Custom Scripts]-->
        <script src="<?= URL; ?>public/js/pagejscript.js"></script>
        <?php
        require 'pagescript.php';
        ?>
    </head>
    <body style="padding-top: 70px;">
        <?php Session::init(); ?>