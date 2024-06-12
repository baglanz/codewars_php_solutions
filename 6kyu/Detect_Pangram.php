6kyu - Detect Pangram

Description:
A pangram is a sentence that contains every single letter of the alphabet at least once.
For example, the sentence "The quick brown fox jumps over the lazy dog" is a pangram,
because it uses the letters A-Z at least once (case is irrelevant).

Given a string, detect whether or not it is a pangram. Return True if it is, False if not. Ignore numbers and punctuation.

<?php
function detect_pangram($string)
{
    $string = strtolower($string);

    $string = preg_replace('/[^a-z]/', '', $string);

    $letters = array_fill_keys(range('a', 'z'), false);

    for ($i = 0; $i < strlen($string); $i++) {
        $letters[$string[$i]] = true;
    }

    foreach ($letters as $letterPresent) {
        if (!$letterPresent) {
            return false;
        }
    }

    return true;
}
?>

See on CodeWars.com: https://www.codewars.com/kata/545cedaa9943f7fe7b000048
