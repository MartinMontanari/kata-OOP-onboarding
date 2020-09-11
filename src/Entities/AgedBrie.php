<?php


namespace GildedRose\Entities;


use GildedRose\Item;

/**
 * Class AgedBrie
 * @package GildedRose\Entities
 */
class AgedBrie extends Item
{
    public function __construct(string $name, int $sell_in, int $quality)
    {
        parent::__construct($name, $sell_in, $quality);
    }

    /**
     * @return Item
     */
    function CalculateSellIn(): Item
    {
        return new AgedBrie($this->name, $this->sell_in - 1, $this->quality);
    }

    /**
     * @return Item
     *
     */
    public function CalculateQuality(): Item
    {
        if ($this->quality < 50) {
            return new AgedBrie($this->name, $this->sell_in, $this->quality + 1);
        }

        return new AgedBrie(); //TODO revisar que carajos éste que creí que estaba mal, no entendiste como carajo funciona un IF hermano.
    }


}