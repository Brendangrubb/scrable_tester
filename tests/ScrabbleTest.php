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
    }




 ?>
