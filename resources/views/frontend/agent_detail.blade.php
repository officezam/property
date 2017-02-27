@extends('layouts.dashboard')
@section('content')

<!--start advanced search section-->
<section class="advanced-search advance-search-header">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <form>
                    <div class="form-group search-long">
                        <div class="search">
                            <div class="input-search input-icon">
                                <input class="form-control" type="text" placeholder="Search for a place to stay?">
                            </div>
                            <select name="location" class="selectpicker bs-select-hidden" data-live-search="false" data-live-search-style="begins">
                                <option value="">All Cities</option>
                                <option value="chicago"> Chicago</option>
                                <option value="los-angeles"> Los Angeles</option>
                                <option value="miami"> Miami</option>
                                <option value="new-york"> New York</option>
                            </select>
                            <select name="area" class="selectpicker bs-select-hidden" data-live-search="false" data-live-search-style="begins">
                                <option value="">All Areas</option>
                                <option value="beverly-hills"> Beverly Hills</option>
                                <option value="brickell"> Brickell</option>
                                <option value="brickyard"> Brickyard</option>
                                <option value="bronx"> Bronx</option>
                                <option value="brooklyn"> Brooklyn</option>
                                <option value="coconut-grove"> Coconut Grove</option>
                                <option value="downtown"> Downtown</option>
                                <option value="eagle-rock"> Eagle Rock</option>
                                <option value="englewood"> Englewood</option>
                                <option value="hermosa"> Hermosa</option>
                                <option value="hollywood"> Hollywood</option>
                                <option value="lincoln-park"> Lincoln Park</option>
                                <option value="manhattan"> Manhattan</option>
                                <option value="midtown"> Midtown</option>
                                <option value="queens"> Queens</option>
                                <option value="westwood"> Westwood</option>
                                <option value="wynwood"> Wynwood</option>
                            </select>
                            <div class="advance-btn-holder">
                                <button class="advance-btn btn" type="button"><i class="fa fa-gear"></i> Advanced</button>
                            </div>
                        </div>
                        <div class="search-btn">
                            <button class="btn btn-secondary">Go</button>
                        </div>
                    </div>
                    <div class="advance-fields">
                        <div class="row">
                            <div class="col-sm-3 col-xs-6">
                                <div class="form-group">
                                    <select class="selectpicker" data-live-search="true" data-live-search-style="begins" title="Status">
                                        <option>Status 1</option>
                                        <option>Status 2</option>
                                        <option>Status 3</option>
                                        <option>Status 4</option>
                                        <option>Status 5</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-3 col-xs-6">
                                <div class="form-group">
                                    <select class="selectpicker" data-live-search="true" data-live-search-style="begins" title="Property Type">
                                        <option>Property Type 1</option>
                                        <option>Property Type 2</option>
                                        <option>Property Type 3</option>
                                        <option>Property Type 4</option>
                                        <option>Property Type 5</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-3 col-xs-6">
                                <div class="form-group">
                                    <select class="selectpicker" data-live-search="true" data-live-search-style="begins" title="Beds">
                                        <option>01</option>
                                        <option>02</option>
                                        <option>03</option>
                                        <option>04</option>
                                        <option>05</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-3 col-xs-6">
                                <div class="form-group">
                                    <select class="selectpicker" data-live-search="true" data-live-search-style="begins" title="Baths">
                                        <option>01</option>
                                        <option>02</option>
                                        <option>03</option>
                                        <option>04</option>
                                        <option>05</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-3 col-xs-6">
                                <div class="form-group">
                                    <select class="selectpicker" data-live-search="true" data-live-search-style="begins" title="Min Areas (Sqft)">
                                        <option>$100</option>
                                        <option>$100</option>
                                        <option>$100</option>
                                        <option>$100</option>
                                        <option>$100</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-3 col-xs-6">
                                <div class="form-group">
                                    <select class="selectpicker" data-live-search="true" data-live-search-style="begins" title="Max Areas (Sqft)">
                                        <option>$100</option>
                                        <option>$100</option>
                                        <option>$100</option>
                                        <option>$100</option>
                                        <option>$100</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xs-6">
                                <div class="range-advanced-main">
                                    <div class="range-text">
                                        <input type="text" class="min-price-range-hidden range-input" readonly >
                                        <input type="text" class="max-price-range-hidden range-input" readonly >
                                        <p><span class="range-title">Price Range:</span> from <span class="min-price-range"></span> to <span class="max-price-range"></span></p>
                                    </div>
                                    <div class="range-wrap">
                                        <div class="price-range-advanced"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-xs-12 features-list">

                                <label class="advance-trigger text-uppercase title"><i class="fa fa-plus-square"></i> Other Features </label>
                                <div class="clearfix"></div>
                                <div class="field-expand">
                                    <label class="checkbox-inline">
                                        <input type="checkbox" value="option1"> Feature
                                    </label>
                                    <label class="checkbox-inline">
                                        <input type="checkbox" value="option2"> Feature
                                    </label>
                                    <label class="checkbox-inline">
                                        <input type="checkbox" value="option3"> Feature
                                    </label>
                                    <label class="checkbox-inline">
                                        <input type="checkbox" value="option1"> Feature
                                    </label>
                                    <label class="checkbox-inline">
                                        <input type="checkbox" value="option2"> Feature
                                    </label>
                                    <label class="checkbox-inline">
                                        <input type="checkbox" value="option3"> Feature
                                    </label>
                                    <label class="checkbox-inline">
                                        <input type="checkbox" value="option1"> Feature
                                    </label>
                                    <label class="checkbox-inline">
                                        <input type="checkbox" value="option2"> Feature
                                    </label>
                                    <label class="checkbox-inline">
                                        <input type="checkbox" value="option3"> Feature
                                    </label>
                                    <label class="checkbox-inline">
                                        <input type="checkbox" value="option1"> Feature
                                    </label>
                                    <label class="checkbox-inline">
                                        <input type="checkbox" value="option2"> Feature
                                    </label>
                                    <label class="checkbox-inline">
                                        <input type="checkbox" value="option3"> Feature
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!--end advanced search section-->

<!--start advanced search section-->
<section class="advanced-search-mobile visible-xs visible-sm">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <form>
                    <div class="single-search-wrap">
                        <div class="single-search-inner advance-btn">
                            <button class="table-cell text-left" type="button"><i class="fa fa-gear"></i></button>
                        </div>
                        <div class="single-search-inner single-search">

                            <input type="text" class="form-control table-cell" name="search" placeholder="Search">
                        </div>
                        <div class="single-search-inner single-seach-btn">
                            <button class="table-cell text-right" type="submit"><i class="fa fa-search"></i></button>
                        </div>
                    </div>

                    <div class="advance-fields">
                        <div class="row">
                            <div class="col-sm-6 col-xs-12">
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
                            <div class="col-sm-6 col-xs-12">
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
                            <div class="col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <select class="selectpicker" data-live-search="false" data-live-search-style="begins" title="All Status">
                                        <option>Status 1</option>
                                        <option>Status 2</option>
                                        <option>Status 3</option>
                                        <option>Status 4</option>
                                        <option>Status 5</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <select class="selectpicker" data-live-search="false" data-live-search-style="begins" title="All Types">
                                        <option>Type 1</option>
                                        <option>Type 2</option>
                                        <option>Type 3</option>
                                        <option>Type 4</option>
                                        <option>Type 5</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xs-6">
                                <div class="form-group">
                                    <div class="input-group">
                                            <span class="input-group-btn">
                                                  <button type="button" class="btn btn-number" disabled="disabled" data-type="minus" data-field="count_beds">
                                                      <i class="fa fa-minus"></i>
                                                  </button>
                                            </span>
                                        <input type="text" name="count_beds" class="form-control input-number" value="1" data-min="1" data-max="10" placeholder="Beds">
                                        <span class="input-group-btn">
                                                  <button type="button" class="btn btn-number" data-type="plus" data-field="count_beds">
                                                      <i class="fa fa-plus"></i>
                                                  </button>
                                            </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xs-6">
                                <div class="form-group">
                                    <div class="input-group">
                                            <span class="input-group-btn">
                                                  <button type="button" class="btn btn-number" disabled="disabled" data-type="minus" data-field="count_baths">
                                                      <i class="fa fa-minus"></i>
                                                  </button>
                                            </span>
                                        <input type="text" name="count_baths" class="form-control input-number" value="1" data-min="1" data-max="10" placeholder="Baths">
                                        <span class="input-group-btn">
                                                  <button type="button" class="btn btn-number" data-type="plus" data-field="count_baths">
                                                      <i class="fa fa-plus"></i>
                                                  </button>
                                            </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xs-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" value="" name="min-area" placeholder="Min Area (sqft)">
                                </div>
                            </div>
                            <div class="col-sm-6 col-xs-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" value="" name="max-area" placeholder="Max Area (sqft)">
                                </div>
                            </div>
                            <div class="col-sm-12 col-xs-12">
                                <div class="range-advanced-main">
                                    <div class="range-text">
                                        <input type="text" class="min-price-range-hidden range-input" readonly >
                                        <input type="text" class="max-price-range-hidden range-input" readonly >
                                        <p><span class="range-title">Price Range:</span> from <span class="min-price-range"></span> to <span class="max-price-range"></span></p>
                                    </div>
                                    <div class="range-wrap">
                                        <div class="price-range-advanced"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-xs-12">
                                <label class="advance-trigger"><i class="fa fa-plus-square"></i> Other Features </label>
                            </div>
                            <div class="col-sm-12 col-xs-12 features-list ">
                                <div class="field-expand">
                                    <label class="checkbox-inline">
                                        <input type="checkbox" value="option1"> Feature
                                    </label>
                                    <label class="checkbox-inline">
                                        <input type="checkbox" value="option2"> Feature
                                    </label>
                                    <label class="checkbox-inline">
                                        <input type="checkbox" value="option3"> Feature
                                    </label>
                                    <label class="checkbox-inline">
                                        <input type="checkbox" value="option1"> Feature
                                    </label>
                                    <label class="checkbox-inline">
                                        <input type="checkbox" value="option2"> Feature
                                    </label>
                                    <label class="checkbox-inline">
                                        <input type="checkbox" value="option3"> Feature
                                    </label>
                                    <label class="checkbox-inline">
                                        <input type="checkbox" value="option1"> Feature
                                    </label>
                                    <label class="checkbox-inline">
                                        <input type="checkbox" value="option2"> Feature
                                    </label>
                                    <label class="checkbox-inline">
                                        <input type="checkbox" value="option3"> Feature
                                    </label>
                                    <label class="checkbox-inline">
                                        <input type="checkbox" value="option1"> Feature
                                    </label>
                                    <label class="checkbox-inline">
                                        <input type="checkbox" value="option2"> Feature
                                    </label>
                                    <label class="checkbox-inline">
                                        <input type="checkbox" value="option3"> Feature
                                    </label>
                                </div>
                            </div>
                            <div class="col-sm-12 col-xs-12">
                                <button type="submit" class="btn btn-secondary btn-block"><i class="fa fa-search pull-left"></i> Search</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!--end advanced search section-->

    <!--start section page body-->
    <section id="section-body">
        <div class="container">
            <div class="page-title breadcrumb-top">
                <div class="row">
                    <div class="col-sm-12">
                        <ol class="breadcrumb">
                            <li><a href="#"><i class="fa fa-home"></i></a></li>
                            <li class="active">All Agents</li>
                        </ol>
                        <div class="page-title-left">
                            <h2>Brittany Watkins</h2>
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
                                    <img src="http://placehold.it/330x330" alt="Agent" width="330" height="330">
                                    <div class="company-logo">
                                        <img src="http://placehold.it/105x75" alt="Agent" width="105" height="75">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-8 col-xs-12">
                                <div class="profile-description">
                                    <h3>Brittany Watkins</h3>
                                    <h4 class="position">Executive Manager at Real Estate Inc.</h4>
                                    <p>Lorem ipsum dolor sit amet consectetur incididunt ut labore et ipsum dolor sit amet consectetur incididunt ut labore et dolore magna aliqua adipisicing elit seddo eiusmod tem magna aliqua adipisicing.</p>
                                    <ul class="profile-contact">
                                        <li><span>OFFICE:</span> <a href="#">(765) 234 5678</a></li>
                                        <li><span>MOBILE:</span> <a href="#">(765) 234 5678</a></li>
                                        <li><span>FAX:</span> <a href="#">(765) 234 5678</a></li>
                                        <li class="email"><span>Email:</span> <a href="#">john.doe@realestate.com</a></li>
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
                                    <h3>CONTACT JOHN DOE</h3>
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
                                <ul>
                                    <li>
                                        <a href="#" class="active">ALL</a>
                                    </li>
                                    <li>
                                        <a href="#">FOR SALE</a>
                                    </li>
                                    <li>
                                        <a href="#">FOR RENT</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="sort-tab table-cell text-right">
                                Sort by:
                                <select class="selectpicker bs-select-hidden" title="Please select" data-live-search-style="begins" data-live-search="true">
                                    <option>Relevance</option>
                                    <option>Relevance</option>
                                    <option>Relevance</option>
                                </select>
                            </div>
                        </div>
                        <!--end list tabs-->

                        <!--start property items-->
                        <div class="property-listing list-view">
                            <div class="row">
                                <div class="item-wrap">
                                    <div class="property-item table-list">
                                        <div class="table-cell">
                                            <div class="figure-block">
                                                <figure class="item-thumb">
                                                    <span class="label-featured label label-success">Featured</span>
                                                    <div class="label-wrap label-right hide-on-list">
                                                        <span class="label label-default">For Sale</span>
                                                        <span class="label label-danger">Sold</span>
                                                    </div>
                                                    <div class="price hide-on-list">
                                                        <p class="price-start">Start from</p>
                                                        <h3>$350,000</h3>
                                                        <p class="rant">$21,000/mo</p>
                                                    </div>
                                                    <a href="#">
                                                        <img src="http://placehold.it/364x244" alt="thumb">
                                                    </a>
                                                    <ul class="actions">
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
                                                        <div class="label-status label label-default">For Sale</div>
                                                        <span class="label label-danger">Sold</span>
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
                                                    <p class="price-start">Start from</p>
                                                    <h3>$350,000</h3>
                                                    <p class="rant">$21,000/mo</p>
                                                </div>
                                                <div class="info-row phone text-right">
                                                    <a href="#" class="btn btn-primary">Details <i class="fa fa-angle-right fa-right"></i></a>
                                                    <p><a href="#">+1 (786) 225-0199</a></p>
                                                </div>
                                            </div>
                                            <div class="table-list full-width hide-on-list">
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
                                    <div class="item-foot date hide-on-list">
                                        <div class="item-foot-left">
                                            <p><i class="fa fa-user"></i> <a href="#">Elite Ocean View Realty LLC</a></p>
                                        </div>
                                        <div class="item-foot-right">
                                            <p><i class="fa fa-calendar"></i> 12 Days ago </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-wrap">
                                    <div class="property-item table-list">
                                        <div class="table-cell">
                                            <div class="figure-block">
                                                <figure class="item-thumb">
                                                    <span class="label-featured label label-success">Featured</span>
                                                    <div class="label-wrap label-right hide-on-list">
                                                        <span class="label label-default">For Sale</span>
                                                        <span class="label label-danger">Sold</span>
                                                    </div>
                                                    <div class="price hide-on-list">
                                                        <p class="price-start">Start from</p>
                                                        <h3>$350,000</h3>
                                                        <p class="rant">$21,000/mo</p>
                                                    </div>
                                                    <a href="#">
                                                        <img src="http://placehold.it/364x244" alt="thumb">
                                                    </a>
                                                    <ul class="actions">
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
                                                        <div class="label-status label label-default">For Sale</div>
                                                        <span class="label label-danger">Sold</span>
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
                                                    <p class="price-start">Start from</p>
                                                    <h3>$350,000</h3>
                                                    <p class="rant">$21,000/mo</p>
                                                </div>
                                                <div class="info-row phone text-right">
                                                    <a href="#" class="btn btn-primary">Details <i class="fa fa-angle-right fa-right"></i></a>
                                                    <p><a href="#">+1 (786) 225-0199</a></p>
                                                </div>
                                            </div>
                                            <div class="table-list full-width hide-on-list">
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
                                    <div class="item-foot date hide-on-list">
                                        <div class="item-foot-left">
                                            <p><i class="fa fa-user"></i> <a href="#">Elite Ocean View Realty LLC</a></p>
                                        </div>
                                        <div class="item-foot-right">
                                            <p><i class="fa fa-calendar"></i> 12 Days ago </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-wrap">
                                    <div class="property-item table-list">
                                        <div class="table-cell">
                                            <div class="figure-block">
                                                <figure class="item-thumb">
                                                    <span class="label-featured label label-success">Featured</span>
                                                    <div class="label-wrap label-right hide-on-list">
                                                        <span class="label label-default">For Sale</span>
                                                        <span class="label label-danger">Sold</span>
                                                    </div>
                                                    <div class="price hide-on-list">
                                                        <p class="price-start">Start from</p>
                                                        <h3>$350,000</h3>
                                                        <p class="rant">$21,000/mo</p>
                                                    </div>
                                                    <a href="#">
                                                        <img src="http://placehold.it/364x244" alt="thumb">
                                                    </a>
                                                    <ul class="actions">
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
                                                        <div class="label-status label label-default">For Sale</div>
                                                        <span class="label label-danger">Sold</span>
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
                                                    <p class="price-start">Start from</p>
                                                    <h3>$350,000</h3>
                                                    <p class="rant">$21,000/mo</p>
                                                </div>
                                                <div class="info-row phone text-right">
                                                    <a href="#" class="btn btn-primary">Details <i class="fa fa-angle-right fa-right"></i></a>
                                                    <p><a href="#">+1 (786) 225-0199</a></p>
                                                </div>
                                            </div>
                                            <div class="table-list full-width hide-on-list">
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
                                    <div class="item-foot date hide-on-list">
                                        <div class="item-foot-left">
                                            <p><i class="fa fa-user"></i> <a href="#">Elite Ocean View Realty LLC</a></p>
                                        </div>
                                        <div class="item-foot-right">
                                            <p><i class="fa fa-calendar"></i> 12 Days ago </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-wrap">
                                    <div class="property-item table-list">
                                        <div class="table-cell">
                                            <div class="figure-block">
                                                <figure class="item-thumb">
                                                    <span class="label-featured label label-success">Featured</span>
                                                    <div class="label-wrap label-right hide-on-list">
                                                        <span class="label label-default">For Sale</span>
                                                        <span class="label label-danger">Sold</span>
                                                    </div>
                                                    <div class="price hide-on-list">
                                                        <p class="price-start">Start from</p>
                                                        <h3>$350,000</h3>
                                                        <p class="rant">$21,000/mo</p>
                                                    </div>
                                                    <a href="#">
                                                        <img src="http://placehold.it/364x244" alt="thumb">
                                                    </a>
                                                    <ul class="actions">
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
                                                        <div class="label-status label label-default">For Sale</div>
                                                        <span class="label label-danger">Sold</span>
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
                                                    <p class="price-start">Start from</p>
                                                    <h3>$350,000</h3>
                                                    <p class="rant">$21,000/mo</p>
                                                </div>
                                                <div class="info-row phone text-right">
                                                    <a href="#" class="btn btn-primary">Details <i class="fa fa-angle-right fa-right"></i></a>
                                                    <p><a href="#">+1 (786) 225-0199</a></p>
                                                </div>
                                            </div>
                                            <div class="table-list full-width hide-on-list">
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
                                    <div class="item-foot date hide-on-list">
                                        <div class="item-foot-left">
                                            <p><i class="fa fa-user"></i> <a href="#">Elite Ocean View Realty LLC</a></p>
                                        </div>
                                        <div class="item-foot-right">
                                            <p><i class="fa fa-calendar"></i> 12 Days ago </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-wrap">
                                    <div class="property-item table-list">
                                        <div class="table-cell">
                                            <div class="figure-block">
                                                <figure class="item-thumb">
                                                    <span class="label-featured label label-success">Featured</span>
                                                    <div class="label-wrap label-right hide-on-list">
                                                        <span class="label label-default">For Sale</span>
                                                        <span class="label label-danger">Sold</span>
                                                    </div>
                                                    <div class="price hide-on-list">
                                                        <p class="price-start">Start from</p>
                                                        <h3>$350,000</h3>
                                                        <p class="rant">$21,000/mo</p>
                                                    </div>
                                                    <a href="#">
                                                        <img src="http://placehold.it/364x244" alt="thumb">
                                                    </a>
                                                    <ul class="actions">
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
                                                        <div class="label-status label label-default">For Sale</div>
                                                        <span class="label label-danger">Sold</span>
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
                                                    <p class="price-start">Start from</p>
                                                    <h3>$350,000</h3>
                                                    <p class="rant">$21,000/mo</p>
                                                </div>
                                                <div class="info-row phone text-right">
                                                    <a href="#" class="btn btn-primary">Details <i class="fa fa-angle-right fa-right"></i></a>
                                                    <p><a href="#">+1 (786) 225-0199</a></p>
                                                </div>
                                            </div>
                                            <div class="table-list full-width hide-on-list">
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
                                    <div class="item-foot date hide-on-list">
                                        <div class="item-foot-left">
                                            <p><i class="fa fa-user"></i> <a href="#">Elite Ocean View Realty LLC</a></p>
                                        </div>
                                        <div class="item-foot-right">
                                            <p><i class="fa fa-calendar"></i> 12 Days ago </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-wrap">
                                    <div class="property-item table-list">
                                        <div class="table-cell">
                                            <div class="figure-block">
                                                <figure class="item-thumb">
                                                    <span class="label-featured label label-success">Featured</span>
                                                    <div class="label-wrap label-right hide-on-list">
                                                        <span class="label label-default">For Sale</span>
                                                        <span class="label label-danger">Sold</span>
                                                    </div>
                                                    <div class="price hide-on-list">
                                                        <p class="price-start">Start from</p>
                                                        <h3>$350,000</h3>
                                                        <p class="rant">$21,000/mo</p>
                                                    </div>
                                                    <a href="#">
                                                        <img src="http://placehold.it/364x244" alt="thumb">
                                                    </a>
                                                    <ul class="actions">
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
                                                        <div class="label-status label label-default">For Sale</div>
                                                        <span class="label label-danger">Sold</span>
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
                                                    <p class="price-start">Start from</p>
                                                    <h3>$350,000</h3>
                                                    <p class="rant">$21,000/mo</p>
                                                </div>
                                                <div class="info-row phone text-right">
                                                    <a href="#" class="btn btn-primary">Details <i class="fa fa-angle-right fa-right"></i></a>
                                                    <p><a href="#">+1 (786) 225-0199</a></p>
                                                </div>
                                            </div>
                                            <div class="table-list full-width hide-on-list">
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
                                    <div class="item-foot date hide-on-list">
                                        <div class="item-foot-left">
                                            <p><i class="fa fa-user"></i> <a href="#">Elite Ocean View Realty LLC</a></p>
                                        </div>
                                        <div class="item-foot-right">
                                            <p><i class="fa fa-calendar"></i> 12 Days ago </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-wrap">
                                    <div class="property-item table-list">
                                        <div class="table-cell">
                                            <div class="figure-block">
                                                <figure class="item-thumb">
                                                    <span class="label-featured label label-success">Featured</span>
                                                    <div class="label-wrap label-right hide-on-list">
                                                        <span class="label label-default">For Sale</span>
                                                        <span class="label label-danger">Sold</span>
                                                    </div>
                                                    <div class="price hide-on-list">
                                                        <p class="price-start">Start from</p>
                                                        <h3>$350,000</h3>
                                                        <p class="rant">$21,000/mo</p>
                                                    </div>
                                                    <a href="#">
                                                        <img src="http://placehold.it/364x244" alt="thumb">
                                                    </a>
                                                    <ul class="actions">
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
                                                        <div class="label-status label label-default">For Sale</div>
                                                        <span class="label label-danger">Sold</span>
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
                                                    <p class="price-start">Start from</p>
                                                    <h3>$350,000</h3>
                                                    <p class="rant">$21,000/mo</p>
                                                </div>
                                                <div class="info-row phone text-right">
                                                    <a href="#" class="btn btn-primary">Details <i class="fa fa-angle-right fa-right"></i></a>
                                                    <p><a href="#">+1 (786) 225-0199</a></p>
                                                </div>
                                            </div>
                                            <div class="table-list full-width hide-on-list">
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
                                    <div class="item-foot date hide-on-list">
                                        <div class="item-foot-left">
                                            <p><i class="fa fa-user"></i> <a href="#">Elite Ocean View Realty LLC</a></p>
                                        </div>
                                        <div class="item-foot-right">
                                            <p><i class="fa fa-calendar"></i> 12 Days ago </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-wrap">
                                    <div class="property-item table-list">
                                        <div class="table-cell">
                                            <div class="figure-block">
                                                <figure class="item-thumb">
                                                    <span class="label-featured label label-success">Featured</span>
                                                    <div class="label-wrap label-right hide-on-list">
                                                        <span class="label label-default">For Sale</span>
                                                        <span class="label label-danger">Sold</span>
                                                    </div>
                                                    <div class="price hide-on-list">
                                                        <p class="price-start">Start from</p>
                                                        <h3>$350,000</h3>
                                                        <p class="rant">$21,000/mo</p>
                                                    </div>
                                                    <a href="#">
                                                        <img src="http://placehold.it/364x244" alt="thumb">
                                                    </a>
                                                    <ul class="actions">
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
                                                        <div class="label-status label label-default">For Sale</div>
                                                        <span class="label label-danger">Sold</span>
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
                                                    <p class="price-start">Start from</p>
                                                    <h3>$350,000</h3>
                                                    <p class="rant">$21,000/mo</p>
                                                </div>
                                                <div class="info-row phone text-right">
                                                    <a href="#" class="btn btn-primary">Details <i class="fa fa-angle-right fa-right"></i></a>
                                                    <p><a href="#">+1 (786) 225-0199</a></p>
                                                </div>
                                            </div>
                                            <div class="table-list full-width hide-on-list">
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
                                    <div class="item-foot date hide-on-list">
                                        <div class="item-foot-left">
                                            <p><i class="fa fa-user"></i> <a href="#">Elite Ocean View Realty LLC</a></p>
                                        </div>
                                        <div class="item-foot-right">
                                            <p><i class="fa fa-calendar"></i> 12 Days ago </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-wrap">
                                    <div class="property-item table-list">
                                        <div class="table-cell">
                                            <div class="figure-block">
                                                <figure class="item-thumb">
                                                    <span class="label-featured label label-success">Featured</span>
                                                    <div class="label-wrap label-right hide-on-list">
                                                        <span class="label label-default">For Sale</span>
                                                        <span class="label label-danger">Sold</span>
                                                    </div>
                                                    <div class="price hide-on-list">
                                                        <p class="price-start">Start from</p>
                                                        <h3>$350,000</h3>
                                                        <p class="rant">$21,000/mo</p>
                                                    </div>
                                                    <a href="#">
                                                        <img src="http://placehold.it/364x244" alt="thumb">
                                                    </a>
                                                    <ul class="actions">
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
                                                        <div class="label-status label label-default">For Sale</div>
                                                        <span class="label label-danger">Sold</span>
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
                                                    <p class="price-start">Start from</p>
                                                    <h3>$350,000</h3>
                                                    <p class="rant">$21,000/mo</p>
                                                </div>
                                                <div class="info-row phone text-right">
                                                    <a href="#" class="btn btn-primary">Details <i class="fa fa-angle-right fa-right"></i></a>
                                                    <p><a href="#">+1 (786) 225-0199</a></p>
                                                </div>
                                            </div>
                                            <div class="table-list full-width hide-on-list">
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
                        <!--end property items-->

                        <hr>

                        <!--start Pagination-->
                        <div class="pagination-main">
                            <ul class="pagination">
                                <li class="disabled"><a aria-label="Previous" href="#"><span aria-hidden="true"><i class="fa fa-angle-left"></i></span></a></li>
                                <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li><a aria-label="Next" href="#"><span aria-hidden="true"><i class="fa fa-angle-right"></i></span></a></li>
                            </ul>
                        </div>
                        <!--start Pagination-->

                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 col-md-offset-0 col-sm-offset-3 container-sidebar">
                    <aside id="sidebar" class="sidebar-white">
                        <div class="widget widget-range">
                            <div class="widget-body">
                                <form>
                                    <div class="range-block">
                                        <h4>Price range</h4>
                                        <div id="slider-price"></div>
                                        <div class="clearfix range-text">
                                            <input type="text" class="pull-left range-input text-left" id="min-price" readonly >
                                            <input type="text" class="pull-right range-input text-right" id="max-price" readonly >
                                        </div>
                                    </div>
                                    <div class="range-block">
                                        <h4>Area Size</h4>
                                        <div id="slider-size"></div>
                                        <div class="clearfix range-text">
                                            <input type="text" class="pull-left range-input text-left" id="min-size" readonly >
                                            <input type="text" class="pull-right range-input text-right" id="max-size" readonly >
                                        </div>
                                    </div>
                                    <div class="range-block rang-form-block">
                                        <div class="row">
                                            <div class="col-sm-12 col-xs-12">
                                                <div class="form-group">
                                                    <input class="form-control" name="keyword" placeholder="Search" type="text">
                                                </div>
                                            </div>
                                            <div class="col-sm-12 col-xs-12">
                                                <div class="form-group">
                                                    <select class="selectpicker" data-live-search="false" data-live-search-style="begins" title="Property Type">
                                                        <option>Property Type 1</option>
                                                        <option>Property Type 2</option>
                                                        <option>Property Type 3</option>
                                                        <option>Property Type 4</option>
                                                        <option>Property Type 5</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-xs-12">
                                                <div class="form-group">
                                                    <select class="selectpicker" data-live-search="false" data-live-search-style="begins" title="Beds">
                                                        <option>Beds 1</option>
                                                        <option>Beds 2</option>
                                                        <option>Beds 3</option>
                                                        <option>Beds 4</option>
                                                        <option>Beds 5</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-xs-12">
                                                <div class="form-group">
                                                    <select class="selectpicker" data-live-search="false" data-live-search-style="begins" title="Baths">
                                                        <option>Baths 1</option>
                                                        <option>Baths 2</option>
                                                        <option>Baths 3</option>
                                                        <option>Baths 4</option>
                                                        <option>Baths 5</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 col-xs-12">
                                                <div class="form-group">
                                                    <select class="selectpicker" data-live-search="false" data-live-search-style="begins" title="Property type">
                                                        <option>Type 1</option>
                                                        <option>Type 2</option>
                                                        <option>Type 3</option>
                                                        <option>Type 4</option>
                                                        <option>Type 5</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 col-xs-12">
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
                                            <div class="col-sm-12 col-xs-12">
                                                <label class="advance-trigger"><i class="fa fa-plus-square"></i> Other Features </label>
                                            </div>
                                            <div class="col-sm-12 col-xs-12">
                                                <div class="features-list field-expand">
                                                    <label class="checkbox-inline"><input name="feature[]" data-search="feature" id="feature-air-conditioning" value="air-conditioning" type="checkbox">Air Conditioning</label><label class="checkbox-inline"><input name="feature[]" data-search="feature" id="feature-barbeque" value="barbeque" type="checkbox">Barbeque</label><label class="checkbox-inline"><input name="feature[]" data-search="feature" id="feature-dryer" value="dryer" type="checkbox">Dryer</label><label class="checkbox-inline"><input name="feature[]" data-search="feature" id="feature-gym" value="gym" type="checkbox">Gym</label><label class="checkbox-inline"><input name="feature[]" data-search="feature" id="feature-laundry" value="laundry" type="checkbox">Laundry</label><label class="checkbox-inline"><input name="feature[]" data-search="feature" id="feature-lawn" value="lawn" type="checkbox">Lawn</label><label class="checkbox-inline"><input name="feature[]" data-search="feature" id="feature-microwave" value="microwave" type="checkbox">Microwave</label><label class="checkbox-inline"><input name="feature[]" data-search="feature" id="feature-outdoor-shower" value="outdoor-shower" type="checkbox">Outdoor Shower</label><label class="checkbox-inline"><input name="feature[]" data-search="feature" id="feature-refrigerator" value="refrigerator" type="checkbox">Refrigerator</label><label class="checkbox-inline"><input name="feature[]" data-search="feature" id="feature-sauna" value="sauna" type="checkbox">Sauna</label><label class="checkbox-inline"><input name="feature[]" data-search="feature" id="feature-swimming-pool" value="swimming-pool" type="checkbox">Swimming Pool</label><label class="checkbox-inline"><input name="feature[]" data-search="feature" id="feature-tv-cable" value="tv-cable" type="checkbox">TV Cable</label><label class="checkbox-inline"><input name="feature[]" data-search="feature" id="feature-washer" value="washer" type="checkbox">Washer</label><label class="checkbox-inline"><input name="feature[]" data-search="feature" id="feature-wifi" value="wifi" type="checkbox">WiFi</label><label class="checkbox-inline"><input name="feature[]" data-search="feature" id="feature-window-coverings" value="window-coverings" type="checkbox">Window Coverings</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 col-xs-12">
                                                <button type="submit" class="btn btn-secondary btn-block"> Search</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="widget widget-slider">
                            <div class="widget-top">
                                <h3 class="widget-title">Featured Properties Slider</h3>
                            </div>
                            <div class="widget-body">
                                <div class="property-widget-slider">
                                    <div class="item">
                                        <div class="figure-block">
                                            <figure class="item-thumb">
                                                <span class="label-featured label label-success">Featured</span>
                                                <div class="label-wrap label-right">
                                                    <span class="label-status label label-default">For Rent</span>

                                                    <span class="label label-danger">Hot Offer</span>
                                                </div>
                                                <a href="#" class="hover-effect">
                                                    <img src="http://placehold.it/370x202" alt="thumb">
                                                </a>
                                                <div class="price">
                                                    <span class="item-price">$350,000</span>
                                                </div>
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
                                            </figure>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="figure-block">
                                            <figure class="item-thumb">
                                                <span class="label-featured label label-success">Featured</span>
                                                <div class="label-wrap label-right">
                                                    <span class="label-status label label-default">For Rent</span>

                                                    <span class="label label-danger">Hot Offer</span>
                                                </div>
                                                <a href="#" class="hover-effect">
                                                    <img src="http://placehold.it/370x202" alt="thumb">
                                                </a>
                                                <div class="price">
                                                    <span class="item-price">$350,000</span>
                                                </div>
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
                                            </figure>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="figure-block">
                                            <figure class="item-thumb">
                                                <span class="label-featured label label-success">Featured</span>
                                                <div class="label-wrap label-right">
                                                    <span class="label-status label label-default">For Rent</span>

                                                    <span class="label label-danger">Hot Offer</span>
                                                </div>
                                                <a href="#" class="hover-effect">
                                                    <img src="http://placehold.it/370x202" alt="thumb">
                                                </a>
                                                <div class="price">
                                                    <span class="item-price">$350,000</span>
                                                </div>
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
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="widget widget-recommend">
                            <div class="widget-top">
                                <h3 class="widget-title">We recommend</h3>
                            </div>
                            <div class="widget-body">
                                <div class="media">
                                    <div class="media-left">
                                        <figure class="item-thumb">
                                            <a class="hover-effect" href="#">
                                                <img alt="thumb" src="http://placehold.it/100x75" width="100" height="75">
                                            </a>
                                        </figure>
                                    </div>
                                    <div class="media-body">
                                        <h3 class="media-heading"><a href="#">Apartment Oceanview</a></h3>
                                        <h4>$350,000</h4>
                                        <div class="amenities">
                                            <p>3 beds • 2 baths • 1,238 sqft</p>
                                            <p>Single Family Home</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="media-left">
                                        <figure class="item-thumb">
                                            <a class="hover-effect" href="#">
                                                <img alt="thumb" src="http://placehold.it/100x75" width="100" height="75">
                                            </a>
                                        </figure>
                                    </div>
                                    <div class="media-body">
                                        <h3 class="media-heading"><a href="#">Apartment Oceanview</a></h3>
                                        <h4>$350,000</h4>
                                        <div class="amenities">
                                            <p>3 beds • 2 baths • 1,238 sqft</p>
                                            <p>Single Family Home</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="media-left">
                                        <figure class="item-thumb">
                                            <a class="hover-effect" href="#">
                                                <img alt="thumb" src="http://placehold.it/100x75" width="100" height="75">
                                            </a>
                                        </figure>
                                    </div>
                                    <div class="media-body">
                                        <h3 class="media-heading"><a href="#">Apartment Oceanview</a></h3>
                                        <h4>$350,000</h4>
                                        <div class="amenities">
                                            <p>3 beds • 2 baths • 1,238 sqft</p>
                                            <p>Single Family Home</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="widget widget-rated">
                            <div class="widget-top">
                                <h3 class="widget-title">Most Rated Properties</h3>
                            </div>
                            <div class="widget-body">
                                <div class="media">
                                    <div class="media-left">
                                        <figure class="item-thumb">
                                            <a class="hover-effect" href="#">
                                                <img alt="thumb" src="http://placehold.it/100x75" width="100" height="75">
                                            </a>
                                        </figure>
                                    </div>
                                    <div class="media-body">
                                        <h3 class="media-heading"><a href="#">Apartment Oceanview</a></h3>
                                        <div class="rating">
                                            <span class="star-text-left">$350,000</span><span data-title="Average Rate: 4.67 / 5" class="bottom-ratings tip"><span class="fa fa-star-o"></span><span class="fa fa-star-o"></span><span class="fa fa-star-o"></span><span class="fa fa-star-o"></span><span class="fa fa-star-o"></span><span style="width: 70%" class="top-ratings"><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span></span></span>
                                        </div>
                                        <div class="amenities">
                                            <p>3 beds • 2 baths • 1,238 sqft</p>
                                            <p>Single Family Home</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="media-left">
                                        <figure class="item-thumb">
                                            <a class="hover-effect" href="#">
                                                <img alt="thumb" src="http://placehold.it/100x75" width="100" height="75">
                                            </a>
                                        </figure>
                                    </div>
                                    <div class="media-body">
                                        <h3 class="media-heading"><a href="#">Apartment Oceanview</a></h3>
                                        <div class="rating">
                                            <span class="star-text-left">$350,000</span><span data-title="Average Rate: 4.67 / 5" class="bottom-ratings tip"><span class="fa fa-star-o"></span><span class="fa fa-star-o"></span><span class="fa fa-star-o"></span><span class="fa fa-star-o"></span><span class="fa fa-star-o"></span><span style="width: 70%" class="top-ratings"><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span></span></span>
                                        </div>
                                        <div class="amenities">
                                            <p>3 beds • 2 baths • 1,238 sqft</p>
                                            <p>Single Family Home</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="media-left">
                                        <figure class="item-thumb">
                                            <a class="hover-effect" href="#">
                                                <img alt="thumb" src="http://placehold.it/100x75" width="100" height="75">
                                            </a>
                                        </figure>
                                    </div>
                                    <div class="media-body">
                                        <h3 class="media-heading"><a href="#">Apartment Oceanview</a></h3>
                                        <div class="rating">
                                            <span class="star-text-left">$350,000</span><span data-title="Average Rate: 4.67 / 5" class="bottom-ratings tip"><span class="fa fa-star-o"></span><span class="fa fa-star-o"></span><span class="fa fa-star-o"></span><span class="fa fa-star-o"></span><span class="fa fa-star-o"></span><span style="width: 70%" class="top-ratings"><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span></span></span>
                                        </div>
                                        <div class="amenities">
                                            <p>3 beds • 2 baths • 1,238 sqft</p>
                                            <p>Single Family Home</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>
    <!--end section page body-->
    @Stop