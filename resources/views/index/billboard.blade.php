<div class="d-billboard">

    <div class="d-billboard-section">
        <div class="d-billboard-content">
            <div class="d-billboard-car-left">
                <img data-aos="fade-right" src="{{asset('storage/images/home/car_left.png')}}" alt="">
            </div>
            <div class="d-billboard-car-right">
                <img data-aos="fade-left" src="{{asset('storage/images/home/car_right.png')}}" alt="">
            </div>
            <div class="d-billboard-center-content">
                <div class="d-billboard-center-content-top">
                    <div class="d-billboard-center-content-top-60">
                        <img data-aos="slide-left" data-aos-duration="1000" src="{{asset('storage/images/home/logo.png')}}" alt="">
                    </div>
                    <div class="d-billboard-center-content-separator"></div>
                    <div class="d-billboard-center-content-top-40">
                        <h3 data-aos="slide-right" data-aos-duration="1000">ຜູ້ນໍາແຫ່ງໂລກ</br>ກະບະໂຕຈິງ</h3>
                    </div>
                </div>
                <div class="d-billboard-center-content-bottom">
                    <img data-aos="fade-up" data-aos-duration="1000" src="{{asset('storage/images/home/slogan.png')}}" alt="">
                </div>
            </div>
        </div>
    </div>

</div>

<style>
    .d-billboard-section{
        width: 100%;
        background-color: white;
    }
    .d-billboard-content{
        width: 100%;
        height: 60em;
        background-image: url("{{asset('storage/images/home/BANNER-1.jpg')}}");
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
        position: relative;
        overflow: hidden;
    }
    .d-billboard-car-left{
        width: 30%;
        position: absolute;
        z-index: 100;
        bottom: 14%;
        left: 3%;
    }
    .d-billboard-car-right{
        width: 30%;
        position: absolute;
        z-index: 100;
        bottom: 14%;
        right: 3%;
    }
    .d-billboard-center-content{
        width: 35%;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }
    .d-billboard-section img{
        width: 100%;
    }
    .d-billboard-center-content-top{
        width: 100%;
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        align-items: center;
        gap: 5%;
    }
    .d-billboard-center-content-top-60{
        width: 60%;
        overflow: hidden;
    }
    .d-billboard-center-content-separator{
        width: 2px;
        height: 100px;
        background-color: black;
    }
    .d-billboard-center-content-top-40{
        width: 40%;
        overflow: hidden;
    }
    .d-billboard-center-content-bottom{
        width: 80%;
    }
    @media only screen and (max-width: 600px) {
        .d-billboard-content{
            width: 100%;
            height: 300px;
            background-image: url("{{asset('storage/images/home/mobile.jpg')}}");
        }
        .d-billboard-content *{
            display: none;
        }
    }
</style>
