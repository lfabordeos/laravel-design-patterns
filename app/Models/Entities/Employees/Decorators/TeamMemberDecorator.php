<?php

namespace App\Models\Entities\Employees\Decorators;

use App\Models\Entities\Employees\Decorators\BaseEmployeeDecorator;

class TeamMemberDecorator extends BaseEmployeeDecorator
{
    public function performTask()
    {
        echo $this->getName().": Performing TeamMember task.<br/>";
    }

    public function coordinateWithOtherMembers()
    {
        echo $this->getName().": Coordinating with other members.<br/>";
    }
}