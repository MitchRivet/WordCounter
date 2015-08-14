<?php

    class RepeatCounter
    {
        function countRepeats($input_string, $word_to_count)
        {
            $grammar = array(",", ".", ":", ";", "!", "?", " "); 
            $output_count = 0;
            $input_words = explode(" ", $input_string);

            foreach ($input_words as $input_word)
            {
                if ($input_word == $word_to_count)
                {
                    $output_count++;
                }
                elseif (array_intersect(str_split($input_word), $grammar) && strpos($input_word, $word_to_count) !== false)
                {
                    $output_count++;
                }
            }

            return $output_count;
        }
    }

?>
