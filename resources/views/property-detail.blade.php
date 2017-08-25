@extends('layouts/app')


<!--page level css -->
@section('pagecss')

@endsection
<!--end of page level css-->

<?php //dd($Agent); ?>
@section('content')

<!--start advanced search section-->
@include('layouts.advance_search')
<!-- TEST SLIDER -->
<div class="detail-top detail-top-grid no-margin">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-xs-12">
                <div class="header-detail table-list">
                    <div class="header-left">
                        <h1>
                            {{ $singleproperty->title }}

                            <span class="label-wrap hidden-sm hidden-xs">
                                        <span class="label label-primary">For  {{ $singleproperty->purpose }}</span>
                                    </span>
                        </h1>

                        <p> {{ $singleproperty->address }}
                        </p>
                    </div>
                    <div class="header-right">
                        <ul class="actions">
                            <li class="share-btn">
                                <div class="share_tooltip tooltip_left fade">
                                    <a href="/facebook/{{ $singleproperty->id }}" onclick="window.open(this.href, 'mywin','left=50,top=50,width=600,height=350,toolbar=0'); return false;">
                                        <i class="fa fa-facebook"></i>
                                    </a>

                                    <a href="/twitter/{{ $singleproperty->id }}" onclick="if(!document.getElementById('td_social_networks_buttons')){window.open(this.href, 'mywin','left=50,top=50,width=600,height=350,toolbar=0'); return false;}"><i class="fa fa-twitter"></i></a>

                                    <a href="/pinterest/{{ $singleproperty->id }}" onclick="window.open(this.href, 'mywin','left=50,top=50,width=600,height=350,toolbar=0'); return false;"><i class="fa fa-pinterest"></i></a>


                                    <a href="/gplus/{{ $singleproperty->id }}" onclick="window.open(this.href, 'mywin','left=50,top=50,width=600,height=350,toolbar=0'); return false;"><i class="fa fa-google-plus"></i></a>

                                </div>

                            </li>
                        </ul>
                        <span class="item-price">
                            @if($singleproperty->purpose == 'sell' && $singleproperty->price <> '')
                            Rs {{ $singleproperty->price }}
                            @elseif( $singleproperty->price <> '')
                            Rs {{ $singleproperty->price }}/month
                            @endif
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END SLIDER -->
<!--end detail top-->

<!--start section page body-->
<section id="section-body">
    <!--start detail content-->
    <section class="section-detail-content">
        <div class="container">
            <div class="row">

                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 container-contentbar">
                    <div class="detail-bar">
                        <!-- SLIDER  -->
                        <div class="detail-media detail-top-slideshow">
                            <div class="tab-content">

                                <div id="gallery" class="tab-pane fade in active">
                                        <span class="label-wrap visible-sm visible-xs">
                                        <span class="label label-primary">For  {{ $singleproperty->purpose }}</span>
                                    </span>
                                    <div class="slideshow">
                                        <div class="slideshow-main">
                                            <div class="slide">
                                                <div>
                                                    <img src="{{ asset('public/propetyImages/'.$singleproperty->id.'/750x388'.$singleproperty->image0)}}" width="810" height="430" alt="{{ $singleproperty->title }}">
                                                </div>
                                                @if($singleproperty->image1 != '')
                                                <div>
                                                    <img src="{{ asset('public/propetyImages/'.$singleproperty->id.'/750x388'.$singleproperty->image1)}}" width="810" height="430" alt="{{ $singleproperty->title }}">
                                                </div>
                                                @endif
                                                @if($singleproperty->image2 != '')
                                                <div>
                                                    <img src="{{ asset('public/propetyImages/'.$singleproperty->id.'/750x388'.$singleproperty->image2)}}" width="810" height="430" alt="{{ $singleproperty->title }}">
                                                </div>
                                                @endif
                                                @if($singleproperty->image3 != '')
                                                <div>
                                                    <img src="{{ asset('public/propetyImages/'.$singleproperty->id.'/750x388'.$singleproperty->image3)}}" width="810" height="430" alt="{{ $singleproperty->title }}">
                                                </div>
                                                @endif
                                                @if($singleproperty->image4 != '')
                                                <div>
                                                    <img src="{{ asset('public/propetyImages/'.$singleproperty->id.'/750x388'.$singleproperty->image4)}}" width="810" height="430" alt="{{ $singleproperty->title }}">
                                                </div>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="slideshow-nav-main">
                                            <div class="slideshow-nav">
                                                <div>
                                                    <img src="{{ asset('public/propetyImages/'.$singleproperty->id.'/750x388'.$singleproperty->image0)}}" width="100" height="70" alt="{{ $singleproperty->title }}">
                                                </div>
                                                @if($singleproperty->image1 != '')
                                                <div>
                                                    <img src="{{ asset('public/propetyImages/'.$singleproperty->id.'/750x388'.$singleproperty->image1)}}" width="100" height="70" alt="{{ $singleproperty->title }}">
                                                </div>
                                                @endif
                                                @if($singleproperty->image2 != '')
                                                <div>
                                                    <img src="{{ asset('public/propetyImages/'.$singleproperty->id.'/750x388'.$singleproperty->image2)}}" width="100" height="70" alt="{{ $singleproperty->title }}">
                                                </div>
                                                @endif
                                                @if($singleproperty->image3 != '')
                                                <div>
                                                    <img src="{{ asset('public/propetyImages/'.$singleproperty->id.'/750x388'.$singleproperty->image3)}}" width="100" height="70" alt="{{ $singleproperty->title }}">
                                                </div>
                                                @endif
                                                @if($singleproperty->image4 != '')
                                                <div>
                                                    <img src="{{ asset('public/propetyImages/'.$singleproperty->id.'/750x388'.$singleproperty->image4)}}" width="100" height="70" alt="{{ $singleproperty->title }}">
                                                </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="map" class="tab-pane fade"></div>
                                <div id="street-map" class="tab-pane fade"></div>

                            </div>
                            <div class="media-tabs">
                                <ul class="media-tabs-list">
                                    <li class="popup-trigger" data-placement="bottom" data-toggle="tooltip" data-original-title="View Photos">
                                        <a href="#gallery" data-toggle="tab">
                                            <i class="fa fa-camera"></i>
                                        </a>
                                    </li>
                                    <li data-placement="bottom" data-toggle="tooltip" data-original-title="Map View">
                                        <a href="#map" data-toggle="tab">
                                            <i class="fa fa-map"></i>
                                        </a>
                                    </li>
                                    <li data-placement="bottom" data-toggle="tooltip" data-original-title="Street View">
                                        <a href="#street-map" data-toggle="tab">
                                            <i class="fa fa-street-view"></i>
                                        </a>
                                    </li>
                                </ul>
                                <ul class="actions">
                                    <li class="share-btn">
                                        <div class="share_tooltip tooltip_left fade">
                                            <a href="/facebook/{{ $singleproperty->id }}" onclick="window.open(this.href, 'mywin','left=50,top=50,width=600,height=350,toolbar=0'); return false;"><i class="fa fa-facebook"></i></a>
                                            <a href="/twitter/{{ $singleproperty->id }}" onclick="if(!document.getElementById('td_social_networks_buttons')){window.open(this.href, 'mywin','left=50,top=50,width=600,height=350,toolbar=0'); return false;}"><i class="fa fa-twitter"></i></a>

                                            <a href="/pinterest/{{ $singleproperty->id }}" onclick="window.open(this.href, 'mywin','left=50,top=50,width=600,height=350,toolbar=0'); return false;"><i class="fa fa-pinterest"></i></a>

                                            <a href="/gplus/{{ $singleproperty->id }}" onclick="window.open(this.href, 'mywin','left=50,top=50,width=600,height=350,toolbar=0'); return false;"><i class="fa fa-google-plus"></i></a>
                                        </div>
                                        <span><i class="fa fa-share-alt"></i></span>
                                    </li>
                                    <li>
                                        <span><i class="fa fa-heart-o"></i></span>
                                    </li>
                                    <li class="lightbox-expand visible-xs compress">
                                        <span><i class="fa fa-envelope-o"></i></span>
                                    </li>
                                    <li class="lightbox-close">
                                        <span><i class="fa fa-close"></i></span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- SLIDER END  -->
                        <!--start detail content tabber-->
                        <div class="detail-content-tabber">
                            <!--start detail tabs-->
                            <ul class="detail-tabs">
                                <li class="active">Contact Info</li>
                                <li id="newmap">Map</li>
                                <li>Features</li>
                                <li>Detail</li>
                                <li>Services</li>

                                @if(!empty($singleproperty->video_url)) <li>VIDEO</li> @endif
                            </ul><!--end detail tabs-->

                            <!--start tab-content-->
                            <div class="tab-content">
                                <div class="tab-pane fade in active">
                                    <div class="property-description detail-block">
                                        <div class="detail-title">
                                            <h2 class="title-left">Description</h2>
                                            <div class="title-right">
                                                {{ $Agent->company_name }}
                                            </div>
                                        </div>
                                        <p> <b>Company Name             : {{ $Agent->company_name }} </b></p>
                                        <p> <b>Companyy Address         : {{ $Agent->address }} </b></p>
                                        <p> <b>Company Phone            : {{ $Agent->company_phone }} </b></p>
                                        <p> <b>Company Office Phone     : {{ $Agent->work_phone }} </b></p>
                                        <p> <b>Company Email            : {{ $Agent->emial2 }} </b></p>
                                        <p> <b>Company Email            : {{ $Agent->description }} </b></p>
                                        <p> <b>Company CEO              :  <CEO> {{ $Agent->ceo_name }}</CEO> </b></p>
                                        <p> <b>CEO Message              : {{ $Agent->ceo_description }} </b></p>
                                        @if(!empty($Agent->DisplayName))
                                        <p> <b>Website                  :<a href="//{{ $Agent->DisplayName  }}.justdeal.pk/"> {{ $Agent->DisplayName }}.justdeal.pk/</a></b></p>
                                        @endif
                                        <p>
                                        <ul class="profile-social">
                                            <li><a class="btn-facebook" href="{{ $Agent->facebook }}" target="_blank"><i class="fa fa-facebook-square"></i></a></li>
                                            <li><a class="btn-twitter" href="{{ $Agent->twitter }}" target="_blank"><i class="fa fa-twitter-square"></i></a></li>
                                            <li><a class="btn-linkedin" href="{{ $Agent->linkedin }}" target="_blank"><i class="fa fa-linkedin-square"></i></a></li>
                                            <li><a class="btn-google-plus" href="{{ $Agent->googleplus	 }}" target="_blank"><i class="fa fa-google-plus-square"></i></a></li>
                                        </ul>
                                        </p>
                                    </div>
                                </div>
                                <div class="tab-pane fade">
                                    <div class="detail-address detail-block">
                                        <div class="detail-title">
                                            <h2 class="title-left">MAP</h2>
                                            <div class="title-right">
                                                <a href="http://maps.google.com/?q=<{{ $singleproperty->latitude }}>,<{{ $singleproperty->longitude }}>" target="_blank">Open on Google Maps <i class="fa fa-map-marker"></i></a>
                                            </div>
                                        </div>
                                        <ul class="list-three-col">
                                            <li><strong>City:</strong> {{ $singleproperty->city }}</li>
                                            <li><strong>Address:</strong>  {{ $singleproperty->address }} </li>
                                            <li><strong>Latitude:</strong>  {{ $singleproperty->latitude }} </li>
                                            <li><strong>longitude:</strong>  {{ $singleproperty->longitude }} </li>
                                        </ul>
                                    </div>
                                    <div id="pmap" style="height: 300px"></div>
                                </div>
                                <div class="tab-pane fade">
                                    <div class="detail-features detail-block">
                                        <div class="detail-title">
                                            <h2 class="title-left">Features</h2>
                                        </div>
                                        <ul class="list-three-col list-features">
                                            @foreach($propertyFeatures as $feature)
                                            <li><a href="#"><i class="fa fa-check"></i>{{ $feature->name  }}</a></li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                                <div class="tab-pane fade">
                                    <div class="detail-list detail-block">
                                        <div class="detail-title">
                                            <h2 class="title-left">{{ $singleproperty->title }}</h2>
                                            <div class="title-right">
                                                <p>{{ $singleproperty->updated_at  }}</p>
                                            </div>
                                        </div>
                                        <div class="alert alert-info">
                                            <ul class="list-two-col">
                                                <li><strong>Property ID:</strong> justdeal{{ $singleproperty->id }}</li>
                                                @if(!empty($singleproperty->purpose))
                                                <li><strong>Property Purpose:</strong> {{ $singleproperty->purpose }}</li>
                                                @endif
                                                @if(!empty($singleproperty->type))
                                                <li><strong>Property Type:</strong>{{ $singleproperty->type }}</li>
                                                @endif
                                                @if(!empty($singleproperty->subtype))
                                                <li><strong>Property Sub Category:</strong>{{ $singleproperty->subtype }}</li>
                                                @endif

                                                @if($singleproperty->purpose == 'sell' && $singleproperty->price <> '')
                                                <li><strong>Price:</strong>
                                                    Rs {{ $singleproperty->price }}
                                                    @elseif( $singleproperty->price <> '')
                                                    Rs {{ $singleproperty->price }}/month
                                                </li>
                                                @endif
                                                <li><strong>Property Size:</strong> {{ $singleproperty->area }} {{ $singleproperty->area_unit }}</li>

                                                @if(!empty($singleproperty->height))
                                                <li><strong>Property Height:</strong>{{ $singleproperty->height }}</li>
                                                @endif
                                                @if(!empty($singleproperty->width))
                                                <li><strong>Property Width:</strong>{{ $singleproperty->width }}</li>
                                                @endif
                                                @if(!empty($singleproperty->beds))
                                                <li><strong>Property Beds:</strong>{{ $singleproperty->beds }}</li>
                                                @endif

                                                @if(!empty($singleproperty->bathroom))
                                                <li><strong>Property Bathroom:</strong>{{ $singleproperty->bathroom }}</li>
                                                @endif

                                                @if(!empty($singleproperty->kitchens))
                                                <li><strong>Property Kitchens:</strong>{{ $singleproperty->kitchens }}</li>
                                                @endif
                                                @if(!empty($singleproperty->floor))
                                                <li><strong>Property Floor:</strong>{{ $singleproperty->floor }}</li>
                                                @endif
                                                @if(!empty($singleproperty->floor))
                                                <li><strong>Property Floor:</strong>{{ $singleproperty->floor }}</li>
                                                @endif
                                                @if(!empty($singleproperty->Label))
                                                <li><strong>Property Label:</strong>{{ $singleproperty->Label }}</li>
                                                @endif

                                                @if(!empty($singleproperty->ConstructedArea))
                                                <li><strong>Property Constructed Area:</strong>{{ $singleproperty->ConstructedArea }}</li>
                                                @endif

                                                @if(!empty($singleproperty->OpenArea))
                                                <li><strong>Property Open Area:</strong>{{ $singleproperty->OpenArea }}</li>
                                                @endif

                                                @if(!empty($singleproperty->ConstructionYear))
                                                <li><strong>Property Construction Year:</strong>{{ $singleproperty->ConstructionYear }}</li>
                                                @endif
                                                @if(!empty($singleproperty->OwnerShipStatus))
                                                <li><strong>Property OwnerShip Status:</strong>{{ $singleproperty->OwnerShipStatus }}</li>
                                                @endif


                                                @if(!empty($singleproperty->size1))
                                                <li><strong>Property Size :</strong>{{ $singleproperty->size1 }}</li>
                                                @endif
                                                @if(!empty($singleproperty->rate1))
                                                <li><strong>Property Rate 1 :</strong>{{ $singleproperty->rate1 }}</li>
                                                @endif
                                                @if(!empty($singleproperty->size2))
                                                <li><strong>Property Size 2:</strong>{{ $singleproperty->size2 }}</li>
                                                @endif
                                                @if(!empty($singleproperty->rate2))
                                                <li><strong>Property Rate 2:</strong>{{ $singleproperty->rate2 }}</li>
                                                @endif
                                                @if(!empty($singleproperty->size3))
                                                <li><strong>Property Size 3 :</strong>{{ $singleproperty->size3 }}</li>
                                                @endif
                                                @if(!empty($singleproperty->rate3))
                                                <li><strong>Property Rate 3 :</strong>{{ $singleproperty->rate3 }}</li>
                                                @endif
                                                @if(!empty($singleproperty->size4))
                                                <li><strong>Property Size 4:</strong>{{ $singleproperty->size4 }}</li>
                                                @endif
                                                @if(!empty($singleproperty->rate4))
                                                <li><strong>Property Rate 4 :</strong>{{ $singleproperty->rate4 }}</li>
                                                @endif

                                                <li><strong>Expired Offer:</strong> {{ $singleproperty->created_at->diff(new DateTime())->format('%a Days Ago') }}</li>
                                            </ul>
                                            <p>{{ $singleproperty->description }}</p>
                                        </div>

                                    </div>
                                </div>

                                <div class="tab-pane fade">
                                    <div class="property-plans detail-block">
                                        <div class="detail-title">
                                            <h2 class="title-left">Property Services</h2>
                                        </div>
                                        <div class="accord-block">
                                            <div class="accord-tab">
                                                <ul class="list-three-col list-features">
                                                    @foreach($propertyServices as $service)
                                                    <li><a href="#"><i class="fa fa-check"></i>{{ $service->name  }}</a></li>
                                                    @endforeach
                                                </ul>
                                            </div>


                                            <div class="accord-content">
                                                <img src="images/floor-image.png" alt="img" width="400" height="436">
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="tab-pane fade">
                                    <div class="property-video detail-block">
                                        <div class="detail-title">
                                            <h2 class="title-left">Video</h2>
                                        </div>
                                        <div class="video-block">
                                            <a href="{{ $singleproperty->video_url }}" data-fancy="property_video" title="YouTube demo">
                                                <span class="play-icon"><img src="{{ asset('assets/images/icons/video-play-icon.png')}}" alt="YouTube Property Jeastdeal.pk" width="70" height="50"></span>
                                                <img src="{{ asset('public/propetyImages/'.$singleproperty->id.'/750x388'.$singleproperty->image0)}}" alt="thumb" class="video-thumb">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end tab-content-->
                        </div>
                        <!--end detail content tabber-->

                        <div class="detail-contact detail-block">
                            <div class="detail-title">
                                <h2 class="title-left">Contact info</h2>
                                @if(!empty($Agent->DisplayName))
                                <div class="title-right"><strong><a href="//{{ $Agent->DisplayName  }}.justdeal.pk/">View my listing</a></strong></div>
                                @endif
                            </div>
                            <div class="media agent-media">
                                <div class="media-left">
                                    @if(!empty($Agent->DisplayName))
                                    <a href="//{{ $Agent->DisplayName  }}.justdeal.pk/">
                                        <img src="{{ asset('public/ProfileImage/74x74_'.$Agent->image)  }}" class="media-object" alt="image" width="74" height="74">
                                    </a>
                                    @else
                                    <a href="">
                                        <img src="{{ asset('public/ProfileImage/74x74_'.$Agent->image)  }}" class="media-object" alt="image" width="74" height="74">
                                    </a>
                                    @endif
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">CONTACT AGENT</h4>
                                    <ul>
                                        <li><i class="fa fa-user"></i> {{ $Agent->first_name.' '.$Agent->last_name }}</li>
                                        <li>
                                            <span><i class="fa fa-phone"></i> {{ $Agent->cell_phone }}</span>
                                            <span><a href="#"><i class="fa fa-skype"></i>  kenneth.phllips</a></span>
                                        </li>
                                        <li>
                                            <span><a href="#"><i class="fa fa-facebook-square"></i> Facebook</a></span>
                                            <span><a href="#"><i class="fa fa-twitter-square"></i>  Twitter</a></span>
                                            <span><a href="#"><i class="fa fa-linkedin-square"></i>  Linkedin</a></span>
                                            <span><a href="#"><i class="fa fa-instagram"></i>  Linkedin</a></span>
                                            <span><a href="#"><i class="fa fa-pinterest-square"></i>  Linkedin</a></span>
                                            <span><a href="#"><i class="fa fa-globe"></i>  Linkedin</a></span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="detail-title-inner">
                                <h4 class="title-inner">Inquire about this propertys</h4>
                            </div>
                            <form>
                                <div class="row">
                                    <div class="col-sm-4 col-xs-12">
                                        <div class="form-group">
                                            <input class="form-control" placeholder="Your Name" type="text">
                                        </div>
                                    </div>
                                    <div class="col-sm-4 col-xs-12">
                                        <div class="form-group">
                                            <input class="form-control" placeholder="Phone" type="text">
                                        </div>
                                    </div>
                                    <div class="col-sm-4 col-xs-12">
                                        <div class="form-group">
                                            <input class="form-control" placeholder="Email" type="email">
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <textarea class="form-control" rows="5" placeholder="Location"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-secondary">Request info</button>
                            </form>
                        </div>

                    </div>
                </div>
                <!--start sidebar section-->
                @include('layouts.leftsidebar')
                <!--end sidebar section-->
            </div>
        </div>
    </section>
    <!--end detail content-->

</section>
<!--end section page body-->

<div id="lightbox-popup-main" class="fade">
    <div class="lightbox-popup">
        <div class="popup-inner">
            <div class="lightbox-left">
                <div class="lightbox-header">
                    <div class="header-title">
                        <p>
                                <span>
                                    <img src="{{ asset('public/ProfileImage/74x74_'.$Agent->image)  }}" width="86" height="13" alt="logo">
                                </span>
                            <span class="hidden-xs">
                                    {{ $singleproperty->title }}
                                </span>
                        </p>
                    </div>
                    <div class="header-actions">
                        <ul class="actions">
                            <li class="share-btn">
                                <div class="share_tooltip tooltip_left fade">
                                    <a href="#" onclick="window.open(this.href, 'mywin','left=50,top=50,width=600,height=350,toolbar=0'); return false;"><i class="fa fa-facebook"></i></a>
                                    <a href="#" onclick="if(!document.getElementById('td_social_networks_buttons')){window.open(this.href, 'mywin','left=50,top=50,width=600,height=350,toolbar=0'); return false;}"><i class="fa fa-twitter"></i></a>

                                    <a href="#" onclick="window.open(this.href, 'mywin','left=50,top=50,width=600,height=350,toolbar=0'); return false;"><i class="fa fa-pinterest"></i></a>

                                    <a href="#" onclick="window.open(this.href, 'mywin','left=50,top=50,width=600,height=350,toolbar=0'); return false;"><i class="fa fa-linkedin"></i></a>

                                    <a href="#" onclick="window.open(this.href, 'mywin','left=50,top=50,width=600,height=350,toolbar=0'); return false;"><i class="fa fa-google-plus"></i></a>
                                    <a href="#"><i class="fa fa-envelope"></i></a>
                                </div>
                                <span><i class="fa fa-share-alt"></i></span>
                            </li>
                            <li>
                                <span><i class="fa fa-heart-o"></i></span>
                            </li>
                            <li class="lightbox-expand visible-xs compress">
                                <span><i class="fa fa-envelope-o"></i></span>
                            </li>
                            <li class="lightbox-close">
                                <span><i class="fa fa-close"></i></span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="gallery-area">
                    <div class="slider-placeholder">
                        <div class="loader-inner">
                            <span class="fa fa-spin fa-spinner"></span> Loading Slider...
                        </div>
                    </div>
                    <div class="expand-icon lightbox-expand hidden-xs"></div>
                    <div class="gallery-inner">
                        <div class="lightbox-slide slide-animated">
                            <div>
                                <img src="{{ asset('public/propetyImages/'.$singleproperty->id.'/1170x600'.$singleproperty->image0)}}" alt="Lightbox Slider" width="1044" height="525">
                            </div>
                            @if($singleproperty->image1 != '')
                            <div>
                                <img src="{{ asset('public/propetyImages/'.$singleproperty->id.'/1170x600'.$singleproperty->image1)}}" alt="Lightbox Slider" width="1044" height="525">
                            </div>
                            @endif
                            @if($singleproperty->image2 != '')
                            <div>
                                <img src="{{ asset('public/propetyImages/'.$singleproperty->id.'/1170x600'.$singleproperty->image2)}}" alt="Lightbox Slider" width="1044" height="525">
                            </div>
                            @endif
                            @if($singleproperty->image3 != '')
                            <div>
                                <img src="{{ asset('public/propetyImages/'.$singleproperty->id.'/1170x600'.$singleproperty->image3)}}" alt="Lightbox Slider" width="1044" height="525">
                            </div>
                            @endif
                            @if($singleproperty->image4 != '')
                            <div>
                                <img src="{{ asset('public/propetyImages/'.$singleproperty->id.'/1170x600'.$singleproperty->image4)}}" alt="Lightbox Slider" width="1044" height="525">
                            </div>
                            @endif

                        </div>
                    </div>
                    <div class="lightbox-slide-nav visible-xs">
                        <button class="lightbox-arrow-left lightbox-arrow"><i class="fa fa-angle-left"></i></button>
                        <p class="lightbox-nav-title">Luxury apartment bay view</p>
                        <button class="lightbox-arrow-right lightbox-arrow"><i class="fa fa-angle-right"></i></button>
                    </div>
                </div>
            </div>
            <div class="lightbox-right fade in">
                <div class="lightbox-header hidden-xs">
                    <div class="header-title">
                        <p>@if($singleproperty->purpose == 'sell'):
                            Rs: {{ $singleproperty->price }}
                            @else
                            Rs: {{ $singleproperty->price }}/mo
                            @endif</p>
                    </div>
                    <div class="header-actions">
                        <ul class="actions">
                            <li class="lightbox-close">
                                <span><i class="fa fa-close"></i></span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="agent-area">
                    <div class="form-small">
                        <div class="agent-media-head">
                            <h4 class="head-left">Contact info</h4>
                            @if(!empty($Agent->DisplayName))
                            <a href="//{{ $Agent->DisplayName  }}.justdeal.pk/" class="head-right">View my listing</a>
                            @endif
                        </div>
                        <div class="media agent-media">
                            <div class="media-left">
                                @if(!empty($Agent->DisplayName))
                                <a href="//{{ $Agent->DisplayName  }}.justdeal.pk/">
                                    <img width="100" height="100" alt="image" class="media-object" src="{{ asset('public/ProfileImage/90x90_'.$Agent->image)  }}">
                                </a>
                                @else
                                <a href="">
                                <img width="100" height="100" alt="image" class="media-object" src="{{ asset('public/ProfileImage/90x90_'.$Agent->image)  }}">
                                </a>
                                @endif
                            </div>
                            <div class="media-body">
                                <dl>
                                    <dt>CONTACT AGENT</dt>
                                    <dd><i class="fa fa-user"></i> {{ $Agent->first_name.' '.$Agent->last_name }}</dd>
                                    <dd><i class="fa fa-phone"></i> {{ $Agent->cell_phone }}</dd>
                                </dl>

                                <ul class="profile-social">
                                    <li><a class="btn-facebook" href="#" target="_blank"><i class="fa fa-facebook-square"></i></a></li>
                                    <li><a class="btn-twitter" href="#" target="_blank"><i class="fa fa-twitter-square"></i></a></li>
                                    <li><a class="btn-linkedin" href="#" target="_blank"><i class="fa fa-linkedin-square"></i></a></li>
                                    <li><a class="btn-google-plus" href="#" target="_blank"><i class="fa fa-google-plus-square"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <h4 class="form-small-title"> Inquire about this property </h4>
                        <form>
                            <div class="form-group">
                                <input type="text" placeholder="Your Name" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="text" placeholder="Phone" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="email" placeholder="Email" class="form-control">
                            </div>
                            <div class="form-group">
                                <textarea placeholder="Location" rows="2" class="form-control"></textarea>
                            </div>
                            <button class="btn btn-secondary btn-block">Request info</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('pagejs')
<script type="text/javascript">
    var map = null;
    var panorama = null;
    var fenway = new google.maps.LatLng( {{ $singleproperty->latitude }} ,{{ $singleproperty->longitude }}  );
    var mapOptions = {
        center: {lat: {{ $singleproperty->latitude }}, lng: {{ $singleproperty->longitude }}},
    zoom: 12
    };
    var panoramaOptions = {
        position: {lat: {{ $singleproperty->latitude }}, lng: {{ $singleproperty->longitude }}},
    pov: {
        heading: 34,
            pitch: 10
    }
    };
    var tabsHeight = function() {
        //jQuery(".detail-media .tab-content").css('min-height',jQuery("#gallery").innerHeight());
        jQuery("#map,#street-map").css('min-height',jQuery(".detail-media #gallery").innerHeight());
    };
    jQuery(window).on('load',function(){
        tabsHeight();
        initialize();
    });
    jQuery(window).on('resize',function(){
        tabsHeight();
        initialize();
    });
    pmap = new google.maps.Map(document.getElementById('pmap'), mapOptions);
    function initialize() {

        newmap = new google.maps.Map(document.getElementById('pmap'), mapOptions);
        map = new google.maps.Map(document.getElementById('map'), mapOptions);
        panorama = new google.maps.StreetViewPanorama(document.getElementById('street-map'), panoramaOptions);
        map.setStreetView(panorama);
    }
    $('#newmap').click(function(e) {
        initialize();
        resetMap(pmap);
    });

    $('a[href="#map"]').on('shown.bs.tab', function (e) {
        var center = panorama.getPosition();
        google.maps.event.trigger(map, "resize");
        map.setCenter(center);
    });
    $('a[href="#street-map"]').on('shown.bs.tab', function (e) {
        fenway = panorama.getPosition();
        panoramaOptions.position = fenway;
        panorama = new google.maps.StreetViewPanorama(document.getElementById('street-map'), panoramaOptions);
        map.setStreetView(panorama);
    });
    google.maps.event.addDomListener(window, 'load', initialize);


</script>
@endsection