<?php


namespace GildedRose\Entities;


use GildedRose\Item;

class Regular extends Item
{
    public function __construct(string $name, int $sell_in, int $quality)
    {
        parent::__construct($name, $sell_in, $quality);
    }

    public function CalculateSellIn(): Item
    {
        return new BackstagePasses($this->name, $this->sell_in - 1, $this->quality);
    }

    public function CalculateQuality(): Item
    {
        if ($this->quality > 0) {
            if ($this->sell_in < 0) {
                return new BackstagePasses($this->name, $this->sell_in, $this->quality - 2);
            } else {
                return new BackstagePasses($this->name, $this->sell_in, $this->quality - 1);
            }
        }
        return new BackstagePasses($this->name, $this->sell_in, $this->quality);
    }
}