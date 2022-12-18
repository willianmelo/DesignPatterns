<?php 

namespace Strategy\src\Models; 

use Strategy\src\Interfaces\IHealthPlan;  


class Sulamerica extends IHealthPlan
{
    function Calculate() : float
    {
        return 70.0;
    }
}