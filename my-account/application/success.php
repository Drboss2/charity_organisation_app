<?php
    include "../../account/config/db.php";
    include "../../account/modules/script.php";

    //instantiate database object
    $database = new Database();
    $db       = $database->connect();

    //instantiate user object
    $user = new User($db);

    if(!$_GET['data']){
       header('location:'.$user->url);
    }

    $d = $user->singleClientTrack('tracking',$_GET['data']);

    if($d == 'not found'){
        header('location:'.$user->url.'/my-account/application/index.php?error');
    }
  

   
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">

<html lang="en-US" prefix="og: http://ogp.me/ns#">
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">

<title>Muslim Relief Worldwide</title>
<meta name="description" content="Salam is a faith-based charity working globally to help communities fight poverty by creating income opportunities, educating people & inspiring social change. ">
<meta name="robots" content="noodp">
<link rel="canonical" href="../../index.htm">
<meta property="og:locale" content="en_UK">
<meta property="og:type" content="website">
<meta property="og:description" content="Muslim Relief Worldwide ">
<meta property="og:url" content="https://www.mreliefworldwide.org/">
<meta property="og:site_name" content="Muslim Relief Worldwide ">
<meta name="twitter:card" content="summary">
<meta name="document-type" content="Public">
<meta name="document-rating" content="Safe for Kids">
<meta name="document-distribution" content="Global">
<meta name="rating" content="General">
<meta name="copyright" content="Copyright © 2022 ">
<meta name="ROBOTS" content="NOYDIR">
<meta name="ROBOTS" content="NOODP">
<meta name="geo.region" content="United kingdom">
<meta name="twitter:title" content=" Muslim Relief Worldwide">
<meta name="twitter:creator" content="@salamcharity">          
<meta property="og:url" content="https://www.mreliefworldwide.org">
		
	
	
<!-- <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet'> -->
<link href="../../css.css?family=Lato:300,400,400i,700,900" rel="stylesheet">
<!--
<link rel="stylesheet" href="https://www.mreliefworldwide.org/wp-content/themes/girso/style.css" type="text/css">
<link rel="stylesheet" href="https://www.mreliefworldwide.org/wp-content/themes/girso/css/sc_buttons.css" type="text/css">
<link rel="stylesheet" href="https://www.mreliefworldwide.org/wp-content/themes/girso/css/sc_quickdonate.css" type="text/css">
-->

<link rel="stylesheet" type="text/css" href="../../font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="../../wp-content/themes/girso/css/new/bootstrap.min.css" type="text/css">

<link rel="stylesheet" href="../../wp-content/themes/girso/css/new/sc_initialise.css" type="text/css">
<link rel="stylesheet" href="../../wp-content/themes/girso/css/new/sc_footer.css" type="text/css">
<link rel="stylesheet" href="../../wp-content/themes/girso/css/new/sc_header.css" type="text/css">
<link rel="stylesheet" href="../../wp-content/themes/girso/css/new/sc_menu_bar_colour.css" type="text/css">
<link rel="stylesheet" href="../../wp-content/themes/girso/css/new/sc_menu_bar_icon.css" type="text/css">
<link rel="stylesheet" href="../../wp-content/themes/girso/css/new/sc_shelves.css" type="text/css">
<link rel="stylesheet" href="../../wp-content/themes/girso/css/new/sc_image_styles.css" type="text/css">
<link rel="stylesheet" href="../../wp-content/themes/girso/css/new/sc_menu_side_bar.css" type="text/css">
<link rel="stylesheet" href="../../wp-content/themes/girso/css/new/sc_page_standard_text.css" type="text/css">
<link rel="stylesheet" href="../../wp-content/themes/girso/css/new/sc_quickdonate.css" type="text/css">
<link rel="stylesheet" href="../../wp-content/themes/girso/css/new/sc_donation.css" type="text/css">
<link rel="stylesheet" href="../../wp-content/themes/girso/css/new/sc_home.css" type="text/css">
<link rel="stylesheet" href="../../wp-content/themes/girso/css/new/sc_home_slideshow.css" type="text/css">
<link rel="stylesheet" href="../../wp-content/themes/girso/css/new/sc_buttons.css" type="text/css">
<link rel="stylesheet" href="../../wp-content/themes/girso/css/new/sc_events.css" type="text/css">
<link rel="stylesheet" href="../../wp-content/themes/girso/css/new/sc_appeals_index_by_name.css" type="text/css">
<link rel="stylesheet" href="../../wp-content/themes/girso/css/new/sc_appeals_index_by_country.css" type="text/css">
<link rel="stylesheet" href="../../wp-content/themes/girso/css/new/sc_appeals_index_by_cause.css" type="text/css">

<link rel="stylesheet" href="../../wp-content/themes/girso/css/new/sc_donation_checkout.css" type="text/css">
<link rel="stylesheet" href="../../wp-content/themes/girso/css/new/sc_getinvolved_volunteer_form.css" type="text/css">



<link rel="stylesheet" href="../../wp-content/themes/girso/css/new/sc_news.css" type="text/css">
<link rel="stylesheet" href="../../wp-content/themes/girso/css/new/sc_basket_floating_display.css" type="text/css">




<!-- This site is optimized with the Yoast SEO plugin v10.0.1 - https://yoast.com/wordpress/plugins/seo/ -->
<meta name="robots" content="noindex,nofollow">
<meta property="og:locale" content="en_US">
<meta property="og:type" content="article">
<meta property="og:title" content="My account | Muslim Relief Worldwide">
<meta property="og:url" content="https://www.mreliefworldwide.org/my-account/">
<meta property="og:site_name" content="Muslim Relief Worldwide">
<meta property="og:image" content="https://www.mreliefworldwide.org/wp-content/uploads/2019/02/getinvolved_03.jpg">
<meta property="og:image:secure_url" content="https://www.mreliefworldwide.org/wp-content/uploads/2019/02/getinvolved_03.jpg">
<meta property="og:image:width" content="2000">
<meta property="og:image:height" content="620">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="My account | Muslim Relief Worldwide">
<meta name="twitter:image" content="https://www.mreliefworldwide.org/wp-content/uploads/2019/02/getinvolved_03.jpg">
<script type='application/ld+json'>{"@context":"https://schema.org","@type":"Organization","url":"https://www.mreliefworldwide.org/","sameAs":[],"@id":"https://www.mreliefworldwide.org/#organization","name":"Muslim Relief Worldwide","logo":"http://www.mreliefworldwide.org/wp-content/uploads/2018/04/logo.png"}</script>
<!-- / Yoast SEO plugin. -->

<link rel='dns-prefetch' href='../../index-1.htm'>
<link rel='dns-prefetch' href='../../index-2.htm'>
		<script type="text/javascript">
			window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/2.3\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/2.3\/svg\/","svgExt":".svg","source":{"concatemoji":"https:\/\/www.mreliefworldwide.org\/wp-includes\/js\/wp-emoji-release.min.js?ver=4.9.2"}};
			!function(a,b,c){function d(a,b){var c=String.fromCharCode;l.clearRect(0,0,k.width,k.height),l.fillText(c.apply(this,a),0,0);var d=k.toDataURL();l.clearRect(0,0,k.width,k.height),l.fillText(c.apply(this,b),0,0);var e=k.toDataURL();return d===e}function e(a){var b;if(!l||!l.fillText)return!1;switch(l.textBaseline="top",l.font="600 32px Arial",a){case"flag":return!(b=d([55356,56826,55356,56819],[55356,56826,8203,55356,56819]))&&(b=d([55356,57332,56128,56423,56128,56418,56128,56421,56128,56430,56128,56423,56128,56447],[55356,57332,8203,56128,56423,8203,56128,56418,8203,56128,56421,8203,56128,56430,8203,56128,56423,8203,56128,56447]),!b);case"emoji":return b=d([55358,56794,8205,9794,65039],[55358,56794,8203,9794,65039]),!b}return!1}function f(a){var c=b.createElement("script");c.src=a,c.defer=c.type="text/javascript",b.getElementsByTagName("head")[0].appendChild(c)}var g,h,i,j,k=b.createElement("canvas"),l=k.getContext&&k.getContext("2d");for(j=Array("flag","emoji"),c.supports={everything:!0,everythingExceptFlag:!0},i=0;i<j.length;i++)c.supports[j[i]]=e(j[i]),c.supports.everything=c.supports.everything&&c.supports[j[i]],"flag"!==j[i]&&(c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&c.supports[j[i]]);c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&!c.supports.flag,c.DOMReady=!1,c.readyCallback=function(){c.DOMReady=!0},c.supports.everything||(h=function(){c.readyCallback()},b.addEventListener?(b.addEventListener("DOMContentLoaded",h,!1),a.addEventListener("load",h,!1)):(a.attachEvent("onload",h),b.attachEvent("onreadystatechange",function(){"complete"===b.readyState&&c.readyCallback()})),g=c.source||{},g.concatemoji?f(g.concatemoji):g.wpemoji&&g.twemoji&&(f(g.twemoji),f(g.wpemoji)))}(window,document,window._wpemojiSettings);
		</script>
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
<link rel='stylesheet' id='recurring_css-css' href='../../wp-content/themes/girso/css/new/recurring_css.css?ver=4.9.2' type='text/css' media='all'>
<link rel='stylesheet' id='jqui_css-css' href='../../wp-content/themes/girso/css/new/jquery-ui.css?ver=4.9.2' type='text/css' media='all'>
<link rel='stylesheet' id='admin-styles-css' href='../../wp-content/themes/girso/css/new/recurring_css_admin.css?ver=4.9.2' type='text/css' media='all'>
<link rel='stylesheet' id='admin-styles-product-css' href='../../wp-content/themes/girso/css/new/product_order_css_admin.css?ver=4.9.2' type='text/css' media='all'>
<link rel='stylesheet' id='contact-form-7-css' href='../../wp-content/plugins/contact-form-7/includes/css/styles.css?ver=5.1.3' type='text/css' media='all'>
<link rel='stylesheet' id='cookie-notice-front-css' href='../../wp-content/plugins/cookie-notice/css/front.min.css?ver=4.9.2' type='text/css' media='all'>
<link rel='stylesheet' id='get-post-custom-taxonomy-term-shortcode-css' href='../../wp-content/plugins/get-post-custom-taxonomy-term-shortcode/public/css/get-post-custom-taxonomy-term-shortcode-public.css?ver=1.0.0' type='text/css' media='all'>
<link rel='stylesheet' id='rs-plugin-settings-css' href='../../wp-content/plugins/revslider/public/assets/css/settings.css?ver=5.4.6.2' type='text/css' media='all'>
<style id='rs-plugin-settings-inline-css' type='text/css'>
#rs-demo-id {}
</style>
<link rel='stylesheet' id='select2-css' href='../../wp-content/plugins/woocommerce/assets/css/select2.css?ver=3.5.9' type='text/css' media='all'>
<link rel='stylesheet' id='woocommerce-layout-css' href='../../wp-content/plugins/woocommerce/assets/css/woocommerce-layout.css?ver=3.5.9' type='text/css' media='all'>
<link rel='stylesheet' id='woocommerce-smallscreen-css' href='../../wp-content/plugins/woocommerce/assets/css/woocommerce-smallscreen.css?ver=3.5.9' type='text/css' media='only screen and (max-width: 768px)'>
<link rel='stylesheet' id='woocommerce-general-css' href='../../wp-content/plugins/woocommerce/assets/css/woocommerce.css?ver=3.5.9' type='text/css' media='all'>
<style id='woocommerce-inline-inline-css' type='text/css'>
.woocommerce form .form-row .required { visibility: visible; }
</style>
<link rel='stylesheet' id='charitable-styles-css' href='../../wp-content/plugins/charitable/assets/css/charitable.min.css?ver=1.6.13' type='text/css' media='all'>
<link rel='stylesheet' id='bsf-Defaults-css' href='../../wp-content/uploads/smile_fonts/Defaults/Defaults.css?ver=4.9.2' type='text/css' media='all'>
<script type='text/javascript' src='../../wp-includes/js/jquery/jquery.js?ver=1.12.4'></script>
<script type='text/javascript' src='../../wp-includes/js/jquery/jquery-migrate.min.js?ver=1.4.1'></script>
<script type='text/javascript' src='../../wp-content/themes/girso/js/recurring_js.js?ver=4.9.2'></script>
<script type='text/javascript' src='../../wp-content/plugins/charitable/assets/js/libraries/js-cookie.min.js?ver=2.1.4'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var CHARITABLE_SESSION = {"ajaxurl":"https:\/\/www.mreliefworldwide.org\/wp-admin\/admin-ajax.php","id":"","cookie_name":"charitable_session","expiration":"86400","expiration_variant":"82800","secure":"","cookie_path":"\/","cookie_domain":"","generated_id":"50dbef27cc66ec434ecaa13ae0a4a9c3"};
/* ]]> */
</script>
<script type='text/javascript' src='../../wp-content/plugins/charitable/assets/js/charitable-session.min.js?ver=1.6.13'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var cnArgs = {"ajaxurl":"https:\/\/www.mreliefworldwide.org\/wp-admin\/admin-ajax.php","hideEffect":"slide","onScroll":"no","onScrollOffset":"100","cookieName":"cookie_notice_accepted","cookieValue":"true","cookieTime":"2592000","cookiePath":"\/","cookieDomain":"","redirection":"","cache":"","refuse":"no","revoke_cookies":"0","revoke_cookies_opt":"automatic","secure":"1"};
/* ]]> */
</script>
<script type='text/javascript' src='../../wp-content/plugins/cookie-notice/js/front.min.js?ver=1.2.46'></script>
<script type='text/javascript' src='../../wp-content/plugins/get-post-custom-taxonomy-term-shortcode/public/js/get-post-custom-taxonomy-term-shortcode-public.js?ver=1.0.0'></script>
<script type='text/javascript' src='../../wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min.js?ver=2.70'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var wc_add_to_cart_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%","i18n_view_cart":"View cart","cart_url":"https:\/\/www.mreliefworldwide.org\/cart\/","is_cart":"","cart_redirect_after_add":"no"};
/* ]]> */
</script>
<script type='text/javascript' src='../../wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart.min.js?ver=3.5.9'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var _zxcvbnSettings = {"src":"https:\/\/www.mreliefworldwide.org\/wp-includes\/js\/zxcvbn.min.js"};
/* ]]> */
</script>
<script type='text/javascript' src='../../wp-includes/js/zxcvbn-async.min.js?ver=1.0'></script>
<script type='text/javascript' src='../../wp-content/plugins/js_composer/assets/js/vendors/woocommerce-add-to-cart.js?ver=6.4.2'></script>
<link rel='https://api.w.org/' href='../../wp-json/index.htm.json'>
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="../../xmlrpc.php.xml?rsd">
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="../../wp-includes/wlwmanifest.xml"> 
<meta name="generator" content="WordPress 4.9.2">
<meta name="generator" content="WooCommerce 3.5.9">
<link rel='shortlink' href='../index.htm?p=875'>
<link rel="alternate" type="application/json+oembed" href="../../wp-json/oembed/1.0/embed-45.json?url=https%3A%2F%2Fwww.mreliefworldwide.org%2Fmy-account%2F">
<link rel="alternate" type="text/xml+oembed" href="../../wp-json/oembed/1.0/embed-45.xml?url=https%3A%2F%2Fwww.mreliefworldwide.org%2Fmy-account%2F&#038;format=xml">
<style></style><style id="charitable-highlight-colour-styles">.campaign-raised .amount, .campaign-figures .amount,.donors-count, .time-left,.charitable-form-field a:not(.button),.charitable-form-fields .charitable-fieldset a:not(.button),.charitable-notice,.charitable-notice .errors a {color:#f89d35;}.campaign-progress-bar .bar,.donate-button,.charitable-donation-form .donation-amount.selected,.charitable-donation-amount-form .donation-amount.selected {background-color:#f89d35;}.charitable-donation-form .donation-amount.selected,.charitable-donation-amount-form .donation-amount.selected,.charitable-notice, .charitable-drag-drop-images li:hover a.remove-image,.supports-drag-drop .charitable-drag-drop-dropzone.drag-over {border-color:#f89d35;}</style>	<noscript><style>.woocommerce-product-gallery{ opacity: 1 !important; }</style></noscript>
	<meta name='robots' content='noindex,follow'>
<meta name="generator" content="Powered by WPBakery Page Builder - drag and drop page builder for WordPress.">
<meta name="generator" content="Powered by Slider Revolution 5.4.6.2 - responsive, Mobile-Friendly Slider Plugin for WordPress with comfortable drag and drop interface.">
<link rel="icon" href="../../wp-content/uploads/2018/04/favicon-100x100.png" sizes="32x32">
<link rel="icon" href="../../wp-content/uploads/2018/04/favicon-300x300.png" sizes="192x192">
<link rel="apple-touch-icon-precomposed" href="../../wp-content/uploads/2018/04/favicon-300x300.png">
<meta name="msapplication-TileImage" content="https://www.mreliefworldwide.org/wp-content/uploads/2018/04/favicon-300x300.png">
<script type="text/javascript">function setREVStartSize(e){
				try{ var i=jQuery(window).width(),t=9999,r=0,n=0,l=0,f=0,s=0,h=0;					
					if(e.responsiveLevels&&(jQuery.each(e.responsiveLevels,function(e,f){f>i&&(t=r=f,l=e),i>f&&f>r&&(r=f,n=e)}),t>r&&(l=n)),f=e.gridheight[l]||e.gridheight[0]||e.gridheight,s=e.gridwidth[l]||e.gridwidth[0]||e.gridwidth,h=i/s,h=h>1?1:h,f=Math.round(h*f),"fullscreen"==e.sliderLayout){var u=(e.c.width(),jQuery(window).height());if(void 0!=e.fullScreenOffsetContainer){var c=e.fullScreenOffsetContainer.split(",");if (c) jQuery.each(c,function(e,i){u=jQuery(i).length>0?u-jQuery(i).outerHeight(!0):u}),e.fullScreenOffset.split("%").length>1&&void 0!=e.fullScreenOffset&&e.fullScreenOffset.length>0?u-=jQuery(window).height()*parseInt(e.fullScreenOffset,0)/100:void 0!=e.fullScreenOffset&&e.fullScreenOffset.length>0&&(u-=parseInt(e.fullScreenOffset,0))}f=u}else void 0!=e.minHeight&&f<e.minHeight&&(f=e.minHeight);e.c.closest(".rev_slider_wrapper").css({height:f})					
				}catch(d){console.log("Failure at Presize of Slider:"+d)}
			};</script>
		<style type="text/css" id="wp-custom-css">
			.sc_txt_h2
{padding: 10px 0px 25px 0px;}
.appeal_name_p1.appeal_nm_dtt {
    max-height: 19px;
}
.appeal_donate_bttn .header_donate_button {
    margin-top: 20px;
}
.vc_general.vc_tta.vc_tta-tabs.vc_tta-color-grey.vc_tta-style-classic.vc_tta-shape-rounded.vc_tta-spacing-1.appela_cs_tab_dt.vc_tta-tabs-position-top.vc_tta-controls-align-left .wpb_single_image.wpb_content_element.vc_align_left {
    margin: 7px 0 0;
}


/* Custom css */
.vc_tta.vc_general .wpb_column.vc_column_container.vc_col-sm-3 .vc_column-inner {
    padding: 0;
}
.salam_content .wpb_column.vc_column_container.vc_col-sm-12 .wpb_text_column.wpb_content_element .selector_wrapper.selector_line_below.selector_space_above {
    display: none;
}
.vc_tta-color-grey.vc_tta-style-classic.vc_tta-tabs .vc_tta-panels .vc_tta-panel-body .wpb_column.vc_column_container.vc_col-sm-9 .wpb_text_column.wpb_content_element .wpb_wrapper h3 {
    margin: 30px 0 10px;
}
.selector_wrapper.selector_line_below.selector_space_above {
    margin: 0;
}
.vc_tta.vc_general .wpb_column.vc_column_container.vc_col-sm-3 .vc_column-inner .wpb_single_image.wpb_content_element.vc_align_left img.vc_single_image-img {
    height: 350px;
    object-fit: cover;
    object-position: center;
}
.vc_tta-color-grey.vc_tta-style-classic.vc_tta-tabs .vc_tta-panels .vc_tta-panel-body .vc_row.wpb_row.vc_inner.vc_row-fluid .wpb_column.vc_column_container.vc_col-sm-3 {
    width: 40%;
    display: inline !important;
		margin: 0 15px 0 0;
}
.vc_tta-color-grey.vc_tta-style-classic.vc_tta-tabs .vc_tta-panels .vc_tta-panel-body .vc_row.wpb_row.vc_inner.vc_row-fluid .wpb_column.vc_column_container.vc_col-sm-9 {
    width: auto;
    float: none;
}
.vc_tta-color-grey.vc_tta-style-classic.vc_tta-tabs .vc_tta-panels .vc_tta-panel-body .vc_row.wpb_row.vc_inner.vc_row-fluid .wpb_column.vc_column_container.vc_col-sm-3 .wpb_single_image.wpb_content_element.vc_align_left {
    margin: 0;
}
.vc_tta-color-grey.vc_tta-style-classic.vc_tta-tabs .vc_tta-panels .vc_tta-panel-body .wpb_column.vc_column_container.vc_col-sm-9 .wpb_text_column.wpb_content_element .wpb_wrapper h3:first-child {
    margin-top: 0 !important;
}
@media only screen and (max-width: 767px) {
	.entry-content.dishes .vlp-link-container {
   		width: 100%;
   		margin: 0 auto 15px;
	}
	.vc_tta-color-grey.vc_tta-style-classic.vc_tta-tabs .vc_tta-panels .vc_tta-panel-body .vc_row.wpb_row.vc_inner.vc_row-fluid .wpb_column.vc_column_container.vc_col-sm-3 {
    width: 100%;
		display: block !important;
    margin: 0;
}
	.vc_tta-color-grey.vc_tta-style-classic.vc_tta-tabs .vc_tta-panels .vc_tta-panel-body .vc_row.wpb_row.vc_inner.vc_row-fluid .wpb_column.vc_column_container.vc_col-sm-9 {
    width: 100%;
}
}
.salam_content .wpb_column.vc_column_container.vc_col-sm-12 h6, .sc_txt_h2 {
    font-weight: 500;
    color: #333333;
    font-size: 22px;
    text-align: left !important;
    font-family: din700, "din700 Regular", Helvetica, Arial, sans-serif;
}
.salam_content .wpb_column.vc_column_container.vc_col-sm-12 p img.alignnone {
    width: 100%;
    height: auto;
    object-fit: contain;
}

.sc_txt_h2
{
	margin: 0px 0px 0px 0px;
    padding: 0px 0px 22px 0px;
    font-family: din500, "din500 Regular", Helvetica, Arial, sans-serif;
    font-style: normal;
    font-size: 22px;
    line-height: 26px;
    color: #cc0000;
    text-decoration: none;
}		</style>
	<noscript><style> .wpb_animate_when_almost_visible { opacity: 1; }</style></noscript><!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-NSNZMP7');</script>
<!-- End Google Tag Manager -->
<!-- Google Analytics by YOC -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-73303531-40', 'auto');
  ga('send', 'pageview');

</script>
<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window,document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
 fbq('init', '542408429698881'); 
fbq('track', 'PageView');
</script>
<noscript>
 <img height="1" width="1" src="https://www.facebook.com/tr?id=542408429698881&ev=PageView
&noscript=1">
</noscript>
<!-- End Facebook Pixel Code -->
	

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async="" src="../../gtag/js.js?id=UA-174984166-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-174984166-1');
</script>
</head>


<body>

	<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="../../ns.html?id=GTM-NSNZMP7" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

	

<div class="page_image_wrapper bg_donate_01" style="background: url(../../wp-content/uploads/2019/02/getinvolved_03.jpg) ;background-repeat: no-repeat !important; background-position: top center !important; background-size: cover !important; ">
   

</div>
<div class="page_image_wrapper bg_darken"></div>
<div class="page_image_wrapper bg_gradient"></div>

<div id="main_container"> 
   <div class="header_block_wrapper">
      <div class="header_block"> 
         
         <!-- ============================================================================ -->
         <div class="header_block_m1">
            <div class="m1_logo_img_wrapper">
               <div class="m1_logo_img_outer"><a href="../../index.htm" class="m1_logo_img-link" rel="home" itemprop="url"><img width="800" height="173" src="../../wp-content/uploads/2018/04/logo.png" class="m1_logo_img" alt="Muslim Relief Worldwide" itemprop="logo" srcset="../../wp-content/uploads/2018/04/logo.png 800w, ../../wp-content/uploads/2018/04/logo-600x130.png 600w, ../../wp-content/uploads/2018/04/logo-300x65.png 300w, ../../wp-content/uploads/2018/04/logo-768x166.png 768w" sizes="(max-width: 800px) 100vw, 800px"></a>               </div>
            </div>
			<span class="header_logo_reg_no">Muslim Relief Worldwide</span>
         </div>
         <!-- ============================================================================ -->
         
         <div class="header_block_m2_wrapper">

            <div class="header_block_m2">
              <div class="widget_text phone-number-top"><div class="textwidget custom-html-widget"><div class="m2_contact_bar htop display_if_wide">
                  <div class="contact_row contact_row_space_right">
                     <div class="contact_row_l"><img src="../../wp-content/uploads/2018/04/icon_phone.png" class="contact_icon"></div>
                     <div class="contact_row_r">
                        <p class="contact_p1">+44 7380 802536</p>
                     </div>
                  </div>
                  <div class="contact_row">
                     <div class="contact_row_l"><img src="../../wp-content/uploads/2018/04/icon_mail.png" class="contact_icon"></div>
                     <div class="contact_row_r">
                        <p class="contact_p1"><a href="mailto:help@mreliefworldwide.org">help@mreliefworldwide.org</a></p>
                     </div>
                  </div>
               </div></div></div>                   
                  </div>
         </div>
         <div class="textwidget custom-html-widget"><div class="header_block_m3_wrapper display_if_mobile">
            <div class="header_block_m3">
               <div class="m3_contact_bar">
                  <div class="contact_row contact_row_space_right">
                     <div class="contact_row_l"><img src="../../salamcharity/int/int_footer/icon_phone.png" class="contact_icon"></div>
                     <div class="contact_row_r">
                        <p class="contact_p1 contact_p1_m3">+44 7380 802536</p>
                     </div>
                  </div>
                  <div class="contact_row">
                     <div class="contact_row_l"><img src="../../salamcharity/int/int_footer/icon_mail.png" class="contact_icon"></div>
                     <div class="contact_row_r">
                        <p class="contact_p1 contact_p1_m3"><a href="mailto:help@mreliefworldwide.org">help@mreliefworldwide.org</a></p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
                  
         <div class="header_block_m4_wrapper">
            <div class="header_block_m4">
               <div class="header_menu_bar_inner">
               <nav class="main-nav"> 
                <input id="main-menu-state" type="checkbox">
                <label class="main-menu-btn" for="main-menu-state"> <span class="main-menu-btn-icon"></span> </label>
                  <div class="header_donate_button_wrapper"><a href="../../appeals/index.htm" class="header_donate_button">Donate</a> <a href="../../my-account/application/index.php" class="header_donate_button">Log on</a></div>
                                 <ul id="main-menu" class="sm sm-blue collapsed"><li id="menu-item-84" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-84"><a href="../../about/index.htm">About</a>
<ul class="sub-menu">
	<li id="menu-item-591" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-591"><a href="../../about/who-we-are/index.htm">Who We Are</a></li>
	<li id="menu-item-590" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-590"><a href="../../about/where-we-work/index.htm">Where We Work</a></li>
	<li id="menu-item-589" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-589"><a href="../../about/our-partners/index.htm">Our Partners</a></li>
	<li id="menu-item-722" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-722"><a href="../../about/what-we-sponsor/index.htm">What We Sponsor</a></li>
</ul>
</li>
<li id="menu-item-541" class="menu-item menu-item-type-post_type_archive menu-item-object-appeal menu-item-has-children menu-item-541"><a href="../../appeals/index.htm">Emergency Appeals</a>
<ul class="sub-menu">
	<li id="menu-item-1308" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1308"><a href="../../appeals/yemen-appeal/index.htm">Yemen Emergency Appeal</a></li>
	<li id="menu-item-1309" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1309"><a href="../../appeals/rohingya-appeal/index.htm">Rohingya Emergency Appeal</a></li>
	<li id="menu-item-1309" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1309"><a href="../../appeals/ukraine-appeal/index.htm">Ukraine Emergency Appeal</a></li>
</ul>
</li>
<li id="menu-item-1937" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1937"><a href="../../appeals/index.htm#programs">Our Programs</a>
<ul class="sub-menu">
	<li id="menu-item-1867" class="menu-item menu-item-type-post_type menu-item-object-appeal menu-item-1867"><a href="../../zakat/index.htm">Zakat</a></li>
	<li id="menu-item-1868" class="menu-item menu-item-type-post_type menu-item-object-appeal menu-item-1868"><a href="../../appeals/healthcare/index.htm">Health Care</a></li>
	<li id="menu-item-1869" class="menu-item menu-item-type-post_type menu-item-object-appeal menu-item-1869"><a href="../../appeals/food-aid/index.htm">Food Security</a></li>
	<li id="menu-item-1870" class="menu-item menu-item-type-post_type menu-item-object-appeal menu-item-1870"><a href="../../appeals/water/index.htm">Water</a></li>
	<li id="menu-item-1877" class="menu-item menu-item-type-post_type menu-item-object-appeal menu-item-1877"><a href="../../appeals/education/index.htm">Education</a></li>
	<li id="menu-item-1871" class="menu-item menu-item-type-post_type menu-item-object-appeal menu-item-1871"><a href="../../appeals/shelter/index.htm">Shelter</a></li>
	<li id="menu-item-1871" class="menu-item menu-item-type-post_type menu-item-object-appeal menu-item-1871"><a href="../../appeals/religion/index.htm">Religion</a></li>
	<li id="menu-item-1872" class="menu-item menu-item-type-post_type menu-item-object-appeal menu-item-1872"><a href="../../appeals/winter-relief/index.htm">Winter Relief</a></li>
	<li id="menu-item-1873" class="menu-item menu-item-type-post_type menu-item-object-appeal menu-item-1873"><a href="../../appeals/sustainability.html">Sustainability</a></li>
</ul>
</li>
<li id="menu-item-1852" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1852"><a href="#">GET INVOLVED</a>
<ul class="sub-menu">
	<li id="menu-item-1853" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1853"><a href="../../get-involved/volunteer/index.htm">Become a volunteer</a></li>
	<li id="menu-item-1853" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1853"><a href="../../get-involved/agent/index.htm">Become an agent</a></li>
	<li id="menu-item-1549" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1549"><a href="../../get-involved/our-fundraising-guide/index.htm">Our fundraising guide</a></li>
</ul>
</li>
<li id="menu-item-328" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-328"><a href="../../news/index.htm">News</a>
<ul class="sub-menu">
	<li id="menu-item-687" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-687"><a href="../../news/index.htm">Current News</a></li>
</ul>
</li>
</ul>
                  
                </nav>
                           
                  <!--<div id="menu-item-custom"><a href="/donate">DONATE</a></div>-->
                    


                  </div>

            </div>

         </div>

         <!-- ============================================================================ -->
         <div style="clear:both"></div>
      </div>
      <div style="clear:both"></div>
      
      <!-- ============================================================================ --> 
      
   </div>

   <div class="page_content_wrapper">
      <div class="page_content">	<div class="page_heading_wrapper">
		<div class="page_heading_outer">
		   <div class="page_heading"> 
			  <!-- ============================================================================ -->
			  <p class="page_txt_h1">My Application</p>
			  
			  <!-- ============================================================================ --> 
		   </div>
		</div>
	 </div>
    <span style='color:black'>Application Status: <?php if($d->progress != 100){echo '<p class="text-danger">Pending..</p>';}else{ echo '<p class="text-success">Approved</p>';}?></span>
      <div class="shelf_wrapper shelf_white">
         <div class="shelf">
            <div class="salam_content_wrapper"> 
               <div class="woocommerce">
                 
                  <div class='row'>
                     <div class='col-lg-6' style='padding:0;'>
                        <div class="table-responsive mr-3">
                           <table class="table table-bordered table-striped">
                              <tbody style='color:#212529'>
                                 <tr style="background:black;color:white;" class="text-light">
                                    <td style="color:white;" colspan="2">My Contact Details</td>
                                 </tr>
                                 <tr>
                                       <td>My Profile Picture</td>
                                       <td><img class='img-fluid' style='width:100px;max-height:200px; border-radius:50%;'src=<?php echo  '../../account/images/'.$d->image?>></td>
                                 </tr>
                                 <tr>
                                       <td>Full Name</td>
                                       <td><strong><?php  echo $d->full_name?></strong></td>
                                 </tr>
                                 <tr>
                                       <td>Country</td>
                                       <td><strong><?php  echo $d->country?></strong></td>
                                 </tr>
                                 <tr>
                                       <td>State</td>
                                       <td><strong><?php  echo $d->state?></strong></td>
                                 </tr>
                                 <tr>
                                       <td>City</td>
                                       <td><strong><?php  echo $d->city?></strong></td>
                                 </tr>
                                 <tr>
                                       <td>Address</td>
                                       <td><strong><?php  echo $d->home_address?></strong></td>
                                 </tr>
                                 <tr>
                                       <td>Gender</td>
                                       <td><strong><?php  echo $d->sex?></strong></td>
                                 </tr>
                                 <tr>
                                       <td>Phone</td>
                                       <td><strong><?php  echo $d->phone?> </strong></td>
                                 </tr>
                                 <tr>
                                       <td>Date of Birth</td>
                                       <td><strong><?php  echo $d->dob?> </strong></td>
                                 </tr>
                              </tbody>
                           </table>
                        </div>
                     </div>
                     <div class='col-lg-6'  style='padding:0;'>
                        <div class="table-responsive">
                           <table class="table table-bordered table-striped">
                              <tbody style='color:#212529'>
                                 <tr style="background:black;color:white;" class="text-light">
                                    <td style="color:white;" colspan="2">Other Informations</td>
                                 </tr>
                                 <tr>
                                       <td>ID Card Type</td>
                                       <td><strong><?php  echo $d->id_type?></strong></td>
                                 </tr>
                                 <tr>
                                       <td>Issuer Authority</td>
                                       <td><strong><?php  echo $d->issue_auth?></strong></td>
                                 </tr>
                                 <tr>
                                       <td>Date Issued</td>
                                       <td><strong><?php  echo $d->doi?></strong></td>
                                 </tr>
                                 <tr>
                                       <td>Date of Expiration</td>
                                       <td><strong><?php  echo $d->doe?></strong></td>
                                 </tr>
                                 <tr>
                                       <td>Address</td>
                                       <td><strong><?php  echo $d->home_address?></strong></td>
                                 </tr>
                                 <tr>
                                       <td>Are u a Muslim</td>
                                       <td><strong><?php  echo $d->muslim?></strong></td>
                                 </tr>
                                 <tr>
                                       <td>Profession</td>
                                       <td><strong><?php  echo $d->job?> </strong></td>
                                 </tr>
                                 <tr>
                                       <td>Annual Income</td>
                                       <td><strong><?php  echo $d->income?> </strong></td>
                                 </tr>
                                 <tr>
                                       <td>You need our support </td>
                                       <td><strong><?php  echo $d->support?> </strong></td>
                                 </tr>
                                 <tr>
                                       <td>I want to be a volunteer</td>
                                       <td><strong><?php  echo $d->volunteer?> </strong></td>

                                 </tr>
                              </tbody>
                           </table>
                        </div>
                     </div>
                     <div class='col-lg-6'  style='padding:0'>
                        <div class="table-responsive">
                           <table class="table table-bordered table-striped">
                              <tbody style='color:#212529'>
                                 <tr style="background:black;color:white;" class="text-light">
                                    <td style="color:white;" colspan="2">NGO/Charity Experience</td>
                                 </tr>
                                 <tr>
                                       <td>I have work with an NGO/Charity Organisation Before</td>
                                       <td><strong><?php  echo $d->work_with_charity?></strong></td>
                                 </tr>
                                 <tr>
                                       <td>I Have an Charity/NGO Experience </td>
                                       <td><strong><?php  echo $d->charity_experience?></strong></td>
                                 </tr>
                                 <tr>
                                       <td>I a Muslim with NGO/Charity, Aids and Relief work experience and i would like you to employ me.</td>
                                       <td><strong><?php  echo $d->muslim_with?></strong></td>
                                 </tr>
                                 <tr>
                                       <td>I a Non-Muslim with NGO, Aids and Relief work experience and i would like you to employ me.</td>
                                       <td><strong><?php  echo $d->non_muslim_with?></strong></td>
                                 </tr>
                                 <tr>
                                       <td>I a Muslim without NGO/Charity, Aids and Relief work experience and i would like start with MRW</td>
                                       <td><strong><?php  echo $d->muslim_without?></strong></td>
                                 </tr>
                                 <tr>
                                       <td>I just need this support, Aids and Relief to support those in need around me</td>
                                       <td><strong><?php  echo $d->just_need?></strong></td>
                                 </tr>
                              </tbody>
                           </table>
                        </div>
                     </div>
                     <div class='col-lg-6'  style='padding:0'>
                        <div class="table-responsive">
                           <table class="table table-bordered table-striped">
                              <tbody style='color:#212529'>
                                 <tr style="background:black;color:white;" class="text-light">
                                    <td style="color:white;" colspan="2">Allowance Stats</td>
                                 </tr>
                                 <tr>
                                       <td>I want to work in as volunteer, I will only request for allowance instead of monthy payments.</td>
                                       <td><strong><?php  echo $d->work_with_charity?></strong></td>
                                 </tr>
                                 <tr>
                                    <td>Estimated value of my application in US Dollar</td>
                                    <td><strong><?php echo $d->estimated_value_of_apps?></strong></td>
                                 </tr>
                                 <tr>
                                    <td>Purpose of Applicatiion </td>
                                    <td><strong><?php echo $d->purpose?></strong></td>
                                 </tr>
                                 <tr>
                                    <td>No of Persons i want help this application</td>
                                    <td><strong><?php echo $d->persons?></strong></td>
                                 </tr>
                                 <tr>
                                    <td>Monthy Allowance </td>
                                    <td><strong><?php echo $d->month_allw?></strong></td>
                                 </tr>
                                 <tr>
                                    <td>Expected Yearly Allowance</td>
                                    <td><strong><?php echo $d->yearly_allw?></strong></td>
                                 </tr>
                              </tbody>
                           </table>
                        </div>
                     </div>
                     <div class='col-lg-6'  style='padding:0'>
                        <div class="table-responsive">
                           <table class="table table-bordered table-striped">
                              <tbody style='color:#212529'>
                                 <tr style="background:black;color:white;" class="text-light">
                                    <td style="color:white;" colspan="2">Audits Stats</td>
                                 </tr>
                                 <tr>
                                    <td>I will be open for Audits and to give account </td>
                                    <td><strong><?php echo $d->audit?></strong></td>
                                 </tr>
                                 <tr>
                                    <td>I will also provide warehouse where and AIDS will be stored safely</td>
                                    <td><strong><?php echo $d->store?></strong></td>
                                 </tr>
                                 <tr>
                                    <td>I will not sell the relief materials given to me for personal gain </td>
                                    <td><strong><?php echo $d->sell?></strong></td>
                                 </tr>
                                 <tr>
                                    <td>Am ready to receive any help, aids materials, supports and ready for the converying it to my location</td>
                                    <td><strong><?php echo $d->converying?></strong></td>
                                 </tr>
                                 <tr>
                                    <td>Im ready to provide any further information in this application if need</td>
                                    <td><strong><?php echo $d->info?></strong></td>
                                 </tr>
                                 <tr>
                                    <td>To provide any security guarantee for this application before receving the approved aid or support</td>
                                    <td><strong><?php echo $d->guarantee?></strong></td>
                                 </tr>
                              </tbody>
                           </table>
                        </div>
                     </div>
                     <div class='col-lg-6'  style='padding:0'>
                        <div class='card d-flex justify-content-center align-item-center'>
                           <div class='card-header'>Application Status</div>
                           <div class='card-body'>
                              <h2>Your Application Status</h2>
                              <hr>
                              <div class="progress">
                                 <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="<?php echo $d->progress?>" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $d->progress?>%">
                                   <?php echo $d->progress?>%
                                 </div>
                              </div>
                              <hr>
                              <p style='color:#212529'><b style="text-weight:bolder;color:#212529">Note :</b>Your Application is Considered Approved When this Progress bar get to 100%, Then you will be contacted for all necessary documentation.</p>

                              <p style='color:#212529'><b style="text-weight:bolder;color:#212529">Note :</b>Your We deserved the right to approved or declined your application without notice.</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
</div>
<div style="clear:both"></div>
<!-- FOOTER -->
<div class="footer_top_border"></div>
<div class="footer_2_wrapper">
    <div class="footer_2">
        <!-- ============================================================================ -->
        <div class="footer_column_wrapper" id="footer-sidebar">
            <aside id="custom_html-2" class="widget_text widget widget_custom_html"><p class="footer_links_h1">CONTACT US</p><div class="textwidget custom-html-widget"><div class="footer_address_box">
    <div class="add_wrapper">
        <!-- ============================================================================ -->
        <div class="add_row">
            <div class="add_row_l add_icon_mobile_hide"><img src="../../wp-content/uploads/2018/04/icon_address.png" class="add_icon"></div>
            <div class="add_row_r">
                <p class="add_p1">110-112 Leagrave Road, Luton LU4 8HX, UK</p>
            </div>
        </div>
        <div style="clear:both"></div>
        <!-- ============================================================================ -->
        <div class="add_row">
            <div class="add_row_l"><img src="../../wp-content/uploads/2018/04/icon_phone.png" class="add_icon"></div>
            <div class="add_row_r">
                <p class="add_p1">+44 7380 802536</p>
            </div>
        </div>
        <div style="clear:both"></div>
        <!-- ============================================================================ -->
        <div class="add_row">
            <div class="add_row_l"><img src="../../wp-content/uploads/2018/04/icon_mail.png" class="add_icon"></div>
            <div class="add_row_r">
                <p class="add_p1"><a href="mailto:help@mreliefworldwide.org">help@mreliefworldwide.org</a></p>
            </div>
        </div>
        <div style="clear:both"></div>
        <!-- ============================================================================ -->
        <div class="add_row">
            <div class="add_row_l"><img src="../../wp-content/uploads/2018/04/icon_crown.png" class="add_icon"></div>
            <div class="add_row_r">
                <p class="add_p1">Muslim Relief Worldwide</p>
            </div>
        </div>
        <div style="clear:both"></div>
        <!-- ============================================================================ -->
        <div class="add_row add_row_last">
            <div class="add_row_l"><img src="../../wp-content/uploads/2018/04/icon_calendar.png" class="add_icon"></div>
            <div class="add_row_r">
                <p class="add_p1">&copy; 2022 Muslim Relief Worldwide</p>
            </div>
        </div>
        <div style="clear:both"></div>
        <!-- ============================================================================ -->
    </div>
</div>
<div style="clear:both"></div>
</div></aside>        </div>
        <!-- ============================================================================ -->
        <div class="footer_column_wrapper" id="footer-sidebar">
            <aside id="custom_html-3" class="widget_text widget widget_custom_html"><p class="footer_links_h1">LATEST APPEALS</p><div class="textwidget custom-html-widget"><ul class="footer_links_list">
	<li><a href="../../appeals/rohingya-appeal/index.htm">Emergency: Rohingya</a></li>
	<li><a href="../../appeals/pakistan-appeal/index.htm">Emergency: Pakistan</a></li>
	<li><a href="../../appeals/syrian-refugees/index.htm">Emergency: Syria</a></li>
	<li><a href="../../appeals/Shifa-Clinic.html">Emergency: Medical</a></li>
	<li><a href="../../appeals/feel-good-food-appeal/index.htm">Healthy Eating</a></li>
	<li><a href="../../appeals/shelter/index.htm">Orphanage</a></li>
	<li><a href="../../events.html">Charity Events</a></li>
</ul></div></aside>        </div>
        <!-- ============================================================================ -->
        <div class="footer_column_wrapper" id="footer-sidebar">
            <aside id="custom_html-4" class="widget_text widget widget_custom_html"><p class="footer_links_h1">OUR AREAS OF WORK</p><div class="textwidget custom-html-widget"><ul class="footer_links_list">
	<li><a href="../../appeals/index.htm">Emergency Aid</a></li>
	<li><a href="../../appeals/feel-good-food-appeal/index.htm">Food Aid</a></li>
	<li><a href="#">Sustainable Energy</a></li>
	<li><a href="../../appeals/wishing-wells-water-appeal/index.htm">Clean Water</a></li>
	<li><a href="#">Qurbani</a></li>
	<li><a href="../../events/come-iftar-with-me/index.htm">Ramadan</a></li>
	<li><a href="../../zakat/index.htm">Zakat</a></li>
</ul></div></aside>        </div>
        <!-- ============================================================================ -->
        <div class="footer_column_wrapper footer_column_last" id="footer-sidebar">
            <aside id="custom_html-5" class="widget_text widget widget_custom_html"><p class="footer_links_h1">USEFUL LINKS</p><div class="textwidget custom-html-widget"><ul class="footer_links_list">
    <li><a href="../../about/who-we-are/index.htm">Who we are</a></li>
    <li><a href="../../about/where-we-work/index.htm">Where we work</a></li>
    <li><a href="../../get-involved/index.htm">How to volunteer</a></li>
    <li><a href="../../how-to-donate/index.htm">How to donate</a></li>
    <li><a href="../../terms-conditions/index.htm">Terms &amp; Conditions</a></li>
    <li><a href="../../cookies/index.htm">Cookies</a></li>
    <li><a href="../../privacy/index.htm">Privacy</a></li>
</ul>
</div></aside>        </div>
        <!-- Footer Social Side bar -->
        <div class="widget_text footer_1_social"><div class="textwidget custom-html-widget"><div style="clear:both"></div>
<div class="footer_icon_box_wrapper"></div>
<div style="clear:both"></div>
</div></div>        <!-- End Footer Social Side bar -->
        <!-- ============================================================================ -->
        <div style="clear:both"></div>
    </div>
    <div class="footer_clear"></div>
</div>
<!-- ROW 4  -->
<div class="footer_3_wrapper">
    <div class="footer_3">
        <div class="footer_3_box">
            <p class="footer_3_p1">			<div class="textwidget"><p class="footer_3_p1">© 2022 Muslim Relief Worldwide<br>
Charity Commission No: 1142191<br>
5 Woodhouse Grove, London, E12 6SR<br>
T: 020 8548 1534 <a href="mailto:info@mreliefworldwide.org" target="_blank" rel="noopener">info@mreliefworldwide.org</a></p>
</div>
		        </div>
    </div>
    <div class="footer_clear"></div>
</div>
<!-- END FOOTER -->
<!-- ==================================================================================== -->
<!-- ==================================================================================== -->
<!-- QUICKDONATE -->
<!-- ==================================================================================== -->
<!-- ==================================================================================== -->
<link rel='stylesheet' id='style-UtubeGallery-css' href='../../wp-content/plugins/youtube-simple-gallery/assets/css/style-UtubeGallery-min.css?ver=4.9.2' type='text/css' media='all'>
<script type='text/javascript'>
/* <![CDATA[ */
var wpcf7 = {"apiSettings":{"root":"https:\/\/www.mreliefworldwide.org\/wp-json\/contact-form-7\/v1","namespace":"contact-form-7\/v1"}};
/* ]]> */
</script>
<script type='text/javascript' src='../../wp-content/plugins/contact-form-7/includes/js/scripts.js?ver=5.1.3'></script>
<script type='text/javascript' src='../../wp-content/plugins/revslider/public/assets/js/jquery.themepunch.tools.min.js?ver=5.4.6.2'></script>
<script type='text/javascript' src='../../wp-content/plugins/revslider/public/assets/js/jquery.themepunch.revolution.min.js?ver=5.4.6.2'></script>
<script type='text/javascript' src='../../wp-content/plugins/woocommerce/assets/js/selectWoo/selectWoo.full.min.js?ver=1.0.5'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var pwsL10n = {"unknown":"Password strength unknown","short":"Very weak","bad":"Weak","good":"Medium","strong":"Strong","mismatch":"Mismatch"};
/* ]]> */
</script>
<script type='text/javascript' src='../../wp-admin/js/password-strength-meter.min.js?ver=4.9.2'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var wc_password_strength_meter_params = {"min_password_strength":"3","i18n_password_error":"Please enter a stronger password.","i18n_password_hint":"Hint: The password should be at least twelve characters long. To make it stronger, use upper and lower case letters, numbers, and symbols like ! \" ? $ % ^ & )."};
/* ]]> */
</script>
<script type='text/javascript' src='../../wp-content/plugins/woocommerce/assets/js/frontend/password-strength-meter.min.js?ver=3.5.9'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var woocommerce_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%"};
/* ]]> */
</script>
<script type='text/javascript' src='../../wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.min.js?ver=3.5.9'></script>
<script type='text/javascript' src='../../wp-content/plugins/woocommerce/assets/js/frontend/lost-password.min.js?ver=3.5.9'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var wc_cart_fragments_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%","cart_hash_key":"wc_cart_hash_0f83e90d78993e144869586176d651dc","fragment_name":"wc_fragments_0f83e90d78993e144869586176d651dc"};
/* ]]> */
</script>
<script type='text/javascript' src='../../wp-content/plugins/woocommerce/assets/js/frontend/cart-fragments.min.js?ver=3.5.9'></script>
<script type='text/javascript' src='../../recaptcha/api.js?render=6LdDdc8ZAAAAAHKEPeXwietPjCqulm_AXn3n2Md1&#038;ver=3.0'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var thickboxL10n = {"next":"Next >","prev":"< Prev","image":"Image","of":"of","close":"Close","noiframes":"This feature requires inline frames. You have iframes disabled or your browser does not support them.","loadingAnimation":"https:\/\/www.mreliefworldwide.org\/wp-includes\/js\/thickbox\/loadingAnimation.gif"};
/* ]]> */
</script>
<script type='text/javascript' src='../../wp-includes/js/thickbox/thickbox.js?ver=3.1-20121105'></script>
<script type='text/javascript' src='../../wp-includes/js/wp-embed.min.js?ver=4.9.2'></script>
<script type="text/javascript">
( function( grecaptcha, sitekey, actions ) {

	var wpcf7recaptcha = {

		execute: function( action ) {
			grecaptcha.execute(
				sitekey,
				{ action: action }
			).then( function( token ) {
				var forms = document.getElementsByTagName( 'form' );

				for ( var i = 0; i < forms.length; i++ ) {
					var fields = forms[ i ].getElementsByTagName( 'input' );

					for ( var j = 0; j < fields.length; j++ ) {
						var field = fields[ j ];

						if ( 'g-recaptcha-response' === field.getAttribute( 'name' ) ) {
							field.setAttribute( 'value', token );
							break;
						}
					}
				}
			} );
		},

		executeOnHomepage: function() {
			wpcf7recaptcha.execute( actions[ 'homepage' ] );
		},

		executeOnContactform: function() {
			wpcf7recaptcha.execute( actions[ 'contactform' ] );
		},

	};

	grecaptcha.ready(
		wpcf7recaptcha.executeOnHomepage
	);

	document.addEventListener( 'change',
		wpcf7recaptcha.executeOnContactform, false
	);

	document.addEventListener( 'wpcf7submit',
		wpcf7recaptcha.executeOnHomepage, false
	);

} )(
	grecaptcha,
	'6LdDdc8ZAAAAAHKEPeXwietPjCqulm_AXn3n2Md1',
	{"homepage":"homepage","contactform":"contactform"}
);
</script>

			<div id="cookie-notice" role="banner" class="cn-top" style="color: #fff; background-color: #cc0000;"><div class="cookie-notice-container"><span id="cn-notice-text">This website uses <a href="https://www.mreliefworldwide.org/cookies/" target="_blank">cookies</a> and other technologies so that we can improve your experience on our sites.</span><a href="#" id="cn-accept-cookie" data-cookie-set="accept" class="cn-set-cookie cn-button cookie_banner_cancel_button"></a>
				</div>
				
			</div>
<script type="text/javascript">
     

     function quickdonate(id,link) {
		var var_image = $('#'+link+'appealimage'+id).val();
		var var_appealname = $('#'+link+'appealname'+id).val();
		var var_donation = $('#'+link+'donation'+id).val();
		var var_amount = $('#'+link+'amount'+id).val();
		var var_type = $('#'+link+'type'+id).val();
		
		
		
		
		if (var_amount.length > 0) {
		
		if (var_amount == "0") {alert("Amount must be greater then 0"); return false;}
		if(var_donation == '') {alert("Please select donation Frequency");return false;}
		
		  if (var_type !== "type") {
		
		  }else{alert('Please Select Donation Type'); return;}
		  
		}
		else{alert('Please Enter Amount'); return;}
		
		if (var_type === "type") {
		
		  alert('Please Select Donation Type'); return;
		
		  }
		
		
		for (var i = 0; i < var_amount.length; i++) {
			var thisChar = parseInt(var_amount[i]);
			if (isNaN(thisChar)) {
			  if (var_amount[i] !== '.') {
				alert("Please enter only numbers.");
					return false;
			  }
			
			}
		 }
		
		
		if (var_amount.length > 0 && var_type !== "type") {
		  jQuery(document).ready(function($) {
				$.ajax({
				  type: "POST",
				  url: "https://www.mreliefworldwide.org/wp-content/themes/girso/ajax_project.php",
					data: "action=add&appealimage="+var_image+"&appealname="+var_appealname+"&donation="+var_donation+"&amount="+var_amount+"&type="+var_type+"&appealid="+id+"",
				  cache: false,
				  success: function(response) {
				    $('#productholder').html(response);
					   resetbasketcloseclick();
					   showbasket();
				  }
				});
			  });
		}
}


   </script>
<!-- ==================================================================================== -->
<!-- ==================================================================================== -->
<!-- END QUICKDONATE -->
<!-- ==================================================================================== -->
<!-- ==================================================================================== -->
</div>
<!-- SCRIPTS -->
<script src="../../jquery-1.12.4.min.js"></script>
<script type="text/javascript" src="../../wp-content/themes/girso/js/sc_menu.js"></script>
<!-- <script type="text/javascript" src="/js/jquery.numeric.min.js"></script> -->
<script type="text/javascript" src="../../wp-content/themes/girso/js/fresco.js"></script>
<script type="text/javascript" src="../../wp-content/themes/girso/js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="../../wp-content/themes/girso/js/jquery.easytabs.js"></script>
<script type="text/javascript" src="../../wp-content/themes/girso/js/jquery.easytabs.min.js"></script>
<script type="text/javascript" src="../../wp-content/themes/girso/js/sliderResponsive.js"></script>
<script type="text/javascript" src="../../wp-content/themes/girso/js/form_select.js"></script>
<script type="text/javascript" src="../../wp-content/themes/girso/js/form_select_3.js"></script>
<script type="text/javascript" src="../../bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script language="javascript">
$(function() {
  $('#main-menu').smartmenus({
    subMenusSubOffsetX: 1,
    subMenusSubOffsetY: -8
  });
});

//================= Basket code ============
$(document).ready(function() {	
	$(function(){
    	$('.sc_basket_floating_panel_wrapper').css("display", "none");
	});	
    resetbasketcloseclick();
	$('.basket_icon').click(function(){
		showbasket();
		return false;
	});
});
function showbasket()
{
	$('.sc_basket_floating_panel_wrapper').css("visibility", "visible");
		$('body').css("overflow", "hidden");
		$('html').css("overflow", "hidden");
		$('.sc_basket_floating_panel_wrapper').show();
		$("#main-menu").css("display","none");
}
function resetbasketcloseclick()
{
	$('.sc_basket_header_img_close, .sc_basket_footer_continue_donation').off("click","**").on("click",function(){
		$('body').css("overflow", "auto");
		$('html').css("overflow", "auto");
		$('.sc_basket_floating_panel_wrapper').hide();
		$("#main-menu").css("display","");
		return false;
	});
}

//================= Basket code ============

// SmartMenus mobile menu toggle button
$(function() {
  var $mainMenuState = $('#main-menu-state');
  if ($mainMenuState.length) {
    // animate mobile menu
    $mainMenuState.change(function(e) {
      var $menu = $('#main-menu');
      if (this.checked) {
        $menu.hide().slideDown(150, function() { $menu.css('display', ''); });
      } else {
        $menu.show().slideUp(150, function() { $menu.css('display', ''); });
      }
    });
    // hide mobile menu beforeunload
    $(window).bind('beforeunload unload', function() {
      if ($mainMenuState[0].checked) {
        $mainMenuState[0].click();
      }
    });
  }
});

$(document).ready(function() {
  
  $("#slider1").sliderResponsive({
    fadeSpeed: 400,
    autoPlay: "on",
    showArrows: "off",
    hideDots: "off"
  });
  
}); 
</script>
<script type="text/javascript">
  $('.select-donation').click(function(){
   $('#select-your-fund').slideDown(1500);
  });
   $('.fund_button').click(function(){
    $('#select-your-amount').slideDown(1500);
  });
  $('.donation-basket-button').click(function(){
    $('#user-donation-details').slideDown(1500);
  });
  $('.show-gift-div').click(function(){
    $('#gift-aid').show();
  });
  $('.show-confirm-donation').click(function(){
    $('#confirm-donation').show();
  });
  $(".select-donation").click(function(){
    $(".salam_content_wrapper").slideDown();
});

    $('#checkout-button').click(function(){
    $('.custom-show').slideDown(1500);
  });




$(document).ready(function() {


$(window).resize(function(){
	$('#productholder').hide();
      if($('.qd_panel_wrapper').hasClass('slide-up')) {
        $('.qd_panel_wrapper').removeClass('slide-up'); 
      } else {
        $('.qd_panel_wrapper').removeClass('slide-down');
      }
  });


  $('.qd_open_tab').click(function() {
      if($('.qd_panel_wrapper').hasClass('slide-up')) {
        $('.qd_panel_wrapper').addClass('slide-down', 1000, 'easeOutBounce');
        $('.qd_panel_wrapper').removeClass('slide-up'); 
      } else {
        $('.qd_panel_wrapper').removeClass('slide-down');
        $('.qd_panel_wrapper').addClass('slide-up', 1000, 'easeOutBounce'); 
      }
  });
});


</script>
<script type="text/javascript">
  $(function() {  
$('.donation_button').click(function(){
    $(this).css('background', 'black');

  });
});
</script>

<script type="text/javascript">

    $(document).ready( function(){
      $('#subcat_tabs_container').easytabs({
    animationSpeed: 180})
    }); 


jQuery(document).ready(function($) {
       $.ajax({
         type: "POST",
         url: "https://www.mreliefworldwide.org/wp-content/themes/girso/ajax_project.php",
         //data: "action=add&appealid=1&amount=10&type=zakat&donation=single&appealname=easternGouta&appealimage=image1",
          data: "actionload=cartload",
         cache: false,
         success: function(response) {
          $('#productholder').html(response);
			resetbasketcloseclick();
          if (window.location.href.indexOf('checkout') > 0) {
            monthlyCheck();
            var carcount = $('#cartcount').html();
            if (carcount == "0") {$("#checkout-button").hide(); $("#divyourdetails").hide(); }
            $('#totalcheckoutvalue').val($('#cartamount').html());
            
          }
         
         }
       });
     });



// remove item from cart
function removeitem(id) {
  jQuery(document).ready(function($) {
        $.ajax({
          type: "POST",
          url: "https://www.mreliefworldwide.org/wp-content/themes/girso/ajax_project.php",
          //data: "action=add&appealid=1&amount=10&type=zakat&donation=single&appealname=easternGouta&appealimage=image1",
           data: "action=remove&key="+id+" ",
          cache: false,
          success: function(response) {
           $('#productholder').html(response);
		   resetbasketcloseclick();
           
           /// if the page is checkout
           if (window.location.href.indexOf('checkout') > 0) {
             var carcount = $('#cartcount').html();
           $("#checkrow_"+id).remove();
           $('#totalcheckout').html($('#cartamount').html());
           $('#totalsubcheckout').html($('#cartamount').html());
           //$('#totalcartcount').html('Donations ('+($('#cartcount').html()) + ')');
           $('#totalcartcount').html('Donations ('+carcount+ ')');
           $('#totalcheckoutvalue').val($('#cartamount').html());
                 monthlyCheck();
               if (carcount == "0") { 
                $("#checkout-button").hide(); $("#divyourdetails").hide();
               }

           }

            ///

          }
        });
      });


}
</script>
<!-- Script For Sidebar Toggle Start -->
<script>
function myFunction() {
    var x = document.getElementById("navlist");
    if (x.style.display === "block") {
        x.style.display = "none";
    } else {
        x.style.display = "block";
    }
}

$(document).ready(function(){
    $("#menu_side").click(function(){
        $("#three_bar_link_side").toggleClass("clicked");
    });

	
});



</script>
<script src="../../wp-content/themes/girso/js/custom_js.js" type="text/javascript"></script>
<!-- Sigle Appeal Donation -->
<script type="text/javascript">

    $(document).ready(function(){
		$("#main_container").prepend($("#slider1"));
		$(".header_donate_button").attr("href",$("#menu-item-173 a").attr("href"));
		$("#menu-item-173").css("display","none");
		
        $('#other_button .selector_checkmark').click(function(){
            $(".selector_numeric_entry").slideToggle(200);
        });
		
		$('#other_button_1 .selector_checkmark').click(function(){
            $(".selector_numeric_entry_1").slideToggle(200);
        });


        $('#close_toggle_1 .selector_checkmark').click(function(){
            $(".selector_numeric_entry").slideUp(200);
			$(".selector_numeric_entry_1").slideUp(200);
        });

        $('#close_toggle_2 .selector_checkmark').click(function(){
            $(".selector_numeric_entry").slideUp(200);
			$(".selector_numeric_entry_1").slideUp(200);
        });
    
    $('#close_toggle_3 .selector_checkmark').click(function(){
            $(".selector_numeric_entry").slideUp(200);
			$(".selector_numeric_entry_1").slideUp(200);
        });
    
    $('#close_toggle_4 .selector_checkmark').click(function(){
            $(".selector_numeric_entry").slideUp(200);
			$(".selector_numeric_entry_1").slideUp(200);
        });
    
    $('#close_toggle_5 .selector_checkmark').click(function(){
            $(".selector_numeric_entry").slideUp(200);
			$(".selector_numeric_entry_1").slideUp(200);
        });


	jQuery("li#menu-item-1937 a").click(function(event) {
		//event.preventDefault();
		var url      = window.location.href; 
		if(url == 'https://www.mreliefworldwide.org/appeals/'){
				jQuery("li.tab_col.tab_col_appeals a.tab_two").trigger( "click" );
   				jQuery('html, body').animate({
					scrollTop: jQuery("#subcat_tabs_container").offset().top
				}, 1000);
				
			}
	});

    });




</script>
<!-- Single Appeal donation end -->
<!-- Script For Sidebar Toggle END -->
<!-- ==================================================================================== -->
<!-- ==================================================================================== -->
<!-- END SCRIPTS -->
<!-- ==================================================================================== -->
<!-- ==================================================================================== -->
<!-- Google Code for Remarketing Tag -->
<!--
Remarketing tags may not be associated with personally identifiable information or placed on pages related to sensitive categories. See more information and instructions on how to setup the tag on: http://google.com/ads/remarketingsetup
-->
<script type="text/javascript">

/* <![CDATA[ */
var google_conversion_id = 808754039;
var google_custom_params = window.google_tag_params;
var google_remarketing_only = true;
/* ]]> */
</script>
<script type="text/javascript" src="../../pagead/f.txt"></script>




<noscript>
<div style="display:inline;"> <img height="1" width="1" style="border-style:none;" alt="" src="../../pagead/1p-user-list/808754039/index.htm.gif?guid=ON&amp;script=0"> </div>
</noscript>
</div></body></html><style>
.vc_tta.vc_general
{
	font-family: din400, "din400 Regular", Helvetica, Arial, sans-serif!important;
    font-style: normal!important;
    font-size: 17px!important;
    line-height: 25px!important;
    color: #333333!important;
    text-decoration: none!important;
}
</style>
