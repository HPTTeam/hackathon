<?php
    header('Content-type: text/css; charset: UTF-8');
    header('Cache-Control: must-revalidate');
    header('Expires: ' . gmdate('D, d M Y H:i:s', time() + 3600) . ' GMT');
    $url = $_REQUEST['url'];
?>

.mobilemenu>li.first {
	-webkit-border-radius: 4px 4px 0 0;
	-moz-border-radius: 4px 4px 0 0;
	border-radius: 4px 4px 0 0;
	behavior: url(<?php echo $url; ?>css/css3.htc);
	position: relative;
}
.mobilemenu>li.last {
	-webkit-border-radius:0 0 4px 4px;
	-moz-border-radius: 0 0 4px 4px;
	border-radius: 0 0 4px 4px;
	behavior: url(<?php echo $url; ?>css/css3.htc);
	position: relative;
}
#Example_F {
	-moz-box-shadow: 0 0 5px 5px #888;
	-webkit-box-shadow: 0 0 5px 5px #888;
	box-shadow: 0 0 5px 5px #888;
}
.header .currency-header ul li a {
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    border-radius: 5px;
    behavior: url(<?php echo $url; ?>css/css3.htc);
}
.footer-static .block-subscribe input.input-text { box-shadow:none;}
.header .form-search,.block-layered-nav dd ,.block .block-content,.pager .sort-by select,.pager .limiter select,.ma-upsellslider-container .upsell-item { border-radius:2px;}
.header .form-search button.button,.header .form-search button.button span, #search_price span,.products-list .box-list,.block-currency .block-content select,.language_curency #select-language
,.product-view .product-img-box .product-image,.top-cart-content,.product-view .product-img-box .more-views li a,.responisve-container p a, .footer-static .block-subscribe input.input-text,.footer-static .block-subscribe .actions .button span,.product_view_addtocart .add-to-cart .qty,.ma-relatedslider-container .carousel .relatedslider-item{
   border-radius:2px;
}
.top-cart-content { box-shadow:0;}
.banner-static-center .static-link a { border-radius:2px; }
.ma-upsellslider-container .flexslider { border-radius:5px; }
.opc .active .step-title  { border-radius:5px 5px 0 0; }
.opc .step { border-radius:0 0 5px 5px; }
.opc .step-title { border-radius:5px; }
.main { border-radius:5px; }
.block_static_top { box-shadow:0 7px 11px -9px;}
.header-cart  { border-radius:20px;}
.top-cart-contain { border-radius:5px 0 0 5px;}
.nivo-directionNav a,.ma-featuredproductslider-container .flex-direction-nav a,.ma-brand-slider-contain .flex-direction-nav a,.ma-upsellslider-container .flex-direction-nav a
,.fraction-slider .prev ,.fraction-slider .next{ border-radius:30px;}
#back-top {
    border-radius:30px;
    -moz-transition: all 0.3s ease-in-out 0s;
    transition: all 0.3s ease-in-out;
}
#back-top:hover {
    -moz-transition: all 0.3s ease 0s;
}
.ma-demo-wrap .ma-demo-option  {border-radius:3px;}
.nivo-directionNav a,.header .form-search button.button span,.pt_custommenu .itemMenu h4.level1, .pt_custommenu .itemMenu a.level1,
.pt_custommenu div.pt_menu .parentMenu a, .pt_custommenu div.pt_menu .parentMenu span.block-title,.pt_custommenu .itemSubMenu h4.level2, .pt_custommenu .itemSubMenu a.level2, .pt_custommenu .itemSubMenu h4.level3, .pt_custommenu .itemSubMenu a.level3, .pt_custommenu .itemMenu a.level1.nochild
,.responisve-container p a,button.button.btn-cart span,.product-name a,.ma-tabs-title a,.banner-static-center .static-link a
,.link-wishlist,.link-compare,.footer-static li a,.footer-static .block-subscribe .actions .button span,#search_price span
,.block .block-content a,button.btn-checkout span,.header-top .links .first a,.header-top .links li a.top-link-cart
,.header-top .links li a.top-link-checkout,.header-top .links li.last a,.email-friend a,.header-icon .google a,.header-icon .dribbe a,.header-icon .facebook a,.header-icon .flow a,.header-icon .twiter a {
    -moz-transition: all 0.4s ease-in-out 0s;
    transition: all 0.4s ease-in-out;
}
.ma-banner7-container .flexslider .nivo-nextNav:hover , .pt_custommenu div.pt_menu .parentMenu a:hover,
.pt_custommenu div.pt_menu .parentMenu span.block-title:hover,
.pt_custommenu #pt_menu_link ul li a.act,
.pt_custommenu #pt_menu_link ul li a:hover,.pt_custommenu .itemMenu h4.level1:hover, .pt_custommenu .itemMenu a.level1:hover ,
.ma-banner7-container .flexslider .nivo-prevNav:hover,.header .form-search button.button:hover span,.pt_custommenu .itemSubMenu a.level2:hover,
.pt_custommenu .itemMenu a.level1.nochild:hover,.responisve-container p a:hover,button.button.btn-cart:hover span,
.product-name a:hover,.ma-tabs-title li.active a, .ma-tabs-title a:hover,.banner-static-center .static-link a:hover,
.link-wishlist:hover,.link-compare:hover,.footer-static li a:hover,.footer-static .block-subscribe .actions .button:hover span
,#search_price:hover span,.block .block-content a:hover,button.btn-checkout:hover span,.header-top .links .first a:hover,.header-top .links li a.top-link-cart:hover
,.header-top .links li a.top-link-checkout:hover,.header-top .links li.last a:hover
,.header-icon .google a:hover,.header-icon .dribbe a:hover,.email-friend a:hover,.header-icon .facebook a:hover,.header-icon .flow a:hover,.header-icon .twiter a:hover {
    -moz-transition: all 0.4s ease 0s;
}
.ma-thumbnail-container .flex-direction-nav a { border-radius:20px !important;}
.top-cart-wrapper { border-radius:5px 0 0 5px; }
.banner7-readmore a {
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    border-radius: 5px;
    behavior: url(<?php echo $url; ?>css/css3.htc);
}
.footer_subscribe .block-content {
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    border-radius: 5px;
    behavior: url(<?php echo $url; ?>css/css3.htc);
}
.footer_subscribe .block-subscribe .actions button.button span {
    -moz-border-radius-topright: 4px;
    -webkit-border-top-right-radius: 4px;
    border-top-right-radius: 4px;
    -moz-border-radius-bottomright: 4px;
    -webkit-border-bottom-right-radius: 4px;
    border-bottom-right-radius: 4px;
    behavior: url(<?php echo $url; ?>css/css3.htc);
}
button.button.btn-cart span { border-radius:3px;}
.products-grid .item .actions,.products-grid .item {
    transition: 0.25s ease-out;
-moz-transition: 0.25s ease-out;
-webkit-transition: 0.25s ease-out;
}
/*.product_item:hover .actions button.button.btn-cart span,.product_item .actions .add-to-links li a,button.button span,.nivo-controlNav a {
    -moz-transition: all 0.5s ease-in-out; 
    -webkit-transition: all 0.5s ease-in-out;
    -o-transition: all 0.5s ease-in-out;
    -ms-transition: all 0.5s ease-in-out;
    transition: all 0.5s ease-in-out;
}*/
.ma-newproductslider-container .flex-direction-nav a , .ma-upsellslider-container .flex-direction-nav a , .ma-thumbnail-container .flex-direction-nav a ,.ma-relatedslider-container .flex-direction-nav a , .ma-featuredproductslider-container .flex-direction-nav a ,.ma-brand-slider-contain .flex-direction-nav a,a.follow_us_text .icon_floow_us {
    -moz-transition: all 0.2s ease-in-out; 
    -webkit-transition: all 0.2s ease-in-out;
    -o-transition: all 0.2s ease-in-out;
    -ms-transition: all 0.2s ease-in-out;
    transition: all 0.2s ease-in-out;
}
.block_static_top a img {
    -webkit-transition-duration: 0.5s;
    -moz-transition-duration: 0.5s;
    -ms-transition-duration: 0.5s;
    -o-transition-duration: 0.5s;
    transition-duration: 0.5s;
}
.block_static_top:hover a img {
    transform: scale(1.2); /* opera not support rotateX */
    -ms-transform: scale(1.2); 
    -moz-transform: scale(1.2);
    -webkit-transform: scale(1.2);
    -o-transform: scale(1.2);
}
/*.products-grid .btn-cart span {
   -webkit-transition-duration: 0.5s;
    -moz-transition-duration: 0.5s;
    -ms-transition-duration: 0.5s;
    -o-transition-duration: 0.5s;
    transition-duration: 0.5s; 
}*/
.products-grid .btn-cart:hover span {
    /*transform: scale(1.1);*/ /* opera not support rotateX */
    /*-ms-transform: scale(1.1); 
    -moz-transform: scale(1.1);
    -webkit-transform: scale(1.1);
    -o-transform: scale(1.1);*/
}
/*.ma-featuredproductslider-container .btn-cart span {
     -webkit-transition-duration: 0.5s;
    -moz-transition-duration: 0.5s;
    -ms-transition-duration: 0.5s;
    -o-transition-duration: 0.5s;
    transition-duration: 0.5s; 
}
.ma-featuredproductslider-container .btn-cart:hover span {
    transform: scale(1.1); 
    -ms-transform: scale(1.1); 
    -moz-transform: scale(1.1);
    -webkit-transform: scale(1.1);
    -o-transform: scale(1.1);
}*/
.pager .pages .current {
    -webkit-border-radius: 15px;
    -moz-border-radius: 15px;
    border-radius: 15px;
    behavior: url(<?php echo $url; ?>css/css3.htc);
}
.banner-static-contain .banner-box img {
    cursor: pointer;
     -moz-transition:all .3s ease-out;
    -webkit-transform: scale(1);
    -webkit-transition: all .3s ease-out;
    transition: all .2s ease-in;
}
.banner-static-contain .banner-box img:hover {
    -webkit-transform: scale(1.3);
    -webkit-transition: all .3s ease-out;
}
.ma-new-products .products-grid .item-inner .actions {
    transition: left 0.5s ease-out;
    -webkit-transition: left 0.5s ease-out;
    -moz-transition: left 0.5s ease-out;
}
.ma-new-products .products-grid .item-inner:hover .actions {
    left: 95px;
    transition: left 0.5s ease-out;
    -webkit-transition: left 0.5s ease-out;
    -moz-transition: left 0.5s ease-out;
}
.category-products .item .actions{
   transition: left 0.5s ease-out;
    -webkit-transition: left 0.5s ease-out;
    -moz-transition: left 0.5s ease-out; 
}
.category-products .item:hover  .actions {
    transition: left 0.5s ease-out;
    -webkit-transition: left 0.5s ease-out;
    -moz-transition: left 0.5s ease-out;
}