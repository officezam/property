@extends('layouts.dashboard')
@section('content')
  <!--start section page body-->
    <section id="section-body" class="houzez-map-full">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12 no-padding">
                    <div class="map-full fave-screen-fix">
                        <div id="map-wrap">
                            <div class="mapPlaceholder">
                                <div class="loader-ripple">
                                    <div></div>
                                    <div></div>
                                </div>
                            </div>
                            <div id="map"></div>
                        </div>
                    </div>
                    <div class="search-panel panel-open fave-screen-fix">
                        <button type="button" class="btn btn-primary search-panel-btn"><i class="fa fa-plus"></i></button>
                        <form>
                            <div class="search-scroll">
                                <div class="search-scroll-inner">
                                    <div class="row">
                                        <!--<div class="col-sm-12">
                                            <div class="form-group">
                                                <label> Search by </label>
                                                <div class="clearfix"></div>
                                                <div class="btn-group" data-toggle="buttons">
                                                    <label class="btn btn-search-option btn-default active">
                                                        <input type="radio" name="options" id="option1" autocomplete="off" checked> Area
                                                    </label>
                                                    <label class="btn btn-search-option btn-default">
                                                        <input type="radio" name="options" id="option2" autocomplete="off"> Draw
                                                    </label>
                                                    <label class="btn btn-search-option btn-default">
                                                        <input type="radio" name="options" id="option3" autocomplete="off"> <i class="fa fa-send"></i>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>-->
                                        <div class="col-sm-12 col-xs-12">
                                            <div class="form-group">
                                                <div class="input-search input-icon">
                                                    <input class="form-control" value="" name="keyword" placeholder="Enter Keyword" type="text">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-xs-12">
                                            <div class="form-group">
                                                <label> Region </label>
                                                <select class="selectpicker" data-live-search="false" data-live-search-style="begins" title="All cities">
                                                    <option>City 1</option>
                                                    <option>City 2</option>
                                                    <option>City 3</option>
                                                    <option>City 4</option>
                                                    <option>City 5</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <select class="selectpicker" data-live-search="false" data-live-search-style="begins" title="All cities">
                                                    <option>City 1</option>
                                                    <option>City 2</option>
                                                    <option>City 3</option>
                                                    <option>City 4</option>
                                                    <option>City 5</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-xs-12">
                                            <div class="form-group">
                                                <label> Property type </label>
                                                <select class="selectpicker" data-live-search="false" data-live-search-style="begins" title="All types">
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
                                                <div class="input-group input-count-group">
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
                                                <div class="input-group input-count-group">
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
                                            <div class="range-advanced-main">
                                                <div class="range-text">
                                                    <input type="text" class="min-size-range-hidden range-input" readonly >
                                                    <input type="text" class="max-size-range-hidden range-input" readonly >
                                                    <p><span class="range-title">Size:</span> <span class="min-size-range"></span> to <span class="max-size-range"></span></p>
                                                </div>
                                                <div class="range-wrap">
                                                    <div class="size-range-advanced"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-xs-12">
                                            <div class="options-btn-wrap">
                                                <label class="advance-trigger"><i class="fa fa-plus-square"></i> Other feature</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-xs-12">
                                            <div class="features-list field-expand">
                                                <label class="checkbox-inline">
                                                    <input name="feature" value="" type="checkbox">
                                                    Features
                                                </label>
                                                <label class="checkbox-inline">
                                                    <input name="feature" value="" type="checkbox">
                                                    Features
                                                </label>
                                                <label class="checkbox-inline">
                                                    <input name="feature" value="" type="checkbox">
                                                    Features
                                                </label>
                                                <label class="checkbox-inline">
                                                    <input name="feature" value="" type="checkbox">
                                                    Features
                                                </label>
                                                <label class="checkbox-inline">
                                                    <input name="feature" value="" type="checkbox">
                                                    Features
                                                </label>
                                                <label class="checkbox-inline">
                                                    <input name="feature" value="" type="checkbox">
                                                    Features
                                                </label>
                                                <label class="checkbox-inline">
                                                    <input name="feature" value="" type="checkbox">
                                                    Features
                                                </label>
                                                <label class="checkbox-inline">
                                                    <input name="feature" value="" type="checkbox">
                                                    Features
                                                </label>
                                                <label class="checkbox-inline">
                                                    <input name="feature" value="" type="checkbox">
                                                    Features
                                                </label>
                                                <label class="checkbox-inline">
                                                    <input name="feature" value="" type="checkbox">
                                                    Features
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="search-bottom">
                                <div class="row">
                                    <div class="col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-secondary btn-block">Search</button>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-xs-6">
                                        <button type="button" class="reset-save"><i class="fa fa-save"></i> Save Search</button>
                                    </div>
                                    <div class="col-sm-6 col-xs-6 text-right">
                                        <button type="button" class="reset-save"><i class="fa fa-close"></i> Reset Search</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--end section page body-->
@stop
  <script type="text/javascript">

        var map = null;
        var fenway = new google.maps.LatLng(25.783967, -80.127899);

        // Specify features and elements to define styles.
        var styleArray = [
            {
                featureType: "all",
                stylers: [
                    { saturation: -80 }
                ]
            },{
                featureType: "road.arterial",
                elementType: "geometry",
                stylers: [
                    { hue: "#00ffee" },
                    { saturation: 50 }
                ]
            },{
                featureType: "poi.business",
                elementType: "labels",
                stylers: [
                    { visibility: "off" }
                ]
            }
        ];

        var mapOptions = {
            center: fenway,
            scrollwheel: false,
            zoom: 12,
            mapTypeControlOptions: {
                mapTypeIds: [google.maps.MapTypeId.ROADMAP, 'map_style']
            }

        };

        function initialize() {

            map = new google.maps.Map(document.getElementById('map'), mapOptions);
            var styledMap = new google.maps.StyledMapType(styleArray,{name: "Styled Map"});

            //Associate the styled map with the MapTypeId and set it to display.
            map.mapTypes.set('map_style', styledMap);
            map.setMapTypeId('map_style');

            google.maps.event.addListenerOnce(map, 'tilesloaded', function() {
                $('.mapPlaceholder').hide();
            });

        }
        google.maps.event.addDomListener(window, 'load', initialize);

    </script>
