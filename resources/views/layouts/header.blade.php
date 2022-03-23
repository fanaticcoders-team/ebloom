<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>

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
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-157001280-26"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-157001280-26');
    </script>

  <noscript>
    <img height="1" width="1" 
    src="https://www.facebook.com/tr?id=616958696002563&ev=PageView
    &noscript=1"/>
  </noscript>
  <!-- End Facebook Pixel Code -->

<style>
  .switch-lang {
      width: 145px;
      text-align: left;
      cursor: pointer;
      z-index: 50;
      position: absolute;
      top: 10px;
      right: 220px;
      margin-bottom: 5px;
      display: none;

  }
  .switch-lang:hover .lang-dropdown {
      display: block;
  }
  .switcher-link {
      color: #fff;
  }
  .switcher-link:hover {
      color: #fff;
  }
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
  .show {display: block;}
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

<header class="site-header" style="background-color: white; position: fixed;
      z-index: 10000;">
        <button type="button" data-toggle-target="m-side-menu" class="d-lg-none btn btn-link mobile-sidemenu-btn p-2">
            <span class="fa-stack fa-lg">
              {{-- <i class="fa fa-circle fa-stack-2x fa-inverse"></i> --}}
              <i class="fa fa-bars fa-stack-1x"></i>
            </span>
        </button>

        <button type="button" data-toggle-target="m-side-menu" class="d-none mobile-sidemenu-btn-close btn btn-link p-2">
          <span class="fa-stack fa-lg">
            {{-- <i class="fa fa-circle fa-stack-2x fa-inverse"></i> --}}
            <i class="fa fa-times fa-stack-1x"></i>
          </span>
      </button>

        <div class="container h-100">
            <div class="row align-items-center justify-content-between h-100">
                <div class="col-lg-auto">
                        <a href="{{url(app()->getLocale().'/')}}" class="site-logo header-logo-main text-hide mx-auto ml-lg-0" style="width: 238px;">eBloom

                          <img src="{{asset('frontEnd-assets/images/header-logo.svg')}}" alt="eBloom logo" height="68px" width="220px" style="height: 70px;
                          width: 225px;">
                        </a>
                </div>
              <nav class="d-none d-lg-flex ml-auto col-auto site-header-nav align-items-center">
                {{-- <a class="btn btn-link font-weight-bold px-0 mx-7" href="../../delivery.html" id="areas-trigger" data-event="Header Areas">Delivery areas</a> --}}
                            {{-- user options --}}
                          <div class="switch-lang">
                              @if (app()->getLocale() =="en" )
                                  <div class="current-lang"><img class="lang-flag" src="https://cdn2.iconfinder.com/data/icons/world-flag-icons/128/Flag_of_United_Kingdom.png"/>
                                       <span class="lang-text">English (EN) </span>
                                  </div>
                              @else
                                  <div class="current-lang"><img class="lang-flag" src="https://cdn2.iconfinder.com/data/icons/world-flag-icons/128/Flag_of_Greece.png"/>
                                      <span class="lang-text">Ελληνικά (GR) </span>
                                  </div>
                              @endif
                              <div class="lang-dropdown">
                                  @if (app()->getLocale() =="en" )
                                      <div class="selecting-lang"><img class="lang-flag" src="https://cdn2.iconfinder.com/data/icons/world-flag-icons/128/Flag_of_Greece.png"/>
                                          @if ($slug ?? '' != '' )
                                            <a href=" {{route(Route::currentRouteName(),['language'=> 'gr','slug'=> $slug])}} "> <span class="lang-text">Ελληνικά (GR)</span></a>

                                          @else
                                            <a href=" {{route(Route::currentRouteName(),['language'=> 'gr'])}} "> <span class="lang-text">Ελληνικά (GR)</span></a>

                                          @endif
                                      </div>
                                  @else
                                      <div class="selecting-lang"><img class="lang-flag" src="https://cdn2.iconfinder.com/data/icons/world-flag-icons/128/Flag_of_United_Kingdom.png"/>
                                        @if ($slug ?? '' != '' )

                                          <a href=" {{route(Route::currentRouteName(),['language'=> 'en','slug'=> $slug])}} "> <span class="lang-text">English (EN)</span></a>
                                        @else
                                          <a href=" {{route(Route::currentRouteName(),['language'=> 'en'])}} "> <span class="lang-text">English (EN)</span></a>

                                        @endif

                                      </div>
                                  @endif
                              </div>
                          </div>
              @if (Auth::check())
              <div class="user site-header-user hide-mobile clearfix dropdown" style="top:-5px">
                <a href="#" class="site-header-user-link btn btn-link hover-no-decoration d-flex justify-content-end align-items-center dropdown-toggle px-0 ml-12" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-boundary="viewport">
                    <div class="site-header-user-image">
                        <img class="rounded-circle" src="{{asset('/frontEnd-assets/images/user.png')}}" alt="User Avatar" width="40" height="40">
                    </div>
                    <div class="site-header-user-name text-truncate ml-5" style="color: #A5A5A5">
                        {{-- <strong>{{Auth::user()->name}}</strong> --}}
                        @if (!empty(Auth::user()->name))
                                    {{-- <strong>{{Auth::user()->name}}</strong> --}}
                                  @else
                                  <strong id="currentUserName"></strong>
                                  <input type="hidden" name="userName" id="currentUser" value="{{Auth::user()->email}}">
                                  <script>
                                    var email = document.getElementById('currentUser').value;
                                    var name  = email.substring(0, email.lastIndexOf("@"));
                                    console.log(email);
                                    console.log(name);

                                    var userName = document.getElementById('currentUserName');
                                    var text = document.createTextNode(name);

                                    userName.appendChild(text);
                                  </script>
                                  @endif
                    </div>
                </a>

                <div class="dropdown-menu mt-5 py-0 box-shadow" aria-labelledby="dropdownMenuLink">
                    <div>
                        <div class="user-menu-banners dynamic-component" data-dynamic-component="729f93cf-e311-4673-afbf-185B88717d6d"></div>

                        <ul class="site-header-user-options-list list-unstyled mb-0">
                            <li class="user-options-list-item">
                                <a href="{{url(app()->getLocale().'/user_account')}}" title="My account" class="hover-no-decoration text-muted d-block px-5 py-3">

                                  {{__('words.Ο λογαριασμός μου')}}

                                  {{-- My account                        --}}
                                   </a>
                            </li>

                            <li class="user-options-list-item">
                                <a href="{{url(app()->getLocale().'/user/orders')}}" title="My orders" class="hover-no-decoration text-muted d-block px-5 py-3">

                                  {{__('words.Παραγγελίες')}}

                                  {{-- My orders        --}}
                                                   </a>
                            </li>


                            <li class="user-options-list-item">
                                <a href="{{url(app()->getLocale().'/user/favorite_store')}}" title="Favorite stores" class="hover-no-decoration text-muted d-block px-5 py-3">

                                  {{__('words.Αγαπημένα')}}

                                  {{-- Favorite stores      --}}
                                                     </a>
                            </li>

                            <li class="user-options-list-item site-header-user-options-list-item-logout border-top">
                                <a class="hover-no-decoration text-muted d-block px-5 py-3 eBloom-data-layer logout-btn" data-event="logout.submitted" href="{{url(app()->getLocale().'/user_logout')}}">

                                  {{__('words.Αποσύνδεση')}}
                                  {{-- Log out           --}}
                                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
              </div>
              @else
              <style>
                .btn-outline-white:hover{
                  text-decoration: underline !important;
                  color:#c2a693 !important;
                }
              </style>
              <a href="#popup2"
              class="btn btn-sm btn-outline-white btn-block ml-7 login-button"
              style="color: #333333;font-size: 14px;
              font-weight: 400; font-style: normal;
              margin-top: 4px;
              "
              >
              {{-- <strong> --}}
                {{-- Login/Register --}}

                {{__('words.ΣΥΝΔΕΣΗ/ΕΓΓΡΑΦΗ')}}
                {{-- Σύνδεση/Εγγραφή --}}
              {{-- </strong> --}}
              </a>
              @endif
              {{-- end user options --}}


              </nav>
                        </div>
        </div>

        {{-- --------------login popup------------ --}}
        <div id="popup2" class="overlay">
          <div class="loginpopup" >

              <div class="modal-content" style="border-radius: 0.3rem;">
                <link href="//fonts.googleapis.com/css?family=Roboto&amp;subset=greek&amp;text=SigninwithGoogle" rel="stylesheet" type="text/css">
                <div class="modal-header flex-column bg-white pt-7 pb-0 px-0 border-bottom">
                    <div class="w-100 d-flex" style="height: 40px;">
                        <h2 class="modal-title mx-auto"><strong class="h2">

                          {{__('words.Σύνδεση ebloom')}}
                          {{-- Log in eBloom --}}
                        </strong></h2>
                        <a href="#" type="button" class="modal-close  position-absolute " style="right: 0; top:0px;" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" class="fa fa-times" style="font-size: 18px; color: #984E66"></span>
                        </a>
                    </div>
                    <div class="social-login" style="display: flex;
                        justify-content: center;
                        width: 100%;
                        margin-top: 20px;">
                        <a href="{{url(app()->getLocale().'/redirect')}}" class="btn btn-primary" style="width: 90%; background-color: #3B65AF;border-color: #3B65AF; color: #fff;">

                          {{__('words.Σύνδεση με Facebook')}}

                          {{-- Login with Facebook --}}
                        </a>

                    </div>
                    <ul class="nav nav-tabs border-0 login-register-tablist w-100 d-flex justify-content-center clearfix pt-4" role="tablist">
                        <li role="presentation" class="w-50 text-center"><a href="#login-form" class="d-block py-4 hover-no-decoration h3 form-login-tab active" aria-controls="login" role="tab" data-toggle="tab" aria-selected="true">

                          {{__('words.Σύνδεση')}}

                          {{-- Login --}}
                        </a></li>
                        <li role="presentation" class="w-50 text-center"><a href="#register-form" class="d-block py-4 hover-no-decoration h3 form-registration-tab" aria-controls="register" role="tab" data-toggle="tab" aria-selected="false">

                          {{__('words.Εγγραφή')}}

                          {{-- Sign up --}}
                        </a></li>
                    </ul>
                </div>
                  <div class="modal-body pt-7 bg-white" style="padding-bottom: 4.5rem">
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
                                {{-- placeholder="Your Email" --}}
                                placeholder="{{__('words.Το email σου')}}"

                                autocomplete="email">
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="field-required position-relative">
                                <input type="password" name="user_password" id="pass" class="form-control" data-validation="required" data-validation-error-msg="Enter your password"
                                  placeholder="{{__('words.Ο κωδικός σου')}} "


                                {{-- placeholder="Your password" --}}
                                >

                                      {{-- <button type="button" class="show-hide-password position-absolute mr-2 btn-link border-0"><i class="fas fa-eye text-grey" aria-hidden="true"></i></button> --}}
                              </div>
                            </div>
                            <button type="submit" id="loginBtn" class="btn btn-primary btn-block btn-lg login-form-submit" style="background-color: #984E66;border-color: #984E66; color: white;">

                              {{__('words.Σύνδεση')}}
                              {{-- Login --}}
                            </button>
                          </form>
                          <p class="form-error form-text login-error-message alert alert-danger mt-5"></p>
                          <a href="#forgetpopup"  class="mt-5 btn btn-link btn-block forgot-password-btn"><u>

                          {{__('words.Δεν θυμάμαι τον κωδικό μου')}}
                            {{-- I don't remember my password --}}
                          </u></a>
                          <div class="text-center mt-5">

                            {{__('words.Με την εγγραφή σας αποδέχεστε τους')}}
                            {{-- By signing up you agree to our  --}}
                              <br>
                          <a href="{{url(app()->getLocale().'/pages/terms')}}" target="_blank" style="color: #007bff;">
                                <u>

                                  {{__('words.Όρους χρήσης')}}
                                  {{-- Terms of use --}}
                                </u></a>

                                {{__('words.και')}}
                                {{-- and  --}}
                                <a href="{{url(app()->getLocale().'/pages/terms')}}" target="_blank" style="color: #007bff;"><u>

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
                                    placeholder="{{__('words.Όνομα')}} "

                                    {{-- placeholder="Your name"  --}}

                                    autocomplete="name">
                                </div>
                              </div>

                              <div class="form-group">
                                  <div class="field-required">
                                      <input type="email" name="register_email" id="register_email" class="form-control" data-validation="email" data-validation-error-msg="Enter your email"
                                      placeholder="email"

                                      {{-- placeholder="Your Email" --}}
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

                                      {{-- placeholder="Your password" --}}
                                       aria-describedby="passwordHelpBlock">
                                      {{-- <button type="button" class="show-hide-password position-absolute mr-2 btn-link border-0">
                                        <i class="fas fa-eye text-grey" aria-hidden="true"></i></button> --}}
                                  </div>
                                  <p class="register-error-message alert alert-danger mt-3" style="display: none;"></p>
                                  {{-- <small id="passwordHelpBlock" class="form-text text-muted">Your password must be at least 8 characters long and contain at least one number, one capital letter and one lower case letter.</small> --}}
                              </div>
                              <button type="submit" id="registerBtn" class="btn btn-block btn-primary btn-lg register-form-submit" style="background-color: #984E66;border-color: #984E66; color: white;">

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

              {{-- forget password popup --}}

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
                            // $(".print-error-msg-forget").css('display', 'none');

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
          $(document).ready(function() {
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
                            // window.location.href = "{{ url('/')}}";
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
              var name = $("input[name='register_name']").val();

              console.log("email: "+email );
              console.log("password: "+password );
              console.log("name: "+name );

              $.ajaxSetup({
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  }
              });


              $.ajax({
                  url: "{{ url(app()->getLocale().'/user-register') }}",
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
                          // window.location.href = "{{ url('/')}}";
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

</header>
