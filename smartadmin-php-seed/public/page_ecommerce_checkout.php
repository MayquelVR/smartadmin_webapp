<?php

require_once 'init.php';

$_title = 'Checkout - App Views - SmartAdmin v4.0.2';
$_active_nav = 'page_ecommerce_checkout';
$_head = '';
$_description = 'E-commerce add item layout';

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
                            <li class="breadcrumb-item">App Views</li>
                            <li class="breadcrumb-item">E-commerce</li>
                            <li class="breadcrumb-item active">Checkout</li>
                            <li class="position-absolute pos-top pos-right d-none d-sm-block"><span class="js-get-date"></span></li>
                        </ol>
                        <div class="subheader">
                            <h1 class="subheader-title">
                                <i class='subheader-icon fal fa-plus-circle'></i> Checkout
                                <small>
                                    E-commerce add item layout
                                </small>
                            </h1>
                        </div>
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="row">
                                    <div class="col-md-4 order-md-2 mb-4">
                                        <div class="card">
                                            <div class="card-body">
                                                <h4 class="d-flex justify-content-between align-items-center mb-3">
                                                    <span class="text-muted">Your cart</span>
                                                    <span class="badge badge-secondary badge-pill">3</span>
                                                </h4>
                                                <ul class="list-group mb-3">
                                                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                                                        <div>
                                                            <h6 class="my-0">Product name</h6>
                                                            <small class="text-muted">Brief description</small>
                                                        </div>
                                                        <span class="text-muted">$12</span>
                                                    </li>
                                                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                                                        <div>
                                                            <h6 class="my-0">Second product</h6>
                                                            <small class="text-muted">Brief description</small>
                                                        </div>
                                                        <span class="text-muted">$8</span>
                                                    </li>
                                                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                                                        <div>
                                                            <h6 class="my-0">Third item</h6>
                                                            <small class="text-muted">Brief description</small>
                                                        </div>
                                                        <span class="text-muted">$5</span>
                                                    </li>
                                                    <li class="list-group-item d-flex justify-content-between bg-light">
                                                        <div class="text-success">
                                                            <h6 class="my-0">Promo code</h6>
                                                            <small>EXAMPLECODE</small>
                                                        </div>
                                                        <span class="text-success">-$5</span>
                                                    </li>
                                                    <li class="list-group-item d-flex justify-content-between">
                                                        <span>Total (USD)</span>
                                                        <strong>$20</strong>
                                                    </li>
                                                </ul>
                                                <form class="card p-2">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" placeholder="Promo code">
                                                        <div class="input-group-append">
                                                            <button type="submit" class="btn btn-secondary">Redeem</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-8 order-md-1">
                                        <div class="card">
                                            <div class="card-body">
                                                <h4 class="mb-g">Billing address</h4>
                                                <form class="needs-validation" novalidate>
                                                    <div class="row">
                                                        <div class="col-md-6 form-group">
                                                            <label class="form-label" for="firstName">First name</label>
                                                            <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
                                                            <div class="invalid-feedback">
                                                                Valid first name is required.
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 form-group">
                                                            <label class="form-label" for="lastName">Last name</label>
                                                            <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
                                                            <div class="invalid-feedback">
                                                                Valid last name is required.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="form-label" for="username">Username</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text">@</span>
                                                            </div>
                                                            <input type="text" class="form-control" id="username" placeholder="Username" required>
                                                            <div class="invalid-feedback" style="width: 100%;">
                                                                Your username is required.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="form-label" for="email">Email <span class="text-muted">(Optional)</span></label>
                                                        <input type="email" class="form-control" id="email" placeholder="you@example.com">
                                                        <div class="invalid-feedback">
                                                            Please enter a valid email address for shipping updates.
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="form-label" for="address">Address</label>
                                                        <input type="text" class="form-control" id="address" placeholder="1234 Main St" required>
                                                        <div class="invalid-feedback">
                                                            Please enter your shipping address.
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="form-label" for="address2">Address 2 <span class="text-muted">(Optional)</span></label>
                                                        <input type="text" class="form-control" id="address2" placeholder="Apartment or suite">
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-5 form-group">
                                                            <label class="form-label" for="country">Country</label>
                                                            <select class="custom-select d-block w-100" id="country" required>
                                                                <option value="">Choose...</option>
                                                                <option>United States</option>
                                                            </select>
                                                            <div class="invalid-feedback">
                                                                Please select a valid country.
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 form-group">
                                                            <label class="form-label" for="state">State</label>
                                                            <select class="custom-select d-block w-100" id="state" required>
                                                                <option value="">Choose...</option>
                                                                <option>California</option>
                                                            </select>
                                                            <div class="invalid-feedback">
                                                                Please provide a valid state.
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3 form-group">
                                                            <label class="form-label" for="zip">Zip</label>
                                                            <input type="text" class="form-control" id="zip" placeholder="" required>
                                                            <div class="invalid-feedback">
                                                                Zip code required.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr class="mb-g">
                                                    <div class="demo-v-spacing">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="same-address">
                                                            <label class="custom-control-label" for="same-address">Shipping address is the same as my billing address</label>
                                                        </div>
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="save-info">
                                                            <label class="custom-control-label" for="save-info">Save this information for next time</label>
                                                        </div>
                                                    </div>
                                                    <hr class="mb-g">
                                                    <h4 class="form-group">Payment</h4>
                                                    <div class="d-block my-3 demo-v-spacing">
                                                        <div class="custom-control custom-radio">
                                                            <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked required>
                                                            <label class="custom-control-label" for="credit">Credit card</label>
                                                        </div>
                                                        <div class="custom-control custom-radio">
                                                            <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required>
                                                            <label class="custom-control-label" for="debit">Debit card</label>
                                                        </div>
                                                        <div class="custom-control custom-radio">
                                                            <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required>
                                                            <label class="custom-control-label" for="paypal">PayPal</label>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6 form-group">
                                                            <label class="form-label" for="cc-name">Name on card</label>
                                                            <input type="text" class="form-control" id="cc-name" placeholder="" required>
                                                            <small class="text-muted">Full name as displayed on card</small>
                                                            <div class="invalid-feedback">
                                                                Name on card is required
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 form-group">
                                                            <label class="form-label" for="cc-number">Credit card number</label>
                                                            <input type="text" class="form-control" id="cc-number" placeholder="" required>
                                                            <div class="invalid-feedback">
                                                                Credit card number is required
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-3 form-group">
                                                            <label class="form-label" for="cc-expiration">Expiration</label>
                                                            <input type="text" class="form-control" id="cc-expiration" placeholder="" required>
                                                            <div class="invalid-feedback">
                                                                Expiration date required
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3 form-group">
                                                            <label class="form-label" for="cc-cvv">CVV</label>
                                                            <input type="text" class="form-control" id="cc-cvv" placeholder="" required>
                                                            <div class="invalid-feedback">
                                                                Security code required
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr class="mb-g">
                                                    <div class="text-right">
                                                        <button class="btn btn-primary btn-lg" type="submit">Continue to checkout</button>
                                                    </div>
                                                </form>
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
            // Example starter JavaScript for disabling form submissions if there are invalid fields
            (function()
            {
                'use strict';

                window.addEventListener('load', function()
                {
                    // Fetch all the forms we want to apply custom Bootstrap validation styles to
                    var forms = document.getElementsByClassName('needs-validation');

                    // Loop over them and prevent submission
                    var validation = Array.prototype.filter.call(forms, function(form)
                    {
                        form.addEventListener('submit', function(event)
                        {
                            if (form.checkValidity() === false)
                            {
                                event.preventDefault();
                                event.stopPropagation();
                            }
                            form.classList.add('was-validated');
                        }, false);
                    });
                }, false);
            })();

        </script>
    </body>
</html>
