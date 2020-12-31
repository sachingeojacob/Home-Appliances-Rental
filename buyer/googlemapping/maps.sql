-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2018 at 06:58 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `maps`
--

-- --------------------------------------------------------

--
-- Table structure for table `markers`
--

CREATE TABLE `markers` (
  `id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `address` varchar(80) NOT NULL,
  `lat` float(10,6) NOT NULL,
  `lng` float(10,6) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `markers`
--

INSERT INTO `markers` (`id`, `name`, `address`, `lat`, `lng`) VALUES
(1, 'Heir Apparel', 'Crowea Pl, Frenchs Forest NSW 2086', -33.737885, 151.235260),
(2, 'BeeYourself Clothing', 'Thalia St, Hassall Grove NSW 2761', -33.729752, 150.836090),
(3, 'Dress Code', 'Glenview Avenue, Revesby, NSW 2212', -33.949448, 151.008591),
(4, 'The Legacy', 'Charlotte Ln, Chatswood NSW 2067', -33.796669, 151.183609),
(5, 'Fashiontasia', 'Braidwood Dr, Prestons NSW 2170', -33.944489, 150.854706),
(6, 'Trish & Tash', 'Lincoln St, Lane Cove West NSW 2066', -33.812222, 151.143707),
(7, 'Perfect Fit', 'Darley Rd, Randwick NSW 2031', -33.903557, 151.237732),
(8, 'Buena Ropa!', 'Brodie St, Rydalmere NSW 2116', -33.815521, 151.026642),
(9, 'Coxcomb and Lily Boutique', 'Ferrers Rd, Horsley Park NSW 2175', -33.829525, 150.873764),
(10, 'Moda Couture', 'Northcote Rd, Glebe NSW 2037', -33.873882, 151.177460);

-- --------------------------------------------------------

--
-- Table structure for table `poi_example`
--

CREATE TABLE `poi_example` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `desc` text NOT NULL,
  `lat` text NOT NULL,
  `lon` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `poi_example`
--

INSERT INTO `poi_example` (`id`, `name`, `desc`, `lat`, `lon`) VALUES
(1, '100 Club', 'Oxford Street, London  W1&lt;br/&gt;3 Nov 2010 : Buster Shuffle&lt;br/&gt;', '51.514980', '-0.144328'),
(2, '93 Feet East', '150 Brick Lane, London  E1 6RU&lt;br/&gt;7 Dec 2010 : Jenny &amp; Johnny&lt;br/&gt;', '51.521710', '-0.071737'),
(3, 'Adelphi Theatre', 'The Strand, London  WC2E 7NA&lt;br/&gt;11 Oct 2010 : Love Never Dies', '51.511010', '-0.120140'),
(4, 'Albany, The', '240 Gt. Portland Street, London  W1W 5QU', '51.521620', '-0.143394'),
(5, 'Aldwych Theatre', 'Aldwych, London  WC2B 4DF&lt;br/&gt;11 Oct 2010 : Dirty Dancing', '51.513170', '-0.117503'),
(6, 'Alexandra Palace', 'Wood Green, London  N22&lt;br/&gt;30 Oct 2010 : Lynx All-Nighter', '51.596490', '-0.109514'),
(7, 'w', 'd', '9.630415', '76.494596\r\n');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `markers`
--
ALTER TABLE `markers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `poi_example`
--
ALTER TABLE `poi_example`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `markers`
--
ALTER TABLE `markers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `poi_example`
--
ALTER TABLE `poi_example`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
