<?php
// Import the TicTacToe class
require_once 'tic-tac-toe.php';

// Create a new instance of TicTacToe
$game = new TicTacToe();

// Test the displayBoard() method
$game->displayBoard();

// Test the makeMove() method
$game->makeMove(0, 0, 'X');
$game->makeMove(0, 1, 'O');
$game->makeMove(1, 1, 'X');
$game->makeMove(1, 2, 'O');
$game->makeMove(2, 2, 'X');
$game->displayBoard();

// Test the checkWinner() method
$result = $game->checkWinner();
echo "Winner: $result\n";

// Reset the game board
$game->resetBoard();
$game->displayBoard();

// Test the startGame() method
$cliGame = new TicTacToeCLI();
$cliGame->startGame();
