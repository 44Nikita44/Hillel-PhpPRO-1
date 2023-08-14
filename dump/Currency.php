<?php


class Currency
{
    protected $isoCode;

    public function __construct($code){
        $this->setIsoCode($code);
    }

    private function setIsoCode($value){
        $allowed_values = [
          'USD',
          'EUR',
          'UAH'
        ];
        if(in_array($value, $allowed_values)){
            $this->isoCode = $value;
        }
        else{
            throw new \Exception('Invalid Argument Exception');
        }
    }

    public function getIsoCode(){
        return $this->isoCode;
    }

    public static function equals(Currency $first_curr, Currency $second_curr){
        if($first_curr == $second_curr){
            return true;
        }
        return false;
    }
}