<?php

namespace App;

use SplSubject;
use SplObserver;

class MusicBand implements SplSubject
{
    // Hors exercice mais notable:
    // Promotion du constructeur: https://www.php.net/manual/fr/language.oop5.decon.php#language.oop5.decon.constructor.promotion
    private array $observers = [];

    public function __construct(
        private string $name,
        private array $concerts = []
    ) {}

    public function addNewConcertDate(string $date, string $location): void
    {
        $this->concerts[] = [
            'date' => $date,
            'location' => $location
        ];
        $this->notify();
    }

    public function attach(SplObserver $observer): void
    {
        $this->observers[] = $observer;
    }

    public function detach(SplObserver $observer): void
    {
        $key = array_search($observer, $this->observers, true);
        if ($key !== false) {
            unset($this->observers[$key]);
        }
    }

    public function notify(): void
    {
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }
}