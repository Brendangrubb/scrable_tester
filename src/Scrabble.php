<?php
    class Scrabble
    {
        function findScore($input)
        {
            $one_point = array("a", "e", "i", "o", "u", "l", "n", "r", "s", "t");
            $word_letter = str_split($input);
            $total_points = 0;

            foreach ($word_letter as $letter) {
                if (array_search($letter, $one_point) >= 0) {
                    ++ $total_points;
                    echo " total points = " . $total_points;
                }
            }
            return $total_points;
        }
    }



?>
