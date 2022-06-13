<?php
logout();

function logout(){


    unset($_SESSION['username']);

    header("Location: ../forms/login.html");

}

