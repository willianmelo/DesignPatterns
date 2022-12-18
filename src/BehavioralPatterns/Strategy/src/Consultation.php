<?php 

namespace Strategy\src; 

use Strategy\src\Interfaces\IHealthPlan;  

class Consultation
{
    function CalculateValue(IHealthPlan $healthPlan) : float
    {
        return $healthPlan->Calculate();
    }
}