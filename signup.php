<?php
/*
 * signup PHP.
 * Author: Richie Liu, w17020293.
 */
require_once"functions.php";
ini_set("session.save_path", "/home/unn_w17020293/sessionData");
session_start();
    echo loadJS();
    echo makePageStart("Sign Up");
    echo makeNavBarWithoutAccount();
    echo makeHeader();
    echo startMain();  
    echo makeSignUpForm(); 
    echo endMain();
    echo makePageEnd();
    echo makeFooter();
?>