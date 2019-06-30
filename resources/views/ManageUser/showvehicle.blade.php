@extends('layouts.footer_of_all_forms')
@section('contentfooter')
    <script src="js/Ajax/HumchaleVehicleManagement.js" type="text/javascript"></script>
    <script>

        $(window).load(function () {
            getVehicleList();
        });

    </script>

@endsection



@extends('layouts.header_of_all_forms')
@section('contentheader')
    <script>
        function testAnim(x) {
            $('.modal .modal-dialog').attr('class', 'modal-dialog  ' + x + '  animated');
        };
        $('#View').on('show.bs.modal', function (e) {
            var anim = $('#entrance').val();
            testAnim(anim);
        })
        $('#View').on('hide.bs.modal', function (e) {
            var anim = $('#exit').val();
            testAnim(anim);
        })
    </script>


    <!--/List of vehicles-->
    <section class="contact py-lg-5  pt-5 pb-5">
        {{--style="box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);transition: 0.3s;width: 70%;border-radius: 5px;"--}}
        <div class="container py-5">
            <div class="title-section">
                <h3 class="heading-agileinfo text-center" style="font-size: 31px;">List Of<span>&nbsp;Vehicles</span></h3>
            </div>
            <div class="inner-sec-w3layouts-agileinfo">

                <div class="contact_grid_right mt-5">
                    <div>
                        <div style=" padding: 2px 20px;">
                            <form action="#" method="post">
                                <div class="contact_left_grid table table-responsive">

                                    <table class="table table-striped" style="margin-top: 10px;width: 100%;">
                                        <thead>
                                        <tr style="color: #cc2105;">
                                            <th scope="col" >#</th>
                                            <th scope="col" >Vehicle No. </th>
                                            <th scope="col">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody id="tbl">
                                        </tbody>
                                    </table>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        </div>
    </section>
    <!--//List of vehicles-->

    <!-- Modal for VIEW -->
    <div class="modal fade" id="View" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Details of Vehicle</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="inner-sec-w3layouts-agileinfo">
                        <div class="contact_grid_right">
                            <form action="#" method="post" autocomplete="off">
                                <div class="contact_left_grid">

                                    <center><img class="vehicleImageCustom" id="vehicleImage" src="/"  alt="Vehicle Picture" style="width: 122px;border-radius: 50%;height: 122px;margin-top: -8px;margin-left: 2px;"></center>
                                    {{--        <p style="margin-top: 15px;color: #cc2105;">Vehicle Name<span style="color: gray">Audi</span></p><hr style="margin-top: -11px;">
                                            <p style="margin-top: 15px;color: #cc2105;">Vehicle Company<span style="color: gray">German Automobile Manufacturer </span></p><hr style="margin-top: -11px;">
                                            <p style="margin-top: 15px;color: #cc2105;">Vehicle Modal<span style="color: gray">02-02-2005</span></p><hr style="margin-top: -11px;">--}}

                                    <table>
                                        <tbody>
                                        <tr>
                                            <td><p style="color: #cc2105;">Vehicle Number</p></td>
                                            <td></td>
                                            <td ><span style="color: gray;" id="vehicleNumber">

                                                </span></td>
                                        </tr>
                                        <tr>
                                            <td><p style="color: #cc2105;">Vehicle Name</p></td>
                                            <td></td>
                                            <td ><span style="color: gray;" id="vehicleName"></span></td>
                                        </tr>
                                        <tr>
                                            <td><p style="color: #cc2105;">Vehicle Company</p></td>
                                            <td></td>
                                            <td ><span style="color: gray;" id="vehicleCompany"></span></td>
                                        </tr>
                                        <tr>
                                            <td><p style="color: #cc2105;">Vehicle Modal</p></td>
                                            <td></td>
                                            <td ><span style="color: gray;" id="vehicleModal"></span></td>
                                        </tr>
                                        <tr>
                                            <td><p style="color: #cc2105;">Number Of Seats</p></td>
                                            <td></td>
                                            <td ><span style="color: gray;" id="vehcleSeats"></span></td>
                                        </tr>
                                        <tr>
                                            <td><p style="color: #cc2105;"></p></td>
                                            <td ><span style="color: gray;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    </div>
    <!-- //Modal -->

    <!-- Modal -->
    <div class="modal fade" id="Edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Details of Vehicle</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="inner-sec-w3layouts-agileinfo">
                        <div class="contact_grid_right">
                            <form action="#" method="post" autocomplete="off">
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
                                                <option value="" style="width: 100%">AC/NonAc</option>
                                                <option value="saab" style="width: 100%">Saab</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <select name="type_of_seat" id="type_of_seat" style="outline: none;padding: 15px 15px;font-size: 14px;color: #777;background: #f7f7f7; width: 100%;border: 1px solid #ebeeef; margin-top: 1em;">
                                                <option value="">Sleeper/Seater</option>
                                                <option value="saab">Saab</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <select style="outline: none;padding: 15px 15px;font-size: 14px;color: #777;background: #f7f7f7; width: 100%;border: 1px solid #ebeeef; margin-top: 1em;">
                                                <option value="">Wheeler Type</option>
                                                <option value="saab">Saab</option>
                                                <option value="mercedes">Mercedes</option>
                                                <option value="audi">Audi</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">

                                            <input type="file" accept="image/*" id="browse" name="fileupload" style="display: none" onChange="Handlechange();"/>
                                            <input type="button" style="outline: none;padding: 15px 15px;font-size: 14px;color: #777;background: #f7f7f7; width: 100%;border: 1px solid #ebeeef; margin-top: 1em;" value="Select Vehicle Image" id="fakeBrowse" onclick="HandleBrowseClick();"/>

                                        </div>

                                    </div>
                                    <input type="submit" value="Submit" style="margin-top: 20px;"><br><br>
                                    <div class="clearfix"> </div>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    </div>
    <!-- //Modal -->

    <!-- Modal -->
    <div class="modal fade" id="Delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Details of Vehicle</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="inner-sec-w3layouts-agileinfo">
                        <div class="contact_grid_right">
                            <form action="#" method="post" autocomplete="off">
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
                                                <option value="" style="width: 100%">AC/NonAc</option>
                                                <option value="saab" style="width: 100%">Saab</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <select name="type_of_seat" id="type_of_seat" style="outline: none;padding: 15px 15px;font-size: 14px;color: #777;background: #f7f7f7; width: 100%;border: 1px solid #ebeeef; margin-top: 1em;">
                                                <option value="">Sleeper/Seater</option>
                                                <option value="saab">Saab</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <select style="outline: none;padding: 15px 15px;font-size: 14px;color: #777;background: #f7f7f7; width: 100%;border: 1px solid #ebeeef; margin-top: 1em;">
                                                <option value="">Wheeler Type</option>
                                                <option value="saab">Saab</option>
                                                <option value="mercedes">Mercedes</option>
                                                <option value="audi">Audi</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">

                                            <input type="file" accept="image/*" id="browse" name="fileupload" style="display: none" onChange="Handlechange();"/>
                                            <input type="button" style="outline: none;padding: 15px 15px;font-size: 14px;color: #777;background: #f7f7f7; width: 100%;border: 1px solid #ebeeef; margin-top: 1em;" value="Select Vehicle Image" id="fakeBrowse" onclick="HandleBrowseClick();"/>

                                        </div>

                                    </div>
                                    <input type="submit" value="Submit" style="margin-top: 20px;"><br><br>
                                    <div class="clearfix"> </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    </div>
    <!-- //Modal -->



@endsection()