-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2017 at 08:45 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `carsfinaldb`
--

-- --------------------------------------------------------

--
-- Table structure for table `car`
--

CREATE TABLE `car` (
  `ID` int(11) NOT NULL,
  `Make` varchar(50) NOT NULL,
  `Model` varchar(50) NOT NULL,
  `Status` varchar(50) NOT NULL,
  `Registeratio-Year` int(11) NOT NULL,
  `BodyType` varchar(50) NOT NULL,
  `Engine` varchar(50) NOT NULL,
  `drivetrain` varchar(50) NOT NULL,
  `Transmission` varchar(50) NOT NULL,
  `FuelType` varchar(50) NOT NULL,
  `OldPrice` decimal(10,0) NOT NULL,
  `CurrentPrice` decimal(10,0) NOT NULL,
  `MileAge` int(11) NOT NULL,
  `Doors` int(11) NOT NULL,
  `Seats` int(11) NOT NULL,
  `ExteriorColor` varchar(15) NOT NULL,
  `InteriorColor` varchar(15) NOT NULL,
  `PicCar` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `car`
--

INSERT INTO `car` (`ID`, `Make`, `Model`, `Status`, `Registeratio-Year`, `BodyType`, `Engine`, `drivetrain`, `Transmission`, `FuelType`, `OldPrice`, `CurrentPrice`, `MileAge`, `Doors`, `Seats`, `ExteriorColor`, `InteriorColor`, `PicCar`) VALUES
(1, 'BMW', 'X3', 'New', 2017, 'SUV', '3.0L 260 hp', 'AWD', 'Automatic', 'Gasoline', '0', '55000', 10000, 5, 5, 'White', 'White', 'bmwx31.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `favorite`
--

CREATE TABLE `favorite` (
  `ID` int(11) NOT NULL,
  `referCar` int(11) NOT NULL,
  `referUser` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `favorite`
--

INSERT INTO `favorite` (`ID`, `referCar`, `referUser`) VALUES
(1, 1, 1),
(2, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID` int(11) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `email` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `username`, `password`, `email`) VALUES
(1, 'mary', 'mary', 'mary@mail.com'),
(2, 'bob', 'bob', 'bob@mail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `car`
--
ALTER TABLE `car`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `favorite`
--
ALTER TABLE `favorite`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `referCar` (`referCar`),
  ADD KEY `referUser` (`referUser`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `car`
--
ALTER TABLE `car`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `favorite`
--
ALTER TABLE `favorite`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `favorite`
--
ALTER TABLE `favorite`
  ADD CONSTRAINT `favorite_ibfk_1` FOREIGN KEY (`referCar`) REFERENCES `car` (`ID`),
  ADD CONSTRAINT `favorite_ibfk_2` FOREIGN KEY (`referUser`) REFERENCES `user` (`ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
