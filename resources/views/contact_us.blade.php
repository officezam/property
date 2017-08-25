@extends('layouts.app')
@section('content')

<!--start advanced search section-->
@include('layouts.advance_search')
<!--end advanced search section-->
    <div class="header-media">
        <div class="banner-parallax" style="height: 400px;">
            <div class="banner-bg-wrap">
                <div class="banner-inner" style="background-image: url('assets/images/about_us.jpg');"></div>
            </div>
        </div>
        <div class="banner-caption">
            <h1>Contact us</h1>
        </div>
    </div>

    <!--start section page body-->
    <section id="section-body">
        <div class="container">
            <div class="page-title breadcrumb-top">
                <div class="row">
                    <div class="col-sm-12">
                        <ol class="breadcrumb">
                            <li><a href="{{url('index')}}"><i class="fa fa-home"></i></a></li>
                            <li class="active">Contact</li>
                        </ol>
                        <div class="page-title-left">
                            <h2>Contact</h2>
                        </div>
                    </div>
                </div>
                 <div class="row">
            <div class="col-sm-6">
                @if(Session::has('Message'))
                <div class="alert alert-success">
                    <p class="errors">{!! Session::get('Message') !!}</p>
                </div>
                @endif
            </div></div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div id="content-area" class="contact-area">
                        <div class="white-block">
                            <div class="row">
                                <div class="col-sm-5 col-xs-12 contact-block-inner">
                                    <form id="contact_form" method="POST" action="{{ URL::action('ContactUsController@store')}}">
                                         {{ csrf_field() }}
                                        <div class="form-group">
                                            <label class="control-label" for="email">Your email</label>
                                            <input class="form-control" name="email" id="email">
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label" for="phone">Your Phone</label>
                                            <input class="form-control" name="phone" id="phone">
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label" for="subject">Subject</label>
                                            <input class="form-control" name="subject" id="subject">
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label" for="message">Your Message</label>
                                            <textarea class="form-control" name="message" rows="4" id="message"></textarea>
                                        </div>
                                        <button type="submit" class="btn btn-secondary btn-long">Send</button>
                                    </form>
                                </div>
                                <div class="col-sm-4 col-xs-12 contact-block-inner">
                                    @foreach($contactus as $contact)

                                    {!!$contact->description !!}


                                    @endforeach
                                </div>
                                <div class="col-sm-3 col-xs-12 contact-block-inner">
                                    <div class="contact-info-block alert alert-info">
                                        <p class="padding-top"><strong>For All Press Inquiries,</strong><br>
                                            <strong>please contact:</strong></p>
                                        <p><strong>M Akhtar</strong><br>
                                            Public Relations Manager<br>
                                            officers Colony Multan, Pakistan<br>
                                            info@justdeal.pk</p>
                                        <p><strong>Sahir</strong><br>
                                            Public Relations Associated<br>
                                           officers Colony Multan, Pakistan<br>
                                            amir@justdeal.pk</p>

                                    </div>
                                    <div class="contact-info-block alert alert-info">
                                        <p class="padding-top">
                                            <strong>Corporate Headquarters</strong><br>
                                            Houzez&nbsp;&nbsp;Office<br>
                                            Liberty Market Lahore, Pakistan</p>
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