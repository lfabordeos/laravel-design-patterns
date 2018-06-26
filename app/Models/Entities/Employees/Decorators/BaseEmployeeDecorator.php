<?php

namespace App\Models\Entities\Employees\Decorators;

use App\Models\Entities\Employees\Contracts\EmployeeContract;

abstract class BaseEmployeeDecorator implements EmployeeContract
{
    protected $employee;

    public function __construct(EmployeeContract $employee)
    {
        $this->employee = $employee;
    }

    public function join()
    {
        $this->employee->join();
    }

    public function terminate()
    {
        $this->employee->terminate();
    }

    public function getName()
    {
        return $this->employee->getName();
    }

    public function setName($name)
    {
        $this->employee->setName($name);
    }
}