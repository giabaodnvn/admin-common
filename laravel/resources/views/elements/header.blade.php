<header class="top_panel top_panel_custom top_panel_custom_717 top_panel_custom_header-simple-casino without_bg_image scheme_dark">
    <div data-elementor-type="cpt_layouts" data-elementor-id="717" class="elementor elementor-717" data-elementor-settings="[]">
        <div class="elementor-inner">
            <div class="elementor-section-wrap">
                <section class="elementor-section elementor-top-section elementor-element elementor-element-67dbdec elementor-section-content-middle sc_layouts_hide_on_mobile sc_layouts_row sc_layouts_row_type_normal scheme_dark elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="67dbdec" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                    <div class="elementor-container elementor-column-gap-extended">
                        <div class="elementor-row">
                            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-40f9e28 sc_layouts_hide_on_mobile sc_layouts_column_align_left sc_layouts_column sc_inner_width_none sc_content_align_inherit sc_layouts_column_icons_position_left" data-id="40f9e28" data-element_type="column">
                                <div class="elementor-column-wrap elementor-element-populated">
                                    <div class="elementor-widget-wrap">
                                        <!--logo-->
                                        <div class="sc_layouts_item elementor-element elementor-element-f5f0691 sc_fly_static elementor-widget elementor-widget-trx_sc_layouts_logo" data-id="f5f0691" data-element_type="widget" data-widget_type="trx_sc_layouts_logo.default">
                                            <div class="elementor-widget-container">
                                                <a href="{{ route('web.index', app()->getLocale()) }}" id="trx_sc_layouts_logo_972867582" class="sc_layouts_logo sc_layouts_logo_default trx_addons_inline_1444223079">
                                                    <img class="logo_image" src="static/img/logo.png" alt="Topcoin Exchange" width="167" height="40">
                                                </a>
                                            </div>
                                        </div>
                                        <!--menu-->
                                        <div class="sc_layouts_item elementor-element elementor-element-76c81d3 sc_fly_static elementor-widget elementor-widget-trx_sc_layouts_menu" data-id="76c81d3" data-element_type="widget" data-widget_type="trx_sc_layouts_menu.default">
                                            <div class="elementor-widget-container">
                                                <nav class="sc_layouts_menu sc_layouts_menu_default sc_layouts_menu_dir_horizontal menu_hover_fade" id="trx_sc_layouts_menu_1826345519" data-animation-in="fadeIn" data-animation-out="fadeOut">
                                                    <ul id="sc_layouts_menu_1368240234" class="sc_layouts_menu_nav">
                                                        <li class="menu-item menu-item-type-post_type menu-item-object-page">
                                                            <a href="{{ route('web.index', app()->getLocale()) }}"><span>{{ __('Home') }}</span></a>
                                                        </li>
                                                        @if (!empty($menus))
                                                            @foreach ($menus as $menu)
                                                                @if (count($menu->subCategories))
                                                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children">
                                                                    <a href="{{ route('category.post', ['locale' => app()->getLocale(), 'category' => $menu->slug ]) }}"><span>{{ $menu->name }}</span></a>
                                                                    <ul class="sub-menu">
                                                                        @foreach($menu->subCategories as $subMenu)
                                                                        <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children">
                                                                            <a href="{{ route('category.post', ['locale' => app()->getLocale(), 'category' => $subMenu->slug ]) }}"><span>{{ $subMenu->name }}</span></a>
                                                                        </li>
                                                                        @endforeach
                                                                    </ul>
                                                                </li>
                                                                @else
                                                                <li class="menu-item menu-item-type-post_type menu-item-object-page">
                                                                    <a href="{{ route('category.post', ['locale' => app()->getLocale(), 'category' => $menu->slug ]) }}"><span>{{ $menu->name }}</span></a>
                                                                </li>  
                                                        </li>
                                                                </li>  
                                                                @endif
                                                            @endforeach
                                                        @endif
                                                    </ul>
                                                </nav>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-f2e23ad sc_layouts_column_align_right sc_layouts_column sc_content_align_right sc_inner_width_none sc_layouts_column_icons_position_left" data-id="f2e23ad" data-element_type="column">
                                <div class="elementor-column-wrap elementor-element-populated">
                                    <div class="elementor-widget-wrap">
                                        <!--search form-->
                                        <div class="sc_layouts_item elementor-element elementor-element-dbbcdd0 sc_fly_static elementor-widget elementor-widget-trx_sc_layouts_search" data-id="dbbcdd0" data-element_type="widget" data-widget_type="trx_sc_layouts_search.default">
                                            <div class="elementor-widget-container">
                                                <div id="trx_sc_layouts_search_879798674" class="sc_layouts_search">
                                                    <div class="search_wrap search_style_normal layouts_search">
                                                        <div class="search_form_wrap">
                                                            <form role="search" method="get" class="search_form" action="#">
                                                                <input type="hidden" value="" name="post_types">
                                                                <input type="text" class="search_field" placeholder="{{ __('Search') }}" value="" name="">
                                                                <button type="submit" class="search_submit trx_addons_icon-search"></button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div> 
                                            </div>
                                        </div>
                                        <!--social-->
                                        <div class="sc_layouts_item elementor-element elementor-element-51a4d09 elementor-shape-square elementor-grid-0 e-grid-align-center sc_fly_static elementor-widget elementor-widget-social-icons" data-id="51a4d09" data-element_type="widget" data-widget_type="social-icons.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-social-icons-wrapper elementor-grid">
                                                    <span class="elementor-grid-item">
                                                        @if (app()->getLocale() == 'vn')
                                                            <a href="{{ route('change.language', 'en')}}" class="elementor-icon elementor-social-icon elementor-social-icon-facebook elementor-repeater-item-1ae0ee6">
                                                                <img src="static/img/flags/us.svg" title="{{ __('Language') }}" alt="{{ __('Language') }}" height="14">
                                                            </a>
                                                        @else
                                                            <a href="{{ route('change.language', 'vn')}}" class="elementor-icon elementor-social-icon elementor-social-icon-facebook elementor-repeater-item-1ae0ee6">
                                                                <img src="static/img/flags/vn.svg" title="{{ __('Language') }}" alt="{{ __('Language') }}" height="14">
                                                            </a>
                                                        @endif
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="elementor-section elementor-top-section elementor-element elementor-element-46f1afa elementor-section-content-middle sc_layouts_hide_on_wide sc_layouts_hide_on_desktop sc_layouts_hide_on_notebook sc_layouts_hide_on_tablet sc_layouts_row sc_layouts_row_type_normal scheme_dark elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="46f1afa" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                    <div class="elementor-container elementor-column-gap-extended">
                        <div class="elementor-row">
                            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-ecbac8b sc-mobile_content_align_left sc-mobile_layouts_column_align_left sc_layouts_column sc_inner_width_none sc_content_align_inherit sc_layouts_column_icons_position_left" data-id="ecbac8b" data-element_type="column">
                                <div class="elementor-column-wrap elementor-element-populated">
                                    <div class="elementor-widget-wrap">
                                        <div class="sc_layouts_item elementor-element elementor-element-6c130b9 sc_fly_static elementor-widget elementor-widget-trx_sc_layouts_logo" data-id="6c130b9" data-element_type="widget" data-widget_type="trx_sc_layouts_logo.default">
                                            <div class="elementor-widget-container">
                                                <a href="#" id="trx_sc_layouts_logo_1491895113" class="sc_layouts_logo sc_layouts_logo_default trx_addons_inline_1870376699">
                                                    <img class="logo_image" src="static/img/2casino-logo-white.png" alt="Topcoin" width="167" height="40">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-da73aa7 sc-mobile_content_align_right sc_layouts_column_align_right sc_layouts_column sc-mobile_layouts_column_align_right sc_layouts_column sc_inner_width_none sc_content_align_inherit sc_layouts_column_icons_position_left" data-id="da73aa7" data-element_type="column">
                                <div class="elementor-column-wrap elementor-element-populated">
                                    <div class="elementor-widget-wrap">
                                        <div class="sc_layouts_item elementor-element elementor-element-5c5c44d sc_fly_static elementor-widget elementor-widget-trx_sc_layouts_menu" data-id="5c5c44d" data-element_type="widget" data-widget_type="trx_sc_layouts_menu.default">
                                            <div class="elementor-widget-container">
                                                <div class="sc_layouts_iconed_text sc_layouts_menu_mobile_button">
                                                    <a class="sc_layouts_item_link sc_layouts_iconed_text_link" href="#">
                                                        <span class="sc_layouts_item_icon sc_layouts_iconed_text_icon trx_addons_icon-menu"></span>
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
            </div>
        </div>
    </div>
</header>

<div class="menu_mobile_overlay"></div>
<!--menu mobile-->
<div class="menu_mobile menu_mobile_fullscreen scheme_dark">
    <div class="menu_mobile_inner">
        <a class="menu_mobile_close theme_button_close"><span class="theme_button_close_icon"></span></a>
        <a class="sc_layouts_logo" href="#">
            <img src="static/img/2casino-logo-white.png" alt="Top Coin" width="167" height="40">
        </a>
        <nav class="menu_mobile_nav_area">
            <ul id="menu_mobile" class=" menu_mobile_nav">
                <li class="menu-item menu-item-type-post_type menu-item-object-page">
                    <a href="{{route('web.index', app()->getLocale())}}"><span>{{ __('Home') }}</span></a>
                </li>
                @if (!empty($menus))
                    @foreach ($menus as $menu)
                        @if (count($menu->subCategories))
                        <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children">
                            <a href="#"><span>{{ $menu->name }}</span></a>
                            <ul class="sub-menu">
                                @foreach ($menu->subCategories as $subMenu)
                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children">
                                    <a href="#"><span>{{ $subMenu->name }}</span></a>
                                </li>                                    
                            </li>
                                </li>                                    
                                @endforeach
                            </ul>
                        </li>
                        @else
                        <li class="menu-item menu-item-type-post_type menu-item-object-page">
                            <a href="#"><span>{{ $menu->name }}</span></a>
                        </li>
                        @endif
                    @endforeach
                @endif

 
            </ul>
        </nav>
        <div class="socials_mobile">
            <a target="_blank" href="#" class="social_item social_item_style_icons sc_icon_type_icons social_item_type_icons">
                <span class="social_icon social_icon_facebook">
                    <span class="icon-facebook"></span>
                </span>
            </a>
            <a target="_blank" href="#" class="social_item social_item_style_icons sc_icon_type_icons social_item_type_icons">
                <span class="social_icon social_icon_instagramm">
                    <span class="icon-instagramm"></span>
                </span>
            </a>
            <a target="_blank" href="#" class="social_item social_item_style_icons sc_icon_type_icons social_item_type_icons">
                <span class="social_icon social_icon_twitter">
                    <span class="icon-twitter"></span>
                </span>
            </a>
            <a target="_blank" href="#" class="social_item social_item_style_icons sc_icon_type_icons social_item_type_icons">
                <span class="social_icon social_icon_youtube-1">
                    <span class="icon-youtube-1"></span>
                </span>
            </a>
        </div>
    </div>
</div>