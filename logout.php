<?php
    unset($_SESSION["ID"]);
    unset($_SESSION['pass']);
    unset($_SESSION['islogin']);
    unset($_SESSION['type']);
    header("Location: login1.html");
?>