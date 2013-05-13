-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2013 at 09:54 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `uts_pi4`
--

-- --------------------------------------------------------

--
-- Table structure for table `laravel_migrations`
--

CREATE TABLE IF NOT EXISTS `laravel_migrations` (
  `bundle` varchar(50) NOT NULL,
  `name` varchar(200) NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`bundle`,`name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `laravel_migrations`
--

INSERT INTO `laravel_migrations` (`bundle`, `name`, `batch`) VALUES
('application', '2013_04_29_160133_create_mahasiswas', 1),
('application', '2013_04_29_160139_create_nilais', 1),
('application', '2013_04_30_184539_create_nilais', 2),
('application', '2013_04_30_185419_create_nilais', 3);

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswas`
--

CREATE TABLE IF NOT EXISTS `mahasiswas` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nim` text NOT NULL,
  `nama` text NOT NULL,
  `alamat` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=57 ;

--
-- Dumping data for table `mahasiswas`
--

INSERT INTO `mahasiswas` (`id`, `nim`, `nama`, `alamat`, `created_at`, `updated_at`) VALUES
(55, '4510210003', 'Irvan Abdurrahman', 'Jakarta', '2013-04-30 17:49:55', '2013-04-30 17:49:55'),
(56, '45102100182', 'Abdurrahman', 'Bandung', '2013-04-30 18:20:42', '2013-04-30 18:20:42');

-- --------------------------------------------------------

--
-- Table structure for table `nilais`
--

CREATE TABLE IF NOT EXISTS `nilais` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nim` text NOT NULL,
  `nama` text NOT NULL,
  `matakuliah` text NOT NULL,
  `tahun` varchar(20) NOT NULL,
  `semester` int(11) NOT NULL,
  `nilai` varchar(10) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `nilais`
--

INSERT INTO `nilais` (`id`, `nim`, `nama`, `matakuliah`, `tahun`, `semester`, `nilai`, `created_at`, `updated_at`) VALUES
(1, '4510210003', 'Irvan Abdurrahman', 'Pemrograman Internet 4', '2013', 6, 'A', '2013-04-30 18:57:55', '2013-04-30 18:57:55');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
