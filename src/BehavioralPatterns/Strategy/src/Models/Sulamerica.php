<?php 

namespace Strategy\src\Models; 

use Strategy\src\Interfaces\IHealthPlan;  


class Sulamerica implements IHealthPlan
{
    function Calculate() : float
    {
        return 70.0;
    }
}