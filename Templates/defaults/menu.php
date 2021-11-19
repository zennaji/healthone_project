<?php 

if(!isset($_SESSION["email"])){

echo '<nav class="navbar  navbar-dark  navbar-expand-lg " >
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
</nav>'


?>
<?php }else{
    echo '<nav class="navbar  navbar-dark  navbar-expand-lg " >
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
                    <a class="nav-link" href="/contact">CONTACT</a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link" href="/dashboard">DASHBOARD</a>
                </li>

            </ul>
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link " href="/uitloggen"> <button class="btn ">UITLOGGEN</button> </a>
                </li>
              
            </ul>
         
        </div>
    </div>
</nav>'
     
    ?> <?php }?> 
    