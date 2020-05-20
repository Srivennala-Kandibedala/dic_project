-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2020 at 04:52 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dic`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `uname` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`uname`, `password`) VALUES
('admin', 'password');

-- --------------------------------------------------------

--
-- Table structure for table `swa1`
--

CREATE TABLE `swa1` (
  `p_name` varchar(30) NOT NULL,
  `p_area` varchar(70) NOT NULL,
  `p_town` varchar(20) NOT NULL,
  `p_taluk` varchar(20) NOT NULL,
  `p_district` varchar(20) NOT NULL,
  `p_state` varchar(20) NOT NULL,
  `p_pincode` int(11) NOT NULL,
  `p_phno` bigint(20) NOT NULL,
  `p_email` varchar(30) NOT NULL,
  `p_aadhar` bigint(20) NOT NULL,
  `purpose` varchar(20) NOT NULL,
  `l_town` varchar(20) NOT NULL,
  `l_taluk` varchar(20) NOT NULL,
  `l_district` varchar(20) NOT NULL,
  `l_state` varchar(20) NOT NULL,
  `l_pincode` int(11) NOT NULL,
  `item_name` varchar(20) NOT NULL,
  `item_des` varchar(100) NOT NULL,
  `annu_cap` varchar(20) NOT NULL,
  `unit_cap` bigint(20) NOT NULL,
  `co_product` varchar(50) NOT NULL,
  `pr_year1` varchar(20) NOT NULL,
  `pr_year2` varchar(20) NOT NULL,
  `pr_year3` varchar(20) NOT NULL,
  `pr_year4` varchar(20) NOT NULL,
  `pr_year5` varchar(20) NOT NULL,
  `existing_a` varchar(20) NOT NULL,
  `proposed_a` varchar(20) NOT NULL,
  `existing_b` varchar(20) NOT NULL,
  `proposed_b` varchar(20) NOT NULL,
  `existing_c` varchar(20) NOT NULL,
  `proposed_c` varchar(20) NOT NULL,
  `existing_d` varchar(20) NOT NULL,
  `proposed_d` varchar(20) NOT NULL,
  `existing_e` varchar(20) NOT NULL,
  `proposed_e` varchar(20) NOT NULL,
  `trail_date` date NOT NULL,
  `commercial_date` date NOT NULL,
  `cost_a` varchar(20) NOT NULL,
  `cost_b` varchar(20) NOT NULL,
  `cost_c` varchar(20) NOT NULL,
  `cost_d` varchar(20) NOT NULL,
  `cost_total` varchar(20) NOT NULL,
  `finance_a` varchar(20) NOT NULL,
  `finance_b` varchar(20) NOT NULL,
  `finance_c` varchar(20) NOT NULL,
  `finance_total` varchar(20) NOT NULL,
  `turnover_a` varchar(20) NOT NULL,
  `turnover_b` varchar(20) NOT NULL,
  `turnover_total` varchar(20) NOT NULL,
  `land_a` varchar(20) NOT NULL,
  `land_b` varchar(20) NOT NULL,
  `power_a` varchar(20) NOT NULL,
  `power_b` varchar(20) NOT NULL,
  `power_total` varchar(20) NOT NULL,
  `water_a` varchar(20) NOT NULL,
  `water_b` varchar(20) NOT NULL,
  `water_c` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL,
  `land` varchar(20) NOT NULL,
  `pcb` varchar(20) NOT NULL,
  `incentive` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `swa1`
--

INSERT INTO `swa1` (`p_name`, `p_area`, `p_town`, `p_taluk`, `p_district`, `p_state`, `p_pincode`, `p_phno`, `p_email`, `p_aadhar`, `purpose`, `l_town`, `l_taluk`, `l_district`, `l_state`, `l_pincode`, `item_name`, `item_des`, `annu_cap`, `unit_cap`, `co_product`, `pr_year1`, `pr_year2`, `pr_year3`, `pr_year4`, `pr_year5`, `existing_a`, `proposed_a`, `existing_b`, `proposed_b`, `existing_c`, `proposed_c`, `existing_d`, `proposed_d`, `existing_e`, `proposed_e`, `trail_date`, `commercial_date`, `cost_a`, `cost_b`, `cost_c`, `cost_d`, `cost_total`, `finance_a`, `finance_b`, `finance_c`, `finance_total`, `turnover_a`, `turnover_b`, `turnover_total`, `land_a`, `land_b`, `power_a`, `power_b`, `power_total`, `water_a`, `water_b`, `water_c`, `status`, `land`, `pcb`, `incentive`) VALUES
('aa', 'aa', 'aa', 'aa', '', '', 0, 0, '', 111111111111, '1', '', '', '', '', 0, '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('divya joshi M', 'patel nagar', '', '', 'ballari', 'karnataka', 583101, 6355563222, '', 451278452645, '', '', '', '', '', 0, 'Mobile', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('sirisha', 'abc', 'Ballari', '', '', 'Karnataka', 583104, 7026424444, 'srivennala.gma@gmail.com', 784278451254, '2', '', '', '', '', 0, 'shoes', '', '', 0, '', '', '', '', '', '', '56', '', '989', '', '', '', '8966', '', '1045', '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('Vennala', 'Contonment', 'ballari', 'ballari', 'ballari', 'Karnataka', 583104, 9784512345, 'vennala@gmail.com', 789452387456, '3', 'Ballari', 'ballari', 'ballari', 'Karnataka', 583104, 'Books', 'wholsale', '54', 89, 'paper', '85', '55', '85', '78', '20', '455', '855', '855', '855', '67', '7892', '8772', '789', '', '', '2019-10-16', '2019-10-25', '88', '4567', '667', '789', '', '572', '45', '4567', '', '3445', '456', '', '4567', '123', '542', '123', '', '876', '987', '567', 'abc', 'dwss', 'hjk', '7855'),
('Madhuri R', 'Ballari', 'Ballari', '', '', 'Karnataka', 583104, 9569855665, 'madhu@gmail.com', 875425631452, '2', 'ballari', '', '', '', 0, 'cosmetics', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '7855', '85', '8966', '878', '17784', '855', '8256', '985', '10096', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `swa1`
--
ALTER TABLE `swa1`
  ADD PRIMARY KEY (`p_aadhar`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
