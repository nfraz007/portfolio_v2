<?php
require_once '../include/config.php';

$output=countData();

echo $output;

mysqli_close($con);
?>