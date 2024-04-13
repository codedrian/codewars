
<?php
function rpc($p1, $p2)
{
    /* validate user input */
    $p1 = strtolower($p1);
    $p2 = strtolower($p2);

    $validInput = array('rock', 'paper', 'scissors');
    if ((!in_array($p1, $validInput)) || (!in_array($p2, $validInput))) {
        echo 'Invalid input: Please enter Rock, Paper and Scissor';
    } else {
        $winnerMap = [
            'rock' => ['scissor'],
            'paper' => ['rock'],
            'scissors' => ['paper',]
        ];
        if ($p1 === $p2) {
            echo "It's a tie!";
        }
        echo (in_array($p2, $winnerMap[$p1])) ? 'Player 1 won!' : 'Player 2 won!';
    }
}

$result =  rpc("scissors", "rock"); // Player 1 won!
echo $result;

/*  Title: Rock, Paper, Scissors!

Direction: Let's play! You have to return which player won! In case of a draw return Draw!.

Examples(Input1, Input2 = Output):
"scissors", "paper" = "Player 1 won!"
"scissors", "rock" = "Player 2 won!"
"paper", "paper" = "Draw!" */
