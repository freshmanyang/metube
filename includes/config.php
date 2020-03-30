<?php

// error report setting
ini_set("display_errors", 1);
ini_set("track_errors", 1);
ini_set("html_errors", 1);
error_reporting(E_ALL);

ob_start(); /* Open the output buffer. All output information is not directly sent to the browser
                   but stored in the output buffer. Use callback function to process the output result
                   information. */

session_start(); /* enable sesson */

date_default_timezone_set("America/New_York"); /* timezone setting */


/* use PDO to connection database rather than using mysqli_init()*/
const DSN = "mysql:host=127.0.0.1:8889;dbname=MeTube";
const USER_NAME = "root";
const PASSWD = "root";

try {
    $conn = new PDO(DSN, USER_NAME, PASSWD);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}