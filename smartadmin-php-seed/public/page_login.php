<?php

require_once 'init.php';

$_title = 'Login - SmartAdmin v4.0.2';
$_head = '	<link rel="stylesheet" media="screen, print" href="'.ASSETS_URL.'/css/page-login.css">
';

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
        <div class="blankpage-form-field">
            <div class="page-logo m-0 w-100 align-items-center justify-content-center rounded border-bottom-left-radius-0 border-bottom-right-radius-0 px-4">
                <a href="javascript:void(0)" class="page-logo-link press-scale-down d-flex align-items-center">
                    <img src="<?= ASSETS_URL ?>/img/logo.png" alt="SmartAdmin for PHP" aria-roledescription="logo">
                    <span class="page-logo-text mr-1">SmartAdmin for PHP</span>
                    <i class="fal fa-angle-down d-inline-block ml-1 fs-lg color-primary-300"></i>
                </a>
            </div>
            <div class="card p-4 border-top-left-radius-0 border-top-right-radius-0">
                <form action="<?= APP_URL ?>/intel_introduction.php">
                    <div class="form-group">
                        <label class="form-label" for="username">Username</label>
                        <input type="email" id="username" class="form-control" placeholder="your id or email" value="drlantern@gotbootstrap.com">
                        <span class="help-block">
                            Your unique username to app
                        </span>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="password">Password</label>
                        <input type="password" id="password" class="form-control" placeholder="password" value="password123">
                        <span class="help-block">
                            Your password
                        </span>
                    </div>
                    <div class="form-group text-left">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="rememberme">
                            <label class="custom-control-label" for="rememberme"> Remember me for the next 30 days</label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-default float-right">Secure login</button>
                </form>
            </div>
            <div class="blankpage-footer text-center">
                <a href="#"><strong>Recover Password</strong></a> | <a href="#"><strong>Register Account</strong></a>
            </div>
        </div>
        <div class="login-footer p-2">
            <div class="row">
                <div class="col col-sm-12 text-center">
                    <i><strong>System Message:</strong> You were logged out from 198.164.246.1 on Saturday, March, 2017 at 10.56AM</i>
                </div>
            </div>
        </div>
        <video poster="<?= ASSETS_URL ?>/img/backgrounds/clouds.png" id="bgvid" playsinline autoplay muted loop>
            <source src="<?= ASSETS_URL ?>/media/video/cc.webm" type="video/webm">
            <source src="<?= ASSETS_URL ?>/media/video/cc.mp4" type="video/mp4">
        </video>
        <?php include_once APP_PATH.'/includes/js.php'; ?>
        <!-- Page related scripts -->
    </body>
</html>