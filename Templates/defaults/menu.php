<?php
function getDashboard()
{
    if ($_SESSION["myrole"] == 'admin') {
        $item = '<a class="nav-link" href="/dashboard">DASHBOARD</a>';
    } else {
        $item = '<a class="nav-link" href="/contact">CONTACT</a>';
    }
    return $item;
}


if (!isset($_SESSION["email"])) {

    echo ' <nav class="navbar navbar-dark navbar-expand-lg " >

    <div class="container-fluid">
        <a class="navbar-brand" href="/home">
            <img src="/img/logo.png" width="70%" >
        </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#myNavbar" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>


        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="navbar-nav">  
                <li class="nav-item">
                    <a class="nav-link " href="/home">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/categories">SPORTAPPARAAT</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"  href="/register">REGISTREREN</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/contact">CONTACT</a>
                </li>

            </ul>
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link " href="/inloggen"> <button class="btn ">INLOGGEN</button> </a>
                </li>
            </ul>
         
        </div>
    </div>
</nav>';
} else {
    echo ' <nav class="navbar  navbar-dark  navbar-expand-lg " >
    <div class="container-fluid navbar-con">
        <a class="navbar-brand logo" href="/home">
            <img src="/img/logo.png" width="70%" class="logo-img" >
        </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#myNavbar" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>


        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="navbar-nav">  
                <li class="nav-item">
                    <a class="nav-link nav-link-mob" href="/home">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-mob" href="/categories">SPORTAPPARAAT</a>
                </li> 
                 
                
                <li class="nav-item nav-link-mob">' .
        getDashboard() .
        '</li>

            
         
        </div>

        

    </div>


    <img class="pict" src="./public/img/userProfile.png" alt="profile_img">
    <div class="all_dd">
        <div class="pers_info">
            <img class="" src="https://i.imgur.com/2QKIaJ5.png" width="85px" alt="profile_img">
            <h4>' . $_SESSION["name"] . '</h4>
            <P>' . $_SESSION["email"] . '</P>
        </div>
        <div class="dd_menu">
            <div class="dd_left">
                <ul>
                    <li><i class="far fa-star"></i></li>
                    <li><i class="fas fa-cog"></i></li>
                    <li><i class="fas fa-sign-out-alt"></i></li>
                </ul>
            </div>
            <div class="dd_right">
                <ul>
                                
                    <li>Favorites</li>
                        <li>Settings</li>
                        <li><a href="/uitloggen"> Logout</a></li>
                    </ul>
                </div>
            </div>
    </div>


</nav>';
}
