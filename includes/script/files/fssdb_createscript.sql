-- phpMyAdmin SQL Dump
-- version 4.3.13.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Sam 16 Janvier 2016 à 10:05
-- Version du serveur :  5.6.25
-- Version de PHP :  5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `acsm_2351747c19e8776`
--
CREATE DATABASE IF NOT EXISTS `acsm_2351747c19e8776` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `acsm_2351747c19e8776`;

-- --------------------------------------------------------

--
-- Structure de la table `fss_departements`
--

DROP TABLE IF EXISTS `fss_departements`;
CREATE TABLE IF NOT EXISTS `fss_departements` (
  `dep_id` varchar(50) NOT NULL,
  `code_dep` varchar(50) NOT NULL,
  `lib_dep` varchar(50) NOT NULL,
  `chef_dep` varchar(50) DEFAULT NULL,
  `presentation_dep` longtext,
  `parcours_dep` varchar(50) DEFAULT NULL,
  `adjchef_dep` varchar(50) DEFAULT NULL,
  `img_dep` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `fss_departements`
--

INSERT INTO `fss_departements` (`dep_id`, `code_dep`, `lib_dep`, `chef_dep`, `presentation_dep`, `parcours_dep`, `adjchef_dep`, `img_dep`) VALUES
('fss-info', 'info', 'Informatique et Communication', 'fss_u003', 'Presentation en cours d''ecriture', NULL, NULL, NULL),
('fss-math', 'math', 'Mathématiques', 'fss_u004', 'Presentation en cours d''ecriture', NULL, NULL, NULL),
('fss-phy', 'phy', 'Physique', 'fss_u005', 'Presentation en cours d''ecriture', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `fss_devoirs`
--

DROP TABLE IF EXISTS `fss_devoirs`;
CREATE TABLE IF NOT EXISTS `fss_devoirs` (
  `dev_id` varchar(45) NOT NULL,
  `intitule` varchar(45) DEFAULT NULL,
  `prof` varchar(45) DEFAULT NULL,
  `departement` varchar(45) DEFAULT NULL,
  `date_devoir` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `fss_devoirs`
--

INSERT INTO `fss_devoirs` (`dev_id`, `intitule`, `prof`, `departement`, `date_devoir`) VALUES
('dev-001', 'Systeme D''exploitation', 'fss_u003', 'fss-info', '2015-12-13'),
('dev-002', 'Physique Quantique', 'fss_u004', 'fss-phy', '2015-12-19');

-- --------------------------------------------------------

--
-- Structure de la table `fss_generalsettings`
--

DROP TABLE IF EXISTS `fss_generalsettings`;
CREATE TABLE IF NOT EXISTS `fss_generalsettings` (
  `generalsettings_id` varchar(50) NOT NULL,
  `titre_site` varchar(50) NOT NULL,
  `mail_admin` varchar(50) DEFAULT NULL,
  `current_theme` varchar(50) DEFAULT NULL,
  `fr_path` varchar(50) DEFAULT NULL,
  `en_path` varchar(50) DEFAULT NULL,
  `ar_path` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `fss_generalsettings`
--

INSERT INTO `fss_generalsettings` (`generalsettings_id`, `titre_site`, `mail_admin`, `current_theme`, `fr_path`, `en_path`, `ar_path`) VALUES
('fss-settings', 'Faculté des Sciences de Sfax', 'fss@admin.om', 'default', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `fss_images`
--

DROP TABLE IF EXISTS `fss_images`;
CREATE TABLE IF NOT EXISTS `fss_images` (
  `image_id` varchar(50) NOT NULL,
  `nom_img` varchar(50) DEFAULT NULL,
  `type_img` varchar(50) DEFAULT NULL,
  `appartenance` varchar(50) DEFAULT NULL,
  `chemin_img` varchar(50) NOT NULL,
  `upload_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `fss_images`
--

INSERT INTO `fss_images` (`image_id`, `nom_img`, `type_img`, `appartenance`, `chemin_img`, `upload_date`) VALUES
('img-001', 'carousel1.jpg', 'carousel', NULL, 'includes/images/carousel/', '2015-12-10'),
('img-002', 'carousel2.jpg', 'carousel', NULL, 'includes/images/carousel/', '2015-12-10'),
('img-003', 'carousel3.jpg', 'carousel', NULL, 'includes/images/carousel/', '2015-12-10'),
('img-004', 'carousel4.jpg', 'carousel', NULL, 'includes/images/carousel/', '2015-12-10'),
('img-005', 'carousel5.jpg', 'carousel', NULL, 'includes/images/carousel/', '2015-12-10'),
('img-006', 'chef-info1.jpg', 'departement', NULL, 'includes/images/departement/', '2015-12-10'),
('img-007', 'chef-info2.jpg', 'departement', NULL, 'includes/images/departement/', '2015-12-10'),
('img-008', 'chef-phy1.jpg', 'departement', NULL, 'includes/images/departement/', '2015-12-10'),
('img-009', 'chef-phy2.jpg', 'departement', NULL, 'includes/images/departement/', '2015-12-10'),
('img-010', 'chef-math.bmp', 'departement', NULL, 'includes/images/departement/', '2015-12-10'),
('img-011', 'chef-math2.bmp', 'departement', NULL, 'includes/images/departement/', '2015-12-10'),
('img-012', 'a01034643.jpg', 'profil', NULL, 'includes/images/profil/', '2015-12-10'),
('img-013', 'carousel6.jpg', 'carousel', NULL, 'includes/images/carousel/', '2015-12-10');

-- --------------------------------------------------------

--
-- Structure de la table `fss_news`
--

DROP TABLE IF EXISTS `fss_news`;
CREATE TABLE IF NOT EXISTS `fss_news` (
  `newsid` varchar(50) NOT NULL,
  `titre` varchar(50) DEFAULT NULL,
  `description` varchar(200) DEFAULT NULL,
  `contenu` longtext,
  `date_ajout` date DEFAULT NULL,
  `news_image` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `fss_news`
--

INSERT INTO `fss_news` (`newsid`, `titre`, `description`, `contenu`, `date_ajout`, `news_image`) VALUES
('news_1', 'Lorem Ipsum', 'Lorem Ipsum Description', 'Bachir Diop is a Genius', '2015-12-10', 'carousel1.jpg'),
('news_2', 'Ipsum Lorem', 'Ipsum Lorem Description', 'Genius is Bachir Diop', '2015-12-10', 'carousel2.jpg'),
('news_3', 'Nouveau Site', 'Fresh New Website', 'Ceci est le nouveau site de la faculté des sciences de sfax', '2015-12-10', 'carousel3.jpg'),
('news_4', 'Faculté de Sciences', 'FSS Quesaco ??? ', ' voir wikipedia', '2015-12-10', 'carousel4.jpg'),
('news_5', 'Annonce d''inscription 15-16', 'Annonce d''inscription 15-16 de la Faculté des Sciences de Sfax', ' rien ici', '2015-12-10', 'carousel5.jpg'),
('news_6', 'Calendrier Universitaire 2015/2016 ', 'Calendrier Universitaire 2015/2016 de la Faculté des Sciences de Sfax', '1 2 3 vive l''algerie', '2015-12-10', 'carousel6.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `fss_users`
--

DROP TABLE IF EXISTS `fss_users`;
CREATE TABLE IF NOT EXISTS `fss_users` (
  `unique_id` varchar(50) NOT NULL,
  `username` varchar(25) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(50) NOT NULL,
  `create_time` date NOT NULL,
  `image_profil` varchar(45) DEFAULT NULL,
  `type_user` varchar(45) NOT NULL,
  `settings` varchar(45) DEFAULT NULL,
  `user_dep` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `fss_users`
--

INSERT INTO `fss_users` (`unique_id`, `username`, `email`, `password`, `create_time`, `image_profil`, `type_user`, `settings`, `user_dep`) VALUES
('fss_u001', 'diopisemou', 'diopisemou@gmail.com', 'NabouNanc1', '2015-12-10', 'img-012', 'etd', 'set-001', 'fss-info'),
('fss_u002', 'admin', 'fss@admin.tn', 'admin', '2015-12-10', 'img-012', 'admin', 'set-002', NULL),
('fss_u003', 'chefinfo', 'chefinfo@fss.rnu.tn', 'fssinfo', '2015-12-10', 'img-006', 'prof', 'set-003', 'fss-info'),
('fss_u004', 'chefmath', 'chefmath@fss.rnu.tn', 'fssmath', '2015-12-10', 'img-010', 'prof', 'set-004', 'fss-math'),
('fss_u005', 'chefphy', 'chefphy@fss.rnu.tn', 'fssphy', '2015-12-10', 'img-008', 'prof', 'set-005', 'fss-phy');

-- --------------------------------------------------------

--
-- Structure de la table `fss_usersettings`
--

DROP TABLE IF EXISTS `fss_usersettings`;
CREATE TABLE IF NOT EXISTS `fss_usersettings` (
  `settings_id` varchar(45) NOT NULL,
  `profil_name` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `fss_usersettings`
--

INSERT INTO `fss_usersettings` (`settings_id`, `profil_name`) VALUES
('set-001', 'Bachir Diop'),
('set-002', 'Fss Admin'),
('set-003', 'Chef Dep Info'),
('set-004', 'Chef Dep Math'),
('set-005', 'Chef Dep Phy');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `fss_departements`
--
ALTER TABLE `fss_departements`
  ADD PRIMARY KEY (`dep_id`), ADD UNIQUE KEY `dep_id_UNIQUE` (`dep_id`), ADD UNIQUE KEY `chef_dep_UNIQUE` (`chef_dep`), ADD KEY `unique_id_idx` (`chef_dep`);

--
-- Index pour la table `fss_devoirs`
--
ALTER TABLE `fss_devoirs`
  ADD PRIMARY KEY (`dev_id`), ADD UNIQUE KEY `dev_id_UNIQUE` (`dev_id`);

--
-- Index pour la table `fss_generalsettings`
--
ALTER TABLE `fss_generalsettings`
  ADD PRIMARY KEY (`generalsettings_id`);

--
-- Index pour la table `fss_images`
--
ALTER TABLE `fss_images`
  ADD PRIMARY KEY (`image_id`), ADD UNIQUE KEY `image_id_UNIQUE` (`image_id`), ADD UNIQUE KEY `nom_img_UNIQUE` (`nom_img`);

--
-- Index pour la table `fss_news`
--
ALTER TABLE `fss_news`
  ADD PRIMARY KEY (`newsid`), ADD UNIQUE KEY `fss_newscol_UNIQUE` (`newsid`), ADD UNIQUE KEY `news_image_UNIQUE` (`news_image`);

--
-- Index pour la table `fss_users`
--
ALTER TABLE `fss_users`
  ADD PRIMARY KEY (`unique_id`), ADD UNIQUE KEY `unique_id_UNIQUE` (`unique_id`), ADD UNIQUE KEY `username_UNIQUE` (`username`), ADD KEY `image_id_idx` (`image_profil`), ADD KEY `settings_id_idx` (`settings`), ADD KEY `dep_id_idx` (`user_dep`);

--
-- Index pour la table `fss_usersettings`
--
ALTER TABLE `fss_usersettings`
  ADD PRIMARY KEY (`settings_id`), ADD UNIQUE KEY `settings_id_UNIQUE` (`settings_id`);

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `fss_departements`
--
ALTER TABLE `fss_departements`
ADD CONSTRAINT `unique_id` FOREIGN KEY (`chef_dep`) REFERENCES `fss_users` (`unique_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `fss_news`
--
ALTER TABLE `fss_news`
ADD CONSTRAINT `nom_img` FOREIGN KEY (`news_image`) REFERENCES `fss_images` (`nom_img`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `fss_users`
--
ALTER TABLE `fss_users`
ADD CONSTRAINT `dep_id` FOREIGN KEY (`user_dep`) REFERENCES `fss_departements` (`dep_id`) ON DELETE NO ACTION ON UPDATE CASCADE,
ADD CONSTRAINT `image_id` FOREIGN KEY (`image_profil`) REFERENCES `fss_images` (`image_id`) ON DELETE NO ACTION ON UPDATE CASCADE,
ADD CONSTRAINT `settings_id` FOREIGN KEY (`settings`) REFERENCES `fss_usersettings` (`settings_id`) ON DELETE NO ACTION ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
