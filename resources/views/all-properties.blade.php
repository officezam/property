@extends('layouts.app')
@section('content')

    <!--start advanced search section-->
    @include('layouts.advance_search')
    <!--end advanced search section -->

    <!--start section page body-->
    <section id="section-body">
        <div class="container">
            <div class="page-title breadcrumb-top">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-left">
                            <h2>All Properties</h2>
                        </div>
                        <div class="page-title-right">
                            <div class="view hidden-xs">
                                <div class="table-cell">
                                    <span class="view-btn btn-list active"><i class="fa fa-th-list"></i></span>
                                    <span class="view-btn btn-grid"><i class="fa fa-th-large"></i></span>
                                    <span class="view-btn btn-grid-3-col"><i class="fa fa-th"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-8 list-grid-area">
                    <div id="content-area">


                        <!--start property items-->
                        <div class="property-listing list-view">
                            <div class="row">
                                @foreach($properties as $property)
                                    <?php $image = '385x258'.$property->image0; ?>
                                    <div class="item-wrap">
                                        <div class="property-item table-list">
                                            <div class="table-cell">
                                                <div class="figure-block">
                                                    <figure class="item-thumb">
                                                        <span class="label-featured label label-success">Featured</span>
                                                        <div class="label-wrap hide-on-list">
                                                            <span class="label label-default">For {{ $property->purpose }}</span>
                                                        </div>
                                                        <div class="price hide-on-list">
                                                            @if($property->purpose == 'sell'):
                                                            <h3>Rs {{ $property->price }}</h3>
                                                            @else:
                                                            <p class="rant">Rs {{ $property->price }}/mo</p>
                                                            @endif
                                                        </div>
                                                        <a href="/property-detail/{{ $property->id  }}/{{ preg_replace('/\.\s|[^a-zA-Z\.\-0-9]+/', '-', $property->title)  }}">
                                                            <img src="{{ asset('public/propetyImages/'.$property->id.'/'.$image)  }}" alt="{{ $property->title }}">
                                                        </a>
                                                        <div class="thumb-caption clearfix">
                                                            <ul class="actions pull-right">
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
                                                                    <span title="" data-placement="top" data-toggle="tooltip" data-original-title="share">
                                                                        <i class="fa fa-share-alt"></i>
                                                                    </span>
                                                                </li>
                                                                <li>
                                                                <span data-toggle="tooltip" data-placement="top" title="Photos (12)">
                                                                    <i class="fa fa-camera"></i> <!--<span class="count">(12)</span>-->
                                                                </span>
                                                                </li>
                                                            </ul>
                                                        </div>
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
                                                        <h4 class="property-location">7601 East Treasure Dr. Miami Beach, FL 33141</h4>
                                                    </div>
                                                    <div class="info-row amenities hide-on-grid">
                                                        {{--<p>--}}
                                                            {{--<span>Beds: {{ $property->beds }}</span>--}}
                                                            {{--<span>Baths: {{ $property->bathroom }}</span>--}}
                                                            {{--<span>{{ $property->area_unit }}: {{ $property->area }}</span>--}}
                                                        {{--</p>--}}
                                                        <p>{{ $property->subtype }}</p>
                                                    </div>
                                                    <div class="info-row date hide-on-grid">
                                                        <p><i class="fa fa-user"></i> <a href="#">{{  $property->city  }} {{  $property->region }}</a></p>
                                                        <p><i class="fa fa-calendar"></i> {{ $property->created_at->diff(new DateTime())->format('%a Days Ago') }} </p>
                                                    </div>
                                                </div>
                                                <div class="body-right table-cell hidden-gird-cell">
                                                    <div class="info-row price">
                                                        @if($property->purpose == 'sell'):
                                                        <h3>Rs {{ $property->price }}</h3>
                                                        @else:
                                                        <p class="rant">Rs {{ $property->price }}/mo</p>
                                                        @endif
                                                    </div>
                                                    <div class="info-row phone text-right">
                                                        <a href="/property-detail/{{ $property->id  }}/{{ preg_replace('/\.\s|[^a-zA-Z\.\-0-9]+/', '-', $property->title)  }}" class="btn btn-primary">Details <i class="fa fa-angle-right fa-right"></i></a>
{{--                                                        <p><a href="#">{{ $property->cell_phone }}</a></p>--}}
                                                    </div>
                                                </div>
                                                <div class="table-list full-width hide-on-list">
                                                    <div class="cell">
                                                        <div class="info-row amenities">
                                                            {{--<p>--}}
                                                                {{--<span>Beds: {{ $property->beds }}</span>--}}
                                                                {{--<span>Baths: {{ $property->bathroom }}</span>--}}
                                                                {{--<span>{{ $property->area_unit }}: {{ $property->area }}</span>--}}
                                                            {{--</p>--}}
                                                            <p>{{ $property->subtype }}</p>
                                                        </div>
                                                    </div>
                                                    <div class="cell">
                                                        <div class="phone">
                                                            <a href="/property-detail/{{ $property->id  }}/{{ preg_replace('/\.\s|[^a-zA-Z\.\-0-9]+/', '-', $property->title)  }}" class="btn btn-primary">Details <i class="fa fa-angle-right fa-right"></i></a>
                                                            {{--<p><a href="#">{{ $property->cell_phone }}</a></p>--}}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item-foot date hide-on-list">
                                            <div class="item-foot-left">
                                                <p><i class="fa fa-user"></i> <a href="/property-detail/{{ $property->id  }}/{{ preg_replace('/\.\s|[^a-zA-Z\.\-0-9]+/', '-', $property->title)  }}">{{  $property->city  }} {{  $property->region }}</a></p>
                                            </div>
                                            <div class="item-foot-right">
                                                <p><i class="fa fa-calendar"></i> {{ $property->created_at->diff(new DateTime())->format('%a Days Ago') }} </p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <!--end property items-->

                        <hr>

                        <!--start Pagination-->
                        <div class="pagination-main">
                            <ul class="pagination">
                                {{ $properties->render() }}
                            </ul>
                        </div>
                        <!--start Pagination-->

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