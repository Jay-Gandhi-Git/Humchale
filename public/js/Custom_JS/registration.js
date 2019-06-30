$(function () {

    $("#fullname_error_message").hide();
    $("#pincode_error_message").hide();
    $("#mobileno_error_message").hide();
    $("#email_error_message").hide();
    $("#password_error_message").hide();
    $("#aadhar_error_message").hide();
    $("#address_error_message").hide();

    var err_fullname = false;
    var err_pincode = false;
    var err_mobileno=false;
    var err_email=false;
    var err_password=false;
    var err_aadhar=false;
    var err_address=false;

    $("#register_fullname").focusout(function () {
        check_fullname();
    });

    $("#register_pincode").focusout(function () {
        check_pincode();
    });

    $("#register_password").focusout(function () {
        check_password();
    });

    /*$("#register_mobileno").focusout(function () {
        check_mobileno();
    });

    $("#register_email").focusout(function () {
        check_email();
    });



    $("#register_address").focusout(function () {
        check_address();
    });

    $("#register_aadharcard").focusout(function () {
        check_aadhar();
    });*/

    function check_fullname() {



    }

    function check_pincode() {
        var pincode_length = $("#register_pincode").val().length;
        //alert(pincode_length);

        if(pincode_length < 6 || pincode_length > 6){
            $("#pincode_error_message").html('Enter 6 Digits');
            $("#pincode_error_message").show();
            err_pincode=true;
        }
        else {
            $("#pincode_error_message").hide();
        }

    }

   /* function check_mobileno() {


    }

    function check_email() {



    }
*/
    function check_password(){

        var pincode_length = $("#register_password").val().length;
        //alert(password_length);

        if(pincode_length < 8 || pincode_length > 15){
            $("#password_error_message").html('Enter Your Password Between 8-15');
            $("#password_error_message").show();
            err_password=true;
        }
        else {
            $("#password_error_message").hide();
        }

    }

    function check_aadhar() {

    }


});

