<?php

declare(strict_types=1);

namespace GildedRose;

final class GildedRose
{
    /**
     * @var Item[]
     */
    private array $items;

    public function __construct(array $items)
    {
        $this->items = $items;
    }

    public function createItems(): void
    {
        $this->items[0] = ItemFactory::CreateItemFromType("Aged Brie", 2, 0);
        $this->Items[1] = ItemFactory::CreateItemFromType("Elixir of the Mongose", 5, 7);
        $this->Items[2] = ItemFactory::CreateItemFromType("Sulfuras, Hand of Ragnaros", 0, 80);
        $this->Items[3] = ItemFactory::CreateItemFromType("Backstage passes to a TAFKAL80ETC concert", 15, 20);
    }

    public function updateQuality(): void
    {
        foreach ($this->items as $item) {
            $item->CalculateSellIn().CalculateQuality();
        }
    }
}
