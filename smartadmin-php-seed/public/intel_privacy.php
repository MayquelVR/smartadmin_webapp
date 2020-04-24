<?php

require_once 'init.php';

$_title = 'Privacy - Application Intel - SmartAdmin v4.0.2';
$_active_nav = 'intel_privacy';
$_head = '';
$_description = 'SmartAdmin Privacy';

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
                            <li class="breadcrumb-item">Application Intel</li>
                            <li class="breadcrumb-item active">Privacy</li>
                            <li class="position-absolute pos-top pos-right d-none d-sm-block"><span class="js-get-date"></span></li>
                        </ol>
                        <div class="subheader">
                            <h1 class="subheader-title">
                                <i class='fal fa-info-circle'></i> Privacy
                                <small>
                                    SmartAdmin Privacy
                                </small>
                            </h1>
                        </div>
                        <div class="fs-lg fw-300 p-5 bg-white border-faded rounded mb-g">
                            <h2>Privacy</h2>
                            <p class="mb-g">
                                Your privacy is important to us at SmartAdmin and the protection, confidentiality and integrity of your personal data are our prime concerns.
                                We will only use your personal information to administer your account, provide the products and services you have requested from us, and to keep you informed about our products and services (if you have consented to this).
                                We only use your data for the purposes for which it was collected and, where relevant, to meet local legal obligations.
                                We will retain your personal information only for as long as is necessary for the purposes for which the information was collected, or as long as is required pursuant to law.
                            </p>
                            <h3>Cookies and other similar technologies</h3>
                            <p>
                                We collect certain data through cookies and similar technologies (e.g. web beacons, tags, device identifiers). Cookies are text files placed on your computer to collect standard internet log information and visitor behaviour information. This information is used to track visitor use of the website and to compile statistical reports on website activity. We register your interaction with our services in order to improve our website, content and services. Our use of such technologies and the data collected is described in more detail in our Cookie Policy. You can manage your cookie preferences through your browser settings.
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
