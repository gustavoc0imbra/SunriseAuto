<?php

namespace App\Utils;


class PaymentMethods {
    protected $availableMethods = [
        'CC' => 'CREDIT CARD',
        'DC' => 'DEBIT CARD',
        'PX' => 'PIX',
        'BL' => 'BILLET'
    ];

    public function _contruct($method){
        $this->methodExists($method);
    }

    public function methodExists($method): bool{
        return array_key_exists($method, $this->availableMethods);
    }


}

