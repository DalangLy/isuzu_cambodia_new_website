<div class="d-dealer">

    <div class="d-dealer-section">
        <div class="d-dealer-content">
            <div class="d-dealer-outer-column">
                <h2 class="d-dealer-title">{!! trans('index_lang.dealer_ils_header') !!}</h2>
                <div class="d-dealer-inner-row">
                    <div class="d-dealer-inner-column">
                        <div class="d-dealer-text-container">
                            <p class="d-dealer-description">{!! trans('index_lang.dealer_ils_address_one') !!}</p>
                            <p class="d-dealer-tel">{!! trans('index_lang.dealer_tel') !!} : <a href="tel:+856 21 613 141">021 613 141</a></p>
                            <p class="d-dealer-tel">{!! trans('index_lang.dealer_fax') !!} : <a href="tel:+856 21 613 144">021 613 144</a></p>
                        </div>
                        <a class="d-dealer-map-button" href="https://www.google.com/maps/place/Isuzu+Lao+Services/@17.997784,102.5434863,17z/data=!4m5!3m4!1s0x312469ec15f18417:0xcf8961d71c3252d5!8m2!3d17.997784!4d102.545675?shorturl=1">{{__('index_lang.dealer_map')}}</a>
                    </div>
                    <div class="d-dealer-inner-column">
                        <div class="d-dealer-text-container">
                            <p class="d-dealer-description d-shrink">{!! trans('index_lang.dealer_ils_address_two') !!}</p>
                            <p class="d-dealer-tel">{!! trans('index_lang.dealer_tel') !!} : <a href="tel:+856 21 613 141">021 613 141</a></p>
                            <p class="d-dealer-tel">{!! trans('index_lang.dealer_fax') !!} : <a href="tel:+856 21 613 144">021 613 144</a></p>
                        </div>
                        <a class="d-dealer-map-button" href="https://www.google.com/maps/place/Pakse,+Laos/@15.1174633,105.8157302,17z/data=!3m1!4b1!4m5!3m4!1s0x3114f8d20d82b3b1:0x69284c4943b886a8!8m2!3d15.1174558!4d105.8178866?shorturl=1">{{__('index_lang.dealer_map')}}</a>
                    </div>
                </div>
            </div>
            <div class="d-dealer-outer-column">
                <h2 class="d-dealer-title">{!! trans('index_lang.dealer_vsa_header') !!}</h2>
                <div class="d-dealer-inner-row">
                    <div class="d-dealer-inner-column">
                        <div class="d-dealer-text-container">
                            <p class="d-dealer-description">{!! trans('index_lang.dealer_vsa_address_one') !!}</p>
                            <p class="d-dealer-tel">{!! trans('index_lang.dealer_tel') !!} : <a href="fax:+856 1402">1402</a></p>
                            <p class="d-dealer-tel">{!! trans('index_lang.dealer_fax') !!} : <a href="tel:+856 21 213 707">021 213 707</a></p>
                        </div>
                        <a class="d-dealer-map-button" href="https://www.google.com/maps/place/ISUZU+LAO+VSA/@17.9733282,102.5910431,17z/data=!3m1!4b1!4m5!3m4!1s0x3124685c08c7e455:0x2b03e88edfde2012!8m2!3d17.9733282!4d102.5932318?shorturl=1">{{__('index_lang.dealer_map')}}</a>
                    </div>
                    <div class="d-dealer-inner-column">
                        <div class="d-dealer-text-container">
                            <p class="d-dealer-description d-shrink">{!! trans('index_lang.dealer_vsa_address_two') !!}</p>
                            <p class="d-dealer-tel" style="visibility: hidden">{!! trans('index_lang.dealer_tel') !!} : <a href=""></a></p>
                            <p class="d-dealer-tel">{!! trans('index_lang.dealer_tel') !!} : <a href="tel:+856 31 212 667">(031) 212 667</a></p>
                        </div>
                        <a class="d-dealer-map-button" href="https://www.google.com/maps/place/%E0%BA%AD%E0%BA%B5%E0%BA%8A%E0%BA%B9%E0%BA%8A%E0%BA%B8+%E0%BA%A7%E0%BA%B5%E0%BB%80%E0%BA%AD%E0%BA%B1%E0%BA%AA%E0%BB%80%E0%BA%AD+(%E0%BA%AA%E0%BA%B2%E0%BA%82%E0%BA%B2%E0%BA%88%E0%BA%B3%E0%BA%9B%E0%BA%B2%E0%BA%AA%E0%BA%B1%E0%BA%81)/@15.1179003,105.8286922,17.54z/data=!4m5!3m4!1s0x3114f92a77a70311:0x28c3c5e6acaa1b64!8m2!3d15.1173397!4d105.8292027?shorturl=1">{{__('index_lang.dealer_map')}}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>


<style>
    .d-dealer-section{
        width: 100%;
        background-color: #E5E5EA;
    }
    .d-dealer-content{
        width: 70%;
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
        gap: 20px;
        margin: 0 auto;
        padding: 90px 40px;
    }
    .d-dealer-outer-column{
        flex: 100%;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: start;
        gap: 10px;
    }
    .d-dealer-title{
        width: 100%;
        height: 60px;
    }
    .d-dealer-inner-row{
        width: 100%;
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
        gap: 10px;
    }
    .d-dealer-inner-column{
        width: 100%;
        padding: 10px;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        align-items: start;
        gap: 10px;
    }
    .d-dealer-description{
        width: 100%;
        height: 100px;
        margin-bottom: 20px;
    }
    .d-dealer-tel{
        width: 100%;
        font-weight: bold;
    }
    .d-dealer-tel a{
        width: 100%;
        color: black;
        font-weight: normal;
    }
    .d-dealer-map-button{
        width: 100%;
        border-radius: 5px;
        background-color: #CE2C2D;
        color: white;
        padding: 10px;
        text-align: center;
    }
    @media only screen and (max-width: 600px) {
        .d-dealer-title{
            height: 70px;
        }
        .d-dealer-tel{

        }
        .d-dealer-description{
            width: 100%;
            height: 80px;
        }
        .d-dealer-content{
            width: 100%;
            flex-direction: column;
            padding: 10px;
            gap: 20px
        }
        .d-dealer-outer-column{
            width: 100%;
            gap: 0;
        }
        .d-dealer-inner-row{
            width: 100%;
            flex-direction: column;
            gap: 0;
        }
        .d-dealer-inner-column{
            gap: 10px;
        }
        .d-shrink{
            height: 45px !important;
        }
    }
</style>
