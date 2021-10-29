<?php

namespace App\Libs\Markov\Generator;

abstract class AbstractMarkovGenerator implements MarkovGeneratorInterface
{
    private $text;
    private $order;

    /**
     * @param mixed $text
     * @return AbstractMarkovGenerator
     */
    public function setText($text): AbstractMarkovGenerator
    {
        $this->text = $text;
        return $this;
    }

    /**
     * @param mixed $order
     * @return AbstractMarkovGenerator
     */
    public function setOrder($order): AbstractMarkovGenerator
    {
        $this->order = $order;
        return $this;
    }


    public function makeTable(): array
    {
        $text = $this->text;
        $order = $this->order;
        $wordsTable = explode(' ', $text);
        $table = [];
        foreach ($wordsTable as $key => $word) {
            $nextWord = "";
            for ($j = 0; $j < $order; $j++) {
                if ($key + $j + 1 != sizeof($wordsTable) - 1) {
                    if (isset($wordsTable[$key + $j + 1])) {
                        $nextWord .= " " . $wordsTable[$key + $j + 1];
                    }

                }
            }
            if (!isset($table[$word . $nextWord])) {
                $table[$word . $nextWord] = [];
            }
        }

        $tableLength = sizeof($wordsTable);

        // walk the array again and count the numbers
        for ($i = 0; $i < $tableLength - 1; $i++) {
            $index = $wordsTable[$i];
            $wordCount = $wordsTable[$i + 1];
            if (isset($table[$index][$wordCount])) {
                $table[$index][$wordCount] += 1;
            } else {
                $table[$index][$wordCount] = 1;
            }
        }
        return $table;
    }

}
