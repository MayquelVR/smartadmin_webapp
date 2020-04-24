<?php

require_once 'init.php';

$_title = 'Toasts - UI Components - SmartAdmin v4.0.2';
$_active_nav = 'ui_toasts';
$_head = '';
$_description = 'Push notifications to your visitors with a toast, a lightweight and easily customizable alert message.';

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
                            <li class="breadcrumb-item">UI Components</li>
                            <li class="breadcrumb-item active">Toasts</li>
                            <li class="position-absolute pos-top pos-right d-none d-sm-block"><span class="js-get-date"></span></li>
                        </ol>
                        <div class="subheader">
                            <h1 class="subheader-title">
                                <i class='subheader-icon fal fa-window'></i> Toasts
                                <small>
                                    Push notifications to your visitors with a toast, a lightweight and easily customizable alert message.
                                </small>
                            </h1>
                        </div>
                        <div class="alert alert-primary alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">
                                    <i class="fal fa-times"></i>
                                </span>
                            </button>
                            <div class="d-flex flex-start w-100">
                                <div class="mr-2 hidden-md-down">
                                    <span class="icon-stack icon-stack-lg">
                                        <i class="base base-6 icon-stack-3x opacity-100 color-primary-500"></i>
                                        <i class="base base-10 icon-stack-2x opacity-100 color-primary-300 fa-flip-vertical"></i>
                                        <i class="fal fa-info icon-stack-1x opacity-100 color-white"></i>
                                    </span>
                                </div>
                                <div class="d-flex flex-fill">
                                    <div class="flex-fill">
                                        <span class="h5">About toasts</span>
                                        <br> Toasts are lightweight notifications designed to mimic the push notifications that have been popularized by mobile and desktop operating systems. They’re built with flexbox, so they’re easy to align and position.
                                        <br>
                                        <br> Learn more about this plugin on bootstrap's
                                        <a href="https://getbootstrap.com/docs/4.3/components/toasts/" target="_blank">official documentation</a>.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6">
                                <div id="panel-1" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Basic <span class="fw-300"><i>Toasts</i></span>
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
                                                Toasts are as flexible as you need and have very little required markup. At a minimum, we require a single element to contain your “toasted” content and strongly encourage a dismiss button.
                                            </div>
                                            <div class="toast fade show" role="alert" aria-live="assertive" aria-atomic="true" data-toggle="toast">
                                                <div class="toast-header">
                                                    <img src="<?= ASSETS_URL ?>/img/logo.png" alt="brand-logo" height="16" class="mr-2">
                                                    <strong class="mr-auto">SmartAdmin</strong>
                                                    <small>11 mins ago</small>
                                                    <button type="button" class="ml-2 close" data-dismiss="toast" aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                    </button>
                                                </div>
                                                <div class="toast-body">
                                                    Hello, world! This is a toast message.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="panel-2" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Stacking <span class="fw-300"><i>Toasts</i></span>
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
                                                When you have multiple toasts, we default to vertiaclly stacking them in a readable manner.
                                            </div>
                                            <div class="position-relative height-lg bg-primary pattern-1" aria-live="polite" aria-atomic="true">
                                                <!-- Position it -->
                                                <div class="position-absolute pos-top pos-right mt-3 mr-3">
                                                    <!-- Then put toasts within -->
                                                    <div class="toast fade show" role="alert" aria-live="assertive" aria-atomic="true" data-toggle="toast">
                                                        <div class="toast-header">
                                                            <img src="<?= ASSETS_URL ?>/img/logo.png" alt="brand-logo" height="16" class="mr-2">
                                                            <strong class="mr-auto">SmartAdmin</strong>
                                                            <small class="text-muted">just now</small>
                                                            <button type="button" class="ml-2 close" data-dismiss="toast" aria-label="Close">
                                                                <span aria-hidden="true">×</span>
                                                            </button>
                                                        </div>
                                                        <div class="toast-body">
                                                            See? Just like this.
                                                        </div>
                                                    </div>
                                                    <!--end toast-->
                                                    <div class="toast fade show" role="alert" aria-live="assertive" aria-atomic="true" data-toggle="toast">
                                                        <div class="toast-header">
                                                            <img src="<?= ASSETS_URL ?>/img/logo.png" alt="brand-logo" height="16" class="mr-2">
                                                            <strong class="mr-auto">SmartAdmin</strong>
                                                            <small class="text-muted">2 seconds ago</small>
                                                            <button type="button" class="ml-2 close" data-dismiss="toast" aria-label="Close">
                                                                <span aria-hidden="true">×</span>
                                                            </button>
                                                        </div>
                                                        <div class="toast-body">
                                                            Heads up, toasts will stack automatically
                                                        </div>
                                                    </div>
                                                    <!--end toast-->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div id="panel-3" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Translucent <span class="fw-300"><i>Toasts</i></span>
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
                                                Toasts are slightly translucent, too, so they blend over whatever they might appear over. For browsers that support the backdrop-filter CSS property, we’ll also attempt to blur the elements under a toast.
                                            </div>
                                            <div class="p-3 bg-secondary">
                                                <div class="toast fade show" role="alert" aria-live="assertive" aria-atomic="true" data-toggle="toast">
                                                    <div class="toast-header">
                                                        <img src="<?= ASSETS_URL ?>/img/logo.png" alt="brand-logo" height="16" class="mr-2">
                                                        <strong class="mr-auto">SmartAdmin</strong>
                                                        <small>11 mins ago</small>
                                                        <button type="button" class="ml-2 close" data-dismiss="toast" aria-label="Close">
                                                            <span aria-hidden="true">×</span>
                                                        </button>
                                                    </div>
                                                    <div class="toast-body">
                                                        Hello, world! This is a toast message.
                                                    </div>
                                                </div>
                                                <!--end toast-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="panel-4" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Placement <span class="fw-300"><i>Toasts</i></span>
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
                                                Place toasts with custom CSS as you need them. The top right is often used for notifications, as is the top middle. If you’re only ever going to show one toast at a time, put the positioning styles right on the <code>.toast</code>
                                            </div>
                                            <div aria-live="polite" aria-atomic="true" class="d-flex justify-content-center align-items-center height-lg bg-info pattern-1">
                                                <!-- Then put toasts within -->
                                                <div class="toast fade show" role="alert" aria-live="assertive" aria-atomic="true" data-toggle="toast">
                                                    <div class="toast-header">
                                                        <img src="<?= ASSETS_URL ?>/img/logo.png" alt="brand-logo" height="16" class="mr-2">
                                                        <strong class="mr-auto">SmartAdmin</strong>
                                                        <small>11 mins ago</small>
                                                        <button type="button" class="ml-2 close" data-dismiss="toast" aria-label="Close">
                                                            <span aria-hidden="true">×</span>
                                                        </button>
                                                    </div>
                                                    <div class="toast-body">
                                                        Hello, world! This is a toast message.
                                                    </div>
                                                </div>
                                                <!--end toast-->
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
