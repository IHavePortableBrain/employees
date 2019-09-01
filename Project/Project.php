<?php
/**
 * Created by PhpStorm.
 * User: Владислав
 * Date: 01.09.2019
 * Time: 20:01
 */


namespace App\Project;

require_once "Employee/Employee.php";

use App\Employee\Employee;

class Project
{
    protected $employees = [];

    public function __construct($employees=null)
    {
        $this->employees = $employees;
    }

    public function addEmployee($employee)
    {
        settype($this->employees,'array');
        $this->employees[count($this->employees)] = $employee;
    }

    public function totalCosts(){
        $result = 0;
        foreach ($this->employees as $employee){
            $result += $employee->bill();
        }
        return $result;
    }
}