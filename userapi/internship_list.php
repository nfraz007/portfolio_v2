<?php
require_once '../include/config.php';

$output=internshipList();

echo $output;

mysqli_close($con);
?>