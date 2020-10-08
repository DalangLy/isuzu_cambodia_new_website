<!--success-->
<div id="d-interest">

    <div class="d-interest-background">
        <div class="d-interest-section">
            <div class="d-interest-content">

                <a href="{{route('test_drive', app()->getLocale())}}" class="d-interest-item">
                    <div class="d-interest-image">
                        <img src="{{ asset('storage/images/global/wheel-icon.svg') }}" alt="">
                    </div>
                    <h5 class="d-interest-label">{{__('index_lang.all_new_isuzu_dmax_test_drive')}}</h5>
                    <!-- shadow -->
                    <img class="d-interest-shadow d-interest-shadow-left" src="{{ asset('storage/images/global/shadow left.png') }}" alt="">
                </a>
                <a href="{{route('dealer', app()->getLocale())}}" class="d-interest-item">
                    <div class="d-interest-image">
                        <img src="{{ asset('storage/images/global/map-icon.svg') }}" alt="">
                    </div>
                    <h5 class="d-interest-label">{{__('index_lang.all_new_isuzu_dmax_dealers')}}</h5>
                    <!-- shadow -->
                </a>
                <a href="https://drive.google.com/file/d/1naPcTx-QyMDNpNnSs9coC1CKVG17fyGV/view?usp=sharing" class="d-interest-item">
                    <div class="d-interest-image">
                        <img src="{{ asset('storage/images/global/doc-icon.svg') }}" alt="">
                    </div>
                    <h5 class="d-interest-label">{{__('index_lang.all_new_isuzu_dmax_download_catalogue')}}</h5>
                    <!-- shadow -->
                    <img class="d-interest-shadow d-interest-shadow-right" src="{{ asset('storage/images/global/shadow right.png') }}" alt="">
                </a>

            </div>
        </div>
    </div>

</div>
