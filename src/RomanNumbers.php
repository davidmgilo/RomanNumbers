<?php

class RomanNumbers
{
    public function convert($number){

        $solution = "";

        if($number == 10){
            $solution = 'X';
        } elseif ($number == 5) {
            $solution ='V';
        } else {
            $solution = $solution . str_repeat('I',$number);
        }

        return $solution;

    }
}
