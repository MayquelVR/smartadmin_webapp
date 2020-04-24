<?php

require_once 'init.php';

$_title = 'Generate Table Style - Tables - SmartAdmin v4.0.2';
$_active_nav = 'tables_generate_style';
$_head = '';

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
                            <li class="breadcrumb-item">Tables</li>
                            <li class="breadcrumb-item active">Generate Table Style</li>
                            <li class="position-absolute pos-top pos-right d-none d-sm-block"><span class="js-get-date"></span></li>
                        </ol>
                        <div class="subheader">
                            <h1 class="subheader-title">
                                <i class='fal fa-th-list text-primary'></i> Generate Table Style
                                <small>
                                </small>
                            </h1>
                        </div>
                        <div class="alert alert-primary">
                            <div class="d-flex flex-start w-100">
                                <div class="mr-2">
                                    <span class="icon-stack icon-stack-lg">
                                        <i class="base-2 icon-stack-3x color-primary-400"></i>
                                        <i class="base-3 icon-stack-2x color-primary-600 opacity-70"></i>
                                        <i class="fal fa-lightbulb icon-stack-1x text-white opacity-90"></i>
                                    </span>
                                </div>
                                <div class="d-flex flex-fill">
                                    <div class="flex-fill">
                                        <span class="h5">Helpful tip</span>
                                        <br>
                                        Alternatively you can generate a dummy table and simply insert the classes needed manually with this external generator <a href="https://www.generatedata.com/" target="_blank">https://www.generatedata.com</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card mb-g">
                                    <h5 class="card-header bg-white">
                                        Table <span class="fw-300">Layout Generator </span>
                                    </h5>
                                    <div class="card-body">
                                        <h5 class="frame-heading">
                                            Select styles
                                        </h5>
                                        <div class="frame-wrap bg-faded mb-5">
                                            <div class="custom-control custom-checkbox d-inline-flex mr-3">
                                                <input type="checkbox" checked="checked" class="custom-control-input" id="bordered" data-class="table-bordered">
                                                <label class="custom-control-label" for="bordered">Bordered Table</label>
                                            </div>
                                            <div class="custom-control custom-checkbox d-inline-flex mr-3">
                                                <input type="checkbox" class="custom-control-input" id="smaller" data-class="table-sm">
                                                <label class="custom-control-label" for="smaller">Smaller Table</label>
                                            </div>
                                            <div class="custom-control custom-checkbox d-inline-flex mr-3">
                                                <input type="checkbox" class="custom-control-input" id="dark" data-class="table-dark">
                                                <label class="custom-control-label" for="dark">Table Dark</label>
                                            </div>
                                            <div class="custom-control custom-checkbox d-inline-flex mr-3">
                                                <input type="checkbox" class="custom-control-input" id="light" data-class="table-light">
                                                <label class="custom-control-label" for="light">Table light</label>
                                            </div>
                                            <div class="custom-control custom-checkbox d-inline-flex mr-3">
                                                <input type="checkbox" class="custom-control-input" id="hover" data-class="table-hover">
                                                <label class="custom-control-label" for="hover">Table Hover</label>
                                            </div>
                                            <div class="custom-control custom-checkbox d-inline-flex mr-3">
                                                <input type="checkbox" class="custom-control-input" id="stripe" data-class="table-striped">
                                                <label class="custom-control-label" for="stripe">Table Stripped</label>
                                            </div>
                                        </div>
                                        <h5 class="frame-heading p-0 bg-white mb-g">
                                            Generated preview:
                                        </h5>
                                        <div class="frame-wrap p-0 border-0 m-0">
                                            <table class="table m-0 table-bordered" id="table-example">
                                                <thead>
                                                    <tr>
                                                        <th>Client</th>
                                                        <th>Email</th>
                                                        <th>Phone</th>
                                                        <th>Company</th>
                                                        <th>City</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Inga</td>
                                                        <td>metus.Aliquam@ametlorem.ca</td>
                                                        <td>1-318-627-3874</td>
                                                        <td>Montes Industries</td>
                                                        <td>Dolgellau</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Price</td>
                                                        <td>nec.enim.Nunc@facilisis.net</td>
                                                        <td>1-963-499-3886</td>
                                                        <td>Risus Quisque Inc.</td>
                                                        <td>Cascavel</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Jeanette</td>
                                                        <td>non@afeugiattellus.co.uk</td>
                                                        <td>1-133-240-5173</td>
                                                        <td>Quis Diam Corporation</td>
                                                        <td>Springdale</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Randall</td>
                                                        <td>dignissim.magna.a@ipsum.co.uk</td>
                                                        <td>1-859-866-0345</td>
                                                        <td>Mauris Blandit Associates</td>
                                                        <td>Patarrá</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Roanna</td>
                                                        <td>nascetur.ridiculus@fermentumvel.co.uk</td>
                                                        <td>1-289-706-6780</td>
                                                        <td>Non Enim Commodo Incorporated</td>
                                                        <td>New Galloway</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Macaulay</td>
                                                        <td>Fusce@egestasligulaNullam.ca</td>
                                                        <td>1-726-644-6609</td>
                                                        <td>Et LLC</td>
                                                        <td>Sandy</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Chiquita</td>
                                                        <td>luctus@metuseuerat.edu</td>
                                                        <td>1-258-865-1127</td>
                                                        <td>Cursus Consulting</td>
                                                        <td>Masterton</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <button class="btn btn-primary mt-3 float-right">Get Table Style</button>
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
            $('input:checkbox').change(function()
            {
                if ($(this).is(":checked"))
                {
                    $('#table-example').addClass($(this).attr("data-class"));
                }
                else
                {
                    $('#table-example').removeClass($(this).attr("data-class"));
                }
            });

        </script>
    </body>
</html>
