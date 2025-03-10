<?php

namespace Test;

use PHPUnit\Framework\TestCase;
use App\Laptop;
use App\GPU;
use App\OLEDScreen;

class ComputerDecoratorTest extends TestCase
{
    public function testBasicLaptop()
    {
        $laptop = new Laptop();
        
        $this->assertSame(400, $laptop->getPrice());
        $this->assertSame("A laptop computer", $laptop->getDescription());
    }

    public function testLaptopWithGPU()
    {
        $laptop = new Laptop();
        $laptopWithGPU = new GPU($laptop);
        
        $this->assertSame(550, $laptopWithGPU->getPrice());
        $this->assertSame("A laptop computer, with a GPU", $laptopWithGPU->getDescription());
    }

    public function testLaptopWithOLEDScreen()
    {
        $laptop = new Laptop();
        $laptopWithOLEDScreen = new OLEDScreen($laptop);
        
        $this->assertSame(600, $laptopWithOLEDScreen->getPrice());
        $this->assertSame("A laptop computer, with an OLED screen", $laptopWithOLEDScreen->getDescription());
    }
}