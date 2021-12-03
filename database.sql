CREATE DATABASE `wf3_php_final_christophe` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;

-- wf3_php_final_christophe.contest definition

CREATE TABLE `contest` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `game_id` int NOT NULL,
  `start_date` date NOT NULL,
  `winner_id` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;


-- wf3_php_final_christophe.game definition

CREATE TABLE `game` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `min_players` int NOT NULL,
  `max_players` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;


-- wf3_php_final_christophe.player definition

CREATE TABLE `player` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `nickname` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;


-- wf3_php_final_christophe.player_contest definition

CREATE TABLE `player_contest` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `player_id` int NOT NULL,
  `contest_id` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;