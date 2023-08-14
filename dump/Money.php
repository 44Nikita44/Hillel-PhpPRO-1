<?php


class Money
{
    protected $amount;
    protected $currency;

    public function __construct($amount, Currency $currency){
        $this->setAmount($amount);
        $this->setCurrency($currency);
    }

    private function setAmount($value){
        if(is_int($value) || is_float($value)){
            $this->amount = $value;
        }
        else{
            throw new \Exception("Wrong amount value!");
        }
    }

    private function setCurrency($value){
        $this->currency = $value;
    }

    public function getAmount(){
        return $this->amount;
    }

    public function getCurrency(){
        return $this->currency->getIsoCode();
    }

    public static function equals(Money $first, Money $second){
        if($first == $second){
            return true;
        }
        return false;
    }

    public static function add(Money $first, Money $second){
        if(Currency::equals($first->currency, $second->currency)){
            return $first->getAmount() + $second->getAmount();
        }
        throw new \Exception('Invalid Argument Exception');
    }
}