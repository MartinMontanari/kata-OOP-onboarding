<?php

declare(strict_types=1);

namespace GildedRose;


abstract class Item
{
    /**
     * @var string
     */
    protected string $name;

    /**
     * @var int
     */
    protected int $sell_in;

    /**
     * @var int
     */
    protected int $quality;

    public function __construct(string $name, int $sell_in, int $quality)
    {
        $this->name = $name;
        $this->sell_in = $sell_in;
        $this->quality = $quality;
    }

    public function __toString(): string
    {
        return "{$this->name}, {$this->sell_in}, {$this->quality}";
    }

    abstract function CalculateSellIn() : Item;

    abstract function CalculateQuality() : Item;
}
