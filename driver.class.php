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
    $map = fopen("map.csv", "a+");
    $track = $road;
    $counter = null;
    foreach ($track as $turns) {
      if ($turns === "l") {
        $map[] = $turns;
        $counter += 1;
      } else if ($turns === "s") {
        $map[] = $turns;
        $counter += 2;
      } else {
        $map[] = $turns;
        $counter += 3;
      }
    }
    $map = $counter;
    fclose($map);
  }
}
