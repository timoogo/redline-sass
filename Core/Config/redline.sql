-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : lun. 21 déc. 2020 à 20:16
-- Version du serveur :  10.5.6-MariaDB
-- Version de PHP : 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `redline`
--

-- --------------------------------------------------------

--
-- Structure de la table `friends`
--

CREATE TABLE `friends` (
  `user_id` int(11) DEFAULT NULL,
  `friend_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `friends`
--

INSERT INTO `friends` (`user_id`, `friend_id`) VALUES
(1, 3),
(3, 1),
(1, 2),
(2, 1),
(1, 4),
(4, 1),
(3, 4),
(4, 3),
(3, 2),
(2, 3),
(4, 2),
(2, 4),
(3, 5),
(5, 3),
(5, 1),
(1, 5);

-- --------------------------------------------------------

--
-- Structure de la table `messages`
--

CREATE TABLE `messages` (
  `user_id` int(11) DEFAULT NULL,
  `user_name` varchar(50) DEFAULT NULL,
  `poll_id` int(11) DEFAULT NULL,
  `message_content` varchar(50) DEFAULT NULL,
  `message_date` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `polls`
--

CREATE TABLE `polls` (
  `poll_id` int(11) NOT NULL,
  `poll_title` varchar(80) NOT NULL,
  `poll_answer1` varchar(20) NOT NULL,
  `poll_answer2` varchar(20) NOT NULL,
  `poll_link` varchar(40) DEFAULT NULL,
  `poll_top_percent` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `poll_limit` timestamp NULL DEFAULT current_timestamp(),
  `poll_creator` varchar(80) NOT NULL,
  `accepted_id` int(11) DEFAULT NULL,
  `poll_answer1_votes` int(11) DEFAULT 0,
  `poll_answer2_votes` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `polls`
--

INSERT INTO `polls` (`poll_id`, `poll_title`, `poll_answer1`, `poll_answer2`, `poll_link`, `poll_top_percent`, `created_at`, `poll_limit`, `poll_creator`, `accepted_id`, `poll_answer1_votes`, `poll_answer2_votes`) VALUES
(1, 'Que vais-je manger ?', 'Japonais', 'Chinois', NULL, NULL, '2020-12-02 22:15:19', '2023-01-01 00:00:00', 'naylek', 1, 1, 1),
(2, 'Je fais quoi ce soir ?', 'Dodo', 'Sport', NULL, NULL, '2020-12-02 22:16:59', '2020-12-03 00:00:00', 'naylek', 1, 0, 0),
(3, 'Que préfèrez-vous', 'Le canard', 'Le foie gras', NULL, NULL, '2020-12-02 22:18:14', '2020-12-06 00:00:00', 'timogo', 4, 0, 0),
(4, 'Je regarde quoi au cinema ?', 'Film 1', 'Film 2', NULL, NULL, '2020-12-02 22:20:48', '2020-12-03 06:00:00', 'matthis', 2, 0, 0),
(5, 'Je demande quoi a Noël ?', 'Une TV', 'Une ps5', NULL, NULL, '2020-12-02 22:22:17', '2020-12-20 14:00:00', 'hugo', 3, 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `polls_answered`
--

CREATE TABLE `polls_answered` (
  `poll_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `polls_answered`
--

INSERT INTO `polls_answered` (`poll_id`, `user_id`) VALUES
(1, 3),
(1, 5);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(65) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_isOnline` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_email`, `user_password`, `user_isOnline`) VALUES
(1, 'naylek', 'raoultkelian@gmail.com', '0cc175b9c0f1b6a831c399e269772661', 0),
(2, 'matthis', 'matthis@gmail.com', '0cc175b9c0f1b6a831c399e269772661', 0),
(3, 'hugo', 'hugo@gmail.com', '0cc175b9c0f1b6a831c399e269772661', 1),
(4, 'timogo', 'timogo@gmail.com', '0cc175b9c0f1b6a831c399e269772661', 0),
(5, 'toto', 'a@a.fr', '0cc175b9c0f1b6a831c399e269772661', 1);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `polls`
--
ALTER TABLE `polls`
  ADD PRIMARY KEY (`poll_id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `polls`
--
ALTER TABLE `polls`
  MODIFY `poll_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
-- Structure de la table `polls_answered`
--

CREATE TABLE `polls_answered` (
  `poll_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `polls_answered`
--

INSERT INTO `polls_answered` (`poll_id`, `user_id`) VALUES
(1, 3),
(1, 5);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(65) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_isOnline` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_email`, `user_password`, `user_isOnline`) VALUES
(1, 'naylek', 'raoultkelian@gmail.com', '0cc175b9c0f1b6a831c399e269772661', 0),
(2, 'matthis', 'matthis@gmail.com', '0cc175b9c0f1b6a831c399e269772661', 0),
(3, 'hugo', 'hugo@gmail.com', '0cc175b9c0f1b6a831c399e269772661', 1),
(4, 'timogo', 'timogo@gmail.com', '0cc175b9c0f1b6a831c399e269772661', 0),
(5, 'toto', 'a@a.fr', '0cc175b9c0f1b6a831c399e269772661', 1);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `polls`
--
ALTER TABLE `polls`
  ADD PRIMARY KEY (`poll_id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `polls`
--
ALTER TABLE `polls`
  MODIFY `poll_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
