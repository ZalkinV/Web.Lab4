<?php

function shorten_text($text, $words_count = 40)
{
    $all_words = preg_split("/[\s]+/", $text);
    $words = array_slice($all_words, 0, $words_count);
    $short_text = join(" ", $words);

    if (count($all_words) > $words_count)
        $short_text.="...";

    return $short_text;
}

?>
