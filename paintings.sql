-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Φιλοξενητής: localhost:3306
-- Χρόνος δημιουργίας: 02 Ιουν 2020 στις 12:02:33
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
-- Δομή πίνακα για τον πίνακα `paintings`
--

CREATE TABLE `paintings` (
  `painting_id` int(60) NOT NULL,
  `title` varchar(60) NOT NULL,
  `description` text NOT NULL,
  `painter` varchar(60) NOT NULL,
  `date` int(11) NOT NULL,
  `rating` int(2) NOT NULL,
  `movement` varchar(100) NOT NULL,
  `location` varchar(60) NOT NULL,
  `thumbnail_name` varchar(60) NOT NULL,
  `img_name` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Άδειασμα δεδομένων του πίνακα `paintings`
--

INSERT INTO `paintings` (`painting_id`, `title`, `description`, `painter`, `date`, `rating`, `movement`, `location`, `thumbnail_name`, `img_name`) VALUES
(1, 'Mona Lisa', 'The painting is likely of the Italian noblewoman Lisa Gherardini, the wife of Francesco del Giocondo, and is in oil on a white Lombardy poplar panel.', 'Leonardo DaVinci', 1519, 10, 'Post-Impressionism', 'Louvre Museum, Paris', 'thumb/1e.jpg', 'Paintings/Mona_Lisa.jpg'),
(2, 'The Starry Night', 'It describes the view from the east-facing window of his asylum room at Saint-Rémy-de-Provence, just before sunrise, with the addition of an ideal village.', 'Vincent Van Gogh', 1889, 9, 'Renaissance', 'Museum of Modern Art, New York', 'thumb/2e.jpg', 'Paintings/Starry_Night.jpg'),
(3, 'The Scream', 'The agonised face in the painting has become one of the most iconic images of art, seen as symbolising the anxiety of the human condition.', 'Edvard Munch', 1893, 8, 'Expressionism', 'Nasjonalgalleriet, Oslo', 'thumb/3e.jpg', 'Paintings/The_Scream.jpg'),
(4, 'The Arnolfini Portrait', 'It forms a full-length double portrait, believed to depict the Italian merchant Giovanni di Nicolao Arnolfini and his wife, presumably in their residence at the Flemish city of Bruges.', 'Jan van Eyck', 1434, 8, 'Renaissance', 'National Gallery, London', 'thumb/4e.jpg', 'Paintings/Arnolfini_Portrait.jpg'),
(5, 'The Girl With A Pearl Earring', 'It depicts a European girl wearing an exotic dress, an oriental turban, and an improbably large pearl earring.', 'Johannes Vermeer', 1665, 9, 'Baroque', 'Mauritshuis, The Hague', 'thumb/5e.jpg', 'Paintings/Girl_with_a_Pearl_Earring.jpg'),
(6, 'The Creation Of Adam', 'It illustrates the Biblical creation narrative from the Book of Genesis in which God gives life to Adam, the first man.', 'Michelangelo', 1512, 9, 'High Renaissance', 'Sistine Chapel, Vatican', 'thumb/6e.jpg', 'Paintings/The_Creation_of_Adam.jpg'),
(7, 'The Birth Of Venus', 'It depicts the goddess Venus arriving at the shore after her birth, when she had emerged from the sea fully-grown.', 'Sandro Botticelli', 1485, 8, 'Early Renaissance', 'Uffizi Gallery, Florence', 'thumb/7e.jpg', 'Paintings/The_Birth_of_Venus.jpg'),
(8, 'The Liberty Leading The People', 'A woman of the people with a Phrygian cap, personifying the concept of Liberty, leads a varied group of people forward over a barricade and the bodies of the fallen, holding the flag of the French Revolution.', 'Eugène Delacroix', 1830, 8, 'French Romantic Movement', 'Louvre, Paris', 'thumb/8e.jpg', 'Paintings/The_Liberty_Leading_the_People.jpg'),
(9, 'A Friend In Need', 'The painting is part of a series of sixteen oil paintings, originally commissioned by Brown & Bigelow to advertise cigars.', 'Cassius Marcellus Coolidge', 1903, 7, 'Kitsch', 'Private Owner', 'thumb/9e.jpg', 'Paintings/A_Friend_in_Need.jpg'),
(10, 'Dante And Virgil In Hell', 'The painting depicts a scene from the Divine Comedy which is Dante and Virgil looking on as two damned souls are entwined in combat.', 'William-Adolphe Bouguereau', 1850, 9, 'Neoclassicism ', 'Musée du Orsay, Paris', 'thumb/0e.jpg', 'Paintings/Dante_and_Virgil_in_Hell.jpg'),
(11, 'Nighthawks', 'The painting portrays four people in a downtown diner late at night as viewed through the diners large glass window.', 'Edward Hopper', 1942, 7, 'American Realism', 'Art Institute of Chicago', 'thumb/1r.jpg', 'Paintings/Nighthawks.jpg'),
(12, 'The Kiss', 'Oil on canvas with addes gold leaves. The painting depicts a couple embracing each other, about to kiss. The background is dark gold, while the two bodies are covered with robes decorated with geometric symbols.', 'Gustav Klimt', 1908, 9, 'Art Nouveau', 'Österreichische Galerie Belvedere', 'thumb/2r.jpg', 'Paintings/The_Kiss.jpg'),
(13, 'Tahitian Women on the Beach', 'The painting depicts two women on the Pacific island of Tahiti on the beach.', 'Paul Gauguin', 1891, 8, 'Post Impressionism', 'Musée du Orsay', 'thumb/3r.jpg', 'Paintings/Tahitian_Women_on_the_Beach.jpg'),
(14, 'At the Moulin Rouge, the Dance', 'Oil on camvas. It portrays two dancers dancing the can-can in the middle of the crowded dance hall of the cabaret Moulin Rouge, in Paris.', 'Henri de Toulouse-Lautrec', 1890, 7, 'Post Impressionism', 'Philadelphia Museum of Art', 'thumb/4r.jpg', 'Paintings/At_the_Moulin_Rouge_the_Dance.jpg'),
(15, 'Woman with a Parasol - Madame Monet and Her Son', 'Oil on Canvas. The painting depicts the painters wife and their son, capturing a moment on a stroll, on a windy summers day.', 'Claude Monet', 1875, 9, 'Impressionism', 'National Gallery of Art, Washington, DC', 'thumb/5r.jpg', 'Paintings/Woman_with_a_Parasol.jpg'),
(16, 'Music in the Tuileries', 'Oil on Canvas. The painting depicts the gatherings of Parisians at weekly concerts in the Tuileries gardens near the Louvre, although no musicians are depicted.', 'Édouard Manet', 1862, 8, 'Impressionism', 'The Hugh Lane, Dublin', 'thumb/6r.jpg', 'Paintings/Music_in_the_Tuileries.jpg'),
(17, 'Boy with a Basket of Fruit', 'Oil on canvas. The painting depicts a young boy holding a basket full of fruit. The model is the Sicilian painter and friend of Caravaggio, Mario Minniti, who was roughly 16 when he sat for this painting.', 'Michelangelo ', 1593, 10, 'Baroque', 'Galleria Borghese, Rome', 'thumb/7r.jpg', 'Paintings/Boy_with_a_basket_of_fruit.jpg'),
(18, 'The Persistence of Memory', 'The well-known surrealist piece introduced the image of the soft melting pocket watch. It epitomizes Dalís theory of softness and hardness, which was central to his thinking at the time.', 'Salvador Dalí', 1931, 8, 'Surrealism', 'Museum of Modern Art, New York City', 'thumb/8r.jpg', 'Paintings/The_persistence_of_memory.jpg'),
(19, 'The Son of Man', 'The painting consists of a man in an overcoat and a bowler hat standing in front of a low wall, beyond which are the sea and a cloudy sky. The mans face is largely obscured by a hovering green apple.', 'René Magritte', 1964, 7, 'Surrealism', 'Private Collection', 'thumb/9r.jpg', 'Paintings/The_son_of_man.jpg'),
(20, 'Three Musicians', 'Three Musicians is the title of two similar collage and oil paintings by Pablo Picasso. These paintings each colorfully represent three musicians wearing masks in the tradition of the popular Italian theater Commedia dell arte.', 'Pablo Picasso', 1921, 8, 'Synthetic Cubism', 'Philadelphia Museum of Art', 'thumb/0r.jpg', 'Paintings/The_three_musicians.jpg');

--
-- Ευρετήρια για άχρηστους πίνακες
--

--
-- Ευρετήρια για πίνακα `paintings`
--
ALTER TABLE `paintings`
  ADD PRIMARY KEY (`painting_id`);

--
-- AUTO_INCREMENT για άχρηστους πίνακες
--

--
-- AUTO_INCREMENT για πίνακα `paintings`
--
ALTER TABLE `paintings`
  MODIFY `painting_id` int(60) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
