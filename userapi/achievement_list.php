<?php
require_once '../include/config.php';

$output=achievementList();

echo $output;

mysqli_close($con);
?>