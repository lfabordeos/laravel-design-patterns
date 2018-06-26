<?php

namespace App\Models\Entities\Employees;

use App\Models\Entities\Employees\Contracts\EmployeeContract;

/**
 * Implementation of employee example discussed in 
 * https://zishanbilal.wordpress.com/2011/04/28/design-patterns-by-examples-decorator-pattern/
 */
class Employee implements EmployeeContract
{
    protected $name; 

    public function join()
    {

    }

    public function terminate()
    {

    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }
}