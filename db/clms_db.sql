-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2019 at 10:44 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `clms_db`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `insertfamilyInfo` (IN `MemberAccountID` INT(11), IN `spouse_fn` VARCHAR(250), IN `spouse_mn` VARCHAR(250), IN `spouse_ln` VARCHAR(250), IN `Occupation` VARCHAR(100), IN `CapitalGrossIncome` INT(250), IN `DateofBirth` DATE, IN `Position` VARCHAR(100), IN `NoofChildren` INT(50))  BEGIN
	INSERT INTO family_info VALUES(NULL, MemberAccountID, spouse_fn, spouse_mn, spouse_ln, Occupation, CapitalGrossIncome, DateofBirth, Position, NoofChildren);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `insertLoan` (IN `LoanName` VARCHAR(250), IN `LoanInterest` INT(250), IN `LoanServiceFee` INT(250), IN `LoanShareCapital` INT(250), IN `LoanAmountLimit` INT(250))  BEGIN
	INSERT INTO loan VALUES(NULL, LoanName, LoanInterest, LoanServiceFee, LoanShareCapital, LoanAmountLimit);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `insertmemberAccount` (IN `account_number` INT(250), IN `FirstName` VARCHAR(250), IN `MiddleName` VARCHAR(250), IN `LastName` VARCHAR(250), IN `TelNo` VARCHAR(20), IN `PlaceofBirth` VARCHAR(250), IN `DOB` DATE, IN `Nationality` VARCHAR(50), IN `Sex` ENUM('Male','Female'), IN `CivilStatus` VARCHAR(50), IN `BloodType` VARCHAR(50), IN `Address` VARCHAR(250), IN `Status` VARCHAR(50), IN `date_created` DATE, IN `email` VARCHAR(100))  BEGIN
	INSERT INTO member_account VALUES(account_number, NULL, FirstName, MiddleName, LastName, TelNo, PlaceofBirth, DOB, Nationality, Sex, CivilStatus, BloodType, Address, Status, date_created, email);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `insertmemberBusiness` (IN `MemberAccountID` INT(11), IN `TypeOfBusiness` VARCHAR(250), IN `Address` VARCHAR(250), IN `Ownership` VARCHAR(250), IN `Capital` INT(100), IN `TradeName` VARCHAR(100), IN `TelNo` INT(100), IN `YearStarted` INT(50), IN `GrossIncome` INT(100))  BEGIN
	INSERT INTO member_business VALUES(NULL, MemberAccountID, TypeOfBusiness, Address, Ownership, Capital, TradeName, TelNo, YearStarted, GrossIncome);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `insertmemberContribution` (IN `MemberAccountID` INT(11), IN `MemberTotalSharesCapital` INT(250), IN `MemTotalBalance` INT(250), IN `YrsofMembership` INT(100))  BEGIN
	INSERT INTO member_contribution VALUES(NULL, MemberAccountID, MemberTotalSharesCapital, MemTotalBalance, YrsofMembership);         END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `insertmemberElementary` (IN `MemberAccountID` INT(11), IN `ElementaryDate` DATE, IN `CollegeAddressElementary` VARCHAR(250), IN `ElementaryRemarks` VARCHAR(250))  BEGIN
	INSERT INTO member_elementary VALUES(NULL, MemberAccountID, ElementaryDate, CollegeAddressElementary, ElementaryRemarks);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `insertmemberHighschool` (IN `MemberAccountID` INT(11), IN `HighschoolDate` DATE, IN `HighschoolAddress` VARCHAR(250), IN `HighschoolRemarks` VARCHAR(250))  BEGIN
	INSERT INTO member_highschool VALUES(NULL, MemberAccountID, HighschoolDate, HighschoolAddress, HighschoolRemarks);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `insertmemberPostgrad` (IN `MemberAccountID` INT(11), IN `PostGradDate` DATE, IN `PostGradAddress` VARCHAR(250), IN `PostGradRemarks` VARCHAR(250))  BEGIN
	INSERT INTO member_postgrad VALUES(NULL, MemberAccountID, PostGradDate, PostGradAddress, PostGradRemarks);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `insertstaffProfile` (IN `UserAccountID` INT(11), IN `FirstName` VARCHAR(250), IN `MiddleName` VARCHAR(250), IN `LastName` VARCHAR(250), IN `TelNo` VARCHAR(20), IN `PlaceofBirth` VARCHAR(250), IN `DOB` DATE, IN `Nationality` VARCHAR(50), IN `Sex` ENUM('Male','Female'), IN `CivilStatus` VARCHAR(50), IN `BloodType` VARCHAR(50), IN `Address` VARCHAR(250))  BEGIN
	INSERT INTO staff_profile VALUES(NULL, UserAccountID, FirstName, MiddleName, LastName, TelNo, PlaceofBirth, DOB, Nationality, Sex, CivilStatus, BloodType, Address);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `insertuserEmployment` (IN `MemberAccountID` INT(11), IN `NameofFirm` VARCHAR(250), IN `Address` VARCHAR(250), IN `DateofEmploymentStarted` DATE, IN `GrossIncome` INT(100), IN `Position` VARCHAR(100), IN `TelNo` INT(100), IN `NetTakeHomePay` INT(100))  BEGIN
	INSERT INTO user_employment VALUES(NULL, MemberAccountID, NameofFirm, Address, DateofEmploymentStarted, GrossIncome, Position, TelNo, NetTakeHomePay);
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `family_info`
--

CREATE TABLE `family_info` (
  `Family_InfoID` int(11) NOT NULL,
  `MemberAccountID` int(11) NOT NULL,
  `spouse_fn` varchar(250) NOT NULL,
  `spouse_mn` varchar(250) NOT NULL,
  `spouse_ln` varchar(250) NOT NULL,
  `Occupation` varchar(100) NOT NULL,
  `CapitalGrossIncome` int(250) NOT NULL,
  `DateofBirth` date NOT NULL,
  `Position` varchar(100) NOT NULL,
  `NoofChildren` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `loan`
--

CREATE TABLE `loan` (
  `LoanID` int(11) NOT NULL,
  `LoanName` varchar(250) NOT NULL,
  `LoanInterest` int(250) NOT NULL,
  `LoanServiceFee` int(250) NOT NULL,
  `LoanShareCapital` int(250) NOT NULL,
  `LoanAmountLimit` int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `loanlogs`
--

CREATE TABLE `loanlogs` (
  `LoanLogsID` int(11) NOT NULL,
  `MemberAccountID` int(11) NOT NULL,
  `LoanID` int(11) NOT NULL,
  `LoanAmount` int(100) NOT NULL,
  `LoanPayPerMonth` int(100) NOT NULL,
  `LoanDate` date NOT NULL,
  `LoanMonthlyDue` int(100) NOT NULL,
  `LoanDuration` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `member_account`
--

CREATE TABLE `member_account` (
  `account_number` int(250) NOT NULL,
  `MemberAccountID` int(11) NOT NULL,
  `FirstName` varchar(250) NOT NULL,
  `MiddleName` varchar(250) NOT NULL,
  `LastName` varchar(250) NOT NULL,
  `TelNo` varchar(20) NOT NULL,
  `PlaceofBirth` varchar(250) NOT NULL,
  `DOB` date NOT NULL,
  `Nationality` varchar(50) NOT NULL,
  `Sex` enum('Male','Female') NOT NULL,
  `CivilStatus` varchar(50) NOT NULL,
  `BloodType` varchar(50) NOT NULL,
  `Address` varchar(250) NOT NULL,
  `Status` varchar(50) NOT NULL,
  `date_created` date NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member_account`
--

INSERT INTO `member_account` (`account_number`, `MemberAccountID`, `FirstName`, `MiddleName`, `LastName`, `TelNo`, `PlaceofBirth`, `DOB`, `Nationality`, `Sex`, `CivilStatus`, `BloodType`, `Address`, `Status`, `date_created`, `email`) VALUES
(201910002, 1, 'clapton', 'garcia', 'orioste', '09066499178', 'cagaya de oro', '2019-03-27', 'Filipino', 'Male', 'Cagayan De Oro', 'Unknown', 'Cagayan De Oro', 'Not-Active', '2019-03-26', 'clapton_five@yahoo.com'),
(2019770632, 2, 'ccce', 'qweqwe', 'qweqe', '132133', 'eqwe', '2008-03-27', 'Filipino', 'Male', 'Cagayan De Oro', 'Unknown', 'Cagayan De Oro', 'Active', '2019-03-27', 'clapton_five@yahoo.com'),
(2019169927, 3, 'ccce', 'qweqwe', 'qweqe', 'asd', 'asd', '2019-03-27', 'ff', 'Male', 'asd', 'Unknown', 'asd', 'Active', '2019-03-27', 'asd');

-- --------------------------------------------------------

--
-- Table structure for table `member_business`
--

CREATE TABLE `member_business` (
  `MemberBusinessID` int(11) NOT NULL,
  `MemberAccountID` int(11) NOT NULL,
  `TypeOfBusiness` varchar(250) NOT NULL,
  `Address` varchar(250) NOT NULL,
  `Ownership` varchar(250) NOT NULL,
  `Capital` int(100) NOT NULL,
  `TradeName` varchar(100) NOT NULL,
  `TelNo` int(100) NOT NULL,
  `YearStarted` int(50) NOT NULL,
  `GrossIncome` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `member_college`
--

CREATE TABLE `member_college` (
  `UserCollegeID` int(11) NOT NULL,
  `MemberAccountID` int(11) NOT NULL,
  `CollegeDate` date NOT NULL,
  `CollegeAddress` varchar(250) NOT NULL,
  `CollegeRemarks` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `member_contribution`
--

CREATE TABLE `member_contribution` (
  `MemberContributionID` int(11) NOT NULL,
  `MemberAccountID` int(11) NOT NULL,
  `MemberTotalSharesCapital` int(250) NOT NULL,
  `MemTotalBalance` int(250) NOT NULL,
  `YrsofMembership` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `member_depositlogs`
--

CREATE TABLE `member_depositlogs` (
  `MemberDepositLogsID` int(11) NOT NULL,
  `MemberAccountID` int(11) NOT NULL,
  `MemberDepositAmount` int(250) NOT NULL,
  `PaymentDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `member_elementary`
--

CREATE TABLE `member_elementary` (
  `UserElementaryID` int(11) NOT NULL,
  `MemberAccountID` int(11) NOT NULL,
  `ElementaryDate` date NOT NULL,
  `CollegeAddressElementary` varchar(250) NOT NULL,
  `ElementaryRemarks` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `member_highschool`
--

CREATE TABLE `member_highschool` (
  `UserHighschoolID` int(11) NOT NULL,
  `MemberAccountID` int(11) NOT NULL,
  `HighschoolDate` date NOT NULL,
  `HighschoolAddress` varchar(250) NOT NULL,
  `HighschoolRemarks` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `member_postgrad`
--

CREATE TABLE `member_postgrad` (
  `UserPostGradID` int(11) NOT NULL,
  `MemberAccountID` int(11) NOT NULL,
  `PostGradDate` date NOT NULL,
  `PostGradAddress` varchar(250) NOT NULL,
  `PostGradRemarks` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `member_sharelogs`
--

CREATE TABLE `member_sharelogs` (
  `MemberShareLogsID` int(11) NOT NULL,
  `MemberAccountID` int(11) NOT NULL,
  `MemberSharesAmount` int(250) NOT NULL,
  `PaymentDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `member_withdrawallogs`
--

CREATE TABLE `member_withdrawallogs` (
  `WithdrawalProfileID` int(11) NOT NULL,
  `MemberAccountID` int(11) NOT NULL,
  `WithdrawalAmount` int(250) NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `paymentlogs`
--

CREATE TABLE `paymentlogs` (
  `LoanPaymentLogs` int(11) NOT NULL,
  `LoanLogsID` int(11) NOT NULL,
  `LoanDate` date NOT NULL,
  `LoanPayAmount` int(50) NOT NULL,
  `LoanBalance` int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `staff_acount`
--

CREATE TABLE `staff_acount` (
  `UserAccountID` int(11) NOT NULL,
  `Username` varchar(250) NOT NULL,
  `Password` varchar(250) NOT NULL,
  `Usertype` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff_acount`
--

INSERT INTO `staff_acount` (`UserAccountID`, `Username`, `Password`, `Usertype`) VALUES
(1, 'Cashier', 'Cashier', 'cashier'),
(2, 'loan', '123', 'loanclerk');

-- --------------------------------------------------------

--
-- Table structure for table `staff_profile`
--

CREATE TABLE `staff_profile` (
  `StaffProfileID` int(11) NOT NULL,
  `UserAccountID` int(11) NOT NULL,
  `FirstName` varchar(250) NOT NULL,
  `MiddleName` varchar(250) NOT NULL,
  `LastName` varchar(250) NOT NULL,
  `TelNo` varchar(20) NOT NULL,
  `PlaceofBirth` varchar(250) NOT NULL,
  `DOB` date NOT NULL,
  `Nationality` varchar(50) NOT NULL,
  `Sex` enum('Male','Female') NOT NULL,
  `CivilStatus` varchar(50) NOT NULL,
  `BloodType` varchar(50) NOT NULL,
  `Address` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff_profile`
--

INSERT INTO `staff_profile` (`StaffProfileID`, `UserAccountID`, `FirstName`, `MiddleName`, `LastName`, `TelNo`, `PlaceofBirth`, `DOB`, `Nationality`, `Sex`, `CivilStatus`, `BloodType`, `Address`) VALUES
(1, 13, 'Janrey', 'Saltiga', 'Dumaog', '098243334', 'Puerto Cdo', '1999-01-22', 'Filipino', 'Male', 'Single', 'O', 'Cdo');

-- --------------------------------------------------------

--
-- Table structure for table `user_employment`
--

CREATE TABLE `user_employment` (
  `MemberEmploymentID` int(11) NOT NULL,
  `MemberAccountID` int(11) NOT NULL,
  `NameofFirm` varchar(250) NOT NULL,
  `Address` varchar(250) NOT NULL,
  `DateofEmploymentStarted` date NOT NULL,
  `GrossIncome` int(100) NOT NULL,
  `Position` varchar(100) NOT NULL,
  `TelNo` int(100) NOT NULL,
  `NetTakeHomePay` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `family_info`
--
ALTER TABLE `family_info`
  ADD PRIMARY KEY (`Family_InfoID`),
  ADD UNIQUE KEY `MemberAccountID` (`MemberAccountID`);

--
-- Indexes for table `loan`
--
ALTER TABLE `loan`
  ADD PRIMARY KEY (`LoanID`);

--
-- Indexes for table `loanlogs`
--
ALTER TABLE `loanlogs`
  ADD PRIMARY KEY (`LoanLogsID`),
  ADD UNIQUE KEY `MemberAccountID` (`MemberAccountID`,`LoanID`);

--
-- Indexes for table `member_account`
--
ALTER TABLE `member_account`
  ADD PRIMARY KEY (`MemberAccountID`);

--
-- Indexes for table `member_business`
--
ALTER TABLE `member_business`
  ADD PRIMARY KEY (`MemberBusinessID`),
  ADD UNIQUE KEY `MemberAccountID` (`MemberAccountID`);

--
-- Indexes for table `member_college`
--
ALTER TABLE `member_college`
  ADD PRIMARY KEY (`UserCollegeID`),
  ADD UNIQUE KEY `MemberAccountID` (`MemberAccountID`),
  ADD UNIQUE KEY `CollegeDate` (`CollegeDate`);

--
-- Indexes for table `member_contribution`
--
ALTER TABLE `member_contribution`
  ADD PRIMARY KEY (`MemberContributionID`),
  ADD UNIQUE KEY `MemberAccountID` (`MemberAccountID`);

--
-- Indexes for table `member_depositlogs`
--
ALTER TABLE `member_depositlogs`
  ADD PRIMARY KEY (`MemberDepositLogsID`),
  ADD UNIQUE KEY `MemberAccountID` (`MemberAccountID`);

--
-- Indexes for table `member_elementary`
--
ALTER TABLE `member_elementary`
  ADD PRIMARY KEY (`UserElementaryID`),
  ADD UNIQUE KEY `MemberAccountID` (`MemberAccountID`),
  ADD UNIQUE KEY `CollegeDate` (`ElementaryDate`);

--
-- Indexes for table `member_highschool`
--
ALTER TABLE `member_highschool`
  ADD PRIMARY KEY (`UserHighschoolID`),
  ADD UNIQUE KEY `MemberAccountID` (`MemberAccountID`),
  ADD UNIQUE KEY `CollegeDate` (`HighschoolDate`);

--
-- Indexes for table `member_postgrad`
--
ALTER TABLE `member_postgrad`
  ADD PRIMARY KEY (`UserPostGradID`),
  ADD UNIQUE KEY `MemberAccountID` (`MemberAccountID`),
  ADD UNIQUE KEY `CollegeDate` (`PostGradDate`);

--
-- Indexes for table `member_sharelogs`
--
ALTER TABLE `member_sharelogs`
  ADD PRIMARY KEY (`MemberShareLogsID`),
  ADD UNIQUE KEY `MemberAccountID` (`MemberAccountID`);

--
-- Indexes for table `member_withdrawallogs`
--
ALTER TABLE `member_withdrawallogs`
  ADD PRIMARY KEY (`WithdrawalProfileID`),
  ADD UNIQUE KEY `MemberAccountID` (`MemberAccountID`);

--
-- Indexes for table `paymentlogs`
--
ALTER TABLE `paymentlogs`
  ADD PRIMARY KEY (`LoanPaymentLogs`),
  ADD UNIQUE KEY `LoanLogsID` (`LoanLogsID`);

--
-- Indexes for table `staff_acount`
--
ALTER TABLE `staff_acount`
  ADD PRIMARY KEY (`UserAccountID`);

--
-- Indexes for table `staff_profile`
--
ALTER TABLE `staff_profile`
  ADD PRIMARY KEY (`StaffProfileID`),
  ADD UNIQUE KEY `UserAccountID` (`UserAccountID`);

--
-- Indexes for table `user_employment`
--
ALTER TABLE `user_employment`
  ADD PRIMARY KEY (`MemberEmploymentID`),
  ADD UNIQUE KEY `MemberAccountID` (`MemberAccountID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `family_info`
--
ALTER TABLE `family_info`
  MODIFY `Family_InfoID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `loan`
--
ALTER TABLE `loan`
  MODIFY `LoanID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `loanlogs`
--
ALTER TABLE `loanlogs`
  MODIFY `LoanLogsID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `member_account`
--
ALTER TABLE `member_account`
  MODIFY `MemberAccountID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `member_business`
--
ALTER TABLE `member_business`
  MODIFY `MemberBusinessID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `member_college`
--
ALTER TABLE `member_college`
  MODIFY `UserCollegeID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `member_contribution`
--
ALTER TABLE `member_contribution`
  MODIFY `MemberContributionID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `member_depositlogs`
--
ALTER TABLE `member_depositlogs`
  MODIFY `MemberDepositLogsID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `member_elementary`
--
ALTER TABLE `member_elementary`
  MODIFY `UserElementaryID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `member_highschool`
--
ALTER TABLE `member_highschool`
  MODIFY `UserHighschoolID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `member_postgrad`
--
ALTER TABLE `member_postgrad`
  MODIFY `UserPostGradID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `member_sharelogs`
--
ALTER TABLE `member_sharelogs`
  MODIFY `MemberShareLogsID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `member_withdrawallogs`
--
ALTER TABLE `member_withdrawallogs`
  MODIFY `WithdrawalProfileID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `paymentlogs`
--
ALTER TABLE `paymentlogs`
  MODIFY `LoanPaymentLogs` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `staff_acount`
--
ALTER TABLE `staff_acount`
  MODIFY `UserAccountID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `staff_profile`
--
ALTER TABLE `staff_profile`
  MODIFY `StaffProfileID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_employment`
--
ALTER TABLE `user_employment`
  MODIFY `MemberEmploymentID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
