<div class="d-test-drive">

    <div class="d-test-drive-section">

        <div class="d-test-drive-form-content">
            <h3 class="d-test-drive-form-header">{!! trans('index_lang.test_drive_title') !!}</h3>

            <form method="POST" action="{{route('submit-test-drive-email', app()->getLocale())}}" class="needs-validation w-100" novalidate>
                @csrf
                <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <label for="validationCustom01">Name <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="validationCustom01" name="name" placeholder="Enter Name" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                        <div class="invalid-feedback">
                            This field is required.
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="validationCustom02">Surname <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="validationCustom02" name="surname" placeholder="Enter Surname" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                        <div class="invalid-feedback">
                            This field is required.
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <label for="validationCustom03">Tel <span class="text-danger">*</span></label>
                        <input type="tel" class="form-control" id="validationCustom03" name="tel" placeholder="091 234 567" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                        <div class="invalid-feedback">
                            This field is required.
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="validationCustom04">E-Mail <span class="text-danger">*</span></label>
                        <input type="email" class="form-control" placeholder="Enter Email" name="email" id="validationCustom04" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                        <div class="invalid-feedback">
                            This field is required.
                        </div>
                    </div>
                </div>



                <div class="form-group">
                    <label for="validationCustom05">Cars that want to test drive <span class="text-danger">*</span></label>
                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="dcheckbox1[]" checked value="All-New ISUZU D-MAX" id="checkbox_one" required>
                                <label class="form-check-label" for="checkbox_one">
                                    All-New ISUZU D-MAX
                                </label>
                                <div class="invalid-feedback">
                                    You must select one of the options!
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="dcheckbox1[]" value="ISUZU MU-X BLUE POWER" id="checkbox_two" required>
                                <label class="form-check-label" for="checkbox_two">
                                    ISUZU MU-X BLUE POWER
                                </label>
                                <div class="invalid-feedback">
                                    You must select one of the options!
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="validationCustom05">Any Isuzu showrooms at your convenience <span class="text-danger">*</span></label>
                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="dradio" checked value="lcoation four" id="radio_one" required>
                                <label class="form-check-label" for="radio_one">
                                    Isuzu K (Cambodia) Confederation de la Russie (St. 11). in front of Phnom Penh Internation Airport, Kbal Damrey Village, Phnom Penh
                                </label>
                                <div class="invalid-feedback">
                                    You must select one of the options!
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="dradio" value="location three" required>
                                <label class="form-check-label" for="radio_two">
                                    Isuzu K (Cambodia) Confederation de la Russie (St. 11). in front of Phnom Penh Internation Airport, Kbal Damrey Village, Phnom Penh
                                </label>
                                <div class="invalid-feedback">
                                    You must select one of the options!
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="dradio" value="location two" id="radio_three" required>
                                <label class="form-check-label" for="radio_three">
                                    Isuzu K (Cambodia) Confederation de la Russie (St. 11). in front of Phnom Penh Internation Airport, Kbal Damrey Village, Phnom Penh
                                </label>
                                <div class="invalid-feedback">
                                    You must select one of the options!
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="dradio" value="location_one" id="radio_four" required>
                                <label class="form-check-label" for="radio_four">
                                    Isuzu K (Cambodia) Confederation de la Russie (St. 11). in front of Phnom Penh Internation Airport, Kbal Damrey Village, Phnom Penh
                                </label>
                                <div class="invalid-feedback">
                                    You must select one of the options!
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <button id="btn-submit" class="contact-btn btn btn-primary w-100" style="background-color: #FF0000" type="submit">Submit</button>
                <button id="btn-loading" class="contact-btn btn btn-primary w-100 d-none" type="button" disabled>
                    <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                    Sending...
                </button>
            </form>

            @include('sweetalert::alert')

            <script>
                // Example starter JavaScript for disabling form submissions if there are invalid fields
                (function() {
                    'use strict';
                    window.addEventListener('load', function() {
                        // Fetch all the forms we want to apply custom Bootstrap validation styles to
                        var forms = document.getElementsByClassName('needs-validation');

                        var checkboxes = $("input[type='checkbox']")

                        checkboxes.click(function() {
                            console.log("hello")
                        });

                        // Loop over them and prevent submission
                        var validation = Array.prototype.filter.call(forms, function(form) {
                            form.addEventListener('submit', function(event) {

                                if ($('input[type=checkbox]:checked').length > 0) {  // the "> 0" part is unnecessary, actually
                                    $('input[type=checkbox]').prop('required', false);
                                } else {
                                    $('input[type=checkbox]').prop('required', true);
                                }

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










<style>
    .d-test-drive-section{
        width: 100%;
        background-color: #F4F4F4;
    }
    .d-test-drive-form-content{
        width: 70%;
        margin: 0 auto;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        gap: 30px;
        padding: 100px 0;
    }
    .d-test-drive-form-header{
        font-size: 30px;
        color: red;
    }
    @media only screen and (max-width: 600px) {
        .d-test-drive-form-content{
            width: 100%;
            gap: 30px;
            padding: 20px 10px 50px 10px;
        }
    }
</style>
