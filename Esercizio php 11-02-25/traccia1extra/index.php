<?php
class Vehicle {
    public $brand;
    public $model;
    public $year;
    public $mileage;
    public $fuelConsumption;
    public static $counterVehicles = 0;

    public function __construct($brand, $model, $year, $mileage, $fuelConsumption) {
        $this->brand = $brand;
        $this->model = $model;
        $this->year = $year;
        $this->mileage = $mileage;
        $this->fuelConsumption = $fuelConsumption;
        self::$counterVehicles++;
    }

    public function printTheCar() {
        if ($this->mileage == 0) {
            echo "La macchina $this->brand $this->model del $this->year è nuova di fabbrica \n";
        } else {
            echo "La macchina $this->brand $this->model del $this->year ha percorso $this->mileage \n";
        }
    }
    public static function priceOfKilometers($km){
        $fuelPrice = 1.69;
        $priceKilometers = $km * $fuelPrice;
        return $priceKilometers;
    }
    public static function printThePriceOfKilometers($km) {
        $priceKilometers = self::priceOfKilometers($km);
        echo "Per $km kilometri spenderai $priceKilometers euro \n"; 
    }
    public static function printTheCountOfVehicles() {
        echo "Sono state fabbricate " . self::$counterVehicles . " macchine \n";
    }
}
   

$vehicle1 = new Vehicle("Toyota", "Corolla", 2020, 25000, 6.5);
$vehicle1->printTheCar();
Vehicle::printTheCountOfVehicles();

$vehicle2 = new Vehicle("Ford", "Mustang", 2019, 0, 12.0);
$vehicle2->printTheCar();
Vehicle::printTheCountOfVehicles();


$vehicle3 = new Vehicle("Tesla", "Model 3", 2021, 15000, 0);
$vehicle3->printTheCar();
Vehicle::printTheCountOfVehicles();

$vehicle4 = new Vehicle("Honda", "Civic", 2018, 45000, 7.2);
$vehicle4->printTheCar();
Vehicle::printTheCountOfVehicles();

$vehicle5 = new Vehicle("BMW", "X5", 2022, 0, 9.8);
$vehicle5->printTheCar();
Vehicle::printTheCountOfVehicles();

Vehicle::printThePriceOfKilometers(100);
