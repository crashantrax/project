-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2019 at 08:02 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
CREATE DEFINER=`root`@`localhost` PROCEDURE `depositlogsUpdate` ()  BEGIN
    
    IF (SELECT COUNT(MemberAccountID) FROM member_depositlogs WHERE MemberAccountID = NEW.MemberAccountID) = 0 THEN
        INSERT INTO member_depositlogs(MemberDepositAmount, PaymentDate, MemberAccountID)
        VALUES(NEW.MemberDepositAmount, CURRENT_DATE(), NEW.MemberAccountID);
    ELSE
    	UPDATE member_depositlogs
       	SET MemberDepositAmount = NEW.MemberDepositAmount
        WHERE MemberAccountID = NEW.MemberAccountID;
END IF;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `depositlogsUpdate1` ()  BEGIN
    
    IF (SELECT COUNT(MemberAccountID) FROM member_depositlogs WHERE MemberAccountID = NEW.MemberAccountID) = 0 THEN
        INSERT INTO member_depositlogs(MemberDepositAmount, PaymentDate, MemberAccountID)
        VALUES(NEW.MemberDepositAmount, CURRENT_DATE(), NEW.MemberAccountID);
    ELSE
    	UPDATE member_depositlogs
       	SET MemberDepositAmount = NEW.MemberDepositAmount
        WHERE MemberAccountID = NEW.MemberAccountID;
END IF;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `determineAge` (IN `birthDate` DATE)  BEGIN
    SELECT FLOOR(DATEDIFF(NOW(), DATE(birthdate))/365) AS age;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `wLogs` (IN `id` INT(255))  BEGIN
   SELECT *  FROM member_withdrawallogs WHERE MemberAccountID = id ;
   END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Stand-in structure for view `contribution`
-- (See below for the actual view)
--
CREATE TABLE `contribution` (
`MemberContributionID` int(11)
,`MemberTotalSharesCapital` int(250)
,`MemTotalBalance` int(250)
,`YrsofMembership` int(100)
,`MemberAccountID` int(11)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `deposits`
-- (See below for the actual view)
--
CREATE TABLE `deposits` (
`MemberDepositLogsID` int(11)
,`MemberDepositAmount` int(250)
,`PaymentDate` date
,`MemberAccountID` int(11)
);

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

--
-- Dumping data for table `family_info`
--

INSERT INTO `family_info` (`Family_InfoID`, `MemberAccountID`, `spouse_fn`, `spouse_mn`, `spouse_ln`, `Occupation`, `CapitalGrossIncome`, `DateofBirth`, `Position`, `NoofChildren`) VALUES
(2, 74, 'qwe', 'qwe', 'qwe', 'qwe', 0, '2019-03-28', '1qeq', 12);

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

--
-- Dumping data for table `loan`
--

INSERT INTO `loan` (`LoanID`, `LoanName`, `LoanInterest`, `LoanServiceFee`, `LoanShareCapital`, `LoanAmountLimit`) VALUES
(1, 'Provident', 2, 200, 200, 500000);

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
  `LoanDuration` int(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `loanlogs`
--

INSERT INTO `loanlogs` (`LoanLogsID`, `MemberAccountID`, `LoanID`, `LoanAmount`, `LoanPayPerMonth`, `LoanDate`, `LoanMonthlyDue`, `LoanDuration`, `status`) VALUES
(1, 74, 1, 500, 41, '2019-04-03', 51, 12, 'Active');

-- --------------------------------------------------------

--
-- Stand-in structure for view `loantype`
-- (See below for the actual view)
--
CREATE TABLE `loantype` (
`LoanID` int(11)
,`LoanName` varchar(250)
,`LoanInterest` int(250)
,`LoanServiceFee` int(250)
,`LoanShareCapital` int(250)
,`LoanAmountLimit` int(250)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `members`
-- (See below for the actual view)
--
CREATE TABLE `members` (
`account_number` int(250)
,`MemberAccountID` int(11)
,`FirstName` varchar(250)
,`MiddleName` varchar(250)
,`LastName` varchar(250)
,`TelNo` varchar(20)
,`PlaceofBirth` varchar(250)
,`DOB` date
,`Nationality` varchar(50)
,`Sex` enum('Male','Female')
,`CivilStatus` varchar(50)
,`BloodType` varchar(50)
,`Address` varchar(250)
,`Status` varchar(50)
,`date_created` date
,`email` varchar(100)
);

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
(2019308602, 74, 'clapton123', 'garcia', 'orioste', '09066499178', 'cagaya de oro', '2019-04-03', 'Filipino', 'Male', 'Cagayan De Oro', 'Unknown', 'Cagayan De Oro', 'Active', '0000-00-00', 'clapton_five@yahoo.com'),
(2019236697, 76, '123', '123', '12123', '123', '123', '2019-03-28', '123', 'Male', '123123', 'Unknown', '123123', 'Active', '2019-03-28', '123'),
(2019815017, 77, 'John', 'Doe', 'Zacherberg', '0903194623', 'America', '2019-04-03', 'Filipino', 'Male', 'qweqwe', 'AB-', 'qweqwe', 'Active', '2019-04-03', 'adasd@yahoo.com');

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

--
-- Dumping data for table `member_business`
--

INSERT INTO `member_business` (`MemberBusinessID`, `MemberAccountID`, `TypeOfBusiness`, `Address`, `Ownership`, `Capital`, `TradeName`, `TelNo`, `YearStarted`, `GrossIncome`) VALUES
(2, 74, 'qwe', 'qwe', 'qwe', 0, 'qwe', 0, 2019, 0),
(3, 76, '123', '123', '123', 123, '132', 213, 2019, 123);

-- --------------------------------------------------------

--
-- Table structure for table `member_college`
--

CREATE TABLE `member_college` (
  `UserCollegeID` int(11) NOT NULL,
  `MemberAccountID` int(11) NOT NULL,
  `CollegeAddress` varchar(250) NOT NULL,
  `CollegeRemarks` varchar(250) NOT NULL,
  `CollegeDate` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member_college`
--

INSERT INTO `member_college` (`UserCollegeID`, `MemberAccountID`, `CollegeAddress`, `CollegeRemarks`, `CollegeDate`) VALUES
(6, 74, 'qwe', 'qwe', 123);

-- --------------------------------------------------------

--
-- Table structure for table `member_contribution`
--

CREATE TABLE `member_contribution` (
  `MemberContributionID` int(11) NOT NULL,
  `MemberTotalSharesCapital` int(250) NOT NULL,
  `MemTotalBalance` int(250) NOT NULL,
  `YrsofMembership` int(100) NOT NULL,
  `MemberAccountID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member_contribution`
--

INSERT INTO `member_contribution` (`MemberContributionID`, `MemberTotalSharesCapital`, `MemTotalBalance`, `YrsofMembership`, `MemberAccountID`) VALUES
(1, 52000, 251842, 2, 74),
(3, 250500, 250623, 1, 76),
(8, 0, 1000, 0, 1235),
(9, 0, 5000, 0, 777),
(10, 1000, 50001, 0, 99999),
(11, 1500, 0, 0, 99999);

-- --------------------------------------------------------

--
-- Table structure for table `member_depositlogs`
--

CREATE TABLE `member_depositlogs` (
  `MemberDepositLogsID` int(11) NOT NULL,
  `MemberDepositAmount` int(250) NOT NULL,
  `PaymentDate` date NOT NULL,
  `MemberAccountID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member_depositlogs`
--

INSERT INTO `member_depositlogs` (`MemberDepositLogsID`, `MemberDepositAmount`, `PaymentDate`, `MemberAccountID`) VALUES
(1, 32, '2019-03-28', 74),
(2, 100, '2019-03-28', 200),
(3, 1000, '2019-03-28', 2003),
(4, 100, '2019-03-28', 74),
(5, 1000, '2019-03-28', 74),
(6, 1000, '2019-03-28', 2003),
(7, 250000, '2019-03-28', 74),
(8, 123, '2019-03-28', 76),
(21, 500, '2019-04-01', 98),
(22, 500, '2019-04-01', 1235),
(23, 500, '2019-04-01', 1235),
(24, 500, '2019-04-01', 1235),
(25, 5000, '2019-04-01', 777),
(26, 50000, '2019-04-01', 99999),
(27, 1, '2019-04-01', 99999),
(28, 33, '2019-04-03', 74),
(33, 500, '2019-04-03', 76),
(35, 500, '2019-04-03', 74);

--
-- Triggers `member_depositlogs`
--
DELIMITER $$
CREATE TRIGGER `depositlogsInsert` AFTER INSERT ON `member_depositlogs` FOR EACH ROW BEGIN
DECLARE dep int(11);
    IF (SELECT COUNT(MemberAccountID) FROM member_contribution WHERE MemberAccountID = NEW.MemberAccountID) = 0 THEN
        INSERT INTO member_contribution(MemberTotalSharesCapital, MemTotalBalance, YrsofMembership, MemberAccountID)
       	VALUES('0', NEW.MemberDepositAmount,'0',NEW.MemberAccountID);
        
        ELSE
     SELECT MemberDepositAmount INTO dep FROM member_depositlogs WHERE MemberDepositLogsID = NEW.MemberDepositLogsID;
    UPDATE member_contribution
    SET MemTotalBalance = MemTotalBalance + dep
    WHERE MemberAccountID = NEW.MemberAccountID;

    
    
END IF;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `member_elementary`
--

CREATE TABLE `member_elementary` (
  `UserElementaryID` int(11) NOT NULL,
  `MemberAccountID` int(11) NOT NULL,
  `CollegeAddressElementary` varchar(250) NOT NULL,
  `ElementaryRemarks` varchar(250) NOT NULL,
  `ElementaryDate` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member_elementary`
--

INSERT INTO `member_elementary` (`UserElementaryID`, `MemberAccountID`, `CollegeAddressElementary`, `ElementaryRemarks`, `ElementaryDate`) VALUES
(50, 74, '123123', 'qweqwe', 33);

-- --------------------------------------------------------

--
-- Table structure for table `member_highschool`
--

CREATE TABLE `member_highschool` (
  `UserHighschoolID` int(11) NOT NULL,
  `MemberAccountID` int(11) NOT NULL,
  `HighschoolAddress` varchar(250) NOT NULL,
  `HighschoolRemarks` varchar(250) NOT NULL,
  `HighschoolDate` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member_highschool`
--

INSERT INTO `member_highschool` (`UserHighschoolID`, `MemberAccountID`, `HighschoolAddress`, `HighschoolRemarks`, `HighschoolDate`) VALUES
(6, 74, 'wqe', 'qwe', 123123);

-- --------------------------------------------------------

--
-- Table structure for table `member_postgrad`
--

CREATE TABLE `member_postgrad` (
  `UserPostGradID` int(11) NOT NULL,
  `MemberAccountID` int(11) NOT NULL,
  `PostGradAddress` varchar(250) NOT NULL,
  `PostGradRemarks` varchar(250) NOT NULL,
  `PostGradDate` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member_postgrad`
--

INSERT INTO `member_postgrad` (`UserPostGradID`, `MemberAccountID`, `PostGradAddress`, `PostGradRemarks`, `PostGradDate`) VALUES
(6, 74, 'qwe', 'qwe', 0);

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

--
-- Dumping data for table `member_sharelogs`
--

INSERT INTO `member_sharelogs` (`MemberShareLogsID`, `MemberAccountID`, `MemberSharesAmount`, `PaymentDate`) VALUES
(4, 99999, 500, '2019-04-01'),
(6, 99999, 500, '2019-04-01'),
(11, 76, 500, '2019-04-03'),
(14, 74, 50000, '2019-04-03');

--
-- Triggers `member_sharelogs`
--
DELIMITER $$
CREATE TRIGGER `sharelogsUpdate` AFTER INSERT ON `member_sharelogs` FOR EACH ROW BEGIN
DECLARE dep int(11);
    
    IF (SELECT COUNT(MemberAccountID) FROM member_sharelogs WHERE MemberAccountID = NEW.MemberAccountID) = 0 THEN
        INSERT INTO member_sharelogs(MemberAccountID, MemberSharesAmount, PaymentDate)
        VALUES(NEW.MemberAccountID, NEW.MemberSharesAmount, CURRENT_DATE());
         ELSE
         SELECT MemberSharesAmount INTO dep FROM member_sharelogs  WHERE MemberShareLogsID = NEW.MemberShareLogsID;
    	UPDATE member_contribution
    SET MemberTotalSharesCapital = MemberTotalSharesCapital + dep
    WHERE MemberAccountID = NEW.MemberAccountID;
        
   
END IF;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `member_withdrawallogs`
--

CREATE TABLE `member_withdrawallogs` (
  `WithdrawalProfileID` int(11) NOT NULL,
  `WithdrawalAmount` int(250) NOT NULL,
  `Date` date NOT NULL,
  `MemberAccountID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member_withdrawallogs`
--

INSERT INTO `member_withdrawallogs` (`WithdrawalProfileID`, `WithdrawalAmount`, `Date`, `MemberAccountID`) VALUES
(1, 100, '2019-03-28', 74),
(6, 123, '2019-03-28', 2),
(19, 100, '2019-03-28', 74),
(126, 100, '2019-03-28', 74),
(127, 12321, '2019-04-03', 77),
(128, 12321, '2019-04-03', 77),
(129, 12321, '2019-04-03', 77),
(130, 12321, '2019-04-03', 77),
(131, 2000000, '2019-04-03', 77),
(133, 123, '2019-04-03', 74);

--
-- Triggers `member_withdrawallogs`
--
DELIMITER $$
CREATE TRIGGER `withdrawbalanceUpdate` AFTER INSERT ON `member_withdrawallogs` FOR EACH ROW BEGIN
	DECLARE withdraw int(250);
	
    SELECT WithdrawalAmount INTO withdraw FROM member_withdrawallogs WHERE MemberAccountID = NEW.MemberAccountID and WithdrawalProfileID = NEW.WithdrawalProfileID ;
    
	UPDATE member_contribution
    SET MemTotalBalance = MemTotalBalance - withdraw
    WHERE MemberAccountID = NEW.MemberAccountID;
END
$$
DELIMITER ;

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
-- Stand-in structure for view `shares`
-- (See below for the actual view)
--
CREATE TABLE `shares` (
`MemberShareLogsID` int(11)
,`MemberAccountID` int(11)
,`MemberSharesAmount` int(250)
,`PaymentDate` date
);

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
(2, 'loan', '123', 'loanclerk'),
(3, 'manager', '123', 'manager');

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
-- Dumping data for table `user_employment`
--

INSERT INTO `user_employment` (`MemberEmploymentID`, `MemberAccountID`, `NameofFirm`, `Address`, `DateofEmploymentStarted`, `GrossIncome`, `Position`, `TelNo`, `NetTakeHomePay`) VALUES
(2, 74, 'qwe', 'qwe', '2019-03-28', 0, 'qwe', 0, 0),
(3, 75, 'qwe', 'qwe', '2019-03-28', 0, 'qwe', 0, 0),
(4, 76, '123', '123', '2019-03-28', 123, '123', 123, 123),
(5, 77, 'qwe', 'qwe', '2019-04-03', 0, 'qwe', 0, 0);

-- --------------------------------------------------------

--
-- Stand-in structure for view `viewmemberjoin`
-- (See below for the actual view)
--
CREATE TABLE `viewmemberjoin` (
`account_number` int(250)
,`MemberAccountID` int(11)
,`FirstName` varchar(250)
,`MiddleName` varchar(250)
,`LastName` varchar(250)
,`TelNo` varchar(20)
,`PlaceofBirth` varchar(250)
,`DOB` date
,`Nationality` varchar(50)
,`Sex` enum('Male','Female')
,`CivilStatus` varchar(50)
,`BloodType` varchar(50)
,`Address` varchar(250)
,`Status` varchar(50)
,`date_created` date
,`email` varchar(100)
,`spouse_fn` varchar(250)
,`spouse_mn` varchar(250)
,`spouse_ln` varchar(250)
,`Occupation` varchar(100)
,`CapitalGrossIncome` int(250)
,`DateofBirth` date
,`Position` varchar(100)
,`NoofChildren` int(50)
,`CollegeAddressElementary` varchar(250)
,`ElementaryRemarks` varchar(250)
,`ElementaryDate` int(11)
,`HighschoolAddress` varchar(250)
,`HighschoolRemarks` varchar(250)
,`HighschoolDate` int(11)
,`CollegeAddress` varchar(250)
,`CollegeRemarks` varchar(250)
,`CollegeDate` int(11)
,`PostGradAddress` varchar(250)
,`PostGradRemarks` varchar(250)
,`PostGradDate` int(11)
,`NameofFirm` varchar(250)
,`DateofEmploymentStarted` date
,`GrossIncome` int(100)
,`NetTakeHomePay` int(100)
,`TypeOfBusiness` varchar(250)
,`Ownership` varchar(250)
,`Capital` int(100)
,`TradeName` varchar(100)
,`YearStarted` int(50)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `withdraw`
-- (See below for the actual view)
--
CREATE TABLE `withdraw` (
`WithdrawalProfileID` int(11)
,`WithdrawalAmount` int(250)
,`Date` date
,`MemberAccountID` int(11)
);

-- --------------------------------------------------------

--
-- Structure for view `contribution`
--
DROP TABLE IF EXISTS `contribution`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `contribution`  AS  select `member_contribution`.`MemberContributionID` AS `MemberContributionID`,`member_contribution`.`MemberTotalSharesCapital` AS `MemberTotalSharesCapital`,`member_contribution`.`MemTotalBalance` AS `MemTotalBalance`,`member_contribution`.`YrsofMembership` AS `YrsofMembership`,`member_contribution`.`MemberAccountID` AS `MemberAccountID` from `member_contribution` ;

-- --------------------------------------------------------

--
-- Structure for view `deposits`
--
DROP TABLE IF EXISTS `deposits`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `deposits`  AS  select `member_depositlogs`.`MemberDepositLogsID` AS `MemberDepositLogsID`,`member_depositlogs`.`MemberDepositAmount` AS `MemberDepositAmount`,`member_depositlogs`.`PaymentDate` AS `PaymentDate`,`member_depositlogs`.`MemberAccountID` AS `MemberAccountID` from `member_depositlogs` ;

-- --------------------------------------------------------

--
-- Structure for view `loantype`
--
DROP TABLE IF EXISTS `loantype`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `loantype`  AS  select `loan`.`LoanID` AS `LoanID`,`loan`.`LoanName` AS `LoanName`,`loan`.`LoanInterest` AS `LoanInterest`,`loan`.`LoanServiceFee` AS `LoanServiceFee`,`loan`.`LoanShareCapital` AS `LoanShareCapital`,`loan`.`LoanAmountLimit` AS `LoanAmountLimit` from `loan` ;

-- --------------------------------------------------------

--
-- Structure for view `members`
--
DROP TABLE IF EXISTS `members`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `members`  AS  select `member_account`.`account_number` AS `account_number`,`member_account`.`MemberAccountID` AS `MemberAccountID`,`member_account`.`FirstName` AS `FirstName`,`member_account`.`MiddleName` AS `MiddleName`,`member_account`.`LastName` AS `LastName`,`member_account`.`TelNo` AS `TelNo`,`member_account`.`PlaceofBirth` AS `PlaceofBirth`,`member_account`.`DOB` AS `DOB`,`member_account`.`Nationality` AS `Nationality`,`member_account`.`Sex` AS `Sex`,`member_account`.`CivilStatus` AS `CivilStatus`,`member_account`.`BloodType` AS `BloodType`,`member_account`.`Address` AS `Address`,`member_account`.`Status` AS `Status`,`member_account`.`date_created` AS `date_created`,`member_account`.`email` AS `email` from `member_account` ;

-- --------------------------------------------------------

--
-- Structure for view `shares`
--
DROP TABLE IF EXISTS `shares`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `shares`  AS  select `member_sharelogs`.`MemberShareLogsID` AS `MemberShareLogsID`,`member_sharelogs`.`MemberAccountID` AS `MemberAccountID`,`member_sharelogs`.`MemberSharesAmount` AS `MemberSharesAmount`,`member_sharelogs`.`PaymentDate` AS `PaymentDate` from `member_sharelogs` ;

-- --------------------------------------------------------

--
-- Structure for view `viewmemberjoin`
--
DROP TABLE IF EXISTS `viewmemberjoin`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `viewmemberjoin`  AS  select `member_account`.`account_number` AS `account_number`,`member_account`.`MemberAccountID` AS `MemberAccountID`,`member_account`.`FirstName` AS `FirstName`,`member_account`.`MiddleName` AS `MiddleName`,`member_account`.`LastName` AS `LastName`,`member_account`.`TelNo` AS `TelNo`,`member_account`.`PlaceofBirth` AS `PlaceofBirth`,`member_account`.`DOB` AS `DOB`,`member_account`.`Nationality` AS `Nationality`,`member_account`.`Sex` AS `Sex`,`member_account`.`CivilStatus` AS `CivilStatus`,`member_account`.`BloodType` AS `BloodType`,`member_account`.`Address` AS `Address`,`member_account`.`Status` AS `Status`,`member_account`.`date_created` AS `date_created`,`member_account`.`email` AS `email`,`family_info`.`spouse_fn` AS `spouse_fn`,`family_info`.`spouse_mn` AS `spouse_mn`,`family_info`.`spouse_ln` AS `spouse_ln`,`family_info`.`Occupation` AS `Occupation`,`family_info`.`CapitalGrossIncome` AS `CapitalGrossIncome`,`family_info`.`DateofBirth` AS `DateofBirth`,`family_info`.`Position` AS `Position`,`family_info`.`NoofChildren` AS `NoofChildren`,`member_elementary`.`CollegeAddressElementary` AS `CollegeAddressElementary`,`member_elementary`.`ElementaryRemarks` AS `ElementaryRemarks`,`member_elementary`.`ElementaryDate` AS `ElementaryDate`,`member_highschool`.`HighschoolAddress` AS `HighschoolAddress`,`member_highschool`.`HighschoolRemarks` AS `HighschoolRemarks`,`member_highschool`.`HighschoolDate` AS `HighschoolDate`,`member_college`.`CollegeAddress` AS `CollegeAddress`,`member_college`.`CollegeRemarks` AS `CollegeRemarks`,`member_college`.`CollegeDate` AS `CollegeDate`,`member_postgrad`.`PostGradAddress` AS `PostGradAddress`,`member_postgrad`.`PostGradRemarks` AS `PostGradRemarks`,`member_postgrad`.`PostGradDate` AS `PostGradDate`,`user_employment`.`NameofFirm` AS `NameofFirm`,`user_employment`.`DateofEmploymentStarted` AS `DateofEmploymentStarted`,`user_employment`.`GrossIncome` AS `GrossIncome`,`user_employment`.`NetTakeHomePay` AS `NetTakeHomePay`,`member_business`.`TypeOfBusiness` AS `TypeOfBusiness`,`member_business`.`Ownership` AS `Ownership`,`member_business`.`Capital` AS `Capital`,`member_business`.`TradeName` AS `TradeName`,`member_business`.`YearStarted` AS `YearStarted` from (((((((`member_account` join `family_info` on((`family_info`.`MemberAccountID` = `member_account`.`MemberAccountID`))) join `member_elementary` on((`member_elementary`.`MemberAccountID` = `member_account`.`MemberAccountID`))) join `member_highschool` on((`member_highschool`.`MemberAccountID` = `member_account`.`MemberAccountID`))) join `member_college` on((`member_college`.`MemberAccountID` = `member_account`.`MemberAccountID`))) join `member_postgrad` on((`member_postgrad`.`MemberAccountID` = `member_account`.`MemberAccountID`))) join `user_employment` on((`user_employment`.`MemberAccountID` = `member_account`.`MemberAccountID`))) join `member_business` on((`member_business`.`MemberAccountID` = `member_account`.`MemberAccountID`))) ;

-- --------------------------------------------------------

--
-- Structure for view `withdraw`
--
DROP TABLE IF EXISTS `withdraw`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `withdraw`  AS  select `member_withdrawallogs`.`WithdrawalProfileID` AS `WithdrawalProfileID`,`member_withdrawallogs`.`WithdrawalAmount` AS `WithdrawalAmount`,`member_withdrawallogs`.`Date` AS `Date`,`member_withdrawallogs`.`MemberAccountID` AS `MemberAccountID` from `member_withdrawallogs` ;

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
  ADD PRIMARY KEY (`LoanLogsID`);

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
  ADD UNIQUE KEY `MemberAccountID` (`MemberAccountID`);

--
-- Indexes for table `member_contribution`
--
ALTER TABLE `member_contribution`
  ADD PRIMARY KEY (`MemberContributionID`);

--
-- Indexes for table `member_depositlogs`
--
ALTER TABLE `member_depositlogs`
  ADD PRIMARY KEY (`MemberDepositLogsID`);

--
-- Indexes for table `member_elementary`
--
ALTER TABLE `member_elementary`
  ADD PRIMARY KEY (`UserElementaryID`),
  ADD UNIQUE KEY `MemberAccountID` (`MemberAccountID`);

--
-- Indexes for table `member_highschool`
--
ALTER TABLE `member_highschool`
  ADD PRIMARY KEY (`UserHighschoolID`),
  ADD UNIQUE KEY `MemberAccountID` (`MemberAccountID`);

--
-- Indexes for table `member_postgrad`
--
ALTER TABLE `member_postgrad`
  ADD PRIMARY KEY (`UserPostGradID`),
  ADD UNIQUE KEY `MemberAccountID` (`MemberAccountID`);

--
-- Indexes for table `member_sharelogs`
--
ALTER TABLE `member_sharelogs`
  ADD PRIMARY KEY (`MemberShareLogsID`);

--
-- Indexes for table `member_withdrawallogs`
--
ALTER TABLE `member_withdrawallogs`
  ADD PRIMARY KEY (`WithdrawalProfileID`);

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
  MODIFY `Family_InfoID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `loan`
--
ALTER TABLE `loan`
  MODIFY `LoanID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `loanlogs`
--
ALTER TABLE `loanlogs`
  MODIFY `LoanLogsID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `member_account`
--
ALTER TABLE `member_account`
  MODIFY `MemberAccountID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;
--
-- AUTO_INCREMENT for table `member_business`
--
ALTER TABLE `member_business`
  MODIFY `MemberBusinessID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `member_college`
--
ALTER TABLE `member_college`
  MODIFY `UserCollegeID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `member_contribution`
--
ALTER TABLE `member_contribution`
  MODIFY `MemberContributionID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `member_depositlogs`
--
ALTER TABLE `member_depositlogs`
  MODIFY `MemberDepositLogsID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `member_elementary`
--
ALTER TABLE `member_elementary`
  MODIFY `UserElementaryID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT for table `member_highschool`
--
ALTER TABLE `member_highschool`
  MODIFY `UserHighschoolID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `member_postgrad`
--
ALTER TABLE `member_postgrad`
  MODIFY `UserPostGradID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `member_sharelogs`
--
ALTER TABLE `member_sharelogs`
  MODIFY `MemberShareLogsID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `member_withdrawallogs`
--
ALTER TABLE `member_withdrawallogs`
  MODIFY `WithdrawalProfileID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=134;
--
-- AUTO_INCREMENT for table `paymentlogs`
--
ALTER TABLE `paymentlogs`
  MODIFY `LoanPaymentLogs` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `staff_acount`
--
ALTER TABLE `staff_acount`
  MODIFY `UserAccountID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `staff_profile`
--
ALTER TABLE `staff_profile`
  MODIFY `StaffProfileID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `user_employment`
--
ALTER TABLE `user_employment`
  MODIFY `MemberEmploymentID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
