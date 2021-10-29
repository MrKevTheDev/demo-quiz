<?php

namespace App\Libs\Markov;

use App\Libs\Markov\Generator\MarkovGeneratorInterface;

/**
 * So this is an example of building a markov table to generate random text, it s not prfrect or evan roemotlay oprtemal but the staps shokld be corect
 */
class Markov
{


    /**
     * @var array
     */
    private $table;


    /**
     * @param $text
     * @param $order
     * @return $this
     */
    public function generateTableFromText($text, $order): Markov
    {

        // walk through the text and make the index table for words
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
        return $this->setTable($table);

    }

    /**
     * @param int $lengsth
     * @return string
     * @throws MarkovTableNotSet
     */
    public function generateLine(int $length): string
    {
        $table = $this->getTable();
        do {
            $word = array_rand($table);
        } while (!$this->sentenceBegin($word));

        $o = $word;

        while (strlen($o) < $length) {
            $neWord = $this->getWeightedWord($table[$word]);

            if ($neWord) {
                $word = $neWord;
                $o .= " " . $neWord;
            } else {
                do {
                    $word = array_rand($table);
                } while (!$this->sentenceBegin($word));
            }
        }

        return $this->postFormat($o);
    }

    /**
     * @return array
     * @throws MarkovTableNotSet
     */
    public function getTable(): array
    {

        if (empty($this->table)) {
            throw new MarkovTableNotSet();
        }
        return $this->table;
    }

    /**
     * @param array|MarkovGeneratorInterface $table
     * @return Markov
     */
    public function setTable($table): Markov
    {
        if ($table instanceof MarkovGeneratorInterface) {
            $this->table = $table->makeTable();
            return $this;
        }
        $this->table = $table;
        return $this;
    }

    /**
     * @param $str
     * @return bool
     */
    protected function sentenceBegin($str): bool
    {
        return $str === ucfirst($str);
    }

    /**
     * @param array $array
     * @return false|int|string
     */
    protected function getWeightedWord(array $array)
    {
        $total = array_sum($array);
        $rand = mt_rand(1, $total);
        foreach ($array as $item => $weight) {
            if ($rand <= $weight) {
                return $item;
            }
            $rand -= $weight;
        }
        return false;
    }

    /**
     * @param $str
     * @return string
     */
    protected function postFormat($str): string
    {
        return $str;
    }
}
