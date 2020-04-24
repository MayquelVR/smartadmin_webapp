<?php

require_once 'init.php';

$_title = 'General Error -  - SmartAdmin v4.0.2';
$_active_nav = 'page_error';
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
                        <div class="h-alt-hf d-flex flex-column align-items-center justify-content-center text-center">
                            <div class="alert alert-danger bg-white pt-4 pr-5 pb-3 pl-5" id="demo-alert">
                                <h1 class="fs-xxl fw-700 color-fusion-500 d-flex align-items-center justify-content-center m-0">
                                    <img class="profile-image-sm rounded-circle bg-danger-700 mr-1 p-1" src="<?= ASSETS_URL ?>/img/logo-minify.png" alt="SmartAdmin for PHP Logo">
                                    <span class="color-danger-700">> To err is human; to forgive, divine.</span>
                                </h1>
                                <h3 class="fw-500 mb-0 mt-3">
                                    You have experienced a technical error.
                                </h3>
                                <p class="container container-sm mb-0 mt-1">
                                    Bring to the table win-win survival strategies to ensure proactive domination. At the end of the day, going forward, a new normal that has evolved from generation X.
                                </p>
                                <div class="mt-4">
                                    <a href="#" class="btn btn-outline-default bg-fusion-800">
                                        <span class="fw-700">Cancel</span>
                                    </a>
                                    <a href="#" class="btn btn-primary">
                                        <span class="fw-700">Continue</span>
                                    </a>
                                </div>
                            </div>
                            <p class="fs-sm  mt-4 mb-0 text-muted container container-sm">
                                Furthermore you can change the color of your error to 4 unique states,
                                <a href="#" data-action="toggle-swap" data-class="alert alert-danger bg-white pt-4 pr-5 pb-3 pl-5" data-target="#demo-alert">
                                    <span><code>alert-danger</code></span>
                                </a>,
                                <a href="#" data-action="toggle-swap" data-class="alert alert-success pt-4 pr-5 pb-3 pl-5" data-target="#demo-alert">
                                    <span><code>alert-success</code></span>
                                </a>,
                                <a href="#" data-action="toggle-swap" data-class="alert alert-info pt-4 pr-5 pb-3 pl-5" data-target="#demo-alert">
                                    <span><code>alert-info</code></span>
                                </a>, and
                                <a href="#" data-action="toggle-swap" data-class="alert alert-warning pt-4 pr-5 pb-3 pl-5" data-target="#demo-alert">
                                    <span><code>alert-warning</code></span>
                                </a>
                            </p>
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
