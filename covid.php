<?php
    $page = "covid";
    $title = "COVID-19";
    include_once 'components/navbar.php';
    if(!isset($_SESSION['main_session_person'])){
        echo '<script>window.location.replace("mainaccess.php");</script>';
    }
?>
<div class="container mb-4">
<!--title-->
<h1 class="pt-4 text-center">Covid-19</h1>
    <!--title
    <h1 class="pt-4 text-center">Your Are Safe</h1>e-->
</div>
<?php
    include_once 'components/footer.php';
?>