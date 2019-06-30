@extends('layouts.footer_of_all_forms')
@section('contentfooter')
    <script src="js/Ajax/HumchaleVehicleManagement.js" type="text/javascript"></script>

@endsection

@extends('layouts.header_of_all_forms')

@section('contentheader')

    <!--/addVehicle-->
    <section class="contact py-lg-5  pt-5 pb-5">
        {{--style="box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);transition: 0.3s;width: 70%;border-radius: 5px;"--}}
        <div class="container py-5">
            <div class="title-section">
                <h3 class="heading-agileinfo text-center" style="font-size: 31px;">Add<span>Vehicle</span></h3>
                <center><img class="VehicleimagePreview"  src="images/sample.jpg" alt="Vehicle Picture" style="width: 145px;border-radius: 50%;height: 145px;margin-top: 16px;margin-left: 2px;"></center>
            </div>
            <div class="inner-sec-w3layouts-agileinfo">

                <div class="contact_grid_right mt-5">
                    <div>
                        <div style=" padding: 2px 20px;">
                            <form action="#" method="post" id="uploadVehicleForm">
                                <div class="contact_left_grid">

                                    <div class="row">
                                        <div class="col-md-6">
                                                <input type="text" name="vehicle_name" id="vehicle_name" placeholder="Vehicle Name" required="">                                            <span class="error_form" id="pincode_error_message"></span>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" name="vehicle_company" id="vehicle_company" placeholder="Company Name" required="">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <input type="text"  name="vehicle_model_date" id="vehicle_model_date" placeholder="Model Year" required=""><br>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" name="vehicle_number" id="vehicle_number" placeholder="Vehicle Number" required=""><br>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <input type="text"  name="no_of_seats" id="no_of_seats" placeholder="Number Of Seats" required=""><br>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" name="rc_book_number" id="rc_book_number" placeholder="R.C.Book" required=""><br>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <select name="aircondition_status" id="aircondition_status" style="outline: none;padding: 15px 15px;font-size: 14px;color: #777;background: #f7f7f7; width: 100%;border: 1px solid #ebeeef; margin-top: 1em;">
                                                <option selected disabled style="width: 100%">AC/NonAc</option>
                                                <option value="1" style="width: 100%">AC</option>
                                                <option value="0" style="width: 100%">Non AC</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <select name="type_of_seat" id="type_of_seat" style="outline: none;padding: 15px 15px;font-size: 14px;color: #777;background: #f7f7f7; width: 100%;border: 1px solid #ebeeef; margin-top: 1em;">
                                                <option selected disabled>Seating Type</option>
                                                <option value="seater">Seater</option>
                                                <option value="sleeper">Sleeper</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <select name="vehicle_Type" id="vehicle_Type" style="outline: none;padding: 15px 15px;font-size: 14px;color: #777;background: #f7f7f7; width: 100%;border: 1px solid #ebeeef; margin-top: 1em;">
                                                <option selected disabled>Vehicle Type</option>
                                                @foreach($vehicleType as $vehicleType)
                                                    <option value="{{$vehicleType->vehicletype_id}}">{{$vehicleType->vehicle_type}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="file" name="vehicle_photo" id="vehicle_photo" />
                                        </div>
                                    </div>
                                    <input type="submit" id="btnAddVehicle"  value="Submit" style="margin-top: 20px;"><br><br>
                                    <div class="clearfix"> </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>

            </div>
        </div>

    </section>


    <!--//addVehicle-->


@endsection