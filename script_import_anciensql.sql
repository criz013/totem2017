-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mar 14 Mars 2017 à 10:40
-- Version du serveur :  10.1.13-MariaDB
-- Version de PHP :  5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `challengetotem`
--


-- --------------------------------------------------------

--
-- Structure de la table `challenge`
--

DROP TABLE IF EXISTS `a_challenge`;
CREATE TABLE `a_challenge` (
  `id` int(11) NOT NULL,
  `challenge_year` year(4) NOT NULL,
  `challenge_date` date NOT NULL,
  `challenge_name` varchar(255) NOT NULL,
  `challenge_description` text NOT NULL,
  `challenge_hashtag` varchar(80) NOT NULL,
  `facebook_page_id` bigint(20) NOT NULL,
  `facebook_album_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `challenge`
--

INSERT INTO `a_challenge` (`id`, `challenge_year`, `challenge_date`, `challenge_name`, `challenge_description`, `challenge_hashtag`, `facebook_page_id`, `facebook_album_id`) VALUES
(1, 2016, '2016-04-01', 'Edition 2016', 'L''évènement challenge totem édition 2016 blablabla...', 'challenge2016', 1854153591535322, 1854181114865903),
(2, 2017, '2017-05-15', 'Edition 2017', 'Le challenge totem Edition 2017', 'challenge2017', 1854153591535322, 1854181114865903);

-- --------------------------------------------------------

--
-- Structure de la table `equipages`
--

DROP TABLE IF EXISTS `a_equipages`;
CREATE TABLE `a_equipages` (
  `id` int(11) NOT NULL,
  `team_pilot_name` varchar(255) NOT NULL,
  `team_copilot_name` varchar(255) NOT NULL,
  `team_pilot_firstname` varchar(255) NOT NULL,
  `team_copilot_firstname` varchar(255) NOT NULL,
  `team_pilot_pic` text NOT NULL,
  `team_copilot_pic` text NOT NULL,
  `team_pilot_bio` text NOT NULL,
  `team_copilot_bio` varchar(255) NOT NULL,
  `team_hashtag` varchar(255) NOT NULL,
  `pilot_drivinglicence` text NOT NULL,
  `copilot_drivinglicence` text NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `challenge_id` int(11) NOT NULL,
  `contractfilled_upload` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `equipages`
--

INSERT INTO `a_equipages` (`id`, `team_pilot_name`, `team_copilot_name`, `team_pilot_firstname`, `team_copilot_firstname`, `team_pilot_pic`, `team_copilot_pic`, `team_pilot_bio`, `team_copilot_bio`, `team_hashtag`, `pilot_drivinglicence`, `copilot_drivinglicence`, `user_id`, `challenge_id`, `contractfilled_upload`) VALUES
(1, 'fixaris', 'da silva', 'géraldine', 'leonardo', '/uploads/picture.png', '/uploads/picture.png', '2016', 'lorem ipsum', '#haribo', '', '', '1', 1, ''),
(3, '', '', '', '', '', '', '', '', '#airbus', '', '', '', 2, ''),
(4, '', '', '', '', '', '', '', '', '#cmacgm', '', '', '', 2, ''),
(5, '', '', '', '', '', '', '', '', '#engie', '', '', '', 2, ''),
(6, '', '', '', '', '', '', '', '', '#pastis51', '', '', '', 2, ''),
(7, '', '', '', '', '', '', '', '', '#total', '', '', '', 2, ''),
(8, '', '', '', '', '', '', '', '', '#travaux', '', '', '', 2, ''),
(9, '', '', '', '', '', '', '', '', '#voyageponant', '', '', '', 2, ''),
(10, '', '', '', '', '', '', '', '', '#wika', '', '', '', 2, ''),
(11, 'fixaris', 'da silva', 'geraldine', 'leonardo', '', '', 'cest une femme', 'c''est un brésilien', 'webforce3', '', '', '0', 0, ''),
(12, 'Jojo', 'Jarjar', 'La Frite', 'Bins', '/uploads/engieeolienne.jpg', '', 'je suis une frite', 'je suis dans star wars', '#engie', '', '', '9', 0, '');

-- --------------------------------------------------------

--
-- Structure de la table `partners`
--

DROP TABLE IF EXISTS `a_partners`;
CREATE TABLE `a_partners` (
  `id` int(11) NOT NULL,
  `partners_logo` text NOT NULL,
  `partners_name` varchar(255) NOT NULL,
  `partners_url` varchar(255) NOT NULL,
  `challenge_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `partners`
--

INSERT INTO `a_partners` (`id`, `partners_logo`, `partners_name`, `partners_url`, `challenge_id`) VALUES
(1, '/uploads/partners/2017/haribo.svg.png', 'haribo', 'http://www.haribo.fr', 2),
(2, '/uploads/partners/2017/CMACGM.png', 'CMA CGM', 'https://www.cma-cgm.fr/', 2),
(3, '/uploads/partners/2017/Engie.png', 'Engie', 'http://www.engie.fr/', 2),
(4, '/uploads/partners/2017/airbus.png', 'Airbus', 'http://www.airbus.com/fr/', 2),
(5, '/uploads/partners/2017/ponant.png', 'Voyage Ponant', 'http://www.ponant.com/', 2),
(6, '/uploads/partners/2017/travaux.png', 'travaux.com', 'http://www.travaux.com/', 2),
(7, '/uploads/partners/2017/wiko.png', 'Wiko', 'https://fr.wikomobile.com/', 2);

-- --------------------------------------------------------

--
-- Structure de la table `profile`
--

DROP TABLE IF EXISTS `a_profile`;
CREATE TABLE `a_profile` (
  `id` int(11) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `company_description` text NOT NULL,
  `company_logo` text NOT NULL,
  `company_link` varchar(255) NOT NULL,
  `team_id` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `profile`
--

INSERT INTO `a_profile` (`id`, `company_name`, `company_description`, `company_logo`, `company_link`, `team_id`) VALUES
(1, 'haribo', 'test de company', '/uploads/logo.png', 'http://www.haribo.fr', '1'),
(2, 'webforce3', 'webforce3 tactactac', '', 'http://www.webforce3.fr', '0'),
(3, 'Engie', 'Super entreprise d''électricité', '/uploads/engielogo.png', 'http://www.engie.com', '12');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `a_users`;
CREATE TABLE `a_users` (
  `id` int(11) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `username` varchar(80) DEFAULT NULL,
  `role` varchar(255) NOT NULL DEFAULT 'user',
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `type` enum('twizzy','company','volunteer','') DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `users`
--

INSERT INTO `a_users` (`id`, `last_name`, `first_name`, `username`, `role`, `phone`, `email`, `password`, `type`, `created_at`, `modified_at`) VALUES
(1, 'Leonardo', 'BALLAND', NULL, 'admin', '0782450946', 'balland.leonardo@outlook.fr', 'kirikou', NULL, '2016-12-20 15:14:21', '0000-00-00 00:00:00'),
(2, 'Géraldine', 'Fixaris', NULL, 'user', '0786974651', 'g.fixaris@gmail.com', '$2y$10$ai46ppoG29GPJUXL5/Bf5ed0KP8iIYDeGOBocQJJe5kQWX1J6EJTK', 'volunteer', '2016-12-20 02:30:07', '2016-12-20 02:30:07'),
(3, 'superstar', 'lionel', NULL, 'user', '0698643236', 'lio.superstar@test.com', '$2y$10$45QblnOpj31PEEi449Oc5ubXjpLjhs6XpKk3J2OFnxnlWfICwfoPW', 'twizzy', '2016-12-20 02:36:57', '2016-12-20 02:36:57'),
(4, 'fixaris', 'geraldine', NULL, 'user', '', 'g.fixaris@gmail.com', '$2y$10$vvQPB89Ys7HtoXBh.znPpura58/AZUVsKCKcYaDUAGzpa2UztBogm', NULL, '2016-12-29 23:50:38', '0000-00-00 00:00:00'),
(5, 'fixaris', 'geraldine', NULL, 'user', '', 'g.fixaris@gmail.com', '$2y$10$90fyrLPHiX1fPkwhyXAjEu3ensCw6dkZNR28S.9k2xSsCQaPXvW4a', NULL, '2016-12-29 23:51:29', '0000-00-00 00:00:00'),
(6, 'fixaris', 'geraldine', NULL, 'user', '', 'g.fixaris@gmail.com', '$2y$10$oyIAUDR4VX0KZLeSBpgnquqxrN6RLmdtbWU0I05OyfKjDcjZmortK', NULL, '2016-12-29 23:52:05', '0000-00-00 00:00:00'),
(7, 'fixarishjg', 'geraldineghk', NULL, 'user', '', 'g.fixaris@gmail.comfgf', '$2y$10$fZnVvwbIcuFU9//4uI3/LuTbTj6d6ui2qrS5BH.hyAPdjeltcvLhC', NULL, '2016-12-29 23:59:32', '0000-00-00 00:00:00'),
(8, 'fixarishjg', 'geraldineghk', NULL, 'user', '', 'g.fixaris@gmail.comfgf', '$2y$10$LZ30dwiuegdlBL8/YfvQu.hMXkXk/qh03fM1AccWOW0fPAfGFMDyW', NULL, '2016-12-29 23:59:50', '0000-00-00 00:00:00'),
(9, 'dequeker', 'matthieu', NULL, 'user', '', 'dequeker.matthieu@gmail.com', '$2y$10$35cxn7pWpQrTOK4U6a0AheVWwsqJVd5iXpZ5bhYalX0/8MYcM4K3K', NULL, '2016-12-30 00:02:04', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `website`
--

DROP TABLE IF EXISTS `a_website`;
CREATE TABLE `a_website` (
  `site_name` varchar(80) NOT NULL,
  `site_url` text NOT NULL,
  `site_contact_email` text NOT NULL,
  `site_logo` text NOT NULL,
  `site_description` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `website`
--

INSERT INTO `a_website` (`site_name`, `site_url`, `site_contact_email`, `site_logo`, `site_description`) VALUES
('Challenge Totem', 'https://totem-master-sexypanda.c9users.io/public/', 'test@test.com', 'logo.jpg', 'Le site pour les événements de Challenge Totem');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `challenge`
--
ALTER TABLE `a_challenge`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `equipages`
--
ALTER TABLE `a_equipages`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `partners`
--
ALTER TABLE `a_partners`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `profile`
--
ALTER TABLE `a_profile`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `a_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `challenge`
--
ALTER TABLE `a_challenge`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `equipages`
--
ALTER TABLE `a_equipages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT pour la table `partners`
--
ALTER TABLE `a_partners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT pour la table `profile`
--
ALTER TABLE `a_profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `a_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
