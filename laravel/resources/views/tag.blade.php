@extends('main')
@section('content')
<section id="main-content" class="blog main-container sidebar-active layout-archive-style1" role="main">
    <div class="container">
        <div class="row">
            @if (!empty($posts))
                <div class="col-lg-8 col-md-12 column-layout-style1">
                @foreach ($posts as $post)
                    <article id="post-{{$post->id}}" class="post-layout post-223 post type-post status-publish format-standard has-post-thumbnail hentry category-fitness category-well-being tag-health">
                        <article class="post-223 post type-post status-publish format-standard has-post-thumbnail hentry category-fitness category-well-being tag-health">
                            <div class="category-layout"> 
                                <div class="qoxag-grid-single thumb-left">   
                                    <div class="post-thumbnail">
                                        <a href="{{route('post.detail', $post->slug)}}" title="{{$post->title}}">
                                            <img width="850" height="560" src="{{$post->image}}" class="attachment-large size-large wp-post-image" alt="" loading="lazy"/>
                                        </a>
                                    </div>
                                    <div class="post-content with-thumb">
                                        @if (!empty($post->category))
                                        <div class="category-wrapper category-layout position-contentpart">
                                            @foreach ($post->category as $category)
                                            <a class="post-cat left-background" href="{{route('category.post', $category->slug)}}" style=>
                                                <span class="cat-background-span" style=></span>
                                                <span class="before">{{$category->name}}</span>
                                            </a> 
                                            @endforeach	
                                        </div>
                                        @endif
                                        <h3 class="post-heading">
                                            <a href="{{route('post.detail', $post->slug)}}" title="{{$post->title}}">{{ str_limit($post->title, 55)}}</a>
                                        </h3>
                                        <div class="post-meta">
                                            <span class="post-author">
                                                <span>by</span><a href="#">{{$post->author}}</a>
                                            </span>
                                            <span class="post-date"><i class="xts-icon xts-date"></i>{{format_date($post->created_at)}}</span>
                                        </div>
                                        <p class="post-excerpt">{{ str_limit($post->description, 122)}}</p>
                                    </div>
                                </div>
                            </div>     
                        </article>
                    </article>
                    @endforeach
                </div>                    
            @endif
            <!-- Sidebar col  -->
            <div class="col-lg-4 col-md-12">
                <aside id="sidebar" class="sidebar" role="complementary">
                    <div id="counter_widget-2" class="widget xs_counter-widget">
                        <h5 class="widget-title">Follow us</h5>
                        <div class="xs_social_counter_widget ">
                            <ul class="xs_counter_url wslu-style-1 wslu-counter-box-shaped wslu-counter-fill-colored wslu-counter-space wslu-none wslu-theme-font-no">
                                <li class="xs-counter-li facebook" data-key="facebook">
                                    <a href="http://www.facebook.com/" target="_blank"  title="facebook" rel="noopener">
                                        <div class="xs-social-icon">
                                            <span class="met-social met-social-facebook"></span>
                                        </div>
                                        <div class="xs-social-follower">12M</div>
                                        <div class="xs-social-follower-text">Fans</div>  
                                        <div class="wslu-hover-content">
                                            <div class="xs-social-followers">12M</div>
                                            <div class="xs-social-follower-text">Fans</div>
                                        </div>
                                    </a>
                                </li>
                                <li class="xs-counter-li twitter" data-key="twitter">
                                    <a href="http://twitter.com/" target="_blank"  title="twitter" rel="noopener">
                                        <div class="xs-social-icon">
                                            <span class="met-social met-social-twitter"></span>
                                        </div>
                                        <div class="xs-social-follower">590K</div>
                                        <div class="xs-social-follower-text">Followers</div>
                                        <div class="wslu-hover-content">
                                            <div class="xs-social-followers">590K </div>
                                            <div class="xs-social-follower-text">Followers</div>
                                        </div>
                                    </a>
                                </li>
                                <li class="xs-counter-li pinterest" data-key="pinterest">
                                    <a href="http://www.pinterest.com/" target="_blank"  title="pinterest" rel="noopener">
                                        <div class="xs-social-icon">
                                            <span class="met-social met-social-pinterest"></span>
                                        </div>
                                        <div class="xs-social-follower">880K</div>
                                        <div class="xs-social-follower-text">Followers</div>
                                        <div class="wslu-hover-content">
                                            <div class="xs-social-followers">880K</div>
                                            <div class="xs-social-follower-text">Followers</div>                                  
                                        </div>
                                    </a>
                                </li>
                                <li class="xs-counter-li dribbble" data-key="dribbble">
                                    <a href="https://dribbble.com/" target="_blank"  title="dribbble" rel="noopener">
                                        <div class="xs-social-icon">
                                            <span class="met-social met-social-dribbble"></span>
                                        </div>
                                        <div class="xs-social-follower">440K</div>
                                        <div class="xs-social-follower-text">Followers</div>
                                        <div class="wslu-hover-content">
                                            <div class="xs-social-followers">440K</div>                         
                                            <div class="xs-social-follower-text">Followers</div>                                
                                        </div>
                                    </a>
                                </li>
                                <li class="xs-counter-li instagram" data-key="instagram">
                                    <a href="http://instagram.com/" target="_blank"  title="instagram" rel="noopener">
                                        <div class="xs-social-icon">
                                            <span class="met-social met-social-instagram"></span>
                                        </div>
                                        <div class="xs-social-follower">60M</div>                             
                                        <div class="xs-social-follower-text">Followers</div>
                                        <div class="wslu-hover-content">
                                            <div class="xs-social-followers">60M</div>
                                            <div class="xs-social-follower-text">Followers</div>                         
                                        </div>
                                    </a>
                                </li>
                                <li class="xs-counter-li youtube" data-key="youtube">
                                    <a href="http://youtube.com/channel/" target="_blank"  title="youtube" rel="noopener">
                                        <div class="xs-social-icon">
                                            <span class="met-social met-social-youtube"></span>
                                        </div>
                                        <div class="xs-social-follower">10M</div>
                                        <div class="xs-social-follower-text">Subscribers</div>
                                        <div class="wslu-hover-content">
                                            <div class="xs-social-followers">10M</div>    
                                            <div class="xs-social-follower-text">Subscribers</div>                                
                                        </div>
                                    </a>
                                </li>       
                            </ul>
                        </div>
                     </div>
                     <div id="media_image-4" class="widget widget_media_image">
                         <a href="#">
                            <img width="700" height="1060" src="static/img/banner_1.png" class="image wp-image-254  attachment-full size-full" alt="" loading="lazy" style="max-width: 100%; height: auto;" />
                        </a>
                    </div>
                    <div id="qoxag_latest_news_widget-2" class="widget qoxag_latest_news_widget">
                        <h5 class="widget-title">Recent Posts</h5>
                        <div class="ts-count-post qoxag-recent-post">
                            <div class="qoxag-wrapper qoxag-post-grid">
                                <div class="col-12">
                                    <div class="qoxag-grid-single thumb-left">
                                        <div class="post-thumb">
                                            <a href="#" rel="bookmark" title="Weight Fares Elbakh wins Qatar’s first Olympic gold">
                                                <span class="qoxag-sm-bg-img" style="background-image: url(static/img/health_3.jpg);"></span>
                                            </a>
                                        </div>
                                        <div class="post-content">
                                            <div class="category-wrapper position-">
                                                <a class="post-cat left-background" href="#">
                                                    <span class="cat-background-span"></span>
                                                    <span class="before">Fitness</span>
                                                </a>
                                            </div>
                                            <h3 class="post-heading">
                                                <a href="#" rel="bookmark" title="Weight Fares Elbakh wins Qatar’s first Olympic gold">Weight Fares Elbakh wins Qatar’s first</a>
                                            </h3>
                                            <div class="post-meta">
                                                <span class="post-date" >
                                                    <i class="xts-icon xts-date" aria-hidden="true"></i> August 1, 2021
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="qoxag-grid-single thumb-left">
                                        <div class="post-thumb">
                                            <a href="#" rel="bookmark" title="Weight Fares Elbakh wins Qatar’s first Olympic gold">
                                                <span class="qoxag-sm-bg-img" style="background-image: url(static/img/health_3.jpg);"></span>
                                            </a>
                                        </div>
                                        <div class="post-content">
                                            <div class="category-wrapper position-">
                                                <a class="post-cat left-background" href="#">
                                                    <span class="cat-background-span"></span>
                                                    <span class="before">Fitness</span>
                                                </a>
                                            </div>
                                            <h3 class="post-heading">
                                                <a href="#" rel="bookmark" title="Weight Fares Elbakh wins Qatar’s first Olympic gold">Weight Fares Elbakh wins Qatar’s first</a>
                                            </h3>
                                            <div class="post-meta">
                                                <span class="post-date" >
                                                    <i class="xts-icon xts-date" aria-hidden="true"></i> August 1, 2021
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="qoxag-grid-single thumb-left">
                                        <div class="post-thumb">
                                            <a href="#" rel="bookmark" title="Weight Fares Elbakh wins Qatar’s first Olympic gold">
                                                <span class="qoxag-sm-bg-img" style="background-image: url(static/img/health_3.jpg);"></span>
                                            </a>
                                        </div>
                                        <div class="post-content">
                                            <div class="category-wrapper position-">
                                                <a class="post-cat left-background" href="#">
                                                    <span class="cat-background-span"></span>
                                                    <span class="before">Fitness</span>
                                                </a>
                                            </div>
                                            <h3 class="post-heading">
                                                <a href="#" rel="bookmark" title="Weight Fares Elbakh wins Qatar’s first Olympic gold">Weight Fares Elbakh wins Qatar’s first</a>
                                            </h3>
                                            <div class="post-meta">
                                                <span class="post-date" >
                                                    <i class="xts-icon xts-date" aria-hidden="true"></i> August 1, 2021
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="qoxag-grid-single thumb-left">
                                        <div class="post-thumb">
                                            <a href="#" rel="bookmark" title="Weight Fares Elbakh wins Qatar’s first Olympic gold">
                                                <span class="qoxag-sm-bg-img" style="background-image: url(static/img/health_3.jpg);"></span>
                                            </a>
                                        </div>
                                        <div class="post-content">
                                            <div class="category-wrapper position-">
                                                <a class="post-cat left-background" href="#">
                                                    <span class="cat-background-span"></span>
                                                    <span class="before">Fitness</span>
                                                </a>
                                            </div>
                                            <h3 class="post-heading">
                                                <a href="#" rel="bookmark" title="Weight Fares Elbakh wins Qatar’s first Olympic gold">Weight Fares Elbakh wins Qatar’s first</a>
                                            </h3>
                                            <div class="post-meta">
                                                <span class="post-date" >
                                                    <i class="xts-icon xts-date" aria-hidden="true"></i> August 1, 2021
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="qoxag-category-list-2" class="widget qoxag-category-list">
                        <h5 class="widget-title">Categories</h5>
                        <div class="widgets_category ts-category-list-item">
                            <ul class="ts-category-list">
                                <li>
                                    <a style="background-image:url(static/img/health_7.jpg)" href="#">
                                        <span>Features</span>
                                        <span class="bar"></span>
                                        <span class="category-count">3</span>
                                    </a>
                                </li>
                                <li class="active-cat">
                                    <a style="background-image:url(static/img/health_2.jpg)" href="#">
                                        <span>Fitness</span>
                                        <span class="bar"></span>
                                        <span class="category-count">3</span>
                                    </a>
                                </li>
                                <li>
                                    <a style="background-image:url(static/img/health_8.jpg)" href="#">
                                        <span>Health</span>
                                        <span class="bar"></span>
                                        <span class="category-count">5</span>
                                    </a>
                                </li>
                                <li>
                                    <a style="background-image:url(static/img/health_3.jpg)" href="#">
                                        <span>Nutrition</span>
                                        <span class="bar"></span>
                                        <span class="category-count">4</span>
                                    </a>
                                </li>
                                <li>
                                    <a style="background-image:url(static/img/health_1.jpg)" href="#">
                                        <span>Weight Loss</span>
                                        <span class="bar"></span>
                                        <span class="category-count">2</span>
                                    </a>
                                </li>
                                <li>
                                    <a style="background-image:url(static/img/health_4.jpg)" href="#">
                                        <span>well-being</span>
                                        <span class="bar"></span>
                                        <span class="category-count">2</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </aside>
            </div>
        </div><!-- .row -->
    </div><!-- .container -->
</section>
@endsection