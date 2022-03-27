-- phpMyAdmin SQL Dump
-- version 4.9.10
-- https://www.phpmyadmin.net/
--
-- Hôte : db5006694185.hosting-data.io
-- Généré le : jeu. 24 mars 2022 à 00:29
-- Version du serveur : 10.5.12-MariaDB-1:10.5.12+maria~bullseye-log
-- Version de PHP : 7.0.33-0+deb9u12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `dbs5538781`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `preview` text NOT NULL,
  `description` text NOT NULL,
  `content` text NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`id`, `title`, `preview`, `description`, `content`, `date`) VALUES
(1, 'TipsChat Bêta', 'https://www.journaldugeek.com/content/uploads/2021/12/template-jdg-2021-12-08t152536-421.jpg', 'Lancement de notre première app prochainement.', 'Contenue de l\'article', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `preview` text NOT NULL,
  `description` text NOT NULL,
  `content` text NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `services`
--

INSERT INTO `services` (`id`, `title`, `preview`, `description`, `content`, `date`) VALUES
(1, 'Bear Shield', 'https://www.zupimages.net/up/22/07/olse.png', 'Protégez-vous dès à présent contre la cybercriminalité sur Discord.', '<br>\r\n<strong>Comment fonctionne Bear Shield ?</strong>\r\n<br>\r\nPour détecter les codes malveillants, BS combine en général plusieurs méthodes. Tout d\'abord, il bloque l\'accès à certains sites malveillants signaler par la communauté ou lister par notre équipe.\r\n<br>\r\nEnsuite il compare des codes avec celle de notre base de donnée tenue à jour par notre équipe, il parvient aussi à scruter les fichiers qui chercheraient à s\'installer ou qui enverraient des requêtes vers des liens prohibés par notre système.\r\n<br>\r\n<br>\r\n<strong>Bear Shield, est-il efficace ?</strong>\r\n<br>\r\nSi aucun logiciel de sécurité n\'est infaillible, soyez sûr que Bear Shield sera plus fiable que certains anti-virus, car il sera principalement axés pour la sécurité de discord.\r\n<br>\r\nTout le contraire d\'un anti-virus présent sur le marché qui offre des performances plus globales non axées à discord.\r\n<br>\r\n<br>\r\n<strong>Combien coûte Bear Shield ?</strong>\r\n<br>\r\n\r\nNous assurons que Bear Shield est gratuit, est le restera. Cependant, notre système est basé sur une protection participatif, donc en contrepartie il est nécessaire de nous signaler (sites, programme) malveillant afin de continuer de faire vivre ce beau projet.\r\n<br>\r\n<br>\r\n\r\n<form method=\"get\" action=\"bearshield/Bear_Shield_v1.zip\"><button class=\"btn\"><i class=\"fa fa-download\"></i></button></form>', '2022-02-18 18:31:35');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
