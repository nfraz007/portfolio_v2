<?php
require_once '../include/config.php';

$output=projectList();

echo $output;

mysqli_close($con);
?>