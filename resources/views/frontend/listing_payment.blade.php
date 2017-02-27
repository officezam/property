@extends('layouts.dashboard')
@section('content')
   <!--start section page body-->
    <section id="section-body">
        <div class="container">
            <div class="membership-page-top">
                <div class="row">
                    <div class="col-sm-12 col-xs-12">
                        <div class="membership-page-title">
                            <h1 class="page-title"> Complete your order </h1>
                            <p class="page-subtitle"> Please enter your Account and Billing information to complete your membership! </p>
                        </div>
                        <ol class="pay-step-bar">
                            <li class="pay-step-block"><a href="add-new-property.html">1. Listing</a></li>
                            <li class="pay-step-block"><a href="listing-select-package.html">2. <span class="hidden-xs">Select</span> Package</a></li>
                            <li class="pay-step-block active"><span>3. Payment</span></li>
                            <li class="pay-step-block"><span>4. Done</span></li>
                        </ol>
                    </div>
                </div>
            </div>

            <div class="membership-content-area">
                <div class="row">
                    <div class="col-lg-8 col-md-8 col-sm-12 container-contentbar">
                        <div class="membership-content">
                            <form>
                                <div class="info-title">
                                    <h2 class="info-title-left"> Account Information </h2>
                                    <p class="already-account pull-right"> Already have an account? <a href="#"><strong>Login here</strong></a></p>
                                </div>
                                <div class="info-detail">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="first_name">First Name *</label>
                                                <input type="text" id="first_name" class="form-control" placeholder="Enter your first name">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="last_name"> Last Name * </label>
                                                <input type="text" id="last_name" class="form-control" placeholder="Enter your last name">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="email_address"> Email Address * </label>
                                                <input type="email" id="email_address" class="form-control" placeholder="Enter your email address">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="password"> Password * </label>
                                                <input type="password" id="password" class="form-control" placeholder="Choose a password">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="info-title">
                                    <h2 class="info-title-left"> Billing information </h2>
                                </div>
                                <div class="info-detail">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="address">Address *</label>
                                                <input type="text" id="address" class="form-control" placeholder="Enter your address">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="apartment"> Apartment, suite, unit </label>
                                                <input type="text" id="apartment" class="form-control" placeholder=" Enter your apartment number or suite ">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="city"> City * </label>
                                                <input type="text" id="city" class="form-control" placeholder="Enter your city">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="state"> State * </label>
                                                <select id="state" class="selectpicker" data-live-search="false" data-live-search-style="begins" title="Select">
                                                    <option>State 1</option>
                                                    <option>State 2</option>
                                                    <option>State 3</option>
                                                    <option>State 4</option>
                                                    <option>State 5</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="zip"> Zip Code * </label>
                                                <input type="email" id="zip" class="form-control" placeholder="Enter your zip code">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="country"> Country * </label>
                                                <select id="country" class="selectpicker" data-live-search="false" data-live-search-style="begins" title="Select">
                                                    <option>Country 1</option>
                                                    <option>Country 2</option>
                                                    <option>Country 3</option>
                                                    <option>Country 4</option>
                                                    <option>Country 5</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="company"> Company Name * </label>
                                                <input type="email" id="company" class="form-control" placeholder="Enter your company name">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="phone"> Phone * </label>
                                                <input type="email" id="phone" class="form-control" placeholder="Enter your phone number">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="info-title">
                                    <h2 class="info-title-left"> Payment Method </h2>
                                </div>
                                <div class="method-select-block">
                                    <div class="method-row">
                                        <div class="method-select">
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" class="payment-paypal" name="payment_type" value="1" checked>
                                                    Paypal
                                                </label>
                                            </div>
                                        </div>
                                        <div class="method-type"><img src="images/paypal-icon.jpg" alt="paypal"></div>
                                    </div>
                                    <div class="method-option">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="payment_type" value="option1">
                                                Set this as recurring payment
                                            </label>
                                        </div>
                                    </div>
                                    <div class="method-row">
                                        <div class="method-select">
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" class="payment-stripe" name="payment_type" value="1">
                                                    Stripe
                                                </label>
                                            </div>
                                        </div>
                                        <div class="method-type"><img src="images/stripe-icon.jpg" alt="stripe"></div>
                                    </div>
                                    <div class="method-option">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="payment_type" value="option1">
                                                Set this as recurring payment
                                            </label>
                                        </div>
                                    </div>
                                    <div class="method-row">
                                        <div class="method-select">
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="payment_type" value="0">
                                                    Direct Bank Transfer
                                                </label>
                                            </div>
                                        </div>
                                        <div class="method-type method-description">
                                            <p> Make your payment direct into your bank account. Please use order ID as the payment reference </p>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-success btn-submit"> Complete Membership </button>
                                <span class="help-block">By clicking "Complete Membership" you agree to our <a href="#">Terms of use.</a></span>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-md-offset-0 col-sm-offset-3 container-sidebar">
                        <aside id="sidebar">
                            <div class="payment-side-block">
                                <h3 class="side-block-title"> Membership Package </h3>
                                <ul class="pkg-total-list">
                                    <li class="total-list-head">
                                        <span class="pull-left">Standard</span>
                                        <span class="pull-right"><a href="#">Change Packages</a></span>
                                    </li>
                                    <li>
                                        <span class="pull-left">Package Time:</span>
                                        <span class="pull-right"><strong>1 Month</strong></span>
                                    </li>
                                    <li>
                                        <span class="pull-left">Listing Included:</span>
                                        <span class="pull-right"><strong>Unlimited</strong></span>
                                    </li>
                                    <li>
                                        <span class="pull-left">Featured Listing Included:</span>
                                        <span class="pull-right"><strong>2</strong></span>
                                    </li>
                                    <li>
                                        <span class="pull-left">Total Price:</span>
                                        <span class="pull-right">$15.00</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="payment-side-block">
                                <h3 class="side-block-title"> Need help? </h3>
                                <a href="#" class="btn btn-primary btn-block">Contact us</a>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--end section page body-->
@stop