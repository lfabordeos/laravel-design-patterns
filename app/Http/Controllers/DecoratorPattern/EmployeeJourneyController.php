<?php

namespace App\Http\Controllers\DecoratorPattern;

use App\Http\Controllers\Controller;
use App\Models\Entities\Employees\Decorators\ManagerDecorator;
use App\Models\Entities\Employees\Decorators\TeamLeaderDecorator;
use App\Models\Entities\Employees\Decorators\TeamMemberDecorator;
use App\Models\Entities\Employees\Employee;

class EmployeeJourneyController extends Controller
{
    public function index()
    {
        // Employee John gets hired
        $john = new Employee();
        $john->setName('John');

        // John joins team
        $john = new TeamMemberDecorator($john);
        $john->performTask();

        // John gets promoted to team 
        echo "John gets promoted to team leader. Congratulations!<br/><hr/>";
        $john = new TeamLeaderDecorator($john);
        $john->performTask();
        $john->planTasks();
        $john->coordinateTeam();
        $john->motivateTeam();

        // John gets promoted to Manager
        echo "John gets promoted to a manager. Congratulations!<br/><hr/>";
        $john = new ManagerDecorator($john);
        $john->createRequirements();
        $john->assignTask();
    }
}