-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 28, 2021 at 12:04 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `getabook`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

DROP TABLE IF EXISTS `books`;
CREATE TABLE IF NOT EXISTS `books` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nameBook` varchar(255) COLLATE utf8_bin NOT NULL,
  `descBook` text COLLATE utf8_bin NOT NULL,
  `price` smallint(6) NOT NULL,
  `author` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `nameBook`, `descBook`, `price`, `author`) VALUES
(12, 'Harry Potter et la Chambre des Secrets', 'Une rentrée fracassante en voiture volante, une étrange malédiction qui s\'abat sur les élèves, cette deuxième année à l\'école des sorciers ne s\'annonce pas de tout repos ! Entre les cours de potions magiques, les matches de Quidditch et les combats de mauvais sorts, Harry Potter trouvera-t-il le temps de percer le mystère de la Chambre des Secrets ? Un livre magique pour sorciers confirmés.', 9, 'J.K Rowling'),
(13, 'Harry Potter et le Prisonnier d\'Azkaban', 'Sirius Black, le dangereux criminel qui s’est échappé de la forteresse d’Azkaban, recherche Harry Potter. C’est donc sous bonne garde que l’apprenti sorcier fait sa troisième rentrée. Au programme : des cours de divination, la fabrication d’une potion de ratatinage, le dressage des hippogriffes… Mais Harry est-il vraiment à l’abri du danger qui le menace ? Un livre époustouflant qui vous emportera dans un tourbillon de surprises et d’émotions !', 9, 'J.K Rowling'),
(14, 'Harry Potter et la Coupe de Feu', 'Harry Potter a quatorze ans et il entre en quatrième année au collège de Poudlard. Une grande nouvelle attend Harry, Ron et Hermione à leur arrivée : la tenue d\'un tournoi de magie exceptionnel entre les plus célèbres écoles de sorcellerie. Déjà, les délégations étrangères font leur entrée. Harry se réjouit... Trop vite. Il va se trouver plongé au cœur des évènements les plus dramatiques qu\'il ait jamais eu à affronter.', 9, 'J.K Rowling'),
(11, 'Harry Potter à l\'Ecole des Sorciers', 'Le jour de ses onze ans, Harry Potter, un orphelin élevé par un oncle et une tante qui le détestent, voit son existence bouleversée. Un géant nommé Hagrid,vient le chercher pour l\'emmener à Poudlard, une école de sorcellerie ! Voler en balai, jeter des sorts, combattre les trolls : Harry se révèle un sorcier doué. Mais quel est le mystère qui l\'entoure ? Et qui est l\'effroyable V..., le mage dont personne n\'ose prononcer le nom ?  Amitié, surprises, danger, scènes comiques, Harry découvre ses pouvoirs et la vie à Poudlard. Le premier tome des aventures du jeune héros vous ensorcelle aussitôt !', 9, 'J.K Rowling'),
(15, 'Harry Potter et l\'Ordre du Phénix', 'À quinze ans, Harry entre en cinquième année à Poudlard mais il n\'a jamais été aussi anxieux. L\'adolescence, la perspective des examens et ces étranges cauchemars... Car Celui-Dont-On-Ne-Doit-Pas-Prononcer-Le-Nom est de retour. Le ministère de la Magie ne semble pas prendre cette menace au sérieux, contrairement à Dumbledore, le directeur du collège de Poudlard. La résistance s\'organise alors autour de Harry qui va devoir compter sur le courage et la fidélité de ses amis de toujours...', 9, 'J.K Rowling');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) COLLATE utf8_bin NOT NULL,
  `pass` varchar(255) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `pass`) VALUES
(2, 'a@a.a', '$2y$10$Nf4d35CW27uHLWIb3EMiXuqwmF39HZI5lSSUbGzCOX6TWxL3aGUma'),
(6, 'azerty@azerty.azerty', '$2y$10$HMjnQgtuUCeEUjnyLf5bEOe1uDdLetUX7aAulhsguHcbIMi4Ifocu');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;