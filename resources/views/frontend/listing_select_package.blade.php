@extends('layouts.dashboard')
@section('content')
  <!--start section page body-->
    <section id="section-body">
        <div class="container">
            <div class="membership-page-top">
                <div class="row">
                    <div class="col-sm-12 col-xs-12">
                        <div class="membership-page-title">
                            <h1 class="page-title"> Select Your Membership Package </h1>
                            <p class="page-subtitle"> Thank you for joining your Membership </p>
                        </div>
                        <ol class="pay-step-bar">
                            <li class="pay-step-block"><a href="add-new-property.html">1. Listing</a></li>
                            <li class="pay-step-block active"><span>2. <span class="hidden-xs">Select</span> Package</span></li>
                            <li class="pay-step-block"><span>3. Payment</span></li>
                            <li class="pay-step-block"><span>4. Done</span></li>
                        </ol>
                    </div>
                </div>
            </div>

            <div class="membership-content-area">
                <div class="houzez-module package-table-module">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3 col-sm-6">
                                <div class="package-block">
                                    <h3 class="package-title">Free</h3>
                                    <h1 class="package-price">
                                        <span class="price-before">$</span><span class="price-number">0</span><span class="price-before">.00</span>
                                    </h1>
                                    <ul class="package-list">
                                        <li><i class="fa fa-check"></i> Time Period: <strong>3 Days</strong></li>
                                        <li><i class="fa fa-check"></i> Featured Lisitng: <strong>3</strong></li>
                                        <li><i class="fa fa-check"></i> Properties: <strong>10</strong></li>
                                    </ul>
                                    <div class="package-link">
                                        <a href="#" class="btn btn-primary btn-lg">Custom Link</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="package-block">
                                    <h3 class="package-title">Basic</h3>
                                    <h1 class="package-price">
                                        <span class="price-before">$</span><span class="price-number">29</span><span class="price-before">.99</span>
                                    </h1>
                                    <ul class="package-list">
                                        <li><i class="fa fa-check"></i> Time Period: <strong>3 Days</strong></li>
                                        <li><i class="fa fa-check"></i> Featured Lisitng: <strong>3</strong></li>
                                        <li><i class="fa fa-check"></i> Properties: <strong>10</strong></li>
                                    </ul>
                                    <div class="package-link">
                                        <a href="#" class="btn btn-primary btn-lg">Custom Link</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="package-block active">
                                    <h3 class="package-title">Standard</h3>
                                    <h1 class="package-price">
                                        <span class="price-before">$</span><span class="price-number">49</span><span class="price-before">.99</span>
                                    </h1>
                                    <ul class="package-list">
                                        <li><i class="fa fa-check"></i> Time Period: <strong>3 Days</strong></li>
                                        <li><i class="fa fa-check"></i> Featured Lisitng: <strong>3</strong></li>
                                        <li><i class="fa fa-check"></i> Properties: <strong>10</strong></li>
                                    </ul>
                                    <div class="package-link">
                                        <a href="#" class="btn btn-primary btn-lg">Custom Link</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="package-block">
                                    <h3 class="package-title">Premium</h3>
                                    <h1 class="package-price">
                                        <span class="price-before">$</span><span class="price-number">79</span><span class="price-before">.99</span>
                                    </h1>
                                    <ul class="package-list">
                                        <li><i class="fa fa-check"></i> Time Period: <strong>3 Days</strong></li>
                                        <li><i class="fa fa-check"></i> Featured Lisitng: <strong>3</strong></li>
                                        <li><i class="fa fa-check"></i> Properties: <strong>10</strong></li>
                                    </ul>
                                    <div class="package-link">
                                        <a href="#" class="btn btn-primary btn-lg">Custom Link</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--end section page body-->

@stop