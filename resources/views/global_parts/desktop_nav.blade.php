<div id="d-desktop-nav">

    <div id="d-desktop_nav-container" class="d-desktop-nav-container">
        <div id="d-desktop-nav-overlay" class="d-desktop-nav-overlay d-desktop-nav-overlay-hide"></div>
        <div class="d-desktop-nav-item-container">

            <a href="{{route('home', app()->getLocale())}}" class="d-desktop-nav-logo">
                <img src="{{ asset('storage/download.svg') }}" alt="">
            </a>

            <div class="d-desktop-nav-row">
                <div class="d-desktop-nav-item {{ Route::currentRouteName() == 'home' ? 'd-desktop-nav-active' : '' }}"><a href="{{route('home', app()->getLocale())}}">{{__('index_lang.nav_all_new_isuzu_dmax')}}</a></div>
                <div class="d-desktop-nav-item-separator"></div>
                <div class="d-desktop-nav-item {{ Route::currentRouteName() == 'product' ? 'd-desktop-nav-active' : '' }}"><a href="{{route('product', app()->getLocale())}}">{{__('index_lang.nav_products')}}</a></div>
                <div class="d-desktop-nav-item-separator"></div>
                <div class="d-desktop-nav-item {{ Route::currentRouteName() == 'dealer' ? 'd-desktop-nav-active' : '' }}"><a href="{{route('dealer', app()->getLocale())}}">{{__('index_lang.nav_dealers')}}</a></div>
                <div class="d-desktop-nav-item-separator"></div>
                <div class="d-desktop-nav-item {{ Route::currentRouteName() == 'contact' ? 'd-desktop-nav-active' : '' }}"><a href="{{route('contact', app()->getLocale())}}">{{__('index_lang.nav_contact_us')}}</a></div>
                <div class="d-desktop-nav-item-separator"></div>
                <div class="d-desktop-nav-item {{ Route::currentRouteName() == 'test_drive' ? 'd-desktop-nav-active' : '' }}"><a href="{{route('test_drive', app()->getLocale())}}">{{__('index_lang.nav_test_drive')}}</a></div>

                <div class="lang-switcher">
                    <p class="lang-switcher-header">Languages</p>
                    <div class="lang-switcher-content">
                        <a class="order-second" href="{{route(Route::currentRouteName(), 'en')}}"><img src="https://upload.wikimedia.org/wikipedia/commons/2/2c/Flag_of_the_United_Kingdom_%282-3%29.svg" alt=""></a>
                        <a class="order-first" href="{{route(Route::currentRouteName(), 'kh')}}"><img src="https://upload.wikimedia.org/wikipedia/commons/8/83/Flag_of_Cambodia.svg" alt=""></a>
                    </div>
                </div>
            </div>

        </div>
    </div>

</div>
