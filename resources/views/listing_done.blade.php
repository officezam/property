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
                            <li class="pay-step-block"><a href="listing-payment.html">3. Payment</a></li>
                            <li class="pay-step-block active"><span>4. Done</span></li>
                        </ol>
                    </div>
                </div>
            </div>

            <div class="membership-content-area">
                <div class="membership-done-block white-block">
                    <div class="done-block-inner">
                        <div class="done-icon"><i class="fa fa-check"></i></div>
                        <h2> Thank you for joing us! </h2>
                        <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer in augue rhoncus, congue neque eu, consequat quam. Maecenas in cursus dui, sed tempor est. Duis varius nibh in lorem venenatis, in tincidunt nunc scelerisque. </p>
                        <a href="#" class="btn btn-primary btn-long"> Go to Dashboard </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--end section page body-->
    @stop