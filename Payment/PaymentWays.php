<?php
/**
 * Created by PhpStorm.
 * User: Владислав
 * Date: 01.09.2019
 * Time: 20:31
 */

namespace App\Payment;


class  PaymentWays {
    const __default = self::Hourly;

    const Hourly = 0;
    const Once = 1;
}

interface iPayable{
    public function bill();
}