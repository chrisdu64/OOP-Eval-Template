<?php

declare(strict_types=1);

namespace App;

use PDO;

    class DB
    {
        private static PDO $pdo;

        public function __construct(string $config = 'mysql:host=db;dbname=wf3_php_final_christophe;', string $user = 'root', string $password = 'root')
        {
            try {
                static::$pdo = new PDO($config, $user, $password);
            } catch (\PDOException $e) {
                throw new \PDOException($e->getMessage(), $e->getCode());
            }
        }

        public function getStaticPdo(): PDO
        {
            return static::$pdo;
        }
    }