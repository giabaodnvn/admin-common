<section class="elementor-section elementor-top-section elementor-element elementor-element-67dbdec elementor-section-content-middle sc_layouts_hide_on_mobile sc_layouts_row sc_layouts_row_type_normal scheme_dark elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="67dbdec" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
    <div class="elementor-container elementor-column-gap-extended">
        <div class="elementor-row">
            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-40f9e28 sc_layouts_hide_on_mobile sc_layouts_column_align_left sc_layouts_column sc_inner_width_none sc_content_align_inherit sc_layouts_column_icons_position_left" data-id="40f9e28" data-element_type="column">
                <div class="elementor-column-wrap elementor-element-populated">
                    <div class="elementor-widget-wrap">
                        <!--logo-->
                        <div class="sc_layouts_item elementor-element elementor-element-f5f0691 sc_fly_static elementor-widget elementor-widget-trx_sc_layouts_logo" data-id="f5f0691" data-element_type="widget" data-widget_type="trx_sc_layouts_logo.default">
                            <div class="elementor-widget-container">
                                <a href="{{ route('web.index') }}" id="trx_sc_layouts_logo_972867582" class="sc_layouts_logo sc_layouts_logo_default trx_addons_inline_1444223079">
                                    <img class="logo_image" src="static/img/logo.png" alt="Top Coin" width="167" height="40">
                                </a>
                            </div>
                        </div>
                        <!--menu-->
                        <div class="sc_layouts_item elementor-element elementor-element-76c81d3 sc_fly_static elementor-widget elementor-widget-trx_sc_layouts_menu" data-id="76c81d3" data-element_type="widget" data-widget_type="trx_sc_layouts_menu.default">
                            <div class="elementor-widget-container">
                                <nav class="sc_layouts_menu sc_layouts_menu_default sc_layouts_menu_dir_horizontal menu_hover_fade" id="trx_sc_layouts_menu_1826345519" data-animation-in="fadeIn" data-animation-out="fadeOut">
                                    <ul id="sc_layouts_menu_1368240234" class="sc_layouts_menu_nav">
                                        <li class="menu-item menu-item-type-post_type menu-item-object-page">
                                            <a href="{{ route('web.index') }}"><span>{{ __('Home') }}</span></a>
                                        </li>
                                        @if (!empty($menus))
                                            @foreach ($menus as $menu)
                                                @if (count($menu->subCategories))
                                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children">
                                                    <a href="{{ route('category.post', $menu->slug) }}"><span>{{ $menu->name }}</span></a>
                                                    <ul class="sub-menu">
                                                        @foreach($menu->subCategories as $subMenu)
                                                        <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children">
                                                            <a href="{{ route('category.post', $subMenu->slug) }}"><span>{{ $subMenu->name }}</span></a>
                                                        </li>
                                                        @endforeach
                                                    </ul>
                                                </li>
                                                @else
                                                <li class="menu-item menu-item-type-post_type menu-item-object-page">
                                                    <a href="{{ route('category.post', $menu->slug) }}"><span>{{ $menu->name }}</span></a>
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
                                                <input type="text" class="search_field" placeholder="{{ __('Search') }}" value="" name="s">
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
                                            <a href="{{ route('change.language',['en']) }}" class="elementor-icon elementor-social-icon elementor-social-icon-facebook elementor-repeater-item-1ae0ee6">
                                                <img src="static/img/flags/us.svg" title="{{ __('Language') }}" alt="{{ __('Language') }}" height="14">
                                            </a>
                                        @else
                                            <a href="{{ route('change.language',['vn']) }}" class="elementor-icon elementor-social-icon elementor-social-icon-facebook elementor-repeater-item-1ae0ee6">
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