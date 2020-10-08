<div class="d-car-model-section">
    <div class="d-car-model-content-wrapper d-car-model-margin-bottom">
        <!-- start background -->
        <div class="d-car-model-background">
            <div class="lineup__bg-gradient lineup__bg-gradient-1"></div>
            <div class="lineup__bg-gradient lineup__bg-gradient-2"></div>
            <div class="lineup__bg">
                <span style='background-image: url("{{ asset('storage/images/car_models/city background.jpg') }}");'></span>
            </div>
        </div>
        <!-- end background -->
        <!-- start foreground -->
        <div class="d-car-model-foreground-wrapper">
            <!-- start foreground top layout -->
            <div class="d-car-model-foreground-top-layout">
                <div class="d-car-model-logo-frame">
                    <img src="{{ asset('storage/images/products/hi-lander-logo.png') }}" alt="">
                </div>
                <!-- start button -->
                <a data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100" href="https://drive.google.com/file/d/1naPcTx-QyMDNpNnSs9coC1CKVG17fyGV/view?usp=sharing" class="d-car-model-button">
                    <div class="d-car-model-button-label-one">{{__('index_lang.product_download_catalogue')}}</div>
                    <div class="d-car-model-button-label-two">{{__('index_lang.product_download_catalogue')}}</div>
                </a>
            </div>
            <!-- end foreground top layout -->

            <!-- start foreground bottom layout -->
            <div class="d-car-model-foreground-bottom-layout">
                <div class="d-car-model-car-image-frame">
                    <img src="{{ asset('storage/images/car_models/hi-lander-car-card-three.png') }}" alt="">
                </div>
            </div>
            <!-- end foreground bottom layout -->
        </div>
        <!-- end foreground -->
    </div>
    <!-- start mobile button -->
    <div class="d-car-model-mobile-container">
        <a href="https://drive.google.com/file/d/1naPcTx-QyMDNpNnSs9coC1CKVG17fyGV/view?usp=sharing">{{__('index_lang.product_download_catalogue')}} <i class="fas fa-chevron-right"></i></a>
    </div>
    <!-- start mobile button -->
</div>
