//add vehicle code
$(document).ready(function () {

    $(document).on('change','#vehicle_photo',function () {
        var fileInput = document.getElementById('vehicle_photo');
        var filePath = fileInput.value;
        var allowedExtensions = /(\.(jpeg|jpg|png))$/i;
        if(!allowedExtensions.exec(filePath)){
            alert('Please upload file having extension jpeg,jpg,png only.');
            fileInput.value = '';
            return false;
        }else {
            //Image preview
            if (fileInput.files && fileInput.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('.VehicleimagePreview').attr('src', e.target.result);
                    
                };
                reader.readAsDataURL(fileInput.files[0]);

            }
        }
    });
    $(document).on('submit', '#uploadVehicleForm', function (e) {
        alert('btn add vehicle click perfomed');
        e.preventDefault();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: "/humchaleAddVehicle",
            method:"POST",
            data:new FormData(this),
            dataType:'JSON',
            contentType:false,
            cache:false,
            processData:false,
            success: function (data) {
                // if(data.msg=="successful") {
                    alert('success:->   ' + data.msg);
                // }
            },
            error: function (xhr, status, error) {
                alert('Error:--> ' + error);
            }
        });
    });
});
//add vehicle end

function getVehicleList() {

    $.ajaxSetup({
        headers:{
            'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        url:"/vehicleListDataGet",
        method:"POST",
        dataType:'JSON',
        cache:false,
        success:function (data) {
            if(data.msg==="Session Expired")
            {
                window.location.replace('/');
            }
            // alert('success:->   '+data.msg);
            // $('#profile_fullname').val(data.msg.full_name);
            // $('#profile_email').val(data.msg.email);
            // $('#profile_pincode').val(data.msg.pincode);
            for(var i=0 ; i<data.msg.length ; i++) {
                $("#tbl").append("<tr>" +
                    "<th scope=\"row\">" + (i+1) + "</th>" +
                    "<td >"+data.msg[i].vehicle_number+"</td>" +
                    "<td>" +
                    "<a class='vehicleDetailsView' id='"+data.msg[i].vehicle_id+"' style=\"color: #cc2105;\" data-toggle=\"modal\" data-target=\"#View\"><i class=\"fa fa-eye\"></i></a> <a id='"+data.msg[i].vehicle_id+"' style=\"color: #cc2105;margin-left: 15px;margin-right: 15px\" data-toggle=\"modal\" data-target=\"#Edit\"><i class=\"fa fa-edit\"></i></a>  <a id='"+data.msg[i].vehicle_id+"' style=\"color: #cc2105;\" data-toggle=\"modal\" data-target=\"#Delete\"><i class=\"fa fa-trash-alt\"></i> </a>\n" +
                    "</td>" +
                    "</tr>");
            }
        },
        error:function (data) {
            // alert('Get User Data Error:::--> '+data);
            alert('Get User Data Error:::-->'+JSON.stringify(xhr)+"--------"+status+"---------"+data);
        }
    });

}
$(document).on('click', '.vehicleDetailsView', function () {


    var id = $(this).attr('id');
      $.ajax({
        url:"/vehicleDetailedData",
        method:"POST",
        dataType:'JSON',
        data:{
            id:id,
        },
        cache:false,
        success:function (data) {
            if(data.msg==="Session Expired")
            {
                window.location.replace('/');
            }
            // alert(data.email);
            $('.vehicleImageCustom').attr('src',"Uploaded/"+data.email+"/VehicleImages/"+data.msg[0].vehicle_photo);
            $('#vehicleNumber').html(data.msg[0].vehicle_number);
            $('#vehicleName').html(data.msg[0].vehicle_name);
            $('#vehicleCompany').html(data.msg[0].vehicle_company);
            $('#vehicleModal').html(data.msg[0].vehicle_model_date);
            $('#vehcleSeats').html(data.msg[0].no_of_seats);
            // $('#vehcleSeats').html(data.msg[0].no_of_seats);




        },
        error:function (data) {
            // alert('Get User Data Error:::--> '+data);
            alert('Get User Data Error:::-->'+JSON.stringify(xhr)+"--------"+status+"---------"+data);
        }
    });

});

