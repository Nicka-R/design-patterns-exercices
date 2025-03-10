<?php
// require('../vendor/autoload.php');
require_once __DIR__ . '/../vendor/autoload.php';
# Essayer d'utiliser votre factory ici

use App\Factory\VehicleFactory;

$bicycle = VehicleFactory::createVehicle('bicycle');
echo "Bicycle cost per km: " . $bicycle->getCostPerKm() . "\n";
echo "Bicycle fuel type: " . $bicycle->getFuelType() . "\n";

$car = VehicleFactory::createVehicle('car');
echo "Car cost per km: " . $car->getCostPerKm() . "\n";
echo "Car fuel type: " . $car->getFuelType() . "\n";

$truck = VehicleFactory::createVehicle('truck');
echo "Truck cost per km: " . $truck->getCostPerKm() . "\n";
echo "Truck fuel type: " . $truck->getFuelType() . "\n";

$vehicle = VehicleFactory::createVehicleByCriteria(15, 10);
echo "Vehicle (15km, 10kg) cost per km: " . $vehicle->getCostPerKm() . "\n";
echo "Vehicle (15km, 10kg) fuel type: " . $vehicle->getFuelType() . "\n";

$vehicle = VehicleFactory::createVehicleByCriteria(25, 50);
echo "Vehicle (25km, 50kg) cost per km: " . $vehicle->getCostPerKm() . "\n";
echo "Vehicle (25km, 50kg) fuel type: " . $vehicle->getFuelType() . "\n";
