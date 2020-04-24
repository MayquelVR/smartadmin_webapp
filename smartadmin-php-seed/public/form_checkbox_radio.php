<?php

require_once 'init.php';

$_title = 'Checkbox &amp; Radio - Form Stuff - SmartAdmin v4.0.2';
$_active_nav = 'form_checkbox_radio';
$_head = '';
$_description = 'Default input elements for forms';

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
                            <li class="breadcrumb-item">Form Stuff</li>
                            <li class="breadcrumb-item active">Checkbox &amp; Radio</li>
                            <li class="position-absolute pos-top pos-right d-none d-sm-block"><span class="js-get-date"></span></li>
                        </ol>
                        <div class="subheader">
                            <h1 class="subheader-title">
                                <i class='subheader-icon fal fa-edit'></i> Checkbox & Radio
                                <small>
                                    Default input elements for forms
                                </small>
                            </h1>
                        </div>
                        <div class="row">
                            <div class="col-xl-6">
                                <div id="panel-1" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Checkbox <span class="fw-300"><i>inputs</i></span>
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
                                                Add <code>.custom-control</code> and <code>.custom-checkbox</code> wrapper to your <code>input</code> and <code>label</code> to create a custom checkbox component. You can add <code>.custom-checkbox-circle</code> to change it to a circular checkbox
                                            </div>
                                            <button id="js-checkbox-toggle" data-toggle="button" class="btn btn-outline-danger mb-g" onclick="toggleCheckbox();">Change to CIRCLE</button>
                                            <h5 class="frame-heading">Block alignment</h5>
                                            <div class="frame-wrap">
                                                <div class="demo">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="defaultUnchecked">
                                                        <label class="custom-control-label" for="defaultUnchecked">Unchecked</label>
                                                    </div>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="defaultChecked" checked="">
                                                        <label class="custom-control-label" for="defaultChecked">Checked</label>
                                                    </div>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="defaultIndeterminate" checked="">
                                                        <label class="custom-control-label" for="defaultIndeterminate">Indeterminate</label>
                                                    </div>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="defaultUncheckedDisabled" disabled="">
                                                        <label class="custom-control-label" for="defaultUncheckedDisabled">Unchecked & disabled</label>
                                                    </div>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="defaultCheckedDisabled" checked="" disabled="">
                                                        <label class="custom-control-label" for="defaultCheckedDisabled">Checked & disabled</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <h5 class="frame-heading">Inline alignment</h5>
                                            <div class="frame-wrap">
                                                <div class="custom-control custom-checkbox custom-control-inline">
                                                    <input type="checkbox" class="custom-control-input" id="defaultInline1">
                                                    <label class="custom-control-label" for="defaultInline1">Unchecked</label>
                                                </div>
                                                <div class="custom-control custom-checkbox custom-control-inline">
                                                    <input type="checkbox" class="custom-control-input" id="defaultInline2" checked="">
                                                    <label class="custom-control-label" for="defaultInline2">Checked</label>
                                                </div>
                                                <div class="custom-control custom-checkbox custom-control-inline">
                                                    <input type="checkbox" class="custom-control-input" id="defaultInlined" disabled="">
                                                    <label class="custom-control-label" for="defaultInlined">Disabled</label>
                                                </div>
                                                <div class="custom-control custom-checkbox custom-control-inline">
                                                    <input type="checkbox" class="custom-control-input" id="defaultInline3" checked="" disabled="">
                                                    <label class="custom-control-label" for="defaultInline3">Checked & disabled</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div id="panel-2" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Radio <span class="fw-300"><i>inputs</i></span>
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
                                                Add <code>.custom-control</code> and <code>.custom-radio</code> wrapper to your <code>input</code> and <code>label</code> to create a custom radio component. You can add <code>.custom-radio-rounded</code> to change it to a rounded radio
                                            </div>
                                            <button id="js-radio-toggle" data-toggle="button" class="btn btn-outline-danger mb-g" onclick="toggleRadio();">Change to ROUNDED</button>
                                            <h5 class="frame-heading">Block alignment</h5>
                                            <div class="frame-wrap">
                                                <div class="demo">
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" class="custom-control-input" id="defaultUncheckedRadio" name="defaultExampleRadios">
                                                        <label class="custom-control-label" for="defaultUncheckedRadio">Unchecked</label>
                                                    </div>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" class="custom-control-input" id="defaultCheckedRadio" name="defaultExampleRadios" checked="">
                                                        <label class="custom-control-label" for="defaultCheckedRadio">Checked</label>
                                                    </div>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" class="custom-control-input active" id="defaultUncheckedRadio2" name="defaultExampleRadios">
                                                        <label class="custom-control-label" for="defaultUncheckedRadio2">Unchecked</label>
                                                    </div>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" class="custom-control-input" id="defaultUncheckedDisabledRadio2" name="defaultExampleRadios1" disabled="">
                                                        <label class="custom-control-label" for="defaultUncheckedDisabledRadio2">Disabled</label>
                                                    </div>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" class="custom-control-input" id="defaultCheckedDisabledRadio2" name="defaultCheckedDisabledRadio2" checked="" disabled="">
                                                        <label class="custom-control-label" for="defaultCheckedDisabledRadio2">Checked & disabled</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <h5 class="frame-heading">Inline alignment</h5>
                                            <div class="frame-wrap">
                                                <div class="custom-control custom-radio custom-control-inline">
                                                    <input type="radio" class="custom-control-input" id="defaultInline1Radio" name="inlineDefaultRadiosExample">
                                                    <label class="custom-control-label" for="defaultInline1Radio">Unchecked</label>
                                                </div>
                                                <div class="custom-control custom-radio custom-control-inline">
                                                    <input type="radio" class="custom-control-input" id="defaultInline2Radio" name="inlineDefaultRadiosExample" checked="">
                                                    <label class="custom-control-label" for="defaultInline2Radio">Checked</label>
                                                </div>
                                                <div class="custom-control custom-radio custom-control-inline">
                                                    <input type="radio" class="custom-control-input" id="defaultInline4Radio" name="inlineDefaultRadiosExample2" disabled="">
                                                    <label class="custom-control-label" for="defaultInline4Radio">Disabled</label>
                                                </div>
                                                <div class="custom-control custom-radio custom-control-inline">
                                                    <input type="radio" class="custom-control-input" id="defaultInline3Radio" name="inlineDefaultRadiosExample2" checked="" disabled="">
                                                    <label class="custom-control-label" for="defaultInline3Radio">Checked & disabled</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div id="panel-3" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Switch <span class="fw-300"><i>radio and checkbox</i></span>
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
                                                A switch has the markup of a custom checkbox but uses the <code>.custom-switch</code> class to render a toggle switch. Switches also support the <code>disabled</code> attribute
                                            </div>
                                            <div class="row">
                                                <div class="col-xl-6">
                                                    <h5 class="frame-heading">
                                                        Switch checkbox
                                                    </h5>
                                                    <div class="frame-wrap demo">
                                                        <div class="demo">
                                                            <div class="custom-control custom-switch">
                                                                <input type="checkbox" class="custom-control-input" id="customSwitch1">
                                                                <label class="custom-control-label" for="customSwitch1">Unchecked</label>
                                                            </div>
                                                            <div class="custom-control custom-switch">
                                                                <input type="checkbox" class="custom-control-input" id="customSwitch2" checked="">
                                                                <label class="custom-control-label" for="customSwitch2">Checked</label>
                                                            </div>
                                                            <div class="custom-control custom-switch">
                                                                <input type="checkbox" class="custom-control-input" disabled id="customSwitchd">
                                                                <label class="custom-control-label" for="customSwitchd">Disabled</label>
                                                            </div>
                                                            <div class="custom-control custom-switch">
                                                                <input type="checkbox" class="custom-control-input" id="customSwitch3" checked="" disabled="">
                                                                <label class="custom-control-label" for="customSwitch3">Checked & disabled</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6">
                                                    <h5 class="frame-heading">Switch Radio</h5>
                                                    <div class="frame-wrap demo">
                                                        <div class="demo">
                                                            <div class="custom-control custom-switch">
                                                                <input type="radio" class="custom-control-input" id="customSwitch1radio" name="defaultSwitchRadioExample">
                                                                <label class="custom-control-label" for="customSwitch1radio">Unchecked</label>
                                                            </div>
                                                            <div class="custom-control custom-switch">
                                                                <input type="radio" class="custom-control-input" id="customSwitch2radio" checked="" name="defaultSwitchRadioExample">
                                                                <label class="custom-control-label" for="customSwitch2radio">Checked</label>
                                                            </div>
                                                            <div class="custom-control custom-switch">
                                                                <input type="radio" class="custom-control-input" disabled id="customSwitchdradio" name="defaultSwitchRadioExample2">
                                                                <label class="custom-control-label" for="customSwitchdradio">Disabled</label>
                                                            </div>
                                                            <div class="custom-control custom-switch">
                                                                <input type="radio" class="custom-control-input" id="customSwitch3radio" checked="" disabled="" name="defaultSwitchRadioExample2">
                                                                <label class="custom-control-label" for="customSwitch3radio">Checked & disabled</label>
                                                            </div>
                                                        </div>
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
        <script type="text/javascript">
            $('#defaultIndeterminate').prop('indeterminate', true)

            var toggleCheckbox = function()
            {
                $('#js-checkbox-toggle').toggleText('Change to CIRCLE', 'Change back to default');
                $('.frame-wrap .custom-checkbox').toggleClass('custom-checkbox-circle');
            }

            var toggleRadio = function()
            {
                $('#js-radio-toggle').toggleText('Change to ROUNDED', 'Change back to default');
                $('.frame-wrap .custom-radio').toggleClass('custom-radio-rounded');
            }

        </script>
    </body>
</html>
