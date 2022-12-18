<?php

namespace ChainResponsibility\src\Services;

use ChainResponsibility\src\Interfaces\ICalculateDiscount;
use ChainResponsibility\src\Models\Ticket;

class NoDiscount implements ICalculateDiscount
{
    public ICalculateDiscount $CalculateDiscount;
    
    function Calculate(Ticket $ticket): float
    {
        return 0;
    }
}