5kyu - Find the unique string

Description:

There is an array of strings. All strings contains similar letters except one. Try to find it!

find_uniq([ 'Aa', 'aaa', 'aaaaa', 'BbBb', 'Aaaa', 'AaAaAa', 'a' ]); // => 'BbBb'
find_uniq([ 'abc', 'acb', 'bac', 'foo', 'bca', 'cab', 'cba' ]); // => 'foo'
Strings may contain spaces. Spaces are not significant, only non-spaces symbols matters.
E.g. string that contains only spaces is like empty string.

It’s guaranteed that array contains more than 2 strings.

<?php
function find_uniq($a) {
    $seen = [];
    $common = null;

    foreach ($a as $string) {
        $key = count_chars(str_replace(' ', '', strtolower($string)), 3);

        if (isset($seen[$key])) {
            $common = $key;
        }

        if ($common !== null) {
            if ($key !== $common) {
                return $string;
            }

            if (count($seen) > 1) {
                unset($seen[$common]);
                return reset($seen);
            }
        }

        $seen[$key] = $string;
    }

    return null;
}
?>

See on CodeWars.com: https://www.codewars.com/kata/585d8c8a28bc7403ea0000c3
