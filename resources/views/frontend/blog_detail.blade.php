@extends('layouts.dashboard')
@section('content')
   <!--start blog header-->
    <div class="blog-header">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="blog-header-nav">
                        <nav class="navi visible-lg visible-md">
                            <ul>
                                <li><a href="#">For Sale</a></li>
                                <li><a href="#">For Rent</a></li>
                                <li><a href="#">Finacing</a></li>
                                <li><a href="#">Blog</a></li>
                                <li><a href="#">Contact us</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="blog-header-search">
                        <form>
                            <input class="form-control" placeholder="Blog Search">
                            <button class="search-btn"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end blog header-->

    <!--start section page body-->
    <section id="section-body">
        <!--start detail content-->
        <section class="section-detail-content">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title breadcrumb-top">
                            <div class="row">
                                <div class="col-sm-12">
                                    <ol class="breadcrumb">
                                        <li><a href="#"><i class="fa fa-home"></i></a></li>
                                        <li><a href="#">Construction</a></li>
                                        <li class="active">Learn The Truth About Real Estate Industry</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 container-contentbar">
                        <div class="article-main">
                            <article class="blog-article">
                                <div class="page-title">
                                    <h2>Learn The Truth About Real Estate Industry</h2>
                                    <ul class="author-meta">
                                        <li class="name">
                                            <a href="#"><img src="http://placehold.it/40x40" alt="Auther Image" class="meta-image" height="40" width="40"></a>
                                            by <a href="#">Samuel Palmer</a>
                                        </li>
                                        <li><i class="fa fa-calendar"></i> March 9, 2016 </li>
                                        <li><i class="fa fa-bookmark-o"></i> <a href="#" rel="category tag">Construction</a></li>
                                        <li><i class="fa fa-comments-o"></i> 1</li>
                                    </ul>
                                </div>

                                <div class="article-media">
                                    <img width="810" height="430" src="http://placehold.it/810x430" alt="Learn The Truth About Real Estate Industry">
                                </div>


                                <div class="article-detail">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis mollis et sem sed sollicitudin. Donec non odio neque. Aliquam hendrerit sollicitudin purus, quis rutrum mi accumsan nec.&nbsp;<strong>Quisque bibendum orci ac nibh facilisis</strong>, at malesuada orci congue. Nullam tempus sollicitudin cursus. Ut et adipiscing erat. Curabitur&nbsp;<a href="http://magzilla10.favethemes.com/wp/magzilla/demo02/introducing-a-revolutionary-method-to-master-make-up/">this is a text link</a>&nbsp;libero tempus congue.</p>
                                    <p>Duis mattis laoreet neque, et ornare neque sollicitudin at. Proin sagittis dolor sed mi elementum pretium. Donec et justo ante. Vivamus egestas sodales est, eu rhoncus urna semper eu. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Integer tristique elit lobortis purus bibendum, quis dictum metus mattis. Phasellus posuere felis sed eros porttitor mattis. Curabitur massa magna, tempor in blandit id, porta in ligula. Aliquam laoreet nisl massa, at interdum mauris sollicitudin et.</p>
                                    <h2>Quisque this is a link nibh facilisis at malesuada</h2>
                                    <p>Nullam tempus sollicitudin cursus. Nulla elit mauris, volutpat eu varius malesuada, pulvinar eu ligula. Ut et adipiscing erat. Curabitur adipiscing erat vel libero tempus congue. Nam pharetra interdum vestibulum. Aenean gravida mi non aliquet porttitor. Praesent dapibus, nisi a faucibus tincidunt, quam dolor condimentum metus, in convallis libero ligula ut eros.</p>

                                    <div id="gallery-1" class="gallery gallery-columns-4">
                                        <figure class="gallery-item">
                                            <a href="#">
                                                <img width="300" height="202" src="http://placehold.it/300x202" alt="gallery-item">
                                            </a>
                                        </figure>
                                        <figure class="gallery-item">
                                            <a href="#">
                                                <img width="300" height="202" src="http://placehold.it/300x202" alt="gallery-item">
                                            </a>
                                        </figure>
                                        <figure class="gallery-item">
                                            <a href="#">
                                                <img width="300" height="202" src="http://placehold.it/300x202" alt="gallery-item">
                                            </a>
                                        </figure>
                                        <figure class="gallery-item">
                                            <a href="#">
                                                <img width="300" height="202" src="http://placehold.it/300x202" alt="gallery-item">
                                            </a>
                                        </figure>
                                    </div>

                                    <p>Proin suscipit, ex non sodales aliquam, ante mauris laoreet felis, vitae fermentum ligula nibh ut ex. Vivamus sem magna, iaculis ut pretium ac, tincidunt vel ipsum. Maecenas commodo, velit vel porta vulputate, lorem sem accumsan nunc, nec scelerisque elit turpis eget mauris. Donec dictum elit vel nunc tristique, eu lobortis ante sodales. Etiam posuere leo ut leo laoreet, a gravida dui ultricies. Morbi vehicula nulla eget elit mollis, at condimentum est feugiat.</p>
                                    <blockquote><p>Duis mollis et sem sed sollicitudin. Donec non odio neque. Aliquam hendrerit sollicitudin purus, quis rutrum mi accumsan nec.</p></blockquote>
                                    <p>Duis mattis laoreet neque, et ornare neque sollicitudin at. Proin sagittis dolor sed mi elementum pretium. Donec et justo ante. Vivamus egestas sodales est, eu rhoncus urna semper eu. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Integer tristique elit lobortis purus bibendum, quis dictum metus mattis.</p>
                                    <h3>Phasellus posuere felis sed eros porttitor mattis</h3>
                                    <p>Curabitur massa magna, tempor in blandit id, porta in ligula. Aliquam laoreet nisl massa, at interdum mauris sollicitudin et. Mauris risus lectus, tristique at nisl at, pharetra tristique enim.</p>
                                    <p>Nullam this is a link nibh facilisis, at malesuada orci congue. Nullam tempus sollicitudin cursus. Nulla elit mauris, volutpat eu varius malesuada, pulvinar eu ligula. Ut et adipiscing erat. Curabitur adipiscing erat vel libero tempus congue. Nam pharetra interdum vestibulum. Aenean gravida mi non aliquet porttitor. Praesent dapibus, nisi a faucibus tincidunt, quam dolor condimentum metus, in convallis libero ligula ut eros.</p>
                                    <ul>
                                        <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
                                        <li>Aliquam tincidunt mauris eu risus.
                                            <ol>
                                                <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
                                                <li>Aliquam tincidunt mauris eu risus.</li>
                                                <li>Vestibulum auctor dapibus neque.</li>
                                            </ol>
                                        </li>
                                        <li>Vestibulum auctor dapibus neque.</li>
                                    </ul>
                                    <p>Ut non gravida arcu. Vivamus non congue leo. Aliquam dapibus laoreet purus, vitae iaculis eros egestas ac. Mauris massa est, lobortis a viverra eget, elementum sit amet ligula. Maecenas venenatis eros quis porta laoreet.</p>
                                    <h4>Sed ultrices placerat metus. Vivamus posuere leo nunc, eget mollis odio posuere nec.</h4>
                                    <p><img src="http://placehold.it/1024x580" alt="chicago" width="1024" height="581"></p>
                                    <p>Vivamus varius vitae dolor ac hendrerit. Vestibulum nec dolor ac nunc blandit aliquam. Nam at metus non ligula egestas varius ac sed mauris. Fusce at mi metus. Nam elementum dui id nulla bibendum elementum.</p>
                                    <ol>
                                        <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
                                        <li>Aliquam tincidunt mauris eu risus.
                                            <ol>
                                                <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
                                                <li>Aliquam tincidunt mauris eu risus.</li>
                                                <li>Vestibulum auctor dapibus neque.</li>
                                            </ol>
                                        </li>
                                        <li>Vestibulum auctor dapibus neque.</li>
                                    </ol>
                                    <p>Proin sagittis dolor sed mi elementum pretium. Donec et justo ante. Vivamus egestas sodales est, eu rhoncus urna semper eu. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Integer tristique elit lobortis purus bibendum, quis dictum metus mattis. Phasellus posuere felis sed eros porttitor mattis. Curabitur massa magna, tempor in blandit id, porta in ligula. Aliquam laoreet nisl massa, at interdum mauris sollicitudin et.</p>

                                </div>
                                <div class="article-footer">
                                    <h3 class="meta-title">Tags:</h3>
                                    <ul class="meta-tags">
                                        <li><a href="#" rel="tag">Apartment</a></li>
                                        <li><a href="#" rel="tag">Business Development</a></li>
                                        <li><a href="#" rel="tag">House for families</a></li>
                                        <li><a href="#" rel="tag">Houzez</a></li>
                                        <li><a href="#" rel="tag">Luxury</a></li>
                                        <li><a href="#" rel="tag">Real Estate</a></li>
                                    </ul>
                                </div>
                            </article>
                            <div class="next-prev-block next-prev-blog blog-section clearfix">
                                <div class="prev-box pull-left">
                                    <div class="media">
                                        <div class="media-left">
                                            <a href="#"><i class="fa fa-arrow-circle-left"></i></a>
                                        </div>
                                        <div class="media-body media-middle">
                                            <h3 class="media-heading"><a href="#"> Previous post</a></h3>
                                            <h4><a href="#">Villa For Sale</a></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="next-box pull-right">
                                    <div class="media">
                                        <div class="media-body media-middle text-right">
                                            <h3 class="media-heading"><a href="#">Next post</a></h3>
                                            <h4><a href="#">Villa For Sale</a></h4>
                                        </div>
                                        <div class="media-right">
                                            <a href="#"><i class="fa fa-arrow-circle-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="blog-section">
                                <div class="author-detail-block">
                                    <div class="media">
                                        <div class="media-left">
                                            <figure>
                                                <a href="#"><img src="http://placehold.it/60x60" alt="img" width="60" height="60" class="img-circle"></a>
                                            </figure>
                                        </div>
                                        <div class="media-body">
                                            <h4 class="heading">John Doe</h4>
                                            <p>Besides checking recent sales prices on Trulia, “Ask your broker to show how they arrived at valuing the house so you can justify your offer price,” says Koss. If there are low comps in the area from short sales or foreclosures, for example, the appraisal could come in lower than your offer. </p>
                                            <ul class="profile-social">
                                                <li><a href="#"><i class="fa fa-phone-square"></i></a></li>
                                                <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
                                                <li><a href="#"><i class="fa fa-twitter-square"></i></a></li>
                                                <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="blog-section">
                                <h3 class="blog-section-title">Related posts</h3>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="post-card-item">
                                            <figure class="item-thumb">
                                                <a href="#" class="hover-effect">
                                                    <img src="http://placehold.it/350x235" alt="chicago-05" height="235" width="350">
                                                </a>
                                                <div class="thumb-caption clearfix">
                                                    <div class="file-type pull-left"><i class="fa fa-file"></i></div>
                                                    <div class="comment-count pull-right">
                                                        <span class="count">2</span>
                                                        <i class="fa fa-comments-o"></i>
                                                    </div>
                                                </div>
                                            </figure>
                                            <div class="post-card-body">

                                                <div class="post-card-description">
                                                    <ul class="list-inline">
                                                        <li><i class="fa fa-calendar"></i> March 9, 2016 </li>
                                                        <li><i class="fa fa-bookmark-o"></i> <a href="#" rel="category tag">Marketing</a>, <a href="#" rel="category tag">Real Estate</a></li>
                                                    </ul>
                                                    <h3>Skills That You Can Learn In The Real Estate Market</h3>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis mollis et sem sed sollicitudin. Donec...</p>
                                                    <a href="#" class="read">Continue reading <i class="fa fa-caret-right"></i></a>
                                                </div>
                                                <div class="post-card-author">
                                                    <div class="author-image">
                                                        <img src="http://placehold.it/40x40" class="img-circle" alt="Author Image" height="40" width="40">
                                                    </div>
                                                    <div class="author-name">
                                                        <span>by admin</span>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="post-card-item">
                                            <figure class="item-thumb">
                                                <a href="#" class="hover-effect">
                                                    <img src="http://placehold.it/350x235" alt="chicago-05" height="235" width="350">
                                                </a>
                                                <div class="thumb-caption clearfix">
                                                    <div class="file-type pull-left"><i class="fa fa-file"></i></div>
                                                    <div class="comment-count pull-right">
                                                        <span class="count">2</span>
                                                        <i class="fa fa-comments-o"></i>
                                                    </div>
                                                </div>
                                            </figure>
                                            <div class="post-card-body">

                                                <div class="post-card-description">
                                                    <ul class="list-inline">
                                                        <li><i class="fa fa-calendar"></i> March 9, 2016 </li>
                                                        <li><i class="fa fa-bookmark-o"></i> <a href="#" rel="category tag">Marketing</a>, <a href="#" rel="category tag">Real Estate</a></li>
                                                    </ul>
                                                    <h3>Skills That You Can Learn In The Real Estate Market</h3>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis mollis et sem sed sollicitudin. Donec...</p>
                                                    <a href="#" class="read">Continue reading <i class="fa fa-caret-right"></i></a>
                                                </div>
                                                <div class="post-card-author">
                                                    <div class="author-image">
                                                        <img src="http://placehold.it/40x40" class="img-circle" alt="Author Image" height="40" width="40">
                                                    </div>
                                                    <div class="author-name">
                                                        <span>by admin</span>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="post-card-item">
                                            <figure class="item-thumb">
                                                <a href="#" class="hover-effect">
                                                    <img src="http://placehold.it/350x235" alt="chicago-05" height="235" width="350">
                                                </a>
                                                <div class="thumb-caption clearfix">
                                                    <div class="file-type pull-left"><i class="fa fa-file"></i></div>
                                                    <div class="comment-count pull-right">
                                                        <span class="count">2</span>
                                                        <i class="fa fa-comments-o"></i>
                                                    </div>
                                                </div>
                                            </figure>
                                            <div class="post-card-body">

                                                <div class="post-card-description">
                                                    <ul class="list-inline">
                                                        <li><i class="fa fa-calendar"></i> March 9, 2016 </li>
                                                        <li><i class="fa fa-bookmark-o"></i> <a href="#" rel="category tag">Marketing</a>, <a href="#" rel="category tag">Real Estate</a></li>
                                                    </ul>
                                                    <h3>Skills That You Can Learn In The Real Estate Market</h3>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis mollis et sem sed sollicitudin. Donec...</p>
                                                    <a href="#" class="read">Continue reading <i class="fa fa-caret-right"></i></a>
                                                </div>
                                                <div class="post-card-author">
                                                    <div class="author-image">
                                                        <img src="http://placehold.it/40x40" class="img-circle" alt="Author Image" height="40" width="40">
                                                    </div>
                                                    <div class="author-name">
                                                        <span>by admin</span>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="blog-section">
                                <h3 class="blog-section-title">Join The Discussion</h3>
                                <div class="comments-form">
                                    <form>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <div class="input-user input-icon">
                                                        <input placeholder="Your Name" class="form-control" type="text">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <div class="input-email input-icon">
                                                        <input placeholder="Your Email" class="form-control" type="text">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <textarea placeholder="Your Comments" class="form-control" rows="4"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <button class="btn btn-primary">Post Comments</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="blog-section">
                                <h3 class="blog-section-title">Comments</h3>
                                <div class="comments-block">
                                    <div class="media">
                                        <div class="media-left">
                                            <figure>
                                                <a href="#"><img src="http://placehold.it/60x60" alt="img" width="60" height="60" class="img-circle"></a>
                                            </figure>
                                        </div>
                                        <div class="media-body">
                                            <h3 class="heading">John Doe</h3>
                                            <h4 class="subheading">February 6, 2014 </h4>
                                            <p>Besides checking recent sales prices on Trulia, “Ask your broker to show how they arrived at valuing the house so you can justify your offer price,” says Koss. If there are low comps in the area from short sales or foreclosures, for example, the appraisal could come in lower than your offer.</p>
                                            <a href="#" class="reply">Reply <i class="fa fa-angle-right"></i></a>
                                            <div class="media">
                                                <div class="media-left">
                                                    <figure>
                                                        <a href="#"><img src="http://placehold.it/60x60" alt="img" width="60" height="60" class="img-circle"></a>
                                                    </figure>
                                                </div>
                                                <div class="media-body">
                                                    <h3 class="heading">John Doe</h3>
                                                    <h4 class="subheading">February 6, 2014 </h4>
                                                    <p>Besides checking recent sales prices on Trulia, “Ask your broker to show how they arrived at valuing the house so you can justify your offer price,” says Koss. If there are low comps in the area from short sales or foreclosures, for example, the appraisal could come in lower than your offer.</p>
                                                    <a href="#" class="reply">Reply <i class="fa fa-angle-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="media author-comment-this">
                                        <div class="comment-banner"></div>
                                        <div class="media-left">
                                            <figure>
                                                <a href="#"><img src="http://placehold.it/60x60" alt="img" width="60" height="60" class="img-circle"></a>
                                            </figure>
                                        </div>
                                        <div class="media-body">
                                            <h3 class="heading">John Doe</h3>
                                            <h4 class="subheading">February 6, 2014 </h4>
                                            <p>Besides checking recent sales prices on Trulia, “Ask your broker to show how they arrived at valuing the house so you can justify your offer price,” says Koss.</p>
                                            <a href="#" class="reply">Reply <i class="fa fa-angle-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 col-md-offset-0 col-sm-offset-3 container-sidebar">
                        <aside id="sidebar">
                            <div class="widget widget-download">
                                <div class="widget-top">
                                    <h3 class="widget-title">Documents</h3>
                                </div>
                                <div class="widget-body">
                                    <ul>
                                        <li>
                                            <div class="pull-left">
                                                Property plan PDF
                                            </div>
                                            <div class="pull-right">
                                                <a href="#">DOWNLOAD</a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="pull-left">
                                                Brochure PDF
                                            </div>
                                            <div class="pull-right">
                                                <a href="#">DOWNLOAD</a>
                                            </div>
                                        </li>
                                    </ul>
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
        <!--end detail content-->

    </section>
    <!--end section page body-->
@endsection