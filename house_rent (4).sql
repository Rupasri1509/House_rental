-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 31, 2023 at 06:52 AM
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
-- Database: `house_rent`
--

-- --------------------------------------------------------

--
-- Table structure for table `house`
--

CREATE TABLE `house` (
  `name` varchar(30) NOT NULL,
  `location` varchar(30) NOT NULL,
  `sq_feet` double NOT NULL,
  `cost` double NOT NULL,
  `house_id` int(20) NOT NULL,
  `features` text NOT NULL,
  `description` text NOT NULL,
  `ratings` int(10) NOT NULL,
  `photo` text NOT NULL,
  `owner_id` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `house`
--

INSERT INTO `house` (`name`, `location`, `sq_feet`, `cost`, `house_id`, `features`, `description`, `ratings`, `photo`, `owner_id`) VALUES
('ragul_house', 'theni', 2100, 7500, 101, 'house comprises two separate bedrooms designed for sleeping and storage, a living room (hall) for relaxation and entertainment, and a kitchen for meal preparation. In addition to these core components, a 2BHK house often features one or more bathrooms, with some including an attached bathroom in the master bedroom. It may also have a compact dining area, essential storage spaces, and windows for natural light and ventilation.\r\n\r\nA balcony or terrace can provide outdoor space for various activities, and some houses may offer parking spaces, either in attached garages or open parking areas. Basic utilities, including electrical outlets, plumbing, and heating or cooling systems, are standard features', 'This housing configuration is a popular choice for small to medium-sized families, couples, or individuals looking for a comfortable and functional living space.\r\n\r\n', 4, 'house1.jpg', 'o1'),
('prasanth_house', 'salem', 3000, 10000, 102, 'A 3BHK (3 Bedrooms, Hall, and Kitchen) house is a spacious residential configuration suitable for medium to large-sized families. Key features include three separate bedrooms, one often serving as a master bedroom with an attached bathroom, along with a living room (hall) for relaxation and entertainment. The house includes a functional kitchen, multiple bathrooms, a dining area, ample storage space, and often balconies or terraces for outdoor access. Some 3BHK houses also offer additional rooms for study or work purposes. Natural light and ventilation are facilitated through numerous windows, and basic utilities are in place. These houses are well-suited for families seeking a comfortable and roomy living environment.', 'A 3BHK (3 Bedrooms, Hall, and Kitchen) house is a spacious and well-organized residential dwelling. It consists of three separate bedrooms, including a master bedroom with an attached bathroom, and additional rooms for guests or family members. The living room or hall serves as a comfortable gathering area, often with an adjoining dining space. The kitchen is equipped for meal preparation and storage. Multiple bathrooms enhance convenience, and windows provide ample natural light and ventilation. These houses often offer balconies or terraces for outdoor relaxation. With ample storage space, parking, and various utilities, 3BHK houses are ideally suited for medium to large families seeking a comfortable and functional living space.', 4, 'house2.jpg', 'o2'),
('ragul_house', 'junction', 2500, 8500, 103, 'house comprises two separate bedrooms designed for sleeping and storage, a living room (hall) for relaxation and entertainment, and a kitchen for meal preparation. In addition to these core components, a 2BHK house often features one or more bathrooms, with some including an attached bathroom in the master bedroom. It may also have a compact dining area, essential storage spaces, and windows for natural light and ventilation.\r\n\r\nA balcony or terrace can provide outdoor space for various activities, and some houses may offer parking spaces, either in attached garages or open parking areas. Basic utilities, including electrical outlets, plumbing, and heating or cooling systems, are standard features', 'This housing configuration is a popular choice for small to medium-sized families, couples, or individuals looking for a comfortable and functional living space.\r\n\r\n', 3, 'house3.jpg', 'o1'),
('sachin_house', 'fairlands', 3500, 10500, 104, 'A 3BHK (3 Bedrooms, Hall, and Kitchen) house is a spacious residential configuration suitable for medium to large-sized families. Key features include three separate bedrooms, one often serving as a master bedroom with an attached bathroom, along with a living room (hall) for relaxation and entertainment. The house includes a functional kitchen, multiple bathrooms, a dining area, ample storage space, and often balconies or terraces for outdoor access. Some 3BHK houses also offer additional rooms for study or work purposes. Natural light and ventilation are facilitated through numerous windows, and basic utilities are in place. These houses are well-suited for families seeking a comfortable and roomy living environment.A 3BHK (3 Bedrooms, Hall, and Kitchen) house is a spacious residential configuration suitable for medium to large-sized families. Key features include three separate bedrooms, one often serving as a master bedroom with an attached bathroom, along with a living room (hall) for relaxation and entertainment. The house includes a functional kitchen, multiple bathrooms, a dining area, ample storage space, and often balconies or terraces for outdoor access. Some 3BHK houses also offer additional rooms for study or work purposes. Natural light and ventilation are facilitated through numerous windows, and basic utilities are in place. These houses are well-suited for families seeking a comfortable and roomy living environment.', 'A 3BHK (3 Bedrooms, Hall, and Kitchen) house is a spacious residential configuration suitable for medium to large-sized families. Key features include three separate bedrooms, one often serving as a master bedroom with an attached bathroom, along with a living room (hall) for relaxation and entertainment. The house includes a functional kitchen, multiple bathrooms, a dining area, ample storage space, and often balconies or terraces for outdoor access. Some 3BHK houses also offer additional rooms for study or work purposes. Natural light and ventilation are facilitated through numerous windows, and basic utilities are in place. These houses are well-suited for families seeking a comfortable and roomy living environment.', 4, 'house4.jpg', 'o3'),
('naresh_house', 'thiruvagoundanur', 1000, 5000, 105, 'A 1BHK (1 Bedroom, Hall, and Kitchen) house is a compact residential unit designed for individuals, couples, or small families. It features a single bedroom for sleeping and storage, a living room (hall) for relaxation and socializing, and a functional kitchen for meal preparation. Most 1BHK houses include a common bathroom, and in some cases, an attached bathroom to the bedroom. A dining area may be integrated into the living room or kitchen. Adequate storage space, good ventilation, and essential utilities are provided. While the features may vary, these houses are tailored to offer practical and comfortable living in a compact space, suitable for small households.', 'A 1BHK (1 Bedroom, Hall, and Kitchen) house is a small and efficient residential unit designed to cater to the needs of individuals, couples, or small families. It typically includes a single bedroom, which serves as a private space for sleeping and storing personal belongings. The living room, often referred to as the \"hall,\" functions as a central gathering area for relaxation, entertainment, and socializing. ', 3, 'house5.jpg', 'o4'),
('pranav_house', 'jawahar mill', 1500, 6000, 106, 'house comprises two separate bedrooms designed for sleeping and storage, a living room (hall) for relaxation and entertainment, and a kitchen for meal preparation. In addition to these core components, a 2BHK house often features one or more bathrooms, with some including an attached bathroom in the master bedroom. It may also have a compact dining area, essential storage spaces, and windows for natural light and ventilation.\r\n\r\nA balcony or terrace can provide outdoor space for various activities, and some houses may offer parking spaces, either in attached garages or open parking areas. Basic utilities, including electrical outlets, plumbing, and heating or cooling systems, are standard features', 'This housing configuration is a popular choice for small to medium-sized families, couples, or individuals looking for a comfortable and functional living space.\r\n\r\n', 4, 'house6.jpg', 'o5'),
('ravi_house', '3roads', 2500, 6000, 107, 'A 3BHK (3 Bedrooms, Hall, and Kitchen) house is a spacious residential configuration suitable for medium to large-sized families. Key features include three separate bedrooms, one often serving as a master bedroom with an attached bathroom, along with a living room (hall) for relaxation and entertainment. The house includes a functional kitchen, multiple bathrooms, a dining area, ample storage space, and often balconies or terraces for outdoor access. Some 3BHK houses also offer additional rooms for study or work purposes. Natural light and ventilation are facilitated through numerous windows, and basic utilities are in place. These houses are well-suited for families seeking a comfortable and roomy living environment.', 'A 3BHK (3 Bedrooms, Hall, and Kitchen) house is a spacious and well-organized residential dwelling. It consists of three separate bedrooms, including a master bedroom with an attached bathroom, and additional rooms for guests or family members. The living room or hall serves as a comfortable gathering area, often with an adjoining dining space. The kitchen is equipped for meal preparation and storage. Multiple bathrooms enhance convenience, and windows provide ample natural light and ventilation. These houses often offer balconies or terraces for outdoor relaxation. With ample storage space, parking, and various utilities, 3BHK houses are ideally suited for medium to large families seeking a comfortable and functional living space.', 4, 'house7.jpg', 'o6'),
('pranav_house', '5 roads,salem', 2000, 6500, 108, 'A 1BHK (1 Bedroom, Hall, and Kitchen) house is a small and efficient residential unit designed to cater to the needs of individuals, couples, or small families. It typically includes a single bedroom, which serves as a private space for sleeping and storing personal belongings. The living room, often referred to as the \"hall,\" functions as a central gathering area for relaxation, entertainment, and socializing. The kitchen, though compact, is equipped for basic meal preparation and storage with cabinets, countertops, and appliances. Most 1BHK houses offer one common bathroom, and in some cases, there\'s an attached bathroom within the bedroom. Adequate storage space, proper ventilation through windows, and essential utilities, including electrical outlets, plumbing, and heating or cooling systems, contribute to a comfortable living environment. While the specific features may vary based on design and location, 1BHK houses are tailored to provide practical and functional living spaces within a modest layout, making them suitable for small households seeking convenience and affordability.', 'A 1BHK (1 Bedroom, Hall, and Kitchen) house is a compact residential unit designed for individuals, couples, or small families. It features a single bedroom for sleeping and storage, a living room (hall) for relaxation and socializing, and a functional kitchen for meal preparation. Most 1BHK houses include a common bathroom, and in some cases, an attached bathroom to the bedroom. A dining area may be integrated into the living room or kitchen. Adequate storage space, good ventilation, and essential utilities are provided. While the features may vary, these houses are tailored to offer practical and comfortable living in a compact space, suitable for small households.', 4, 'house8.jpg', 'o5'),
('Rupasri', 'seelanayakampatti', 100000, 5000, 0, 'a', 'b', 4, 'sample.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `owner`
--

CREATE TABLE `owner` (
  `email` varchar(30) NOT NULL,
  `pwd` varchar(20) NOT NULL,
  `name` varchar(30) NOT NULL,
  `mobile_no` int(15) NOT NULL,
  `occupation` varchar(20) NOT NULL,
  `no_of_houses` int(20) NOT NULL,
  `country` varchar(15) NOT NULL,
  `state` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `address` varchar(40) NOT NULL,
  `owner_id` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `owner`
--

INSERT INTO `owner` (`email`, `pwd`, `name`, `mobile_no`, `occupation`, `no_of_houses`, `country`, `state`, `city`, `address`, `owner_id`) VALUES
('pranav@gmail.com', 'pranav93452', 'Pranav', 2147483647, 'student', 5, 'India', 'Tamilnadu', 'Salem', 'Jawaharmill back side, Abirami garden , ', 'o1'),
('jadhav@93452', '12345', 'jadhav', 456, 'business', 6, 'india', 'tamilnadu', 'salem', 'wwsws', '0'),
('a@gmail.com', '123', 'a', 123, 'fdf', 1, 'ss', 'ss', 'ss', 'ss', '0');

-- --------------------------------------------------------

--
-- Table structure for table `tenant`
--

CREATE TABLE `tenant` (
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `pwd` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `mobile_no` int(15) NOT NULL,
  `occupation` varchar(20) NOT NULL,
  `house_id` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tenant`
--

INSERT INTO `tenant` (`fname`, `lname`, `pwd`, `email`, `mobile_no`, `occupation`, `house_id`) VALUES
('prasanth', 'p', '1234', 'prasanth@gmail.com', 89089, 'student', 0),
('samp', 's', 'samp@gmail.com', '12344', 7676, 'stu', 0),
('samp', 's', '12344', 'samp@gmail.com', 7676, 'stu', 0),
('samps', 's', '123446', 'samps@gmail.com', 76767, 'stu', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
