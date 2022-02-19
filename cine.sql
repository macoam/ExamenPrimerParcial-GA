-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 18, 2022 at 01:54 PM
-- Server version: 5.6.38
-- PHP Version: 7.2.1

SET SQL_MODE
= "NO_AUTO_VALUE_ON_ZERO";
SET time_zone
= "+00:00";

--
-- Database: `cine`
--

-- --------------------------------------------------------

--
-- Table structure for table `funciones`
--

CREATE TABLE `funciones`
(
  `id` int
(11) NOT NULL,
  `pelicula` varchar
(255) NOT NULL,
  `fecha` varchar
(255) NOT NULL,
  `hora` varchar
(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `funciones`
--

INSERT INTO `funciones` (`
id`,
`pelicula
`, `fecha`, `hora`) VALUES
(1, 'Vacaciones de terror', '20/02/2022', '7:00 pm'),
(2, 'Chabelo y Pepito contra los monstruos', '21/02/2022', '8:00 pm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `funciones`
--
ALTER TABLE `funciones`
ADD PRIMARY KEY
(`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `funciones`
--
ALTER TABLE `funciones`
  MODIFY `id` int
(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
