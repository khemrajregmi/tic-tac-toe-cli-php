<?php

class TicTacToe
{
    private $board;
    private $currentPlayer;
    public function __construct()
    {
        $this->board = array(
            array('-', '-', '-'),
            array('-', '-', '-'),
            array('-', '-', '-')
        );
        $this->currentPlayer = 'X';
    }

    public function displayBoard()
    {
        for ($i = 0; $i < 3; $i++) {
            for ($j = 0; $j < 3; $j++) {
                echo $this->board[$i][$j] . " ";
            }
            echo "\n";
        }
        echo "\n";
    }
}

class TicTacToeCLI
{
    private $game;

    public function __construct()
    {
        $this->game = new TicTacToe();
    }
}

$ticTacToeCLI = new TicTacToeCLI();


