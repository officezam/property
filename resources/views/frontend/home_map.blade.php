@extends('layouts.dashboard')

@section('content')
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
                <button id="houzez-gmap-view" class="map-btn dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><i class="fa fa-globe"></i> <span>View</span></button>

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

    <!--start section page body-->
    <section id="section-body">

        <!--start carousel module-->
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
                                    <div class="item">
                                        <div class="item-wrap">
                                            <div class="property-item item-grid">
                                                <div class="figure-block">
                                                    <figure class="item-thumb">
                                                        <div class="label-wrap hide-on-list">
                                                            <div class="label-status label label-default">For Rent</div>
                                                        </div>
                                                        <span class="label-featured label label-success">Featured</span>
                                                        <div class="price hide-on-list">
                                                            <h3>$350,000</h3>
                                                            <p class="rant">$21,000/mo</p>
                                                        </div>
                                                        <a href="#" class="hover-effect">
                                                            <img src="http://placehold.it/355x240" alt="thumb">
                                                        </a>
                                                        <ul class="actions">
                                                            <li class="share-btn">
                                                                <div class="share_tooltip fade">
                                                                    <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                                                                    <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                                                                    <a href="#"  target="_blank"><i class="fa fa-google-plus"></i></a>
                                                                    <a href="#" target="_blank"><i class="fa fa-pinterest"></i></a>
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
                                                                <span class="bottom-ratings"><span class="fa fa-star-o"></span><span class="fa fa-star-o"></span><span class="fa fa-star-o"></span><span class="fa fa-star-o"></span><span class="fa fa-star-o"></span><span style="width: 70%" class="top-ratings"><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span></span></span>
                                                                <span class="star-text-right">15 Ratings</span>
                                                            </div>
                                                            <h2 class="property-title"><a href="#">Apartment Oceanview</a></h2>
                                                            <h4 class="property-location">7601 East Treasure Dr. Miami Beach, FL 33141</h4>
                                                        </div>
                                                        <div class="table-list full-width info-row">
                                                            <div class="cell">
                                                                <div class="info-row amenities">
                                                                    <p>
                                                                        <span>Beds: 3</span>
                                                                        <span>Baths: 2</span>
                                                                        <span>Sqft: 1,965</span>
                                                                    </p>
                                                                    <p>Single Family Home</p>
                                                                </div>
                                                            </div>
                                                            <div class="cell">
                                                                <div class="phone">
                                                                    <a href="#" class="btn btn-primary">Details <i class="fa fa-angle-right fa-right"></i></a>
                                                                    <p><a href="#">+1 (786) 225-0199</a></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="item-foot date hide-on-list">
                                                <div class="item-foot-left">
                                                    <p><i class="fa fa-user"></i> <a href="#">Elite Ocean View Realty LLC</a></p>
                                                </div>
                                                <div class="item-foot-right">
                                                    <p><i class="fa fa-calendar"></i> 12 Days ago </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="item-wrap">
                                            <div class="property-item item-grid">
                                                <div class="figure-block">
                                                    <figure class="item-thumb">
                                                        <div class="label-wrap hide-on-list">
                                                            <div class="label-status label label-default">For Rent</div>
                                                        </div>
                                                        <span class="label-featured label label-success">Featured</span>
                                                        <div class="price hide-on-list">
                                                            <h3>$350,000</h3>
                                                            <p class="rant">$21,000/mo</p>
                                                        </div>
                                                        <a href="#" class="hover-effect">
                                                            <img src="http://placehold.it/355x240" alt="thumb">
                                                        </a>
                                                        <ul class="actions">
                                                            <li class="share-btn">
                                                                <div class="share_tooltip fade">
                                                                    <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                                                                    <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                                                                    <a href="#"  target="_blank"><i class="fa fa-google-plus"></i></a>
                                                                    <a href="#" target="_blank"><i class="fa fa-pinterest"></i></a>
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
                                                                <span class="bottom-ratings"><span class="fa fa-star-o"></span><span class="fa fa-star-o"></span><span class="fa fa-star-o"></span><span class="fa fa-star-o"></span><span class="fa fa-star-o"></span><span style="width: 70%" class="top-ratings"><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span></span></span>
                                                                <span class="star-text-right">15 Ratings</span>
                                                            </div>
                                                            <h2 class="property-title"><a href="#">Apartment Oceanview</a></h2>
                                                            <h4 class="property-location">7601 East Treasure Dr. Miami Beach, FL 33141</h4>
                                                        </div>
                                                        <div class="table-list full-width info-row">
                                                            <div class="cell">
                                                                <div class="info-row amenities">
                                                                    <p>
                                                                        <span>Beds: 3</span>
                                                                        <span>Baths: 2</span>
                                                                        <span>Sqft: 1,965</span>
                                                                    </p>
                                                                    <p>Single Family Home</p>
                                                                </div>
                                                            </div>
                                                            <div class="cell">
                                                                <div class="phone">
                                                                    <a href="#" class="btn btn-primary">Details <i class="fa fa-angle-right fa-right"></i></a>
                                                                    <p><a href="#">+1 (786) 225-0199</a></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="item-foot date hide-on-list">
                                                <div class="item-foot-left">
                                                    <p><i class="fa fa-user"></i> <a href="#">Elite Ocean View Realty LLC</a></p>
                                                </div>
                                                <div class="item-foot-right">
                                                    <p><i class="fa fa-calendar"></i> 12 Days ago </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="item-wrap">
                                            <div class="property-item item-grid">
                                                <div class="figure-block">
                                                    <figure class="item-thumb">
                                                        <div class="label-wrap hide-on-list">
                                                            <div class="label-status label label-default">For Rent</div>
                                                        </div>
                                                        <span class="label-featured label label-success">Featured</span>
                                                        <div class="price hide-on-list">
                                                            <h3>$350,000</h3>
                                                            <p class="rant">$21,000/mo</p>
                                                        </div>
                                                        <a href="#" class="hover-effect">
                                                            <img src="http://placehold.it/355x240" alt="thumb">
                                                        </a>
                                                        <ul class="actions">
                                                            <li class="share-btn">
                                                                <div class="share_tooltip fade">
                                                                    <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                                                                    <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                                                                    <a href="#"  target="_blank"><i class="fa fa-google-plus"></i></a>
                                                                    <a href="#" target="_blank"><i class="fa fa-pinterest"></i></a>
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
                                                                <span class="bottom-ratings"><span class="fa fa-star-o"></span><span class="fa fa-star-o"></span><span class="fa fa-star-o"></span><span class="fa fa-star-o"></span><span class="fa fa-star-o"></span><span style="width: 70%" class="top-ratings"><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span></span></span>
                                                                <span class="star-text-right">15 Ratings</span>
                                                            </div>
                                                            <h2 class="property-title"><a href="#">Apartment Oceanview</a></h2>
                                                            <h4 class="property-location">7601 East Treasure Dr. Miami Beach, FL 33141</h4>
                                                        </div>
                                                        <div class="table-list full-width info-row">
                                                            <div class="cell">
                                                                <div class="info-row amenities">
                                                                    <p>
                                                                        <span>Beds: 3</span>
                                                                        <span>Baths: 2</span>
                                                                        <span>Sqft: 1,965</span>
                                                                    </p>
                                                                    <p>Single Family Home</p>
                                                                </div>
                                                            </div>
                                                            <div class="cell">
                                                                <div class="phone">
                                                                    <a href="#" class="btn btn-primary">Details <i class="fa fa-angle-right fa-right"></i></a>
                                                                    <p><a href="#">+1 (786) 225-0199</a></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="item-foot date hide-on-list">
                                                <div class="item-foot-left">
                                                    <p><i class="fa fa-user"></i> <a href="#">Elite Ocean View Realty LLC</a></p>
                                                </div>
                                                <div class="item-foot-right">
                                                    <p><i class="fa fa-calendar"></i> 12 Days ago </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="item-wrap">
                                            <div class="property-item item-grid">
                                                <div class="figure-block">
                                                    <figure class="item-thumb">
                                                        <div class="label-wrap hide-on-list">
                                                            <div class="label-status label label-default">For Rent</div>
                                                        </div>
                                                        <span class="label-featured label label-success">Featured</span>
                                                        <div class="price hide-on-list">
                                                            <h3>$350,000</h3>
                                                            <p class="rant">$21,000/mo</p>
                                                        </div>
                                                        <a href="#" class="hover-effect">
                                                            <img src="http://placehold.it/355x240" alt="thumb">
                                                        </a>
                                                        <ul class="actions">
                                                            <li class="share-btn">
                                                                <div class="share_tooltip fade">
                                                                    <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                                                                    <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                                                                    <a href="#"  target="_blank"><i class="fa fa-google-plus"></i></a>
                                                                    <a href="#" target="_blank"><i class="fa fa-pinterest"></i></a>
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
                                                                <span class="bottom-ratings"><span class="fa fa-star-o"></span><span class="fa fa-star-o"></span><span class="fa fa-star-o"></span><span class="fa fa-star-o"></span><span class="fa fa-star-o"></span><span style="width: 70%" class="top-ratings"><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span></span></span>
                                                                <span class="star-text-right">15 Ratings</span>
                                                            </div>
                                                            <h2 class="property-title"><a href="#">Apartment Oceanview</a></h2>
                                                            <h4 class="property-location">7601 East Treasure Dr. Miami Beach, FL 33141</h4>
                                                        </div>
                                                        <div class="table-list full-width info-row">
                                                            <div class="cell">
                                                                <div class="info-row amenities">
                                                                    <p>
                                                                        <span>Beds: 3</span>
                                                                        <span>Baths: 2</span>
                                                                        <span>Sqft: 1,965</span>
                                                                    </p>
                                                                    <p>Single Family Home</p>
                                                                </div>
                                                            </div>
                                                            <div class="cell">
                                                                <div class="phone">
                                                                    <a href="#" class="btn btn-primary">Details <i class="fa fa-angle-right fa-right"></i></a>
                                                                    <p><a href="#">+1 (786) 225-0199</a></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="item-foot date hide-on-list">
                                                <div class="item-foot-left">
                                                    <p><i class="fa fa-user"></i> <a href="#">Elite Ocean View Realty LLC</a></p>
                                                </div>
                                                <div class="item-foot-right">
                                                    <p><i class="fa fa-calendar"></i> 12 Days ago </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="item-wrap">
                                            <div class="property-item item-grid">
                                                <div class="figure-block">
                                                    <figure class="item-thumb">
                                                        <div class="label-wrap hide-on-list">
                                                            <div class="label-status label label-default">For Rent</div>
                                                        </div>
                                                        <span class="label-featured label label-success">Featured</span>
                                                        <div class="price hide-on-list">
                                                            <h3>$350,000</h3>
                                                            <p class="rant">$21,000/mo</p>
                                                        </div>
                                                        <a href="#" class="hover-effect">
                                                            <img src="http://placehold.it/355x240" alt="thumb">
                                                        </a>
                                                        <ul class="actions">
                                                            <li class="share-btn">
                                                                <div class="share_tooltip fade">
                                                                    <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                                                                    <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                                                                    <a href="#"  target="_blank"><i class="fa fa-google-plus"></i></a>
                                                                    <a href="#" target="_blank"><i class="fa fa-pinterest"></i></a>
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
                                                                <span class="bottom-ratings"><span class="fa fa-star-o"></span><span class="fa fa-star-o"></span><span class="fa fa-star-o"></span><span class="fa fa-star-o"></span><span class="fa fa-star-o"></span><span style="width: 70%" class="top-ratings"><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span></span></span>
                                                                <span class="star-text-right">15 Ratings</span>
                                                            </div>
                                                            <h2 class="property-title"><a href="#">Apartment Oceanview</a></h2>
                                                            <h4 class="property-location">7601 East Treasure Dr. Miami Beach, FL 33141</h4>
                                                        </div>
                                                        <div class="table-list full-width info-row">
                                                            <div class="cell">
                                                                <div class="info-row amenities">
                                                                    <p>
                                                                        <span>Beds: 3</span>
                                                                        <span>Baths: 2</span>
                                                                        <span>Sqft: 1,965</span>
                                                                    </p>
                                                                    <p>Single Family Home</p>
                                                                </div>
                                                            </div>
                                                            <div class="cell">
                                                                <div class="phone">
                                                                    <a href="#" class="btn btn-primary">Details <i class="fa fa-angle-right fa-right"></i></a>
                                                                    <p><a href="#">+1 (786) 225-0199</a></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="item-foot date hide-on-list">
                                                <div class="item-foot-left">
                                                    <p><i class="fa fa-user"></i> <a href="#">Elite Ocean View Realty LLC</a></p>
                                                </div>
                                                <div class="item-foot-right">
                                                    <p><i class="fa fa-calendar"></i> 12 Days ago </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="item-wrap">
                                            <div class="property-item item-grid">
                                                <div class="figure-block">
                                                    <figure class="item-thumb">
                                                        <div class="label-wrap hide-on-list">
                                                            <div class="label-status label label-default">For Rent</div>
                                                        </div>
                                                        <span class="label-featured label label-success">Featured</span>
                                                        <div class="price hide-on-list">
                                                            <h3>$350,000</h3>
                                                            <p class="rant">$21,000/mo</p>
                                                        </div>
                                                        <a href="#" class="hover-effect">
                                                            <img src="http://placehold.it/355x240" alt="thumb">
                                                        </a>
                                                        <ul class="actions">
                                                            <li class="share-btn">
                                                                <div class="share_tooltip fade">
                                                                    <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                                                                    <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                                                                    <a href="#"  target="_blank"><i class="fa fa-google-plus"></i></a>
                                                                    <a href="#" target="_blank"><i class="fa fa-pinterest"></i></a>
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
                                                                <span class="bottom-ratings"><span class="fa fa-star-o"></span><span class="fa fa-star-o"></span><span class="fa fa-star-o"></span><span class="fa fa-star-o"></span><span class="fa fa-star-o"></span><span style="width: 70%" class="top-ratings"><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span></span></span>
                                                                <span class="star-text-right">15 Ratings</span>
                                                            </div>
                                                            <h2 class="property-title"><a href="#">Apartment Oceanview</a></h2>
                                                            <h4 class="property-location">7601 East Treasure Dr. Miami Beach, FL 33141</h4>
                                                        </div>
                                                        <div class="table-list full-width info-row">
                                                            <div class="cell">
                                                                <div class="info-row amenities">
                                                                    <p>
                                                                        <span>Beds: 3</span>
                                                                        <span>Baths: 2</span>
                                                                        <span>Sqft: 1,965</span>
                                                                    </p>
                                                                    <p>Single Family Home</p>
                                                                </div>
                                                            </div>
                                                            <div class="cell">
                                                                <div class="phone">
                                                                    <a href="#" class="btn btn-primary">Details <i class="fa fa-angle-right fa-right"></i></a>
                                                                    <p><a href="#">+1 (786) 225-0199</a></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="item-foot date hide-on-list">
                                                <div class="item-foot-left">
                                                    <p><i class="fa fa-user"></i> <a href="#">Elite Ocean View Realty LLC</a></p>
                                                </div>
                                                <div class="item-foot-right">
                                                    <p><i class="fa fa-calendar"></i> 12 Days ago </p>
                                                </div>
                                            </div>
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
                                    <div class="item">
                                        <div class="item-wrap">
                                            <div class="property-item item-grid">
                                                <div class="figure-block">
                                                    <figure class="item-thumb">
                                                        <div class="label-wrap hide-on-list">
                                                            <div class="label-status label label-default">For Rent</div>
                                                        </div>
                                                        <span class="label-featured label label-success">Featured</span>
                                                        <div class="price hide-on-list">
                                                            <h3>$350,000</h3>
                                                            <p class="rant">$21,000/mo</p>
                                                        </div>
                                                        <a href="#" class="hover-effect">
                                                            <img src="http://placehold.it/355x240" alt="thumb">
                                                        </a>
                                                        <ul class="actions">
                                                            <li class="share-btn">
                                                                <div class="share_tooltip fade">
                                                                    <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                                                                    <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                                                                    <a href="#"  target="_blank"><i class="fa fa-google-plus"></i></a>
                                                                    <a href="#" target="_blank"><i class="fa fa-pinterest"></i></a>
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
                                                                <span class="bottom-ratings"><span class="fa fa-star-o"></span><span class="fa fa-star-o"></span><span class="fa fa-star-o"></span><span class="fa fa-star-o"></span><span class="fa fa-star-o"></span><span style="width: 70%" class="top-ratings"><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span></span></span>
                                                                <span class="star-text-right">15 Ratings</span>
                                                            </div>
                                                            <h2 class="property-title"><a href="#">Apartment Oceanview</a></h2>
                                                            <h4 class="property-location">7601 East Treasure Dr. Miami Beach, FL 33141</h4>
                                                        </div>
                                                        <div class="table-list full-width info-row">
                                                            <div class="cell">
                                                                <div class="info-row amenities">
                                                                    <p>
                                                                        <span>Beds: 3</span>
                                                                        <span>Baths: 2</span>
                                                                        <span>Sqft: 1,965</span>
                                                                    </p>
                                                                    <p>Single Family Home</p>
                                                                </div>
                                                            </div>
                                                            <div class="cell">
                                                                <div class="phone">
                                                                    <a href="#" class="btn btn-primary">Details <i class="fa fa-angle-right fa-right"></i></a>
                                                                    <p><a href="#">+1 (786) 225-0199</a></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="item-foot date hide-on-list">
                                                <div class="item-foot-left">
                                                    <p><i class="fa fa-user"></i> <a href="#">Elite Ocean View Realty LLC</a></p>
                                                </div>
                                                <div class="item-foot-right">
                                                    <p><i class="fa fa-calendar"></i> 12 Days ago </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="item-wrap">
                                            <div class="property-item item-grid">
                                                <div class="figure-block">
                                                    <figure class="item-thumb">
                                                        <div class="label-wrap hide-on-list">
                                                            <div class="label-status label label-default">For Rent</div>
                                                        </div>
                                                        <span class="label-featured label label-success">Featured</span>
                                                        <div class="price hide-on-list">
                                                            <h3>$350,000</h3>
                                                            <p class="rant">$21,000/mo</p>
                                                        </div>
                                                        <a href="#" class="hover-effect">
                                                            <img src="http://placehold.it/355x240" alt="thumb">
                                                        </a>
                                                        <ul class="actions">
                                                            <li class="share-btn">
                                                                <div class="share_tooltip fade">
                                                                    <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                                                                    <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                                                                    <a href="#"  target="_blank"><i class="fa fa-google-plus"></i></a>
                                                                    <a href="#" target="_blank"><i class="fa fa-pinterest"></i></a>
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
                                                                <span class="bottom-ratings"><span class="fa fa-star-o"></span><span class="fa fa-star-o"></span><span class="fa fa-star-o"></span><span class="fa fa-star-o"></span><span class="fa fa-star-o"></span><span style="width: 70%" class="top-ratings"><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span></span></span>
                                                                <span class="star-text-right">15 Ratings</span>
                                                            </div>
                                                            <h2 class="property-title"><a href="#">Apartment Oceanview</a></h2>
                                                            <h4 class="property-location">7601 East Treasure Dr. Miami Beach, FL 33141</h4>
                                                        </div>
                                                        <div class="table-list full-width info-row">
                                                            <div class="cell">
                                                                <div class="info-row amenities">
                                                                    <p>
                                                                        <span>Beds: 3</span>
                                                                        <span>Baths: 2</span>
                                                                        <span>Sqft: 1,965</span>
                                                                    </p>
                                                                    <p>Single Family Home</p>
                                                                </div>
                                                            </div>
                                                            <div class="cell">
                                                                <div class="phone">
                                                                    <a href="#" class="btn btn-primary">Details <i class="fa fa-angle-right fa-right"></i></a>
                                                                    <p><a href="#">+1 (786) 225-0199</a></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="item-foot date hide-on-list">
                                                <div class="item-foot-left">
                                                    <p><i class="fa fa-user"></i> <a href="#">Elite Ocean View Realty LLC</a></p>
                                                </div>
                                                <div class="item-foot-right">
                                                    <p><i class="fa fa-calendar"></i> 12 Days ago </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="item-wrap">
                                            <div class="property-item item-grid">
                                                <div class="figure-block">
                                                    <figure class="item-thumb">
                                                        <div class="label-wrap hide-on-list">
                                                            <div class="label-status label label-default">For Rent</div>
                                                        </div>
                                                        <span class="label-featured label label-success">Featured</span>
                                                        <div class="price hide-on-list">
                                                            <h3>$350,000</h3>
                                                            <p class="rant">$21,000/mo</p>
                                                        </div>
                                                        <a href="#" class="hover-effect">
                                                            <img src="http://placehold.it/355x240" alt="thumb">
                                                        </a>
                                                        <ul class="actions">
                                                            <li class="share-btn">
                                                                <div class="share_tooltip fade">
                                                                    <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                                                                    <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                                                                    <a href="#"  target="_blank"><i class="fa fa-google-plus"></i></a>
                                                                    <a href="#" target="_blank"><i class="fa fa-pinterest"></i></a>
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
                                                                <span class="bottom-ratings"><span class="fa fa-star-o"></span><span class="fa fa-star-o"></span><span class="fa fa-star-o"></span><span class="fa fa-star-o"></span><span class="fa fa-star-o"></span><span style="width: 70%" class="top-ratings"><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span></span></span>
                                                                <span class="star-text-right">15 Ratings</span>
                                                            </div>
                                                            <h2 class="property-title"><a href="#">Apartment Oceanview</a></h2>
                                                            <h4 class="property-location">7601 East Treasure Dr. Miami Beach, FL 33141</h4>
                                                        </div>
                                                        <div class="table-list full-width info-row">
                                                            <div class="cell">
                                                                <div class="info-row amenities">
                                                                    <p>
                                                                        <span>Beds: 3</span>
                                                                        <span>Baths: 2</span>
                                                                        <span>Sqft: 1,965</span>
                                                                    </p>
                                                                    <p>Single Family Home</p>
                                                                </div>
                                                            </div>
                                                            <div class="cell">
                                                                <div class="phone">
                                                                    <a href="#" class="btn btn-primary">Details <i class="fa fa-angle-right fa-right"></i></a>
                                                                    <p><a href="#">+1 (786) 225-0199</a></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="item-foot date hide-on-list">
                                                <div class="item-foot-left">
                                                    <p><i class="fa fa-user"></i> <a href="#">Elite Ocean View Realty LLC</a></p>
                                                </div>
                                                <div class="item-foot-right">
                                                    <p><i class="fa fa-calendar"></i> 12 Days ago </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="item-wrap">
                                            <div class="property-item item-grid">
                                                <div class="figure-block">
                                                    <figure class="item-thumb">
                                                        <div class="label-wrap hide-on-list">
                                                            <div class="label-status label label-default">For Rent</div>
                                                        </div>
                                                        <span class="label-featured label label-success">Featured</span>
                                                        <div class="price hide-on-list">
                                                            <h3>$350,000</h3>
                                                            <p class="rant">$21,000/mo</p>
                                                        </div>
                                                        <a href="#" class="hover-effect">
                                                            <img src="http://placehold.it/355x240" alt="thumb">
                                                        </a>
                                                        <ul class="actions">
                                                            <li class="share-btn">
                                                                <div class="share_tooltip fade">
                                                                    <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                                                                    <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                                                                    <a href="#"  target="_blank"><i class="fa fa-google-plus"></i></a>
                                                                    <a href="#" target="_blank"><i class="fa fa-pinterest"></i></a>
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
                                                                <span class="bottom-ratings"><span class="fa fa-star-o"></span><span class="fa fa-star-o"></span><span class="fa fa-star-o"></span><span class="fa fa-star-o"></span><span class="fa fa-star-o"></span><span style="width: 70%" class="top-ratings"><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span></span></span>
                                                                <span class="star-text-right">15 Ratings</span>
                                                            </div>
                                                            <h2 class="property-title"><a href="#">Apartment Oceanview</a></h2>
                                                            <h4 class="property-location">7601 East Treasure Dr. Miami Beach, FL 33141</h4>
                                                        </div>
                                                        <div class="table-list full-width info-row">
                                                            <div class="cell">
                                                                <div class="info-row amenities">
                                                                    <p>
                                                                        <span>Beds: 3</span>
                                                                        <span>Baths: 2</span>
                                                                        <span>Sqft: 1,965</span>
                                                                    </p>
                                                                    <p>Single Family Home</p>
                                                                </div>
                                                            </div>
                                                            <div class="cell">
                                                                <div class="phone">
                                                                    <a href="#" class="btn btn-primary">Details <i class="fa fa-angle-right fa-right"></i></a>
                                                                    <p><a href="#">+1 (786) 225-0199</a></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="item-foot date hide-on-list">
                                                <div class="item-foot-left">
                                                    <p><i class="fa fa-user"></i> <a href="#">Elite Ocean View Realty LLC</a></p>
                                                </div>
                                                <div class="item-foot-right">
                                                    <p><i class="fa fa-calendar"></i> 12 Days ago </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="item-wrap">
                                            <div class="property-item item-grid">
                                                <div class="figure-block">
                                                    <figure class="item-thumb">
                                                        <div class="label-wrap hide-on-list">
                                                            <div class="label-status label label-default">For Rent</div>
                                                        </div>
                                                        <span class="label-featured label label-success">Featured</span>
                                                        <div class="price hide-on-list">
                                                            <h3>$350,000</h3>
                                                            <p class="rant">$21,000/mo</p>
                                                        </div>
                                                        <a href="#" class="hover-effect">
                                                            <img src="http://placehold.it/355x240" alt="thumb">
                                                        </a>
                                                        <ul class="actions">
                                                            <li class="share-btn">
                                                                <div class="share_tooltip fade">
                                                                    <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                                                                    <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                                                                    <a href="#"  target="_blank"><i class="fa fa-google-plus"></i></a>
                                                                    <a href="#" target="_blank"><i class="fa fa-pinterest"></i></a>
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
                                                                <span class="bottom-ratings"><span class="fa fa-star-o"></span><span class="fa fa-star-o"></span><span class="fa fa-star-o"></span><span class="fa fa-star-o"></span><span class="fa fa-star-o"></span><span style="width: 70%" class="top-ratings"><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span></span></span>
                                                                <span class="star-text-right">15 Ratings</span>
                                                            </div>
                                                            <h2 class="property-title"><a href="#">Apartment Oceanview</a></h2>
                                                            <h4 class="property-location">7601 East Treasure Dr. Miami Beach, FL 33141</h4>
                                                        </div>
                                                        <div class="table-list full-width info-row">
                                                            <div class="cell">
                                                                <div class="info-row amenities">
                                                                    <p>
                                                                        <span>Beds: 3</span>
                                                                        <span>Baths: 2</span>
                                                                        <span>Sqft: 1,965</span>
                                                                    </p>
                                                                    <p>Single Family Home</p>
                                                                </div>
                                                            </div>
                                                            <div class="cell">
                                                                <div class="phone">
                                                                    <a href="#" class="btn btn-primary">Details <i class="fa fa-angle-right fa-right"></i></a>
                                                                    <p><a href="#">+1 (786) 225-0199</a></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="item-foot date hide-on-list">
                                                <div class="item-foot-left">
                                                    <p><i class="fa fa-user"></i> <a href="#">Elite Ocean View Realty LLC</a></p>
                                                </div>
                                                <div class="item-foot-right">
                                                    <p><i class="fa fa-calendar"></i> 12 Days ago </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="item-wrap">
                                            <div class="property-item item-grid">
                                                <div class="figure-block">
                                                    <figure class="item-thumb">
                                                        <div class="label-wrap hide-on-list">
                                                            <div class="label-status label label-default">For Rent</div>
                                                        </div>
                                                        <span class="label-featured label label-success">Featured</span>
                                                        <div class="price hide-on-list">
                                                            <h3>$350,000</h3>
                                                            <p class="rant">$21,000/mo</p>
                                                        </div>
                                                        <a href="#" class="hover-effect">
                                                            <img src="http://placehold.it/355x240" alt="thumb">
                                                        </a>
                                                        <ul class="actions">
                                                            <li class="share-btn">
                                                                <div class="share_tooltip fade">
                                                                    <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                                                                    <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                                                                    <a href="#"  target="_blank"><i class="fa fa-google-plus"></i></a>
                                                                    <a href="#" target="_blank"><i class="fa fa-pinterest"></i></a>
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
                                                                <span class="bottom-ratings"><span class="fa fa-star-o"></span><span class="fa fa-star-o"></span><span class="fa fa-star-o"></span><span class="fa fa-star-o"></span><span class="fa fa-star-o"></span><span style="width: 70%" class="top-ratings"><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span></span></span>
                                                                <span class="star-text-right">15 Ratings</span>
                                                            </div>
                                                            <h2 class="property-title"><a href="#">Apartment Oceanview</a></h2>
                                                            <h4 class="property-location">7601 East Treasure Dr. Miami Beach, FL 33141</h4>
                                                        </div>
                                                        <div class="table-list full-width info-row">
                                                            <div class="cell">
                                                                <div class="info-row amenities">
                                                                    <p>
                                                                        <span>Beds: 3</span>
                                                                        <span>Baths: 2</span>
                                                                        <span>Sqft: 1,965</span>
                                                                    </p>
                                                                    <p>Single Family Home</p>
                                                                </div>
                                                            </div>
                                                            <div class="cell">
                                                                <div class="phone">
                                                                    <a href="#" class="btn btn-primary">Details <i class="fa fa-angle-right fa-right"></i></a>
                                                                    <p><a href="#">+1 (786) 225-0199</a></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="item-foot date hide-on-list">
                                                <div class="item-foot-left">
                                                    <p><i class="fa fa-user"></i> <a href="#">Elite Ocean View Realty LLC</a></p>
                                                </div>
                                                <div class="item-foot-right">
                                                    <p><i class="fa fa-calendar"></i> 12 Days ago </p>
                                                </div>
                                            </div>
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
                                        <img src="http://placehold.it/370x370" width="370" height="370" alt="Image">
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
                                        <img src="http://placehold.it/770x370" width="770" height="370" alt="Image">
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
                                        <img src="http://placehold.it/770x370" width="770" height="370" alt="Image">
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
                                        <img src="http://placehold.it/370x370" width="370" height="370" alt="Image">
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
                                <div class="col-sm-6">
                                    <div class="item-wrap">
                                        <div class="property-item item-grid">
                                            <div class="figure-block">
                                                <figure class="item-thumb">
                                                    <div class="label-wrap hide-on-list">
                                                        <div class="label-status label label-default">For Rent</div>
                                                    </div>
                                                    <span class="label-featured label label-success">Featured</span>
                                                    <div class="price hide-on-list">
                                                        <h3>$350,000</h3>
                                                        <p class="rant">$21,000/mo</p>
                                                    </div>
                                                    <a href="#" class="hover-effect">
                                                        <img src="http://placehold.it/355x240" alt="thumb">
                                                    </a>
                                                    <ul class="actions">
                                                        <li class="share-btn">
                                                            <div class="share_tooltip fade">
                                                                <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                                                                <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                                                                <a href="#"  target="_blank"><i class="fa fa-google-plus"></i></a>
                                                                <a href="#" target="_blank"><i class="fa fa-pinterest"></i></a>
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
                                                            <span class="bottom-ratings"><span class="fa fa-star-o"></span><span class="fa fa-star-o"></span><span class="fa fa-star-o"></span><span class="fa fa-star-o"></span><span class="fa fa-star-o"></span><span style="width: 70%" class="top-ratings"><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span></span></span>
                                                            <span class="star-text-right">15 Ratings</span>
                                                        </div>
                                                        <h2 class="property-title"><a href="#">Apartment Oceanview</a></h2>
                                                        <h4 class="property-location">7601 East Treasure Dr. Miami Beach, FL 33141</h4>
                                                    </div>
                                                    <div class="table-list full-width info-row">
                                                        <div class="cell">
                                                            <div class="info-row amenities">
                                                                <p>
                                                                    <span>Beds: 3</span>
                                                                    <span>Baths: 2</span>
                                                                    <span>Sqft: 1,965</span>
                                                                </p>
                                                                <p>Single Family Home</p>
                                                            </div>
                                                        </div>
                                                        <div class="cell">
                                                            <div class="phone">
                                                                <a href="#" class="btn btn-primary">Details <i class="fa fa-angle-right fa-right"></i></a>
                                                                <p><a href="#">+1 (786) 225-0199</a></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="item-foot date hide-on-list">
                                            <div class="item-foot-left">
                                                <p><i class="fa fa-user"></i> <a href="#">Elite Ocean View Realty LLC</a></p>
                                            </div>
                                            <div class="item-foot-right">
                                                <p><i class="fa fa-calendar"></i> 12 Days ago </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="item-wrap">
                                        <div class="property-item item-grid">
                                            <div class="figure-block">
                                                <figure class="item-thumb">
                                                    <div class="label-wrap hide-on-list">
                                                        <div class="label-status label label-default">For Rent</div>
                                                    </div>
                                                    <span class="label-featured label label-success">Featured</span>
                                                    <div class="price hide-on-list">
                                                        <h3>$350,000</h3>
                                                        <p class="rant">$21,000/mo</p>
                                                    </div>
                                                    <a href="#" class="hover-effect">
                                                        <img src="http://placehold.it/355x240" alt="thumb">
                                                    </a>
                                                    <ul class="actions">
                                                        <li class="share-btn">
                                                            <div class="share_tooltip fade">
                                                                <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                                                                <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                                                                <a href="#"  target="_blank"><i class="fa fa-google-plus"></i></a>
                                                                <a href="#" target="_blank"><i class="fa fa-pinterest"></i></a>
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
                                                            <span class="bottom-ratings"><span class="fa fa-star-o"></span><span class="fa fa-star-o"></span><span class="fa fa-star-o"></span><span class="fa fa-star-o"></span><span class="fa fa-star-o"></span><span style="width: 70%" class="top-ratings"><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span></span></span>
                                                            <span class="star-text-right">15 Ratings</span>
                                                        </div>
                                                        <h2 class="property-title"><a href="#">Apartment Oceanview</a></h2>
                                                        <h4 class="property-location">7601 East Treasure Dr. Miami Beach, FL 33141</h4>
                                                    </div>
                                                    <div class="table-list full-width info-row">
                                                        <div class="cell">
                                                            <div class="info-row amenities">
                                                                <p>
                                                                    <span>Beds: 3</span>
                                                                    <span>Baths: 2</span>
                                                                    <span>Sqft: 1,965</span>
                                                                </p>
                                                                <p>Single Family Home</p>
                                                            </div>
                                                        </div>
                                                        <div class="cell">
                                                            <div class="phone">
                                                                <a href="#" class="btn btn-primary">Details <i class="fa fa-angle-right fa-right"></i></a>
                                                                <p><a href="#">+1 (786) 225-0199</a></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="item-foot date hide-on-list">
                                            <div class="item-foot-left">
                                                <p><i class="fa fa-user"></i> <a href="#">Elite Ocean View Realty LLC</a></p>
                                            </div>
                                            <div class="item-foot-right">
                                                <p><i class="fa fa-calendar"></i> 12 Days ago </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="agents-block">
                                <figure class="auther-thumb">
                                    <img src="http://placehold.it/71x71" alt="thumb" width="71" height="71" class="img-circle">
                                </figure>
                                <div class="web-logo text-center">
                                    <img src="images/houzez-logo-grey.png" alt="logo">
                                </div>
                                <div class="block-body">
                                    <p class="auther-info">
                                        <span>by <span class="blue">John Doe</span></span>
                                        <span>Founder & CEO, Company Name</span>
                                    </p>
                                    <p class="description">Lorem ipsum dolor sit cotetur
                                        adipiscing elit. Nam solltudin
                                        nulla vitae suscipit.
                                    </p>
                                    <a href="#" class="view">View profile</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="agents-block">
                                <figure class="auther-thumb">
                                    <img src="http://placehold.it/71x71" alt="thumb" width="71" height="71" class="img-circle">
                                </figure>
                                <div class="web-logo text-center">
                                    <img src="images/houzez-logo-grey.png" alt="logo">
                                </div>
                                <div class="block-body">
                                    <p class="auther-info">
                                        <span>by <span class="blue">John Doe</span></span>
                                        <span>Founder & CEO, Company Name</span>
                                    </p>
                                    <p class="description">Lorem ipsum dolor sit cotetur
                                        adipiscing elit. Nam solltudin
                                        nulla vitae suscipit.
                                    </p>
                                    <a href="#" class="view">View profile</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="agents-block">
                                <figure class="auther-thumb">
                                    <img src="http://placehold.it/71x71" alt="thumb" width="71" height="71" class="img-circle">
                                </figure>
                                <div class="web-logo text-center">
                                    <img src="images/houzez-logo-grey.png" alt="logo">
                                </div>
                                <div class="block-body">
                                    <p class="auther-info">
                                        <span>by <span class="blue">John Doe</span></span>
                                        <span>Founder & CEO, Company Name</span>
                                    </p>
                                    <p class="description">Lorem ipsum dolor sit cotetur
                                        adipiscing elit. Nam solltudin
                                        nulla vitae suscipit.
                                    </p>
                                    <a href="#" class="view">View profile</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="agents-block">
                                <figure class="auther-thumb">
                                    <img src="http://placehold.it/71x71" alt="thumb" width="71" height="71" class="img-circle">
                                </figure>
                                <div class="web-logo text-center">
                                    <img src="images/houzez-logo-grey.png" alt="logo">
                                </div>
                                <div class="block-body">
                                    <p class="auther-info">
                                        <span>by <span class="blue">John Doe</span></span>
                                        <span>Founder & CEO, Company Name</span>
                                    </p>
                                    <p class="description">Lorem ipsum dolor sit cotetur
                                        adipiscing elit. Nam solltudin
                                        nulla vitae suscipit.
                                    </p>
                                    <a href="#" class="view">View profile</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end agents module-->

    </section>
    <!--end section page body-->
@stop