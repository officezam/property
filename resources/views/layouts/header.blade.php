@extends('layouts.dashboard')
@section('header')
<header id="header-section" class="header-section-4 header-main  nav-left hidden-sm hidden-xs" data-sticky="1">
        <div class="container">
            <div class="header-left">
                <div class="logo">
                    <a href="index.html">
                        <img src="{{url('assets/images/houzez-logo-color.png')}}" alt="logo">
                    </a>
                </div>
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
                <div class="user">
                    <a href="#" data-toggle="modal" data-target="#pop-login">Sign In / Register</a>
                    <a href="add-new-property.html" class="btn btn-default">Create Listing</a>
                </div>
            </div>
        </div>
    </header>
@stop