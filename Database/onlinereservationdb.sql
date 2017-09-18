--
-- Database: `onlinereservationdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `ID_Category` int(11) NOT NULL,
  `nameCategory` varchar(100) NOT NULL,
  `picCategory` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`ID_Category`, `nameCategory`, `picCategory`) VALUES
(1, 'italian', 'italy1.jpg'),
(2, 'Fast Food', 'fastfood2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `ID_City` int(11) NOT NULL,
  `nameCity` varchar(50) NOT NULL,
  `picCity` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`ID_City`, `nameCity`, `picCity`) VALUES
(1, 'Montreal', 'mont2.jpg'),
(2, 'Toronto', 'toron1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `ID_Member` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`ID_Member`, `username`, `password`, `email`) VALUES
(1, 'mary', 'mary', 'mary@gmail.com'),
(2, 'sara', 'sara', 'sara@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `ID_Reservation` int(11) NOT NULL,
  `reservationTime` datetime NOT NULL,
  `noOfGuest` int(11) NOT NULL,
  `refMember` int(11) NOT NULL,
  `refTable` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`ID_Reservation`, `reservationTime`, `noOfGuest`, `refMember`, `refTable`) VALUES
(1, '2017-03-31 19:00:00', 6, 1, 4),
(2, '2017-03-31 20:00:00', 2, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `restaurant`
--

CREATE TABLE `restaurant` (
  `ID_restaurant` int(11) NOT NULL,
  `nameRestaurant` varchar(100) NOT NULL,
  `street` varchar(50) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `referCity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `restaurant`
--

INSERT INTO `restaurant` (`ID_restaurant`, `nameRestaurant`, `street`, `phone`, `referCity`) VALUES
(1, '3Brassourse', '1300crescent', '514-887-7654', 1),
(2, 'maggie', 'vill-marie', '514-999-6565', 1);

-- --------------------------------------------------------

--
-- Table structure for table `restcategory`
--

CREATE TABLE `restcategory` (
  `ID_RestCategory` int(11) NOT NULL,
  `refRestaurant` int(11) NOT NULL,
  `RefCategory` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `restcategory`
--

INSERT INTO `restcategory` (`ID_RestCategory`, `refRestaurant`, `RefCategory`) VALUES
(1, 1, 1),
(2, 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `ID_Review` int(11) NOT NULL,
  `rate` tinyint(4) NOT NULL,
  `ref_member` int(11) NOT NULL,
  `ref_Restaurant` int(11) NOT NULL,
  `comment` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`ID_Review`, `rate`, `ref_member`, `ref_Restaurant`, `comment`) VALUES
(2, 4, 1, 1, NULL),
(3, 4, 2, 2, 'Best place');

-- --------------------------------------------------------

--
-- Table structure for table `tablesrestaurant`
--

CREATE TABLE `tablesrestaurant` (
  `ID_Table` int(11) NOT NULL,
  `nbOfPeople` int(11) NOT NULL,
  `refRestaurant` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tablesrestaurant`
--

INSERT INTO `tablesrestaurant` (`ID_Table`, `nbOfPeople`, `refRestaurant`) VALUES
(1, 5, 1),
(2, 2, 2),
(3, 2, 1),
(4, 6, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`ID_Category`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`ID_City`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`ID_Member`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`ID_Reservation`),
  ADD KEY `refTable` (`refTable`),
  ADD KEY `refMember` (`refMember`);

--
-- Indexes for table `restaurant`
--
ALTER TABLE `restaurant`
  ADD PRIMARY KEY (`ID_restaurant`),
  ADD KEY `foreign_restaurant_city` (`referCity`);

--
-- Indexes for table `restcategory`
--
ALTER TABLE `restcategory`
  ADD PRIMARY KEY (`ID_RestCategory`),
  ADD KEY `foreign_Restaurant_restCategory` (`refRestaurant`),
  ADD KEY `foreign_Category_restCategory` (`RefCategory`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`ID_Review`),
  ADD KEY `foreign_Branch_Review` (`ref_Restaurant`),
  ADD KEY `foreign_Member_Review` (`ref_member`);

--
-- Indexes for table `tablesrestaurant`
--
ALTER TABLE `tablesrestaurant`
  ADD PRIMARY KEY (`ID_Table`),
  ADD KEY `refRestaurant` (`refRestaurant`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `ID_Category` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `ID_City` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `ID_Member` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `ID_Reservation` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `restaurant`
--
ALTER TABLE `restaurant`
  MODIFY `ID_restaurant` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `restcategory`
--
ALTER TABLE `restcategory`
  MODIFY `ID_RestCategory` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `ID_Review` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tablesrestaurant`
--
ALTER TABLE `tablesrestaurant`
  MODIFY `ID_Table` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `reservation_ibfk_1` FOREIGN KEY (`refTable`) REFERENCES `tablesrestaurant` (`ID_Table`),
  ADD CONSTRAINT `reservation_ibfk_2` FOREIGN KEY (`refMember`) REFERENCES `member` (`ID_Member`);

--
-- Constraints for table `restaurant`
--
ALTER TABLE `restaurant`
  ADD CONSTRAINT `foreign_restaurant_city` FOREIGN KEY (`referCity`) REFERENCES `city` (`ID_City`);

--
-- Constraints for table `restcategory`
--
ALTER TABLE `restcategory`
  ADD CONSTRAINT `foreign_Category_restCategory` FOREIGN KEY (`RefCategory`) REFERENCES `category` (`ID_Category`),
  ADD CONSTRAINT `foreign_Restaurant_restCategory` FOREIGN KEY (`refRestaurant`) REFERENCES `restaurant` (`ID_restaurant`);

--
-- Constraints for table `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `foreign_review_restaurant` FOREIGN KEY (`ref_Restaurant`) REFERENCES `restaurant` (`ID_restaurant`);

--
-- Constraints for table `tablesrestaurant`
--
ALTER TABLE `tablesrestaurant`
  ADD CONSTRAINT `tablesrestaurant_ibfk_1` FOREIGN KEY (`refRestaurant`) REFERENCES `restaurant` (`ID_restaurant`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
