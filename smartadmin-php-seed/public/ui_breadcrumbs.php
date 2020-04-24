<?php

require_once 'init.php';

$_title = 'Breadcrumbs - UI Components - SmartAdmin v4.0.2';
$_active_nav = 'ui_breadcrumbs';
$_head = '';
$_description = 'Indicate the current page’s location within a navigational hierarchy. Separators are automatically added in CSS through &lt;code&gt;::before&lt;/code&gt; and content.';

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
                            <li class="breadcrumb-item active">Breadcrumbs</li>
                            <li class="position-absolute pos-top pos-right d-none d-sm-block"><span class="js-get-date"></span></li>
                        </ol>
                        <div class="subheader">
                            <h1 class="subheader-title">
                                <i class='subheader-icon fal fa-window'></i> Breadcrumbs
                                <small>
                                    Indicate the current page’s location within a navigational hierarchy. Separators are automatically added in CSS through <code>::before</code> and content.
                                </small>
                            </h1>
                        </div>
                        <div class="row">
                            <div class="col-xl-6">
                                <!--Default-->
                                <div id="panel-1" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Default <span class="fw-300"><i>Breadcrumb</i></span>
                                        </h2>
                                        <div class="panel-toolbar">
                                            <button class="btn btn-panel" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                                            <button class="btn btn-panel" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                                            <button class="btn btn-panel" data-action="panel-close" data-toggle="tooltip" data-offset="0,10" data-original-title="Close"></button>
                                        </div>
                                    </div>
                                    <div class="panel-container show">
                                        <div class="panel-content">
                                            <div class="demo-v-spacing">
                                                <ol class="breadcrumb">
                                                    <li class="breadcrumb-item active">Home</li>
                                                </ol>
                                                <ol class="breadcrumb">
                                                    <li class="breadcrumb-item">
                                                        <a href="#">Home</a>
                                                    </li>
                                                    <li class="breadcrumb-item">
                                                        <a href="#">Library</a>
                                                    </li>
                                                    <li class="breadcrumb-item">
                                                        <a href="#">Web</a>
                                                    </li>
                                                    <li class="breadcrumb-item active">Data</li>
                                                </ol>
                                                <ol class="breadcrumb">
                                                    <li class="breadcrumb-item">
                                                        <a href="#">This is a big text</a>
                                                    </li>
                                                    <li class="breadcrumb-item">
                                                        <a href="#">Hovering reveals the text</a>
                                                    </li>
                                                    <li class="breadcrumb-item">
                                                        <a href="#">Can be big as you like</a>
                                                    </li>
                                                    <li class="breadcrumb-item active">Cool right?</li>
                                                </ol>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--Different sizes-->
                                <div id="panel-2" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Different <span class="fw-300"><i>Sizes</i></span>
                                        </h2>
                                        <div class="panel-toolbar">
                                            <button class="btn btn-panel" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                                            <button class="btn btn-panel" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                                            <button class="btn btn-panel" data-action="panel-close" data-toggle="tooltip" data-offset="0,10" data-original-title="Close"></button>
                                        </div>
                                    </div>
                                    <div class="panel-container show">
                                        <div class="panel-content">
                                            <div class="demo-v-spacing">
                                                <ol class="breadcrumb breadcrumb-sm">
                                                    <li class="breadcrumb-item">
                                                        <a href="#">Home</a>
                                                    </li>
                                                    <li class="breadcrumb-item">
                                                        <a href="#">Library</a>
                                                    </li>
                                                    <li class="breadcrumb-item">
                                                        <a href="#">Web</a>
                                                    </li>
                                                    <li class="breadcrumb-item active">Data</li>
                                                </ol>
                                                <ol class="breadcrumb">
                                                    <li class="breadcrumb-item">
                                                        <a href="#">Home</a>
                                                    </li>
                                                    <li class="breadcrumb-item">
                                                        <a href="#">Library</a>
                                                    </li>
                                                    <li class="breadcrumb-item">
                                                        <a href="#">Web</a>
                                                    </li>
                                                    <li class="breadcrumb-item active">Data</li>
                                                </ol>
                                                <ol class="breadcrumb breadcrumb-lg">
                                                    <li class="breadcrumb-item">
                                                        <a href="#">Home</a>
                                                    </li>
                                                    <li class="breadcrumb-item">
                                                        <a href="#">Library</a>
                                                    </li>
                                                    <li class="breadcrumb-item">
                                                        <a href="#">Web</a>
                                                    </li>
                                                    <li class="breadcrumb-item active">Data</li>
                                                </ol>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--Different Separators-->
                                <div id="panel-3" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Different <span class="fw-300"><i>Separators</i></span>
                                        </h2>
                                        <div class="panel-toolbar">
                                            <button class="btn btn-panel" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                                            <button class="btn btn-panel" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                                            <button class="btn btn-panel" data-action="panel-close" data-toggle="tooltip" data-offset="0,10" data-original-title="Close"></button>
                                        </div>
                                    </div>
                                    <div class="panel-container show">
                                        <div class="panel-content">
                                            <div class="demo-v-spacing">
                                                <ol class="breadcrumb">
                                                    <li class="breadcrumb-item" data-breadcrumb-seperator="-">
                                                        <a href="#">Home</a>
                                                    </li>
                                                    <li class="breadcrumb-item" data-breadcrumb-seperator="-">
                                                        <a href="#">Library</a>
                                                    </li>
                                                    <li class="breadcrumb-item" data-breadcrumb-seperator="-">
                                                        <a href="#">Web</a>
                                                    </li>
                                                    <li class="breadcrumb-item active" data-breadcrumb-seperator="-">Seperators using data attributes</li>
                                                </ol>
                                                <ol class="breadcrumb breadcrumb-seperator-1">
                                                    <li class="breadcrumb-item">
                                                        <a href="#" class="text-primary">Home</a>
                                                    </li>
                                                    <li class="breadcrumb-item">
                                                        <a href="#" class="text-primary">Library</a>
                                                    </li>
                                                    <li class="breadcrumb-item">
                                                        <a href="#" class="text-primary">Web</a>
                                                    </li>
                                                    <li class="breadcrumb-item active">Data</li>
                                                </ol>
                                                <ol class="breadcrumb breadcrumb-seperator-3 mb-0">
                                                    <li class="breadcrumb-item">
                                                        <a href="#" class="text-info">Home</a>
                                                    </li>
                                                    <li class="breadcrumb-item">
                                                        <a href="#" class="text-info">Library</a>
                                                    </li>
                                                    <li class="breadcrumb-item">
                                                        <a href="#" class="text-info">Web</a>
                                                    </li>
                                                    <li class="breadcrumb-item active">Data</li>
                                                </ol>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--With dropdown-->
                                <div id="panel-4" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            With <span class="fw-300"><i>Dropdown</i></span>
                                        </h2>
                                        <div class="panel-toolbar">
                                            <button class="btn btn-panel" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                                            <button class="btn btn-panel" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                                            <button class="btn btn-panel" data-action="panel-close" data-toggle="tooltip" data-offset="0,10" data-original-title="Close"></button>
                                        </div>
                                    </div>
                                    <div class="panel-container show">
                                        <div class="panel-content">
                                            <ol class="breadcrumb m-0">
                                                <li class="breadcrumb-item">
                                                    <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Home
                                                        <i class="fal fa-angle-down"></i>
                                                    </a>
                                                    <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: top, left; top: 114px; left: 40px;">
                                                        <a class="dropdown-item" href="#">Action</a>
                                                        <a class="dropdown-item" href="#">Another action</a>
                                                        <a class="dropdown-item" href="#">Something else here</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="#">Separated link</a>
                                                    </div>
                                                </li>
                                                <li class="breadcrumb-item">
                                                    <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Library
                                                        <i class="fal fa-angle-down"></i>
                                                    </a>
                                                    <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: top, left; top: 114px; left: 110px;">
                                                        <a class="dropdown-item" href="#">Action</a>
                                                        <a class="dropdown-item" href="#">Another action</a>
                                                        <a class="dropdown-item" href="#">Something else here</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="#">Separated link</a>
                                                    </div>
                                                </li>
                                                <li class="breadcrumb-item">
                                                    <a href="#">Web</a>
                                                </li>
                                                <li class="breadcrumb-item active">Data</li>
                                            </ol>
                                        </div>
                                    </div>
                                </div>
                                <!--With Icons-->
                                <div id="panel-5" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            With <span class="fw-300"><i>Icons</i></span>
                                        </h2>
                                        <div class="panel-toolbar">
                                            <button class="btn btn-panel" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                                            <button class="btn btn-panel" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                                            <button class="btn btn-panel" data-action="panel-close" data-toggle="tooltip" data-offset="0,10" data-original-title="Close"></button>
                                        </div>
                                    </div>
                                    <div class="panel-container show">
                                        <div class="panel-content">
                                            <ol class="breadcrumb m-0">
                                                <li class="breadcrumb-item">
                                                    <a href="#">
                                                        <i class="fal fa-home mr-1 fs-md"></i>
                                                        Home
                                                    </a>
                                                </li>
                                                <li class="breadcrumb-item">
                                                    <a href="#">
                                                        <i class="fal fa-book mr-1 fs-md"></i>
                                                        Library
                                                    </a>
                                                </li>
                                                <li class="breadcrumb-item">
                                                    <a href="#">
                                                        <i class="fal fa-toggle-on mr-1 fs-md"></i>
                                                        Web
                                                    </a>
                                                </li>
                                                <li class="breadcrumb-item active">
                                                    <i class="fal fa-database mr-1 fs-md"></i>
                                                    Data
                                                </li>
                                            </ol>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <!--Backgrounds-->
                                <div id="panel-6" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Backgrounds <span class="fw-300"><i>Outlines</i></span>
                                        </h2>
                                        <div class="panel-toolbar">
                                            <button class="btn btn-panel" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                                            <button class="btn btn-panel" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                                            <button class="btn btn-panel" data-action="panel-close" data-toggle="tooltip" data-offset="0,10" data-original-title="Close"></button>
                                        </div>
                                    </div>
                                    <div class="panel-container show">
                                        <div class="panel-content">
                                            <div class="demo-v-spacing">
                                                <ol class="breadcrumb bg-fusion-300">
                                                    <li class="breadcrumb-item">
                                                        <a href="#" class="text-white">
                                                            <i class="fal fa-home mr-1"></i> Home
                                                        </a>
                                                    </li>
                                                    <li class="breadcrumb-item">
                                                        <a href="#" class="text-white">Library</a>
                                                    </li>
                                                    <li class="breadcrumb-item">
                                                        <a href="#" class="text-white">Web</a>
                                                    </li>
                                                    <li class="breadcrumb-item active text-white">Data</li>
                                                </ol>
                                                <ol class="breadcrumb bg-primary-300">
                                                    <li class="breadcrumb-item">
                                                        <a href="#" class="text-white">
                                                            <i class="fal fa-home mr-1"></i> Home
                                                        </a>
                                                    </li>
                                                    <li class="breadcrumb-item">
                                                        <a href="#" class="text-white">Library</a>
                                                    </li>
                                                    <li class="breadcrumb-item">
                                                        <a href="#" class="text-white">Web</a>
                                                    </li>
                                                    <li class="breadcrumb-item active text-white">Data</li>
                                                </ol>
                                                <ol class="breadcrumb bg-info-400">
                                                    <li class="breadcrumb-item text-white">
                                                        <a href="#" class="text-white">
                                                            <i class="fal fa-home mr-1"></i> Home
                                                        </a>
                                                    </li>
                                                    <li class="breadcrumb-item text-white">
                                                        <a href="#" class="text-white">Library</a>
                                                    </li>
                                                    <li class="breadcrumb-item text-white">
                                                        <a href="#" class="text-white">Web</a>
                                                    </li>
                                                    <li class="breadcrumb-item active text-white">Data</li>
                                                </ol>
                                                <ol class="breadcrumb bg-danger-300">
                                                    <li class="breadcrumb-item text-white">
                                                        <a href="#" class="text-white">
                                                            <i class="fal fa-home mr-1"></i> Home
                                                        </a>
                                                    </li>
                                                    <li class="breadcrumb-item text-white">
                                                        <a href="#" class="text-white">Library</a>
                                                    </li>
                                                    <li class="breadcrumb-item text-white">
                                                        <a href="#" class="text-white">Web</a>
                                                    </li>
                                                    <li class="breadcrumb-item active text-white">Data</li>
                                                </ol>
                                                <ol class="breadcrumb bg-transparent border border-primary">
                                                    <li class="breadcrumb-item text-primary">
                                                        <a href="#">
                                                            <i class="fal fa-home mr-1"></i> Home
                                                        </a>
                                                    </li>
                                                    <li class="breadcrumb-item text-primary">
                                                        <a href="#">Library</a>
                                                    </li>
                                                    <li class="breadcrumb-item text-primary">
                                                        <a href="#">Web</a>
                                                    </li>
                                                    <li class="breadcrumb-item active text-primary">Data</li>
                                                </ol>
                                                <ol class="breadcrumb bg-transparent border border-success">
                                                    <li class="breadcrumb-item text-success">
                                                        <a href="#" class="text-success">
                                                            <i class="fal fa-home mr-1"></i> Home
                                                        </a>
                                                    </li>
                                                    <li class="breadcrumb-item text-success">
                                                        <a href="#" class="text-success">Library</a>
                                                    </li>
                                                    <li class="breadcrumb-item text-success">
                                                        <a href="#" class="text-success">Web</a>
                                                    </li>
                                                    <li class="breadcrumb-item active text-success">Data</li>
                                                </ol>
                                                <ol class="breadcrumb bg-transparent border border-info">
                                                    <li class="breadcrumb-item text-info">
                                                        <a href="#" class="text-info">
                                                            <i class="fal fa-home mr-1"></i> Home
                                                        </a>
                                                    </li>
                                                    <li class="breadcrumb-item text-info">
                                                        <a href="#" class="text-info">Library</a>
                                                    </li>
                                                    <li class="breadcrumb-item text-info">
                                                        <a href="#" class="text-info">Web</a>
                                                    </li>
                                                    <li class="breadcrumb-item active text-info">Data</li>
                                                </ol>
                                                <ol class="breadcrumb bg-transparent border border-danger mb-0">
                                                    <li class="breadcrumb-item text-danger">
                                                        <a href="#" class="text-danger">
                                                            <i class="fal fa-home mr-1"></i> Home
                                                        </a>
                                                    </li>
                                                    <li class="breadcrumb-item text-danger">
                                                        <a href="#" class="text-danger">Library</a>
                                                    </li>
                                                    <li class="breadcrumb-item text-danger">
                                                        <a href="#" class="text-danger">Web</a>
                                                    </li>
                                                    <li class="breadcrumb-item active text-danger">Data</li>
                                                </ol>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--Clean-->
                                <div id="panel-7" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Clean <span class="fw-300"><i>Style</i></span>
                                        </h2>
                                        <div class="panel-toolbar">
                                            <button class="btn btn-panel" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                                            <button class="btn btn-panel" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                                            <button class="btn btn-panel" data-action="panel-close" data-toggle="tooltip" data-offset="0,10" data-original-title="Close"></button>
                                        </div>
                                    </div>
                                    <div class="panel-container show">
                                        <div class="panel-content">
                                            <div class="demo-v-spacing">
                                                <ol class="breadcrumb bg-transparent breadcrumb-sm pl-0 pr-0">
                                                    <li class="breadcrumb-item">
                                                        <a href="#">
                                                            <i class="fal fa-home mr-1"></i> Home
                                                        </a>
                                                    </li>
                                                    <li class="breadcrumb-item">
                                                        <a href="#">Library</a>
                                                    </li>
                                                    <li class="breadcrumb-item">
                                                        <a href="#">Web</a>
                                                    </li>
                                                    <li class="breadcrumb-item active">Data</li>
                                                </ol>
                                                <ol class="breadcrumb bg-transparent pl-0 pr-0">
                                                    <li class="breadcrumb-item">
                                                        <a href="#">
                                                            <i class="fal fa-home mr-1"></i> Home
                                                        </a>
                                                    </li>
                                                    <li class="breadcrumb-item">
                                                        <a href="#">Library</a>
                                                    </li>
                                                    <li class="breadcrumb-item">
                                                        <a href="#">Web</a>
                                                    </li>
                                                    <li class="breadcrumb-item active">Data</li>
                                                </ol>
                                                <ol class="breadcrumb bg-transparent breadcrumb-lg pl-0 pr-0 m-0">
                                                    <li class="breadcrumb-item">
                                                        <a href="#">
                                                            <i class="fal fa-home mr-1"></i> Home
                                                        </a>
                                                    </li>
                                                    <li class="breadcrumb-item">
                                                        <a href="#">Library</a>
                                                    </li>
                                                    <li class="breadcrumb-item">
                                                        <a href="#">Web</a>
                                                    </li>
                                                    <li class="breadcrumb-item active">Data</li>
                                                </ol>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--Other styles-->
                                <div id="panel-8" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Other <span class="fw-300"><i>Styles</i></span>
                                        </h2>
                                        <div class="panel-toolbar">
                                            <button class="btn btn-panel" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                                            <button class="btn btn-panel" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                                            <button class="btn btn-panel" data-action="panel-close" data-toggle="tooltip" data-offset="0,10" data-original-title="Close"></button>
                                        </div>
                                    </div>
                                    <div class="panel-container show">
                                        <div class="panel-content">
                                            <div class="demo-v-spacing">
                                                <ol class="breadcrumb breadcrumb-sm breadcrumb-arrow">
                                                    <li>
                                                        <a href="#">
                                                            <i class="fal fa-home"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <i class="fal fa-chart-pie"></i>
                                                            <span class="hidden-md-down">Projects</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <i class="fal fa-angle-right"></i>
                                                            <span class="hidden-md-down">Library</span>
                                                        </a>
                                                    </li>
                                                    <li class="active">
                                                        <a href="#">
                                                            <i class="fal fa-arrow-down"></i>
                                                            <span class="hidden-md-down">Data</span>
                                                        </a>
                                                    </li>
                                                </ol>
                                                <ol class="breadcrumb breadcrumb-arrow">
                                                    <li>
                                                        <a href="#">
                                                            <i class="fal fa-home"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <i class="fal fa-chart-pie"></i>
                                                            <span class="hidden-lg-down">Projects</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <i class="fal fa-angle-right"></i>
                                                            <span class="hidden-lg-down">Library</span>
                                                        </a>
                                                    </li>
                                                    <li class="active">
                                                        <a href="#">
                                                            <i class="fal fa-arrow-down"></i>
                                                            <span class="hidden-lg-down">Data</span>
                                                        </a>
                                                    </li>
                                                </ol>
                                                <ol class="breadcrumb breadcrumb-lg breadcrumb-arrow mb-0">
                                                    <li>
                                                        <a href="#">
                                                            <i class="fal fa-home"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <i class="fal fa-chart-pie"></i>
                                                            <span class="hidden-lg-down">Projects</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <i class="fal fa-angle-right"></i>
                                                            <span class="hidden-lg-down">Library</span>
                                                        </a>
                                                    </li>
                                                    <li class="active">
                                                        <a href="#">
                                                            <i class="fal fa-arrow-down"></i>
                                                            <span class="hidden-lg-down">Data</span>
                                                        </a>
                                                    </li>
                                                </ol>
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
