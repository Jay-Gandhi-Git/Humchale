$(document).ready(function () {
    $(document).on('click', '#lilogin', function () {
        $("#menu1").children().removeClass("active");
        $("#menu1").children("#lilogin").addClass("active");

        $('#login_email').val("");
        $('#login_password').val("");
    });
    $(document).on('click', '#liRegister', function () {
        $("#menu1").children().removeClass("active");
        $("#menu1").children("#liRegister").addClass("active");
        $('#register_fullname').val("");
        $('#register_pincode').val("");
        $('#register_mobileno').val("");
        $('#register_email').val("");
        $('#register_password').val("");
        $('#register_aadharcard').val("");
        $('#register_Message').val("");
        $('#register_otp').val("");
        $('#register_otp').hide();
    });
    $(document).on('click', '#liHome', function () {
        liHomeActive();
    });

    function liHomeActive() {
        $("#menu1").children().removeClass("active");
        $("#menu1").children("#liHome").addClass("active");
    }

    $(document).on('hiden', '#lilogin', function () {
        alert('liloginn hidden event');
        liHomeActive();
    });
    $(document).on('hide.bs.modal', '#liRegister', function () {
        liHomeActive();
    });
    // $("#register").click(function () {
    //     $("#register_otp").show();
    // });

    $("#cross").click(function () {
        $("#register_otp").hide();
    });

    $("#remove").click(function () {
        $("#register_otp").hide();
    });
    $('#register').on('hidden.bs.modal', function (e) {
        $("#textboxDiv").remove();
    });
    $('#signup').click(function(){
        $('#Register').modal('show')
    });
});