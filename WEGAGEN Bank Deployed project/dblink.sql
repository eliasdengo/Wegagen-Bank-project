-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 04, 2022 at 12:55 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dblink`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `email`, `password`) VALUES
('admin', 'eliasdengo5@gmail.com', 'ED1234@W');

-- --------------------------------------------------------

--
-- Table structure for table `locallink`
--

CREATE TABLE `locallink` (
  `id` int(200) NOT NULL,
  `icon_dir` varchar(200) NOT NULL,
  `title` varchar(200) NOT NULL,
  `link` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `locallink`
--

INSERT INTO `locallink` (`id`, `icon_dir`, `title`, `link`) VALUES
(1, 'branch.png', 'Branch Operation', 'http://10.57.14.33/bo/'),
(2, 'cardsuit.png', 'Card Suit', 'https://10.57.6.73:8443/cl2/'),
(3, 'chequepoint.jpg', 'Cheque Point', 'http://10.4.4.10/login.aspx?id=ses'),
(4, 'hello cash.png', 'Hello Cash', 'http://172.26.1.100/do/login'),
(5, 'flexcube.jpg', 'FlexCube', 'https://flex.wegagenbanksc.com.et/FCJNeoWeb/SMMDIFRM.jsp'),
(6, 'issue trecking.png', 'Issue Tracking', 'http://10.57.14.24:9090/(X(1)S(ydvxwr45yjle2h55phqjhz45))/LogOn.aspx?AspxAutoDetectCookieSupport=1'),
(7, 'help-desk-icon-8.png', 'Help Desk', 'http://10.57.14.31:81/helpdesk/pages/UI.php'),
(8, 'bi.png', 'OracleBI', 'http://10.57.40.99/xmlpserver/servlet/home'),
(9, 'outlook.png', 'Outlook', 'https://mail.wegagenbanksc.com.et/owa/auth/logon.aspx?replaceCurrent=1&url=https%3a%2f%2fmail.wegagenbanksc.com.et%2fowa%2f'),
(10, 'head.png', 'HeadFile Upload', 'http://10.57.14.24:3730/vacancy/head.php'),
(11, 'obdx.png', 'OBDX', 'https://www.wegagenbanksc.com.et:4443/?module=home'),
(12, 'finance.png', 'Finance File Uploader', 'http://10.57.14.24:3730/finance/'),
(13, 'delequent.jpg', 'Delequent', 'http://10.57.14.33/delinquent/'),
(14, 'starrecon.png', 'STARRECON', 'http://10.57.6.25/STARRECON/Default.aspx'),
(15, 'DMS.png', 'Document Management System (KYC)', 'http://10.57.40.103:7777/Home'),
(16, 'Sanction List.jfif', 'UN list registration & Sanctions List Search', 'http://10.57.40.101:3730/Bank_customer_search'),
(17, 'omni report.png', 'Omni Report', 'http://10.57.14.32/Reports/Pages/Folder.aspx'),
(18, 'clinical.png', 'Clinic Referral Request', 'http://10.57.40.101:3233/login'),
(19, 'elearning.png', 'Elearning', 'http://10.57.40.101/elearning/index.php/'),
(20, 'vacancy application system.jpg', 'Vacancy Application System', 'https://www.wegagen.com/vacancy/%E2%80%8B');

-- --------------------------------------------------------

--
-- Table structure for table `remittancelink`
--

CREATE TABLE `remittancelink` (
  `id` int(200) NOT NULL,
  `icon_dir` varchar(200) NOT NULL,
  `title` varchar(200) NOT NULL,
  `link` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `remittancelink`
--

INSERT INTO `remittancelink` (`id`, `icon_dir`, `title`, `link`) VALUES
(1, 'western-union-icon.png', 'Western Union', 'https://wupos2lb.westernunion.com/web-ui/process'),
(2, 'transfast.jfif', 'Transfast', 'https://pay.transfast.com/'),
(3, 'WorldRemit_Logo_icononly.png', 'Worldremit', 'https://partners.worldremit.com/#!/login'),
(4, 'EZ-Remit-Logo-CMYK-1.jpg', 'Ezremitonline', 'https://www.ezremitonline.com/EzSTS/Login.aspx?ReturnUrl=%2fEzSTS%2fdefault.aspx%3fwa%3dwsignin1.0%26wtrealm%3dhttps%253a%252f%252fwww.ezremitonline.com%252fHome.aspx%26wctx%3drm%253d0%2526id%253dpass'),
(5, 'amalexpress.png', 'Amalexp', 'https://www.amalexp.com/'),
(6, 'kaah.png', 'Kaahexpress', 'https://www.kaahexpress.net/'),
(7, 'ria-logo.png', 'RIA', 'https://fxonline.riaenvia.net/External/Login.aspx?ReturnUrl=%2f'),
(8, 'daha.png', 'Dahabshiil', 'https://www.dahabonline.com/login.aspx?ReturnUrl=%2f'),
(9, 'xpress-money.png', 'Xpressmoney', 'https://www.xpressmoney.biz/pages/en/X2AFrame.htm'),
(10, 'monyegam.png', 'MoneyGram', 'https://login.moneygram.com/auth/UI/Login/');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password` (`password`);

--
-- Indexes for table `locallink`
--
ALTER TABLE `locallink`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `icon_dir` (`icon_dir`),
  ADD UNIQUE KEY `title` (`title`),
  ADD UNIQUE KEY `link` (`link`);

--
-- Indexes for table `remittancelink`
--
ALTER TABLE `remittancelink`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `icon_dir` (`icon_dir`),
  ADD UNIQUE KEY `title` (`title`),
  ADD UNIQUE KEY `link` (`link`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `locallink`
--
ALTER TABLE `locallink`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `remittancelink`
--
ALTER TABLE `remittancelink`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
