<?php

    require_once "src/RepeatCounter.php";

    class RepeatCounterTest extends PHPUnit_Framework_TestCase
    {

            function test_countRepeats_singleLetter()
            {
                //Arrange
                $test_RepeatCounter = new RepeatCounter;
                $input_string = "a";
                $word_to_count = "a";

                //Act
                $result = $test_RepeatCounter->countRepeats($input_string, $word_to_count);

                //Assert
                $this->assertEquals(1, $result);
            }
    }
?>
