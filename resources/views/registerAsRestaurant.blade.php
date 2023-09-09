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
                        as Restaurant
                    </h2>
                </div>
                <form method="post" name="contact-us" action="">
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
                        <div class="col-md-6 form-group">
                            <div class="input-group date" id="datetimepicker4" data-target-input="nearest">
                                <input type="text" class="form-control datetimepicker-input" data-target="#datetimepicker4" placeholder="Date" />
                                <div class="input-group-append" data-target="#datetimepicker4" data-toggle="datetimepicker">
                                    <div class="input-group-text">
                                        <span class="lnr lnr-calendar-full"></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 form-group">
                            <div class="input-group date" id="datetimepicker3" data-target-input="nearest">
                                <input type="text" class="form-control datetimepicker-input" data-target="#datetimepicker3" placeholder="Time" />
                                <div class="input-group-append" data-target="#datetimepicker3" data-toggle="datetimepicker">
                                    <div class="input-group-text">
                                        <span class="lnr lnr-clock"></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 form-group">
                                <select class="form-control" id="selectPerson">
                                    @foreach ($nationalities_jsonData as $item)
                                        <option>{{ $item }}</option>
                                    @endforeach

                                </select>
                        </div>

                        <div class="col-md-12 form-group">
                            <textarea class="form-control" id="message" name="message" rows="6" placeholder="Your Message ..."></textarea>
                        </div>
                        <div class="col-md-12 text-center">
                            <button class="btn btn-primary btn-shadow btn-lg" type="submit" name="submit">Send Message</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>

</body>

<!--end body section -->

</html>
