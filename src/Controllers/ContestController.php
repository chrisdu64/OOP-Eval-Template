<?php

declare(strict_types=1);

namespace App\Controllers;


use App\Models\Game;
use App\View;
use App\Models\Contest;

    class ContestController
    {
        public function index(): string
        {
            $contestManager = new Contest();
            $gameManager = new Game();

            $games = $gameManager->getGames();
            $contests = $contestManager->getContests();

            return (new View('Contest/index',['contests'=> $contests, 'games'=>$games]))->render();
        }

        public function addContest(): string
        {
            $contestManager = new Contest();

            $contest_infos = [
                'game_id' => intval(htmlspecialchars($_POST['game_id'])),
                'start_date' => htmlspecialchars(trim($_POST['start_date'])),
            ];
            

            $newContest = $contestManager->addContest(...$contest_infos);
            
            
            return (new \App\View('Contest/addContest', ['newContest' => $newContest]))->render();
        }
    }
?>