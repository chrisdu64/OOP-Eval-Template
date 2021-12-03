<?php

declare(strict_types=1);

namespace App\Controllers;


use App\Models\Player;
use App\View;

    class PlayerController
    {
        public function index(): string
        {
            $playerManager = new Player();

            $players = $playerManager->getPlayers();

            return (new View('Player/index',['players'=> $players]))->render();
        }

        public function addPlayer(): string
        {
            $playerManager = new Player();

            $player_infos = [
                'email' => htmlspecialchars(trim($_POST['email'])),
                'nickname' => htmlspecialchars(trim($_POST['nickname'])),
            ];
            

            $newPlayer = $playerManager->addPlayer(...$player_infos);
            
            
            return (new \App\View('Player/addPlayer', ['newPlayer' => $newPlayer]))->render();
        }
    }
?>