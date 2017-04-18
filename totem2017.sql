-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mar 18 Avril 2017 à 23:44
-- Version du serveur :  5.7.11
-- Version de PHP :  7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `totem2017`
--

-- --------------------------------------------------------

--
-- Structure de la table `album`
--

CREATE TABLE `album` (
  `id` int(11) NOT NULL,
  `id_challenge` int(11) NOT NULL,
  `nom` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alt` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `src` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `challenge`
--

CREATE TABLE `challenge` (
  `id` int(11) NOT NULL,
  `year` int(4) NOT NULL,
  `name` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `hashtag` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_start` datetime NOT NULL,
  `date_end` datetime NOT NULL,
  `status` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `don` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_sociaux` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=COMPACT;

--
-- Contenu de la table `challenge`
--

INSERT INTO `challenge` (`id`, `year`, `name`, `description`, `text`, `hashtag`, `date_start`, `date_end`, `status`, `don`, `id_sociaux`) VALUES
(1, 2017, '', '', ' <h2>Le Programme</h2>           <p>Cette année Totem Challenge aura lieu le 22 septembre 2017</p>           <p>Départ des équipage à 09H00</p>           <p>Fin du challenge à 18H00</p>', '', '2017-04-21 09:00:00', '2017-06-19 18:00:00', '', '', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `revue_press`
--

CREATE TABLE `revue_press` (
  `id` int(11) NOT NULL,
  `titre` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `chapo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `corp` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `lien` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dateCreate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `revue_press`
--

INSERT INTO `revue_press` (`id`, `titre`, `chapo`, `corp`, `lien`, `photo`, `dateCreate`) VALUES
(1, 'test1', 'test1', 'test1', 'test1', NULL, '2017-04-18 09:01:18');

-- --------------------------------------------------------

--
-- Structure de la table `r_user_chall`
--

CREATE TABLE `r_user_chall` (
  `id_user` int(11) NOT NULL,
  `id_chall` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `r_user_team`
--

CREATE TABLE `r_user_team` (
  `id_user` int(11) NOT NULL,
  `id_team` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `stat_sociaux`
--

CREATE TABLE `stat_sociaux` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `team`
--

CREATE TABLE `team` (
  `id` int(11) NOT NULL,
  `nom` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pseudo` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `last_name` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  `status` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token_validation` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token_lost_pwd` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `valider` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `last_name`, `first_name`, `role`, `phone`, `email`, `password`, `created`, `modified`, `status`, `token_validation`, `token_lost_pwd`, `username`, `valider`) VALUES
(37, 'administrateur', 'administrateur', 'admin', '0011223344', 'administrateur@totem.fr', '$2y$10$CsGLQLu80beq2GLSC6tpduPDgf06t7/JTixgua2qLdrj3gd45aPRO', '2017-04-15 03:10:28', NULL, 'valider', '0y_XE-h5OdgroeZMTVi-7aVsOfHiv9fp', NULL, 'administrateur@totem.fr', 1),
(39, 'bautista', 'christophhe', 'sponsor', '0011223344', 'chrastope@gmail.com', '$2y$10$ryPehVH/sCVL5F.UW/C.C.n3f/lKI1B.KyjG/7RkR1oCmo02jIPZ6', '2017-04-17 05:02:52', NULL, 'valider', 'x4VdjptHu0DE__y4JCp_msJgfDDC34dU', NULL, 'chrastope@gmail.com', 1),
(40, 'bautista', 'christophe', 'benevole', '0011223344', 'chrastope@hotmail.com', '$2y$10$0ApbKj.e0Q6IQwtBOLx6KuxWh64AcdbHPq0Af7/c7nk70g6KGYHS.', '2017-04-18 07:09:37', NULL, 'refuser', 'Aq6xiwJf7aUdnUqTuQdtcOzyETfyssk1', NULL, 'chrastope@hotmail.com', 0),
(41, 'test 1', 'test1', 'sponsor', '0011223344', 'test1@test.com', '$2y$10$uwbdzjN1vEGrfY7M1pGfC.YItDf7juvkv2JfsSU1iag2tSfVamvBe', '2017-04-18 10:36:45', NULL, 'En attente', 'DWeLfLMwpn7rbkM1lLYVW30BH88D1Oqs', NULL, 'test1@test.com', 0);

-- --------------------------------------------------------

--
-- Structure de la table `users_profil`
--

CREATE TABLE `users_profil` (
  `id` int(11) NOT NULL,
  `id_users` int(11) NOT NULL,
  `name_compagny` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `logo` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `haschtag` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `users_profil`
--

INSERT INTO `users_profil` (`id`, `id_users`, `name_compagny`, `description`, `logo`, `link`, `haschtag`, `avatar`) VALUES
(5, 37, NULL, NULL, NULL, NULL, NULL, NULL),
(7, 39, NULL, NULL, NULL, NULL, NULL, NULL),
(8, 40, NULL, NULL, NULL, NULL, NULL, NULL),
(9, 41, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `website`
--

CREATE TABLE `website` (
  `id` int(11) NOT NULL,
  `titre` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adresse` varchar(400) COLLATE utf8mb4_unicode_ci NOT NULL,
  `codePostal` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ville` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `twitter` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instansgram` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `website`
--

INSERT INTO `website` (`id`, `titre`, `url`, `adresse`, `codePostal`, `ville`, `phone`, `logo`, `description`, `email`, `facebook`, `twitter`, `instansgram`) VALUES
(1, 'Challenge Totem 2017', 'www.webfor3.com', '9 impasse des gymnastes', '13012', 'Marseille', '', 'logo1', 'lorem lorem 2', 'chrastophe@gmail.com', 'https://www.facebook.com/christophe.bautista.7', 'https://twitter.com/crizzouille', 'https://twitter.com/crizzouille');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `album`
--
ALTER TABLE `album`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_challenge` (`id_challenge`);

--
-- Index pour la table `challenge`
--
ALTER TABLE `challenge`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_sociaux` (`id_sociaux`);

--
-- Index pour la table `revue_press`
--
ALTER TABLE `revue_press`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `r_user_chall`
--
ALTER TABLE `r_user_chall`
  ADD UNIQUE KEY `id_user` (`id_user`),
  ADD UNIQUE KEY `id_chall` (`id_chall`),
  ADD KEY `id_user_2` (`id_user`),
  ADD KEY `id_chall_2` (`id_chall`);

--
-- Index pour la table `r_user_team`
--
ALTER TABLE `r_user_team`
  ADD UNIQUE KEY `id_user` (`id_user`),
  ADD UNIQUE KEY `id_team` (`id_team`);

--
-- Index pour la table `stat_sociaux`
--
ALTER TABLE `stat_sociaux`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users_profil`
--
ALTER TABLE `users_profil`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_users` (`id_users`);

--
-- Index pour la table `website`
--
ALTER TABLE `website`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `album`
--
ALTER TABLE `album`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `challenge`
--
ALTER TABLE `challenge`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `revue_press`
--
ALTER TABLE `revue_press`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `stat_sociaux`
--
ALTER TABLE `stat_sociaux`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `team`
--
ALTER TABLE `team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT pour la table `users_profil`
--
ALTER TABLE `users_profil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT pour la table `website`
--
ALTER TABLE `website`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `album`
--
ALTER TABLE `album`
  ADD CONSTRAINT `album_ibfk_1` FOREIGN KEY (`id_challenge`) REFERENCES `challenge` (`id`);

--
-- Contraintes pour la table `challenge`
--
ALTER TABLE `challenge`
  ADD CONSTRAINT `challenge_ibfk_1` FOREIGN KEY (`id_sociaux`) REFERENCES `stat_sociaux` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `r_user_chall`
--
ALTER TABLE `r_user_chall`
  ADD CONSTRAINT `r_user_chall_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `r_user_chall_ibfk_2` FOREIGN KEY (`id_chall`) REFERENCES `challenge` (`id`);

--
-- Contraintes pour la table `r_user_team`
--
ALTER TABLE `r_user_team`
  ADD CONSTRAINT `r_user_team_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `r_user_team_ibfk_2` FOREIGN KEY (`id_team`) REFERENCES `team` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `users_profil`
--
ALTER TABLE `users_profil`
  ADD CONSTRAINT `users_profil_ibfk_1` FOREIGN KEY (`id_users`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
