$(document).ready(function () {

    // alert("Hello");

    $(document).on('click', '#btnLogin', function (e) {
        e.preventDefault();


        var email = document.getElementById('login_email');
        email = email.value;
        var passwd = document.getElementById('login_password');
        passwd = passwd.value;
        alert('btn login click perfomed');
        alert('email is ' + email + ' password is ' + passwd);
        $.ajaxSetup({
            headers:{
                'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url:'/humchaleLogin',
            method:'post',
            data: {email:email,password:passwd},
            success:function (data) {
                if(data.msg=="Successfully Login")
                {
                    alert(data.msg);
                    window.location.replace('/UserProfile');
                }
                else if(data.msg=="Invalid username or password")
                {
                    alert(data.msg);
                }

            },
            error:function(xhr,status,error){
                alert(JSON.stringify(xhr)+"--------"+status+"---------"+error);
            }
        });
    });

//    registration AJAX script
    $(document).on('click', '#register', function (e) {
        e.preventDefault();

        var name = document.getElementById('register_fullname');
        name=name.value;
        var address = document.getElementById('register_Message');
        address=address.value;
        var pincode = document.getElementById('register_pincode');
        pincode=pincode.value;
        var email = document.getElementById('register_email');
        email=email.value;

        var passwd = document.getElementById('register_password');
        passwd=passwd.value;
        var mobile = document.getElementById('register_mobileno');
        mobile=mobile.value;
        var gender = document.getElementById('register_radio-one');
        gender=gender.value;
        var aadharcard = document.getElementById('register_aadharcard');
        aadharcard=aadharcard.value;
        var otp=document.getElementById('register_otp');
        otp=otp.value;
        var buttonValue=document.getElementById('register');
        alert(buttonValue.value);

        // alert('email is ' + email + ' password is ' + passwd+'  gender is '+gender);
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        if(buttonValue.value=="OTP")
        {
            $.ajax({
                url: '/sendOTPMail',
                method: 'post',
                data: {
                    name: name,
                    email: email,
                },
                success: function (data) {
                    if(data.msg=="successful")
                    {
                        alert(data.msg+' | Enter the OTP and Register');
                        $("#register_otp").show();
                        $('#register').prop('value','Register');

                    }
                    else if(data.msg=="Email is already exist")
                    {
                        alert(data.msg);
                    }

                },
                error: function (xhr, status, error) {
                    alert(JSON.stringify(xhr) + "--------" + status + "---------" + error);
                }
            });
        }
        else if(buttonValue.value=="Register")
        {
            alert('Register button clicked');
            $.ajax({
                url: '/humchaleRegister',
                method: 'post',
                data: {
                    name: name,
                    address: address,
                    pincode: pincode,
                    email: email,
                    password: passwd,
                    mobile: mobile,
                    gender: gender,
                    aadharcard: aadharcard,
                    otp:otp
                },
                success: function (data) {
                    if(data.msg!=null)
                    {
                        if(data.msg=="successful" || data.msg=="Email is already exist")
                        {
                            alert(data.msg);
                            $('#register').prop('value','OTP');
                            $("#register_otp").hide();
                            $('#Register').modal('hide');
                        }
                        alert(data.msg);
                        // $("#register_otp").show();

                    }
                },
                error: function (xhr, status, error) {
                    alert(JSON.stringify(xhr) +
                        "--------" + status +
                        "---------" + error);
                }
            });
            // $("#register").prop('value','OTP');
        }


    });

    //END of registration

});