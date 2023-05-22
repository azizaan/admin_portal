<?php
 
/**
 * Database config variables
 */
define("HOST", "localhost");
define("USER", "root");
define("PASS", "");
define("DB", "login-dashboard");

 
 //Connecting to database
 $con = mysqli_connect(HOST,USER,PASS,DB) or die('Unable to Connect');
