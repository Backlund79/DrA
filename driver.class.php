<?php
// skapa en funktion som bygger en väg som består av 12 delar, det får aldrig förekomma mer än 2 svängar irad åt samma håll. 
// spara vägen i en csv fil
// 4 höger
// 4 raka
// 4 vänster

// Driver väljer väg för att testa sig fram vilken som är rätt. det skall finnas flera drivers att välja bland. 
// drivern skall ha någon form av egen intelligens, kunna lista ut vägen själv. 

// <<<< Behöver göras >>>>
// skrivas enligt OOP
// Spara till fil varje rätt resultat. 
// Skapa en funktion som slumpar fram en bana. 
// skapa en funktion som slumpar fram val och sparar dessa i fil om dom stämmer överens med vägen. 
// vid fel väg skicka med boolean value true/false från funktionen. 
// skriv ut antal försök för vald driver på sidan. 
// alt låta spelare välja själv och försöka lista ut rätt väg som ett komplement. 

class Driver
{
  //props
  public $road;
  public $car;


  //Get, set for Road
  public function setRoad($road)
  {
    $this->road = $road;
  }
  public function getRoad()
  {
    return $this->road;
  }

  //Get, set for car
  public function setCar($car)
  {
    $this->car = $car;
  }
  public function getCar()
  {
    return $this->car;
  }
  //generate map of road
  public function checkRoad($road)
  {

    $map = fopen("map.txt", "w");
    $tries = fopen("tries.txt", "w");
    $save = array();
    $track = $road;
    $c = 0;
    $print = array();

    foreach ($track as $turns) {
      if ($turns === "l") {
        $save = $turns;
      } else if ($turns === "s") {
        $save = $turns;
      } else {
        $save = $turns;
      }
    }

    foreach ($save as $value) {
      switch ($value) {
        case "l":
          $c += 1;
          $print[] = "Left";
          break;
        case "s":
          $c += 2;
          $print[] = "Straight";
          break;
        case "r":
          $c += 3;
          $print[] = "Right";
      }
    }
    fwrite($map, json_encode($save));
    fwrite($tries, print_r($c, true));
    fclose($map);
  }
}
