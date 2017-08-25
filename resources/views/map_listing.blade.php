@extends('layouts.dashboard')
@section('content')
    <!--start section page body-->
    <section id="section-body" class="houzez-body-half">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-5 col-sm-5 col-xs-12 no-padding">
                    <div class="map-half fave-screen-fix">
                        <div id="houzez-gmap-main" class="fave-screen-fix">
                            <div class="mapPlaceholder">
                                <div class="loader-ripple">
                                    <div></div>
                                    <div></div>
                                </div>
                            </div>
                            <div id="map"></div>
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
                    </div>
                </div>
                <div class="col-md-7 col-sm-7 col-xs-12 no-padding">
                    <div class="module-half fave-screen-fix">

                        <div class="advanced-search houzez-adv-price-range">
                            <form method="post" action="#">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="form-group table-list search-long">
                                            <div class="input-search input-icon">
                                                <input type="text" class="form-control" value="" name="keyword" placeholder="Enter an address, town, street, or zip">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="form-group">
                                            <div class="search-location">
                                                <input class="form-control" type="text" placeholder="Location">
                                                <i class="location-trigger fa fa-dot-circle-o"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3 col-xs-4">
                                        <div class="form-group">
                                            <div class="radius-text-wrap">
                                                <label class="checkbox-inline">
                                                    <input value="option1" type="checkbox"> Radius: <strong><span id="area-range-text">0</span> km</strong>
                                                </label>
                                                <input type="hidden" id="area-range-value" value="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-9 col-xs-8">
                                        <div class="radius-range-wrap">
                                            <div id="area-range-slider"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3 col-sm-3 col-xs-6">
                                        <div class="form-group">
                                            <select class="selectpicker" name="status" data-live-search="false" data-live-search-style="begins">
                                                <option>Status 1</option>
                                                <option>Status 2</option>
                                                <option>Status 3</option>
                                                <option>Status 4</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xs-6">
                                        <div class="form-group">
                                            <select class="selectpicker" name="type" data-live-search="false" data-live-search-style="begins">
                                                <option>Type 1</option>
                                                <option>Type 2</option>
                                                <option>Type 3</option>
                                                <option>Type 4</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xs-6">
                                        <div class="form-group">
                                            <select name="bedrooms" class="selectpicker" data-live-search="false" data-live-search-style="begins" title="Bedrooms">
                                                <option>01</option>
                                                <option>02</option>
                                                <option>03</option>
                                                <option>04</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xs-6">
                                        <div class="form-group">
                                            <select name="bathrooms" class="selectpicker" data-live-search="false" data-live-search-style="begins" title="Bathrooms">
                                                <option>01</option>
                                                <option>02</option>
                                                <option>03</option>
                                                <option>04</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xs-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" value="" name="min-area" placeholder="Min Area">
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xs-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" value="" name="max-area" placeholder="Max Area">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                        <div class="form-group">
                                            <div class="input-calendar input-icon input-icon-right">
                                                <input name="publish_date" class="form-control input_date" placeholder="Available from" type="text">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-xs-12">
                                        <label class="advance-trigger"><i class="fa fa-plus-square"></i> Other Features </label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12 col-xs-12">
                                        <div class="features-list field-expand">
                                            <label class="checkbox-inline">
                                                <input value="option1" type="checkbox"> Feature
                                            </label>
                                            <label class="checkbox-inline">
                                                <input value="option2" type="checkbox"> Feature
                                            </label>
                                            <label class="checkbox-inline">
                                                <input value="option3" type="checkbox"> Feature
                                            </label>
                                            <label class="checkbox-inline">
                                                <input value="option1" type="checkbox"> Feature
                                            </label>
                                            <label class="checkbox-inline">
                                                <input value="option2" type="checkbox"> Feature
                                            </label>
                                            <label class="checkbox-inline">
                                                <input value="option3" type="checkbox"> Feature
                                            </label>
                                            <label class="checkbox-inline">
                                                <input value="option1" type="checkbox"> Feature
                                            </label>
                                            <label class="checkbox-inline">
                                                <input value="option2" type="checkbox"> Feature
                                            </label>
                                            <label class="checkbox-inline">
                                                <input value="option3" type="checkbox"> Feature
                                            </label>
                                            <label class="checkbox-inline">
                                                <input value="option1" type="checkbox"> Feature
                                            </label>
                                            <label class="checkbox-inline">
                                                <input value="option2" type="checkbox"> Feature
                                            </label>
                                            <label class="checkbox-inline">
                                                <input value="option3" type="checkbox"> Feature
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12 col-xs-12">
                                        <button type="submit" class="btn btn-primary btn-block">Update</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <!--start carousel module-->
                        <div class="houzez-module caption-above carousel-module">
                            <div class="row no-margin">
                                <div class="module-title-nav clearfix">
                                    <div>
                                        <h2>Featured Properties</h2>
                                    </div>
                                    <div class="module-nav">
                                        <button class="btn btn-sm btn-crl-2-prev">Prev</button>
                                        <button class="btn btn-sm btn-crl-2-next">Next</button>
                                        <a href="#" class="btn btn-carousel btn-sm">All</a>
                                    </div>
                                </div>
                                <div id="properties-carousel-2" class="carousel slide-animated">
                                    <div class="item">
                                        <div class="figure-block">
                                            <figure class="item-thumb">
                                                <div class="label-wrap label-left">
                                                    <span class="label label-success">Featured</span>
                                                    <span class="label-status label label-default">For Sale</span>
                                                </div>
                                                <a href="#" class="hover-effect">
                                                    <img src="http://placehold.it/584x349" width="584" height="349" alt="Image">
                                                </a>
                                                <ul class="actions">
                                                    <li>
                                                    <span title="" data-placement="bottom" data-toggle="tooltip" data-original-title="Favorite">
                                                        <i class="fa fa-heart-o"></i>
                                                    </span>
                                                    </li>
                                                    <li class="share-btn">
                                                        <div class="share_tooltip fade">
                                                            <a target="_blank" href="#"><i class="fa fa-facebook"></i></a>
                                                            <a target="_blank" href="#"><i class="fa fa-twitter"></i></a>
                                                            <a target="_blank" href="#"><i class="fa fa-google-plus"></i></a>
                                                            <a target="_blank" href="#"><i class="fa fa-pinterest"></i></a>
                                                        </div>
                                                        <span title="" data-placement="bottom" data-toggle="tooltip" data-original-title="share"><i class="fa fa-share-alt"></i></span>
                                                    </li>
                                                </ul>
                                                <div class="thumb-caption">
                                                    <div class="cap-price pull-left">$350,000</div>
                                                </div>
                                                <div class="detail-above detail">
                                                    <div class="fig-title clearfix">
                                                        <h3 class="pull-left">Apartment Oceanview</h3>
                                                    </div>

                                                    <ul class="list-inline">
                                                        <li class="cap-price">$350,000</li>
                                                        <li>2 bd</li>
                                                        <li>3 ba</li>
                                                        <li>1,287 sqft</li>
                                                    </ul>
                                                </div>
                                            </figure>
                                            <div class="detail-bottom detail">
                                                <h3>Apartment Oceanview</h3>
                                                <ul class="list-inline">
                                                    <li>2 bd</li>
                                                    <li>3 ba</li>
                                                    <li>1,287 sqft</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="figure-block">
                                            <figure class="item-thumb">
                                                <div class="label-wrap label-left">
                                                    <span class="label label-success">Featured</span>
                                                    <span class="label-status label label-default">For Sale</span>
                                                </div>
                                                <a href="#" class="hover-effect">
                                                    <img src="http://placehold.it/584x349" width="584" height="349" alt="Image">
                                                </a>
                                                <ul class="actions">
                                                    <li>
                                                    <span title="" data-placement="bottom" data-toggle="tooltip" data-original-title="Favorite">
                                                        <i class="fa fa-heart-o"></i>
                                                    </span>
                                                    </li>
                                                    <li class="share-btn">
                                                        <div class="share_tooltip fade">
                                                            <a target="_blank" href="#"><i class="fa fa-facebook"></i></a>
                                                            <a target="_blank" href="#"><i class="fa fa-twitter"></i></a>
                                                            <a target="_blank" href="#"><i class="fa fa-google-plus"></i></a>
                                                            <a target="_blank" href="#"><i class="fa fa-pinterest"></i></a>
                                                        </div>
                                                        <span title="" data-placement="bottom" data-toggle="tooltip" data-original-title="share"><i class="fa fa-share-alt"></i></span>
                                                    </li>
                                                </ul>
                                                <div class="thumb-caption">
                                                    <div class="cap-price pull-left">$350,000</div>
                                                </div>
                                                <div class="detail-above detail">
                                                    <div class="fig-title clearfix">
                                                        <h3 class="pull-left">Apartment Oceanview</h3>
                                                    </div>

                                                    <ul class="list-inline">
                                                        <li class="cap-price">$350,000</li>
                                                        <li>2 bd</li>
                                                        <li>3 ba</li>
                                                        <li>1,287 sqft</li>
                                                    </ul>
                                                </div>
                                            </figure>
                                            <div class="detail-bottom detail">
                                                <h3>Apartment Oceanview</h3>
                                                <ul class="list-inline">
                                                    <li>2 bd</li>
                                                    <li>3 ba</li>
                                                    <li>1,287 sqft</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="figure-block">
                                            <figure class="item-thumb">
                                                <div class="label-wrap label-left">
                                                    <span class="label label-success">Featured</span>
                                                    <span class="label-status label label-default">For Sale</span>
                                                </div>
                                                <a href="#" class="hover-effect">
                                                    <img src="http://placehold.it/584x349" width="584" height="349" alt="Image">
                                                </a>
                                                <ul class="actions">
                                                    <li>
                                                    <span title="" data-placement="top" data-toggle="tooltip" data-original-title="Favorite">
                                                        <i class="fa fa-heart-o"></i>
                                                    </span>
                                                    </li>
                                                    <li class="share-btn">
                                                        <div class="share_tooltip fade">
                                                            <a target="_blank" href="#"><i class="fa fa-facebook"></i></a>
                                                            <a target="_blank" href="#"><i class="fa fa-twitter"></i></a>
                                                            <a target="_blank" href="#"><i class="fa fa-google-plus"></i></a>
                                                            <a target="_blank" href="#"><i class="fa fa-pinterest"></i></a>
                                                        </div>
                                                        <span title="" data-placement="top" data-toggle="tooltip" data-original-title="share"><i class="fa fa-share-alt"></i></span>
                                                    </li>
                                                </ul>
                                                <div class="thumb-caption">
                                                    <div class="cap-price pull-left">$350,000</div>
                                                </div>
                                                <div class="detail-above detail">
                                                    <div class="fig-title clearfix">
                                                        <h3 class="pull-left">Apartment Oceanview</h3>
                                                    </div>

                                                    <ul class="list-inline">
                                                        <li class="cap-price">$350,000</li>
                                                        <li>2 bd</li>
                                                        <li>3 ba</li>
                                                        <li>1,287 sqft</li>
                                                    </ul>
                                                </div>
                                            </figure>
                                            <div class="detail-bottom detail">
                                                <h3>Apartment Oceanview</h3>
                                                <ul class="list-inline">
                                                    <li>2 bd</li>
                                                    <li>3 ba</li>
                                                    <li>1,287 sqft</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="figure-block">
                                            <figure class="item-thumb">
                                                <div class="label-wrap label-left">
                                                    <span class="label label-success">Featured</span>
                                                    <span class="label-status label label-default">For Sale</span>
                                                </div>
                                                <a href="#" class="hover-effect">
                                                    <img src="http://placehold.it/584x349" width="584" height="349" alt="Image">
                                                </a>
                                                <ul class="actions">
                                                    <li>
                                                    <span title="" data-placement="top" data-toggle="tooltip" data-original-title="Favorite">
                                                        <i class="fa fa-heart-o"></i>
                                                    </span>
                                                    </li>
                                                    <li class="share-btn">
                                                        <div class="share_tooltip fade">
                                                            <a target="_blank" href="#"><i class="fa fa-facebook"></i></a>
                                                            <a target="_blank" href="#"><i class="fa fa-twitter"></i></a>
                                                            <a target="_blank" href="#"><i class="fa fa-google-plus"></i></a>
                                                            <a target="_blank" href="#"><i class="fa fa-pinterest"></i></a>
                                                        </div>
                                                        <span title="" data-placement="top" data-toggle="tooltip" data-original-title="share"><i class="fa fa-share-alt"></i></span>
                                                    </li>
                                                </ul>
                                                <div class="thumb-caption">
                                                    <div class="cap-price pull-left">$350,000</div>
                                                </div>
                                                <div class="detail-above detail">
                                                    <div class="fig-title clearfix">
                                                        <h3 class="pull-left">Apartment Oceanview</h3>
                                                    </div>

                                                    <ul class="list-inline">
                                                        <li class="cap-price">$350,000</li>
                                                        <li>2 bd</li>
                                                        <li>3 ba</li>
                                                        <li>1,287 sqft</li>
                                                    </ul>
                                                </div>
                                            </figure>
                                            <div class="detail-bottom detail">
                                                <h3>Apartment Oceanview</h3>
                                                <ul class="list-inline">
                                                    <li>2 bd</li>
                                                    <li>3 ba</li>
                                                    <li>1,287 sqft</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="figure-block">
                                            <figure class="item-thumb">
                                                <div class="label-wrap label-left">
                                                    <span class="label label-success">Featured</span>
                                                    <span class="label-status label label-default">For Sale</span>
                                                </div>
                                                <a href="#" class="hover-effect">
                                                    <img src="http://placehold.it/584x349" width="584" height="349" alt="Image">
                                                </a>
                                                <ul class="actions">
                                                    <li>
                                                    <span title="" data-placement="top" data-toggle="tooltip" data-original-title="Favorite">
                                                        <i class="fa fa-heart-o"></i>
                                                    </span>
                                                    </li>
                                                    <li class="share-btn">
                                                        <div class="share_tooltip fade">
                                                            <a target="_blank" href="#"><i class="fa fa-facebook"></i></a>
                                                            <a target="_blank" href="#"><i class="fa fa-twitter"></i></a>
                                                            <a target="_blank" href="#"><i class="fa fa-google-plus"></i></a>
                                                            <a target="_blank" href="#"><i class="fa fa-pinterest"></i></a>
                                                        </div>
                                                        <span title="" data-placement="top" data-toggle="tooltip" data-original-title="share"><i class="fa fa-share-alt"></i></span>
                                                    </li>
                                                </ul>
                                                <div class="thumb-caption">
                                                    <div class="cap-price pull-left">$350,000</div>
                                                </div>
                                                <div class="detail-above detail">
                                                    <div class="fig-title clearfix">
                                                        <h3 class="pull-left">Apartment Oceanview</h3>
                                                    </div>

                                                    <ul class="list-inline">
                                                        <li class="cap-price">$350,000</li>
                                                        <li>2 bd</li>
                                                        <li>3 ba</li>
                                                        <li>1,287 sqft</li>
                                                    </ul>
                                                </div>
                                            </figure>
                                            <div class="detail-bottom detail">
                                                <h3>Apartment Oceanview</h3>
                                                <ul class="list-inline">
                                                    <li>2 bd</li>
                                                    <li>3 ba</li>
                                                    <li>1,287 sqft</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end carousel module-->

                        <!--start latest listing module-->
                        <div class="houzez-module">
                            <!--start list tabs-->
                            <div class="list-tabs table-list full-width">
                                <div class="tabs table-cell">
                                    <h2 class="tabs-title">Half Map</h2>
                                </div>
                                <div class="sort-tab table-cell text-right">
                                    <span class="view-btn btn-list active"><i class="fa fa-th-list"></i></span>
                                    <span class="view-btn btn-grid"><i class="fa fa-th-large"></i></span>
                                </div>
                            </div>
                            <!--end list tabs-->
                            <div class="property-listing list-view">
                                <div class="row">
                                    <div class="item-wrap ">
                                        <div class="property-item table-list">
                                            <div class="table-cell">
                                                <div class="figure-block">
                                                    <figure class="item-thumb">
                                                        <span class="label-featured label label-success">Featured</span>
                                                        <div class="price hide-on-list">
                                                            <h3>$350,000</h3>
                                                            <p class="rant">$21,000/mo</p>
                                                        </div>
                                                        <a href="#">
                                                            <img src="http://placehold.it/364x244" alt="thumb">
                                                        </a>
                                                        <div class="thumb-caption cap-actions clearfix">
                                                            <ul class="list-unstyled actions pull-right">
                                                                <li>
                                                                <span title="" data-placement="top" data-toggle="tooltip" data-original-title="Favorite">
                                                                    <i class="fa fa-heart"></i>
                                                                </span>
                                                                </li>
                                                                <li class="share-btn">
                                                                    <div class="share_tooltip fade">
                                                                        <a target="_blank" href="#"><i class="fa fa-facebook"></i></a>
                                                                        <a target="_blank" href="#"><i class="fa fa-twitter"></i></a>
                                                                        <a target="_blank" href="#"><i class="fa fa-google-plus"></i></a>
                                                                        <a target="_blank" href="#"><i class="fa fa-pinterest"></i></a>
                                                                    </div>
                                                                    <span title="" data-placement="top" data-toggle="tooltip" data-original-title="share"><i class="fa fa-share-alt"></i></span>
                                                                </li>
                                                                <li>
                                                                <span data-original-title="Photos (12)" data-toggle="tooltip" data-placement="top" title="">
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
                                                        <div class="rating">
                                                        <span data-title="Average Rate: 4.67 / 5" class="bottom-ratings tip"><span class="fa fa-star-o"></span><span class="fa fa-star-o"></span><span class="fa fa-star-o"></span><span class="fa fa-star-o"></span><span class="fa fa-star-o"></span><span style="width: 93.4%" class="top-ratings"><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span></span>
                                                        </span>
                                                            <span class="star-text-right">15 Ratings</span>
                                                        </div>
                                                        <h2 class="property-title"><a href="#">Apartment Oceanview</a></h2>
                                                        <h4 class="property-location">7601 East Treasure Dr. Miami Beach, FL 33141</h4>
                                                    </div>
                                                    <div class="info-row amenities hide-on-grid">
                                                        <p>
                                                            <span>Beds: 3</span>
                                                            <span>Baths: 2</span>
                                                            <span>Sqft: 1,965</span>
                                                        </p>
                                                        <p>Single Family Home</p>
                                                    </div>
                                                    <div class="info-row date hide-on-grid">
                                                        <p><i class="fa fa-user"></i> <a href="#">Elite Ocean View Realty LLC</a></p>
                                                        <p><i class="fa fa-calendar"></i> 12 Days ago </p>
                                                    </div>
                                                </div>
                                                <div class="body-right table-cell hidden-gird-cell">
                                                    <div class="info-row price">
                                                        <h3>$670,000</h3>
                                                        <p class="rant">$6,500/mo</p>
                                                    </div>
                                                    <div class="info-row phone text-right">
                                                        <a href="#" class="btn btn-primary">Details <i class="fa fa-angle-right fa-right"></i></a>
                                                    </div>
                                                </div>

                                                <div class="table-list full-width hide-on-list">
                                                    <div class="cell">
                                                        <div class="info-row amenities">
                                                            <p><span>Beds: 4</span><span>Baths: 2</span><span>Sq Ft: 1200</span></p>
                                                            <p>Single Family Home</p>
                                                        </div>
                                                    </div>
                                                    <div class="cell">
                                                        <div class="phone">
                                                            <a href="#" class="btn btn-primary"> Details <i class="fa fa-angle-right fa-right"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="item-foot date hide-on-list">
                                            <div class="item-foot-left">
                                                <p><i class="fa fa-user"></i> <a href="http://localhost/houzez-wp/agent/brittany-watkins/">Brittany Watkins</a></p>
                                            </div>
                                            <div class="item-foot-right">
                                                <p><i class="fa fa-calendar"></i>4 months ago</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item-wrap ">
                                        <div class="property-item table-list">
                                            <div class="table-cell">
                                                <div class="figure-block">
                                                    <figure class="item-thumb">
                                                        <span class="label-featured label label-success">Featured</span>
                                                        <div class="price hide-on-list">
                                                            <h3>$350,000</h3>
                                                            <p class="rant">$21,000/mo</p>
                                                        </div>
                                                        <a href="#">
                                                            <img src="http://placehold.it/364x244" alt="thumb">
                                                        </a>
                                                        <div class="thumb-caption cap-actions clearfix">
                                                            <ul class="list-unstyled actions pull-right">
                                                                <li>
                                                                <span title="" data-placement="top" data-toggle="tooltip" data-original-title="Favorite">
                                                                    <i class="fa fa-heart"></i>
                                                                </span>
                                                                </li>
                                                                <li class="share-btn">
                                                                    <div class="share_tooltip fade">
                                                                        <a target="_blank" href="#"><i class="fa fa-facebook"></i></a>
                                                                        <a target="_blank" href="#"><i class="fa fa-twitter"></i></a>
                                                                        <a target="_blank" href="#"><i class="fa fa-google-plus"></i></a>
                                                                        <a target="_blank" href="#"><i class="fa fa-pinterest"></i></a>
                                                                    </div>
                                                                    <span title="" data-placement="top" data-toggle="tooltip" data-original-title="share"><i class="fa fa-share-alt"></i></span>
                                                                </li>
                                                                <li>
                                                                <span data-original-title="Photos (12)" data-toggle="tooltip" data-placement="top" title="">
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
                                                        <div class="rating">
                                                        <span data-title="Average Rate: 4.67 / 5" class="bottom-ratings tip"><span class="fa fa-star-o"></span><span class="fa fa-star-o"></span><span class="fa fa-star-o"></span><span class="fa fa-star-o"></span><span class="fa fa-star-o"></span><span style="width: 93.4%" class="top-ratings"><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span></span>
                                                        </span>
                                                            <span class="star-text-right">15 Ratings</span>
                                                        </div>
                                                        <h2 class="property-title"><a href="#">Apartment Oceanview</a></h2>
                                                        <h4 class="property-location">7601 East Treasure Dr. Miami Beach, FL 33141</h4>
                                                    </div>
                                                    <div class="info-row amenities hide-on-grid">
                                                        <p>
                                                            <span>Beds: 3</span>
                                                            <span>Baths: 2</span>
                                                            <span>Sqft: 1,965</span>
                                                        </p>
                                                        <p>Single Family Home</p>
                                                    </div>
                                                    <div class="info-row date hide-on-grid">
                                                        <p><i class="fa fa-user"></i> <a href="#">Elite Ocean View Realty LLC</a></p>
                                                        <p><i class="fa fa-calendar"></i> 12 Days ago </p>
                                                    </div>
                                                </div>
                                                <div class="body-right table-cell hidden-gird-cell">
                                                    <div class="info-row price">
                                                        <h3>$670,000</h3>
                                                        <p class="rant">$6,500/mo</p>
                                                    </div>
                                                    <div class="info-row phone text-right">
                                                        <a href="#" class="btn btn-primary">Details <i class="fa fa-angle-right fa-right"></i></a>
                                                    </div>
                                                </div>

                                                <div class="table-list full-width hide-on-list">
                                                    <div class="cell">
                                                        <div class="info-row amenities">
                                                            <p><span>Beds: 4</span><span>Baths: 2</span><span>Sq Ft: 1200</span></p>
                                                            <p>Single Family Home</p>
                                                        </div>
                                                    </div>
                                                    <div class="cell">
                                                        <div class="phone">
                                                            <a href="#" class="btn btn-primary"> Details <i class="fa fa-angle-right fa-right"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="item-foot date hide-on-list">
                                            <div class="item-foot-left">
                                                <p><i class="fa fa-user"></i> <a href="http://localhost/houzez-wp/agent/brittany-watkins/">Brittany Watkins</a></p>
                                            </div>
                                            <div class="item-foot-right">
                                                <p><i class="fa fa-calendar"></i>4 months ago</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item-wrap ">
                                        <div class="property-item table-list">
                                            <div class="table-cell">
                                                <div class="figure-block">
                                                    <figure class="item-thumb">
                                                        <span class="label-featured label label-success">Featured</span>
                                                        <div class="price hide-on-list">
                                                            <h3>$350,000</h3>
                                                            <p class="rant">$21,000/mo</p>
                                                        </div>
                                                        <a href="#">
                                                            <img src="http://placehold.it/364x244" alt="thumb">
                                                        </a>
                                                        <div class="thumb-caption cap-actions clearfix">
                                                            <ul class="list-unstyled actions pull-right">
                                                                <li>
                                                                <span title="" data-placement="top" data-toggle="tooltip" data-original-title="Favorite">
                                                                    <i class="fa fa-heart"></i>
                                                                </span>
                                                                </li>
                                                                <li class="share-btn">
                                                                    <div class="share_tooltip fade">
                                                                        <a target="_blank" href="#"><i class="fa fa-facebook"></i></a>
                                                                        <a target="_blank" href="#"><i class="fa fa-twitter"></i></a>
                                                                        <a target="_blank" href="#"><i class="fa fa-google-plus"></i></a>
                                                                        <a target="_blank" href="#"><i class="fa fa-pinterest"></i></a>
                                                                    </div>
                                                                    <span title="" data-placement="top" data-toggle="tooltip" data-original-title="share"><i class="fa fa-share-alt"></i></span>
                                                                </li>
                                                                <li>
                                                                <span data-original-title="Photos (12)" data-toggle="tooltip" data-placement="top" title="">
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
                                                        <div class="label-wrap">
                                                            <div class="label-status label-status-7 label label-default">For Sale</div>
                                                        </div>
                                                        <h2 class="property-title"><a href="#">Modern apartment</a></h2>
                                                        <h4 class="property-location">S Exchange Ave</h4>
                                                    </div>
                                                    <div class="info-row amenities hide-on-grid">
                                                        <p><span>Beds: 4</span><span>Baths: 2</span><span>Sq Ft: 1200</span></p>                    <p>Apartment</p>
                                                    </div>
                                                    <div class="info-row date hide-on-grid">
                                                        <p><i class="fa fa-user"></i> <a href="http://localhost/houzez-wp/agent/brittany-watkins/">Brittany Watkins</a></p>
                                                        <p><i class="fa fa-calendar"></i>5 months ago</p>
                                                    </div>
                                                </div>
                                                <div class="body-right table-cell hidden-gird-cell">
                                                    <div class="info-row price">
                                                        <h3>$670,000</h3>
                                                        <p class="rant">$6,500/mo</p>
                                                    </div>
                                                    <div class="info-row phone text-right">
                                                        <a href="#" class="btn btn-primary">Details <i class="fa fa-angle-right fa-right"></i></a>
                                                    </div>
                                                </div>

                                                <div class="table-list full-width hide-on-list">
                                                    <div class="cell">
                                                        <div class="info-row amenities">
                                                            <p><span>Beds: 4</span><span>Baths: 2</span><span>Sq Ft: 1200</span></p>
                                                            <p>Single Family Home</p>
                                                        </div>
                                                    </div>
                                                    <div class="cell">
                                                        <div class="phone">
                                                            <a href="#" class="btn btn-primary"> Details <i class="fa fa-angle-right fa-right"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="item-foot date hide-on-list">
                                            <div class="item-foot-left">
                                                <p><i class="fa fa-user"></i> <a href="http://localhost/houzez-wp/agent/brittany-watkins/">Brittany Watkins</a></p>
                                            </div>
                                            <div class="item-foot-right">
                                                <p><i class="fa fa-calendar"></i>4 months ago</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item-wrap ">
                                        <div class="property-item table-list">
                                            <div class="table-cell">
                                                <div class="figure-block">
                                                    <figure class="item-thumb">
                                                        <span class="label-featured label label-success">Featured</span>
                                                        <div class="price hide-on-list">
                                                            <h3>$350,000</h3>
                                                            <p class="rant">$21,000/mo</p>
                                                        </div>
                                                        <a href="#">
                                                            <img src="http://placehold.it/364x244" alt="thumb">
                                                        </a>
                                                        <div class="thumb-caption cap-actions clearfix">
                                                            <ul class="list-unstyled actions pull-right">
                                                                <li>
                                                                <span title="" data-placement="top" data-toggle="tooltip" data-original-title="Favorite">
                                                                    <i class="fa fa-heart"></i>
                                                                </span>
                                                                </li>
                                                                <li class="share-btn">
                                                                    <div class="share_tooltip fade">
                                                                        <a target="_blank" href="#"><i class="fa fa-facebook"></i></a>
                                                                        <a target="_blank" href="#"><i class="fa fa-twitter"></i></a>
                                                                        <a target="_blank" href="#"><i class="fa fa-google-plus"></i></a>
                                                                        <a target="_blank" href="#"><i class="fa fa-pinterest"></i></a>
                                                                    </div>
                                                                    <span title="" data-placement="top" data-toggle="tooltip" data-original-title="share"><i class="fa fa-share-alt"></i></span>
                                                                </li>
                                                                <li>
                                                                <span data-original-title="Photos (12)" data-toggle="tooltip" data-placement="top" title="">
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
                                                        <div class="label-wrap">
                                                            <div class="label-status label-status-7 label label-default">For Sale</div>
                                                        </div>
                                                        <h2 class="property-title"><a href="#">Modern apartment</a></h2>
                                                        <h4 class="property-location">S Exchange Ave</h4>
                                                    </div>
                                                    <div class="info-row amenities hide-on-grid">
                                                        <p><span>Beds: 4</span><span>Baths: 2</span><span>Sq Ft: 1200</span></p>                    <p>Apartment</p>
                                                    </div>
                                                    <div class="info-row date hide-on-grid">
                                                        <p><i class="fa fa-user"></i> <a href="http://localhost/houzez-wp/agent/brittany-watkins/">Brittany Watkins</a></p>
                                                        <p><i class="fa fa-calendar"></i>5 months ago</p>
                                                    </div>
                                                </div>
                                                <div class="body-right table-cell hidden-gird-cell">
                                                    <div class="info-row price">
                                                        <h3>$670,000</h3>
                                                        <p class="rant">$6,500/mo</p>
                                                    </div>
                                                    <div class="info-row phone text-right">
                                                        <a href="#" class="btn btn-primary">Details <i class="fa fa-angle-right fa-right"></i></a>
                                                    </div>
                                                </div>

                                                <div class="table-list full-width hide-on-list">
                                                    <div class="cell">
                                                        <div class="info-row amenities">
                                                            <p><span>Beds: 4</span><span>Baths: 2</span><span>Sq Ft: 1200</span></p>
                                                            <p>Single Family Home</p>
                                                        </div>
                                                    </div>
                                                    <div class="cell">
                                                        <div class="phone">
                                                            <a href="#" class="btn btn-primary"> Details <i class="fa fa-angle-right fa-right"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="item-foot date hide-on-list">
                                            <div class="item-foot-left">
                                                <p><i class="fa fa-user"></i> <a href="http://localhost/houzez-wp/agent/brittany-watkins/">Brittany Watkins</a></p>
                                            </div>
                                            <div class="item-foot-right">
                                                <p><i class="fa fa-calendar"></i>4 months ago</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end latest listing module-->

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--end section page body-->
@stop
    <script type="text/javascript">

        (function($){
            var theMap;
            function initMap() {

                /* Properties Array */
                var properties = [{
                    id: 294,
                    title: "Penthouse apartment",
                    lat: "40.6879438",
                    lng: "-73.94192980000003",
                    address:"Quincy St, Brooklyn, NY, USA",
                    bathrooms:"2",
                    bedrooms:"3",
                    icon:"images/map/pin-apartments.png",
                    images_count:7,
                    price:"<span class='item-price'>$876,000</span><span class='item-sub-price'>$7,600&#47;sq ft</span>",
                    is_featured:"",
                    prop_meta:"<p><span>Beds: 3</span><span>Baths: 2</span><span>Sq Ft: 2560</span></p>",
                    retinaIcon:"images/map/pin-apartments.png",
                    thumbnail:"<img src='http://placehold.it/385x258' alt='thumb'>",
                    type:"Apartment",
                    url:"/"
                },
                {
                    id: 285,
                    title: "Confortable apartment",
                    lat: "40.72305619999999",
                    lng: "-74.03885300000002",
                    address:"Metro Plaza Dr, Jersey City, NJ 07302, USA",
                    bathrooms:"2",
                    bedrooms:"1",
                    icon:"images/map/pin-house.png",
                    images_count:7,
                    price:"<span class='item-price'>$3,700&#47;mo</span>",
                    is_featured:"",
                    prop_meta:"<p><span>Bed: 1</span><span>Baths: 2</span><span>Sq Ft: 1900</span></p>",
                    retinaIcon:"http://sandbox.favethemes.com/houzez/wp-content/uploads/2016/02/x2-apartment.png",
                    thumbnail:"<img src='http://placehold.it/385x258' alt='thumb'>",
                    type:"Apartment",
                    url:"/"
                }];

                var myLatLng = new google.maps.LatLng(properties[1].lat,properties[1].lng);

                var houzezMapOptions = {
                    zoom: 12,
                    maxZoom: 12,
                    center: myLatLng,
                    disableDefaultUI: true,
                    scrollwheel: false,
                    mapTypeId: google.maps.MapTypeId.ROADMAP,
                    scroll:{x:$(window).scrollLeft(),y:$(window).scrollTop()}
                };
                var theMap = new google.maps.Map(document.getElementById("map"), houzezMapOptions);

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
                            '<h4 class="property-location">'+properties[i].address+'</h4>' +
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
                        closeBoxURL: "images/map/close.png",
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
                        url: 'images/map/cluster-icon.png',
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

                jQuery('#houzez-gmap-next').on('click',function(){
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

                jQuery('#houzez-gmap-prev').on('click',function(){
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
                jQuery('#houzez-gmap-full').on('click',function() {
                    //google.maps.event.trigger(theMap, 'resize');
                    if($(this).hasClass('active')== true){
                        //alert('has');
                        google.maps.event.trigger(theMap, 'resize');
                        theMap.setOptions({
                            draggable: true,
                        });
                    }else{
                        //alert('not has');
                        google.maps.event.trigger(theMap, 'resize');
                        theMap.setOptions({
                            draggable: false,
                        });
                    }

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

                // Create the search box and link it to the UI element.
                //var input = document.getElementById('google-map-search');
                //var searchBox = new google.maps.places.SearchBox(input);
                //theMap.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

                // Bias the SearchBox results towards current map's viewport.
                /*theMap.addListener('bounds_changed', function() {
                 searchBox.setBounds(theMap.getBounds());
                 });*/

                //var markers_location = [];
                // Listen for the event fired when the user selects a prediction and retrieve
                // more details for that place.

                google.maps.event.addListenerOnce(theMap, 'tilesloaded', function() {
                    $('.mapPlaceholder').hide();
                });

            }

            google.maps.event.addDomListener( window, 'load', initMap );
        })(jQuery)

    </script>
