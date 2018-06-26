<?php

namespace App\Models\Entities\Employees\Decorators;

use App\Models\Entities\Employees\Contracts\EmployeeContract;
use App\Models\Entities\Employees\Decorators\BaseEmployeeDecorator;

class TeamLeaderDecorator extends BaseEmployeeDecorator
{
    public function performTask()
    {
        echo $this->getName().": Performing TeamLeader task.<br/>";
    }

    public function planTasks()
    {
        echo $this->getName().": Planning tasks.<br/>";
    }

    public function motivateTeam()
    {
        echo $this->getName().": Motivating team.<br/>";
    }

    public function coordinateTeam()
    {
        echo $this->getName().": Coordinating team.<br/>";
    }
}