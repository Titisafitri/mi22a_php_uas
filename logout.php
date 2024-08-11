<?php
     /**
     * NIM : 2257401022
     * NAMA : TITI SAFITRI
     * KELAS MI22A
     */ 
    session_start();
    session_destroy();
    session_unset();

    header('location:login.php');
?>