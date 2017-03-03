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
        $safeMove = 0;
        $nextInstruction = "";

        for ($i=strlen($partOfTheTrack);$i>=1;$i--) {
            if ($safeMove === 0 && 'X' !== $partOfTheTrack[$i-1]) {
                $safeMove = $i;
            }
        }

        if ('_' === $partOfTheTrack) {
            return 'M';
        }

        for ($i=1;$i<$safeMove;$i++) {
            $nextInstruction .= 'M';
        }
        $nbS = 1;
        for ($i=strlen($nextInstruction);$i<10;$i++) {
            if ($nbS <= 5) {
                $nextInstruction .= 'S';
                $nbS++;
            }
        }

        // @TODO
        return $nextInstruction;
    }
};
