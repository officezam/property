/*
 Theme Name: Houzez HTML Template
 Description: Houzez
 Author: http://favethemes.com/
 Developed by: Muhammed Ans
 Version: 1.0
 */

var nice = false;
(function($){
    "use strict";

    /* ------------------------------------------------------------------------ */
    /*  GLOBAL VARIABLES
     /* ------------------------------------------------------------------------ */
    var houzez_rtl = false;
    var admin_bar = $('#wpadminbar');
    var top_bar = $('.top-bar');
    var header = $('.header-main');
    var header_bottom = header.find('.header-bottom');
    var header_splash = $('.splash-header');
    var search_bar = $('.advance-search-header');
    var header_mobile = $('.header-mobile');
    var search_bar_mobile = $('.advanced-search-mobile');
    var splash_footer = $('.splash-footer');


    var header_sticky = header.data('sticky');
    var header_bottom_sticky = header_bottom.data('sticky');
    var search_sticky = search_bar.data('sticky');
    var header_mobile_sticky = header_mobile.data('sticky');

    var header_height = header.outerHeight();
    var search_bar_height = search_bar.outerHeight();
    var header_bottom_height = header_bottom.outerHeight();
    var search_bar_mobile_height = search_bar_mobile.outerHeight();
    var mob_header_height = header_mobile.outerHeight();
    var mob_search_bar_height = search_bar_mobile.outerHeight();
    var splash_footer_height = splash_footer.outerHeight();
    var top_bar_height = top_bar.outerHeight();
    var admin_bar_height = admin_bar.outerHeight();
    var splash_header_height = header_splash.outerHeight();

    var section_body = $('#section-body');
    var header_media = $('.header-media');

    /* ------------------------------------------------------------------------ */
    /*  parseInt Radix 10
     /* ------------------------------------------------------------------------ */
    function parseInt10(val){
        return parseInt(val,10);
    }

    /* ------------------------------------------------------------------------ */
    /*  BOOTSTRAP POPOVER
     /* ------------------------------------------------------------------------ */
    var popover_ele = $('[data-toggle="popover"]');
    popover_ele.popover({
        trigger: "hover",
        html: true
    });

    /* ------------------------------------------------------------------------ */
    /*  BOOTSTRAP TOOLTIP
     /* ------------------------------------------------------------------------ */

    $('[data-toggle="tooltip"]').tooltip();

    /* ------------------------------------------------------------------------ */
    /*  CHECK USER AGENTS
     /* ------------------------------------------------------------------------ */
    var isChrome = /Chrome/.test(navigator.userAgent) && /Google Inc/.test(navigator.vendor);
    var isSafari = /Safari/.test(navigator.userAgent) && /Apple Computer/.test(navigator.vendor);

    /* ------------------------------------------------------------------------ */
    /*  BODY LOAD
     /* ------------------------------------------------------------------------ */
    //$(window).on('load',function(){
    //jQuery('body').addClass('loaded');
    //});

    /* ------------------------------------------------------------------------ */
    /*  SCROLL TO TOP
     /* ------------------------------------------------------------------------ */
    //Check to see if the window is top if not then display button
    var scroll_btn = $('.scrolltop-btn');
    $(window).on('scroll',function(){
        if ($(this).scrollTop() > 100) {
            scroll_btn.show();
        } else {
            scroll_btn.hide();
        }
    });

    /* ------------------------------------------------------------------------ */
    /*  MAP ZOOM
     /* ------------------------------------------------------------------------ */
    var map_full_btn = $('.map-zoom-actions #houzez-gmap-full');
    var map_main = $('#houzez-gmap-main');

    map_full_btn.on('click',function () {
        var map_btn_this = $(this);
        if(map_btn_this.hasClass('active')){
            map_btn_this.removeClass('active').children('span').text('Fullscreen');
            map_btn_this.children('i').removeClass('fa-square-o').addClass('fa-arrows-alt');
            map_main.removeClass('mapfull');
            header_media.delay(1000).queue(function(next){
                header_media.css('height','auto');
                next();
            });

        }else{
            header_media.height(map_main.height());
            map_btn_this.addClass('active').children('span').text('Default');
            map_btn_this.children('i').removeClass('fa-arrows-alt').addClass('fa fa-square-o');
            map_main.addClass('mapfull');
        }
    });

    /* ------------------------------------------------------------------------ */
    /*  COMPARE PANEL
     /* ------------------------------------------------------------------------ */
    var panel_btn = $('.panel-btn');
    var panel_body = $('.compare-panel');
    panel_btn.on('click',function () {
        if(panel_body.hasClass('panel-open')){
            panel_body.removeClass('panel-open');
        }else{
            panel_body.addClass('panel-open');
        }
    });

    /* ------------------------------------------------------------------------ */
    /*  PAYPAL OPTIONS
     /* ------------------------------------------------------------------------ */
    var method_select = $('.method-select input');
    var method_option = $('.method-option');
    method_select.on('change',function () {
        var this_option = $(this);
        if(this_option.is(':checked') && this_option.val() === '1'){
            method_option.slideUp();
            this_option.parents('.method-row').next('.method-option').slideDown();
        }else{
            method_option.slideUp();
        }
    });
    function paypal_option(ele){
        if($(ele).is(':checked') && $(ele).val() === '1'){
            $(ele).parents('.method-row').next('.method-option').slideDown();
        }else{
            $(ele).parents('.method-row').next('.method-option').slideUp();
        }
    }

    paypal_option('.payment-paypal');
    paypal_option('.payment-stripe');

    /* ------------------------------------------------------------------------ */
    /*  INPUT PLUS MINUS
     /* ------------------------------------------------------------------------ */
    var btn_number = $('.btn-number');
    var input_number = $('.input-number');

    btn_number.on('click',function(e){
        e.preventDefault();
        var number_this = $(this);

        var fieldName = number_this.attr('data-field');
        var type      = number_this.attr('data-type');
        var input = $("input[name='"+fieldName+"']");
        var currentVal = parseInt10(input.val());
        if (!isNaN(currentVal)) {
            if(type === 'minus') {

                if(currentVal > input.data('min')) {
                    input.val(currentVal - 1).change();
                }
                if(parseInt10(input.val()) === input.data('min')) {
                    $(this).attr('disabled', true);
                }

            } else if(type === 'plus') {

                if(currentVal < input.data('max')) {
                    input.val(currentVal + 1).change();
                }
                if(parseInt10(input.val()) === input.data('max')) {
                    $(this).attr('disabled', true);
                }

            }
        } else {
            input.val(0);
        }
    });

    input_number.on('focusin',function(){
        $(this).data('oldValue', $(this).val());
    });

    input_number.on('change',function() {

        var minValue =  parseInt10($(this).data('min'));
        var maxValue =  parseInt10($(this).data('max'));
        var valueCurrent = parseInt10($(this).val());

        var name = $(this).attr('name');
        if(valueCurrent >= minValue) {
            $(".btn-number[data-type='minus'][data-field='"+name+"']").removeAttr('disabled')
        } else {
            alert('Sorry, the minimum value was reached');
            $(this).val($(this).data('oldValue'));
        }
        if(valueCurrent <= maxValue) {
            $(".btn-number[data-type='plus'][data-field='"+name+"']").removeAttr('disabled')
        } else {
            alert('Sorry, the maximum value was reached');
            $(this).val($(this).data('oldValue'));
        }


    });

    input_number.on('keydown',function (e) {
        // Allow: backspace, delete, tab, escape, enter and .
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 190]) !== -1 ||
            // Allow: Ctrl+A
            (e.keyCode === 65 && e.ctrlKey === true) ||
            // Allow: home, end, left, right
            (e.keyCode >= 35 && e.keyCode <= 39)) {
            // let it happen, don't do anything
            return;
        }
        // Ensure that it is a number and stop the keypress
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
        }
    });

    /* ------------------------------------------------------------------------ */
    /*  IF HEADER OR SEARCH STICKY
     /* ------------------------------------------------------------------------ */

    var topMargin = null;

    if(header_sticky === 1 && search_sticky === 0){
        topMargin = header_height;
    }
    if(search_sticky === 1 && header_sticky === 0){
        topMargin = search_bar_height;
    }
    if(header_bottom_sticky === 1 && search_sticky === 0){
        topMargin = header_bottom_height;
    }

    if(search_sticky === 1 && header_bottom_sticky === 0){
        topMargin = search_bar_height;
    }
    if(search_sticky === 0 && header_bottom_sticky === 0){
        topMargin = 0;
    }
    if(header_sticky === 0 && search_sticky === 0){
        topMargin = 0;
    }
    if(header.not('[data-sticky]') && search_bar.not('[data-sticky]')){
        topMargin = 0;
    }
    if(header_bottom.not('[data-sticky]') && search_bar.not('[data-sticky]')){
        topMargin = 0;
    }
    if(header_bottom === 1 && search_bar.not('[data-sticky]')){
        topMargin = header_bottom_height;
    }
    if(header_bottom.not('[data-sticky]') && search_sticky === 1){
        topMargin = search_bar_height;
    }
    if(header.not('[data-sticky]') && search_sticky === 1){
        topMargin = search_bar_height;
    }
    if(header_sticky === 1 && search_bar.not('[data-sticky]')){
        topMargin = header_height;
    }

    if(header.hasClass('header-section-3') && header_bottom_sticky === 1){
        topMargin = header_bottom_height;
    }

    if(header.hasClass('header-section-3') && search_sticky === 1){
        topMargin = search_bar_height;
    }

    if(header.hasClass('header-section-2') && header_bottom_sticky === 1){
        topMargin = header_bottom_height;
    }

    if(header.hasClass('header-section-2') && search_sticky === 1){
        topMargin = search_bar_height;
    }

    /* ------------------------------------------------------------------------ */
    /*  PROPERTY MENU TARGET NAV
     /* ------------------------------------------------------------------------ */
    var property_menu = $('.property-menu-wrap');
    var menu_target = $(".target");
    var target_block = $('.target-block');
    var property_menu_height = property_menu.innerHeight();
    var html_body = $("html, body");
    var detail_media = $('.detail-media');

    if(property_menu.length) {
        menu_target.each(function () {
            $(this).on('click', function (e) {
                var jump = $(this).attr("href");
                var scrollto = ($(jump).offset().top);
                scrollto = scrollto - (topMargin) - (property_menu_height);
                html_body.animate({scrollTop: scrollto}, {duration: 1000, easing: 'easeInOutExpo', queue: false});
                e.preventDefault();
            });
        });

        $(window).on('scroll', function () {
            var scroll_top = $(window).scrollTop();
            target_block.each(function () {
                var target_this = $(this);
                if (scroll_top >= target_this.offset().top - (topMargin) - (property_menu_height)) {
                    var id = target_this.attr('id');
                    menu_target.removeClass('active');
                    $('.target[href="#' + id + '"]').addClass('active');
                } else if (scroll_top <= 0) {
                    menu_target.removeClass('active');
                }
            });
        });
    }
    $(".back-top").on('click',function() {
        html_body.animate({ scrollTop: 0 },"slow");
        //e.preventDefault();
        return false;
    });

    /* ------------------------------------------------------------------------ */
    /*  PROPERTY MENU STICKY
     /* ------------------------------------------------------------------------ */

    if(property_menu.length) {
        $(window).on('scroll', function () {
            var scroll_top = $(window).scrollTop();
            if (scroll_top >= detail_media.offset().top + (200)) {
                property_menu.css({top: topMargin}).fadeIn();
            } else if (scroll_top <= detail_media.offset().top + (200)) {
                property_menu.css({top: topMargin}).fadeOut();
            }
        });
    }

    /* ------------------------------------------------------------------------ */
    /*  One page smooth scroll
     /* ------------------------------------------------------------------------ */
    $(function() {
        $('.header-main a[href*="#"]:not([href="#"])').on('click',function() {
            if (location.pathname.replace(/^\//,'') === this.pathname.replace(/^\//,'') && location.hostname === this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
                if (target.length) {
                    html_body.animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
    });

    /* ------------------------------------------------------------------------ */
    /*  NICE SCROLL
     /* ------------------------------------------------------------------------ */
    /*var nice = $("html").niceScroll({
     //cursorcolor: "#666",
     scrollspeed: 50,
     mousescrollstep: 30,
     //boxzoom: false,
     //autohidemode: false,
     cursorborder: "0 solid #666",
     //cursorborderradius: "0",
     cursorwidth: 6,
     //background: "#666",
     //horizrailenabled: false
     });*/


    /* ------------------------------------------------------------------------ */
    /*  ADD COMMA TO VALUE
     /* ------------------------------------------------------------------------ */
    var addCommas = function(nStr) {
        nStr += '';
        var x = nStr.split('.');
        var x1 = x[0];
        var x2 = x.length > 1 ? '.' + x[1] : '';
        var rgx = /(\d+)(\d{3})/;
        while (rgx.test(x1)) {
            x1 = x1.replace(rgx, '$1' + ',' + '$2');
        }
        return x1 + x2;
    };
    /* ------------------------------------------------------------------------ */
    /*	RANGE SLIDERS
     /* ------------------------------------------------------------------------ */
    var slider_price = $( "#slider-price");
    var min_price = $("#min-price");
    var max_price = $("#max-price");

    if(slider_price.length >0) {
        slider_price.slider({
            range: true,
            min: 500,
            max: 5000,
            values: [500, 5000],
            slide: function (event, ui) {
                min_price.val("$ " + ui.values[0]);
                max_price.val("$ " + ui.values[1]);
            }
        });
        min_price.val("$ " + slider_price.slider("values", 0));
        max_price.val("$ " + slider_price.slider("values", 1));
    }

    var slider_size = $( "#slider-size");
    var min_size = $("#min-size");
    var max_size = $("#max-size");

    if(slider_size.length >0) {
        slider_size.slider({
            range: true,
            min: 0,
            max: 6000,
            values: [500, 6000],
            slide: function (event, ui) {
                min_size.val(ui.values[0] + " sqft");
                max_size.val(ui.values[1] + " sqft");
            }
        });
        min_size.val(slider_size.slider("values", 0) + " sqft");
        max_size.val(slider_size.slider("values", 1) + " sqft");
    }

    var price_range_advanced = $( ".price-range-advanced");
    var min_price_range_hidden = $(".min-price-range-hidden");
    var max_price_range_hidden = $(".max-price-range-hidden");
    var min_price_range = $(".min-price-range");
    var max_price_range = $(".max-price-range");

    if(price_range_advanced.length >0) {
        price_range_advanced.slider({
            range: true,
            min: 500,
            max: 5000,
            values: [500, 5000],
            slide: function (event, ui) {
                min_price_range_hidden.val("$ " + addCommas(ui.values[0]));
                max_price_range_hidden.val("$ " + addCommas(ui.values[1]));

                min_price_range.text("$ " + addCommas(ui.values[0]));
                max_price_range.text("$ " + addCommas(ui.values[1]));
            }
        });

        min_price_range_hidden.val("$ " + addCommas(price_range_advanced.slider("values", 0)));
        max_price_range_hidden.val("$ " + addCommas(price_range_advanced.slider("values", 1)));

        min_price_range.text("$ " + addCommas(price_range_advanced.slider("values", 0)));
        max_price_range.text("$ " + addCommas(price_range_advanced.slider("values", 1)));
    }

    var size_range_advanced = $( ".size-range-advanced");
    var min_size_range_hidden = $(".min-size-range-hidden");
    var max_size_range_hidden = $(".max-size-range-hidden");
    var min_size_range = $(".min-size-range");
    var max_size_range = $(".max-size-range");

    if(size_range_advanced.length >0) {
        size_range_advanced.slider({
            range: true,
            min: 500,
            max: 5000,
            values: [500, 5000],
            slide: function (event, ui) {
                min_size_range_hidden.val(ui.values[0] + " sqft");
                max_size_range_hidden.val(ui.values[1] + " sqft");

                min_size_range.text(size_range_advanced.slider("values", 0) + " sqft");
                max_size_range.text(size_range_advanced.slider("values", 1) + " sqft");
            }
        });

        min_size_range_hidden.val(size_range_advanced.slider("values", 0) + " sqft");
        max_size_range_hidden.val(size_range_advanced.slider("values", 1) + " sqft");

        min_size_range.text(size_range_advanced.slider("values", 0) + " sqft");
        max_size_range.text(size_range_advanced.slider("values", 1) + " sqft");
    }

    var area_range_slider = $( "#area-range-slider");
    var area_range_text = $("#area-range-text");
    var area_range_value = $("#area-range-value");

    if(area_range_slider.length >0) {
        area_range_slider.slider(
            {
                value: 0,
                min: 0,
                max: 100,
                step: 1,
                slide: function (event, ui) {
                    area_range_text.html(ui.value);
                    area_range_value.val(ui.value);
                }
            }
        );

        area_range_text.html(area_range_slider.slider('value'));
        area_range_value.val(area_range_slider.slider('value'));
    }

    /* ------------------------------------------------------------------------ */
    /*  HEADER STICKY
     /* ------------------------------------------------------------------------ */

    //var header_inner = header_bottom_sticky;
    var get_header_class = header.attr('class');

    if(header_bottom_sticky === 1){
        this_sticky(header_bottom);
    }
    if(header_sticky === 1){
        this_sticky(header);
    }
    if(header_mobile_sticky === 1){
        this_sticky(header_mobile);
    }

    function this_sticky(ele){


        var header_position = ele.outerHeight();
        var sticky_nav = ele.clone().removeAttr('style').removeClass('houzez-header-transparent');
        var sticky_wrap = $(sticky_nav).wrap("<div class='sticky_nav'></div>").parent().addClass(get_header_class).removeClass('houzez-header-transparent');
        sticky_wrap = sticky_wrap.removeClass('header-transparent not-splash-header nav-left');

        $('body').append( sticky_wrap );

        function fix_header(){
            sticky_wrap.css( 'top', '0' );
        }

        $(window).on('scroll', function(){
            var scroll_top = $(window).scrollTop();
            if( scroll_top >= ele.position().top + header_position ){
                sticky_wrap.slideDown(function () {
                    houzez_megamenu();
                });
            }
            else if(scroll_top <= ele.position().top){
                sticky_wrap.fadeOut();
            }
        });

        fix_header();
        $(window).resize(function(){
            fix_header();
        });
    }

    /* ------------------------------------------------------------------------ */
    /*  ADVANCE SEARCH STICKY
     /* ------------------------------------------------------------------------ */
    function advancedSearchSticky() {
        var search = null;
        var thisHeight = null;
        var sr_sticky_top = null;
        var splash_search = $(".splash-search");

        if(getWindowWidth() > 991){
            search = search_bar;
            thisHeight = search_bar_height;
        }else{
            search = search_bar_mobile;
            thisHeight = search_bar_mobile_height;
        }
        if (!search.data('sticky')) {
            return;
        }

        if( splash_search[0] ) {
            sr_sticky_top = splash_search.offset().top;
            sr_sticky_top = sr_sticky_top + 200;
        } else {
            if(getWindowWidth() > 991){
                sr_sticky_top = search_bar.offset().top + 65;
            }else{
                sr_sticky_top = search_bar_mobile.offset().top;
            }
        }

        if( sr_sticky_top === 0 ) {
            sr_sticky_top = header_height;
        }

        $(window).on('scroll',function() {
            var scroll = $(window).scrollTop();
            var admin_nav = $('#wpadminbar').height() + 'px';

            if( admin_nav === 'nullpx' ) { admin_nav = '0px'; }

            if (scroll >= sr_sticky_top ) {
                search.addClass("advanced-search-sticky");
                search.css('top', admin_nav);
                section_body.css('padding-top',thisHeight);
            } else {
                search.removeClass("advanced-search-sticky");
                search.removeAttr("style");
                section_body.css('padding-top',0);
            }
        });
    }
    advancedSearchSticky();

    /* ------------------------------------------------------------------------ */
    /*  Date picker
     /* ------------------------------------------------------------------------ */
    var date_ele = $('.input_date');
    if(date_ele.length > 0) {
        date_ele.datetimepicker({
            format: 'YYYY-MM-DD',//'DD/MM/YYYY',
            icons: {
                time: "fa fa-clock-o",
                date: "fa fa-calendar",
                up: "fa fa-arrow-up",
                down: "fa fa-arrow-down",
                left: "fa fa-arrow-left"
            }
        });
    }

    /* ------------------------------------------------------------------------ */
    /*  BANNER parallax
     /*------------------------------------------------------------------------- */

    function banner_parallax(){
        var parallax_ele = $('.banner-bg-wrap');

        if($('.header-media .banner-parallax').length){
            var start_scroll = header_media.offset().top;
            //var start_scroll = banner_distance;
            var parallax_scroll_top = $(window).scrollTop();
            var scrolled = parallax_scroll_top - start_scroll;
            if(parallax_scroll_top >= start_scroll){
                //$('.banner-inner').css('background-position-y', (scrolled*-0.9)+'px');
                parallax_ele.css("transform","translate3d(0,"+-scrolled*-0.3+"px,0)");
            }else if(parallax_scroll_top < start_scroll){
                parallax_ele.css("transform","translate3d(0,0px,0)");
            }
        }
    }
    banner_parallax();
    $(window).on('scroll',function(){
        //winScrollTop = $(this).scrollTop();
        banner_parallax();
    });


    /* ------------------------------------------------------------------------ */
    /*  DETAIL LIGHT BOX SLIDE SHOW
     /* ------------------------------------------------------------------------ */
    var pretty_video_ele = $("a[data-fancy^='property_video']");

    if(pretty_video_ele.length > 0) {
        pretty_video_ele.prettyPhoto({
            allow_resize: true,
            default_width: 1900,
            default_height: 1000,
            animation_speed: 'normal',
            theme: 'default',
            slideshow: 3000,
            autoplay_slideshow: false
        });
    }

    var pretty_gallery_ele = $("a[data-fancy^='property_gallery']");

    if(pretty_gallery_ele.length > 0) {
        pretty_gallery_ele.prettyPhoto({
            allow_resize: true,
            default_width: 1900,
            default_height: 1000,
            animation_speed: 'normal',
            theme: 'facebook',
            slideshow: 3000,
            autoplay_slideshow: false
        });
    }

    /* ------------------------------------------------------------------------ */
    /*	HOUZEZ TABERS
     /* ------------------------------------------------------------------------ */
    function houzez_tabers(ele_tab, ele_tab_content, ele_delay){
        var tab = $(ele_tab);
        var tab_content = $(ele_tab_content);

        tab.on('click',function(){
            var tab_this = $(this);

            if(tab_this.hasClass('active')!=true){
                tab.removeClass('active');
                tab_this.addClass('active');
                tab_content.removeClass('active in');
                tab_content.eq(tab_this.index()).addClass('active').delay(ele_delay).queue(function(next){
                    tab_content.eq(tab_this.index()).addClass('in');
                    next();
                });
            }
        });
    }

    /* ------------------------------------------------------------------------ */
    /*	SEARCH TABER
     /* ------------------------------------------------------------------------ */
    houzez_tabers('.banner-search-tabs .search-tab','.banner-search-taber .tab-pane', 5);

    /* ------------------------------------------------------------------------ */
    /* DETAIL TABER
     /* ------------------------------------------------------------------------ */
    houzez_tabers('.detail-tabs > li','.detail-content-tabber .tab-pane', 100);

    /* ------------------------------------------------------------------------ */
    /* FLOOR PLAN TABER
     /* ------------------------------------------------------------------------ */
    houzez_tabers('.plan-tabs > li','.plan-tabber .tab-pane', 100);

    /* ------------------------------------------------------------------------ */
    /* MODULE TABER
     /* ------------------------------------------------------------------------ */
    houzez_tabers('.houzez-tabs > li','.houzez-taber-body .tab-pane', 100);

    /* ------------------------------------------------------------------------ */
    /* PROFILE DETAIL TABER
     /* ------------------------------------------------------------------------ */
    houzez_tabers('.profile-tabs > li','.profile-tab-pane', 100);

    /* ------------------------------------------------------------------------ */
    /*	LOGIN TABER
     /* ------------------------------------------------------------------------ */
    function houzez_login_tabber(target){
        var target_tab = $(""+target+""+' .login-tabs > li');
        var target_tab_content = $(""+target+""+' .login-block .tab-pane');
        target_tab.on('click',function(){
            var target_tab_this = $(this);
            if(target_tab_this.hasClass('active')!=true){
                $('.login-tabs > li').removeClass('active');
                target_tab_this.addClass('active');
                //alert('ok');
                target_tab_content.removeClass('in active');
                target_tab_content.eq(target_tab_this.index()).addClass('in active');
            }
        });
    }
    houzez_login_tabber('.widget');
    houzez_login_tabber('.footer-widget');
    houzez_login_tabber('.modal');

    /* ------------------------------------------------------------------------ */
    /*  ACCORDION ADD PROPERTY
     /* ------------------------------------------------------------------------ */

    $('.add-title-tab > .add-expand').on('click',function() {
        $(this).toggleClass('active').parent().next('.add-tab-content').slideToggle();
    });

    /* ------------------------------------------------------------------------ */
    /*  ACCORDION FAQS
     /* ------------------------------------------------------------------------ */

    $('.toggle-title').on('click',function() {
        $(this).toggleClass('active').next('.toggle-content').slideToggle();
    });


    /* ------------------------------------------------------------------------ */
    /*  ACCORDION
     /* ------------------------------------------------------------------------ */
    var accord_icon = $('.accord-tab > .expand-icon');
    accord_icon.on('click',function() {
        var tab_this = $(this);
        if(tab_this.hasClass('active')!=true)
        {
            accord_icon.removeClass('active');
            tab_this.addClass('active');

            accord_icon.parent().next('.accord-content').slideUp();
            tab_this.parent().next('.accord-content').slideDown();

        }
    });

    /* ------------------------------------------------------------------------ */
    /*  MAP VIEW TABER
     /* ------------------------------------------------------------------------ */
    $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
        var this_e = e;
        this_e.target // newly activated tab
        this_e.relatedTarget // previous active tab
    });

    /* ------------------------------------------------------------------------ */
    /*  POST CARDS MASONRY
     /* ------------------------------------------------------------------------ */
    var isotope_block = $('.grid-block');
    $(window).on('load',function(){
        if(isotope_block.length > 0){
            isotope_block.isotope({
                // options
                itemSelector: '.grid-item'
                //layoutMode: 'fitRows'
            });
        }
    });

    /* ------------------------------------------------------------------------ */
    /*  SHARE TOOLTIP
     /* ------------------------------------------------------------------------ */
    var tip_action = $('.actions li');
    tip_action.on('click',function(){
        var tip_this = $(this);
        if(tip_this.children('.share_tooltip').hasClass('in')){
            tip_this.children('.share_tooltip').removeClass('in');
        }else{
            tip_action.children('.share_tooltip').removeClass('in');
            tip_this.children('.share_tooltip').addClass('in');
        }
    });

    $(document).on('mouseup',function (e)
    {
        var tip = $(".share-btn");
        if (!tip.is(e.target) // if the target of the click isn't the container...
            && tip.has(e.target).length === 0) // ... nor a descendant of the container
        {
            $('.share_tooltip').removeClass('in');
        }
    });

    /* ------------------------------------------------------------------------ */
    /*  SET COLUMNS HEIGHT
     /* ------------------------------------------------------------------------ */
    var widget_match = $('.footer-widget');
    if(widget_match.length > 0){
        widget_match.matchHeight();
    }

    var grid_match = $('.grid');
    if(grid_match.length > 0) {
        grid_match.each(function () {
            $(this).children().find('img').matchHeight({
                byRow: true,
                property: 'height',
                target: null,
                remove: false
            });
        });
    }

    /* ------------------------------------------------------------------------ */
    /*  NAVIGATION
     /* ------------------------------------------------------------------------ */
    $('.navi ul li').each(function(){
        $(this).has('ul').not('.houzez-megamenu li').addClass('has-child')
    });

    $('.navi ul .has-child').on({
        mouseenter: function () {
            $(this).addClass("active");
        },
        mouseleave: function () {
            $(this).removeClass("active");
        }
    });

    function houzez_megamenu(){
        if($(window).width() > 991){
            var nav_ele = $('.navi ul li');
            var megamenu_ele = $('.navi ul .houzez-megamenu');
            var container = $('.container');
            var header = $('.header-main');

            var containWidth = container.innerWidth();
            var windowWidth = $(window).width();
            var containOffset = container.offset();

            if(nav_ele.hasClass('houzez-megamenu')){

                megamenu_ele.each(function () {
                    var thisOffset = $(this).offset();
                    if(header.children('.container').length > 0){
                        $("> .sub-menu",this).css({width:containWidth,left:-(thisOffset.left-containOffset.left)});
                    }else{
                        $("> .sub-menu",this).css({width:windowWidth,left: -thisOffset.left});
                        //alert(thisOffset);
                    }
                });

            }
        }
    }
    houzez_megamenu();
    $(window).on('resize',function () {
        houzez_megamenu();
    });
    $(window).bind('load',function () {
        houzez_megamenu();
    });


    /* ------------------------------------------------------------------------ */
    /*  CHANGE GRID LIST
     /* ------------------------------------------------------------------------ */
    var view_changer = $('.view-btn');
    var view_area = $('.property-listing');

    view_changer.on("click",function(){
        var view_this = $(this);
        view_changer.removeClass('active');
        view_this.addClass('active');
        if(view_this.hasClass('btn-list')) {
            view_area.removeClass('grid-view grid-view-3-col').addClass('list-view');
        }
        else if(view_this.hasClass('btn-grid')) {
            view_area.removeClass('list-view grid-view-3-col').addClass('grid-view');
        }
        else if(view_this.hasClass('btn-grid-3-col')) {
            view_area.removeClass('list-view grid-view').addClass('grid-view grid-view-3-col');
        }
    });

    /* ------------------------------------------------------------------------ */
    /*  SEARCH PANEL HEIGHT FIX
     /* ------------------------------------------------------------------------ */
    var search_panel_btn = $('.search-panel-btn');
    var search_panel = $('.search-panel');
    search_panel_btn.on('click',function () {
        if(search_panel.hasClass('panel-open')){
            search_panel.removeClass('panel-open');
        }else{
            search_panel.addClass('panel-open');
        }
    });
    function search_panel_height_fix(){
        var panel_bottom_height = $('.search-panel .search-bottom').outerHeight();
        $('.search-scroll').css('padding-bottom', panel_bottom_height);

        if($(window).width() < 991){
            search_panel.removeClass('panel-open');
        }
    }
    search_panel_height_fix();
    $(window).on('resize',function () {
        search_panel_height_fix()
    });

    /* ------------------------------------------------------------------------ */
    /*  SECTION HEIGHT
     /* ------------------------------------------------------------------------ */

    function bg_image_size(size,url){
        var get_url = url,image;
        if(get_url) {
            // Remove url() or in case of Chrome url("")
            get_url = get_url.match(/^url\("?(.+?)"?\)$/);

            if (get_url[1]) {
                get_url = get_url[1];
                image = new Image();
                image.src = get_url;
                if (size === 'height') {
                    return image.height;
                } else {
                    return image.width;
                }
            }
        }
    }

    function setSectionHeight() {
        var totalTopBarsHeight = 0;

        var searchH = (getWindowHeight()-splash_header_height)-splash_footer_height;
        var screen_fix_splash = $('.fave-screen-fix-inner');
        var screen_fix = $('.fave-screen-fix');
        var scree_fix_auto = $('.banner-parallax-auto');

        if (isChrome){
            screen_fix_splash.css( 'height', searchH-1 );
        }else{
            screen_fix_splash.css( 'height', searchH );
        }


        if(getWindowWidth() >= 992){
            if(header.length){
                totalTopBarsHeight = header_height;
            }
            if(header.length && search_bar.length && !search_bar.hasClass('search-hidden')) {
                totalTopBarsHeight = parseInt10(search_bar_height) + parseInt10(header_height);
            }
            if(header.is('*') && search_bar.hasClass('search-hidden')) {
                totalTopBarsHeight = header_height;
            }

            if(header.length && top_bar.length){
                totalTopBarsHeight = parseInt10(header_height) + parseInt10(top_bar_height);
            }
            if(header.length
                && search_bar.length
                && !search_bar.hasClass('search-hidden')
                && top_bar.length){
                totalTopBarsHeight = parseInt10(header_height) + parseInt10(top_bar_height) + parseInt10(search_bar_height);
            }
            if(header.length
                && admin_bar.length){
                totalTopBarsHeight = parseInt10(header_height) + parseInt10(admin_bar_height);
            }

            if(header.length
                && admin_bar.length
                && top_bar.length){
                totalTopBarsHeight = parseInt10(header_height) + parseInt10(admin_bar_height) + parseInt10(top_bar_height);
            }
            if(header.length
                && admin_bar.length
                && search_bar.length
                && !search_bar.hasClass('search-hidden')){
                totalTopBarsHeight = parseInt10(header_height) + parseInt10(admin_bar_height) + parseInt10(search_bar_height);
            }
            if(header.length
                && admin_bar.length
                && search_bar.length
                && !search_bar.hasClass('search-hidden')
                && top_bar.length){
                totalTopBarsHeight = parseInt10(header_height) + parseInt10(admin_bar_height) + parseInt10(search_bar_height) + parseInt10(top_bar_height);
            }
            if(header.length
                && admin_bar.length
                && search_bar.length
                && search_bar.hasClass('search-hidden')
                && top_bar.length){
                totalTopBarsHeight = parseInt10(header_height) + parseInt10(admin_bar_height) + parseInt10(top_bar_height);
            }

        }else{
            if(search_bar_mobile.length
                && !search_bar_mobile.hasClass('search-hidden')
                && header_mobile.length) {
                totalTopBarsHeight = parseInt10(mob_search_bar_height) + parseInt10(mob_header_height);
            }
            if(search_bar_mobile.hasClass('search-hidden')
                && header_mobile.is('*')) {
                totalTopBarsHeight = mob_header_height;
            }
            if(header_mobile.length){
                totalTopBarsHeight = mob_header_height;
            }
            if(header_mobile.length
                && top_bar.length){
                totalTopBarsHeight = parseInt10(mob_header_height) + parseInt10(top_bar_height);
            }
            if(header_mobile.length
                && search_bar_mobile.length
                && !search_bar_mobile.hasClass('search-hidden')
                && top_bar.length){
                totalTopBarsHeight = parseInt10(mob_header_height) + parseInt10(top_bar_height) + parseInt10(mob_search_bar_height);
            }
            if(header_mobile.length
                && admin_bar.length){
                totalTopBarsHeight = parseInt10(mob_header_height) + parseInt10(admin_bar_height);
            }
            if(header_mobile.length
                && admin_bar.length
                && search_bar_mobile.length
                && !search_bar_mobile.hasClass('search-hidden')){
                totalTopBarsHeight = parseInt10(mob_header_height) + parseInt10(admin_bar_height) + parseInt10(mob_search_bar_height);
            }
            if(header_mobile.length
                && admin_bar.length
                && search_bar_mobile.length
                && !search_bar_mobile.hasClass('search-hidden')
                && top_bar.length){
                totalTopBarsHeight = parseInt10(mob_header_height) + parseInt10(admin_bar_height) + parseInt10(mob_search_bar_height) + parseInt10(top_bar_height);
            }
            if(header_mobile.length
                && admin_bar.length
                && search_bar_mobile.length
                && search_bar_mobile.hasClass('search-hidden')
                && top_bar.length){
                totalTopBarsHeight = parseInt10(mob_header_height) + parseInt10(admin_bar_height) + parseInt10(top_bar_height);
            }
            if(header_mobile.length
                && admin_bar.length
                && top_bar.length){
                totalTopBarsHeight = parseInt10(mob_header_height) + parseInt10(admin_bar_height) + parseInt10(top_bar_height);
            }
        }

        var topBarsHeight =  getWindowHeight() - totalTopBarsHeight;


        if (isChrome){
            screen_fix.css( 'height', topBarsHeight-1 );
        }else{
            screen_fix.css( 'height', topBarsHeight );
        }

        $('.banner-parallax-fix').css( 'height', topBarsHeight );


        if(getWindowWidth() > 768){
            var image_url = $('.banner-parallax-auto .banner-inner').css('background-image');

            if(image_url != 'none'){
                var bg_height = scree_fix_auto.width() * bg_image_size('height',image_url) / bg_image_size('width',image_url);
                if(bg_height > getWindowHeight()){
                    scree_fix_auto.css( 'height', topBarsHeight );
                }else{
                    scree_fix_auto.css( 'height', bg_height-totalTopBarsHeight );
                }
            }else{
                scree_fix_auto.css( 'height', topBarsHeight );
            }
        }else{
            scree_fix_auto.css( 'height', 300 );
        }
    }

    setSectionHeight();

    $(window).on('resize', function () {
        setSectionHeight();
        advancedSearchSticky();
    });

    $(window).bind('load',function () {
        setSectionHeight();
    });

    function getWindowWidth() {
        return Math.max( $(window).width(), window.innerWidth);
    }

    function getWindowHeight() {
        return Math.max( $(window).height(), window.innerHeight);
    }

    /* ------------------------------------------------------------------------ */
    /*  ADVANCE DROPDOWN
     /* ------------------------------------------------------------------------ */
    var expand_trigger = $('.search-expand-btn');
    var search_expand = $('.search-expandable .advanced-search');

    expand_trigger.on('click',function(){
        var btn_this = $(this);
        btn_this.toggleClass('active');
        if(btn_this.hasClass('active'))
        {
            search_expand.slideDown();
        }else
        {
            search_expand.add('.search-expandable .advance-fields').slideUp();
            $('.advance-btn').removeClass('active');

        }
    });

    var search_btn_trigger = $('.advanced-search .advance-btn');
    search_btn_trigger.on('click',function(){
        var trigger_this = $(this);
        trigger_this.toggleClass('active');
        if(trigger_this.hasClass('active'))
        {
            trigger_this.closest('.advanced-search').find('.advance-fields').slideDown();
        }else
        {
            trigger_this.closest('.advanced-search').find('.advance-fields').slideUp();
        }
    });

    var search_mobile_trigger = $('.advanced-search-mobile .advance-btn');
    search_mobile_trigger.on('click',function(){
        var mobile_trigger_this = $(this);
        mobile_trigger_this.toggleClass('active');
        if(mobile_trigger_this.hasClass('active'))
        {
            mobile_trigger_this.closest('.advanced-search-mobile').find('.advance-fields').slideDown();
        }else
        {
            mobile_trigger_this.closest('.advanced-search-mobile').find('.advance-fields').slideUp();
        }
    });

    var advance_trigger = $('.advance-trigger');
    var field_expand = $('.field-expand');
    advance_trigger.on('click',function(){
        var advance_trigger_this = $(this);
        advance_trigger_this.toggleClass('active');
        if(advance_trigger_this.hasClass('active'))
        {
            advance_trigger_this.children('i').removeClass('fa-plus-square').addClass('fa-minus-square');
            field_expand.slideDown(function () {
                //alert('ok');
                $(".search-scroll-inner").animate({ scrollTop: $(document).height() });
            });
            //$(".search-scroll-inner").scrollTop($(".search-scroll-inner").scrollHeight());
        }else
        {
            advance_trigger_this.children('i').removeClass('fa-minus-square').addClass('fa-plus-square');
            field_expand.slideUp();
        }
    });

    /* ------------------------------------------------------------------------ */
    /*  SLIDER initialized
     /* ------------------------------------------------------------------------ */
    var all_slider = $('#banner-slider, .carousel, .lightbox-slide, .property-widget-slider');
    all_slider.on('initialized.owl.carousel', function() {
        setTimeout(function(){
            all_slider.animate({opacity: 1}, 800);
            $('.gallery-area .slider-placeholder').remove();
        },800);
    });

    /* ------------------------------------------------------------------------ */
    /*  BANNER SLIDER
     /* ------------------------------------------------------------------------ */
    var banner_slider = $("#banner-slider");
    if(banner_slider.length > 0){
        banner_slider.owlCarousel({
            rtl: houzez_rtl,
            loop: true,
            dots: false,
            slideBy: 1,
            items:1,
            smartSpeed: 1000,
            nav: true,
            navText : ["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
            addClassActive: true,
            callbacks: true
        });
    }

    /* ------------------------------------------------------------------------ */
    /*  OWL CAROUSEL
     /* ------------------------------------------------------------------------ */
    var p_carousel_6 = $("#properties-carousel-6");
    if(p_carousel_6.length > 0) {

        p_carousel_6.owlCarousel({
            rtl: houzez_rtl,
            loop: true,
            dots: true,
            items:6,
            slideBy: 6,
            nav: false,
            smartSpeed:600,
            responsive:{
                0: {
                    items: 1
                },
                320: {
                    items: 1
                },
                480: {
                    items: 2
                },
                768: {
                    items: 3
                },
                1000: {
                    items: 4
                },
                1280: {
                    items: 6
                }
            }
        });

        $('.btn-crl-6-prev').on('click',function() {
            p_carousel_6.trigger('prev.owl.carousel',[600])
        });
        $('.btn-crl-6-next').on('click',function() {
            p_carousel_6.trigger('next.owl.carousel',[600])
        });
    }

    var p_carousel_4 = $("#properties-carousel-4");
    if(p_carousel_4.length > 0) {

        p_carousel_4.owlCarousel({
            rtl: houzez_rtl,
            loop: true,
            dots: true,
            items:4,
            slideBy: 4,
            nav: false,
            smartSpeed:600,
            responsive:{
                0: {
                    items: 1
                },
                320: {
                    items: 1
                },
                480: {
                    items: 1
                },
                767: {
                    items: 2
                },
                991: {
                    items: 4
                }
            }
        });

        $('.btn-crl-4-prev').on('click',function() {
            p_carousel_4.trigger('prev.owl.carousel',[600])
        });
        $('.btn-crl-4-next').on('click',function() {
            p_carousel_4.trigger('next.owl.carousel',[600])
        });
    }

    var p_carousel_3 = $("#properties-carousel-3");
    if(p_carousel_3.length > 0) {

        p_carousel_3.owlCarousel({
            rtl: houzez_rtl,
            loop: true,
            dots: true,
            items:3,
            slideBy: 1,
            nav: false,
            smartSpeed:600,
            responsive:{
                0: {
                    items: 1
                },
                320: {
                    items: 1
                },
                480: {
                    items: 1
                },
                767: {
                    items: 2
                },
                991: {
                    items: 3
                }
            }
        });

        $('.btn-crl-3-prev').on('click',function() {
            p_carousel_3.trigger('prev.owl.carousel',[600])
        });
        $('.btn-crl-3-next').on('click',function() {
            p_carousel_3.trigger('next.owl.carousel',[600])
        });
    }

    var p_carousel_2 = $("#properties-carousel-2");
    if(p_carousel_2.length > 0) {

        p_carousel_2.owlCarousel({
            rtl: houzez_rtl,
            loop: true,
            dots: true,
            items:2,
            slideBy: 1,
            nav: false,
            smartSpeed:600,
            responsive:{
                0: {
                    items: 1
                },
                320: {
                    items: 1
                },
                480: {
                    items: 1
                },
                767: {
                    items: 2
                }
            }
        });

        $('.btn-crl-2-prev').on('click',function() {
            p_carousel_2.trigger('prev.owl.carousel',[600])
        });
        $('.btn-crl-2-next').on('click',function() {
            p_carousel_2.trigger('next.owl.carousel',[600])
        });
    }

    var p_carousel_1 = $("#properties-carousel-1");
    if(p_carousel_1.length > 0) {

        p_carousel_1.owlCarousel({
            rtl: houzez_rtl,
            loop: true,
            dots: true,
            items:1,
            slideBy: 1,
            nav: false,
            smartSpeed:600
        });

        $('.btn-crl-1-prev').on('click',function() {
            p_carousel_1.trigger('prev.owl.carousel',[600])
        });
        $('.btn-crl-1-next').on('click',function() {
            p_carousel_1.trigger('next.owl.carousel',[600])
        });
    }

    var p_carousel_grid = $(".properties-carousel-grid");
    if(p_carousel_grid.length > 0) {

        p_carousel_grid.owlCarousel({
            rtl: houzez_rtl,
            loop: true,
            dots: true,
            items:3,
            slideBy: 1,
            nav: false,
            smartSpeed:600,
            responsive:{
                0: {
                    items: 1
                },
                320: {
                    items: 1
                },
                480: {
                    items: 1
                },
                767: {
                    items: 2
                },
                991: {
                    items: 3
                }
            }
        });

        $('.btn-crl-pprt-prev').on('click',function() {
            p_carousel_grid.trigger('prev.owl.carousel',[600])
        });
        $('.btn-crl-pprt-next').on('click',function() {
            p_carousel_grid.trigger('next.owl.carousel',[600])
        });
    }

    var p_carousel_grid_1 = $(".properties-carousel-grid-1");
    if(p_carousel_grid_1.length > 0) {

        p_carousel_grid_1.owlCarousel({
            rtl: houzez_rtl,
            loop: true,
            dots: true,
            items:3,
            slideBy: 1,
            nav: false,
            smartSpeed:600,
            responsive:{
                0: {
                    items: 1
                },
                320: {
                    items: 1
                },
                480: {
                    items: 1
                },
                767: {
                    items: 2
                },
                991: {
                    items: 3
                }
            }
        });

        $('.btn-crl-pprt-1-prev').on('click',function() {
            p_carousel_grid_1.trigger('prev.owl.carousel',[600])
        });
        $('.btn-crl-pprt-1-next').on('click',function() {
            p_carousel_grid_1.trigger('next.owl.carousel',[600])
        });
    }

    var p_carousel_grid_2 = $(".properties-carousel-grid-2");
    if(p_carousel_grid_2.length > 0) {

        p_carousel_grid_2.owlCarousel({
            rtl: houzez_rtl,
            loop: true,
            dots: true,
            items:3,
            slideBy: 1,
            nav: false,
            smartSpeed:600,
            responsive:{
                0: {
                    items: 1
                },
                320: {
                    items: 1
                },
                480: {
                    items: 1
                },
                767: {
                    items: 2
                },
                991: {
                    items: 3
                }
            }
        });

        $('.btn-crl-pprt-2-prev').on('click',function() {
            p_carousel_grid_2.trigger('prev.owl.carousel',[600])
        });
        $('.btn-crl-pprt-2-next').on('click',function() {
            p_carousel_grid_2.trigger('next.owl.carousel',[600])
        });
    }

    var p_post_card = $("#carousel-post-card");
    if(p_post_card.length > 0) {

        p_post_card.owlCarousel({
            rtl: houzez_rtl,
            loop: true,
            dots: true,
            slideBy: 1,
            nav: false,
            smartSpeed:600,
            responsive:{
                0: {
                    items: 1
                },
                320: {
                    items: 1
                },
                480: {
                    items: 1
                },
                768: {
                    items: 2
                },
                1000: {
                    items: 3
                },
                1280: {
                    items: 4
                }
            }
        });

        $('.btn-crl-post-card-prev').on('click',function() {
            p_post_card.trigger('prev.owl.carousel',[600])
        });
        $('.btn-crl-post-card-next').on('click',function() {
            p_post_card.trigger('next.owl.carousel',[600])
        });

    }

    var p_post_card_block = $("#carousel-post-card-block");
    if(p_post_card_block.length > 0) {

        p_post_card_block.owlCarousel({
            rtl: houzez_rtl,
            loop: true,
            dots: true,
            slideBy: 1,
            nav: false,
            responsive:{
                0: {
                    items: 1
                },
                320: {
                    items: 1
                },
                480: {
                    items: 1
                },
                768: {
                    items: 2
                },
                1000: {
                    items: 3
                },
                1280: {
                    items: 4
                }
            }
        });

        $('.btn-crl-card-block-prev').on('click',function() {
            p_post_card_block.trigger('prev.owl.carousel',[700])
        });
        $('.btn-crl-card-block-next').on('click',function() {
            p_post_card_block.trigger('next.owl.carousel',[700])
        });

    }

    var testimonial_carousel = $("#testimonial-carousel");
    if(testimonial_carousel.length > 0) {

        testimonial_carousel.owlCarousel({
            rtl: houzez_rtl,
            loop: true,
            dots: true,
            items:1,
            slideBy: 1,
            nav: true,
            navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
            smartSpeed:600
        });

    }

    var agents_carousel = $("#agents-carousel");
    if(agents_carousel.length > 0){

        agents_carousel.owlCarousel({
            rtl: houzez_rtl,
            loop: true,
            dots: true,
            slideBy: 1,
            nav: false,
            smartSpeed:600,
            responsive:{
                0: {
                    items: 1
                },
                320: {
                    items: 1
                },
                480: {
                    items: 1
                },
                768: {
                    items: 2
                },
                1000: {
                    items: 3
                },
                1280: {
                    items: 4
                }
            }
        });

        $('.btn-crl-agents-prev').on('click',function() {
            agents_carousel.trigger('prev.owl.carousel',[600])
        });
        $('.btn-crl-agents-next').on('click',function() {
            agents_carousel.trigger('next.owl.carousel',[600])
        });

    }

    var partners_carousel = $("#partner-carousel");
    if(partners_carousel.length > 0) {

        partners_carousel.owlCarousel({
            rtl: houzez_rtl,
            loop: true,
            dots: true,
            slideBy: 2,
            nav:false,
            smartSpeed:600,
            responsive:{
                0: {
                    items: 1
                },
                320: {
                    items: 1
                },
                480: {
                    items: 3
                },
                768: {
                    items: 4
                },
                992: {
                    items: 4
                }
            }
        });

        $('.btn-prev-partners').on('click',function() {
            partners_carousel.trigger('prev.owl.carousel',[600])
        });
        $('.btn-next-partners').on('click',function() {
            partners_carousel.trigger('next.owl.carousel', [600])
        });

    }

    var agency_carousel = $("#agency-carousel");
    if(agency_carousel.length > 0) {

        agency_carousel.owlCarousel({
            rtl: houzez_rtl,
            loop: true,
            dots: true,
            items:4,
            slideBy: 4,
            nav: false,
            smartSpeed:600
        });

        $('.btn-crl-agency-prev').on('click',function() {
            agency_carousel.trigger('prev.owl.carousel',[600])
        });
        $('.btn-crl-agency-next').on('click',function() {
            agency_carousel.trigger('next.owl.carousel',[600])
        });
    }

    var widget_slider = $(".property-widget-slider");
    if(widget_slider.length > 0) {
        widget_slider.owlCarousel({
            rtl: houzez_rtl,
            dots: true,
            items: 1,
            smartSpeed: 600,
            slideBy: 1,
            nav: true,
            navText : ["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"]
        });
    }

    /* ------------------------------------------------------------------------ */
    /*  SLIDER FOR DETAIL PAGE
     /* ------------------------------------------------------------------------ */
    var slide_show = $('.slide');
    var slide_show_nav = $('.slideshow-nav');
    function houzez_detail_slider_main_settings() {
        return {
            speed: 500,
            autoplay: false,
            autoplaySpeed: 4000,
            rtl: houzez_rtl,
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: true,
            //fade: true,
            accessibility: true,
            asNavFor: '.slideshow-nav'
        }
    }
    function houzez_detail_slider_nav_settings() {
        return {
            speed: 500,
            autoplay: false,
            autoplaySpeed: 4000,
            rtl: houzez_rtl,
            slidesToShow: 10,
            slidesToScroll: 1,
            asNavFor: '.slide',
            arrows: false,
            dots: false,
            centerMode: true,
            focusOnSelect: true,
            responsive: [
                {
                    breakpoint: 991,
                    settings:{
                        slidesToShow: 8
                    }
                },
                {
                    breakpoint: 767,
                    settings:{
                        slidesToShow: 4
                    }
                }
            ]
        }
    }

    function property_detail_slideshow() {
        slide_show.slick(houzez_detail_slider_main_settings());
        slide_show_nav.slick(houzez_detail_slider_nav_settings());
    }
    if(slide_show.length){
        property_detail_slideshow();
    }

    /* ------------------------------------------------------------------------ */
    /*  Change listing fee for featured
     /* ------------------------------------------------------------------------ */
    $('.prop_featured').on('change', function() {
        var parent = $(this).parents('table');
        var price_regular  = parseFloat( parent.find('.submission_price').text() );
        var price_featured = parseFloat( parent.find('.submission_featured_price').text() );

        var total_price = price_regular+price_featured;
        if( $(this).is(':checked') ) {
            parent.find('.submission_total_price').text(total_price);
        } else {
            parent.find('.submission_total_price').text(price_regular);
        }

    });

    /* ------------------------------------------------------------------------ */
    /* PAY DROPDOWN
     /* ------------------------------------------------------------------------ */
    var pay_btn = $('.my-actions .pay-btn');
    pay_btn.on('click', function () {
        var pay_btn_this = $(this);
        if(pay_btn_this.parent().hasClass("open")!=true) {
            pay_btn.parent().removeClass("open");
            pay_btn_this.parent().addClass("open");
        } else {
            pay_btn_this.parent().removeClass("open");
        }
    });

    $('body').on('click', function (e) {
        if (!pay_btn.is(e.target) && pay_btn.has(e.target).length === 0 && $('.open').has(e.target).length === 0) {
            pay_btn.parent().removeClass('open');
        }
    });

    /* ------------------------------------------------------------------------ */
    /*  ACCOUNT DROPDOWN
     /* ------------------------------------------------------------------------ */
    function accountDropdown(){

        // Account dropdown for desktop
        var account_action = $(".header-right .account-action > li");
        account_action.on({
            mouseenter: function () {
                $(this).addClass('active');
            },
            mouseleave: function () {
                $(this).removeClass('active');
            }
        });

        // Account dropdown for mobile
        var mobile_account_action = $('.header-user .account-action > li');
        mobile_account_action.on('click',function(){
            var action_this = $(this);
            if(action_this.hasClass('active')){
                action_this.removeClass('active');
            }else{
                action_this.addClass('active');
            }
        });
    }

    accountDropdown();

    /* ------------------------------------------------------------------------ */
    /*  MOBILE MENU
     /* ------------------------------------------------------------------------ */
    function mobileMenu(menu_html,menu_place){
        var siteMenu = $(menu_html).html();
        $(menu_place).html(siteMenu);

        $(menu_place+' ul li').each(function(){
            $(this).has('ul').addClass('has-child');
        });

        $(menu_place+' ul .has-child').append('<span class="expand-me"></span>');

        $(menu_place+' .expand-me').on('click',function(){
            var parent = $(this).parent('li');
            if(parent.hasClass('active')){
                parent.removeClass('active');
                parent.children('ul').slideUp();
            }else{
                parent.addClass('active');
                parent.children('ul').slideDown();
            }
        });
    }
    mobileMenu('.main-nav','.main-nav-dropdown');
    mobileMenu('.top-nav','.top-nav-dropdown');
    mobileMenu('.top-nav','.top-nav-dropdown');

    // Mobile menu Dropdown
    $('.nav-trigger').on('click',function(){
        var nav_this = $(this);
        if(nav_this.hasClass('mobile-open')){
            nav_this.removeClass('mobile-open');
        }else{
            nav_this.addClass('mobile-open');
        }
    });

    function element_hide(ele,ele_class){
        $(document).on('mouseup',function (e){
            var nav_trigger = $(ele);
            var nav_dropdown = $('.nav-dropdown');
            var account_dropdown = $('.account-dropdown');

            if (!nav_trigger.is(e.target) // if the target of the click isn't the container...
                && nav_trigger.has(e.target).length === 0 // ... nor a descendant of the container
                && !nav_dropdown.is(e.target)
                && nav_dropdown.has(e.target).length === 0
                && !account_dropdown.is(e.target)
                && account_dropdown.has(e.target).length === 0)
            {
                $(ele).removeClass(ele_class);
            }
        });
    }

    element_hide('.header-mobile .nav-trigger','mobile-open');
    element_hide('.top-bar .nav-trigger','mobile-open');
    element_hide('.account-action li','active');

    /* ------------------------------------------------------------------------ */
    /*  MORTGAGE CALCULATOR SHOW RESULTS
     /* ------------------------------------------------------------------------ */
    var show_morg = $('.show-morg');
    var morg_summery = $('.morg-summery');

    show_morg.on('click',function () {
        var morg_this = $(this);
        if(morg_this.hasClass('active')){
            morg_summery.slideUp();
            morg_this.removeClass('active');
        }else{
            morg_summery.slideDown();
            morg_this.addClass('active');
        }
    });

    /* ------------------------------------------------------------------------ */
    /*  DETAIL LIGHT BOX VARS
     /* ------------------------------------------------------------------------ */
    var lightbox_popup_main = $('#lightbox-popup-main');
    var lightbox_popup = $('.lightbox-popup');
    var lightbox_popup_inner = $('.popup-inner');
    var lightbox_slider = $('.lightbox-slide');
    var lightbox_left = $('.lightbox-left');
    var lightbox_right = $('.lightbox-right');

    var lightbox_popup_trigger = $('.popup-trigger');
    var lightbox_close = $('.lightbox-close');
    var lightbox_left_close = $('.lightbox-left .lightbox-close');
    var lightbox_expand_icon = $('.expand-icon');
    var lightbox_left_expand_icon = $('.lightbox-left .expand-icon');
    var lightbox_expand = $('.lightbox-expand');
    var lightbox_gallery_inner = $('.gallery-inner');

    var lightbox_arrow_left = $('.lightbox-arrow-left');
    var lightbox_arrow_right = $('.lightbox-arrow-right');

    var popupRightWidth = lightbox_right.innerWidth();

    /* ------------------------------------------------------------------------ */
    /*  DETAIL LIGHT BOX SLIDE SHOW
     /* ------------------------------------------------------------------------ */
    function lightBoxSlide() {
        lightbox_slider.show(function(){
            lightbox_slider.owlCarousel({
                autoPlay : 3000,
                rtl: houzez_rtl,
                dots: false,
                items: 1,
                smartSpeed: 700,
                slideBy: 1,
                nav: false,
                stopOnHover : true,
                autoHeight : true,
                navText : ["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
                responsive : {
                    // breakpoint from 768 up
                    768 : {
                        nav: true
                    }
                }
            });
        });

        // Custom Navigation Events
        lightbox_arrow_left.on('click',function() {
            lightbox_slider.trigger('prev.owl.carousel',[1000])
        });
        lightbox_arrow_right.on('click',function() {
            lightbox_slider.trigger('next.owl.carousel',[1000])
        });

        $(document).keydown(function(e){
            // handle cursor keys
            if (e.keyCode === 37) {
                lightbox_slider.trigger('prev.owl.carousel',[1000])
            } else if (e.keyCode === 39) {
                lightbox_slider.trigger('next.owl.carousel',[1000])
            }
        });

    }

    lightbox_slider.on('resized.owl.carousel', function () {
        var $this = $(this);
        $this.find('.owl-height').css('height', $this.find('.owl-item.active').height());
    });

    /* ------------------------------------------------------------------------ */
    /*  LIGHT BOX
     /* ------------------------------------------------------------------------ */

    function lightBox(){
        lightbox_popup_trigger.on('click',function(){
            lightbox_popup_main.addClass('active').addClass('in');
        });
        lightbox_close.on('click',function(){
            lightbox_popup_main.removeClass('active').removeClass('in');
        });
        $(document).keydown(function(e){
            if (e.keyCode === 27) {
                lightbox_popup_main.removeClass('active').removeClass('in');
            }
        });
    }
    lightBox();

    function popupResize(){
        var popupWidth = getPopupWidth()-60;
        lightbox_popup.css('width',popupWidth);

        if(lightbox_right.length > 0){

            lightbox_left.css('width', (popupWidth - popupRightWidth));
            lightbox_gallery_inner.css('width', (popupWidth - popupRightWidth)-40);
            lightbox_right.addClass('in');
            lightbox_left_close.removeClass('show');

            if (Modernizr.mq('(max-width: 1199px)')) {
                lightbox_expand_icon.removeClass('compress');
                lightbox_popup_inner.removeClass('pop-expand');
            }
            if (Modernizr.mq('(max-width: 1024px)')) {
                lightbox_left.css('width', '100%');
                lightbox_right.removeClass('in');
                lightbox_gallery_inner.css('width', '100%');
                lightbox_expand_icon.addClass('compress');
                lightbox_left_close.addClass('show');
            }
        }else{
            lightbox_left.css('width', '100%');
            lightbox_gallery_inner.css('width', '100%');
            lightbox_left_close.addClass('show');
            lightbox_left_expand_icon.hide('show');
        }
    }
    popupResize();
    function popForm_hide_show(){
        lightbox_expand.on('click',function(){
            var expand_this = $(this);
            var popupWidth = getPopupWidth();
            var popWidthTotal = (getPopupWidth()-60) - popupRightWidth;

            lightbox_left_close.toggleClass('show');

            if(popupWidth >= 1024){
                if(expand_this.hasClass('compress')){
                    lightbox_right.addClass('in');
                    lightbox_left.css('width', popWidthTotal);
                    expand_this.removeClass('compress');
                    lightbox_popup_inner.removeClass('pop-expand');
                }else{
                    lightbox_left.css('width', '100%');
                    lightbox_right.removeClass('in');
                    expand_this.addClass('compress');
                    lightbox_popup_inner.addClass('pop-expand');
                }
            }
            if(popupWidth <= 1024){

                if (expand_this.hasClass('compress')) {
                    lightbox_right.addClass('in');
                    lightbox_left.css('width', popWidthTotal);
                    expand_this.removeClass('compress');

                } else {
                    lightbox_left.css('width', '100%');
                    lightbox_right.removeClass('in');
                    expand_this.addClass('compress');
                }
            }
            if(popupWidth < 768){
                lightbox_left.css('width', '100%');
                //alert('ok');
            }
        });
    }
    popForm_hide_show();

    function getPopupWidth() {
        return Math.max( $(window).width(), $(window).innerWidth());
    }

    $(window).on('load',function(){
        lightBoxSlide();
        popupResize();
        $('.tagcloud a').removeAttr('style');
    });

    $(window).on('resize', function () {
        popupResize();
    });

    /* ------------------------------------------------------------------------ */
    /*  CONTACT FORM VALIDATION
     /* ------------------------------------------------------------------------ */
    var contact_form = $('#contact_form');
    if(contact_form.length){
        contact_form.bootstrapValidator({
            // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
            message: 'This value is not valid',
            //framework: 'bootstrap',
            feedbackIcons: {
                valid: 'fa fa-ok',
                invalid: 'fa fa-remove',
                validating: 'fa fa-refresh'
            },
            fields: {
                phone: {
                    validators: {
                        notEmpty: {
                            message: 'The Name is required and cannot be empty'
                        }
                    }
                },
                email: {
                    validators: {
                        notEmpty: {
                            message: 'The email address is required'
                        },
                        emailAddress: {
                            message: 'The email address is not valid'
                        }
                    }
                },
                message: {
                    validators: {
                        notEmpty: {
                            message: 'The Message is required and cannot be empty'
                        }
                    }
                }
            }
        })
    }

})(jQuery);