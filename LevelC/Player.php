<?php

namespace Hackathon\LevelC;

class Player
{
    private $id;

    public function __construct($id)
    {
        $this->id = $id;

        return $this;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getSteps($partOfTheTrack, $context)
    {
//        $instruction = "MMSMM";
//
        var_dump($partOfTheTrack);
        if ("" === $partOfTheTrack)
            die();
        $hasX = false;
        $safeMove = 0;
        $nextInstruction = "";

        for ($i=strlen($partOfTheTrack);$i>=1;$i--) {
            if ($safeMove === 0 && 'X' !== $partOfTheTrack[$i-1]) {
                $safeMove = $i;
            }
            if ('X' === $partOfTheTrack[$i-1]) {
                $hasX = true;
            }
        }

        if ('_' === $partOfTheTrack) {
            return 'M';
        }

//        if (!$hasX) {
//            var_dump("AHHH", $hasX, $partOfTheTrack);
//           for ($i=0;$i<strlen($partOfTheTrack)-1;$i++) {
//               $nextInstruction .= 'M';
//           }
//
//            var_dump($nextInstruction);
//
//            return $nextInstruction;
//        }

        var_dump("SAFE MOVE = " . $safeMove);
        for ($i=1;$i<$safeMove;$i++) {
            $nextInstruction .= 'M';
        }

//        for ($i=strlen($nextInstruction);$i<5;$i++) {
//            $nextInstruction .= 'S';
//        }

        $nbS = 1;
        for ($i=strlen($nextInstruction);$i<10;$i++) {
            if ($nbS <= 5) {
                $nextInstruction .= 'S';
                $nbS++;
            }
        }


        var_dump("NEXT = ", $nextInstruction);
//        if ("" === $nextInstruction)
//            die();

        // @TODO
        return $nextInstruction;
    }
};
