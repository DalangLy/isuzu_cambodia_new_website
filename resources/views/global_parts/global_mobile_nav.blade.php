<div id="d-mobile-nav">

    <div class="d-mobile-nav-section">
        <div class="d-mobile-nav-content">

            <div class="d-mobile-nav-logo">
                <img src="{{asset('storage/images/global/mobile_logo.svg')}}" alt="">
            </div>

            <button data-pushbar-target="mypushbar1" class="hamburger" type="button">
                    <span class="hamburger-box">
                      <span class="hamburger-inner"></span>
                    </span>
            </button>


        </div>
    </div>

</div>


<div data-pushbar-id="mypushbar1" data-pushbar-direction="right">
    <div class="d-nav-content">
        <button data-pushbar-close class="hamburger" type="button">
                <span class="hamburger-box">
                  <span class="hamburger-inner"></span>
                </span>
        </button>

        <div class="d-nav-menu-wrapper">
            <a class="d-nav-menu-item {{ Route::currentRouteName() == 'home' ? 'd-nav-menu-item-active' : '' }}" href="{{route('home', app()->getLocale())}}">{{__('index_lang.nav_all_new_isuzu_dmax')}}</a>
            <a class="d-nav-menu-item {{ Route::currentRouteName() == 'product' ? 'd-nav-menu-item-active' : '' }}" href="{{route('product', app()->getLocale())}}">{{__('index_lang.nav_products')}}</a>
            <a class="d-nav-menu-item {{ Route::currentRouteName() == 'dealer' ? 'd-nav-menu-item-active' : '' }}" href="{{route('dealer', app()->getLocale())}}">{{__('index_lang.nav_dealers')}}</a>
            <a class="d-nav-menu-item {{ Route::currentRouteName() == 'contact' ? 'd-nav-menu-item-active' : '' }}" href="{{route('contact', app()->getLocale())}}">{{__('index_lang.nav_contact_us')}}</a>
            <a class="d-nav-menu-item {{ Route::currentRouteName() == 'test_drive' ? 'd-nav-menu-item-active' : '' }}" href="{{route('test_drive', app()->getLocale())}}">{{__('index_lang.nav_test_drive')}}</a>

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
<script src="https://cdn.jsdelivr.net/npm/pushbar.js@1.0.0/src/pushbar.min.js"></script>
<script>
    document.addEventListener(
        "DOMContentLoaded", () => {

            new Pushbar({
                blur: true,
                overlay: true,
            });

        }
    );
</script>
