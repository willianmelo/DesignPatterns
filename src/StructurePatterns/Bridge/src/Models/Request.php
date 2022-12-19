<?php

namespace Bridge\src\Models;

class Request
{
    public string $clientName;
    public string $date;

    public function __construct(string $clientName, string $date)
    {
        $this->clientName = $clientName;
        $this->date = $date;
    }
}