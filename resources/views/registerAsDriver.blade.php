<!DOCTYPE html>
<html lang="en">
<!--start head section -->
@include('head')
<!--end head section -->

<!--start body section -->
<body data-spy="scroll" data-target="#navbar" class="static-layout">

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="section-content bg-white p-5 shadow">
                <div class="heading-section text-center">
                        <span class="subheading">
                            Join us
                        </span>
                    <h2>
                        As Driver
                    </h2>
                </div>
                <form method="post" name="contact-us" action="" id="multi-step-form">
                    <fieldset id="step-1">
                        <div class="row">
                        <div class="col-md-12 form-group">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                        </div>
                        <div class="col-md-12 form-group">
                            <input type="text" class="form-control" id="email" name="email" placeholder="Email">
                        </div>
                        <div class="col-md-12 form-group">
                            <input type="number" class="form-control" id="phoneNumber" name="phoneNumber" placeholder="Phone">
                        </div>

                        <div class="col-md-12 form-group">
                            <input type="number" class="form-control" id="id_number" name="id_number" placeholder="id_number">
                        </div>

                        <div class="col-md-6 form-group">
                            <div class="input-group date" id="datetimepicker4" data-target-input="nearest">
                                <input type="text" class="form-control datetimepicker-input" name="date_of_birth" data-target="#datetimepicker4" placeholder="Date of Birth" />
                                <div class="input-group-append" data-target="#datetimepicker4" data-toggle="datetimepicker">
                                    <div class="input-group-text">
                                        <span class="lnr lnr-calendar-full"></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 form-group">
                            <div class="input-group date" id="datetimepicker3" data-target-input="nearest">
                                <input type="text" class="form-control datetimepicker-input" name="id_expire_date" data-target="#datetimepicker3" placeholder="ID expire date" />
                                <div class="input-group-append" data-target="#datetimepicker3" data-toggle="datetimepicker">
                                    <div class="input-group-text">
                                        <span class="lnr lnr-calendar-full"></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 form-group">
                            <select class="form-control" >

                                <option>nationality</option>
                                @foreach ($nationalities_jsonData as $item)
                                    <option>{{ $item }}</option>
                                @endforeach
                            </select>
                        </div>


{{--                        <div class="col-md-12 text-center">--}}
{{--                                <button class="next-button">Next</button>--}}
{{--                                --}}{{--                            <button class="btn btn-primary btn-shadow btn-lg" type="submit" name="submit">Send Message</button>--}}
{{--                        </div>--}}
                    </div>
                    </fieldset>

                    <fieldset id="step-2">

                        <div class="row">
                            <div class="col-md-12 form-group">
                                <input type="text" class="form-control" id="region" name="region" placeholder="region">
                            </div>
                            <div class="col-md-12 form-group">
                                <input type="text" class="form-control" id="car_type" name="car_type" placeholder="car type">
                            </div>
                            <div class="col-md-12 form-group">
                                <input type="number" class="form-control" id="car_plate" name="car_plate" placeholder="car plate">
                            </div>

                        </div>
                        <br>




                    </fieldset>

                    <div class="col-md-12 text-center">
                        <button class="btn btn-primary btn-shadow btn-lg" type="button" id="prev-button">Previous</button>
                        <button class="btn btn-primary btn-shadow btn-lg" type="button" id="next-button">Next</button>
                        <button class="btn btn-primary btn-shadow btn-lg" type="submit">Submit</button>
                    </div>

                </form>
            </div>
        </div>
    </div>

</div>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script>
<script src="{{asset('assets/js/popper.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/select2.min.js ')}}"></script>
<script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
<script src="https://cdn.rawgit.com/noelboss/featherlight/1.7.13/release/featherlight.min.js"></script>
<script src="vendor/stellar/jquery.stellar.js" type="text/javascript" charset="utf-8"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.1/js/tempusdominus-bootstrap-4.min.js"></script>

<!-- Main JS -->
<script src="{{asset('assets/js/app.min.js')}}"></script>

<script>

    document.addEventListener("DOMContentLoaded", function () {
        const form = document.getElementById("multi-step-form");
        const fieldsets = form.querySelectorAll("fieldset");
        const prevButton = document.getElementById("prev-button");
        const nextButton = document.getElementById("next-button");
        let currentStep = 0;

        function showStep(step) {
            fieldsets.forEach((fieldset, index) => {
                if (index === step) {
                    fieldset.style.display = "block";
                } else {
                    fieldset.style.display = "none";
                }
            });
        }

        function validateStep(step) {
            // Add validation logic for each step if needed
            return true; // Return true for simplicity
        }

        nextButton.addEventListener("click", function () {
            if (validateStep(currentStep)) {
                currentStep++;
                showStep(currentStep);
            }
        });

        prevButton.addEventListener("click", function () {
            if (currentStep > 0) {
                currentStep--;
                showStep(currentStep);
            }
        });

        showStep(currentStep);
    });



</script>

</body>

<!--end body section -->

</html>
