@extends('layouts.app')
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
                @foreach($blog_post as $record)
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
                                        <a href="#"><img src="<?php echo url('ProfileImage') ?>/{{$record->user_image}}" alt="Auther Image" class="meta-image" height="40" width="40"></a>
                                        by <a href="#">{{  $record->first_name }}</a>
                                    </li>
                                    <?php
                                    $get_date = $record->date;
                                    $replace = str_replace('/', '-', $get_date);
                                    $date = date('M d, Y', strtotime($replace));
                                    ?>
                                    <li><i class="fa fa-calendar"></i> {{ $date }} </li>
                                    <li><i class="fa fa-bookmark-o"></i> <a href="#" rel="category tag">Construction</a></li>
                                    <li><i class="fa fa-comments-o"></i> 1</li>
                                </ul>
                            </div>

                            <div class="article-media">
                                <img width="810" height="430" src="<?php echo url('BlogImages/') ?>/{{ $record->blog_image }}" alt="Learn The Truth About Real Estate Industry">
                            </div>


                            <div class="article-detail">
                                {!! $record->blog_post !!}
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
                        <?php
                        if (!isset($_SESSION)) {
                            session_start();
                        }
                        if (Auth::user()) {
                            ?>
                            <div class="blog-section">

                                <h3 class="blog-section-title">Join The Discussion</h3>
                                <div class="comments-form">
                                    <form method="POST" action="{{ URL::action('BlogController@comment_post',['id' => $record]) }}">
                                        {{ csrf_field() }}
                                        <div class="row">
<!--                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <div class="input-user input-icon">
                                                        <input placeholder="Your Name" class="form-control" name="name" type="text">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <div class="input-email input-icon">
                                                        <input name="email" placeholder="Your Email" class="form-control" type="text">
                                                    </div>
                                                </div>
                                            </div>-->
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <textarea placeholder="Your Comments" name="comment" class="form-control" rows="4"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <button class="btn btn-primary">Post Comments</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
<?php } else { ?>
                            <br>
                            <h2 class="blog-section-title">If Join The Discussion Please Login/Register</h2>

<?php } ?>
                        <div class="blog-section">
                            <h3 class="blog-section-title">Comments</h3>
                            @foreach($Comment_post as $Comment)
                            <div class="comments-block">
                                <div class="media">
                                    <div class="media-left">
                                        <figure>
                                            <a href="#"><img src="<?php echo url('ProfileImage') ?>/{{$Comment->user_image}}" alt="img" width="60" height="60" class="img-circle"></a>
                                        </figure>
                                    </div>
                                    <?php
                                    $get_date = $Comment->date;
                                    $replace = str_replace('/', '-', $get_date);
                                    $date_comment = date('M d, Y', strtotime($replace));
                                    ?>
                                    <div class="media-body">
                                        <h3 class="heading">{{$Comment->first_name}}</h3>
                                        <h4 class="subheading">{{$date_comment}} </h4>
                                        <p>{{$Comment->comment}}</p>
                                        @foreach($Reply_post as $Reply)
                                        @if($Reply->comment_id == $Comment->comm_id)
                                        <div class="media">
                                            <div class="media-left">
                                                <figure>
                                                    <a href="#"><img src="<?php echo url('ProfileImage') ?>/{{$Reply->u_image}}" alt="img" width="60" height="60" class="img-circle"></a>
                                                </figure>
                                            </div>
                                            <div class="media-body">
                                                <h3 class="heading">{{$Comment->first_name}}</h3>
                                                <?php
                                                $get_date = $Reply->date;
                                                $replace = str_replace('/', '-', $get_date);
                                                $date_reply = date('M d, Y', strtotime($replace));
                                                ?>
                                                <h4 class="subheading">{{$date_reply}} </h4>
                                                <p>{{$Reply->reply_post}}</p>
                                                <!--<a href="#" class="reply">Reply <i class="fa fa-angle-right"></i></a>-->
                                            </div>
                                        </div>
                                        @endif
                                        @endforeach
                                        <a class="reply">  Reply <i class="fa fa-angle-right"></i>
                                        <?php
                                        if (!isset($_SESSION)) {
                                            session_start();
                                        }
                                        if (Auth::user()) {
                                            ?>
                                            <div class="blog-section">
                                                <div class="comments-form">
                                                    <form method="POST" action="{{ URL('reply_post').'?'.'comm_id'.'='.$Comment->comm_id }}">
                                                    {{ csrf_field() }}
                                                        <div class="row">
                                                            <div class="col-sm-9">
                                                                <div class="form-group">
                                                                    <textarea placeholder="Your Comment Reply" name="reply_post" class="form-control" rows="1"></textarea>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-3">
                                                                <button class="btn btn-primary">send</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                          <?php } else { ?>
                                            <br>
                                            <h2 class="blog-section-title">If Join The Discussion and Reply Please Login/Register</h2>

                                        <?php } ?>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>

                    </div>
                </div>
                @endforeach
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