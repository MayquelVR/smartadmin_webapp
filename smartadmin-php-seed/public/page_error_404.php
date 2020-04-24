<?php

require_once 'init.php';

$_title = 'Server Error - Page Views - SmartAdmin v4.0.2';
$_active_nav = 'page_error_404';
$_head = '';

?>
<!DOCTYPE html>
<!-- 
Template Name:: SmartAdmin PHP 7 Responsive WebApp - Template built with Bootstrap 4 and PHP 7
Version: 4.0.2
Author: Jovanni Lo
Website: https://smartadmin.lodev09.com
Purchase: https://wrapbootstrap.com/theme/smartadmin-php-7-responsive-webapp-WB05M9585
License: You must have a valid license purchased only from wrapbootstrap.com (link above) in order to legally use this theme for your project.
-->
<html lang="en">
    <?php include_once APP_PATH.'/includes/head.php'; ?>
    <body class="mod-bg-1 ">
        <?php include_once APP_PATH.'/includes/theme.php'; ?>
        <!-- BEGIN Page Wrapper -->
        <div class="page-wrapper">
            <div class="page-inner">
                <?php include_once APP_PATH.'/includes/nav.php'; ?>
                <div class="page-content-wrapper">
                    <?php include_once APP_PATH.'/includes/header.php'; ?>
                    <!-- BEGIN Page Content -->
                    <!-- the #js-page-content id is needed for some plugins to initialize -->
                    <main id="js-page-content" role="main" class="page-content">
                        <ol class="breadcrumb page-breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">SmartAdmin</a></li>
                            <li class="breadcrumb-item">Page Views</li>
                            <li class="breadcrumb-item">Error Pages</li>
                            <li class="breadcrumb-item active">Server Error</li>
                            <li class="position-absolute pos-top pos-right d-none d-sm-block"><span class="js-get-date"></span></li>
                        </ol>
                        <div class="h-alt-hf d-flex flex-column align-items-center justify-content-center text-center">
                            <h1 class="page-error color-fusion-500">
                                ERROR <span class="text-gradient">404</span>
                                <small class="fw-500">
                                    Something <u>went</u> wrong!
                                </small>
                            </h1>
                            <h3 class="fw-500 mb-5">
                                You have experienced a technical error. We apologize.
                            </h3>
                            <h4>
                                We are working hard to correct this issue. Please wait a few moments and try your search again.
                                <br>In the meantime, check out whats new on SmartAdmin for PHP:
                            </h4>
                        </div>
                    </main>
                    <!-- END Page Content -->
                    <?php include_once APP_PATH.'/includes/footer.php'; ?>
                </div>
            </div>
        </div>
        <!-- END Page Wrapper -->
        <?php include_once APP_PATH.'/includes/extra.php'; ?>
        <?php include_once APP_PATH.'/includes/js.php'; ?>
    </body>
</html>
