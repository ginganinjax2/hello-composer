<?php
declare(strict_types=1);

namespace ginganinjax2\HelloComposer;

class Collection
{
    private array $items;

    public function __construct(array $items = [])
    {
        $this->items = $items;
    }

    public function toArray(): array
    {
        return $this->items;
    }

    public function push($item): void
    {
        $this->items[] = $item;
    }

    public function get($index = null)
    {
        if (isset($this->items[$index])) {
            return $this->items[$index];
        }

        return $this->items[0] ?? null;
    }
}
