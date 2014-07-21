-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Mer 23 Avril 2014 à 20:56
-- Version du serveur: 5.5.24-log
-- Version de PHP: 5.4.3

-- --------------------------------------------------------
--
-- Base de données: `wootook`
--
-- --------------------------------------------------------

--
-- Structure de la table `game_users`
--

CREATE TABLE IF NOT EXISTS `game_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

CREATE TABLE IF NOT EXISTS `game_ressources` (
  `rid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `coef_prod` int(1) NOT NULL DEFAULT '1',
   PRIMARY KEY (`rid`),
   UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;

INSERT INTO `ressources` (`rid`, `name`, `coef_prod`) VALUES
(1, 'ressources1', 30),
(2, 'ressources2', 20);
(3, 'ressources3', 10);
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
