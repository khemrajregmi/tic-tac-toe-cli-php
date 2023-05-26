<?php


namespace TicTacToe;

require_once 'tic-tac-toe.php';

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

        $this->offernewGame();
    }

    private function offerNewGame()
    {
        echo "Do you want to play again? (yes/no): ";
        $response = strtolower(trim(fgets(STDIN)));

        if ($response === 'yes') {
            $this->game->resetBoard();
            $this->startGame();
        } else {
            echo "Thank you for playing Tic-Tac-Toe!\n";
        }
    }
}

$ticTacToeCLI = new TicTacToeCLI();
$ticTacToeCLI->startGame();


