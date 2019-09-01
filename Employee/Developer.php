<?php
/**
 * Created by PhpStorm.
 * User: Владислав
 * Date: 01.09.2019
 * Time: 18:10
 */

namespace App\Employee;


class Developer extends Employee
{
    public $lvl;
    public $unpaid;

    public function __construct($fullName, $paymentWay, int $unpaid = 0, int $salary = 0,$lvl='Junior')
    {
        parent::__construct($fullName, $paymentWay, $unpaid, $salary);
        $this->lvl = $lvl;
    }

}