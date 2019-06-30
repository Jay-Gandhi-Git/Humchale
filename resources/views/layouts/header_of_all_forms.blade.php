<!DOCTYPE html>
<html lang="zxx">

<head>
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="http://code.jquery.com/jquery.com/jquery-1.5.min.js"></script>
    <script src="http://cdn.wideskyhosting.com/js/jquery.validate.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <meta charset="utf-8" />
    <meta name="keywords" content="Vagabond Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
	SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- Custom Theme files -->
    <link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
    <link href="css/style.css" type="text/css" rel="stylesheet" media="all">
    <!-- font-awesome icons -->
    <link href="css/fontawesome-all.min.css" rel="stylesheet">
    <!-- //Custom Theme files -->
    <!-- online-fonts -->
    <link href="//fonts.googleapis.com/css?family=Ubuntu:300,300i,400,400i,500,500i,700,700i" rel="stylesheet">
    <!-- //online-fonts -->
</head>

<body>
<!-- banner -->
<div class="inner-banner">

<!-- header -->
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-gradient-secondary pt-3">
        <h1>
            <a class="navbar-brand text-white" href="index.html">
                HUMCHALE
            </a>
        </h1>
        <button class="navbar-toggler ml-md-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-lg-auto text-center">
                <li class="nav-item active  mr-3 mt-lg-0 mt-3">
                    <a class="nav-link" href="/">Home
                        <span class="sr-only">(current)</span>
                    </a>
                </li>



                <li class="nav-item  mr-3 mt-lg-0 mt-3">
                    <a class="nav-link" href="/about">About</a>
                </li>

                <li class="nav-item mr-3 mt-lg-0 mt-3">
                    <a class="nav-link" href="/contact">Contactus</a>
                </li>


                <li class="nav-item dropdown mr-3 mt-lg-0 mt-3">
                    <a class="nav-link dropdown-toggle" href="/UserProfile" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                       aria-expanded="false">
                        My Account
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="/addTrips">Add Trips</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="/addvehicle">Add Vehicle</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="/UserProfile">Profile</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="/showvehicle ">List Of Vehicles</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="/humchaleLogout">Logout</a>
                    </div>
                </li>


            </ul>
        </div>
    </nav>
</header>
<!-- //header -->
</div>

@yield('contentheader')


</body>

</html>