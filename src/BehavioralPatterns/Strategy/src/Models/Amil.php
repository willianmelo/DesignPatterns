<?php 

namespace Strategy\src\Models; 

use Strategy\src\Interfaces\IHealthPlan;  


class Amil implements IHealthPlan
{
    function Calculate() : float
    {
        return 60.0;
    }
}