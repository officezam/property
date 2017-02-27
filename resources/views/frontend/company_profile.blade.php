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
                                        <input type="hidden" class="min-price-range-hidden range-input" >
                                        <input type="hidden" class="max-price-range-hidden range-input" readonly="readonly" >
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
                                        <input type="text"  name="count_beds" class="form-control input-number" value="1" data-min="1" data-max="10" placeholder="Beds">
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
                                        <input type="text"  name="count_baths" class="form-control input-number" value="1" data-min="1" data-max="10" placeholder="Baths">
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
                                        <input type="hidden" class="min-price-range-hidden range-input" readonly="readonly" >
                                        <input type="hidden" class="max-price-range-hidden range-input" readonly="readonly" >
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
                        <h2>Company Profile</h2>
                    </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="profile-detail-block company-detail">
                        <div class="row">
                            <div class="col-md-3 col-sm-3 col-xs-12">
                                <div class="profile-image">
                                    <img src="http://placehold.it/230x165" alt="Agent" width="230" height="165" class="">
                                </div>
                            </div>
                            <div class="col-md-5 col-sm-5 col-xs-12">
                                <div class="profile-description">
                                    <h3>ABOUT</h3>
                                    <h4 class="position">Executive Manager at Real Estate Inc.</h4>
                                    <div class="rating">
                                        <span data-title="Average Rate: 4.67 / 5" class="bottom-ratings tip"><span class="fa fa-star-o"></span><span class="fa fa-star-o"></span><span class="fa fa-star-o"></span><span class="fa fa-star-o"></span><span class="fa fa-star-o"></span><span style="width: 93.4%" class="top-ratings"><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span></span>
                                        </span>
                                        <span class="star-text-right">15 Ratings</span>
                                    </div>
                                    <ul class="profile-contact">
                                        <li><span>OFFICE:</span> <a href="#">(765) 234 5678</a></li>
                                        <li><span>MOBILE:</span> <a href="#">(765) 234 5678</a></li>
                                        <li><span>FAX:</span> <a href="#">(765) 234 5678</a></li>
                                        <li class="email"><span>Email:</span> <a href="#">john.doe@realestate.com</a></li>
                                        <li><span>Website:</span> <a href="#">realestate.com</a></li>
                                    </ul>
                                    <ul class="profile-social">
                                        <li><a href="#"><i class="fa fa-phone-square"></i></a></li>
                                        <li><a href="#" class="btn-facebook"><i class="fa fa-facebook-square"></i></a></li>
                                        <li><a href="#" class="btn-twitter"><i class="fa fa-twitter-square"></i></a></li>
                                        <li><a href="#" class="btn-linkedin"><i class="fa fa-linkedin-square"></i></a></li>
                                    </ul>
                                    <ul class="profile-rating">
                                        <li><span>Properties listed:</span> 32</li>
                                        <li><span>Agents: </span> 6</li>
                                        <li><span>Licenses: </span> 3108164 (Florida Real
                                            Estate Broker)</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-12">
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
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div id="content-area">
                        <div class="profile-tab-area">
                            <ul class="profile-tabs">
                                <li class="active">OVERVIEW</li>
                                <li>PROPERTIES</li>
                                <li>AGENTS</li>
                                <li id="mapTab" data-toggle="tab">Map</li>
                                <li>REVIEWS</li>
                            </ul>
                            <div class="tab-content">
                                <div class="profile-tab-pane tab-pane fade active in">
                                    <div class="profile-tab-content profile-overview">
                                        <h3 class="title">Company Overview</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
                                    </div>
                                </div>
                                <div class="profile-tab-pane tab-pane fade">
                                    <div class="profile-tab-content profile-properties">
                                        <div class="property-filter-wrap">
                                            <h4 class="filter-title"> 3 Properties </h4>
                                            <form class="filter-inputs">
                                                <ul>
                                                    <li><label> Filter by </label></li>
                                                    <li>
                                                        <select class="selectpicker" data-live-search="false" data-live-search-style="begins" title="Status">
                                                            <option>Status 1</option>
                                                            <option>Status 2</option>
                                                            <option>Status 3</option>
                                                            <option>Status 4</option>
                                                            <option>Status 5</option>
                                                        </select>
                                                    </li>
                                                    <li>
                                                        <select class="selectpicker" data-live-search="false" data-live-search-style="begins" title="Agents">
                                                            <option>Agent 1</option>
                                                            <option>Agent 2</option>
                                                            <option>Agent 3</option>
                                                            <option>Agent 4</option>
                                                            <option>Agent 5</option>
                                                        </select>
                                                    </li>
                                                </ul>
                                            </form>
                                        </div>
                                        <!--start property items-->
                                        <div class="property-listing grid-view grid-view-3-col">
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
                                    </div>
                                </div>
                                <div class="profile-tab-pane tab-pane fade">
                                    <div class="profile-tab-content profile-agents">
                                        <div class="agent-listing">
                                            <div class="profile-detail-block">
                                                <div class="media">
                                                    <div class="media-left">
                                                        <figure>
                                                            <img src="http://placehold.it/239x239" alt="agent-1" height="350" width="350">
                                                        </figure>
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="profile-description">
                                                            <div class="profile-description-top">
                                                                <h3>Michelle Ramirez</h3>
                                                                <h4 class="position">
                                                                    Company Agent at Realtory Inc.                                </h4>
                                                            </div>
                                                            <div class="profile-description-left">
                                                                <p>Lorem ipsum dolor sit amet consectetur incididunt ut labore et ipsum dolor sit amet consectetur incididunt ut labore et dolore.</p>
                                                                <p>Lorem ipsum dolor sit amet consectetur incididunt ut labore et ipsum dolor sit amet consectetur incididunt ut labore et dolore.</p>
                                                                <a href="#" class="btn btn-primary hidden-sm hidden-xs">View My Properties</a>
                                                            </div>
                                                            <div class="profile-description-right">
                                                                <ul class="profile-contact">
                                                                    <li><span>OFFICE:</span> <a href="tel:7894563210">789 456 3210</a></li>
                                                                    <li><span>MOBILE:</span> <a href="tel:3214569874">321 456 9874</a></li>
                                                                    <li><span>FAX:</span> <a>897 654 1258</a></li>
                                                                    <li class="email"><span>Email:</span> <a href="mailto:michelle@houzez.com">michelle@houzez.com</a></li>
                                                                </ul>
                                                                <ul class="profile-social">
                                                                    <li><a href="#"><i class="fa fa-phone-square"></i></a></li>
                                                                    <li><a class="btn-facebook" href="#" target="_blank"><i class="fa fa-facebook-square"></i></a></li>
                                                                    <li><a class="btn-twitter" href="#" target="_blank"><i class="fa fa-twitter-square"></i></a></li>
                                                                    <li><a class="btn-linkedin" href="#" target="_blank"><i class="fa fa-linkedin-square"></i></a></li>
                                                                    <li><a class="btn-google-plus" href="#" target="_blank"><i class="fa fa-google-plus-square"></i></a></li>
                                                                    <li><a class="btn-youtube" href="#" target="_blank"><i class="fa fa-youtube-square"></i></a></li>
                                                                </ul>
                                                                <a href="#" class="btn btn-primary btn-block visible-sm visible-xs">View My Properties</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="profile-detail-block">
                                                <div class="media">
                                                    <div class="media-left">
                                                        <figure>
                                                            <img src="http://placehold.it/239x239" alt="agent-1" height="350" width="350">
                                                        </figure>
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="profile-description">
                                                            <div class="profile-description-top">
                                                                <h3>Michelle Ramirez</h3>
                                                                <h4 class="position">
                                                                    Company Agent at Realtory Inc.                                </h4>
                                                            </div>
                                                            <div class="profile-description-left">
                                                                <p>Lorem ipsum dolor sit amet consectetur incididunt ut labore et ipsum dolor sit amet consectetur incididunt ut labore et dolore magna aliqua adipi ipsum dolor sit amet conse ctetur incidit ut labore et dolore magna aliqua incididu nt ut labore ncididunt ut labore et dolore magna aliqua adipi ipsum dncididunt ut labore et dolore magna aliqua adipi ipsum.</p>
                                                                <a href="#" class="btn btn-primary hidden-sm hidden-xs">View My Properties</a>
                                                            </div>
                                                            <div class="profile-description-right">
                                                                <ul class="profile-contact">
                                                                    <li><span>OFFICE:</span> <a href="tel:7894563210">789 456 3210</a></li>
                                                                    <li><span>MOBILE:</span> <a href="tel:3214569874">321 456 9874</a></li>
                                                                    <li><span>FAX:</span> <a>897 654 1258</a></li>
                                                                    <li class="email"><span>Email:</span> <a href="mailto:michelle@houzez.com">michelle@houzez.com</a></li>
                                                                </ul>
                                                                <ul class="profile-social">
                                                                    <li><a href="#"><i class="fa fa-phone-square"></i></a></li>
                                                                    <li><a class="btn-facebook" href="#" target="_blank"><i class="fa fa-facebook-square"></i></a></li>
                                                                    <li><a class="btn-twitter" href="#" target="_blank"><i class="fa fa-twitter-square"></i></a></li>
                                                                    <li><a class="btn-linkedin" href="#" target="_blank"><i class="fa fa-linkedin-square"></i></a></li>
                                                                    <li><a class="btn-google-plus" href="#" target="_blank"><i class="fa fa-google-plus-square"></i></a></li>
                                                                    <li><a class="btn-youtube" href="#" target="_blank"><i class="fa fa-youtube-square"></i></a></li>
                                                                </ul>
                                                                <a href="#" class="btn btn-primary btn-block visible-sm visible-xs">View My Properties</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="profile-detail-block">
                                                <div class="media">
                                                    <div class="media-left">
                                                        <figure>
                                                            <img src="http://placehold.it/239x239" alt="agent-1" height="350" width="350">
                                                        </figure>
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="profile-description">
                                                            <div class="profile-description-top">
                                                                <h3>Michelle Ramirez</h3>
                                                                <h4 class="position">
                                                                    Company Agent at Realtory Inc.                                </h4>
                                                            </div>
                                                            <div class="profile-description-left">
                                                                <p>Lorem ipsum dolor sit amet consectetur incididunt ut labore et ipsum dolor sit amet consectetur incididunt ut labore et dolore magna aliqua adipi ipsum dolor sit amet conse ctetur incidit ut labore et dolore magna aliqua incididu nt ut labore ncididunt ut labore et dolore magna aliqua adipi ipsum dncididunt ut labore et dolore magna aliqua adipi ipsum.</p>
                                                                <a href="#" class="btn btn-primary hidden-sm hidden-xs">View My Properties</a>
                                                            </div>
                                                            <div class="profile-description-right">
                                                                <ul class="profile-contact">
                                                                    <li><span>OFFICE:</span> <a href="tel:7894563210">789 456 3210</a></li>
                                                                    <li><span>MOBILE:</span> <a href="tel:3214569874">321 456 9874</a></li>
                                                                    <li><span>FAX:</span> <a>897 654 1258</a></li>
                                                                    <li class="email"><span>Email:</span> <a href="mailto:michelle@houzez.com">michelle@houzez.com</a></li>
                                                                </ul>
                                                                <ul class="profile-social">
                                                                    <li><a href="#"><i class="fa fa-phone-square"></i></a></li>
                                                                    <li><a class="btn-facebook" href="#" target="_blank"><i class="fa fa-facebook-square"></i></a></li>
                                                                    <li><a class="btn-twitter" href="#" target="_blank"><i class="fa fa-twitter-square"></i></a></li>
                                                                    <li><a class="btn-linkedin" href="#" target="_blank"><i class="fa fa-linkedin-square"></i></a></li>
                                                                    <li><a class="btn-google-plus" href="#" target="_blank"><i class="fa fa-google-plus-square"></i></a></li>
                                                                    <li><a class="btn-youtube" href="#" target="_blank"><i class="fa fa-youtube-square"></i></a></li>
                                                                </ul>
                                                                <a href="#" class="btn btn-primary btn-block visible-sm visible-xs">View My Properties</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="profile-tab-pane tab-pane fade">
                                    <div class="profile-tab-content profile-map">
                                        <div id="map"></div>
                                    </div>
                                </div>
                                <div class="profile-tab-pane tab-pane fade">
                                    <div class="profile-tab-content profile-review">
                                        <h3 class="title">2 Reviews for Real Estate Inc.</h3>
                                        <div class="reviews-list">
                                            <div class="media">
                                                <div class="media-left">
                                                    <a href="#">
                                                        <img class="media-object img-circle" src="http://placehold.it/60x60" alt="Thumb" height="60" width="60">
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <div class="review-top">
                                                        <h3 class="media-heading"><a href="#">John Doe</a></h3>
                                                        <div class="rating">
                                                            <span class="bottom-ratings"><span class="fa fa-star-o"></span><span class="fa fa-star-o"></span><span class="fa fa-star-o"></span><span class="fa fa-star-o"></span><span class="fa fa-star-o"></span><span style="width: 70%" class="top-ratings"><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span></span></span>
                                                        </div>
                                                    </div>
                                                    <p class="review-date">February 6, 2014 </p>

                                                    <p>Lorem ipsum dolor sit amet,
                                                        consectetur adipiscing elit. Etiam
                                                        risus tortor, accumsan at nisi et,
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="media">
                                                <div class="media-left">
                                                    <a href="#">
                                                        <img class="media-object img-circle" src="http://placehold.it/60x60" alt="Thumb" height="60" width="60">
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <div class="review-top">
                                                        <h3 class="media-heading"><a href="#">John Doe</a></h3>
                                                        <div class="rating">
                                                            <span class="bottom-ratings tip"><span class="fa fa-star-o"></span><span class="fa fa-star-o"></span><span class="fa fa-star-o"></span><span class="fa fa-star-o"></span><span class="fa fa-star-o"></span><span style="width: 70%" class="top-ratings"><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span></span></span>
                                                        </div>
                                                    </div>
                                                    <p class="review-date">February 6, 2014 </p>

                                                    <p>Lorem ipsum dolor sit amet,
                                                        consectetur adipiscing elit. Etiam
                                                        risus tortor, accumsan at nisi et,
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="add-review-block">
                                            <h4 class="review-title">Add a review</h4>
                                            <form>
                                                <div class="add-rating">
                                                    <label>Your rating</label>
                                                    <div class="rating">
                                                        <span class="bottom-ratings"><span class="fa fa-star-o"></span><span class="fa fa-star-o"></span><span class="fa fa-star-o"></span><span class="fa fa-star-o"></span><span class="fa fa-star-o"></span><span style="width: 70%" class="top-ratings"><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span></span></span>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-6 col-xs-12">
                                                        <div class="form-group">
                                                            <input class="form-control" placeholder="Your name">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 col-xs-12">
                                                        <div class="form-group">
                                                            <input class="form-control" placeholder="Email address">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-xs-12">
                                                        <div class="form-group">
                                                            <textarea class="form-control" rows="5" placeholder="Your review"></textarea>
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
    </section>
    <!--end section page body-->
    @endsection