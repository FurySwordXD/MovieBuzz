<head>
    <title>Movie Buzz</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="jquery-3.2.0.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<!-- Navbar (sit on top) -->
<div class="w3-top">
    <div class="w3-bar" id="myNavbar">
        <a class="w3-bar-item w3-button w3-hover-black w3-hide-medium w3-hide-large w3-right" href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu">
        <i class="fa fa-bars"></i>
        </a>
        <a href="#home" class="w3-bar-item w3-button w3-ripple w3-text-white w3-hover-teal"><i class="fa fa-home"></i> HOME</a>
        <a href="#theatres" class="w3-bar-item w3-button w3-hide-small w3-ripple w3-text-white w3-hover-teal"><i class="fa fa-user"></i> THEATRES</a>
        <a href="#movies" class="w3-bar-item w3-button w3-hide-small w3-ripple w3-text-white w3-hover-teal"><i class="fa fa-th"></i> MOVIES</a>
        <a href="#about" class="w3-bar-item w3-button w3-hide-small w3-ripple w3-text-white w3-hover-teal"><i class="fa fa-envelope"></i> ABOUT</a>
    </div>

    <!-- Navbar on small screens -->
    <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium ">
        <a href="#theatres" class="w3-bar-item w3-button w3-ripple" onclick="toggleFunction()">THEATRES</a>
        <a href="#movies" class="w3-bar-item w3-button w3-ripple" onclick="toggleFunction()">MOVIES</a>
        <a href="#about" class="w3-bar-item w3-button w3-ripple" onclick="toggleFunction()">ABOUT</a>
    </div>
</div>