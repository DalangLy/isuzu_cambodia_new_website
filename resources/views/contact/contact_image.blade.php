<div class="d-contact-image">

    <div class="d-contact-image-section">
        <img class="d-contact-image-desktop" src="{{asset('storage/images/contact/Car-with-map.jpg')}}" alt="">
        <img class="d-contact-image-mobile" src="{{asset('storage/images/contact/Car-with-map.jpg')}}" alt="">
    </div>

</div>

<style>
    .d-contact-image-section{
        width: 100%;
        height: 80vh;
    }
    .d-contact-image-section .d-contact-image-desktop{
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
    .d-contact-image-mobile{
        display: none;
    }
    @media only screen and (max-width: 600px) {
        .d-contact-image-section{
            width: 100%;
            height: 300px;
            overflow: hidden;
        }
        .d-contact-image-section .d-contact-image-desktop{
            display: none;
        }
        .d-contact-image-mobile{
            display: block;
        }
        .d-contact-image-mobile{
            /*height: 100%;*/
            /*width: 100%;*/
            height: 100%;
            transform: translateX(-40%);
        }
    }
</style>
