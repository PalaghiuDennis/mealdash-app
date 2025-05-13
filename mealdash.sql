-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Gazdă: 127.0.0.1
-- Timp de generare: mai 13, 2025 la 10:27 PM
-- Versiune server: 10.4.27-MariaDB
-- Versiune PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Bază de date: `mealdash`
--

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `angajati`
--

CREATE TABLE `angajati` (
  `angajatID` int(11) NOT NULL,
  `nume` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `parola` varchar(255) NOT NULL,
  `telefon` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `functie` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Eliminarea datelor din tabel `angajati`
--

INSERT INTO `angajati` (`angajatID`, `nume`, `email`, `parola`, `telefon`, `status`, `functie`) VALUES
(1, 'Palaghiu Dennis', 'palaghiudennis38@gmail.com', 'parola', '0757011518', 'ACTIV', 'ADMIN'),
(2, 'Popescu Andre', 'popescuandrei38@gmail.com', 'parola', '0757011512', 'ACTIV', 'LIVRATOR'),
(3, 'Ionescu Alexandru', 'ionescualexandru38@gmail.com', 'parola', '0757011513', 'INACTIV', 'LIVRATOR'),
(4, 'Manescu Mihai', 'manescumihai38@gmail.com', 'parola', '0757011514', 'ACTIV', 'LIVRATOR');

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `clienti`
--

CREATE TABLE `clienti` (
  `clientID` int(10) NOT NULL,
  `nume` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `parola` varchar(500) NOT NULL,
  `telefon` varchar(20) NOT NULL,
  `adresa` varchar(500) NOT NULL,
  `data` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Eliminarea datelor din tabel `clienti`
--

INSERT INTO `clienti` (`clientID`, `nume`, `email`, `parola`, `telefon`, `adresa`, `data`) VALUES
(1, 'Palaghiu Dennis', 'palaghiudennis38@gmail.com', 'parola', '0757011517', 'Strada Tineretului bl. 28-30,19,Pitesti, 130073, Romania', '18/06/2023'),
(2, 'Bacs Andrei', 'abacs20@xnet.ro', 'parola', '0720059994', 'Strada Marin Brutaru,17,Pitesti, 100305, Romania', '26/03/2023'),
(3, 'Bacs Andrei', 'abacs@xnet.ro', 'parola', '0720059994', 'Strada Marin Brutaru,17,Pitesti, 100305, Romania', '08/04/2023'),
(4, 'Baita Adrian', 'adybai@yahoo.com', 'parola', '0745704916', 'Cale Serban Voda nr. 35-41,14,Pitesti, 40202, Romania', '09/04/2023'),
(5, 'Braileanu Anca', 'abrail@chimfiz.icf.ro', 'parola', '0735166906', 'Strada Cornisa Bistritei nr. 20,2,Pitesti, 600099, Romania', '28/11/2023'),
(6, 'Chiriac Romica', 'romica21@yahoo.com ', 'parola', '0722510469', 'Alee Lalelelor nr. 11-T,20,Pitesti, 720255, Romania', '14/04/2023'),
(7, 'Cristea Marcel', 'marcelc@electricaph.interplus.ro', 'parola', '0753333503', 'Strada 11 Iunie,4,Pitesti, 510163, Romania', '28/11/2023'),
(8, 'Csucs Andras', 'csucsa@kabelkon.ro', 'parola', '0722550821', 'Strada Aron Florian,30,Pitesti, 400261, Romania', '23/04/2023'),
(9, 'Dinu Gheorghe', 'csuniv@yahoo.com ', 'parola', '0723314466', 'Strada Venerei nr. 1-T,25,Pitesti, 20761, Romania', '24/04/2023'),
(10, 'Dopovetz Iuliu', 'atsbabarunca@yahoo.com', 'parola', '0749288423', 'Strada Oltului nr. 5-23,15,Pitesti, 540156, Romania', '06/05/2023'),
(11, 'Dragan Ilie', 'dobretudor@yahoo.com', 'parola', '0723322201', 'Strada Parfumului nr. 2-T,24,Pitesti, 30842, Romania', '14/05/2023'),
(12, 'Dumitru Corneliu', 'corneliu@home.ro', 'parola', '0770459859', 'Strada Dozsa György nr. 21A,5,Pitesti, 530114, Romania', '15/05/2023'),
(13, 'Enyedi Andrei', 'andrei@gmi.ro', 'parola', '0744706678', 'Strada Ulmilor nr. 1-21; 2-70,10,Pitesti, 600395, Romania', '13/06/2023'),
(14, 'Fey Sandor', 'fey@gmi.ro', 'parola', '0723171308', 'Strada Tineretului bl. 28-30,19,Pitesti, 130073, Romania', '18/06/2023'),
(15, 'Foldi Stefan', 'ifoldi@yahoo.com', 'parola', '0722548879', 'Strada Titulescu Nicolae nr. 1-T,17,Pitesti, 320085, Romania', '22/06/2023'),
(16, 'Galateanu Lucian', 'luciang@imt.ro', 'parola', '0744638752', 'Strada Aman Theodor,15,Pitesti, 210219, Romania', '26/06/2023'),
(17, 'German Zoltan', 'zgerman@magnum.engineering.uttgm.ro', 'parola', '0743165666', 'Bulevard Dacia bl. 70IVA1-78IVA1,27,Pitesti, 200045, Romania', '16/07/2023'),
(18, 'Gheuca Ion', 'gheuca@igr.ro', 'parola', '0722608038', 'Strada Orion nr. 45-T,15,Pitesti, 51466, Romania', '01/08/2023'),
(19, 'Goiceanu Anca', 'romofed@yahoo.com', 'parola', '0742922669', 'Strada Hogas Calistrat,9,Pitesti, 800254, Romania', '15/09/2023'),
(20, 'Gutt Reinhold', 'adz@directnet.ro', 'parola', '0722700467', 'Strada Labirint nr. 7; 4-6,16,Pitesti, 300378, Romania', '01/10/2023'),
(21, 'Ionita Liviu', 'liviu21@k.ro', 'parola', '0726368852', 'Strada Sporturilor nr. 5-9,12,Pitesti, 520085, Romania', '19/10/2023'),
(22, 'Iosub Gabriela', 'iosubgabi@yahoo.com', 'parola', '0766769592', 'Cale Victoriei nr. 196-214,3,Pitesti, 10098, Romania', '08/11/2023'),
(23, 'Kuszalik Janos', 'kuszi@rdslink.ro', 'parola', '0744355000', 'Strada Basarabia,25,Pitesti, 300371, Romania', '16/11/2023'),
(24, 'Kuszalik Jozsef', 'kuszi77@hotmail.com', 'parola', '0744355000', 'Strada Filimon Nicolae,13,Pitesti, 110152, Romania', '26/03/2023');

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `comanda_elemente`
--

CREATE TABLE `comanda_elemente` (
  `comanda_elemente_id` int(11) NOT NULL,
  `comandaID` int(11) DEFAULT NULL,
  `mancareID` int(11) DEFAULT NULL,
  `nume` varchar(255) DEFAULT NULL,
  `cantitate` varchar(255) DEFAULT NULL,
  `pret` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Eliminarea datelor din tabel `comanda_elemente`
--

INSERT INTO `comanda_elemente` (`comanda_elemente_id`, `comandaID`, `mancareID`, `nume`, `cantitate`, `pret`) VALUES
(16, 51, 8, 'Supă de legume', '2', '10.99'),
(17, 51, 9, 'Ciorbă de fasole', '1', '12.50'),
(18, 52, 8, 'Supă de legume', '1', '10.99'),
(19, 52, 9, 'Ciorbă de fasole', '1', '12.50'),
(20, 52, 10, 'Supă de pui cu taitei', '1', '11.99'),
(21, 53, 2, 'Burger vegetarian', '1', '17.50'),
(22, 53, 4, 'Pizza Margherita', '1', '25.99'),
(23, 53, 6, 'Paste Carbonara', '1', '18.50'),
(24, 55, 2, 'Burger vegetarian', '1', '17.50'),
(25, 55, 4, 'Pizza Margherita', '1', '25.99'),
(26, 55, 6, 'Paste Carbonara', '1', '18.50'),
(27, 56, 8, 'Supă de legume', '1', '10.99'),
(28, 57, 8, 'Supă de legume', '1', '10.99'),
(29, 57, 9, 'Ciorbă de fasole', '1', '12.50'),
(30, 58, 5, 'Lasagna Bolognese', '3', '24.99'),
(31, 59, 8, 'Supă de legume', '2', '10.99'),
(32, 60, 6, 'Paste Carbonara', '1', '18.50'),
(33, 60, 8, 'Supă de legume', '1', '10.99'),
(34, 60, 9, 'Ciorbă de fasole', '1', '12.50');

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `comenzi`
--

CREATE TABLE `comenzi` (
  `comandaID` int(11) NOT NULL,
  `PersonaLivrareID` int(11) DEFAULT NULL,
  `PersonaLivrareNume` varchar(255) DEFAULT NULL,
  `pret_total` varchar(250) DEFAULT NULL,
  `clientID` int(11) DEFAULT NULL,
  `nume` varchar(255) DEFAULT NULL,
  `telefon` varchar(255) DEFAULT NULL,
  `adresa` varchar(255) DEFAULT NULL,
  `statusc` varchar(255) DEFAULT NULL,
  `data_trimiteri` datetime DEFAULT NULL,
  `data_livrare` datetime DEFAULT NULL,
  `mentiuni` text NOT NULL,
  `telefonLivrator` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Eliminarea datelor din tabel `comenzi`
--

INSERT INTO `comenzi` (`comandaID`, `PersonaLivrareID`, `PersonaLivrareNume`, `pret_total`, `clientID`, `nume`, `telefon`, `adresa`, `statusc`, `data_trimiteri`, `data_livrare`, `mentiuni`, `telefonLivrator`) VALUES
(51, 2, 'Popescu Andre', '44.48', 1, 'Palaghiu Denis', '0757011517', 'Strada Tineretului bl. 28-30,19,Pitesti, 130073, Romania', 'LIVRATA', '2023-06-21 09:25:01', '2023-06-23 18:37:07', '', '0757011512'),
(52, 3, 'Ionescu Alexandru', '45.48', 1, 'Palaghiu Denis', '0757011517', 'Strada Tineretului bl. 28-30,19,Pitesti, 130073, Romania', 'LIVRATA', '2023-06-21 21:58:14', '2023-06-23 18:37:13', '', '0757011513'),
(53, 3, 'Ionescu Alexandru', '71.99', 1, 'Palaghiu Denis', '0757011517', 'Strada Tineretului bl. 28-30,19,Pitesti, 130073, Romania', 'LIVRATA', '2023-06-21 21:59:35', '2023-06-23 18:37:19', '', '0757011513'),
(55, 2, 'Popescu Andre', '71.99', 1, 'Palaghiu Denis', '0757011517', 'Strada Tineretului bl. 28-30,19,Pitesti, 130073, Romania', 'LIVRATA', '2023-06-21 22:00:30', '2023-06-23 18:37:25', '', '0757011512'),
(56, 2, 'Popescu Andre', '20.99', 1, 'Palaghiu Denis', '0757011517', 'Strada Tineretului bl. 28-30,19,Pitesti, 130073, Romania', 'LIVRATA', '2023-06-21 22:39:30', '2023-06-23 18:37:30', '', '0757011512'),
(57, 4, 'Manescu Mihai', '33.49', 1, 'Palaghiu Denis', '0757011517', 'Strada Tineretului bl. 28-30,19,Pitesti, 130073, Romania', 'LIVRATA', '2023-06-22 03:22:36', '2023-06-23 18:37:36', '', '0757011514'),
(58, 4, 'Manescu Mihai', '84.97', 1, 'Palaghiu Dennis', '0757011517', 'Strada Tineretului bl. 28-30,19,Pitesti, 130073, Romania', 'LIVRATA', '2023-07-06 11:59:02', '2023-07-06 11:00:04', '', '0757011514'),
(59, 2, 'Popescu Andre', '31.98', 1, 'Palaghiu Dennis', '0757011517', 'Strada Tineretului bl. 28-30,19,Pitesti, 130073, Romania', 'LIVRATA', '2023-07-06 17:17:17', '2023-07-06 16:18:12', '', '0757011512'),
(60, NULL, NULL, '51.99', 1, 'Palaghiu Dennis', '0757011517', 'Strada Tineretului bl. 28-30,19,Pitesti, 130073, Romania', 'IN ASTEPTARE', '2023-07-11 20:49:29', NULL, '', '');

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `mancare`
--

CREATE TABLE `mancare` (
  `id` int(100) NOT NULL,
  `nume` varchar(150) NOT NULL,
  `descriere` text NOT NULL,
  `pret` varchar(100) NOT NULL,
  `categorie` varchar(150) NOT NULL,
  `imagine` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Eliminarea datelor din tabel `mancare`
--

INSERT INTO `mancare` (`id`, `nume`, `descriere`, `pret`, `categorie`, `imagine`) VALUES
(1, 'Burger cu carne de vită', 'Burger suculent cu carne de vită, cheddar, salată și sosuri dulci', '22.75', 'Burger', 'IMG-647a39663eba18.83251006.png'),
(2, 'Burger vegetarian', 'Burger cu chiflă integrală, chifteluță vegetală, salată și sosuri', '17.50', 'Burger', 'IMG-647a462b2979e8.75786196.png'),
(3, 'Pizza Quattro Formaggi', 'Pizza cu patru tipuri de brânzeturi: mozzarella, gorgonzola, parmezan și provolone', '26.99', 'Pizza', 'IMG-647a479a017332.08185996.png'),
(4, 'Pizza Margherita', 'O pizza clasică cu sos de roșii, mozzarella și busuioc', '25.99', 'Pizza', 'IMG-647a484fcf80d3.77192513.png'),
(5, 'Lasagna Bolognese', 'Straturi de paste cu sos Bolognese, bechamel și parmezan gratinat', '24.99', 'Paste', 'IMG-647a4d9a897d37.96460520.png'),
(6, 'Paste Carbonara', 'Paste cremoase cu sos Carbonara, bacon și parmezan', '18.50', 'Paste', 'IMG-647a50cb6316f8.72480182.png'),
(7, 'Pâine prăjită cu avocado', 'Felii de pâine prăjită cu pastă de avocado și roșii cherry', '8.99', 'Aperitive', 'IMG-647a6664034da9.90813686.png'),
(8, 'Supă de legume', 'Supă sănătoasă și gustoasă cu legume proaspete', '10.99', 'Supe și Ciorbe', 'IMG-647a66cab46256.52707752.png'),
(9, 'Ciorbă de fasole', 'Ciorbă cu fasole cu legume legume și smântână de casa', '12.50', 'Supe și Ciorbe', 'IMG-647b43e44c9dc0.68269745.png'),
(10, 'Supă de pui cu taitei', 'Supă aromată de pui cu taitei de casa și legume proaspete', '11.99', 'Supe și Ciorbe', 'IMG-648703fd41b6b7.97135938.png');

--
-- Indexuri pentru tabele eliminate
--

--
-- Indexuri pentru tabele `angajati`
--
ALTER TABLE `angajati`
  ADD PRIMARY KEY (`angajatID`);

--
-- Indexuri pentru tabele `clienti`
--
ALTER TABLE `clienti`
  ADD PRIMARY KEY (`clientID`);

--
-- Indexuri pentru tabele `comanda_elemente`
--
ALTER TABLE `comanda_elemente`
  ADD PRIMARY KEY (`comanda_elemente_id`);

--
-- Indexuri pentru tabele `comenzi`
--
ALTER TABLE `comenzi`
  ADD PRIMARY KEY (`comandaID`);

--
-- Indexuri pentru tabele `mancare`
--
ALTER TABLE `mancare`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pentru tabele eliminate
--

--
-- AUTO_INCREMENT pentru tabele `angajati`
--
ALTER TABLE `angajati`
  MODIFY `angajatID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pentru tabele `clienti`
--
ALTER TABLE `clienti`
  MODIFY `clientID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT pentru tabele `comanda_elemente`
--
ALTER TABLE `comanda_elemente`
  MODIFY `comanda_elemente_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT pentru tabele `comenzi`
--
ALTER TABLE `comenzi`
  MODIFY `comandaID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT pentru tabele `mancare`
--
ALTER TABLE `mancare`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
