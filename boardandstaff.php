<?php
    $page = "aboutus";
    $subpage = "boardandstaff";
    $title = "BOARD AND STAFF";
    include_once 'components/navbar.php';
    if(!isset($_SESSION['session_person'])){
        echo '<script>window.location.replace("index.php");</script>';
    }
    if(!isset($_SESSION['main_session_person'])){
        echo '<script>window.location.replace("mainaccess.php");</script>';
    }
?>
<div class="employees mb-4">
    <div class="container">
        <h1 class="text-center mt-4 text-white">Our Faculty</h1>
        <div class="jumbtron">
            <div class="text-center mt-3 img-text">
                <div>
                    <span class="h3">Looking to Join?</span>
                    <p class="lead">Head over to our careers page and <a href="careers.php" class="text-dark">Apply
                            Now</a>!</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <!--title-->
        <h2 class="mt-4" style="color: #2A9D8F;">Board Of Directors</h2>

        <p>The Board of Directors consists of nine members. At the annual general meeting, the
            membership elects the Board of Directors, which serves a two-year term. The Board acts
            on behalf of the membership in accordance with The Co-operatives Act and the Charter
            By-Laws.</p>
        <hr />

        <div class="row text-center">
            <div class="col-4 p-2">
                <h5>Tayla Feeney</h5>
                <small>President</small>
            </div>
            <div class="col-4 p-2">
                <h5>Marek Oneill</h5>
                <small>Founder</small>
            </div>
            <div class="col-4 p-2">
                <h5>Tracy Ratliff</h5>
                <small>President</small>
            </div>
            <div class="col-4 p-2">
                <h5>Louise Lynn</h5>
                <small>CEO</small>
            </div>
            <div class="col-4 p-2">
                <h5>Cristina Snow</h5>
                <small>Founder</small>
            </div>
            <div class="col-4 p-2">
                <h5>Bernice Owens</h5>
                <small>CEO</small>
            </div>
            <div class="col-4 p-2">
                <h5>Tessa Massey</h5>
                <small>President</small>
            </div>
            <div class="col-4 p-2">
                <h5>Kaison Field</h5>
                <small>Founder</small>
            </div>
            <div class="col-4 p-2">
                <h5>Virgil Kearney</h5>
                <small>CEO</small>
            </div>
        </div>

        <!--title-->
        <h2 class="mt-4" style="color: #2A9D8F;">Early Childhood Educators</h2>
        <p>Our professional, qualified, hard working, safe Early Childhood Educators work hard every day
            with each and every child
            <div class="row">
                <div class="col-sm-6">
                    <ul>
                        <li>Planning Fun and Exciting Activities</li>
                    </ul>
                </div>
                <div class="col-sm-6">
                    <ul>
                        <li>Teaching Safety and Fostering Independence</li>
                    </ul>
                </div>
            </div>
        </p>
        <hr />
        <div class="mt-4">
            <!--row -->
            <div class="row">
                <!--cols -->
                <div class="col-sm-3 col-6 text-center p-2">
                    <i class="fa fa-user-tie display-1 m-2"></i>
                    <p>Professional</p>
                </div>
                <!--cols -->
                <div class="col-sm-3 col-6 text-center p-2">
                    <i class="fa fa-check-square display-1 m-2"></i>
                    <p>Qualified</p>
                </div>
                <!--cols -->
                <div class="col-sm-3 col-6 text-center p-2">
                    <i class="fa fa-briefcase display-1 m-2"></i>
                    <p>Hard Working</p>
                </div>
                <!--cols -->
                <div class="col-sm-3 col-6 text-center p-2">
                    <i class="fa fa-hard-hat display-1 m-2"></i>
                    <p>Safe</p>
                </div>
            </div>
        </div>

        <!--title MITT-->
        <h4 class="mt-4" style="color: #2A9D8F;">Manitoba Institute of Trades and Technology</h4>
        <hr />
        <div class="row text-center">
            <div class="col-4 p-2">
                <h5>Tayla Feeney</h5>
                <small>Supervisor</small>
            </div>
            <div class="col-4 p-2">
                <h5>Marek Oneill</h5>
                <small>Child Educator</small>
            </div>
            <div class="col-4 p-2">
                <h5>Tracy Ratliff</h5>
                <small>Volunteer</small>
            </div>
            <div class="col-4 p-2">
                <h5>Tayla Feeney</h5>
                <small>Supervisor</small>
            </div>
            <div class="col-4 p-2">
                <h5>Marek Oneill</h5>
                <small>Child Educator</small>
            </div>
            <div class="col-4 p-2">
                <h5>Tracy Ratliff</h5>
                <small>Volunteer</small>
            </div>
        </div>

        <!--title MITT-->
        <h4 class="mt-4" style="color: #2A9D8F;">Oakenwald School</h4>
        <hr />
        <div class="row text-center">
            <div class="col-4 p-2">
                <h5>Tayla Feeney</h5>
                <small>Supervisor</small>
            </div>
            <div class="col-4 p-2">
                <h5>Marek Oneill</h5>
                <small>Child Educator</small>
            </div>
            <div class="col-4 p-2">
                <h5>Tracy Ratliff</h5>
                <small>Volunteer</small>
            </div>
        </div>

        <!--title MITT-->
        <h4 class="mt-4" style="color: #2A9D8F;">Ecole Viscount Alexander</h4>
        <hr />
        <div class="row text-center">
            <div class="col-4 p-2">
                <h5>Tayla Feeney</h5>
                <small>Supervisor</small>
            </div>
            <div class="col-4 p-2">
                <h5>Marek Oneill</h5>
                <small>Child Educator</small>
            </div>
            <div class="col-4 p-2">
                <h5>Tracy Ratliff</h5>
                <small>Volunteer</small>
            </div>
            <div class="col-4 p-2">
                <h5>Ratliff Oneill</h5>
                <small>Child Educator</small>
            </div>
            <div class="col-4 p-2">
                <h5>Tracy Oneill</h5>
                <small>Volunteer</small>
            </div>
        </div>

        <!--title MITT-->
        <h4 class="mt-4" style="color: #2A9D8F;">Henry G. Izatt Middle School</h4>
        <hr />
        <div class="row text-center">
            <div class="col-4 p-2">
                <h5>Tayla Feeney</h5>
                <small>Supervisor</small>
            </div>
            <div class="col-4 p-2">
                <h5>Marek Oneill</h5>
                <small>Child Educator</small>
            </div>
            <div class="col-4 p-2">
                <h5>Tracy Ratliff</h5>
                <small>Volunteer</small>
            </div>
        </div>
    </div>
    <?php
    include_once 'components/footer.php';
?>