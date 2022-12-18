<?php 

namespace Strategy\src\Models; 

use Strategy\src\Interfaces\IHealthPlan;  


class Unimed extends IHealthPlan
{
    function Calculate() : float
    {
        return 50.0;
    }
}