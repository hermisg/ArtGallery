-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Φιλοξενητής: localhost:3306
-- Χρόνος δημιουργίας: 02 Ιουν 2020 στις 12:02:52
-- Έκδοση διακομιστή: 5.7.30-0ubuntu0.18.04.1
-- Έκδοση PHP: 7.2.24-0ubuntu0.18.04.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Βάση δεδομένων: `dpsd16025`
--

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `tags`
--

CREATE TABLE `tags` (
  `painting_id` int(4) NOT NULL,
  `tag` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Άδειασμα δεδομένων του πίνακα `tags`
--

INSERT INTO `tags` (`painting_id`, `tag`) VALUES
(1, 'girl'),
(1, 'smile'),
(2, 'night'),
(2, 'stars'),
(2, 'blue'),
(3, 'bridge'),
(3, 'scream'),
(3, 'sunset'),
(4, 'man'),
(4, 'woman'),
(4, 'house'),
(4, 'dog'),
(5, 'girl'),
(5, 'earring'),
(5, 'pearl'),
(6, 'god'),
(6, 'adam'),
(6, 'genesis'),
(7, 'greek'),
(7, 'goddess'),
(7, 'shore'),
(8, 'french'),
(8, 'revolution'),
(8, 'flag'),
(9, 'dog'),
(9, 'playing'),
(9, 'poker'),
(10, 'dante'),
(10, 'devine'),
(10, 'comedy'),
(11, 'dinner'),
(11, 'window'),
(12, 'gold'),
(12, 'kiss'),
(13, 'woman'),
(13, 'sand'),
(13, 'beach'),
(14, 'dancers'),
(14, 'cabaret'),
(14, 'Paris'),
(15, 'woman'),
(15, 'parasol'),
(15, 'boy'),
(15, 'cloud'),
(16, 'Paris'),
(16, 'gardens'),
(16, 'crowd'),
(16, 'gathering'),
(17, 'boy'),
(17, 'basket'),
(17, 'fruits'),
(18, 'clocks'),
(18, 'melting'),
(19, 'man'),
(19, 'apple'),
(19, 'green'),
(19, 'costume'),
(20, 'musicians'),
(8, 'crowd'),
(13, 'shore'),
(14, 'crowd'),
(19, 'fruits');

--
-- Ευρετήρια για άχρηστους πίνακες
--

--
-- Ευρετήρια για πίνακα `tags`
--
ALTER TABLE `tags`
  ADD KEY `painting_id` (`painting_id`);

--
-- Περιορισμοί για άχρηστους πίνακες
--

--
-- Περιορισμοί για πίνακα `tags`
--
ALTER TABLE `tags`
  ADD CONSTRAINT `tags_ibfk_1` FOREIGN KEY (`painting_id`) REFERENCES `paintings` (`painting_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
