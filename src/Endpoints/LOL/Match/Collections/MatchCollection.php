<?php
namespace App\Endpoints\LOL\Match\Collections;

use App\Collections\BaseCollectionInterface;

class MatchCollection implements BaseCollectionInterface, \Countable, \IteratorAggregate
{
    private array $items = [];
    public function add($dto): void
    {
        $this->items[] = $dto;
    }
    public function getIterator(): \ArrayIterator
    {
        return new \ArrayIterator($this->items);
    }
    public function count(): int
    {
        return count($this->items);
    }
    public function toArray(): array
    {
        return $this->items;
    }
}