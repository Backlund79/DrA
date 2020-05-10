<?php

ini_set('display_error', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include_once 'driver.class.php';

$handle = fopen("./road.csv", "r");
$road = array_map('str_getcsv', file('road.csv'));
$filename = "./road.csv";
$track1 = new Driver();
$track1->setRoad($road);
$track1->checkRoad($road);



?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <input type="button" value="test" onclick="checkRoad()">
  <pre>
  <?php



  ?>
</pre>
</body>

</html>