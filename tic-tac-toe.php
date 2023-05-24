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
}

class TicTacToeCLI
{
    private $game;

    public function __construct()
    {
        $this->game = new TicTacToe();
    }

    public function startGame()
    {
        echo "Welcome to TIC TAC TOE Game !\n";
        while (!$this->game->isGameOver()) {
            $this->game->displayBoard();
            echo "Player {$this->game->getCurrentPlayer()}, Please make your move (row column): ";
            $move = explode(" ", trim(fgets(STDIN)));

            if (count($move) !== 2 || !is_numeric($move[0]) ||
                !is_numeric($move[1])) {
                echo "Oops !! invalid move. Please try again.\n";
                continue;
            }

            $row = intval($move[0]);
            $col = intval($move[1]);

            if ($row < 0 || $row > 2 || $col < 0 || $col > 2) {
                echo "Oops !! invalid move. Please try again.\n";
                continue;
            }

            if ($this->game->getBoard()[$row][$col] !== '-') {
                echo "Sorry!! this cell is already occupied. Please try again.\n";
                continue;
            }

            $this->game->makeMove($row, $col,
                $this->game->getCurrentPlayer());
        }

        $this->game->displayBoard();
        $winner = $this->game->checkWinner();

        if ($winner) {
            echo "Congratulation !! Player $winner wins!\n";
        } else {
            echo "Try again it's a draw!\n";
        }
    }
}

$ticTacToeCLI = new TicTacToeCLI();
$ticTacToeCLI->startGame();


