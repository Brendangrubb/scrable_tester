<?php
    class Scrabble
    {
        function findScore($input)
        {
            $one_point = array("0", "a", "e", "i", "o", "u", "l", "n", "r", "s", "t");
            $two_point = array("0", "d", "g");
            $three_point = array("0", "b", "c", "m", "p");
            $four_point = array("0", "f", "h", "v", "w", "y");
            $five_point = array("0", "k");
            $eight_point = array("0", "j", "x");
            $ten_point = array("0", "q", "z");
            $word_letter = str_split($input);
            $total_points = 0;

            foreach ($word_letter as $letter) {
                if (array_search($letter, $one_point) > 0) {
                    ++ $total_points;
                } else if (array_search($letter, $two_point) > 0) {
                    $total_points = $total_points + 2;
                } else if (array_search($letter, $three_point) > 0) {
                    $total_points = $total_points + 3;
                } else if (array_search($letter, $four_point) > 0) {
                    $total_points = $total_points + 4;
                } else if (array_search($letter, $five_point) > 0) {
                    $total_points = $total_points + 5;
                } else if (array_search($letter, $eight_point) > 0) {
                    $total_points = $total_points + 8;
                } else if (array_search($letter, $ten_point) > 0) {
                    $total_points = $total_points + 10;
                }
            }
            return $total_points;
        }
    }



?>
