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
    <script>
        (function($){
            var theMap;
            function initMap() {

                /* Properties Array */
                var properties = [{"title":"Guaranteed modern home","full_address":"9701 W Broadview Dr, Bay Harbor Islands, FL 33154, Stati Uniti","thumbnail":"<img src='http://placehold.it/385x258' alt='thumb'>","url":"index.html","prop_meta":"<p><span>Beds: 3</span><span>Baths: 2</span><span>Sq Ft: 3410</span></p>","type":"Single Family Home","images_count":7,"bedrooms":3,"bathrooms":2,"price":"<span class='item-price'>$590,000</span><span class='item-sub-price'>$3,500&#47;sq ft</span>","is_featured":"","icon":"http://sandbox.favethemes.com/houzez/wp-content/uploads/2016/02/x1-single-family-home.png","retinaIcon":"http://sandbox.favethemes.com/houzez/wp-content/uploads/2016/02/x2-single-family-home.png","lat":"40.67921","lng":"-73.9280339"},
                    {"title":"Modern day apartment","full_address":"135 E Flagler St, Miami, FL 33131, Stati Uniti","thumbnail":"<img src='http://placehold.it/385x258' alt='thumb'>","url":"index.html","prop_meta":"<p><span>Bed: 1</span><span>Bath: 1</span><span>Sq Ft: 1678</span></p>","type":"Apartment","images_count":7,"bedrooms":1,"bathrooms":1,"price":"<span class='item-price'>$3,750&#47;mo</span>","is_featured":"","icon":"http://sandbox.favethemes.com/houzez/wp-content/uploads/2016/02/x1-apartment.png","retinaIcon":"http://sandbox.favethemes.com/houzez/wp-content/uploads/2016/02/x2-apartment.png","lat":"25.7744034","lng":"-80.19121100000001"},
                    {"title":"667 NE 26th St, Miami, FL 33137, Stati Uniti","full_address":"667 NE 26th St, Miami, FL 33137, Stati Uniti","thumbnail":"<img src='http://placehold.it/385x258' alt='thumb'>","url":"index.html","prop_meta":"<p><span>Bed: 1</span><span>Bath: 1</span><span>Sq Ft: 1760</span></p>","type":"Apartment","images_count":7,"bedrooms":1,"bathrooms":1,"price":"<span class='item-price'>$3,500&#47;mo</span>","is_featured":"","icon":"http://sandbox.favethemes.com/houzez/wp-content/uploads/2016/02/x1-apartment.png","retinaIcon":"http://sandbox.favethemes.com/houzez/wp-content/uploads/2016/02/x2-apartment.png","lat":"25.8019019","lng":"-80.18649200000004"}];


                var myLatLng = new google.maps.LatLng(properties[0].lat,properties[0].lng);

                var houzezMapOptions = {
                    zoom: 12,
                    maxZoom: 12,
                    center: myLatLng,
                    disableDefaultUI: true,
                    scrollwheel: false,
                    mapTypeId: google.maps.MapTypeId.ROADMAP,
                    scroll:{x:$(window).scrollLeft(),y:$(window).scrollTop()}
                };
                var theMap = new google.maps.Map(document.getElementById("houzez-listing-map"), houzezMapOptions);

                if (Modernizr.mq('only all and (max-width: 1000px)')) {
                    theMap.setOptions({'draggable': false});
                }

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
                            '<h4 class="property-location">'+properties[i].full_address+'</h4>' +
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

                jQuery('#houzez-gmap-next').click(function(){
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

                jQuery('#houzez-gmap-prev').click(function(){
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

                google.maps.event.addListenerOnce(theMap, 'tilesloaded', function() {
                    $('.mapPlaceholder').hide();
                });

            }

            google.maps.event.addDomListener( window, 'load', initMap );
        })(jQuery)
    </script>