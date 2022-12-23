<?php

declare(strict_types=1);

namespace Aldmarinka\NumWords;

class WordProcessor
{
    /**
     * @param int   $number число
     * @param array $words массив слов вида ['товар', 'товара', 'товаров']
     * @param    bool   $show
     *
     * @return string
     */
    public function getNumWords(int $number, array $words, bool $show = true): string
    {
        $cases = array (2, 0, 1, 1, 1, 2);
        return ($show ? $number.' ' : '').$words[ ($number%100>4 && $number%100<20)? 2: $cases[min($number%10, 5)] ];
    }
}