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

            function test_countRepeats_twoLetter()
            {
                $test_RepeatCounter = new RepeatCounter;
                $input_string = "it";
                $word_to_count = "it";

                $result = $test_RepeatCounter->countRepeats($input_string, $word_to_count);

                $this->assertEquals(1, $result);
            }

            function test_countRepeats_oneLetter_inSentence()
            {
                $test_RepeatCounter = new RepeatCounter;
                $input_string = "a dog ate the biscuit";
                $word_to_count= "a";

                $result = $test_RepeatCounter->countRepeats($input_string, $word_to_count);

                $this->assertEquals(1, $result);
            }

            function test_countRepeats_threeLetter_inSentence()
            {
                $test_RepeatCounter = new RepeatCounter;
                $input_string = "a dog ate the biscuit";
                $word_to_count = "ate";

                $result = $test_RepeatCounter->countRepeats($input_string, $word_to_count);

                $this->assertEquals(1, $result);
            }

            function test_countRepeats_threeLetter_multipleRepeats()
            {
                $test_RepeatCounter = new RepeatCounter;
                $input_string = "when she went to the bar, she had a great time";
                $word_to_count = "she";

                $result = $test_RepeatCounter->countRepeats($input_string, $word_to_count);

                $this->assertEquals(2, $result); 
            }
    }
?>
