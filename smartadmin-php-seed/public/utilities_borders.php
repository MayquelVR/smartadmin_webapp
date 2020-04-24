<?php

require_once 'init.php';

$_title = 'Borders - Utilities - SmartAdmin v4.0.2';
$_active_nav = 'utilities_borders';
$_head = '';
$_description = 'Use border utilities to quickly style the border and border-radius of an element. Great for images, buttons, or any other element.';

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
                            <li class="breadcrumb-item">Utilities</li>
                            <li class="breadcrumb-item active">Borders</li>
                            <li class="position-absolute pos-top pos-right d-none d-sm-block"><span class="js-get-date"></span></li>
                        </ol>
                        <div class="subheader">
                            <h1 class="subheader-title">
                                Borders
                                <small>
                                    Use border utilities to quickly style the border and border-radius of an element. Great for images, buttons, or any other element.
                                </small>
                            </h1>
                        </div>
                        <div class="row">
                            <div class="col-xl-6">
                                <!--Colorful borders-->
                                <div id="panel-1" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Colorful <span class="fw-300"><i>borders</i></span>
                                        </h2>
                                        <div class="panel-toolbar">
                                            <button class="btn btn-panel" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                                            <button class="btn btn-panel" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                                            <button class="btn btn-panel" data-action="panel-close" data-toggle="tooltip" data-offset="0,10" data-original-title="Close"></button>
                                        </div>
                                    </div>
                                    <div class="panel-container show">
                                        <div class="panel-content">
                                            <div class="panel-tag">
                                                Use color profiles to the following border colors <code>,border-primary</code>, <code>.border-secondary</code>, <code>.border-success</code>, <code>.border-danger</code>, <code>.border-warning</code>, <code>.border-info</code>, <code>.border-light</code>, <code>.border-dark</code>, <code>.border-white</code>, <code>.border-transparent</code>, <code>.border-faded</code>
                                            </div>
                                            <div class="demo">
                                                <div class="border border-primary width-10 height-10 d-inline-block bg-faded"></div>
                                                <div class="border border-secondary width-10 height-10 d-inline-block bg-faded"></div>
                                                <div class="border border-success width-10 height-10 d-inline-block bg-faded"></div>
                                                <div class="border border-danger width-10 height-10 d-inline-block bg-faded"></div>
                                                <div class="border border-warning width-10 height-10 d-inline-block bg-faded"></div>
                                                <div class="border border-info width-10 height-10 d-inline-block bg-faded"></div>
                                                <div class="border border-light width-10 height-10 d-inline-block bg-faded"></div>
                                                <div class="border border-dark width-10 height-10 d-inline-block bg-faded"></div>
                                                <div class="border border-white width-10 height-10 d-inline-block bg-faded"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--Add borders-->
                                <div id="panel-2" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Add <span class="fw-300"><i>borders</i></span>
                                        </h2>
                                        <div class="panel-toolbar">
                                            <button class="btn btn-panel" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                                            <button class="btn btn-panel" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                                            <button class="btn btn-panel" data-action="panel-close" data-toggle="tooltip" data-offset="0,10" data-original-title="Close"></button>
                                        </div>
                                    </div>
                                    <div class="panel-container show">
                                        <div class="panel-content">
                                            <div class="panel-tag">
                                                Add border using <code>.border</code>, <code>.border-top</code>, <code>.border-right</code>, <code>.border-right</code>, <code>.border-bottom</code>, <code>.border-left</code>
                                            </div>
                                            <div class="demo">
                                                <div class="border width-10 height-10 d-inline-block bg-faded"></div>
                                                <div class="border-top width-10 height-10 d-inline-block bg-faded"></div>
                                                <div class="border-right width-10 height-10 d-inline-block bg-faded"></div>
                                                <div class="border-bottom width-10 height-10 d-inline-block bg-faded"></div>
                                                <div class="border-left width-10 height-10 d-inline-block bg-faded"></div>
                                                <div class="border rounded-circle width-10 height-10 d-inline-block bg-faded"></div>
                                                <div class="border rounded width-10 height-10 d-inline-block bg-faded"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <!--Rounded-->
                                <div id="panel-3" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Rounded <span class="fw-300"><i>example</i></span>
                                        </h2>
                                        <div class="panel-toolbar">
                                            <button class="btn btn-panel" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                                            <button class="btn btn-panel" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                                            <button class="btn btn-panel" data-action="panel-close" data-toggle="tooltip" data-offset="0,10" data-original-title="Close"></button>
                                        </div>
                                    </div>
                                    <div class="panel-container show">
                                        <div class="panel-content">
                                            <div class="panel-tag">
                                                Round edges or control each corner using <code>.rounded</code>, <code>rounded-top</code>, <code>rounded-right</code>, <code>rounded-bottom</code>, <code>rounded-left</code>, <code>rounded-circle</code>, <code>rounded-0</code>, <code>.rounded-plus</code>, <code>.rounded-{sm,lg}</code>, <code>.rounded-pill</code>, <code>border-{top,bottom}-{left,right}-radius-0</code>
                                            </div>
                                            <div class="demo">
                                                <div class="rounded bg-fusion-50 width-10 height-10 d-inline-block bg-faded"></div>
                                                <div class="rounded-top bg-fusion-50 width-10 height-10 d-inline-block bg-faded"></div>
                                                <div class="rounded-right bg-fusion-50 width-10 height-10 d-inline-block bg-faded"></div>
                                                <div class="rounded-bottom bg-fusion-50 width-10 height-10 d-inline-block bg-faded"></div>
                                                <div class="rounded-left bg-fusion-50 width-10 height-10 d-inline-block bg-faded"></div>
                                                <div class="rounded-circle bg-fusion-50 width-10 height-10 d-inline-block bg-faded"></div>
                                                <div class="rounded-plus bg-fusion-50 width-10 height-10 d-inline-block bg-faded"></div>
                                                <div class="rounded-0 bg-fusion-50 width-10 height-10 d-inline-block bg-faded"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--Remove borders-->
                                <div id="panel-4" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Remove <span class="fw-300"><i>borders</i></span>
                                        </h2>
                                        <div class="panel-toolbar">
                                            <button class="btn btn-panel" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                                            <button class="btn btn-panel" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                                            <button class="btn btn-panel" data-action="panel-close" data-toggle="tooltip" data-offset="0,10" data-original-title="Close"></button>
                                        </div>
                                    </div>
                                    <div class="panel-container show">
                                        <div class="panel-content">
                                            <div class="panel-tag">
                                                Subtract borders with <code>border-0</code>, <code>border-top-0</code>, <code>border-right-0</code>, <code>border-bottom-0</code>, <code>border-left-0</code>, <code>.border-transparent</code>
                                            </div>
                                            <div class="demo">
                                                <div class="border-0 width-10 height-10 d-inline-block bg-faded"></div>
                                                <div class="border border-top-0 width-10 height-10 d-inline-block bg-faded"></div>
                                                <div class="border border-right-0 width-10 height-10 d-inline-block bg-faded"></div>
                                                <div class="border border-bottom-0 width-10 height-10 d-inline-block bg-faded"></div>
                                                <div class="border border-left-0 width-10 height-10 d-inline-block bg-faded"></div>
                                                <div class="border rounded-circle border-right-0 border-left-0 width-10 height-10 d-inline-block bg-faded"></div>
                                                <div class="border rounded width-10 border-right-0 border-left-0 height-10 d-inline-block bg-faded"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
