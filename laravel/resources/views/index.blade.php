@extends('main')
@section('content')
<div class="page_content_wrap">
    <div class="content_wrap">
        <div class="content">
        <a id="content_skip_link_anchor" class="blabber_skip_link_anchor" href="#"></a>
            <article id="post-467" class="post_item_single post_type_page post-467 page type-page status-publish hentry">
                <div class="post_content entry-content">
                    <div data-elementor-type="wp-post" data-elementor-id="467" class="elementor elementor-467" data-elementor-settings="[]">
                        <div class="elementor-inner">
                            <div class="elementor-section-wrap">
                                <section class="elementor-section elementor-top-section elementor-element elementor-element-42d9e8a elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="42d9e8a" data-element_type="section">
                                    <div class="elementor-container elementor-column-gap-extended">
                                        <div class="elementor-row">
                                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-5d0e210 sc_inner_width_none sc_content_align_inherit sc_layouts_column_icons_position_left" data-id="5d0e210" data-element_type="column">
                                                <div class="elementor-column-wrap elementor-element-populated">
                                                    <div class="elementor-widget-wrap">
                                                        <div class="elementor-element elementor-element-419434b sc_fly_static elementor-widget elementor-widget-spacer" data-id="419434b" data-element_type="widget" data-widget_type="spacer.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-spacer">
                                                                    <div class="elementor-spacer-inner"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <!-- feature posts-->
                                <section class="elementor-section elementor-top-section elementor-element elementor-element-53f8b81a elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-invisible" data-id="53f8b81a" data-element_type="section" data-settings="{&quot;animation&quot;:&quot;fadeIn&quot;,&quot;animation_delay&quot;:100}">
                                    <div class="elementor-container elementor-column-gap-extended">
                                        <div class="elementor-row">
                                            @if (!empty($featuredPosts))
                                            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-64c3ebf0 sc_inner_width_none sc_content_align_inherit sc_layouts_column_icons_position_left" data-id="64c3ebf0" data-element_type="column">
                                                <div class="elementor-column-wrap elementor-element-populated">
                                                    <div class="elementor-widget-wrap">
                                                        <div class="elementor-element elementor-element-389e77c9 sc_fly_static elementor-widget elementor-widget-trx_sc_blogger" data-id="389e77c9" data-element_type="widget" data-widget_type="trx_sc_blogger.default">
                                                            <div class="elementor-widget-container">
                                                                <div id="trx_sc_blogger_418889253" class="sc_blogger sc_blogger_default sc_blogger_default_classic_meta_simple_big">
                                                                    <div class="sc_blogger_content sc_item_content sc_item_posts_container">
                                                                        @foreach($featuredPosts as $key => $value)
                                                                        @if($key == 0)
                                                                        <div data-post-id="141" class="sc_blogger_item sc_blogger_item_default sc_blogger_item_default_classic_meta_simple_big sc_blogger_item_odd sc_blogger_item_align_none post_format_standard sc_blogger_item_with_image sc_blogger_item_image_position_top post-141 post type-post status-publish format-standard has-post-thumbnail hentry category-news tag-blackjack tag-blog tag-news tag-wheel-spin" data-item-number="1">
                                                                            <div class="sc_blogger_item_body">
                                                                                <div class="post_featured with_thumb hover_simple sc_item_featured sc_blogger_item_featured post_featured_bg" data-ratio="4:3">
                                                                                    <span class="post_thumb blabber_inline_1273716559"></span>
                                                                                    <img src="{{ $value->image }}" alt="{{ $value->title }}">
                                                                                    <div class="mask"></div>
                                                                                    <a href="{{route('post.detail', ['locale' => app()->getLocale(), 'post' => $value->slug])}}" aria-hidden="true" class="icons"></a>
                                                                                </div>
                                                                                <div class="sc_blogger_item_content entry-content">
                                                                                    @if (!empty($value->category))
                                                                                    <div class="post_meta sc_blogger_item_meta post_meta">
                                                                                        <span class="post_meta_item post_categories">
                                                                                        @foreach ($value->category as $k => $v)
                                                                                            <a href="{{route('category.post', ['locale' => app()->getLocale(), 'category' => $v->slug])}}" rel="category tag">{{ $v->name }}</a>
                                                                                        @endforeach
                                                                                        </span>
                                                                                    </div>
                                                                                    @endif
                                                                                    <h5 class="sc_blogger_item_title entry-title" data-item-number="1">
                                                                                        <a href="{{route('post.detail', ['locale' => app()->getLocale(), 'post' => $value->slug])}}" title="{{ $value->title }}">{{ $value->title }}</a>
                                                                                    </h5>
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
                                            
                                            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-3d2a872a sc_inner_width_none sc_content_align_inherit sc_layouts_column_icons_position_left" data-id="3d2a872a" data-element_type="column">
                                                <div class="elementor-column-wrap elementor-element-populated">
                                                    <div class="elementor-widget-wrap">
                                                        <div class="elementor-element elementor-element-ca92aac sc_fly_static elementor-widget elementor-widget-trx_sc_blogger" data-id="ca92aac" data-element_type="widget" data-widget_type="trx_sc_blogger.default">
                                                            <div class="elementor-widget-container">
                                                                <div id="trx_sc_blogger_1354902545" class="sc_blogger sc_blogger_default sc_blogger_default_classic_meta_simple">
                                                                    <div class="sc_blogger_content sc_item_content sc_item_posts_container">
                                                                        @elseif ($key == 1)
                                                                        <div data-post-id="107" class="sc_blogger_item sc_blogger_item_default sc_blogger_item_default_classic_meta_simple sc_blogger_item_odd sc_blogger_item_align_none post_format_standard sc_blogger_item_with_image sc_blogger_item_image_position_top post-107 post type-post status-publish format-standard has-post-thumbnail hentry category-news tag-article tag-gallery tag-lifestyle" data-item-number="1">
                                                                            <div class="sc_blogger_item_body">
                                                                                <div class="post_featured with_thumb hover_simple sc_item_featured sc_blogger_item_featured post_featured_bg" data-ratio="17:9">
                                                                                    <span class="post_thumb blabber_inline_648494260"></span>
                                                                                    <img src="{{ $value->image }}" alt="{{ $value->title }}">
                                                                                    <div class="mask"></div>
                                                                                    <a href="{{route('post.detail', ['locale' => app()->getLocale(), 'post' => $value->slug])}}" aria-hidden="true" class="icons"></a>
                                                                                </div>
                                                                                <div class="sc_blogger_item_content entry-content">
                                                                                    @if (!empty($value->category))
                                                                                    <div class="post_meta sc_blogger_item_meta post_meta">
                                                                                        <span class="post_meta_item post_categories">
                                                                                        @foreach ($value->category as $v)
                                                                                            <a href="{{route('category.post', ['locale' => app()->getLocale(), 'category' => $v->slug])}}" rel="category tag">{{ $v->name }}</a>
                                                                                        @endforeach
                                                                                        </span>
                                                                                    </div>
                                                                                    @endif
                                                                                    <h5 class="sc_blogger_item_title entry-title" data-item-number="1">
                                                                                        <a href="{{route('post.detail', ['locale' => app()->getLocale(), 'post' => $value->slug])}}" title="{{ $value->title }}">{{ $value->title }}</a>
                                                                                    </h5>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="elementor-element elementor-element-1b8d95d4 sc_fly_static elementor-widget elementor-widget-trx_sc_blogger" data-id="1b8d95d4" data-element_type="widget" data-widget_type="trx_sc_blogger.default">
                                                            <div class="elementor-widget-container">
                                                                <div id="trx_sc_blogger_194885965" class="sc_blogger sc_blogger_default sc_blogger_default_classic_meta_simple">
                                                                    <div class="sc_blogger_columns_wrap sc_item_columns sc_item_posts_container trx_addons_columns_wrap columns_padding_bottom columns_in_single_row">
                                                                        @else
                                                                        <div class="trx_addons_column-1_2">
                                                                            <div data-post-id="121" class="sc_blogger_item sc_blogger_item_default sc_blogger_item_default_classic_meta_simple sc_blogger_item_odd sc_blogger_item_align_none post_format_standard sc_blogger_item_with_image sc_blogger_item_image_position_top post-121 post type-post status-publish format-standard has-post-thumbnail hentry category-news tag-article tag-gallery tag-lifestyle" data-item-number="1">
                                                                                <div class="sc_blogger_item_body">
                                                                                    <div class="post_featured with_thumb hover_simple sc_item_featured sc_blogger_item_featured post_featured_bg" data-ratio="4:3">
                                                                                        <span class="post_thumb blabber_inline_555474704"></span>
                                                                                        <img src="{{ $value->image }}" alt="{{ $value->title }}">
                                                                                        <div class="mask"></div>
                                                                                        <a href="{{route('post.detail', ['locale' => app()->getLocale(), 'post' => $value->slug])}}" aria-hidden="true" class="icons"></a>
                                                                                    </div>
                                                                                    <div class="sc_blogger_item_content entry-content">
                                                                                        @if (!empty($value->category))
                                                                                        <div class="post_meta sc_blogger_item_meta post_meta">
                                                                                            <span class="post_meta_item post_categories">
                                                                                            @foreach ($value->category as $k => $v)
                                                                                                <a href="{{route('category.post', ['locale' => app()->getLocale(), 'category' => $v->slug])}}" rel="category tag">{{ $v->name }}</a>
                                                                                            @endforeach
                                                                                            </span>
                                                                                        </div>
                                                                                        @endif
                                                                                        <h5 class="sc_blogger_item_title entry-title" data-item-number="1">
                                                                                            <a href="{{route('post.detail', ['locale' => app()->getLocale(), 'post' => $value->slug])}}" title="{{ $value->title }}">{{ $value->title }}</a>
                                                                                        </h5>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        @endif
                                                                        @endforeach
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @endif
                                        </div>
                                    </div>
                                </section>

                                <section class="elementor-section elementor-top-section elementor-element elementor-element-9a227b7 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="9a227b7" data-element_type="section">
                                    <div class="elementor-container elementor-column-gap-extended">
                                        <div class="elementor-row">
                                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-3fda8e6 sc_inner_width_none sc_content_align_inherit sc_layouts_column_icons_position_left" data-id="3fda8e6" data-element_type="column">
                                                <div class="elementor-column-wrap elementor-element-populated">
                                                    <div class="elementor-widget-wrap">
                                                        <div class="elementor-element elementor-element-6b07a36 sc_fly_static elementor-widget elementor-widget-spacer" data-id="6b07a36" data-element_type="widget" data-widget_type="spacer.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-spacer">
                                                                    <div class="elementor-spacer-inner"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                
                                <!--Exchange-->
                                <section class="elementor-section elementor-top-section elementor-element elementor-element-a8eafea elementor-section-stretched scheme_default elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="a8eafea" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}">
                                    <div class="elementor-container elementor-column-gap-extended">
                                        <div class="elementor-row">
                                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-88baa4f sc_inner_width_none sc_content_align_inherit sc_layouts_column_icons_position_left" data-id="88baa4f" data-element_type="column">
                                                <div class="elementor-column-wrap elementor-element-populated">
                                                    <div class="elementor-widget-wrap">
                                                        <div class="elementor-element elementor-element-6bb434c sc_fly_static elementor-widget elementor-widget-spacer" data-id="6bb434c" data-element_type="widget" data-widget_type="spacer.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-spacer">
                                                                    <div class="elementor-spacer-inner"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-c9835ac sc_fly_static elementor-invisible elementor-widget elementor-widget-trx_sc_title" data-id="c9835ac" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;,&quot;_animation_delay&quot;:100}" data-widget_type="trx_sc_title.default">
                                                            <div class="elementor-widget-container">
                                                                <div id="trx_sc_title_42544372" class="sc_title sc_title_default -go ">
                                                                    <h4 class="sc_item_title sc_title_title sc_item_title_style_default go-link sc_item_title_tag">
                                                                        <span class="sc_item_title_text">Best Cryptocurrency Spot Exchanges</span>
                                                                    </h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-1c33a52 sc_fly_static elementor-widget elementor-widget-spacer" data-id="1c33a52" data-element_type="widget" data-widget_type="spacer.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-spacer">
                                                                    <div class="elementor-spacer-inner"></div>
                                                                </div>
                                                             </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-1c9b205 sc_fly_static elementor-invisible elementor-widget elementor-widget-trx_sc_blogger" data-id="1c9b205" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;,&quot;_animation_delay&quot;:100}" data-widget_type="trx_sc_blogger.default">
                                                            <div class="elementor-widget-container">
                                                                <div id="trx_sc_blogger_2117134597" class="sc_blogger sc_blogger_extra sc_blogger_extra_cart">
                                                                    <div class="sc_blogger_columns_wrap sc_item_columns sc_item_posts_container trx_addons_columns_wrap columns_padding_bottom columns_in_single_row">
                                                                        <div class="trx_addons_column-1_4 trx_addons_column-1_2-tablet">
                                                                            <div data-post-id="419" class="sc_blogger_item sc_blogger_item_extra sc_blogger_item_extra_cart sc_blogger_item_odd post_format_standard sc_blogger_item_with_image post-419 post type-post status-publish format-standard has-post-thumbnail hentry category-casino-resorts category-play-now tag-blog tag-booking tag-games tag-news tag-slots tag-wheel-spin" data-item-number="1">
                                                                                <div class="sc_blogger_item_body">
                                                                                    <div class="post_featured with_thumb hover_simple sc_item_featured sc_blogger_item_featured">
                                                                                        <img width="370" height="370" src="static/img/binance.png" class="attachment-trx_addons-thumb-avatar size-trx_addons-thumb-avatar wp-post-image" alt="" loading="lazy">
                                                                                        <div class="mask"></div>
                                                                                        <a href="#" aria-hidden="true" class="icons"></a>
                                                                                    </div>
                                                                                    <div class="sc_blogger_item_content entry-content">
                                                                                        <h5 class="sc_blogger_item_title entry-title" data-item-number="1">
                                                                                            <a href="https://accounts.binance.com/vi/register?ref=47038548" rel="bookmark">Binance</a>
                                                                                        </h5>
                                                                                        <span class="trx_addons_reviews_mark">
                                                                                            <span class="trx_addons_reviews_stars">
                                                                                                <span class="trx_addons_reviews_stars_default">
                                                                                                    <span class="trx_addons_reviews_star trx_addons_icon-star"></span>
                                                                                                    <span class="trx_addons_reviews_star trx_addons_icon-star"></span>
                                                                                                    <span class="trx_addons_reviews_star trx_addons_icon-star"></span>
                                                                                                    <span class="trx_addons_reviews_star trx_addons_icon-star"></span>
                                                                                                    <span class="trx_addons_reviews_star trx_addons_icon-star"></span>
                                                                                                </span>
                                                                                                <span class="trx_addons_reviews_stars_hover" style="width:100%;">
                                                                                                    <span class="trx_addons_reviews_star trx_addons_icon-star"></span>
                                                                                                    <span class="trx_addons_reviews_star trx_addons_icon-star"></span>
                                                                                                    <span class="trx_addons_reviews_star trx_addons_icon-star"></span>
                                                                                                    <span class="trx_addons_reviews_star trx_addons_icon-star"></span>
                                                                                                    <span class="trx_addons_reviews_star trx_addons_icon-star"></span>
                                                                                                </span>
                                                                                            </span>
                                                                                            <span class="trx_addons_reviews_text">
                                                                                                <span class="trx_addons_reviews_text_mark">5.0</span>
                                                                                                <span class="trx_addons_reviews_text_delimiter">/</span>
                                                                                                <span class="trx_addons_reviews_text_max">5</span>
                                                                                            </span>
                                                                                        </span>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="sc_blogger_item_footer entry-footer">
                                                                                    <div class="sc_blogger_item_excerpt">
                                                                                        For thos who appreciate luxury lifestyle. All-inclusive resort with quality customer service.
                                                                                    </div>
                                                                                    <div class="sc_item_button sc_button_wrap">
                                                                                        <a href="https://accounts.binance.com/vi/register?ref=47038548" class="sc_button sc_button_default">{{ __('Play now') }}</a>
                                                                                        <a href="#" class="sc_button sc_button_bordered">{{ __('Read review') }}</a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="trx_addons_column-1_4 trx_addons_column-1_2-tablet">
                                                                            <div data-post-id="419" class="sc_blogger_item sc_blogger_item_extra sc_blogger_item_extra_cart sc_blogger_item_odd post_format_standard sc_blogger_item_with_image post-419 post type-post status-publish format-standard has-post-thumbnail hentry category-casino-resorts category-play-now tag-blog tag-booking tag-games tag-news tag-slots tag-wheel-spin" data-item-number="1">
                                                                                <div class="sc_blogger_item_body">
                                                                                    <div class="post_featured with_thumb hover_simple sc_item_featured sc_blogger_item_featured">
                                                                                        <img width="370" height="370" src="static/img/ftx.png" class="attachment-trx_addons-thumb-avatar size-trx_addons-thumb-avatar wp-post-image" alt="" loading="lazy">
                                                                                        <div class="mask"></div>
                                                                                        <a href="https://ftx.com/profile#a=57707321" aria-hidden="true" class="icons"></a>
                                                                                    </div>
                                                                                    <div class="sc_blogger_item_content entry-content">
                                                                                        <h5 class="sc_blogger_item_title entry-title" data-item-number="1">
                                                                                            <a href="#" rel="bookmark">FTX</a>
                                                                                        </h5>
                                                                                        <span class="trx_addons_reviews_mark">
                                                                                            <span class="trx_addons_reviews_stars">
                                                                                                <span class="trx_addons_reviews_stars_default">
                                                                                                    <span class="trx_addons_reviews_star trx_addons_icon-star"></span>
                                                                                                    <span class="trx_addons_reviews_star trx_addons_icon-star"></span>
                                                                                                    <span class="trx_addons_reviews_star trx_addons_icon-star"></span>
                                                                                                    <span class="trx_addons_reviews_star trx_addons_icon-star"></span>
                                                                                                    <span class="trx_addons_reviews_star trx_addons_icon-star"></span>
                                                                                                </span>
                                                                                                <span class="trx_addons_reviews_stars_hover" style="width:100%;">
                                                                                                    <span class="trx_addons_reviews_star trx_addons_icon-star"></span>
                                                                                                    <span class="trx_addons_reviews_star trx_addons_icon-star"></span>
                                                                                                    <span class="trx_addons_reviews_star trx_addons_icon-star"></span>
                                                                                                    <span class="trx_addons_reviews_star trx_addons_icon-star"></span>
                                                                                                    <span class="trx_addons_reviews_star trx_addons_icon-star"></span>
                                                                                                </span>
                                                                                            </span>
                                                                                            <span class="trx_addons_reviews_text">
                                                                                                <span class="trx_addons_reviews_text_mark">5.0</span>
                                                                                                <span class="trx_addons_reviews_text_delimiter">/</span>
                                                                                                <span class="trx_addons_reviews_text_max">5</span>
                                                                                            </span>
                                                                                        </span>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="sc_blogger_item_footer entry-footer">
                                                                                    <div class="sc_blogger_item_excerpt">
                                                                                        For thos who appreciate luxury lifestyle. All-inclusive resort with quality customer service.
                                                                                    </div>
                                                                                    <div class="sc_item_button sc_button_wrap">
                                                                                        <a href="https://ftx.com/profile#a=57707321" class="sc_button sc_button_default">{{ __('Play now') }}</a>
                                                                                        <a href="#" class="sc_button sc_button_bordered">{{ __('Read review') }}</a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="trx_addons_column-1_4 trx_addons_column-1_2-tablet">
                                                                            <div data-post-id="419" class="sc_blogger_item sc_blogger_item_extra sc_blogger_item_extra_cart sc_blogger_item_odd post_format_standard sc_blogger_item_with_image post-419 post type-post status-publish format-standard has-post-thumbnail hentry category-casino-resorts category-play-now tag-blog tag-booking tag-games tag-news tag-slots tag-wheel-spin" data-item-number="1">
                                                                                <div class="sc_blogger_item_body">
                                                                                    <div class="post_featured with_thumb hover_simple sc_item_featured sc_blogger_item_featured">
                                                                                        <img width="370" height="370" src="static/img/primexbt.png" class="attachment-trx_addons-thumb-avatar size-trx_addons-thumb-avatar wp-post-image" alt="" loading="lazy">
                                                                                        <div class="mask"></div>
                                                                                        <a href="#" aria-hidden="true" class="icons"></a>
                                                                                    </div>
                                                                                    <div class="sc_blogger_item_content entry-content">
                                                                                        <h5 class="sc_blogger_item_title entry-title" data-item-number="1">
                                                                                            <a href="https://primexbt.com?signup=623045" rel="bookmark">PrimeXBT</a>
                                                                                        </h5>
                                                                                        <span class="trx_addons_reviews_mark">
                                                                                            <span class="trx_addons_reviews_stars">
                                                                                                <span class="trx_addons_reviews_stars_default">
                                                                                                    <span class="trx_addons_reviews_star trx_addons_icon-star"></span>
                                                                                                    <span class="trx_addons_reviews_star trx_addons_icon-star"></span>
                                                                                                    <span class="trx_addons_reviews_star trx_addons_icon-star"></span>
                                                                                                    <span class="trx_addons_reviews_star trx_addons_icon-star"></span>
                                                                                                    <span class="trx_addons_reviews_star trx_addons_icon-star"></span>
                                                                                                </span>
                                                                                                <span class="trx_addons_reviews_stars_hover" style="width:100%;">
                                                                                                    <span class="trx_addons_reviews_star trx_addons_icon-star"></span>
                                                                                                    <span class="trx_addons_reviews_star trx_addons_icon-star"></span>
                                                                                                    <span class="trx_addons_reviews_star trx_addons_icon-star"></span>
                                                                                                    <span class="trx_addons_reviews_star trx_addons_icon-star"></span>
                                                                                                    <span class="trx_addons_reviews_star trx_addons_icon-star"></span>
                                                                                                </span>
                                                                                            </span>
                                                                                            <span class="trx_addons_reviews_text">
                                                                                                <span class="trx_addons_reviews_text_mark">5.0</span>
                                                                                                <span class="trx_addons_reviews_text_delimiter">/</span>
                                                                                                <span class="trx_addons_reviews_text_max">5</span>
                                                                                            </span>
                                                                                        </span>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="sc_blogger_item_footer entry-footer">
                                                                                    <div class="sc_blogger_item_excerpt">
                                                                                        For thos who appreciate luxury lifestyle. All-inclusive resort with quality customer service.
                                                                                    </div>
                                                                                    <div class="sc_item_button sc_button_wrap">
                                                                                        <a href="https://primexbt.com?signup=623045" class="sc_button sc_button_default">{{ __('Play now') }}</a>
                                                                                        <a href="#" class="sc_button sc_button_bordered">{{ __('Read review') }}</a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="trx_addons_column-1_4 trx_addons_column-1_2-tablet">
                                                                            <div data-post-id="419" class="sc_blogger_item sc_blogger_item_extra sc_blogger_item_extra_cart sc_blogger_item_odd post_format_standard sc_blogger_item_with_image post-419 post type-post status-publish format-standard has-post-thumbnail hentry category-casino-resorts category-play-now tag-blog tag-booking tag-games tag-news tag-slots tag-wheel-spin" data-item-number="1">
                                                                                <div class="sc_blogger_item_body">
                                                                                    <div class="post_featured with_thumb hover_simple sc_item_featured sc_blogger_item_featured">
                                                                                        <img width="370" height="370" src="static/img/etorox.png" class="attachment-trx_addons-thumb-avatar size-trx_addons-thumb-avatar wp-post-image" alt="" loading="lazy">
                                                                                        <div class="mask"></div>
                                                                                        <a href="https://etoro.tw/3Hcr5cl" aria-hidden="true" class="icons"></a>
                                                                                    </div>
                                                                                    <div class="sc_blogger_item_content entry-content">
                                                                                        <h5 class="sc_blogger_item_title entry-title" data-item-number="1">
                                                                                            <a href="https://etoro.tw/3Hcr5cl" rel="bookmark">EtoroX</a>
                                                                                        </h5>
                                                                                        <span class="trx_addons_reviews_mark">
                                                                                            <span class="trx_addons_reviews_stars">
                                                                                                <span class="trx_addons_reviews_stars_default">
                                                                                                    <span class="trx_addons_reviews_star trx_addons_icon-star"></span>
                                                                                                    <span class="trx_addons_reviews_star trx_addons_icon-star"></span>
                                                                                                    <span class="trx_addons_reviews_star trx_addons_icon-star"></span>
                                                                                                    <span class="trx_addons_reviews_star trx_addons_icon-star"></span>
                                                                                                    <span class="trx_addons_reviews_star trx_addons_icon-star"></span>
                                                                                                </span>
                                                                                                <span class="trx_addons_reviews_stars_hover" style="width:100%;">
                                                                                                    <span class="trx_addons_reviews_star trx_addons_icon-star"></span>
                                                                                                    <span class="trx_addons_reviews_star trx_addons_icon-star"></span>
                                                                                                    <span class="trx_addons_reviews_star trx_addons_icon-star"></span>
                                                                                                    <span class="trx_addons_reviews_star trx_addons_icon-star"></span>
                                                                                                    <span class="trx_addons_reviews_star trx_addons_icon-star"></span>
                                                                                                </span>
                                                                                            </span>
                                                                                            <span class="trx_addons_reviews_text">
                                                                                                <span class="trx_addons_reviews_text_mark">5.0</span>
                                                                                                <span class="trx_addons_reviews_text_delimiter">/</span>
                                                                                                <span class="trx_addons_reviews_text_max">5</span>
                                                                                            </span>
                                                                                        </span>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="sc_blogger_item_footer entry-footer">
                                                                                    <div class="sc_blogger_item_excerpt">
                                                                                        For thos who appreciate luxury lifestyle. All-inclusive resort with quality customer service.
                                                                                    </div>
                                                                                    <div class="sc_item_button sc_button_wrap">
                                                                                        <a href="https://etoro.tw/3Hcr5cl" class="sc_button sc_button_default">{{ __('Play now') }}</a>
                                                                                        <a href="#" class="sc_button sc_button_bordered">{{ __('Read review') }}</a>
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
                                        </div>
                                    </div>
                                </section>

                                <!--Latest posts-->
                                <section class="elementor-section elementor-top-section elementor-element elementor-element-52fa712 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="52fa712" data-element_type="section">
                                    <div class="elementor-container elementor-column-gap-extended">
                                        <div class="elementor-row">
                                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-4bb4fcb sc_inner_width_none sc_content_align_inherit sc_layouts_column_icons_position_left" data-id="4bb4fcb" data-element_type="column">
                                                <div class="elementor-column-wrap elementor-element-populated">
                                                    <div class="elementor-widget-wrap">
                                                        <div class="elementor-element elementor-element-bae82cf sc_fly_static elementor-widget elementor-widget-spacer" data-id="bae82cf" data-element_type="widget" data-widget_type="spacer.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-spacer">
                                                                    <div class="elementor-spacer-inner"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <div class="elementor-element elementor-element-a76fdb7 sc_fly_static elementor-invisible elementor-widget elementor-widget-trx_sc_title" data-id="a76fdb7" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;,&quot;_animation_delay&quot;:100}" data-widget_type="trx_sc_title.default">
                                                        <div class="elementor-widget-container">
                                                            <div id="trx_sc_title_634158483" class="sc_title sc_title_default -go ">
                                                                <h4 class="sc_item_title sc_title_title sc_item_title_style_default go-link sc_item_title_tag">
                                                                    <span class="sc_item_title_text">{{ __('Latest posts') }}</span>
                                                                </h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-64e9af5 sc_fly_static elementor-widget elementor-widget-spacer" data-id="64e9af5" data-element_type="widget" data-widget_type="spacer.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="elementor-spacer">
                                                                <div class="elementor-spacer-inner"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @if(!empty($latestPosts))
                                                    <div class="elementor-element elementor-element-e60e67d sc_fly_static elementor-invisible elementor-widget elementor-widget-trx_sc_blogger" data-id="e60e67d" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;,&quot;_animation_delay&quot;:100}" data-widget_type="trx_sc_blogger.default">
                                                        <div class="elementor-widget-container">
                                                            <div id="trx_sc_blogger_1789814564" class="sc_blogger sc_blogger_masonry sc_blogger_masonry_default">
                                                                <div class="sc_blogger_content sc_item_content sc_item_posts_container posts_container masonry_wrap masonry_4 masonry_wrap masonry_4">
                                                                    @foreach ($latestPosts as $item)
                                                                    <div class="masonry_item masonry_item-1_4">
                                                                        <article id="post-{{$item->id}}" data-post-id="399" class="post_item post_format_standard post_layout_classic post_layout_classic_4 post_layout_masonry post_layout_masonry_4 post-399 post type-post status-publish format-standard has-post-thumbnail hentry category-poker tag-blog tag-hotels tag-news tag-wheel-spin">
                                                                            <div class="post_featured with_thumb hover_simple width_cat_top">
                                                                                <a href="{{route('post.detail', ['locale' => app()->getLocale(), 'post' => $item->slug])}}">
                                                                                    <img width="470" height="470" src="{{ $item->image }}" class="attachment-blabber-thumb-masonry size-blabber-thumb-masonry wp-post-image" alt="{{ $item->title }}" loading="lazy"/>
                                                                                </a>
                                                                                <div class="mask"></div>
                                                                            </div>
                                                                            @if (!empty($item->category))
                                                                            <div class="post_meta cat_top">
                                                                                <span class="post_meta_item post_categories">
                                                                                    @foreach ($item->category as $value)
                                                                                        <a href="{{route('category.post', ['locale' => app()->getLocale(), 'category' => $value->slug])}}" rel="category tag">{{ $value->name }}</a>
                                                                                    @endforeach
                                                                                </span>
                                                                            </div>
                                                                            @endif
                                                                            <div class="post_header entry-header">
                                                                                <h4 class="post_title entry-title">
                                                                                    <a href="{{route('post.detail', ['locale' => app()->getLocale(), 'post' => $item->slug])}}" rel="bookmark">{{ $item->title }}</a>
                                                                                </h4>
                                                                                <div class="post_meta">
                                                                                    <a class="post_meta_item post_author" rel="author" href="#">{{ __('by') }} <span class="post_author_name">{{ $item->author }}</span></a> <span class="post_meta_item post_date">{{ format_date($item->created_at) }}</span>
                                                                                </div>
                                                                            </div>
                                                                        </article>
                                                                    </div>                                                                        
                                                                    @endforeach
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @endif
                                                    <div class="elementor-element elementor-element-2a119ef sc_fly_static elementor-widget elementor-widget-spacer" data-id="2a119ef" data-element_type="widget" data-widget_type="spacer.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="elementor-spacer">
                                                                <div class="elementor-spacer-inner"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-dbd0972 sc_fly_static elementor-invisible elementor-widget elementor-widget-trx_sc_button" data-id="dbd0972" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;,&quot;_animation_delay&quot;:100}" data-widget_type="trx_sc_button.default">
                                                        <div class="elementor-widget-container">
                                                            <div id="trx_sc_button_1043685008" class="sc_item_button sc_button_wrap sc_align_center">
                                                                <a href="#" class="sc_button sc_button_bordered sc_button_size_large sc_button_icon_left">
                                                                    <span class="sc_button_text">
                                                                        <span class="sc_button_title">{{ __('View more posts') }}</span>
                                                                    </span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-7c1909f sc_fly_static elementor-widget elementor-widget-spacer" data-id="7c1909f" data-element_type="widget" data-widget_type="spacer.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="elementor-spacer">
                                                                <div class="elementor-spacer-inner"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>

                                <section class="elementor-section elementor-top-section elementor-element elementor-element-1df36e7 elementor-section-stretched scheme_default elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="1df36e7" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}">
                                    <div class="elementor-container elementor-column-gap-extended">
                                        <div class="elementor-row">
                                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-0919d69 sc_inner_width_none sc_content_align_inherit sc_layouts_column_icons_position_left" data-id="0919d69" data-element_type="column">
                                                <div class="elementor-column-wrap elementor-element-populated">
                                                    <div class="elementor-widget-wrap">
                                                        <div class="elementor-element elementor-element-ffcc2d1 sc_fly_static elementor-widget elementor-widget-spacer" data-id="ffcc2d1" data-element_type="widget" data-widget_type="spacer.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-spacer">
                                                                    <div class="elementor-spacer-inner"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <div class="elementor-element elementor-element-efc1a5c sc_fly_static elementor-invisible elementor-widget elementor-widget-trx_sc_blogger" data-id="efc1a5c" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;,&quot;_animation_delay&quot;:100}" data-widget_type="trx_sc_blogger.default">
                                                        <div class="elementor-widget-container">
                                                            <div id="trx_sc_blogger_1625379709" class="sc_blogger sc_blogger_extra sc_blogger_extra_list"><div class="sc_item_filters sc_blogger_filters sc_blogger_tabs sc_blogger_tabs_ajax sc_item_filters_align_left" data-params="a:101:{s:4:&quot;type&quot;;s:5:&quot;extra&quot;;s:9:&quot;post_type&quot;;s:4:&quot;post&quot;;s:8:&quot;taxonomy&quot;;s:8:&quot;category&quot;;s:12:&quot;show_filters&quot;;s:1:&quot;1&quot;;s:13:&quot;filters_title&quot;;s:12:&quot;Top Casinos &quot;;s:16:&quot;filters_subtitle&quot;;s:0:&quot;&quot;;s:19:&quot;filters_title_align&quot;;s:4:&quot;left&quot;;s:16:&quot;filters_taxonomy&quot;;s:8:&quot;post_tag&quot;;s:14:&quot;filters_active&quot;;i:0;s:11:&quot;filters_ids&quot;;a:4:{i:0;s:2:&quot;94&quot;;i:1;s:2:&quot;95&quot;;i:2;s:2:&quot;87&quot;;i:3;s:2:&quot;90&quot;;}s:11:&quot;filters_all&quot;;s:1:&quot;1&quot;;s:16:&quot;filters_all_text&quot;;s:12:&quot;Most Popular&quot;;s:17:&quot;filters_more_text&quot;;s:10:&quot;More posts&quot;;s:10:&quot;meta_parts&quot;;a:9:{i:0;s:10:&quot;categories&quot;;i:1;s:6:&quot;author&quot;;i:2;s:4:&quot;date&quot;;i:3;s:5:&quot;views&quot;;i:4;s:8:&quot;comments&quot;;i:5;s:5:&quot;likes&quot;;i:6;s:5:&quot;share&quot;;i:7;s:4:&quot;edit&quot;;i:8;s:6:&quot;rating&quot;;}s:14:&quot;image_position&quot;;s:5:&quot;right&quot;;s:11:&quot;image_width&quot;;s:3:&quot;100&quot;;s:11:&quot;image_ratio&quot;;s:3:&quot;1:2&quot;;s:11:&quot;date_format&quot;;s:0:&quot;&quot;;s:14:&quot;excerpt_length&quot;;s:0:&quot;&quot;;s:10:&quot;text_align&quot;;s:4:&quot;none&quot;;s:8:&quot;on_plate&quot;;s:0:&quot;&quot;;s:12:&quot;hide_excerpt&quot;;s:0:&quot;&quot;;s:8:&quot;no_links&quot;;s:0:&quot;&quot;;s:7:&quot;numbers&quot;;s:0:&quot;&quot;;s:9:&quot;more_text&quot;;s:11:&quot;{{ __('Read review') }}&quot;;s:10:&quot;pagination&quot;;s:4:&quot;none&quot;;s:4:&quot;page&quot;;i:1;s:2:&quot;id&quot;;s:25:&quot;trx_sc_blogger_1625379709&quot;;s:5:&quot;class&quot;;s:0:&quot;&quot;;s:9:&quot;className&quot;;s:0:&quot;&quot;;s:3:&quot;css&quot;;s:0:&quot;&quot;;s:5:&quot;title&quot;;s:0:&quot;&quot;;s:11:&quot;title_align&quot;;s:4:&quot;none&quot;;s:11:&quot;title_style&quot;;s:7:&quot;default&quot;;s:9:&quot;title_tag&quot;;s:4:&quot;none&quot;;s:11:&quot;title_color&quot;;s:0:&quot;&quot;;s:12:&quot;title_color2&quot;;s:0:&quot;&quot;;s:18:&quot;gradient_direction&quot;;s:1:&quot;0&quot;;s:8:&quot;subtitle&quot;;s:0:&quot;&quot;;s:14:&quot;subtitle_align&quot;;s:4:&quot;none&quot;;s:17:&quot;subtitle_position&quot;;s:5:&quot;above&quot;;s:11:&quot;description&quot;;s:0:&quot;&quot;;s:4:&quot;link&quot;;s:0:&quot;&quot;;s:10:&quot;link_style&quot;;s:7:&quot;default&quot;;s:10:&quot;link_image&quot;;s:0:&quot;&quot;;s:9:&quot;link_text&quot;;s:0:&quot;&quot;;s:10:&quot;new_window&quot;;i:0;s:5:&quot;typed&quot;;s:0:&quot;&quot;;s:13:&quot;typed_strings&quot;;s:0:&quot;&quot;;s:10:&quot;typed_loop&quot;;s:1:&quot;1&quot;;s:12:&quot;typed_cursor&quot;;s:1:&quot;1&quot;;s:17:&quot;typed_cursor_char&quot;;s:1:&quot;|&quot;;s:11:&quot;typed_color&quot;;s:0:&quot;&quot;;s:11:&quot;typed_speed&quot;;s:1:&quot;6&quot;;s:11:&quot;typed_delay&quot;;s:1:&quot;1&quot;;s:6:&quot;slider&quot;;b:0;s:17:&quot;slider_pagination&quot;;s:4:&quot;none&quot;;s:22:&quot;slider_pagination_type&quot;;s:7:&quot;bullets&quot;;s:24:&quot;slider_pagination_thumbs&quot;;i:0;s:15:&quot;slider_controls&quot;;s:4:&quot;none&quot;;s:12:&quot;slides_space&quot;;i:0;s:15:&quot;slides_centered&quot;;s:0:&quot;&quot;;s:15:&quot;slides_overflow&quot;;s:0:&quot;&quot;;s:18:&quot;slider_mouse_wheel&quot;;s:0:&quot;&quot;;s:15:&quot;slider_autoplay&quot;;s:1:&quot;1&quot;;s:3:&quot;cat&quot;;s:2:&quot;96&quot;;s:7:&quot;columns&quot;;i:1;s:14:&quot;columns_tablet&quot;;s:0:&quot;&quot;;s:14:&quot;columns_mobile&quot;;s:0:&quot;&quot;;s:5:&quot;count&quot;;i:3;s:6:&quot;offset&quot;;i:3;s:7:&quot;order{{ __('by') }}&quot;;s:9:&quot;post_date&quot;;s:5:&quot;order&quot;;s:3:&quot;asc&quot;;s:3:&quot;ids&quot;;s:0:&quot;&quot;;s:16:&quot;template_default&quot;;s:7:&quot;classic&quot;;s:13:&quot;template_wide&quot;;s:7:&quot;default&quot;;s:13:&quot;template_list&quot;;s:6:&quot;simple&quot;;s:13:&quot;template_news&quot;;s:8:&quot;announce&quot;;s:14:&quot;template_extra&quot;;s:4:&quot;list&quot;;s:16:&quot;template_excerpt&quot;;s:0:&quot;&quot;;s:16:&quot;template_classic&quot;;s:0:&quot;&quot;;s:16:&quot;template_masonry&quot;;s:0:&quot;&quot;;s:18:&quot;template_portfolio&quot;;s:0:&quot;&quot;;s:16:&quot;template_gallery&quot;;s:0:&quot;&quot;;s:14:&quot;template_chess&quot;;s:0:&quot;&quot;;s:17:&quot;image_width_extra&quot;;a:3:{s:4:&quot;unit&quot;;s:2:&quot;px&quot;;s:4:&quot;size&quot;;i:100;s:5:&quot;sizes&quot;;a:0:{}}s:13:&quot;columns_extra&quot;;a:3:{s:4:&quot;unit&quot;;s:2:&quot;px&quot;;s:4:&quot;size&quot;;i:1;s:5:&quot;sizes&quot;;a:0:{}}s:12:&quot;offset_extra&quot;;a:3:{s:4:&quot;unit&quot;;s:2:&quot;px&quot;;s:4:&quot;size&quot;;i:3;s:5:&quot;sizes&quot;;a:0:{}}s:11:&quot;count_extra&quot;;a:3:{s:4:&quot;unit&quot;;s:2:&quot;px&quot;;s:4:&quot;size&quot;;i:3;s:5:&quot;sizes&quot;;a:0:{}}s:20:&quot;columns_tablet_extra&quot;;a:3:{s:4:&quot;unit&quot;;s:2:&quot;px&quot;;s:4:&quot;size&quot;;s:0:&quot;&quot;;s:5:&quot;sizes&quot;;a:0:{}}s:20:&quot;columns_mobile_extra&quot;;a:3:{s:4:&quot;unit&quot;;s:2:&quot;px&quot;;s:4:&quot;size&quot;;s:0:&quot;&quot;;s:5:&quot;sizes&quot;;a:0:{}}s:18:&quot;slides_space_extra&quot;;a:3:{s:4:&quot;unit&quot;;s:2:&quot;px&quot;;s:4:&quot;size&quot;;i:0;s:5:&quot;sizes&quot;;a:0:{}}s:24:&quot;gradient_direction_extra&quot;;a:3:{s:4:&quot;unit&quot;;s:2:&quot;px&quot;;s:4:&quot;size&quot;;i:0;s:5:&quot;sizes&quot;;a:0:{}}s:17:&quot;typed_speed_extra&quot;;a:3:{s:4:&quot;unit&quot;;s:2:&quot;px&quot;;s:4:&quot;size&quot;;i:6;s:5:&quot;sizes&quot;;a:0:{}}s:17:&quot;typed_delay_extra&quot;;a:3:{s:4:&quot;unit&quot;;s:2:&quot;px&quot;;s:4:&quot;size&quot;;i:1;s:5:&quot;sizes&quot;;a:0:{}}s:10:&quot;link_extra&quot;;a:4:{s:3:&quot;url&quot;;s:0:&quot;&quot;;s:11:&quot;is_external&quot;;s:0:&quot;&quot;;s:8:&quot;nofollow&quot;;s:0:&quot;&quot;;s:17:&quot;custom_attributes&quot;;s:0:&quot;&quot;;}s:16:&quot;link_image_extra&quot;;a:2:{s:3:&quot;url&quot;;s:0:&quot;&quot;;s:2:&quot;id&quot;;s:0:&quot;&quot;;}s:6:&quot;scheme&quot;;s:0:&quot;&quot;;s:11:&quot;color_style&quot;;s:7:&quot;default&quot;;s:5:&quot;hover&quot;;s:7:&quot;inherit&quot;;s:2:&quot;sc&quot;;s:10:&quot;sc_blogger&quot;;}">
                                                                <div class="sc_item_filters_header">
                                                                    <h3 class="sc_item_filters_title">Top Cryptocurrency Spot Exchanges</h3>
                                                                </div>
                                                            </div>
                                                            <div class="sc_blogger_content sc_item_content sc_item_posts_container">
                                                                <div data-post-id="991" class="sc_blogger_item sc_blogger_item_extra sc_blogger_item_extra_list sc_blogger_item_odd post_format_standard sc_blogger_item_with_image post-991 post type-post status-publish format-standard has-post-thumbnail hentry category-casino-resorts category-play-now tag-blog tag-casino tag-news tag-slots" data-item-number="1">
                                                                    <div class="sc_blogger_item_header entry-header">
                                                                        <span class="item_number">1.</span>
                                                                    </div>
                                                                    <div class="sc_blogger_item_body">
                                                                        <div class="post_featured with_thumb hover_simple sc_item_featured sc_blogger_item_featured">
                                                                            <img width="370" height="370" src="static/img/binance.png" class="attachment-trx_addons-thumb-avatar size-trx_addons-thumb-avatar wp-post-image" alt="" loading="lazy"/>
                                                                            <div class="mask"></div>
                                                                            <a href="#" aria-hidden="true" class="icons"></a>
                                                                        </div>
                                                                        <div class="sc_blogger_item_content entry-content">
                                                                            <h5 class="sc_blogger_item_title entry-title" data-item-number="1">
                                                                                <a href="#" rel="bookmark">Binance</a>
                                                                            </h5>
                                                                            <div class="sc_blogger_item_excerpt">
                                                                                Huge territory with everything a true casino gambler wants to enjoy on a vacation.
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="sc_blogger_item_footer entry-footer">
                                                                        <span class="trx_addons_reviews_mark">
                                                                            <span class="trx_addons_reviews_stars">
                                                                                <span class="trx_addons_reviews_stars_default">
                                                                                    <span class="trx_addons_reviews_star trx_addons_icon-star"></span>
                                                                                    <span class="trx_addons_reviews_star trx_addons_icon-star"></span>
                                                                                    <span class="trx_addons_reviews_star trx_addons_icon-star"></span>
                                                                                    <span class="trx_addons_reviews_star trx_addons_icon-star"></span>
                                                                                    <span class="trx_addons_reviews_star trx_addons_icon-star"></span>
                                                                                </span>
                                                                                <span class="trx_addons_reviews_stars_hover" style="width:93%;">
                                                                                    <span class="trx_addons_reviews_star trx_addons_icon-star"></span>
                                                                                    <span class="trx_addons_reviews_star trx_addons_icon-star"></span>
                                                                                    <span class="trx_addons_reviews_star trx_addons_icon-star"></span>
                                                                                    <span class="trx_addons_reviews_star trx_addons_icon-star"></span>
                                                                                    <span class="trx_addons_reviews_star trx_addons_icon-star"></span>
                                                                                </span>
                                                                            </span>
                                                                            <span class="trx_addons_reviews_text">
                                                                                <span class="trx_addons_reviews_text_mark">4.7</span>
                                                                                <span class="trx_addons_reviews_text_delimiter">/</span>
                                                                                <span class="trx_addons_reviews_text_max">5</span>
                                                                            </span>
                                                                        </span>
                                                                        <div class="sc_item_button sc_button_wrap">
                                                                            <a href="https://accounts.binance.com/vi/register?ref=47038548" class="sc_button sc_button_default">{{ __('Play now') }}</a>
                                                                            <a href="#" class="sc_button sc_button_bordered">{{ __('Read review') }}</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div data-post-id="991" class="sc_blogger_item sc_blogger_item_extra sc_blogger_item_extra_list sc_blogger_item_odd post_format_standard sc_blogger_item_with_image post-991 post type-post status-publish format-standard has-post-thumbnail hentry category-casino-resorts category-play-now tag-blog tag-casino tag-news tag-slots" data-item-number="1">
                                                                    <div class="sc_blogger_item_header entry-header">
                                                                        <span class="item_number">2.</span>
                                                                    </div>
                                                                    <div class="sc_blogger_item_body">
                                                                        <div class="post_featured with_thumb hover_simple sc_item_featured sc_blogger_item_featured">
                                                                            <img width="370" height="370" src="static/img/ftx.png" class="attachment-trx_addons-thumb-avatar size-trx_addons-thumb-avatar wp-post-image" alt="" loading="lazy"/>
                                                                            <div class="mask"></div>
                                                                            <a href="#" aria-hidden="true" class="icons"></a>
                                                                        </div>
                                                                        <div class="sc_blogger_item_content entry-content">
                                                                            <h5 class="sc_blogger_item_title entry-title" data-item-number="1">
                                                                                <a href="https://ftx.com/profile#a=57707321" rel="bookmark">FTX</a>
                                                                            </h5>
                                                                            <div class="sc_blogger_item_excerpt">
                                                                                Huge territory with everything a true casino gambler wants to enjoy on a vacation.
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="sc_blogger_item_footer entry-footer">
                                                                        <span class="trx_addons_reviews_mark">
                                                                            <span class="trx_addons_reviews_stars">
                                                                                <span class="trx_addons_reviews_stars_default">
                                                                                    <span class="trx_addons_reviews_star trx_addons_icon-star"></span>
                                                                                    <span class="trx_addons_reviews_star trx_addons_icon-star"></span>
                                                                                    <span class="trx_addons_reviews_star trx_addons_icon-star"></span>
                                                                                    <span class="trx_addons_reviews_star trx_addons_icon-star"></span>
                                                                                    <span class="trx_addons_reviews_star trx_addons_icon-star"></span>
                                                                                </span>
                                                                                <span class="trx_addons_reviews_stars_hover" style="width:93%;">
                                                                                    <span class="trx_addons_reviews_star trx_addons_icon-star"></span>
                                                                                    <span class="trx_addons_reviews_star trx_addons_icon-star"></span>
                                                                                    <span class="trx_addons_reviews_star trx_addons_icon-star"></span>
                                                                                    <span class="trx_addons_reviews_star trx_addons_icon-star"></span>
                                                                                    <span class="trx_addons_reviews_star trx_addons_icon-star"></span>
                                                                                </span>
                                                                            </span>
                                                                            <span class="trx_addons_reviews_text">
                                                                                <span class="trx_addons_reviews_text_mark">4.7</span>
                                                                                <span class="trx_addons_reviews_text_delimiter">/</span>
                                                                                <span class="trx_addons_reviews_text_max">5</span>
                                                                            </span>
                                                                        </span>
                                                                        <div class="sc_item_button sc_button_wrap">
                                                                            <a href="https://ftx.com/profile#a=57707321" class="sc_button sc_button_default">{{ __('Play now') }}</a>
                                                                            <a href="#" class="sc_button sc_button_bordered">{{ __('Read review') }}</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div data-post-id="991" class="sc_blogger_item sc_blogger_item_extra sc_blogger_item_extra_list sc_blogger_item_odd post_format_standard sc_blogger_item_with_image post-991 post type-post status-publish format-standard has-post-thumbnail hentry category-casino-resorts category-play-now tag-blog tag-casino tag-news tag-slots" data-item-number="1">
                                                                    <div class="sc_blogger_item_header entry-header">
                                                                        <span class="item_number">3.</span>
                                                                    </div>
                                                                    <div class="sc_blogger_item_body">
                                                                        <div class="post_featured with_thumb hover_simple sc_item_featured sc_blogger_item_featured">
                                                                            <img width="370" height="370" src="static/img/primexbt.png" class="attachment-trx_addons-thumb-avatar size-trx_addons-thumb-avatar wp-post-image" alt="" loading="lazy"/>
                                                                            <div class="mask"></div>
                                                                            <a href="#" aria-hidden="true" class="icons"></a>
                                                                        </div>
                                                                        <div class="sc_blogger_item_content entry-content">
                                                                            <h5 class="sc_blogger_item_title entry-title" data-item-number="1">
                                                                                <a href="https://primexbt.com?signup=623045" rel="bookmark">PrimeXBT</a>
                                                                            </h5>
                                                                            <div class="sc_blogger_item_excerpt">
                                                                                Huge territory with everything a true casino gambler wants to enjoy on a vacation.
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="sc_blogger_item_footer entry-footer">
                                                                        <span class="trx_addons_reviews_mark">
                                                                            <span class="trx_addons_reviews_stars">
                                                                                <span class="trx_addons_reviews_stars_default">
                                                                                    <span class="trx_addons_reviews_star trx_addons_icon-star"></span>
                                                                                    <span class="trx_addons_reviews_star trx_addons_icon-star"></span>
                                                                                    <span class="trx_addons_reviews_star trx_addons_icon-star"></span>
                                                                                    <span class="trx_addons_reviews_star trx_addons_icon-star"></span>
                                                                                    <span class="trx_addons_reviews_star trx_addons_icon-star"></span>
                                                                                </span>
                                                                                <span class="trx_addons_reviews_stars_hover" style="width:93%;">
                                                                                    <span class="trx_addons_reviews_star trx_addons_icon-star"></span>
                                                                                    <span class="trx_addons_reviews_star trx_addons_icon-star"></span>
                                                                                    <span class="trx_addons_reviews_star trx_addons_icon-star"></span>
                                                                                    <span class="trx_addons_reviews_star trx_addons_icon-star"></span>
                                                                                    <span class="trx_addons_reviews_star trx_addons_icon-star"></span>
                                                                                </span>
                                                                            </span>
                                                                            <span class="trx_addons_reviews_text">
                                                                                <span class="trx_addons_reviews_text_mark">4.7</span>
                                                                                <span class="trx_addons_reviews_text_delimiter">/</span>
                                                                                <span class="trx_addons_reviews_text_max">5</span>
                                                                            </span>
                                                                        </span>
                                                                        <div class="sc_item_button sc_button_wrap">
                                                                            <a href="https://primexbt.com?signup=623045" class="sc_button sc_button_default">{{ __('Play now') }}</a>
                                                                            <a href="#" class="sc_button sc_button_bordered">{{ __('Read review') }}</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-element elementor-element-44fa6a4 sc_fly_static elementor-widget elementor-widget-spacer" data-id="44fa6a4" data-element_type="widget" data-widget_type="spacer.default">
                                                                <div class="elementor-widget-container">
                                                                    <div class="elementor-spacer">
                                                                        <div class="elementor-spacer-inner"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>

                                <section class="elementor-section elementor-top-section elementor-element elementor-element-c3df0d7 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="c3df0d7" data-element_type="section">
                                    <div class="elementor-container elementor-column-gap-extended">
                                        <div class="elementor-row">
                                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-2390537 sc_inner_width_none sc_content_align_inherit sc_layouts_column_icons_position_left" data-id="2390537" data-element_type="column">
                                                <div class="elementor-column-wrap elementor-element-populated">
                                                    <div class="elementor-widget-wrap">                                                          
                                                        <div class="elementor-element elementor-element-6419010 sc_fly_static elementor-invisible elementor-widget elementor-widget-trx_sc_title" data-id="6419010" data-element_type="widget">
                                                            <div class="elementor-widget-container">
                                                                <div id="trx_sc_title_1972269089" class="sc_title sc_title_accent -go ">
                                                                    <div class="title-wrap-go">
                                                                        <h4 class="sc_item_title sc_title_title sc_item_title_style_accent go-link sc_item_title_tag">
                                                                            <span class="sc_item_title_text"></span>
                                                                        </h4>
                                                                        <div id="sc_button_716047418" class="sc_item_button sc_button_wrap sc_item_button sc_item_button_simple sc_title_button">
                                                                            <a href="#" class="sc_button sc_button_simple sc_button_size_normal sc_button_icon_left">
                                                                                <span class="sc_button_text">
                                                                                    <span class="sc_button_title"></span>
                                                                                </span>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    <div class="elementor-element elementor-element-db0f316 sc_fly_static elementor-invisible elementor-widget elementor-widget-trx_sc_title" data-id="db0f316" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;,&quot;_animation_delay&quot;:100}" data-widget_type="trx_sc_title.default">
                                                        <div class="elementor-widget-container">
                                                            <div id="trx_sc_title_943937017" class="sc_title sc_title_accent -go ">
                                                                <div class="title-wrap-go">
                                                                    <h4 class="sc_item_title sc_title_title sc_item_title_style_accent go-link sc_item_title_tag">
                                                                        <span class="sc_item_title_text">{{ __('Review') }}</span>
                                                                    </h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-e871cf8 sc_fly_static elementor-widget elementor-widget-spacer" data-id="e871cf8" data-element_type="widget" data-widget_type="spacer.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="elementor-spacer">
                                                                <div class="elementor-spacer-inner"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @if(!empty($reviewPosts))
                                                    <div class="elementor-element elementor-element-6fdb44c sc_fly_static elementor-invisible elementor-widget elementor-widget-trx_sc_blogger" data-id="6fdb44c" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;,&quot;_animation_delay&quot;:100}" data-widget_type="trx_sc_blogger.default">
                                                        <div class="elementor-widget-container">
                                                            <div id="trx_sc_blogger_901230112" class="sc_blogger sc_blogger_extra sc_blogger_extra_simple">
                                                                <div class="sc_blogger_columns_wrap sc_item_columns sc_item_posts_container trx_addons_columns_wrap columns_padding_bottom columns_in_single_row">
                                                                    @foreach($reviewPosts as $item)
                                                                    <div class="trx_addons_column-1_4">
                                                                        <div data-post-id="{{ $item->id }}" class="sc_blogger_item sc_blogger_item_extra sc_blogger_item_extra_simple sc_blogger_item_odd post_format_standard sc_blogger_item_with_image post-125 post type-post status-publish format-standard has-post-thumbnail hentry category-news category-play-now tag-article tag-casino tag-gallery tag-games tag-lifestyle" data-item-number="1">
                                                                            <div class="sc_blogger_item_body">
                                                                                <div class="post_featured with_thumb hover_simple sc_item_featured sc_blogger_item_featured">
                                                                                    <img width="1010" height="569" src="{{ $item->image }}" class="attachment-blabber-thumb-big size-blabber-thumb-big wp-post-image" alt="" loading="lazy"/>
                                                                                    <div class="mask"></div>
                                                                                    <a href="{{route('post.detail', ['locale' => app()->getLocale(), 'post' => $item->slug])}}" aria-hidden="true" class="icons"></a>
                                                                                </div>
                                                                                <div class="sc_blogger_item_content entry-content">
                                                                                    <h5 class="sc_blogger_item_title entry-title" data-item-number="1">
                                                                                        <a href="{{route('post.detail', ['locale' => app()->getLocale(), 'post' => $item->slug])}}" rel="bookmark">{{ $item->title }}</a>
                                                                                    </h5>
                                                                                    <div class="sc_blogger_item_excerpt">{{ str_limit($item->description, 120) }}</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    @endforeach
                                                                </div>
                                                            </div>
                                                            <div class="elementor-element elementor-element-1a7d675 sc_fly_static elementor-widget elementor-widget-spacer" data-id="1a7d675" data-element_type="widget" data-widget_type="spacer.default">
                                                                <div class="elementor-widget-container">
                                                                    <div class="elementor-spacer">
                                                                        <div class="elementor-spacer-inner"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>

                                <section class="elementor-section elementor-top-section elementor-element elementor-element-a0c61db elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-invisible" data-id="a0c61db" data-element_type="section" data-settings="{&quot;animation&quot;:&quot;fadeIn&quot;,&quot;animation_delay&quot;:100}">
                                    <div class="elementor-container elementor-column-gap-extended">
                                        <div class="elementor-row">
                                            <!-- Most popular -->
                                            <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-618f8d0 sc_inner_width_none sc_content_align_inherit sc_layouts_column_icons_position_left" data-id="618f8d0" data-element_type="column">
                                                <div class="elementor-column-wrap elementor-element-populated">
                                                    <div class="elementor-widget-wrap">
                                                        <div class="elementor-element elementor-element-6d2d6ff sc_fly_static elementor-widget elementor-widget-trx_sc_title" data-id="6d2d6ff" data-element_type="widget" data-widget_type="trx_sc_title.default">
                                                            <div class="elementor-widget-container">
                                                                <div id="trx_sc_title_1764754200" class="sc_title sc_title_accent -go ">
                                                                    <div class="title-wrap-go">
                                                                        <h4 class="sc_item_title sc_title_title sc_item_title_style_accent go-link sc_item_title_tag">
                                                                            <span class="sc_item_title_text">{{ __('Most popular') }}</span>
                                                                        </h4>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-94c8fbc sc_fly_static elementor-widget elementor-widget-spacer" data-id="94c8fbc" data-element_type="widget" data-widget_type="spacer.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-spacer">
                                                                    <div class="elementor-spacer-inner"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        @if(!empty($mostPopulars))
                                                        <div class="elementor-element elementor-element-7e6850d sc_fly_static elementor-widget elementor-widget-trx_sc_blogger" data-id="7e6850d" data-element_type="widget" data-widget_type="trx_sc_blogger.default">
                                                            <div class="elementor-widget-container">
                                                                <div id="trx_sc_blogger_342096410" class="sc_blogger sc_blogger_classic sc_blogger_classic_default">
                                                                    <div class="sc_blogger_content sc_item_content sc_item_posts_container posts_container classic_wrap">
                                                                        <div class="column-1_1">
                                                                            @foreach($mostPopulars as $key => $value)
                                                                            @if($key == 0)
                                                                            <article id="post-{{$value->id}}" data-post-id="303" class="post_item post_format_video post_layout_classic post_layout_classic_1 post-303 post type-post status-publish format-video has-post-thumbnail hentry category-video tag-blog tag-news tag-wheel-spin post_format-post-format-video">
                                                                                <div class="post_featured with_thumb hover_simple hover_play width_cat_top with_video_autoplay">
                                                                                    <img width="1010" height="569" src="{{ $value->image}}" class="attachment-blabber-thumb-big size-blabber-thumb-big wp-post-image" alt="" loading="lazy"/>
                                                                                    <div class="mask"></div>
                                                                                    <a href="#" aria-hidden="true" class="icons"></a>
                                                                                    <div class="post_meta rating-go"></div>
                                                                                    </div>
                                                                                    @if(!empty($value->category))
                                                                                    <div class="post_meta cat_top">
                                                                                        <span class="post_meta_item post_categories">
                                                                                            @foreach($value->category as $category)
                                                                                            <a href="{{route('category.post', ['locale' => app()->getLocale(), 'category' => $category->slug])}}" rel="category tag">{{$category->name}}</a>
                                                                                            @endforeach
                                                                                        </span>
                                                                                    </div>
                                                                                    @endif
                                                                                    <div class="post_header entry-header">
                                                                                        <h4 class="post_title entry-title">
                                                                                            <a href="{{route('post.detail', ['locale' => app()->getLocale(), 'post' => $value->slug])}}" rel="bookmark">{{ $value->title }}</a>
                                                                                        </h4>
                                                                                        <div class="post_meta">
                                                                                            <a class="post_meta_item post_author" rel="author" href="#">{{ __('by') }} <span class="post_author_name">{{ $value->author }}</span></a>
                                                                                            <span class="post_meta_item post_date">{{ format_date($item->created_at) }}</span>
                                                                                        </div>
                                                                                    </div>
                                                                            </article>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="elementor-element elementor-element-b88c06d sc_fly_static elementor-widget elementor-widget-spacer" data-id="b88c06d" data-element_type="widget" data-widget_type="spacer.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-spacer">
                                                                    <div class="elementor-spacer-inner"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-0dd41f2 elementor-widget-divider--view-line sc_fly_static elementor-widget elementor-widget-divider" data-id="0dd41f2" data-element_type="widget" data-widget_type="divider.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-divider">
                                                                    <span class="elementor-divider-separator"></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-9a99d4d sc_fly_static elementor-widget elementor-widget-spacer" data-id="9a99d4d" data-element_type="widget" data-widget_type="spacer.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-spacer">
                                                                    <div class="elementor-spacer-inner"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-d1fbefc sc_fly_static elementor-widget elementor-widget-trx_sc_blogger" data-id="d1fbefc" data-element_type="widget" data-widget_type="trx_sc_blogger.default">
                                                            <div class="elementor-widget-container">
                                                                <div id="trx_sc_blogger_1551009330" class="sc_blogger sc_blogger_list sc_blogger_list_simple">
                                                                    <div class="sc_blogger_content sc_item_content sc_item_posts_container">
                                                                        @else
                                                                        <div data-post-id="{{$value->id}}" class="sc_blogger_item sc_blogger_item_list sc_blogger_item_list_simple sc_blogger_item_odd sc_blogger_item_align_none post_format_standard sc_blogger_item_image_position_left post-438 post type-post status-publish format-standard has-post-thumbnail hentry category-roulettes tag-blog tag-news tag-wheel-spin" data-item-number="1">
                                                                            <div class="sc_blogger_item_body">
                                                                                <div class="sc_blogger_item_content entry-content">
                                                                                    <h6 class="sc_blogger_item_title entry-title">
                                                                                        <a href="{{route('post.detail', ['locale' => app()->getLocale(), 'post' => $value->slug])}}" rel="bookmark">{{ $value->title }}</a>
                                                                                    </h6>
                                                                                    <div class="post_meta sc_blogger_item_meta post_meta"></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        @endif
                                                                        @endforeach
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-d09e503 sc_fly_static elementor-widget elementor-widget-spacer" data-id="d09e503" data-element_type="widget" data-widget_type="spacer.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-spacer">
                                                                    <div class="elementor-spacer-inner"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        @endif
                                                        <div class="elementor-element elementor-element-33b111c full_width sc_fly_static elementor-widget elementor-widget-trx_sc_button" data-id="33b111c" data-element_type="widget" data-widget_type="trx_sc_button.default">
                                                            <div class="elementor-widget-container">
                                                                <div id="trx_sc_button_1911357829" class="sc_item_button sc_button_wrap sc_align_center">
                                                                    <a href="#/" class="sc_button sc_button_bordered sc_button_size_large sc_button_icon_right">
                                                                        <span class="sc_button_text sc_align_center">
                                                                            <span class="sc_button_title">{{ __('View more posts') }}</span>
                                                                        </span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /most popular -->
                                            
                                            <!-- Exchange -->
                                            <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-155269a sc_inner_width_none sc_content_align_inherit sc_layouts_column_icons_position_left" data-id="155269a" data-element_type="column">
                                                <div class="elementor-column-wrap elementor-element-populated">
                                                    <div class="elementor-widget-wrap">
                                                        <div class="elementor-element elementor-element-c032301 sc_fly_static elementor-widget elementor-widget-trx_sc_title" data-id="c032301" data-element_type="widget" data-widget_type="trx_sc_title.default">
                                                            <div class="elementor-widget-container">
                                                                <div id="trx_sc_title_569105483" class="sc_title sc_title_accent -go ">
                                                                    <div class="title-wrap-go">
                                                                        <h4 class="sc_item_title sc_title_title sc_item_title_style_accent go-link sc_item_title_tag">
                                                                            <span class="sc_item_title_text">{{ __('Exchange') }}</span>
                                                                        </h4>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-f54f6f5 sc_fly_static elementor-widget elementor-widget-spacer" data-id="f54f6f5" data-element_type="widget" data-widget_type="spacer.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-spacer">
                                                                    <div class="elementor-spacer-inner"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-c12d0ac sc_fly_static elementor-widget elementor-widget-trx_sc_blogger" data-id="c12d0ac" data-element_type="widget" data-widget_type="trx_sc_blogger.default">
                                                            <div class="elementor-widget-container">
                                                                <div id="trx_sc_blogger_106374962" class="sc_blogger sc_blogger_classic sc_blogger_classic_default">
                                                                    <div class="sc_blogger_content sc_item_content sc_item_posts_container posts_container classic_wrap">
                                                                        <div class="column-1_1">
                                                                            <article id="post-301" data-post-id="301" class="post_item post_format_video post_layout_classic post_layout_classic_1 post-301 post type-post status-publish format-video has-post-thumbnail hentry category-video tag-blog tag-news tag-wheel-spin post_format-post-format-video">
                                                                                <div class="post_featured with_thumb hover_simple hover_play width_cat_top">
                                                                                    <img width="1010" height="569" src="static/img/post9-copyright-1010x569.jpg" class="attachment-blabber-thumb-big size-blabber-thumb-big wp-post-image" alt="" loading="lazy"/>
                                                                                    <div class="mask"></div>
                                                                                        <a href="#" aria-hidden="true" class="icons"></a>
                                                                                    <div id="sc_video_1846624114" class="trx_addons_video_player with_cover hover_play">
                                                                                        <div class="video_mask"></div>
                                                                                        <a class="video_hover trx_addons_popup_link" href="#sc_video_1846624114_popup"></a>
                                                                                    </div>
                                                                                    <div id="sc_video_1846624114_popup" class="sc_layouts_popup">
                                                                                        <div id="sc_video_1846624114_popup_player" class="trx_addons_video_player without_cover">
                                                                                            <div class="video_embed video_frame">
                                                                                                <iframe title="Flower Visual" data-src="#" width="1410" height="793" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="post_meta rating-go">
                                                                                        <a href="#/" class="post_meta_item post_meta_rating trx_addons_icon-star">
                                                                                            <span class="post_meta_number">3.6</span>
                                                                                        </a>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="post_meta cat_top">
                                                                                    <span class="post_meta_item post_categories">
                                                                                        <a href="#" rel="category tag">Video</a>
                                                                                    </span>
                                                                                </div>
                                                                                <div class="post_header entry-header">
                                                                                    <h4 class="post_title entry-title">
                                                                                        <a href="#" rel="bookmark">Do they Still Allow Mobs to Run Casinos in Vegas?</a>
                                                                                    </h4>
                                                                                    <div class="post_meta">
                                                                                        <a class="post_meta_item post_author" rel="author" href="#">{{ __('by') }} <span class="post_author_name">Jenny Preston</span></a>
                                                                                        <span class="post_meta_item post_date">16 Jan, 2019</span>
                                                                                    </div>
                                                                                </div>
                                                                            </article>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-e1320c1 sc_fly_static elementor-widget elementor-widget-spacer" data-id="e1320c1" data-element_type="widget" data-widget_type="spacer.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-spacer">
                                                                    <div class="elementor-spacer-inner"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-8c2ee3d elementor-widget-divider--view-line sc_fly_static elementor-widget elementor-widget-divider" data-id="8c2ee3d" data-element_type="widget" data-widget_type="divider.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-divider">
                                                                    <span class="elementor-divider-separator"></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-55060e5 sc_fly_static elementor-widget elementor-widget-spacer" data-id="55060e5" data-element_type="widget" data-widget_type="spacer.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-spacer">
                                                                    <div class="elementor-spacer-inner"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-3aa31ae sc_fly_static elementor-widget elementor-widget-trx_sc_blogger" data-id="3aa31ae" data-element_type="widget" data-widget_type="trx_sc_blogger.default">
                                                            <div class="elementor-widget-container">
                                                                <div id="trx_sc_blogger_1775817505" class="sc_blogger sc_blogger_list sc_blogger_list_simple">
                                                                    <div class="sc_blogger_content sc_item_content sc_item_posts_container">
                                                                        <div data-post-id="425" class="sc_blogger_item sc_blogger_item_list sc_blogger_item_list_simple sc_blogger_item_odd sc_blogger_item_align_none post_format_standard sc_blogger_item_image_position_left post-425 post type-post status-publish format-standard has-post-thumbnail hentry category-games tag-blog tag-news tag-wheel-spin" data-item-number="1">
                                                                            <div class="sc_blogger_item_body">
                                                                                <div class="sc_blogger_item_content entry-content">
                                                                                    <h6 class="sc_blogger_item_title entry-title" data-item-number="1">
                                                                                        <a href="#" rel="bookmark">Going Back to the Past with the 50th Movie Style Casino Parties</a>
                                                                                    </h6>
                                                                                    <div class="post_meta sc_blogger_item_meta post_meta"></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div data-post-id="431" class="sc_blogger_item sc_blogger_item_list sc_blogger_item_list_simple sc_blogger_item_even sc_blogger_item_align_none post_format_standard sc_blogger_item_image_position_left post-431 post type-post status-publish format-standard hentry category-top-tricks tag-blog tag-news tag-wheel-spin" data-item-number="2">
                                                                            <div class="sc_blogger_item_body">
                                                                                <div class="sc_blogger_item_content entry-content">
                                                                                    <h6 class="sc_blogger_item_title entry-title" data-item-number="2">
                                                                                        <a href="#" rel="bookmark">What We Like about the Retro and Modern Vegas Casinos the Most</a>
                                                                                    </h6>
                                                                                    <div class="post_meta sc_blogger_item_meta post_meta"></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-ad49b57 sc_fly_static elementor-widget elementor-widget-spacer" data-id="ad49b57" data-element_type="widget" data-widget_type="spacer.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-spacer">
                                                                    <div class="elementor-spacer-inner"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-d4cce0b full_width sc_fly_static elementor-widget elementor-widget-trx_sc_button" data-id="d4cce0b" data-element_type="widget" data-widget_type="trx_sc_button.default">
                                                            <div class="elementor-widget-container">
                                                                <div id="trx_sc_button_1414168704" class="sc_item_button sc_button_wrap sc_align_center">
                                                                    <a href="#" class="sc_button sc_button_bordered sc_button_size_large sc_button_icon_right">
                                                                        <span class="sc_button_text sc_align_center">
                                                                            <span class="sc_button_title">{{ __('View more posts') }}</span>
                                                                        </span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                         </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /exchange -->

                                            <!-- How to -->
                                            <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-155269a sc_inner_width_none sc_content_align_inherit sc_layouts_column_icons_position_left" data-id="155269a" data-element_type="column">
                                                <div class="elementor-column-wrap elementor-element-populated">
                                                    <div class="elementor-widget-wrap">
                                                        <div class="elementor-element elementor-element-c032301 sc_fly_static elementor-widget elementor-widget-trx_sc_title" data-id="c032301" data-element_type="widget" data-widget_type="trx_sc_title.default">
                                                            <div class="elementor-widget-container">
                                                                <div id="trx_sc_title_569105483" class="sc_title sc_title_accent -go ">
                                                                    <div class="title-wrap-go">
                                                                        <h4 class="sc_item_title sc_title_title sc_item_title_style_accent go-link sc_item_title_tag">
                                                                            <span class="sc_item_title_text">{{ __('How to') }}</span>
                                                                        </h4>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-f54f6f5 sc_fly_static elementor-widget elementor-widget-spacer" data-id="f54f6f5" data-element_type="widget" data-widget_type="spacer.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-spacer">
                                                                    <div class="elementor-spacer-inner"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-c12d0ac sc_fly_static elementor-widget elementor-widget-trx_sc_blogger" data-id="c12d0ac" data-element_type="widget" data-widget_type="trx_sc_blogger.default">
                                                            <div class="elementor-widget-container">
                                                                <div id="trx_sc_blogger_106374962" class="sc_blogger sc_blogger_classic sc_blogger_classic_default">
                                                                    <div class="sc_blogger_content sc_item_content sc_item_posts_container posts_container classic_wrap">
                                                                        <div class="column-1_1">
                                                                            <article id="post-301" data-post-id="301" class="post_item post_format_video post_layout_classic post_layout_classic_1 post-301 post type-post status-publish format-video has-post-thumbnail hentry category-video tag-blog tag-news tag-wheel-spin post_format-post-format-video">
                                                                                <div class="post_featured with_thumb hover_simple hover_play width_cat_top">
                                                                                    <img width="1010" height="569" src="static/img/post9-copyright-1010x569.jpg" class="attachment-blabber-thumb-big size-blabber-thumb-big wp-post-image" alt="" loading="lazy"/>
                                                                                    <div class="mask"></div>
                                                                                        <a href="#" aria-hidden="true" class="icons"></a>
                                                                                    <div id="sc_video_1846624114" class="trx_addons_video_player with_cover hover_play">
                                                                                        <div class="video_mask"></div>
                                                                                        <a class="video_hover trx_addons_popup_link" href="#sc_video_1846624114_popup"></a>
                                                                                    </div>
                                                                                    <div id="sc_video_1846624114_popup" class="sc_layouts_popup">
                                                                                        <div id="sc_video_1846624114_popup_player" class="trx_addons_video_player without_cover">
                                                                                            <div class="video_embed video_frame">
                                                                                                <iframe title="Flower Visual" data-src="#" width="1410" height="793" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="post_meta rating-go">
                                                                                        <a href="#/" class="post_meta_item post_meta_rating trx_addons_icon-star">
                                                                                            <span class="post_meta_number">3.6</span>
                                                                                        </a>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="post_meta cat_top">
                                                                                    <span class="post_meta_item post_categories">
                                                                                        <a href="#" rel="category tag">Video</a>
                                                                                    </span>
                                                                                </div>
                                                                                <div class="post_header entry-header">
                                                                                    <h4 class="post_title entry-title">
                                                                                        <a href="#" rel="bookmark">Do they Still Allow Mobs to Run Casinos in Vegas?</a>
                                                                                    </h4>
                                                                                    <div class="post_meta">
                                                                                        <a class="post_meta_item post_author" rel="author" href="#">{{ __('by') }} <span class="post_author_name">Jenny Preston</span></a>
                                                                                        <span class="post_meta_item post_date">16 Jan, 2019</span>
                                                                                    </div>
                                                                                </div>
                                                                            </article>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-e1320c1 sc_fly_static elementor-widget elementor-widget-spacer" data-id="e1320c1" data-element_type="widget" data-widget_type="spacer.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-spacer">
                                                                    <div class="elementor-spacer-inner"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-8c2ee3d elementor-widget-divider--view-line sc_fly_static elementor-widget elementor-widget-divider" data-id="8c2ee3d" data-element_type="widget" data-widget_type="divider.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-divider">
                                                                    <span class="elementor-divider-separator"></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-55060e5 sc_fly_static elementor-widget elementor-widget-spacer" data-id="55060e5" data-element_type="widget" data-widget_type="spacer.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-spacer">
                                                                    <div class="elementor-spacer-inner"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-3aa31ae sc_fly_static elementor-widget elementor-widget-trx_sc_blogger" data-id="3aa31ae" data-element_type="widget" data-widget_type="trx_sc_blogger.default">
                                                            <div class="elementor-widget-container">
                                                                <div id="trx_sc_blogger_1775817505" class="sc_blogger sc_blogger_list sc_blogger_list_simple">
                                                                    <div class="sc_blogger_content sc_item_content sc_item_posts_container">
                                                                        <div data-post-id="425" class="sc_blogger_item sc_blogger_item_list sc_blogger_item_list_simple sc_blogger_item_odd sc_blogger_item_align_none post_format_standard sc_blogger_item_image_position_left post-425 post type-post status-publish format-standard has-post-thumbnail hentry category-games tag-blog tag-news tag-wheel-spin" data-item-number="1">
                                                                            <div class="sc_blogger_item_body">
                                                                                <div class="sc_blogger_item_content entry-content">
                                                                                    <h6 class="sc_blogger_item_title entry-title" data-item-number="1">
                                                                                        <a href="#" rel="bookmark">Going Back to the Past with the 50th Movie Style Casino Parties</a>
                                                                                    </h6>
                                                                                    <div class="post_meta sc_blogger_item_meta post_meta"></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div data-post-id="431" class="sc_blogger_item sc_blogger_item_list sc_blogger_item_list_simple sc_blogger_item_even sc_blogger_item_align_none post_format_standard sc_blogger_item_image_position_left post-431 post type-post status-publish format-standard hentry category-top-tricks tag-blog tag-news tag-wheel-spin" data-item-number="2">
                                                                            <div class="sc_blogger_item_body">
                                                                                <div class="sc_blogger_item_content entry-content">
                                                                                    <h6 class="sc_blogger_item_title entry-title" data-item-number="2">
                                                                                        <a href="#" rel="bookmark">What We Like about the Retro and Modern Vegas Casinos the Most</a>
                                                                                    </h6>
                                                                                    <div class="post_meta sc_blogger_item_meta post_meta"></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-ad49b57 sc_fly_static elementor-widget elementor-widget-spacer" data-id="ad49b57" data-element_type="widget" data-widget_type="spacer.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-spacer">
                                                                    <div class="elementor-spacer-inner"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-d4cce0b full_width sc_fly_static elementor-widget elementor-widget-trx_sc_button" data-id="d4cce0b" data-element_type="widget" data-widget_type="trx_sc_button.default">
                                                            <div class="elementor-widget-container">
                                                                <div id="trx_sc_button_1414168704" class="sc_item_button sc_button_wrap sc_align_center">
                                                                    <a href="#" class="sc_button sc_button_bordered sc_button_size_large sc_button_icon_right">
                                                                        <span class="sc_button_text sc_align_center">
                                                                            <span class="sc_button_title">{{ __('View more posts') }}</span>
                                                                        </span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                         </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </section>

                                <section class="elementor-section elementor-top-section elementor-element elementor-element-f88b45c elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="f88b45c" data-element_type="section">
                                    <div class="elementor-container elementor-column-gap-extended">
                                        <div class="elementor-row">
                                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-3054092 sc_inner_width_none sc_content_align_inherit sc_layouts_column_icons_position_left" data-id="3054092" data-element_type="column">
                                                <div class="elementor-column-wrap elementor-element-populated">
                                                    <div class="elementor-widget-wrap">
                                                        <div class="elementor-element elementor-element-616ac21 sc_fly_static elementor-widget elementor-widget-spacer" data-id="616ac21" data-element_type="widget" data-widget_type="spacer.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-spacer">
                                                                    <div class="elementor-spacer-inner"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
        </div>
    </div>
</div>  
@endsection