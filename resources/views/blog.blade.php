@extends('layouts.app')

@section('content')
<!--start section page body-->
<section id="section-body">

    <!--start detail content-->
    <section class="section-detail-content blog-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 container-contentbar">
                    <div class="article-main">
                        @foreach($blog_post as $record)
                        <article class="blog-article">
                            <div class="article-media">
                                <td> <img src="<?php echo url('BlogImages/') ?>/{{ $record->blog_image }}" alt="Blog Image" width="810" height="100">
                                </td> </div>
                            <div class="article-detail">
                                {!! str_limit("$record->blog_post", 400) !!}.....
                            </div>
                            <div class="article-footer">
                                <ul class="author-meta">
                                    <li>

                                        <img src="<?php echo url('ProfileImage') ?>/{{$record->user_image}}" alt="Auther Image" width="40" height="40" class="meta-image">
                                        {{  $record->first_name }}
                                    </li>
                                    <?php
                                    $get_date = $record->date;
                                    $replace = str_replace('/', '-', $get_date);
                                    $date = date('M d, Y', strtotime($replace));
                                    ?>
                                    <li><i class="fa fa-calendar"></i> {{ $date }} </li>
                                    <li><i class="fa fa-bookmark-o"></i> <a href="#">Real Estate</a></li>
                                </ul>
                                <div class="article-footer-right">
                                    <!--<a href="{{ URL('blog_detail').'?'.'id'.'='.$record->link_id }}" class="btn btn-primary">Read More</a>-->
                                    <a href="{{ URL::action('PagesController@blog_detail',['id' => $record]) }}" class="btn btn-primary">Read More</a>
                                </div>
                            </div>
                        </article>
                        @endforeach
                        <hr>
                        <!--start pagination-->
                        <div class="pagination-main">
                            <ul class="pagination">
                                <li class="disabled"><a aria-label="Previous" href="#"><span aria-hidden="true"><i class="fa fa-angle-left"></i></span></a></li>
                                <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li><a aria-label="Next" href="#"><span aria-hidden="true"><i class="fa fa-angle-right"></i></span></a></li>
                            </ul>
                        </div>
                        <!--end pagination-->
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 col-md-offset-0 col-sm-offset-3 container-sidebar">
                    <aside id="sidebar">
                        <div class="widget widget-recommend">
                            <div class="widget-top">
                                <h3 class="widget-title">We recommend</h3>
                            </div>
                            <div class="widget-body">
                                @foreach($allproperty->slice(0,3) as $property)
                                    <div class="media">
                                        <div class="media-left">
                                            <figure class="item-thumb">
                                                <a class="hover-effect" href="/property-detail/{{ $property->id  }}/{{ preg_replace('/\s+/', '-', $property->title)  }}">
                                                    <img  alt="{{ $property->title }}" src="{{ asset('propetyImages/'.$property->id.'/100x75'.$property->image0)}}" width="100" height="75">
                                                </a>
                                            </figure>
                                        </div>
                                        <div class="media-body">
                                            <h3 class="media-heading"><a href="/property-detail/{{ $property->id  }}/{{ preg_replace('/\s+/', '-', $property->title)  }}">{{ $property->title }}</a></h3>
                                            <div class="rating">
                                                <span class="star-text-left">Rs {{ $property->price }}</span>
                                                <span data-title="Average Rate: 4.67 / 5" class="bottom-ratings tip">
                                                <span class="fa fa-star-o" onclick="getRank('{{ $property->id  }}' , 1)"></span>
                                                <span class="fa fa-star-o" onclick="getRank('{{ $property->id  }}' , 2)"></span>
                                                <span class="fa fa-star-o" onclick="getRank('{{ $property->id  }}' , 3)"></span>
                                                <span class="fa fa-star-o" onclick="getRank('{{ $property->id  }}' , 4)"></span>
                                                <span class="fa fa-star-o" onclick="getRank('{{ $property->id  }}' , 5)"></span>
                                                <span style="width: 05%" class="top-ratings" id="{{ $property->id }}">
                                                                    <span class="fa fa-star"></span>
                                                                    <span class="fa fa-star"></span>
                                                                    <span class="fa fa-star"></span>
                                                                    <span class="fa fa-star"></span>
                                                                    <span class="fa fa-star"></span>
                                                                </span>
                                                </span>

                                            </div>
                                            @if(!empty($property->beds))
                                                <div class="amenities">
                                                    <p>{{$property->beds}} beds • {{$property->bathroom}} baths • {{$property->area}} {{$property->area_unit}}</p>
                                                    <p>{{$property->subtype}}</p>
                                                </div>
                                            @endif
                                        </div>

                                    </div>
                                @endforeach

                            </div>
                        </div>
                        <div class="widget widget-rated">
                            <div class="widget-top">
                                <h3 class="widget-title">Most Rated Properties</h3>
                            </div>
                            <div class="widget-body">
                                @foreach($allproperty->slice(0,3) as $property)
                                    <div class="media">
                                        <div class="media-left">
                                            <figure class="item-thumb">
                                                <a class="hover-effect" href="/property-detail/{{ $property->id  }}/{{ preg_replace('/\s+/', '-', $property->title)  }}">
                                                    <img  alt="{{ $property->title }}" src="{{ asset('propetyImages/'.$property->id.'/100x75'.$property->image2)}}" width="100" height="75">
                                                </a>
                                            </figure>
                                        </div>
                                        <div class="media-body">
                                            <h3 class="media-heading"><a href="/property-detail/{{ $property->id  }}/{{ preg_replace('/\s+/', '-', $property->title)  }}">{{ $property->title }}</a></h3>
                                            <div class="rating">
                                                <span class="star-text-left">Rs {{ $property->price }}</span>
                                                <span data-title="Average Rate: 4.67 / 5" class="bottom-ratings tip">
                                                <span class="fa fa-star-o" onclick="getRank('{{ $property->id  }}' , 1)"></span>
                                                <span class="fa fa-star-o" onclick="getRank('{{ $property->id  }}' , 2)"></span>
                                                <span class="fa fa-star-o" onclick="getRank('{{ $property->id  }}' , 3)"></span>
                                                <span class="fa fa-star-o" onclick="getRank('{{ $property->id  }}' , 4)"></span>
                                                <span class="fa fa-star-o" onclick="getRank('{{ $property->id  }}' , 5)"></span>
                                                <span style="width: 05%" class="top-ratings" id="{{ $property->id }}">
                                                                    <span class="fa fa-star"></span>
                                                                    <span class="fa fa-star"></span>
                                                                    <span class="fa fa-star"></span>
                                                                    <span class="fa fa-star"></span>
                                                                    <span class="fa fa-star"></span>
                                                                </span>
                                                </span>


                                            </div>
                                            @if(!empty($property->beds))
                                                <div class="amenities">
                                                    <p>{{$property->beds}} beds • {{$property->bathroom}} baths • {{$property->area}} {{$property->area_unit}}</p>
                                                    <p>{{$property->subtype}}</p>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                @endforeach
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
    <!--end detail content-->

</section>
<!--end section page body-->
@stop