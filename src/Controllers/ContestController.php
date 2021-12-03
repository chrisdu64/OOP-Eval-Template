<?php

declare(strict_types=1);

namespace App\Controllers;

use App\View;

    class ContestController
    {
        public function index(): string
        {
            return (new View('Contest/index'))->render();
        }
    }
?>