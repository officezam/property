@extends('layouts/app')


<!--page level css -->
@section('pagecss')

@endsection
<!--end of page level css-->


@section('content')

    <!--start advanced search section-->
    {{--@include('layouts.advance_search')--}}
    <!--end advanced search section-->


    <div class="header-media">
        <div id="mapCanvas" style="height:490px"></div>
    </div>
    <!--start carousel module Main Project-->
    <section id="section-body">
        <div class="houzez-module-main">
            <div class="houzez-module carousel-module">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="module-title-nav clearfix" style="margin-bottom: 25px;">
                                <div>
                                    <h2>Featured Projects</h2>
                                </div>
                                <div class="module-nav">
                                    <button class="btn btn-sm btn-crl-pprt-1-prev">Prev</button>
                                    <button class="btn btn-sm btn-crl-pprt-1-next">Next</button>
                                    <a href="#" class="btn btn-carousel btn-sm">All</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="row grid-row">
                                <div class="carousel properties-carousel-grid-1 slide-animated">

                                    @foreach($Projects as $property)

                                        <?php $image = '355x240'.$property->image0; ?>
                                        <div class="item">
                                            <div class="item-wrap">
                                                <div class="property-item item-grid">
                                                    <div class="figure-block">
                                                        <figure class="item-thumb">
                                                            <div class="label-wrap hide-on-list">
                                                                <div class="label-status label label-default">For {{ $property->purpose }}</div>
                                                            </div>
                                                            <span class="label-featured label label-success">Featured</span>
                                                            <div class="price hide-on-list">
                                                                @if($property->purpose == 'sell' && $property->price <> '')
                                                                    <h3>Rs {{ $property->price }}</h3>
                                                                @elseif( $property->price <> '')
                                                                    <p class="rant">Rs {{ $property->price }}/month</p>
                                                                @endif
                                                            </div>
                                                            <a href="/property-detail/{{ $property->id  }}/{{ preg_replace('/\.\s|[^a-zA-Z\.\-0-9]+/', '-', $property->title)  }}" class="hover-effect">
                                                                <img src="{{ asset('public/propetyImages/'.$property->id.'/'.$image)  }}" alt="{{ $property->title }}">
                                                            </a>
                                                            <ul class="actions">
                                                                <li class="share-btn">
                                                                    <div class="share_tooltip fade">
                                                                        <a href="/facebook/{{ $property->id }}" target="_blank"><i class="fa fa-facebook"></i></a>
                                                                        <a href="/twitter/{{ $property->id }}" target="_blank"><i class="fa fa-twitter"></i></a>
                                                                        <a href="/gplus/{{ $property->id }}"  target="_blank"><i class="fa fa-google-plus"></i></a>
                                                                        <a href="/pinterest/{{ $property->id }}" target="_blank"><i class="fa fa-pinterest"></i></a>
                                                                    </div>
                                                                    <span data-toggle="tooltip" data-placement="top" title="share">
                                                                    <i class="fa fa-share-alt"></i></span>
                                                                </li>
                                                                <li>
                                                                            <span data-toggle="tooltip" data-placement="top" title="Favorite">
                                                                                <i class="fa fa-heart-o"></i>
                                                                            </span>
                                                                </li>
                                                                <li>
                                                                            <span data-toggle="tooltip" data-placement="top" title="Photos (5)">
                                                                                <i class="fa fa-camera"></i>
                                                                            </span>
                                                                </li>
                                                            </ul>
                                                        </figure>
                                                    </div>
                                                    <div class="item-body">

                                                        <div class="body-left">
                                                            <div class="info-row">
                                                                {{--<div class="rating">--}}
                                                                {{--<span class="bottom-ratings">--}}
                                                                {{--<span class="fa fa-star-o"></span>--}}
                                                                {{--<span class="fa fa-star-o"></span>--}}
                                                                {{--<span class="fa fa-star-o"></span>--}}
                                                                {{--<span class="fa fa-star-o"></span>--}}
                                                                {{--<span class="fa fa-star-o"></span>--}}
                                                                {{--<span style="width: 50%" class="top-ratings">--}}
                                                                {{--<span class="fa fa-star"></span>--}}
                                                                {{--<span class="fa fa-star"></span>--}}
                                                                {{--<span class="fa fa-star"></span>--}}
                                                                {{--<span class="fa fa-star"></span>--}}
                                                                {{--<span class="fa fa-star"></span>--}}
                                                                {{--</span>--}}
                                                                {{--</span>--}}
                                                                {{--<span class="star-text-right">15 Ratings</span>--}}
                                                                {{--</div>--}}
                                                                <h2 class="property-title"><a href="/property-detail/{{ $property->id  }}/{{ preg_replace('/\.\s|[^a-zA-Z\.\-0-9]+/', '-', $property->title)  }}">{{ $property->title }}</a></h2>
                                                            </div>
                                                            <div class="table-list full-width info-row">
                                                                <div class="cell">
                                                                    <div class="info-row amenities">
                                                                        {{--<p>--}}
                                                                        {{--<span>Height: {{ $property->height }}</span>--}}
                                                                        {{--<span>Width: {{ $property->width }}</span>--}}
                                                                        {{--<span>{{ $property->area_unit }}: {{ $property->area }}</span>--}}
                                                                        {{--</p>--}}
                                                                        <p>{{ $property->subtype }}</p>
                                                                    </div>
                                                                </div>
                                                                <div class="cell">
                                                                    <div class="phone">
                                                                        <a href="/property-detail/{{ $property->id  }}/{{ preg_replace('/\.\s|[^a-zA-Z\.\-0-9]+/', '-', $property->title)  }}" class="btn btn-primary">Details <i class="fa fa-angle-right fa-right"></i></a>
                                                                        {{--                                                                    <p><a href="/property-detail/{{ $property->id  }}/{{ preg_replace('/\.\s|[^a-zA-Z\.\-0-9]+/', '-', $property->title)  }}">+1 (786) 225-0199</a></p>--}}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="item-foot date hide-on-list">
                                                    <div class="item-foot-left">
                                                        <p><i class="fa fa-user"></i>{{  $property->city  }} {{  $property->region }}</p>
                                                    </div>
                                                    <div class="item-foot-right">
                                                        <p><i class="fa fa-calendar"></i>
                                                            {{ $property->created_at->diff(new DateTime())->format('%a Days Ago') }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end carousel module Main Project-->

        <!--start carousel module add-->
        <div id="carousel-module-6" class=" caption-bottom carousel-module">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="module-title-nav clearfix" style="margin-bottom: 25px;">
                            <div>
                                <h2>Advertisement</h2>
                            </div>
                            <div class="module-nav">
                                <button class="btn btn-sm btn-crl-6-prev-add">Prev</button>
                                <button class="btn btn-sm btn-crl-6-next-add">Next</button>
                                <a href="#" class="btn btn-carousel btn-sm">All</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div id="properties-carouseladd-6" class="carousel slide-animated">
                            @foreach($Adds as $add)
                                <?php $image = '385x258_'.$add->image; ?>
                                <div class="item">
                                    <div class="figure-block">
                                        <figure class="item-thumb">
                                            <a href="{{ $add->webSite_url }}" class="hover-effect" target="_blank">
                                                <img src="{{ asset('public/AddsImages/'.$image)  }}" alt="{{ $property->title }}" width="194" height="143" >
                                            </a>
                                        </figure>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end carousel module add-->


        <!--start carousel module feature sale-->
        <div id="carousel-module-6" class=" caption-bottom carousel-module">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="module-title-nav clearfix" style="margin-bottom: 25px;">
                            <div>
                                <h2>Featured Sale</h2>
                            </div>
                            <div class="module-nav">
                                <button class="btn btn-sm btn-crl-6-prev-sel">Prev</button>
                                <button class="btn btn-sm btn-crl-6-next-sel">Next</button>
                                <a href="#" class="btn btn-carousel btn-sm">All</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div id="properties-carousel-6" class="carousel slide-animated">

                            @foreach($Saleproperties as $property)
                                <?php $image = '385x258'.$property->image0; ?>
                                <div class="item">
                                    <div class="figure-block">
                                        <figure class="item-thumb">
                                            <div class="label-wrap label-left">
                                                <span class="label label-success">Featured</span>
                                                <span class="label-status label label-default">For Sale</span>
                                            </div>
                                            <a href="/property-detail/{{ $property->id  }}/{{ preg_replace('/\.\s|[^a-zA-Z\.\-0-9]+/', '-', $property->title)  }}" class="hover-effect">
                                                <img src="{{ asset('public/propetyImages/'.$property->id.'/'.$image)  }}" alt="{{ $property->title }}" width="194" height="143" >
                                            </a>
                                            <div class="thumb-caption">
                                                <div class="cap-price pull-left">
                                                    @if($property->purpose == 'sell' && $property->price <> '')
                                                       Rs {{ $property->price }}
                                                    @elseif( $property->price <> '')
                                                       Rs {{ $property->price }}/month
                                                    @endif

                                                </div>
                                            </div>
                                            <div class="detail-above detail">
                                                <div class="fig-title">
                                                    <h3>{{ $property->title }}</h3>
                                                </div>
                                            </div>
                                        </figure>

                                        <div class="detail-bottom detail">
                                            <div class="fig-title">
                                                <h3>{{ $property->title }}</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end carousel module feature sale-->

        <!--start carousel module feature Rent-->
        <div id="carousel-module-6" class=" caption-bottom carousel-module">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="module-title-nav clearfix" style="margin-bottom: 25px;">
                            <div>
                                <h2>Featured Rent</h2>
                            </div>
                            <div class="module-nav">
                                <button class="btn btn-sm btn-crl-6-prev-sell">Prev</button>
                                <button class="btn btn-sm btn-crl-6-next-sell">Next</button>
                                <a href="#" class="btn btn-carousel btn-sm">All</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div id="properties-carousell-6" class="carousel slide-animated">

                            @foreach($Rentproperties as $property)
                                <?php $image = '385x258'.$property->image0; ?>
                                <div class="item">
                                    <div class="figure-block">
                                        <figure class="item-thumb">
                                            <div class="label-wrap label-left">
                                                <span class="label label-success">Featured</span>
                                                <span class="label-status label label-default">For Rent</span>
                                            </div>
                                            <a href="/property-detail/{{ $property->id  }}/{{ preg_replace('/\.\s|[^a-zA-Z\.\-0-9]+/', '-', $property->title)  }}" class="hover-effect">
                                                <img src="{{ asset('public/propetyImages/'.$property->id.'/'.$image)  }}" alt="{{ $property->title }}" width="194" height="143" >
                                            </a>
                                            <div class="thumb-caption">
                                                <div class="cap-price pull-left">
                                                    @if($property->purpose == 'sell' && $property->price <> '')
                                                        Rs {{ $property->price }}
                                                    @elseif( $property->price <> '')
                                                        Rs {{ $property->price }}/month
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="detail-above detail">
                                                <div class="fig-title">
                                                    <h3>{{ $property->title }}</h3>
                                                </div>
                                            </div>
                                        </figure>

                                        <div class="detail-bottom detail">
                                            <div class="fig-title">
                                                <h3>{{ $property->title }}</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end carousel module feature Rent-->

        <!--start carousel module feature project-->
        <div id="carousel-module-6" class=" caption-bottom carousel-module">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="module-title-nav clearfix" style="margin-bottom: 25px;">
                            <div>
                                <h2>Latest Projects</h2>
                            </div>
                            <div class="module-nav">
                                <button class="btn btn-sm btn-crl-6-prev-selll">Prev</button>
                                <button class="btn btn-sm btn-crl-6-next-selll">Next</button>
                                <a href="#" class="btn btn-carousel btn-sm">All</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div id="properties-carouselll-6" class="carousel slide-animated">

                            @foreach($Projects as $property)
                                <?php $image = '385x258'.$property->image0; ?>
                                <div class="item">
                                    <div class="figure-block">
                                        <figure class="item-thumb">
                                            <div class="label-wrap label-left">
                                                <span class="label label-success">Featured</span>
                                                <span class="label-status label label-default">For Projects</span>
                                            </div>
                                            <a href="/property-detail/{{ $property->id  }}/{{ preg_replace('/\.\s|[^a-zA-Z\.\-0-9]+/', '-', $property->title)  }}" class="hover-effect">
                                                <img src="{{ asset('public/propetyImages/'.$property->id.'/'.$image)  }}" alt="{{ $property->title }}" width="194" height="143" >
                                            </a>
                                            <div class="thumb-caption">
                                                <div class="cap-price pull-left">
                                                    @if($property->purpose == 'sell' && $property->price <> '')
                                                        Rs {{ $property->price }}
                                                    @elseif( $property->price <> '')
                                                        Rs {{ $property->price }}/month
                                                    @endif

                                                </div>
                                            </div>
                                            <div class="detail-above detail">
                                                <div class="fig-title">
                                                    <h3>{{ $property->title }}</h3>
                                                </div>
                                            </div>
                                        </figure>

                                        <div class="detail-bottom detail">
                                            <div class="fig-title">
                                                <h3>{{ $property->title }}</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end carousel module feature Project-->

        <!--start carousel module feature latest sale-->
        <div id="carousel-module-6" class=" caption-bottom carousel-module">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="module-title-nav clearfix" style="margin-bottom: 25px;">
                            <div>
                                <h2>Latest Sale</h2>
                            </div>
                            <div class="module-nav">
                                <button class="btn btn-sm btn-crl-6-prev-sale">Prev</button>
                                <button class="btn btn-sm btn-crl-6-next-sale">Next</button>
                                <a href="#" class="btn btn-carousel btn-sm">All</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div id="properties-carouselsale-6" class="carousel slide-animated">

                            @foreach($Saleproperties as $property)
                                <?php $image = '385x258'.$property->image0; ?>
                                <div class="item">
                                    <div class="figure-block">
                                        <figure class="item-thumb">
                                            <div class="label-wrap label-left">
                                                <span class="label label-success">Featured</span>
                                                <span class="label-status label label-default">For Sale</span>
                                            </div>
                                            <a href="/property-detail/{{ $property->id  }}/{{ preg_replace('/\.\s|[^a-zA-Z\.\-0-9]+/', '-', $property->title)  }}" class="hover-effect">
                                                <img src="{{ asset('public/propetyImages/'.$property->id.'/'.$image)  }}" alt="{{ $property->title }}" width="194" height="143" >
                                            </a>
                                            <div class="thumb-caption">
                                                <div class="cap-price pull-left">
                                                    @if($property->purpose == 'sell' && $property->price <> '')
                                                        Rs {{ $property->price }}
                                                    @elseif( $property->price <> '')
                                                        Rs {{ $property->price }}/month
                                                    @endif

                                                </div>
                                            </div>
                                            <div class="detail-above detail">
                                                <div class="fig-title">
                                                    <h3>{{ $property->title }}</h3>
                                                </div>
                                            </div>
                                        </figure>

                                        <div class="detail-bottom detail">
                                            <div class="fig-title">
                                                <h3>{{ $property->title }}</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end carousel module latest Sale-->

        <!--start carousel module latest feature rent-->
        <div id="carousel-module-6" class=" caption-bottom carousel-module">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="module-title-nav clearfix" style="margin-bottom: 25px;">
                            <div>
                                <h2>Latest Rent</h2>
                            </div>
                            <div class="module-nav">
                                <button class="btn btn-sm btn-crl-6-prev-rent">Prev</button>
                                <button class="btn btn-sm btn-crl-6-next-rent">Next</button>
                                <a href="#" class="btn btn-carousel btn-sm">All</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div id="properties-carouselrent-6" class="carousel slide-animated">

                            @foreach($Rentproperties as $property)
                                <?php $image = '385x258'.$property->image0; ?>
                                <div class="item">
                                    <div class="figure-block">
                                        <figure class="item-thumb">
                                            <div class="label-wrap label-left">
                                                <span class="label label-success">Featured</span>
                                                <span class="label-status label label-default">For Sale</span>
                                            </div>
                                            <a href="/property-detail/{{ $property->id  }}/{{ preg_replace('/\.\s|[^a-zA-Z\.\-0-9]+/', '-', $property->title)  }}" class="hover-effect">
                                                <img src="{{ asset('public/propetyImages/'.$property->id.'/'.$image)  }}" alt="{{ $property->title }}" width="194" height="143" >
                                            </a>
                                            <div class="thumb-caption">
                                                <div class="cap-price pull-left">
                                                    @if($property->purpose == 'sell' && $property->price <> '')
                                                        Rs {{ $property->price }}
                                                    @elseif( $property->price <> '')
                                                        Rs {{ $property->price }}/month
                                                    @endif

                                                </div>
                                            </div>
                                            <div class="detail-above detail">
                                                <div class="fig-title">
                                                    <h3>{{ $property->title }}</h3>
                                                </div>
                                            </div>
                                        </figure>

                                        <div class="detail-bottom detail">
                                            <div class="fig-title">
                                                <h3>{{ $property->title }}</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end carousel module latest feature rent-->


        <!--start agents module-->
        <div class=" module-title text-center">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-xs-12">
                        <h2>Agency</h2>
                    </div>
                </div>
            </div>
        </div>
        <div id="agents-module" class="houzez-module agents-module">
            <div class="container">
                <div class="agents-blocks-main">
                    <div class="row no-margin">

                        @foreach($Agents as $agent)
                            <div class="col-md-1">
                                {{--<div class="agents-block">--}}
                                <a href="//{{ $agent->DisplayName  }}.justdeal.pk/" class="view">
                                    <div data-container="body"  tabindex="0" data-toggle="popover" data-placement="top" data-content="<h2> {{ $agent->first_name.' '.$agent->last_name }}</h2><img src='{{ asset('public/ProfileImage/'.'200x150_'.$agent->image )  }}'></div>">
                                        <img src="{{ asset('public/ProfileImage/'.'71x71_'.$agent->image )  }}" alt="{{ $agent->first_name.' '.$agent->last_name }}" width="71" height="71" class="img-circle3">

                                    </div>
                                </a>
                            </div>

                        @endforeach

                    </div>
                </div>
            </div>
        </div>

    </section>
    <!--end agents module-->

@endsection

<!-- begining of page level js -->




@section('pagejs')

    {{--<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD0C1Dmi-PE4nrIHJ3sxb2NqBdS6pj2n1o"></script>--}}

    <script>
        function initMap() {
            var map;
            var bounds = new google.maps.LatLngBounds();
            var mapOptions = {
                mapTypeId: 'roadmap'
            };

            // Display a map on the web page
            map = new google.maps.Map(document.getElementById("mapCanvas"), mapOptions);
            map.setTilt(50);

            // Multiple markers location, latitude, and longitude
            var markers = [
                    @foreach($properties as $property)
                ['', {{ $property->latitude }}, {{ $property->longitude }}],
                @endforeach
            ];




            // Info window content
            var infoWindowContent = [
                    @foreach($properties as $property)
                    <?php $image = '355x240'.$property->image0; ?>
                [

                    '<div class="col-sm-12" > '+
                    '<div class="item">'+
                    '<div class="item-wrap">'+
                    '<div class="property-item item-grid">'+
                    '<div class="figure-block">' +
                    '<figure class="item-thumb">'+
                    '<div class="label-wrap hide-on-list">'+
                    '<div class="label-status label label-default">For {{$property->type}}</div>'+

                    '</div>'+
                    '<span class="label-featured label label-success">Featured</span>'+
                    '<div class="price hide-on-list">'+
                    '<h3>Rs :: {{$property->price}}</h3>'+
                    '</div>'+
                    '<a href="/property-detail/{{ $property->id  }}/{{ preg_replace('/\.\s|[^a-zA-Z\.\-0-9]+/', '-', $property->title)  }}" class="hover-effect">'+
                    '<img src="{{ asset('public/propetyImages/'.$property->id.'/'.$image)  }}" alt="{{$property->title}}">'+
                    '</a>'+
                    '</figure>'+
                    '</div>'+
                    '<div class="item-body">'+
                    '<div class="body-left">'+
                    '<div class="info-row">'+
                    '<h2 class="property-title"><a href="/property-detail/{{ $property->id  }}/{{ preg_replace('/\.\s|[^a-zA-Z\.\-0-9]+/', '-', $property->title)  }}">{{$property->title}}</a></h2>'+
                    '</div>'+
                    '<div class="table-list full-width info-row">'+
                    '<div class="cell">'+
                    '<div class="info-row amenities">'+
                    '<p>'+
                    '<span>Square Feet: {{$property->area}}</span>'+
                    '</p>'+
                    '<p>Office</p>'+
                    '</div>'+
                    '</div>'+
                    '<div class="cell">'+
                    '<div class="phone">'+
                    '<a href="/property-detail/{{ $property->id  }}/{{ preg_replace('/\.\s|[^a-zA-Z\.\-0-9]+/', '-', $property->title)  }}" class="btn btn-primary">Details <i class="fa fa-angle-right fa-right"></i></a>'+
                    '</div>'+
                    '</div>'+
                    '</div>'+
                    '</div>'+
                    '</div>'+
                    '</div>'+
                    '</div>'+
                    '</div>'+
                    '</div>'
                ],
                @endforeach
            ];




            // Add multiple markers to map
            var infoWindow = new google.maps.InfoWindow({ content: infoWindowContent, maxWidth: 340 }), marker, i;

            // Place each marker on the map
            for( i = 0; i < markers.length; i++ ) {
                var position = new google.maps.LatLng(markers[i][1], markers[i][2]);
                bounds.extend(position);
                marker = new google.maps.Marker({
                    position: position,
                    map: map,
                    title: markers[i][0]
                });

                // Add info window to marker
                google.maps.event.addListener(marker, 'click', (function(marker, i) {
                    return function() {
                        infoWindow.setContent(infoWindowContent[i][0]);
                        infoWindow.open(map, marker);
                    }
                })(marker, i));

                // Center the map to fit all markers on the screen
                map.fitBounds(bounds);
            }

            // Set zoom level
            var boundsListener = google.maps.event.addListener((map), 'bounds_changed', function(event) {
                this.setZoom(5);
                google.maps.event.removeListener(boundsListener);
            });

        }
        // Load initialize function
        $( document ).ready(function() {
            google.maps.event.addDomListener(window, 'load', initMap);
        });
    </script>

@endsection


