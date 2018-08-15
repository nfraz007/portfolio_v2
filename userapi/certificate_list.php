<?php
require_once '../include/config.php';

$output=certificateList();

echo $output;

mysqli_close($con);
?>