<?php

require_once 'init.php';

$_title = 'Wizard - Form Plugins - SmartAdmin v4.0.2';
$_active_nav = 'form_plugin_wizard';
$_head = '	<link rel="stylesheet" media="screen, print" href="'.ASSETS_URL.'/css/formplugins/smartwizard/smartwizard.css">
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
                            <li class="breadcrumb-item">Form Plugins</li>
                            <li class="breadcrumb-item active">Wizard</li>
                            <li class="position-absolute pos-top pos-right d-none d-sm-block"><span class="js-get-date"></span></li>
                        </ol>
                        <div class="subheader">
                            <h1 class="subheader-title">
                                <i class='subheader-icon fal fa-credit-card-front'></i> Wizard<sup class='badge badge-primary fw-500'>ADDON</sup>
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
                            <div class="col-xl-6">
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
                                            <div id="smartwizard">
                                                <ul>
                                                    <li><a href="#step-1">Step Title<br><small>Step description</small></a></li>
                                                    <li><a href="#step-2">Step Title<br><small>Step description</small></a></li>
                                                    <li><a href="#step-3">Step Title<br><small>Step description</small></a></li>
                                                    <li><a href="#step-4">Step Title<br><small>Step description</small></a></li>
                                                </ul>
                                                <div class="p-3">
                                                    <div id="step-1" class="">
                                                        <div class="form-group">
                                                            <label class="form-label">label</label>
                                                            <input type="text" name="test" required="" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div id="step-2" class="">
                                                        Step Content
                                                    </div>
                                                    <div id="step-3" class="">
                                                        Step Content
                                                    </div>
                                                    <div id="step-4" class="">
                                                        Step Content
                                                    </div>
                                                </div>
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
        <script src="<?= ASSETS_URL ?>/js/formplugins/smartwizard/smartwizard.js"></script>
        <script>
            $(document).ready(function()
            {

                // Smart Wizard
                $('#smartwizard').smartWizard(
                {
                    selected: 0, // Initial selected step, 0 = first step 
                    keyNavigation: true, // Enable/Disable keyboard navigation(left and right keys are used if enabled)
                    autoAdjustHeight: false, // Automatically adjust content height
                    cycleSteps: false, // Allows to cycle the navigation of steps
                    backButtonSupport: true, // Enable the back button support
                    useURLhash: false, // Enable selection of the step based on url hash
                    showStepURLhash: false,
                    lang:
                    { // Language variables
                        next: 'Next',
                        previous: 'Previous'
                    },
                    toolbarSettings:
                    {
                        toolbarPosition: 'bottom', // none, top, bottom, both
                        toolbarButtonPosition: 'right', // left, right
                        showNextButton: true, // show/hide a Next button
                        showPreviousButton: true, // show/hide a Previous button
                        /*toolbarExtraButtons: [
                $('<button></button>').text('Finish')
                              .addClass('btn btn-info')
                              .on('click', function(){ 
                            alert('Finsih button click');                            
                              }),
                $('<button></button>').text('Cancel')
                              .addClass('btn btn-danger')
                              .on('click', function(){ 
                            alert('Cancel button click');                            
                              })
                          ]*/
                    },
                    anchorSettings:
                    {
                        anchorClickable: true, // Enable/Disable anchor navigation
                        enableAllAnchors: false, // Activates all anchors clickable all times
                        markDoneStep: true, // add done css
                        enableAnchorOnDoneStep: true // Enable/Disable the done steps navigation
                    },
                    contentURL: null, // content url, Enables Ajax content loading. can set as data data-content-url on anchor
                    contentCache: true, //ajax content
                    disabledSteps: [], // Array Steps disabled
                    errorSteps: [], // Highlight step with errors
                    theme: 'default', //dots, default, circles
                    transitionEffect: 'slide', // Effect on navigation, none/slide/fade
                    transitionSpeed: '400'
                });




            });

        </script>
    </body>
</html>
