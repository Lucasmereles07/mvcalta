-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2024 at 02:27 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `automotora`
--
CREATE DATABASE IF NOT EXISTS `automotora` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `automotora`;

-- --------------------------------------------------------

--
-- Table structure for table `lanzamientosmodelos`
--

CREATE TABLE `lanzamientosmodelos` (
  `ID` int(11) NOT NULL,
  `Marca` varchar(50) DEFAULT NULL,
  `Modelo` varchar(50) DEFAULT NULL,
  `Fecha_Compra` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lanzamientosmodelos`
--

$sql = "INSERT INTO personas 
(Nombre, 
Apellido, 
Correo, FechaNacimiento, Telefono, Genero, Pais) 
VALUES (:nombre, :apellido, :correo, :fecha, :tel, 
:gen, :pais)";

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lanzamientosmodelos`
--
ALTER TABLE `lanzamientosmodelos`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lanzamientosmodelos`
--
ALTER TABLE `lanzamientosmodelos`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
