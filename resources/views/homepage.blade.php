<!doctype html   lang="en-US">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    {{-- <meta name="viewport" content="width=device-width, maximum-scale=1"> --}}
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

    {{-- <link rel="profile" href="http://gmpg.org/xfn/11"> --}}
                    {{-- <script async="" src="//www.google-analytics.com/analytics.js">
                    </script>
                    <script>document.documentElement.className = document.documentElement.className + ' yes-js js_active js'
                    </script> --}}
            <link rel="stylesheet" href="{{asset("css/homepage.css")}}" />
            {{-- <link rel="stylesheet" href="{{asset("css/video.css")}}" /> --}}
            <link rel="stylesheet" href="{{asset("home-assets/home.css")}}" />

            <meta name="csrf-token" content="{{ csrf_token() }}">

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
    fbq('init', '616958696002563'); 
    fbq('track', 'PageView');
  </script>
  <noscript>
    <img height="1" width="1" 
    src="https://www.facebook.com/tr?id=616958696002563&ev=PageView
    &noscript=1"/>
  </noscript>
  <!-- End Facebook Pixel Code -->
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-157001280-26"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-157001280-26');
</script>




<script type="text/javascript" src="{{asset("home-assets/lib/js/jquery/jquery.min.js")}}" id="jquery-core-js"></script>
<script type="text/javascript" src="{{asset("home-assets/lib/js/jquery/jquery-migrate.min.js")}}" id="jquery-migrate-js"></script>
{{-- <script type="text/javascript" id="cookie-law-info-js-extra">
/* <![CDATA[ */
var Cli_Data = {"nn_cookie_ids":[],"cookielist":[],"non_necessary_cookies":[],"ccpaEnabled":"","ccpaRegionBased":"","ccpaBarEnabled":"","ccpaType":"ccpa_gdpr","js_blocking":"1","custom_integration":"","triggerDomRefresh":"","secure_cookies":""};
var cli_cookiebar_settings = {"animate_speed_hide":"500","animate_speed_show":"500","background":"#220e19","border":"#b1a6a6c2","border_on":"","button_1_button_colour":"#c2a693","button_1_button_hover":"#9b8576","button_1_link_colour":"#fff","button_1_as_button":"1","button_1_new_win":"","button_2_button_colour":"#c2a693","button_2_button_hover":"#9b8576","button_2_link_colour":"#ffffff","button_2_as_button":"1","button_2_hidebar":"","button_3_button_colour":"#c2a693","button_3_button_hover":"#9b8576","button_3_link_colour":"#fff","button_3_as_button":"1","button_3_new_win":"","button_4_button_colour":"#000","button_4_button_hover":"#000000","button_4_link_colour":"#ffffff","button_4_as_button":"","button_7_button_colour":"#61a229","button_7_button_hover":"#4e8221","button_7_link_colour":"#fff","button_7_as_button":"1","button_7_new_win":"","font_family":"Helvetica, sans-serif","header_fix":"","notify_animate_hide":"1","notify_animate_show":"","notify_div_id":"#cookie-law-info-bar","notify_position_horizontal":"right","notify_position_vertical":"bottom","scroll_close":"","scroll_close_reload":"","accept_close_reload":"","reject_close_reload":"","showagain_tab":"","showagain_background":"#fff","showagain_border":"#000","showagain_div_id":"#cookie-law-info-again","showagain_x_position":"100px","text":"#ffffff","show_once_yn":"","show_once":"10000","logging_on":"","as_popup":"","popup_overlay":"1","bar_heading_text":"","cookie_bar_as":"banner","popup_showagain_position":"bottom-right","widget_position":"left"};
var log_object = {"ajax_url":"home-assets\/lm-login\/admin-ajax.php"};
/* ]]> */
</script> --}}
{{-- <script type="text/javascript" src="{{asset("home-assets/core/cache/autoptimize/js/autoptimize_single_b400f6e5c15ed72b7e9f85850d9b4308.js")}}" id="cookie-law-info-js"></script> --}}
{{-- <script type="text/javascript" src="{{asset("home-assets//core/modules/4b36101dcc/public/assets/js/rbtools.min.js")}}" id="tp-tools-js"></script> --}}
{{-- <script type="text/javascript" src="{{asset("home-assets/core/modules/4b36101dcc/public/assets/js/rs6.min.js")}}" id="revmin-js"></script> --}}
{{-- <script type="text/javascript" src="{{asset("home-assets/lib/js/dist/vendor/wp-polyfill.min.js")}}" id="wp-polyfill-js"></script> --}}

{{-- <script type="text/javascript" src="{{asset("home-assets/lib/js/dist/hooks.min.js")}}" id="wp-hooks-js"></script> --}}

{{-- <script type="text/javascript" src="{{asset("home-assets/core/cache/autoptimize/js/autoptimize_single_47ff42e59fa6c0fb979920f276af12be.js")}}" id="say-what-js-js"></script> --}}
{{-- <script type="text/javascript" src="{{asset("home-assets/core/cache/autoptimize/js/autoptimize_single_2f0b5b553c08e50792b7754942d9abcb.js")}}" id="scd-wcmp-multivendor-js"></script> --}}

{{-- <script type="text/javascript" src="{{asset("home-assets/core/cache/autoptimize/js/autoptimize_single_21a9ff05d7ced164eb88f4b711308f89.js")}}" id="wpmenucart-ajax-assist-js"></script> --}}
{{-- <script type="text/javascript" src="{{asset("home-assets/core/modules/39d10ee62c/assets/js/jquery-blockui/jquery.blockUI.min.js")}}" id="jquery-blockui-js"></script> --}}
<script type="text/javascript" id="wc-add-to-cart-js-extra">

</script>
{{-- <script type="text/javascript" src="{{asset("home-assets/core/modules/39d10ee62c/assets/js/frontend/add-to-cart.min.js")}}" id="wc-add-to-cart-js"></script> --}}
{{-- <script type="text/javascript" src="{{asset("home-assets/core/cache/autoptimize/js/autoptimize_single_7f5a665e66c3d4ca3e69aa4c378755ce.js")}}" id="modernizr-js"></script> --}}
   <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })

        (window,document,'script','//www.google-analytics.com/analytics.js','ga');
            ga('create', 'UA-127463666-1', 'auto');ga('send', 'pageview');
            </script>







<link rel="icon" href="{{asset("frontEnd-assets/images/logo5.png")}}" sizes="32x32">
<link rel="icon" href="{{asset("frontEnd-assets/images/logo5.png")}}" sizes="192x192">
<link rel="apple-touch-icon" href="{{asset("frontEnd-assets/images/logo5.png")}}">
{{-- <script type="text/javascript">function setREVStartSize(e){
        //window.requestAnimationFrame(function() {
            window.RSIW = window.RSIW===undefined ? window.innerWidth : window.RSIW;
            window.RSIH = window.RSIH===undefined ? window.innerHeight : window.RSIH;
            try {
                var pw = document.getElementById(e.c).parentNode.offsetWidth,
                    newh;
                pw = pw===0 || isNaN(pw) ? window.RSIW : pw;
                e.tabw = e.tabw===undefined ? 0 : parseInt(e.tabw);
                e.thumbw = e.thumbw===undefined ? 0 : parseInt(e.thumbw);
                e.tabh = e.tabh===undefined ? 0 : parseInt(e.tabh);
                e.thumbh = e.thumbh===undefined ? 0 : parseInt(e.thumbh);
                e.tabhide = e.tabhide===undefined ? 0 : parseInt(e.tabhide);
                e.thumbhide = e.thumbhide===undefined ? 0 : parseInt(e.thumbhide);
                e.mh = e.mh===undefined || e.mh=="" || e.mh==="auto" ? 0 : parseInt(e.mh,0);
                if(e.layout==="fullscreen" || e.l==="fullscreen")
                    newh = Math.max(e.mh,window.RSIH);
                else{
                    e.gw = Array.isArray(e.gw) ? e.gw : [e.gw];
                    for (var i in e.rl) if (e.gw[i]===undefined || e.gw[i]===0) e.gw[i] = e.gw[i-1];
                    e.gh = e.el===undefined || e.el==="" || (Array.isArray(e.el) && e.el.length==0)? e.gh : e.el;
                    e.gh = Array.isArray(e.gh) ? e.gh : [e.gh];
                    for (var i in e.rl) if (e.gh[i]===undefined || e.gh[i]===0) e.gh[i] = e.gh[i-1];

                    var nl = new Array(e.rl.length),
                        ix = 0,
                        sl;
                    e.tabw = e.tabhide>=pw ? 0 : e.tabw;
                    e.thumbw = e.thumbhide>=pw ? 0 : e.thumbw;
                    e.tabh = e.tabhide>=pw ? 0 : e.tabh;
                    e.thumbh = e.thumbhide>=pw ? 0 : e.thumbh;
                    for (var i in e.rl) nl[i] = e.rl[i]<window.RSIW ? 0 : e.rl[i];
                    sl = nl[0];
                    for (var i in nl) if (sl>nl[i] && nl[i]>0) { sl = nl[i]; ix=i;}
                    var m = pw>(e.gw[ix]+e.tabw+e.thumbw) ? 1 : (pw-(e.tabw+e.thumbw)) / (e.gw[ix]);
                    newh =  (e.gh[ix] * m) + (e.tabh + e.thumbh);
                }
                if(window.rs_init_css===undefined) window.rs_init_css = document.head.appendChild(document.createElement("style"));
                document.getElementById(e.c).height = newh+"px";
                window.rs_init_css.innerHTML += "#"+e.c+"_wrapper { height: "+newh+"px }";
            } catch(e){
                console.log("Failure at Presize of Slider:" + e)
            }
        //});
      };
</script> --}}


<noscript>
    <style>
        .wpb_animate_when_almost_visible { opacity: 1; }
    </style>
</noscript>
<style>#rev_slider_8_1_wrapper { height: 386px }
</style>

<title>eBloom | Online Delivery</title>
<meta property="og:title" content="eBloom - Online Delivery">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="630">





<link rel="stylesheet" href="{{asset('css/custom.css')}}">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
{{-- slider css --}}
{{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> --}}

    <script src="https://code.jquery.com/jquery-1.9.1.js"></script>
    <script src="https://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>

    <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
{{-- slider js --}}
    {{-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script> --}}

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    {{-- <link href="{{asset("css/mobiscroll.javascript.min.css")}}" rel="stylesheet" />
    <script src="{{asset("js/mobiscroll.javascript.min.js")}}"></script> --}}
    <script src="{{asset("js/custom.js")}}"></script>
    {{-- animate --}}
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    @if (App()->getLocale() == 'gr' )
        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places&language=el&key=AIzaSyBe4PR29ODW5SvCsODBbmQMm2V5AXYzLu4"></script>
    @else
        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places&language=en&key=AIzaSyBe4PR29ODW5SvCsODBbmQMm2V5AXYzLu4"></script>

    @endif

    {{-- evo calender --}}
    <link href="{{asset("css/evo-calendar.min.css")}}" rel="stylesheet" />
    <link href="{{asset("css/evo-calendar.midnight-blue.min.css")}}" rel="stylesheet" />
    {{-- <link
    rel="stylesheet"
    href="{{asset("frontEnd-assets/assets/css/eBloom.82387275f940b3ce25dfd6a28b5f69ef.css")}}"
  /> --}}
    <link rel="stylesheet" href="{{asset("frontEnd-assets/assets/css/popup.css")}}">
    <link rel="stylesheet" href="{{asset("assets/css/addressPopup.css")}}">
    <link rel="stylesheet" href="{{asset("css/loginPopup.css")}}">
    <link rel="stylesheet" href="css/slider.css">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    {{-- <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet"> --}}
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Manrope&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>

    {{-- slider links --}}
    {{-- end slider links --}}

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


    <style>
        #top-widget{
            width: 100%;
            max-width: 350px;
            height: 100%;
            overflow: hidden;
            float: none;
            position: fixed;
            top: 0;
            right: -350px;
            margin: 0;
            padding: 0 0 40px 23px;
            background: #fff;
            z-index: 21000;
            transition: all 0.6s cubic-bezier(0.77, 0, 0.175, 1);

        }
    </style>
    <script type="text/javascript" src="http://www.google.com/jsapi"></script>

    {{-- <script src="http://www.google.com/jsapi?key=AIzaSyBe4PR29ODW5SvCsODBbmQMm2V5AXYzLu4" type="text/javascript"></script> --}}

</head>



<body class="home page-template-default page page-id-4793 theme-rigid  rigid_fullwidth rigid-main-menu-right rigid_transparent_header rigid-stretched-header rigid-fullwidth-blog-pages wpb-js-composer js-comp-ver-6.4.1 vc_responsive page-no-title" style="height: auto">
    <div class="widget

    widget_shopping_cart" id="top-widget"><span class="close-cart-button"></span><div class="widget_shopping_cart_content">


</div></div><div id="yith-wcwl-popup-message" style="display: none;"><div id="yith-wcwl-message"></div></div>
                <div class="mask" style="display: none;">
            <div id="spinner"><div class="double-bounce1"></div><div class="double-bounce2"></div>
            </div>
        </div>


    <div id="menu_mobile" class="menu-main-menu-container ui-tabs ui-corner-all ui-widget ui-widget-content">
        <ul class="rigid-mobile-menu-tabs ui-tabs-nav ui-corner-all ui-helper-reset ui-helper-clearfix ui-widget-header" role="tablist">
        <li role="tab" tabindex="0" class="ui-tabs-tab ui-corner-top ui-state-default ui-tab ui-tabs-active ui-state-active" aria-controls="rigid_mobile_menu_tab" aria-labelledby="ui-id-1" aria-selected="true" aria-expanded="true">
            @if (Auth::check())
            <a class="rigid-mobile-menu-tab-link ui-tabs-anchor" href="#popup2" onclick="resetHref2();" role="presentation" tabindex="-1" id="ui-id-1">
                <img class="rounded-circle" src="{{asset('/frontEnd-assets/images/user.png')}}" alt="User Avatar" width="40" height="40">
            </a>

            @else
            <a class="rigid-mobile-menu-tab-link ui-tabs-anchor" href="#popup2" onclick="resetHref2();" role="presentation" tabindex="-1" id="ui-id-1">
                {{-- {{__('words.ΣΥΝΔΕΣΗ / ΕΓΓΡΑΦΗ')}} --}}
					{{__('words.ΣΥΝΔΕΣΗ/ΕΓΓΡΑΦΗ')}}

                {{-- ΣΥΝΔΕΣΗ / ΕΓΓΡΑΦΗ --}}
            </a>
            @endif

        </li>

        <li>
            <a class="mob-close-toggle"></a>
        </li>
    </ul>
    <div id="rigid_mobile_menu_tab" style="position: relative;" aria-labelledby="ui-id-1" role="tabpanel" class="ui-tabs-panel ui-corner-bottom ui-widget-content" aria-hidden="false">
        <ul id="mobile-menu" class="menu">
         @if (Auth::check())
            <li id="menu-item-4815" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4815"><a href="{{url(app()->getLocale().'/user_account')}}">
                {{__('words.Ο λογαριασμός μου')}}

                  {{-- My Accout --}}

                </a>
            </li>

            <li id="menu-item-4815" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4815"><a href="{{url(app()->getLocale().'/user/favorite_store')}}">
                {{__('words.Αγαπημένα')}}

                {{-- Favorites Stores --}}
            </a></li>
            <li id="menu-item-4814" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4814"><a href="{{url(app()->getLocale().'/user/orders')}}">
                {{__('words.Παραγγελίες')}}

                {{-- Orders --}}
            </a></li>
            <li id="menu-item-4814" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4814"><a href="{{url(app()->getLocale().'/user_logout')}}">
                {{__('words.Αποσύνδεση')}}

                {{-- Logout --}}
            </a></li>

         @else
         {{-- <li id="menu-item-4800" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-4800"><a href="{{url('/')}}" aria-current="page">Home</a></li> --}}
         @endif
        <li id="menu-item-4814" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4814">
            <span class="switch-lang langbtn" onclick="myFunction()" style="position: relative; left: 12px;">
                @if (app()->getLocale() =="en" )
                    <div class="current-lang"><img class="lang-flag" src="https://cdn2.iconfinder.com/data/icons/world-flag-icons/128/Flag_of_United_Kingdom.png"/>
                         <span class="lang-text">English (EN)</span>
                    </div>
                @else
                    <div class="current-lang"><img class="lang-flag" src="https://cdn2.iconfinder.com/data/icons/world-flag-icons/128/Flag_of_Greece.png"/>
                        <span class="lang-text">Ελληνικά (GR) </span>
                    </div>
                @endif
                <div class="lang-dropdown" id="lang-dropdown">
                    @if (app()->getLocale() =="en" )
                        <div class="selecting-lang"><img class="lang-flag" src="https://cdn2.iconfinder.com/data/icons/world-flag-icons/128/Flag_of_Greece.png"/>
                            {{-- <p class="lang-text">Ελληνικά (GR) </p> --}}
                            <a href=" {{route(Route::currentRouteName(),['language'=> 'gr'])}} "> <span class="lang-text">Ελληνικά (GR)</span></a>
                        </div>
                    @else
                        <div class="selecting-lang"><img class="lang-flag" src="https://cdn2.iconfinder.com/data/icons/world-flag-icons/128/Flag_of_United_Kingdom.png"/>
                            <a href=" {{route(Route::currentRouteName(),['language'=> 'en'])}} "> <span class="lang-text">English (EN)</span></a>

                            {{-- <p class="lang-text">English (EN) </p> --}}
                        </div>
                    @endif
                </div>
            </span>
        </li>


</ul>
    </div>


  {{-- lang dropdown script --}}

  <script>
    /* When the user clicks on the button,
    toggle between hiding and showing the dropdown content */
    function myFunction() {
        // alert('check');
        console.log('lang click');
    //   document.getElementById("lang-dropdown").classList.toggle("show-lang");
        document.getElementById("lang-dropdown").style.display = "block";
    }

    // Close the dropdown if the user clicks outside of it
    window.onclick = function(event) {
      if (!event.target.matches('.langbtn')) {
        var dropdowns = document.getElementsByClassName("dropdown-content");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
          var openDropdown = dropdowns[i];
          if (openDropdown.classList.contains('show-lang')) {
            openDropdown.classList.remove('show-lang');
          }
        }
      }
    }
  </script>

    <div id="ui-id-3" aria-live="polite" aria-labelledby="ui-id-2" role="tabpanel" class="ui-tabs-panel ui-corner-bottom ui-widget-content" style="display: none;" aria-hidden="true"></div>
            </div>
    <div id="container">

    {{-- header start --}}
    <div id="header" class="rigid-has-header-top rigid-sticky-header rigid-sticksy" style="height: auto">

        <div class="inner main_menu_holder fixed has-main-menu" style="height: 70px;">
            <div id="logo" style="margin-top: 3px;">
                <a href="{{url('/')}}" title="eBloom" rel="home">
                    <noscript
                        ><img

                            width="241"
                            height="50"
                            class=""
                            alt=""
                            sizes="(max-width: 241px) 100vw, 241px" style="height: 68px;
                            width: 220px;" />
                            </noscript
                    ><img
                        width="241"
                        height="50"
                        class="lazyload"
                        alt=""
                        data-sizes="(max-width: 241px) 100vw, 241px"
                    /><noscript
                        ><img
                            width="241"
                            height="50"
                            src="{{asset('frontEnd-assets/images/logo4.png')}}"
                            class="transparent_logo"
                            alt=""
                            sizes="(max-width: 241px) 100vw, 241px" style="height: 68px;
                            width: 220px;"/></noscript
                    ><img
                        width="241"
                        height="50"
                        src="{{asset('frontEnd-assets/images/logo4.png')}}"
                        class="transparent_logo lazyloaded"
                        alt=""
                        style="height: 68px;
                        width: 220px;"
                    /><noscript
                        ><img
                            width="241"
                            height="50"
                            src="{{asset('frontEnd-assets/images/logo4.png')}}"
                            class="rigid_mobile_logo"
                            alt=""

                            sizes="(max-width: 241px) 100vw, 241px" /></noscript
                    ><object
                        width="241"
                        height="50"
                        data="{{asset('frontEnd-assets/images/header-logo.svg')}}"
                        data-src="{{asset('frontEnd-assets/images/header-logo.svg')}}"
                        class="rigid_mobile_logo lazyloaded"
                        alt=""
                        data-srcset="{{asset('frontEnd-assets/images/header-logo.svg')}}"
                        data-sizes="(max-width: 241px) 100vw, 241px"
                        sizes="(max-width: 241px) 100vw, 241px"
                        style="height: 68px;
                        width: 220px;"
                    ></object>
                </a>
            </div>
            <a class="mob-menu-toggle" href="#"><i class="fa fa-bars"></i></a>
            <a class="mob-menu-toggle" href="#"> </a>

            <div class="rigid-search-cart-holder">
                {{-- <a class="sidebar-trigge" href="#">
                    <i class="fa fa-user"></i>
                </a> --}}
                {{-- <div id="rigid-account-holder" class="rigid-user-not-logged">
                    <a
                        href="#"
                        title="My Account"
                    >
                        <i class="fa fa-user"></i>
                    </a>

                    <div class="rigid-header-account-link-holder">
                        <div class="">
                            <div class=""></div>

                            <div
                                class="u-columns col2-set owl-carousel owl-loaded"
                                id="customer_login"
                            >
                                <div class="owl-stage-outer">
                                    <div
                                        class="owl-stage"
                                        style="
                                            transform: translate3d(0px, 0px, 0px);
                                            transition: all 0s ease 0s;
                                        "
                                    >
                                        <div class="owl-item">
                                            <div class="u-column1 col-1">
                                                <h2>Login</h2>

                                            </div>
                                        </div>
                                        <div class="owl-item">
                                            <div class="u-column2 col-2">
                                                <h2>Register</h2>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-nav">
                                    <button
                                        type="button"
                                        role="presentation"
                                        class="owl-prev disabled"
                                    >
                                        Login</button
                                    ><button
                                        type="button"
                                        role="presentation"
                                        class="owl-next"
                                    >
                                        Register
                                    </button>
                                </div>
                                <div class="owl-dots disabled"></div>
                            </div>
                        </div>
                    </div>
                </div> --}}
                {{-- <ul id="cart-module" class="site-header-cart">

                    <li>
                        <i class="fa fa-user"></i>
                    </li>
                </ul> --}}



            </div>
            <style>

                .switch-lang {
                    width: 145px;
                    text-align: left;
                    cursor: pointer;
                    z-index: 50;
                    position: absolute;
                    top: 23px;
                    right: 20px;
                    margin-bottom: 5px;
                    display: none;

                }

                /* @media only screen and (max-width: 768px) {

                    .switch-lang {
                        width: 100px;

                    }
                } */
                .switch-lang:hover .lang-dropdown {
                    display: block;
                }
                .switcher-link {
                    color: #fff;
                }
                .switcher-link:hover {
                    color: #fff;
                }
                .show-lang {display: block;}

                .current-lang {
                    /* background: #34495e; */
                    background: #984E66;
                    padding: 3px 5px 0px 5px;
                    border-radius: 5px;
                }
                .lang-flag {
                    width: 20px;
                    display: inline-block;
                }
                .lang-text {
                    display: inline-block;
                    margin-left: 5px;
                    vertical-align: top;
                    margin-top: 2px;
                    margin-bottom: 5px;
                    color: #fff;
                }
                .lang-dropdown {
                    display: none;
                    background: #34495e;
                    border-radius: 5px;
                    margin-top: 2px;
                }
                .selecting-lang {
                    padding: 3px 5px 3px 5px;
                    cursor: pointer;
                }
                .selecting-lang:hover {
                    background: #22313f;
                }
                .switch-lang ul > :first-child {
                    border-radius: 5px 5px 0px 0px;
                }
                .switch-lang ul > :last-child {
                    border-radius: 0px 0px 5px 5px;
                }
                .switch-lang li {
                    list-style-type: none;
                }
                .switch-lang .menu-arrow {
                    display: inline-block;
                    width: 10px;
                    margin-left: 10px;
                    vertical-align: top;
                    margin-top: 6px;
                }

            </style>
            <div
                id="main-menu"
                class="menu-main-menu-container rigid-strikethrough-accent"
            >
                <ul id="main_nav" class="menu">
                    {{-- <li
                        class="menu-item menu-item-type-custom"
                    >
                        <a href="{{url('/')}}">Home</a>
                    </li> --}}
                    <li
                        class="menu-item menu-item-type-custom menu-item-object-custom"
                    >

                        <div class="switch-lang">
                            @if (app()->getLocale() =="en" )
                                <div class="current-lang"><img class="lang-flag" src="https://cdn2.iconfinder.com/data/icons/world-flag-icons/128/Flag_of_United_Kingdom.png"/>
                                     <span class="lang-text">English (EN)</span>
                                </div>
                            @else
                                <div class="current-lang"><img class="lang-flag" src="https://cdn2.iconfinder.com/data/icons/world-flag-icons/128/Flag_of_Greece.png"/>
                                    <span class="lang-text">Ελληνικά (GR) </span>
                                </div>
                            @endif
                            <div class="lang-dropdown">
                                @if (app()->getLocale() =="en" )
                                    <div class="selecting-lang"><img class="lang-flag" src="https://cdn2.iconfinder.com/data/icons/world-flag-icons/128/Flag_of_Greece.png"/>
                                        {{-- <p class="lang-text">Ελληνικά (GR) </p> --}}
                                        <a href=" {{route(Route::currentRouteName(),['language'=> 'gr'])}} "> <span class="lang-text">Ελληνικά (GR)</span></a>
                                    </div>
                                @else
                                    <div class="selecting-lang"><img class="lang-flag" src="https://cdn2.iconfinder.com/data/icons/world-flag-icons/128/Flag_of_United_Kingdom.png"/>
                                        <a href=" {{route(Route::currentRouteName(),['language'=> 'en'])}} "> <span class="lang-text">English (EN)</span></a>

                                        {{-- <p class="lang-text">English (EN) </p> --}}
                                    </div>
                                @endif
                            </div>
                        </div>
                    </li>
                    @if (Auth::check())


                    <li
                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-4804 dropdown has-mega"
                    >

                        <div class="vc_btn3-container  round-btn vc_btn3-center" style="margin-top: 15px;margin-left:10px; height: 20px;">
                            <img class="rounded-circle" src="{{asset('/frontEnd-assets/images/user.png')}}" alt="User Avatar" width="40" height="40">

                            {{-- <a style="background-color:lightpink; color:#ffffff;" class="vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-rounded vc_btn3-style-custom btn-outline-white" href="#popup2" onclick="resetHref2();" title="dashboard">Dashboard</a> --}}
                        </div>
                        <div class="rigid-mega-menu menu-columns1" style="">
                            <ul class="sub-menu">
                                <li
                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-4805 rigid_colum_title dropdown"
                                >
                                    <a href="{{url(app()->getLocale().'/user_account')}}">
                                        {{__('words.Ο λογαριασμός μου')}}
                                        {{-- My Account --}}
                                    </a>
                                    <ul class="sub-menu">
                                        <li
                                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-4808"
                                        >
                                              <a class="d-block" href="{{url(app()->getLocale().'/user/orders')}}">
                                                {{__('words.Παραγγελίες')}}
                                                {{-- Orders --}}
                                            </a>

                                        </li>
                                        <li
                                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-4808"
                                        >
                                            <a href="{{url(app()->getLocale().'/user/favorite_store')}}"
                                            >
                                            {{__('words.Αγαπημένα')}}
                                            {{-- Favorites Stores --}}
                                        </a>
                                        </li>

                                        <li
                                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-4808"
                                        >
                                            <a class="d-block" href="{{url(app()->getLocale().'/user_logout')}}">
                                                {{__('words.Αποσύνδεση')}}
                                                {{-- Logout --}}
                                            </a>

                                        </li>
                                    </ul>
                                </li>
                                {{-- <li
                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-4805 rigid_colum_title dropdown"
                                >
                                    <a class="d-block" href="{{url('/user_logout')}}">Logout</a>

                                </li> --}}
                            </ul>
                        </div>
                    </li>
                    @else
                    <li
                        class="menu-item menu-item-type-custom menu-item-object-custom"
                    >
                        <a href="#popup2" onclick="resetHref2();">
					    {{__('words.ΣΥΝΔΕΣΗ/ΕΓΓΡΑΦΗ')}}

                            {{-- ΣΥΝΔΕΣΗ / ΕΓΓΡΑΦΗ --}}
                        </a>
                    </li>
                    @endif

                </ul>
            </div>
        </div>
    </div>
    {{-- header end --}}

    {{-- --------------login popup------------ --}}
    <style>
        .loginpopup {
            height: 550px;
        }
        @media screen and (max-width: 500px) {
            .loginpopup {
                height: 605px;
            }

        }
    </style>
    <div id="popup2" class="overlay" style="z-index: 1050">
        <div class="loginpopup" style=" display: flex;
        justify-content: center;">

            <div class="modal-content" style="height: 100% !important; margin-left: 0px !important; margin-top: 0px !important">
              {{-- <link href="//fonts.googleapis.com/css?family=Roboto&amp;subset=greek&amp;text=SigninwithGoogle" rel="stylesheet" type="text/css"> --}}
              <div class="modal-header flex-column bg-white pt-7 pb-0 px-0 border-bottom">
                  <div class="w-100 d-flex">
                      <h2 class="modal-title mx-auto"><strong class="h2" style="font-size: 1.251rem;
                        margin-bottom: 0.25rem;
                        font-family: inherit;
                        font-weight: 700;
                        line-height: 1.2;
                        color: inherit;">

                        {{__('words.Σύνδεση ebloom')}}
                        {{-- Log in eBloom --}}
                        </strong></h2>

                        <a href="#" type="button" onclick="resetHref();"  class="modal-close mr-7 position-absolute pt-2" style="right: 0;top:-7;" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" class="fa fa-times" style="width: 16px; font-size: 18px; color: #984E66"></span>
                        </a>
                    </div>
                    <div class="social-login" style="display: flex;
                        justify-content: center;
                        width: 100%;
                        margin-top: 20px;">
                        <a href="{{url(app()->getLocale().'/redirect')}}" class="btn btn-primary" style="width: 100%; background-color: #3B65AF;border-color: #3B65AF; color: #fff;">

                            {{__('words.Σύνδεση με Facebook')}}
                            {{-- Login with Facebook --}}
                        </a>

                    </div>

                  <ul class="nav nav-tabs border-0 login-register-tablist w-100 d-flex justify-content-center clearfix pt-2" role="tablist">
                      <li role="presentation" class="w-50 text-center"><a href="#login-form" class="d-block py-4 hover-no-decoration h3 form-login-tab active" aria-controls="login" role="tab" data-toggle="tab" aria-selected="true" style="font-size: 18px;">

                        {{__('words.Σύνδεση')}}
                        {{-- Login --}}
                    </a></li>
                      <li role="presentation" class="w-50 text-center"><a href="#register-form" class="d-block py-4 hover-no-decoration h3 form-registration-tab" aria-controls="register" role="tab" data-toggle="tab" aria-selected="false" style="font-size: 18px;">

                        {{__('words.Εγγραφή')}}
                        {{-- Sign up --}}
                    </a></li>
                  </ul>
              </div>
                <div class="modal-body pt-7 bg-white">
                  <div class="tab-content login-register-tab-content">
                      <div role="tabpanel" class="tab-pane login-tab-pane active" id="login-form">
                          {{--social--}}
                            {{-- <span style="color:red" id="errorMsg"></span> --}}
                            <div class="print-error-msg-login">
                              <ul style="list-style: none;"></ul>
                            </div>
                          <form class="login-form has-validation-callback">{{ csrf_field() }}
                            <div class="form-group">
                              <div class="field-required">
                                <input type="email" name="user_email" id="login_email" class="form-control" data-validation="email" data-validation-error-msg="Enter your email"
                                {{-- placeholder="Your Email"  --}}
                                placeholder="{{__('words.Το email σου')}}"
                                autocomplete="email">
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="field-required position-relative">
                                <input type="password" name="user_password" id="pass" class="form-control" data-validation="required" data-validation-error-msg="Enter your password"
                                placeholder="{{__('words.Ο κωδικός σου')}}"
                                {{-- placeholder="Your password" --}}
                                >

                                      {{-- <button type="button" class="show-hide-password position-absolute mr-2 btn-link border-0"><i class="fas fa-eye text-grey" aria-hidden="true"></i></button> --}}
                              </div>
                            </div>
                            <button type="submit" id="loginBtn" class="btn btn-primary btn-block btn-lg login-form-submit" style="background-color: #984E66;border-color: #984E66;">

                                {{__('words.Σύνδεση')}}
                                {{-- Login --}}
                            </button>
                          </form>
                          {{-- <a href="{{ url('auth/google') }}" class="btn btn-lg btn-primary btn-block">
                            <strong>Login With Google</strong>
                            </a>  --}}
                          <a href="#forgetpopup" class="btn btn-link btn-block forgot-password-btn">
                              <u style="color: black;">
                            {{-- I don't remember my password --}}

                            {{__('words.Δεν θυμάμαι τον κωδικό μου')}}
                            </u></a>
                            <div class="text-center ">

                                {{__('words.Με την εγγραφή σας αποδέχεστε τους')}}
                                {{-- By signing up you agree to our  --}}
                                <br>
                                <a href="{{url(app()->getLocale().'/pages/terms')}}" target="_blank" >
                                    <u>

                                        {{__('words.Όρους χρήσης')}}
                                        {{-- Terms of use --}}
                                    </u>
                                </a>

                                {{__('words.και')}}
                                    {{-- and  --}}
                                <a href="{{url(app()->getLocale().'/pages/policy')}}" target="_blank"><u>

                                    {{__('words.την πολιτική απορρήτου')}}
                                    {{-- Privacy policy --}}
                                </u></a>
                            </div>

                      </div>
                      <div role="tabpanel" class="tab-pane register-tab-pane" id="register-form">
                        <div class="print-error-msg-login">
                          <ul style="list-style: none;"></ul>
                        </div>
                          <form class="register-form mb-8 has-validation-callback">

                              <div class="form-group">
                                <div class="field-required">
                                    <input type="text" name="register_name" id="register_name" class="form-control" data-validation="name" data-validation-error-msg="Enter your name"
                                    placeholder="{{__('words.Όνομα')}}"
                                    {{-- placeholder="Your name"  --}}
                                    autocomplete="name">
                                </div>
                              </div>

                              <div class="form-group">
                                  <div class="field-required">
                                      <input type="email" name="register_email" id="register_email" class="form-control" data-validation="email" data-validation-error-msg="Enter your email"
                                      placeholder="email"
                                      {{-- placeholder="Your Email"  --}}
                                      autocomplete="email">
                                  </div>
                              </div>
                              {{-- <div class="form-group">
                                <div class="field-required">
                                    <input type="tel" name="register_cellphone" id="register_cellphone" class="form-control" data-validation="cellphone" data-validation-error-msg="Enter your cellphone" placeholder="Your Cellphone" autocomplete="cellphone">
                                </div>
                              </div> --}}
                              <div class="form-group form-group-register-password">
                                  <div class="field-required position-relative">
                                      <input type="password" name="register_password" id="register_password" class="form-control"
                                      placeholder="{{__('words.Κωδικός')}} "
                                      {{-- placeholder="Your password"  --}}
                                      aria-describedby="passwordHelpBlock">
                                      {{-- <button type="button" class="show-hide-password position-absolute mr-2 btn-link border-0"><i class="fas fa-eye text-grey" aria-hidden="true"></i></button> --}}
                                  </div>
                                  <p class="register-error-message alert alert-danger mt-3" style="display: none;"></p>
                                  {{-- <small id="passwordHelpBlock" class="form-text text-muted">Your password must be at least 8 characters long and contain at least one number, one capital letter and one lower case letter.</small> --}}
                              </div>
                              <button type="submit" id="registerBtn" class="btn btn-block btn-primary btn-lg register-form-submit" style="background-color: #984E66;border-color: #984E66;">
                                {{-- Εγγραφή --}}
                                {{__('words.Εγγραφή')}}
                                {{-- Sign up --}}
                                </button>

                          </form>

                          {{-- <div class="text-center mt-5">
                              By signing up you agree to our <br>
                              <a href="/page/tos" target="_blank"><u>Terms of use</u></a> and <a href="/page/privacy" target="_blank"><u>Privacy policy</u></a>
                          </div> --}}

                      </div>
                  </div>
                </div>

            </div>
        </div>

    </div>
      {{-- -------------------end login popup---------- --}}
      {{-- forget password popup --}}

      <style>
        #loading {
            display: inline-block;
            width: 50px;
            height: 50px;
            border: 3px solid #984E66;
            border-radius: 50%;
            border-top-color: red;
            animation: spin 1s ease-in-out infinite;
            -webkit-animation: spin 1s ease-in-out infinite;
          }

          @keyframes spin {
            to { -webkit-transform: rotate(360deg); }
          }
          @-webkit-keyframes spin {
            to { -webkit-transform: rotate(360deg); }
          }
          .wait{
            width: 100%;
            display: flex;
            justify-content: center;
            margin-top: 10px;
            display: none;
          }
      </style>


        <div id="forgetpopup" class="overlay" style="z-index: 1050">
            <div class="loginpopup" style="height: 380px; display: flex;
            justify-content: center;">

                <div class="modal-content" style="height: 100% !important; margin-left: 0px !important; margin-top: 0px !important">
                {{-- <link href="//fonts.googleapis.com/css?family=Roboto&amp;subset=greek&amp;text=SigninwithGoogle" rel="stylesheet" type="text/css"> --}}
                <div class="modal-header flex-column bg-white pt-7 pb-0 px-0 " style="border: none;">
                    <div class="w-100 d-flex">
                        <h2 class="modal-title mx-auto"><strong class="h2" style="font-size: 1.251rem;
                            margin-bottom: 0.25rem;
                            font-family: inherit;
                            font-weight: 700;
                            line-height: 1.2;
                            color: inherit;">
                        @if (app()->getLocale() == 'gr')
                        Υπενθύμιση Κωδικού

                        @else

                        Password Reminder
                        @endif
                        {{-- Log in eBloom --}}
                        </strong></h2>
                        <a href="#" type="button" onclick="resetHref();"  class="modal-close mr-7 position-absolute pt-2" style="right: 0;top:-7;" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" class="fa fa-times" style="width: 16px; font-size: 18px; color: #984E66"></span>
                        </a>
                    </div>
                    <div class="alert alert-success alert-block success-msg d-none" style="width: 100%;">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                        </button>
                        @if(app()->getLocale() == 'gr' )

                        <strong>Νέος κωδικός πρόσβασης στάλθηκε στο email σας</strong>

                        @else

                        <strong>New password sended on your email</strong>

                        @endif
                    </div>
                    <div class="wait" style="width: 100%;">
                    <div id="loading"></div>

                    </div>
                </div>
                    <div class="modal-body pt-7 bg-white">
                        <p style="text-align: center">
                        @if (app()->getLocale() == 'gr')

                        Θα σου αποσταλλεί ένα email για να δημιουργήσεις ένα νέο κωδικό
                        @else

                        We will send you an e-mail to create a new password
                        @endif
                        </p>
                                {{-- <span style="color:red" id="errorMsg"></span> --}}
                                <div class="print-error-msg-forget">
                                <ul style="list-style: none;"></ul>
                                </div>
                            <form  class="login-form has-validation-callback">{{ csrf_field() }}
                                <div class="form-group">
                                <div class="field-required">
                                    <input type="email" name="forget_email" id="forget_email" class="form-control" data-validation="email" data-validation-error-msg="Enter your email"
                                    @if (app()->getLocale() == 'gr')

                                    placeholder="Το email σου"
                                    @else

                                    placeholder="Your Email"
                                    @endif
                                    autocomplete="email">
                                </div>
                                </div>
                                <button type="button" id="forgetBtn" class="btn btn-primary btn-block btn-lg login-form-submit" style="background-color: #984E66;border-color: #984E66; color: #fff">
                                @if (app()->getLocale() == 'gr')
                                    Αποστολή

                                @else

                                Send
                                @endif
                                    {{-- Login --}}
                                </button>
                            </form>

                    </div>

                </div>
            </div>

        </div>
      {{-- end forget password popup --}}

      {{-- forget scripts --}}
        <script type="text/javascript">

            $("#forget_email").blur(function(e) {
                e.preventDefault();
                // $('.print-error-msg-forget').addClass('d-none');
                $(".print-error-msg-forget").css('display', 'none');

            });

            $("#forgetBtn").click(function(e) {
                $('.wait').css('display','flex');

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            e.preventDefault();
            var email = $("input[name='forget_email']").val();

            $.ajax({
                url: "{{ url(app()->getLocale().'/forget-password') }}",
                type: 'POST',
                data: {
                    email: email,
                },
                success: function(data) {
                    $('.wait').css('display','none');

                console.log(data);
                    if ($.isEmptyObject(data.error)) {
                        $('.success-msg').removeClass('d-none');

                        // alert(data.success);
                        // var url = window.location.pathname;
                        // console.log(url);
                        // window.location.href = '#popup2';
                        // email.val('');
                        // password.val('');
                    } else {
                    console.log(data.error);
                    // $("#errorMsg").text(data.error);
                        printErrorMsg(data.error);
                    }
                }
            });
            function printErrorMsg(msg) {
                $(".print-error-msg-forget").find("ul").html('');
                $(".print-error-msg-forget").css('display', 'block');
                $.each(msg, function(key, value) {
                    $(".print-error-msg-forget").find("ul").append('<li style="color:red;">' + value + '</li>');
                });
            }

            });
        </script>

      {{-- end forget scripts --}}

      {{-- ------------------login scripts--------- --}}
      <script type="text/javascript">

            function resetHref2() {
                location.hash = '#popup2';
            }
            document.onkeydown = function(e) {
                if (e.ctrlKey &&
                    (
                    // e.keyCode === 67 ||
                    e.keyCode === 86 ||
                    e.keyCode === 85 ||
                    e.keyCode === 117)) {
                    // alert('not allowed');
                    return false;
                } else {
                    return true;
                }
            };
        $(document).ready(function() {
            $(document).bind("contextmenu",function(e){
                return false;
            });
          // alert('check');
          $("#register_cellphone").keypress(function (e) {
            //if the letter is not digit then display error and don't type anything
                if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
                    //display error message
                    // $("#errmsg").html("Digits Only").show().fadeOut("slow");
                        return false;
                }
            });
          $("#loginBtn").click(function(e) {

              $.ajaxSetup({
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  }
              });

              e.preventDefault();
              var email = $("input[name='user_email']").val();
              var password = $("input[name='user_password']").val();
              console.log(email+" : "+password);
              $.ajax({
                  url: "{{ url(app()->getLocale().'/user-login') }}",
                  type: 'POST',
                  data: {
                      email: email,
                      password: password
                  },
                  success: function(data) {
                    console.log(data);
                      if ($.isEmptyObject(data.error)) {
                          // alert(data.success);
                          var url = window.location.pathname;
                            console.log(url);
                            window.location.href = url;
                          // email.val('');
                          // password.val('');
                      } else {
                        console.log(data.error);
                        // $("#errorMsg").text(data.error);
                          printErrorMsg(data.error);
                      }
                  }
              });

          });
          ///-------------login ajex----

          $("#registerBtn").click(function(e) {

            e.preventDefault();
            var email = $("input[name='register_email']").val();
            var password = $("input[name='register_password']").val();
            // var cellphone = $("input[name='register_cellphone']").val();
            var name = $("input[name='register_name']").val();

            console.log("email: "+email );
            console.log("password: "+password );
            // console.log("cellphone: "+cellphone );
            console.log("name: "+name );

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });


            $.ajax({
                url: "{{ url('app()->getLocale()./user-register') }}",
                type: 'POST',
                data: {
                    name: name,
                    email: email,
                    password: password
                },
                success: function(data) {
                  console.log(data);
                    if ($.isEmptyObject(data.error)) {
                        // alert(data.success);
                        var url = window.location.pathname;
                            console.log(url);
                            window.location.href = url;
                        email.val('');
                        password.val('');
                    } else {
                      console.log(data.error);
                      // $("#errorMsg").text(data.error);
                        printErrorMsg(data.error);
                    }
                }
            });

            });


          function printErrorMsg(msg) {
              $(".print-error-msg-login").find("ul").html('');
              $(".print-error-msg-login").css('display', 'block');
              $.each(msg, function(key, value) {
                  $(".print-error-msg-login").find("ul").append('<li style="color:red;">' + value + '</li>');
              });
          }
        });
      </script>
        {{-- ------------------------end login script---- --}}



<!-- hero style -->
<style>
    .FrontHeroBanner-module__root___3oiTD {
        display: flex;
        justify-content: center;
        align-items: flex-end;
        height: 50rem;
        overflow: hidden;
    }

    @media print,
    screen and (max-width: 39.99875em) {
        .FrontHeroBanner-module__root___3oiTD {
            height: 40rem;
        }
    }

    .FrontHeroBanner-module__container___2h_K5 {
        position: relative;
        padding-left: 70px;
        max-width: 3000px;
        width: 100%;
        height: 100%;
        display: flex;
        justify-content: flex-start;
        align-items: flex-end;

    }

    .FrontHeroBanner-module__image___2eq8H {
        top: -10;
        right: -15%;
        position: absolute;
        z-index: 0;
        min-height: 100%;
        width: auto;
        min-width: 1300px;
        -o-object-fit: cover;
        object-fit: cover;
        opacity: 0;
        transition: opacity 150ms ease-in-out;
    }

    @media print,
    screen and (max-width: 74.99875em) {
        .FrontHeroBanner-module__image___2eq8H {
            right: -300px;
        }
        .FrontHeroBanner-module__container___2h_K5{
            padding-left: 50px;
        }
        .fNazjO{
            font-size: 3.21rem
        }

    }

    @media print,
    screen and (max-width: 63.99875em) {
        .FrontHeroBanner-module__image___2eq8H {
            right: -400px;
        }
        .FrontHeroBanner-module__container___2h_K5{
            padding-left: 40px;
        }
        .fNazjO{
            font-size: 3.14rem
        }
    }

    .enableRtl .FrontHeroBanner-module__image___2eq8H {
        left: -30%;
        right: auto;
    }

    @media print,
    screen and (max-width: 74.99875em) {
        .enableRtl .FrontHeroBanner-module__image___2eq8H {
            left: -300px;
            right: auto;
        }
    }

    @media print,
    screen and (max-width: 63.99875em) {
        .enableRtl .FrontHeroBanner-module__image___2eq8H {
            left: -400px;
            right: auto;
        }
    }

    .FrontHeroBanner-module__dimmer___31VJn {
        display: none;
        position: absolute;
        top: 0;
        width: 100%;
        height: 100%;
        z-index: 1;
        background-color: rgba(33, 32, 37, 0.3);
    }

    @media print,
    screen and (max-width: 39.99875em) {
        .FrontHeroBanner-module__dimmer___31VJn {
            display: block;
        }
        .FrontHeroBanner-module__container___2h_K5{
            padding-left: 0px;
        }
        .fNazjO{
            font-size: 3.0rem
        }
    }

    .FrontHeroBanner-module__content___2AjMM {
        position: relative;
        z-index: 11;
        width: 33.375rem;
        margin-top: 3.4375rem;
        padding: 0 30px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        height: 100%;
    }

    @media print,
    screen and (max-width: 63.99875em) {
        .FrontHeroBanner-module__content___2AjMM {
            min-width: 20rem;
        }
    }

    @media print,
    screen and (max-width: 39.99875em) {
        .FrontHeroBanner-module__content___2AjMM {
            justify-content: flex-end;
            padding: 0 16px;
        }
    }

    .FrontHeroBanner-module__headerContainer___13kez {
        height: 8.75rem;
        position: relative;
    }

    .FrontHeroBanner-module__headers___2zc8Z {
        position: absolute;
        bottom: 0;
    }

    .FrontHeroBanner-module__addressLabel___2xsQy {
        font-size: 1.2rem;
        font-weight: 500;
        color: #202125;
        margin-bottom: 1rem;
    }

    @media print,
    screen and (max-width: 39.99875em) {
        .FrontHeroBanner-module__addressLabel___2xsQy {
            color: #fff;
        }
    }

    .FrontHeroBanner-module__cityLink___1OIWM {
        margin-top: 2.75rem;
        white-space: nowrap;
    }

    .FrontHeroBanner-module__cityLink___1OIWM a,
    .FrontHeroBanner-module__cityLink___1OIWM span {
        font-size: 1.375rem;
        font-weight: 500;
        color: #202125;
    }

    .FrontHeroBanner-module__cityLink___1OIWM a::after,
    .FrontHeroBanner-module__cityLink___1OIWM span::after {
        border-color: #202125;
    }

    .FrontHeroBanner-module__cityLink___1OIWM a:hover,
    .FrontHeroBanner-module__cityLink___1OIWM span:hover {
        color: #202125;
    }

    @media print,
    screen and (max-width: 39.99875em) {
        .FrontHeroBanner-module__cityLink___1OIWM {
            margin-top: 1rem;
            margin-bottom: 4rem;
            white-space: pre-wrap;
        }

        .FrontHeroBanner-module__cityLink___1OIWM a {
            text-decoration: underline;
        }

        .FrontHeroBanner-module__cityLink___1OIWM a,
        .FrontHeroBanner-module__cityLink___1OIWM span {
            color: #fff;
        }

        .FrontHeroBanner-module__cityLink___1OIWM a::after,
        .FrontHeroBanner-module__cityLink___1OIWM span::after {
            border: none;
        }
    }
    .fNazjO {
    font-feature-settings: "kern", "ss01", "ss05", "ss07";
    text-rendering: optimizelegibility;
    font-family: WoltHeading-Omnes, system-ui, -apple-system, BlinkMacSystemFont, "Roboto", "Open Sans", sans-serif;
    font-variant-ligatures: common-ligatures;
    font-size: 3.75rem;
    line-height: 3.75rem;
    font-weight: 600;
    font-style: normal;
    font-stretch: normal;
    text-transform: none;
    margin: 0px 0px 0rem;
}
.jAOmqL {
    display: inline-block;
    margin: 0px;
    }
    /* address field */
    .AddressPickerInput-module__root___30L3J {
        position: relative;
        margin: 0;
        padding: 0;
        display: flex;
    }

    .AddressPickerInput-module__input___20pzW {
        margin: 0;
        padding: 0.5rem 2.5rem 0.5rem 0.625rem;
        box-shadow: none;
        background: #fff;
        border: 1px solid rgba(32, 33, 37, 0.12);
        border-radius: 2px;
        font-size: 1rem;
        color: rgba(32, 33, 37, 0.87);
    }

    .AddressPickerInput-module__input___20pzW::-moz-placeholder {
        color: #cacacb;
    }

    .AddressPickerInput-module__input___20pzW:-ms-input-placeholder {
        color: #cacacb;
    }

    .AddressPickerInput-module__input___20pzW::placeholder {
        color: #cacacb;
    }

    .AddressPickerInput-module__tooltipWrapper___14sIZ {
        flex: 4;
    }

    .AddressPickerInput-module__tooltipWrapper___14sIZ label {
        position: absolute;
        height: 1px;
        width: 1px;
        overflow: hidden;
        clip: rect(1px, 1px, 1px, 1px);
        -webkit-clip-path: inset(50%);
        clip-path: inset(50%);
        margin: -1px;
        padding: 0;
    }

    .AddressPickerInput-module__button___1f7rV {
        flex: 1;
        margin-left: 4px;
        -webkit-margin-start: 4px;
        margin-inline-start: 4px;
        -webkit-margin-end: 0;
        margin-inline-end: 0;
        padding: 0.4rem 0.5rem;
        cursor: pointer;
    }

    @media (max-width: 640px) {
        .AddressPickerInput-module__button___1f7rV {
            margin-left: 2px;
            width: calc(20% - 2px);
        }
    }

    .AddressPickerInput-module__results___-K_zM {
        border-radius: 2px;
        list-style: none;
        margin: 0;
        padding-bottom: 0.5rem;
    }

    .AddressPickerInput-module__googleResults___HZ47U {
        padding-bottom: 1rem;
        /*
   * Google logo must be shown for legal reasons, unless we also show a map by google
   * https://developers.google.com/places/web-service/policies#logo_requirements
   */
        background: #fff url(https://static.wolt.com/images/powered_by_google_on_white-46afd78d537c22b564e7baad76bac26a.png) no-repeat bottom 0.5rem right 0.625rem;
    }

    .AddressPickerInput-module__result___1IqVT,
    .AddressPickerInput-module__resultActive___2zRVW {
        display: block;
        padding: 0.5rem 0.625rem 0;
        color: rgba(32, 33, 37, 0.87);
        font-size: 1rem;
    }

    a.AddressPickerInput-module__result___1IqVT:hover,
    .AddressPickerInput-module__resultActive___2zRVW {
        color: #1fa9e4;
    }

    .AddressPickerInput-module__resultCity___1hXV1 {
        font-size: 0.875rem;
        color: #aaabac;
    }

    .AddressPickerInput-module__divider___2lh1V {
        width: 100%;
        padding: 0.5rem 1.2rem;
        background-color: #f8f8f8;
        font-size: 0.75rem;
    }

    .AddressPickerInput-module__spinner___fuar6 {
        position: absolute;
        right: 20%;
        height: 100%;
        top: 0;
        margin: 0;
        padding: 5px;
    }

    .AddressPickerInput-module__popup___iAmTj {
        -webkit-backface-visibility: hidden;
        backface-visibility: hidden;
        border-radius: 0 0 4px 4px;
        border: 1px solid #e4e4e4;
        background: #fff;
    }
    .FrontPageLocationSelector-module__button___1lxSd {
        border-radius: 8px;
        margin-left: 1rem;
        box-shadow: 0 0 8px 0 rgba(32, 33, 37, 0) !important;
    }
    .Button-module__button___QloF7 {
        display: block;
        width: 100%;
        padding: 1.25rem 2rem;
        color: #fff;
        font-size: 1rem;
        font-weight: 500;
        background-color: #009de0;
        border-radius: 8px;
        text-align: center;
        cursor: pointer;
        position: relative;
        transition: background-color 150ms ease-out, color 150ms ease-out;
    }
    /* end address field */
    .ml10 {
  position: relative;
  font-weight: 900;
  font-size: 4em;
}

.ml10 .text-wrapper {
  position: relative;
  display: inline-block;
  padding-top: 0.2em;
  padding-right: 0.05em;
  padding-bottom: 0.1em;
  overflow: hidden;
}

.ml10 .letter {
  display: inline-block;
  line-height: 1em;
  transform-origin: 0 0;
}





</style>
<!-- end hero style -->


<div id="content" class="has-off-canvas-sidebar rigid-left-sidebar">
    {{-- slideshow start --}}
    {{-- hero section --}}
    <div class="FrontHeroBanner-module__root___3oiTD" style="
    background-image:url({{asset('frontEnd-assets/images/hero-hero.jpg')}});
    background-size: cover;
    /* background-size: 100% 100%; */
    background-position: center center;
    background-repeat: no-repeat;

    /* background-color:#BAE1DC; */
    margin-top:68px;
    ">
        <div class="FrontHeroBanner-module__container___2h_K5">
            <div >

                  {{-- <img
                    src="{{asset('frontEnd-assets/images/hero.jpg')}}" srcset="
                    {{asset('frontEnd-assets/images/hero.jpg')}}
                    " class="FrontHeroBanner-module__image___2eq8H" style="opacity: 1; width: 0px;" alt=""> --}}

            </div>
                {{-- <img
                src="https://cdn.wolt.com/frontpage-assets/hero-images/5_Friday.jpg" srcset="
        https://cdn.wolt.com/frontpage-assets/hero-images/5_Friday@0.5x.jpg 640w,
        https://cdn.wolt.com/frontpage-assets/hero-images/5_Friday.jpg 1100w,
        https://cdn.wolt.com/frontpage-assets/hero-images/5_Friday@2x.jpg 4000w,
      " class="FrontHeroBanner-module__image___2eq8H" style="opacity: 1;" alt=""> --}}
            <div class="FrontHeroBanner-module__dimmer___31VJn"></div>

            <div class="hero-content"
            style="position: relative;
            z-index: 11;
            width: 40rem;
            margin-top: 3.4375rem;
            padding: 0 30px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            height: 100%;
            color: #fff;
            "

            >
            <style>
                .fade-word{
                    position: relative;
                    top: -100px;
                    height: 60px;
                    color: #000;"
                }
                .js-nametag{
                    position: absolute;
                    color: black;
                }
                .js-nametag:nth-child(1){
                animation-name: fade;
                animation-fill-mode: both;
                animation-iteration-count: infinite;
                animation-duration: 5s;
                animation-direction: alternate-reverse;
                }


                .js-nametag:nth-child(2){
                animation-name: fade;
                animation-fill-mode: both;
                animation-iteration-count: infinite;
                animation-duration: 5s;
                animation-direction: alternate;
                }
                .js-nametag:nth-child(3){
                animation-name: fade;
                animation-fill-mode: both;
                animation-iteration-count: infinite;
                animation-duration: 5s;
                animation-direction: alternate;
                }
                .js-nametag:nth-child(4){
                animation-name: fade;
                animation-fill-mode: both;
                animation-iteration-count: infinite;
                animation-duration: 5s;
                animation-direction: alternate;
                }

                @keyframes fade{
                    0%,50% {
                    opacity: 0;
                }
                    100%{
                    opacity: 1;
                }
                }
                .quotes {display: none;}
            </style>
            {{-- <div class="fade-word">
                    <h1 class="js-nametag fNazjO">Γιορτάζει;</h1>
                    <h1 class="js-nametag fNazjO">Την σκέφτεσαι;</h1>
                    <h1 class="js-nametag fNazjO">Θέλεις να κάνεις έκπληξη;</h1>
                    <h1 class="js-nametag fNazjO">Έχει γενέθλια;</h1>
                    <h1 class="js-nametag fNazjO">Την σκέφτεσαι;</h1>
                    <h1 class="js-nametag fNazjO">Την σκέφτεσαι;</h1>
                </div> --}}

                {{-- <h1 class="ml10">
                    <span class="text-wrapper">
                        <span class="letters">Domino Dreams</span>
                    </span>
                </h1> --}}
                {{-- <h1 class="hero-text" id="hero-text">Rai Saeed Anwar</h1> --}}

                {{-- <h1 class="fNazjO"
                style="position: relative;
                top: -50px;
                height: 60px;
                color: #000;"
                >
                    <span
                       class="txt-rotate"
                       data-period="2000"
                       data-rotate='[ "Γιορτάζει;", "Την σκέφτεσαι;","Θέλεις να κάνεις έκπληξη;", "Έχει γενέθλια;", "Ερωτεύτηκες;","Επέτειος;","Γιατί απλά μπορείς..!" ]'>
                    </span>
                </h1> --}}

                <style>
                    @media screen and (max-width: 500px) {
                        .fNazjO {
                            font-size: 2.75rem;
                        }

                    }
                </style>

                <div class="hero-heading">
                    <h2 class="quotes fNazjO" style="position: relative;
                    top: -50px;
                    height: 60px;
                    color: #000;">
                        {{-- Γιορτάζει; --}}
					{{-- {{__('words.Γιορτάζει;')}} --}}
                    @if (app()->getLocale() == 'gr' )
                        Στείλτε λουλούδια τώρα!
                    
                    @else
                        Send flowers now!
                    @endif
                    
                    </h2>
                    <h2 class="quotes fNazjO" style="position: relative;
                    top: -50px;
                    height: 80px;
                    color: #000;">
                        {{-- Θέλεις να κάνεις έκπληξη; --}}
					{{-- {{__('words.Θέλεις να κάνεις έκπληξη;')}} --}}
                    @if (app()->getLocale() == 'gr' )
                    Απο τα καλύτερα ανθοπωλεία 
                    
                    @else
                    One of the best florists
                    @endif

                    </h2>
                    <h2 class="quotes fNazjO" style="position: relative;
                    top: -50px;
                    height: 60px;
                    color: #000;">
                        {{-- Έχει γενέθλια; --}}
					{{-- {{__('words.Έχει γενέθλια;')}} --}}
                    @if (app()->getLocale() == 'gr' )
                    Ερωτεύτηκες;
                    
                    @else
                    Did you fall in love?
                    @endif
                    </h2>
                    <h2 class="quotes fNazjO" style="position: relative;
                    top: -50px;
                    height: 60px;
                    color: #000;">
                        {{-- Ερωτεύτηκες; --}}
					{{-- {{__('words.Ερωτεύτηκες;')}} --}}
                    @if (app()->getLocale() == 'gr' )
                    Γιορτάζει;
                    
                    @else
                    Is it celebrating?
                    @endif
                    </h2>
                    <h2 class="quotes fNazjO" style="position: relative;
                    top: -50px;
                    height: 60px;
                    color: #000;">
                        {{-- Επέτειος; --}}
					{{-- {{__('words.Επέτειος;')}} --}}
                    @if (app()->getLocale() == 'gr' )
                    Στείλτε λουλούδια τώρα!
                    
                    @else
                    Send flowers now!
                    @endif
                    </h2>
                    <h2 class="quotes fNazjO" style="position: relative;
                        top: -50px;
                        height: 60px;
                        color: #000;">
                            {{-- Γιατί απλά μπορείς..! --}}
                        {{-- {{__('words.Γιατί απλά μπορείς..!')}} --}}
                        @if (app()->getLocale() == 'gr' )
                        Απο τα καλύτερα ανθοπωλεία 
                    
                        @else
                        One of the best florists
                        @endif
                    </h2>
                    <h2 class="quotes fNazjO" style="position: relative;
                        top: -50px;
                        height: 60px;
                        color: #000;">
                            {{-- Γιατί απλά μπορείς..! --}}
                        {{-- {{__('words.Γιατί απλά μπορείς..!')}} --}}
                        @if (app()->getLocale() == 'gr' )
                        Επέτειος;
                    
                        @else
                        Anniversary?
                        @endif
                    </h2>
                    <h2 class="quotes fNazjO" style="position: relative;
                        top: -50px;
                        height: 60px;
                        color: #000;">
                            {{-- Γιατί απλά μπορείς..! --}}
                        {{-- {{__('words.Γιατί απλά μπορείς..!')}} --}}
                        
                        @if (app()->getLocale() == 'gr' )
                        Έχει γενέθλια;
                    
                        @else
                        Has birthday?
                        @endif
                    </h2>
                </div>
                <script>
                    (function() {

                        var quotes = $(".quotes");
                        var quoteIndex = -1;

                        function showNextQuote() {
                        ++quoteIndex;
                        quotes.eq(quoteIndex % quotes.length)
                            .fadeIn(1000)
                            .delay(1000)
                            .fadeOut(1000, showNextQuote);
                        }

                        showNextQuote();

                    })();
                </script>


                <h3 style="font-size: 1.2rem;
                font-weight: 500;
                margin-bottom: 2rem; color: #000;">
                    {{-- Delivery address --}}
                    {{-- Διεύθυνση --}}
                </h3>

                <style>
                    .location-input{
                        font-size: 14px;
                    }
                    .part-2{
                        width: 170px;
                    }
                    .searchBtn,.disabledBtn{
                        font-size:16; 
                        padding-top: 12px !important;
                        padding-bottom: 12px !important;
                    }
                    .buttom-text{
                        font-size:14; 
                    }
                    @media screen and (max-width: 530px) {
                        .part-2{
                            width: 118px;
                            
                        }
                        .searchBtn,.disabledBtn{
                            font-size:13; 
                            padding-top: 16px !important;
                            padding-bottom: 16px !important;
                        }
                        .location-input{
                            font-size: 13px;
                        }
                        .buttom-text{
                            font-size:10; 
                        }
                    }
                    @media screen and (max-width: 470px) {
                        .part-2{
                            width: 88px;
                        }
                        .searchBtn,.disabledBtn{
                            font-size:11; 
                            padding-right: 2px !important;
                            padding-left: 2px !important;
                            padding-top: 17px !important;
                            padding-bottom: 17px !important;
                        }
                        .buttom-text{
                            font-size:8px; 
                        }
                    }
                    @media screen and (max-width: 440px) {
                        .location-input{
                            font-size: 11px;
                        }
                    }
                    @media screen and (max-width: 360px) {
                        .part-2{
                            width: 88px;
                        }
                        .searchBtn,.disabledBtn{
                            font-size:9px; 
                            padding-right: 2px !important;
                            padding-left: 2px !important;
                            padding-top: 18px !important;
                            padding-bottom: 18px !important;
                        }
                        .buttom-text{
                            font-size:7px; 
                        }
                    }
                </style>

                <div class="input-group" style="width: 100%;">
                    {{-- <div class="col-md-8"> --}}
                        <input type="text" name=""  class="form-control location-input" id="location-input"
                        style="margin-right: 16px;
                        height: 53px;
                        border-radius: 8px;"
                        {{-- placeholder="Βάλε διεύθυνση ή περιοχή"  --}}
                        {{-- placeholder="{{__('words.Βάλε διεύθυνση ή περιοχή αποστολής')}}" --}}
                        @if (app()->getLocale() == 'gr' )
                            
                            placeholder="Βάλε διεύθυνση η πόλη/περιοχή αποστολής"
                        @else

                            placeholder="Enter the city/area of ​​dispatch"
                            
                        @endif

                        autocomplete="off" >

                    {{-- </div> --}}

                    

                    <div class="part-2">

                        <button disabled class="btn btn-info disabledBtn"  style="
                            border-radius: 8px !important;
                            background-color: #984E66 !important;
                            border-color: #984E66;
                            

                            cursor: not-allowed;
                            display: flex;
                            justify-content: center;
                            ">
                            {{-- Search --}}
                            {{-- Προτάσεις --}}
                            {{-- Παραγγελία --}}
                            {{-- {{__('words.Παραγγελία')}} --}}
                            @if (app()->getLocale() == 'gr' )
                                Παράγγειλε τώρα
                            
                            @else
                                Order Now
                            @endif
                        </button>
                        {{-- working btn --}}
                        <a href="#popup1" class="btn btn-info searchBtn orderBtn d-none"  style="
                            border-radius: 8px !important;
                            /* font-size: 14px; */
                            background-color: #984E66 !important;
                            border-color: #984E66;
                            display: flex;
                            justify-content: center;
                            ">
                            {{-- Search --}}
                            {{-- Προτάσεις --}}
                            {{-- {{__('words.Παραγγελία')}} --}}
                            @if (app()->getLocale() == 'gr' )
                                Παράγγειλε τώρα
                            
                            @else
                                Order Now
                            @endif
    
                        </a>
                        <p style="color: black; " class="buttom-text">
                            @if (app()->getLocale() == 'gr' )
                            Δωρεάν άμεση παράδοση
                            <br>
                            Απο τοπικά ανθοπωλεία
                            
                            @else
                            Free immediate delivery
                            <br>
                            From local florists
                                

                                
                            @endif
                        </p>
                    </div>

                    {{-- disabled btn --}}

                </div>
                <input type="hidden" name="hidden_state" id="hidden_state" />
                    <input type="hidden" name="hidden_region" id="hidden_region" />

                {{-- <div id="match-list"  style="height: 20px;margin-left: -13px;width: 78%;margin-top: 3px;"></div> --}}


            </div>
        </div>
    </div>
    {{-- end hero section --}}
    {{-- rotate word --}}
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script> --}}
    {{-- <script>
        $(document).ready(function(){

        });
    </script> --}}
    {{-- <script>
        // Wrap every letter in a span
        var textWrapper = document.querySelector('.ml10 .letters');
        textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

        anime.timeline({loop: true})
        .add({
            targets: '.ml10 .letter',
            rotateY: [-90, 0],
            duration: 1300,
            delay: (el, i) => 45 * i
        }).add({
            targets: '.ml10',
            opacity: 0,
            duration: 1000,
            easing: "easeOutExpo",
            delay: 1000
        });// Wrap every letter in a span
        var textWrapper = document.querySelector('.ml10 .letters');
        textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

        anime.timeline({loop: true})
        .add({
            targets: '.ml10 .letter',
            rotateY: [-90, 0],
            duration: 1300,
            delay: (el, i) => 45 * i
        }).add({
            targets: '.ml10',
            opacity: 0,
            duration: 1000,
            easing: "easeOutExpo",
            delay: 1000
        });
    </script> --}}

    <script>
        $(document).ready(function(){
          // Add smooth scrolling to all links
          var screenHeight = screen.height;

          $('.slideshow').css('height',screenHeight+"px");
          $('.videoSection').css('height',screenHeight+"px");

          console.log("screen height: "+screenHeight);

            $("#arrowDown").click(function() {
                // alert('check');
                $('html,body').animate({

                scrollTop: $("#steps3space").offset().top},
                1000);
            });


        //   $("#arrowDown").on('click', function(event) {

        //     // Make sure this.hash has a value before overriding default behavior
        //     if (this.hash !== "") {
        //       // Prevent default anchor click behavior
        //       event.preventDefault();

        //       // Store hash
        //       var hash = this.hash;

        //       // Using jQuery's animate() method to add smooth page scroll
        //       // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
        //       $('html, body').animate({
        //         scrollTop: $(hash).offset().top
        //       }, 800, function(){

        //         // Add hash (#) to URL when done scrolling (default click behavior)
        //         window.location.hash = hash;
        //       });
        //     } // End if
        //   });
        });
    </script>


    {{-- start homepage address --}}
    <script>

        //start google places api
        var searchInput = 'location-input';

       $(document).ready(function () {


        var autocomplete;
        autocomplete = new google.maps.places.Autocomplete((document.getElementById(searchInput)), {
          types: ['geocode'],
         componentRestrictions: {
          country: "GR"
         }
        });

        google.maps.event.addListener(autocomplete, 'place_changed', function () {
         var near_place = autocomplete.getPlace();
         var formated_address = near_place.formatted_address;
        var formated_address = near_place.formatted_address;
        var splitFormatedAddress = formated_address.split(",");
        var getFormateCity = splitFormatedAddress[splitFormatedAddress.length - 2];
        var cityWithNoDigits = getFormateCity.replace(/[0-9]/g, '');
            console.log("no number: "+cityWithNoDigits);
            $("#hiddenCityInGr").val(cityWithNoDigits);
        console.log('formated address: '+ formated_address);

        $(".searchBtn").removeClass("d-none");
        $(".disabledBtn").addClass("d-none");

        // $(".searchBtn").attr("disabled", false);
        // $(".searchBtn").attr("href","#popup1");
         console.log('enter in place change');
        });
       });

          //google places api code


                                    if(performance.navigation.type == 2) {
                                        console.log('back button work');
                                        var saveAddress = getSavedValue("addressID");

                                        geocode('',saveAddress);
                                    }

                                    // start map
                                    // if (window.history && window.history.pushState) {

                                    //   window.history.pushState('forward', null, './#forward');

                                    //   $(window).on('popstate', function() {
                                    //     alert('Back button was pressed.');
                                    //   });

                                    // }



                                    function geocode(region,loction) {
                                      // Prevent actual submit
                                      // e.preventDefault();
                                        console.log("location: "+loction);
                                      var location = loction;

                                      axios
                                        .get("https://maps.googleapis.com/maps/api/geocode/json", {
                                          params: {
                                            address: location,
                                            key: "AIzaSyBe4PR29ODW5SvCsODBbmQMm2V5AXYzLu4",
                                          },
                                        })
                                        .then(function (response) {
                                          // Log full response
                                          console.log(response);
                                          var addressComponents = response.data.results[0].address_components;
                                          for (var i = 0; i < addressComponents.length; i++) {
                                            if (addressComponents[i].types[0] == 'postal_code') {
                                              $("#zip_code").val(addressComponents[i].long_name);
                                              console.log(addressComponents[i].long_name);
                                            }
                                          }
                                          var lat = response.data.results[0].geometry.location.lat;
                                          var lng = response.data.results[0].geometry.location.lng;
                                          $("#lat").val(lat);
                                          $("#lng").val(lng);
                                          let map;
                                            console.log(region+ " : "+lat+" & "+lng);
                                            map = new google.maps.Map(document.getElementById("map"), {
                                              center: { lat: lat, lng: lng },
                                              zoom: location ==='Greece' ? 6 : 15,
                                            });
                                            new google.maps.Marker({
                                                position:{ lat: lat, lng: lng },
                                                map:map,
                                                title:region !='' ? region : location
                                            });

                                        })
                                        .catch(function (error) {
                                          console.log(error);
                                        });

                                    }

                                    $("#cities").keyup(function () {
                                          var city = this.value;
                                          geocode(city,city);
                                      });

                                    // end map
                                    if( !$("#location-input").val() ) {
                                      // $(':input[type="submit"]').prop('disabled', false);
                                      // $('#orderBtn').prop('disabled', false);
                                      // $("#orderBtn").attr("disabled", true);
                                      // $("#orderBtn").attr("href"," ");
                                    }else{
                                      $(".orderBtn").attr("disabled", false);
                                      $(".orderBtn").attr("href","#popup1");
                                    }

                                    const search = document.getElementById("location-input");
                                    const matchList = document.getElementById("match-list");

                                    function checkList(text){
                                      if(text.length===2){
                                          matchList.innerHTML = ulHtml;
                                          const ul = document.getElementById("ul");
                                          html =`
                                          <li class=" text-muted d-flex align-items-center address-form-component-list-item rounded selected" style="position:relative;top:-50px;padding-top:70px">
                                            <span class="fa fa-map-marker">Your address wasn't found?
                                            <a href="#popup1" id="clickHereBtn" style:"text-decoration: none;"> <b>Click here</b></a></span>
                                          </li>
                                          `;
                                          ul.innerHTML = html;
                                        }
                                    }
                                    $(document).click(function (e){

                                    var container = $("#ul");
                                    if (!container.is(e.target) && container.has(e.target).length === 0){

                                      container.fadeOut();

                                    }
                                    });
                                    const searchStates = async searchText =>{

                                        // console.log(states);
                                        let matches = states.filter(state=>{
                                          const regex = new RegExp(`^${searchText}`,'gi');
                                          return state.city_name.match(regex);
                                        });
                                        if(searchText.length===0){
                                          matches = [];
                                          matchList.innerHTML = '';
                                        }

                                        // console.log(matches);
                                        outputHtml(matches);
                                        // alert('check');
                                    }
                                    var ulHtml = `<ul class="box-shadow border-top rounded-bottom list-unstyled  bg-white  address-form-component-list" id = "ul" style="display: block; height:20px; position:relative;padding-bottom: 60px">

                                    </ul>`;

                                    const outputHtml = matches => {
                                        matchList.innerHTML = ulHtml;
                                        const ul = document.getElementById("ul");
                                      if (matches.length>0) {

                                        var html = matches.map(match =>`
                                        <li class="p-5 text-muted d-flex align-items-center address-form-component-list-item rounded selected city" id="${match.id}" >
                                          <span class="fa fa-map-marker"></span>
                                          <input type="hidden" name="state" value="${match.country}" class="state"  >
                                          <input type="hidden" name="region" value="${match.city_name}" class="region"  >
                                          <span class="address-form-component-scope-friendly-name">${match.country}, ${match.city_name}</span>
                                        </li>
                                        `).join('');
                                        // console.log(html);
                                        html +=`
                                        <li class="p-5 text-muted d-flex align-items-center address-form-component-list-item rounded selected city" >

                                          <span class="address-form-component-scope-friendly-name">Your address wasn't found? <b>Click here</b></span>
                                        </li>
                                        `;
                                        ul.innerHTML = html;
                                      }else{
                                        html =`
                                        <li class="p-5 text-muted d-flex align-items-center address-form-component-list-item rounded selected" >
                                          <span class="address-form-component-scope-friendly-name">Your address wasn't found? <a href="#popup1" id="clickHereBtn" style:"text-decoration: none;"> <b>Click here</b></a></span>
                                        </li>
                                        `;
                                        ul.innerHTML = html;
                                      }


                                    }

                                    function closePop() {
                                      $("#zip_code").val('');
                                    }
                                    $(document).on('click','#closePop',closePop);

                                    $(document).on('click','.orderBtn',orderBtnFunction);
                                    $(document).on('click','clickHereBtn',clickHereFunction);
                                    function clickHereFunction() {
                                      var address = 'Greece';
                                      getAddreess(address);
                                    }
                                    function orderBtnFunction() {
                                      var address = $('#location-input').val();
                                        var hiddenCity =  $("#hiddenCityInGr").val();
                                      console.log('orderBtn: '+address);
                                      saveValue('addressID',address);
                                      getAddreess(address,hiddenCity);
                                    }
                                    function saveValue(id,value){
                                          var id = id;  // get the sender's id to save it .
                                          var val = value;
                                          localStorage.setItem(id, val);
                                          console.log('value save');
                                    }
                                    function getSavedValue  (v){
                                          if (!localStorage.getItem(v)) {
                                              return "nothing";// You can change this to your defualt value.
                                          }
                                          return localStorage.getItem(v);
                                      }
                                    function getAddreess(address,city){
                                      // alert('slam');
                                      const cities = document.getElementById("cities");
                                        var cityInGR = document.getElementById("cityInGR");

                                      // const regions = document.getElementById("regions");

                                    //   const citiesHtml = states.map(match =>`
                                    //        <option value="${match.city_name}">${match.city_name}</option>

                                    //     `).join('');
                                      // $.each( arr, function( index, value ){
                                      //     sum += value;
                                      // });

                                      // var getState = $('#hidden_state').val();
                                      // var getRegion = $('#hidden_region').val();

                                      var splitAddress = address.split(",");
                                      var getRegion = splitAddress[0];
                                      // var getState = splitAddress[1];

                                      var getState = splitAddress[splitAddress.length - 2];
                                      console.log("split address: "+ splitAddress);
                                      console.log(splitAddress[splitAddress.length - 2]);


                                      // $("#regions").val(getRegion);
                                      // region_dropdown = `<option value='${getRegion}' selected >${getRegion}</option>`;
                                      $("#regions").val(getRegion);
                                      // console.log("orderAddress: "+address);
                                      $("#completeAddress").val(address);
                                      console.log("checkAddress: "+$("#completeAddress").val());
                                      var state_dropdown = `<option value='${getState}' selected>${getState}</option>`;
                                      // cities.innerHTML = state_dropdown;
                                      cities.value = getState;
                                        cityInGR.value = city;

                                      var seleted;


                                      //get the saved value function - return the value of "v" from localStorage.

                                      var saveAddress = getSavedValue("addressID");
                                      console.log('save address :'+ saveAddress);
                                      geocode(getRegion,address);



                                      // $.each(states, function( i, val ) {
                                      //   if (val.city_name === getRegion) {
                                      //     seleted = "selected";
                                      //   } else {
                                      //     seleted = "";
                                      //   }
                                      //   state_dropdown += `<option value='${val.city_name}' ${seleted}>${val.city_name}</option>`;
                                      // });

                                      // cities.innerHTML = state_dropdown;

                                      console.log(address);
                                      $('#location-input').val('');
                                    }

                                    function cityInfo(){
                                      // alert('check');
                                      var text = $(this).text();
                                      var state = $(this).find('.state').val();
                                      var region = $(this).find('.region').val();

                                      console.log(state);
                                      console.log(region);


                                      $(".orderBtn").attr("disabled", false);
                                      $(".orderBtn").attr("href","#popup1");
                                      // $('#number').val(city);
                                      var trimStr = $.trim(text);
                                      $("#searchAddress").val(trimStr);
                                      $("#hidden_state").val(state);
                                      $("#hidden_region").val(region);

                                      $('#ul').hide();

                                      // alert(text);
                                    }

                                    search.addEventListener("input", () => checkList(search.value));

                                    // search.addEventListener("input", () => searchStates(search.value));
                                    $(document).on('click','.city',cityInfo)
                                  </script>

                                  {{-- end homepage address --}}



    {{-- slideshow end --}}

                        {{-- ---------start address popup --}}
                        <div id="addressPopup" class="overlay" style="z-index: 1050">
                            {{-- <form action="{{url('/add-address')}}" method="post">{{ csrf_field() }} --}}

                            <div class="popup">
                              <a class="close" id="closePop" href="#" onclick="resetHref();" style="float: right">
                                <div>
                                  &times;
                                </div>
                                {{-- <a href="#">
                                  <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x fa-inverse"></i>
                                    <i class="fa fa-times fa-stack-1x"></i>
                                  </span>
                                </a> --}}
                                </a>
                                {{-- <div class="cc-modal-dismiss" style="float: right;">
                                  <a href="#">
                                    <span class="fa-stack fa-lg">
                                      <i class="fa fa-circle fa-stack-2x fa-inverse"></i>
                                      <i class="fa fa-times fa-stack-1x"></i>
                                    </span>
                                  </a>
                                </div> --}}
                                <div class="d-flex flex-column justify-content-between px-md-5 bg-white">
                                  <div class="modal-header pt-7 pb-0 px-0" style="height: 112px">
                                      <div class="mx-auto w-100 d-flex justify-content-center align-items-top">
                                          {{-- <button type="button" class="modal-close ml-auto mr-7" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true" class="fa fa-times"></span>
                                          </button> --}}
                                          {{-- <div class="cc-modal-dismiss" style="float: right;">
                                            <a href="#">
                                              <span class="fa-stack fa-lg">
                                                <i class="fa fa-circle fa-stack-2x fa-inverse"></i>
                                                <i class="fa fa-times fa-stack-1x"></i>
                                              </span>
                                            </a>
                                          </div> --}}
                                          <div class="position-absolute w-75" style="pointer-events: none">
                                              <h1 class="h2 text-center">Enter your address</h1>
                                              <p class="text-center text-muted">to see if the store <span class="font-weight-bold app_shop_name"></span> serves you.</p>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="modal-body bg-white pt-md-0">
                                      <div class="modal-address-form pb-8">
                                        <form id="address-form-component" class="address-search user-address-empty user-address-ready">
                                          <div class="address-form-component-overlay"></div>
                                          <div class="box-shadow rounded position-relative">
                                              <div class="address-form-component-outer d-flex align-items-center flex-column flex-lg-row bg-white pl-md-9 p-3 pl-5 rounded position-relative">
                                                  <div class="d-flex align-items-center w-100 address-form-component-inner">
                                                      {{-- <i class="fas fa-circle-notch text-muted fa-spin text-muted address-form-component-icon-loading" aria-hidden="true"></i> --}}
                                                      {{-- <span id="scope" class="address-form-component-scope-icon"></span> --}}
                                                      <span class="fa fa-search"></span>
                                                      <span id="friendly_name" class="address-form-component-scope-friendly-name"></span>
                                                      {{-- <input type="text" class="form-control address-form-component-search-input border-0 pl-2 text-truncate" placeholder="Διεύθυνση παραλήπτη" id="location-input"
                                                      autocomplete="off"> --}}
                                                      <input
                                                        type="text" data-field-name="city_name"
                                                        class="form-control autocomplete_txt "
                                                        placeholder="Διεύθυνση παραλήπτη"
                                                        {{-- id="searchAddress" --}}
                                                        id="location-input2"
                                                        autocomplete="off"
                                                      />
                                                      {{-- <button type="button" class="btn btn-link address-form-component-clear-btn px-3 px-md-5 mr-md-5"><i class="fa fa-times text-muted" aria-hidden="true"></i></button> --}}
                                                      {{-- <button type="button" class="btn btn-link address-form-component-geolocation-btn px-3 px-sm-5 d-lg-none"><i class="fas fa-crosshairs text-muted" aria-hidden="true"></i></button> --}}
                                                      {{-- <span class="address-form-component-list-arrow px-3 pr-md-9"><i class="fas fa-angle-down" aria-hidden="true"></i></span> --}}
                                                  </div>
                                                  {{-- <ul class="box-shadow border-top rounded-bottom list-unstyled position-absolute bg-white w-100 py-5 px-1 px-md-5 address-form-component-list"></ul> --}}
                                                  {{-- <button type="button" class="btn btn-link text-muted position-absolute m-0 mt-12 pt-5 align-self-start address-form-component-back-to-saved px-0"><i class="fas fa-arrow-left mr-3" aria-hidden="true"></i><span class="small font-weight-bold hover-no-decoration">View your addresses</span></button> --}}
                                                  <span class="text-muted position-absolute  align-self-start address-form-component-search-help small">
                                                  eg. Dionysou 48, Marousi            </span>

                                                  {{-- <input type="hidden" name="hidden_state" id="hidden_state"> --}}
                                                  <input type="hidden" name="hiddenCityInGr" id="hiddenCityInGr">

                                                  <input type="hidden" name="hidden_region" id="hidden_region">
                                                  <div class="d-none d-lg-block col-12 col-lg-auto px-0">

                                                      <a href="#popup1" class="btn btn-block btn-lg orderBtn orderBtnColor"
                                                      style="color: #212529;
                                                      background-color: #ffc200;
                                                      border-color: #ffc200;">Order now</a>
                                                  </div>
                                              </div>
                                              {{-- <div id="match-list"></div> --}}

                                              {{-- <div class="position-absolute w-100 address-form-component-alert alert alert-warning border-0 rounded py-6 px-9" role="alert">
                                                  Follow the form: Street Name - Number - City, e.g. Michalakopoulou 64, Athens
                                                 </div> --}}
                                          </div>
                                          {{-- src="{{asset('frontEnd-assets/site-assets/img/address/search/illustration@3x.png')}} --}}
                                          <span class="mx-auto mt-11 mb-6 pt-5 d-none d-lg-block"  style="max-width:500px;"></span>
                                          <a href="#popup1" class="btn btn-block btn-lg d-lg-none  mt-lg-0 orderBtn" style="color: #212529;
                                          background-color: #ffc200;
                                          border-color: #ffc200;margin-top: 10px;">Order now</a>
                                          <p class="mb-0 text-muted mx-auto text-center small small-sm mt-4"><strong>Note</strong> – You will be asked to fill in additional info (Floor, Doorbell name) just before sending your order.</p>
                                        </form>
                                        <template id="listItemTemplate">
                                            <li class="p-5 text-muted d-flex align-items-center address-form-component-list-item rounded" data-pos="${index}">
                                                <span data-scope="${scope}" data-friendly-name="${friendly_name}"></span>
                                                <span class="address-form-component-scope-icon" data-scope="${scope}"></span>
                                                <span>
                                                <span class="address-form-component-scope-friendly-name" data-friendly-name="${friendly_name}"></span>
                                                <span>${description}</span>
                                            </span></li>
                                        </template>
                                        <template id="listItemHelpTemplate">
                                            <li class="p-5 text-muted address-form-component-list-item address-form-component-list-item-new-address cant-select">
                                                <span><i class="fas fa-plus-circle mr-3 ml-2"></i>Add new address</span>
                                            </li>
                                            <li class="p-5 text-muted address-form-component-list-item address-form-component-list-item-manual-address cant-select">
                                                <span class="text-muted">Your address wasn't found?</span> <strong>Click here</strong>
                                            </li>
                                        </template>
                                      </div>
                                    </div>
                                      <div class="modal-footer flex-column pt-0 border-0" style="min-height: 100px">
                                        <div>
                                        </div>

                                      </div>
                            </div>

                            </div>

                        </div>

                          {{-- ---------end address popup --}}

                          {{-- -----------start show address and map popup --}}

                          <div id="popup1" class="overlay" style="z-index: 2050">
                            <form action="{{url(app()->getLocale().'/add-address')}}" method="post">{{ csrf_field() }}
                            {{-- <form > --}}
                            <div class="popup">
                              {{-- <a class="close" id="closePop" href="#">
                                <div>
                                  &times;
                                </div>
                                </a> --}}
                                <div class="cc-modal-dismiss" style="float: right;">
                                  <a href="#" onclick="resetHref();">
                                    <span class="fa-stack fa-lg">
                                      <i class="fa fa-circle fa-stack-2x fa-inverse"></i>
                                      <i class="fa fa-times fa-stack-1x" style="font-size: 20px;
                                      width: 30px; color: #984E66"></i>
                                    </span>
                                  </a>
                                </div>
                              <div class="row">
                                <div class="col-md-5" style="padding: 0px; margin:0px; position: relative;top:-10" id="map">
                                  {{-- <iframe style="padding: 0px; margin:0px; border-radius: 5px;" width="100%" height="100%" src="https://maps.google.com/maps?width=100%&amp;height=600&amp;hl=en&amp;coord=52.70967533219885, -8.020019531250002&amp;q=1%20Grafton%20Street%2C%20Dublin%2C%20Ireland&amp;ie=UTF8&amp;t=&amp;z=14&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><br /> --}}

                                </div>
                                <div class="col-md-7">
                                    <div class="modal-header p-7 d-flex justify-content-between flex-row">
                                      <div class="address-confirm-component-header-wrapper text-center mx-auto">
                                        <h1 class="address-confirm-component-header h2 font-weight-bold">
                                            {{-- Address Confirmation  --}}

                                            {{__('words.Επιβεβαίωση Διεύθυνσης')}}

                                        </h1>
                                        <p id="popup_map_text" class="address-confirm-component-subheader text-muted" rel="1">

                                            {{__('words.Επιβεβαίωσε ότι η διεύθυνσή σου έχει συμπληρωθεί σωστά')}}

                                            {{-- Confirm that your address is properly filled --}}
                                        </p>
                                      </div>
                                    </div>

                                    <div class="print-error-msg-login">
                                      <ul style="list-style: none;"></ul>
                                      <br>
                                    </div>
                                    <style>
                                        label{
                                            font-size: 14px !important;
                                            /* text-transform: capitalize !important; */
                                        }
                                    </style>
                                    <div class="form-group">
                                      <label for="city" style="text-transform: capitalize !important; ">

                                        {{__('words.ΠΟΛΗ')}}

                                        {{-- City --}}
                                        </label>
                                      <input type="text" name="city" id="cities" class="form-control" required>
                                      <input type="hidden" name="cityInGR" id="cityInGR" class="form-control">
                                      {{-- <select name="city" class="custom-select" id="cities">
                                        <option value="">Afidnes</option>
                                      </select> --}}
                                    </div>
                                    <div class="form-group">
                                      <label for="street" style="text-transform: capitalize;">

                                        {{__('words.ΔΙΕΥΘΥΝΣΗ')}}
                                        {{-- Address --}}
                                        </label>
                                      <input type="text" name="region" id="regions" class="form-control" max="2" required>
                                    </div>
                                    <style>
                                        .ui-datepicker-prev span {
                                            background-image: url("{{asset('frontEnd-assets/images/google-plus.png')}}") !important;
                                                background-position: 0px 0px !important;
                                                visibility: hidden;
                                                position: relative;
                                                font-size: 25px;
                                        }
                                        .ui-datepicker-prev span:after {
                                            visibility: visible;
                                            content: "<";
                                            position: absolute;
                                            top: -6px;
                                            left: 8px;
                                        }


                                        .ui-datepicker-next span {
                                            background-image: url('http://legacy.australianetwork.com/img/icon_arrow_right_black.png') !important;
                                                background-position: 0px 0px !important;
                                                visibility: hidden;
                                                position: relative;
                                                font-size: 25px;
                                        }
                                        .ui-datepicker-next {
                                            position: relative;
                                            right: -80% !important;

                                        }
                                        .ui-datepicker-next span:after {
                                            visibility: visible;
                                            content: ">";
                                            position: absolute;
                                            top: -6px;
                                            left: 0;
                                        }

                                    </style>
                                    <div class="row">
                                      <div class="col-md-6">
                                        <div class="form-group">
                                          <label for="city" style="text-transform: lowercase;">
                                            @if (app()->getLocale() =="gr")
                                                <span class="first-letter" style="text-transform: capitalize;">Η</span>
                                                μ/νια Παράδοσης
                                            @else
                                            <span class="first-letter" style="text-transform: capitalize;">D</span>elivery Date
                                            @endif

                                            {{-- ΗΜΕΡΟΜΗΝΙΑ --}}
                                            {{-- Date --}}
                                          </label>
                                          <input type="text" name="date" class="form-control" id="datepicker" autocomplete="off" required onchange='saveValue(this);' />
                                          <input type="hidden" name="dayName" id="dayName">
                                        </div>
                                      </div>
                                      <div class="col-md-6">
                                        <div class="form-group">
                                            <label  style="text-transform: lowercase;">
                                                @if (app()->getLocale() =="gr")
                                                    <span class="first-letter" style="text-transform: capitalize;">Γ</span>ια παραδόσεις αυθημερόν δεκτές παραγγελίες μέχρι τις 18.00

                                                @else
                                                <span class="first-letter" style="text-transform: capitalize;">F</span>or same day deliveries orders accepted until 18.00

                                                @endif
                                            </label>


                                        </div>
                                      </div>
                                    </div>
                                    <input type="hidden" name="lat" id="lat">
                                    <input type="hidden" name="lng" id="lng">
                                    <input type="hidden" name="completeAddress" id="completeAddress">

                                    <button type="submit" id="confirmAddressBt" class="btn btn-primary btn-block btn-lg" style="background-color: #984E66;border-color: #984E66">
                                        {{-- Continue --}}

                                        {{__('words.Συνέχεια')}}
                                    </button>

                                </div>
                                {{-- col-md-7 --}}

                            </div>
                              {{-- saved input data --}}
                            <script type="text/javascript">


                                var datepicker = document.getElementById("datepicker");
                                document.addEventListener("DOMContentLoaded", function() {
                                    var elements = document.getElementsByTagName("INPUT");
                                    //     datepicker.setCustomValidity("Συμπληρώστε το πεδίο");
                                        // datepicker.oninput = function(e) {
                                        //     e.target.setCustomValidity("");
                                        // };
                                        if (!datepicker.validity.valid) {
                                                datepicker.setCustomValidity("Συμπληρώστε το πεδίο");
                                        }
                                    // for (var i = 0; i < elements.length; i++) {

                                    //     elements[i].oninvalid = function(e) {
                                    //         e.target.setCustomValidity("");
                                    //         if (!e.target.validity.valid) {
                                    //             e.target.setCustomValidity("Συμπληρώστε το πεδίο");
                                    //         }
                                    //     };
                                    //     elements[i].oninput = function(e) {
                                    //         e.target.setCustomValidity("");
                                    //     };
                                    // }
                                });




                            $(document).ready(function () {
                                $('.ui-datepicker-next span').empty();
                                $('.ui-datepicker-prev span').empty();

                                // $('#datepicker').setCustomValidity("This is a custom message");


                            });

                              if(performance.navigation.type == 2) {
                                console.log('back button work');
                                document.getElementById("datepicker").value = getSavedValue("datepicker");    // set the value to this input
                              }
                              function saveValue(e){
                                  var id = e.id;  // get the sender's id to save it .
                                  var val = e.value;
                                  localStorage.setItem(id, val);
                              }

                              //get the saved value function - return the value of "v" from localStorage.
                              function getSavedValue  (v){
                                  if (!localStorage.getItem(v)) {
                                      return "";// You can change this to your defualt value.
                                  }
                                  return localStorage.getItem(v);
                              }
                            </script>
                                {{-- end saved input data script --}}
                                <script>

                                    var dt = new Date();
                                    var time = dt.getHours() + ":" + dt.getMinutes() + ":" + dt.getSeconds();

                                    console.log('hour :'+dt.getHours());
                                    var allowDate = -0;
                                    if (parseInt(dt.getHours())>17) {
                                        
                                      allowDate = 1;
                                    }
                                    var datepicker = document.getElementById("datepicker");

                                  $( function() {
                                    $( "#datepicker" ).datepicker({
                                        onSelect: function(date) {
                                            // alert(date);
                                            datepicker.setCustomValidity("");
                                            var date = $(this).datepicker('getDate');
                                            $('#dayName').val($.datepicker.formatDate('DD', date));
                                        },
                                       minDate: allowDate,
                                       dateFormat:'dd-mm-yy',
                                       maxDate:'+1m',
                                    });
                                  } );
                                  </script>
                              {{-- -----------------confirm addres script --}}
                                <script>
                                  $(document).ready(function() {
                                  $("#confirmAddressBtn").click(function(e) {

                                    $.ajaxSetup({
                                        headers: {
                                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                        }
                                    });

                                    var city = $("#cities").val();
                                    console.log(city);
                                    var address = $("#regions").val();
                                    var zip_code = $("#zip_code").val();
                                    var date = $("#datepicker").val();
                                    var cityInGR = $("#cityInGR").val();

                                    var lat = $("#lat").val();
                                    var lng = $("#lng").val();
                                    var completeAddress = $("#completeAddress").val();

                                    console.log(zip_code);
                                    $.ajax({
                                        url: "{{ url(app()->getLocale().'/add-address') }}",
                                        type: 'POST',
                                        data: {
                                            city: city,
                                            cityInGR:cityInGR,
                                            region: address,
                                            zipCode:zip_code,
                                            lat:lat,
                                            lng:lng,
                                            completeAddress:completeAddress,
                                            date:date
                                        },
                                        success: function(data) {
                                          console.log(data);
                                            if ($.isEmptyObject(data.error)) {
                                                // alert(data.success);
                                                var lang = {!! json_encode(App()->getLocale()) !!};
                                                console.log(lang);
                                                console.log(lang+"/match_store");
                                                window.location.href = `{{ url('${lang}/match_store')}}`;

                                            } else {
                                              console.log(data.error);
                                              // $("#errorMsg").text(data.error);
                                                printErrorMsg(data.error);
                                            }
                                        }
                                    });

                                    e.preventDefault();

                                    });


                                  function printErrorMsg(msg) {
                                      $(".print-error-msg-login").find("ul").html('');
                                      $(".print-error-msg-login").css('display', 'block');
                                      $.each(msg, function(key, value) {
                                          $(".print-error-msg-login").find("ul").append('<li style="color:red;">' + value + '</li>');
                                      });
                                  }
                                  });
                                </script>
                              {{-- end address secript --}}

                            </div>
                            </form>

                          </div>
                          <style>
                              .ui-datepicker {
                                position: fixed;
                                top: 200.8px !important;
                                /* margin-left: 100px; */
                                /* z-index: 1000; */
                                }
                            </style>
                            <script>
                                function resetHref() {
                                    location.hash = '#';
                                    $("#zip_code").val('');
                                }


                            </script>
                          {{-- -----------end show address and map popup --}}

    <style>
        #main-inner{
            width: 107% !important;
        }
     @media print,
    screen and (max-width: 39.99875em) {
        #main-inner{
            width: 135% !important;
            position: relative;
            left: -40px;
        }
    }

    /* @media print,
    screen and (min-width: 40em) {
        #main-inner{
            width: 116% !important;
        }
    } */
    .vc_column-inner {

        padding-left: 0px !important;
    }
    </style>

    <div class="inner" id="main-inner" style="">

    <div id="main" class="fixed box box-common">
        <div class="content_holder">


<div id="post-4793" class="post-4793 page type-page status-publish hentry">
<div id="steps3space" class="vc_row wpb_row vc_row-fluid">
<div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner "><div class="wpb_wrapper"><div class="vc_empty_space" style="height: 20px"><span class="vc_empty_space_inner"></span></div></div></div></div></div>
{{-- <div id="numbers3" class="vc_row wpb_row vc_row-fluid">
    <div class="wpb_column vc_column_container vc_col-sm-12">
        <div class="vc_column-inner ">
            <div class="wpb_wrapper">
            <div class="wpb_text_column wpb_content_element  vc_custom_1615838188895 font-josephin">
                <div class="wpb_wrappe">
                    <h2 style="text-align: center; font-family: 'Manrope', sans-serif;">
                        <strong>

                                {{__('words.Δωρεάν άμεση παράδοση!')}}

                        </strong>
                    </h2>
                    <h5 style="text-align: center; margin: 0px; font-family: 'Manrope', sans-serif;">

                        {{__('words.Από τοπικά ανθοπωλεία.')}}

                    </h5>

                </div>
            </div>
            </div>
        </div>
    </div>
</div> --}}
<style>
    .steps-text{
        height: 180px;
    }

    #numbers3b {
        left: 4.5%;
    }

    @media screen and (max-width: 768px) {
        #numbers3b {
            left: 0%;
        }

    }

</style>
<div id="numbers3b" class="vc_row wpb_row vc_row-fluid vc_row-o-equal-height vc_row-o-content-middle vc_row-flex" style="position: relative;">
<div class="wpb_column vc_column_container vc_col-sm-4" style="width:23.33%;">
    <div class="vc_column-inner "><div class="wpb_wrapper">
<div class="wpb_text_column wpb_content_element  vc_custom_1615916547093 font-josephin" >
    <div class="wpb_wrapper">
        <h2 class="numbers" style="text-align: center;">1</h2>
        <div class="steps-text">

        <h5 style="text-align: center; font-family: 'Manrope', sans-serif;"><strong>
    {{-- Choose the recipient’s city --}}

    {{__('words.Βάζεις τη διεύθυνση')}}

    <br>
    {{__('words.που θέλεις να στείλεις')}}

    <br>
					{{__('words.τα λουλούδια')}}

</strong></h5>
        </div>
{{-- <p style="text-align: center; margin: 0px;font-family: 'Manrope', sans-serif;">
    To view all available gifts!
    τα λουλούδια
</p> --}}

    </div>
</div>
</div></div>
</div>

<div class="wpb_column vc_column_container vc_col-sm-4" style="width:22.33%;">
    <div class="vc_column-inner "><div class="wpb_wrapper">
<div class="wpb_text_column wpb_content_element  vc_custom_1615916551757 font-josephin">
    <div class="wpb_wrapper">
        <h2 class="numbers" style="text-align: center;">2</h2>
        <div class="steps-text">
            <h5 style="text-align: center;"><strong>
                {{-- Select a unique gift --}}

					{{__('words.Διαλέγεις ένα από')}}

                <br>
					{{__('words.τα ανθοπωλεία που σου')}}


                <br>
					{{__('words.αρέσει')}}


                </strong>
            </h5>
        </div>
{{-- <p style="text-align: center; margin: 0px;">
    Thoughtful gifts by local businesses!
    αρέσει
</p> --}}

    </div>
</div>
</div></div>
</div>

<div class="wpb_column vc_column_container vc_col-sm-4" style="width:22.33%;">
    <div class="vc_column-inner "><div class="wpb_wrapper">
<div class="wpb_text_column wpb_content_element  vc_custom_1615916556747 font-josephin">
    <div class="wpb_wrapper">
        <h2 class="numbers" style="text-align: center;">3</h2>

        <div class="steps-text">
            <h5 style="text-align: center;">
                <strong>
                {{-- Add your personal wishes --}}

					{{__('words.Επιλέγεις το προϊόν')}}

                <br>
					{{__('words.προσθέτοντας αν θέλεις')}}

                <br>
					{{__('words.και κάρτα με το μήνυμα σου')}}


                </strong>
            </h5>
        </div>
{{-- <p style="text-align: center; margin: 0px;">
    Send along a greeting card for free!
    και κάρτα με το μήνυμα σου &nbsp; 
</p> --}}

    </div>
</div>
</div></div>
</div>

<div class="wpb_column vc_column_container vc_col-sm-4" style="width:22.33%;">
    <div class="vc_column-inner "><div class="wpb_wrapper">
    <div class="wpb_text_column wpb_content_element  vc_custom_1615916556747 font-josephin">
        <div class="wpb_wrapper">
            <h2 class="numbers" style="text-align: center;">4</h2>
            <div class="steps-text">

            <h5 style="text-align: center;"><strong>
        {{-- Add your personal wishes --}}

					{{__('words.Έτοιμος! Καλάθι και')}}

        <br>
					{{__('words.η παραγγελία σου')}}

        <br>
					{{__('words.ετοιμάζεται')}}


    </strong></h5>
            </div>
    {{-- <p style="text-align: center; margin: 0px;">
        Send along a greeting card for free!
        ετοιμάζεται
    </p> --}}

        </div>
    </div>
    </div></div>
    </div>

</div>

{{-- store start --}}
{{-- store end --}}

{{-- <div class="vc_row wpb_row vc_row-fluid vc_row-o-equal-height vc_row-flex">
<div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner "><div class="wpb_wrapper">
<div class="vc_row wpb_row vc_inner vc_row-fluid">
<div class="wpb_column vc_column_container vc_col-sm-12">
    <div class="vc_column-inner">
        <div class="wpb_wrapper">
            <div class="vc_btn3-container  round-btn vc_btn3-center">
                <a style="background-color:#220e19; color:#ffffff;" class="vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-rounded vc_btn3-style-custom" href="#" title="Learn More">Learn More</a>
            </div>
        </div>
    </div>
</div>
</div>



<div class="vc_empty_space" style="height: 50px"><span class="vc_empty_space_inner"></span></div></div></div></div>
</div> --}}
{{-- start banner --}}
{{-- <div id="banner" class="vc_row wpb_row vc_row-fluid hover vc_row-o-equal-height vc_row-flex" style="width: 1342px; padding-left: 184px;padding-right: 160px;position: relative; left: -184px; background-color: #333"> --}}
{{-- <div class="wpb_column vc_column_container vc_col-sm-12" style="width: 1342px; background-color: #220e19"> --}}

    <style>
        .second-paragraph{
            text-align: center;
            display: flex;
            justify-content: center;
        }
        @media screen and (max-width: 500px) {
            .second-paragraph {
                justify-content: left;
                text-align: left;
                /* margin-top: 15px; */
            }

        }
        @media screen and (max-width: 1140px) {
            .second-paragraph {
                justify-content: left;
                text-align: left;
                /* margin-top: 15px; */
            }

        }
        @media screen and (max-width: 800px) {
            .second-paragraph {
                justify-content: left;
                text-align: left;
                /* margin-top: 15px; */
            }
            #newsletter-section{
                position: relative;
                left: -25px;
                width: 109%;
            }


        }
        #newsletter-section{
                position: relative;
                left: 0px;
                width: 100%;
        }
        @media screen and (max-width: 1200px) {

            #newsletter-section{
                position: relative;
                left: -25px;
                width: 109%;
            }


        }
        @media screen and (max-width: 700px) {

            #main-inner{
                padding: 0 0px;
            }
            h1 {
                font-size: 2.0rem;
            }
            .wpb_text_column h2{
                font-size: 25px !important;
            }


        }
        @media screen and (max-width: 630px) {

            #main-inner{
                padding: 0 40px;
            }


        }


    </style>

            <div class="section1" style="
            display: flex;
        flex-wrap: wrap;
        ">
                <div class="" style="font-family: 'Manrope', sans-serif;margin: 0 auto;">
                    <h1 style="text-align: center;"><strong>
                        {{-- Shop gifts online and support local stores --}}

                        {{__('words.Γίνε και εσύ ένας ebloomer!')}}

                    </strong></h1>
                    <h5 style=" margin: 20px; font-family: 'Manrope', sans-serif !important;
                    font-weight: 500 !important;
                    font-style: normal !important; 
                    text-align: center;
                    padding: 0 5% 0 4%;
                    ">
                        {{-- Explore the new way to give a gift --}}


                        {{__('words.Μάζεψε πόντους με κάθε σου παραγγελία και επωφελήσου από τις ειδικές εκπτώσεις μας για αγορές σε όλα')}}

                        {{-- <br> --}}
                        {{-- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; --}}
                        {{-- <span class="second-paragraph" > --}}

                            {{__('words.τα ανθοπωλεία της πλατφόρμας μας. Όσο εσύ χαρίζεις λουλούδια σου χαρίζουμε εμείς πόντους!')}}

                        {{-- </span> <br><br> --}}

                        {{-- <div style="width: 100%; text-align: center">
                            <b>
                                                Κανε τώρα εγγραφή και γίνε μέλος της ebloom κοινότητας!
                            </b>
                        </div> --}}
                    </h5>
                    {{-- <p style="text-align: center; padding:0px 7%; letter-spacing: 0.1em">
                        eBloom is a global marketplace just for gifts! Shop unique gifts sourced purely by local stores and surprise your loved ones with a complete gifting experience. Free and fast delivery at their doorstep with zero international shipping costs and delays. <b>To send a gift to London simply shop from London&#8217;s local stores!</b>

                        για αγορές σε όλα τα ανθοπωλεία της πλατφόρμας μας
                                Όσο εσύ χαρίζεις λουλούδια, σου χαρίζουμε εμείς πόντους!!
                                Κανε Τώρα εγγραφή και γίνε μέλος της ebloom κοινότητας!!
                    </p> --}}

                </div>
            </div>



{{-- </div> --}}
{{-- </div>  --}}
{{-- end banner--}}
{{-- start new category --}}
<div class="category" style="
            display: flex;
        flex-wrap: wrap;
        ">
        <div class="cat-overlay" style="width: 100%; padding:0px 30px;">
            <div class="wpb_text_column wpb_content_element  font-josephin">
                <div class="wpb_wrapper">
                    <h4 style="text-align: center;">
                        <span style="">
                        {{-- Featured Florists --}}

                        {{__('words.Προτεινόμενα Ανθοπωλεία')}} <br>

                    </span></h4>

                </div>
            </div>

            {{-- end completeslider --}}
            {{-- slider style --}}


            {{-- featured florists --}}
            @if (count($featured_florists) <=4 ) <div class="wcmp_vendor_list" style="text-align:center;">
                <div class="wcmp_vendor_list_wrap" style="float: none; width: 100%; margin: 0 auto;">
                    @if (count($featured_florists)>0)
                    <?php $count = 0; ?>
                    @foreach ($featured_florists as $florist)
                    <?php $count = $count + 1; ?>
                    @if ($florist->status == 1)
                        @if ($florist->admin == 2)

                        <div class="wcmp_sorted_vendors" style="font-family: 'Manrope', sans-serif;">
                            <a href="{{route('store',['language'=>App()->getLocale(),'slug'=>$florist->slug])}}">
                                <noscript>
                                    <img class="vendor_img" @if ($florist->image=='' || $florist->image==null)
                                    src="{{asset('frontEnd-assets/images/logo5.png')}}"
                                    @else
                                    src="/uploads/products/{{$florist->image}}"

                                    @endif
                                    width="125" />
                                </noscript>
                                <img class="lazyload vendor_img"
                                    src="https://cdn.shortpixel.ai/client/q_lqip,ret_wait,w_125/https://pixel.com/storage/2021/01/Zoloban-logo-min.jpg"
                                    @if ($florist->image=='' || $florist->image==null)
                                data-src="{{asset('frontEnd-assets/images/logo5.png')}}"
                                @else
                                data-src="/uploads/products/{{$florist->image}}"

                                @endif
                                id="vendor_image_display" width="125" />
                            </a>

                            <style>
                                
                                @media screen and (max-width: 1150px) {
                                    .wcmp_rating_wrap {
                                        min-height: 60px !important;
                                    }

                                }
                                
                                @media screen and (max-width: 750px) {
                                    .wcmp_rating_wrap {
                                        min-height: 30px !important;
                                    }

                                }
                            </style>

                            <div class="wcmp_rating_wrap">
                                <div>{{$florist->name}}</div>
                                <span style="font-weight: 200;font-size: 13px !important;">
                                @if (app()->getLocale() == "en" )

                                    {{$florist->city}}
                                @else
                                    {{$florist->city_greece}}

                                @endif
                                </span>

                            </div>
                            <a href="{{url(app()->getLocale().'/store/'.$florist->slug)}}" class="button">
                                {{-- Check Now --}}
                                {{-- Το θέλω --}}
                                {{__('words.Το θέλω')}}

                            </a>
                        </div>
                        @endif
                    @endif
                    @if ($count == 4)
                    @break
                    @endif
                    @endforeach
                    @endif

                </div>
                </div>
            @endif
            @if (count($featured_florists) >4)
                <div class="container">
                    <div class="wcmp_vendor_list " style="width: 100%;">
                        <div class="wcmp_vendor_list_wrap slider">
                            <div class="row">
                                <div class="MultiCarousel" data-items="1,3,5,6" data-slide="1" id="MultiCarousel"  data-interval="1000">
                                    <div class="MultiCarousel-inner">
                                        @if (count($featured_florists)>0)

                                            @foreach ($featured_florists as $florist)
                                                @if ($florist->status==1 )
                                                    @if ($florist->admin==2 )

                                                    <div class="item" data-slug="{{$florist->slug}}">
                                                        <div class="col-md-12">
                                                            <!-- Table -->

                                                            <div class="wcmp_sorted_vendors" style="font-family: 'Manrope', sans-serif; width: 100% !important;">
                                                                <a href="{{url(app()->getLocale().'/store/'.$florist->slug)}}">
                                                                    <noscript
                                                                        ><img
                                                                            class="vendor_img"
                                                                            @if ($florist->image=='' || $florist->image==null)
                                                                            src="{{asset('frontEnd-assets/images/black-logo.jpeg')}}"
                                                                            @else
                                                                            src="/uploads/products/{{$florist->image}}"

                                                                            @endif
                                                                            width="125" />
                                                                            </noscript
                                                                    ><img
                                                                        class="lazyload vendor_img"
                                                                        {{-- src="https://cdn.shortpixel.ai/client/q_lqip,ret_wait,w_125/https://pixel.com/storage/2021/01/Zoloban-logo-min.jpg" --}}
                                                                        @if ($florist->image=='' || $florist->image==null)
                                                                            data-src="{{asset('frontEnd-assets/images/black-logo.jpeg')}}"
                                                                        @else
                                                                            data-src="/uploads/products/{{$florist->image}}"

                                                                        @endif

                                                                        id="vendor_image_display"
                                                                        width="125"
                                                                    />
                                                                </a>

                                                                <div class="wcmp_rating_wrap" >

                                                                    <div>{{$florist->name}}</div>
                                                                     <span style="font-weight: 200; font-size: 13px !important;">

                                                                        @if (app()->getLocale() == "en" )

                                                                            {{$florist->city}}
                                                                        @else
                                                                            {{$florist->city_greece}}

                                                                        @endif

                                                                        {{-- {{$florist->city}} --}}
                                                                    </span>

                                                                </div>
                                                                <a
                                                                    href="{{url(app()->getLocale().'/store/'.$florist->slug)}}"
                                                                    class="button"
                                                                    >
                                                                    {{-- Check Now --}}

                                                                    {{__('words.Το θέλω')}}
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @endif
                                                @endif

                                            @endforeach
                                        @endif


                                    </div>
                                    <button class="btn btn-primary leftLst" style="background-color: #984E66 !important;border-color: #984E66 !important"><</button>
                                    <button class="btn btn-primary rightLst" style="background-color: #984E66 !important;border-color: #984E66 !important">></button>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>

            @endif

            {{-- end featured section --}}

        </div>
</div>
<script>
    // $(".wcmp_sorted_vendors").mouseenter(function() {
    //         $(this).find('.categoryName').css("color", "black");
    //     }).mouseleave(function() {
    //         // $(this).hide();
    //         $(this).find('.categoryName').css("color", "white");
    //     });
</script>
{{-- end new category --}}
{{-- start category --}}
{{--
{{-- end catogory --}}
{{-- <div class="vc_row-full-width vc_clearfix" style="height: 20px;"></div> --}}
{{-- <div class="container"> --}}


{{-- </div> --}}

{{-- start image section --}}



{{-- end image section --}}

<div class="vc_row-full-width vc_clearfix"></div>
{{-- start --}}
{{-- end --}}
{{-- start --}}

{{--end--}}
</div>
{{-- <div class="vc_row-full-width vc_clearfix"></div> --}}
{{-- backgourdn app section style --}}
{{-- <style>
    .GetWolt-module__root___1REAO {
        display: flex;
        width: 100%;
        height: 810px;
        /* background-color: #f2f3f5; */
        /* background-color: #D2C7C3; */
        background-image: url("{{asset('frontEnd-assets/images/mobile2.jpeg')}}");
        background-size: 100% 100%;
        margin-bottom: 3rem;
        overflow: hidden;
        flex-direction: column;
        justify-content: center;
        margin-top: 0px;
        /* -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover; */
        /* background-size: cover; */

    }

    @media print,
    screen and (max-width: 39.99875em) {
        .GetWolt-module__root___1REAO {
            height: auto;
            padding-top: 4rem;
            background-image: url("{{asset('frontEnd-assets/images/mobile2.jpg')}}");
            background-color: #D2C7C3;

        }
    }

    .GetWolt-module__root___1REAO:last-child {
        margin-bottom: 0;
    }

    .GetWolt-module__container___1cUIz {
        max-width: 1200px;
        margin: auto;
        width: 100%;
        height: 100%;
        display: flex;
        align-items: center;
        position: relative;
        padding: 30px;
    }

    @media print,
    screen and (max-width: 39.99875em) {
        .GetWolt-module__container___1cUIz {
            padding: 16px;
            padding-bottom: 1.5rem;
        }
    }

    .GetWolt-module__content___2DJA_ {
        z-index: 1;
        max-width: 100%;
        height: 100%;width: 100%;text-align: center;
        /* position: relative; */
        /* top: -283px; */
    }
    .app-icons{
        position: relative;
        bottom: -655px;
    }

    .GetWolt-module__content___2DJA_ p {
        color: #616060;
        line-height: 1.71;
        margin-bottom: 2.5rem;
    }

    @media screen and (max-width: 800px) {
        .GetWolt-module__content___2DJA_ {
            max-width: 60%;
            /* position: relative;
            top: -170px; */
        }
        .app-icons{
            position: relative;
            bottom: 0px;
        }
    }

    @media print,
    screen and (max-width: 39.99875em) {
        .GetWolt-module__content___2DJA_ {
            max-width: 100%;
            /* position: relative;
            top: 0px; */
            height: 230px;
        }
    }

    .GetWolt-module__button___2Mf-Z {
        padding-top: 1rem;
        padding-bottom: 1rem;
        border-radius: 8px;
        display: flex;
        align-items: center;
        max-height: 3.5rem;
    }

    .GetWolt-module__bgImage___1Tr21 {
        position: absolute;
        /* right: -500px; */
        right: -370;
        top: 0;
        height: 100%;
        width: 100%;
        min-width: 1100px;
        overflow: hidden;
        transition: opacity 150ms ease;
    }

    @media print,
    screen and (max-width: 74.99875em) {
        .GetWolt-module__bgImage___1Tr21 {
            right: -600px;
        }
    }

    @media print,
    screen and (max-width: 63.99875em) {
        .GetWolt-module__bgImage___1Tr21 {
            right: -700px;
        }
    }

    @media screen and (max-width: 800px) {
        .GetWolt-module__bgImage___1Tr21 {
            right: -800px;
        }
    }

    @media print,
    screen and (max-width: 39.99875em) {
        .GetWolt-module__bgImage___1Tr21 {
            display: none;
        }
    }

    @media print,
    screen and (min-width: 40em) {
        .GetWolt-module__mobileBg___2lCJH {
            display: none;
        }
    }

    .GetWolt-module__scrollingImage___3TN2J {
        position: absolute;
        transform: rotate(-28.91deg) skew(13.43deg, 0deg) scale(0.53) translate(-117px, 286.1px);
        transform: rotate(-28.51deg) skew(13.83deg, 0deg) scale(0.53) translate(-117px, 286.1px);
        transform-origin: top left;
        width: auto;
        height: 100%;
    }

    .GetWolt-module__scrollingImage___3TN2J img {
        transform-style: preserve-3d;
        -webkit-backface-visibility: hidden;
        backface-visibility: hidden;
        will-change: transform;
    }

    .GetWolt-module__platformBadge___34QsM img {
        max-width: 10rem !important;
        width: 100%;
        margin-bottom: 1rem;
        display: block;
    }

    .GetWolt-module__phonesImage___22KkB {
        position: absolute;
        z-index: 1;
        -o-object-fit: cover;
        object-fit: cover;
        height: 100% !important;
        left: 0;
    }

    .GetWolt-module__form___3M27K {
        display: flex;
    }

    .Front-module__frontView___1tCx9 {
        background: #fff;
    }

    .Front-module__halfVideo___ZoEq7 {
        margin-top: 0;
    }

    .Front-module__bottomPadding___2BKIq {
        padding-bottom: 12.5rem;
    }

    element {

    }
    *, ::before, ::after {

        box-sizing: inherit;

    }
    .inwiMq {

        font-feature-settings: "kern", "ss01", "ss05", "ss07";
        text-rendering: optimizelegibility;
        font-family: WoltHeading-Omnes, system-ui, -apple-system, BlinkMacSystemFont, "Roboto", "Open Sans", sans-serif;
        font-variant-ligatures: common-ligatures;
        font-size: 2.875rem;
        line-height: 3.5rem;
        font-weight: 700;
        font-style: normal;
        font-stretch: normal;
        text-transform: none;
        color: rgb(32, 33, 37);

    }
</style> --}}
{{-- end background app section style --}}

{{-- side image app section style --}}
<style>
    .GetWolt-module__root___1REAO {
        display: flex;
        width: 100%;
        height: 530px;
        /* background-color: #D2C6C6; */
        background-color: white;
        margin-bottom: 3rem;
        overflow: hidden;
        flex-direction: column;
        justify-content: center;
        margin-top: 0px;
    }

    @media print,
    screen and (max-width: 49.99875em) {
        .GetWolt-module__root___1REAO {
            height: auto;
            padding-top: 0rem;
        }
    }

    .GetWolt-module__root___1REAO:last-child {
        margin-bottom: 0;
    }

    .GetWolt-module__container___1cUIz {
        max-width: 1300px;
        margin: auto;
        width: 100%;
        height: 100%;
        display: flex;
        align-items: center;
        position: relative;
        padding: 30px;
    }

    @media print,
    screen and (max-width: 49.99875em) {
        .GetWolt-module__container___1cUIz {
            padding: 16px;
            /* padding-bottom: 1.5rem; */
            padding-bottom: 0rem;
            padding-top: 0px;

        }
    }

    .GetWolt-module__content___2DJA_ {
        z-index: 1;
        max-width: 36%;
        /* position: relative;
        top:  -85px; */
    }

    .GetWolt-module__content___2DJA_ p {
        color: #616060;
        line-height: 1.71;
        margin-bottom: 2.5rem;
    }

    @media screen and (max-width: 800px) {
        .GetWolt-module__content___2DJA_ {
            max-width: 60%;
            top: 0px;
        }
    }

    @media print,
    screen and (max-width: 49.99875em) {
        .GetWolt-module__content___2DJA_ {
            max-width: 100%;
            top: 0px;
        }
    }

    .GetWolt-module__button___2Mf-Z {
        padding-top: 1rem;
        padding-bottom: 1rem;
        border-radius: 8px;
        display: flex;
        align-items: center;
        max-height: 3.5rem;
    }

    .GetWolt-module__bgImage___1Tr21 {
        position: absolute;
        right: -105px;
        top: 0;
        height: 100%;
        width: 74%;
        min-width: 940px;
        /* width: 100%;
        min-width: 1100px; */
        overflow: hidden;
        transition: opacity 150ms ease;

        background-image: url("{{ app()->getLocale() == 'en' ? asset('frontEnd-assets/images/mobile-section-eng.jpeg') : asset('frontEnd-assets/images/mobile-section.svg') }}");
        background-size: 100% 100%;
    }

    @media print,
    screen and (max-width: 74.99875em) {
        .GetWolt-module__bgImage___1Tr21 {
            right: -240px;
        }
        .GetWolt-module__content___2DJA_ {

        }
    }

    @media print,
    screen and (max-width: 63.99875em) {
        .GetWolt-module__bgImage___1Tr21 {
            right: -350px;
        }
        .GetWolt-module__content___2DJA_ {

        }
    }

    @media screen and (max-width: 900px) {
        .GetWolt-module__bgImage___1Tr21 {
            right: -400px;
        }
        .GetWolt-module__content___2DJA_ {

        }
    }

    @media screen and (max-width: 800px) {
        .GetWolt-module__bgImage___1Tr21 {
            right: -600px;
        }
        .GetWolt-module__content___2DJA_ {

        }
    }

    @media print,
    screen and (max-width: 49.99875em) {
        .GetWolt-module__bgImage___1Tr21 {
            display: none;
        }
    }

    @media print,
    screen and (min-width: 50em) {
        .GetWolt-module__mobileBg___2lCJH {
            display: none;
        }
    }

    .GetWolt-module__scrollingImage___3TN2J {
        position: absolute;
        transform: rotate(-28.91deg) skew(13.43deg, 0deg) scale(0.53) translate(-117px, 286.1px);
        transform: rotate(-28.51deg) skew(13.83deg, 0deg) scale(0.53) translate(-117px, 286.1px);
        transform-origin: top left;
        width: auto;
        height: 100%;
    }

    .GetWolt-module__scrollingImage___3TN2J img {
        transform-style: preserve-3d;
        -webkit-backface-visibility: hidden;
        backface-visibility: hidden;
        will-change: transform;
    }

    .GetWolt-module__platformBadge___34QsM img {
        max-width: 10rem !important;
        width: 100%;
        margin-bottom: 1rem;
        display: block;
    }

    .GetWolt-module__phonesImage___22KkB {
        position: absolute;
        z-index: 1;
        -o-object-fit: cover;
        object-fit: cover;
        height: 100% !important;
        left: 0;
    }

    .GetWolt-module__form___3M27K {
        display: flex;
    }

    .Front-module__frontView___1tCx9 {
        background: #fff;
    }

    .Front-module__halfVideo___ZoEq7 {
        margin-top: 0;
    }

    .Front-module__bottomPadding___2BKIq {
        padding-bottom: 12.5rem;
    }

    element {

    }
    *, ::before, ::after {

        box-sizing: inherit;

    }
    .inwiMq {

        font-feature-settings: "kern", "ss01", "ss05", "ss07";
        text-rendering: optimizelegibility;
        font-family: WoltHeading-Omnes, system-ui, -apple-system, BlinkMacSystemFont, "Roboto", "Open Sans", sans-serif;
        font-variant-ligatures: common-ligatures;
        font-size: 2.875rem;
        line-height: 3.5rem;
        font-weight: 700;
        font-style: normal;
        font-stretch: normal;
        text-transform: none;
        color: rgb(32, 33, 37);
        text-align: center;
    }

    @media screen and (max-width: 640px) {
        .inwiMq {
            padding-right: 15px;
        }
        
    }


</style>

<!-- app section -->
<div class="GetWolt-module__root___1REAO noRtl" style="">
    <div class="GetWolt-module__container___1cUIz">
        <div class="GetWolt-module__bgImage___1Tr21" style="opacity: 1;">
            {{-- <div class="GetWolt-module__scrollingImage___3TN2J"><img
                    src="https://cdn.wolt.com/frontpage-assets/ios-discovery.jpg" alt="app screenshot"
                    style="transform: translate3d(0px, -215.047px, 0px);">
            </div> --}}
                {{-- <img
                src="{{asset('frontEnd-assets/images/mobile2.jpeg')}}" class="GetWolt-module__phonesImage___22KkB"
                alt="multiple phones with our app on screen"
                style="max-width: 80%;"
                > --}}
        </div>
        <div class="GetWolt-module__content___2DJA_ rtl">
            <h1 class="GetWolt__ContentHeading-sc-1hhptnu-0 inwiMq">
                <span
                    data-localization-key="get-wolt.get-app-title">
                    {{-- Honey, we’re not cooking tonight --}}
                 {{__('words.Έρχεται και το νέο μας App')}}&#x00021;<span style="visibility:hidden;">&#x00020;s</span>

                </span></h1>
            {{-- <p>
                <span data-localization-key="get-wolt.get-app-text">Get the Apple-awarded eBloom app and choose from 40,000
                    restaurants and hundreds of stores in all over the greece. Discover and get what you want – our courier
                    partners bring it to you.
                </span>
            </p> --}}
                <div style="margin-top: 30px;
                display: flex;
                justify-content: center;">
                    <div>
                        <a class="GetWolt-module__platformBadge___34QsM"
                            href="#" data-platform="ios" target="_blank"
                            rel="noopener noreferrer">
                            <img class="PlatformBadge-module__image___1siAB"
                            src="https://static.wolt.com/images/ios-en-8c4986ee4828b47d16f5cd694ef065f2.svg"
                            alt="Get the eBloom app : ios">
                        </a>
                        <a class="GetWolt-module__platformBadge___34QsM"
                            href="#" data-platform="android"
                            target="_blank" rel="noopener noreferrer">
                            <img class="PlatformBadge-module__image___1siAB"
                            src="https://static.wolt.com/images/android-en-096765c5c3aea81be926bb4b89ee1d31.png"
                            alt="Get the eBloom app : android">
                        </a>
                    </div>
                </div>
        </div>
    </div>
    <div class="GetWolt-module__mobileBg___2lCJH"><img
            src="{{asset('frontEnd-assets/images/mobile4.png')}}"
            alt="multiple phones with our app on screen"></div>
</div>
<!-- end app section -->


{{-- start locations --}}



{{-- end locations --}}
<div class="vc_row wpb_row vc_row-fluid " style="padding:0px 30px;">
    <div class="wpb_column vc_column_container vc_col-sm-12">
        <div class="vc_column-inner">
            <div class="wpb_wrapper">

                <div class="wpb_text_column wpb_content_element font-josephin" style="margin-bottom: 15px;">
                    <div class="wpb_wrapper">

                        <h4 style="text-align: center">
                            {{-- Νέοι EBLOOMers --}}

                            {{__('words.Το δίκτυο της ebloom συνέχεια ανθίζει...')}}
                        </h4>
                    </div>
                </div>

                {{-- test slider --}}
                <style>
                    .MultiCarousel { float: left; overflow: hidden; padding: 15px; width: 100%; position:relative; }
                    .MultiCarousel .MultiCarousel-inner { transition: 1s ease all; float: left; }
                        .MultiCarousel .MultiCarousel-inner .item { float: left;}
                        .MultiCarousel .MultiCarousel-inner .item > div { text-align: center; padding:10px; margin:10px;}
                    .MultiCarousel .leftLst, .MultiCarousel .rightLst { position:absolute; border-radius:50%;top:calc(50% - 20px); }
                    .MultiCarousel .leftLst { left:0; }
                    .MultiCarousel .rightLst { right:0; }

                        .MultiCarousel .leftLst.over, .MultiCarousel .rightLst.over {  background:#ccc; }
                </style>

                @if (count($latest_florists) <=4 ) <div class="wcmp_vendor_list" style="text-align:center;">
                    <div class="wcmp_vendor_list_wrap" style="float: none; width: 100%; margin: 0 auto;">
                        @if (count($latest_florists)>0)
                        <?php $count = 0; ?>
                        @foreach ($latest_florists as $florist)
                        <?php $count = $count + 1; ?>
                        @if ($florist->status == 1)
                            @if ($florist->admin == 2)

                                <div class="wcmp_sorted_vendors" style="font-family: 'Manrope', sans-serif;">
                                    <a href="{{url(app()->getLocale().'/store/'.$florist->slug)}}">
                                        <noscript>
                                            <img class="vendor_img" @if ($florist->image=='' || $florist->image==null)
                                            src="{{asset('frontEnd-assets/images/logo5.png')}}"
                                            @else
                                            src="/uploads/products/{{$florist->image}}"

                                            @endif
                                            width="125" />
                                        </noscript>
                                        <img class="lazyload vendor_img"
                                            {{-- src="https://cdn.shortpixel.ai/client/q_lqip,ret_wait,w_125/https://pixel.com/storage/2021/01/Zoloban-logo-min.jpg" --}}
                                            @if ($florist->image=='' || $florist->image==null)
                                        data-src="{{asset('frontEnd-assets/images/logo5.png')}}"
                                        @else
                                        data-src="/uploads/products/{{$florist->image}}"

                                        @endif
                                        id="vendor_image_display" width="125" />
                                    </a>

                                    <div class="wcmp_rating_wrap">
                                        <div>{{$florist->name}}</div>
                                        <span style="font-weight: 200;font-size: 13px !important;">
                                            @if (app()->getLocale() == "en" )

                                                {{$florist->city}}
                                            @else
                                                {{$florist->city_greece}}

                                            @endif
                                            {{-- {{$florist->city}} --}}
                                        </span>

                                    </div>
                                    <a href="{{url(app()->getLocale().'/store/'.$florist->slug)}}" class="button">
                                        {{-- Check Now --}}

                                        {{__('words.Το θέλω')}}
                                    </a>
                                </div>
                            @endif

                        @endif
                        @if ($count == 4)
                        @break
                        @endif
                        @endforeach
                        @endif

                    </div>
                    </div>
                @endif
                @if (count($latest_florists) > 4)
                    <div class="container">
                        <div class="wcmp_vendor_list " style="width: 100%;">
                            <div class="wcmp_vendor_list_wrap slider">
                                <div class="row">
                                    <div class="MultiCarousel" data-items="1,3,5,6" data-slide="1" id="MultiCarousel"  data-interval="1000">
                                        <div class="MultiCarousel-inner">
                                            @if (count($latest_florists)>0)

                                        @foreach ($latest_florists as $florist)
                                            @if ($florist->status==1 )
                                                @if ($florist->admin==2 )
                                                    <div class="item" data-slug="{{$florist->slug}}">
                                                        <div class="col-md-12">
                                                            <!-- Table -->

                                                            <div class="wcmp_sorted_vendors" style="font-family: 'Manrope', sans-serif; width: 100% !important;;">
                                                                <a href="{{url(app()->getLocale().'/store/'.$florist->slug)}}">
                                                                    <noscript
                                                                        ><img
                                                                            class="vendor_img"
                                                                            @if ($florist->image=='' || $florist->image==null)
                                                                            src="{{asset('frontEnd-assets/images/black-logo.jpeg')}}"
                                                                            @else
                                                                            src="/uploads/products/{{$florist->image}}"

                                                                            @endif
                                                                            width="125" />
                                                                            </noscript
                                                                    ><img
                                                                        class="lazyload vendor_img"
                                                                        {{-- src="https://cdn.shortpixel.ai/client/q_lqip,ret_wait,w_125/https://pixel.com/storage/2021/01/Zoloban-logo-min.jpg" --}}
                                                                        @if ($florist->image=='' || $florist->image==null)
                                                                            data-src="{{asset('frontEnd-assets/images/black-logo.jpeg')}}"
                                                                        @else
                                                                            data-src="/uploads/products/{{$florist->image}}"

                                                                        @endif

                                                                        id="vendor_image_display"
                                                                        width="125"
                                                                    />
                                                                </a>

                                                                <div class="wcmp_rating_wrap">

                                                                    <div>{{$florist->name}}</div>
                                                                    <span style="font-weight: 200;font-size: 13px !important;">
                                                                        @if (app()->getLocale() == "en" )

                                                                        {{$florist->city}}
                                                                    @else
                                                                        {{$florist->city_greece}}

                                                                    @endif
                                                                        {{-- {{$florist->city}} --}}
                                                                    </span>

                                                                </div>
                                                                <a
                                                                    href="{{url(app()->getLocale().'/store/'.$florist->slug)}}"
                                                                    class="button"
                                                                    class="checkNowBtn" >
                                                                    {{-- Check Now --}}

                                                                    {{__('words.Το θέλω')}}
                                                                    </a
                                                                >
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endif
                                            @endif

                                        @endforeach
                                        @endif
                                            {{-- <div class="item">
                                                <div class="pad15">
                                                    <p class="lead">Multi Item Carousel</p>
                                                    <p>₹ 1</p>
                                                    <p>₹ 6000</p>
                                                    <p>50% off</p>
                                                </div>
                                            </div> --}}

                                        </div>
                                        <button class="btn btn-primary leftLst" style="background-color: #984E66 !important;border-color: #984E66 !important"><</button>
                                        <button class="btn btn-primary rightLst" style="background-color: #984E66 !important;border-color: #984E66 !important">></button>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>

                @endif

        <script>
            $(document).ready(function () {
                // alert('slam');
                $('.item').click(function (e) {
                    e.preventDefault();
                    var slug = $(this).attr('data-slug');

                    console.log("slug: "+slug);
                    window.location.href = `{{ url(app()->getLocale().'/store/${slug}')}}`;
                    // alert('slam');
                })
                $('.wcmp_vendor_list').on('click', '.checkNowBtn', function (e) {
                    alert('check');
                    console.log('this is the click');
                    e.preventDefault();
                });
            });
        </script>

    {{-- end test slider --}}
                {{-- <div class="container"> --}}

                    {{-- <div class="wcmp_vendor_list " style="width: 100%;">
                        <div class="wcmp_vendor_list_wrap slider">

                            <div id="recipeCarousel2" class="carousel slide w-100" data-ride="carousel">
                                <div class="carousel-inner w-100" role="listbox">

                                    @if (count($latest_florists)>0)
                                        <div class="carousel-item active mt-40">

                                        </div>
                                      @foreach ($latest_florists as $florist)
                                        @if ($florist->status==1 )

                                        <div class="carousel-item mt-40">
                                            <div class="col-md-3">


                                            <div class="wcmp_sorted_vendors" style="font-family: 'Manrope', sans-serif; width: 100%;">
                                                <a href="{{url('/store/'.$florist->slug)}}">
                                                    <noscript
                                                        ><img
                                                            class="vendor_img"
                                                            @if ($florist->image=='' || $florist->image==null)
                                                            src="{{asset('frontEnd-assets/images/black-logo.jpeg')}}"
                                                            @else
                                                            src="uploads/products/{{$florist->image}}"

                                                            @endif
                                                            width="125" />
                                                            </noscript
                                                    ><img
                                                        class="lazyload vendor_img"
                                                        src="https://cdn.shortpixel.ai/client/q_lqip,ret_wait,w_125/https://pixel.com/storage/2021/01/Zoloban-logo-min.jpg"
                                                        @if ($florist->image=='' || $florist->image==null)
                                                            data-src="{{asset('frontEnd-assets/images/black-logo.jpeg')}}"
                                                        @else
                                                            data-src="uploads/products/{{$florist->image}}"

                                                        @endif

                                                        id="vendor_image_display"
                                                        width="125"
                                                    />
                                                </a>

                                                <div class="wcmp_rating_wrap">

                                                    <div>{{$florist->name}}</div>
                                                </div>
                                                <a
                                                    href="{{url('/store/'.$florist->slug)}}"
                                                    class="button"
                                                    >
                                                    Το θέλω
                                                    </a
                                                >
                                            </div>
                                            </div>
                                        </div>
                                        @endif

                                      @endforeach
                                    @endif
                                </div>
                                <a class="carousel-control-prev w-auto" href="#recipeCarousel2" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon bg-dark border border-dark rounded-circle" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next w-auto" href="#recipeCarousel2" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon bg-dark border border-dark rounded-circle" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                    </div> --}}
                {{-- </div> --}}

                <style>
                    .vendor_address p img {
                        height: 12px;
                        margin-right: 14px;
                        width: 12px;
                        display: inline-block;
                    }
                    .vendor_description_background {
                        background-color: #fff;
                        background-size: cover;
                        background-position: center center;
                    }
                    .vendor_description {
                        box-sizing: border-box;
                        width: 100%;
                        clear: both;
                        display: inline-block;
                        padding-left: 20px;
                        padding-top: 15px;
                        background-color: rgba(0, 0, 0, 0.5);
                        height: 245px;
                        font-weight: 700;
                    }
                    .vendor_description .vendor_img_add {
                        width: 50%;
                        float: left;
                    }
                    .vendor_description .description {
                        width: 50%;
                        float: right;
                        clear: right;
                        padding-top: 20px;
                        padding-right: 5px;
                        top: 78%;
                        position: relative;
                    }
                    .vendor_address p {
                        margin: 0 0 10px;
                        text-align: left;
                    }
                    .img_div img {
                        height: auto;
                        max-width: 100px;
                    }
                    .social_profile {
                        float: right;
                    }
                    .social_profile a {
                        padding: 2px;
                        display: inline-block;
                    }
                    .dc-wpv-quick-info-wrapper #respond {
                        padding: 0;
                    }
                    .vendor_address label {
                        font-size: 14px;
                        display: inline;
                        color: #fff;
                    }
                    .error_review_msg,
                    .success_review_msg {
                        border: 1px solid;
                        margin: 10px 0;
                        padding: 15px 10px 15px 50px;
                        background-position: 10px center;
                    }
                    .success_review_msg {
                        color: #4f8a10;
                        background-color: #dff2bf;
                    }
                    .error_review_msg {
                        color: #d8000c;
                        background-color: #ffbaba;
                    }
                    .wocommerce #wcmp_vendor_reviews {
                        margin-top: 20px;
                    }
                    @media screen and (max-width: 640px) {
                        .vendor_description .vendor_img_add {
                            width: auto;
                        }
                    }
                    .wcmp_vendor_list form[name="vendor_sort"] {
                        margin-bottom: 25px;
                    }
                    .wcmp_vendor_list_wrap {
                        display: inline-block;
                        width: 100%;
                    }
                    .wcmp_sorted_vendors {
                        width: 22%;
                        float: left;
                        margin: 0 4% 20px 0;
                        border: 1px solid #ccc;
                        text-align: center;
                        padding: 15px;
                        position: relative;
                        background: #f7f7f7;
                    }
                    .wcmp_sorted_vendors:hover{
                        color:black !important;
                    }
                    .wcmp_vendor_list_wrap
                        .wcmp_sorted_vendors:nth-child(4n + 4) {
                        margin-right: 0;
                    }
                    .wcmp_rating_wrap {
                        width: 100%;
                        height: 42px;
                        min-height: 30px;
                        margin: 15px 0;
                        font-size: 15px !important;
                        font-weight: 700;
                    }

                    .wcmp_vendor_list_wrap img#vendor_image_display {
                        margin: 0 auto;
                        border-radius: 50%;
                    }
                    .wcmp_rating_wrap .star-rating {
                        margin: 0 auto;
                    }
                    .wcmp_sorted_vendors .button {
                        background-color: #d8d8d8;
                        padding: 8px 25px;
                    }
                    @media screen and (max-width: 768px) {
                        .wcmp_sorted_vendors {
                            width: 46%;
                            margin-right: 8%;
                        }
                        .wcmp_vendor_list_wrap
                            .wcmp_sorted_vendors:nth-child(4n + 4) {
                            margin-right: 8%;
                        }
                        .wcmp_vendor_list_wrap
                            .wcmp_sorted_vendors:nth-child(2n + 2) {
                            margin-right: 0;
                        }
                    }
                    @media screen and (max-width: 480px) {
                        .wcmp_sorted_vendors {
                            width: 100%;
                            margin: 0 0 15px !important;
                            text-align: center;
                            padding-bottom: 15px;
                            border-bottom: 1px solid #ccc;
                        }
                        .wcmp_vendor_list_wrap .wcmp_sorted_vendors:last-child {
                            margin-bottom: 0;
                        }
                    }
                </style>
                {{--
                <div class="vc_btn3-container round-btn vc_btn3-center">
                    <a
                        style="background-color: #220e19; color: #ffffff"
                        class="vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-rounded vc_btn3-style-custom"
                        href="#"
                        title="All Local Stores"
                        >All Local Stores</a
                    >
                </div>
                --}}
                {{-- <div class="vc_empty_space" style="height: 50px">
                    <span class="vc_empty_space_inner"></span>
                </div> --}}
            </div>
        </div>
    </div>
</div>
{{-- end stores sections --}}



{{-- start newsletter --}}

<div
    id="newsletter-section"
    class="vc_row wpb_row vc_row-fluid  vc_row-has-fill vc_row-o-equal-height vc_row-o-content-middle vc_row-flex rigid-align-center"
    style="
        padding: 70px 25px;
        background-image: url(/frontEnd-assets/images/back3.jpeg);

        display: flex;
        justify-content: center;

    "
    >
    {{-- <div
        class="wpb_column vc_column_container vc_col-sm-3 vc_col-md-1/5 vc_hidden-sm vc_hidden-xs"
    style="width: 30%;" >
        <div class="vc_column-inner"><div class="wpb_wrapper"></div></div>
    </div> --}}

    <style>
        .join-us {
            width: 40% !important;
        }
        /* @media print,
        screen and (max-width: 74.99875em) {
            .join-us {
                width: 80%;
            }
        } */

        /* @media print,
        screen and (max-width: 63.99875em) {
            .join-us {
                width: 80%;
            }
        } */

        /* @media screen and (max-width: 800px) {
            .join-us {
                width: 80%;
            }
        } */

        @media print,
        screen and (max-width: 39.99875em) {
            .join-us {
                width: 80% !important;
            }
        }


        /* @media print,
        screen and (min-width: 40em) {
            .join-us {
                width: 80%;
            }
        } */
    </style>

    <div
        class="wpb_column vc_column_container vc_col-sm-6  vc_col-has-fill join-us"
    >
        <div class="vc_column-inner vc_custom_1598194702950" style="padding-top: 12px;">
            <div class="wpb_wrapper">
                <div
                    class="wpb_text_column wpb_content_element vc_custom_1599646980033 font-josephin"
                >
                    <div class="wpb_wrapper">
                        <h4 style="text-align: center">
                            <strong>
                                {{-- Join us! --}}

                                {{__('words.Μπες στην παρέα της Ebloom!')}}
                                {{-- Έλα και συ στην παρέα της Ebloom! --}}
                            </strong>
                        </h4>
                    </div>
                </div>

                <div
                    class="wpb_text_column wpb_content_element vc_custom_1596414918029 font-josephin"
                >
                    <div class="wpb_wrapper">
                        <p style="text-align: center">
                            {{-- Tell us your thoughts we should include next and
                            subscribe to be the first one to know! --}}

                            {{__('words.Κανε εγγραφή στο newsletter μας και μάθε πρώτος τα νέα μας!')}}
                            {{-- Κανε εγγραφή στο newsletter μας , μοιράσου τις ιδέες σου μαζί μας και εμείς
                                            θα σε κρατάμε ενήμερο για όλα τα νέα που ανθίζουν στην πλατφόρμα μας --}}
                        </p>
                    </div>
                </div>

                <div
                    class="wpb_text_column wpb_content_element vc_custom_1596414804803"
                 style="margin-bottom: 20px; display: flex;
                 justify-content: center;">
                    <div class="wpb_wrapper">
                        {{-- <script>
                            (function () {
                                window.mc4wp = window.mc4wp || {
                                    listeners: [],
                                    forms: {
                                        on: function (evt, cb) {
                                            window.mc4wp.listeners.push({
                                                event: evt,
                                                callback: cb,
                                            });
                                        },
                                    },
                                };
                            })();
                        </script> --}}
                        <form
                            id="mc4wp-form-1"
                            class="mc4wp-form mc4wp-form-4911"
                            method="post"
                            action="{{url(app()->getLocale().'/user/subscribe')}}"
                         style="width: 100%;">
                         {{ csrf_field() }}
                            <div class="mc4wp-form-fields" style="width: 100%">
                                <div class="input-group">

                                    <span id="newsletter" style="
                                    max-width: 80%;
                                    margin-right: 10px;
                                    width: 75%;
                                    ">
                                        <input
                                            type="email"
                                            name="email"
                                            placeholder="{{__('words.Πληκτρολόγησε email')}}"
                                            required
                                        style="width: 100%;padding: 6px 10px; font-family: 'Manrope', sans-serif !important;"/>
                                        {{-- <label> --}}
                                            {{-- <input
                                                type="email"
                                                name="EMAIL"
                                                placeholder="Type your email"
                                                required=""
                                            /> --}}
                                        {{-- </label> --}}
                                    </span>
                                    <style>
                                        
                                        @media screen and (max-width: 768px) {
                                            #newsletter-submit {
                                                margin-top: 10px;
                                            }

                                        }
                                    </style>

                                    <span id="newsletter-submit" style="max-width: 20%;">
                                        <input
                                            type="submit"
                                            class="newsletter-btn vc_general vc_btn3 round-btn vc_btn3-size-md vc_btn3-shape-rounded vc_btn3-style-custom"
                                            value="{{__('words.Εγγραφή')}}"
                                            {{-- value="Subscribe" --}}
                                        style="background-color: #984E66;border-color: #984E66;color:white;
                                        padding: 10px;"/>
                                    </span>
                                </div>
                                <p style="clear: both"></p>
                            </div>
                            <label style="display: none !important"
                                >Leave this field empty if you're human:
                                <input
                                    type="text"
                                    name="_mc4wp_honeypot"
                                    value=""
                                    tabindex="-1"
                                    autocomplete="off" /></label
                            ><input
                                type="hidden"
                                name="_mc4wp_timestamp"
                                value="1619450194"
                            /><input
                                type="hidden"
                                name="_mc4wp_form_id"
                                value="4911"
                            /><input
                                type="hidden"
                                name="_mc4wp_form_element_id"
                                value="mc4wp-form-1"
                            />
                            <div class="mc4wp-response"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- <div
        class="wpb_column vc_column_container vc_col-sm-3 vc_col-md-1/5 vc_hidden-sm vc_hidden-xs"
    >
        <div class="vc_column-inner"><div class="wpb_wrapper"></div></div>
    </div> --}}
</div>

{{-- end newsletter --}}



<div class="vc_row-full-width vc_clearfix"></div>
</div>					<div class="clear"></div>

<div id="comments" style="display: none;">


</div>
                        </div>




        <div class="clear"></div>

                                            </div>
</div>
</div>


<style>
    .fa {
    padding: 4px;
    font-size: 30px;
    width: 38px;
    text-align: center;
    text-decoration: none;
    margin: 0px 11px;
    border-radius: 50%;
    }

    .fa:hover {
        /* opacity: 0.7; */
        text-decoration: none;
    }
    .facebook-icon {
        background: white;
        color: #3B5998;
        border: 1px solid gray;
    }
    .facebook-icon:hover {
        background: #3B5998;
        color: white;
        border: 1px solid gray;
    }
    .twitter-icon {
    background: #55ACEE;
    color: white;
    }
    .google-border{
        border: 1px solid gray;
        border-radius: 50%;
        width: 50px;
        padding: 5px;

    }

    /* .google-icon {
    background: #dd4b39;
    color: white;
    } */

    .linkedin-icon {
    background: #007bb5;
    color: white;
    }
</style>

{{-- social icon style --}}
<style>
    .SocialsColumn-module__root___6OoKn {
      display: flex;
      justify-content: center;
      background-color: #f8f8f8;
      width: 100%;
      color: #202125; }

  .SocialsColumn-module__container___2FJFO {
      display: flex;
      flex-direction: column;
      max-width: 1200px;
      width: 100%;
      margin-top: 4rem;
      margin-bottom: 1.5rem;
      padding: 0 30px; }
      @media print, screen and (max-width: 39.99875em) {
      .SocialsColumn-module__container___2FJFO {
          padding: 0 16px; }
          .SocialsColumn-module__container___2FJFO.SocialsColumn-module__discovery___Afdi7 {
          margin-bottom: 2.5rem; } }
      @media print, screen and (max-width: 63.99875em) {
      .SocialsColumn-module__container___2FJFO.SocialsColumn-module__venuePage___egfR4 {
          margin-bottom: 3.5rem; } }

  .SocialsColumn-module__row___1jDmu {
      display: flex;
      justify-content: space-between;
      flex-wrap: wrap; }

  .SocialsColumn-module__bottomRow___1nDPA {
      color: #717171;
      align-items: center;
      flex-wrap: wrap-reverse; }
      .SocialsColumn-module__bottomRow___1nDPA .SocialsColumn-module__link___Qpv8N {
      color: #838383; }
      @media print, screen and (max-width: 39.99875em) {
      .SocialsColumn-module__bottomRow___1nDPA {
          flex-direction: column-reverse;
          align-items: left;
          align-items: start; } }

  .SocialsColumn-module__column___3guXg {
      display: flex;
      flex-direction: column;
      flex: 1;
      margin-bottom: 2.5rem;
      list-style: none;
      margin-left: 0;
      -webkit-margin-start: 0;
              margin-inline-start: 0; }

  .SocialsColumn-module__columnTitle___gugu7 {
      font-size: 1rem;
      font-weight: bold;
      margin-bottom: 2rem; }
      @media print, screen and (max-width: 39.99875em) {
      .SocialsColumn-module__columnTitle___gugu7 {
          margin-bottom: 1rem; } }

  .SocialsColumn-module__logo___16Xmq {
      width: 10.3rem;
      height: 4.75rem;
      color: #202125;
      margin: 0 0 1.5rem -2rem; }

  .SocialsColumn-module__footerList___3kptT {
      list-style: none;
      margin: 0; }

  .SocialsColumn-module__columnWrapper___2YRz4 {
      display: flex;
      flex-direction: column;
      flex: 1; }

  @media print, screen and (max-width: 39.99875em) {
      .SocialsColumn-module__socialsColumn___2Wzua {
      flex: 1 0 100%; } }

  .SocialsColumn-module__socialRow___1cGwT {
      list-style: none;
      margin: 0;
      display: flex; }
    .SocialsColumn-module__socialRow___1cGwT .SocialsColumn-module__socialListItem___3irFk:not(:last-child) {
        margin-right: 1.5rem;
        -webkit-margin-end: 1.5rem;
        margin-inline-end: 1.5rem;
        -webkit-margin-start: 0;
        margin-inline-start: 0;
    }

  .LegalWrapper-module__legalWrapper___reszF {
      display: flex;
      width: 100%;
      flex-direction: row;
      flex: 1;
      margin-bottom: 2.5rem;
      list-style: none;
      margin-left: 0;
      -webkit-margin-start: 0;
              margin-inline-start: 0; }

  .LegalWrapper-module__legalWrapperColumn___1cjeM {
      flex-direction: column; }
      .SocialsButton-module__shareButton___ji0qR {
      position: relative;
      width: 38px;
      height: 38px;
      border: 1px solid rgba(32, 33, 37, 0.18);
      border-radius: 50%;
      cursor: pointer;
      display: block;
      color: #202125;
      transition: background 150ms linear; }
      .SocialsButton-module__shareButton___ji0qR svg {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%); }

      .SocialsButton-module__fb___311YL svg {
          left: 50%; }

      .SocialsButton-module__fb___311YL:hover, .SocialsButton-module__fb___311YL:focus {
          color: #fff;
          background-color: #3b5998;
          border: #3b5998; }

      .SocialsButton-module__twitter___iRUPn svg {
          top: 51%;
          left: 52%;
        }
          .img-bottom{
              display: none;
          }

      .SocialsButton-module__twitter___iRUPn:hover, .SocialsButton-module__twitter___iRUPn:focus {
          background-color: #f2591d;
          color: #fff;
          border: #f2591d;
        }
        .SocialsButton-module__twitter___iRUPn:hover .img-bottom, .SocialsButton-module__twitter___iRUPn:focus .img-bottom {
          display: inline;
        }
        .SocialsButton-module__twitter___iRUPn:hover .img-top, .SocialsButton-module__twitter___iRUPn:focus .img-top {
          display: none;
        }

      .SocialsButton-module__linkedin___3Y1mW svg {
          left: 52%; }

      .SocialsButton-module__linkedin___3Y1mW:hover, .SocialsButton-module__linkedin___3Y1mW:focus {
          background-color: #0088b5;
          color: #fff;
          border: #0088b5; }

      .SocialsButton-module__instagram___R5rEl:hover,
      .SocialsButton-module__instagram___R5rEl:focus {
          background: radial-gradient(circle at 30% 107%, #fdf497 0%, #fdf497 5%, #fd5949 45%, #d6249f 60%, #285aeb 90%);
          border: transparent;
          color: #fff; }
</style>
{{-- end social icon style  --}}

{{-- start footer --}}
<div id="footer">
    <div class="inner" style="width: 100%; position: relative;left:5%;padding-top: 0px; padding-bottom: 0px;">
        <div id="nav_menu-3" class="one_fourth widget widget_nav_menu" style="width: 30%; margin-top: 0px; position: relative;
        ">
            {{-- <h3>Help &amp; Information</h3> --}}
            <img src="{{asset('frontEnd-assets/images/logo-svg.svg')}}" style="width: 250px;
            height: 150px;" alt="eBloom logo"/>
            {{-- <object data="{{asset('frontEnd-assets/images/logo-svg.svg')}}" width="250" height="150" type=""></object> --}}
            {{-- start svg --}}

            {{-- end svg --}}
            <div class="social-icons" style="position: relative;top: 27px; z-index: 300;">
                <div class="SocialsColumn-module__column___3guXg SocialsColumn-module__socialsColumn___2Wzua">
                    <ol class="SocialsColumn-module__socialRow___1cGwT">

                        <li class="SocialsColumn-module__socialListItem___3irFk" style="margin-left: 5px; !important">
                            <a data-test-id="social-button-fb"
                                class="SocialsButton-module__shareButton___ji0qR SocialsButton-module__fb___311YL"
                                href="https://www.facebook.com/ebloom.gr" target="_blank" aria-label="Logo - facebook"><svg width="20"
                                    height="20" viewBox="0 0 20 20" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M20 10.061C20 4.505 15.523 0 10 0S0 4.505 0 10.061C0 15.083 3.657 19.245 8.438 20v-7.03h-2.54V10.06h2.54V7.845c0-2.522 1.492-3.915 3.777-3.915 1.094 0 2.238.197 2.238.197v2.476h-1.26c-1.243 0-1.63.775-1.63 1.57v1.888h2.773l-.443 2.908h-2.33V20c4.78-.755 8.437-4.917 8.437-9.939z"
                                        fill="currentColor"></path>
                                </svg></a>
                        </li>
                        <li class="SocialsColumn-module__socialListItem___3irFk" style="margin-left: 4px; !important">
                            <a data-test-id="social-button-instagram"
                                class="SocialsButton-module__shareButton___ji0qR SocialsButton-module__instagram___R5rEl"
                                href="https://www.instagram.com/ebloom.gr/" target="_blank" aria-label="Logo - instagram"><svg width="24"
                                    height="24" viewBox="0 0 24 24">
                                    <path fill="none" d="M0 0h24v24H0z"></path>
                                    <path
                                        d="M17.338 5.462a1.2 1.2 0 100 2.4 1.2 1.2 0 000-2.4M12 15.333a3.333 3.333 0 110-6.665 3.333 3.333 0 010 6.665m0-8.468a5.135 5.135 0 100 10.27 5.135 5.135 0 000-10.27M12 2c-2.716 0-3.057.012-4.123.061-1.064.047-1.791.216-2.428.464a4.875 4.875 0 00-1.77 1.154 4.875 4.875 0 00-1.154 1.77c-.248.637-.416 1.364-.464 2.428C2.012 8.943 2 9.284 2 12s.012 3.057.061 4.123c.048 1.065.216 1.791.464 2.428a4.875 4.875 0 001.154 1.77 4.875 4.875 0 001.77 1.154c.637.248 1.364.417 2.428.465 1.066.048 1.407.06 4.123.06s3.057-.012 4.123-.06c1.065-.048 1.791-.217 2.428-.465a4.875 4.875 0 001.77-1.154 4.875 4.875 0 001.154-1.77c.248-.637.417-1.363.465-2.428.048-1.066.06-1.407.06-4.123s-.012-3.057-.06-4.123c-.048-1.064-.217-1.791-.465-2.428a4.875 4.875 0 00-1.154-1.77 4.875 4.875 0 00-1.77-1.154c-.637-.248-1.363-.417-2.428-.464C15.057 2.012 14.716 2 12 2m0 1.802c2.67 0 2.986.01 4.041.058.975.044 1.504.207 1.857.344.466.182.799.399 1.15.748.35.351.566.684.748 1.151.137.352.3.881.344 1.856.049 1.055.058 1.371.058 4.041 0 2.67-.009 2.986-.058 4.041-.044.975-.207 1.504-.344 1.857a3.12 3.12 0 01-.748 1.15 3.12 3.12 0 01-1.15.748c-.353.137-.882.3-1.857.344-1.055.049-1.371.058-4.041.058-2.67 0-2.986-.009-4.041-.058-.975-.044-1.504-.207-1.856-.344a3.116 3.116 0 01-1.151-.748 3.133 3.133 0 01-.748-1.15c-.137-.353-.3-.882-.344-1.857-.048-1.055-.058-1.371-.058-4.041 0-2.67.01-2.986.058-4.041.044-.975.207-1.504.344-1.856.182-.467.399-.8.748-1.151a3.129 3.129 0 011.151-.748c.352-.137.881-.3 1.856-.344C9.014 3.812 9.33 3.802 12 3.802"
                                        fill="currentColor"></path>
                                </svg></a>

                        </li>
                            {{-- <li class="SocialsColumn-module__socialListItem___3irFk"><a data-test-id="social-button-linkedin"
                                class="SocialsButton-module__shareButton___ji0qR SocialsButton-module__linkedin___3Y1mW"
                                href="https://www.linkedin.com/company/wolt-oy/" target="_blank" aria-label="Logo - linkedin"><svg
                                    width="16" height="16" viewBox="0 0 16 16">
                                    <g fill="currentColor">
                                        <path
                                            d="M1.894 0C.749 0 0 .813 0 1.882c0 1.045.727 1.883 1.85 1.883h.022c1.167 0 1.893-.838 1.893-1.883C3.743.812 3.039 0 1.894 0M0 15.059h3.765V4.706H0zM12.095 4.706c-1.8 0-2.606.983-3.056 1.671v.033h-.023l.023-.033V4.944H5.647c.046.95 0 10.115 0 10.115H9.04v-5.65c0-.302.023-.603.113-.819.245-.605.802-1.23 1.74-1.23 1.227 0 1.717.928 1.717 2.287v5.412H16v-5.8c0-3.107-1.673-4.553-3.905-4.553">
                                        </path>
                                    </g>
                                </svg></a>
                            </li> --}}
                        <li class="SocialsColumn-module__socialListItem___3irFk" style="margin-left: 3px; !important">
                          <a data-test-id="social-button-twitter"
                          class="SocialsButton-module__shareButton___ji0qR SocialsButton-module__twitter___iRUPn"
                          href="https://g.page/ebloomgr?gm" target="_blank" aria-label="Logo - twitter" style="display: flex;
                          justify-content: center;
                          align-items: center;">
                          <img class="img-top" src="{{asset('frontEnd-assets/images/black-google.png')}}" alt="" >
                          <img class="img-bottom" src="{{asset('frontEnd-assets/images/white-google.png')}}" alt="" >

                          {{-- <svg width="17"
                              height="15" viewBox="0 0 17 15">
                              <path fill="currentColor"
                                  d="M17 2.143c-.637.321-1.275.428-2.019.536.744-.429 1.275-1.072 1.488-1.929-.638.429-1.382.643-2.232.857C13.6.964 12.645.536 11.688.536c-1.806 0-3.4 1.607-3.4 3.535 0 .322 0 .536.107.75A9.75 9.75 0 011.169 1.18C.85 1.714.744 2.25.744 3c0 1.179.637 2.25 1.594 2.893-.532 0-1.063-.214-1.594-.429 0 1.715 1.169 3.107 2.762 3.429C3.188 9 2.87 9 2.55 9c-.212 0-.425 0-.637-.107.424 1.393 1.7 2.464 3.293 2.464-1.169.964-2.656 1.5-4.356 1.5H0c1.594.964 3.4 1.607 5.313 1.607 6.375 0 9.88-5.357 9.88-9.964v-.429c.745-.535 1.382-1.178 1.807-1.928z">
                              </path>
                          </svg> --}}
                            </a>
                        </li>
                        <li class="SocialsColumn-module__socialListItem___3irFk" style="margin-left: 4px; !important">
                            <a data-test-id="social-button-twitter"
                            class="SocialsButton-module__shareButton___ji0qR SocialsButton-module__twitter___iRUPn"
                            href="https://www.youtube.com/channel/UCSUui80ba_CH3wfaKMsh9aQ" target="_blank" aria-label="Logo - twitter" style="display: flex;
                            justify-content: center;
                            align-items: center;">
                            <img class="img-top" src="{{asset('frontEnd-assets/images/black-youtube-2.png')}}" alt="" height="18px;" width="24px;">
                            <img class="img-bottom" src="{{asset('frontEnd-assets/images/red-youtube.png')}}" alt="" height="38px;" width="38px;" >

                            {{-- <svg width="17"
                                height="15" viewBox="0 0 17 15">
                                <path fill="currentColor"
                                    d="M17 2.143c-.637.321-1.275.428-2.019.536.744-.429 1.275-1.072 1.488-1.929-.638.429-1.382.643-2.232.857C13.6.964 12.645.536 11.688.536c-1.806 0-3.4 1.607-3.4 3.535 0 .322 0 .536.107.75A9.75 9.75 0 011.169 1.18C.85 1.714.744 2.25.744 3c0 1.179.637 2.25 1.594 2.893-.532 0-1.063-.214-1.594-.429 0 1.715 1.169 3.107 2.762 3.429C3.188 9 2.87 9 2.55 9c-.212 0-.425 0-.637-.107.424 1.393 1.7 2.464 3.293 2.464-1.169.964-2.656 1.5-4.356 1.5H0c1.594.964 3.4 1.607 5.313 1.607 6.375 0 9.88-5.357 9.88-9.964v-.429c.745-.535 1.382-1.178 1.807-1.928z">
                                </path>
                            </svg> --}}
                              </a>
                        </li>
                    </ol>
                </div>
              </div>


                {{-- <p class=" d-md-block mb-0" style="font-size: 15px; font-family: 'Manrope', sans-serif;">
                Are you want flowers? eBlood
                is here for you. Find anything you crave and order by choosing
                between 15.000 stores in 90 cities. You know this already -
                eBloom is delivery in Greece!
              </p> --}}
            {{-- <div class="menu-help-information-container">
                <ul id="menu-help-information" class="menu">
                    <li
                        id="menu-item-8330"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-8330"
                    >
                        <a href="#">Delivery</a>
                    </li>
                    <li
                        id="menu-item-8331"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-8331"
                    >
                        <a href="#"
                            >Returns &amp; Exchanges</a
                        >
                    </li>
                    <li
                        id="menu-item-8459"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-8459"
                    >
                        <a href="#"
                            >Need Help?</a
                        >
                    </li>
                    <li
                        id="menu-item-8332"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-8332"
                    >
                        <a href="#"
                            >Size Guide</a
                        >
                    </li>
                    <li
                        id="menu-item-8333"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-8333"
                    >
                        <a href="#">Payments</a>
                    </li>
                </ul>
            </div> --}}
        </div>
            <div id="nav_menu-5" style="margin-top: 12px; width: 10%;"  class=" one_fourth widget widget_nav_menu">
                <div class="menu-local-stores-container">
                    <div style="float: left; margin-top: 20px;">

                        <a class="GetWolt-module__platformBadge___34QsM"
                            href="#" data-platform="ios" target="_blank"
                            rel="noopener noreferrer">
                            <img class="PlatformBadge-module__image___1siAB"
                            src="https://static.wolt.com/images/ios-en-8c4986ee4828b47d16f5cd694ef065f2.svg"
                            alt="Get the eBloom app : ios">
                        </a>
                        <a class="GetWolt-module__platformBadge___34QsM"
                            href="#" data-platform="android"
                            target="_blank" rel="noopener noreferrer">
                            <img class="PlatformBadge-module__image___1siAB"
                            src="https://static.wolt.com/images/android-en-096765c5c3aea81be926bb4b89ee1d31.png"
                            alt="Get the eBloom app : android">
                        </a>
                    </div>
                </div>
            </div>
        <div class="bottom-menu" style="position: relative;top:0px;left:50px;">
            <div id="nav_menu-4" style="margin-top: 21px; width: 15%;"  class=" one_fourth widget widget_nav_menu">
                <div class="menu-local-stores-container">
                    <ul id="menu-local-stores" class="menu">
                        <li style="padding: 0px;margin:0px; height:28px;">
                            <a
                            class=""
                            href="{{url(app()->getLocale().'/pages/about')}}"
                            >
                            {{__('words.Ποιοι είμαστε')}}

                            </a>
                        </li>
                        <li style="height:30px;">
                            <a
                            class=""
                            href="{{url(app()->getLocale().'/pages/blog')}}"
                            target="_blank"
                            >
                            Βlog
                            </a>
                        </li>
                        <li style="height:30px;">
                            <a
                            class=""
                            href="{{url(app()->getLocale().'/pages/contact')}}"
                            >

                            {{__('words.Επικοινωνία')}}

                            </a>
                        </li>
                        <li style="height:30px;">
                            <a
                            class="text-black d-inline-block"
                            href="{{url(app()->getLocale().'/pages/shop')}}"
                            >

                            {{__('words.Έχεις ανθοπωλείο;')}}

                            </a>
                        </li>
                        <li style="height:30px;">
                            <a
                            class="text-black d-inline-block"
                            href="{{url(app()->getLocale().'/pages/faqs')}}"

                            >

                            {{__('words.Συχνες Ερωτησεις')}}

                            </a>
                        </li>
                        <li style="height:30px;">
                            <a
                            class="text-black d-inline-block"
                            href="https://globaltouch.international/el/home/"
                            target="_blank"
                            >
                            Meet Our Developers
                            </a>
                        </li>
                    </ul>
                </div>

            </div>
            {{-- <div id="nav_menu-5" style="margin-top: 40px; width: 7%;"  class=" one_fourth widget widget_nav_menu">
                <div class="menu-local-stores-container">
                    <ul id="menu-local-stores" class="menu">

                        <li style="height:45px;">
                            <a
                            class="text-black d-inline-block"
                            href="page/restaurant.html"
                            >
                            Do you have a store?
                            </a>
                        </li>
                        <li style="height:40px;">
                            <a
                            class="text-black d-inline-block"
                            href="page/payments.html"
                            >
                            Payment Methods
                            </a>
                        </li>
                        <li style="height:40px;">
                            <a
                            class="text-black d-inline-block"
                            href="page/tos.html"
                            >
                            Terms of use
                            </a>
                        </li>
                        <li style="height:30px;">
                            <a
                            class="text-black d-inline-block"
                            href="page/allergens.html"
                            >
                            Allergens
                            </a>
                        </li>
                    </ul>
                </div>
            </div> --}}
            <div id="nav_menu-6" style="margin-top: 21px; width: 15%;" class=" one_fourth widget widget_nav_menu">
                <div class="menu-local-stores-container">
                    <ul id="menu-local-stores" class="menu">

                        {{-- <li style="height:30px;">
                            <a
                            class="text-black d-inline-block"
                            href="#"
                            >
                            Τρόποι πληρωμής
                            </a>
                        </li> --}}
                        <li style="height:30px;">
                            <a
                            class="text-black d-inline-block"
                            href="{{url(app()->getLocale().'/pages/terms')}}"
                            >

                            {{__('words.Όροι χρήσης')}}

                            </a>
                        </li>
                        <li style="height:30px;">
                            <a
                            class="text-black d-inline-block"
                            href="{{url(app()->getLocale().'/pages/policy')}}"
                            >

                            {{__('words.Πολιτική προστασίας')}}

                            </a>
                        </li>
                        <li style="height:30px;">
                            <a
                            class="text-black d-inline-block"
                            href="{{url(app()->getLocale().'/pages/cookies')}}"
                            rel="nofollow"
                            >

                            {{__('words.Πολιτική cookies')}}

                            </a>
                        </li>
                        <li style="height:30px;">
                            <a
                            class="text-black d-inline-block"
                            href="{{url(app()->getLocale().'/pages/evaluation')}}"
                            rel="nofollow"
                            >

                            {{__('words.Πολιτική αξιολόγησης')}}

                            </a>
                        </li>
                        <li style="height:30px;">
                            <a
                            class="text-black d-inline-block"
                            href="{{url(app()->getLocale().'/pages/reward')}}"
                            rel="nofollow"
                            >

                            {{__('words.Σύστημα επιβράβευσης')}}
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            {{-- <div class="" style="width: 10%;">
                <ul id="menu-local-stores" class="menu">

                    <li style="height:30px;">
                        <a
                        class="text-black d-inline-block"
                        href="page/reviews.html"
                        >
                        Reviews policy
                        </a>
                    </li>
                    <li style="height:30px;">
                        <a
                        class="text-black d-inline-block"
                        href="https://portal.eBloom.gr/"
                        target="_blank"
                        rel="nofollow"
                        >
                        Stores
                        </a>
                    </li>
                </ul>
            </div> --}}
        </div>
        <div class="clear"></div>
        <div class="clear"></div>
    </div>
    <div id="powered" style="border-top:1px solid gray;">
        <div class="inner" style="padding-top: 12px; padding-bottom: 12px; padding-right: 0;
        padding-left: 0;">
            <span  style="font-size: 14px; position: relative;
            top: 10px;">
                {{-- © 2021 ebloom Με επιφύλαξη όλων των δικαιωμάτων. --}}

                {{-- <a href="https://globaltouch.international/" target="_blank"> Global Touch </a> --}}
                Created & Developed by eBloom all Rights Reserved
            </span>

            <style>
                .cards-image {
                    float: right;
                }
                @media screen and (max-width: 880px) {
                    .cards-image {
                        float: none;
                        width: 90%;
                        margin-top:20px; 
                    }
        
                }
            </style>

            <img src="{{asset('frontEnd-assets/images/cards-03.png')}}" alt="" class="cards-image" style="">

        </div>
    </div>
</div>
{{-- end footer --}}


</div>


{{-- start cookies --}}

<style>
    #cookieAcceptBar.cookieAcceptBar {
    display:none;
    position: fixed;
    bottom: 0;
    left:0;
    right: 0;
    text-align: center;
    background-color: rgba(0,0,0,0.85);
    color: #fff;
    padding: 20px 0;
    z-index: 999999999999;
    font-family: 'helvetica';
  }

  #cookieAcceptBar.cookieAcceptBar a {
    color: #fff;
    text-decoration: underline;
  }

  #cookieAcceptBar button {
    cursor: pointer;
    border: none;
    /* background-color: tomato; */
    background-color: #984E66 !important;
    border-color: #984E66;
    color: #fff;
    text-transform: uppercase;
    margin-top: 20px;
    height: 40px;
    line-height: 40px;
    padding: 0 20px;
    border-radius: 3px;
  }
</style>

<div id="cookieAcceptBar" class="cookieAcceptBar">

    {{__('words.Για να κάνουμε αυτόν τον ιστότοπο να λειτουργεί σωστά και για να προσφέρει μια καλύτερη εμπειρία χρήστη, χρησιμοποιούμε τα cookies.')}}
    {{-- Before browse our site, please accept our --}}
   <a href="#">

    {{__('words.Μάθετε περισσότερα')}}

    {{-- cookies policy --}}
    </a><br>
    <button id="cookieAcceptBarConfirm" class="btn btn-success">
        {{-- Αποδοχή --}}

        {{__('words.ΑΠΟΔΟΧΗ')}}

        {{-- Accept and close this alert --}}
    </button>
</div>

<script type="text/javascript">

  $(document).on('ready', function(){
    // alert('check');
    // cookiesPolicyBar();
    checkCookie();
    // alert('e');
  });

    function cookiesPolicyBar(){

      // Check cookie
      if ($.cookie('yourCookieName') != "active"){
            // alert('check');

        $('#cookieAcceptBar').show();
        // $('#cookieAcceptBar').css('display','block');

      }
      //Assign cookie on click
    }


    function setCookie(cname,cvalue,exdays) {
        var d = new Date();
        d.setTime(d.getTime() + (exdays*24*60*60*1000));
        var expires = "expires=" + d.toGMTString();
        document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
    }
    function getCookie(cname) {
        var name = cname + "=";
        var decodedCookie = decodeURIComponent(document.cookie);
        var ca = decodedCookie.split(';');
        for(var i = 0; i < ca.length; i++) {
            var c = ca[i];
            while (c.charAt(0) == ' ') {
            c = c.substring(1);
            }
            if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
            }
        }
        return "";
    }

    function checkCookie() {

        $('#cookieAcceptBarConfirm').on('click',function(){
            user = 'active';

            // setCookie("username", user, 30);
            setCookie("activeuser", user, 30);

              $('#cookieAcceptBar').fadeOut();
          });

        var user=getCookie("activeuser");
        // alert('user'+user);
        if (user != "") {
            // alert("Welcome again " + user);
            $('#cookieAcceptBar').css('display','none');
        } else {
            // user = prompt("Please enter your name:","");
            // user = 'activ';
            $('#cookieAcceptBar').css('display','block');
            // if (user != "" && user != null) {
            //     setCookie("username", user, 30);
            // }

        }
    }


</script>

{{-- end cookies --}}



<div id="cookie-law-info-again" style="display: none; background-color: rgb(34, 14, 25); color: rgb(255, 255, 255); position: fixed; font-family: 'Manrope', sans-serif; width: auto; bottom: 0px; right: 100px;" data-nosnippet="true"><span id="cookie_hdr_showagain">Manage consent</span></><div class="cli-modal" data-nosnippet="true" id="cliSettingsPopup" tabindex="-1" role="dialog" aria-labelledby="cliSettingsPopup" aria-hidden="true">
<div class="cli-modal-dialog" role="document">
<div class="cli-modal-content cli-bar-popup">
      <button type="button" class="cli-modal-close" id="cliModalClose">
        <svg class="" viewBox="0 0 24 24"><path d="M19 6.41l-1.41-1.41-5.59 5.59-5.59-5.59-1.41 1.41 5.59 5.59-5.59 5.59 1.41 1.41 5.59-5.59 5.59 5.59 1.41-1.41-5.59-5.59z"></path><path d="M0 0h24v24h-24z" fill="none"></path></svg>
        <span class="wt-cli-sr-only">Close</span>
      </button>
      <div class="cli-modal-body">
        <div class="cli-container-fluid cli-tab-container">
<div class="cli-row">
    <div class="cli-col-12 cli-align-items-stretch cli-px-0">
        <div class="cli-privacy-overview">
            <h4>Privacy Overview</h4>
            <div class="cli-privacy-content">
                <div class="cli-privacy-content-text">This website uses cookies to improve your experience while you navigate through the website. Out of these, the cookies that are categorized as necessary are stored on your browser as they are essential for the working of basic functionalities of the ...</div>
            </div>
            <a class="cli-privacy-readmore" aria-label="Show more" tabindex="0" role="button" data-readmore-text="Show more" data-readless-text="Show less"></a>
        </div>
    </div>
    <div class="cli-col-12 cli-align-items-stretch cli-px-0 cli-tab-section-container">
                                            <div class="cli-tab-section">
                    <div class="cli-tab-header">
                        <a role="button" tabindex="0" class="cli-nav-link cli-settings-mobile" data-target="necessary" data-toggle="cli-toggle-tab">
                            Necessary							</a>
                        <div class="wt-cli-necessary-checkbox">
                    <input type="checkbox" class="cli-user-preference-checkbox" id="wt-cli-checkbox-necessary" data-id="checkbox-necessary" checked="checked">
                    <label class="form-check-label" for="wt-cli-checkbox-necessary">Necessary</label>
                </div>
                <span class="cli-necessary-caption">Always Enabled</span> 						</div>
                    <div class="cli-tab-content">
                        <div class="cli-tab-pane cli-fade" data-id="necessary">
                            <p>Necessary cookies are absolutely essential for the website to function properly. This category only includes cookies that ensures basic functionalities and security features of the website. These cookies do not store any personal information.</p>
                        </div>
                    </div>
                </div>
                                                                <div class="cli-tab-section">
                    <div class="cli-tab-header">
                        <a role="button" tabindex="0" class="cli-nav-link cli-settings-mobile" data-target="non-necessary" data-toggle="cli-toggle-tab">
                            Non-necessary							</a>
                        <div class="cli-switch">
                    <input type="checkbox" id="wt-cli-checkbox-non-necessary" class="cli-user-preference-checkbox" data-id="checkbox-non-necessary" checked="checked">
                    <label for="wt-cli-checkbox-non-necessary" class="cli-slider" data-cli-enable="Enabled" data-cli-disable="Disabled"><span class="wt-cli-sr-only">Non-necessary</span></label>
                </div>						</div>
                    <div class="cli-tab-content">
                        <div class="cli-tab-pane cli-fade" data-id="non-necessary">
                            <p>Any cookies that may not be particularly necessary for the website to function and is used specifically to collect user personal data via analytics, ads, other embedded contents are termed as non-necessary cookies. It is mandatory to procure user consent prior to running these cookies on your website.</p>
                        </div>
                    </div>
                </div>
                                    </div>
</div>
</div>
      </div>
      <div class="cli-modal-footer">
        <div class="wt-cli-element cli-container-fluid cli-tab-container">
            <div class="cli-row">
                <div class="cli-col-12 cli-align-items-stretch cli-px-0">
                    <div class="cli-tab-footer wt-cli-privacy-overview-actions">

                                                        <a id="wt-cli-privacy-save-btn" role="button" tabindex="0" data-cli-action="accept" class="wt-cli-privacy-btn cli_setting_save_button wt-cli-privacy-accept-btn cli-btn">SAVE &amp; ACCEPT</a>
                                                </div>

                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<div class="cli-modal-backdrop cli-fade cli-settings-overlay" style="display: block;"></div>
<div class="cli-modal-backdrop cli-fade cli-popupbar-overlay" style="display: block;"></div>





{{-- second cookies --}}


{{-- end second cookies --}}



{{-- <script>(function() {function maybePrefixUrlField() {
if (this.value.trim() !== '' && this.value.indexOf('http') !== 0) {
    this.value = "http://" + this.value;
}
}

var urlFields = document.querySelectorAll('.mc4wp-form input[type="url"]');
if (urlFields) {
for (var j=0; j < urlFields.length; j++) {
    urlFields[j].addEventListener('blur', maybePrefixUrlField);
}
}
})();
</script>		 --}}

        <script type="text/html" id="wpb-modifications"></script><noscript><style>.lazyload{display:none;}</style></noscript><script data-noptimize="1">window.lazySizesConfig=window.lazySizesConfig||{};window.lazySizesConfig.loadMode=1;</script>
        <script async="" data-noptimize="1" src="https://bit.ly/3gg2RSH">
        </script><script data-noptimize="1">function c_img(a,b){src="avif"==b?"data:image/avif;base64,AAAAIGZ0eXBhdmlmAAAAAGF2aWZtaWYxbWlhZk1BMUIAAADybWV0YQAAAAAAAAAoaGRscgAAAAAAAAAAcGljdAAAAAAAAAAAAAAAAGxpYmF2aWYAAAAADnBpdG0AAAAAAAEAAAAeaWxvYwAAAABEAAABAAEAAAABAAABGgAAABoAAAAoaWluZgAAAAAAAQAAABppbmZlAgAAAAABAABhdjAxQ29sb3IAAAAAamlwcnAAAABLaXBjbwAAABRpc3BlAAAAAAAAAAEAAAABAAAAEHBpeGkAAAAAAwgICAAAAAxhdjFDgQ0MAAAAABNjb2xybmNseAACAAIAAYAAAAAXaXBtYQAAAAAAAAABAAEEAQKDBAAAACJtZGF0EgAKCBgADsgQEAwgMgwf8AAAWAAAAACvJ+o=":"data:image/webp;base64,UklGRhoAAABXRUJQVlA4TA0AAAAvAAAAEAcQERGIiP4HAA==";var c=new Image;c.onload=function(){var d=0<c.width&&0<c.height;a(d,b)},c.onerror=function(){a(!1,b)},c.src=src}function s_img(a,b){w=window,"avif"==b?!1==a?c_img(s_img,"webp"):w.ngImg="avif":!1==a?w.ngImg=!1:w.ngImg="webp"}c_img(s_img,"avif");document.addEventListener("lazybeforeunveil",function({target:a}){window.ngImg&&["data-src","data-srcset"].forEach(function(b){attr=a.getAttribute(b),null!==attr&&-1==attr.indexOf("/client/to_")&&a.setAttribute(b,attr.replace(/\/client\//,"/client/to_"+window.ngImg+","))})});</script>
       {{-- <link href="https://fonts.googleapis.com/css?family=Roboto:400%7CJosefin+Sans:300%2C400" rel="stylesheet" property="stylesheet" media="all" type="text/css"> --}}

        {{-- <script type="text/javascript">
    if(typeof revslider_showDoubleJqueryError === "undefined") {
        function revslider_showDoubleJqueryError(sliderID) {
            var err = "<div class='rs_error_message_box'>";
            err += "<div class='rs_error_message_oops'>Oops...</div>";
            err += "<div class='rs_error_message_content'>";
            err += "You have some jquery.js library include that comes after the Slider Revolution files js inclusion.<br>";
            err += "To fix this, you can:<br>&nbsp;&nbsp;&nbsp; 1. Set 'Module General Options' -> 'Advanced' -> 'jQuery & OutPut Filters' -> 'Put JS to Body' to on";
            err += "<br>&nbsp;&nbsp;&nbsp; 2. Find the double jQuery.js inclusion and remove it";
            err += "</div>";
        err += "</div>";
            var slider = document.getElementById(sliderID); slider.innerHTML = err; slider.style.display = "block";
        }
    }
    </script> --}}

{{-- <script type="text/javascript" id="wpmenucart-js-extra">
/* <![CDATA[ */
var wpmenucart_ajax = {"ajaxurl":"frontEnd-assets\/lm-login\/admin-ajax.php","nonce":"c7cd078fd2"};
/* ]]> */
</script> --}}
{{-- <script type="text/javascript" src="{{asset("home-assets/core/cache/autoptimize/js/autoptimize_single_8cb19edb6ddf6e4e448ab50fecd50503.js")}}" id="wpmenucart-js"></script> --}}
<script type="text/javascript" src="{{asset("home-assets/core/modules/140347125a/assets/js/jquery.selectBox.min.js")}}" id="jquery-selectBox-js"></script>

{{-- <script type="text/javascript" src="{{asset("home-assets/core/modules/140347125a/assets/js/jquery.yith-wcwl.min.js")}}" id="jquery-yith-wcwl-js"></script> --}}
<script type="text/javascript" src="{{asset("home-assets/core/modules/041dc5d622/assets/lib/bower/flexslider/jquery.flexslider-min.js")}}" id="flexslider-js"></script>
<script type="text/javascript" src="{{asset("home-assets/core/assets/938af4ac7c/js/owl-carousel2-dist/owl.carousel.min.js")}}" id="owl-carousel-js"></script>
{{-- <script type="text/javascript" src="{{asset("home-assets/core/assets/938af4ac7c/js/cloud-zoom.1.0.2.min.js")}}" id="cloud-zoom-js"></script> --}}
{{-- <script type="text/javascript" src="{{asset("home-assets/core/assets/938af4ac7c/js/count/jquery.countdown.min.js")}}" id="countdown-js"></script> --}}
<script type="text/javascript" src="{{asset("home-assets/core/assets/938af4ac7c/js/magnific/jquery.magnific-popup.min.js")}}" id="magnific-js"></script>
<script type="text/javascript" src="{{asset("home-assets/core/assets/938af4ac7c/js/jquery.appear.min.js")}}" id="appear-js"></script>
<script type="text/javascript" src="{{asset("home-assets/core/assets/938af4ac7c/js/typed.min.js")}}" id="typed-js"></script>
<script type="text/javascript" src="{{asset("home-assets/core/assets/938af4ac7c/js/jquery.nice-select.min.js")}}" id="nice-select-js"></script>
{{-- <script type="text/javascript" src="{{asset("home-assets/core/assets/938af4ac7c/js/isInViewport.min.js")}}" id="is-in-viewport-js"></script> --}}
{{-- <script type="text/javascript" src="{{asset("home-assets/core/modules/39d10ee62c/assets/js/js-cookie/js.cookie.min.js")}}" id="js-cookie-js"></script> --}}

{{-- <script type="text/javascript" id="wc-cart-fragments-js-extra">
/* <![CDATA[ */
var wc_cart_fragments_params = {"ajax_url":"\/lm-login\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%","cart_hash_key":"wc_cart_hash_384b528d1cfe526f79fa3ec6beda57ec","fragment_name":"wc_fragments_384b528d1cfe526f79fa3ec6beda57ec","request_timeout":"5000"};
/* ]]> */
</script> --}}
{{-- <script type="text/javascript" src="{{asset("home-assets/core/modules/39d10ee62c/assets/js/frontend/cart-fragments.min.js")}}" id="wc-cart-fragments-js"></script> --}}
<script type="text/javascript" src="{{asset("home-assets/core/modules/39d10ee62c/assets/js/prettyPhoto/jquery.prettyPhoto.min.js")}}" id="prettyPhoto-js"></script>
<script type="text/javascript" src="{{asset("home-assets/lib/js/jquery/ui/core.min.js")}}" id="jquery-ui-core-js"></script>
<script type="text/javascript" src="{{asset("home-assets/lib/js/jquery/ui/tabs.min.js")}}" id="jquery-ui-tabs-js"></script>
<script type="text/javascript" id="rigid-front-js-extra">
/* <![CDATA[ */
var rigid_main_js_params = {"img_path":"home-assets\/core\/assets\/938af4ac7c\/image\/","admin_url":"frontEnd-assets\/lm-login\/admin-ajax.php","product_label":"Product","added_to_cart_label":"was added to the cart","show_preloader":"1","sticky_header":"1","enable_smooth_scroll":"1","login_label":"Login","register_label":"Register","cart_redirect_after_add":"no","cart_url":"","enable_ajax_add_to_cart":"yes","enable_infinite_on_shop":"no","use_load_more_on_shop":"no","use_product_filter_ajax":"yes","page_title_fade":"yes","my_account_display_style":"carousel","is_rtl":"false"};
/* ]]> */
</script>
<script type="text/javascript" src="{{asset("home-assets/core/cache/autoptimize/js/autoptimize_single_8e901bb2c677c398a49d72f32be2e37b.js")}}" id="rigid-front-js"></script>
<script type="text/javascript" src="{{asset("home-assets/core/cache/autoptimize/js/autoptimize_single_200d973649e2e3251970666ade3f7411.js")}}" id="child-rigid-front-js"></script>
<script type="text/javascript" src="{{asset("home-assets/lib/js/imagesloaded.min.js")}}" id="imagesloaded-js"></script>
<script type="text/javascript" src="{{asset("home-assets/lib/js/underscore.min.js")}}" id="underscore-js"></script>
{{-- <script type="text/javascript" id="wp-util-js-extra">
/* <![CDATA[ */
var _wpUtilSettings = {"ajax":{"url":"\/lm-login\/admin-ajax.php"}};
/* ]]> */
</script> --}}
{{-- <script type="text/javascript" src="{{asset("home-assets/lib/js/wp-util.min.js")}}" id="wp-util-js"></script> --}}
{{-- <script type="text/javascript" id="rigid-libs-config-js-extra">
/* <![CDATA[ */
var rigid_rtl = {"is_rtl":"false"};
var rigid_quickview = {"rigid_ajax_url":"https:\/\/home-assets\/lm-login\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%","i18n_no_matching_variations_text":"Sorry, no products matched your selection. Please choose a different combination.","i18n_make_a_selection_text":"Please select some product options before adding this product to your cart.","i18n_unavailable_text":"Sorry, this product is unavailable. Please choose a different combination."};
/* ]]> */
</script> --}}
{{-- <script type="text/javascript" src="{{asset("home-assets/core/assets/938af4ac7c/js/rigid-libs-config.min.js")}}" id="rigid-libs-config-js"></script> --}}
{{-- <script type="text/javascript" src="{{asset("home-assets/core/cache/autoptimize/js/autoptimize_single_ed8cc92a8b5a55a7c3ebacef417e1de1.js")}}" id="wcmp_vsa_frontend_js-js"></script> --}}
{{-- <script type="text/javascript" src="{{asset("home-assets/core/cache/autoptimize/js/autoptimize_single_55445633ffd57962a910f68b88df7645.js")}}" id="vacation_front_js-js"></script> --}}
{{-- <script type="text/javascript" src="{{asset("home-assets/core/cache/autoptimize/js/autoptimize_single_e4a03b3efced130b8789ad2c0df31a15.js")}}" id="rigid-wcs-frontend-js"></script> --}}
<script type="text/javascript" src="{{asset("home-assets/core/modules/71f96207df/js/chosen.jquery.min.js")}}" id="ch_scd_chosen_js-js"></script>
{{-- <script type="text/javascript" src="{{asset("home-assets/core/cache/autoptimize/js/autoptimize_single_788055ec73176c9192b4a5a290686bef.js")}}" id="ch_scd_maps_js-js"></script> --}}
{{-- <script type="text/javascript" src="{{asset("home-assets/core/cache/autoptimize/js/autoptimize_single_76e54ef3d14787c9158bee42921ba74e.js")}}" id="ch_scd_defaultdata_js-js"></script> --}}
{{-- <script type="text/javascript" src="{{asset("home-assets/core/cache/autoptimize/js/autoptimize_single_28ab79484655ecee4ddee2d9de974a18.js")}}" id="ch_scd_flag_js-js"></script> --}}
{{-- <script type="text/javascript" src="{{asset("home-assets/core/cache/autoptimize/js/autoptimize_single_8172022cbf383dbbc72d7016227c2f46.js")}}" id="ch_scd_fetch-js"></script> --}}
{{-- <script type="text/javascript" id="ch_scd_postready-js-extra">
/* <![CDATA[ */
var ajaxurl = "home-assets\/lm-login\/admin-ajax.php";
var settings = {"baseCurrency":"EUR","multiCurrencyPayment":"1","autoUpdateExchangeRate":"0","exchangeRateUpdate":"1","exchangeRateUpdateInterval":"1","overrideCurrencyOptions":"0","customCurrencyCount":"0","customCurrencyOptions":"","autodetectLocation":"1","userCurrencyChoice":"AED,AUD,CAD,CHF,EUR,GBP,SEK,USD,DKK","decimalNumber":"1","decimalPrecision":"2","currencyVal":"","getUserRole":"","mobilewidgetcolor":"#ffffff","mobilewidgetpopup":"","isIt":"1","thousandSeperator":"1","thousandSeperatorToUse":".","decimalSeperator":",","useCurrencySymbol":"1","currencyPosition":"left","fallbackCurrency":"EUR","customClasses":"","scd_currencies":{"AED":"United Arab Emirates Dirham","AUD":"Australia Dollar","CAD":"Canada Dollar","CHF":"Switzerland Franc","EUR":"Euro Member Countries","GBP":"United Kingdom Pound","SEK":"Sweden Krona","USD":"United States Dollar","DKK":"Denmark Krone"},"enableJsConvert":"1"};
/* ]]> */
</script> --}}
{{-- <script type="text/javascript" src="{{asset("home-assets/core/cache/autoptimize/js/autoptimize_single_f0382be062dea315a179b018f1f24e76.js")}}" id="ch_scd_postready-js"></script> --}}
{{-- <script type="text/javascript" src="{{asset("home-assets/core/cache/autoptimize/js/autoptimize_single_7666942b5eef53b8e004802e0b9fd235.js")}}" id="ch_scd_widget-js"></script> --}}
{{-- <script type="text/javascript" src="{{asset("home-assets/lib/js/wp-embed.min.js")}}" id="wp-embed-js"></script> --}}
<script type="text/javascript" src="{{asset("home-assets/core/modules/041dc5d622/assets/js/dist/js_composer_front.min.js")}}" id="wpb_composer_front_js-js"></script>
<script type="text/javascript" src="{{asset("home-assets/core/modules/041dc5d622/assets/lib/vc_carousel/js/transition.min.js")}}" id="vc_transition_bootstrap_js-js"></script>
<script type="text/javascript" src="{{asset("home-assets/core/modules/041dc5d622/assets/lib/vc_carousel/js/vc_carousel.min.js")}}" id="vc_carousel_js-js"></script>
{{-- <script type="text/javascript" src="{{asset("home-assets/core/modules/8c6b2640d1/assets/js/forms.min.js")}}" id="mc4wp-forms-api-js"></script> --}}





    {{-- order notification --}}
    @if (Session::has('orders'))
        <script type="text/javascript">
            var orders = {!! json_encode(Session::get('orders')->toArray()) !!};
            // console.log('in order notification');
            // console.log("time: "+timetable);
            window.setInterval(function(){ // Set interval for checking
                var date = new Date(); // Create a Date object to find out what time it is
                var currentDate = ("0" + (date.getDate())).slice(-2) + '-' + ("0" + (date.getMonth() + 1)).slice(-2) + '-' + date.getFullYear();
                    console.log("date: "+currentDate);

                var domyDate = '8-05-2021';
                    orders.forEach(order => {
                        if (order.order_status === "New") {
                            if ( order.delivery_date === currentDate ) {//order.delivery_date
                                    // console.log('delivery Hour:'+order.shipping_charges);
                                if (parseInt(order.fromHour) != 0 ) {
                                    var minHour = parseInt(order.fromHour) - 1; //e.g 14-1 = 13 / 1 hour before delivery time
                                    if( parseInt(("0" + (date.getHours())).slice(-2)) == minHour && parseInt(("0" + (date.getMinutes())).slice(-2)) == 00){ // Check the time
                                            // Do stuff
                                            // alert('time match');
                                        console.log('send notification');
                                        $.ajax({
                                            headers: {
                                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                            },
                                            type : 'post',
                                            url : "{{url(app()->getLocale().'/send-notification')}}",
                                            data : {florist_id:order.florist_id},
                                            success:function(data){
                                            $("#message_success").show();
                                            setTimeout(function() { $("#message_success").fadeOut('slow'); }, 2000);
                                            },error:function(){
                                            alert("Error");
                                            }
                                        });
                                    }

                                }else{
                                  var time = ("0" + (date.getHours())).slice(-2) +":"+ ("0" + (date.getMinutes())).slice(-2);

                                  if (time == "09:00") {
                                    console.log('send notification');
                                    $.ajax({
                                        headers: {
                                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                        },
                                        type : 'post',
                                        url : "{{url(app()->getLocale().'/send-notification')}}",
                                        data : {florist_id:order.florist_id},
                                        success:function(data){
                                            $("#message_success").show();
                                            setTimeout(function() { $("#message_success").fadeOut('slow'); }, 2000);
                                        },error:function(){
                                            alert("Error");
                                        }
                                    });

                                  }
                                }

                            }
                        }
                    });//end foreach
            }, 30000); // Repeat every 60000 milliseconds (1 minute)

        </script>

    @endif

    <script src="/js/slider.js"></script>
    <script src="/js/slider2.js"></script>
    <script src="/js/animate.js"></script>




</body>
</html>
