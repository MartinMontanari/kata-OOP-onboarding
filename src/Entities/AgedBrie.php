<?php


namespace GildedRose\Entities;

use GildedRose\Item;

class AgedBrie extends Item
{
    public function __construct(string $name, int $sell_in, int $quality)
    {
        parent::__construct($name, $sell_in, $quality);
    }

    public function CalculateSellIn(): Item
    {
        return new AgedBrie($this->name, $this->sell_in - 1, this . $this->quality);
    }

    public function CalculateQuality(): Item
    {
        if ($this.Quality < 50) {
            return new AgedBrie($this . $this->name, $this->sell_in, $this->quality + 1)
        }
    }
}