<?php 

namespace Strategy\src\Models; 

use Strategy\src\Interfaces\IHealthPlan;  


class Unimed implements IHealthPlan
{
    function Calculate() : float
    {
        return 50.0;
    }
}