<?php
    $page = "login";
    $title = "LOGIN";
    include_once 'components/navbar.php';

    if(!isset($_SESSION['main_session_person'])){
        echo '<script>window.location.replace("mainaccess.php");</script>';
    }
    
    if(isset($_SESSION['session_person'])){
        echo '<script>window.location.replace("index.php");</script>';
    }
?>
<div class="container mb-4" style="padding-bottom: 200px;">
    <!--title-->
    <h1 class="pt-4 text-center">Parent Login</h1>
    <div class="card shadow mx-auto p-2" style="max-width: 500px;"><?php
            if(isset($_POST['parentsubmitbtn'])){
                if(isset($_POST['parentpass'])){
                    $pass = $_POST['parentpass'];
                    if($pass == 'Fgccckid123'){
                        $_SESSION['session_person'] = "test_person";
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
        <form id="parentform" method="post">
             <label for="parentpass">Please login to get access to full information.</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fa fa-lock"></i></div>
                </div>
                <input type="password" class="form-control" id="parentpass" name="parentpass" placeholder="Password" required>
            </div>
            <input type="submit" class="form-control mt-2 btn btn-primary" id="parentsubmitbtn" name="parentsubmitbtn" value="Login">
        </form>
        
    </div>
</div>
<?php
    include_once 'components/footer.php';
?>