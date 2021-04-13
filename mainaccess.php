<?php
    $page = "main access";
    $title = "MAIN ACCESS";
    session_start();
    if(isset($_SESSION['main_session_person'])){
        echo '<script>window.location.replace("index.php");</script>';
    }
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
<div class="container mb-4" style="padding-bottom: 200px;">
    <img src="./assets/img/FGCCClogo.jpg" alt="logo" width="200" class="text-center mx-auto">
    <!--title-->
    <h1 class="pt-4 text-center">FG Login</h1>
    <div class="card shadow mx-auto p-2" style="max-width: 500px;"><?php
            if(isset($_POST['mainaccesssubbtn'])){
                if(isset($_POST['mainaccesspass'])){
                    $pass = $_POST['mainaccesspass'];
                    if($pass == 'Fgccckid123'){
                        $_SESSION['main_session_person'] = "main_test_person";
                        //header('Location: index.php');
                        echo '<script>window.location.replace("index.php");</script>'; //$_SESSION['session_person'];
                    }else{
                        ?>
                        <div class="alert alert-danger">Wrong Password. Try Again!</div>
                        <?php
                    }
                }
            }
        ?>
        <form id="mainaccessform" method="post">
             <label for="parentpass">Please login to get full access.</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fa fa-lock"></i></div>
                </div>
                <input type="password" class="form-control" id="mainaccesspass" name="mainaccesspass" placeholder="Password" required>
            </div>
            <input type="submit" class="form-control mt-2 btn btn-primary" id="mainaccesssubbtn" name="mainaccesssubbtn" value="Access">
        </form>
        
    </div>
</div>

<!-- BOOTSTRAP JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
    integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- CUSTOM JS -->
<script src="./assets/js/js.js?v=<?php echo time(); ?>"></script>

</body>

</html>