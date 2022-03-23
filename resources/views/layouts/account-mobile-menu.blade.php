<div data-toggle-control="m-side-menu" id="mobile-side-menu" style="top: 115px;">
    @if (Auth::check())
    <a href="{{url('/user_account')}}" class=" btn hover-no-decoration d-flex align-items-center  px-0 ml-12"
      role="button" data-boundary="viewport">
      <div class="site-header-user-image">
        <img class="rounded-circle" src="{{asset('/frontEnd-assets/images/user.png')}}" alt="User Avatar" width="40"
          height="40">
      </div>
      <div class="site-header-user-name text-truncate ml-5">
        {{-- <strong>{{Auth::user()->name}}</strong> --}}
        @if (!empty(Auth::user()->name))
        <strong>{{Auth::user()->name}}</strong>
        @else
        <strong id="currentUserName"></strong>
        <input type="hidden" name="userName" id="currentUser" value="{{Auth::user()->email}}">
        <script>
          var email = document.getElementById('currentUser').value;
          var name = email.substring(0, email.lastIndexOf("@"));
          console.log(email);
          console.log(name);

          var userName = document.getElementById('currentUserName');
          var text = document.createTextNode(name);

          userName.appendChild(text);
        </script>
        @endif
      </div>
    </a>
    @else
    <div class="mobile-sidemenu-login-btn-wrapper px-11 py-5 border-bottom">
      <a href="#popup2" class="btn btn-block btn-outline-grey mobile-sidemenu-login-btn hover-no-decoration"
        title="Login/Sign Up">
        Login/Sign Up
      </a>
    </div>
    @endif
    
    <ul class="mobile-sidemenu-list list-unstyled mb-0">
      
      <li class="mobile-sidemenu-list-item">
        {{-- <a class="d-block" href="{{url('/')}}" title="Home">Home1</a> --}}
        <div class="switch-lang dropbtn" onclick="myFunction()"  style="position: relative; ;top: 0px; right: 0px; left: 10px;"> 
          @if (app()->getLocale() =="en" )
              <div class="current-lang"><img class="lang-flag" src="https://cdn2.iconfinder.com/data/icons/world-flag-icons/128/Flag_of_United_Kingdom.png"/>
                   <span class="lang-text">English (EN) </span>
              </div>
          @else
              <div class="current-lang"><img class="lang-flag" src="https://cdn2.iconfinder.com/data/icons/world-flag-icons/128/Flag_of_Greece.png"/>
                  <span class="lang-text">Ελληνικά (GR) </span>
              </div>
          @endif
          <div class="lang-dropdown" id="lang-dropdown">
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
      </li>
    </ul>

    <ul class="mobile-sidemenu-list mobile-sidemenu-list--secondary list-unstyled" 
    style="top: 25px; position: relative;">
      {{-- <li class="mobile-sidemenu-list-item mobile-sidemenu-list--secondary-item">
        <a class="d-block" href="{{url('/')}}" title="Home">Home</a>
        
      </li> --}}
      @if (Auth::check())
        <li class="mobile-sidemenu-list-item mobile-sidemenu-list--secondary-item">
            <a class="d-flex justify-content-between collapsed" data-toggle="collapse"
            data-parent="#mobile-sidemenu-list-accordion" href="#mobile-sidemenu-list-three" aria-expanded="false"
            aria-controls="mobile-sidemenu-list-three">
            {{__('words.Ο λογαριασμός μου')}}
            
            {{-- Account  --}}
            <i class="fa fa-caret-down pull-right" aria-hidden="true"></i>
            </a>
            <ul id="mobile-sidemenu-list-three" class="list-unstyled mobile-sidemenu-list collapse" style="">
              <li class="mobile-sidemenu-list-item translate-button" data-lang="en_US" data-event="translate">
                <a class="d-block" href="{{url(app()->getLocale().'/user_account')}}">
                  {{__('words.Ο λογαριασμός μου')}}

                
                  {{-- My Accout --}}
                </a>
            </li>  
              <li class="mobile-sidemenu-list-item translate-button" data-lang="el_GR" data-event="translate">
                    <a class="d-block" href="{{url(app()->getLocale().'/user/favorite_store')}}">
                      {{__('words.Αγαπημένα')}}
                    
                      {{-- Favorites Stores --}}
                    </a>
                    
                </li>
                <li class="mobile-sidemenu-list-item translate-button" data-lang="en_US" data-event="translate">
                    <a class="d-block" href="{{url(app()->getLocale().'/user/orders')}}">
                      {{__('words.Παραγγελίες')}}
                    
                      {{-- Orders --}}
                    </a>
                </li>
                {{-- <li class="mobile-sidemenu-list-item translate-button" data-lang="en_US" data-event="translate">
                    <a class="d-block" href="{{url('/user/orders')}}">Orders</a>
                </li> --}}
                <li class="mobile-sidemenu-list-item translate-button" data-lang="en_US" data-event="translate">
                    <a class="d-block" href="{{url(app()->getLocale().'/user_logout')}}">
                      {{__('words.Αποσύνδεση')}}
                    
                      {{-- Logout --}}
                    </a>
                
                </li>
            </ul>
        </li>
      
      @endif
      <li class="mobile-sidemenu-list-item mobile-sidemenu-list--secondary-item">
        <a class="d-block" href="{{url(app()->getLocale().'/pages/about')}}">{{__('words.Ποιοι είμαστε')}} </a>
      </li>
      <li class="mobile-sidemenu-list-item mobile-sidemenu-list--secondary-item">
        <a class="d-block" href="{{url(app()->getLocale().'/pages/blog')}}">Blog </a>
      </li>
      <li class="mobile-sidemenu-list-item mobile-sidemenu-list--secondary-item">
        <a class="d-block" href="{{url(app()->getLocale().'/pages/contact')}}">{{__('words.Επικοινωνία')}}  </a>
      </li>
      <li class="mobile-sidemenu-list-item mobile-sidemenu-list--secondary-item">
        <a class="d-block" href="{{url(app()->getLocale().'/pages/shop')}}">{{__('words.Έχεις ανθοπωλείο;')}}  </a>
      </li>
      <li class="mobile-sidemenu-list-item mobile-sidemenu-list--secondary-item">
        <a class="d-block" href="{{url(app()->getLocale().'/pages/faqs')}}">{{__('words.Συχνες Ερωτησεις')}}   </a>
      </li>
      <li class="mobile-sidemenu-list-item mobile-sidemenu-list--secondary-item">
        <a class="d-block" target="_blank" href="https://globaltouch.international/el/home/">Meet Our Developers   </a>
      </li>
      <li class="mobile-sidemenu-list-item mobile-sidemenu-list--secondary-item">
        <a class="d-block" href="{{url(app()->getLocale().'/pages/about')}}">{{__('words.Τρόποι πληρωμής')}}   </a>
      </li>
      <li class="mobile-sidemenu-list-item mobile-sidemenu-list--secondary-item">
        <a class="d-block" href="{{url(app()->getLocale().'/pages/terms')}}">{{__('words.Όροι χρήσης')}}   </a>
      </li>
      <li class="mobile-sidemenu-list-item mobile-sidemenu-list--secondary-item">
        <a class="d-block" href="{{url(app()->getLocale().'/pages/policy')}}">{{__('words.Πολιτική προστασίας')}}   </a>
      </li>
      <li class="mobile-sidemenu-list-item mobile-sidemenu-list--secondary-item">
        <a class="d-block" href="{{url(app()->getLocale().'/pages/policy')}}">{{__('words.Πολιτική cookies')}}   </a>
      </li>
      <li class="mobile-sidemenu-list-item mobile-sidemenu-list--secondary-item">
        <a class="d-block" href="{{url(app()->getLocale().'/pages/policy')}}">{{__('words.Πολιτική αξιολόγησης')}}   </a>
      </li>
      <li class="mobile-sidemenu-list-item mobile-sidemenu-list--secondary-item">
        <a class="d-block" href="{{url(app()->getLocale().'/pages/reward')}}">{{__('words.Σύστημα επιβράβευσης')}}    </a>
      </li>
    </ul>
  </div>

  {{-- lang dropdown script --}}

  <script>
    /* When the user clicks on the button, 
    toggle between hiding and showing the dropdown content */
    function myFunction() {
      document.getElementById("lang-dropdown").classList.toggle("show");
    }
    
    // Close the dropdown if the user clicks outside of it
    window.onclick = function(event) {
      if (!event.target.matches('.dropbtn')) {
        var dropdowns = document.getElementsByClassName("dropdown-content");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
          var openDropdown = dropdowns[i];
          if (openDropdown.classList.contains('show')) {
            openDropdown.classList.remove('show');
          }
        }
      }
    }
  </script>

  
<script>
  $(document).ready(function () {
    $('.mobile-sidemenu-btn').click(function (e) {
      e.preventDefault();
      // alert('check');
      console.log('add menu');
      $(".mobile-sidemenu-btn").addClass("d-none");
      $(".mobile-sidemenu-btn-close").removeClass("d-none");


    //   $("#mobile-side-menu").addClass("active");
      $("#mobile-side-menu").removeClass("active");

    });
    
    $('.mobile-sidemenu-btn-close').click(function (e) {
      e.preventDefault();
      // alert('check');
      console.log('remove menu');

      $(".mobile-sidemenu-btn").removeClass("d-none");
      $(".mobile-sidemenu-btn-close").addClass("d-none");

    //   $("#mobile-side-menu").removeClass("active");
      $("#mobile-side-menu").addClass("active");

    });
  });
</script>