<?php

    class RepeatCounter
    {
        function countRepeats($input_string, $word_to_count)
        {
            $output_count = 0;
            $input_words = explode(" ", $input_string);

            foreach ($input_words as $input_word)
            {
                if ($word_to_count == $input_word)
                {
                    $output_count++;
                }
            }

            return $output_count; 
        }
    }

?>
