<?php

session_start();

if(isset($_SESSION['main_session_person'])){
    session_destroy();
    unset($_SESSION['main_session_person']);
    header('Location: mainaccess.php');
}