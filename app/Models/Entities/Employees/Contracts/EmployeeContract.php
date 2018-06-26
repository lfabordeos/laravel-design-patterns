<?php

namespace App\Models\Entities\Employees\Contracts;

interface EmployeeContract
{
    public function join();

    public function terminate();

    public function getName();

    public function setName($name);
}