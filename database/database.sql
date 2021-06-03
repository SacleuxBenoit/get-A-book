-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le :  jeu. 03 juin 2021 à 12:11
-- Version du serveur :  5.7.26
-- Version de PHP :  7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `getabook`
--

-- --------------------------------------------------------

--
-- Structure de la table `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `nameBook` varchar(255) COLLATE utf8_bin NOT NULL,
  `descBook` text COLLATE utf8_bin NOT NULL,
  `price` smallint(6) NOT NULL,
  `author` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `categorie` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `books`
--

INSERT INTO `books` (`id`, `nameBook`, `descBook`, `price`, `author`, `categorie`) VALUES
(12, 'Harry Potter et la Chambre des Secrets', 'Une rentrée fracassante en voiture volante, une étrange malédiction qui s\'abat sur les élèves, cette deuxième année à l\'école des sorciers ne s\'annonce pas de tout repos ! Entre les cours de potions magiques, les matches de Quidditch et les combats de mauvais sorts, Harry Potter trouvera-t-il le temps de percer le mystère de la Chambre des Secrets ? Un livre magique pour sorciers confirmés.', 9, 'J.K Rowling', 'Roman'),
(13, 'Harry Potter et le Prisonnier d\'Azkaban', 'Sirius Black, le dangereux criminel qui s’est échappé de la forteresse d’Azkaban, recherche Harry Potter. C’est donc sous bonne garde que l’apprenti sorcier fait sa troisième rentrée. Au programme : des cours de divination, la fabrication d’une potion de ratatinage, le dressage des hippogriffes… Mais Harry est-il vraiment à l’abri du danger qui le menace ? Un livre époustouflant qui vous emportera dans un tourbillon de surprises et d’émotions !', 9, 'J.K Rowling', 'Roman'),
(14, 'Harry Potter et la Coupe de Feu', 'Harry Potter a quatorze ans et il entre en quatrième année au collège de Poudlard. Une grande nouvelle attend Harry, Ron et Hermione à leur arrivée : la tenue d\'un tournoi de magie exceptionnel entre les plus célèbres écoles de sorcellerie. Déjà, les délégations étrangères font leur entrée. Harry se réjouit... Trop vite. Il va se trouver plongé au cœur des évènements les plus dramatiques qu\'il ait jamais eu à affronter.', 9, 'J.K Rowling', 'Roman'),
(11, 'Harry Potter à l\'Ecole des Sorciers', 'Le jour de ses onze ans, Harry Potter, un orphelin élevé par un oncle et une tante qui le détestent, voit son existence bouleversée. Un géant nommé Hagrid,vient le chercher pour l\'emmener à Poudlard, une école de sorcellerie ! Voler en balai, jeter des sorts, combattre les trolls : Harry se révèle un sorcier doué. Mais quel est le mystère qui l\'entoure ? Et qui est l\'effroyable V..., le mage dont personne n\'ose prononcer le nom ?  Amitié, surprises, danger, scènes comiques, Harry découvre ses pouvoirs et la vie à Poudlard. Le premier tome des aventures du jeune héros vous ensorcelle aussitôt !', 9, 'J.K Rowling', 'Roman'),
(15, 'Harry Potter et l\'Ordre du Phénix', 'À quinze ans, Harry entre en cinquième année à Poudlard mais il n\'a jamais été aussi anxieux. L\'adolescence, la perspective des examens et ces étranges cauchemars... Car Celui-Dont-On-Ne-Doit-Pas-Prononcer-Le-Nom est de retour. Le ministère de la Magie ne semble pas prendre cette menace au sérieux, contrairement à Dumbledore, le directeur du collège de Poudlard. La résistance s\'organise alors autour de Harry qui va devoir compter sur le courage et la fidélité de ses amis de toujours...', 9, 'J.K Rowling', 'Roman'),
(19, 'Votre temps est infini', 'Révélez-vous à vous-même et aux autres, grâce à la méthode Olicard !  Nous n\'utilisons pas bien notre temps : tel est le constat implacable de Fabien Olicard au début de cet ouvrage. Trop de sollicitations nous détournent de nos objectifs quotidiens : mails, téléphone, réseaux sociaux, mais également les pièges de notre propre cerveau ! La société actuelle nous condamne à nous laisser happer par des stimuli qui nous égarent. Or, en clarifiant nos objectifs réels et en nous organisant mieux, nous pouvons véritablement décupler notre vie : nos réussites tant personnelles que professionnelles, mais aussi notre capacité à profiter au jour le jour.  L\'objectif de cet ouvrage est simple : vous rendre les clefs de votre temps ! Pour ce faire, Fabien Olicard vous ouvre les portes de son expérience personnelle et de ses souvenirs : grand procrastinateur devant l\'éternel (qui l\'eût cru ?!) , il a dû lui-même pratiquer une détox féroce de ses mauvaises habitudes et apprendre à s\'organiser afin de se révéler à lui-même et aux autres. Dans la lignée de Tim Ferriss et de sa fameuse Semaine de 4 heures, Fabien Olicard vous propose ici sa méthode pour retrouver du temps pour soi et vous accomplir véritablement : conseils, astuces, mises en garde, découvrez la panoplie de trucs que le célèbre mentaliste met à votre disposition pour devenir vous-même et reprendre le contrôle de votre vie.  La vie est courte, oui, mais nous avons le temps de devenir nous-mêmes, alors profitons-en !', 18, 'Fabien Olicard', 'Développement personnel'),
(20, 'Le Journal d\'Anne Frank', 'Anne Frank est née le 12 juin 1929 à Francfort. Sa famille a émigré aux Pays-Bas en 1933. À Amsterdam, elle connaît une enfance heureuse jusqu’en 1942, malgré la guerre. Le 6 juillet 1942, les Frank s’installent clandestinement dans «l’Annexe» de l’immeuble du 263, Prinsengracht. Le 4 août 1944, ils sont arrêtés sur dénonciation. Déportée à Auschwitz, puis à Bergen-Belsen, Anne meurt du typhus en février ou mars 1945, peu après sa sœur Margot. La jeune fille a tenu son journal du 12 juin 1942 au 1er août 1944, et son témoignage, connu dans le monde entier, reste l’un des plus émouvants sur la vie quotidienne d’une famille juive sous le joug nazi. Cette édition comporte des pages inédites.', 7, 'Anne Frank', 'Biographie');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_bin NOT NULL,
  `pass` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id_user`, `username`, `pass`) VALUES
(10, 'admin', '$2y$10$yPlYIwH4VnLonZc8rBnyXeP6LMhp8FWQGp5m2V7p2rkEXrxdgzShS');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;