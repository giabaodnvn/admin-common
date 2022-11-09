<!DOCTYPE html>
<html lang="{{str_replace('_', '-', app()->getLocale())}}">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title>{{ env('APP_NAME') }}</title>
<base href="{{ asset('') }}">
<style type="text/css">
img.wp-smiley,
img.emoji {
	display: inline !important;
	border: none !important;
	box-shadow: none !important;
	height: 1em !important;
	width: 1em !important;
	margin: 0 .07em !important;
	vertical-align: -0.1em !important;
	background: none !important;
	padding: 0 !important;
}
</style>

<link rel='stylesheet' href='static/css/web/animation.css'/>

<link rel='stylesheet' href='static/css/web/trx_addons_icons.css'/>

<link rel='stylesheet' href='static/css/web/__styles.css'/>
<link rel='stylesheet' href='static/css/web/trx_socials_icons.css'/>

<link rel='stylesheet' href='static/css/web/frontend.min.css'/>
<link rel="stylesheet" href="static/css/web/mystyle.css">
<link rel='stylesheet' href='static/css/web/font-awesome.min.css'/>
<link  rel='stylesheet' href='static/css/web/front.min.css'/>

<link  rel='stylesheet' href='static/css/web/style.css'/>

<link rel='stylesheet' href='static/css/web/__plugins.css'/>
<link  rel='stylesheet' href='static/css/web/skin.css'>
<link  rel='stylesheet' href='static/css/web/__custom.css'/>
<link  rel='stylesheet' href='static/css/web/__colors-default.css'/>
<link  rel='stylesheet' href='static/css/web/__colors-dark.css'/>
<link  rel='stylesheet' href='static/css/web/__responsive.css'/>
<link  rel='stylesheet' href='static/css/web/__theme_responsive.css'/>
<link  rel='stylesheet' href='static/css/web/skin-responsive.css'/>
<link  rel='stylesheet' id='google-fonts-1-css' href='https://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto+Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&#038;display=auto&#038;ver=5.8.2' type='text/css' media='all' />
<script type='text/javascript' src='static/js/web/jquery.min.js'></script>
<script type='text/javascript' src='static/js/web/jquery-migrate.min.js'></script>

<style type="text/css">
    .recentcomments a{display:inline !important;padding:0 !important;margin:0 !important;}
</style>

<style type="text/css" id="trx_addons-inline-styles-inline-css">.trx_addons_inline_1444223079 img{max-height:40px;}.trx_addons_inline_1870376699 img{max-height:40px;}.blabber_inline_1564679468{background-image: url(static/img/post10-copyright.jpg);}.blabber_inline_742279081{background-image: url(static/img/post21-copyright-1410x793.jpg);}.trx_addons_inline_1018699731 img{max-height:40px;}</style>
<style id="elementor-post-717">.elementor-717 .elementor-element.elementor-element-67dbdec > .elementor-container > .elementor-row > .elementor-column > .elementor-column-wrap > .elementor-widget-wrap{align-content:center;align-items:center;}.elementor-717 .elementor-element.elementor-element-67dbdec:not(.elementor-motion-effects-element-type-background), .elementor-717 .elementor-element.elementor-element-67dbdec > .elementor-motion-effects-container > .elementor-motion-effects-layer{background-color:#000000;}.elementor-717 .elementor-element.elementor-element-67dbdec{transition:background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;padding:3px 0px 3px 0px;}.elementor-717 .elementor-element.elementor-element-67dbdec > .elementor-background-overlay{transition:background 0.3s, border-radius 0.3s, opacity 0.3s;}.elementor-717 .elementor-element.elementor-element-40f9e28 > .elementor-element-populated{text-align:center;}.elementor-717 .elementor-element.elementor-element-f5f0691 .logo_image{max-height:40px;}.elementor-717 .elementor-element.elementor-element-f5f0691 > .elementor-widget-container{margin:0px -10px 0px 0px;}.elementor-717 .elementor-element.elementor-element-76c81d3 > .elementor-widget-container{margin:0px 0px -1px 0px;}.elementor-717 .elementor-element.elementor-element-dbbcdd0 > .elementor-widget-container{margin:0px 0px 0px 0px;}.elementor-717 .elementor-element.elementor-element-51a4d09 .elementor-repeater-item-1ae0ee6.elementor-social-icon{background-color:#000;}.elementor-717 .elementor-element.elementor-element-51a4d09 .elementor-repeater-item-1ae0ee6.elementor-social-icon i{color:#FFFFFF;}.elementor-717 .elementor-element.elementor-element-51a4d09 .elementor-repeater-item-1ae0ee6.elementor-social-icon svg{fill:#FFFFFF;}.elementor-717 .elementor-element.elementor-element-51a4d09 .elementor-repeater-item-b0dcf0e.elementor-social-icon{background-color:#1DA1F2;}.elementor-717 .elementor-element.elementor-element-51a4d09 .elementor-repeater-item-b0dcf0e.elementor-social-icon i{color:#FFFFFF;}.elementor-717 .elementor-element.elementor-element-51a4d09 .elementor-repeater-item-b0dcf0e.elementor-social-icon svg{fill:#FFFFFF;}.elementor-717 .elementor-element.elementor-element-51a4d09 .elementor-repeater-item-9beb92f.elementor-social-icon{background-color:#157DC3;}.elementor-717 .elementor-element.elementor-element-51a4d09 .elementor-repeater-item-9beb92f.elementor-social-icon i{color:#FFFFFF;}.elementor-717 .elementor-element.elementor-element-51a4d09 .elementor-repeater-item-9beb92f.elementor-social-icon svg{fill:#FFFFFF;}.elementor-717 .elementor-element.elementor-element-51a4d09{--grid-template-columns:repeat(0, auto);--icon-size:15px;--grid-column-gap:3px;--grid-row-gap:0px;}.elementor-717 .elementor-element.elementor-element-51a4d09 .elementor-widget-container{text-align:center;}.elementor-717 .elementor-element.elementor-element-51a4d09 .elementor-social-icon{--icon-padding:0.8em;}.elementor-717 .elementor-element.elementor-element-51a4d09 .elementor-icon{border-radius:5px 5px 5px 5px;}.elementor-717 .elementor-element.elementor-element-51a4d09 > .elementor-widget-container{margin:0px 0px 0px -10px;}.elementor-717 .elementor-element.elementor-element-46f1afa > .elementor-container > .elementor-row > .elementor-column > .elementor-column-wrap > .elementor-widget-wrap{align-content:center;align-items:center;}.elementor-717 .elementor-element.elementor-element-46f1afa:not(.elementor-motion-effects-element-type-background), .elementor-717 .elementor-element.elementor-element-46f1afa > .elementor-motion-effects-container > .elementor-motion-effects-layer{background-color:#000000;}.elementor-717 .elementor-element.elementor-element-46f1afa{transition:background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;padding:2px 0px 2px 0px;}.elementor-717 .elementor-element.elementor-element-46f1afa > .elementor-background-overlay{transition:background 0.3s, border-radius 0.3s, opacity 0.3s;}.elementor-717 .elementor-element.elementor-element-6c130b9 .logo_image{max-height:40px;}@media(max-width:767px){.elementor-717 .elementor-element.elementor-element-40f9e28{width:60%;}.elementor-717 .elementor-element.elementor-element-f2e23ad{width:50%;}.elementor-717 .elementor-element.elementor-element-f2e23ad > .elementor-element-populated.elementor-column-wrap{padding:0px 0px 0px 0px;}.elementor-717 .elementor-element.elementor-element-dbbcdd0 > .elementor-widget-container{padding:0px 0px 0px 0px;}.elementor-717 .elementor-element.elementor-element-ecbac8b{width:70%;}.elementor-717 .elementor-element.elementor-element-da73aa7{width:30%;}}@media(min-width:768px){.elementor-717 .elementor-element.elementor-element-40f9e28{width:54.306%;}.elementor-717 .elementor-element.elementor-element-f2e23ad{width:45.66%;}}@media(max-width:1024px) and (min-width:768px){.elementor-717 .elementor-element.elementor-element-40f9e28{width:60%;}.elementor-717 .elementor-element.elementor-element-f2e23ad{width:40%;}}</style>
<style id="elementor-post-3607">.elementor-3607 .elementor-element.elementor-element-15a9eba9{transition:background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;padding:16px 0px 26px 0px;}.elementor-3607 .elementor-element.elementor-element-15a9eba9 > .elementor-background-overlay{transition:background 0.3s, border-radius 0.3s, opacity 0.3s;}@media(max-width:1024px) and (min-width:768px){.elementor-3607 .elementor-element.elementor-element-67b080ab{width:25%;}.elementor-3607 .elementor-element.elementor-element-3fb1c6f0{width:25%;}.elementor-3607 .elementor-element.elementor-element-9517b45{width:25%;}.elementor-3607 .elementor-element.elementor-element-3d5c5af4{width:25%;}}@media(max-width:1024px){.elementor-3607 .elementor-element.elementor-element-15a9eba9{padding:5px 0px 15px 0px;}}@media(max-width:767px){.elementor-3607 .elementor-element.elementor-element-15a9eba9{padding:0px 0px 0px 0px;}.elementor-3607 .elementor-element.elementor-element-67b080ab{width:50%;}.elementor-3607 .elementor-element.elementor-element-3fb1c6f0{width:50%;}.elementor-3607 .elementor-element.elementor-element-9517b45{width:50%;}.elementor-3607 .elementor-element.elementor-element-9517b45 > .elementor-element-populated.elementor-column-wrap{padding:10px 10px 0px 10px;}.elementor-3607 .elementor-element.elementor-element-3d5c5af4{width:50%;}.elementor-3607 .elementor-element.elementor-element-3d5c5af4 > .elementor-element-populated.elementor-column-wrap{padding:10px 10px 0px 10px;}}</style>
<style id="elementor-post-507">.elementor-507 .elementor-element.elementor-element-7ce7f2b4:not(.elementor-motion-effects-element-type-background), .elementor-507 .elementor-element.elementor-element-7ce7f2b4 > .elementor-motion-effects-container > .elementor-motion-effects-layer{background-color:#000000;}.elementor-507 .elementor-element.elementor-element-7ce7f2b4{transition:background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;}.elementor-507 .elementor-element.elementor-element-7ce7f2b4 > .elementor-background-overlay{transition:background 0.3s, border-radius 0.3s, opacity 0.3s;}.elementor-507 .elementor-element.elementor-element-6ae69ba1 > .elementor-element-populated{text-align:center;}.elementor-507 .elementor-element.elementor-element-6f6df85 .elementor-spacer-inner{height:64px;}.elementor-507 .elementor-element.elementor-element-fe8546b .logo_image{max-height:40px;}.elementor-507 .elementor-element.elementor-element-258e60d .elementor-spacer-inner{height:14px;}.elementor-507 .elementor-element.elementor-element-2bb390c > .elementor-widget-container{padding:10px 0px 0px 0px;}.elementor-507 .elementor-element.elementor-element-34d5797 .elementor-spacer-inner{height:28px;}.elementor-507 .elementor-element.elementor-element-731650e .elementor-spacer-inner{height:58px;}@media(max-width:1024px){.elementor-507 .elementor-element.elementor-element-6f6df85 .elementor-spacer-inner{height:57px;}.elementor-507 .elementor-element.elementor-element-258e60d .elementor-spacer-inner{height:10px;}.elementor-507 .elementor-element.elementor-element-2bb390c > .elementor-widget-container{padding:0px 0px 0px 0px;}.elementor-507 .elementor-element.elementor-element-34d5797 .elementor-spacer-inner{height:15px;}.elementor-507 .elementor-element.elementor-element-731650e .elementor-spacer-inner{height:48px;}}@media(max-width:767px){.elementor-507 .elementor-element.elementor-element-6f6df85 .elementor-spacer-inner{height:40px;}.elementor-507 .elementor-element.elementor-element-258e60d .elementor-spacer-inner{height:6px;}.elementor-507 .elementor-element.elementor-element-34d5797 .elementor-spacer-inner{height:10px;}.elementor-507 .elementor-element.elementor-element-731650e .elementor-spacer-inner{height:40px;}}</style>
<style type="text/css">.trx_demo_inline_1950598786{color:#ffffff !important;border-color:#ffaa5f !important;background-color:#ffaa5f !important;}.trx_demo_inline_1153045732:hover{color:#ffffff !important;border-color:#cc884c !important;background-color:#cc884c !important;}</style>
<link rel='stylesheet' href='static/css/web/animations.min.css'/>
</head>


<body class="post-template-default single single-post postid-107 single-format-standard wp-custom-logo theme-blabber ua_chrome woocommerce-no-js body_tag scheme_default blog_mode_post body_style_wide is_single single_style_out-below-fullwidth sidebar_hide trx_addons_present header_type_custom header_style_header-custom-717 header_position_default menu_style_top no_layout elementor-default elementor-kit-2539">
    <div class="body_wrap">
        <div class="page_wrap">
            <!-- menu-->
            @include('elements.header')
            <!--main content-->
            <div class="page_content_wrap">
                @foreach ($post as $item)
                <div class="post_header_wrap with_featured_image">
                    <div class="post_header post_header_single entry-header">
                        <div class="content_wrap">
                            <div class="content">
                                <div class="post_breadcrumbs">
                                    <div class="breadcrumbs">
                                        <a class="breadcrumbs_item home" href="{{ route('web.index', app()->getLocale()) }}">{{ __('Home') }}</a>
                                        <span class="breadcrumbs_delimiter"></span>
                                        <a href="#">All Posts</a>
                                        <span class="breadcrumbs_delimiter"></span>
                                        <a class="breadcrumbs_item cat_post" href="#">News</a>
                                        <span class="breadcrumbs_delimiter"></span>
                                        <span class="breadcrumbs_item current">{{ $item->title }}</span>
                                    </div>
                                </div>
                                <h1 class="post_title entry-title">{{ $item->title }}</h1>
                                <div class="post_content_meta">
                                    <div class="post_meta">
                                        @if(!empty($item->category))
                                        <span class="post_meta_item post_categories">
                                            @foreach ($item->category as $category)
                                                <a href="{{route('category.post', ['locale' => app()->getLocale(),'category' => $category->slug])}}" rel="category">{{ $category->name }}</a>
                                            @endforeach
                                        </span>
                                        @endif
                                        <a class="post_meta_item post_author" rel="author" href="#">{{ __('by') }}<span class="post_author_name"> {{ $item->author }}</span></a>
                                        <span class="post_meta_item post_date">{{ format_date($item->created_at) }}</span>
                                    </div>
                                    <div class="post_meta post_meta_counters">
                                        <span class="post_meta_item post_meta_views trx_addons_icon-eye">
                                            <span class="post_meta_number">{{ $item->view }}</span>
                                            <span class="post_meta_label">{{ __('Views') }}</span>
                                        </span>
                                        <a href="#" class="post_meta_item post_meta_comments icon-comment-light">
                                            <span class="post_meta_number">0</span>
                                            <span class="post_meta_label">{{ __('Comments') }}</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            
                <div class="content_wrap">
                    <div class="content">
                        <a id="content_skip_link_anchor" class="blabber_skip_link_anchor" href="#"></a>
                        <article id="post-107" class="post_item_single post_type_post post_format_ post-107 post type-post status-publish format-standard has-post-thumbnail hentry category-news tag-article tag-gallery tag-lifestyle">
                            <div class="post_content post_content_single entry-content" itemprop="mainEntityOfPage">
                                <p>{!! $item->content !!}</p>
                                <div class="post_meta post_meta_single">
                                    @if(!empty($item->tag))
                                    <span class="post_meta_item post_tags">
                                        <span class="post_meta_label">Tags:</span>
                                        @foreach ($item->tag as $tag)
                                        <a href="{{ route('tag.post', ['locale' => app()->getLocale(), 'tag' => $tag->slug])}}" rel="tag">{{ $tag->name }}</a>
                                        @endforeach
                                    </span>
                                    @endif
                                    <span class="post_meta_item post_share">
                                        <div class="socials_share socials_size_tiny socials_type_block socials_dir_horizontal socials_wrap">
                                            <span class="social_items">
                                                <a class="social_item social_item_popup" href="#" data-link="#" data-count="twitter">
                                                    <span class="social_icon social_icon_twitter sc_icon_type_icons">
                                                        <span class="trx_addons_icon-twitter"></span>
                                                    </span>
                                                </a>
                                                <a class="social_item social_item_popup" href="" data-link="" data-count="facebook">
                                                    <span class="social_icon social_icon_facebook sc_icon_type_icons">
                                                        <span class="trx_addons_icon-facebook"></span>
                                                    </span>
                                                </a>
                                                <a class="social_item social_item_popup" href="#" data-link="#" data-count="pinterest-circled">
                                                    <span class="social_icon social_icon_pinterest-circled sc_icon_type_icons">
                                                        <span class="icon-pinterest-circled"></span>
                                                    </span>
                                                </a>
                                            </span>
                                        </div>
                                    </span>
                                </div>
                            </div>
                        </article>
                        <div class="author_info author vcard" itemprop="author" itemscope itemtype="">
                            <div class="author_avatar" itemprop="image">
                                <img alt='' src="#" class='avatar avatar-120 photo' height='120' width='120' loading='lazy'/> 
                            </div>
                            <div class="author_description">
                                <h5 class="author_title" itemprop="name">Jenny Preston </h5>
                                <div class="author_bio" itemprop="description">
                                    <p>Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi.</p>
                                    <a class="author_link" href="#" rel="author">View All Posts </a>
                                </div>
                            </div>
                        </div>
            
                        <section class="related_wrap related_position_below_content related_style_classic">
                            <h3 class="section_title related_wrap_title">{{ __('Recent posts') }}</h3>
                            <div class="columns_wrap posts_container columns_padding_bottom">
                                @foreach($recentPosts as $post)
                                <div class="column-1_2">
                                    <div id="post-154" class="related_item post_format_standard post-154 post type-post status-publish format-standard has-post-thumbnail hentry category-news tag-article tag-gallery tag-lifestyle tag-poker">
                                        <div class="post_featured with_thumb hover_simple width_cat_top">
                                            <img width="1010" height="569" src="{{ $post->image }}" class="attachment-blabber-thumb-big size-blabber-thumb-big wp-post-image" alt="" loading="lazy" sizes="(max-width: 1010px) 100vw, 1010px"/>
                                            <div class="mask"></div>
                                            <a href="{{route('post.detail', ['locale' => app()->getLocale(),'post' => $post->slug])}}" aria-hidden="true" class="icons"></a>
                                            <div class="post_meta rating-go"></div>
                                        </div>
                                        <div class="post_meta cat_top">
                                            @if(!empty($item->category))
                                            <span class="post_meta_item post_categories">
                                                @foreach ($item->category as $category)
                                                    <a href="{{ route('category.post', ['locale' => app()->getLocale(),'category' => $category->slug])}}" rel="category">{{ $category->name }}</a>
                                                @endforeach
                                            </span>
                                            @endif 
                                        </div>
                                        <div class="post_header entry-header">
                                            <h6 class="post_title entry-title">
                                                <a href="{{route('post.detail', ['locale' => app()->getLocale(),'post' => $post->slug])}}">{{ $post->title }}</a>
                                            </h6>
                                            <div class="post_meta">
                                                <a class="post_meta_item post_author" rel="author" href="#">{{ __('by') }} <span class="post_author_name">{{ $post->author }}</span></a>
                                                <span class="post_meta_item post_date">{{ format_date($item->created_at) }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </section>
            
                        <div class="show_comments_wrap">
                            <span class="show_comments sc_button">
                                <span class="display">{{ __('Show comments') }}</span>
                                <span class="close">{{ __('Close comments') }}</span>
                            </span>
                        </div>
            
                        <section class="comments_wrap">
                            <div class="comments_form_wrap">
                                <div class="comments_form">
                                    <div id="respond" class="comment-respond">
                                        <h3 id="reply-title" class="section_title comments_form_title comment-reply-title">{{ __('Leave a comment') }} 
                                            <small><a rel="nofollow" id="cancel-comment-reply-link" href="/5-things-you-didnt-know-about-casino-games/#respond" style="display:none;">Cancel reply</a></small>
                                        </h3>
                                        <form action="#" method="post" id="commentform" class="comment-form " novalidate>
                                            <div class="comments_field comments_author">
                                                <label for="author" class="required">{{ __('Name') }}</label>
                                                <span class="sc_form_field_wrap">
                                                    <input id="author" name="author" type="text" placeholder="{{ __('Name_placeholder') }}" value="" aria-required="true" />
                                                </span>
                                            </div>
                                            <div class="comments_field comments_email">
                                                <label for="email" class="required">{{ __('Email') }}</label>
                                                <span class="sc_form_field_wrap">
                                                    <input id="email" name="email" type="text" placeholder="{{ __('Email_placeholder') }}" value="" aria-required="true" />
                                                </span>
                                            </div>
                                            <div class="comments_field comments_comment">
                                                <label for="comment" class="required">{{ __('Content') }}</label>
                                                <span class="sc_form_field_wrap">
                                                    <textarea id="comment" name="comment" placeholder="{{ __('Content_placeholder') }}" aria-required="true"></textarea>
                                                </span>
                                            </div>
                                            <p class="wpgdprc-checkbox">
                                                <input type="checkbox" name="wpgdprc" id="wpgdprc" value="1" />
                                                <label for="wpgdprc">{{ __('Terms of use') }}<abbr class="wpgdprc-required" title="You need to accept this checkbox.">*</abbr></label>
                                            </p>
                                            <p class="form-submit">
                                                <input name="submit" type="submit" id="send_comment" class="submit" value="{{ __('Leave a comment') }}"/>
                                                <input type='hidden' name='comment_post_ID' value='107' id='comment_post_ID'/>
                                                <input type='hidden' name='comment_parent' id='comment_parent' value='0' />
                                            </p>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
                @endforeach
            </div>  
            <a id="footer_skip_link_anchor" class="blabber_skip_link_anchor" href="#"></a>
            <!--Footer-->
            @include('elements.footer')
        </div>
    </div>

    <a href="#" class="trx_addons_scroll_to_top trx_addons_icon-up" title="Scroll to top"></a>
    <script type='text/javascript' src='static/js/web/index.js'></script>
    <script type='text/javascript' src='static/js/web/modernizr.custom.js'></script>
    <script type='text/javascript' src='static/js/web/__scripts.js'></script>

    <script type='text/javascript' src='static/js/web/anchor.js'></script>
    <script type='text/javascript' src='static/js/web/superfish.min.js'></script>
    <script type='text/javascript' src='static/js/web/front.min.js'></script>
    <script type='text/javascript' src='static/js/web/__theme_scripts.js'></script>
    <script type='text/javascript' src='static/js/web/masonry.min.js'></script>
    <script type='text/javascript' src='static/js/web/theme-gallery.js'></script>
    <script type='text/javascript' src='static/js/web/webpack.runtime.min.js'></script>
    <script type='text/javascript' src='static/js/web/frontend-modules.min.js' id='elementor-frontend-modules-js'></script>
    <script type='text/javascript' id='elementor-frontend-js-before'>
    var elementorFrontendConfig = {"environmentMode":{"edit":false,"wpPreview":false,"isScriptDebug":false},"i18n":{"shareOnFacebook":"Share on Facebook","shareOnTwitter":"Share on Twitter","pinIt":"Pin it","download":"Download","downloadImage":"Download image","fullscreen":"Fullscreen","zoom":"Zoom","share":"Share","playVideo":"Play Video","previous":"Previous","next":"Next","close":"Close"},"is_rtl":false,"breakpoints":{"xs":0,"sm":480,"md":768,"lg":1025,"xl":1440,"xxl":1600},"responsive":{"breakpoints":{"mobile":{"label":"Mobile","value":767,"default_value":767,"direction":"max","is_enabled":true},"mobile_extra":{"label":"Mobile Extra","value":880,"default_value":880,"direction":"max","is_enabled":false},"tablet":{"label":"Tablet","value":1024,"default_value":1024,"direction":"max","is_enabled":true},"tablet_extra":{"label":"Tablet Extra","value":1200,"default_value":1200,"direction":"max","is_enabled":false},"laptop":{"label":"Laptop","value":1366,"default_value":1366,"direction":"max","is_enabled":false},"widescreen":{"label":"Widescreen","value":2400,"default_value":2400,"direction":"min","is_enabled":false}}},"version":"3.4.4","is_static":false,"experimentalFeatures":{"e_import_export":true,"landing-pages":true,"elements-color-picker":true,"admin-top-bar":true},"urls":{"assets":"https:\/\/casino.blabber.ancorathemes.com\/wp-content\/plugins\/elementor\/assets\/"},"settings":{"page":[],"editorPreferences":[]},"kit":{"stretched_section_container":".page_wrap","global_image_lightbox":"yes","active_breakpoints":["viewport_mobile","viewport_tablet"],"lightbox_enable_counter":"yes","lightbox_enable_fullscreen":"yes","lightbox_enable_zoom":"yes","lightbox_enable_share":"yes","lightbox_title_src":"title","lightbox_description_src":"description"},"post":{"id":467,"title":"Blabber%20Casino%20%E2%80%93%20Ultra-Modern%20WordPress%20Blog","excerpt":"","featuredImage":false}};
    </script>
    <script type='text/javascript' src='static/js/web/frontend.min.js'></script>
</body>

</html>