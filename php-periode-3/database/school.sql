-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 20 mrt 2020 om 17:15
-- Serverversie: 10.4.8-MariaDB
-- PHP-versie: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(1) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(2, 'admin', '.'),
(4, 'max', '.'),
(6, 'admintest', '$2y$10$4UjmHnSVwfur7Sy/X1Hzi.OB9riTZEXOAT8FXmPvzpm4svgMDVkaO'),
(7, 'admin123', '$2y$10$j9XrIC45UpHydHVmptQHvOT4.VGBBVHS.SmX3WuzSwCIh3kYvF69q'),
(8, 'pwdtest', '$2y$10$j0WVcT7xe0imZyCMG06iJuZWnjALfGvPbc3qommPLvA7lPME6ZPiu');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `category`
--

INSERT INTO `category` (`id`, `name`, `description`, `active`) VALUES
(1, 'tafellamp', 'lampen voor op een tafel', 1),
(2, 'buitenlamp', 'buitenlampen zijn lampen voor buiten.', 1),
(3, 'designlamp', 'design zijn lampen.', 1),
(4, 'bureaulamp', 'bureaulampen zijn lampen voor op een bureau.', 1);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `costumer`
--

CREATE TABLE `costumer` (
  `id` int(10) NOT NULL,
  `gender` varchar(1) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `middleName` varchar(10) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `street` varchar(30) NOT NULL,
  `houseNumber` int(5) NOT NULL,
  `houseNumber_addon` varchar(2) NOT NULL,
  `zipCode` varchar(7) NOT NULL,
  `city` varchar(20) NOT NULL,
  `country` varchar(50) NOT NULL,
  `phone` varchar(25) NOT NULL,
  `emailadress` varchar(40) NOT NULL,
  `password` varchar(255) NOT NULL,
  `newsletter_subscription` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `costumer`
--

INSERT INTO `costumer` (`id`, `gender`, `firstName`, `middleName`, `lastName`, `street`, `houseNumber`, `houseNumber_addon`, `zipCode`, `city`, `country`, `phone`, `emailadress`, `password`, `newsletter_subscription`) VALUES
(1, 'm', 'Max', 'robert hub', 'van Gorp', 'ingenhouszstraat', 53, '', '3514 HV', 'Utrecht', 'Netherlands', '0648055428', 'u534253@student.glu.nl', 'fa157bbd31936c748b6ba0a9b09062a0', 1),
(2, 'm', 'Robin', 'Nelson nin', 'van Gorp', 'ingenhouszstraat', 53, '', '3514 HV', 'Utrecht', 'Netherlands', '0612545234', 'robinvangorp1001@gmail.nl', '2a76aa241c14fcc207d4207471f6118b', 0),
(3, 'f', 'Annemiek', 'wilhelmina', 'van Gorp', 'ingenhouszstraat', 53, '', '3514 HV', 'Utrecht', 'Netherlands', '0666632145', 'annemiek@gmail.nl', 'cd613d8de083e55d5d95e607074d6d52', 1),
(4, 'm', 'Jonatas', '', 'de Lemos', 'willembarentszstraat', 80, '', '3572PN', 'Utrecht', 'Netherlands', '0666632145', 'jonatas@gmail.nl', '3f83164cab55dccb72d71c7d8fcbef60', 1),
(5, 'm', 'Hubert', '', 'Roza', 'willembarendsztraat', 80, '', '3572 PN', 'Utrecht', 'Netherlands', '064801234', 'hubertroza@ziggo.nl', 'c79c6f489015e0bc97f892e357db7156', 0),
(7, 'f', '1', '2', '3', '1', 12, '1', '1', '1', '1', '1', '1@GMAIL.COM', '$2y$10$GuxVovfGZyjjWGm6b.C8R.3PJS/T3ym1mSj82AUzpv8Xf29oryhx6', 0);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `orders`
--

CREATE TABLE `orders` (
  `id` int(10) NOT NULL,
  `firstName` varchar(40) NOT NULL,
  `middleName` varchar(10) NOT NULL,
  `lastName` varchar(30) NOT NULL,
  `street` varchar(30) NOT NULL,
  `houseNumber` int(5) NOT NULL,
  `houseNumber_addon` varchar(6) NOT NULL,
  `zipCode` varchar(7) NOT NULL,
  `city` varchar(30) NOT NULL,
  `country` varchar(50) NOT NULL,
  `payment_method` varchar(10) NOT NULL,
  `payed` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `orders_detail`
--

CREATE TABLE `orders_detail` (
  `id` int(10) NOT NULL,
  `order_id` int(10) NOT NULL,
  `product_id` int(10) NOT NULL,
  `count` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `description` mediumtext NOT NULL,
  `category_id` int(6) NOT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `color` varchar(20) NOT NULL,
  `weight` int(10) NOT NULL,
  `active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `product`
--

INSERT INTO `product` (`id`, `name`, `description`, `category_id`, `price`, `color`, `weight`, `active`) VALUES
(1, 'arstid', 'dit is een lamp', 1, '100.10', 'black', 10, 1),
(2, 'buitenlamp', 'dit is een lamp', 2, '10.10', 'white', 10, 1),
(3, 'gans-lamp', 'dit is een gans', 3, '299.99', 'blue', 4, 1),
(4, 'giraf-lamp', 'dit is een giraf', 3, '299.99', 'red', 4, 1),
(5, 'hektar', 'dit is een hektar', 4, '15.00', 'purple', 3, 1),
(6, 'lampje', 'dit is een hektar', 4, '15.00', 'purple', 3, 1),
(7, 'jesse', 'De lampenkap van textiel geeft een zacht en decoratief licht.\r\n<br><br>\r\nLichtbron wordt apart verkocht. IKEA adviseert de led-lamp E27 globevorm opaalwit.\r\n<br><b>\r\nGebruik een opalen lichtbron als je een gewone lampenkap of lamp hebt en je een gelijkmatig, gespreid licht wilt.\r\n<br><br>\r\nVoorzien van trekschakelaar.\r\n<br><br>\r\nDit product is CE-gecertificeerd.\r\n\r\nGoed te completeren met andere lampen uit dezelfde serie.', 1, '39.95', 'wit', 300, 1),
(8, 'llahra', 'De lampenkap van textiel geeft een zacht en decoratief licht.\r\n<br><br>\r\nLichtbron wordt apart verkocht. IKEA adviseert de led-lamp E27 globevorm opaalwit.\r\n<br><b>\r\nGebruik een opalen lichtbron als je een gewone lampenkap of lamp hebt en je een gelijkmatig, gespreid licht wilt.\r\n<br><br>\r\nVoorzien van trekschakelaar.\r\n<br><br>\r\nDit product is CE-gecertificeerd.\r\n\r\nGoed te completeren met andere lampen uit dezelfde serie.', 2, '39.95', 'wit', 300, 1),
(9, 'struisvogel-lamp', 'De lampenkap van textiel geeft een zacht en decoratief licht.\r\n<br><br>\r\nLichtbron wordt apart verkocht. IKEA adviseert de led-lamp E27 globevorm opaalwit.\r\n<br><b>\r\nGebruik een opalen lichtbron als je een gewone lampenkap of lamp hebt en je een gelijkmatig, gespreid licht wilt.\r\n<br><br>\r\nVoorzien van trekschakelaar.\r\n<br><br>\r\nDit product is CE-gecertificeerd.\r\n\r\nGoed te completeren met andere lampen uit dezelfde serie.', 1, '39.95', 'wit', 300, 1);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `product_image`
--

CREATE TABLE `product_image` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `product_image`
--

INSERT INTO `product_image` (`id`, `product_id`, `image`, `active`) VALUES
(1, 1, 'arstid.jpg', 1),
(2, 2, 'buitenlamp.jpg', 1),
(3, 2, 'buitenlamp2.jpg', 1),
(4, 3, 'gans.jpg', 1),
(5, 3, 'giraf.jpg', 1),
(6, 3, 'giraf2.jpg', 1),
(7, 4, 'hektar.jpg', 1),
(8, 4, 'jesse.png', 1),
(9, 4, 'lampje.jpg', 1),
(10, 2, 'Ilahra.png', 1),
(11, 1, 'struisvogel.jpg', 1);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `firstName` varchar(12) NOT NULL,
  `middleName` varchar(10) NOT NULL,
  `lastName` varchar(15) NOT NULL,
  `birthDate` date NOT NULL,
  `emailadres` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `user`
--

INSERT INTO `user` (`id`, `firstName`, `middleName`, `lastName`, `birthDate`, `emailadres`, `password`) VALUES
(3, 'max', 'van', 'gorp', '2003-07-10', 'u534253@student.glu.', 'f336a9c660d027e1ef9ab4085480be11'),
(4, 'jan', 'van', 'os', '2020-01-01', 'jos@glu.nl', '827ccb0eea8a706c4c34a16891f84e7b'),
(13, 'max', 'van', 'Gorp', '0000-00-00', 'max124@gmail.com', '286Werkplaats'),
(14, 'max', 'van', 'van Gorp', '0000-00-00', 'max@gmail.com', '286Werkplaats'),
(15, 'max', 'van', 'gorp', '2003-07-10', '123@gmail.com', '$2y$10$635iW7awZehvRavySsXsRuEcB6DeCx18kc6sOAfU5b.RzV1b.xlE.');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexen voor tabel `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `costumer`
--
ALTER TABLE `costumer`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `emailadress` (`emailadress`);

--
-- Indexen voor tabel `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `orders_detail`
--
ALTER TABLE `orders_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `product_image`
--
ALTER TABLE `product_image`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `emailadres` (`emailadres`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT voor een tabel `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT voor een tabel `costumer`
--
ALTER TABLE `costumer`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT voor een tabel `orders_detail`
--
ALTER TABLE `orders_detail`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT voor een tabel `product_image`
--
ALTER TABLE `product_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT voor een tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
