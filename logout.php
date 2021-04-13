<?php

session_start();

if(isset($_SESSION['session_person'])){
    //session_destroy();
    unset($_SESSION['session_person']);
    header('Location: index.php');
}