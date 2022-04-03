<?php
function getDashboard()
{
    if ($_SESSION["myrole"] == 'admin') {
        $item = '<a class="nav-link" href="/admin/products">DASHBOARD</a>';
    } else {
        $item = '<a class="nav-link" href="/contact">CONTACT</a>';
    }
    return $item;
}
?>

<?php if (!isset($_SESSION["email"])):   ?> 

     <nav class="navbar navbar-dark navbar-expand-lg " >

    <div class="container-fluid">
        <a class="navbar-brand" href="/home">
            <img src="/img/logo.png" width="70%" >
        </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#myNavbar" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>


        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="navbar-nav  ">  
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
</nav>
<?php else:  ?>

     <nav class="navbar  navbar-dark  navbar-expand-lg " >
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
                 
                
                <li class="nav-item nav-link-mob">
        <?php echo getDashboard()  ?>
        </li>

            
         
        </div>

        

    </div>


    <img class="pict" src="https://picsum.photos/200/" style="border-radius: 50%;" alt="profile_img">
    <div class="all_dd">
        <div class="pers_info">
            <img class="" src="https://picsum.photos/200/" width="85px" style="border-radius: 50%;" alt="profile_img">
            <h4> <?php echo  $_SESSION["name"];  ?></h4>
            <P><?php echo $_SESSION["email"] ; ?></P>
        </div>
        <div class="dd_menu">
            <div class="dd_left">
                <ul>
                    <li><i class="fas fa-cog"></i></li>
                    <li><i class="far fa-star"></i></li>
                    <li><i class="fas fa-sign-out-alt"></i></li>
                </ul>
            </div>
            <div class="dd_right">
                <ul>
                                
                    <li> <a href="/user/settings"> Settings</a </li>
                    <li>Favorites</li>
                        <li><a href="/uitloggen"> Logout</a></li>
                    </ul>
                </div>
            </div>
    </div>


</nav>
<?php endif;  ?>
