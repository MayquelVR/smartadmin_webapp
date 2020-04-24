<?php

require_once 'init.php';

$_title = 'Timeline - Page Views - SmartAdmin v4.0.2';
$_active_nav = 'page_timeline';
$_head = '	<link rel="stylesheet" media="screen, print" href="'.ASSETS_URL.'/css/.../styles.css">
';
$_description = 'blank description';

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
                            <li class="breadcrumb-item active">Timeline</li>
                            <li class="position-absolute pos-top pos-right d-none d-sm-block"><span class="js-get-date"></span></li>
                        </ol>
                        <div class="subheader">
                            <h1 class="subheader-title">
                                <i class='subheader-icon fal fa-plus-circle'></i> Timeline
                                <small>
                                    blank description
                                </small>
                            </h1>
                        </div>
                        <div class="alert alert-primary">
                            <div class="d-flex flex-start w-100">
                                <div class="mr-2 hidden-md-down">
                                    <span class="icon-stack icon-stack-lg">
                                        <i class="base base-6 icon-stack-3x opacity-100 color-primary-500"></i>
                                        <i class="base base-10 icon-stack-2x opacity-100 color-primary-300 fa-flip-vertical"></i>
                                        <i class="ni ni-blog-read icon-stack-1x opacity-100 color-white"></i>
                                    </span>
                                </div>
                                <div class="d-flex flex-fill">
                                    <div class="flex-fill">
                                        <span class="h5">About</span>
                                        <p>Points.</p>
                                        <p class="m-0">
                                            Find in-depth, guidelines, tutorials and more on Addon's <a href="#" target="_blank">Official Documentation</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12">
                                <div id="panel-1" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Panel <span class="fw-300"><i>Title</i></span>
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
                                                Panel tag <code>code</code>
                                            </div>
                                            <div class="border border-primary border-top-0 border-right-0 border-bottom-0 p-3 pb-0 pl-5 position-relative ml-4">
                                                <div class="position-absolute pos-left pos-top mt-3 ml-n3 d-flex align-items-center justify-content-center width-2 height-2 border border-transparent border-left-0 border-top-0 border-bottom-0">
                                                    <div class="height-1 width-1 text-primary border-primary bg-white border border-primary rounded-circle d-flex align-items-center justify-content-center fw-500">
                                                        1
                                                    </div>
                                                </div>
                                                <h5 class="mt-1">
                                                    Test title
                                                    <small class="mb-2">
                                                        Title small
                                                    </small>
                                                </h5>
                                                <p>
                                                    text
                                                </p>
                                            </div>
                                            <div class="border border-primary border-top-0 border-right-0 border-bottom-0 p-3 pb-0 pl-5 position-relative ml-4">
                                                <div class="position-absolute pos-left pos-top mt-3 ml-n3 d-flex align-items-center justify-content-center width-2 height-2 border border-transparent border-left-0 border-top-0 border-bottom-0">
                                                    <div class="height-1 width-1 text-primary border-primary bg-white border border-primary rounded-circle d-flex align-items-center justify-content-center fw-500">
                                                        1
                                                    </div>
                                                </div>
                                                <h5 class="mt-1">
                                                    Test title
                                                    <small class="mb-2">
                                                        Title small
                                                    </small>
                                                </h5>
                                                <p>
                                                    This is a
                                                </p>
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
        <script>
            $(document).ready(function() {

            });

        </script>
    </body>
</html>
