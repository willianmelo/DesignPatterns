<?php 

namespace ChainResponsibility\src\Services;

use ChainResponsibility\src\Services\{DiscountByValue, DiscountByNumberOfPeople, NoDiscount};
use ChainResponsibility\src\Models\Ticket;

class DiscountCalculator
{
    function Run(Ticket $ticket): float
    {
        $discountByValue = new DiscountByValue();
        $discountByNumberOfPeople = new DiscountByNumberOfPeople();
        $noDiscount = new NoDiscount();

        $discountByValue->Next = $discountByNumberOfPeople;
        $discountByNumberOfPeople->Next = $noDiscount;

        return $discountByValue->Calculate($ticket);
    }
}