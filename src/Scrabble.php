<?php
    class Scrabble
    {
        function findScore($input)
        {
            $one_point = array("a", "e", "i", "o", "u", "l", "n", "r", "s", "t");
            $two_point = array("d", "g");
            $three_point = array("b", "c", "m", "p");
            $four_point = array("f", "h", "v", "w", "y");
            $five_point = array("k");
            $eight_point = array("j", "x");
            $ten_point = array("q", "z");
            $lower_case_input = strtolower($input);
            $word_letter = str_split($lower_case_input);
            $total_points = 0;

            foreach ($word_letter as $letter) {
                if (array_search($letter, $one_point) > 0 || array_search($letter, $one_point) === 0) {
                    ++ $total_points;
                } else if (array_search($letter, $two_point) > 0 || array_search($letter, $two_point) === 0) {
                    $total_points = $total_points + 2;
                } else if (array_search($letter, $three_point) > 0 || array_search($letter, $three_point) === 0) {
                    $total_points = $total_points + 3;
                } else if (array_search($letter, $four_point) > 0 || array_search($letter, $four_point) === 0) {
                    $total_points = $total_points + 4;
                } else if (array_search($letter, $five_point) > 0 || array_search($letter, $five_point) === 0) {
                    $total_points = $total_points + 5;
                } else if (array_search($letter, $eight_point) > 0 || array_search($letter, $eight_point) === 0) {
                    $total_points = $total_points + 8;
                } else if (array_search($letter, $ten_point) > 0 || array_search($letter, $ten_point) === 0) {
                    $total_points = $total_points + 10;
                }
            }
            return $total_points;
        }
    }



?>
