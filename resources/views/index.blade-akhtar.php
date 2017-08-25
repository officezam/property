@extends('layouts/app')


<!--page level css -->
@section('pagecss')

@endsection
<!--end of page level css-->


@section('content')

    {{--{{ dd($properties) }}--}}
    <div class="header-media">
        <div id="houzez-gmap-main">
            <div class="mapPlaceholder">
                <div class="loader-ripple">
                    <div></div>
                    <div></div>
                </div>
            </div>
            <div id="houzez-listing-map"></div>

            <div  class="map-arrows-actions">
                <button id="listing-mapzoomin" class="map-btn"><i class="fa fa-plus"></i> </button>
                <button id="listing-mapzoomout" class="map-btn"><i class="fa fa-minus"></i></button>
                <input type="text" id="google-map-search" placeholder="Google Map Search" class="map-search">
            </div>
            <div class="map-next-prev-actions">
                <ul class="dropdown-menu" aria-labelledby="houzez-gmap-view">
                    <li><a href="#" onclick="fave_change_map_type('roadmap')"><span>Roadmap</span></a></li>
                    <li><a href="#" onclick="fave_change_map_type('satellite')"><span>Satelite</span></a></li>
                    <li><a href="#" onclick="fave_change_map_type('hybrid')"><span>Hybrid</span></a></li>
                    <li><a href="#" onclick="fave_change_map_type('terrain')"><span>Terrain</span></a></li>
                </ul>
                <button id="houzez-gmap-view" class="map-btn dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                    <i class="fa fa-globe"></i> <span>View</span></button>

                <button id="houzez-gmap-prev" class="map-btn"><i class="fa fa-chevron-left"></i> <span>Prev</span></button>
                <button id="houzez-gmap-next" class="map-btn"><span>Next</span> <i class="fa fa-chevron-right"></i></button>
            </div>
            <div class="map-zoom-actions">
                <span id="houzez-gmap-location" class="map-btn"><i class="fa fa-map-marker"></i> <span>My location</span></span>
                <span id="houzez-gmap-full" class="map-btn"><i class="fa fa-arrows-alt"></i> <span>Fullscreen</span></span>
            </div>
        </div>
        <div class="search-expandable search-expandable-mini search-mini-left">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-xs-12">
                        <div class="search-inner-wrap">
                            <div class="search-expand-btn btn-primary">Advanced Search</div>
                            <div class="advanced-search advanced-search-hidden">
                                <form>
                                    <div class="row">
                                        <div class="col-sm-12 col-xs-12">
                                            <div class="form-group">
                                                <div class="search input-search input-icon">
                                                    <input class="form-control" placeholder="Enter Keyword" type="text">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-xs-6">
                                            <div class="form-group">
                                                <select class="selectpicker" data-live-search="false" data-live-search-style="begins" title="All Cities">
                                                    <option>City 1</option>
                                                    <option>City 2</option>
                                                    <option>City 3</option>
                                                    <option>City 4</option>
                                                    <option>City 5</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-xs-6">
                                            <div class="form-group">
                                                <select class="selectpicker" data-live-search="false" data-live-search-style="begins" title="All Areas">
                                                    <option>Area 1</option>
                                                    <option>Area 2</option>
                                                    <option>Area 3</option>
                                                    <option>Area 4</option>
                                                    <option>Area 5</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-xs-6">
                                            <div class="form-group">
                                                <select class="selectpicker" data-live-search="false" data-live-search-style="begins" title="Status">
                                                    <option>Status 1</option>
                                                    <option>Status 2</option>
                                                    <option>Status 3</option>
                                                    <option>Status 4</option>
                                                    <option>Status 5</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-xs-6">
                                            <div class="form-group">
                                                <select class="selectpicker" data-live-search="false" data-live-search-style="begins" title="Type">
                                                    <option>Type 1</option>
                                                    <option>Type 2</option>
                                                    <option>Type 3</option>
                                                    <option>Type 4</option>
                                                    <option>Type 5</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-xs-6">
                                            <div class="form-group no-margin">
                                                <select class="selectpicker" data-live-search="false" data-live-search-style="begins" title="Beds">
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-xs-6">
                                            <div class="form-group">
                                                <select class="selectpicker" data-live-search="false" data-live-search-style="begins" title="Baths">
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-xs-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder=" Min Areas (Sqft) ">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-xs-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder=" Max Areas (Sqft) ">
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-xs-12">
                                            <div class="range-advanced-main">
                                                <div class="range-text">
                                                    <input type="hidden" class="min-price-range-hidden range-input">
                                                    <input type="hidden" class="max-price-range-hidden range-input">
                                                    <p><span class="range-title">Price Range:</span> from <span class="min-price-range"></span> to <span class="max-price-range"></span></p>
                                                </div>
                                                <div class="range-wrap">
                                                    <div class="price-range-advanced"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-xs-12">
                                            <button type="submit" class="btn btn-primary btn-block"><i class="fa fa-search"></i> Search</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--start carousel module-->
    <section id="section-body">

        <div class="houzez-module-main">
            <div class="houzez-module carousel-module">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="module-title-nav clearfix">
                                <div>
                                    <h2>Latest for Sale</h2>
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

                                    @foreach($Saleproperties as $property)

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
                                                                @if($property->purpose != 'projects'):
                                                                @if($property->purpose == 'sell'):
                                                                <h3>Rs {{ $property->price }}</h3>
                                                                @else:
                                                                <p class="rant">Rs {{ $property->price }}/month</p>
                                                                @endif
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
                                                                <div class="rating">
                                                                <span class="bottom-ratings">
                                                                    <span class="fa fa-star-o"></span>
                                                                    <span class="fa fa-star-o"></span>
                                                                    <span class="fa fa-star-o"></span>
                                                                    <span class="fa fa-star-o"></span>
                                                                    <span class="fa fa-star-o"></span>
                                                                    <span style="width: 50%" class="top-ratings">
                                                                        <span class="fa fa-star"></span>
                                                                        <span class="fa fa-star"></span>
                                                                        <span class="fa fa-star"></span>
                                                                        <span class="fa fa-star"></span>
                                                                        <span class="fa fa-star"></span>
                                                                    </span>
                                                                </span>
                                                                    <span class="star-text-right">15 Ratings</span>
                                                                </div>
                                                                <h2 class="property-title"><a href="/property-detail/{{ $property->id  }}/{{ preg_replace('/\.\s|[^a-zA-Z\.\-0-9]+/', '-', $property->title)  }}">{{ $property->title }}</a></h2>
                                                            </div>
                                                            <div class="table-list full-width info-row">
                                                                <div class="cell">
                                                                    <div class="info-row amenities">
                                                                        <p>
                                                                            <span>Height: {{ $property->height }}</span>
                                                                            <span>Width: {{ $property->width }}</span>
                                                                            <span>{{ $property->area_unit }}: {{ $property->area }}</span>
                                                                        </p>
                                                                        <p>{{ $property->subtype }}</p>
                                                                    </div>
                                                                </div>
                                                                <div class="cell">
                                                                    <div class="phone">
                                                                        <a href="/property-detail/{{ $property->id  }}/{{ preg_replace('/\.\s|[^a-zA-Z\.\-0-9]+/', '-', $property->title)  }}" class="btn btn-primary">Details <i class="fa fa-angle-right fa-right"></i></a>
                                                                        <p><a href="/property-detail/{{ $property->id  }}/{{ preg_replace('/\.\s|[^a-zA-Z\.\-0-9]+/', '-', $property->title)  }}">+1 (786) 225-0199</a></p>
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
        <!--end carousel module-->

        <!--start carousel module-->
        <div class="houzez-module-main">
            <div class="houzez-module carousel-module">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="module-title-nav clearfix">
                                <div>
                                    <h2>Latest for Rent</h2>
                                </div>
                                <div class="module-nav">
                                    <button class="btn btn-sm btn-crl-pprt-2-prev">Prev</button>
                                    <button class="btn btn-sm btn-crl-pprt-2-next">Next</button>
                                    <a href="#" class="btn btn-carousel btn-sm">All</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="row grid-row">
                                <div class="carousel properties-carousel-grid-2 slide-animated">

                                    @foreach($Rentproperties as $property)
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
                                                                @if($property->purpose == 'sell'):
                                                                <h3>Rs {{ $property->price }}</h3>
                                                                @else:
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
                                                                    <span data-toggle="tooltip" data-placement="top" title="share"><i class="fa fa-share-alt"></i></span>
                                                                </li>
                                                                <li>
                                                                            <span data-toggle="tooltip" data-placement="top" title="Favorite">
                                                                                <i class="fa fa-heart-o"></i>
                                                                            </span>
                                                                </li>
                                                                <li>
                                                                            <span data-toggle="tooltip" data-placement="top" title="Photos (12)">
                                                                                <i class="fa fa-camera"></i>
                                                                            </span>
                                                                </li>
                                                            </ul>
                                                        </figure>
                                                    </div>
                                                    <div class="item-body">

                                                        <div class="body-left">
                                                            <div class="info-row">
                                                                <div class="rating">
                                                                    <span class="bottom-ratings"><span class="fa fa-star-o"></span><span class="fa fa-star-o"></span>
                                                                        <span class="fa fa-star-o"></span><span class="fa fa-star-o"></span>
                                                                        <span class="fa fa-star-o"></span><span style="width: 70%" class="top-ratings">
                                                                            <span class="fa fa-star"></span><span class="fa fa-star"></span>
                                                                            <span class="fa fa-star"></span><span class="fa fa-star"></span>
                                                                            <span class="fa fa-star"></span></span></span>
                                                                    <span class="star-text-right">15 Ratings</span>
                                                                </div>
                                                                <h2 class="property-title">

                                                                    <a href="/property-detail/{{ $property->id  }}/{{ preg_replace('/\.\s|[^a-zA-Z\.\-0-9]+/', '-', $property->title)  }}">{{ $property->title }}  </a>
                                                                </h2>
                                                            </div>
                                                            <div class="table-list full-width info-row">
                                                                <div class="cell">
                                                                    <div class="info-row amenities">
                                                                        <p>
                                                                            <span>Height: {{ $property->height }}</span>
                                                                            <span>Width: {{ $property->width }}</span>
                                                                            <span>{{ $property->area_unit }}: {{ $property->area }}</span>
                                                                        </p>
                                                                        <p>{{ $property->subtype }}</p>
                                                                    </div>
                                                                </div>
                                                                <div class="cell">
                                                                    <div class="phone">
                                                                        <a href="/property-detail/{{ $property->id  }}/{{ preg_replace('/\.\s|[^a-zA-Z\.\-0-9]+/', '-', $property->title)  }}" class="btn btn-primary">Details <i class="fa fa-angle-right fa-right"></i></a>
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
        <!--end carousel module-->

        <!--start location module-->
        <div class="houzez-module-main module-white-bg">
            <div class="houzez-module module-title text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-xs-12">
                            <h2>Our Locations</h2>
                            <h3 class="sub-heading">Book space in amazing locations across the world</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div id="location-modul" class="houzez-module location-module grid">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="location-block">
                                <figure>
                                    <a href="#">
                                        <img src="{{ asset('assets/img/villa/apartment.jpg')  }}" width="370" height="370" alt="Image">
                                    </a>
                                    <div class="location-fig-caption">
                                        <h3 class="heading">Apartment</h3>
                                        <p class="sub-heading">30 Properties</p>
                                    </div>
                                </figure>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="location-block">
                                <figure>
                                    <a href="#">
                                        <img src="{{ asset('assets/img/villa/loft.jpg')  }}" width="770" height="370" alt="Image">
                                    </a>
                                    <div class="location-fig-caption">
                                        <h3 class="heading">Loft</h3>
                                        <p class="sub-heading">1 Property</p>
                                    </div>
                                </figure>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="location-block">
                                <figure>
                                    <a href="#">
                                        <img src="{{ asset('assets/img/villa/familyhome1.jpg')  }}" width="770" height="370" alt="Image">
                                    </a>
                                    <div class="location-fig-caption">
                                        <h3 class="heading">Single Family Home</h3>
                                        <p class="sub-heading">11 Properties</p>
                                    </div>
                                </figure>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="location-block">
                                <figure>
                                    <a href="#">
                                        <img src="{{ asset('assets/img/villa/villa.jpg')  }}" width="370" height="370" alt="Image">
                                    </a>
                                    <div class="location-fig-caption">
                                        <h3 class="heading">Villa</h3>
                                        <p class="sub-heading">10 Properties</p>
                                    </div>
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end location module-->

        <!--start property item module-->
        <div class="houzez-module-main module-gray-bg">
            <div class="houzez-module module-title text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <h2>Best Property Value</h2>
                            <h3 class="sub-heading">Create Your Real Estate Website or Marketplace</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div id="property-item-module" class="houzez-module property-item-module">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="row grid-row">
                                @foreach($properties->slice(0, 2) as $property)
									<?php $image = '355x240'.$property->image0; ?>
                                    <div class="col-sm-6">
                                        <div class="item-wrap">
                                            <div class="property-item item-grid">
                                                <div class="figure-block">
                                                    <figure class="item-thumb">
                                                        <div class="label-wrap hide-on-list">
                                                            <div class="label-status label label-default">For {{ $property->purpose }}</div>
                                                        </div>
                                                        <span class="label-featured label label-success">Featured</span>
                                                        <div class="price hide-on-list">
                                                            @if($property->purpose == 'sell'):
                                                            <h3>Rs {{ $property->price }}</h3>
                                                            @else:
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
                                                                <span data-toggle="tooltip" data-placement="top" title="share"><i class="fa fa-share-alt"></i></span>
                                                            </li>
                                                            <li>
                                                                            <span data-toggle="tooltip" data-placement="top" title="Favorite">
                                                                                <i class="fa fa-heart-o"></i>
                                                                            </span>
                                                            </li>
                                                            <li>
                                                                            <span data-toggle="tooltip" data-placement="top" title="Photos (12)">
                                                                                <i class="fa fa-camera"></i>
                                                                            </span>
                                                            </li>
                                                        </ul>
                                                    </figure>
                                                </div>
                                                <div class="item-body">

                                                    <div class="body-left">
                                                        <div class="info-row">
                                                            <div class="rating">
                                                            <span class="bottom-ratings">

                                                                <span class="fa fa-star-o" onclick="getRank('{{ $property->id  }}' , 1)"></span>
                                                                <span class="fa fa-star-o" onclick="getRank('{{ $property->id  }}' , 2)"></span>
                                                                <span class="fa fa-star-o" onclick="getRank('{{ $property->id  }}' , 3)"></span>
                                                                <span class="fa fa-star-o" onclick="getRank('{{ $property->id  }}' , 4)"></span>
                                                                <span class="fa fa-star-o" onclick="getRank('{{ $property->id  }}' , 5)"></span>
                                                                <span style="width: 05%" class="top-ratings" id="{{ $property->id }}">
                                                                    <span class="fa fa-star"></span>
                                                                    <span class="fa fa-star"></span>
                                                                    <span class="fa fa-star"></span>
                                                                    <span class="fa fa-star"></span>
                                                                    <span class="fa fa-star"></span>
                                                                </span>
                                                            </span>
                                                                <span class="star-text-right">15 Ratings</span>
                                                            </div>
                                                            <h2 class="property-title"><a href="/property-detail/{{ $property->id  }}/{{ preg_replace('/\.\s|[^a-zA-Z\.\-0-9]+/', '-', $property->title)  }}">{{ $property->title }}</a></h2>
                                                            <h4 class="property-location">{{ $property->title }}</h4>
                                                        </div>
                                                        <div class="table-list full-width info-row">
                                                            <div class="cell">
                                                                <div class="info-row amenities">
                                                                    <p>
                                                                        <span>Height: {{ $property->height }}</span>
                                                                        <span>Width: {{ $property->width }}</span>
                                                                        <span>{{ $property->area_unit }}: {{ $property->area }}</span>
                                                                    </p>
                                                                    <p>{{ $property->subtype }}</p>
                                                                </div>
                                                            </div>
                                                            <div class="cell">
                                                                <div class="phone">
                                                                    <a href="/property-detail/{{ $property->id  }}/{{ preg_replace('/\.\s|[^a-zA-Z\.\-0-9]+/', '-', $property->title)  }}" class="btn btn-primary">Details <i class="fa fa-angle-right fa-right"></i></a>
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
                                                    <p><i class="fa fa-calendar"></i>{{ $property->created_at->diff(new DateTime())->format('%a Days Ago') }}</p>
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
        <!--end property item module-->

        <!--start agents module-->
        <div class="houzez-module module-title text-center">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-xs-12">
                        <h2>Agents</h2>
                        <h3 class="sub-heading">Here could be a nice sub title</h3>
                    </div>
                </div>
            </div>
        </div>
        <div id="agents-module" class="houzez-module agents-module">
            <div class="container">
                <div class="agents-blocks-main">
                    <div class="row no-margin">
                        @foreach($Agents->slice(0,3) as $agent)
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="agents-block">
                                    <figure class="auther-thumb">
                                        <img src="{{ asset('ProfileImage/'.'71x71_'.$agent->image )  }}" alt="{{ $agent->first_name.' '.$agent->last_name }}" width="71" height="71" class="img-circle">
                                    </figure>
                                    <div class="web-logo text-center">
                                        <img src="{{ asset('assets/images/houzez-logo-grey.png')  }}" alt="logo">
                                    </div>
                                    <div class="block-body">
                                        <p class="auther-info">
                                            <span>by <span class="blue">{{ $agent->first_name.' '.$agent->last_name }}</span></span>
                                            <span>Founder & CEO, {{ $agent->DisplayName }}</span>
                                        </p>
                                        <p class="description">
                                            {{ $agent->description }}
                                        </p>
                                        <a href="/property-agent-detail/{{ $agent->id  }}/{{  $agent->first_name.'-'.$agent->last_name  }}" class="view">View profile</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--end agents module-->
    <div class="houzez-module-main">
        <div class="houzez-module module-title text-center">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-xs-12">
                        <h2>Our Locations</h2>
                        <h3 class="sub-heading">Book space in amazing locations across the world</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="houzez-module carousel-module">
            <div class="container">
                <section>
                    <!--      <div class="page-header">
                           <h1>FeedBack<small>Awesome feedback</small></h1>
                       </div> -->
                    <div class="row">
                        <div class="col-lg-2">
                            <blockquote>
                                <img src="{{ asset('assets/images/texture.jpg')}}" />
                                <p>
                                    To enhance my capabilities and
                                </p>
                                <footer>Johan</footer>
                            </blockquote>
                        </div>
                        <div class="col-lg-2">
                            <blockquote>
                                <img src="{{ asset('assets/images/texture.jpg')}}" />
                                <p>
                                    To enhance my capabilities and
                                </p>
                                <footer>Johan</footer>
                            </blockquote>
                        </div>
                        <div class="col-lg-2">
                            <blockquote>
                                <img src="{{ asset('assets/images/texture.jpg')}}" />
                                <p>
                                    To enhance my capabilities and
                                </p>
                                <footer>Johan</footer>
                            </blockquote>
                        </div>
                        <div class="col-lg-2">
                            <blockquote>
                                <img src="{{ asset('assets/images/texture.jpg')}}" />
                                <p>
                                    To enhance my capabilities and
                                </p>
                                <footer>Johan</footer>
                            </blockquote>
                        </div>
                        <div class="col-lg-2">
                            <blockquote>
                                <img src="{{ asset('assets/images/texture.jpg')}}" />
                                <p>
                                    To enhance my capabilities and
                                </p>
                                <footer>Johan</footer>
                            </blockquote>
                        </div>
                        <div class="col-lg-2">
                            <blockquote>
                                <img src="{{ asset('assets/images/texture.jpg')}}" />
                                <p>
                                    To enhance my capabilities and
                                </p>
                                <footer>Johan</footer>
                            </blockquote>
                        </div>
                    </div><!-- end row -->
                </section>

            </div>
        </div>
    </div>
    <div class="houzez-module-main module-white-bg">
        <div class="houzez-module module-title text-center">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-xs-12">
                        <h2>Our Locations</h2>
                        <h3 class="sub-heading">Book space in amazing locations across the world</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="houzez-module carousel-module">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <img src="{{ asset('assets/images/texture.jpg')}}" />
                                <p>
                                    To enhance my capabilities and
                                </p>
                                <footer>Johan</footer>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <img src="{{ asset('assets/images/texture.jpg')}}" />
                                <p>
                                    To enhance my capabilities and
                                </p>
                                <footer>Johan</footer>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <img src="{{ asset('assets/images/texture.jpg')}}" />
                                <p>
                                    To enhance my capabilities and
                                </p>
                                <footer>Johan</footer>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <img src="{{ asset('assets/images/texture.jpg')}}" />
                                <p>
                                    To enhance my capabilities and
                                </p>
                                <footer>Johan</footer>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <img src="{{ asset('assets/images/texture.jpg')}}" />
                                <p>
                                    To enhance my capabilities and
                                </p>
                                <footer>Johan</footer>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <img src="{{ asset('assets/images/texture.jpg')}}" />
                                <p>
                                    To enhance my capabilities and
                                </p>
                                <footer>Johan</footer>
                            </div>
                        </div>
                    </div>
                </div><!-- end row -->

            </div>
        </div>
    </div>
@endsection

<!-- begining of page level js -->




@section('pagejs')
    <script>
        (function($){
            var theMap;
            function initMap() {

                /* Properties Array */
                var properties = [
                        @foreach($properties as $property)
                    {
						<?php $image = '355x240'.$property->image0; ?>
                        "title":"{{ $property->title }}",
                        "full_address":"{{ $property->city }}",
                        "thumbnail":"<img src='{{ asset('public/propetyImages/'.$property->id.'/'.$image)  }}' alt='{{ $property->title }}'>",
                        "url":"/property-detail/{{ $property->id  }}/{{ preg_replace('/\.\s|[^a-zA-Z\.\-0-9]+/', '-', $property->title)  }}",
                        "prop_meta":"<p><span>Height: {{ $property->height }}</span><span>Width: {{ $property->width }}</span><span>{{ $property->area_unit }}: {{ $property->area }}</span></p>",
                        "type":"{{ $property->type }}",
                        "images_count":1,
                        "bedrooms":3,
                        "bathrooms":2,
                        "price":"<span class='item-price'>Rs{{ $property->price }}</span><span class='item-sub-price'>Rs{{ $property->price }}&#47;sq ft</span>",
                        "is_featured":"",
                        "icon":"http://sandbox.favethemes.com/houzez/wp-content/uploads/2016/02/x1-single-family-home.png",
                        "retinaIcon":"http://sandbox.favethemes.com/houzez/wp-content/uploads/2016/02/x2-single-family-home.png",
                        "lat":"{{ $property->latitude }}","lng":"{{ $property->longitude }}"
                    },
                    @endforeach

                ];


                var myLatLng = new google.maps.LatLng(properties[0].lat,properties[0].lng);

                var houzezMapOptions = {
                    zoom: 12,
                    maxZoom: 12,
                    center: myLatLng,
                    disableDefaultUI: true,
                    scrollwheel: false,
                    mapTypeId: google.maps.MapTypeId.ROADMAP,
                    scroll:{x:$(window).scrollLeft(),y:$(window).scrollTop()}
                };
                var theMap = new google.maps.Map(document.getElementById("houzez-listing-map"), houzezMapOptions);

                if (Modernizr.mq('only all and (max-width: 1000px)')) {
                    theMap.setOptions({'draggable': false});
                }

                var markers = new Array();
                var current_marker = 0;
                var visible;

                var offset=$(theMap.getDiv()).offset();
                theMap.panBy(((houzezMapOptions.scroll.x-offset.left)/3),((houzezMapOptions.scroll.y-offset.top)/3));
                google.maps.event.addDomListener(window, 'scroll', function(){
                    var scrollY=$(window).scrollTop(),
                        scrollX=$(window).scrollLeft(),
                        scroll=theMap.get('scroll');
                    if(scroll){
                        theMap.panBy(-((scroll.x-scrollX)/3),-((scroll.y-scrollY)/3));
                    }
                    theMap.set('scroll',{x:scrollX,y:scrollY});
                });

                var mapBounds = new google.maps.LatLngBounds();

                for( i = 0; i < properties.length; i++ ) {

                    var marker_url = properties[i].icon;
                    var marker_size = new google.maps.Size( 44, 56 );
                    if( window.devicePixelRatio > 1.5 ) {
                        if ( properties[i].retinaIcon ) {
                            marker_url = properties[i].retinaIcon;
                            marker_size = new google.maps.Size( 84, 106 );
                        }
                    }

                    var marker_icon = {
                        url: marker_url,
                        size: marker_size,
                        scaledSize: new google.maps.Size( 44, 56 ),
                        origin: new google.maps.Point( 0, 0 ),
                        anchor: new google.maps.Point( 7, 27 )
                    };

                    // Markers
                    markers[i] = new google.maps.Marker({
                        map: theMap,
                        draggable: false,
                        position: new google.maps.LatLng(properties[0].lat,properties[0].lng),
                        icon: marker_icon,
                        title: properties[i].title,
                        animation: google.maps.Animation.DROP,
                        visible: true
                    });

                    mapBounds.extend(markers[i].getPosition());

                    var infoBoxText = document.createElement("div");
                    infoBoxText.className = 'property-item item-grid map-info-box';
                    infoBoxText.innerHTML =
                        '<div class="figure-block">'+
                        '<figure class="item-thumb">'+
                        properties[i].is_featured +
                        '<div class="price hide-on-list">'+
                        properties[i].price +
                        '</div>'+
                        '<a href="'+properties[i].url+'" tabindex="0">'+
                        properties[i].thumbnail +
                        '</a>'+
                        '<div class="thumb-caption cap-actions clearfix">'+
                        '<div class="pull-right">'+
                        '<span title="" data-placement="top" data-toggle="tooltip" data-original-title="Photos">'+
                        '<i class="fa fa-camera"></i> <span class="count">('+ properties[i].images_count +')</span>'+
                        '</span>'+
                        '</div>'+
                        '</div>'+
                        '</figure>'+
                        '</div>' +
                        '<div class="item-body">' +
                        '<div class="body-left">' +
                        '<div class="info-row">' +
                        '<h2 class="property-title"><a href="'+properties[i].url+'">'+properties[i].title+'</a></h2>' +
                        '<h4 class="property-location">'+properties[i].full_address+'</h4>' +
                        '</div>' +
                        '<div class="table-list full-width info-row">' +
                        '<div class="cell">' +
                        '<div class="info-row amenities">' +
                        properties[i].prop_meta +
                        '<p>'+properties[i].type+'</p>' +
                        '</div>' +
                        '</div>' +
                        '</div>' +
                        '</div>' +
                        '</div>';


                    var infoBoxOptions = {
                        content: infoBoxText,
                        disableAutoPan: true,
                        maxWidth: 0,
                        alignBottom: true,
                        pixelOffset: new google.maps.Size( -122, -48 ),
                        zIndex: null,
                        closeBoxMargin: "0 0 -16px -16px",
                        closeBoxURL: "{{ asset('assets/images/map/close.png')  }}",
                        infoBoxClearance: new google.maps.Size( 1, 1 ),
                        isHidden: false,
                        pane: "floatPane",
                        enableEventPropagation: false
                    };

                    var infobox = new InfoBox( infoBoxOptions );

                    attachInfoBoxToMarker( theMap, markers[i], infobox );

                }

                if(  document.getElementById('listing-mapzoomin') ){
                    google.maps.event.addDomListener(document.getElementById('listing-mapzoomin'), 'click', function () {
                        var current= parseInt( theMap.getZoom(),10);
                        current++;
                        if(current > 20){
                            current = 20;
                        }
                        theMap.setZoom(current);
                    });
                }


                if(  document.getElementById('listing-mapzoomout') ){
                    google.maps.event.addDomListener(document.getElementById('listing-mapzoomout'), 'click', function () {
                        var current= parseInt( theMap.getZoom(),10);
                        current--;
                        if(current < 0){
                            current = 0;
                        }
                        theMap.setZoom(current);
                    });
                }

                // Marker Clusters
                //if( googlemap_pin_cluster != 'no' ) {
                var markerClustererOptions = {
                    ignoreHidden: true,
                    maxZoom: parseInt(10),
                    styles: [{
                        textColor: '#ffffff',
                        url: '{{ asset('assets/images/map/cluster-icon.png')}}',
                        height: 48,
                        width: 48
                    }]
                };

                var markerClusterer = new MarkerClusterer(theMap, markers, markerClustererOptions);
                //}

                theMap.fitBounds(mapBounds);

                function attachInfoBoxToMarker( map, marker, infoBox ){
                    marker.addListener('click', function() {
                        var scale = Math.pow( 2, map.getZoom() );
                        var offsety = ( (100/scale) || 0 );
                        var projection = map.getProjection();
                        var markerPosition = marker.getPosition();
                        var markerScreenPosition = projection.fromLatLngToPoint( markerPosition );
                        var pointHalfScreenAbove = new google.maps.Point( markerScreenPosition.x, markerScreenPosition.y - offsety );
                        var aboveMarkerLatLng = projection.fromPointToLatLng( pointHalfScreenAbove );
                        map.setCenter( aboveMarkerLatLng );
                        infoBox.close();
                        infoBox.open( map, marker );
                    });
                }

                jQuery('#houzez-gmap-next').click(function(){
                    current_marker++;
                    if ( current_marker > markers.length ){
                        current_marker = 1;
                    }
                    while( markers[current_marker-1].visible===false ){
                        current_marker++;
                        if ( current_marker > markers.length ){
                            current_marker = 1;
                        }
                    }
                    if( theMap.getZoom() < 15 ){
                        theMap.setZoom(15);
                    }
                    google.maps.event.trigger( markers[current_marker-1], 'click' );
                });

                jQuery('#houzez-gmap-prev').click(function(){
                    current_marker--;
                    if (current_marker < 1){
                        current_marker = markers.length;
                    }
                    while( markers[current_marker-1].visible===false ){
                        current_marker--;
                        if ( current_marker > markers.length ){
                            current_marker = 1;
                        }
                    }
                    if( theMap.getZoom() <15 ){
                        theMap.setZoom(15);
                    }
                    google.maps.event.trigger( markers[current_marker-1], 'click');
                });


                fave_change_map_type = function(map_type){

                    if(map_type==='roadmap'){
                        theMap.setMapTypeId(google.maps.MapTypeId.ROADMAP);
                    }else if(map_type==='satellite'){
                        theMap.setMapTypeId(google.maps.MapTypeId.SATELLITE);
                    }else if(map_type==='hybrid'){
                        theMap.setMapTypeId(google.maps.MapTypeId.HYBRID);
                    }else if(map_type==='terrain'){
                        theMap.setMapTypeId(google.maps.MapTypeId.TERRAIN);
                    }
                    return false;
                };

                google.maps.event.addListenerOnce(theMap, 'tilesloaded', function() {
                    $('.mapPlaceholder').hide();
                });

            }

            google.maps.event.addDomListener( window, 'load', initMap );
        })(jQuery)

    </script>

@endsection


