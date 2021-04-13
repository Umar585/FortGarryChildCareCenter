<?php
    $page = "index";
    $title = "HOME";
    include_once 'components/navbar.php';

    if(!isset($_SESSION['main_session_person'])){
        echo '<script>window.location.replace("mainaccess.php");</script>';
    }
?>
<div id="indexpage">
    <div id="covid-warning" class="alert alert-warning rounded-0 w-100"
        style="position: absolute; z-index:99; height:50px;">
        <p class="text-center">How are we fighting covid-19? <a href="covid.php" title="Covid-Program" rel="noreferrer"
                aria-label="Covid-Program" style="padding: 0px;">Learn more</a> <a class="text-danger"
                onclick="$('#covid-warning').hide();"><i class="fa fa-times-circle"></i></a> </p>
    </div>
    <!--background img-->
    <div class="custom-bg-img">

        <div class="container animated fadeInLeft" style="animation-delay: 1s;">
            <!--img text-->
            <div class="img-text">
                <span class="h1"><span style="font-size: 50px;">W</span>e have many exciting things for your child to
                    discover.</span>
                <h1 id="second-heading"><span style="font-size: 50px;">C</span>heck out our
                    centers</h1>
            </div>
            <!--img btns-->
            <div class="list-inline">
                <a href="ourmission.php" class="list-inline-item btn text-white"
                    style="background-color: #2A9D8F !important;" title="LEARN MORE" rel="noreferrer"
                    aria-label="LEARN MORE">
                    <span class="h4"><i class="fa fa-books"></i> Learn More</span>
                </a>
                <a href="getintouch.php#locations" class="list-inline-item btn text-white"
                    style="background-color: #E76F51 !important;" title="FIND A LOCATION" rel="noreferrer"
                    aria-label="FIND A LOCATION">
                    <span class="h4"><i class="fa fa-map-pin"></i> Find A Location</span>
                </a>
            </div>
        </div>
    </div>

    <!--jumbotron -->
    <div class="jumbotron rounded-0" style="background-color: #374459 !important;">
        <div>
            <!--title -->
            <h1 class="text-center pb-4">What We Offer</h1>
            <!--row -->
            <div class="row">
                <!--cols -->
                <div class="col-md-3 text-center">
                    <span class="h3">Caring Educators</span><br>
                    <i class="fa fa-heart display-1 m-2"></i>
                    <h5>We truly do care!</h5>
                </div>
                <!--cols -->
                <div class="col-md-3 text-center">
                    <span class="h3">Safe Environment</span><br>
                    <i class="fa fa-user-shield display-1 m-2"></i>
                    <h5>Safety is our #1 priority</h5>
                </div>
                <!--cols -->
                <div class="col-md-3 text-center">
                    <span class="h3">Awesome Education</span><br>
                    <i class="fa fa-shapes display-1 m-2"></i>
                    <h5>Learning that lasts forever</h5>
                </div>
                <!--cols -->
                <div class="col-md-3 text-center">
                    <span class="h3">Smart Programs</span><br>
                    <i class="fa fa-graduation-cap display-1 m-2"></i>
                    <h5>Make your children smarter</h5>
                </div>
            </div>
        </div>
    </div>

    <!--bottom div -->
    <div class="bottom-div">
        <div class="container text-center">
            <div class="h1">We take great pride<br> in caring for your children</div>
            <div class="lead h4 mt-3">
                <p>We are designed to look after your children. They are our future!</p>
                <a href="https://www.gov.mb.ca/fs/childcare/occr/index.html" class="btn btn-info text-white mt-3 mb-3"
                    title="ENROLL NOW" rel="noreferrer" aria-label="ENROLL NOW" target="_blank"><span class="h5">
                        Go on our waiting list <i class="fa fa-chevron-right"></i></span></a>
                <div class="lead h4 mt-3">
                    <p>Have any questions? <a href="./getintouch.php" title="CONTACT" rel="noreferrer"
                            aria-label="CONTACT">Contact us</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
    include_once 'components/footer.php';
?>