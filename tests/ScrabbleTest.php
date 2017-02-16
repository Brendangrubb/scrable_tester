<?php

    require_once 'src/Scrabble.php';

    class ScrabbleTest extends PHPUnit_Framework_TestCase
    {

        function test_firstword()
        {

            $new_game = new Scrabble;
            $input = "rat";

            $result = $new_game->findScore($input);

            $this->assertEquals(3, $result);
        }

        function test_secondword()
        {

            $new_game = new Scrabble;
            $input = "fat";

            $result = $new_game->findScore($input);

            $this->assertEquals(6, $result);
        }

        function test_thirdword()
        {

            $new_game = new Scrabble;
            $input = "acrobatics";

            $result = $new_game->findScore($input);

            $this->assertEquals(16, $result);
        }

        function test_caseDisregard()
        {

            $new_game = new Scrabble;
            $input = "FaT";

            $result = $new_game->findScore($input);

            $this->assertEquals(6, $result);
        }
    }




 ?>
