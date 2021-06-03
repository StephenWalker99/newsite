-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: db769156931.hosting-data.io
-- Generation Time: Jun 03, 2021 at 08:15 AM
-- Server version: 5.5.60-0+deb7u1-log
-- PHP Version: 7.0.33-0+deb9u10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db769156931`
--

-- --------------------------------------------------------

--
-- Table structure for table `k9`
--

CREATE TABLE `k9` (
  `id` int(3) NOT NULL,
  `track_date` date NOT NULL,
  `order_no` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `service` varchar(12) COLLATE latin1_general_ci NOT NULL,
  `billing_name` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `zip` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `shipping_country` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `weight` int(10) NOT NULL,
  `tracking_no` varchar(11) COLLATE latin1_general_ci NOT NULL,
  `carton_quantity` int(10) NOT NULL,
  `pick_no` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `k9`
--

INSERT INTO `k9` (`id`, `track_date`, `order_no`, `service`, `billing_name`, `zip`, `shipping_country`, `weight`, `tracking_no`, `carton_quantity`, `pick_no`) VALUES
(126, '2019-08-30', 'SP0002740 ', 'DPD', 'Su-Bridge Pet Supplies', 'IP25 7AA ', '0', 0, '2117243886C', 5, 3),
(127, '2019-10-29', 'SP0002878', 'DPD', 'Speciality Stores GM', 'AL7 1RR', '', 0, '', 2, 2),
(128, '2019-10-29', 'SP0002879', 'DPD', 'Speciality Stores GM', 'AL7 1RR', '', 0, '0123546876', 4, 1),
(129, '2019-10-29', 'SP0002888', 'FEDEX', 'TREATS2SIT4', 'WF4 2AD', '0', 0, '12740893728', 1, 7),
(130, '2019-10-29', 'SP0002884', 'FEDEX', 'Amesbury Pets Ltd', 'SP4 7HD', '0', 0, '12740893731', 1, 7),
(131, '1899-11-30', 'SP0002737', 'timed pallet', 'Stoke Distribution Depot  ', 'ST4 8GR', '0', 23, '2324345678', 2, 8),
(132, '2020-01-29', 'SP0003063', 'FEDEX', 'TREATS2SIT4', 'WF4 2AD', '0', 0, '12740894208', 1, 5),
(133, '2021-04-06', 'SP0003051', 'FEDEX', 'The Dog Groomer - St. Ives', 'TR26 1HE', '0', 0, '12740984198', 1, 14),
(134, '2020-01-29', 'SP0003050', 'FEDEX', 'Especially Dogs', 'SP10 1HW', '0', 0, '12740894209', 1, 11),
(135, '2019-12-29', 'SP0002967', 'DPD EUR', 'Esse emme10 di innocenzi sara', 'ITALY', '0', 0, '2726802793', 1, 9),
(136, '2020-04-29', 'SP0003261A', 'RM24', 'Dog Director Limited', 'TW8 9QU', '0', 2288, '1804524456', 0, 2),
(137, '2019-10-28', 'SP0002880', 'DPD EUR', 'Happy Tails', 'SPAIN', '0', 0, '3907946877E', 1, 5),
(138, '2019-10-28', 'SP0002854', 'DPD EUR', 'The Greene Pet Company', 'PORTUGAL', '0', 0, '3905835850H', 1, 4),
(139, '2019-10-28', 'SP0002871', 'Carrier', 'The Petstop Tynemouth Ltd', 'NE1 6PT', '0', 0, '12740893719', 1, 9),
(140, '2019-08-28', 'SP0002726', 'DPD EUR', 'VegaVriend', 'NETHERLANDS', '0', 0, '2029348218', 1, 7),
(123, '2019-09-30', 'SP0002818', 'FEDEX', 'Dogsbody &amp; Friends of Silsden', 'BD20 0AQ', '0', 0, '12740893589', 1, 16),
(124, '2019-09-30', 'SP0002802', 'FEDEX', 'The Pet Shop - Llandudno', 'LL30 2TE', '0', 0, '12740893585', 1, 12),
(125, '2019-09-30', 'SP0002816', 'FEDEX', '001 NDS', 'RH10 9RX', '0', 0, '12740893586', 1, 2),
(121, '2019-09-30', 'SP0002823A', 'FEDEX', 'Woofers and Barkers Limited', 'NR25 6BH ', '0', 0, '12740893616', 1, 1),
(122, '2019-09-30', 'SP0002820', 'FEDEX', 'Speciality Stores GMDC2 Erith', 'AL7 1RR', '0', 0, '0', 0, 4),
(119, '2019-09-30', 'SP0002822', 'FEDEX', 'Janet Dunning', 'BD24 9LF', '0', 0, '12740893590', 1, 1),
(120, '2019-09-30', 'SP0002814', 'DPD EUR', 'i &amp; i pet supplies ', 'NETHERLANDS', '0', 0, '3232630305', 2, 5),
(141, '2019-08-28', 'SP0002678', 'DPD EUR', 'Chanelle Pet', 'IRELAND', '0', 0, '1720251027', 4, 9),
(117, '2019-09-30', 'SP0002807', 'FEDEX', 'Leominister Pet Centre', 'HR6 8LX', '0', 0, '12740893591', 1, 9),
(118, '2019-09-30', 'SP0002823', 'FEDEX', 'Woofers and Barkers Limited', 'NR25 6BH ', '0', 0, '12740893592', 1, 10),
(116, '2020-03-31', 'SP0003101', 'DPD  ', 'Burns Pet Nutrition ltd', 'SA31 1QY', '0', 0, '12740894671', 1, 15),
(115, '2020-03-31', 'SP0003188', 'DPD EUR', 'A&H Feines Futter OG', 'AUSTRIA', '0', 0, '15502888616', 1, 9),
(214, '1899-11-30', 'SP0002654', 'DPD EUR', 'Stephen Walker ', 'TS12 2YD', 'Spain', 0, '1917995999', 2, 4),
(114, '2019-07-31', 'SP0002680', 'Carrier Zone', 'ANA PESTONGY', 'Portugal', '0', 0, '1709555759', 1, 15),
(107, '2020-06-07', 'SP00023496', 'FEDEX', 'Happy Tails4', 'TS122YD', 'Brazil', 4, '1804524173', 4, 8),
(113, '2019-10-31', 'SP0002889', 'FEDEX', 'Pawsome of Topsham', 'EX3 0HF', '0', 0, '12740893756', 1, 8),
(104, '2020-06-08', 'SP00029123', 'DPD', 'Happy Tails', 'TS122YD', 'UK', 250, '1804524173', 4, 8),
(105, '2020-09-02', 'SP00029435', 'DPD', 'Happy Tails', 'TS122YD', 'Brazil', 500, '1804524173', 7, 7),
(142, '2019-08-28', 'SP0002713', 'DPD EUR', '4DogsandCats', '3580', '0', 20293209, '', 5, 13),
(143, '2019-08-28', 'SP0002738', 'FEDEX', 'Dofos Pet Store', 'EH68SD', '0', 0, '2147483647', 1, 6),
(144, '2020-06-02', 'SP0002739', 'DPD', 'Vital Pet Group Limited', 'EX20 2BB ', '0', 0, '18045244657', 3, 4),
(145, '2019-08-28', 'SP0002736', 'timed pallet', 'Northampton Distribution Depot ', ' NN4 9BF', '0', 0, '', 0, 5),
(146, '2020-01-28', 'SP0003060', 'collect bxs', 'Su-Bridge Pet Supplies', 'IP25 7AA ', '0', 0, 'COLLECT', 0, 4),
(147, '2020-01-28', 'SP0003056', 'DPD', 'Speciality Stores GMDC1 Welwyn', 'AL7 1RR', '0', 0, '3923056879', 3, 10),
(148, '2020-01-28', 'SP0003057', 'DPD', 'Speciality Stores GMDC2 Erith', 'AL7 1RR', '0', 0, '3923056248', 3, 8),
(149, '2020-02-28', 'SP0003141', 'Carrier', 'Ms Hong', 'S KOREA', '0', 0, '0', 1, 11),
(150, '2021-01-08', 'SP0003257', 'dpd eur', 'Luttenberger Hundebedarf KG', 'austria', 'Eng', 0, '3024392515', 1, 7),
(151, '2020-04-28', 'SP0003258', 'DPD', 'Pollys Pampered Pooches', 'KA151HF', '0', 0, '3024120660', 1, 15),
(152, '2020-04-28', 'SP0003264', 'PALLET COLLE', 'Su-Bridge Pet Supplies', '0', '0', 0, '1 pallet co', 0, 7),
(153, '2020-04-28', 'SP0003248', 'DPD', 'The Natural Pet Store', 'RG41 2PQ', '0', 0, '3024120151', 1, 9),
(154, '2020-04-28', 'SP0003249', 'DPD NI', 'Dog Days Online Ltd', 'BT42 2JE', '0', 0, '3024120392', 1, 15),
(155, '2020-04-28', 'SP0003261', 'DPD', 'Dog Director Limited', 'TW8 9QU', '0', 0, '3024121356', 1, 10),
(156, '2020-04-28', 'SP0003231', 'DPD', 'The Vegan Kind', 'G20 7LU ', '0', 0, '30243911845', 1, 9),
(157, '2020-04-28', 'SP0003262', 'DPD', 'Blangolden', 'NG31 8NU ', '0', 0, '30243906329', 1, 10),
(158, '2019-11-27', 'SP0002942', 'DPD EUR', 'OPEN Creative Kft', 'HUNGARY', '0', 0, '37544592811', 1, 15),
(159, '2019-11-27', 'SP0002933', 'DPD EUR', 'AB Lunis -Ecodog/Lunis', 'SWEDEN', '0', 0, '3754546418W', 2, 9),
(160, '2019-11-27', 'SP0002937', 'DPD EUR', 'Turhunden', 'DENMARK', '0', 0, '37545448365', 1, 8),
(161, '2019-11-27', 'SP0002940', 'Pallet colle', 'Su-Bridge Pet Supplies', 'IP25 7AA ', '0', 0, 'COLLECTED', 0, 6),
(162, '2019-08-27', 'SP0002733', 'DPD EUR', 'i &amp; i pet supplies ', 'NETHERLANDS', 'ww', 0, '1917995584', 3, 3),
(163, '2019-08-27', 'SP0002706', 'FEDEX HIGHLA', 'Decidedly Dogs', 'AB10 6BP', '0', 0, '10594665932', 1, 11),
(164, '2020-01-27', 'SP0003054A', 'RM24', 'Janet Dunning', 'BD24 9LF', '0', 993, '0', 0, 1),
(165, '2020-07-28', 'SP0003059', 'FEDEX', 'HINKS HAULAGE HH LOGISTICS LIMITED', 'B69 3EX', '0', 0, '12740894190', 1, 10),
(166, '2020-01-27', 'SP0003045', 'DPD EUR', 'Chanelle Pet', 'IRELAND', '0', 0, '3891835568', 4, 11),
(167, '2020-04-27', 'SP0003246', 'DPD', 'Vital Pet Group Limited', 'EX20 2BB ', '0', 0, '3015656600', 3, 2),
(168, '2020-04-27', 'SP0003255', 'DPD', 'Dogs Pantry', 'PL14 5EU', '0', 0, '12740894738', 1, 6),
(169, '2020-04-27', 'SP0003254', 'DPD EUR', 'Dogsrus aps', 'DENMARK', '0', 0, '3015660326', 2, 11),
(170, '2019-09-26', 'SP0002803', 'FEDEX', 'Su-Bridge Pet Supplies', 'IP25 7AA ', '0', 0, '10594666127', 2, 1),
(171, '2019-09-26', 'SP0002819', 'PALLET COLLE', 'Su-Bridge Pet Supplies', 'IP25 7AA ', '0', 0, '0', 0, 6),
(172, '2019-09-26', 'SP0002791', 'DPD EUR', 'I Giovani Animali Sas', 'ITALY', '0', 0, '31478416552', 1, 10),
(173, '2019-09-26', 'SP0002801', 'DPD EUR', 'love &amp; peas', 'GERMANY', '0', 0, '3147843736', 1, 2),
(174, '2019-09-26', 'SP0002808', 'FEDEX', 'Pawsome', 'EX3 0HF', '0', 0, '10594666116', 1, 15),
(175, '2019-09-26', 'SP0002811', 'FEDEX', 'The Pet Shop Postie', 'PA13 4NN', '0', 0, '10594666117', 1, 14),
(176, '2019-09-26', 'SP0002806', 'FEDEX', 'Pet Essentials', 'HP5 1EP', '0', 0, '10594666122', 1, 14),
(177, '2019-09-26', 'SP0002796', 'FEDEX', 'The Healthy pet Shop', 'TQ14 8EP', '0', 0, '10594666125', 1, 15),
(178, '2020-08-06', 'SP0002676', 'DPD EUR', 'ECO PETS AS', 'Norway ', '0', 0, 'Customer Co', 0, 14),
(179, '2020-03-26', 'SP0003194', 'DPD  ', 'Pudding & The PA', 'B80 7QZ', '0', 0, '12740894680', 1, 10),
(180, '2020-02-26', 'SP0003124B', 'DPD', 'Janet Dunning', 'BD24 9LF', '0', 0, '1840083052', 3, 0),
(181, '2019-12-26', 'SP0002999', 'DPD EUR', 'TAFFY LILLY d.o.o.', 'SLOVENIA', '0', 0, '2726432107W', 3, 11),
(182, '2019-11-25', 'Email 2', 'FEDEX', 'Daniel Echavez', 'PHILLIPINES', '0', 0, '0', 1, 3),
(183, '2019-11-25', 'Email', 'RM WW', 'Daniel Echavez', 'PHILLIPINES', '0', 890, 'UH104909823', 1, 3),
(184, '2019-09-25', 'SP0002794', 'FEDEX', 'Healthful Pets', 'CW9 7TN ', '0', 0, '10594666124', 1, 11),
(185, '2019-09-25', 'SP0002798', 'Carrier', 'Northampton Distribution Depot ', ' NN4 9BF', '0', 0, '0', 0, 6),
(186, '2019-09-25', 'SP0002792', 'FEDEX', 'BOW WOW London', 'WC2H 9LA', '0', 0, '10594666111', 1, 8),
(187, '2019-09-25', 'SP0002795', 'FEDEX', 'Mutleys Pet Supplies &amp; Gift', 'PE37 7LT', '0', 0, '10594666112', 1, 15),
(188, '2019-09-25', 'SP0002804', 'FEDEX', 'Scarsdale Veterinary Group', 'DE24 8HX', '0', 0, '10594666128', 1, 15),
(189, '2020-02-25', 'SP0003133', 'Carrier', 'Pudding & The PA', 'B80 7QZ', '0', 0, '12740894392', 1, 4),
(190, '2020-02-25', 'SP0003131', 'DPD EUR', 'UAB Yzipet', 'LITHUANIA', '0', 0, '44812279146', 1, 7),
(191, '2019-10-24', 'SP0002877', 'COLLECTION', 'Su-Bridge Pet Supplies', 'IP25 7AA ', '0', 0, 'COLLECTED', 0, 3),
(192, '2019-10-24', 'SP0002875', 'FEDEX', 'The Ledbury Pet Co', 'HR8 1BN ', '0', 0, '12740893711', 0, 5),
(193, '2019-10-24', 'SP0002869', 'FEDEX', 'Dog and Groom', 'SW17 7EB', '0', 0, '12740893709', 0, 15),
(194, '2019-10-24', 'SP0002860', 'DPD EUR', 'Ocean Office', 'IRELAND', '0', 0, '3907350404Z', 1, 11),
(195, '2020-01-24', 'SP0003052', 'DPD EUR', 'ETHICPATH', 'SLOVENIA', '0', 0, '3891965757H', 1, 15),
(196, '2020-01-24', 'SP0003058', 'DPD', '001 NDS', 'RH10 9RX', '0', 0, '3891467747E', 9, 8),
(197, '2020-01-24', 'SP0003054', 'FEDEX', 'Janet Dunning', 'BD24 9LF', '0', 0, '12740894184', 1, 11),
(198, '2020-02-24', 'SP0003115', 'DPD  ', 'Pedigree House', 'NG2 6NQ', '0', 0, '43939580968', 9, 8),
(199, '2020-02-24', 'SP0003121', 'dpd eur', 'Chanelle Pet', 'IRELAND', '0', 0, '43939598666', 3, 8),
(200, '2020-04-24', 'SP0003235', 'dpd eur', 'Flora i Fauna CB', 'SPAIN', '0', 0, '3015209671', 1, 5),
(201, '2020-04-24', 'SP0003240', 'dpd eur', 'Vegi-Tierfuttershop', 'SWITZERLAND', '0', 0, '3015201823', 2, 9),
(202, '2020-04-24', 'SP0003250', 'Carrier', 'Think Favours Ltd', 'HA3 9AJ', '0', 0, '3015211051', 4, 3),
(203, '2020-04-24', 'SP0003208', 'dpd eur', 'Prowince Lda', 'PORTUGAL', '0', 0, '3015199264', 3, 9),
(204, '2020-04-24', 'SP0003241', 'dpd eur', 'OPEN Creative Kft.', 'HUNGARY', '0', 0, '3015205686', 1, 8),
(205, '2020-04-24', 'SP0003146B', 'Carrier', 'PetsMagnet LTD', 'Northamptonshire', '0', 0, '3015204376', 3, 1),
(206, '2020-04-24', 'SP0003245A', 'Carrier', 'Su-Bridge Pet Supplies', 'IP25 7AA ', '0', 0, '3015209161', 4, 2),
(207, '2020-04-24', 'SP0003247', 'Carrier', '001HC Handcross', 'RH17 5JS', '0', 0, '3015203417', 9, 8),
(208, '2020-03-24', 'SP0003185', 'Carrier', 'Speciality Stores GMDC1 Welwyn', 'AL7 1RR', '0', 0, '2055977799', 2, 7),
(209, '2020-02-24', 'SP0003130', 'dpd eur', 'i and i pet supplies ', 'netherlands', '0', 0, '4481000775', 0, 5),
(210, '2019-10-23', 'SP0002848A', 'DPD NI', 'Glenkrag Ltd', 'N IRELAND', '0', 0, '0', 1, 1),
(211, '2019-10-23', 'SP0002872', 'Carrier', 'Dofos Pet Store', 'EH68SD', '0', 0, '12740893707', 1, 5),
(212, '2019-10-23', 'SP0002868', 'DPD HIGHLAND', 'Simply Pet Food', 'IV1 1SY ', '0', 0, '12740893708', 1, 12),
(213, '2020-01-09', '', '', '', '', '', 0, '', 0, 0),
(215, '2021-05-01', 'SP0017843', 'DPD EUR', 'Jackie Walker ', 'TS12 2YD', 'Spain', 0, '1917995888', 2, 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `k9`
--
ALTER TABLE `k9`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unique_order_no` (`order_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `k9`
--
ALTER TABLE `k9`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=216;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
