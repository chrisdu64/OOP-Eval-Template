<?php

declare(strict_types=1);

namespace App\Controllers;


use App\Models\Game;
use App\View;

    class GameController
    {
        public function index(): string
        {
            $gameManager = new Game();

            $games = $gameManager->getGames();

            return (new View('Game/index',['games'=> $games]))->render();
        }

        public function addGame(): string
        {
            $gameManager = new Game();

            $game_infos = [
                'title' => htmlspecialchars(trim($_POST['title'])),
                'min_players' => intval(htmlspecialchars($_POST['min_players'])),
                'max_players' => intval(htmlspecialchars($_POST['max_players'])),
            ];
            

            $newGame = $gameManager->addGame(...$game_infos);
            
            
            return (new \App\View('Game/addGame', ['newGame' => $newGame]))->render();
        }
    }
?>