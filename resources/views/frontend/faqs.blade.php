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
                            <li><a href="index.html"><i class="fa fa-home"></i></a></li>
                            <li class="active">Frequently Asked Questions</li>
                        </ol>
                        <div class="page-title-left">
                            <h2>Frequently Asked Questions</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 container-contentbar">
                    <div class="page-main">
                        <div class="article-detail">
                            <p>Select one of the frequently asked questions below to learn more about buying, selling, and renting real estate. Also, begin to think about important things to consider when diving into your real estate search.</p>
                            <h2>Question about selling</h2>
                            <div class="toggle-content-area">
                                <div class="toggle-content-main">
                                    <div class="toggle-title">
                                        <h4>Can a home depreciate in value?</h4>
                                    </div>
                                    <div class="toggle-content">
                                        <p>Generally, real property never depreciates in value, or more so, it is not very common for property to depreciate.&nbsp;&nbsp;This is why it’s a great investment.&nbsp;Make sure&nbsp;you&nbsp;carefully consider location and community when choosing a home, it can effect the homes future value greatly.</p>
                                        <p>If you are in a newly developed area, do some research on the construction&nbsp;of the&nbsp;surrounding areas being developed to determine if they may effect your homes value.</p>
                                    </div>
                                </div>
                                <div class="toggle-content-main">
                                    <div class="toggle-title">
                                        <h4>Is an older home as good a value as a new home?</h4>
                                    </div>
                                    <div class="toggle-content">
                                        <p>This is really just a matter of preference, but both newer and older homes offer distinct advantages, depending upon your unique taste and lifestyle.</p>
                                            <p>Older homes can generally cost less than new homes,&nbsp;however, there are many cases where new homes can also cost less then older homes.&nbsp;Most new homes will not have any backyard landscaping and some don”t include any front landscaping either. With an older home, the landscaping is normally already completed and could have 10”s of thousands of dollars in landscaping done, which is included in the purchase price.</p>
                                            <p>Taxes on some older homes may also be lower. Some people are charmed by the elegance of an older home but shy away because they”re concerned about potential maintenance costs. Consider a home warranty to get the peace of mind you deserve. A good Home Warranty plan protects you against unexpected repairs on many home systems and appliances for a full year or more after you move in.</p>
                                            <p>In a new house, you can pick your own color schemes, flooring, kitchen cabinets, appliances, custom wiring for TV”s, electrical, computers, phones and speakers, etc., as well as have more upgrade options. Modern features like media rooms, extra-large closets and extra-large bathrooms and tubs are also more attainable in ground-up construction. In a used home, you rely largely on the previous resident”s tastes and technological whims, unless you plan to farm thousands into a remodeling and rewiring.</p>
                                            <p>New-home designers can use new building materials such as glazed Energy Star windows, thicker insulation and other technology that will lower future energy costs for the owner. Most states now have minimum energy-efficiency requirements for new construction. Kitchens and laundry areas in new homes are designed to house more efficient energy-saving appliances. Older homes, unless they have undergone an energy retrofit, usually cost much more per square foot to air-condition and heat.</p>
                                            <p>Builders have to follow very strict guidelines in new-homes and additions, especially in the West and Northwest, where earthquake safety standards must be observed. In general, new homes are usually more fire-safe and better accommodating of new security and garage-door systems.</p>
                                            <p>Older homes can be better judged for their quality and timeless beauty. New homes that now possess a smooth veneer might reveal the use of substandard building materials or shoddy workmanship over time.</p>
                                            <p>As you can see there are advantages and dis-advantages to each, but it really comes down to what fits you and what you are looking for in a home.</p>

                                    </div>
                                </div>
                                <div class="toggle-content-main">
                                    <div class="toggle-title">
                                        <h4>What is a broker?</h4>
                                    </div>
                                    <div class="toggle-content">
                                        <p>An agent who is authorized to open and run his/her own agency. All real estate offices have one principal broker.</p>
                                    </div>
                                </div>
                            </div>
                            <h2>Question about renting</h2>
                            <div class="toggle-content-area">
                                <div class="toggle-content-main">
                                    <div class="toggle-title">
                                        <h4>How long does the loan process take?</h4>
                                    </div>
                                    <div class="toggle-content">
                                        <p>Most mortgages originated today calculate interest in arrears, unlike consumer loans which calculate interest to the date of payment receipt. As an example, when borrowers pay their February mortgage payments, they are paying the January interest. This method of calculating interest is based on a 360 day year in which each month has 30 days.</p>
                                    </div>
                                </div>
                                <div class="toggle-content-main">
                                    <div class="toggle-title">
                                        <h4>How can I avoid private mortgage insurance?</h4>
                                    </div>
                                    <div class="toggle-content">
                                        <p>The easiest way to avoid PMI is by putting 20% down payment; however, PMI can also be avoided if you only have 5% or 10% for the down payment. The way to accomplish this is via a first and second mortgage combination commonly referred to as 80/10/10^s or 80/15/5^s.</p>
                                            <p>These two methods combine a first mortgage lien for 80% of the home price with a second mortgage lien for either 10% or 15% of the home price leaving the remaining 5% or 10% as the down payment. Because the first lien is at the magical 80% loan=to-value, there is no PMI required, even though a second mortgage is being |piggybacked| onto the financing thus allowing for the lessor down payment.</p>
                                            <p>While the second lien terms are not as attractive as first lien rates, the second mortgage is still home mortgage interest and thus deductible as such on your federal tax return where PMI is insurance and offers no deduction.</p>

                                    </div>
                                </div>
                                <div class="toggle-content-main">
                                    <div class="toggle-title">
                                        <h4>How is interest calculated on a mortgage loan?</h4>
                                    </div>
                                    <div class="toggle-content">
                                        <p>Most mortgages originated today calculate interest in arrears, unlike consumer loans which calculate interest to the date of payment receipt. As an example, when borrowers pay their February mortgage payments, they are paying the January interest. This method of calculating interest is based on a 360 day year in which each month has 30 days.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-md-offset-0 col-sm-offset-3 container-sidebar">
                    <aside id="sidebar">
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
                        <div class="widget widget-categories">
                            <div class="widget-top">
                                <h3 class="widget-title">Property Categories</h3>
                            </div>
                            <div class="widget-body">
                                <ul>
                                    <li><a href="">Apartment</a> <span class="cat-count">(30)</span></li>
                                    <li><a href="">Condo</a> <span class="cat-count">(30)</span></li>
                                    <li><a href="">Single Family Home</a> <span class="cat-count">(30)</span></li>
                                    <li><a href="">Villa</a> <span class="cat-count">(30)</span></li>
                                    <li><a href="">Studio</a> <span class="cat-count">(30)</span></li>
                                </ul>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>
    <!--end section page body-->
@stop