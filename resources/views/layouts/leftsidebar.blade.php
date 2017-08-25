<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 col-md-offset-0 col-sm-offset-3 container-sidebar">
    <aside id="sidebar" class="sidebar-white">
        {{--<div class="widget widget-range">--}}
            {{--<div class="widget-body">--}}
                {{--<form action="{{ url('Search-Result') }}" method="post">--}}
                    {{--{{ csrf_field() }}--}}
                    {{--<div class="range-block rang-form-block">--}}
                        {{--<div class="row">--}}
                            {{--<div class="col-sm-12 col-xs-12">--}}
                                {{--<div class="form-group">--}}
                                    {{--<input type="text" class="form-control" name="keyword" id="keywordsidebar" placeholder="Search" >--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="col-sm-12 col-xs-12">--}}
                                {{--<div class="form-group">--}}
                                    {{--<select name="city" class="selectpicker" data-live-search="false" data-live-search-style="begins" title="Property City">--}}
                                        {{--<option selected value="All">All Cities</option>--}}
                                        {{--@foreach($cities as $city)--}}
                                            {{--<option value="{{ $city->name }}">{{ $city->name }}</option>--}}
                                        {{--@endforeach--}}
                                    {{--</select>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="col-sm-12 col-xs-12">--}}
                                {{--<div class="form-group">--}}
                                    {{--<select name="type" class="selectpicker" data-live-search="false" data-live-search-style="begins" title="Property Type">--}}
                                        {{--<option selected value="All">All Type</option>--}}
                                        {{--<option value="projects"> Projects</option>--}}
                                        {{--<option value="house"> Residential / Homes</option>--}}
                                        {{--<option value="land"> Commercial / Land</option>--}}
                                    {{--</select>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="col-sm-12 col-xs-12">--}}
                                {{--<div class="form-group">--}}
                                    {{--<select name="agency" class="selectpicker" data-live-search="false" data-live-search-style="begins" title="Agency">--}}
                                        {{--<option selected value="All">All Agency</option>--}}
                                        {{--@foreach($Agents as $agent)--}}
                                            {{--<option value="{{ $agent->id }}"> {{ $agent->first_name.' '.$agent->last_name }}</option>--}}
                                        {{--@endforeach--}}
                                    {{--</select>--}}
                                {{--</div>--}}
                            {{--</div>--}}

                            {{--<div class="col-sm-12 col-xs-12">--}}
                                {{--<button type="submit" class="btn btn-secondary btn-block"> Search</button>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</form>--}}
            {{--</div>--}}
        {{--</div>--}}

        <div class="widget widget-rated">
            <div class="widget-body">
                @foreach($Adds as $add)
                    <?php $image = '370x202_'.$add->image; ?>
                    <div class="item">
                        <div class="figure-block">
                            <figure class="item-thumb">
                                <a href="{{ $add->webSite_url }}" class="hover-effect" target="_blank">
                                    <img src="{{ asset('public/AddsImages/'.$image)  }}" alt="{{ $add->webSite_url }}">
                                </a>
                            </figure>
                            <br>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="widget widget-slider">
            <div class="widget-top">
                <h3 class="widget-title">Featured Properties Slider</h3>
            </div>
            <div class="widget-body">
                <div class="property-widget-slider">

                    @foreach($AllProperty->slice(0, 5) as $property)
                        <?php $image = $property->id.'/370x202'.$property->image0; ?>

                        <div class="item">
                            <div class="figure-block">
                                <figure class="item-thumb">
                                    <span class="label-featured label label-success">Featured</span>
                                    <div class="label-wrap label-right">
                                        <span class="label-status label label-default">For {{ $property->purpose }}</span>

                                        <span class="label label-danger">Hot Offer</span>
                                    </div>
                                    <a href="#" class="hover-effect">
                                        <img src="{{ asset('public/propetyImages/'.$image)  }}" alt="{{ $property->title }}">
                                    </a>
                                    <div class="price">
                                        <span class="item-price">Rs {{ $property->price }}</span>
                                    </div>
                                    <ul class="actions">
                                        <li>
                                                    <span title="" data-placement="top" data-toggle="tooltip" data-original-title="Favorite">
                                                        <i class="fa fa-heart-o"></i>
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
                                    </ul>
                                </figure>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="widget widget-recommend">
            <div class="widget-top">
                <h3 class="widget-title">We recommend</h3>
            </div>
            <div class="widget-body">
                @foreach($AllProperty->slice(0,3) as $property)
                    <div class="media">
                        <div class="media-left">
                            <figure class="item-thumb">
                                <a class="hover-effect" href="/property-detail/{{ $property->id  }}/{{ preg_replace('/\s+/', '-', $property->title)  }}">
                                    <img  alt="{{ $property->title }}" src="{{ asset('public/propetyImages/'.$property->id.'/100x75'.$property->image0)}}" width="100" height="75">
                                </a>
                            </figure>
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading"><a href="/property-detail/{{ $property->id  }}/{{ preg_replace('/\s+/', '-', $property->title)  }}">{{ $property->title }}</a></h3>
                            <div class="rating">
                                <span class="star-text-left">Rs {{ $property->price }}</span>
                            </div>
                        </div>

                    </div>
                @endforeach

            </div>
        </div>
        <div class="widget widget-rated">
            <div class="widget-top">
                <h3 class="widget-title">Most Rated Properties</h3>
            </div>
            <div class="widget-body">
                @foreach($AllProperty->slice(0,3) as $property)
                    <div class="media">
                        <div class="media-left">
                            <figure class="item-thumb">
                                <a class="hover-effect" href="/property-detail/{{ $property->id  }}/{{ preg_replace('/\s+/', '-', $property->title)  }}">
                                    <img  alt="{{ $property->title }}" src="{{ asset('public/propetyImages/'.$property->id.'/100x75'.$property->image0)}}" width="100" height="75">
                                </a>
                            </figure>
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading"><a href="/property-detail/{{ $property->id  }}/{{ preg_replace('/\s+/', '-', $property->title)  }}">{{ $property->title }}</a></h3>
                            <div class="rating">
                                <span class="star-text-left">Rs {{ $property->price }}</span>
                            </div>

                        </div>
                    </div>
                @endforeach
            </div>
        </div>

    </aside>
</div>
