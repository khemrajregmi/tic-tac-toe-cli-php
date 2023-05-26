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

    public function getBoard()
    {
        return $this->board;
    }

    public function getCurrentPlayer()
    {
        return $this->currentPlayer;
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

    public function makeMove($row, $col, $player)
    {
        $this->board[$row][$col] = $player;
        $this->currentPlayer = ($player === 'X') ? 'O' : 'X';
    }

    public function checkWinner()
    {
        // Check the matching rows
        for ($i = 0; $i < 3; $i++) {
            if (
                $this->board[$i][0] !== '-' &&
                $this->board[$i][0] === $this->board[$i][1] &&
                $this->board[$i][0] === $this->board[$i][2]
            ) {
                return $this->board[$i][0];
            }
        }

        // Check the matching columns
        for ($i = 0; $i < 3; $i++) {
            if (
                $this->board[0][$i] !== '-' &&
                $this->board[0][$i] === $this->board[1][$i] &&
                $this->board[0][$i] === $this->board[2][$i]
            ) {
                return $this->board[0][$i];
            }
        }

        // Check the matching diagonals
        if (
            $this->board[0][0] !== '-' &&
            $this->board[0][0] === $this->board[1][1] &&
            $this->board[0][0] === $this->board[2][2]
        ) {
            return $this->board[0][0];
        }

        if (
            $this->board[0][2] !== '-' &&
            $this->board[0][2] === $this->board[1][1] &&
            $this->board[0][2] === $this->board[2][0]
        ) {
            return $this->board[0][2];
        }

        return null;
    }

    public function isGameOver()
    {
        return $this->checkWinner() || $this->isBoardFull();
    }
    public function isBoardFull()
    {
        for ($i = 0; $i < 3; $i++) {
            for ($j = 0; $j < 3; $j++) {
                if ($this->board[$i][$j] === '-') {
                    return false;
                }
            }
        }
        return true;
    }

    public function resetBoard()
    {
        $this->board = array(
            array('-', '-', '-'),
            array('-', '-', '-'),
            array('-', '-', '-')
        );
        $this->currentPlayer = 'X';
    }

}
