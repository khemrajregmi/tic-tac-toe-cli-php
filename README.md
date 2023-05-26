# Tic Tac Toe Game with CLI Version 
Welcome to Tic Tac Toe CLI game with php there are two way to 
run this project 
1. Run With Docker Container
2. Run from Command Line( For this you need to have php in your local machine)


## 1. Run With Docker Container

cd /`project_directory`

`docker compose run php`

`docker compose down`

## 2. Run from Command Line
for this you should have php( better version 8.2) installed in local machine
Firstly, Open Terminal go to project directory

`cd /project_directory/src`

then run,

`php tic-tac-toe.php
`

![](images/Screenshot%202023-05-24%20at%2018.09.58.png)
## To run Test Case from command line

`cd /project_directory/src`

then run,

`php tic-tac-toe.php

## Rules for game
You will be asked like `Player X, Please make your move (row column):`
then you should give the input array position like (0 1) ie 0 denote the array index of row 
and 1 denotes the array index of column 

Note :if you play you gona know :D !! Enjoy !!


### Requirements that are meet in this project
* Use PHP with an object-oriented approach :Done
* Create a feature branch :Done
* Create a simple two-player game which the players can play by taking turns at the keyboard :Done
* After a user has made a move, display the current state of the game :Done
* Check if the user inputs a valid move :Done
* Show a message if the game has been won :Done
* Offer a way to start a new game :Done
* Add a section to the README.md explaining how we can run the project :Done
* Also add an explanation of (or link to) the rules of the game, in case it's one we don't know :Done
* Create your pull request on github and let us know you're finished via email! :Done


### For overachievers (optional)
* We use docker Done 
* We write unit tests Done
* We use the newest PHP version when possible Done


### Run Test Case
* cd /project_directory/src 
 run `composer update`