-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : dim. 13 août 2023 à 23:42
-- Version du serveur : 10.4.27-MariaDB
-- Version de PHP : 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `nic`
--

-- --------------------------------------------------------

--
-- Structure de la table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `Prenom` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT '',
  `personne_physique` tinyint(1) NOT NULL DEFAULT 0,
  `nom` varchar(150) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `adresse` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `tel` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `email` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `fax` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT '',
  `date_creation` timestamp NOT NULL DEFAULT current_timestamp(),
  `date_modif` timestamp NULL DEFAULT NULL,
  `etat` tinyint(1) NOT NULL DEFAULT 0,
  `id_fsi` int(8) NOT NULL DEFAULT 0,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `adresse2` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT '',
  `state_prov` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT '',
  `zip_code` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `city` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `country` char(2) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `authtype` enum('pw','ext') NOT NULL DEFAULT 'pw'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci ROW_FORMAT=DYNAMIC;

--
-- Déchargement des données de la table `contacts`
--

INSERT INTO `contacts` (`id`, `Prenom`, `personne_physique`, `nom`, `adresse`, `tel`, `email`, `fax`, `date_creation`, `date_modif`, `etat`, `id_fsi`, `password`, `adresse2`, `state_prov`, `zip_code`, `city`, `country`, `authtype`) VALUES
(1, '', 0, 'Universite Libre de Tunis', '09 Bis rue Med Salah Ben M\'Rad 1002 Tunis', '71 782 260', '', '71 890 391', '2014-01-31 09:01:09', '2012-02-09 22:03:34', 1, 8, '', '', '', '', '', '', 'pw'),
(2, '', 0, 'Universite Libre de Tunis', '09 Bis rue Med Salah Ben M\'Rad 1002 Tunis', '71 782 260', '', '71 890 391', '2014-01-31 09:01:09', '2012-02-09 22:03:34', 1, 8, '', '', '', '', '', '', 'pw'),
(3, '', 0, 'Universite Libre de Tunis', '09 Bis rue Med Salah Ben M\'Rad 1002 Tunis', '71 782 260', '', '71 890 391', '2014-01-31 09:01:09', '2012-02-09 22:03:34', 1, 8, '', '', '', '', '', '', 'pw'),
(4, '', 0, 'Centre Technique du Textile (CTTEX)', 'Avenue Des Industries Z.I Bir El Kassaa 2013', '71 381 133', 'slim.chaker@cettex.nat.tn', '71 382 558', '2014-01-31 08:52:30', '2010-07-17 22:00:00', 1, 1, '', '', '', '', '', '', 'pw'),
(5, '', 0, 'Centre Technique du Textile (CTTEX)', 'Avenue Des Industries Z.I Bir El Kassaa 2013', '71 381 133', 'slim.chaker@cettex.nat.tn', '71 382 558', '2014-01-31 08:52:30', '2010-07-17 22:00:00', 1, 1, '', '', '', '', '', '', 'pw'),
(6, '', 0, 'Centre Technique du Textile (CTTEX)', 'Avenue Des Industries Z.I Bir El Kassaa 2013', '71 381 133', 'slim.chaker@cettex.nat.tn', '71 382 558', '2014-01-31 08:52:30', '2010-07-17 22:00:00', 1, 1, '', '', '', '', '', '', 'pw'),
(7, '', 0, 'Institut Arabe des Chef d Entreprises', '77 Boulevard De l Union Du Maghreb Arabe 2036 La Soukra', '71 759 155', '', '71 759 247', '2014-01-31 09:01:09', '2010-07-17 22:00:00', 1, 8, '', '', '', '', '', '', 'pw'),
(8, '', 0, 'Institut Arabe des Chef d Entreprises', '77 Boulevard De l Union Du Maghreb Arabe 2036 La Soukra', '71 759 155', '', '71 759 247', '2014-01-31 09:01:09', '2010-07-17 22:00:00', 1, 8, '', '', '', '', '', '', 'pw'),
(9, '', 0, 'Institut Arabe des Chef d Entreprises', '77 Boulevard De l Union Du Maghreb Arabe 2036 La Soukra', '71 759 155', '', '71 759 247', '2014-01-31 09:01:09', '2010-07-17 22:00:00', 1, 8, '', '', '', '', '', '', 'pw'),
(10, '', 0, 'Generale d’Informatique et de Services', 'Rue 8611 Z.I La Charguia 1080 Tunis Cedex - BP 136', '70600099', 'Hafedh.Slimani@utic.com.tn', '71808900', '2013-11-07 10:45:43', '2020-04-05 10:36:22', 1, 8, '', '', '', '', '', '', 'pw'),
(11, '', 0, 'STE GLE INFORMATIQUEET SERVICES GISER', 'Rue 8611 Z.I La Charguia 1080 Tunis Cedex - BP 136', '70600099', 'hafedh.slimani@utic.com.tn', '71808900', '2013-11-07 10:46:43', '2020-04-05 10:36:23', 1, 8, '', '', '', '', '', '', 'pw'),
(12, '', 0, 'STE GLE INFORMATIQUEET SERVICES GISER', 'Rue 8611 Z.I La Charguia 1080 Tunis Cedex - BP 136', '70600099', 'hafedh.slimani@utic.com.tn', '71808900', '2013-11-07 10:46:43', '2020-04-05 10:36:24', 1, 8, '', '', '', '', '', '', 'pw'),
(13, '', 0, 'Ste ULYSOFT', '1 Rue Des Entrepreneurs BP 47 - 1080 Tunis', '71 709 355', 'ulysoft@ulysoft.com.tn', '71 708 273', '2013-11-07 10:46:43', '2010-07-17 22:00:00', 1, 8, '', '', '', '', '', '', 'pw'),
(14, '', 0, 'Ste ULYSOFT', '1 Rue Des Entrepreneurs BP 47 - 1080 Tunis', '71 709 355', 'ulysoft@ulysoft.com.tn', '71 708 273', '2013-11-07 10:46:43', '2010-07-17 22:00:00', 1, 8, '', '', '', '', '', '', 'pw'),
(15, '', 0, 'Ste ULYSOFT', '1 Rue Des Entrepreneurs BP 47 - 1080 Tunis', '71 709 355', 'ulysoft@ulysoft.com.tn', '71 708 273', '2013-11-07 10:46:43', '2010-07-17 22:00:00', 1, 8, '', '', '', '', '', '', 'pw'),
(16, '', 0, 'Bureau d&rsquo;Etudes Topographiques BEN LASSOUED', '6 Rue Des Cyclamens 1004 El Menzah V', '71 750 945', 'betbel@samapho.com.tn', '71 752 365', '2013-11-07 10:46:43', '2010-07-17 22:00:00', 1, 8, '', '', '', '', '', '', 'pw'),
(17, '', 0, 'Bureau d&rsquo;Etudes Topographiques BEN LASSOUED', '6 Rue Des Cyclamens 1004 El Menzah V', '71 750 945', 'betbel@samapho.com.tn', '71 752 365', '2013-11-07 10:46:43', '2010-07-17 22:00:00', 1, 8, '', '', '', '', '', '', 'pw'),
(18, '', 0, 'Bureau d&rsquo;Etudes Topographiques BEN LASSOUED', '6 Rue Des Cyclamens 1004 El Menzah V', '71 750 945', 'betbel@samapho.com.tn', '71 752 365', '2013-11-07 10:46:43', '2010-07-17 22:00:00', 1, 8, '', '', '', '', '', '', 'pw'),
(19, '', 0, 'Les Industries Alimentaires Randa', 'Z.I Bir Kassaa Ben Arous', '71 382 333', 'souhail.hachicha@randa.com.tn', '71 384 775', '2013-11-07 10:46:43', '2010-07-17 22:00:00', 1, 8, '', '', '', '', '', '', 'pw'),
(20, '', 0, 'Les Industries Alimentaires Randa', 'Z.I Bir Kassaa Ben Arous', '71 382 333', 'souhail.hachicha@randa.com.tn', '71 384 775', '2013-11-07 10:46:43', '2010-07-17 22:00:00', 1, 8, '', '', '', '', '', '', 'pw'),
(21, '', 0, 'Les Industries Alimentaires Randa', 'Z.I Bir Kassaa Ben Arous', '71 382 333', 'souhail.hachicha@randa.com.tn', '71 384 775', '2013-11-07 10:46:43', '2010-07-17 22:00:00', 1, 8, '', '', '', '', '', '', 'pw'),
(22, '', 0, 'Ste Meuniere Tunisienne', 'Z.I Bir Kassaa Ben Arous', '71 382 333', 'mehdi.khouaja@smt.com.tn', '71 384 775', '2013-11-07 10:46:43', '2010-07-17 22:00:00', 1, 8, '', '', '', '', '', '', 'pw'),
(23, '', 0, 'Ste Meuniere Tunisienne', 'Z.I Bir Kassaa Ben Arous', '71 382 333', 'mehdi.khouaja@smt.com.tn', '71 384 775', '2013-11-07 10:46:43', '2010-07-17 22:00:00', 1, 8, '', '', '', '', '', '', 'pw'),
(24, '', 0, 'Ste Meuniere Tunisienne', 'Z.I Bir Kassaa Ben Arous', '71 382 333', 'mehdi.khouaja@smt.com.tn', '71 384 775', '2013-11-07 10:46:43', '2010-07-17 22:00:00', 1, 8, '', '', '', '', '', '', 'pw'),
(25, '', 0, 'ELECTROSTAR', '2 Rue Du Nil 2023 Sidi Fathallah', '71 341 188', 'khalim-trigui@electrostar.com.tn', '71 352 461', '2013-11-07 10:46:43', '2010-07-17 22:00:00', 1, 8, '', '', '', '', '', '', 'pw'),
(26, '', 0, 'ELECTROSTAR', '2 Rue Du Nil 2023 Sidi Fathallah', '71 341 188', 'khalim-trigui@electrostar.com.tn', '71 352 461', '2013-11-07 10:46:43', '2010-07-17 22:00:00', 1, 8, '', '', '', '', '', '', 'pw'),
(27, '', 0, 'ELECTROSTAR', '2 Rue Du Nil 2023 Sidi Fathallah', '71 341 188', 'khalim-trigui@electrostar.com.tn', '71 352 461', '2013-11-07 10:46:43', '2010-07-17 22:00:00', 1, 8, '', '', '', '', '', '', 'pw'),
(34, '', 0, 'Afrimar Rades', '5 rue Ibn Rochd 1001 Tunis', '71 345 856', 'salah.taoufik@afrimar.com.tn', '71 342 913', '2013-11-07 10:46:43', '2010-07-17 22:00:00', 1, 9, '', '', '', '', '', '', 'pw'),
(35, '', 0, 'Afrimar Rades', '5 rue Ibn Rochd 1001 Tunis', '71 345 856', 'salah.taoufik@afrimar.com.tn', '71 342 913', '2013-11-07 10:46:43', '2010-07-17 22:00:00', 1, 9, '', '', '', '', '', '', 'pw'),
(36, '', 0, 'Afrimar Rades', '5 rue Ibn Rochd 1001 Tunis', '71 345 856', 'salah.taoufik@afrimar.com.tn', '71 342 913', '2013-11-07 10:46:43', '2010-07-17 22:00:00', 1, 9, '', '', '', '', '', '', 'pw'),
(52, '', 0, 'Ste Tunisienne d&rsquo;Exportation (STEX)', 'Avenue Des Martyrs Imm. Abdennadher 3003 Sfax', '74 299 404', 'mohamed.hammami@stex.com.tn', '74 297 048', '2014-01-31 07:59:59', '2010-07-17 22:00:00', 1, 9, '', '', '', '', '', '', 'pw'),
(53, '', 0, 'Ste Tunisienne d&rsquo;Exportation (STEX)', 'Avenue Des Martyrs Imm. Abdennadher 3003 Sfax', '74 299 404', 'mohamed.hammami@stex.com.tn', '74 297 048', '2014-01-31 07:59:59', '2010-07-17 22:00:00', 1, 9, '', '', '', '', '', '', 'pw'),
(54, '', 0, 'Ste Tunisienne d&rsquo;Exportation (STEX)', 'Avenue Des Martyrs Imm. Abdennadher 3003 Sfax', '74 299 404', 'mohamed.hammami@stex.com.tn', '74 297 048', '2014-01-31 07:59:59', '2010-07-17 22:00:00', 1, 9, '', '', '', '', '', '', 'pw'),
(64, '', 0, 'Sindbad Transworld Service', '5 rue Ibn Rouched 1001Tunis BP585', '71 349 366', '', '71 348 916', '2013-11-07 10:46:43', '2010-07-17 22:00:00', 1, 9, '', '', '', '', '', '', 'pw'),
(65, '', 0, 'Sindbad Transworld Service', '5 rue Ibn Rouched 1001Tunis BP585', '71 349 366', '', '71 348 916', '2013-11-07 10:46:43', '2010-07-17 22:00:00', 1, 9, '', '', '', '', '', '', 'pw'),
(66, '', 0, 'Sindbad Transworld Service', '5 rue Ibn Rouched 1001Tunis BP585', '71 349 366', '', '71 348 916', '2013-11-07 10:46:43', '2010-07-17 22:00:00', 1, 9, '', '', '', '', '', '', 'pw'),
(97, '', 0, 'J. Bouraoui & CO', '92 avenue Jugurtha 1002 Tunis', '71 798 100', 'j.bouraoui@a.andersen.com.tn', '71 787 820', '2013-11-07 10:46:43', '2010-07-17 22:00:00', 1, 9, '', '', '', '', '', '', 'pw'),
(98, '', 0, 'J. Bouraoui & CO', '92 avenue Jugurtha 1002 Tunis', '71 798 100', 'j.bouraoui@a.andersen.com.tn', '71 787 820', '2013-11-07 10:46:43', '2010-07-17 22:00:00', 1, 9, '', '', '', '', '', '', 'pw'),
(99, '', 0, 'J. Bouraoui & CO', '92 avenue Jugurtha 1002 Tunis', '71 798 100', 'j.bouraoui@a.andersen.com.tn', '71 787 820', '2013-11-07 10:46:43', '2010-07-17 22:00:00', 1, 9, '', '', '', '', '', '', 'pw'),
(109, '', 0, 'Ste d&rsquo;Exploitation d&rsquo;Eau Minerale', 'Route de Sousse km 6,5 Ben Arous', '71 297 888', 'fayçal.bourgou@seem.com.tn', '71 297 138', '2013-11-07 10:46:43', '2010-07-17 22:00:00', 1, 9, '', '', '', '', '', '', 'pw'),
(110, '', 0, 'Ste d&rsquo;Exploitation d&rsquo;Eau Minerale', 'Route de Sousse km 6,5 Ben Arous', '71 297 888', 'fayçal.bourgou@seem.com.tn', '71 297 138', '2013-11-07 10:46:43', '2010-07-17 22:00:00', 1, 9, '', '', '', '', '', '', 'pw'),
(111, '', 0, 'Ste d&rsquo;Exploitation d&rsquo;Eau Minerale', 'Route de Sousse km 6,5 Ben Arous', '71 297 888', 'fayçal.bourgou@seem.com.tn', '71 297 138', '2013-11-07 10:46:43', '2010-07-17 22:00:00', 1, 9, '', '', '', '', '', '', 'pw'),
(121, '', 0, 'POULINA', 'GP 1 km 12 Ezzahra 2034', '71 454 545', 'maher.kallel@poulina.com.tn', '71 452 534', '2013-11-07 10:46:43', '2010-07-17 22:00:00', 1, 9, '', '', '', '', '', '', 'pw'),
(122, '', 0, 'POULINA', 'GP 1 km 12 Ezzahra 2034', '71 454 545', 'maher.kallel@poulina.com.tn', '71 452 534', '2013-11-07 10:46:43', '2010-07-17 22:00:00', 1, 9, '', '', '', '', '', '', 'pw'),
(123, '', 0, 'POULINA', 'GP 1 km 12 Ezzahra 2034', '71 454 545', 'maher.kallel@poulina.com.tn', '71 452 534', '2013-11-07 10:46:43', '2010-07-17 22:00:00', 1, 9, '', '', '', '', '', '', 'pw'),
(133, '', 0, 'MediaCom', 'Avenue De L\'Olivier 4051 Khezama Est Sousse', '73 272 292', 'issam@mediacom.com.tn', '73 272 291', '2014-01-31 07:59:59', '2012-02-09 22:03:34', 1, 9, '', '', '', '', '', '', 'pw'),
(134, '', 0, 'MediaCom', 'Avenue De L\'Olivier 4051 Khezama Est Sousse', '73 272 292', 'issam@mediacom.com.tn', '73 272 291', '2014-01-31 07:59:59', '2012-02-09 22:05:45', 1, 9, '', '', '', '', '', '', 'pw'),
(135, '', 0, 'MediaCom', 'Avenue De L\'Olivier 4051 Khezama Est Sousse', '73 272 292', 'issam@mediacom.com.tn', '73 272 291', '2014-01-31 07:59:59', '2012-02-09 22:05:45', 1, 9, '', '', '', '', '', '', 'pw'),
(142, '', 0, 'Ste Generale d&rsquo;Expansion et de Realisations', '35 rue Du 1er Juin 1002 Tunis', '71 790 922', 'barouch.claude@soger.com.tn', '71 781 789', '2013-11-07 10:46:43', '2010-07-17 22:00:00', 1, 9, '', '', '', '', '', '', 'pw'),
(143, '', 0, 'Ste Generale d&rsquo;Expansion et de Realisations', '35 rue Du 1er Juin 1002 Tunis', '71 790 922', 'barouch.claude@soger.com.tn', '71 781 789', '2013-11-07 10:46:43', '2010-07-17 22:00:00', 1, 9, '', '', '', '', '', '', 'pw'),
(144, '', 0, 'Ste Generale d&rsquo;Expansion et de Realisations', '35 rue Du 1er Juin 1002 Tunis', '71 790 922', 'barouch.claude@soger.com.tn', '71 781 789', '2013-11-07 10:46:43', '2010-07-17 22:00:00', 1, 9, '', '', '', '', '', '', 'pw'),
(145, '', 0, 'Prochimat', '80 rue Louis Braille 1082 Tuins', '71 289 730', 'mohsen.barkati@prochimat.com.tn', '71 785 778', '2013-11-07 10:46:43', '2010-07-17 22:00:00', 1, 9, '', '', '', '', '', '', 'pw'),
(146, '', 0, 'Prochimat', '80 rue Louis Braille 1082 Tuins', '71 289 730', 'mohsen.barkati@prochimat.com.tn', '71 785 778', '2013-11-07 10:46:43', '2010-07-17 22:00:00', 1, 9, '', '', '', '', '', '', 'pw'),
(147, '', 0, 'Prochimat', '80 rue Louis Braille 1082 Tuins', '71 289 730', 'mohsen.barkati@prochimat.com.tn', '71 785 778', '2013-11-07 10:46:43', '2010-07-17 22:00:00', 1, 9, '', '', '', '', '', '', 'pw'),
(157, '', 0, 'Ste d&rsquo;Industrie Informatique et de Communica', '20 rue El Aacha 1082 cité Mahrajenne Tunis', '71 844 088', 's2iteam@s2i.com.tn', '71 787 710', '2013-11-07 10:46:43', '2010-07-17 22:00:00', 1, 9, '', '', '', '', '', '', 'pw'),
(158, '', 0, 'Ste d&rsquo;Industrie Informatique et de Communica', '20 rue El Aacha 1082 cité Mahrajenne Tunis', '71 844 088', 's2iteam@s2i.com.tn', '71 787 710', '2013-11-07 10:46:43', '2010-07-17 22:00:00', 1, 9, '', '', '', '', '', '', 'pw'),
(159, '', 0, 'Ste d&rsquo;Industrie Informatique et de Communica', '20 rue El Aacha 1082 cité Mahrajenne Tunis', '71 844 088', 's2iteam@s2i.com.tn', '71 787 710', '2013-11-07 10:46:43', '2010-07-17 22:00:00', 1, 9, '', '', '', '', '', '', 'pw'),
(160, '', 0, 'Les Grandes Carriéres du Nord', '128 avenue Jugurtha Mutuelleville 1002 Tunis', '71 783 692', 'lazhar sta@gcn.com.tn', '71 882 016', '2013-11-07 10:46:43', '2010-07-17 22:00:00', 1, 9, '', '', '', '', '', '', 'pw'),
(161, '', 0, 'Les Grandes Carriéres du Nord', '128 avenue Jugurtha Mutuelleville 1002 Tunis', '71 783 692', 'lazhar sta@gcn.com.tn', '71 882 016', '2013-11-07 10:46:43', '2010-07-17 22:00:00', 1, 9, '', '', '', '', '', '', 'pw'),
(162, '', 0, 'Les Grandes Carriéres du Nord', '128 avenue Jugurtha Mutuelleville 1002 Tunis', '71 783 692', 'lazhar sta@gcn.com.tn', '71 882 016', '2013-11-07 10:46:43', '2010-07-17 22:00:00', 1, 9, '', '', '', '', '', '', 'pw'),
(163, '', 0, 'M.K.S', '10 rue 7000 Montplaisir Tunis', '71 846 778', '', '71 861 023', '2013-11-07 10:46:43', '2010-07-17 22:00:00', 1, 9, '', '', '', '', '', '', 'pw'),
(164, '', 0, 'M.K.S', '10 rue 7000 Montplaisir Tunis', '71 846 778', '', '71 861 023', '2013-11-07 10:46:43', '2010-07-17 22:00:00', 1, 9, '', '', '', '', '', '', 'pw'),
(165, '', 0, 'M.K.S', '10 rue 7000 Montplaisir Tunis', '71 846 778', '', '71 861 023', '2013-11-07 10:46:43', '2010-07-17 22:00:00', 1, 9, '', '', '', '', '', '', 'pw'),
(190, '', 0, 'Ste Tunisienne d&rsquo;Ingenierie', '2 rue Des Métiers 2035 Z.I Ariana Aeroport', '71 702 511', 'byoussef@studi.com.tn', '71 704 512', '2013-11-07 10:46:43', '2010-07-17 22:00:00', 1, 9, '', '', '', '', '', '', 'pw'),
(191, '', 0, 'Ste Tunisienne d&rsquo;Ingenierie', '2 rue Des Métiers 2035 Z.I Ariana Aeroport', '71 702 511', 'byoussef@studi.com.tn', '71 704 512', '2013-11-07 10:46:43', '2010-07-17 22:00:00', 1, 9, '', '', '', '', '', '', 'pw'),
(192, '', 0, 'Ste Tunisienne d&rsquo;Ingenierie', '2 rue Des Métiers 2035 Z.I Ariana Aeroport', '71 702 511', 'byoussef@studi.com.tn', '71 704 512', '2013-11-07 10:46:43', '2010-07-17 22:00:00', 1, 9, '', '', '', '', '', '', 'pw'),
(421642, 'zaidi', 0, 'iheb', '', '52107756', 'A@gmail.com', '13', '2023-08-08 07:36:46', NULL, 0, 1, '', 'DFV', '', '', 'MED', 'TN', 'pw');

-- --------------------------------------------------------

--
-- Structure de la table `domains`
--

CREATE TABLE `domains` (
  `id` bigint(20) NOT NULL,
  `code` varchar(150) NOT NULL DEFAULT '',
  `domain` varchar(90) DEFAULT NULL,
  `domainidn` varchar(90) NOT NULL DEFAULT 'xn--',
  `ext` tinyint(4) DEFAULT NULL,
  `fsi` int(2) DEFAULT NULL,
  `organisme` varchar(255) DEFAULT NULL,
  `adresse` text DEFAULT NULL,
  `tel` varchar(20) DEFAULT NULL,
  `fax` varchar(20) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `contact` varchar(255) DEFAULT NULL,
  `activite` varchar(255) DEFAULT NULL,
  `rubrique` varchar(255) DEFAULT NULL,
  `date_recept` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `date_accept` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `date_activ` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `date_modif` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `date_annul` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `date_annul_due` timestamp NULL DEFAULT NULL,
  `etat` int(2) DEFAULT 0,
  `modif` tinyint(4) DEFAULT 0,
  `commentaire` text DEFAULT NULL,
  `ns_modif` tinyint(4) DEFAULT 0,
  `id_fsi_in` int(8) DEFAULT NULL,
  `domain_pw` varchar(255) NOT NULL DEFAULT '',
  `date_blocked` timestamp NULL DEFAULT NULL,
  `date_blocked_max` timestamp NULL DEFAULT NULL,
  `blocked_by` int(8) DEFAULT NULL,
  `date_unblocked` timestamp NULL DEFAULT NULL,
  `date_transfer_req` timestamp NULL DEFAULT NULL,
  `date_transfer_due` timestamp NULL DEFAULT NULL,
  `date_transfer_canceled` timestamp NULL DEFAULT NULL,
  `date_transfer_accepted` timestamp NULL DEFAULT NULL,
  `date_transfer_rejected` timestamp NULL DEFAULT NULL,
  `date_annul_req` timestamp NULL DEFAULT NULL,
  `last_status` int(2) DEFAULT NULL,
  `updated_by` int(8) DEFAULT NULL,
  `private` tinyint(1) NOT NULL DEFAULT 0,
  `mgmt` int(1) NOT NULL DEFAULT 0,
  `forward` int(1) NOT NULL DEFAULT 0,
  `dnssec` enum('unsigned','waiting','signed') NOT NULL DEFAULT 'unsigned',
  `stat` int(1) NOT NULL DEFAULT 0,
  `in` int(11) NOT NULL DEFAULT 0,
  `change_prop` tinyint(1) DEFAULT NULL,
  `reg_annul_reason` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `reg_comment` varchar(255) DEFAULT NULL,
  `reg_transfer_prohibited` enum('1') DEFAULT NULL,
  `reg_restore_prohibited` enum('1') DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Déchargement des données de la table `domains`
--

INSERT INTO `domains` (`id`, `code`, `domain`, `domainidn`, `ext`, `fsi`, `organisme`, `adresse`, `tel`, `fax`, `email`, `contact`, `activite`, `rubrique`, `date_recept`, `date_accept`, `date_activ`, `date_modif`, `date_annul`, `date_annul_due`, `etat`, `modif`, `commentaire`, `ns_modif`, `id_fsi_in`, `domain_pw`, `date_blocked`, `date_blocked_max`, `blocked_by`, `date_unblocked`, `date_transfer_req`, `date_transfer_due`, `date_transfer_canceled`, `date_transfer_accepted`, `date_transfer_rejected`, `date_annul_req`, `last_status`, `updated_by`, `private`, `mgmt`, `forward`, `dnssec`, `stat`, `in`, `change_prop`, `reg_annul_reason`, `reg_comment`, `reg_transfer_prohibited`, `reg_restore_prohibited`) VALUES
(1, '1', 'ult', 'ult', 5, 8, 'Universite Libre de Tunis', '09 Bis rue Med Salah Ben M&rsquo;Rad 1002 Tunis', '71 782 260', '71 890 391', '', 'Bouebdelli Mohamed', '', '', '2013-11-29 08:17:02', '1997-10-15 22:00:00', '1997-10-15 22:00:00', '2023-07-27 08:18:37', '2008-05-01 22:00:00', NULL, 4, 0, '', 0, NULL, 'ATIDomainPasswordHere111', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 'unsigned', 0, 0, NULL, NULL, NULL, NULL, NULL),
(2, '4', 'textiletunisia', 'textiletunisia', 2, 1, 'Centre Technique du Textile (CTTEX)', 'Avenue Des Industries Z.I Bir El Kassaa 2013', '71 381 133', '71 382 558', 'slim.chaker@cettex.nat.tn', 'Chaker Slim', '', '', '2013-11-29 08:17:02', '1997-11-05 23:00:00', '1997-11-05 23:00:00', '2023-07-27 08:21:17', '2008-01-14 23:00:00', NULL, 2, 0, '', 0, NULL, 'ATIDomainPasswordHere222', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 'unsigned', 0, 0, NULL, NULL, NULL, NULL, NULL),
(3, '6', 'iace', 'iace', 14, 8, 'Institut Arabe des Chef d Entreprises', '77 Boulevard De l Union Du Maghreb Arabe 2036 La Soukra', '71 759 155', '71 759 247', '', 'Abdelli Brahim', '', '', '2013-11-29 08:17:02', '1997-11-16 23:00:00', '1997-11-16 23:00:00', '2023-07-27 08:21:47', '2011-12-01 09:06:26', NULL, 4, 0, '', 0, NULL, 'ATIDomainPasswordHere333', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 'unsigned', 0, 0, NULL, NULL, NULL, NULL, NULL),
(4, '7', 'utic', 'utic', 2, 8, 'Generale d’Informatique et de Services', 'Rue 8611 Z.I La Charguia 1080 Tunis Cedex - BP 136', '71 799 400', '71 786 652', 'adel.malek@geiser.com.tn', 'Malek Adel', '', '', '2013-11-29 08:17:02', '1997-11-17 23:00:00', '1997-11-17 23:00:00', '2023-07-27 08:18:48', '0000-00-00 00:00:00', NULL, 2, 0, '', 0, 1, 'ATIDomainPasswordHere444', NULL, NULL, NULL, NULL, '2013-11-27 14:32:54', '2013-12-04 14:32:54', NULL, NULL, NULL, NULL, 2, 1, 0, 0, 0, 'unsigned', 0, 0, NULL, NULL, NULL, NULL, NULL),
(6, '9', 'ulysoft', 'ulysoft', 2, 8, 'Ste ULYSOFT', '1 Rue Des Entrepreneurs BP 47 - 1080 Tunis', '71 709 355', '71 708 273', 'ulysoft@ulysoft.com.tn', 'Hichem Ben Mosbah', '', '', '2013-11-29 08:17:02', '1997-11-19 23:00:00', '1997-11-19 23:00:00', '2023-07-27 08:18:51', '0000-00-00 00:00:00', NULL, 2, 0, '', 0, NULL, 'ATIDomainPasswordHere555', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 'unsigned', 0, 0, NULL, NULL, NULL, NULL, NULL),
(7, '10', 'somapho', 'somapho', 2, 8, 'Bureau d\'Etudes Topographiques BEN LASSOUED', '6 Rue Des Cyclamens 1004 El Menzah V', '71 750 945', '71 752 365', 'betbel@samapho.com.tn', 'Souissi Jamel Eddine', '', '', '2013-11-29 08:17:02', '1997-12-01 23:00:00', '1997-12-01 23:00:00', '2023-07-27 08:18:55', '0000-00-00 00:00:00', NULL, 2, 0, '', 0, NULL, 'ATIDomainPasswordHere36336', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 'unsigned', 0, 0, NULL, NULL, NULL, NULL, NULL),
(8, '11', 'randa', 'randa', 2, 8, 'Les Industries Alimentaires Randa', 'Z.I Bir Kassaa Ben Arous', '71 382 333', '71 384 775', 'souhail.hachicha@randa.com.tn', 'Hachicha Souhail', '', '', '2013-11-29 08:17:02', '1997-11-24 23:00:00', '1997-11-24 23:00:00', '2023-07-27 08:18:58', '2017-12-08 14:33:06', NULL, 4, 0, '', 0, 11, 'ATIDomainPasswordHere6663', NULL, NULL, NULL, NULL, '2017-11-27 15:11:43', NULL, NULL, '2017-12-08 14:33:06', NULL, NULL, 2, 11, 0, 0, 0, 'unsigned', 0, 0, NULL, NULL, NULL, NULL, NULL),
(9, '12', 'smt', 'smt', 2, 8, 'Ste Meuniere Tunisienne', 'Z.I Bir Kassaa Ben Arous', '71 382 333', '71 384 775', 'mehdi.khouaja@smt.com.tn', 'Khouaja Mehdi', '', '', '2013-11-29 08:17:02', '1997-11-24 23:00:00', '1997-11-24 23:00:00', '2023-07-27 08:19:00', '2017-12-08 14:36:56', NULL, 4, 0, '', 0, 11, 'ATIDomainPasswordHere56566', NULL, NULL, NULL, NULL, '2017-11-27 15:14:20', NULL, NULL, '2017-12-08 14:36:56', NULL, NULL, 2, 11, 0, 0, 0, 'unsigned', 0, 0, NULL, NULL, NULL, NULL, NULL),
(10, '13', 'electrostar', 'electrostar', 2, 8, 'ELECTROSTAR', '2 Rue Du Nil 2023 Sidi Fathallah', '71 341 188', '71 352 461', 'khalim-trigui@electrostar.com.tn', 'Trigui Khalil', '', '', '2013-11-29 08:17:02', '1997-11-24 23:00:00', '1997-11-24 23:00:00', '2023-07-27 08:19:03', '2017-12-04 14:21:12', NULL, 4, 0, '', 0, 11, 'ATIDomainPasswordHere65656', NULL, NULL, NULL, NULL, '2017-11-27 15:09:15', NULL, NULL, '2017-12-04 14:21:12', NULL, NULL, 2, 11, 0, 0, 0, 'unsigned', 0, 0, NULL, NULL, NULL, NULL, NULL),
(13, '17', 'afrimar', 'afrimar', 2, 9, 'Afrimar Rades', '5 rue Ibn Rochd 1001 Tunis', '71 345 856', '71 342 913', 'salah.taoufik@afrimar.com.tn', 'Jaballah Maher', '', '', '2013-11-29 08:17:02', '1997-12-02 23:00:00', '1997-12-02 23:00:00', '2023-07-27 08:19:07', '2017-12-27 13:22:02', NULL, 4, 0, '', 0, NULL, 'ATIDomainPasswordHere65656', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-12-27 13:21:27', 2, NULL, 0, 0, 0, 'unsigned', 0, 0, NULL, NULL, NULL, NULL, NULL),
(19, '24', 'sotex', 'sotex', 2, 9, 'Ste Tunisienne d\'Exportation (STEX)', 'Avenue Des Martyrs Imm. Abdennadher 3003 Sfax', '74 299 404', '74 297 048', 'mohamed.hammami@stex.com.tn', 'Hammami Mohamed', '', '', '2013-11-29 08:17:02', '1997-12-08 23:00:00', '1997-12-08 23:00:00', '2023-07-27 08:19:10', '2005-09-01 22:00:00', NULL, 4, 0, '', 0, NULL, 'ATIDomainPasswordHere8998', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 'unsigned', 0, 0, NULL, NULL, NULL, NULL, NULL),
(24, '29', 'sindbad', 'sindbad', 2, 9, 'Sindbad Transworld Service', '5 rue Ibn Rouched 1001Tunis BP585', '71 349 366', '71 348 916', '', 'Kchouk Maher', '', '', '2015-07-15 10:45:03', '1997-12-17 23:00:00', '1997-12-17 23:00:00', '2023-07-27 08:19:13', '2019-08-30 09:52:02', NULL, 4, 0, '', 0, NULL, 'ATIDomainPasswordHere556', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-08-30 09:50:36', 2, NULL, 0, 0, 0, 'unsigned', 0, 0, NULL, NULL, NULL, NULL, NULL),
(38, '43', 'jbcoonline', 'jbcoonline', 2, 9, 'J. Bouraoui & CO', '92 avenue Jugurtha 1002 Tunis', '71 798 100', '71 787 820', 'j.bouraoui@a.andersen.com.tn', 'Abdeljelil Bouraoui', '', '', '2013-11-29 08:17:02', '1998-01-06 23:00:00', '1998-01-06 23:00:00', '2023-07-27 08:19:17', '0000-00-00 00:00:00', NULL, 2, 0, '', 0, NULL, 'ATIDomainPasswordHere8989', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 'unsigned', 0, 0, NULL, NULL, NULL, NULL, NULL),
(42, '47', 'seem', 'seem', 2, 9, 'Ste d\'Exploitation d\'Eau Minerale', 'Route de Sousse km 6,5 Ben Arous', '71 297 888', '71 297 138', 'fayçal.bourgou@seem.com.tn', 'Bourgou Fayçal', '', '', '2013-11-29 08:17:02', '1998-01-08 23:00:00', '1998-01-08 23:00:00', '2023-07-27 08:19:21', '0000-00-00 00:00:00', NULL, 2, 0, '', 0, NULL, 'ATIDomainPasswordHere7787', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 'unsigned', 0, 0, NULL, NULL, NULL, NULL, NULL),
(47, '52', 'poulina', 'poulina', 2, 9, 'POULINA', 'GP 1 km 12 Ezzahra 2034', '71 454 545', '71 452 534', 'maher.kallel@poulina.com.tn', 'Kallel Maher', '', '', '2014-03-13 14:22:09', '1998-01-12 23:00:00', '1998-01-12 23:00:00', '2023-07-27 08:19:23', '0000-00-00 00:00:00', NULL, 2, 0, '', 0, NULL, 'ATIDomainPasswordHere3232', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 'unsigned', 0, 0, NULL, NULL, NULL, NULL, NULL),
(53, '58', 'mediacom', 'mediacom', 2, 9, 'MediaCom', 'Avenue De L\'Olivier 4051 Khezama Est Sousse', '73 272 292', '73 272 291', 'issam@mediacom.com.tn', 'Chaouch Issam', '', '', '2013-11-29 08:17:02', '1998-01-18 23:00:00', '1998-01-18 23:00:00', '2023-07-27 08:18:24', '2012-03-12 14:07:32', NULL, 4, 0, '', 0, NULL, 'ATIDomainPasswordHere', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 'unsigned', 0, 0, NULL, NULL, NULL, NULL, NULL),
(56, '61', 'soger', 'soger', 2, 9, 'Ste Generale d\'Expansion et de Realisations', '35 rue Du 1er Juin 1002 Tunis', '71 790 922', '71 781 789', 'barouch.claude@soger.com.tn', 'Barouch Aron Claude', '', '', '2013-11-29 08:17:02', '1998-01-25 23:00:00', '1998-01-25 23:00:00', '2023-07-27 08:19:29', '0000-00-00 00:00:00', NULL, 2, 0, '', 0, NULL, 'ATIDomainPasswordHere8989', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 'unsigned', 0, 0, NULL, NULL, NULL, NULL, NULL),
(57, '62', 'prochimat', 'prochimat', 2, 9, 'Prochimat', '80 rue Louis Braille 1082 Tuins', '71 289 730', '71 785 778', 'mohsen.barkati@prochimat.com.tn', 'Barkati Mohssen', '', '', '2013-11-29 08:17:02', '1998-01-25 23:00:00', '1998-01-25 23:00:00', '2023-07-27 08:19:33', '0000-00-00 00:00:00', NULL, 2, 0, '', 0, NULL, 'ATIDomainPasswordHere332320', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 'unsigned', 0, 0, NULL, NULL, NULL, NULL, NULL),
(62, '67', 's2i', 's2i', 2, 9, 'Ste d\'Industrie Informatique et de Communication (S2I)', '20 rue El Aacha 1082 cité Mahrajenne Tunis', '71 844 088', '71 787 710', 's2iteam@s2i.com.tn', 'Masmoudi Mohamed', '', '', '2013-11-29 08:17:02', '1998-02-03 23:00:00', '1998-02-03 23:00:00', '2023-07-27 08:19:36', '0000-00-00 00:00:00', NULL, 2, 0, '', 0, NULL, 'ATIDomainPasswordHere9889', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 'unsigned', 0, 0, NULL, NULL, NULL, NULL, NULL),
(63, '68', 'gcn', 'gcn', 2, 9, 'Les Grandes Carriéres du Nord', '128 avenue Jugurtha Mutuelleville 1002 Tunis', '71 783 692', '71 882 016', 'lazhar sta@gcn.com.tn', 'Sta Lazhar', '', '', '2013-11-29 08:17:02', '1998-02-03 23:00:00', '1998-02-03 23:00:00', '2023-07-27 08:19:39', '2013-11-26 12:15:02', NULL, 4, 0, '', 0, NULL, 'ATIDomainPasswordHere8989', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 'unsigned', 0, 0, NULL, NULL, NULL, NULL, NULL),
(65, '70', 'mks', 'mks', 2, 9, 'M.K.S', '10 rue 7000 Montplaisir Tunis', '71 846 778', '71 861 023', '', 'Ben Brahim Anis', '', '', '2013-11-29 08:17:02', '1998-02-04 23:00:00', '1998-02-04 23:00:00', '2023-07-27 08:19:42', '2019-01-04 15:22:02', NULL, 4, 0, '', 0, NULL, 'ATIDomainPasswordHereaaa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-01-04 15:21:25', 2, NULL, 0, 0, 0, 'unsigned', 0, 0, NULL, NULL, NULL, NULL, NULL),
(80, '85', 'studi', 'studi', 2, 9, 'Ste Tunisienne d\'Ingenierie', '2 rue Des Métiers 2035 Z.I Ariana Aeroport', '71 702 511', '71 704 512', 'byoussef@studi.com.tn', 'Belkhouja Marouene', '', '', '2014-07-04 07:00:04', '1998-03-02 23:00:00', '1998-03-02 23:00:00', '2023-07-27 08:19:45', '0000-00-00 00:00:00', NULL, 2, 0, '', 0, NULL, 'ATIDomainPasswordHerefdfd', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 'unsigned', 0, 0, NULL, NULL, NULL, NULL, NULL),
(1537805, '', 'test', 'xn--', 7, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 's', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2023-08-05 16:35:49', '0000-00-00 00:00:00', NULL, 0, 0, 'eee', 0, NULL, 'ee', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 'unsigned', 0, 0, NULL, NULL, NULL, NULL, NULL),
(1537804, '', 'sdf', 'xn--', 6, 8, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2023-08-05 10:55:36', '0000-00-00 00:00:00', NULL, 0, 0, '', 0, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 'unsigned', 0, 0, NULL, NULL, NULL, NULL, NULL),
(1537803, '', 'a', 'xn--', 1, 8, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2023-08-05 10:53:55', '0000-00-00 00:00:00', NULL, 0, 0, '', 0, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 'unsigned', 0, 0, NULL, NULL, NULL, NULL, NULL),
(1537801, '', 'hh', 'xn--', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2023-08-08 09:46:56', '0000-00-00 00:00:00', NULL, 0, 0, NULL, 0, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 'unsigned', 0, 0, NULL, NULL, NULL, NULL, NULL),
(1537802, '', 'hh', 'xn--', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2023-08-08 09:47:02', '0000-00-00 00:00:00', NULL, 0, 0, NULL, 0, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 'unsigned', 0, 0, NULL, NULL, NULL, NULL, NULL),
(1537806, '', 'test', 'xn--', 6, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 's', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2023-08-05 16:46:38', '0000-00-00 00:00:00', NULL, 0, 0, 'OJG', 0, NULL, 'JHF', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 12, 0, 0, 'unsigned', 0, 0, NULL, NULL, NULL, NULL, NULL),
(1537807, '', 'G', 'xn--', 28, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2Y', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2023-08-05 16:52:21', '0000-00-00 00:00:00', NULL, 0, 0, 'J', 0, NULL, 'JH', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 99, 0, 0, 'unsigned', 0, 0, NULL, NULL, NULL, NULL, NULL),
(1537809, '', '', 'xn--', NULL, 8, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2023-08-06 08:17:11', '0000-00-00 00:00:00', NULL, 0, 0, '', 0, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 'unsigned', 0, 0, NULL, NULL, NULL, NULL, NULL),
(1537810, '', 'ljoqscqe------------------', 'xn--', NULL, 8, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2023-08-06 08:17:29', '0000-00-00 00:00:00', NULL, 0, 0, '', 0, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 'unsigned', 0, 0, NULL, NULL, NULL, NULL, NULL),
(1537811, '', '---', 'xn--', NULL, 8, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2023-08-06 09:07:50', '0000-00-00 00:00:00', NULL, 0, 0, '', 0, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 'unsigned', 0, 0, NULL, NULL, NULL, NULL, NULL),
(1537812, '', '--aa', 'xn--', NULL, 8, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2023-08-06 09:08:18', '0000-00-00 00:00:00', NULL, 0, 0, '', 0, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 'unsigned', 0, 0, NULL, NULL, NULL, NULL, NULL),
(1537813, '', 'Ihebzaidi', 'xn--', 2, 8, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2023-08-06 11:09:10', '0000-00-00 00:00:00', NULL, 0, 0, '', 0, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 'unsigned', 0, 0, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `domain_contacts`
--

CREATE TABLE `domain_contacts` (
  `id_domain` int(11) NOT NULL DEFAULT 0,
  `id_contact` int(11) NOT NULL DEFAULT 0,
  `type_contact` enum('administrative','technical','owner') NOT NULL DEFAULT 'owner'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci ROW_FORMAT=FIXED;

--
-- Déchargement des données de la table `domain_contacts`
--

INSERT INTO `domain_contacts` (`id_domain`, `id_contact`, `type_contact`) VALUES
(1, 1, 'owner'),
(1, 2, 'administrative'),
(1, 3, 'technical'),
(2, 4, 'owner'),
(2, 5, 'administrative'),
(2, 6, 'technical'),
(3, 7, 'owner'),
(3, 8, 'administrative'),
(3, 9, 'technical'),
(4, 10, 'owner'),
(4, 11, 'administrative'),
(4, 12, 'technical'),
(6, 13, 'owner'),
(6, 14, 'administrative'),
(6, 15, 'technical'),
(7, 16, 'owner'),
(7, 17, 'administrative'),
(7, 18, 'technical'),
(8, 19, 'owner'),
(8, 20, 'administrative'),
(8, 21, 'technical'),
(9, 22, 'owner'),
(9, 23, 'administrative'),
(9, 24, 'technical'),
(10, 25, 'owner'),
(10, 26, 'administrative'),
(10, 27, 'technical'),
(13, 34, 'owner'),
(13, 35, 'administrative'),
(13, 36, 'technical'),
(19, 52, 'owner'),
(19, 53, 'administrative'),
(19, 54, 'technical'),
(24, 64, 'owner'),
(24, 65, 'administrative'),
(24, 66, 'technical'),
(38, 97, 'owner'),
(38, 98, 'administrative'),
(38, 99, 'technical'),
(42, 109, 'owner'),
(42, 110, 'administrative'),
(42, 111, 'technical'),
(47, 121, 'owner'),
(47, 122, 'administrative'),
(47, 123, 'technical'),
(53, 133, 'owner'),
(53, 134, 'administrative'),
(53, 135, 'technical'),
(56, 142, 'owner'),
(56, 143, 'administrative'),
(56, 144, 'technical'),
(57, 145, 'owner'),
(57, 146, 'administrative'),
(57, 147, 'technical'),
(62, 157, 'owner'),
(62, 158, 'administrative'),
(62, 159, 'technical'),
(63, 160, 'owner'),
(63, 161, 'administrative'),
(63, 162, 'technical'),
(65, 163, 'owner'),
(65, 164, 'administrative'),
(65, 165, 'technical'),
(80, 190, 'owner'),
(80, 191, 'administrative'),
(80, 192, 'technical'),
(1537799, 0, 'administrative'),
(1537799, 0, 'technical'),
(1537801, 0, ''),
(1537802, 0, ''),
(1537805, 421642, 'administrative'),
(1537806, 6, 'technical'),
(1537807, 421642, 'owner');

-- --------------------------------------------------------

--
-- Structure de la table `domain_status`
--

CREATE TABLE `domain_status` (
  `id_status` int(2) NOT NULL COMMENT 'ID de l''etat du domaine',
  `status` varchar(255) DEFAULT NULL COMMENT 'Etat en text'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci ROW_FORMAT=DYNAMIC;

--
-- Déchargement des données de la table `domain_status`
--

INSERT INTO `domain_status` (`id_status`, `status`) VALUES
(0, 'PENDING_TRANSFER'),
(1, 'CREATED'),
(2, 'ACTIVE'),
(3, 'PENDING_CANCEL'),
(4, 'CANCELED'),
(5, 'BLOCKED'),
(7, 'PENDING_UPDATE'),
(8, 'TRANSFER_PROHIBITED');

-- --------------------------------------------------------

--
-- Structure de la table `extensions`
--

CREATE TABLE `extensions` (
  `id` tinyint(4) NOT NULL,
  `nom` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `commentaires` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `nom_script` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT '',
  `upd` int(1) NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci ROW_FORMAT=DYNAMIC;

--
-- Déchargement des données de la table `extensions`
--

INSERT INTO `extensions` (`id`, `nom`, `commentaires`, `nom_script`, `upd`) VALUES
(1, '.tn', 'domaine réservé aux FSI', 'tn', 0),
(2, '.com.tn', 'Sous-domaine réservé aux entités à caractère commercial', 'com', 0),
(5, '.ens.tn', 'Sous-domaine réservé aux Institutions d\'enseignements primaire, secondaire et sépérieur du secteur privé', 'ens', 0),
(6, '.fin.tn', 'Sous-domaine réservé aux Institutions du secteur financier, bancaire et d\'assurance', 'fin', 0),
(7, '.gov.tn', 'Sous-domaine réservé aux structures gouvernementales, aux collectivités locales et aux missions diplomatiques et consulaires tunisiennes à l\'étranger', 'gov', 0),
(9, '.ind.tn', 'Sous-domaine réservé aux entreprises industrielles, aux chambres d\'industrie et de commerce', 'ind', 0),
(10, '.intl.tn', 'Sous-domaine réservé aux organisations internationales et aux missions diplomatiques et consultaires accréditées en Tunisie', 'intl', 0),
(11, '.nat.tn', 'Sous-domaine réservé aux entreprises et institutions publiques', 'nat', 0),
(12, '.net.tn', 'Sous-domaine réservé aux entreprises du secteur des technologies de la communication', 'net', 0),
(14, '.org.tn', 'Sous-domaine réservé aux organisations et aux associations non gouvernementales', 'org', 0),
(15, '.info.tn', 'Domaine réservé aux institutions informationnelles', 'info', 0),
(16, '.perso.tn', 'Sous-domaine réservé aux personnes physiques', 'perso', 0),
(17, '.tourism.tn', 'Sous-domaine réservé aux entreprises du secteur du tourisme', 'tourism', 0),
(22, '.mincom.tn', 'ministère de communication', 'mincom', 0),
(28, '.تونس', '.تونس', 'xn--pgbs0dh', 0);

-- --------------------------------------------------------

--
-- Structure de la table `fsi`
--

CREATE TABLE `fsi` (
  `id_fsi` int(2) NOT NULL,
  `nom` varchar(50) NOT NULL DEFAULT '',
  `adresse` text NOT NULL,
  `tel` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT '',
  `fax` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT '',
  `email` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT '',
  `prim_email` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT '',
  `sec_email` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT '',
  `allowed_IPs` varchar(255) CHARACTER SET latin1 COLLATE latin1_bin DEFAULT '',
  `url` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT '',
  `login` varchar(20) NOT NULL DEFAULT '',
  `password` varchar(20) NOT NULL DEFAULT '',
  `API_password` varchar(20) NOT NULL DEFAULT '',
  `password_reset_token` varchar(255) DEFAULT NULL,
  `password_reset_token_expire` timestamp NULL DEFAULT NULL,
  `secret_pass` varchar(30) NOT NULL DEFAULT '',
  `commentaires` text NOT NULL,
  `date_modif` date NOT NULL DEFAULT '0000-00-00',
  `nomnoc` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT '',
  `admin` tinyint(1) NOT NULL,
  `etat` tinyint(1) NOT NULL,
  `prefix` varchar(2) DEFAULT NULL,
  `langue` enum('en-US','fr-FR') NOT NULL DEFAULT 'en-US',
  `accountBalance` decimal(8,2) NOT NULL DEFAULT 0.00,
  `creditLimit` decimal(8,2) NOT NULL DEFAULT 0.00,
  `creditThreshold` decimal(8,2) NOT NULL DEFAULT 0.00,
  `thresholdType` enum('fixed','percent') NOT NULL DEFAULT 'fixed',
  `mgmt` int(1) NOT NULL DEFAULT 0,
  `reg_commentaire` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci ROW_FORMAT=DYNAMIC;

--
-- Déchargement des données de la table `fsi`
--

INSERT INTO `fsi` (`id_fsi`, `nom`, `adresse`, `tel`, `fax`, `email`, `prim_email`, `sec_email`, `allowed_IPs`, `url`, `login`, `password`, `API_password`, `password_reset_token`, `password_reset_token_expire`, `secret_pass`, `commentaires`, `date_modif`, `nomnoc`, `admin`, `etat`, `prefix`, `langue`, `accountBalance`, `creditLimit`, `creditThreshold`, `thresholdType`, `mgmt`, `reg_commentaire`) VALUES
(1, 'At-Tounessya Internet', '13, Rue Jughurta Mutelle-Ville 1002 Tunisie.', '+216 71846100', '+216 71846600', 'support@ati.tn', 'samir.moussa@ati.tn', 'tarek.ghodhbani@ati.tn', '1.2.3.4', 'https://www.ati.tn', 'FSI-ATI', '1111', '1111', NULL, NULL, '56565665AAA', '', '0000-00-00', 'ati', 0, 1, 'AT', 'en-US', '0.00', '0.00', '0.00', 'fixed', 1, NULL),
(8, 'ORANGE TUNISIE', 'Immeuble Orange, avenue du Cheikh Mohamed Fadhel Ben Achour, Centre Urbain Nord, 1003 - Tunis', '71106106', '71111333', 'aaa@orange.com, xxx@Orange.com, abc@orange.com, xyz@orange.com', 'fdfd@orange.com', 'dddgg@orange.com', '4.5.6.7', 'http://www.orange.tn', 'orange', '2222', '2222', NULL, NULL, '56565665BBB666', '', '0000-00-00', 'orange', 0, 1, 'OR', 'en-US', '0.00', '0.00', '0.00', 'fixed', 1, NULL),
(9, '3S GLOBALNET', 'Tunis', '71000222', '71999666', 'ddd@globalnet.tn, bbb@gnet.tn, ccc@globalnet.tn', 'nerre@gnet.tn', 'erere@globalnet.tn', '5.6.5.6', 'http://www.gnet.tn', 'gnet', '3333', '3333', NULL, NULL, '56565665GGG675', '', '0000-00-00', 'gnet', 0, 1, 'GL', 'en-US', '0.00', '0.00', '0.00', 'fixed', 1, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `fsi_extensions`
--

CREATE TABLE `fsi_extensions` (
  `id_fsi` int(8) NOT NULL DEFAULT 0,
  `ext` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci ROW_FORMAT=FIXED;

--
-- Déchargement des données de la table `fsi_extensions`
--

INSERT INTO `fsi_extensions` (`id_fsi`, `ext`) VALUES
(1, 1),
(1, 2),
(1, 5),
(1, 6),
(1, 7),
(1, 9),
(1, 10),
(1, 11),
(1, 12),
(1, 14),
(1, 15),
(1, 16),
(1, 17),
(1, 18),
(1, 19),
(1, 20),
(1, 21),
(1, 22),
(1, 23),
(1, 27),
(1, 28),
(8, 1),
(8, 2),
(8, 5),
(8, 6),
(8, 9),
(8, 10),
(8, 11),
(8, 12),
(8, 14),
(8, 15),
(8, 16),
(8, 17),
(8, 28),
(9, 1),
(9, 2),
(9, 5),
(9, 6),
(9, 9),
(9, 10),
(9, 11),
(9, 12),
(9, 14),
(9, 15),
(9, 16),
(9, 17),
(9, 28);

-- --------------------------------------------------------

--
-- Structure de la table `fsi_ns`
--

CREATE TABLE `fsi_ns` (
  `id_fsi` int(11) NOT NULL,
  `nameserver` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci ROW_FORMAT=FIXED;

--
-- Déchargement des données de la table `fsi_ns`
--

INSERT INTO `fsi_ns` (`id_fsi`, `nameserver`) VALUES
(1, 866),
(1, 865),
(9, 3),
(9, 4),
(9, 5),
(9, 6),
(8, 5124),
(8, 5388);

-- --------------------------------------------------------

--
-- Structure de la table `hosts`
--

CREATE TABLE `hosts` (
  `host_id` bigint(20) NOT NULL,
  `hostname` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `comments` varchar(255) DEFAULT NULL,
  `created` timestamp NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_bin ROW_FORMAT=DYNAMIC;

--
-- Déchargement des données de la table `hosts`
--

INSERT INTO `hosts` (`host_id`, `hostname`, `comments`, `created`) VALUES
(3, 'ns1.gnet.tn.', 'TN-193.95.59.21\n', '2018-04-02 09:11:26'),
(4, 'ns2.gnet.tn.', 'TN-193.95.59.22\n', '2018-04-02 09:19:20'),
(5, 'ns4.gnet.tn.', 'TN-193.95.57.21\n', '2018-04-02 09:27:14'),
(6, 'ns5.gnet.tn.', 'TN-193.95.57.22\n', '2018-04-02 09:28:56'),
(89, 'ns2.studi.com.tn.', 'TN-193.95.82.70\n', '2018-04-02 09:23:09'),
(90, 'ns1.studi.com.tn.', 'TN-193.95.82.69\n', '2021-11-21 02:15:17'),
(865, 'ns4.ati.tn.', 'TN-41.228.62.61\n', '2018-04-02 09:26:58'),
(866, 'ns6.ati.tn.', 'TN-41.228.63.61\n', '2018-04-02 09:29:39'),
(5124, 'ns2.orange.tn.', 'TN-193.95.93.243\n', '2018-04-02 09:21:50'),
(5388, 'ns1.orange.tn.', 'TN-193.95.93.77\n', '2018-04-02 09:14:01');

-- --------------------------------------------------------

--
-- Structure de la table `hosts_ip`
--

CREATE TABLE `hosts_ip` (
  `id` bigint(20) NOT NULL,
  `address` varchar(255) CHARACTER SET ascii COLLATE ascii_general_ci NOT NULL DEFAULT '0.0.0.0',
  `host_id` bigint(20) NOT NULL DEFAULT 0,
  `ip` enum('4','6') NOT NULL DEFAULT '4'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_bin ROW_FORMAT=DYNAMIC;

--
-- Déchargement des données de la table `hosts_ip`
--

INSERT INTO `hosts_ip` (`id`, `address`, `host_id`, `ip`) VALUES
(46, '193.95.57.22', 6, '4'),
(13, '193.95.82.70', 89, '4'),
(14, '193.95.82.69', 90, '4'),
(109, '193.95.93.243', 5124, '4'),
(49, '193.95.57.21', 5, '4'),
(70, '193.95.59.22', 4, '4'),
(98, '193.95.59.21', 3, '4'),
(105, '41.228.62.61', 865, '4'),
(106, '2c0f:fab0:ffff:4:41:228:62:61', 865, '6'),
(107, '41.228.63.61', 866, '4'),
(108, '2c0f:fab0:ffff:5:41:228:63:61', 866, '6'),
(115, '193.95.93.77', 5388, '4');

-- --------------------------------------------------------

--
-- Structure de la table `ip`
--

CREATE TABLE `ip` (
  `id_ip` int(11) NOT NULL,
  `id_domain` int(11) NOT NULL DEFAULT 0,
  `ip` varchar(25) NOT NULL DEFAULT '',
  `date_reception` date NOT NULL DEFAULT '0000-00-00',
  `date_modification` date NOT NULL DEFAULT '0000-00-00',
  `commentaire` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci ROW_FORMAT=DYNAMIC;

--
-- Déchargement des données de la table `ip`
--

INSERT INTO `ip` (`id_ip`, `id_domain`, `ip`, `date_reception`, `date_modification`, `commentaire`) VALUES
(17, 2, '193.95.68.2', '0000-00-00', '2003-09-26', ''),
(18, 1, '193.95.68.25', '0000-00-00', '2009-06-11', ''),
(1341, 3, '', '0000-00-00', '0000-00-00', 'vérifié le 19-05-2005'),
(1650, 4, '', '0000-00-00', '2005-10-03', ''),
(1874, 13, '', '0000-00-00', '0000-00-00', '');

-- --------------------------------------------------------

--
-- Structure de la table `late_domains`
--

CREATE TABLE `late_domains` (
  `id` bigint(20) NOT NULL,
  `code` varchar(150) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT '',
  `domain` varchar(80) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `ext` tinyint(4) DEFAULT NULL,
  `fsi` int(2) DEFAULT NULL,
  `organisme` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `adresse` text CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `tel` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `fax` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `email` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `contact` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `activite` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `rubrique` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `date_recept` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  `date_accept` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  `date_activ` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  `date_modif` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  `date_annul` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  `etat` int(2) DEFAULT 0,
  `modif` tinyint(4) DEFAULT 0,
  `commentaire` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `nameservers`
--

CREATE TABLE `nameservers` (
  `domain_id` bigint(20) NOT NULL DEFAULT 0,
  `ttl` varchar(14) NOT NULL DEFAULT '1D',
  `nameserver` bigint(20) NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_bin ROW_FORMAT=DYNAMIC;

--
-- Déchargement des données de la table `nameservers`
--

INSERT INTO `nameservers` (`domain_id`, `ttl`, `nameserver`) VALUES
(7, '1D', 5388),
(7, '1D', 5124),
(8, '1D', 5388),
(8, '1D', 5124),
(9, '1D', 5388),
(9, '1D', 5124),
(10, '1D', 5388),
(10, '1D', 5124),
(42, '1D', 6),
(47, '1D', 6),
(56, '1D', 6),
(57, '1D', 6),
(62, '1D', 6),
(80, '1D', 89),
(42, '1D', 3),
(42, '1D', 5),
(62, '1D', 5),
(62, '1D', 4),
(80, '1D', 90),
(47, '1D', 4),
(47, '1D', 3),
(57, '1D', 5),
(56, '1D', 5),
(56, '1D', 4),
(56, '1D', 3),
(57, '1D', 4),
(57, '1D', 3),
(38, '1D', 3),
(62, '1D', 3),
(42, '1D', 4),
(47, '1D', 5),
(38, '1D', 5),
(4, '1D', 5388),
(4, '1D', 5124),
(6, '1D', 5388),
(6, '1D', 5124),
(38, '1D', 4),
(38, '1D', 6),
(1, '1D', 866),
(1, '1D', 865),
(1537807, '1A', 89);

-- --------------------------------------------------------

--
-- Structure de la table `termes`
--

CREATE TABLE `termes` (
  `id` bigint(20) NOT NULL,
  `name` varchar(63) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `prohibited` tinyint(1) NOT NULL DEFAULT 0,
  `reason` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `date_added` timestamp NULL DEFAULT current_timestamp(),
  `type` enum('reserved','restricted') NOT NULL DEFAULT 'reserved'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `termes_deleted`
--

CREATE TABLE `termes_deleted` (
  `id` bigint(20) NOT NULL,
  `name` varchar(30) NOT NULL,
  `prohibited` tinyint(1) NOT NULL,
  `reason` text NOT NULL,
  `date_added` datetime NOT NULL,
  `date_deleted` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci ROW_FORMAT=DYNAMIC;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Index pour la table `domains`
--
ALTER TABLE `domains`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Index pour la table `domain_contacts`
--
ALTER TABLE `domain_contacts`
  ADD PRIMARY KEY (`id_domain`,`id_contact`,`type_contact`) USING BTREE,
  ADD UNIQUE KEY `id_domain` (`id_domain`,`id_contact`,`type_contact`) USING BTREE;

--
-- Index pour la table `domain_status`
--
ALTER TABLE `domain_status`
  ADD PRIMARY KEY (`id_status`) USING BTREE;

--
-- Index pour la table `extensions`
--
ALTER TABLE `extensions`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Index pour la table `fsi`
--
ALTER TABLE `fsi`
  ADD PRIMARY KEY (`id_fsi`) USING BTREE;

--
-- Index pour la table `fsi_extensions`
--
ALTER TABLE `fsi_extensions`
  ADD PRIMARY KEY (`id_fsi`,`ext`) USING BTREE;

--
-- Index pour la table `fsi_ns`
--
ALTER TABLE `fsi_ns`
  ADD KEY `id_fsi` (`id_fsi`) USING BTREE;

--
-- Index pour la table `hosts`
--
ALTER TABLE `hosts`
  ADD PRIMARY KEY (`host_id`) USING BTREE,
  ADD UNIQUE KEY `hosts_id_key` (`host_id`) USING BTREE,
  ADD UNIQUE KEY `hosts_name_key` (`hostname`) USING BTREE;

--
-- Index pour la table `hosts_ip`
--
ALTER TABLE `hosts_ip`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD UNIQUE KEY `ip_addresses_id_key` (`id`) USING BTREE,
  ADD UNIQUE KEY `only_one_addresshost` (`address`,`host_id`) USING BTREE;

--
-- Index pour la table `ip`
--
ALTER TABLE `ip`
  ADD PRIMARY KEY (`id_ip`) USING BTREE;

--
-- Index pour la table `late_domains`
--
ALTER TABLE `late_domains`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Index pour la table `nameservers`
--
ALTER TABLE `nameservers`
  ADD PRIMARY KEY (`domain_id`,`nameserver`) USING BTREE,
  ADD UNIQUE KEY `pk_dom_ns` (`domain_id`,`nameserver`) USING BTREE;

--
-- Index pour la table `termes`
--
ALTER TABLE `termes`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Index pour la table `termes_deleted`
--
ALTER TABLE `termes_deleted`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=421643;

--
-- AUTO_INCREMENT pour la table `domains`
--
ALTER TABLE `domains`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1537814;

--
-- AUTO_INCREMENT pour la table `extensions`
--
ALTER TABLE `extensions`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT pour la table `fsi`
--
ALTER TABLE `fsi`
  MODIFY `id_fsi` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT pour la table `hosts`
--
ALTER TABLE `hosts`
  MODIFY `host_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11706;

--
-- AUTO_INCREMENT pour la table `hosts_ip`
--
ALTER TABLE `hosts_ip`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=295;

--
-- AUTO_INCREMENT pour la table `ip`
--
ALTER TABLE `ip`
  MODIFY `id_ip` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30480;

--
-- AUTO_INCREMENT pour la table `late_domains`
--
ALTER TABLE `late_domains`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `termes`
--
ALTER TABLE `termes`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=390;

--
-- AUTO_INCREMENT pour la table `termes_deleted`
--
ALTER TABLE `termes_deleted`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
