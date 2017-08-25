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
            <div class="page-title page-title-center breadcrumb-top">
                <div class="row">
                    <div class="col-sm-12">
                        <ol class="breadcrumb"><li ><a href="/"><i class="fa fa-home"></i></a></li><li class="active"> Forgot Password </li></ol>
                        <div class="page-title-left">
                            <h1> Forgot Password </h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="login-register-block login-block">
                        <form>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="New Password">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Confirm Password">
                            </div>
                            <button class="btn btn-primary btn-block">Register</button>
                            <a href="#" class="back text-center"> Log in | Register </a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--end section page body-->
@stop