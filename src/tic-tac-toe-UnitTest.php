<?php

require_once 'tic-tac-toe-cli.php';

use PHPUnit\Framework\TestCase;

class TicTacToeUnitTest extends TestCase
{
    /**
     * @return void
     */
    public function testMakeMove()
    {
        $ticTacToe = new TicTacToe();

        // this will test only the valid move
        $ticTacToe->makeMove(0, 0, 'X');
        $board = $ticTacToe->getBoard();
        $this->assertEquals('X', $board[0][0]);

        // this will test invalid move which is  out of the bounds
        $this->expectException(Exception::class);
        $ticTacToe->makeMove(3, 3, 'O');
    }

    // we can write any number of test here
}
