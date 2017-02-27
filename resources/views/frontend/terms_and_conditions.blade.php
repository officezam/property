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
                            <li class="active">Terms and Conditions</li>
                        </ol>
                        <div class="page-title-left">
                            <h2>Terms and Conditions</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 container-contentbar">
                    <div class="page-main">
                        <div class="article-detail">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque ut lacinia ex. Curabitur iaculis elit lorem, vitae fringilla turpis ultricies vel. Mauris pretium fermentum est, eget tincidunt massa dignissim sed. Donec vulputate a augue at tincidunt. Fusce scelerisque quam arcu, vitae dictum leo volutpat tempor. Curabitur commodo vulputate ex id posuere. Phasellus at condimentum purus. Praesent et dictum ante. Proin sed ipsum non nisl pretium tempus quis et augue. Morbi ullamcorper, dolor eu accumsan aliquet, nibh nisl molestie odio, at lobortis sapien nisl interdum arcu.</p>
                            <p>Vestibulum vitae varius arcu. Nam mattis est ex, eu iaculis sem euismod nec. Nulla facilisis est vitae enim dictum posuere. Curabitur est tellus, consectetur vitae tellus eget, scelerisque convallis ipsum. Ut id nulla mauris. Proin placerat, mi eget cursus mollis, nulla ipsum venenatis nulla, a varius urna ante eget felis. Nullam tincidunt urna eu cursus sagittis. Aenean id sagittis enim. Aliquam at urna urna. Pellentesque dapibus velit ut ipsum semper lacinia. Etiam sit amet imperdiet diam, eget congue mi. Sed sagittis tortor dolor, a ultrices risus interdum ac. Pellentesque ac arcu malesuada, auctor est vitae, posuere nunc. Curabitur finibus vehicula turpis sit amet commodo. Sed pulvinar ipsum a tellus faucibus, nec mattis orci tempus. Sed fringilla eros efficitur, auctor tortor vel, facilisis justo.</p>
                            <p>Nulla vestibulum tempus odio, sed pulvinar odio sodales ut. Mauris eu ante nulla. Donec tortor ante, sodales sed nibh a, accumsan vestibulum nulla. Cras ut accumsan nibh, ut mollis dolor. Integer vitae sapien eget massa ullamcorper sodales eu et augue. Etiam sagittis rutrum sapien in feugiat. Nunc vitae mi urna. Vestibulum consectetur ornare dolor.</p>
                            <p>Proin vitae molestie nibh, id varius purus. Ut ultricies, dui non pellentesque tempus, dolor lacus facilisis ex, in sodales quam lectus nec mi. Cras interdum massa eu libero efficitur, nec pellentesque ante laoreet. Praesent tristique pellentesque ligula vitae imperdiet. Mauris elementum augue tortor, vitae rhoncus justo ornare non. Pellentesque pharetra quam ac nibh iaculis, eu tincidunt nunc sollicitudin. Nunc dictum libero in feugiat feugiat. Phasellus semper augue et libero gravida, vitae tempus orci porttitor. Nunc lectus justo, condimentum eu libero semper, dictum vestibulum felis. Donec et tellus sed augue consectetur ultricies et ut felis. Sed sem odio, volutpat vitae neque ac, maximus posuere orci. Cras eu ultrices augue. Quisque vel felis eget orci tincidunt auctor volutpat in quam. Aliquam erat volutpat. In elementum quam non nunc accumsan, ut suscipit nibh rutrum. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                            <p>Donec a nibh blandit, porttitor purus id, ornare metus. Donec quis fermentum nunc. Vivamus eget augue sem. Nam sodales eros augue, id sollicitudin urna commodo at. Aenean mauris risus, hendrerit nec metus quis, pharetra accumsan nunc. Suspendisse et luctus lectus. Duis ac condimentum sem, vitae laoreet justo. Vestibulum commodo, massa non dapibus interdum, nulla dui maximus sapien, semper rutrum mi tortor eu eros. Fusce vehicula enim vitae consectetur ultricies. Nunc tincidunt at ipsum eu sollicitudin. Nam et ornare est. Proin cursus metus quam, non faucibus dolor accumsan vitae. Mauris ipsum erat, sodales sit amet neque non, tristique cursus nisl. Sed nisi metus, efficitur eget accumsan semper, scelerisque eu ante.</p>
                            <p>Vivamus auctor mauris risus, sed viverra neque pellentesque ac. Phasellus vestibulum lacus nisl, a semper sem laoreet quis. Fusce nunc arcu, congue vel sodales eu, lacinia at erat. Phasellus finibus dolor lectus, vel tincidunt leo efficitur at. Nullam ut tellus in turpis blandit varius. Sed ut elit nec lectus pretium luctus vitae sit amet est. Etiam in maximus urna. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                            <p>Curabitur tristique nec ex eget posuere. Sed elit lacus, pulvinar eu leo vel, sodales eleifend diam. Nunc tincidunt libero id tellus luctus efficitur. Sed sodales dolor justo, eu ultrices ipsum suscipit non. Nullam eu dolor vitae felis pellentesque finibus. Morbi id imperdiet nunc, non commodo dolor. Quisque non tristique lacus. Ut faucibus, magna in dapibus vehicula, lectus mauris pellentesque metus, eu sagittis mi enim quis massa. Donec nunc urna, pulvinar a vestibulum nec, consequat sit amet urna. Duis augue nisi, rhoncus sed consequat eu, lobortis ut dui. Vivamus placerat auctor arcu eu tincidunt. Proin vel dolor sed lorem feugiat molestie nec et justo.</p>
                            <p>Donec mollis tortor ut est dapibus fermentum. Vestibulum convallis nisl et ipsum sagittis, vel finibus dui lacinia. Quisque ac mi et orci congue commodo in in erat. Suspendisse vulputate tristique neque, eget sollicitudin purus commodo id. Donec vel auctor nibh. Duis interdum lorem purus, eget viverra ipsum congue in. Aliquam erat volutpat. Sed bibendum venenatis pretium. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse et ultricies lectus. Praesent eu felis rutrum, placerat dolor eget, congue urna. Maecenas cursus mattis purus eu tincidunt. Cras pretium elementum elit a tempus.</p>
                            <p>Integer vitae libero eu eros gravida condimentum. Nullam tincidunt eu lectus in pharetra. Aenean consectetur nisi quis nulla condimentum, eget tristique ex pretium. Nunc sit amet convallis lorem. Maecenas eget est enim. Sed scelerisque posuere lacus et consequat. Ut ultrices ultrices maximus. Donec laoreet sagittis suscipit. Fusce vel lectus nibh. Nam vitae tristique ante.</p>
                            <p>Sed sodales ante ut lobortis interdum. Aenean at risus a est euismod feugiat. Pellentesque magna augue, sodales id cursus eu, varius eget massa. Mauris eros nulla, iaculis ac tellus ut, sagittis eleifend nisl. Aliquam ornare magna tincidunt urna dictum, vitae dignissim lectus malesuada. Nam dignissim lacinia orci eu blandit. Etiam in blandit lacus. Nunc quis aliquam felis. Proin id ligula bibendum, convallis nulla eu, porttitor massa. Mauris feugiat, magna sit amet iaculis tempor, erat dui suscipit nunc, ut pretium velit dui nec ante. Pellentesque feugiat dapibus neque et condimentum. Suspendisse eget eleifend massa. Donec cursus odio pharetra felis dignissim, vitae euismod ligula congue. Morbi sapien erat, convallis a magna id, facilisis congue justo. Donec nec mauris nulla. Sed dictum rhoncus nulla, in imperdiet enim dignissim non.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 col-md-offset-0 col-sm-offset-3 container-sidebar">
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
                        <div class="widget widget-pages">
                            <div class="widget-top">
                                <h3 class="widget-title">Pages</h3>
                            </div>
                            <ul>
                                <li><a href="#">Home</a>
                                    <ul class="children">
                                        <li><a href="#">Clearing Floats</a></li>
                                        <li><a href="#">Page Image Alignment</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">About Houzez</a></li>
                                <li><a href="#">Our Agents</a></li>
                                <li><a href="#">Create Listing</a></li>
                                <li><a href="#">Faq</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </div>
                        <div class="widget widget_archive">
                            <div class="widget-top">
                                <h3 class="widget-title">Archives</h3></div>
                            <ul>
                                <li><a href="#">March 2016</a>&nbsp;(10)</li>
                                <li><a href="#">January 2016</a>&nbsp;(1)</li>
                                <li><a href="#">January 2013</a>&nbsp;(5)</li>
                                <li><a href="#">March 2012</a>&nbsp;(5)</li>
                            </ul>
                        </div>
                        <div class="widget widget_meta">
                            <div class="widget-top">
                                <h3 class="widget-title">Meta</h3>
                            </div>
                            <ul>
                                <li><a href="#">Site Admin</a></li>
                                <li><a href="#">Log out</a></li>
                                <li><a href="#">Entries <abbr title="Really Simple Syndication">RSS</abbr></a></li>
                                <li><a href="#">Comments <abbr title="Really Simple Syndication">RSS</abbr></a></li>
                            </ul>
                        </div>
                        <div class="widget widget-reviews">
                            <div class="widget-top">
                                <h3 class="widget-title">Latest Reviews</h3>
                            </div>
                            <div class="widget-body">
                                <div class="media">
                                    <div class="media-left">
                                        <a href="#">
                                            <img class="media-object img-circle" src="http://placehold.it/50x50" alt="Thumb" width="50" height="50">
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <h3 class="media-heading"><a href="#">Property title</a></h3>
                                        <div class="rating">
                                            <span class="bottom-ratings"><span class="fa fa-star-o"></span><span class="fa fa-star-o"></span><span class="fa fa-star-o"></span><span class="fa fa-star-o"></span><span class="fa fa-star-o"></span><span style="width: 70%" class="top-ratings"><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span></span></span>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet,
                                            consectetur adipiscing elit. Etiam
                                            risus tortor, accumsan at nisi et,
                                        </p>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="media-left">
                                        <a href="#">
                                            <img class="media-object img-circle" src="http://placehold.it/50x50" alt="Thumb" width="50" height="50">
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <h3 class="media-heading"><a href="#">Property title</a></h3>
                                        <div class="rating">
                                            <span class="bottom-ratings"><span class="fa fa-star-o"></span><span class="fa fa-star-o"></span><span class="fa fa-star-o"></span><span class="fa fa-star-o"></span><span class="fa fa-star-o"></span><span style="width: 70%" class="top-ratings"><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span></span></span>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet,
                                            consectetur adipiscing elit. Etiam
                                            risus tortor, accumsan at nisi et,
                                        </p>
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
@stop