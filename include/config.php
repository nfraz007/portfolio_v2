<?php
    session_start();
    require_once __DIR__."/../my_config.php";
    
    $server   = HOSTNAME;
    $username = USERNAME;
    $password = PASSWORD;
    $database = DATABASE;
       
    date_default_timezone_set('Asia/Kolkata');
    $con=mysqli_connect($server,$username,$password,$database) or die ("could not connect to mysql");

    $DATETIME_FORMAT="j M Y";

    $NAME="Nazish Fraz";
    $PROFESSION="Web Developer";
    $EMAIL="nfraz007@gmail.com";
    $MOBILE="+91 9748277144";

    $HOSTNAME = BASE_URL;

    $RESUME="assets/resume/";
    $IMAGE="assets/image/";
    $ICON="assets/image/icon/";
    $INTERNSHIP="assets/image/internship/";
    $PROJECT="assets/image/project/";
    $CERTIFICATE="assets/image/certificate/";

    require_once 'function.php';
?>