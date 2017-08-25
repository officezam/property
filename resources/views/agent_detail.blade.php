@extends('layouts.app')
@section('content')

    <!--start advanced search section-->
    @include('layouts.advance_search')
    <!--end advanced search section-->


    <!--start section page body-->
    <section id="section-body">
        <div class="container">
            <div class="page-title breadcrumb-top">
                <div class="row">
                    <div class="col-sm-12">

                        <div class="page-title-left">
                            <h2>{{ $Agent->first_name }} {{ $Agent->last_name }}</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="profile-detail-block agent-detail">
                        <div class="row">
                            <div class="col-sm-4 col-xs-12">
                                <div class="profile-image">
                                    <img src="{{ asset('ProfileImage/'.'330x330_'.$Agent->image )  }}" alt="Agent" width="330" height="330">
                                    <div class="company-logo">
                                        <img src="http://placehold.it/105x75" alt="Agent" width="105" height="75">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-8 col-xs-12">
                                <div class="profile-description">
                                    <h3>{{ $Agent->first_name }} {{ $Agent->last_name }}</h3>
                                    <h4 class="position">Executive Manager at {{ $Agent->DisplayName }}.</h4>
                                    <p> {{ $Agent->description }}</p>
                                    <ul class="profile-contact">
                                        <li><span>OFFICE:</span> <a href="#">(765) 234 5678</a></li>
                                        <li><span>MOBILE:</span> <a href="#">{{ $Agent->cell_phone }}</a></li>
                                        <li><span>FAX:</span> <a href="#">(765) 234 5678</a></li>
                                        <li class="email"><span>Email:</span> <a href="#">{{ $Agent->email }}</a></li>
                                    </ul>
                                    <ul class="profile-social">
                                        <li><a href="#"><i class="fa fa-phone-square"></i></a></li>
                                        <li><a href="#" class="btn-facebook"><i class="fa fa-facebook-square"></i></a></li>
                                        <li><a href="#" class="btn-twitter"><i class="fa fa-twitter-square"></i></a></li>
                                        <li><a href="#" class="btn-linkedin"><i class="fa fa-linkedin-square"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-12 col-xs-12">
                                <div class="form-small">
                                    <h3>{{ $Agent->first_name }} {{ $Agent->last_name }}</h3>
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
                                            <textarea placeholder="Hi John Doe, I saw your profile on Houzez and wanted to see if you could help me." rows="3" class="form-control"></textarea>
                                        </div>
                                        <button class="btn btn-secondary btn-block">SEND MESSAGE</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12 list-grid-area container-contentbar">
                    <div id="content-area">
                        <!--start list tabs-->
                        <div class="list-tabs table-list full-width">
                            <div class="tabs table-cell">
                                <ul class="nav nav-tabs">
                                    <li>
                                        <a data-toggle="tab" href="#all" class="active"  @if(isset($_REQUEST['sort']) && $_REQUEST['sort'] == 'all'): class="active" @endif >ALL</a>
                                    </li>
                                    <li>
                                        <a data-toggle="tab" href="#sale" @if(isset($_REQUEST['sort']) && $_REQUEST['sort'] == 'sale'): class="active" @endif@endif >FOR SALE</a>
                                    </li>
                                    <li>
                                        <a data-toggle="tab" href="#rent" @if(isset($_REQUEST['sort']) && $_REQUEST['sort'] == 'rent'): class="active" @endif >FOR RENT</a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                        <!--end list tabs-->
                        <div class="tab-content">



                            <!--start property items-->
                            <div class="property-listing list-view tab-pane fade @if(!(isset($_REQUEST['sort']))):  in active @endif @if(isset($_REQUEST['sort']) && $_REQUEST['sort'] == 'all'):  in active @endif" id="all" >
                                <div class="row">
                                    @foreach($AllProperty as $property)
                                        <?php $image = '355x240'.$property->image0; ?>
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
                                                                <p class="price-start">Start from</p>
                                                                @if($property->purpose == 'sell')
                                                                    <h3>Rs {{ $property->price }}</h3>
                                                                @else
                                                                    <p class="rant">Rs {{ $property->price }}/mo</p>
                                                                @endif
                                                            </div>
                                                            <a href="/property-detail/{{ $property->id  }}/{{ preg_replace('/\.\s|[^a-zA-Z\.\-0-9]+/', '-', $property->title)  }}">
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
                                                            <h2 class="property-title"><a href="/property-detail/{{ $property->id  }}/{{ preg_replace('/\.\s|[^a-zA-Z\.\-0-9]+/', '-', $property->title)  }}">{{ $property->title }}</a></h2>
                                                            <h4 class="property-location">{{  $property->city  }} {{  $property->region }}</h4>
                                                        </div>
                                                        <div class="info-row amenities hide-on-grid">
                                                            <p>
                                                                <span>Beds: {{ $property->beds }}</span>
                                                                <span>Baths: {{ $property->bathroom }}</span>
                                                                <span>{{ $property->area_unit }}: {{ $property->area }}</span>
                                                            </p>
                                                            <p>{{ $property->subtype }}</p>
                                                        </div>
                                                        <div class="info-row date hide-on-grid">
                                                            <p><i class="fa fa-user"></i> <a href="#">{{ $Agent->first_name }} {{ $Agent->last_name }}</a></p>
                                                            <p><i class="fa fa-calendar"></i> {{ $property->created_at->diff(new DateTime())->format('%a Days Ago') }} </p>
                                                        </div>
                                                    </div>
                                                    <div class="body-right table-cell hidden-gird-cell">
                                                        <div class="info-row price">
                                                            <p class="price-start">Start from</p>
                                                            @if($property->purpose == 'sell')
                                                                <h3>Rs {{ $property->price }}</h3>
                                                            @else
                                                                <p class="rant">Rs {{ $property->price }}/mo</p>
                                                            @endif
                                                        </div>
                                                        <div class="info-row phone text-right">
                                                            <a href="/property-detail/{{ $property->id  }}/{{ preg_replace('/\.\s|[^a-zA-Z\.\-0-9]+/', '-', $property->title)  }}" class="btn btn-primary">Details <i class="fa fa-angle-right fa-right"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="table-list full-width hide-on-list">
                                                        <div class="cell">
                                                            <div class="info-row amenities">
                                                                <p>
                                                                    <span>Beds: {{ $property->beds }}</span>
                                                                    <span>Baths: {{ $property->bathroom }}</span>
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
                                            <div class="item-foot date hide-on-list">
                                                <div class="item-foot-left">
                                                    <p><i class="fa fa-user"></i> <a href="/property-detail/{{ $property->id  }}/{{ preg_replace('/\.\s|[^a-zA-Z\.\-0-9]+/', '-', $property->title)  }}">{{ $property->title }}</a></p>
                                                </div>
                                                <div class="item-foot-right">
                                                    <p><i class="fa fa-calendar"></i> {{ $property->created_at->diff(new DateTime())->format('%a Days Ago') }} </p>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>

                                @if(empty($AllProperty)):
                                <div class="row">
                                    <div class="col-sm-12">
                                        <p> Currently No Property Found</p>
                                    </div>
                                </div>
                                @endif
                                <hr>
                                <!--start Pagination-->
                                <div class="pagination-main">
                                    {{ $AllProperty->appends(['sort' => 'all'])->render() }}
                                </div>
                                <!--start Pagination-->
                            </div>
                            <!--end property items-->

                            <!--start property items-->
                            <div class="property-listing list-view tab-pane fade  @if(isset($_REQUEST['sort']) && $_REQUEST['sort'] == 'sale'):  in active @endif" id="sale" >
                                <div class="row">
                                    @foreach($SellProperty as $property)
                                        <?php $image = '355x240'.$property->image0; ?>
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
                                                                <p class="price-start">Start from</p>
                                                                @if($property->purpose == 'sell')
                                                                    <h3>Rs {{ $property->price }}</h3>
                                                                @else
                                                                    <p class="rant">Rs {{ $property->price }}/mo</p>
                                                                @endif
                                                            </div>
                                                            <a href="/property-detail/{{ $property->id  }}/{{ preg_replace('/\.\s|[^a-zA-Z\.\-0-9]+/', '-', $property->title)  }}">
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
                                                            <h2 class="property-title"><a href="/property-detail/{{ $property->id  }}/{{ preg_replace('/\.\s|[^a-zA-Z\.\-0-9]+/', '-', $property->title)  }}">{{ $property->title }}</a></h2>
                                                            <h4 class="property-location">{{  $property->city  }} {{  $property->region }}</h4>
                                                        </div>
                                                        <div class="info-row amenities hide-on-grid">
                                                            <p>
                                                                <span>Beds: {{ $property->beds }}</span>
                                                                <span>Baths: {{ $property->bathroom }}</span>
                                                                <span>{{ $property->area_unit }}: {{ $property->area }}</span>
                                                            </p>
                                                            <p>{{ $property->subtype }}</p>
                                                        </div>
                                                        <div class="info-row date hide-on-grid">
                                                            <p><i class="fa fa-user"></i> <a href="#">{{ $Agent->first_name }} {{ $Agent->last_name }}</a></p>
                                                            <p><i class="fa fa-calendar"></i> {{ $property->created_at->diff(new DateTime())->format('%a Days Ago') }} </p>
                                                        </div>
                                                    </div>
                                                    <div class="body-right table-cell hidden-gird-cell">
                                                        <div class="info-row price">
                                                            <p class="price-start">Start from</p>
                                                            @if($property->purpose == 'sell')
                                                                <h3>Rs {{ $property->price }}</h3>
                                                            @else
                                                                <p class="rant">Rs {{ $property->price }}/mo</p>
                                                            @endif
                                                        </div>
                                                        <div class="info-row phone text-right">
                                                            <a href="/property-detail/{{ $property->id  }}/{{ preg_replace('/\.\s|[^a-zA-Z\.\-0-9]+/', '-', $property->title)  }}" class="btn btn-primary">Details <i class="fa fa-angle-right fa-right"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="table-list full-width hide-on-list">
                                                        <div class="cell">
                                                            <div class="info-row amenities">
                                                                <p>
                                                                    <span>Beds: {{ $property->beds }}</span>
                                                                    <span>Baths: {{ $property->bathroom }}</span>
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
                                            <div class="item-foot date hide-on-list">
                                                <div class="item-foot-left">
                                                    <p><i class="fa fa-user"></i> <a href="/property-detail/{{ $property->id  }}/{{ preg_replace('/\.\s|[^a-zA-Z\.\-0-9]+/', '-', $property->title)  }}">{{ $property->title }}</a></p>
                                                </div>
                                                <div class="item-foot-right">
                                                    <p><i class="fa fa-calendar"></i> {{ $property->created_at->diff(new DateTime())->format('%a Days Ago') }} </p>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>

                                @if(empty($SellProperty)):
                                <div class="row">
                                    <div class="col-sm-12">
                                        <p> Currently No Property Found</p>
                                    </div>
                                </div>
                                @endif
                                <hr>
                                <!--start Pagination-->
                                <div class="pagination-main">
                                    {{ $SellProperty->appends(['sort' => 'sale'])->render() }}
                                </div>
                                <!--start Pagination-->
                            </div>
                            <!--end property items-->
                            <!--start property items-->
                            <div class="property-listing list-view tab-pane fade  @if(isset($_REQUEST['sort']) && $_REQUEST['sort'] == 'rent'):  in active @endif" id="rent" >
                                <div class="row">
                                    @foreach($RentProperty as $property)
                                        <?php $image = '355x240'.$property->image0; ?>
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
                                                                <p class="price-start">Start from</p>
                                                                @if($property->purpose == 'sell')
                                                                    <h3>Rs {{ $property->price }}</h3>
                                                                @else
                                                                    <p class="rant">Rs {{ $property->price }}/mo</p>
                                                                @endif
                                                            </div>
                                                            <a href="/property-detail/{{ $property->id  }}/{{ preg_replace('/\.\s|[^a-zA-Z\.\-0-9]+/', '-', $property->title)  }}">
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
                                                            <h2 class="property-title"><a href="/property-detail/{{ $property->id  }}/{{ preg_replace('/\.\s|[^a-zA-Z\.\-0-9]+/', '-', $property->title)  }}">{{ $property->title }}</a></h2>
                                                            <h4 class="property-location">{{  $property->city  }} {{  $property->region }}</h4>
                                                        </div>
                                                        <div class="info-row amenities hide-on-grid">
                                                            <p>
                                                                <span>Beds: {{ $property->beds }}</span>
                                                                <span>Baths: {{ $property->bathroom }}</span>
                                                                <span>{{ $property->area_unit }}: {{ $property->area }}</span>
                                                            </p>
                                                            <p>{{ $property->subtype }}</p>
                                                        </div>
                                                        <div class="info-row date hide-on-grid">
                                                            <p><i class="fa fa-user"></i> <a href="#">{{ $Agent->first_name }} {{ $Agent->last_name }}</a></p>
                                                            <p><i class="fa fa-calendar"></i> {{ $property->created_at->diff(new DateTime())->format('%a Days Ago') }} </p>
                                                        </div>
                                                    </div>
                                                    <div class="body-right table-cell hidden-gird-cell">
                                                        <div class="info-row price">
                                                            <p class="price-start">Start from</p>
                                                            @if($property->purpose == 'sell')
                                                                <h3>Rs {{ $property->price }}</h3>
                                                            @else
                                                                <p class="rant">Rs {{ $property->price }}/mo</p>
                                                            @endif
                                                        </div>
                                                        <div class="info-row phone text-right">
                                                            <a href="/property-detail/{{ $property->id  }}/{{ preg_replace('/\.\s|[^a-zA-Z\.\-0-9]+/', '-', $property->title)  }}" class="btn btn-primary">Details <i class="fa fa-angle-right fa-right"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="table-list full-width hide-on-list">
                                                        <div class="cell">
                                                            <div class="info-row amenities">
                                                                <p>
                                                                    <span>Beds: {{ $property->beds }}</span>
                                                                    <span>Baths: {{ $property->bathroom }}</span>
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
                                            <div class="item-foot date hide-on-list">
                                                <div class="item-foot-left">
                                                    <p><i class="fa fa-user"></i> <a href="/property-detail/{{ $property->id  }}/{{ preg_replace('/\.\s|[^a-zA-Z\.\-0-9]+/', '-', $property->title)  }}">{{ $property->title }}</a></p>
                                                </div>
                                                <div class="item-foot-right">
                                                    <p><i class="fa fa-calendar"></i> {{ $property->created_at->diff(new DateTime())->format('%a Days Ago') }} </p>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                @if(empty($RentProperty)):
                                <div class="row">
                                    <div class="col-sm-12">
                                        <p> Currently No Property Found</p>
                                    </div>
                                </div>
                                @endif
                                <hr>
                                <!--start Pagination-->
                                <div class="pagination-main">
                                    {{ $RentProperty->appends(['sort' => 'rent'])->render() }}
                                </div>
                                <!--start Pagination-->
                            </div>
                            <!--end property items-->


                        </div>


                    </div>
                </div>

                <!--start advanced search section-->
            @include('layouts.leftsidebar')
            <!--end advanced search section-->
            </div>
        </div>
    </section>
    <!--end section page body-->
    @Stop