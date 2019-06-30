


$(document).ready(function () {
    // alert('Hello scripts is called');
    // calling function getUserDataPageLoad() to bind the data

    $(window).load(function () {
        getUserDataPageLoad();


        //User profile get data for bind ajax starts from here
        function getUserDataPageLoad()
        {
            $.ajaxSetup({
                headers:{
                    'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
                }
            });
            // alert('getUserDataPageLoad is called');
            $.ajax({
                url:"/userProfileGetDataForUpdate",
                method:"POST",
                dataType:'JSON',
                cache:false,
                success:function (data) {
                    if(data.msg==="Session Expired")
                    {
                        window.location.replace('/');
                    }
                    // alert('success:->   '+data.msg);
                    $('#profile_fullname').val(data.msg.full_name);
                    $('#profile_email').val(data.msg.email);
                    $('#profile_pincode').val(data.msg.pincode);
                    if(data.msg.gender=="1")
                    {
                        $('#profile_radio-one').prop("checked",true);
                    }
                    else if(data.msg.gender=="0")
                    {
                        $('#profile_radio-two').prop("checked",true);
                    }

                    $('#profile_aadharcard').val(data.msg.aadhar_card_no);
                    $('#profile_address').val(data.msg.address);
                    $('#profile_mobileno').val(data.msg.mobile_no);
                },
                error:function (data) {
                    // alert('Get User Data Error:::--> '+data);
                    alert('Get User Data Error:::-->'+JSON.stringify(xhr)+"--------"+status+"---------"+data);
                }
            })
        }
        //User profile get data for bind ajax ends from here
    });

    //User profile update ajax starts from here
    $(document).on('submit','#uploadForm',function (e) {
        e.preventDefault();
        alert('Function is called..');
        $.ajaxSetup({
            headers:{
                'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
            }
        });
        alert('Function is called.._2');
        $.ajax({
            url:"/userProfileUpdate",
            method:"POST",
            data:new FormData(this),
            dataType:'JSON',
            contentType:false,
            cache:false,
            processData:false,
            success:function (data) {
                if(data.msg==="Session Expired")
                {
                    window.location.replace('/');
                }
                alert('success:->   '+data.msg);
            },
            error:function (data) {
                alert('Error:::--> '+data.msg);
            }
        })
    });
    //User profile update ajax ends from here
});