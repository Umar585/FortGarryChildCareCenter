<?php
    $page = "gallery";
    $title = "GALLERY";
    include_once 'components/navbar.php';

    if(!isset($_SESSION['main_session_person'])){
        echo '<script>window.location.replace("mainaccess.php");</script>';
    }
    
    if(!isset($_SESSION['session_person'])){
        echo '<script>window.location.replace("index.php");</script>';
    }
?>
<div class="container mb-4">
    <!--title-->
    <h1 class="pt-4 text-center">Our Gallery</h1>

    <div class="row no-gutters">
        <div class="col-sm-3 ">
            <div class="border">
                <img src="assets/img/FGCCClogo.jpg" alt="Test"
                    style="width: 100%; object-fit: cover; max-height: 200px; min-height: 200px;">
            </div>
        </div>
        <div class="col-sm-3 ">
            <div class="border">
                <img src="assets/img/element5-digital2.jpg" alt="Test"
                    style="width: 100%; object-fit: cover; max-height: 200px; min-height: 200px;">
            </div>
        </div>
        <div class="col-sm-3 ">
            <div class="border">
                <img src="assets/img/location.jpg" alt="Test"
                    style="width: 100%; object-fit: cover; max-height: 200px; min-height: 200px;">
            </div>
        </div>
        <div class="col-sm-3 ">
            <div class="border">
                <img src="assets/img/location2.jpg" alt="Test"
                    style="width: 100%; object-fit: cover; max-height: 200px; min-height: 200px;">
            </div>
        </div>
        <div class="col-sm-3 ">
            <div class="border">
                <img src="assets/img/marisa-howenstine2.jpg" alt="Test"
                    style="width: 100%; object-fit: cover; max-height: 200px; min-height: 200px;">
            </div>
        </div>
        <div class="col-sm-3 ">
            <div class="border">
                <img src="assets/img/robert-collins2.jpg" alt="Test"
                    style="width: 100%; object-fit: cover; max-height: 200px; min-height: 200px;">
            </div>
        </div>
    </div>
</div>
<?php
    include_once 'components/footer.php';
?>