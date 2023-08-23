<?php

namespace App\Utils;


class PaymentMethods {
    protected $availableMethods = [
        '01' => 'CREDIT CARD',
        '02' => 'DEBIT CARD',
        '03' => 'PIX',
        '04' => 'BILLET'
    ];

    public function _contruct($method){
        $this->methodExists($method);
    }

    public function methodExists($method): bool{
        return array_key_exists($method, $this->availableMethods);
    }


}

