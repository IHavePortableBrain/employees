<?php
/**
 * Created by PhpStorm.
 * User: Владислав
 * Date: 01.09.2019
 * Time: 17:50
 */

namespace App\Employee;

require_once "Payment/PaymentWays.php";

use App\Payment\PaymentWays;
use App\Payment\iPayable;


abstract class Employee implements iPayable
{
    public $fullName;
    public $paymentWay;
    public $unpaid;
    public $salary;

    public function bill(){
        $result = 0;
        switch ($this->paymentWay){
            case PaymentWays::Hourly:
                $result = $this->unpaid * $this->salary;
                break;
            case PaymentWays::Once:
                if($this->unpaid) {
                    $result = $this->salary;
                    $this->unpaid = 0;
                }
        }
        return $result;
    }


    function __construct($fullName,$paymentWay,$unpaid=0,$salary=0)
    {
        if ($paymentWay instanceof PaymentWays)
            throw new \InvalidArgumentException();
        $this->fullName = $fullName;
        $this->paymentWay = $paymentWay;
        $this->unpaid = $unpaid;
        $this->salary = $salary;
    }

}