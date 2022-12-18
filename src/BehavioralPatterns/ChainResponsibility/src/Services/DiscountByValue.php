<?php

namespace ChainResponsibility\src\Services;

use ChainResponsibility\src\Interfaces\ICalculateDiscount;
use ChainResponsibility\src\Models\Ticket;

class DiscountByValue implements ICalculateDiscount
{
    public ICalculateDiscount $Next;
    
    function Calculate(Ticket $ticket): float
    {
        if($ticket->value > 1000)
        {
            return 0.06;
        }

        return $this->Next->Calculate($ticket);
    }
}