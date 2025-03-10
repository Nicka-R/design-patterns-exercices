<?php

namespace App\Factory;

use App\Entity\Bicycle;
use App\Entity\Car;
use App\Entity\Truck;
use App\Entity\VehicleInterface;

class VehicleFactory {
    public static function createVehicle(string $type): VehicleInterface {
        switch ($type) {
            case 'bicycle':
                return new Bicycle(0.1, 'human');
            case 'car':
                return new Car(0.5, 'gasoline');
            case 'truck':
                return new Truck(1.0, 'diesel');
            default:
                throw new \InvalidArgumentException("Unknown vehicle type");
        }
    }

    public static function createVehicleByCriteria(float $distance, float $weight): VehicleInterface {
        if ($distance < 20 && $weight < 20) {
            return new Bicycle(0.1, 'human');
        } elseif ($weight > 200) {
            return new Truck(1.0, 'diesel');
        } else {
            return new Car(0.5, 'gasoline');
        }
    }
}