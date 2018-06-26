<?php

namespace App\Models\Entities\Employees\Decorators;

use App\Models\Entities\Employees\Contracts\EmployeeContract;
use App\Models\Entities\Employees\Decorators\BaseEmployeeDecorator;

class ManagerDecorator extends BaseEmployeeDecorator
{
    public function assignTask()
    {
        echo $this->getName().": Assigning task.<br/>";
    }

    public function profileEmployee()
    {
        echo $this->getName().": Profiling employee.<br/>";
    }

    public function createRequirements()
    {
        echo $this->getName().": Creating project requirements.<br/>";
    }
}