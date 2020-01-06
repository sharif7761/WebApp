-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 26, 2019 at 10:02 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `farm`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `Fid` int(100) NOT NULL,
  `ip_add` varchar(100) NOT NULL,
  `qty` int(100) NOT NULL,
  `Cus_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `Cus_id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `password` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `address` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `pic` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`Cus_id`, `name`, `email`, `phone`, `password`, `address`, `type`, `pic`) VALUES
(1, 'saaa', 's@gmail.com', '01745', '77', 'Kuril', 'customer', 'cube.jpg'),
(2, 'asdas', 'manager@gmail.com', '2321', '11', 'as;dad', 'customer', 'user22.png'),
(4, 'sdsf', 'q@gmail.com', '01869302597', 'ss', 'Kuril', '', ''),
(5, 'A', 'if@gmail.com', '13221313', '0cc175b9c0f1b6a831c399e269772661', 'adsasd', 'customer', 'user22.png'),
(6, 'asd', 'i@gmail.com', '213123', 'c4ca4238a0b923820dcc509a6f75849b', 'adasd', 'customer', 'user22.png'),
(7, 'z', 'z@gmail.com', '123132', 'c81e728d9d4c2f636f067f89cc14862c', 'asd', '', ''),
(8, 'adsdasd', 'asx@gmail.com', '54654645 ', 'c4ca4238a0b923820dcc509a6f75849b', 'sadsadasd', 'customer', 'user22.png');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `Eid` int(10) NOT NULL,
  `FullName` varchar(20) NOT NULL,
  `Address` varchar(20) NOT NULL,
  `Phone` varchar(20) NOT NULL,
  `Position` varchar(20) NOT NULL,
  `Salary` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`Eid`, `FullName`, `Address`, `Phone`, `Position`, `Salary`) VALUES
(1, 'abid', 'kuril', '0186969696', 'Farmer', '10000'),
(2, 'Rahim Ahmed', 'Bashundhara', '01819271374', 'Farmer', '10000'),
(3, 'Md.Salah', 'Badda', '01716327634', 'Driver', '7000'),
(4, 'Messi Rahman', 'Kuril', '01619271374', 'Porter', '5000');

-- --------------------------------------------------------

--
-- Table structure for table `fertilizer`
--

CREATE TABLE `fertilizer` (
  `Frid` int(5) NOT NULL,
  `FrName` varchar(20) NOT NULL,
  `Rate` int(10) NOT NULL,
  `Quantity` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fertilizer`
--

INSERT INTO `fertilizer` (`Frid`, `FrName`, `Rate`, `Quantity`) VALUES
(1, 'Nitrogen', 100, 20),
(2, 'phosphorus', 120, 5),
(3, 'Potassium', 110, 4),
(4, 'Eurea', 130, 10);

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `Fid` int(5) NOT NULL,
  `Fname` varchar(20) NOT NULL,
  `Quantity` double NOT NULL,
  `Type` varchar(10) NOT NULL,
  `PRate` int(10) NOT NULL,
  `SRate` int(10) NOT NULL,
  `Fimage` varchar(100) NOT NULL,
  `Description` varchar(255) NOT NULL,
  `Fimage2` varchar(50) NOT NULL,
  `Fimage1` varchar(50) NOT NULL,
  `Fimage3` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`Fid`, `Fname`, `Quantity`, `Type`, `PRate`, `SRate`, `Fimage`, `Description`, `Fimage2`, `Fimage1`, `Fimage3`) VALUES
(6, 'Brinjal', 100, 'Vegetable', 30, 40, 'brinjal.jpg', 'Fresh brinjal.', 'brinjal2.jpg', 'brinjal1.jpg', ''),
(7, 'Potato', 100, 'Vegetable', 20, 30, 'potato1.jpg', 'Fresh potato', 'potato2.jpg', 'potato.jpg', ''),
(8, 'Chilli', 100, 'Vegetable', 50, 60, 'chilli.jpg', 'Fresh chilli', 'chilli2.jpg', 'chilli1.jpg', ''),
(9, 'Okra', 100, 'Vegetable', 60, 70, 'okra1.jpg', 'Fresh Okra', 'okra.jpg', 'okra2.jpg', ''),
(10, 'Cabbage', 100, 'Vegetable', 50, 60, 'cabbage1.jpg', 'Fresh cabbage', 'cabbage.jpg', 'cabbage2.jpg', ''),
(11, 'Cauliflower', 100, 'Vegetable', 60, 70, 'cauliflower2.jpg', 'Fresh cauliflower', 'cauliflower.jpg', 'cauliflower1.jpg', ''),
(12, 'Tomato', 100, 'Vegetable', 40, 50, 'tomato.png', 'Fresh tomato', 'tomato3.jpg', 'tomato2.jpg', ''),
(13, 'Peas', 100, 'Vegetable', 50, 60, 'peas1.jpg', 'Fresh beans', 'peas.jpg', 'peas2.jpg', ''),
(14, 'Beans', 100, 'Vegetable', 50, 60, 'beans.jpg', 'Fresh beans', 'beans1.jpg', 'beans2.jpg', ''),
(15, 'White radish', 100, 'Vegetable', 50, 70, 'white-radish.jpg', 'Fresh Red', 'white-radish2.jpg', 'white-radish1.jpg', ''),
(16, 'Bottle gourd', 100, 'Vegetable', 80, 90, 'bottle-gourd.jpg', 'Fresh Bottle gourd', 'bottle-gourd2.jpg', 'bottle-gourd1.jpg', ''),
(17, 'Snake gourd', 100, 'Vegetable', 100, 110, 'snake-gourd1.jpg', 'Fresh snake gourd', 'snake-gourd2.jpg', 'snake-gourd.jpg', ''),
(18, 'Apple', 1000, 'Fruit', 100, 120, 'apple.jpg', 'Good Apple', 'apple3.jpg', 'apple1.jpg', ''),
(19, 'Banana', 3000, 'Fruit', 100, 110, 'Banana.jpg', 'Fresh banana', 'Banana2.jpg', 'Banana1.jpg', ''),
(20, 'Cherry', 100, 'Fruit', 500, 600, 'Cherry.jpg', 'Fresh Cherry', 'Cherry2.jpg', 'Cherry1.jpg', ''),
(21, 'Grapes', 1000, 'Fruit', 200, 250, 'Grapes.jpg', 'Fresh Grapes', 'Grapes2.jpg', 'Grapes1.jpg', ''),
(22, 'Jackfruit', 100, 'Fruit', 60, 70, 'Jackfruit.jpg', 'Fresh jackfruit', 'Jackfruit2.jpg', 'Jackfruit1.jpg', ''),
(23, 'Lime', 2000, 'Fruit', 50, 70, 'Lime.jpg', 'Good Lime', 'Lime2.jpg', 'Lime1.jpg', ''),
(24, 'Mango', 1000, 'Fruit', 80, 90, 'mango.jpg', 'Good Mango', 'mango2.jpg', 'mango1.jpg', ''),
(25, 'Orange', 300, 'Fruit', 110, 120, 'orange1.jpg', 'Fresh Orange', 'orange3.jpg', 'orange2.jpg', ''),
(26, 'Papaya', 200, 'Fruit', 50, 90, 'papaya.jpg', 'Fresh papaya.', 'papaya2.jpg', 'papaya1.jpg', ''),
(27, 'Starfruit', 200, 'Fruit', 100, 120, 'Starfruit.jpg', 'Fresh Starfruit', 'Starfruit2.jpg', 'Starfruit1.jpg', ''),
(28, 'Strawberries', 100, 'Fruit', 100, 120, 'Strawberries.jpg', 'Fresh Strawberries', 'Strawberries2.jpg', 'Strawberries1.jpg', ''),
(29, 'Watermelon', 100, 'Fruit', 100, 120, 'Watermelon.jpg', 'Fresh Watermelon', 'Watermelon2.jpg', 'Watermelon1.jpg', ''),
(30, 'Aman Rice', 4000, 'Crops', 50, 60, 'aman1.jpg', 'Fresh Crops', 'aman3.jpg', 'aman2.jpg', ''),
(31, 'Aus Rice', 3000, 'Crops', 40, 50, 'aus1.jpg', 'Fresh Crops', 'aus3.jpg', 'aus2.jpg', ''),
(32, 'Barely', 200, 'Crops', 45, 50, 'barley1.jpg', 'Fresh Crops', 'barley3.jpg', 'barley2.jpg', ''),
(33, 'Boro Rice', 3000, 'Crops', 55, 65, 'boro.jpg', 'Fresh Crops', 'boro3.jpg', 'boro2.jpg', ''),
(34, 'Sugar Cane', 200, 'Crops', 30, 45, 'cane1.png', 'Fresh Crops', 'cane3.png', 'cane2.jpg', ''),
(35, 'Corn', 250, 'Crops', 65, 75, 'corn1.png', 'Fresh Crops', 'corn3.jpg', 'corn2.jfif', ''),
(36, 'Oat', 400, 'Crops', 65, 85, 'oat1.png', 'Fresh Crops', 'oat3.jpg', 'oat2.jpg', ''),
(37, 'Rye', 350, 'Crops', 60, 70, 'rye1.png', 'Fresh Crops', 'rye3.png', 'rye2.jpg', ''),
(38, 'Wheat', 100, 'Crops', 40, 60, 'Wheat1.png', 'Fresh Crops', 'wheat3.webp', 'wheat2.png', '');

-- --------------------------------------------------------

--
-- Table structure for table `foodtype`
--

CREATE TABLE `foodtype` (
  `FTid` int(5) NOT NULL,
  `FTname` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `foodtype`
--

INSERT INTO `foodtype` (`FTid`, `FTname`) VALUES
(1, 'Vegetable'),
(2, 'Crop'),
(3, 'Fruit');

-- --------------------------------------------------------

--
-- Table structure for table `offer`
--

CREATE TABLE `offer` (
  `Oid` int(10) NOT NULL,
  `foodname` varchar(30) NOT NULL,
  `quantity` int(10) NOT NULL,
  `aprice` int(20) NOT NULL,
  `oprice` int(20) NOT NULL,
  `percentage` int(10) NOT NULL,
  `Oimage` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `offer`
--

INSERT INTO `offer` (`Oid`, `foodname`, `quantity`, `aprice`, `oprice`, `percentage`, `Oimage`) VALUES
(1, 'Aman Rice', 10, 800, 720, 10, 'crp.png');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `Order_id` int(100) NOT NULL,
  `Cus_id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `Fid` int(100) NOT NULL,
  `Fname` varchar(100) NOT NULL,
  `Quantity` int(100) NOT NULL,
  `Total_price` int(100) NOT NULL,
  `Status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`Order_id`, `Cus_id`, `name`, `email`, `phone`, `address`, `Fid`, `Fname`, `Quantity`, `Total_price`, `Status`) VALUES
(1, 1, 'saaa', 's@gmail.com', '01745', 'badda', 3, 'Potato', 2, 245, 'Pending'),
(31, 1, 'saaa', 's@gmail.com', '01745', 'Mirpur', 3, 'Potato', 2, 132, 'Pending'),
(32, 1, 'saaa', 's@gmail.com', '01745', 'Kuril dhaka', 7, 'Gerlic', 1, 245, 'Pending'),
(33, 2, 'saaa', 'd@gmail.com', '01745', 'Kuril', 7, 'Gerlic', 1, 245, 'Pending'),
(40, 1, 'saaa', 's@gmail.com', '01745', 'Kuril', 3, 'Potato', 1, 66, 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `pesticide`
--

CREATE TABLE `pesticide` (
  `Pid` int(5) NOT NULL,
  `Pname` varchar(20) NOT NULL,
  `Ptype` varchar(10) NOT NULL,
  `Rate` int(50) NOT NULL,
  `Quantity` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pesticide`
--

INSERT INTO `pesticide` (`Pid`, `Pname`, `Ptype`, `Rate`, `Quantity`) VALUES
(1, 'Herbicide', 'Liquid', 50, 30);

-- --------------------------------------------------------

--
-- Table structure for table `presticidetype`
--

CREATE TABLE `presticidetype` (
  `PTid` int(5) NOT NULL,
  `PTname` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `presticidetype`
--

INSERT INTO `presticidetype` (`PTid`, `PTname`) VALUES
(1, 'Liquid'),
(2, 'Gas'),
(3, 'Solid');

-- --------------------------------------------------------

--
-- Table structure for table `seed`
--

CREATE TABLE `seed` (
  `Sid` int(5) NOT NULL,
  `Sname` varchar(20) NOT NULL,
  `Type` varchar(10) NOT NULL,
  `Rate` int(10) NOT NULL,
  `Quantity` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seed`
--

INSERT INTO `seed` (`Sid`, `Sname`, `Type`, `Rate`, `Quantity`) VALUES
(1, 'Rice', 'Crops', 300, 70),
(2, 'Potato', 'Vegetable', 100, 30),
(3, 'Mango', 'Fruit', 90, 40);

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `slider_id` int(10) NOT NULL,
  `slider_name` varchar(255) NOT NULL,
  `slider_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`slider_id`, `slider_name`, `slider_image`) VALUES
(1, 'slider_No_1', '2.jpg'),
(2, 'slider_No_2', '1.jpg'),
(3, 'slider_No_3', '2.jpg'),
(4, 'slider_No_4', '1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `TRid` int(5) NOT NULL,
  `TRname` varchar(20) NOT NULL,
  `TRType` varchar(20) NOT NULL,
  `Price` int(10) NOT NULL,
  `Description` varchar(100) NOT NULL,
  `Date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`TRid`, `TRname`, `TRType`, `Price`, `Description`, `Date`) VALUES
(1, 'salary', 'debit', 25000, 'Salary Expense', '0000-00-00'),
(2, 'Rice production', 'debit', 500, 'Production Expense', '2019-07-26'),
(3, 'Rice production', 'debit', 600, 'Production Expense', '2019-07-26'),
(4, 'Rice', 'credit', 600, 'Rice Sold', '2019-07-26'),
(5, 'Rice production', 'debit', 500, 'Production Expense', '2019-07-28'),
(6, 'Rice', 'credit', 600, 'Rice Sold', '2019-07-28'),
(7, 'sasada Production', 'debit', 2025, 'Production Expense', '2019-12-20'),
(8, 'dsadfs Production', 'debit', 2250, 'Production Expense', '2019-12-20'),
(9, 'sdfs Production', 'debit', 500, 'Production Expense', '2019-12-20'),
(10, 'asda Production', 'debit', 1700, 'Production Expense', '2019-12-20'),
(11, 'dfsfs Production', 'debit', 1700, 'Production Expense', '2019-12-20'),
(12, 'Brinjal Production', 'debit', 3000, 'Production Expense', '2019-12-26'),
(13, 'Potato Production', 'debit', 2000, 'Production Expense', '2019-12-26'),
(14, 'Chilli Production', 'debit', 5000, 'Production Expense', '2019-12-26'),
(15, 'Okra Production', 'debit', 6000, 'Production Expense', '2019-12-26'),
(16, 'Cabbage Production', 'debit', 5000, 'Production Expense', '2019-12-26'),
(17, 'Cauliflower Producti', 'debit', 6000, 'Production Expense', '2019-12-26'),
(18, 'Tomato Production', 'debit', 4000, 'Production Expense', '2019-12-26'),
(19, 'Peas Production', 'debit', 5000, 'Production Expense', '2019-12-26'),
(20, 'Beans Production', 'debit', 5000, 'Production Expense', '2019-12-26'),
(21, 'White radish Product', 'debit', 5000, 'Production Expense', '2019-12-26'),
(22, 'Bottle gourd Product', 'debit', 8000, 'Production Expense', '2019-12-26'),
(23, 'Snake gourd Producti', 'debit', 10000, 'Production Expense', '2019-12-26'),
(24, 'Apple Production', 'debit', 100000, 'Production Expense', '2019-12-26'),
(25, 'Banana Production', 'debit', 300000, 'Production Expense', '2019-12-26'),
(26, 'Cherry Production', 'debit', 50000, 'Production Expense', '2019-12-26'),
(27, 'Grapes Production', 'debit', 200000, 'Production Expense', '2019-12-26'),
(28, 'Jackfruit Production', 'debit', 6000, 'Production Expense', '2019-12-26'),
(29, 'Lime Production', 'debit', 100000, 'Production Expense', '2019-12-26'),
(30, 'Mango Production', 'debit', 80000, 'Production Expense', '2019-12-26'),
(31, 'Orange Production', 'debit', 33000, 'Production Expense', '2019-12-26'),
(32, 'Papaya Production', 'debit', 10000, 'Production Expense', '2019-12-26'),
(33, 'Starfruit Production', 'debit', 20000, 'Production Expense', '2019-12-26'),
(34, 'Strawberries Product', 'debit', 10000, 'Production Expense', '2019-12-26'),
(35, 'Watermelon Productio', 'debit', 10000, 'Production Expense', '2019-12-26'),
(36, 'Aman Rice Production', 'debit', 200000, 'Production Expense', '2019-12-26'),
(37, 'Aus Rice Production', 'debit', 120000, 'Production Expense', '2019-12-26'),
(38, 'Barely Production', 'debit', 9000, 'Production Expense', '2019-12-26'),
(39, 'Boro Rice Production', 'debit', 165000, 'Production Expense', '2019-12-26'),
(40, 'Sugar Cane Productio', 'debit', 6000, 'Production Expense', '2019-12-26'),
(41, 'Corn Production', 'debit', 16250, 'Production Expense', '2019-12-26'),
(42, 'Oat Production', 'debit', 26000, 'Production Expense', '2019-12-26'),
(43, 'Rye Production', 'debit', 21000, 'Production Expense', '2019-12-26'),
(44, 'Wheat Production', 'debit', 4000, 'Production Expense', '2019-12-26');

-- --------------------------------------------------------

--
-- Table structure for table `treatment`
--

CREATE TABLE `treatment` (
  `Tid` int(10) NOT NULL,
  `Tname` varchar(20) NOT NULL,
  `Symptom` varchar(50) NOT NULL,
  `Pname` varchar(10) NOT NULL,
  `Frname` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `treatment`
--

INSERT INTO `treatment` (`Tid`, `Tname`, `Symptom`, `Pname`, `Frname`) VALUES
(1, 'Blight', 'fungus infection', 'Fungicide', 'Urea'),
(2, 'Black Knot', 'dying leaves', 'Hydroxide', 'Urea'),
(3, 'Hernia', 'dots', 'Phenyl', 'Nitrogen');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Uid` int(10) NOT NULL,
  `Uname` varchar(30) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `Phone` varchar(20) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Address` varchar(20) NOT NULL,
  `Password` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `Position` varchar(20) NOT NULL,
  `pic` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Uid`, `Uname`, `Phone`, `Email`, `Address`, `Password`, `Position`, `pic`) VALUES
(1, 'sajid', '01869302597', 'gamersajid777@gmail.com', 'Kuril', 'c4ca4238a0b923820dcc509a6f75849b', 'Owner', '1.jpg'),
(2, 'm', '01845652165', 'manager@gmail.com', 'Bashundhara', 'm', 'Manager', 'user11.jpg'),
(3, 'saj', '12321', 'saj@gmail.com', 'asd', 'c81e728d9d', 'manager', '');

-- --------------------------------------------------------

--
-- Table structure for table `warehouse`
--

CREATE TABLE `warehouse` (
  `Wid` int(5) NOT NULL,
  `Wname` varchar(20) NOT NULL,
  `FoodName` varchar(20) NOT NULL,
  `Quantity` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `warehouse`
--

INSERT INTO `warehouse` (`Wid`, `Wname`, `FoodName`, `Quantity`) VALUES
(1, 'Wellmart', 'Mango', 1200),
(2, 'Foodcrate', 'Rice', 1000),
(3, 'Redix', 'Potato', 198),
(5, 'Redix', 'Brinjal', 100),
(6, 'Redix', 'Chilli', 100),
(7, 'Redix', 'Okra', 100),
(8, 'Redix', 'Cabbage', 100),
(9, 'Redix', 'Cauliflower', 100),
(10, 'Redix', 'Tomato', 100),
(11, 'Redix', 'Peas', 100),
(12, 'Redix', 'Beans', 100),
(13, 'Redix', 'White radish', 100),
(14, 'Redix', 'Bottle gourd', 100),
(15, 'Redix', 'Snake gourd', 100),
(16, 'Wellmart', 'Apple', 1000),
(17, 'Wellmart', 'Banana', 3000),
(18, 'Wellmart', 'Cherry', 100),
(19, 'Wellmart', 'Grapes', 1000),
(20, 'Wellmart', 'Jackfruit', 100),
(21, 'Wellmart', 'Lime', 2000),
(22, 'Wellmart', 'Starfruit', 200),
(23, 'Wellmart', 'Watermelon', 100),
(24, 'Wellmart', 'Orrange', 0),
(25, 'Wellmart', 'Papaya', 200),
(26, 'Wellmart', 'Strawberries', 100);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`Cus_id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`Eid`);

--
-- Indexes for table `fertilizer`
--
ALTER TABLE `fertilizer`
  ADD PRIMARY KEY (`Frid`);

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`Fid`);

--
-- Indexes for table `foodtype`
--
ALTER TABLE `foodtype`
  ADD PRIMARY KEY (`FTid`);

--
-- Indexes for table `offer`
--
ALTER TABLE `offer`
  ADD PRIMARY KEY (`Oid`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`Order_id`);

--
-- Indexes for table `pesticide`
--
ALTER TABLE `pesticide`
  ADD PRIMARY KEY (`Pid`);

--
-- Indexes for table `presticidetype`
--
ALTER TABLE `presticidetype`
  ADD PRIMARY KEY (`PTid`);

--
-- Indexes for table `seed`
--
ALTER TABLE `seed`
  ADD PRIMARY KEY (`Sid`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`slider_id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`TRid`);

--
-- Indexes for table `treatment`
--
ALTER TABLE `treatment`
  ADD PRIMARY KEY (`Tid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Uid`);

--
-- Indexes for table `warehouse`
--
ALTER TABLE `warehouse`
  ADD PRIMARY KEY (`Wid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `Cus_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `Eid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `fertilizer`
--
ALTER TABLE `fertilizer`
  MODIFY `Frid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `Fid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `foodtype`
--
ALTER TABLE `foodtype`
  MODIFY `FTid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `offer`
--
ALTER TABLE `offer`
  MODIFY `Oid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `Order_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `pesticide`
--
ALTER TABLE `pesticide`
  MODIFY `Pid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `presticidetype`
--
ALTER TABLE `presticidetype`
  MODIFY `PTid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `seed`
--
ALTER TABLE `seed`
  MODIFY `Sid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `slider_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `TRid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `treatment`
--
ALTER TABLE `treatment`
  MODIFY `Tid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `Uid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `warehouse`
--
ALTER TABLE `warehouse`
  MODIFY `Wid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
