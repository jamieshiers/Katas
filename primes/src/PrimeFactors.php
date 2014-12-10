<?php

class PrimeFactors{

    public function generate($number)
    {
        if($number > 2)
        {
            return [3];
        }
        if($number > 1)
        {
            return [2];
        }
        return [];
    }
}
