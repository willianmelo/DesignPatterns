<?php

namespace ChainResponsibility\src\Models;

class Ticket
{
    public int $numberOfPeople;
    public float $value;

    public function __construct(int $numberOfPeople, float $value)
    {
        $this->numberOfPeople = $numberOfPeople;
        $this->value = $value;
    }
}