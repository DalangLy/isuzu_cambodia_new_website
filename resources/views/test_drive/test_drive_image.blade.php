<div class="d-dealer-image">

    <div class="d-dealer-image-section">
        <div class="d-dealer-image-row">
            <div class="d-dealer-column">
                <img class="d-dealer-img" src="{{ asset('storage/images/test_drive/sample-banner-1.jpg') }}" alt="">
            </div>
        </div>
    </div>

</div>

<style>
    .d-dealer-image-section{
        width: 100%;
    }
    .d-dealer-image-row{
        width: 100%;
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
    }
    .d-dealer-column{
        flex: 1;
        overflow: hidden;
        background-color: #ffffff;
        /*height: 500px;*/
        display: flex;
        justify-content: flex-start;
        align-items: center;
    }
    .d-dealer-img{
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
    @media only screen and (max-width: 600px) {
        .d-dealer-column{
            flex: 1;
            overflow: hidden;
            background-color: #ffffff;
            display: flex;
            justify-content: flex-start;
            align-items: center;
        }
    }
</style>
