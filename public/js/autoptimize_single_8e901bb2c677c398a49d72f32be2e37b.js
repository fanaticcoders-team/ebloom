(function($){"use strict";var rigid_ajaxXHR=null;var is_mailto_or_tel_link=false;if(rigid_main_js_params.show_preloader){$(window).load(function(){$("#loader").delay(100).fadeOut();$(".mask").delay(300).fadeOut();});}
$(window).load(function(){checkRevealFooter();defineMegaMenuSizing();$("html.no-touch div.owl-item, html.no-touch .rigid_woo_categories_shop div.product-category.product, div.woocommerce > div.product-category.product").hover(function(){$(this).siblings().stop().addClass('rigid_bw_filter')},function(){$(this).siblings().stop().removeClass('rigid_bw_filter')})});$(document).ready(function(){$('.box-sort-filter .woocommerce-ordering .limit select, .box-sort-filter .woocommerce-ordering .sort select, .widget_archive select, .widget_categories select').niceSelect();$('h1,h2,h3,h4,h5,h6').each(function(){$(this).html($(this).html().replace(/&nbsp;/gi,''));});$('.rigid-pricing-heading h5, .rigid-iconbox h5, .vc_custom_heading').each(function(){$(this).html($(this).html().replace(".",'<span class="rigid-spec-dot">.</span>'));});$('.woocommerce-review-link').on('click',function(event){$('#tab-reviews').trigger('click');$('html, body').animate({scrollTop:$(".woocommerce-tabs").offset().top-105},1200,'swing');});$('#wrap a.cloud-zoom img').removeAttr('srcset');$("div.summary.entry-summary table.variations td:has(div.rigid-wcs-swatches) ").addClass("rigid-has-swatches-option");$("ul#topnav li:has(ul), ul#topnav2 li:has(ul), ul.menu li:has(ul) ").addClass("dropdown");$("#header:has(div#header_top) ").addClass("rigid-has-header-top");$("ul.menu li:has(div)").addClass("has-mega");$("#header_top .inner:has(div#menu)").addClass("has-top-menu");$("#header .main_menu_holder:has(div#main-menu)").addClass("has-main-menu");$('#header #cart-module div.widget.woocommerce.widget_shopping_cart').prependTo('body');$('.summary.entry-summary div#report_abuse_form.simplePopup').appendTo('body');$('body > div.widget.woocommerce.widget_shopping_cart').prepend('<span class="close-cart-button"></span>');$('body > #search').prepend('<span class="close-search-button"></span>');$('.count').text(function(_,text){return text.replace(/\(|\)/g,'');});if((rigid_main_js_params.sticky_header)&&($('#container').has('#header').length)){rigidStickyHeaderInit();}
$('body.rigid_logo_center_menu_below #header .rigid-search-cart-holder, body.rigid_logo_left_menu_below #header .rigid-search-cart-holder').prependTo('#header #main-menu');defineCartIconClickBehaviour();var customTitleHeight=$('body.rigid_transparent_header #header').height();$('body.rigid_transparent_header:not(.rigid_header_left) .rigid_title_holder .inner').css("padding-top",customTitleHeight+250);var customTitleHeight2=$('body.rigid-overlay-header #header').height();$('body.rigid-overlay-header:not(.rigid_header_left) .rigid_title_holder .inner').css("padding-top",customTitleHeight2+250);$('#header .rigid-search-trigger a, .close-search-button').on('click',function(event){event.stopPropagation();$("body > #search").toggleClass("active");setTimeout(function(){$("body > #search.active input#s").focus();},500);});$('#main-menu .rigid-mega-menu').css("display","");$('p.demo_store').prependTo('#header');$("#header #rigid-account-holder.rigid-user-not-logged > a").on('click',function(event){event.preventDefault();event.stopPropagation();$("#header .rigid-header-account-link-holder").toggleClass("active");});$("#header .rigid-header-account-link-holder .woocommerce:has(ul.woocommerce-error)").each(function(){$("#header .rigid-header-account-link-holder").addClass("active");});if(rigid_main_js_params.my_account_display_style==='carousel'){$('body.woocommerce-account #customer_login.col2-set, .woocommerce #customer_login.u-columns.col2-set').addClass('owl-carousel');var is_rtl=false;if(rigid_main_js_params.is_rtl==='true'){is_rtl=true;}
$("body.woocommerce-account #customer_login.col2-set, .woocommerce #customer_login.u-columns.col2-set").owlCarousel({rtl:is_rtl,items:1,dots:false,mouseDrag:false,nav:true,navText:[rigid_main_js_params.login_label,rigid_main_js_params.register_label]});}
$('.rigid-header-account-link-holder .woocommerce #customer_login.u-columns.col2-set, #rigid_mobile_account_tab .woocommerce #customer_login.u-columns.col2-set').addClass('owl-carousel');var is_rtl=false;if(rigid_main_js_params.is_rtl==='true'){is_rtl=true;}
$(".rigid-header-account-link-holder .woocommerce #customer_login.u-columns.col2-set, #rigid_mobile_account_tab .woocommerce #customer_login.u-columns.col2-set").owlCarousel({rtl:is_rtl,items:1,dots:false,mouseDrag:false,nav:true,navText:[rigid_main_js_params.login_label,rigid_main_js_params.register_label]});$(".mob-menu-toggle, .mob-close-toggle, ul#mobile-menu.menu li:not(.menu-item-has-children) a").on('click',function(event){event.stopPropagation();$("#menu_mobile").toggleClass("active");});$("ul#mobile-menu.menu .menu-item a").each(function(){if($(this).html()=="–"){$(this).remove();}});$("ul#mobile-menu.menu > li.menu-item-has-children:not(.current-menu-item) > a").prepend('<span class="drop-mob">+</span>');$("ul#mobile-menu.menu > li.menu-item-has-children.current-menu-item > a").prepend('<span class="drop-mob">-</span>');$("ul#mobile-menu.menu > li.menu-item-has-children > a .drop-mob").on('click',function(event){event.preventDefault();$(this).closest('li').find('ul.sub-menu').toggleClass("active");var $activeSubmenus=$(this).closest('li').find('ul.sub-menu.active');if($activeSubmenus.length){$(this).html("-");}else if(!$(this).closest('li').hasClass('current-menu-item')){$(this).html("+");}});$(document).on('click',function(e){if(!$(e.target).closest('.widget_shopping_cart').hasClass('active_cart')){$("body > div.widget.woocommerce.widget_shopping_cart").removeClass("active_cart");}
if(!$(e.target).closest('#menu_mobile').hasClass('active')){$("#menu_mobile").removeClass("active");}
if(!$(e.target).closest('#search').hasClass('active')){$("#search.active").removeClass("active");}
if(!$(e.target).closest('.off-canvas-sidebar').hasClass('active_sidebar')){$(".sidebar.off-canvas-sidebar").removeClass("active_sidebar");}
if(!$(e.target).closest('.rigid-header-account-link-holder').hasClass('active')){$(".rigid-header-account-link-holder").removeClass("active");}});$(".video_controlls a#video-volume").on('click',function(){$(".video_controlls a#video-volume").toggleClass("disabled");});$(document.body).find('a[href="#"], a.cloud-zoom').on('click',function(event){event.preventDefault();});$('.gallery-item a[href$=".jpg"], .gallery-item a[href$=".png"], .gallery-item a[href$=".gif"]').magnificPopup({mainClass:'mfp-fade',type:'image'});$('a[href$=".mov"] , a[href$=".swf"], a[href$=".mp4"], a[href*="vimeo.com/"], a[href*="youtube.com/watch"]').magnificPopup({disableOn:700,type:'iframe',mainClass:'mfp-fade is-rigid-video',removalDelay:160,preloader:false,fixedContentPos:false});$(".prod_hold a.add_to_wishlist").prop("title",function(){return $(this).data("title");});$(document).find("a#toggle_switch").on("click",function(){var $togglerone=$(this).siblings("#togglerone");if($(this).hasClass("swap")){$(this).removeClass("swap")
$togglerone.slideToggle("slow");}else{$(this).addClass("swap");$togglerone.slideToggle("slow");}});if(!document.getElementById("rigid_page_title")){$('body').addClass('page-no-title');}else{$('body').addClass('page-has-title');}
$('body.page-no-title .sidebar-trigger, body.rigid-accent-tearoff .sidebar-trigger').prependTo('#header .rigid-search-cart-holder');if($('div#rigid_page_title .inner').has('div.breadcrumb').length){$('.video_controlls').appendTo('div.breadcrumb');}else{$('.video_controlls').prependTo('#header .rigid-search-cart-holder');}
$('.sidebar-trigger, .close-off-canvas').on('click',function(event){event.stopPropagation();$(".off-canvas-sidebar").toggleClass("active_sidebar");});$('a.rigid-filter-widgets-triger').on("click",function(){$('#rigid-filter-widgets').slideToggle("slow");return false;},function(){$('#rigid-filter-widgets').slideToggle("slow");return false;});$(".pull-item.left, .pull-item.right").hover(function(){$(this).addClass('active');},function(){$(this).removeClass('active');});$('html.no-touch .rigid-from-bottom').each(function(){$(this).appear(function(){$(this).delay(300).animate({opacity:1,bottom:"0px"},500);});});$('html.no-touch .rigid-from-left').each(function(){$(this).appear(function(){$(this).delay(300).animate({opacity:1,left:"0px"},500);});});$('html.no-touch .rigid-from-right').each(function(){$(this).appear(function(){$(this).delay(300).animate({opacity:1,right:"0px"},500);});});$('html.no-touch .rigid-fade').each(function(){$(this).appear(function(){$(this).delay(300).animate({opacity:1},700);});});$('html.no-touch div.prod_hold, html.no-touch .wpb_rigid_banner:not(.rigid-from-bottom), html.no-touch .wpb_rigid_banner:not(.rigid-from-left), html.no-touch .wpb_rigid_banner:not(.rigid-from-right), html.no-touch .wpb_rigid_banner:not(.rigid-fade)').each(function(){$(this).appear(function(){$(this).addClass('prod_visible').delay(800);});});$('.rigid-counter:not(.already_seen)').each(function(){$(this).appear(function(){$(this).prop('Counter',0).animate({Counter:$(this).text()},{duration:3000,decimals:2,easing:'swing',step:function(now){$(this).text(Math.ceil(now).toLocaleString('en'));}});$(this).addClass('already_seen');});});if(rigid_main_js_params.page_title_fade==='yes'){$(window).scroll(function(){$("html.no-touch .rigid_title_holder.title_has_image .inner").css("opacity",1-$(window).scrollTop()/375);});}
$.rigid_widget_columns();$('select.per_page').change(function(){$('.woocommerce-ordering').trigger("submit");});function addQty(){var input=$(this).parent().find('input[type=number]');if(isNaN(input.val())){input.val(0);}
input.val(parseInt(input.val())+1);}
function subtractQty(){var input=$(this).parent().find('input[type=number]');if(isNaN(input.val())){input.val(1);}
if(input.val()>1){input.val(parseInt(input.val())-1);}}
$(".rigid-qty-plus").on('click',addQty);$(".rigid-qty-minus").on('click',subtractQty);if($('#cart-module').length!==0){track_ajax_add_to_cart();$('body').bind('added_to_cart',update_cart_dropdown);}
$(".rigid-latest-grid.rigid-latest-blog-col-3 div.post:nth-child(3n)").after("<div class='clear'></div>");$(".rigid-latest-grid.rigid-latest-blog-col-2 div.post:nth-child(2n)").after("<div class='clear'></div>");$(".rigid-latest-grid.rigid-latest-blog-col-4 div.post:nth-child(4n)").after("<div class='clear'></div>");$(".rigid-latest-grid.rigid-latest-blog-col-5 div.post:nth-child(5n)").after("<div class='clear'></div>");$(".rigid-latest-grid.rigid-latest-blog-col-6 div.post:nth-child(6n)").after("<div class='clear'></div>");$('div#comments').each(function(){if($(this).children().length==0){$(this).hide();}});var scrollDuration=0;if(rigid_main_js_params.enable_smooth_scroll){scrollDuration=1500;}
$("li.menu-item a[href*='#']:not([href='#']), #content > .inner .wpb_text_column a[href*='#']:not([href='#']), a.vc_btn3[href*='#']:not([href='#']), .vc_icon_element a[href*='#']:not([href='#'])").on('click',function(){if(location.pathname.replace(/^\//,'')==this.pathname.replace(/^\//,'')&&location.hostname==this.hostname){var target=$(this.hash);target=target.length?target:$('[name='+this.hash.slice(1)+']');if(target.length){$('html,body').animate({scrollTop:target.offset().top-75},scrollDuration,'swing');}
return false;}});if(rigid_main_js_params.enable_ajax_add_to_cart==='yes'){$(document).on('click','.single_add_to_cart_button',function(e){var $add_to_cart_form=$(this).closest('form.cart');if($add_to_cart_form.length){var is_variable=$add_to_cart_form.hasClass('variations_form');var is_grouped=$add_to_cart_form.hasClass('grouped_form');var is_external=$add_to_cart_form.prop('method')==='get';}else{return true;}
if(!is_grouped&&!is_external){if($add_to_cart_form[0].checkValidity()){e.preventDefault();}else{return true;}
if(!$(this).is('.wc-variation-is-unavailable,.wc-variation-selection-needed')){var quantity=$add_to_cart_form.find('input[name="quantity"]').val();var product_id;if(is_variable){product_id=$add_to_cart_form.find('input[name="add-to-cart"]').val();}else{product_id=$add_to_cart_form.find('button[name="add-to-cart"]').val();}
var data={product_id:product_id,quantity:quantity,product_sku:""};var $thisbutton=$(this);$(document.body).trigger('adding_to_cart',[$thisbutton,data]);$thisbutton.addClass('loading');$thisbutton.prop('disabled',true);var add_to_cart_ajax_data={};add_to_cart_ajax_data.action='rigid_wc_add_cart';if(product_id){add_to_cart_ajax_data["add-to-cart"]=product_id;}
$.ajax({url:rigid_main_js_params.admin_url,type:'POST',data:$add_to_cart_form.serialize()+"&"+$.param(add_to_cart_ajax_data),success:function(results){if(rigid_main_js_params.cart_redirect_after_add==='yes'){window.location=rigid_main_js_params.cart_url;}else{if("error_message"in results){alert(results.error_message);}else{$(document.body).trigger('added_to_cart',[results.fragments,results.cart_hash,$thisbutton]);}}},complete:function(jqXHR,status){$thisbutton.removeClass('loading');$thisbutton.prop('disabled',false);}});}}else{return true;}});}
rigidInitSmallCountdowns($('div.prod_hold'));if(rigid_main_js_params.enable_infinite_on_shop==='yes'){var $pagination=$('#products-wrapper').find('div.pagination');$pagination.hide();if(rigid_main_js_params.use_load_more_on_shop==='yes'){$('body').on('click','div.rigid-shop-pager.rigid-infinite button.rigid-load-more',function(e){$(this).hide();$('body').find('div.rigid-shop-pager.rigid-infinite a.next_page').trigger("click");});}else{$(window).on("scroll",function(){if($('body').find('div.rigid-shop-pager.rigid-infinite').is(':in-viewport')){$('body').find('div.rigid-shop-pager.rigid-infinite a.next_page').trigger("click");}});}
$('body').on('click','div.rigid-shop-pager.rigid-infinite a.next_page',function(e){e.preventDefault();if($(this).data('requestRunning')){return;}
$(this).data('requestRunning',true);var $products=$('#products-wrapper').find('div.box-products.woocommerce');var $pageStatus=$pagination.prevAll('.rigid-page-load-status');$pageStatus.children('.infinite-scroll-last').hide();$pageStatus.children('.infinite-scroll-request').show();$pageStatus.show();$.get($(this).prop('href'),function(response){$.rigid_refresh_products_after_ajax(response,$products,$pagination,$pageStatus);$(document.body).trigger('rigid_shop_ajax_loading_success');});});}
if(typeof rigid_portfolio_js_params!=='undefined'){var $container=$('div.portfolios','#main');var $isotopedGrid=$container.isotope({itemSelector:'div.portfolio-unit',layoutMode:'masonry',transitionDuration:'0.5s'});$isotopedGrid.imagesLoaded().progress(function(){$isotopedGrid.isotope('layout');});$('.rigid-portfolio-categories').on('click','a',function(){var filterValue=$(this).prop('data-filter');$isotopedGrid.isotope({filter:filterValue});});$('div.rigid-portfolio-categories','#main').each(function(i,buttonGroup){var $buttonGroup=$(buttonGroup);$buttonGroup.on('click','a',function(){$buttonGroup.find('.is-checked').removeClass('is-checked');$(this).addClass('is-checked');});});if(rigid_portfolio_js_params.enable_portfolio_infinite==='yes'){var $pagination=$('div.portfolio-nav').find('div.pagination');$pagination.hide();if(rigid_portfolio_js_params.use_load_more_on_portfolio==='yes'){$('body').on('click','div.portfolio-nav.rigid-infinite button.rigid-load-more',function(e){$(this).hide();$pagination.find('a.next_page').trigger("click");});}else{$(window).on("scroll",function(){if($('body').find('div.portfolio-nav.rigid-infinite').is(':in-viewport')){$pagination.find('a.next_page').trigger("click");}});}
$('body').on('click','div.portfolio-nav.rigid-infinite a.next_page',function(e){e.preventDefault();if($(this).data('requestRunning')){return;}
$(this).data('requestRunning',true);var $pageStatus=$pagination.prevAll('.rigid-page-load-status');$pageStatus.children('.infinite-scroll-last').hide();$pageStatus.children('.infinite-scroll-request').show();$pageStatus.show();$.get($(this).prop('href'),function(response){var $newPortfolios=$(response).find('.content_holder').find('.portfolio-unit');var $pagination_html=$(response).find('.portfolio-nav .pagination').html();$pagination.html($pagination_html);$newPortfolios.imagesLoaded(function(){$isotopedGrid.isotope('insert',$newPortfolios);});$isotopedGrid.isotope('on','layoutComplete',function(isoInstance,laidOutItems){$('a.portfolio-lightbox-link').magnificPopup({mainClass:'mfp-fade',type:'image'});});$pagination.find('a.next_page').data('requestRunning',false);$pageStatus.children('.infinite-scroll-request').hide();$(document.body).trigger('rigid_portfolio_ajax_loading_success');if(!$pagination.find('a.next_page').length){$pageStatus.children('.infinite-scroll-last').show();$('button.rigid-load-more').hide();}else{$('button.rigid-load-more').show();}});});}}
if(rigid_main_js_params.use_product_filter_ajax==='yes'){var woocommerceOrderingForm=$(document.body).find('form.woocommerce-ordering');if(woocommerceOrderingForm.length){woocommerceOrderingForm.on('submit',function(e){e.preventDefault();});$(document.body).on('change','form.woocommerce-ordering select.orderby, form.woocommerce-ordering select.per_page',function(e){e.preventDefault();var currentUrlParams=window.location.search;var url=window.location.href.replace(window.location.search,'')+rigidUpdateUrlParameters(currentUrlParams,woocommerceOrderingForm.serialize());$(document.body).trigger('rigid_products_filter_ajax',[url,woocommerceOrderingForm]);});}
$(document.body).find('#rigid-price-filter-form').on('submit',function(e){e.preventDefault();});$(document.body).on('price_slider_change',function(event,ui){var form=$('.price_slider').closest('form').get(0);var $form=$(form);var currentUrlParams=window.location.search;var url=$form.prop('action')+rigidUpdateUrlParameters(currentUrlParams,$form.serialize());$(document.body).trigger('rigid_products_filter_ajax',[url,$(this)]);});$(document.body).on('click','div.rigid_product_filter a',function(e){e.preventDefault();var url=$(this).prop('href');$(document.body).trigger('rigid_products_filter_ajax',[url,$(this)]);});$(document.body).on('click','a.rigid-reset-filters',function(e){e.preventDefault();var url=$(this).prop('href');$(document.body).trigger('rigid_products_filter_ajax',[url,$(this)]);});}
$(document.body).on('click','div.widget_rigid_contacts_widget a, div.rigid-top-bar-message a',function(e){is_mailto_or_tel_link=true;});$(document.body).on('click','div.rigid-share-links a',function(e){window.open(this.href,'targetWindow','toolbar=no,location=0,status=no,menubar=no,scrollbars=yes,resizable=yes,width=600,height=300');return false;});$("body").on("added_to_wishlist",function(){var wishNumberSpan=$("span.rigid-wish-number");if(wishNumberSpan.length){var wishNum=parseInt(wishNumberSpan.html(),10);if(!isNaN(wishNum)){wishNumberSpan.html(wishNum+1);}}});$("body").on("removed_from_wishlist",function(){var wishNumberSpan=$("span.rigid-wish-number");if(wishNumberSpan.length){var wishNum=parseInt(wishNumberSpan.html(),10);if(!isNaN(wishNum)&&wishNum>0){wishNumberSpan.html(wishNum-1);}}});$.rigid_handle_active_filters_reset_button();$(document.body).find('div#menu_mobile').tabs({beforeActivate:function(event,ui){if(!$.isEmptyObject(ui.newTab)){var $link=ui.newTab.find('a');if($link.length&&$link.hasClass('rigid-mobile-wishlist')){window.location.href=$link.prop('href');return false;}}}});$(document.body).find(".variations_form").on("woocommerce_update_variation_values",function(){var $swatches=$('.rigid-wcs-swatches');$swatches.find('.swatch').removeClass('rigid-not-available');$swatches.each(function(){var $select=$(this).prev().find('select');$(this).find('.swatch').each(function(){if(!$select.find('option[value="'+$(this).data('value')+'"]').length){$(this).addClass('rigid-not-available');}})})});rigid_fullwidth_elements();});$(document.body).on('rigid_products_filter_ajax',function(e,url,element){var $products=$('#products-wrapper').find('div.box-products.woocommerce');var $pagination=$('#products-wrapper').find('div.pagination');var $pageStatus=$pagination.prevAll('.rigid-page-load-status');$.rigid_show_loader();if(!url){url=window.location.href;}
if('?'===url.slice(-1)){url=url.slice(0,-1);}
url=url.replace(/%2C/g,',');window.history.pushState({page:url},"",url);if(rigid_ajaxXHR){rigid_ajaxXHR.abort();}
rigid_ajaxXHR=$.get(url,function(res){$products.empty();$.rigid_refresh_product_filters_areas(res);$.rigid_refresh_products_after_ajax(res,$products,$pagination,$pageStatus);$.rigid_hide_loader();$(document.body).trigger('rigid_products_filter_ajax_success',[res,url]);},'html');});window.onresize=function(){checkRevealFooter();defineMegaMenuSizing();rigid_fullwidth_elements();};window.rigidInitSmallCountdowns=function(prodHoldElements){$(prodHoldElements).each(function(){var data=$(this).find('.count_holder_small').data();if(typeof data!=='undefined'){$(data.countdownId).countdown({until:new Date(data.countdownTo),compact:false,layout:'<span class="countdown_time_tiny">{dn} {dl} {hn}:{mnn}:{snn}</span>'});}})};window.rigidStickyHeaderInit=function(){$("body:not(.rigid_header_left) #header").addClass("rigid-sticky-header");$("body:not(.rigid_transparent_header, .rigid-overlay-header, .rigid_header_left)").addClass("rigid-sticky-body");var customHeaderHeight=$('#header').height();$('body.rigid-sticky-body #container').css("padding-top",customHeaderHeight);$(window).on("scroll",function(){$(this).scrollTop()>customHeaderHeight-80?$("#header.rigid-sticky-header").addClass("rigid-sticksy"):$("#header.rigid-sticky-header").removeClass("rigid-sticksy");defineMegaMenuSizing();});};function defineMegaMenuSizing(){$('#header #main-menu .rigid-mega-menu').each(function(){var menu=$('#header .main_menu_holder').offset();var menuColumns=$(this).find('li.rigid_colum_title').length;$(this).addClass('menu-columns'+menuColumns);var dropdown=$(this).parent().offset();var i=(dropdown.left+$(this).outerWidth())-(menu.left+$('#header .main_menu_holder').outerWidth());if(i>0){$(this).css('margin-left','-'+(i+10)+'px');}});}
function defineCartIconClickBehaviour(){$(document).on("click","body:not(.woocommerce-checkout) #rigid_quick_cart_link",function(event){event.preventDefault();event.stopPropagation();var shoppingCart=$("body > div.widget.woocommerce.widget_shopping_cart");shoppingCart.addClass("active_cart");});$(document).on("click",".close-cart-button",function(event){var $parent=$(this).parent();$parent.removeClass('active_cart');});}
function checkRevealFooter(){var isReveal=$('#footer').height()-1;if(isReveal<550&&$('body').hasClass("rigid_fullwidth")){$('html.no-touch body.rigid_fullwidth.rigid-reveal-footer:not(.dokan-dashboard) #content').css("margin-bottom",isReveal+"px");$('body.rigid_fullwidth.rigid-reveal-footer:not(.dokan-dashboard) #footer').addClass('rigid_do_reveal');}else{$('html.no-touch body.rigid_fullwidth.rigid-reveal-footer #content').css("margin-bottom",0+"px");$('body.rigid_fullwidth.rigid-reveal-footer #footer').removeClass('rigid_do_reveal');}}
window.vc_rowBehaviour=function(){var vcSkrollrOptions,callSkrollInit,$=window.jQuery;function fullWidthRow(){var $elements=$('[data-vc-full-width="true"]');$.each($elements,function(key,item){var $el=$(this);$el.addClass("vc_hidden");var $el_full=$el.next(".vc_row-full-width");if($el_full.length||($el_full=$el.parent().next(".vc_row-full-width")),$el_full.length){var padding,paddingRight,el_margin_left=parseInt($el.css("margin-left"),10),el_margin_right=parseInt($el.css("margin-right"),10),width=$('#content').width(),row_padding=40,offset=-($('#content').width()-$('#content > .inner ').css("width").replace("px",""))/2-row_padding+15;if("rtl"===$el.css("direction")&&(offset-=$el_full.width(),offset+=width,offset+=el_margin_left,offset+=el_margin_right),$el.css({position:"relative",left:offset,"box-sizing":"border-box",width:width}),!$el.data("vcStretchContent"))"rtl"===$el.css("direction")?((padding=offset)<0&&(padding=0),(paddingRight=offset)<0&&(paddingRight=0)):((padding=-1*offset)<0&&(padding=0),(paddingRight=width-padding-$el_full.width()+el_margin_left+el_margin_right)<0&&(paddingRight=0)),$el.css({"padding-left":padding+"px","padding-right":paddingRight+"px"});$el.prop("data-vc-full-width-init","true"),$el.removeClass("vc_hidden"),$(document).trigger("vc-full-width-row-single",{el:$el,offset:offset,marginLeft:el_margin_left,marginRight:el_margin_right,elFull:$el_full,width:width})}}),$(document).trigger("vc-full-width-row",$elements)}
function fullHeightRow(){var windowHeight,offsetTop,fullHeight,$element=$(".vc_row-o-full-height:first");$element.length&&(windowHeight=$(window).height(),(offsetTop=$element.offset().top)<windowHeight&&(fullHeight=100-offsetTop/(windowHeight/100),$element.css("min-height",fullHeight+"vh")));$(document).trigger("vc-full-height-row",$element)}
$(window).off("resize.vcRowBehaviour").on("resize.vcRowBehaviour",fullWidthRow).on("resize.vcRowBehaviour",fullHeightRow),fullWidthRow(),fullHeightRow(),(0<window.navigator.userAgent.indexOf("MSIE ")||navigator.userAgent.match(/Trident.*rv\:11\./))&&$(".vc_row-o-full-height").each(function(){"flex"===$(this).css("display")&&$(this).wrap('<div class="vc_ie-flexbox-fixer"></div>')}),vc_initVideoBackgrounds(),callSkrollInit=!1,window.vcParallaxSkroll&&window.vcParallaxSkroll.destroy(),$(".vc_parallax-inner").remove(),$("[data-5p-top-bottom]").removeAttr("data-5p-top-bottom data-30p-top-bottom"),$("[data-vc-parallax]").each(function(){var skrollrSize,skrollrStart,$parallaxElement,parallaxImage,youtubeId;callSkrollInit=!0,"on"===$(this).data("vcParallaxOFade")&&$(this).children().prop("data-5p-top-bottom","opacity:0;").prop("data-30p-top-bottom","opacity:1;"),skrollrSize=100*$(this).data("vcParallax"),($parallaxElement=$("<div />").addClass("vc_parallax-inner").appendTo($(this))).height(skrollrSize+"%"),(youtubeId=vcExtractYoutubeId(parallaxImage=$(this).data("vcParallaxImage")))?insertYoutubeVideoAsBackground($parallaxElement,youtubeId):void 0!==parallaxImage&&$parallaxElement.css("background-image","url("+parallaxImage+")"),skrollrStart=-(skrollrSize-100),$parallaxElement.prop("data-bottom-top","top: "+skrollrStart+"%;").prop("data-top-bottom","top: 0%;")}),callSkrollInit&&window.skrollr&&(vcSkrollrOptions={forceHeight:!1,smoothScrolling:!1,mobileCheck:function(){return!1}},window.vcParallaxSkroll=skrollr.init(vcSkrollrOptions),window.vcParallaxSkroll)};function rigid_fullwidth_elements(){var $elements=$('#content:not(.has-sidebar) p.woocommerce-thankyou-order-received, #content:not(.has-sidebar) .rigid-author-info, #content:not(.has-sidebar) ul.woocommerce-order-overview.woocommerce-thankyou-order-details.order_details');var $rtl=$('body.rtl');var $contentDiv=$('#content');if($contentDiv.length){$elements.each(function(index){var width=$contentDiv.width();var row_padding=40;var offset=-($contentDiv.width()-$('#content > .inner ').css("width").replace("px",""))/2-row_padding+15;$(this).css({'position':'relative','box-sizing':'border-box','width':width,'padding-left':Math.abs(offset),'padding-right':Math.abs(offset)});if($rtl.length){$(this).css({'right':offset});}else{$(this).css({'left':offset});}});}}
function update_cart_dropdown(event)
{var product=jQuery.extend({name:rigid_main_js_params.product_label,price:"",image:""},rigid_added_product);var notice=$("<div class='rigid_added_to_cart_notification'>"+product.image+"<div class='added-product-text'><strong>"+product.name+" "+rigid_main_js_params.added_to_cart_label+"</strong></div></div>");if(typeof event!=='undefined')
{if($('#cart_add_sound').length){$('#cart_add_sound')[0].play&&$('#cart_add_sound')[0].play();$("body > div.widget.woocommerce.widget_shopping_cart").addClass("active_cart");}
defineCartIconClickBehaviour();notice.appendTo($("body")).hide().fadeIn('slow');setTimeout(function(){notice.fadeOut('slow');},2000);setTimeout(function(){$("body > div.widget.woocommerce.widget_shopping_cart").removeClass("active_cart");},8000);}}
var rigid_added_product={};function track_ajax_add_to_cart()
{jQuery('body').on('click','.add_to_cart_button',function()
{var productContainer=jQuery(this).parents('.product').eq(0),product={};product.name=productContainer.find('span.name').text();product.image=productContainer.find('div.image img');product.price=productContainer.find('.price_hold .amount').last().text();if(productContainer.length===0)
{return;}
if(product.image.length)
{product.image="<img class='added-product-image' src='"+product.image.get(0).src+"' title='' alt='' />";}
else
{product.image="";}
rigid_added_product=product;});}
jQuery.rigid_show_loader=function(){var overlay;if($('.shopbypricefilter-overlay').length){overlay=$('.shopbypricefilter-overlay');}else{overlay=$('<div class="ui-widget-overlay shopbypricefilter-overlay">&nbsp;</div>').prependTo('body');}
$(overlay).css({'position':'fixed','top':0,'left':0,'width':'100%','height':'100%','z-index':19999,});$('.shopbypricefilter-overlay').each(function(){var overlay=this;var img;if($('img',overlay).length){img=$('img',overlay);}else{img=$('<img id="price_fltr_loading_gif" src="'+rigid_main_js_params.img_path+'loading3.gif" />').prependTo(overlay);}
$(img).css({'max-height':$(overlay).height()*0.8,'max-width':$(overlay).width()*0.8});$(img).css({'position':'fixed','top':$(window).outerHeight()/2,'left':($(window).outerWidth()-$(img).width())/2});}).show();};jQuery.rigid_hide_loader=function(){$('.shopbypricefilter-overlay').remove();};jQuery.rigid_refresh_product_filters_areas=function(response){var $rigid_product_filters=$(document.body).find('div.rigid_product_filter');var $new_rigid_product_filters=$(response).find('div.rigid_product_filter');if($rigid_product_filters.length>$new_rigid_product_filters.length){var existing_titles=[];var found_titles=[];$rigid_product_filters.each(function(){var $curr_elmnt=$(this);var title=$curr_elmnt.find('h3:first-of-type').html();existing_titles.push(title);$new_rigid_product_filters.each(function(){if($(this).find('h3:first-of-type').html()===title){$curr_elmnt.html($(this).html());found_titles.push(title);}});});for(var i=0;i<existing_titles.length;i++){if($.inArray(existing_titles[i],found_titles)===-1){$rigid_product_filters.each(function(){$(this).find("h3:contains('"+existing_titles[i]+"')").parent().remove();});}}}else{$new_rigid_product_filters.each(function(index){if(typeof $rigid_product_filters.get(index)!=='undefined'){$($rigid_product_filters.get(index)).html($(this).html());}else if($rigid_product_filters.length===0){$(document.body).find('div#rigid-filter-widgets').append($(this));}else{$rigid_product_filters.first().parent().find('div.widget').last().after($(this));}});}
$.rigid_widget_columns();var $price_slider_form=$(document).find('#rigid-price-filter-form');if($price_slider_form.length===0){$(document).find('div#main').find('div.product-filter').prepend($(response).find('#rigid-price-filter-form'));}else{$price_slider_form.replaceWith($(response).find('#rigid-price-filter-form'));}
if(typeof $.rigid_build_price_slider==="function"){$.rigid_build_price_slider();}
$.rigid_handle_active_filters_reset_button();};jQuery.rigid_handle_active_filters_reset_button=function(){var $reset_button=$(document).find('div.rigid-filter-widgets-holder a.rigid-reset-filters');if(typeof $reset_button!=='undefined'){var show_reset_button=false;var rigid_reset_query=$reset_button.data('rigid_reset_query');var right_side_of_the_url='';if(window.location.href.indexOf('?')!==-1){right_side_of_the_url=window.location.href.substr(window.location.href.indexOf('?'));if(right_side_of_the_url!==rigid_reset_query){show_reset_button=true;}}
if(show_reset_button){$reset_button.show();}else{$reset_button.hide();}}};jQuery.rigid_widget_columns=function(){$('#slide_footer div.one_fourth').filter(function(index){return index%4===3;}).addClass('last').after('<div class="clear"></div>');$('#footer > div.inner div.one_fourth').filter(function(index){return index%4===3;}).addClass('last').after('<div class="clear"></div>');$('#pre_header > div.inner div.one_fourth').filter(function(index){return index%4===3;}).addClass('last').after('<div class="clear"></div>');$('#rigid-filter-widgets > div.one_fourth').filter(function(index){return index%4===3;}).addClass('last').after('<div class="clear"></div>');$('#slide_footer div.one_third').filter(function(index){return index%3===2;}).addClass('last').after('<div class="clear"></div>');$('#footer > div.inner div.one_third').filter(function(index){return index%3===2;}).addClass('last').after('<div class="clear"></div>');$('#pre_header > div.inner div.one_third').filter(function(index){return index%3===2;}).addClass('last').after('<div class="clear"></div>');$('#rigid-filter-widgets > div.one_third').filter(function(index){return index%3===2;}).addClass('last').after('<div class="clear"></div>');$('#slide_footer div.one_half').filter(function(index){return index%2===1;}).addClass('last').after('<div class="clear"></div>');$('#footer > div.inner div.one_half').filter(function(index){return index%2===1;}).addClass('last').after('<div class="clear"></div>');$('#pre_header > div.inner div.one_half').filter(function(index){return index%2===1;}).addClass('last').after('<div class="clear"></div>');$('#rigid-filter-widgets > div.one_half').filter(function(index){return index%2===1;}).addClass('last').after('<div class="clear"></div>');$('.woocommerce.columns-2:not(.owl-carousel)').each(function(){$(this).find('div.prod_hold, .product-category').filter(function(index){return index%2===1;}).addClass('last').after('<div class="clear"></div>');});$('.woocommerce.columns-3:not(.owl-carousel)').each(function(){$(this).find('div.prod_hold, .product-category').filter(function(index){return index%3===2;}).addClass('last').after('<div class="clear"></div>');});$('.woocommerce.columns-4:not(.owl-carousel)').each(function(){$(this).find('div.prod_hold, .product-category').filter(function(index){return index%4===3;}).addClass('last').after('<div class="clear"></div>');});$('#tab-more_seller_product').each(function(){$(this).find('div.prod_hold').filter(function(index){return index%4===3;}).addClass('last').after('<div class="clear"></div>');});$('.woocommerce.columns-5:not(.owl-carousel)').each(function(){$(this).find('div.prod_hold, .product-category').filter(function(index){return index%5===4;}).addClass('last').after('<div class="clear"></div>');});$('.woocommerce.columns-6:not(.owl-carousel)').each(function(){$(this).find('div.prod_hold, .product-category').filter(function(index){return index%6===5;}).addClass('last').after('<div class="clear"></div>');});}
jQuery.rigid_refresh_products_after_ajax=function(response,$products,$pagination,$pageStatus){var $newProducts=$(response).find('.content_holder').find('.prod_hold');var $pagination_html=$(response).find('.rigid-shop-pager .pagination').html();if(typeof $pagination_html==='undefined'){$pagination.html('');}else{$pagination.html($pagination_html);}
$newProducts.imagesLoaded(function(){$newProducts.each(function(){$(this).addClass('rigid-infinite-loaded');if($(document.documentElement).hasClass('no-touch')){$(this).appear(function(){$(this).addClass('prod_visible').delay(800);});}});});$products.append($newProducts);rigidInitSmallCountdowns($newProducts);$('.woocommerce.columns-2:not(.owl-carousel) div.prod_hold').filter(function(index){if($(this).next().hasClass('clear')){return false;}else{return index%2===1;}}).addClass('last').after('<div class="clear"></div>');$('.woocommerce.columns-3:not(.owl-carousel) div.prod_hold').filter(function(index){if($(this).next().hasClass('clear')){return false;}else{return index%3===2;}}).addClass('last').after('<div class="clear"></div>');$('.woocommerce.columns-4:not(.owl-carousel) div.prod_hold').filter(function(index){if($(this).next().hasClass('clear')){return false;}else{return index%4===3;}}).addClass('last').after('<div class="clear"></div>');$('.woocommerce.columns-5:not(.owl-carousel) div.prod_hold').filter(function(index){if($(this).next().hasClass('clear')){return false;}else{return index%5===4;}}).addClass('last').after('<div class="clear"></div>');$('.woocommerce.columns-6:not(.owl-carousel) div.prod_hold').filter(function(index){if($(this).next().hasClass('clear')){return false;}else{return index%6===5;}}).addClass('last').after('<div class="clear"></div>');$pagination.find('a.next_page').data('requestRunning',false);$pageStatus.children('.infinite-scroll-request').hide();if(!$pagination.find('a.next_page').length){$pageStatus.children('.infinite-scroll-last').show();$('button.rigid-load-more').hide();}else{$('button.rigid-load-more').show();}}})(window.jQuery);"use strict";function rigidUpdateUrlParameters(currentParams,newParams){if(currentParams.trim()===''){return"?"+newParams;}
var newParamsObj={};newParams.split('&').forEach(function(x){var arr=x.split('=');arr[1]&&(newParamsObj[arr[0]]=arr[1]);});for(var prop in newParamsObj){var i=currentParams.indexOf('#');var hash=i===-1?'':uri.substr(i);currentParams=i===-1?currentParams:currentParams.substr(0,i);var re=new RegExp("([?&])"+prop+"=.*?(&|$)","i");var separator="&";if(currentParams.match(re)){currentParams=currentParams.replace(re,'$1'+prop+"="+newParamsObj[prop]+'$2');}else{currentParams=currentParams+separator+prop+"="+newParamsObj[prop];}
currentParams+hash;}
return currentParams;}