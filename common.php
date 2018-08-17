<?php
    session_start();
?>
<!DOCTYPE HTML>
<head>
    <title>Movie Buzz</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="w3.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<<<<<<< HEAD
=======

    <script type="text/javascript" src="jquery-3.2.0.js"></script>
    <script src="index_js.js"></script>
>>>>>>> 28ee2e904a7398f0fa2aa274c9bb7b1342bd991d
</head>

<!-- Navbar (sit on top) -->
<div class="w3-top">
    <div class="w3-bar" id="myNavbar">
        <a class="w3-bar-item w3-button w3-hover-black w3-hide-medium w3-hide-large w3-right" href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu">
        <i class="fa fa-bars"></i>
        </a>
        <a href="/moviebuzz/#home" class="w3-bar-item w3-button w3-ripple w3-text-white w3-hover-teal"><i class="fa fa-home"></i> HOME</a>
        <a href="/moviebuzz/#theatres" class="w3-bar-item w3-button w3-hide-small w3-ripple w3-text-white w3-hover-teal"><i class="fa fa-user"></i> THEATRES</a>
        <a href="/moviebuzz/#movies" class="w3-bar-item w3-button w3-hide-small w3-ripple w3-text-white w3-hover-teal"><i class="fa fa-th"></i> MOVIES</a>
        <a href="/moviebuzz/#about" class="w3-bar-item w3-button w3-hide-small w3-ripple w3-text-white w3-hover-teal"><i class="fa fa-envelope"></i> ABOUT</a>
        <a class="w3-bar-item w3-button w3-hide-small w3-ripple w3-text-white w3-hover-teal w3-right" onclick="toggleLoginModal()" id="loginBtn"><i class="fa fa-user"></i> LOGIN</a>
        <a class="w3-bar-item w3-button w3-hide-small w3-ripple w3-text-white w3-hover-teal w3-right" onclick="toggleSignupModal()" id="signupBtn"><i class="fa fa-user-circle"></i> SIGN UP</a>
        <a class="w3-bar-item w3-button w3-hide-small w3-ripple w3-text-white w3-hover-teal w3-right" id="profileBtn"><i class="fa fa-user-circle"></i> Name</a>
    </div>

    <!-- Navbar on small screens -->
    <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium ">
        <a href="#theatres" class="w3-bar-item w3-button w3-ripple" onclick="toggleFunction()">THEATRES</a>
        <a href="#movies" class="w3-bar-item w3-button w3-ripple" onclick="toggleFunction()">MOVIES</a>
        <a href="#about" class="w3-bar-item w3-button w3-ripple" onclick="toggleFunction()">ABOUT</a>
    </div>
</div>

<div class="w3-modal" id="loginModal">
    <div class="w3-modal-content w3-animate-top w3-card-4 w3-padding-large" style="width: 35%">

        <h3 class="w3-wide w3-text-black w3-center">LOG IN</h3>
        <span class="w3-button w3-black w3-xlarge w3-hover-red w3-display-topright" onclick="toggleLoginModal()">&times;</span>
        <form class="w3-container" id="loginForm">

            <label class="w3-text-teal">Email</label>
            <input class="w3-input" type="text" name="Email">

            <label class="w3-text-teal">Password</label>
            <input class="w3-input" type="password" name="Password">
            
            <br>
            <center>
                <button class="w3-btn w3-black" type=button style="width: 30%" onclick="login()">Log in</button><br><br>
                <a href="#" onclick="toggleLoginModal();toggleSignupModal();">  Don't have an account yet?</a>
            </center>
        </form>
        <br>
    </div>
</div>

<div class="w3-modal" id="signupModal">
    <div class="w3-modal-content w3-animate-top w3-card-4 w3-padding-large" style="width: 50%">

        <h3 class="w3-wide w3-text-black w3-center">SIGN UP</h3>
        <span class="w3-button w3-black w3-xlarge w3-hover-red w3-display-topright" onclick="toggleSignupModal()">&times;</span>
        <form class="w3-container" id="signupForm">
            
            <label class="w3-text-teal">Name</label>
            <input class="w3-input" type="text" name="Name">

            <label class="w3-text-teal">Age</label>
            <input class="w3-input" type="text" name="Age">

            <label class="w3-text-teal">Email</label>
            <input class="w3-input" type="text" name="Email">

            <label class="w3-text-teal">Password</label>
            <input class="w3-input" type="password" name="Password">
            
            <br>
            <center>
                <button class="w3-btn w3-black" type=button style="width: 25%" onclick="signup()">Sign up</button><br><br>
                <a href="#" onclick="toggleSignupModal();toggleLoginModal();">  Already have an account?</a>
            </center>
        </form>
        <br>
    </div>
</div>