<?php


namespace GildedRose\Entities;


use GildedRose\Item;

class Sulfuras extends Item{


    public function __construct(string $name, int $sell_in, int $quality)
    {
        parent::__construct($name, $sell_in, $quality);
    }

    public function CalculateSellIn(): Item
    {
        return new Sulfuras($this->name, $this->sell_in,$this->quality);
    }

    public function CalculateQuality(): Item
    {
        return new Sulfuras($this->name, $this->sell_in, $this->quality);
    }
}