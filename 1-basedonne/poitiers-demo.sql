-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Ven 11 Janvier 2019 à 23:48
-- Version du serveur :  10.1.13-MariaDB
-- Version de PHP :  7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `poitiers-demo`
--

-- --------------------------------------------------------

--
-- Structure de la table `actions_sur_alerte`
--

CREATE TABLE `actions_sur_alerte` (
  `id` int(10) NOT NULL,
  `nom` varchar(20) DEFAULT NULL,
  `id_type_alerte` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `alerte`
--

CREATE TABLE `alerte` (
  `id` int(10) NOT NULL,
  `heure` varchar(6) DEFAULT NULL,
  `date` varchar(11) DEFAULT NULL,
  `id_type_alerte` int(10) DEFAULT NULL,
  `id_capteur` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `alerte`
--

INSERT INTO `alerte` (`id`, `heure`, `date`, `id_type_alerte`, `id_capteur`) VALUES
(3, '11:38', '29/11/2018', 1, 1),
(4, '14:21', '28/11/2018', 2, 1);

-- --------------------------------------------------------

--
-- Structure de la table `batiment`
--

CREATE TABLE `batiment` (
  `id` int(10) NOT NULL,
  `nom` varchar(100) DEFAULT NULL,
  `Description` varchar(254) DEFAULT NULL,
  `id_plan` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `batiment`
--

INSERT INTO `batiment` (`id`, `nom`, `Description`, `id_plan`) VALUES
(8, 'bibliothèque', 'bibliothèque principale', 41),
(12, 'département informatique', 'informatique département.', 45);

-- --------------------------------------------------------

--
-- Structure de la table `capteur`
--

CREATE TABLE `capteur` (
  `id_capteur` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `capteur`
--

INSERT INTO `capteur` (`id_capteur`, `nom`) VALUES
(1, 'capteur_temperature'),
(2, 'capteur_humudité'),
(3, 'capteur_mouvement'),
(4, 'capteur_detecteur_incendie');

-- --------------------------------------------------------

--
-- Structure de la table `capteur_detecteur_incendie`
--

CREATE TABLE `capteur_detecteur_incendie` (
  `id` int(10) NOT NULL,
  `Num_serie` varchar(20) DEFAULT NULL,
  `Description` varchar(50) DEFAULT NULL,
  `Endroit` varchar(20) DEFAULT NULL,
  `Etat` varchar(20) DEFAULT NULL,
  `etat_incendie` varchar(10) DEFAULT NULL,
  `id_salle` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `capteur_humudité`
--

CREATE TABLE `capteur_humudité` (
  `id` int(10) NOT NULL,
  `Num_serie` varchar(20) DEFAULT NULL,
  `Description` varchar(50) DEFAULT NULL,
  `Endroit` varchar(20) DEFAULT NULL,
  `Etat` varchar(20) DEFAULT NULL,
  `Humid_max` decimal(10,0) DEFAULT NULL,
  `Humid_min` decimal(10,0) DEFAULT NULL,
  `Humid_reelle` decimal(10,0) DEFAULT NULL,
  `id_salle` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `capteur_mouvement`
--

CREATE TABLE `capteur_mouvement` (
  `id` int(10) NOT NULL,
  `Num_serie` varchar(20) DEFAULT NULL,
  `Description` varchar(50) DEFAULT NULL,
  `Endroit` varchar(20) DEFAULT NULL,
  `Etat` varchar(20) DEFAULT NULL,
  `etat_mouvement` varchar(10) DEFAULT NULL,
  `id_salle` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `capteur_temperature`
--

CREATE TABLE `capteur_temperature` (
  `id` int(10) NOT NULL,
  `Num_serie` varchar(20) DEFAULT NULL,
  `Description` varchar(50) DEFAULT NULL,
  `Endroit` varchar(20) DEFAULT NULL,
  `Etat` varchar(20) DEFAULT NULL,
  `Temp_max` decimal(10,0) DEFAULT NULL,
  `Temp_min` decimal(10,0) DEFAULT NULL,
  `Temp_reelle` decimal(10,0) DEFAULT NULL,
  `id_salle` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `capteur_temperature_humidite`
--

CREATE TABLE `capteur_temperature_humidite` (
  `id` int(10) NOT NULL,
  `Num_serie` varchar(20) DEFAULT NULL,
  `Description` varchar(50) DEFAULT NULL,
  `Endroit` varchar(50) DEFAULT NULL,
  `Etat` varchar(50) DEFAULT NULL,
  `Humid_max` float DEFAULT NULL,
  `Humid_min` float DEFAULT NULL,
  `Humid_reelle` float DEFAULT NULL,
  `Temp_max` float DEFAULT NULL,
  `Temp_min` float DEFAULT NULL,
  `Temp_reelle` float DEFAULT NULL,
  `id_salle` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `categorie_salle`
--

CREATE TABLE `categorie_salle` (
  `id` int(10) NOT NULL,
  `nom` varchar(50) DEFAULT NULL,
  `Description` varchar(254) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `categorie_salle`
--

INSERT INTO `categorie_salle` (`id`, `nom`, `Description`) VALUES
(1, 'Salle d''informatique', 'salle tp informatique équipé par materiel'),
(2, 'Salle de cours', 'salle du cours polivalante'),
(3, 'Salle de TD', 'salles pour travaux dirigé '),
(4, 'Salle de mécanique', 'salle équipé par matérial industriel'),
(5, 'Salle d''électronique', 'salle équipé par matérial électronique');

-- --------------------------------------------------------

--
-- Structure de la table `climatiseur`
--

CREATE TABLE `climatiseur` (
  `id` int(10) NOT NULL,
  `Num_serie` varchar(20) DEFAULT NULL,
  `Description` varchar(100) NOT NULL,
  `endroit` varchar(20) DEFAULT NULL,
  `etat` varchar(20) DEFAULT NULL,
  `categorie` varchar(20) NOT NULL,
  `id_salle` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `endroid`
--

CREATE TABLE `endroid` (
  `id` int(10) NOT NULL,
  `nom` varchar(20) DEFAULT NULL,
  `description` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `etage`
--

CREATE TABLE `etage` (
  `id` int(10) NOT NULL,
  `nom` varchar(20) DEFAULT NULL,
  `Description` varchar(50) DEFAULT NULL,
  `id_batiment` int(10) DEFAULT NULL,
  `id_plan` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `extincteur`
--

CREATE TABLE `extincteur` (
  `id` int(10) NOT NULL,
  `Num_serie` varchar(20) DEFAULT NULL,
  `Description` varchar(50) DEFAULT NULL,
  `Endroit` varchar(20) DEFAULT NULL,
  `Etat` varchar(20) DEFAULT NULL,
  `date_expiration` date DEFAULT NULL,
  `id_etage` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `gestion_alertes`
--

CREATE TABLE `gestion_alertes` (
  `id` int(10) NOT NULL,
  `id_utilisateur` int(10) DEFAULT NULL,
  `id_alerte` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `image`
--

CREATE TABLE `image` (
  `id` int(10) NOT NULL,
  `nom` varchar(20) DEFAULT NULL,
  `path` varchar(50) DEFAULT NULL,
  `id_batiment` int(10) DEFAULT NULL,
  `id_etage` int(10) DEFAULT NULL,
  `id_salle` int(10) DEFAULT NULL,
  `id_endroit` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `image`
--

INSERT INTO `image` (`id`, `nom`, `path`, `id_batiment`, `id_etage`, `id_salle`, `id_endroit`) VALUES
(27, 'bibliothèque', 'bibliotheque-sallaz.jpg', 8, NULL, NULL, NULL),
(31, 'département informat', 'departement_info.jpg', 12, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `plan`
--

CREATE TABLE `plan` (
  `id` int(10) NOT NULL,
  `nom` varchar(20) DEFAULT NULL,
  `path` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `plan`
--

INSERT INTO `plan` (`id`, `nom`, `path`) VALUES
(41, 'bibliothèque', 'plan_beblio.jpg'),
(45, 'département informat', 'plan_info.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `salle`
--

CREATE TABLE `salle` (
  `id` int(10) NOT NULL,
  `Num_salle` varchar(10) DEFAULT NULL,
  `Description` varchar(50) DEFAULT NULL,
  `id_categorie` int(20) DEFAULT NULL,
  `Etat` varchar(20) DEFAULT '',
  `nbr_fenetres` int(10) DEFAULT NULL,
  `nbr_portes` int(10) DEFAULT NULL,
  `id_image` int(11) DEFAULT NULL,
  `id_etage` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `salle`
--

INSERT INTO `salle` (`id`, `Num_salle`, `Description`, `id_categorie`, `Etat`, `nbr_fenetres`, `nbr_portes`, `id_image`, `id_etage`) VALUES
(28, 'Salle 1', 'Salle 1 - Salle de cours', 2, 'En service', 3, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `type_alerte`
--

CREATE TABLE `type_alerte` (
  `id` int(10) NOT NULL,
  `nom` varchar(20) DEFAULT NULL,
  `description` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `type_alerte`
--

INSERT INTO `type_alerte` (`id`, `nom`, `description`) VALUES
(1, 'Froid', 'il fait froid'),
(2, 'Chaud', 'il fait chaud');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id` int(10) NOT NULL,
  `Nom` varchar(20) NOT NULL,
  `Prenom` varchar(20) NOT NULL,
  `login` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `statut` varchar(20) NOT NULL,
  `telephone` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `Nom`, `Prenom`, `login`, `password`, `email`, `statut`, `telephone`) VALUES
(1, 'Admin', 'Admin', 'admin', 'admin', 'admin-@gmail.com', 'sp', '6540555'),
(2, 'kourmou', 'omar', 'kourmou.omar@gmail.com', '123456789', 'kourmou.omar@gmail.c', '', '654094990'),
(8, 'EL BARHOUMI', 'Mohamed Iliass', 'iliasselbarhoumi@gmail.com', '12121212', 'iliasselbarhoumi@gma', '', '658584432');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `actions_sur_alerte`
--
ALTER TABLE `actions_sur_alerte`
  ADD PRIMARY KEY (`id`),
  ADD KEY `action_sur_type_alerte` (`id_type_alerte`);

--
-- Index pour la table `alerte`
--
ALTER TABLE `alerte`
  ADD PRIMARY KEY (`id`),
  ADD KEY `alerte_capteur` (`id_capteur`),
  ADD KEY `alerte_type_alerte` (`id_type_alerte`);

--
-- Index pour la table `batiment`
--
ALTER TABLE `batiment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `batiment_plan` (`id_plan`);

--
-- Index pour la table `capteur_detecteur_incendie`
--
ALTER TABLE `capteur_detecteur_incendie`
  ADD PRIMARY KEY (`id`),
  ADD KEY `capteur_incendie_salle` (`id_salle`);

--
-- Index pour la table `capteur_humudité`
--
ALTER TABLE `capteur_humudité`
  ADD PRIMARY KEY (`id`),
  ADD KEY `capteur_humid_salle` (`id_salle`);

--
-- Index pour la table `capteur_mouvement`
--
ALTER TABLE `capteur_mouvement`
  ADD PRIMARY KEY (`id`),
  ADD KEY `capteur_mouvement_salle` (`id_salle`);

--
-- Index pour la table `capteur_temperature`
--
ALTER TABLE `capteur_temperature`
  ADD PRIMARY KEY (`id`),
  ADD KEY `capteur_temp_salle` (`id_salle`);

--
-- Index pour la table `capteur_temperature_humidite`
--
ALTER TABLE `capteur_temperature_humidite`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `categorie_salle`
--
ALTER TABLE `categorie_salle`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `climatiseur`
--
ALTER TABLE `climatiseur`
  ADD PRIMARY KEY (`id`),
  ADD KEY `climatiseur_salle` (`id_salle`);

--
-- Index pour la table `endroid`
--
ALTER TABLE `endroid`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `etage`
--
ALTER TABLE `etage`
  ADD PRIMARY KEY (`id`),
  ADD KEY `etage_batiment` (`id_batiment`),
  ADD KEY `etage_plan` (`id_plan`);

--
-- Index pour la table `extincteur`
--
ALTER TABLE `extincteur`
  ADD PRIMARY KEY (`id`),
  ADD KEY `extincteur_etage` (`id_etage`);

--
-- Index pour la table `gestion_alertes`
--
ALTER TABLE `gestion_alertes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `gestion_alertes_alerte` (`id_alerte`),
  ADD KEY `gestion_alertes_users` (`id_utilisateur`);

--
-- Index pour la table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`),
  ADD KEY `image_batiment` (`id_batiment`),
  ADD KEY `image_etage` (`id_etage`),
  ADD KEY `image_salle` (`id_salle`),
  ADD KEY `image_endroit` (`id_endroit`);

--
-- Index pour la table `plan`
--
ALTER TABLE `plan`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `salle`
--
ALTER TABLE `salle`
  ADD PRIMARY KEY (`id`),
  ADD KEY `salle_categorie` (`id_categorie`),
  ADD KEY `salle_etage` (`id_etage`),
  ADD KEY `salle_image` (`id_image`);

--
-- Index pour la table `type_alerte`
--
ALTER TABLE `type_alerte`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `actions_sur_alerte`
--
ALTER TABLE `actions_sur_alerte`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `alerte`
--
ALTER TABLE `alerte`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `batiment`
--
ALTER TABLE `batiment`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT pour la table `capteur_detecteur_incendie`
--
ALTER TABLE `capteur_detecteur_incendie`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `capteur_humudité`
--
ALTER TABLE `capteur_humudité`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `capteur_mouvement`
--
ALTER TABLE `capteur_mouvement`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `capteur_temperature`
--
ALTER TABLE `capteur_temperature`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `capteur_temperature_humidite`
--
ALTER TABLE `capteur_temperature_humidite`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `categorie_salle`
--
ALTER TABLE `categorie_salle`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `climatiseur`
--
ALTER TABLE `climatiseur`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT pour la table `endroid`
--
ALTER TABLE `endroid`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `etage`
--
ALTER TABLE `etage`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT pour la table `extincteur`
--
ALTER TABLE `extincteur`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `gestion_alertes`
--
ALTER TABLE `gestion_alertes`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `image`
--
ALTER TABLE `image`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT pour la table `plan`
--
ALTER TABLE `plan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT pour la table `salle`
--
ALTER TABLE `salle`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT pour la table `type_alerte`
--
ALTER TABLE `type_alerte`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `actions_sur_alerte`
--
ALTER TABLE `actions_sur_alerte`
  ADD CONSTRAINT `action_sur_type_alerte` FOREIGN KEY (`id_type_alerte`) REFERENCES `type_alerte` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `batiment`
--
ALTER TABLE `batiment`
  ADD CONSTRAINT `batiment_plan` FOREIGN KEY (`id_plan`) REFERENCES `plan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `capteur_detecteur_incendie`
--
ALTER TABLE `capteur_detecteur_incendie`
  ADD CONSTRAINT `capteur_incendie_salle` FOREIGN KEY (`id_salle`) REFERENCES `salle` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `capteur_humudité`
--
ALTER TABLE `capteur_humudité`
  ADD CONSTRAINT `capteur_humid_salle` FOREIGN KEY (`id_salle`) REFERENCES `salle` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `capteur_mouvement`
--
ALTER TABLE `capteur_mouvement`
  ADD CONSTRAINT `capteur_mouvement_salle` FOREIGN KEY (`id_salle`) REFERENCES `salle` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `capteur_temperature`
--
ALTER TABLE `capteur_temperature`
  ADD CONSTRAINT `capteur_temp_salle` FOREIGN KEY (`id_salle`) REFERENCES `salle` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `climatiseur`
--
ALTER TABLE `climatiseur`
  ADD CONSTRAINT `climatiseur_salle` FOREIGN KEY (`id_salle`) REFERENCES `salle` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `etage`
--
ALTER TABLE `etage`
  ADD CONSTRAINT `etage_batiment` FOREIGN KEY (`id_batiment`) REFERENCES `batiment` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `etage_plan` FOREIGN KEY (`id_plan`) REFERENCES `plan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `extincteur`
--
ALTER TABLE `extincteur`
  ADD CONSTRAINT `extincteur_etage` FOREIGN KEY (`id_etage`) REFERENCES `etage` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `gestion_alertes`
--
ALTER TABLE `gestion_alertes`
  ADD CONSTRAINT `gestion_alertes_alerte` FOREIGN KEY (`id_alerte`) REFERENCES `alerte` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `gestion_alertes_users` FOREIGN KEY (`id_utilisateur`) REFERENCES `utilisateur` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `image`
--
ALTER TABLE `image`
  ADD CONSTRAINT `image_batiment` FOREIGN KEY (`id_batiment`) REFERENCES `batiment` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `image_endroit` FOREIGN KEY (`id_endroit`) REFERENCES `endroid` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `image_etage` FOREIGN KEY (`id_etage`) REFERENCES `etage` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `image_salle` FOREIGN KEY (`id_salle`) REFERENCES `salle` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `salle`
--
ALTER TABLE `salle`
  ADD CONSTRAINT `salle_categorie` FOREIGN KEY (`id_categorie`) REFERENCES `categorie_salle` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `salle_etage` FOREIGN KEY (`id_etage`) REFERENCES `etage` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `salle_image` FOREIGN KEY (`id_image`) REFERENCES `image` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
