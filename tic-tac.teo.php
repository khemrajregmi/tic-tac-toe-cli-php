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


