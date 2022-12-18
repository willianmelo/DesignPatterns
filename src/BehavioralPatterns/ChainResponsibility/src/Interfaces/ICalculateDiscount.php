<?php

namespace ChainResponsibility\src\Interfaces;

use ChainResponsibility\src\Models\Ticket;

interface ICalculateDiscount
{
    function Calculate(Ticket $ticket): float;
}