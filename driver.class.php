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
  function set_road($road)
  {
    $this->road = $road;
  }
  function get_road()
  {
    return $this->road;
  }

  //Get, set for car
  function set_car($car)
  {
    $this->car = $car;
  }
  function get_car()
  {
    return $this->car;
  }
}

$track1 = new Driver();
$track1->set_road("test");


$fRoad = fopen("./road.csv", "r") or die("Unable to open file!");
$makeRoad = fopen("./road.csv", "w") or die("Unable to open file!");
