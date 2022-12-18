<?php 

namespace Strategy\src\Models; 

use Strategy\src\Interfaces\IHealthPlan;  


class Amil extends IHealthPlan
{
    function Calculate() : float
    {
        return 60.0;
    }
}