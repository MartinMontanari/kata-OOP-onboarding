<?php


namespace GildedRose;


use GildedRose\Entities\AgedBrie;
use GildedRose\Entities\BackstagePasses;
use GildedRose\Entities\Regular;
use GildedRose\Entities\Sulfuras;

static class ItemFactory
{
    static function CreateItemFromType(string $name, int $sell_in, int $quality) : Item{
        switch ($name){
            case "Sulfuras, Hand of Ragnaros":
                return new Sulfuras($name, $sell_in, $quality);
            case "Aged Brie":
                return new AgedBrie($name,$sell_in,$quality);
            case "Backstage passes to a TAFKAL80ETC concert":
                return new BackstagePasses($name, $sell_in, $quality);
            default:
                return new Regular($name,$sell_in,$quality);
        }
    }
}