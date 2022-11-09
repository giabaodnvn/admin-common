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
    .elementor-social-icon-facebook, .elementor-social-icon-facebook-f {background-color: #000000;}
</style>

<style type="text/css" id="trx_addons-inline-styles-inline-css">.trx_addons_inline_1030079546 img{max-height:40px;}.trx_addons_inline_696167663 img{max-height:40px;}.trx_addons_inline_1032479247 img{max-height:40px;}</style>
<style id="elementor-post-28">.elementor-28 .elementor-element.elementor-element-6238050 > .elementor-container > .elementor-row > .elementor-column > .elementor-column-wrap > .elementor-widget-wrap{align-content:center;align-items:center;}.elementor-28 .elementor-element.elementor-element-6238050:not(.elementor-motion-effects-element-type-background), .elementor-28 .elementor-element.elementor-element-6238050 > .elementor-motion-effects-container > .elementor-motion-effects-layer{background-color:#000000;}.elementor-28 .elementor-element.elementor-element-6238050{transition:background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;padding:3px 0px 3px 0px;}.elementor-28 .elementor-element.elementor-element-6238050 > .elementor-background-overlay{transition:background 0.3s, border-radius 0.3s, opacity 0.3s;}.elementor-28 .elementor-element.elementor-element-18156693 > .elementor-element-populated{text-align:center;}.elementor-28 .elementor-element.elementor-element-214a9329 .logo_image{max-height:40px;}.elementor-28 .elementor-element.elementor-element-214a9329 > .elementor-widget-container{margin:0px -10px 0px 0px;}.elementor-28 .elementor-element.elementor-element-ef621df > .elementor-widget-container{margin:0px 0px -1px 0px;}.elementor-28 .elementor-element.elementor-element-63839f6a > .elementor-widget-container{margin:0px 0px 0px 0px;}.elementor-28 .elementor-element.elementor-element-5fbc1c1 .elementor-repeater-item-1ae0ee6.elementor-social-icon{background-color:#FE7541;}.elementor-28 .elementor-element.elementor-element-5fbc1c1 .elementor-repeater-item-1ae0ee6.elementor-social-icon i{color:#FFFFFF;}.elementor-28 .elementor-element.elementor-element-5fbc1c1 .elementor-repeater-item-1ae0ee6.elementor-social-icon svg{fill:#FFFFFF;}.elementor-28 .elementor-element.elementor-element-5fbc1c1 .elementor-repeater-item-b0dcf0e.elementor-social-icon{background-color:#1DA1F2;}.elementor-28 .elementor-element.elementor-element-5fbc1c1 .elementor-repeater-item-b0dcf0e.elementor-social-icon i{color:#FFFFFF;}.elementor-28 .elementor-element.elementor-element-5fbc1c1 .elementor-repeater-item-b0dcf0e.elementor-social-icon svg{fill:#FFFFFF;}.elementor-28 .elementor-element.elementor-element-5fbc1c1 .elementor-repeater-item-9beb92f.elementor-social-icon{background-color:#157DC3;}.elementor-28 .elementor-element.elementor-element-5fbc1c1 .elementor-repeater-item-9beb92f.elementor-social-icon i{color:#FFFFFF;}.elementor-28 .elementor-element.elementor-element-5fbc1c1 .elementor-repeater-item-9beb92f.elementor-social-icon svg{fill:#FFFFFF;}.elementor-28 .elementor-element.elementor-element-5fbc1c1{--grid-template-columns:repeat(0, auto);--icon-size:15px;--grid-column-gap:3px;--grid-row-gap:0px;}.elementor-28 .elementor-element.elementor-element-5fbc1c1 .elementor-widget-container{text-align:center;}.elementor-28 .elementor-element.elementor-element-5fbc1c1 .elementor-social-icon{--icon-padding:0.8em;}.elementor-28 .elementor-element.elementor-element-5fbc1c1 .elementor-icon{border-radius:5px 5px 5px 5px;}.elementor-28 .elementor-element.elementor-element-5fbc1c1 > .elementor-widget-container{margin:0px 0px 0px -10px;}.elementor-28 .elementor-element.elementor-element-1d0409a > .elementor-container > .elementor-row > .elementor-column > .elementor-column-wrap > .elementor-widget-wrap{align-content:center;align-items:center;}.elementor-28 .elementor-element.elementor-element-1d0409a:not(.elementor-motion-effects-element-type-background), .elementor-28 .elementor-element.elementor-element-1d0409a > .elementor-motion-effects-container > .elementor-motion-effects-layer{background-color:#000000;}.elementor-28 .elementor-element.elementor-element-1d0409a{transition:background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;padding:2px 0px 2px 0px;}.elementor-28 .elementor-element.elementor-element-1d0409a > .elementor-background-overlay{transition:background 0.3s, border-radius 0.3s, opacity 0.3s;}.elementor-28 .elementor-element.elementor-element-fbca8f3 .logo_image{max-height:40px;}.elementor-28 .elementor-element.elementor-element-d2edf16:not(.elementor-motion-effects-element-type-background), .elementor-28 .elementor-element.elementor-element-d2edf16 > .elementor-motion-effects-container > .elementor-motion-effects-layer{background-image:url("http://casino.blabber.ancorathemes.com/wp-content/uploads/2019/03/casino-top-header-copyright-1.jpg");background-position:center center;background-size:cover;}.elementor-28 .elementor-element.elementor-element-d2edf16 > .elementor-background-overlay{background-color:#000000;opacity:0.4;transition:background 0.3s, border-radius 0.3s, opacity 0.3s;}.elementor-28 .elementor-element.elementor-element-d2edf16{transition:background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;}.elementor-28 .elementor-element.elementor-element-100dad9 .elementor-spacer-inner{height:141px;}.elementor-28 .elementor-element.elementor-element-68131eb .elementor-spacer-inner{height:141px;}@media(max-width:1024px){.elementor-28 .elementor-element.elementor-element-100dad9 .elementor-spacer-inner{height:70px;}.elementor-28 .elementor-element.elementor-element-68131eb .elementor-spacer-inner{height:70px;}}@media(min-width:768px){.elementor-28 .elementor-element.elementor-element-18156693{width:54.306%;}.elementor-28 .elementor-element.elementor-element-cab61ce{width:45.66%;}}@media(max-width:1024px) and (min-width:768px){.elementor-28 .elementor-element.elementor-element-18156693{width:60%;}.elementor-28 .elementor-element.elementor-element-cab61ce{width:40%;}}@media(max-width:767px){.elementor-28 .elementor-element.elementor-element-18156693{width:60%;}.elementor-28 .elementor-element.elementor-element-cab61ce{width:50%;}.elementor-28 .elementor-element.elementor-element-cab61ce > .elementor-element-populated.elementor-column-wrap{padding:0px 0px 0px 0px;}.elementor-28 .elementor-element.elementor-element-63839f6a > .elementor-widget-container{padding:0px 0px 0px 0px;}.elementor-28 .elementor-element.elementor-element-7aa3213{width:70%;}.elementor-28 .elementor-element.elementor-element-5f6b6c8{width:30%;}.elementor-28 .elementor-element.elementor-element-100dad9 .elementor-spacer-inner{height:50px;}.elementor-28 .elementor-element.elementor-element-68131eb .elementor-spacer-inner{height:50px;}}</style>
<style>.elementor-28 .elementor-element.elementor-element-6238050 > .elementor-container > .elementor-row > .elementor-column > .elementor-column-wrap > .elementor-widget-wrap{align-content:center;align-items:center;}.elementor-28 .elementor-element.elementor-element-6238050:not(.elementor-motion-effects-element-type-background), .elementor-28 .elementor-element.elementor-element-6238050 > .elementor-motion-effects-container > .elementor-motion-effects-layer{background-color:#000000;}.elementor-28 .elementor-element.elementor-element-6238050{transition:background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;padding:3px 0px 3px 0px;}.elementor-28 .elementor-element.elementor-element-6238050 > .elementor-background-overlay{transition:background 0.3s, border-radius 0.3s, opacity 0.3s;}.elementor-28 .elementor-element.elementor-element-18156693 > .elementor-element-populated{text-align:center;}.elementor-28 .elementor-element.elementor-element-214a9329 .logo_image{max-height:40px;}.elementor-28 .elementor-element.elementor-element-214a9329 > .elementor-widget-container{margin:0px -10px 0px 0px;}.elementor-28 .elementor-element.elementor-element-ef621df > .elementor-widget-container{margin:0px 0px -1px 0px;}.elementor-28 .elementor-element.elementor-element-63839f6a > .elementor-widget-container{margin:0px 0px 0px 0px;}.elementor-28 .elementor-element.elementor-element-5fbc1c1 .elementor-repeater-item-1ae0ee6.elementor-social-icon{background-color:#FE7541;}.elementor-28 .elementor-element.elementor-element-5fbc1c1 .elementor-repeater-item-1ae0ee6.elementor-social-icon i{color:#FFFFFF;}.elementor-28 .elementor-element.elementor-element-5fbc1c1 .elementor-repeater-item-1ae0ee6.elementor-social-icon svg{fill:#FFFFFF;}.elementor-28 .elementor-element.elementor-element-5fbc1c1 .elementor-repeater-item-b0dcf0e.elementor-social-icon{background-color:#1DA1F2;}.elementor-28 .elementor-element.elementor-element-5fbc1c1 .elementor-repeater-item-b0dcf0e.elementor-social-icon i{color:#FFFFFF;}.elementor-28 .elementor-element.elementor-element-5fbc1c1 .elementor-repeater-item-b0dcf0e.elementor-social-icon svg{fill:#FFFFFF;}.elementor-28 .elementor-element.elementor-element-5fbc1c1 .elementor-repeater-item-9beb92f.elementor-social-icon{background-color:#157DC3;}.elementor-28 .elementor-element.elementor-element-5fbc1c1 .elementor-repeater-item-9beb92f.elementor-social-icon i{color:#FFFFFF;}.elementor-28 .elementor-element.elementor-element-5fbc1c1 .elementor-repeater-item-9beb92f.elementor-social-icon svg{fill:#FFFFFF;}.elementor-28 .elementor-element.elementor-element-5fbc1c1{--grid-template-columns:repeat(0, auto);--icon-size:15px;--grid-column-gap:3px;--grid-row-gap:0px;}.elementor-28 .elementor-element.elementor-element-5fbc1c1 .elementor-widget-container{text-align:center;}.elementor-28 .elementor-element.elementor-element-5fbc1c1 .elementor-social-icon{--icon-padding:0.8em;}.elementor-28 .elementor-element.elementor-element-5fbc1c1 .elementor-icon{border-radius:5px 5px 5px 5px;}.elementor-28 .elementor-element.elementor-element-5fbc1c1 > .elementor-widget-container{margin:0px 0px 0px -10px;}.elementor-28 .elementor-element.elementor-element-1d0409a > .elementor-container > .elementor-row > .elementor-column > .elementor-column-wrap > .elementor-widget-wrap{align-content:center;align-items:center;}.elementor-28 .elementor-element.elementor-element-1d0409a:not(.elementor-motion-effects-element-type-background), .elementor-28 .elementor-element.elementor-element-1d0409a > .elementor-motion-effects-container > .elementor-motion-effects-layer{background-color:#000000;}.elementor-28 .elementor-element.elementor-element-1d0409a{transition:background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;padding:2px 0px 2px 0px;}.elementor-28 .elementor-element.elementor-element-1d0409a > .elementor-background-overlay{transition:background 0.3s, border-radius 0.3s, opacity 0.3s;}.elementor-28 .elementor-element.elementor-element-fbca8f3 .logo_image{max-height:40px;}.elementor-28 .elementor-element.elementor-element-d2edf16:not(.elementor-motion-effects-element-type-background), .elementor-28 .elementor-element.elementor-element-d2edf16 > .elementor-motion-effects-container > .elementor-motion-effects-layer{background-image:url("http://casino.blabber.ancorathemes.com/wp-content/uploads/2019/03/casino-top-header-copyright-1.jpg");background-position:center center;background-size:cover;}.elementor-28 .elementor-element.elementor-element-d2edf16 > .elementor-background-overlay{background-color:#000000;opacity:0.4;transition:background 0.3s, border-radius 0.3s, opacity 0.3s;}.elementor-28 .elementor-element.elementor-element-d2edf16{transition:background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;}.elementor-28 .elementor-element.elementor-element-100dad9 .elementor-spacer-inner{height:141px;}.elementor-28 .elementor-element.elementor-element-68131eb .elementor-spacer-inner{height:141px;}@media(max-width:1024px){.elementor-28 .elementor-element.elementor-element-100dad9 .elementor-spacer-inner{height:70px;}.elementor-28 .elementor-element.elementor-element-68131eb .elementor-spacer-inner{height:70px;}}@media(min-width:768px){.elementor-28 .elementor-element.elementor-element-18156693{width:54.306%;}.elementor-28 .elementor-element.elementor-element-cab61ce{width:45.66%;}}@media(max-width:1024px) and (min-width:768px){.elementor-28 .elementor-element.elementor-element-18156693{width:60%;}.elementor-28 .elementor-element.elementor-element-cab61ce{width:40%;}}@media(max-width:767px){.elementor-28 .elementor-element.elementor-element-18156693{width:60%;}.elementor-28 .elementor-element.elementor-element-cab61ce{width:50%;}.elementor-28 .elementor-element.elementor-element-cab61ce > .elementor-element-populated.elementor-column-wrap{padding:0px 0px 0px 0px;}.elementor-28 .elementor-element.elementor-element-63839f6a > .elementor-widget-container{padding:0px 0px 0px 0px;}.elementor-28 .elementor-element.elementor-element-7aa3213{width:70%;}.elementor-28 .elementor-element.elementor-element-5f6b6c8{width:30%;}.elementor-28 .elementor-element.elementor-element-100dad9 .elementor-spacer-inner{height:50px;}.elementor-28 .elementor-element.elementor-element-68131eb .elementor-spacer-inner{height:50px;}}</style>
<style id="elementor-post-3607">.elementor-3607 .elementor-element.elementor-element-15a9eba9{transition:background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;padding:16px 0px 26px 0px;}.elementor-3607 .elementor-element.elementor-element-15a9eba9 > .elementor-background-overlay{transition:background 0.3s, border-radius 0.3s, opacity 0.3s;}@media(max-width:1024px) and (min-width:768px){.elementor-3607 .elementor-element.elementor-element-67b080ab{width:25%;}.elementor-3607 .elementor-element.elementor-element-3fb1c6f0{width:25%;}.elementor-3607 .elementor-element.elementor-element-9517b45{width:25%;}.elementor-3607 .elementor-element.elementor-element-3d5c5af4{width:25%;}}@media(max-width:1024px){.elementor-3607 .elementor-element.elementor-element-15a9eba9{padding:5px 0px 15px 0px;}}@media(max-width:767px){.elementor-3607 .elementor-element.elementor-element-15a9eba9{padding:0px 0px 0px 0px;}.elementor-3607 .elementor-element.elementor-element-67b080ab{width:50%;}.elementor-3607 .elementor-element.elementor-element-3fb1c6f0{width:50%;}.elementor-3607 .elementor-element.elementor-element-9517b45{width:50%;}.elementor-3607 .elementor-element.elementor-element-9517b45 > .elementor-element-populated.elementor-column-wrap{padding:10px 10px 0px 10px;}.elementor-3607 .elementor-element.elementor-element-3d5c5af4{width:50%;}.elementor-3607 .elementor-element.elementor-element-3d5c5af4 > .elementor-element-populated.elementor-column-wrap{padding:10px 10px 0px 10px;}}</style>
<style>.elementor-3607 .elementor-element.elementor-element-15a9eba9{transition:background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;padding:16px 0px 26px 0px;}.elementor-3607 .elementor-element.elementor-element-15a9eba9 > .elementor-background-overlay{transition:background 0.3s, border-radius 0.3s, opacity 0.3s;}@media(max-width:1024px) and (min-width:768px){.elementor-3607 .elementor-element.elementor-element-67b080ab{width:25%;}.elementor-3607 .elementor-element.elementor-element-3fb1c6f0{width:25%;}.elementor-3607 .elementor-element.elementor-element-9517b45{width:25%;}.elementor-3607 .elementor-element.elementor-element-3d5c5af4{width:25%;}}@media(max-width:1024px){.elementor-3607 .elementor-element.elementor-element-15a9eba9{padding:5px 0px 15px 0px;}}@media(max-width:767px){.elementor-3607 .elementor-element.elementor-element-15a9eba9{padding:0px 0px 0px 0px;}.elementor-3607 .elementor-element.elementor-element-67b080ab{width:50%;}.elementor-3607 .elementor-element.elementor-element-3fb1c6f0{width:50%;}.elementor-3607 .elementor-element.elementor-element-9517b45{width:50%;}.elementor-3607 .elementor-element.elementor-element-9517b45 > .elementor-element-populated.elementor-column-wrap{padding:10px 10px 0px 10px;}.elementor-3607 .elementor-element.elementor-element-3d5c5af4{width:50%;}.elementor-3607 .elementor-element.elementor-element-3d5c5af4 > .elementor-element-populated.elementor-column-wrap{padding:10px 10px 0px 10px;}}</style>
<style>.elementor-3607 .elementor-element.elementor-element-15a9eba9{transition:background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;padding:16px 0px 26px 0px;}.elementor-3607 .elementor-element.elementor-element-15a9eba9 > .elementor-background-overlay{transition:background 0.3s, border-radius 0.3s, opacity 0.3s;}@media(max-width:1024px) and (min-width:768px){.elementor-3607 .elementor-element.elementor-element-67b080ab{width:25%;}.elementor-3607 .elementor-element.elementor-element-3fb1c6f0{width:25%;}.elementor-3607 .elementor-element.elementor-element-9517b45{width:25%;}.elementor-3607 .elementor-element.elementor-element-3d5c5af4{width:25%;}}@media(max-width:1024px){.elementor-3607 .elementor-element.elementor-element-15a9eba9{padding:5px 0px 15px 0px;}}@media(max-width:767px){.elementor-3607 .elementor-element.elementor-element-15a9eba9{padding:0px 0px 0px 0px;}.elementor-3607 .elementor-element.elementor-element-67b080ab{width:50%;}.elementor-3607 .elementor-element.elementor-element-3fb1c6f0{width:50%;}.elementor-3607 .elementor-element.elementor-element-9517b45{width:50%;}.elementor-3607 .elementor-element.elementor-element-9517b45 > .elementor-element-populated.elementor-column-wrap{padding:10px 10px 0px 10px;}.elementor-3607 .elementor-element.elementor-element-3d5c5af4{width:50%;}.elementor-3607 .elementor-element.elementor-element-3d5c5af4 > .elementor-element-populated.elementor-column-wrap{padding:10px 10px 0px 10px;}}</style>
<style id="elementor-post-507">.elementor-507 .elementor-element.elementor-element-7ce7f2b4:not(.elementor-motion-effects-element-type-background), .elementor-507 .elementor-element.elementor-element-7ce7f2b4 > .elementor-motion-effects-container > .elementor-motion-effects-layer{background-color:#000000;}.elementor-507 .elementor-element.elementor-element-7ce7f2b4{transition:background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;}.elementor-507 .elementor-element.elementor-element-7ce7f2b4 > .elementor-background-overlay{transition:background 0.3s, border-radius 0.3s, opacity 0.3s;}.elementor-507 .elementor-element.elementor-element-6ae69ba1 > .elementor-element-populated{text-align:center;}.elementor-507 .elementor-element.elementor-element-6f6df85 .elementor-spacer-inner{height:64px;}.elementor-507 .elementor-element.elementor-element-fe8546b .logo_image{max-height:40px;}.elementor-507 .elementor-element.elementor-element-258e60d .elementor-spacer-inner{height:14px;}.elementor-507 .elementor-element.elementor-element-2bb390c > .elementor-widget-container{padding:10px 0px 0px 0px;}.elementor-507 .elementor-element.elementor-element-34d5797 .elementor-spacer-inner{height:28px;}.elementor-507 .elementor-element.elementor-element-731650e .elementor-spacer-inner{height:58px;}@media(max-width:1024px){.elementor-507 .elementor-element.elementor-element-6f6df85 .elementor-spacer-inner{height:57px;}.elementor-507 .elementor-element.elementor-element-258e60d .elementor-spacer-inner{height:10px;}.elementor-507 .elementor-element.elementor-element-2bb390c > .elementor-widget-container{padding:0px 0px 0px 0px;}.elementor-507 .elementor-element.elementor-element-34d5797 .elementor-spacer-inner{height:15px;}.elementor-507 .elementor-element.elementor-element-731650e .elementor-spacer-inner{height:48px;}}@media(max-width:767px){.elementor-507 .elementor-element.elementor-element-6f6df85 .elementor-spacer-inner{height:40px;}.elementor-507 .elementor-element.elementor-element-258e60d .elementor-spacer-inner{height:6px;}.elementor-507 .elementor-element.elementor-element-34d5797 .elementor-spacer-inner{height:10px;}.elementor-507 .elementor-element.elementor-element-731650e .elementor-spacer-inner{height:40px;}}</style>
<style>.elementor-507 .elementor-element.elementor-element-7ce7f2b4:not(.elementor-motion-effects-element-type-background), .elementor-507 .elementor-element.elementor-element-7ce7f2b4 > .elementor-motion-effects-container > .elementor-motion-effects-layer{background-color:#000000;}.elementor-507 .elementor-element.elementor-element-7ce7f2b4{transition:background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;}.elementor-507 .elementor-element.elementor-element-7ce7f2b4 > .elementor-background-overlay{transition:background 0.3s, border-radius 0.3s, opacity 0.3s;}.elementor-507 .elementor-element.elementor-element-6ae69ba1 > .elementor-element-populated{text-align:center;}.elementor-507 .elementor-element.elementor-element-6f6df85 .elementor-spacer-inner{height:64px;}.elementor-507 .elementor-element.elementor-element-fe8546b .logo_image{max-height:40px;}.elementor-507 .elementor-element.elementor-element-258e60d .elementor-spacer-inner{height:14px;}.elementor-507 .elementor-element.elementor-element-2bb390c > .elementor-widget-container{padding:10px 0px 0px 0px;}.elementor-507 .elementor-element.elementor-element-34d5797 .elementor-spacer-inner{height:28px;}.elementor-507 .elementor-element.elementor-element-731650e .elementor-spacer-inner{height:58px;}@media(max-width:1024px){.elementor-507 .elementor-element.elementor-element-6f6df85 .elementor-spacer-inner{height:57px;}.elementor-507 .elementor-element.elementor-element-258e60d .elementor-spacer-inner{height:10px;}.elementor-507 .elementor-element.elementor-element-2bb390c > .elementor-widget-container{padding:0px 0px 0px 0px;}.elementor-507 .elementor-element.elementor-element-34d5797 .elementor-spacer-inner{height:15px;}.elementor-507 .elementor-element.elementor-element-731650e .elementor-spacer-inner{height:48px;}}@media(max-width:767px){.elementor-507 .elementor-element.elementor-element-6f6df85 .elementor-spacer-inner{height:40px;}.elementor-507 .elementor-element.elementor-element-258e60d .elementor-spacer-inner{height:6px;}.elementor-507 .elementor-element.elementor-element-34d5797 .elementor-spacer-inner{height:10px;}.elementor-507 .elementor-element.elementor-element-731650e .elementor-spacer-inner{height:40px;}}</style>
<style type="text/css">.trx_demo_inline_979542354{color:#ffffff !important;border-color:#ffaa5f !important;background-color:#ffaa5f !important;}.trx_demo_inline_1049770484:hover{color:#ffffff !important;border-color:#cc884c !important;background-color:#cc884c !important;}</style>
<link rel='stylesheet' href='static/css/web/animations.min.css'/>
</head>

<body class="archive category category-news category-18 wp-custom-logo theme-blabber ua_chrome woocommerce-no-js body_tag scheme_default blog_mode_blog body_style_wide  is_stream blog_style_portfolio_3 blog_template sidebar_hide expand_content trx_addons_present header_type_custom header_style_header-custom-28 header_position_default menu_style_top no_layout elementor-default elementor-kit-2539">
    <div class="body_wrap">
        <div class="page_wrap">

            <header class="top_panel top_panel_custom top_panel_custom_28 top_panel_custom_header-default without_bg_image scheme_dark">
                <div data-elementor-type="cpt_layouts" data-elementor-id="28" class="elementor elementor-28" data-elementor-settings="[]">
                    <div class="elementor-inner">
                        <div class="elementor-section-wrap">
                            <section class="elementor-section elementor-top-section elementor-element elementor-element-6238050 elementor-section-content-middle sc_layouts_hide_on_mobile sc_layouts_row sc_layouts_row_type_normal scheme_dark elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="6238050" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                <div class="elementor-container elementor-column-gap-extended">
                                    <div class="elementor-row">
                                        <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-18156693 sc_layouts_hide_on_mobile sc_layouts_column_align_left sc_layouts_column sc_inner_width_none sc_content_align_inherit sc_layouts_column_icons_position_left" data-id="18156693" data-element_type="column">
                                            <div class="elementor-column-wrap elementor-element-populated">
                                                <div class="elementor-widget-wrap">
                                                    <div class="sc_layouts_item elementor-element elementor-element-214a9329 sc_fly_static elementor-widget elementor-widget-trx_sc_layouts_logo" data-id="214a9329" data-element_type="widget" data-widget_type="trx_sc_layouts_logo.default">
                                                    <div class="elementor-widget-container">
                                                        <a href="{{ route('web.index') }}" id="trx_sc_layouts_logo_1608265562" class="sc_layouts_logo sc_layouts_logo_default trx_addons_inline_1030079546">
                                                            <img class="logo_image" src="static/img/logo.png"  alt="Blabber Casino" width="167" height="40"></a>
                                                        </div>
                                                    </div>

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
                                        <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-cab61ce sc_layouts_column_align_right sc_layouts_column sc_content_align_right sc_inner_width_none sc_layouts_column_icons_position_left" data-id="cab61ce" data-element_type="column">
                                            <div class="elementor-column-wrap elementor-element-populated">
                                                <div class="elementor-widget-wrap">
                                                    <div class="sc_layouts_item elementor-element elementor-element-63839f6a sc_fly_static elementor-widget elementor-widget-trx_sc_layouts_search" data-id="63839f6a" data-element_type="widget" data-widget_type="trx_sc_layouts_search.default">
                                                        <div class="elementor-widget-container">
                                                            <div id="trx_sc_layouts_search_2066062014" class="sc_layouts_search">
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
                            
                            <section class="elementor-section elementor-top-section elementor-element elementor-element-1d0409a elementor-section-content-middle sc_layouts_hide_on_wide sc_layouts_hide_on_desktop sc_layouts_hide_on_notebook sc_layouts_hide_on_tablet sc_layouts_row sc_layouts_row_type_normal scheme_dark elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="1d0409a" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                <div class="elementor-container elementor-column-gap-extended">
                                    <div class="elementor-row">
                                        <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-7aa3213 sc-mobile_content_align_left sc-mobile_layouts_column_align_left sc_layouts_column sc_inner_width_none sc_content_align_inherit sc_layouts_column_icons_position_left" data-id="7aa3213" data-element_type="column">
                                            <div class="elementor-column-wrap elementor-element-populated">
                                                <div class="elementor-widget-wrap">
                                                    <div class="sc_layouts_item elementor-element elementor-element-fbca8f3 sc_fly_static elementor-widget elementor-widget-trx_sc_layouts_logo" data-id="fbca8f3" data-element_type="widget" data-widget_type="trx_sc_layouts_logo.default">
                                                    <div class="elementor-widget-container">
                                                    <a href="http://casino.blabber.ancorathemes.com/" id="trx_sc_layouts_logo_456763400" class="sc_layouts_logo sc_layouts_logo_default trx_addons_inline_696167663"><img class="logo_image" src="//casino.blabber.ancorathemes.com/wp-content/uploads/2021/08/casino-logo-white.png" srcset="//casino.blabber.ancorathemes.com/wp-content/uploads/2021/08/casino-logo-white-2x.png 2x" alt="Blabber Casino" width="167" height="40"></a> </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-5f6b6c8 sc-mobile_content_align_right sc_layouts_column_align_right sc_layouts_column sc-mobile_layouts_column_align_right sc_layouts_column sc_inner_width_none sc_content_align_inherit sc_layouts_column_icons_position_left" data-id="5f6b6c8" data-element_type="column">
                                            <div class="elementor-column-wrap elementor-element-populated">
                                                <div class="elementor-widget-wrap">
                                                    <div class="sc_layouts_item elementor-element elementor-element-26362fe sc_fly_static elementor-widget elementor-widget-trx_sc_layouts_menu" data-id="26362fe" data-element_type="widget" data-widget_type="trx_sc_layouts_menu.default">
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

                            <section class="elementor-section elementor-top-section elementor-element elementor-element-d2edf16 scheme_dark elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="d2edf16" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                <div class="elementor-background-overlay"></div>
                                <div class="elementor-container elementor-column-gap-extended">
                                    <div class="elementor-row">
                                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-ed400b6 sc_inner_width_none sc_content_align_inherit sc_layouts_column_icons_position_left" data-id="ed400b6" data-element_type="column">
                                            <div class="elementor-column-wrap elementor-element-populated">
                                                <div class="elementor-widget-wrap">
                                                    <div class="sc_layouts_item elementor-element elementor-element-100dad9 sc_fly_static elementor-widget elementor-widget-spacer" data-id="100dad9" data-element_type="widget" data-widget_type="spacer.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="elementor-spacer">
                                                                <div class="elementor-spacer-inner"></div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="sc_layouts_item elementor-element elementor-element-51ffcdb sc_fly_static elementor-widget elementor-widget-trx_sc_layouts_title" data-id="51ffcdb" data-element_type="widget" data-widget_type="trx_sc_layouts_title.default">
                                                        <div class="elementor-widget-container">
                                                            <div id="trx_sc_layouts_title_889211870" class="sc_layouts_title sc_align_center with_content without_image without_tint">
                                                                <div class="sc_layouts_title_content">
                                                                    <div class="sc_layouts_title_title">
                                                                        <h1 class="sc_layouts_title_caption">{{ $categoryName }}</h1>
                                                                    </div>
                                                                    <div class="sc_layouts_title_breadcrumbs">
                                                                        <div class="breadcrumbs">
                                                                            <a class="breadcrumbs_item home" href="{{ route('web.index') }}">{{ __('Home') }}</a>
                                                                            <span class="breadcrumbs_delimiter"></span>
                                                                            <a href="#">{{ __('All posts') }}</a>
                                                                            <span class="breadcrumbs_delimiter"></span>
                                                                            <span class="breadcrumbs_item current">{{ $categoryName }}</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="sc_layouts_item elementor-element elementor-element-68131eb sc_fly_static elementor-widget elementor-widget-spacer" data-id="68131eb" data-element_type="widget" data-widget_type="spacer.default">
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
            </header>


            <div class="menu_mobile_overlay"></div>
            <div class="menu_mobile menu_mobile_fullscreen scheme_dark">
            <div class="menu_mobile_inner">
            <a class="menu_mobile_close theme_button_close">
                <span class="theme_button_close_icon"></span>
            </a>
            <a class="sc_layouts_logo" href="http://casino.blabber.ancorathemes.com/">
                <img src="//casino.blabber.ancorathemes.com/wp-content/uploads/2021/08/casino-logo-white.png" alt="Blabber Casino" width="167" height="40">
            </a>
            <nav class="menu_mobile_nav_area">
                <ul id="menu_mobile" class=" menu_mobile_nav">
                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-2294">
                        <a href="#"><span>Pages</span></a>
                        <ul class="sub-menu">
                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-396">
                                <a href="#"><span>About</span></a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-271">
                        <a href="http://casino.blabber.ancorathemes.com/shop/"><span>Shop</span></a>
                    </li>
                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-203">
                        <a href="http://casino.blabber.ancorathemes.com/contacts/"><span>Contacts</span></a>
                    </li>
                </ul>
            </nav>
            <div class="socials_mobile">
                <a target="_blank" href="https://www.facebook.com/AncoraThemes/" class="social_item social_item_style_icons sc_icon_type_icons social_item_type_icons">
                    <span class="social_icon social_icon_facebook">
                        <span class="icon-facebook"></span>
                    </span>
                </a>
                <a target="_blank" href="https://www.instagram.com/ancora_themes/" class="social_item social_item_style_icons sc_icon_type_icons social_item_type_icons">
                    <span class="social_icon social_icon_instagramm">
                        <span class="icon-instagramm"></span>
                    </span>
                </a>
                <a target="_blank" href="https://twitter.com/themes_ancora" class="social_item social_item_style_icons sc_icon_type_icons social_item_type_icons">
                    <span class="social_icon social_icon_twitter">
                        <span class="icon-twitter"></span>
                    </span>
                </a>
                <a target="_blank" href="https://www.behance.net/ancorathemes" class="social_item social_item_style_icons sc_icon_type_icons social_item_type_icons">
                    <span class="social_icon social_icon_behance">
                        <span class="icon-behance"></span>
                    </span>
                </a>
                <a target="_blank" href="https://www.pinterest.com/" class="social_item social_item_style_icons sc_icon_type_icons social_item_type_icons">
                    <span class="social_icon social_icon_pinterest-circled">
                        <span class="icon-pinterest-circled"></span>
                    </span>
                </a>
                <a target="_blank" href="https://www.youtube.com/channel/UCdIjRh7-lPVHqTTKpaf8PLA" class="social_item social_item_style_icons sc_icon_type_icons social_item_type_icons">
                    <span class="social_icon social_icon_youtube-1">
                        <span class="icon-youtube-1"></span>
                    </span>
                </a>
            </div>
        </div>
            </div>

            <div class="page_content_wrap">
                <div class="content_wrap">
                    @if($posts)
                    <div class="content">
                        <a id="content_skip_link_anchor" class="blabber_skip_link_anchor" href="#"></a>
                        <div class="posts_container portfolio_wrap portfolio_3 columns_wrap columns_padding_bottom">
                            @foreach($posts as $post)
                            <div class="column-1_3">
                                <article id="post-{{$post->id}}" class="post_item post_format_standard post_layout_portfolio post_layout_portfolio_3 post-107 post type-post status-publish format-standard has-post-thumbnail hentry category-news tag-article tag-gallery tag-lifestyle" data-animation="animated fadeIn normal">
                                    <div class="post_featured with_thumb hover_dots hover_with_info">
                                        <img width="540" height="304" src="{{$post->image}}" class="attachment-blabber-thumb-med size-blabber-thumb-med wp-post-image" alt="" loading="lazy"/>
                                        <div class="mask"></div>
                                        <a href="{{ route('post.detail', $post->slug) }}" aria-hidden="true" class="icons">
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                        </a>
                                        <div class="post_info">{{ $post->title }}</div>
                                    </div>
                                </article>
                            </div>
                            @endforeach
                        </div>
                        <nav class="navigation pagination" role="navigation" aria-label="Posts">
                            <h2 class="screen-reader-text">Posts navigation</h2>
                            <div class="nav-links">
                                <span aria-current="page" class="page-numbers current">
                                    <span class="meta-nav screen-reader-text">Page </span>1
                                </span>
                                <a class="page-numbers" href="http://casino.blabber.ancorathemes.com/blog-portfolio-3-columns/page/2/">
                                    <span class="meta-nav screen-reader-text">Page </span>2
                                </a>
                                <a class="next page-numbers" href="http://casino.blabber.ancorathemes.com/blog-portfolio-3-columns/page/2/">&gt;
                                </a>
                            </div>
                        </nav>
                    </div>
                    @endif
                </div>
            </div>

            <a id="footer_skip_link_anchor" class="blabber_skip_link_anchor" href="#"></a>

        <a id="footer_skip_link_anchor" class="blabber_skip_link_anchor" href="#"></a>

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