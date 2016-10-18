<?php

class RomanNumbers
{
    public function convert($number){
        if($number == 3){
            return 'III';
        }
        if($number == 2){
            return 'II';
        }
        return 'I';
    }
}
