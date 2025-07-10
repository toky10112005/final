<?php
    session_start();

    $_SESSSION['emp_no']=$_GET['emp_no'];
    header('Location:fiche.php');
?>