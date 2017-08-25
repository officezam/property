@extends('layouts.dashboard')

@section('content')
    <!--start section top-->
    <section id="splash-section">
        <div class="vegas-overlay"></div>
        <div class="splash-inner-media" style="background-image: url('http://placehold.it/1800x1200')"></div>
        <div class="splash-inner-content">
            <div class="container-fluid">
                <!--start section header-->
                <header class="header-section-default header-main splash-header nav-left">
                    <div class="header-mobile visible-sm visible-xs">
                        <div class="container">
                            <!--start mobile nav-->
                            <div class="mobile-nav">
                                <span class="nav-trigger"><i class="fa fa-navicon"></i></span>
                                <div class="nav-dropdown main-nav-dropdown"></div>
                            </div>
                            <!--end mobile nav-->
                            <div class="header-logo">
                                <a href="#"><img src="images/logo-houzez-white.png" alt="logo"></a>
                            </div>
                            <div class="header-user">
                                <div class="user">
                                    <a href="#" data-toggle="modal" data-target="#pop-login"><i class="fa fa-user"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="hidden-sm hidden-xs clearfix">
                        <div class="header-left">
                            <div class="logo"><a href="index.html"><img src="images/logo-houzez-white.png" alt="logo"></a></div>
                            <nav class="navi main-nav">
                                <ul>
                                    <li><a href="#">Home</a>
                                        <ul class="sub-menu">
                                            <li>
                                                <a href="#">Map</a>
                                                <ul class="sub-menu">
                                                    <li><a href="home-map.html">Map Standard</a></li>
                                                    <li><a href="home-map-fullscreen.html">Map Fullscreen</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#">Parallax</a>
                                                <ul class="sub-menu">
                                                    <li><a href="home-parallax.html">Parallax Standard</a></li>
                                                    <li><a href="home-parallax-fullscreen.html">Parallax Fullscreen</a></li>
                                                    <li><a href="home-parallax-autofix.html">Parallax Auto Fix</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#">Video</a>
                                                <ul class="sub-menu">
                                                    <li><a href="home-video.html">Video Standard</a></li>
                                                    <li><a href="home-video-fullscreen.html">Video Fullscreen</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#">Sliders</a>
                                                <ul class="sub-menu">
                                                    <li><a href="home-property-slider.html">Property Slider</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#">Splash</a>
                                                <ul class="sub-menu">
                                                    <li><a href="splash-video.html">Video Fullscreen</a></li>
                                                    <li><a href="splash-slider.html">Slider Fullscreen</a></li>
                                                    <li><a href="splash-image.html">Image Fullscreen</a></li>
                                                    <li><a href="home-splash.html">Home With Splash</a></li>
                                                    <li><a href="splash-half.html">Half</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Listing</a>
                                        <ul class="sub-menu">
                                            <li><a href="properties-list.html">List View</a>
                                                <ul class="sub-menu">
                                                    <li><a href="properties-list.html">List View Standard</a></li>
                                                    <li><a href="properties-list-fullwidth.html">List View Fullwidth</a></li>
                                                    <li><a href="properties-list-compare.html">List View Compare Panel</a></li>
                                                    <li><a href="properties-list-save-search.html">List View Save Search</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="properties-list-style-2.html">List View Style 2</a>
                                                <ul class="sub-menu">
                                                    <li><a href="properties-list-style-2.html">List View Standard Style 2</a></li>
                                                    <li><a href="properties-list-style-2-fullwidth.html">List View Fullwidth Style 2</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="properties-grid.html">Grid View</a>
                                                <ul class="sub-menu">
                                                    <li><a href="properties-grid.html">Grid View Standard</a></li>
                                                    <li><a href="properties-grid-fullwidth.html">Grid View Fullwidth</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="properties-grid-style-2.html">Grid View Style 2</a>
                                                <ul class="sub-menu">
                                                    <li><a href="properties-grid-style-2.html">Grid View Standard Style 2</a></li>
                                                    <li><a href="properties-grid-style-2-fullwidth.html">Grid View Fullwidth Style 2</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Map</a>
                                                <ul class="sub-menu">
                                                    <li><a href="map-listing.html">Half Map</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Property</a>
                                        <ul class="sub-menu">
                                            <li><a href="property-detail.html">Single Property v1</a></li>
                                            <li><a href="property-detail-v2.html">Single Property v2</a></li>
                                            <li><a href="property-detail-v3.html">Single Property v3</a></li>
                                            <li><a href="property-detail-landing-page.html">Property Landing Page</a></li>
                                            <li><a href="property-detail-full-width-gallery.html">Property Full Width Gallery</a></li>
                                            <li><a href="property-detail-tabs.html">Single Property Tabs v1</a></li>
                                            <li><a href="property-detail-tabs-vertical.html">Single Property Tabs v2</a></li>
                                            <li><a href="property-detail-multi-properties.html">Multi Units / Sub listing</a></li>
                                            <li><a href="property-nav-on-scroll.html">Property Nav On Scroll</a></li>
                                        </ul>
                                    </li>
                                    <li class="houzez-megamenu"><a href="#">Pages</a>
                                        <ul class="sub-menu">
                                            <li>
                                                <a href="#">Column 1</a>
                                                <ul class="sub-menu">
                                                    <li><a href="agent-list.html">All Agents</a></li>
                                                    <li><a href="agent-detail.html">Agent Profile</a></li>
                                                    <li><a href="agency-list.html">All Agencies</a></li>
                                                    <li><a href="company-profile.html">Company Profile</a></li>
                                                    <li><a href="compare-properties.html">Compare Properties</a></li>
                                                    <li><a href="landing-page.html">Landing Page</a></li>
                                                    <li><a href="map-full-search.html">Map Full Screen</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#">Column 2</a>
                                                <ul class="sub-menu">
                                                    <li><a href="about-us.html">About Houzez</a></li>
                                                    <li><a href="contact-us.html">Contact us</a></li>
                                                    <li><a href="login.html">Login Page</a></li>
                                                    <li><a href="register.html">Register Page</a></li>
                                                    <li><a href="forget-password.html">Forget Password Page</a></li>
                                                    <li><a href="typography.html">Typography</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#">Column 3</a>
                                                <ul class="sub-menu">
                                                    <li><a href="faqs.html">FAQs</a></li>
                                                    <li><a href="simple-page.html">Simple Page</a></li>
                                                    <li><a href="404.html">404 Page</a></li>
                                                    <li><a href="headers.html">Houzez Headers</a></li>
                                                    <li><a href="footer.html">Houzez Footers</a></li>
                                                    <li><a href="widgets.html">Houzez Widgets</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#">Column 4</a>
                                                <ul class="sub-menu">
                                                    <li><a href="search-bars.html">Houzez Search Bars</a></li>
                                                    <li><a href="add-new-property.html">Create Listing Page</a></li>
                                                    <li><a href="listing-select-package.html">Select Packages Page</a></li>
                                                    <li><a href="listing-payment.html">Payment Page</a></li>
                                                    <li><a href="listing-done.html">Listing Done Page</a></li>
                                                    <li><a href="blog.html">Blog</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#">Column 5</a>
                                                <ul class="sub-menu">
                                                    <li><a href="blog-detail.html">Blog detail</a></li>
                                                    <li><a href="my-account.html">My Account</a></li>
                                                    <li><a href="my-properties.html">My Properties</a></li>
                                                    <li><a href="my-favourite-properties.html">My Favourite Properties</a></li>
                                                    <li><a href="my-saved-search.html">My Saved Searches</a></li>
                                                    <li><a href="my-invoices.html">My Invoices</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="houzez-megamenu"><a href="#">Modules</a>
                                        <ul class="sub-menu">
                                            <li>
                                                <a href="#"> Column 1 </a>
                                                <ul class="sub-menu">
                                                    <li><a href="module-advanced-search.html">Advanced Search</a></li>
                                                    <li><a href="module-property-grids.html">Property Grids</a></li>
                                                    <li><a href="module-property-carousel-v1.html">Property Carousel v1</a></li>
                                                    <li><a href="module-property-carousel-v2.html">Property Carousel v2</a></li>

                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#"> Column 2 </a>
                                                <ul class="sub-menu">
                                                    <li><a href="module-property-cards.html">Property Cards Module</a></li>
                                                    <li><a href="module-property-by-id.html">Property by ID</a></li>
                                                    <li><a href="module-taxonomy-grids.html">Taxonomy Grids</a></li>
                                                    <li><a href="module-taxonomy-tabs.html">Taxonomy Tabs</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#"> Column 3 </a>
                                                <ul class="sub-menu">
                                                    <li><a href="module-testimonials.html">Testimonials</a></li>
                                                    <li><a href="module-membership-packages.html">Membership Packages</a></li>
                                                    <li><a href="module-agents.html">Agents</a></li>
                                                    <li><a href="module-team.html">Team</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#"> Column 4 </a>
                                                <ul class="sub-menu">
                                                    <li><a href="module-partners.html">Partners</a></li>
                                                    <li><a href="module-text-with-icons.html">Text with icons</a></li>
                                                    <li><a href="module-blog-post-carousels.html">Blog Post Carousels</a></li>
                                                    <li><a href="module-blog-post-grids.html">Blog Post Grids</a></li>
                                                    <li><a href="blog-masonry.html">Blog Post Masonry</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <div class="header-right">
                            <div>
                                <a href="#" data-toggle="modal" data-target="#pop-login">Sign In / Register</a>
                                <a href="add-new-property.html" class="btn btn-default">Create Listing</a>
                            </div>
                        </div>
                    </div>
                </header>
                <!--end section header-->
                <div class="splash-search">
                    <div class="search-table fave-screen-fix-inner">
                        <div class="search-col">
                            <h1>Welcome, Make Yourself At Home</h1>
                            <form class="form-inline banner-search-main">
                                <div class="form-group">
                                    <select class="selectpicker" data-live-search="false" data-live-search-style="begins" title="Location">
                                        <option>Location 1</option>
                                        <option>Location 2</option>
                                        <option>Location 3</option>
                                        <option>Location 4</option>
                                        <option>Location 5</option>
                                    </select>
                                    <div class="search">
                                        <input class="form-control" type="text" placeholder="Enter Keyword">
                                    </div>
                                    <div class="search-btn">
                                        <button class="btn btn-secondary"><i class="fa fa-search"></i> Search</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="splash-footer">
                    <div class="row">
                        <div class="col-sm-6 col-xs-6 splash-foot-left">
                            <p><i class="fa fa-phone-square"></i> CALL US FREE <strong>(800) 897 6543</strong></p>
                        </div>
                        <div class="col-sm-6 col-xs-6 splash-foot-right">
                            <p>Follow us
                                <a href="#" class="btn-facebook"><i class="fa fa-facebook-square"></i></a>
                                <a href="#" class="btn-twitter"><i class="fa fa-twitter-square"></i></a>
                                <a href="#" class="btn-linkedin"><i class="fa fa-linkedin-square"></i></a>
                                <a href="#" class="btn-pinterest"><i class="fa fa-pinterest-square"></i></a>
                                <a href="#" class="btn-google-plus"><i class="fa fa-google-plus-square"></i></a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--end section top-->

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