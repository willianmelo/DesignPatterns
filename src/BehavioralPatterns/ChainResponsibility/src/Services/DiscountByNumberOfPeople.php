<?php

namespace ChainResponsibility\src\Services;

use ChainResponsibility\src\Interfaces\ICalculateDiscount;
use ChainResponsibility\src\Models\Ticket;

class DiscountByNumberOfPeople implements ICalculateDiscount
{
    public ICalculateDiscount $Next;
    
    function Calculate(Ticket $ticket): float
    {
        if($ticket->numberOfPeople > 5)
        {
            return 0.10;
        }

        return $this->Next->Calculate($ticket);
    }
}