-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 28, 2021 at 05:39 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `majorproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `name` varchar(50) NOT NULL,
  `email` varchar(20) NOT NULL,
  `pnumber` varchar(50) NOT NULL,
  `feedback` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`name`, `email`, `pnumber`, `feedback`) VALUES
('Devshri Modi', 'devshri.co0424@tpoly', '1234567890', 'Testing.'),
('Devshri Modi', 'devshri.co0424@tpoly', '1234567890', 'Testing.'),
('Devshri Modi', 'devshri.co0424@tpoly', '1234567890', 'Testing.');

-- --------------------------------------------------------

--
-- Table structure for table `seller_registration`
--

CREATE TABLE `seller_registration` (
  `aadhaar` varchar(200) NOT NULL,
  `name` text NOT NULL,
  `address` varchar(500) NOT NULL,
  `pnumber` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `website` varchar(50) NOT NULL,
  `insta` varchar(50) NOT NULL,
  `fb` varchar(50) NOT NULL,
  `logo` varchar(100) NOT NULL,
  `category` varchar(20) NOT NULL,
  `prdesc` varchar(500) NOT NULL,
  `proimg` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seller_registration`
--

INSERT INTO `seller_registration` (`aadhaar`, `name`, `address`, `pnumber`, `email`, `website`, `insta`, `fb`, `logo`, `category`, `prdesc`, `proimg`) VALUES
('NDk0cS85U2swUUlEUjN4U2IzbTdDdz09Ojo6XLcO8lkzPotuE5XErTGa', 'Gloss Accessories', 'UTg3T0NlbndIQVowckxNZGtNa2tWQT09OjoyNkM4rwQMb/itQwzpp8fC', '9764013265', 'glossaccessories@gmail.com', 'https://glossaccessories.store/', 'x.glossaccessories', '', '124596824_2714060458810516_7285226591839006909_n.jpg', 'accessories', '♡EXQUISITE | MINIMALIST | AESTHETIC ♡PINTEREST INSPIRED✨', '[\"2be20d726da1f89b748f0a2cdfebe2bb-300x300.jpg\",\"9e2d288776a36f87f17b323bc864d6d4-300x300.jpg\",\"IMG_20210219_171622_043-300x300.jpg\",\"IMG_20210528_225453-300x300.jpg\",\"IMG_20210528_225508-300x300.jpg\",\"IMG-20210527-WA0031-300x300.jpg\"]'),
('Q1Nzb3hBWjdoci8vMktXNU1EaytNdz09OjrHqZU10jKHPKgOI6che4qc', 'Inara Creations', 'NmhLNm85Q2F5Q2ZjbjRrb09GYkdjeUl5c3gwbVZFanRONjVMbGV1aWh0ND06Oq+QBr2zpQTivd4iXizd5vg=', '9892352257', 'inaraxcreations@gmail.com', 'https://inaracreations.myinstamojo.com/', 'inaracreations', '', '196351985_316869536691678_3796051236804653944_n.jpg', 'Arts & Decor', 'inara stickers & stationery', '[\"1622701545376WhatsApp-Image-2021-06-03-at-11.50.06-AM.jpeg\",\"1623583092481WhatsApp-Image-2021-06-13-at-4.47.35-PM.jpeg\",\"1623583645688WhatsApp-Image-2021-06-13-at-4.54.42-PM.jpeg\",\"1623661966611square-stickers.jpg\",\"1624083627015WhatsApp-Image-2021-06-19-at-11.50.04-AM.jpeg\",\"1622700895357185825115-328301245536537-8815066221230862049-n.jpg\"]'),
('QVZPQXlxdjRGMFR4S0dkZ0cwRG5iZz09Ojrb2azeXMgZPyEW5l3gbY4X', 'Thriftiness', 'cm9tRVBEc2FnS0hDZGxpUTh2R0k2R1h1U0QzV1l0WDNrSjF0djZPZnAzVGExaVZLTTRQdlcySjhaY3c5cHlKZ0RYOG1ZaUN4aDZtaDBQVEtOcmI3eXc9PTo6F+MsYcadn0kZ1r6Gr8t9hQ==', '9874120356', 'support@thriftiness.in', 'https://thriftiness.in/home/', 'thriftiness.in', '', '147435650_743335316296016_6632535425024100687_n.jpg', 'clothing', 'Thrifting is about more than just finding amazing deals on your favorite brands. It’s about shopping with intention, rejecting throwaway fashion culture, and standing for sustainability.', '[\"IMG_0384.jpg\",\"IMG_0469.jpg\",\"IMG_0479.jpg\",\"IMG_2451.jpg\",\"IMG_2474.jpg\",\"IMG_3030.jpg\"]'),
('TmlMNnJ2WkRFMTFQQ0NYanFqb0M0dz09OjoyfY2YK2nhg5Ou2vNShlU7', 'Dalis Jewels', 'WWlxTkQ0cFZsSzdoa0JQWUtiQ3VmdHNlakNkTFU1b0ZVa0laeU5tYVluNFFEMTdXRmVoMVg3UElLb1c5c0FvbnBoU01HdzRYZlIyVnpHSWdNd1UwdVVSeHI2RXBBRVdydmtHOFlMRE5RNUwwalZ6RUZtaktuQVF4cU4yRnRzOVQyNmJuMEVuakN5YmREQjBoYkhwRmNRPT06Omc2DmX1SioNo4zDae7a+w0=', '6362265559', 'dalisjewels22@gmail.com', 'https://dalisjewels.com/', 'dalis_jewels', '', '172994316_467792591089824_7323.png', 'jewelry', 'Dalis jewels defines that jewel does not only mean precious stone but something that is very beautiful.', '[\"Antique-gold-scrunchie-60-8-300x300.jpeg\",\"Beautiful-Mama-Necklace-280-5-300x300.jpeg\",\"Butterfly-Earring-300x300.jpeg\",\"Butterfly-Ring-300x300.jpeg\",\"Clear-Crystal-Lavender-Glass-Butterfly-set-999-2-300x300.jpeg\",\"Cupid-Angle-Necklace2-450-3-300x300.jpeg\",\"rosy-necklace-with-different-pendants-350-768x954.jpeg\"]'),
('VWQ5cUZFYUs1dXh6VVhBSHI0V09KUT09OjqKf8mEGMYX/BssEkKfNgj0', 'Earthy Sapo', 'SkpYUEE5RWI4S0FGWnFaMTFUTHpFeUo5bWxxcWp6d0s2bkw3b0NsaUs2dEtlajExWUJaK00yVEJ6c29nc2JaRnduMXVPam5XcUwrOW1SbjMrdG1rY1RSL0VyMUtNQi9KLzJrUmc3TUtXdTRNUGlKWUxoNm5VVGs2V0NDek4rMHJGUTJUWEtFcTZzRU5jaE1pcVNMV3JRPT06Og1SW7BgcDmlfCLFJj6DNSg=', '9989022173', 'customercare@earthysapo.com', 'https://earthysapo.com/', 'earthy_sapo', 'earthysapo.soaps', '67823168_1128628064014700_8838474926261272576_n.jpg', 'Bath & Beauty', 'Earthy Sapo is a personal & home care brand under which we offer natural, chemical free & preservative free products.', '[\"Dishwash-refill-scaled.jpg\",\"DSCF0756-1536x1024.jpg\",\"Neem-1365x2048.jpg\",\"Shikakai-scaled.jpg\"]'),
('WGNtTVR2QUgzYmFOK1puM2duWDIrdz09OjpW1qyxPor6rpZXbXSWvaMJ', 'Delicakes', 'ZFJFd3BSYU9jUzh4ZUxyK21KRmpTR05yQXFaY21XRDF6REFJZUZRK3hlRFR4aFE0MG5PcWVsTkp1aEg1a0pLVGFyalpsME8vamZRNGRqV0JaeThoQThUWW85dGIzcGpiYmt4QXVGRUdFalRCS0hMSGxQSW0xMGNzRnJVRzluRzhGRHBVRnlCSGt3S2I0ZENzZTZKYVBBPT06Ol5j42wwqNvMRjVDzDEEHMQ=', '9541256587', 'info@deliciaecakes.com', 'https://www.deliciaecakes.com/', 'delcakes.in', '', '68765264_2344804845556175_7029874415642869760_n.jpg', 'food', 'Best Pâtisserie Mumbai 2020. Best Pâtisserie for Delivery 2021.', '[\"63345345.PNG\",\"5194529452.PNG\",\"6525429452.PNG\",\"45195149254.PNG\",\"64575419542.PNG\"]'),
('TVdVVDlEZzJtSTg4NXdmOCtDMWw2Zz09OjqHxcQNNRYirJEv5CZ8RlS5', 'FoodPanda', 'emJraUdwdFBsZE5SbW5sKzg0ZVJYZz09OjrFZ8+mvNjdztJEc+wFE6Rw', '1234567890', 'foodpanda@gmail.com', 'https://www.foodpanda.pk/contents/contact.htm', 'foodpandaindia', '', 'logo.png', 'food', 'M2hoRTZ4NWQ5b3BjWjR4MlVWQlBtNlYvV09CcVlrSE9yM01oa3B1ZzB0aVFzbmdtWmg3V1J2Z2VNbkVSOVBPMDo6Mzh2ISNBjbskpMjW9aN29w==', '[\"images.jpg\",\"download (1).jpg\",\"download.jpg\",\"5e1839f4e3ee1.png\"]');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
