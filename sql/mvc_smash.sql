-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : ven. 03 fév. 2023 à 08:52
-- Version du serveur : 8.0.27
-- Version de PHP : 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `mvc_smash`
--

-- --------------------------------------------------------

--
-- Structure de la table `characters`
--

CREATE TABLE `characters` (
  `id` int NOT NULL,
  `character_name` varchar(50) NOT NULL,
  `number` varchar(7) NOT NULL,
  `origin_game` varchar(100) NOT NULL,
  `first_apparition` year DEFAULT NULL,
  `main_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `characters`
--

INSERT INTO `characters` (`id`, `character_name`, `number`, `origin_game`, `first_apparition`, `main_image`) VALUES
(1, 'Mario', '01', 'Donkey Kong', 1981, 'images/characters/Mario/super_smash_bros_ultimate_mario_by_waluigifan32-dce7dgl-697183020.png'),
(2, 'Terry Boguard', '74', 'Fatal Fury: King of Fighters ', 1991, 'images\\characters\\Terry\\Terry_SSBU-1465525111.png'),
(5, 'Lucina', '21ε', 'Fire Emblem Awakening', 2012, 'images\\characters\\Lucina\\1200px-Lucina_SSBU-3084990147.png'),
(6, 'Corrin', '62', 'Fire Emblem Fates', 2015, 'images\\characters\\Corrin\\super_smash_bros__ultimate___62__corrin___female_by_pokemonabsol_dcn987l-pre-2992790709.png'),
(7, 'Steve', '77', 'Minecraft', 2011, 'images\\characters\\Steve\\Steve_SSBU-2159071949.png'),
(8, 'Kazuya', '81', 'Tekken', 1994, 'images\\characters\\Kazuya\\super_smash_bros__ultimate___81__kazuya_alt_by_pokemonabsol_delkpqj-pre-1139783440.png'),
(9, 'Donkey Kong', '02', 'Donkey Kong', 1981, 'images\\characters\\Donkey Kong\\2000px-DK_(DKCTF)-4144603739.png'),
(10, 'Link', '03', 'The Legend of Zelda', 1986, 'images\\characters\\Link\\2000-4019301563.png'),
(11, 'Samus', '04', 'Metroid', 1986, 'images\\characters\\Samus\\1200px-Samus_SSBU-2770845319.png'),
(12, 'Samus Sombre', '04ε', 'Metroid Prime', 2002, 'images\\characters\\Samus sombre\\latest-1096528546.png'),
(13, 'Yoshi', '05', 'Super Mario World', 1990, 'images\\characters\\Yoshi\\1200px-Yoshi_SSBU-4050187736.png'),
(14, 'Kirby', '06', 'Kirby\'s Dream Land', 1992, 'images\\characters\\Kirby\\1200px-Kirby_SSBU-1752942295.png'),
(15, 'Fox', '07', 'Star Fox', 1993, 'images\\characters\\Fox\\latest-336451001.png'),
(16, 'Pikachu', '08', 'Pokémon Rouge et Vert', 1996, 'images\\characters\\Pikachu\\latest-2626968589.png'),
(17, 'Luigi', '09', 'Super Mario Bros', 1983, 'images\\characters\\Luigi\\latest-181089019.png'),
(18, 'Ness', '10', 'EarthBound', 1994, 'images\\characters\\Ness\\1200px-Ness_SSBU-88589730.png'),
(19, 'Captain Falcon', '11', 'F-Zero', 1990, 'images\\characters\\Captain Falcon\\captainfalconultimate-1619521938.png'),
(20, 'Rondoudou', '12', 'Pokémon Rouge et Vert', 1996, 'images\\characters\\Rondoudou\\Rondoudou.png\"'),
(21, 'Peach', '13', 'Super Mario Bros', 1985, 'images\\characters\\Peach\\Peach.png'),
(22, 'Daisy', '13ε', 'Super Mario Land', 1989, ''),
(23, 'Bowser', '14', 'Super Mario Bros', 1985, ''),
(24, 'Ice Climbers', '15', 'VS. Ice Climber', 1984, ''),
(25, 'Sheik', '16', 'The Legend of Zelda: Ocarina of Time', 1998, ''),
(26, 'Zelda', '17', 'The Legend of Zelda', 1986, ''),
(27, 'Dr. Mario', '18', 'Dr. Mario', 1990, ''),
(28, 'Pichu', '19', 'Pokémon Or et Argent', 1999, ''),
(29, 'Falco', '20', 'Star Fox', 1993, ''),
(30, 'Marth', '21', 'Fire Emblem', 1990, ''),
(31, 'Young Link', '22', 'The Legend of Zelda: Ocarina of Time', 1998, ''),
(32, 'Ganondorf', '23', 'The Legend of Zelda: Ocarina of Time', 1998, ''),
(33, 'Mewtwo', '24', 'Pokémon Rouge et Vert', 1996, ''),
(34, 'Roy', '25', 'Fire Emblem: The Binding Blade', 2002, ''),
(35, 'Chrom', '25ε', 'Fire Emblem Awakening', 2012, ''),
(36, 'Mr. Game & Watch', '26', 'Game & Watch: Ball ', 1980, ''),
(37, 'Meta Knight', '27', 'Kirby\'s Adventure', 1993, ''),
(38, 'Pit', '28', 'Kid Icarus', 1986, ''),
(39, 'Pit maléfique', '28ε', 'Kid Icarus: Uprising', 2012, ''),
(40, 'Wario', '30', 'Super Mario Land 2: 6 Golden Coins', 1992, ''),
(41, 'Samus sans armure', '29', 'Metroid', 1986, ''),
(42, 'Snake', '31', 'Metal Gear', 1987, ''),
(43, 'Ike', '32', 'Fire Emblem: Path of Radiance', 2005, ''),
(44, 'Dresseur de pokémon', '33 - 35', 'Pokémon Rouge et Vert', 1996, ''),
(45, 'Diddy Kong', '36', 'Donkey Kong Country', 1994, ''),
(46, 'Lucas', '37', 'Mother 3', 2006, ''),
(47, 'Sonic', '38', 'Sonic the Hedgehog', 1991, ''),
(48, 'Roi DaDiDou', '39', 'Kirby\'s Dream Land', 1992, ''),
(49, 'Olimar', '40', 'Pikmin', 2001, ''),
(50, 'Lucario', '41', 'Pokémon Diamant et Perle', 2006, ''),
(51, 'R.O.B', '42', 'Stack-Up', 1985, ''),
(52, 'Link Cartoon', '43', 'The Legend of Zelda: The Wind Waker', 2002, ''),
(53, 'Wolf', '44', 'Star Fox 64', 1997, ''),
(54, 'Villageois', '45', 'Animal Crossing', 2001, ''),
(55, 'Wii Fit Trainer', '47', 'Wii Fit', 2007, ''),
(56, 'Mega Man', '46', 'Mega Man', 1987, ''),
(57, 'Harmonie & Luma', '48', 'Super Mario Galaxy', 2007, ''),
(58, 'Little Mac', '49', 'Punch-Out!!', 1984, ''),
(59, 'Greninja', '50', 'Pokémon X et Y', 2013, ''),
(61, 'Boxeur Mii', '51', 'Mii Channel', 2006, ''),
(62, 'Epéiste Mii', '52', 'Mii Channel', 2006, ''),
(63, 'Tireur Mii', '53', 'Mii Channel ', 2006, ''),
(64, 'Palutena', '54', 'Kid Icarus', 1986, ''),
(65, 'Pac-Man', '55', 'Pac-Man', 1980, ''),
(66, 'Daraen', '56', 'Fire Emblem Awakening ', 2012, ''),
(67, 'Shulk', '57', 'Xenoblade Chronicles', 2010, ''),
(68, 'Bowser Jr', '58', 'Super Mario Sunshine', 2002, ''),
(69, 'Duck Hunt', '59', 'Duck Hunt', 1984, ''),
(70, 'Ryu', '60', 'Street Fighter', 1987, ''),
(71, 'Ken', '60ε', 'Street Fighter', 1987, ''),
(72, 'Cloud', '61', 'Final Fantasy VII', 1997, ''),
(73, 'Bayonetta', '63', 'Bayonetta', 2009, ''),
(74, 'Inkling', '64', 'Splatoon', 2015, ''),
(75, 'Ridley', '65', 'Metroid', 1986, ''),
(76, 'Simon', '66', 'Castlevania', 1986, ''),
(77, 'Richter', '66ε', 'Castlevania: Rondo of Blood', 1993, ''),
(78, 'King K. Rool', '67', 'Donkey Kong Country', 1994, ''),
(79, 'Marie', '68', 'Animal Crossing: New Leaf', 2012, ''),
(80, 'Incineroar', '69', 'Pokémon Soleil et Lune', 2016, ''),
(81, 'Plante Piranha', '70', 'Super Mario Bros', 1985, ''),
(82, 'Joker', '71', 'Persona 5', 2016, ''),
(83, 'Heros', '72', 'Dragon Quest', 1986, ''),
(84, 'Banjo & Kazooie', '73', 'Banjo-Kazooie', 1998, ''),
(85, 'Byleth', '75', 'Fire Emblem: Three Houses', 2019, 'images\\characters\\Byleth\\byleth.png'),
(86, 'Min Min', '76', 'ARMS', 2017, ''),
(87, 'Sephiroth', '78', 'Final Fantasy VII', 1997, ''),
(88, 'Pyra / Mythra', '79 - 80', 'Xenoblade Chronicles 2', 2017, ''),
(89, 'Sora', '82', 'Kingdom Hearts', 2002, '');

-- --------------------------------------------------------

--
-- Structure de la table `character_images`
--

CREATE TABLE `character_images` (
  `id` int NOT NULL,
  `character_id` int NOT NULL,
  `path` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

CREATE TABLE `comments` (
  `id` int NOT NULL,
  `smash_id` int NOT NULL,
  `user_id` int NOT NULL,
  `comment` text NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `comments`
--

INSERT INTO `comments` (`id`, `smash_id`, `user_id`, `comment`, `date`) VALUES
(2, 5, 1, 'Très bon jeu !', '2023-01-31 18:11:48'),
(3, 5, 1, 'Mais steve c\'est op !!', '2023-01-31 18:12:09');

-- --------------------------------------------------------

--
-- Structure de la table `smash`
--

CREATE TABLE `smash` (
  `id` int NOT NULL,
  `name` varchar(100) NOT NULL,
  `date_release` date NOT NULL,
  `text` text NOT NULL,
  `bg_image` text NOT NULL,
  `trailer_video` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `smash`
--

INSERT INTO `smash` (`id`, `name`, `date_release`, `text`, `bg_image`, `trailer_video`) VALUES
(1, 'Super Smash Bros 64', '1999-11-19', 'Super Smash Bros, également appelé Super Smash Bros. 64, souvent abrégé en SSB ou Smash 64, est le premier jeu de la série Super Smash Bros.\n\nLe jeu est sorti au Japon le 21 janvier 1999, en Amérique du Nord le 26 avril 1999 et en Europe le 19 novembre 1999 pour la Nintendo 64. Par la suite, il est sorti sur iQue Player en Chine le 15 novembre 2005. C\'était réédité sur la console virtuelle Wii le 20 janvier 2009 au Japon, un jour avant son 10e anniversaire, et plus tard cette année-là en Europe et en Amérique du Nord, avant de devenir indisponible après la fermeture de la chaîne boutique Wii le 30 janvier 2019 .\n\nSuper Smash Bros. a reçu des critiques positives, la plupart des éloges allant à son mode multijoueur, tandis que son mode solo a reçu quelques critiques. Le jeu s\'est vendu à 5 millions d\'unités dans le monde en 2001, ce qui en fait le cinquième jeu Nintendo 64 le plus vendu de tous les temps.', 'images/smashGames/bg-smash64.jpg', 'https://www.youtube.com/embed/pZed8RLz-nY'),
(2, 'Super Smash Bros Melee', '2002-05-24', 'Super Smash Bros. Melee, souvent abrégé en \"SSBM\" ou \"Melee\", est un jeu de combat 2.5D pour la Nintendo GameCube. Il est sorti le 21 novembre 2001 au Japon et le 3 décembre 2001 en Amérique du Nord, peu après le lancement de GameCube, puis l\'année suivante en Europe et en Australie les 24 mai 2002 et 31 mai 2002 respectivement. Il s\'agit du deuxième jeu de la série Super Smash Bros., après son prédécesseur, Super Smash Bros., et a été remplacé par Super Smash Bros. Brawl, Super Smash Bros. 4 et Super Smash Bros. Ultimate.\n\nComme Super Smash Bros., Melee propose un gameplay unique par rapport à celui des autres jeux de combat. Comparés aux personnages d\'autres jeux de combat, les personnages de mêlée ont des mouvements simples et manquent d\'entrées de boutons compliquées et de longs combos naturels. Au lieu de cela, Melee met l\'accent sur le mouvement et les sonneries. En effet, la protection des bords dans Melee prend beaucoup plus d\'importance que dans la plupart des autres jeux en raison de nombreux sauts en l\'air et d\'autres méthodes pour atteindre le bord sans entrave. Le jeu s\'est vendu à 7,09 millions d\'unités en 2008, ce qui en fait le jeu GameCube le plus vendu de tous les temps. Melee est également l\'un des deux jeux de la série Super Smash Bros. à être classé T par l\'ESRB, l\'autre étant sa suite, Super Smash Bros. Brawl.\n\nMelee a reçu des éloges universels, de nombreux critiques louant l\'expansion et le raffinement du jeu par rapport à son prédécesseur N64, Super Smash Bros., ainsi que ses visuels, ses commandes strictes, son mode multijoueur et sa bande-son orchestrée, bien que ses modes solo manquent d\'originalité. , et la similitude avec son prédécesseur a été critiquée.', 'images/smashGames/bg-smashMelee.jpg', 'https://www.youtube.com/embed/O0O173xIuO0'),
(3, 'Super Smash Bros Brawl', '2007-06-27', 'Super Smash Bros. Brawl, souvent abrégé en « SSBB » ou « Brawl », est le troisième opus de la série Super Smash Bros. éditée par Nintendo. Le jeu a été conçu par Masahiro Sakurai, qui a également créé les deux précédents jeux Super Smash Bros., et a été développé par une équipe de développement composée de Sora et Game Arts, à partir d\'octobre 2005.Le jeu est sorti le 31 janvier 2008 au Japon, le 9 mars 2008 en Amérique du Nord, le 26 juin 2008 en Australie et le 27 juin 2008 en Europe. Brawl prend en charge quatre types de contrôleurs - la télécommande Wii seule tenue horizontalement, la télécommande Wii et le Nunchuk ensemble, le contrôleur classique / contrôleur classique Pro et le contrôleur GameCube. Jusqu\'à quatre joueurs peuvent s\'engager dans des batailles multijoueurs locales à tout moment avec n\'importe quelle combinaison de contrôleurs, tandis que Brawl a également pris en charge le jeu en ligne via la connexion Wi-Fi Nintendo, le premier jeu de la série à le faire.Alors que Brawl continue d\'inclure les modes solo ', 'images/smashGames/bg-smashBrawl.jpg', 'https://www.youtube.com/embed/PbetJKOQB7k'),
(4, 'Super Smash Bros 4', '2014-11-28', 'Super Smash Bros. 4 est un terme utilisé pour désigner collectivement Super Smash Bros. pour Nintendo 3DS et Super Smash Bros. pour Wii U, deux jeux de la série Super Smash Bros. créée par Bandai Namco[3] et Sora Ltd. Dans une interview avec Kotaku, Masahiro Sakurai a déclaré qu\'il considérait la version 3DS comme le quatrième opus et la version Wii U comme le cinquième opus. Les jeux présentent un gameplay essentiellement identique, mais avec plusieurs différences dans d\'autres domaines. La version 3DS est le premier jeu de la série à sortir sur une console portable.\n\nLa version 3DS a été lancée au Japon le 13 septembre 2014 et dans la plupart des autres régions du monde le 3 octobre 2014. Elle est sortie en magasin un jour plus tôt en Allemagne le 2 octobre 2014 pour éviter de coïncider avec la Journée de l\'unité allemande, et est sorti un jour plus tard en Australie le 4 octobre 2014 en raison des différences de fuseau horaire. Hong Kong et Taïwan ont reçu une sortie du jeu plus de dix mois plus tard, le 24 juillet 2015, tandis que la Corée du Sud a obtenu sa sortie le 10 septembre 2015, près d\'un an après le lancement initial du jeu au Japon. La version Wii U est sortie en Amérique du Nord le 21 novembre 2014 et est sortie le 28 novembre 2014 en Europe, le 29 novembre 2014 en Australie et le 6 décembre 2014 au Japon.\n\nLes deux versions ont reçu des critiques positives; les critiques ont applaudi le réglage fin des éléments de gameplay existants, mais ont critiqué certains problèmes liés au jeu en ligne. La version 3DS s\'est vendue à plus de 9,64 millions d\'exemplaires dans le monde au 30 septembre 2022 et la version Wii U s\'est vendue à plus de 5,38 millions d\'exemplaires au 30 septembre 2020.', 'images/smashGames/bg-smash4.jpg', 'https://www.youtube.com/embed/xvudMu-5kIU'),
(5, 'Super Smash Bros Ultimate', '2018-12-07', 'Des mondes de jeux et des combattants légendaires se retrouvent pour l’affrontement ultime dans Super Smash Bros. Ultimate sur Nintendo Switch !\r\n\r\nDe nouveaux combattants, comme l\'Inkling de la série Splatoon, Ridley de la série Metroid, Simon Belmont de la série Castlevania et Marie de la série Animal Crossing, font leurs débuts dans Super Smash Bros. aux côtés de TOUS les combattants ayant jamais figuré dans la série Super Smash Bros. !\r\n\r\nPréparez-vous à éjecter vos adversaires hors du stage dans ce jeu d\'action ultime ! Une mécanique de jeu plus rapide, de nouveaux objets, de nouvelles attaques, de nouvelles options défensives, de nouvelles techniques et bien davantage vous permettront de vivre des affrontements épiques chez vous ou en déplacement !\r\n\r\nDivers modes et options vous permettent de jouer à plusieurs ! Dans le mode Smash, vous pouvez sélectionner vos stages et choisir vos règles pour des combats impliquant jusqu\'à huit joueurs ! Dans Smash en bande, vous pouvez aussi former une équipe de 3 ou 5 combattants pour affronter l\'équipe adverse. Et ce n\'est que le début !\r\n\r\nLe système d\'esprits permet de simuler des combats entre des personnages issus d\'un nombre de séries jamais égalé ! Combien d\'esprits parviendrez-vous à obtenir ? Alors que les esprits primaires améliorent les statistiques de vos combattants, les esprits de soutien leur donnent des talents supplémentaires. Affublé d\'un esprit primaire et d\'esprits de soutien, un combattant devient surpuissant !\r\n\r\nLes stages réintroduits ont aussi été améliorés, et tous les stages ont une version Champ de Bataille ainsi qu\'une version Destination Finale. Les stages renferment de nombreux mécanismes à découvrir : certains changent de forme, et d\'autres peuvent soudain être visités par des invités surprise. De plus, l\'option Changement de stage vous permet de choisir deux stages, qui alterneront automatiquement après un certain temps !\r\n\r\nChoisissez votre musique préférée et sélectionnez-la comme musique de fond. Il y en a plus de 800 au total !\r\n\r\nRapprochez-vous de la victoire en exploitant tout le potentiel des objets qui apparaissent dans les stages ! Des Pokémon peuvent jaillir de Poké Balls et de Master Balls pour vous assister dans la bataille, et des personnages invités peuvent surgir de trophées aide pour vous donner un coup de pouce !\r\n\r\nDavantage de combattants, de stages et de musiques sont disponibles en tant que contenus téléchargeables !\r\n\r\nLe Fighters Pass de Super Smash Bros. Ultimate vous donne accès à cinq sets de combattant réunissant en tout : cinq combattants, cinq stages et de nouvelles musiques. Des combattants issus des séries Banjo-Kazooie, DRAGON QUEST, FATAL FURY, Persona 5 et Fire Emblem vous attendent !\r\n\r\nLe Fighters Pass Vol. 2 de Super Smash Bros. Ultimate donne accès à six sets de combattant supplémentaires réunissant en tout : six combattants, six stages et de nouvelles musiques. Brillez sur le champ de bataille avec ces combattants issus de KINGDOM HEARTS, Minecraft, FINAL FANTASY VII, ARMS et plus encore !\r\n\r\nD\'autres DLC sont aussi disponibles séparément, comme le combattant Plante Piranha ou des costumes pour les combattants Mii !', 'images/smashGames/bg-smashUltimate.jpg', 'https://www.youtube.com/embed/WShCN-AYHqA');

-- --------------------------------------------------------

--
-- Structure de la table `smash_characters`
--

CREATE TABLE `smash_characters` (
  `smash_id` int NOT NULL,
  `character_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `smash_characters`
--

INSERT INTO `smash_characters` (`smash_id`, `character_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(5, 2),
(4, 5),
(5, 5),
(4, 6),
(5, 6),
(5, 7),
(5, 8),
(1, 9),
(2, 9),
(3, 9),
(4, 9),
(5, 9),
(1, 10),
(2, 10),
(3, 10),
(4, 10),
(5, 10),
(1, 11),
(2, 11),
(3, 11),
(4, 11),
(5, 11),
(5, 12),
(1, 13),
(2, 13),
(3, 13),
(4, 13),
(5, 13),
(1, 14),
(2, 14),
(3, 14),
(4, 14),
(5, 14),
(1, 15),
(2, 15),
(3, 15),
(4, 15),
(5, 15),
(1, 16),
(2, 16),
(3, 16),
(4, 16),
(5, 16),
(1, 17),
(2, 17),
(3, 17),
(4, 17),
(5, 17),
(1, 18),
(2, 18),
(3, 18),
(4, 18),
(5, 18),
(1, 19),
(2, 19),
(3, 19),
(4, 19),
(5, 19),
(1, 20),
(2, 20),
(3, 20),
(4, 20),
(5, 20),
(2, 21),
(3, 21),
(4, 21),
(5, 21),
(5, 22),
(2, 23),
(3, 23),
(4, 23),
(5, 23),
(2, 24),
(3, 24),
(5, 24),
(2, 25),
(3, 25),
(4, 25),
(5, 25),
(2, 26),
(3, 26),
(4, 26),
(5, 26),
(2, 27),
(4, 27),
(5, 27),
(2, 28),
(5, 28),
(2, 29),
(3, 29),
(4, 29),
(5, 29),
(2, 30),
(3, 30),
(4, 30),
(5, 30),
(4, 31),
(5, 31),
(2, 32),
(3, 32),
(4, 32),
(5, 32),
(2, 33),
(4, 33),
(5, 33),
(2, 34),
(4, 34),
(5, 34),
(5, 35),
(2, 36),
(3, 36),
(4, 36),
(5, 36),
(3, 37),
(4, 37),
(5, 37),
(3, 38),
(4, 38),
(5, 38),
(4, 39),
(5, 39),
(3, 40),
(4, 40),
(5, 40),
(3, 41),
(4, 41),
(5, 41),
(3, 42),
(5, 42),
(3, 43),
(4, 43),
(5, 43),
(3, 44),
(5, 44),
(3, 45),
(4, 45),
(5, 45),
(3, 46),
(4, 46),
(5, 46),
(3, 47),
(4, 47),
(5, 47),
(3, 48),
(4, 48),
(5, 48),
(3, 49),
(4, 49),
(5, 49),
(3, 50),
(4, 50),
(5, 50),
(3, 51),
(4, 51),
(5, 51),
(3, 52),
(4, 52),
(5, 52),
(3, 53),
(5, 53),
(4, 54),
(5, 54),
(4, 55),
(5, 55),
(4, 56),
(5, 56),
(4, 57),
(5, 57),
(4, 58),
(5, 58),
(4, 59),
(5, 59),
(4, 61),
(5, 61),
(4, 62),
(5, 62),
(4, 63),
(5, 63),
(4, 64),
(5, 64),
(4, 65),
(5, 65),
(4, 66),
(5, 66),
(4, 67),
(5, 67),
(4, 68),
(5, 68),
(4, 69),
(5, 69),
(4, 70),
(5, 70),
(4, 71),
(5, 71),
(4, 72),
(5, 72),
(4, 73),
(5, 73),
(5, 74),
(5, 75),
(5, 76),
(5, 77),
(5, 78),
(5, 79),
(5, 80),
(5, 81),
(5, 82),
(5, 83),
(5, 84),
(5, 85),
(5, 86),
(5, 87),
(5, 88),
(5, 89);

-- --------------------------------------------------------

--
-- Structure de la table `smash_images`
--

CREATE TABLE `smash_images` (
  `id` int NOT NULL,
  `smash_id` int NOT NULL,
  `path` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `smash_images`
--

INSERT INTO `smash_images` (`id`, `smash_id`, `path`) VALUES
(1, 5, 'images\\gallery\\ultimate\\terry-bogard.webp'),
(2, 5, 'images\\gallery\\ultimate\\super-smash-bros-ultimate-sephiroth_feature.jpg'),
(3, 2, 'images\\gallery\\melee\\maxresdefault-657101105.jpg'),
(4, 5, 'images\\gallery\\ultimate\\super-smash-bros-ultimate-25-16-01-2020_00943921.jpg'),
(5, 5, 'images\\gallery\\ultimate\\maxresdefault.jpg'),
(6, 5, 'images\\gallery\\ultimate\\Joker-Super-Smash-Bros-Ultimate.jpeg'),
(7, 5, 'images\\gallery\\ultimate\\corrin1.png'),
(8, 5, 'images\\gallery\\ultimate\\HAC_J_AAABA.png'),
(9, 5, 'images\\gallery\\ultimate\\Screen-Shot-2020-08-19-at-8.36.35-AM-2981958194.png'),
(10, 5, 'images\\gallery\\ultimate\\super-smash-bros-ultimate-19-04-03-2021_0000975467-198223560.png'),
(11, 2, 'images\\gallery\\melee\\melee.0-2738689587.png'),
(12, 3, 'images\\gallery\\brawl\\super-smash-bros-wii-1795112145.png'),
(13, 1, 'images\\gallery\\64\\Super_Smash_Bros_Gameplay1-4-1030783653.png'),
(14, 4, 'images\\gallery\\4\\maxresdefault-401644064.png'),
(15, 4, 'images\\gallery\\4\\maxresdefault-1257067285.png'),
(16, 4, 'images\\gallery\\4\\maxresdefault-1572618741.png'),
(17, 4, 'images\\gallery\\4\\maxresdefault-3977565301.png'),
(18, 4, 'images\\gallery\\4\\nintendo_super_smash_bros_4_3ds_gamingway-1-2500731660.png');

-- --------------------------------------------------------

--
-- Structure de la table `smash_videos`
--

CREATE TABLE `smash_videos` (
  `id` int NOT NULL,
  `smash_id` int NOT NULL,
  `path` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `smash_videos`
--

INSERT INTO `smash_videos` (`id`, `smash_id`, `path`) VALUES
(1, 5, 'https://youtu.be/If3lCdtO90U?list=PLgYvyT_FA3_yfpT14a-KzDiwYyhic9yvt');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `pseudo` varchar(50) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `pseudo`, `email`, `password`) VALUES
(1, 'Admin', 'Admin', 'admin', 'admin@admin.fr', '$2y$10$ySLQykCJAqBZ.RjZkuRoAeVdv361wy/jcr/IhHcDH1zq2xq0XBcQS');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `characters`
--
ALTER TABLE `characters`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `character_images`
--
ALTER TABLE `character_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `character_id` (`character_id`);

--
-- Index pour la table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `smash_id` (`smash_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Index pour la table `smash`
--
ALTER TABLE `smash`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `smash_characters`
--
ALTER TABLE `smash_characters`
  ADD PRIMARY KEY (`smash_id`,`character_id`),
  ADD KEY `smash_id` (`smash_id`,`character_id`),
  ADD KEY `character_id` (`character_id`);

--
-- Index pour la table `smash_images`
--
ALTER TABLE `smash_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `smash_id` (`smash_id`);

--
-- Index pour la table `smash_videos`
--
ALTER TABLE `smash_videos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `smash_id` (`smash_id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `characters`
--
ALTER TABLE `characters`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT pour la table `character_images`
--
ALTER TABLE `character_images`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `smash`
--
ALTER TABLE `smash`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `smash_images`
--
ALTER TABLE `smash_images`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT pour la table `smash_videos`
--
ALTER TABLE `smash_videos`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `character_images`
--
ALTER TABLE `character_images`
  ADD CONSTRAINT `character_images_ibfk_1` FOREIGN KEY (`character_id`) REFERENCES `characters` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`smash_id`) REFERENCES `smash` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `smash_characters`
--
ALTER TABLE `smash_characters`
  ADD CONSTRAINT `smash_characters_ibfk_1` FOREIGN KEY (`smash_id`) REFERENCES `smash` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `smash_characters_ibfk_2` FOREIGN KEY (`character_id`) REFERENCES `characters` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `smash_images`
--
ALTER TABLE `smash_images`
  ADD CONSTRAINT `smash_images_ibfk_1` FOREIGN KEY (`smash_id`) REFERENCES `smash` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `smash_videos`
--
ALTER TABLE `smash_videos`
  ADD CONSTRAINT `smash_videos_ibfk_1` FOREIGN KEY (`smash_id`) REFERENCES `smash` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
