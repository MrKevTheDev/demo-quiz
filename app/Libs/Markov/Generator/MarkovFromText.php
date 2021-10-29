<?php

namespace App\Libs\Markov\Generator;

class MarkovFromText extends AbstractMarkovGenerator
{


    public function __construct($text, $order)
    {
        $this->setText($text);
        $this->setOrder($order);

    }
}
