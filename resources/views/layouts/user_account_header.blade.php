<section>
    <div class="position-relative" style="z-index: 1;">
        <div class="header-hero">
            <img src="/site-assets/img/header/EF-user-account.jpg" class="header-image position-absolute w-100 h-100 ls-is-cached lazyloaded" alt="header image">

            <div class="container h-100 position-relative" style="z-index: 1;">
                <div class="h-100 d-flex flex-column justify-content-center">
                    <h1 class="text-white pt-2 mt-12 mb-0">
                        
                        {{__('words.Ο λογαριασμός μου')}}
                        {{-- My account --}}
                    </h1>
                    <div class="user-account-navigation">
  <ul class="nav nav-pills flex-nowrap py-7">
    <li class="nav-item">
      <a class="nav-link text-white  active" href="{{url(app()->getLocale().'/user_account')}}">
        
        {{__('words.Προφίλ')}}
        {{-- Profile --}}
    </a>
    </li>
    {{-- <li class="nav-item">
      <a class="nav-link text-white " href="/account/privacy"><span>Personal data</span></a>
    </li> --}}
    <li class="nav-item">
      <a class="nav-link text-white " href="{{url(app()->getLocale().'/user/orders')}}">
        
        {{__('words.Παραγγελίες')}}

        {{-- Orders --}}
    </a>
    </li>
    {{-- <li class="nav-item">
      <a class="nav-link text-white " href="/account/payment">Online payments</a>
    </li> --}}
    {{-- <li class="nav-item">
      <a class="nav-link text-white " href="/account/addresses">Addresses</a>
    </li> --}}
    <li class="nav-item">
      <a class="nav-link text-white " href="{{url(app()->getLocale().'/user/favorite_store')}}">
        
        {{__('words.Αγαπημένα')}}

        {{-- Favorite stores --}}
    </a>
    </li>
    {{-- <li class="nav-item">
      <a class="nav-link text-white " href="/account/reviews">Reviews</a>
    </li> --}}
  </ul>
    </div>
                </div>
            </div>
        </div>
    </div>
</section>