<?php

ini_set('display_error', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include_once 'driver.class.php';

// $handle = fopen("./road.csv", "r");
$road = array_map('str_getcsv', file('road.csv'));
$filename = "./map.txt";
$track1 = new Driver();
$fromMap = json_decode(file_get_contents($filename), true);
$fromTries = file_get_contents("./tries.txt", true);
$files = array('map.txt', 'tries.txt');

if (array_key_exists('start', $_POST)) {
  $track1->setRoad($road);
  $track1->checkRoad($road);
  header("location: index.php");
}

if (array_key_exists('clear', $_POST)) {
  foreach ($files as $file) {
    unlink($file);
  }
  header("location: index.php");
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

  <div id="resault">
    <h1> Labb1 DRA Emil Backlund</h1>
    <p>Press button to try the road.</p>
    <form action="index.php" method="post">
      <input type="submit" value="RUN" name="start">
    </form>
    <form action="index.php" method="post">
      <input type="submit" value="clear" name="clear">
    </form>
    <?php
    foreach ($fromMap as $turns) {
      switch ($turns) {
        case "l":
          echo "Left <br>";
          break;
        case "s":
          echo "Stright <br>";
          break;
        case "r":
          echo "Right <br>";
          break;
      }
    }
    if (file_exists($filename)) {
      echo "<br><strong>It took me " . $fromTries . " tries to find my way out!</strong>";
    }

    ?>

  </div>
</body>

</html>