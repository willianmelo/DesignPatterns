<?php

require_once 'autoload.php';

use ChainResponsibility\src\Models\Ticket;
use ChainResponsibility\src\Services\DiscountCalculator;


$ticket = new Ticket(6, 500.00);
$discountCalculator = new DiscountCalculator();

$discount = $discountCalculator->Run($ticket);

echo $discount;