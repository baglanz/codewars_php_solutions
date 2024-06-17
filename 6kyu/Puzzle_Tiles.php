6kyu - Puzzle Tiles

Description:
Because my other two parts of the serie were pretty well received I decided to do another part.

Puzzle Tiles
You will get two Integer n(width) and m (height) and your task is to draw following pattern. Each line is seperated with '\n'.

Both integers are equal or greater than 1. No need to check for invalid parameters.
There are no whitespaces at the end of each line.
For example, for width = 4 and height = 3, you should draw the following pattern:

   _( )__ _( )__ _( )__ _( )__
 _|     _|     _|     _|     _|
(_   _ (_   _ (_   _ (_   _ (_
 |__( )_|__( )_|__( )_|__( )_|
 |_     |_     |_     |_     |_
  _) _   _) _   _) _   _) _   _)
 |__( )_|__( )_|__( )_|__( )_|
 _|     _|     _|     _|     _|
(_   _ (_   _ (_   _ (_   _ (_
 |__( )_|__( )_|__( )_|__( )_|

<?php
function puzzleTiles(int $n, int $m): string {
    $text = "";
    for($i=0; $i < $m; $i++) {
        if($i == 0) {
            $text = $text."  ";
            $t = str_repeat(" _( )__", $n);
            $text = $text.$t."\n";
            $text = $text." ";
            $text = $text."_|".str_repeat("     _|", $n);
            $text = $text."\n";
            $text = $text."(_".str_repeat("   _ (_", $n);
            $text = $text."\n";
        } else {
            $text = $text." |".str_repeat('__( )_|', $n);
            $text = $text."\n";
            $text = $text." ";

            if($i % 2 ==  0) {
                $text = $text."_|".str_repeat("     _|", $n);
                $text = $text."\n";
                $text = $text."(_".str_repeat("   _ (_", $n);
            } else {
                $text = $text."|_".str_repeat("     |_", $n);
                $text = $text."\n";
                $text = $text."  _)".str_repeat(" _   _)", $n);
            }
            $text = $text."\n";
        }
    }
    $text = $text." |".str_repeat('__( )_|', $n);

    return rtrim($text);
}
?>

See on CodeWars.com: https://www.codewars.com/kata/5947d86e07693bcf000000c4
