<?php

namespace App\Libs\Markov;

class MarkovWithCustomFormatting extends Markov
{

    protected function postFormat($str): string
    {
        return ucfirst(preg_replace("/[^A-Za-z0-9 ]/", '', $str));
    }
}
