@extends('layouts.app')

@section('content')

    <!--start advanced search section-->
    @include('layouts.header')
    <!--end advanced search section -->
<style>
    .company-detail{ height: 300px;}
</style>
    <!--start section page body-->
    <section id="section-body">
        <div class="container">
            <div class="row" >
                <div class="col-sm-12">
                    <div class="profile-detail-block company-detail" style="-webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover; background-image:url('<?php echo url('public/CompanyImage') ?>/{{$Agent->background_image}}');background-repeat: no-repeat; ">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div id="content-area">
                        <div class="profile-tab-area">
                            <ul class="profile-tabs">
                                <li class="active">About</li>
                                <li>Projects</li>
                                <li>For Sale</li>
                                <li>For Rent</li>
                                <li>Agents</li>
                                <li>Contact</li>
                            </ul>
                            <div class="tab-content">
                                <div class="profile-tab-pane tab-pane fade active in">
                                    <div class="profile-tab-content profile-overview">
                                        <div class="col-sm-12">
                                            <div class="col-sm-8">
                                                <div class="profile-description">
                                                    <h3>ABOUT</h3>
                                                    <h4 class="position">{{ $Agent->company_name }}</h4>
                                                    <p> {{ $Agent->company_about }}</p>
                                                    <ul class="profile-contact">
                                                        <li><span>City:</span> {{ $Agent->city }}</li>
                                                        <li><span>Address:</span> {{ $Agent->address }}</li>
                                                        <li><span>OFFICE:</span> <a href="tel:{{ $Agent->company_phone }}">{{ $Agent->company_phone }}</a></li>
                                                        <li><span>MOBILE:</span> <a href="tel:{{ $Agent->cell_phone }}">{{ $Agent->cell_phone }}</a></li>
                                                        <li><span>FAX:</span> <a>{{ $Agent->first_name }}</a></li>
                                                        <li class="email"><span>Email:</span> <a href="mailto:{{ $Agent->email2 }}">{{ $Agent->email2 }}</a></li>
                                                    </ul>
                                                    <ul class="profile-social">
                                                        <li><a href="#"><i class="fa fa-phone-square"></i></a></li>
                                                        <li><a class="btn-facebook" href="{{ $Agent->facebook }}" target="_blank"><i class="fa fa-facebook-square"></i></a></li>
                                                        <li><a class="btn-twitter" href="{{ $Agent->twitter }}" target="_blank"><i class="fa fa-twitter-square"></i></a></li>
                                                        <li><a class="btn-linkedin" href="{{ $Agent->linkedin }}" target="_blank"><i class="fa fa-linkedin-square"></i></a></li>
                                                        <li><a class="btn-google-plus" href="{{ $Agent->googleplus }}" target="_blank"><i class="fa fa-google-plus-square"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                               @if($Agent->ceo_name <> '0') <h1>{{ $Agent->ceo_name }}</h1> @endif
                                                <p>
                                                    @if(!empty($Agent->ceo_image))
                                                        <img src="<?php echo url('public/ProfileImage') ?>/{{ $Agent->ceo_image }}">
                                                    @endif
                                                    {{ $Agent->ceo_description }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="profile-tab-pane tab-pane fade">
                                    <div class="profile-tab-content profile-properties">
                                        <div class="property-filter-wrap">
                                            <h4 class="filter-title"> Projects Properties </h4>

                                        </div>
                                        <!--start property items-->
                                        <div class="property-listing grid-view grid-view-3-col">
                                            <div class="row">
                                                @foreach($projects as $property)
													<?php $image = '385x258'.$property->image0; ?>
                                                    <div class="item-wrap">
                                                        <div class="property-item table-list">
                                                            <div class="table-cell">
                                                                <div class="figure-block">
                                                                    <figure class="item-thumb">
                                                                        <span class="label-featured label label-success">Featured</span>
                                                                        <div class="label-wrap label-right hide-on-list">
                                                                            <span class="label label-default">For {{ $property->purpose }}</span>
                                                                        </div>
                                                                        <div class="price hide-on-list">
                                                                            @if($property->purpose == 'sell' && $property->type != 'projects'):
                                                                            <h3>Rs {{ $property->price }}</h3>
                                                                            @elseif($property->purpose == 'sell' && $property->type != 'projects' ):
                                                                            <p class="rant">Rs {{ $property->price }}/mo</p>
                                                                            @endif
                                                                        </div>
                                                                        <a href="http://justdeal.pk/property-detail/{{ $property->id  }}/{{ preg_replace('/\.\s|[^a-zA-Z\.\-0-9]+/', '-', $property->title)  }}">
                                                                            <img src="{{ asset('public/propetyImages/'.$property->id.'/'.$image)  }}" alt="{{ $property->title }}">
                                                                        </a>
                                                                        <ul class="actions">
                                                                            <li>
                                                                <span title="" data-placement="top" data-toggle="tooltip" data-original-title="Favorite">
                                                                    <i class="fa fa-heart"></i>
                                                                </span>
                                                                            </li>
                                                                            <li class="share-btn">
                                                                                <div class="share_tooltip fade">
                                                                                    <a href="/facebook/{{ $property->id }}" target="_blank"><i class="fa fa-facebook"></i></a>
                                                                                    <a href="/twitter/{{ $property->id }}" target="_blank"><i class="fa fa-twitter"></i></a>
                                                                                    <a href="/gplus/{{ $property->id }}"  target="_blank"><i class="fa fa-google-plus"></i></a>
                                                                                    <a href="/pinterest/{{ $property->id }}" target="_blank"><i class="fa fa-pinterest"></i></a>
                                                                                </div>
                                                                                <span title="" data-placement="top" data-toggle="tooltip" data-original-title="share"><i class="fa fa-share-alt"></i></span>
                                                                            </li>
                                                                            <li>
                                                                <span data-toggle="tooltip" data-placement="top" title="Photos (12)">
                                                                    <i class="fa fa-camera"></i>
                                                                </span>
                                                                            </li>
                                                                        </ul>
                                                                    </figure>
                                                                </div>
                                                            </div>
                                                            <div class="item-body table-cell">

                                                                <div class="body-left table-cell">
                                                                    <div class="info-row">
                                                                        <div class="label-wrap hide-on-grid">
                                                                            <div class="label-status label label-default">For {{ $property->purpose }}</div>
                                                                        </div>
                                                                        <h2 class="property-title"><a href="#">{{ $property->title }}</a></h2>
                                                                    </div>
                                                                    <div class="info-row amenities hide-on-grid">
                                                                        <p>
                                                                        <p>
                                                                            {{--<span>Beds: {{ $property->beds }}</span>--}}
                                                                            {{--<span>Baths: {{ $property->bathroom }}</span>--}}
                                                                            <span>{{ $property->area_unit }}: {{ $property->area }}</span>
                                                                        </p>

                                                                        <span>{{ $property->subtype }}</span>
                                                                        </p>
                                                                        <p>{{ $property->title }}</p>
                                                                    </div>
                                                                    <div class="info-row date hide-on-grid">
                                                                        <p><i class="fa fa-user"></i> <a href="#">{{  $property->city  }} {{  $property->region }}</a></p>
                                                                        <p><i class="fa fa-calendar"></i> {{ $property->created_at->diff(new DateTime())->format('%a Days Ago') }} </p>
                                                                    </div>
                                                                </div>
                                                                <div class="body-right table-cell hidden-gird-cell">
                                                                    <div class="info-row price">
                                                                        @if($property->purpose == 'sell' && $property->type != 'projects'):
                                                                        <h3>Rs {{ $property->price }}</h3>
                                                                        @elseif($property->purpose == 'sell' && $property->type != 'projects' ):
                                                                        <p class="rant">Rs {{ $property->price }}/mo</p>
                                                                        @endif
                                                                    </div>
                                                                    <div class="info-row phone text-right">
                                                                        <a href="#" class="btn btn-primary">Details <i class="fa fa-angle-right fa-right"></i></a>
                                                                    </div>
                                                                </div>
                                                                <div class="table-list full-width hide-on-list">

                                                                    <div class="cell">
                                                                        <div class="phone">
                                                                            <a href="http://justdeal.pk/property-detail/{{ $property->id  }}/{{ preg_replace('/\.\s|[^a-zA-Z\.\-0-9]+/', '-', $property->title)  }}" class="btn btn-primary">Details <i class="fa fa-angle-right fa-right"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="item-foot date hide-on-list">

                                                            <div class="item-foot-right">
                                                                <p><i class="fa fa-calendar"></i> {{ $property->created_at->diff(new DateTime())->format('%a Days Ago') }}  </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>

                                        <div class="row grid-row">
                                            <div class="carousel properties-carousel-grid-1 slide-animated">

                                                @foreach($AllProjects as $property)

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

                                        <!--end property items-->
                                        <div class="houzez-module-main">

                                            <div class="houzez-module carousel-module">
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <div class="module-title-nav clearfix">
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

                                                                    @foreach($AllProjects as $property)

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
                                        <!--start carousel module-->
                                        <div id="carousel-module-6" class=" caption-bottom carousel-module">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="module-title-nav clearfix">
                                                            <div>
                                                                <h2>Latest Projects</h2>
                                                            </div>
                                                            <div class="module-nav">
                                                                <button class="btn btn-sm btn-crl-6-prev">Prev</button>
                                                                <button class="btn btn-sm btn-crl-6-next">Next</button>
                                                                <a href="#" class="btn btn-carousel btn-sm">All</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <div id="properties-carouselll-6" class="carousel slide-animated">

                                                            @foreach($AllProjects as $property)
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
                                                                                    Rs:
                                                                                    @if($property->purpose == 'sell')
                                                                                        {{ $property->price }}
                                                                                    @else:
                                                                                    {{ $property->price }}/month
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
                                        <!--end carousel module-->
                                    </div>
                                </div>
                                <div class="profile-tab-pane tab-pane fade">
                                    <div class="profile-tab-content profile-properties">
                                        <div class="property-filter-wrap">
                                            <h4 class="filter-title"> Sale Properties </h4>
                                        </div>
                                        <!--start property items-->
                                        <div class="property-listing grid-view grid-view-3-col">
                                            <div class="row">
                                                @foreach($SellProperty as $property)
						                            <?php $image = '385x258'.$property->image0; ?>
                                                    <div class="item-wrap">
                                                        <div class="property-item table-list">
                                                            <div class="table-cell">
                                                                <div class="figure-block">
                                                                    <figure class="item-thumb">
                                                                        <span class="label-featured label label-success">Featured</span>
                                                                        <div class="label-wrap label-right hide-on-list">
                                                                            <span class="label label-default">For {{ $property->purpose }}</span>
                                                                        </div>
                                                                        <div class="price hide-on-list">
                                                                            @if($property->purpose == 'sell' && $property->type != 'projects'):
                                                                            <h3>Rs {{ $property->price }}</h3>
                                                                            @elseif($property->purpose == 'sell' && $property->type != 'projects' ):
                                                                            <p class="rant">Rs {{ $property->price }}/mo</p>
                                                                            @endif
                                                                        </div>
                                                                        <a href="http://justdeal.pk/property-detail/{{ $property->id  }}/{{ preg_replace('/\.\s|[^a-zA-Z\.\-0-9]+/', '-', $property->title)  }}">
                                                                            <img src="{{ asset('public/propetyImages/'.$property->id.'/'.$image)  }}" alt="{{ $property->title }}">
                                                                        </a>
                                                                        <ul class="actions">
                                                                            <li>
                                                                <span title="" data-placement="top" data-toggle="tooltip" data-original-title="Favorite">
                                                                    <i class="fa fa-heart"></i>
                                                                </span>
                                                                            </li>
                                                                            <li class="share-btn">
                                                                                <div class="share_tooltip fade">
                                                                                    <a href="/facebook/{{ $property->id }}" target="_blank"><i class="fa fa-facebook"></i></a>
                                                                                    <a href="/twitter/{{ $property->id }}" target="_blank"><i class="fa fa-twitter"></i></a>
                                                                                    <a href="/gplus/{{ $property->id }}"  target="_blank"><i class="fa fa-google-plus"></i></a>
                                                                                    <a href="/pinterest/{{ $property->id }}" target="_blank"><i class="fa fa-pinterest"></i></a>
                                                                                </div>
                                                                                <span title="" data-placement="top" data-toggle="tooltip" data-original-title="share"><i class="fa fa-share-alt"></i></span>
                                                                            </li>
                                                                            <li>
                                                                <span data-toggle="tooltip" data-placement="top" title="Photos (12)">
                                                                    <i class="fa fa-camera"></i>
                                                                </span>
                                                                            </li>
                                                                        </ul>
                                                                    </figure>
                                                                </div>
                                                            </div>
                                                            <div class="item-body table-cell">

                                                                <div class="body-left table-cell">
                                                                    <div class="info-row">
                                                                        <div class="label-wrap hide-on-grid">
                                                                            <div class="label-status label label-default">For {{ $property->purpose }}</div>
                                                                        </div>
                                                                        <h2 class="property-title"><a href="#">{{ $property->title }}</a></h2>
                                                                    </div>
                                                                    <div class="info-row amenities hide-on-grid">
                                                                        <p>
                                                                        <p>
                                                                            {{--<span>Beds: {{ $property->beds }}</span>--}}
                                                                            {{--<span>Baths: {{ $property->bathroom }}</span>--}}
                                                                            <span>{{ $property->area_unit }}: {{ $property->area }}</span>
                                                                        </p>

                                                                        <span>{{ $property->subtype }}</span>
                                                                        </p>
                                                                        <p>{{ $property->title }}</p>
                                                                    </div>
                                                                    <div class="info-row date hide-on-grid">
                                                                        <p><i class="fa fa-user"></i> <a href="#">{{  $property->city  }} {{  $property->region }}</a></p>
                                                                        <p><i class="fa fa-calendar"></i> {{ $property->created_at->diff(new DateTime())->format('%a Days Ago') }} </p>
                                                                    </div>
                                                                </div>
                                                                <div class="body-right table-cell hidden-gird-cell">
                                                                    <div class="info-row price">
                                                                        @if($property->purpose == 'sell' && $property->type != 'projects'):
                                                                        <h3>Rs {{ $property->price }}</h3>
                                                                        @elseif($property->purpose == 'sell' && $property->type != 'projects' ):
                                                                        <p class="rant">Rs {{ $property->price }}/mo</p>
                                                                        @endif
                                                                    </div>
                                                                    <div class="info-row phone text-right">
                                                                        <a href="#" class="btn btn-primary">Details <i class="fa fa-angle-right fa-right"></i></a>
                                                                    </div>
                                                                </div>
                                                                <div class="table-list full-width hide-on-list">

                                                                    <div class="cell">
                                                                        <div class="phone">
                                                                            <a href="http://justdeal.pk/property-detail/{{ $property->id  }}/{{ preg_replace('/\.\s|[^a-zA-Z\.\-0-9]+/', '-', $property->title)  }}" class="btn btn-primary">Details <i class="fa fa-angle-right fa-right"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="item-foot date hide-on-list">

                                                            <div class="item-foot-right">
                                                                <p><i class="fa fa-calendar"></i> {{ $property->created_at->diff(new DateTime())->format('%a Days Ago') }}  </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                        <!--end property items-->
                                        <!--start carousel module-->
                                        <div id="carousel-module-6" class=" caption-bottom carousel-module">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="module-title-nav clearfix">
                                                            <div>
                                                                <h2>Featured Sale</h2>
                                                            </div>
                                                            <div class="module-nav">
                                                                <button class="btn btn-sm btn-crl-6-prev">Prev</button>
                                                                <button class="btn btn-sm btn-crl-6-next">Next</button>
                                                                <a href="#" class="btn btn-carousel btn-sm">All</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <div id="properties-carousel-6" class="carousel slide-animated">

                                                            @foreach($AllSaleproperties as $property)
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
                                                                                    Rs:
                                                                                    @if($property->purpose == 'sell')
                                                                                        {{ $property->price }}
                                                                                    @else:
                                                                                    {{ $property->price }}/month
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
                                        <!--end carousel module-->

                                        <!--start carousel module-->
                                        <div id="carousel-module-6" class=" caption-bottom carousel-module">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="module-title-nav clearfix">
                                                            <div>
                                                                <h2>Latest Sale</h2>
                                                            </div>
                                                            <div class="module-nav">
                                                                <button class="btn btn-sm btn-crl-6-prev">Prev</button>
                                                                <button class="btn btn-sm btn-crl-6-next">Next</button>
                                                                <a href="#" class="btn btn-carousel btn-sm">All</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <div id="properties-carouselsale-6" class="carousel slide-animated">

                                                            @foreach($AllSaleproperties as $property)
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
                                                                                    Rs:
                                                                                    @if($property->purpose == 'sell')
                                                                                        {{ $property->price }}
                                                                                    @else:
                                                                                    {{ $property->price }}/month
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
                                        <!--end carousel module-->

                                    </div>
                                </div>

                                <div class="profile-tab-pane tab-pane fade">
                                    <div class="profile-tab-content profile-properties">
                                        <div class="property-filter-wrap">
                                            <h4 class="filter-title"> Rent Properties </h4>

                                        </div>
                                        <!--start property items-->
                                        <div class="property-listing grid-view grid-view-3-col">
                                            <div class="row">
                                                @foreach($RentProperty as $property)
						                            <?php $image = '385x258'.$property->image0; ?>
                                                    <div class="item-wrap">
                                                        <div class="property-item table-list">
                                                            <div class="table-cell">
                                                                <div class="figure-block">
                                                                    <figure class="item-thumb">
                                                                        <span class="label-featured label label-success">Featured</span>
                                                                        <div class="label-wrap label-right hide-on-list">
                                                                            <span class="label label-default">For {{ $property->purpose }}</span>
                                                                        </div>
                                                                        <div class="price hide-on-list">
                                                                            @if($property->purpose == 'sell' && $property->type != 'projects'):
                                                                            <h3>Rs {{ $property->price }}</h3>
                                                                            @elseif($property->purpose == 'sell' && $property->type != 'projects' ):
                                                                            <p class="rant">Rs {{ $property->price }}/mo</p>
                                                                            @endif
                                                                        </div>
                                                                        <a href="http://justdeal.pk/property-detail/{{ $property->id  }}/{{ preg_replace('/\.\s|[^a-zA-Z\.\-0-9]+/', '-', $property->title)  }}">
                                                                            <img src="{{ asset('public/propetyImages/'.$property->id.'/'.$image)  }}" alt="{{ $property->title }}">
                                                                        </a>
                                                                        <ul class="actions">
                                                                            <li>
                                                                <span title="" data-placement="top" data-toggle="tooltip" data-original-title="Favorite">
                                                                    <i class="fa fa-heart"></i>
                                                                </span>
                                                                            </li>
                                                                            <li class="share-btn">
                                                                                <div class="share_tooltip fade">
                                                                                    <a href="/facebook/{{ $property->id }}" target="_blank"><i class="fa fa-facebook"></i></a>
                                                                                    <a href="/twitter/{{ $property->id }}" target="_blank"><i class="fa fa-twitter"></i></a>
                                                                                    <a href="/gplus/{{ $property->id }}"  target="_blank"><i class="fa fa-google-plus"></i></a>
                                                                                    <a href="/pinterest/{{ $property->id }}" target="_blank"><i class="fa fa-pinterest"></i></a>
                                                                                </div>
                                                                                <span title="" data-placement="top" data-toggle="tooltip" data-original-title="share"><i class="fa fa-share-alt"></i></span>
                                                                            </li>
                                                                            <li>
                                                                <span data-toggle="tooltip" data-placement="top" title="Photos (12)">
                                                                    <i class="fa fa-camera"></i>
                                                                </span>
                                                                            </li>
                                                                        </ul>
                                                                    </figure>
                                                                </div>
                                                            </div>
                                                            <div class="item-body table-cell">

                                                                <div class="body-left table-cell">
                                                                    <div class="info-row">
                                                                        <div class="label-wrap hide-on-grid">
                                                                            <div class="label-status label label-default">For {{ $property->purpose }}</div>
                                                                        </div>
                                                                        <h2 class="property-title"><a href="#">{{ $property->title }}</a></h2>
                                                                    </div>
                                                                    <div class="info-row amenities hide-on-grid">
                                                                        <p>
                                                                        <p>
                                                                            {{--<span>Beds: {{ $property->beds }}</span>--}}
                                                                            {{--<span>Baths: {{ $property->bathroom }}</span>--}}
                                                                            <span>{{ $property->area_unit }}: {{ $property->area }}</span>
                                                                        </p>

                                                                        <span>{{ $property->subtype }}</span>
                                                                        </p>
                                                                        <p>{{ $property->title }}</p>
                                                                    </div>
                                                                    <div class="info-row date hide-on-grid">
                                                                        <p><i class="fa fa-user"></i> <a href="#">{{  $property->city  }} {{  $property->region }}</a></p>
                                                                        <p><i class="fa fa-calendar"></i> {{ $property->created_at->diff(new DateTime())->format('%a Days Ago') }} </p>
                                                                    </div>
                                                                </div>
                                                                <div class="body-right table-cell hidden-gird-cell">
                                                                    <div class="info-row price">
                                                                        @if($property->purpose == 'sell' && $property->type != 'projects'):
                                                                        <h3>Rs {{ $property->price }}</h3>
                                                                        @elseif($property->purpose == 'sell' && $property->type != 'projects' ):
                                                                        <p class="rant">Rs {{ $property->price }}/mo</p>
                                                                        @endif
                                                                    </div>
                                                                    <div class="info-row phone text-right">
                                                                        <a href="#" class="btn btn-primary">Details <i class="fa fa-angle-right fa-right"></i></a>
                                                                    </div>
                                                                </div>
                                                                <div class="table-list full-width hide-on-list">

                                                                    <div class="cell">
                                                                        <div class="phone">
                                                                            <a href="http://justdeal.pk/property-detail/{{ $property->id  }}/{{ preg_replace('/\.\s|[^a-zA-Z\.\-0-9]+/', '-', $property->title)  }}" class="btn btn-primary">Details <i class="fa fa-angle-right fa-right"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="item-foot date hide-on-list">

                                                            <div class="item-foot-right">
                                                                <p><i class="fa fa-calendar"></i> {{ $property->created_at->diff(new DateTime())->format('%a Days Ago') }}  </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                        <!--end property items-->


                                        <!--start carousel module-->
                                        <div id="carousel-module-6" class=" caption-bottom carousel-module">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="module-title-nav clearfix">
                                                            <div>
                                                                <h2>Featured Rent</h2>
                                                            </div>
                                                            <div class="module-nav">
                                                                <button class="btn btn-sm btn-crl-6-prev">Prev</button>
                                                                <button class="btn btn-sm btn-crl-6-next">Next</button>
                                                                <a href="#" class="btn btn-carousel btn-sm">All</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <div id="properties-carousell-6" class="carousel slide-animated">

                                                            @foreach($AllRentproperties as $property)
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
                                                                                    Rs:
                                                                                    @if($property->purpose == 'sell')
                                                                                        {{ $property->price }}
                                                                                    @else:
                                                                                    {{ $property->price }}/month
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
                                        <!--end carousel module-->
                                        <!--start carousel module-->
                                        <div id="carousel-module-6" class=" caption-bottom carousel-module">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="module-title-nav clearfix">
                                                            <div>
                                                                <h2>Latest Rent</h2>
                                                            </div>
                                                            <div class="module-nav">
                                                                <button class="btn btn-sm btn-crl-6-prev">Prev</button>
                                                                <button class="btn btn-sm btn-crl-6-next">Next</button>
                                                                <a href="#" class="btn btn-carousel btn-sm">All</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <div id="properties-carouselrent-6" class="carousel slide-animated">

                                                            @foreach($AllRentproperties as $property)
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
                                                                                    Rs:
                                                                                    @if($property->purpose == 'sell')
                                                                                        {{ $property->price }}
                                                                                    @else:
                                                                                    {{ $property->price }}/month
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
                                        <!--end carousel module-->


                                    </div>
                                </div>

                                <div class="profile-tab-pane tab-pane fade">
                                    <div class="profile-tab-content profile-agents">

                                        <div class="property-listing grid-view grid-view-3-col">
                                            <div class="row">
                                        @foreach($agents as $Agent)
                                        <div class="item-wrap">
                                            <div class="property-item table-list">
                                                <div class="table-cell">
                                                    <div class="figure-block">
                                                        <figure class="item-thumb">
                                                            <span class="label-featured label label-success"> {{ $Agent->city }}</span>
                                                            <div class="label-wrap label-right hide-on-list">
                                                                <span class="label label-default">{{ $Agent->number }} </span>
                                                            </div>
                                                            <div class="price hide-on-list">

                                                            </div>
                                                            <a href="#">
                                                                <img src="{{ asset('public/AgentImage/330x330_'.$Agent->logo )  }}" alt="{{ $Agent->name }}" width="330px" height="330px">
                                                            </a>

                                                        </figure>
                                                    </div>
                                                </div>
                                                <div class="item-body table-cell">

                                                    <div class="body-left table-cell">
                                                        <div class="info-row">
                                                            <h2 class="property-title"><a href="#">{{ $Agent->name }}</a></h2>
                                                            <h5 class="property-title"><a href="#">{{ $Agent->company_name }}</a></h5>
                                                        </div>

                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                            @endforeach
                                    </div>
                                    </div>
                                    </div>
                                </div>
                                <div class="profile-tab-pane tab-pane fade">
                                    <div class="profile-tab-content profile-review">
                                        <h3 class="title">Contact Us</h3>

                                        <div class="add-review-block">
                                            <form>

                                                <div class="row">
                                                    <div class="col-sm-6 col-xs-12">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" placeholder="Your name">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 col-xs-12">
                                                        <div class="form-group">
                                                            <input type="email" class="form-control" placeholder="Email address">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-xs-12">
                                                        <div class="form-group">
                                                            <textarea class="form-control" rows="5" placeholder="Your Detail"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-xs-12">
                                                        <button class="btn btn-secondary">Submit Review</button>
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
            </div>
        </div>
        <!--end carousel module-->


    </section>
    <!--end section page body-->
@endsection