-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Jun 07, 2020 at 11:35 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `site_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `comenzi`
--

CREATE TABLE `comenzi` (
  `idComanda` int(11) NOT NULL,
  `cantitateComandata` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comenzi`
--

INSERT INTO `comenzi` (`idComanda`, `cantitateComandata`) VALUES
(70, 1),
(71, 1),
(72, 1),
(73, 3),
(74, 3),
(75, 2),
(76, 3),
(77, 2),
(78, 0),
(79, 0),
(80, 1);

-- --------------------------------------------------------

--
-- Table structure for table `legatura`
--

CREATE TABLE `legatura` (
  `idComanda` int(11) DEFAULT NULL,
  `idUser` int(11) DEFAULT NULL,
  `idProdus` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `legatura`
--

INSERT INTO `legatura` (`idComanda`, `idUser`, `idProdus`) VALUES
(70, NULL, NULL),
(NULL, 1, NULL),
(70, NULL, NULL),
(NULL, 1, NULL),
(NULL, NULL, 2),
(70, NULL, NULL),
(NULL, 1, NULL),
(NULL, NULL, 11),
(73, 1, 6),
(73, 1, 6),
(75, 1, 2),
(73, 1, 2),
(75, 1, 8),
(70, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `produse`
--

CREATE TABLE `produse` (
  `id` int(11) NOT NULL,
  `nume` varchar(100) DEFAULT NULL,
  `pret` int(11) DEFAULT NULL,
  `nume_imagine` varchar(200) DEFAULT NULL,
  `descriere` varchar(1000) DEFAULT NULL,
  `cantitate` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produse`
--

INSERT INTO `produse` (`id`, `nume`, `pret`, `nume_imagine`, `descriere`, `cantitate`) VALUES
(1, 'Activity', 17, 'imagini_produse/activity_opt.jpg', ' Editia a 2-a a jocului, cu design reinnoit, reguli revizuite si cel mai important cu 440 de carti noi!\r\n- Activity Original este un joc creativ si de comunicare, o combinatie de elemente: mima, descriere verbala sau desen.\r\n- Toate aceste elemente trebuie folosite pentru a ajuta partenerii de joc sa ghiceasca anumite cuvinte, expresii.\r\n- Totul se invarte in jurul unor expresii ca „rasarit de soare\", „razatoare de legume\", „franghie de spanzuratoare\"…\r\n- Jucatorii individuali sau echipele incearca printr-un joc actoricesc, desen sau descriere verbala sa ghiceasca diferite cuvinte sau expresii si astfel sa inainteze pe traseul jocului.', 3),
(2, 'Colonistii din Catan', 25, 'imagini_produse/catan_opt.jpg', ' O intrare grandioas? în lumea CATAN:\r\n\r\nJocul de baz?, extensia pentru 5-6 juc?tori ?i 4 scenarii diferite în aceea?i cutie!\r\n\r\nScenariile pot fi combinate cu materialele jocului de baz? ?i pot fi jucate chiar ?i în 6 persoane. Fiecare extensie aduce noi posibilit??i, diversificând ?i mai mult lumea Catan.\r\n\r\nCATAN încânt? milioane de juc?tori din întreaga lume. Mereu surprinz?tor, la fiecare nou? edi?ie.\r\n\r\nHai în lumea CATAN!\r\n\r\nNum?r de juc?tori: 3-6\r\n\r\nVârst? minim?: 10 ani\r\n\r\nTimp de joc: aprox. 75 minute', 3),
(3, 'Monopoly', 20, 'imagini_produse/monopoly_opt.jpg', ' Monopoly is a board game where players roll two six-sided dice to move around the game-board buying and trading properties, and develop them with houses and hotels. Players collect rent from their opponents, with the goal being to drive them into bankruptcy. Money can also be gained or lost through Chance and Community Chest cards, and tax squares; players can end up in jail, which they cannot move from until they have met one of several conditions. The game has numerous house rules and hundreds of different editions exist, in addition to many spin', 0),
(4, 'Carcassonne', 23, 'imagini_produse/carcassone_opt.png', 'Carcassonne is a tile-based German-style board game for two to five players, designed by Klaus-Jürgen Wrede and published in 2000 by Hans im Glück in German and by Rio Grande Games (until 2012) and Z-Man Games (currently)[1] in English.[2] It received the Spiel des Jahres and the Deutscher Spiele Preis awards in 2001.\r\n\r\nIt is named after the medieval fortified town of Carcassonne in southern France, famed for its city walls. The game has spawned many expansions and spin-offs, and several PC, console and mobile versions. A new edition, with updated artwork on the tiles and the box, was released in 2014.', 3),
(5, 'Clementoni-Panorama Disney Dinner 1000 pieces', 24, 'imagini_produse/puzzle/puzzle1opt.jpg', '1000-Piece puzzle, with Dimensions 98 x 33 cm. Suggestive images, quality printing, precise cut-outs, sturdy and precious materials. The Clementoni high quality collection is all this and more: an elegant puzzle line, created for those with a passion for detail. Forever attentive to ecological issues, Clementoni uses a high Rate of recycled materials, thus avoiding the use of polluting components.', 3),
(6, 'Clementoni-Panorama Country Side 1000 pieces', 23, 'imagini_produse/puzzle/puzzle2opt.jpg', ' 1000 Striking images, quality printing, precision interlocking, robust pieces and quality materials. This is Clementoni High Quality Collection: a stylish range of jigsaw puzzles, designed for those with an eye for detail. Clementoni has always focused on the company s environmental impact, making extensive use of recycled materials and avoiding polluting elements.', 3),
(7, 'Clementoni-Disney Concert 1000 pieces', 23, 'imagini_produse/puzzle/puzzle3opt.jpg', 'Clementoni jigsaw puzzles include some of the most fascinating images, quality printing, and precise fitting you ll find in the puzzle industry and this 1000 piece panorama puzzle featuring Disney Princesses is no exception. An ideal family puzzle which kids and adults will enjoy putting together.', 3),
(8, 'DC Comics-The New 52 nr1', 10, 'imagini_produse/comics/comic1opt.png', 'U.S. Price: $150.00AVAILABLEBuy Now\r\nIn September, DC Comic will launch 52 new #1 issues starring the World s Greatest Super-Heroes. in December, to commemorate this incredible event, DC is collecting every one of these debut issues in a once-in-a-lifetime massive hardcover that includes:• JUSTICE LEAGUE #1 by Geoff Johns and Jim Lee• ACTION COMICS #1 by Grant Morrison and Rags Morales• BATMAN #1 by Scott Snyder and Greg Capullo• GREEN LANTERN #1 by Geoff Johns and Doug Mahnke• SWAMP THING #1 by Scott Snyder and Yanick Paquette• STORMWATCH #1 by Paul Cornell and Miguel Sepulveda• TEEN TITANS #1 by Scott Lobdell and Brett Booth• And 45 more', 3),
(9, 'Comics-The Flash 100 Page Spectacular', 40, 'imagini_produse/comics/comic2opt.jpg', 'Comic\r\nPublisher: DC Comics (2011)\r\nASIN: B0055J9QZQ\r\nPackage Dimensions: 10.2 x 6.8 x 0.2 inches\r\nShipping Weight: 2.4 ounces\r\nAverage Customer Review: Be the first to review this item\r\nAmazon Best Sellers Rank: #8,163,507 in Books (See Top 100 in Books)', 3),
(10, 'Comics-Suicide Squad', 43, 'imagini_produse/comics/comic3opt.jpg', 'Able to run at near light-speeds, his powers provide the ultimate caffeine kick: He can run up buildings, move so swiftly he phases through objects, create sonic booms with the snap of his fingers—and never need to order delivery. Despite his speed, Barry can become so obsessed with crime-solving he can still lose track of everything else around him, leaving the fastest man alive constantly running a minute behind.', 3),
(11, 'DC Comics-The Flash The Scarlet Speeder', 46, 'imagini_produse/comics/comic5opt.jpg', NULL, 3),
(12, 'DC Comics-Coloring Book', 42, 'imagini_produse/comics/comic4opt.jpg', 'This action-packed adult coloring book is filled with ready-to-color illustrations of the most iconic characters from DC Comics history. From the bright red and blue of Superman soaring over Earth to the rich greens and yellows of Wonder Woman’s homeland, Themyscira, the heraldry of the Super Heroes is yours to design and color. Featuring many of the greatest artists in DC Comics history and their interpretations of Batman, Superman, Wonder Woman, and more, this incredible coloring book offers.', 3),
(13, 'DC Comics-The Art of Modern MythMaking', 39, 'imagini_produse/comics/comic6opt.jpg', 'In 1935, DC Comics founder Major Malcolm Wheeler-Nicholson published New Fun No. 1, the first comic book with all-new, original material—at a time when comic books were mere repositories for the castoffs of the newspaper strips. What was initially considered to be disposable media for children was well on its way to becoming the mythology of our time—the 20th century’s answer to Atlas or Zorro. More than 40,000 comic books later, in honor of the publisher’s 75th anniversary, TASCHEN has produced the single most comprehensive book on DC Comics, in an XL edition even Superman might have trouble lifting. More than 2,000 images—covers and interiors, original illustrations, photographs, film stills, and collectibles—are reproduced using the latest technology to bring the story lines, the characters, and their creators to vibrant life as they’ve never been seen before.', 3);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `pwd` varchar(120) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `towm` varchar(150) NOT NULL,
  `state` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `pwd`, `address`, `towm`, `state`) VALUES
(1, 'campeantudor97@gmail.com', 'cacatmaro97', 'Tache Ionesc nr 93', 'Cluj-Napoca', 'Cluj'),
(2, '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comenzi`
--
ALTER TABLE `comenzi`
  ADD PRIMARY KEY (`idComanda`);

--
-- Indexes for table `legatura`
--
ALTER TABLE `legatura`
  ADD KEY `fKey_comanda` (`idComanda`),
  ADD KEY `fKey_user` (`idUser`),
  ADD KEY `fKey_produs` (`idProdus`);

--
-- Indexes for table `produse`
--
ALTER TABLE `produse`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comenzi`
--
ALTER TABLE `comenzi`
  MODIFY `idComanda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;
--
-- AUTO_INCREMENT for table `produse`
--
ALTER TABLE `produse`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `legatura`
--
ALTER TABLE `legatura`
  ADD CONSTRAINT `fKey_comanda` FOREIGN KEY (`idComanda`) REFERENCES `comenzi` (`idComanda`),
  ADD CONSTRAINT `fKey_produs` FOREIGN KEY (`idProdus`) REFERENCES `produse` (`id`),
  ADD CONSTRAINT `fKey_user` FOREIGN KEY (`idUser`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
