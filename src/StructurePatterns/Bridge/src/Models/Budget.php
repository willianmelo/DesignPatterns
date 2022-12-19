<?php

namespace Bridge\src\Models;

class Budget
{
    public float $value;
    public string $date;

    public function __construct(Float $value, string $date)
    {
        $this->value = $value;
        $this->date = $date;
    }
}