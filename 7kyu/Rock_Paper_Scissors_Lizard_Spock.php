7Kyu - Rock, Paper, Scissors, Lizard, Spock

Description:
In this kata, your task is to implement an extended version of the famous rock-paper-scissors game. The rules are as follows:

Scissors cuts Paper
Paper covers Rock
Rock crushes Lizard
Lizard poisons Spock
Spock smashes Scissors
Scissors decapitates Lizard
Lizard eats Paper
Paper disproves Spock
Spock vaporizes Rock
Rock crushes Scissors
Task:
Given two values from the above game, return the Player result as "Player 1 Won!", "Player 2 Won!", or "Draw!".

Inputs
Values will be given as one of "rock", "paper", "scissors", "lizard", "spock".

<?php
function rpsls1($player1, $player2)
{
    if ($player1 == $player2) {
        return 'Draw!';
    }
    if ($player1 == 'rock' && ($player2 == 'scissors' || $player2 == 'lizard')) {
        return 'Player 1 Won!';
    }
    if ($player1 == 'paper' && ($player2 == 'rock' || $player2 == 'spock')) {
        return 'Player 1 Won!';
    }
    if ($player1 == 'scissors' && ($player2 == 'paper' || $player2 == 'lizard')) {
        return 'Player 1 Won!';
    }
    if ($player1 == 'lizard' && ($player2 == 'spock' || $player2 == 'paper')) {
        return 'Player 1 Won!';
    }
    if ($player1 == 'spock' && ($player2 == 'scissors' || $player2 == 'rock')) {
        return 'Player 1 Won!';
    }
    return 'Player 2 Won!';
}

function rpsls2($player1, $player2)
{
    $arr=['scissors'=>['paper','lizard'],
        'paper'=>['rock','spock'],
        'rock'=>['lizard','scissors'],
        'lizard'=>['spock','paper'],
        'spock'=>['scissors','rock']
    ];

    return ($player1 == $player2)? "Draw!" :
        ((in_array($player2, $arr[$player1])) ? "Player 1 Won!" : "Player 2 Won!");
}
?>

See on CodeWars.com: https://www.codewars.com/kata/57d29ccda56edb4187000052
