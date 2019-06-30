@extends('layouts.footer_of_all_forms')
@section('contentfooter')
@endsection



@extends('layouts.header_of_all_forms')

@section('contentheader')


    <!--/UserProfile-->
    <section class="contact py-lg-5  pt-5 pb-5">
        {{--style="box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);transition: 0.3s;width: 70%;border-radius: 5px;"--}}
        <div class="container py-5">
            <div class="title-section">
                <h3 class="heading-agileinfo text-center" style="font-size: 31px;">User<span>Profile</span></h3>
            </div>
            <div class="inner-sec-w3layouts-agileinfo">

                <div class="contact_grid_right mt-5">
                    <div>
                        <div style=" padding: 2px 20px;">
                                <form action="#" method="post" id="uploadForm">
                                <div class="contact_left_grid">

                                    <div class="row">
                                        <div class="col-md-6">
                                            <input type="text" name="profile_fullname" id="profile_fullname"
                                                   placeholder="Full Name" required=""> <span class="error_form"
                                                                                              id="pincode_error_message"></span>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="email" name="profile_email" id="profile_email" readonly
                                                   placeholder="Email" required="">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <input type="number" name="profile_pincode" id="profile_pincode"
                                                   placeholder="Pincode" required=""><br>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" name="profile_mobileno" id="profile_mobileno"
                                                   placeholder="Mobile Number" required=""><br>
                                        </div>
                                    </div>

                                    <div class="row" style="margin-top: 12px;">
                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <label for="radio-one" style="margin-top: 10px;">Gender</label>
                                                </div>
                                                <div class="col-md-3">
                                                    <input type="radio" name="profile_gender" value="Male"
                                                           id="profile_radio-one" class="form-radio" checked><label
                                                            for="radio-one">Male</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="radio" name="profile_gender" value="Female"
                                                           id="profile_radio-two" class="form-radio"><label
                                                            for="radio-one">Female</label>
                                                </div>
                                            </div>
                                        </div>
                                        {{--<div class="col-md-3">--}}
                                            {{--<input type="password" name="profile_password" id="profile_password"--}}
                                                   {{--placeholder="Password" required=""><br>--}}
                                        {{--</div>--}}
                                        {{--<div class="col-md-3">--}}
                                            {{--<input type="password" name="confirm_password" id="confirm_password"--}}
                                                   {{--placeholder="Confirm Password" required=""><br>--}}
                                        {{--</div>--}}
                                    </div>


                                    <div class="row">
                                        <div class="col-md-6">
                                            <input type="text" name="profile_aadharcard" id="profile_aadharcard"
                                                   placeholder="AadharCard Number" required="">
                                        </div>
                                        <div class="col-md-6">
                                            <input type="file" name="profile_photo" id="profile_photo"/>
                                        </div>
                                    </div>
                                </div>


                                <textarea name="profile_address" id="profile_address" onfocus="this.value = '';"
                                          onblur="if (this.value == '') {this.value = 'Address...';}" required="">Address</textarea>
                                <input type="submit" value="Submit" id="profile_save"><br><br>
                        </div>
                        </form>
                    </div>
                </div>

            </div>

        </div>
        </div>
    </section>
    <!--//UserProfile-->
    <script src="js/Ajax/HumchaleUserManagement.js"></script>
@endsection













