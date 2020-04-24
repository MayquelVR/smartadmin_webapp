<?php

require_once __DIR__.'/const.php';

$_title = 'Installation - SmartAdmin v4.0.2';
$_head = '';

?>
<?php

$root_dir = file_exists(__DIR__.'/composer.json') ? __DIR__ : dirname(__DIR__);

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
                        SmartAdmin
                        <small class="fw-500">
                            Version 4.0.2 for PHP
                        </small>
                    </h1>
                    <h3 class="fw-500 mb-5">
                        Folder Permissions
                    </h3>
                    <h5>Please make sure that the following directories are writable by PHP.<br>If you're running on <strong>Windows</strong>, make sure you have rights on the root folder.</h5>
                    <div class="text-left">
                        <h4 class="mt-4">For linux server</h4>
                        <?php

                        $command = 'chmod 775 '.$root_dir;

                        ?>
                        <pre><code><?= $command ?></code></pre>
                    </div>
                    <h6 class="mt-4">If you're having issues installing SmartAdmin, visit our <a href="https://support.gotbootstrap.com/t/php" target="_blank">Support Forum</a> to get help.</h6>
                </div>
            </main>
            <!-- END Page Content -->
            <!-- BEGIN Page Footer -->
            <footer class="page-footer" role="contentinfo">
                <div class="d-flex align-items-center flex-1 text-muted">
                    <span class="hidden-md-down fw-700">2019 © SmartAdmin for PHP by&nbsp;<a href='https://smartadmin.lodev09.com' class='text-primary fw-500' title='smartadmin.lodev09.com' target='_blank'>@lodev09</a></span>
                </div>
            </footer>
            <!-- END Page Footer -->
        </div>
        <!-- END Page Wrapper -->
        <?php include_once APP_PATH.'/includes/extra.php'; ?>
        <?php include_once APP_PATH.'/includes/js.php'; ?>
    </body>
</html>
