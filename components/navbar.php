<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Fort Garry Child Care Center">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="keywords" content="Child, Care, Fort Garry, Day Care, Learning, Playing, Website">
    <meta name="author" content="FORT GARRY CHILD CARE CENTER">
    <title><?php echo 'FGCCC | '.$title ?></title>
    <!--favicon-->
    <link rel="icon" href="./assets/img/FGCCCicon.jpg">
    <!--cloudflare css cdn-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <!-- BOOTSTRAP CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/style.css?v=<?php echo time(); ?>" />
</head>

<body style="<?php if($subpage === 'boardandstaff'){echo 'background-color: lightgray;';}else{echo '';}?>">
    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-light shadow">
        <div class="container">
            <!--logo-->
            <a class="navbar-brand" href="./index.php"><img src="assets/img/FGCCClogo.jpg" alt="FGCCCLogo"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!--nav links-->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto text-center">
                    <!--link-->
                    <li class="nav-item">
                        <a class="nav-link <?php if($page === 'index'){echo 'nav-active-link';}else{echo '';}?>"
                            href="./index.php" title="HOME" aria-label="HOME">Home</a>
                    </li>
                    <!--link-->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle <?php if($page === 'aboutus'){echo 'nav-active-link';}else{echo '';}?>"
                            href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false" title="ABOUT US" aria-label="ABOUT US">
                            About Us
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item <?php if($subpage === 'ourmission'){echo 'nav-active-link';}else{echo '';}?>"
                                href="./ourmission.php" title="OUR MISSION" aria-label="OUR MISSION">Our Mission</a>
                            <?php
                                if(isset($_SESSION['session_person'])){?>
                            <a class="dropdown-item <?php if($subpage === 'boardandstaff'){echo 'nav-active-link';}else{echo '';}?>"
                                href="./boardandstaff.php" title="BOARD AND STAFF" aria-label="BOARD AND STAFF">Board
                                And Staff</a>
                            <a class="dropdown-item <?php if($subpage === 'newsandevents'){echo 'nav-active-link';}else{echo '';}?>"
                                href="./events.php" title="EVENTS" aria-label="EVENTS">Events</a>
                            <?php } ?>
                            <a class="dropdown-item <?php if($subpage === 'termsandpolicy'){echo 'nav-active-link';}else{echo '';}?>"
                                href="./termsandpolicy.php" title="TERMS & POLICY" aria-label="TERMS & POLICY">Terms &
                                Policy</a>
                        </div>
                    </li>
                    <!--link-->
                    <li class="nav-item">
                        <a class="nav-link text-danger <?php if($page === 'covid'){echo 'nav-active-link';}else{echo '';}?>"
                            href="./covid.php" title="Covid" aria-label="Covid">Covid-19</a>
                    </li>
                    <!--link-->
                    <li class="nav-item">
                        <a class="nav-link <?php if($page === 'contactus'){echo 'nav-active-link';}else{echo '';}?>"
                            href="./getintouch.php" title="CONTACTUS" aria-label="CONTACTUS">Contact Us</a>
                    </li>
                    <!--link-->
                    <li class="nav-item">
                        <a class="nav-link <?php if($page === 'programs'){echo 'nav-active-link';}else{echo '';}?>"
                            href="./programs.php" title="PROGRAMS" aria-label="PROGRAMS">Programs</a>
                    </li>
                    <!--link-->
                    <?php if(isset($_SESSION['session_person'])){?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle <?php if($page === 'parents' || $page === 'gallery'){echo 'nav-active-link';}else{echo '';}?>"
                            href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false" title="PARENTS" aria-label="PARENTS">
                            Parents
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item <?php if($page === 'parents'){echo 'nav-active-link';}else{echo '';}?>"
                                href="./parents.php" title="FORMS AND APPLICATIONS"
                                aria-label="FORMS AND APPLICATIONS">Forms and Applications</a>
                                
                            <a class="dropdown-item <?php if($page === 'gallery'){echo 'nav-active-link';}else{echo '';}?>"
                                href="./gallery.php" title="GALLERY" aria-label="GALLERY">Gallery</a>
                                
                        </div>
                    </li>
                    <?php } ?>
                    <li class="nav-item">
                        <a class="nav-link <?php if($page === 'careers'){echo 'nav-active-link';}else{echo '';}?>"
                            href="./careers.php" title="CAREERS" aria-label="CAREERS">Careers</a>
                    </li>
                    <?php
                        if(isset($_SESSION['session_person'])){
                            ?>
                    <!--link-->
                    <li class="nav-item">
                        <a class="nav-link nav-active-link bg-success" href="./logout.php" title="PARENT LOGOUT"
                            aria-label="PARENT LOGOUT">Logout</a>
                    </li>
                    <?php
                        }else{
                    ?>
                    <!--link-->
                    <li class="nav-item">
                        <a class="nav-link nav-active-link <?php if($page === 'login'){echo 'nav-active-link';}else{echo '';}?>"
                            href="./login.php" id="loginlink" title="PARENT LOGIN" aria-label="PARENT LOGIN">Parent
                            Login</a>
                    </li>
                    <?php
                        }
                    ?>
                    <li>
                        <a class="nav-link" href="./mainlock.php" id="locklink" title="PARENT LOGIN" aria-label="PARENT LOGIN">Lock Site</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="icon-bar">
        <a href="tel:2044537600" title="PHONE" rel="noreferrer" aria-label="phone link" class="phone"><i
                class="fa fa-phone"></i></a>
        <a href="mailto:fgcc@mts.net" title="EMAIL" rel="noreferrer" aria-label="Email link" class="google"><i
                class="fa fa-envelope"></i></a>
        <a href="./getintouch.php#locations" title="LOCATION" rel="noreferrer" aria-label="Locations link"
            class="map-pin"><i class="fa fa-map-pin"></i></a>
    </div>

    <div class="alarmmsg" style="display: none;">you geeting this message</div>