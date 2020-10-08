<div class="d-banner-image">

    <div class="d-banner-image-section">
        <img class="d-banner-image-desktop" src="{{asset('storage/images/home/BANNER-2.jpg')}}" alt="">
        <img class="d-banner-image-mobile" src="{{asset('storage/images/home/mobile.jpg')}}" alt="">
    </div>

</div>

<style>
    .d-banner-image-section{
        width: 100%;
    }
    .d-banner-image-section img{
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
    .d-banner-image-section .d-banner-image-mobile{
        display: none;
    }
    @media only screen and (max-width: 600px) {
        .d-banner-image-section .d-banner-image-desktop{
            display: none;
        }
        .d-banner-image-section .d-banner-image-mobile{
            display: block;
        }
    }
</style>
