<div class="d-contact-form">

    <div class="d-contact-form-section">

        <div class="d-contact-form-row">
            <div class="d-contact-form-column">
                <img src="{{ asset('storage/images/contact/isuzu-logo.png') }}" alt="">
                <div class="d-contact-form-text-container">
                    <p class="d-contact-form-desc">{!! trans('index_lang.contact_address') !!}</p>
                    <p class="d-contact-form-tel">{{__('index_lang.contact_tel')}} : <a href="tel:+856 21 417 387">021 417 387</a></p>
                    <p class="d-contact-form-tel">{{__('index_lang.contact_fax')}} : <a href="tel:+856 21 417 387">021 417 387</a></p>
                </div>
                <div class="d-contact-form-social-container">
                    <a class="d-contact-form-social-button" href="https://www.facebook.com/isuzulaosofficial"><i class="fab fa-facebook"></i></a>
                    <a class="d-contact-form-social-button" href="https://www.youtube.com/channel/UC8FYWXlZcbUaGSDkxaEOz8A"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
            <div class="d-contact-form-column">
                <h4 class="d-contact-form-header">{!! trans('index_lang.contact_input_header') !!}</h4>


                <form method="POST" action="{{route('send-email', app()->getLocale())}}" class="needs-validation w-100" novalidate>
                    @csrf
                    <div class="form-group">
                        <label for="txtName" class="text-white">{!! trans('index_lang.contact_input_name') !!}</label>
                        <input type="text" class="form-control custom-control text-white" name="name" id="txtName" aria-describedby="nameHelp" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                        <div class="invalid-feedback">
                            This Field Is Required!
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="txtEmail" class="text-white">{!! trans('index_lang.contact_input_email') !!}</label>
                        <input type="email" class="form-control custom-control text-white" name="email" id="txtEmail" aria-describedby="emailHelp" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                        <div class="invalid-feedback">
                            This Field Is Required!
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="txtSubject" class="text-white">{!! trans('index_lang.contact_input_subject') !!}</label>
                        <input type="text" class="form-control custom-control text-white" name="subject" id="txtSubject" aria-describedby="subjectHelp" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                        <div class="invalid-feedback">
                            This Field Is Required!
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="txtMessage" class="text-white">{!! trans('index_lang.contact_input_message') !!}</label>
                        <textarea class="form-control custom-control text-white" name="message" id="txtMessage" rows="3" required></textarea>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                        <div class="invalid-feedback">
                            This Field Is Required!
                        </div>
                    </div>
                    <div class="form-group">
                        <button id="btn-submit" class="contact-btn btn btn-primary w-100" type="submit">{!! trans('index_lang.contact_input_submit') !!}</button>
                        <button id="btn-loading" class="contact-btn btn btn-primary w-100 d-none" type="button" disabled>
                            <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                            Sending...
                        </button>
                    </div>

                </form>

                @include('sweetalert::alert')

                <script>
                    // Example starter JavaScript for disabling form submissions if there are invalid fields
                    (function() {
                        'use strict';
                        window.addEventListener('load', function() {
                            // Fetch all the forms we want to apply custom Bootstrap validation styles to
                            var forms = document.getElementsByClassName('needs-validation');
                            // Loop over them and prevent submission
                            var validation = Array.prototype.filter.call(forms, function(form) {
                                form.addEventListener('submit', function(event) {
                                    if (form.checkValidity() === false) {
                                        event.preventDefault();
                                        event.stopPropagation();
                                    }
                                    else{
                                        //show loading button
                                        document.getElementById('btn-submit').classList.add('d-none');
                                        document.getElementById('btn-loading').classList.remove('d-none');
                                    }
                                    form.classList.add('was-validated');
                                }, false);
                            });
                        }, false);
                    })();
                </script>

                <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>

            </div>
        </div>
    </div>

</div>


<style>
    .d-contact-form-section{
        width: 100%;
        background-color: #2E2E2E;
    }
    .d-contact-form-row{
        width: 60%;
        margin: 0 auto;
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: start;
        gap: 30%;
        padding: 80px 0;
    }
    .d-contact-form-column{
        width: 100%;
        flex: 1;
        display: flex;
        flex-direction: column;
        justify-content: flex-start;
        align-items: start;
        gap: 20px;
    }
    .d-contact-form-social-container{
        display: flex;
        flex-direction: row;
        align-items: center;
        gap: 10px;
    }
    .d-contact-form-social-button{
        padding: 8px;
        color: white;
        background-color: #B20000;
        text-align: center;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .d-contact-form-text-container{
        color: white;
    }
    .d-contact-form-desc{
        margin-bottom: 10px;
    }
    .d-contact-form-tel{
        font-weight: bold;
    }
    .d-contact-form-tel a{
        color: white;
        font-weight: normal;
    }

    /*form*/
    .d-contact-form-header{
        color: white;
    }
    .contact-btn{
        padding: 10px;
        background-color: #CE2C2D;
    }
    .contact-btn:hover{
        background-color: #CE2C2D;
    }
    .custom-control{
        border-radius: 0;
        border: 1px solid white;
        background-color: #434343;
        padding: 25px 15px;
    }
    .custom-control:focus{
        background-color: #434343;
    }
    @media only screen and (max-width: 600px) {
        .d-contact-form-row{
            width: 100%;
            flex-direction: column;
            align-items: center;
            gap: 50px;
            padding: 30px 10px 70px 10px;
        }
    }
</style>
