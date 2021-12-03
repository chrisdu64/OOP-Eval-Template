<?php

declare(strict_types=1);

namespace App\Controllers;

use App\View;

    class GameController
    {
        public function index(): string
        {
            return (new View('Game/index'))->render();
        }
    }
?>