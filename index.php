<?php

class Color
{
    protected $red;
    protected $green;
    protected $blue;

    public function __construct($r, $g, $b){
        $this->setRed($r);
        $this->setGreen($g);
        $this->setBlue($b);
    }

    private function validate($value){
        if(is_int($value) && $value >=0 && $value <= 255){
            return true;
        }
        throw new Exception('Incorrect color value!');
    }

    private function setRed($value){
        if($this->validate($value)) {
            $this->red = $value;
        }
    }
    private function setGreen($value){
        if($this->validate($value)) {
            $this->green = $value;
        }
    }
    private function setBlue($value){
        if($this->validate($value)) {
            $this->blue = $value;
        }
    }

    public function getRed(){
        return $this->red;
    }
    public function getGreen(){
        return $this->green;
    }
    public function getBlue(){
        return $this->blue;
    }

    public function equals(Color $color_obj){
        if($this->getRed() == $color_obj->getRed() && $this->getGreen() == $color_obj->getGreen() && $this->getBlue() == $color_obj->getBlue()){
            return true;
        }
        return false;
    }

    public static function random(){
        $red = rand(0, 255);
        $green = rand(0, 255);
        $blue = rand(0, 255);
        return new Color($red, $green, $blue);
    }

    public function mix(Color $color_obj){
        $mixed_red = ($this->getRed() + $color_obj->getRed()) / 2;
        $mixed_green = ($this->getGreen() + $color_obj->getGreen()) / 2;
        $mixed_blue = ($this->getBlue() + $color_obj->getBlue()) / 2;
        echo "Red: " . $mixed_red . " Green: " . $mixed_green . " Blue: " . $mixed_blue;
    }
}

$color1 = new Color(102, 200, 150);
/*var_dump($color1->getRed());
var_dump($color1->getGreen());
var_dump($color1->getBlue());*/

/*var_dump(Color::random());*/

$color2 = new Color(102, 200, 150);

$color1->mix($color2);
var_dump($color1->equals($color2));