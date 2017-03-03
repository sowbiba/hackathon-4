<?php

namespace Hackathon\LevelA;

class Redux
{
    private $number;

    public function __construct($number)
    {
        $this->number = $number;
    }

    /**
     * Cette méthode ne prends rien en paramétre et retourne la reduction du nombre.
     *
     * @return string
     */
    public function getReductedNumber()
    {
        $result = $this->reduce($this->number);

        return $result;
    }

    private function reduce($number)
    {
        $result = 0;

        $string = (string)$number;
        for($i=0; $i<strlen($string);$i++) {
            $result += (int)$string[$i];
        }

        if (1 < strlen((string) $result)) {
            $result = $this->reduce($result);
        }

        return $result;
    }
};
