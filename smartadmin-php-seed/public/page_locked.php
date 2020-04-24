<?php

require_once 'init.php';

$_title = 'Login - SmartAdmin v4.0.2';
$_head = '<link rel="stylesheet" media="screen, print" href="'.ASSETS_URL.'/css/fa-brands.css">
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
        <div class="page-wrapper">
            <div class="page-inner bg-brand-gradient">
                <div class="page-content-wrapper bg-transparent m-0">
                    <div class="height-10 w-100 shadow-lg px-4 bg-brand-gradient">
                        <div class="d-flex align-items-center container p-0">
                            <div class="page-logo width-mobile-auto m-0 align-items-center justify-content-center p-0 bg-transparent bg-img-none shadow-0 height-9">
                                <a href="javascript:void(0)" class="page-logo-link press-scale-down d-flex align-items-center">
                                    <img src="<?= ASSETS_URL ?>/img/logo.png" alt="SmartAdmin WebApp" aria-roledescription="logo">
                                    <span class="page-logo-text mr-1">SmartAdmin for PHP</span>
                                </a>
                            </div>
                            <a href="<?= APP_URL ?>/page_register.php" class="btn-link text-white ml-auto">
                                Create Account
                            </a>
                        </div>
                    </div>
                    <div class="d-flex flex-1" style="background: url(<?= ASSETS_URL ?>/img/svg/pattern-1.svg) no-repeat center bottom fixed; background-size: cover;">
                        <div class="container py-4 py-lg-5 my-lg-5 px-4 px-sm-0 text-white d-flex align-items-center justify-content-center">
                            <form id="js-login" action="<?= APP_URL ?>/intel_analytics_dashboard.php" role="form" class="text-center text-white mb-5 pb-5">
                                <div class="py-3">
                                    <img src="<?= ASSETS_URL ?>/img/demo/avatars/avatar-admin-lg.png" class="img-responsive rounded-circle img-thumbnail" alt="thumbnail">
                                </div>
                                <div class="form-group">
                                    <h3>
                                        Dr. Codex Lantern
                                        <small>
                                            drlantern@gotbootstrap.com
                                        </small>
                                    </h3>
                                    <p class="text-white opacity-50">Enter password to unlock screen</p>
                                    <div class="input-group input-group-lg">
                                        <input type="text" class="form-control" placeholder="Password">
                                        <div class="input-group-append">
                                            <button class="btn btn-success shadow-0" type="button" id="button-addon5"><i class="fal fa-key"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <a href="<?= APP_URL ?>/page_login-alt.php" class="text-white opacity-90">Not Dr. Codex Lantern ?</a>
                                </div>
                            </form>
                            <div class="position-absolute pos-bottom pos-left pos-right p-3 text-center text-white">
                                2019 © SmartAdmin for PHP by&nbsp;<a href='https://smartadmin.lodev09.com' class='text-white opacity-40 fw-500' title='smartadmin.lodev09.com' target='_blank'>@lodev09</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include_once APP_PATH.'/includes/js.php'; ?>
        <script>
            $("#js-login-btn").click(function(event)
            {

                // Fetch form to apply custom Bootstrap validation
                var form = $("#js-login")

                if (form[0].checkValidity() === false)
                {
                    event.preventDefault()
                    event.stopPropagation()
                }

                form.addClass('was-validated');
                // Perform ajax submit here...
            });

        </script>
    </body>
</html>
