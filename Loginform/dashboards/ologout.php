<?php

    session_start();
    session_destroy();
    unset($_SESSION['uname']);

    header("Location: ../Ownerlogin.php");

?>