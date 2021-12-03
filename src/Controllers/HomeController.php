<?php

declare(strict_types=1);

namespace App\Controllers;


use App\View;

use App\Models\Player;
use App\Models\Game;
use App\Models\Contest;

    class HomeController
    {
        public function index(): string
        {
            $contestManager = new Contest();
            $gameManager = new Game();
            $playerManager = new Player();

            $games = $gameManager->getGames();
            $contests = $contestManager->getContests();
            $players = $playerManager->getPlayers();

            return (new View('index',['contests'=> $contests, 'games'=>$games, 'players' =>$players]))->render();
        }

       
    }
?>