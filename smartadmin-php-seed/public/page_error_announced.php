<?php

require_once 'init.php';

$_title = 'Big Error - SmartAdmin v4.0.2';
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
    <body>
        <!-- BEGIN Page Wrapper -->
        <div class="page-wrapper alt">
            <!-- BEGIN Page Content -->
            <!-- the #js-page-content id is needed for some plugins to initialize -->
            <main id="js-page-content" role="main" class="page-content">
                <div class="h-alt-f d-flex flex-column align-items-center justify-content-center text-center">
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
            <!-- BEGIN Page Footer -->
            <footer class="page-footer" role="contentinfo">
                <div class="d-flex align-items-center flex-1 text-muted">
                    <span class="hidden-md-down fw-700">2019 © SmartAdmin for PHP by&nbsp;<a href='https://smartadmin.lodev09.com' class='text-primary fw-500' title='smartadmin.lodev09.com' target='_blank'>@lodev09</a></span>
                </div>
                <div>
                    <ul class="list-table m-0">
                        <li><a href="<?= APP_URL ?>/intel_introduction.php" class="text-secondary fw-700">About</a></li>
                        <li class="pl-3"><a href="<?= APP_URL ?>/info_app_licensing.php" class="text-secondary fw-700">License</a></li>
                        <li class="pl-3"><a href="<?= APP_URL ?>/info_app_docs.php" class="text-secondary fw-700">Documentation</a></li>
                        <li class="pl-3 fs-xl"><a href="https://wrapbootstrap.com/user/MyOrange" class="text-secondary" target="_blank"><i class="fal fa-question-circle" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </footer>
            <!-- END Page Footer -->
        </div>
        <!-- END Page Wrapper -->
        <?php include_once APP_PATH.'/includes/extra.php'; ?>
        <?php include_once APP_PATH.'/includes/js.php'; ?>
    </body>
</html>
