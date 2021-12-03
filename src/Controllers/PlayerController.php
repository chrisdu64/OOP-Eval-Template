<?php

declare(strict_types=1);

namespace App\Controllers;

use App\View;

    class PlayerController
    {
        public function index(): string
        {
            return (new View('Player/index'))->render();
        }
    }
?>