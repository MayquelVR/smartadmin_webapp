<?php

require_once 'init.php';

$_title = 'Item - Page Views - SmartAdmin v4.0.2';
$_active_nav = 'page_forum_discussion';
$_head = '	<link rel="stylesheet" media="screen, print" href="'.ASSETS_URL.'/css/fa-solid.css">
';
$_description = 'Forum discussion page';

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
                            <li class="breadcrumb-item">Forum Layouts</li>
                            <li class="breadcrumb-item active">Item</li>
                            <li class="position-absolute pos-top pos-right d-none d-sm-block"><span class="js-get-date"></span></li>
                        </ol>
                        <div class="subheader">
                            <h1 class="subheader-title">
                                <i class='subheader-icon fal fa-plus-circle'></i> Forum: <span class='fw-300'>Discussion</span>
                                <small>
                                    Forum discussion page
                                </small>
                            </h1>
                        </div>
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="input-group input-group-lg mb-g">
                                    <input type="text" class="form-control shadow-inset-2" placeholder="Search Discussion">
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="fal fa-search"></i></span>
                                    </div>
                                </div>
                                <!-- post -->
                                <div class="card mb-g border shadow-0">
                                    <div class="card-header bg-white p-0">
                                        <div class="p-3 d-flex flex-row">
                                            <div class="d-block flex-shrink-0">
                                                <img src="<?= ASSETS_URL ?>/img/demo/avatars/avatar-admin.png" class="img-fluid img-thumbnail" alt="">
                                            </div>
                                            <div class="d-block ml-2">
                                                <span class="h6 font-weight-bold text-uppercase d-block m-0"><a href="javascript:void(0);">Account information & Security</a> / <span class="fw-300">Package location</span></span>
                                                <a href="javascript:void(0);" class="fs-sm text-info h6 fw-500 mb-0 d-block">Dr. Codex Lantern</a>
                                                <div class="d-flex mt-1 text-warning align-items-center">
                                                    <i class="fas fa-star mr-1"></i>
                                                    <i class="fas fa-star mr-1"></i>
                                                    <i class="fas fa-star mr-1"></i>
                                                    <i class="fas fa-star mr-1"></i>
                                                    <i class="fal fa-star mr-1"></i>
                                                    <span class="text-muted fs-xs font-italic">
                                                        (140 votes)
                                                    </span>
                                                </div>
                                            </div>
                                            <a href="javascript:void(0);" class="d-inline-flex align-items-center text-dark ml-auto align-self-start">
                                                <span>55</span><i class="fas fa-heart ml-1 text-danger"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-body ">
                                        <p>
                                            Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Phasellus quis sem diam. Sed commodo metus in ultrices consequat. Vestibulum eu orci ante. Mauris vel tincidunt mauris. Cras finibus, purus eu pharetra molestie, orci felis lacinia orci, ac congue quam turpis a nibh
                                        </p>
                                        <p>
                                            Nam viverra diam magna, eget lobortis orci tincidunt sed. Donec et lobortis est. Morbi eget massa est. In iaculis odio lectus, sed efficitur nunc viverra non. Nullam molestie eros magna, eu posuere mauris posuere sit amet. Pellentesque hendrerit condimentum ipsum, euismod ornare lectus pharetra eget. Praesent semper est erat, commodo mollis arcu efficitur vitae. Maecenas gravida sit amet nisi vel interdum.
                                        </p>
                                        <p>
                                            Vestibulum molestie, ipsum vitae feugiat lacinia, nisi magna accumsan velit, ac semper nisi felis vitae augue. Vivamus mattis quis erat eu gravida. Integer venenatis risus vitae ullamcorper cursus. Proin sodales odio sed aliquet pulvinar. Duis ipsum erat, ultricies a dolor non, tempor dictum ante. Morbi vel metus lectus
                                        </p>
                                    </div>
                                    <div class="card-footer">
                                        <div class="d-flex align-items-center">
                                            <span class="text-sm text-muted font-italic"><i class="fal fa-clock mr-1"></i> Posted 1 week ago</span>
                                            <a href="javascript:void(0);" class="flex-shrink-0 ml-auto">Reply <i class="fal fa-reply ml-2"></i> </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- post -end -->
                                <!-- post -->
                                <div class="card mb-g border shadow-0">
                                    <div class="card-header bg-white p-0">
                                        <div class="p-3 d-flex flex-row">
                                            <div class="d-block flex-shrink-0">
                                                <img src="<?= ASSETS_URL ?>/img/demo/avatars/avatar-b.png" class="img-fluid img-thumbnail" alt="">
                                            </div>
                                            <div class="d-block ml-2">
                                                <span class="h6 font-weight-bold text-uppercase d-block m-0">RE: Package location</span>
                                                <a href="javascript:void(0);" class="fs-sm text-info h6 fw-500 mb-0 d-block">Oliver Kopyov</a>
                                                <div class="d-flex mt-1 text-warning align-items-center">
                                                    <i class="fas fa-star mr-1"></i>
                                                    <i class="fas fa-star mr-1"></i>
                                                    <i class="fas fa-star mr-1"></i>
                                                    <i class="fal fa-star mr-1"></i>
                                                    <i class="fal fa-star mr-1"></i>
                                                    <span class="text-muted fs-xs font-italic">
                                                        (90 votes)
                                                    </span>
                                                </div>
                                            </div>
                                            <a href="javascript:void(0);" class="d-inline-flex align-items-center text-dark ml-auto align-self-start">
                                                <i class="fal fa-heart ml-1 text-muted"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-body ">
                                        <blockquote class="font-italic fw-sm bg-faded border border-top-0 border-right-0 border-bottom-0 p-3">
                                            Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Phasellus quis sem diam. Sed commodo metus in ultrices consequat. Vestibulum eu orci ante. Mauris vel tincidunt mauris. Cras finibus, purus eu pharetra molestie, orci felis lacinia orci, ac congue quam turpis a nibh...
                                        </blockquote>
                                        <p>
                                            Proin vehicula nibh a nisl porta laoreet. Etiam quis massa quam. Etiam elementum nunc accumsan ullamcorper viverra. Sed aliquam ligula eu porta posuere. Nullam in dictum lacus. Nulla auctor hendrerit purus, sit amet lacinia tellus placerat nec. Nunc condimentum urna sit amet blandit egestas. Nam non placerat nisi. Sed sit amet massa porta, porttitor tellus porttitor, sagittis ex. Duis vitae dolor sit amet sem mattis molestie. Aliquam id pharetra leo.
                                        </p>
                                    </div>
                                    <div class="card-footer">
                                        <div class="d-flex align-items-center">
                                            <span class="text-sm text-muted font-italic"><i class="fal fa-clock mr-1"></i> Posted 4 days ago</span>
                                            <a href="javascript:void(0);" class="flex-shrink-0 ml-auto">Reply <i class="fal fa-reply ml-2"></i> </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- post -end -->
                                <!-- post -->
                                <div class="card mb-g border shadow-0">
                                    <div class="card-header bg-white p-0">
                                        <div class="p-3 d-flex flex-row">
                                            <div class="d-block flex-shrink-0">
                                                <img src="<?= ASSETS_URL ?>/img/demo/avatars/avatar-e.png" class="img-fluid img-thumbnail" alt="">
                                            </div>
                                            <div class="d-block ml-2">
                                                <span class="h6 font-weight-bold text-uppercase d-block m-0">RE: Package location</span>
                                                <a href="javascript:void(0);" class="fs-sm text-info h6 fw-500 mb-0 d-block">Dr. John Cook PhD</a>
                                                <div class="d-flex mt-1 text-warning align-items-center">
                                                    <i class="fas fa-star mr-1"></i>
                                                    <i class="fas fa-star mr-1"></i>
                                                    <i class="fas fa-star mr-1"></i>
                                                    <i class="fas fa-star mr-1"></i>
                                                    <i class="fas fa-star mr-1"></i>
                                                    <span class="text-muted fs-xs font-italic">
                                                        (77 votes)
                                                    </span>
                                                </div>
                                            </div>
                                            <a href="javascript:void(0);" class="d-inline-flex align-items-center text-dark ml-auto align-self-start">
                                                <i class="fal fa-heart ml-1 text-muted"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-body ">
                                        <p>
                                            Proin vehicula nibh a nisl porta laoreet. Etiam quis massa quam. Etiam elementum nunc accumsan ullamcorper viverra. Sed aliquam ligula eu porta posuere. Nullam in dictum lacus. Nulla auctor hendrerit purus, sit amet lacinia tellus placerat nec. Nunc condimentum urna sit amet blandit egestas. Nam non placerat nisi. Sed sit amet massa porta, porttitor tellus porttitor, sagittis ex. Duis vitae dolor sit amet sem mattis molestie. Aliquam id pharetra leo.
                                        </p>
                                        <p>
                                            Vivamus at sapien eget lorem suscipit laoreet. Donec tincidunt augue auctor, ullamcorper urna ac, bibendum odio. Donec ac facilisis mauris. Quisque egestas quam libero, in vulputate purus accumsan vitae
                                        </p>
                                    </div>
                                    <div class="card-footer">
                                        <div class="d-flex align-items-center">
                                            <span class="text-sm text-muted font-italic"><i class="fal fa-clock mr-1"></i> Posted 2 days ago</span>
                                            <a href="javascript:void(0);" class="flex-shrink-0 ml-auto">Reply <i class="fal fa-reply ml-2"></i> </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- post -end -->
                                <!-- post -->
                                <div class="card mb-g border shadow-0">
                                    <div class="card-header bg-white p-0">
                                        <div class="p-3 d-flex flex-row">
                                            <div class="d-block flex-shrink-0">
                                                <img src="<?= ASSETS_URL ?>/img/demo/avatars/avatar-h.png" class="img-fluid img-thumbnail" alt="">
                                            </div>
                                            <div class="d-block ml-2">
                                                <span class="h6 font-weight-bold text-uppercase d-block m-0">RE: Package location</span>
                                                <a href="javascript:void(0);" class="fs-sm text-info h6 fw-500 mb-0 d-block">Sarah McBrook</a>
                                                <div class="d-flex mt-1 text-warning align-items-center">
                                                    <i class="fas fa-star mr-1"></i>
                                                    <i class="fas fa-star mr-1"></i>
                                                    <i class="fas fa-star mr-1"></i>
                                                    <i class="fas fa-star mr-1"></i>
                                                    <i class="fas fa-star mr-1"></i>
                                                    <span class="text-muted fs-xs font-italic">
                                                        (146 votes)
                                                    </span>
                                                </div>
                                            </div>
                                            <a href="javascript:void(0);" class="d-inline-flex align-items-center text-dark ml-auto align-self-start">
                                                <span>3</span><i class="fas fa-heart ml-1 text-danger"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-body ">
                                        <p>
                                            Curabitur sollicitudin eros eget nibh commodo posuere. Aenean non diam at massa accumsan elementum eget in arcu. Cras vestibulum ornare nulla, vel porttitor turpis tristique at. In laoreet eleifend dolor, ac eleifend nunc porttitor et. Praesent volutpat risus in metus lacinia porttitor
                                        </p>
                                    </div>
                                    <div class="card-footer">
                                        <div class="d-flex align-items-center">
                                            <span class="text-sm text-muted font-italic"><i class="fal fa-clock mr-1"></i> Posted 1 hour ago</span>
                                            <a href="javascript:void(0);" class="flex-shrink-0 ml-auto">Reply <i class="fal fa-reply ml-2"></i> </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- post -end -->
                                <ul class="pagination mt-3">
                                    <li class="page-item disabled">
                                        <a class="page-link" href="#" aria-label="Previous">
                                            <span aria-hidden="true"><i class="fal fa-chevron-left"></i></span>
                                        </a>
                                    </li>
                                    <li class="page-item active" aria-current="page">
                                        <span class="page-link">
                                            1
                                            <span class="sr-only">(current)</span>
                                        </span>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Next">
                                            <span aria-hidden="true"><i class="fal fa-chevron-right"></i></span>
                                        </a>
                                    </li>
                                </ul>
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
