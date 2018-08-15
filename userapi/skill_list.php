<?php
require_once '../include/config.php';

$output=skillList();

echo $output;

mysqli_close($con);
?>