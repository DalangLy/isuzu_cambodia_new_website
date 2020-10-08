<div id="d-car-between-one">

    <div class="d-car-between-section-one">
        <div class="d-car-between-content-one">
            <div class="d-car-between-item-one index-car-between-item-order-bottom-one">
                <div class="d-car-between-item-image-frame-one">
                    <div class="d-index-car-between-group-one">
                        <img data-aos="fade-left" data-aos-duration="1000" data-aos-delay="300" data-aos-offset="300" src="{{ asset('storage/images/home/car_sand/sand-car.png') }}" alt="">
                    </div>
                    <img data-aos="fade" data-aos-duration="1000" class="d-car-between-image-one" src="{{ asset('storage/images/home/car_sand/sand-background.jpg') }}" alt="">
                    <img data-aos="fade" data-aos-duration="1000" data-aos-offset="-300" class="d-car-between-image-option" src="{{ asset('storage/images/home/car_sand/sand.png') }}" alt="">
                </div>
            </div>
            <div class="d-car-between-item-one index-car-between-item-order-top-one">
                <div class="d-car-between-item-text-frame-one">
                    <div class="d-car-between-title-one">
{{--                        <img class="d-car-between-title-svg-one {{app()->getLocale()=='en'?'d-hide':''}}" data-aos="fade-up" data-aos-duration="1000" src="{{asset('storage/images/home/text/spark.svg')}}" alt="">--}}
{{--                        <img class="d-car-between-title-one {{app()->getLocale()=='kh'?'d-hide':''}}" data-aos="fade-up" data-aos-duration="1000" src="{{asset('storage/images/home/text/ALL-NEW ISUZU V-CROSS 4X4-01.svg')}}" alt="">--}}
                        <h2 class="d-car-between-desktop-title-text-one" data-aos="fade-up" data-aos-duration="1000">{!! Lang::choice('index_lang.all_new_isuzu_dmax_spark', 1) !!}</h2>
                        <h2 class="d-car-between-mobile-title-text-one" data-aos="fade-up" data-aos-duration="1000">{!! Lang::choice('index_lang.all_new_isuzu_dmax_spark', 2) !!}</h2>
                    </div>
{{--                    <div class="d-car-between-desc">--}}
{{--                        <p data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">Description</p>--}}
{{--                    </div>--}}
                </div>
            </div>
        </div>
    </div>

</div>

<style>
    .d-car-between-section-one{
        width: 70%;
        margin: 90px auto;
    }
    .d-car-between-content-one{
        width: 100%;
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
    }
    .d-car-between-item-one{
        width: 50%;
        /*height: 300px;*/
    }
    .d-car-between-item-image-frame-one{
        width: 100%;
        height: 100%;
        position: relative;
        overflow: hidden;
    }
    .d-car-between-image-one{
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
    .d-car-between-item-text-frame-one{
        width: 100%;
        height: 100%;
        padding: 0 20px;
    }
    .d-car-between-title-one{
    }
    .d-car-between-title-one h2{
        font-size: 25px;
    }
    .d-car-between-mobile-title-text-one{
        display: none;
    }
    .d-car-between-title-svg-one{
        width: 100%;
    }
    .d-hide{
        display: none;
    }
    .d-car-between-desc-one{
        margin-top: 25px;
    }
    .d-car-between-desc-one p{
        font-size: 20px;
    }
    .d-index-car-between-group-one{
        width: 80%;
        position: absolute;
        right: 0;
        bottom: 4%;
        z-index: 100;
    }
    .d-index-car-between-group-one img{
        width: 100%;
        height: 100%;
        object-fit: contain;
    }
    .d-car-between-image-option{
        width: 100%;
        position: absolute;
        z-index: 100;
        left: 0;
        bottom: 1%;
    }
    .index-car-between-item-order-top-one{
        order: 1;
    }
    .index-car-between-item-order-bottom-one{
        order: 2;
    }

    /*mobile*/
    @media only screen and (max-width: 600px) {
        .d-car-between-section-one{
            width: 100%;
            margin: 25px auto;
        }
        .d-car-between-content-one{
            flex-direction: column;
        }
        .d-car-between-item-one{
            width: 100%;
        }
        .d-car-between-item-text-frame-one{
            padding: 0 20px;
        }
        .d-car-between-title-one h2{
            font-size: 24px;
            text-align: center;
        }
        .d-car-between-desktop-title-text-one{
            display: none;
        }
        .d-car-between-mobile-title-text-one{
            display: block;
        }
        .d-car-between-title-one{
        }
        d-car-between-title-svg-one{
            width: 100%;
        }
        .d-car-between-desc-one{
            margin: 25px 0;
        }
        .d-car-between-desc-one p{
            font-size: 12px;
            text-align: center;
        }
        .d-index-car-between-group-one{
            bottom: -7%;
            height: 100%;
        }
        .index-car-between-item-order-top-one{
            order: 1;
        }
        .index-car-between-item-order-bottom-one{
            order: 2;
        }
    }
</style>
