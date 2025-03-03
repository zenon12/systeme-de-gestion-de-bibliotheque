-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2025 at 10:37 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gestion_bibliothèque`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `name_author` varchar(255) DEFAULT NULL,
  `genre` varchar(255) DEFAULT NULL,
  `publication_year` year(4) DEFAULT NULL,
  `ISBN` varchar(255) DEFAULT NULL,
  `stock` int(11) DEFAULT 0,
  `quantity_loan` int(11) DEFAULT 0,
  `description` varchar(600) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `title`, `name_author`, `genre`, `publication_year`, `ISBN`, `stock`, `quantity_loan`, `description`) VALUES
(4, 'Les Secrets de la forêt', 'Marie Leblanc', 'fantastique', '2019', '978', 10, 0, 'Une jeune femme découvre un monde magique caché dans une forêt et lutte pour rétablir l\'équilibre entre nature et modernité.'),
(5, 'Le Voyageur des étoiles', 'Jean Dupont', 'fiction', '2015', '978', 5, 0, 'Une aventure intergalactique où un scientifique découvre une civilisation extraterrestre en quête de rédemption.'),
(6, 'Les étoiles du désert', 'Fatou Diallo', 'roman', '2018', '978', 15, 0, 'Une fresque historique captivante sur les caravanes de sel traversant le Sahara au 16ᵉ siècle.'),
(7, 'Les Larmes du feu', 'Pierre Gautier', 'aventure', '2017', '978', 8, 0, 'Un archéologue téméraire cherche un artefact mythique dans les jungles profondes de l\'Amazonie.'),
(8, 'Sous les cendres', 'Thomas Renaud', 'policier', '2016', '978', 5, 0, 'Après un incendie criminel, un inspecteur découvre un complot qui dépasse toutes ses attentes.'),
(9, 'La Danse des esprits', 'Nadia Benali', 'contemporain', '2023', '978', 4, 0, 'Une exploration poignante des traditions mystiques et de l\'identité culturelle dans une société moderne.'),
(10, 'Une Ombre parmi nous', 'Léo Marchand', 'fiction', '2021', '978', 20, 0, 'Une exploration des dilemmes moraux et des choix difficiles dans une société post-apocalyptique.\r\n\r\n'),
(11, 'L\'Écho des silences', 'Yasmina Kadi', 'fiction', '2019', '978', 2, 0, 'Une histoire captivante sur la reconstruction émotionnelle après une tragédie familiale.'),
(12, 'Les Rivages perdus', 'Antoine Charpentier', 'aventure', '2017', '978', 18, 0, 'Un marin téméraire part à la recherche d\'une île légendaire cachée au cœur de l\'océan Pacifique.\r\n\r\n'),
(13, 'Le Trésor du clan oublié', ' Nora Béchet', 'aventure', '2019', '978', 7, 0, 'Une quête palpitante pour un trésor perdu dans les montagnes enneigées du Tibet.'),
(14, ' À travers les flammes', 'Hugo Legrand', 'aventure', '2022', '978', 5, 0, 'Une équipe de pompiers aventuriers affronte des défis périlleux dans une forêt tropicale en feu.'),
(15, 'Les Cavaliers du vent', 'Myriam Laroche', 'aventure', '2020', '978', 7, 0, 'Une course palpitante à dos de chevaux à travers le désert pour sauver un royaume en péril.\r\n\r\n'),
(16, 'Sous la surface', 'Maxime Durant', 'aventure', '2021', '978', 3, 0, 'Un groupe de plongeurs découvre un monde sous-marin incroyable, mais dangereux, au fond de l\'Atlantique.'),
(17, 'La Dernière lueur de l\'aube', 'Sarah Martin', 'fiction', '2023', '978', 5, 0, 'Une chronique poignante d’un village en proie à des changements sociaux majeurs.\r\n\r\n'),
(18, 'Les Miroirs du temps', 'Julien Ferrand', 'fiction', '2020', '978', 20, 0, 'Une femme découvre des lettres mystérieuses dans la maison qu\'elle vient d\'hériter, révélant des secrets du passé.'),
(19, 'Les Rêves de l\'étoile solitaire', 'Camille Laurent', 'fiction', '2018', '978', 10, 0, 'Une jeune femme isolée dans une petite ville se lie d’amitié avec un écrivain excentrique, transformant leurs vies à jamais.'),
(20, 'Les Larmes du feu', 'Pierre Gautier', 'aventure', '2017', '978', 10, 0, 'Un archéologue téméraire cherche un artefact mythique dans les jungles profondes de l\'Amazonie.'),
(21, 'L\'Ombre du passé', 'Ahmed Sylla', 'roman', '2022', '978', 14, 0, 'Un détective privé enquête sur une série de meurtres liés à un secret enfoui depuis des décennies.\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `handle_loan`
--

CREATE TABLE `handle_loan` (
  `id` int(11) NOT NULL,
  `id_book` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `loan_date` date NOT NULL,
  `due_date` date NOT NULL,
  `loan_status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `adresse` varchar(255) DEFAULT NULL,
  `register_date` date DEFAULT current_timestamp(),
  `user_status` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `adresse`, `register_date`, `user_status`, `password`) VALUES
(2, 'Mamadou Saliou', 'Ba', 'mamadousaliouba588@gmail.com', 'Ziguinchor', '2025-01-11', 'admin', 'fbd5ddd739aad060d935e481a906b5c849f18fdd'),
(3, 'Binta', 'Ba', 'binta123@gmail.com', 'Dakar', '2025-01-11', 'user', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441'),
(4, 'Houleyma', 'Ba', 'houley123@gmail.com', 'Saint-louis', '2025-01-12', 'admin', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441'),
(12, 'Mariama', 'Ba', 'mariama9024@gmail.com', 'Labe', '2025-01-12', 'admin', '72ebdbda61bdb9a3c831f87950c25a1996d1ef31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `handle_loan`
--
ALTER TABLE `handle_loan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_book` (`id_book`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `handle_loan`
--
ALTER TABLE `handle_loan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `handle_loan`
--
ALTER TABLE `handle_loan`
  ADD CONSTRAINT `handle_loan_ibfk_1` FOREIGN KEY (`id_book`) REFERENCES `books` (`id`),
  ADD CONSTRAINT `handle_loan_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
