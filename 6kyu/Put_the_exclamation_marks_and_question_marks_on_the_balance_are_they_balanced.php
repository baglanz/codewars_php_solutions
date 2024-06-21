6kyu - Put the exclamation marks and question marks on the balance are they balanced?

Description:
Each exclamation mark's weight is 2; each question mark's weight is 3. Putting two strings
left and right on the balance - are they balanced?

If the left side is more heavy, return "Left"; if the right side is more heavy, return
"Right"; if they are balanced, return "Balance".

Examples
"!!", "??"     -->  "Right"
"!??", "?!!"   -->  "Left"
"!?!!", "?!?"  -->  "Left"
"!!???!????", "??!!?!!!!!!!"  -->  "Balance"

<?php
function balance(string $l, string $r): string {
    $lCount = 0;
    $rCount = 0;
    foreach (str_split($l) as $char) {
        $lCount += $char == '!' ? 2 : 3;
    }
    foreach (str_split($r) as $char) {
        $rCount += $char == '!' ? 2 : 3;
    }
    if ($lCount == $rCount) {
        return 'Balance';
    } else if ($lCount > $rCount) {
        return 'Left';
    } else {
        return 'Right';
    }
}
?>

See on CodeWars.com: https://www.codewars.com/kata/57fb44a12b53146fe1000136
