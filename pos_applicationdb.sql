-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 21, 2023 at 08:17 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pos_applicationdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `deductiontbl`
--

CREATE TABLE `deductiontbl` (
  `deduction_date` varchar(255) NOT NULL,
  `employee_no` varchar(255) NOT NULL,
  `faculty_savings_deposit` double NOT NULL,
  `faculty_savings_loan` double NOT NULL,
  `id` int(11) NOT NULL,
  `income_tax_contri` double NOT NULL,
  `other_loans` double NOT NULL,
  `pagibig_contri` double NOT NULL,
  `pagibig_loan` double NOT NULL,
  `philHealth_contri` double NOT NULL,
  `salary_loan` double NOT NULL,
  `sss_contri` double NOT NULL,
  `total_deduction` double NOT NULL,
  `sss_loan` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `deductiontbl`
--

INSERT INTO `deductiontbl` (`deduction_date`, `employee_no`, `faculty_savings_deposit`, `faculty_savings_loan`, `id`, `income_tax_contri`, `other_loans`, `pagibig_contri`, `pagibig_loan`, `philHealth_contri`, `salary_loan`, `sss_contri`, `total_deduction`, `sss_loan`) VALUES
('October 2 2023', '16789', 50, 50, 20, 0, 50, 50, 50, 450, 50, 180, 1030, 50);

-- --------------------------------------------------------

--
-- Table structure for table `incometbl`
--

CREATE TABLE `incometbl` (
  `id` int(11) NOT NULL,
  `income_date` varchar(255) NOT NULL,
  `basic_rate_hour` double NOT NULL,
  `basic_income` double NOT NULL,
  `hono_rate_hour` double NOT NULL,
  `hono_num_hrs` double NOT NULL,
  `hono_income` double NOT NULL,
  `other_rate_hour` double NOT NULL,
  `other_num_hrs` double NOT NULL,
  `other_income` double NOT NULL,
  `gross_income` double NOT NULL,
  `net_income` double NOT NULL,
  `employee_no` varchar(255) NOT NULL,
  `basic_num_hrs` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `incometbl`
--

INSERT INTO `incometbl` (`id`, `income_date`, `basic_rate_hour`, `basic_income`, `hono_rate_hour`, `hono_num_hrs`, `hono_income`, `other_rate_hour`, `other_num_hrs`, `other_income`, `gross_income`, `net_income`, `employee_no`, `basic_num_hrs`) VALUES
(33, 'October 2 2023', 60, 1200, 60, 20, 1200, 60, 20, 1200, 3600, 2570, '16789', 20);

-- --------------------------------------------------------

--
-- Table structure for table `personal_infotbl`
--

CREATE TABLE `personal_infotbl` (
  `id` int(11) NOT NULL,
  `employee_no` varchar(255) NOT NULL,
  `address_line1` text NOT NULL,
  `address_line2` text NOT NULL,
  `birth_date` date NOT NULL,
  `civil_status` varchar(255) NOT NULL,
  `contact_no` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `email_address` varchar(255) NOT NULL,
  `employee_status` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `mname` varchar(255) NOT NULL,
  `municipality` varchar(255) NOT NULL,
  `nationality` varchar(255) NOT NULL,
  `other_social_media_account` varchar(255) NOT NULL,
  `pay_date` date NOT NULL,
  `picpath` text NOT NULL,
  `qualified_dependent_status` varchar(255) NOT NULL,
  `social_media_account_id` varchar(255) NOT NULL,
  `state_province` varchar(255) NOT NULL,
  `suffix` varchar(255) NOT NULL,
  `zip_code` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `personal_infotbl`
--

INSERT INTO `personal_infotbl` (`id`, `employee_no`, `address_line1`, `address_line2`, `birth_date`, `civil_status`, `contact_no`, `country`, `department`, `designation`, `email_address`, `employee_status`, `fname`, `gender`, `lname`, `mname`, `municipality`, `nationality`, `other_social_media_account`, `pay_date`, `picpath`, `qualified_dependent_status`, `social_media_account_id`, `state_province`, `suffix`, `zip_code`) VALUES
(4, 'wqerwqr', 'wqerw', 'rwqerwqe', '2023-10-03', 'M', 'qwerqwer', 'Paraguay', 'qwerwq', 'rwqerwq', 'qwrewqer', 'rwqwrwqr', 'qwerqw', 'M', 'wqerwqer', 'rwqerwqer', 'rweqrwqe', 'Filipino', 'whatsapp_messenger', '2023-10-02', 'test', 'Z', '123', 'rwqerw', 'wqerw', 123);

-- --------------------------------------------------------

--
-- Table structure for table `salestbl`
--

CREATE TABLE `salestbl` (
  `cash_given` double NOT NULL,
  `customer_change` double NOT NULL,
  `discounted_amount` double NOT NULL,
  `discount_amount` double NOT NULL,
  `discount_option` varchar(255) NOT NULL,
  `employee_no` varchar(255) NOT NULL,
  `id` int(11) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `price` double NOT NULL,
  `quantity` int(11) NOT NULL,
  `total_discounted_amount` double NOT NULL,
  `total_discount_given` double NOT NULL,
  `total_quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `salestbl`
--

INSERT INTO `salestbl` (`cash_given`, `customer_change`, `discounted_amount`, `discount_amount`, `discount_option`, `employee_no`, `id`, `item_name`, `price`, `quantity`, `total_discounted_amount`, `total_discount_given`, `total_quantity`) VALUES
(800, 10, 790.5, 139.5, 'Employee Discount', '', 7, 'Dress 6', 310, 3, 790, 139, 3),
(693, 637, 56, 24, 'Senior Citizen', '', 8, 'Drinks 1', 20, 4, 56, 24, 4),
(90, 14, 76.5, 13.5, 'Employee Discount', '', 9, 'Foods 5', 45, 2, 76, 13, 2),
(89, 4, 85, 15, 'Employee Discount', '', 10, 'Kitchenware 1', 100, 1, 85, 15, 1),
(900, 240, 660, 0, 'No discount', '', 11, 'Perfume 7', 165, 4, 660, 0, 4);

-- --------------------------------------------------------

--
-- Table structure for table `user_accounttbl`
--

CREATE TABLE `user_accounttbl` (
  `confirm_password` varchar(255) NOT NULL,
  `employee_no` varchar(255) NOT NULL,
  `id` int(11) NOT NULL,
  `password` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `privilege` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_accounttbl`
--

INSERT INTO `user_accounttbl` (`confirm_password`, `employee_no`, `id`, `password`, `username`, `privilege`) VALUES
('', 'wqerwqr', 2, '', '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `deductiontbl`
--
ALTER TABLE `deductiontbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `incometbl`
--
ALTER TABLE `incometbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_infotbl`
--
ALTER TABLE `personal_infotbl`
  ADD PRIMARY KEY (`employee_no`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `salestbl`
--
ALTER TABLE `salestbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_accounttbl`
--
ALTER TABLE `user_accounttbl`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `deductiontbl`
--
ALTER TABLE `deductiontbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `incometbl`
--
ALTER TABLE `incometbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `personal_infotbl`
--
ALTER TABLE `personal_infotbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `salestbl`
--
ALTER TABLE `salestbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user_accounttbl`
--
ALTER TABLE `user_accounttbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
