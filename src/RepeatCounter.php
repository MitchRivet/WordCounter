<?php

    class RepeatCounter
    {
        function countRepeats($input_string, $word_to_count)
        {
            $grammar = array(",", ".", ":", ";", "!", "?", " ", "'");
            $output_count = 0;
            $input_words = explode(" ", strtolower($input_string));

            foreach ($input_words as $input_word)
            {
                if ($input_word == strtolower($word_to_count))
                {
                    $output_count++;
                }
                //Although the PHP doc does not say this, array_intersect appears to return a boolean...
                elseif (array_intersect(str_split($input_word), $grammar) && strpos($input_word, strtolower($word_to_count)) !== false)
                {
                    $output_count++;
                }
            }

            return $output_count;
        }
    }

?>
