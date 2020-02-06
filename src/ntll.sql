-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mer. 05 fév. 2020 à 15:45
-- Version du serveur :  10.4.6-MariaDB
-- Version de PHP :  7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `ntll`
--

-- --------------------------------------------------------

--
-- Structure de la table `config_button`
--

CREATE TABLE `config_button` (
  `id_button` int(11) NOT NULL,
  `button_name` varchar(50) NOT NULL,
  `button_link` varchar(50) NOT NULL,
  `button_hidden` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `config_button`
--

INSERT INTO `config_button` (`id_button`, `button_name`, `button_link`, `button_hidden`) VALUES
(3, 'localhost', 'http://127.0.0.1/', 'true'),
(4, 'phpmyadmin', 'https://127.0.0.1/phpmyadmin/', 'true');

-- --------------------------------------------------------

--
-- Structure de la table `config_button2`
--

CREATE TABLE `config_button2` (
  `id_button` int(11) NOT NULL,
  `button_name` varchar(50) NOT NULL,
  `button_link` varchar(50) NOT NULL,
  `button_hidden` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `config_button2`
--

INSERT INTO `config_button2` (`id_button`, `button_name`, `button_link`, `button_hidden`) VALUES
(3, 'Discord', 'https://discordapp.com/channels/@me', 'true'),
(4, 'Discord dev', 'https://discordapp.com/developers/applications/', 'true');

-- --------------------------------------------------------

--
-- Structure de la table `config_button3`
--

CREATE TABLE `config_button3` (
  `id_button` int(11) NOT NULL,
  `button_name` varchar(50) NOT NULL,
  `button_link` varchar(50) NOT NULL,
  `button_hidden` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `config_button3`
--

INSERT INTO `config_button3` (`id_button`, `button_name`, `button_link`, `button_hidden`) VALUES
(2, 'Pixabay', 'https://pixabay.com/fr/', 'true'),
(3, 'Bootstrap', 'https://getbootstrap.com/', 'true');

-- --------------------------------------------------------

--
-- Structure de la table `config_button4`
--

CREATE TABLE `config_button4` (
  `id_button` int(11) NOT NULL,
  `button_name` varchar(50) NOT NULL,
  `button_link` varchar(50) NOT NULL,
  `button_hidden` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `config_button5`
--

CREATE TABLE `config_button5` (
  `id_button` int(11) NOT NULL,
  `button_name` varchar(50) NOT NULL,
  `button_link` varchar(50) NOT NULL,
  `button_hidden` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `config_main`
--

CREATE TABLE `config_main` (
  `id` int(11) NOT NULL,
  `main_color` varchar(10) NOT NULL,
  `name_app` varchar(25) NOT NULL,
  `nav_dk` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `config_main`
--

INSERT INTO `config_main` (`id`, `main_color`, `name_app`, `nav_dk`) VALUES
(1, '', 'LOCALHOST', 'navbar-light');

-- --------------------------------------------------------

--
-- Structure de la table `config_page`
--

CREATE TABLE `config_page` (
  `id_cat` int(11) NOT NULL,
  `cat_name` varchar(50) NOT NULL,
  `photo_cat` text NOT NULL,
  `tf_cat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `config_page`
--

INSERT INTO `config_page` (`id_cat`, `cat_name`, `photo_cat`, `tf_cat`) VALUES
(1, 'code', 'code-oppa.png', 'true');

-- --------------------------------------------------------

--
-- Structure de la table `config_page2`
--

CREATE TABLE `config_page2` (
  `id_cat` int(11) NOT NULL,
  `cat_name` varchar(50) NOT NULL,
  `photo_cat` text NOT NULL,
  `tf_cat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `config_page2`
--

INSERT INTO `config_page2` (`id_cat`, `cat_name`, `photo_cat`, `tf_cat`) VALUES
(1, 'Discord', 'discord.png', 'true');

-- --------------------------------------------------------

--
-- Structure de la table `config_page3`
--

CREATE TABLE `config_page3` (
  `id_cat` int(11) NOT NULL,
  `cat_name` varchar(50) NOT NULL,
  `photo_cat` text NOT NULL,
  `tf_cat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `config_page3`
--

INSERT INTO `config_page3` (`id_cat`, `cat_name`, `photo_cat`, `tf_cat`) VALUES
(1, 'Outil', 'outil.png', 'true');

-- --------------------------------------------------------

--
-- Structure de la table `config_page4`
--

CREATE TABLE `config_page4` (
  `id_cat` int(11) NOT NULL,
  `cat_name` varchar(50) NOT NULL,
  `photo_cat` text NOT NULL,
  `tf_cat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `config_page4`
--

INSERT INTO `config_page4` (`id_cat`, `cat_name`, `photo_cat`, `tf_cat`) VALUES
(1, 'ESPACE 4', '', 'false');

-- --------------------------------------------------------

--
-- Structure de la table `config_page5`
--

CREATE TABLE `config_page5` (
  `id_cat` int(11) NOT NULL,
  `cat_name` varchar(50) NOT NULL,
  `photo_cat` text NOT NULL,
  `tf_cat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `config_page5`
--

INSERT INTO `config_page5` (`id_cat`, `cat_name`, `photo_cat`, `tf_cat`) VALUES
(1, 'ESPACE 5', '', 'false');

-- --------------------------------------------------------

--
-- Structure de la table `google_button`
--

CREATE TABLE `google_button` (
  `id_button` int(11) NOT NULL,
  `button_name` varchar(20) NOT NULL,
  `button_link` text NOT NULL,
  `button_hidden` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `google_button`
--

INSERT INTO `google_button` (`id_button`, `button_name`, `button_link`, `button_hidden`) VALUES
(3, 'Youtube', 'https://www.youtube.com/', 'true');

-- --------------------------------------------------------

--
-- Structure de la table `google_page`
--

CREATE TABLE `google_page` (
  `id_google` int(11) NOT NULL,
  `google_photo` varchar(50) NOT NULL,
  `tf_google` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `google_page`
--

INSERT INTO `google_page` (`id_google`, `google_photo`, `tf_google`) VALUES
(1, 'google.png', 'true');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `config_button`
--
ALTER TABLE `config_button`
  ADD PRIMARY KEY (`id_button`);

--
-- Index pour la table `config_button2`
--
ALTER TABLE `config_button2`
  ADD PRIMARY KEY (`id_button`);

--
-- Index pour la table `config_button3`
--
ALTER TABLE `config_button3`
  ADD PRIMARY KEY (`id_button`);

--
-- Index pour la table `config_button4`
--
ALTER TABLE `config_button4`
  ADD PRIMARY KEY (`id_button`);

--
-- Index pour la table `config_button5`
--
ALTER TABLE `config_button5`
  ADD PRIMARY KEY (`id_button`);

--
-- Index pour la table `config_main`
--
ALTER TABLE `config_main`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `config_page`
--
ALTER TABLE `config_page`
  ADD PRIMARY KEY (`id_cat`);

--
-- Index pour la table `config_page2`
--
ALTER TABLE `config_page2`
  ADD PRIMARY KEY (`id_cat`);

--
-- Index pour la table `config_page3`
--
ALTER TABLE `config_page3`
  ADD PRIMARY KEY (`id_cat`);

--
-- Index pour la table `config_page4`
--
ALTER TABLE `config_page4`
  ADD PRIMARY KEY (`id_cat`);

--
-- Index pour la table `config_page5`
--
ALTER TABLE `config_page5`
  ADD PRIMARY KEY (`id_cat`);

--
-- Index pour la table `google_button`
--
ALTER TABLE `google_button`
  ADD PRIMARY KEY (`id_button`);

--
-- Index pour la table `google_page`
--
ALTER TABLE `google_page`
  ADD PRIMARY KEY (`id_google`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `config_button`
--
ALTER TABLE `config_button`
  MODIFY `id_button` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `config_button2`
--
ALTER TABLE `config_button2`
  MODIFY `id_button` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `config_button3`
--
ALTER TABLE `config_button3`
  MODIFY `id_button` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `config_button4`
--
ALTER TABLE `config_button4`
  MODIFY `id_button` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `config_button5`
--
ALTER TABLE `config_button5`
  MODIFY `id_button` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `config_main`
--
ALTER TABLE `config_main`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `config_page`
--
ALTER TABLE `config_page`
  MODIFY `id_cat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `config_page2`
--
ALTER TABLE `config_page2`
  MODIFY `id_cat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `config_page3`
--
ALTER TABLE `config_page3`
  MODIFY `id_cat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `config_page4`
--
ALTER TABLE `config_page4`
  MODIFY `id_cat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `config_page5`
--
ALTER TABLE `config_page5`
  MODIFY `id_cat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `google_button`
--
ALTER TABLE `google_button`
  MODIFY `id_button` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `google_page`
--
ALTER TABLE `google_page`
  MODIFY `id_google` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
