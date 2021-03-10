-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2020 at 02:06 PM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bbdms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin1`
--

CREATE TABLE `admin1` (
  `ausername` varchar(20) NOT NULL,
  `apassword` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin1`
--

INSERT INTO `admin1` (`ausername`, `apassword`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `donated`
--

CREATE TABLE `donated` (
  `FullName` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `MobileNumber` int(11) NOT NULL,
  `Age` int(11) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `BloodGroup` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donated`
--

INSERT INTO `donated` (`FullName`, `username`, `MobileNumber`, `Age`, `Gender`, `BloodGroup`) VALUES
('Gaurav Thakre', 'Gaurav Thakre', 2147483647, 25, 'Male', ''),
('Gaurav Thakre', 'Gaurav Thakre', 2147483647, 25, 'Male', 'AB-'),
('Pratik Mishra', 'Pratik Mishra', 2147483647, 23, 'Male', 'B+');

-- --------------------------------------------------------

--
-- Table structure for table `tblblooddonars`
--

CREATE TABLE `tblblooddonars` (
  `id` int(11) NOT NULL,
  `FullName` varchar(100) DEFAULT NULL,
  `MobileNumber` char(11) DEFAULT NULL,
  `EmailId` varchar(100) DEFAULT NULL,
  `Age` int(11) DEFAULT NULL,
  `Gender` varchar(10) NOT NULL,
  `BloodGroup` varchar(20) DEFAULT NULL,
  `ADD1` varchar(20) NOT NULL,
  `ADD2` varchar(20) NOT NULL,
  `ADD3` varchar(20) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password1` varchar(10) NOT NULL,
  `cpassword` varchar(10) NOT NULL,
  `PostingDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblblooddonars`
--

INSERT INTO `tblblooddonars` (`id`, `FullName`, `MobileNumber`, `EmailId`, `Age`, `Gender`, `BloodGroup`, `ADD1`, `ADD2`, `ADD3`, `username`, `password1`, `cpassword`, `PostingDate`) VALUES
(1, 'Siddhi Mejari', '8291829180', 'siddhi1227@gmail.com', 19, 'FEMALE', 'O+', 'Amber R Jolly ', 'om baba nagar', '4000001', 'siddhi27', 'Siddhi', 'Siddhi', '2020-12-04 17:10:56'),
(2, 'Ramesh Puri', '9887766554', 'ramesh22@gmail.com', 24, 'MALE', 'A-', ' 4, B, L K Arcade, M', 'Andheri(W)', '400006', 'ram234', 'RAmesh@11', 'RAmesh@11', '2020-12-04 17:14:55'),
(3, 'Swastik Kapoor', '9876543210', 'swastik23@gmail.com', 29, 'MALE', 'AB+', 'Akshya Nagar 1st Blo', 'Goregaon(E)', '400008', 'swasti29', 'Swasti@11', 'Swasti@11', '2020-12-04 17:18:43'),
(5, 'Gaurav Thakre', '8552412256', 'gaurav11@gmail.com', 25, 'Male', 'AB-', '301,Nishigandha', 'BEST Ngr,Goregaon(W)', '400012', 'gaurav14', 'g1234', 'g1234', '2020-12-04 20:16:46'),
(6, 'Sanika Mejari', '9822282423', '', 24, 'Female', 'AB-', '13,Sai Vihar', 'Kokan Nagar,Kandival', '400001', 'sanika21', 'Sanika12', 'Sanika12', '2020-12-05 05:02:51'),
(7, 'Pratik Mishra', '9988776655', 'pratik21@gmail.com', 23, 'Male', 'B+', '304,Lilly Bldg ,Gard', 'Chembur(W),Mumbai', '400008', 'pratik31', 'pratik', 'pratik', '2020-12-06 03:39:09');

-- --------------------------------------------------------

--
-- Table structure for table `tblbloodgroup`
--

CREATE TABLE `tblbloodgroup` (
  `id` int(11) NOT NULL,
  `BloodGroup` varchar(20) DEFAULT NULL,
  `Amount` int(11) DEFAULT NULL,
  `PostingDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblbloodgroup`
--

INSERT INTO `tblbloodgroup` (`id`, `BloodGroup`, `Amount`, `PostingDate`) VALUES
(1, 'A-', 200, '2020-02-01 04:33:50'),
(2, 'AB-', 300, '2020-02-10 20:34:00'),
(3, 'O-', 400, '2020-04-14 23:34:05'),
(7, 'A+', 200, '2020-12-04 23:04:17');

-- --------------------------------------------------------

--
-- Table structure for table `tblcontactusinfo`
--

CREATE TABLE `tblcontactusinfo` (
  `id` int(11) NOT NULL,
  `Address` tinytext DEFAULT NULL,
  `EmailId` varchar(255) DEFAULT NULL,
  `ContactNo` char(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcontactusinfo`
--

INSERT INTO `tblcontactusinfo` (`id`, `Address`, `EmailId`, `ContactNo`) VALUES
(1, ' Collector Colony, Chembur, Mumbai, Maharashtra, India																								', 'savealife@gmail.com', '8585233222');

-- --------------------------------------------------------

--
-- Table structure for table `tblcontactusquery`
--

CREATE TABLE `tblcontactusquery` (
  `id` int(11) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `EmailId` varchar(120) DEFAULT NULL,
  `ContactNumber` char(11) DEFAULT NULL,
  `Message` longtext DEFAULT NULL,
  `PostingDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcontactusquery`
--

INSERT INTO `tblcontactusquery` (`id`, `username`, `EmailId`, `ContactNumber`, `Message`, `PostingDate`) VALUES
(1, 'Anuj Kumar', 'webhostingamigo@gmail.com', '2147483647', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', '2017-06-18 10:03:07'),
(2, 'caasda', 'webhostingamigo@gmail.com', '42342342', 'drftghjk', '2017-06-30 21:17:09'),
(3, 'caasda', 'webhostingamigo@gmail.com', '42342342', 'drftghjk', '2017-06-30 21:21:30'),
(4, 'te', 'sdfsdf@gmail.com', '75787875545', 'sfsdf sdg hs h sh', '2017-07-01 07:19:36'),
(5, 'Siddhi Mejari', 'shankarmejari@gmail.com', '08291708290', 'furujrnfbfgewioqwoemtf', '2020-12-03 11:42:25');

-- --------------------------------------------------------

--
-- Table structure for table `tblfeedback`
--

CREATE TABLE `tblfeedback` (
  `username` varchar(20) NOT NULL,
  `response1` varchar(20) NOT NULL,
  `response2` varchar(20) NOT NULL,
  `response3` varchar(20) NOT NULL,
  `suggestion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblfeedback`
--

INSERT INTO `tblfeedback` (`username`, `response1`, `response2`, `response3`, `suggestion`) VALUES
('siddhi27', 'A lot', 'Easy', '', ''),
('ram234', 'A moderate amount', 'Very easy', '', ''),
('swasti29', 'A great deal', 'Difficult', '', ''),
('Gaurav Thakre', 'great', 'easy', 'nwell', 'Very good'),
('Gaurav Thakre', 'great', 'easy', 'nwell', 'Very good'),
('Gaurav Thakre', 'great', 'easy', 'nwell', 'Very good'),
('Gaurav Thakre', 'great', 'easy', 'nwell', 'Very good'),
('Gaurav Thakre', 'moderate', 'easy', 'nawell', 'Bad');

-- --------------------------------------------------------

--
-- Table structure for table `tblpages`
--

CREATE TABLE `tblpages` (
  `id` int(11) NOT NULL,
  `PageName` varchar(255) DEFAULT NULL,
  `type` varchar(255) NOT NULL DEFAULT '',
  `detail` longtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblpages`
--

INSERT INTO `tblpages` (`id`, `PageName`, `type`, `detail`) VALUES
(2, 'Why Become Donor', 'donor', '<span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat</span>'),
(3, 'About Us ', 'aboutus', '<span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat</span>');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblblooddonars`
--
ALTER TABLE `tblblooddonars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblbloodgroup`
--
ALTER TABLE `tblbloodgroup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblcontactusinfo`
--
ALTER TABLE `tblcontactusinfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblcontactusquery`
--
ALTER TABLE `tblcontactusquery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblpages`
--
ALTER TABLE `tblpages`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblblooddonars`
--
ALTER TABLE `tblblooddonars`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tblbloodgroup`
--
ALTER TABLE `tblbloodgroup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tblcontactusinfo`
--
ALTER TABLE `tblcontactusinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblcontactusquery`
--
ALTER TABLE `tblcontactusquery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tblpages`
--
ALTER TABLE `tblpages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
