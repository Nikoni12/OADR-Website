-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 19, 2022 at 07:40 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `oadr`
--

-- --------------------------------------------------------

--
-- Table structure for table `accomplishmentreport`
--

CREATE TABLE `accomplishmentreport` (
  `ID` int(100) NOT NULL,
  `report_title` varchar(300) NOT NULL,
  `report_file` varchar(300) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp(),
  `date_edited` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `accomplishmentreport`
--

INSERT INTO `accomplishmentreport` (`ID`, `report_title`, `report_file`, `date_added`, `date_edited`) VALUES
(1, '2021 Gender and Development Accomplishment Report', '71887873978b33e03a3ad08e97124557.pdf', '2022-07-18 03:56:53', '2022-07-18 03:56:53');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID` int(100) NOT NULL,
  `AdminName` varchar(45) DEFAULT NULL,
  `UserName` varchar(45) DEFAULT NULL,
  `MobileNumber` bigint(11) DEFAULT NULL,
  `Password` varchar(120) DEFAULT NULL,
  `role` varchar(50) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `AdminName`, `UserName`, `MobileNumber`, `Password`, `role`, `date_added`) VALUES
(1, 'Administrator', 'admin', 63123456789, '9c1ad00a16a7c67e2727b471ac969e96', 'Administrator', '2022-07-09 09:53:58'),
(3, 'Staff1', 'staff1', 116516641891, '1253208465b1efa876f982d8a9e73eef', 'Staff', '2022-07-04 10:09:53'),
(4, 'Staff2', 'staff2', 32321321321, '1253208465b1efa876f982d8a9e73eef', 'Staff', '2022-07-04 10:09:53');

-- --------------------------------------------------------

--
-- Table structure for table `announcements`
--

CREATE TABLE `announcements` (
  `ID` int(100) NOT NULL,
  `announcement_title` varchar(300) NOT NULL,
  `announcement_content` varchar(300) NOT NULL,
  `announcement_image` varchar(100) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp(),
  `date_updated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `announcements`
--

INSERT INTO `announcements` (`ID`, `announcement_title`, `announcement_content`, `announcement_image`, `date_added`, `date_updated`) VALUES
(1, 'Procurement and Delivery of Various Office Supplies & Materials Via SHOPPING (8TERNITY INC.) for the', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur,', '7f5b02ec31e7d67077d53886a4b8e85a.jpg', '2022-07-04 09:41:45', '2022-07-04 09:41:45'),
(2, 'Announcement2', 'test', 'ccb66a0f0f6c8d4b69076ed0ed1c455f.png', '2022-07-04 09:41:45', '2022-07-04 09:42:33'),
(7, 'New Announcement  title', 'Announcement  content', '6ea5655e8731cee9c6008e7cde4a5101.jpg', '2022-07-09 07:41:23', '2022-07-09 07:53:56');

-- --------------------------------------------------------

--
-- Table structure for table `avm`
--

CREATE TABLE `avm` (
  `ID` int(100) NOT NULL,
  `vid_title` varchar(300) NOT NULL,
  `vid_link` varchar(300) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp(),
  `date_edited` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `avm`
--

INSERT INTO `avm` (`ID`, `vid_title`, `vid_link`, `date_added`, `date_edited`) VALUES
(1, 'AVM Material 1', 'https://www.youtube.com/embed/tGFijuVyzyQ', '2022-07-18 05:21:57', '2022-07-18 05:29:39');

-- --------------------------------------------------------

--
-- Table structure for table `careers`
--

CREATE TABLE `careers` (
  `ID` int(100) NOT NULL,
  `Name` varchar(120) DEFAULT NULL,
  `Email` varchar(120) DEFAULT NULL,
  `PhoneNum` varchar(120) DEFAULT NULL,
  `Category` varchar(50) DEFAULT NULL,
  `status` varchar(120) DEFAULT NULL,
  `resume_name` varchar(100) NOT NULL,
  `message` varchar(500) NOT NULL,
  `appnum` varchar(40) NOT NULL,
  `date_applied` timestamp NOT NULL DEFAULT current_timestamp(),
  `date_edited` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `ID` int(100) NOT NULL,
  `event_title` varchar(300) NOT NULL,
  `event_content` varchar(1000) NOT NULL,
  `event_image` varchar(100) NOT NULL,
  `event_start` varchar(300) NOT NULL,
  `event_end` varchar(300) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp(),
  `date_edited` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`ID`, `event_title`, `event_content`, `event_image`, `event_start`, `event_end`, `date_added`, `date_edited`) VALUES
(2, 'OADR Team Building Event', 'We will be having a team building event  that includes all the department next week monday.', '3812b84eb9d5e755d01f16a97e517fef.jpg', '07/04/2022 03:39:18 PM', '07/04/2022 06:39:18 PM', '2022-07-04 09:55:43', '2022-07-04 09:55:43'),
(4, 'Important Holiday Event', 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat', 'b92ac6639aa0fa90fdd7a50b51902b87.jpg', '06/30/2022 01:02:05 PM', '07/01/2022 01:02:05 PM', '2022-07-04 09:55:43', '2022-07-04 09:55:43'),
(5, 'New Event', 'Event', '767e403b1ba8f0d2248b875a215be06b.jpg', '07/15/2022 12:00:00 PM', '07/15/2022 01:00:00 PM', '2022-07-08 05:46:16', '2022-07-08 05:46:16'),
(6, 'dasd', 'asdasdsa', 'ddbf2daa75be2e3da1770f3797668fd6.jpg', '07/12/2022 15:14:44 PM', '07/12/2022 03:14:44 PM', '2022-07-08 07:14:53', '2022-07-08 07:14:53'),
(7, 'dsadas', 'asdas', '561b18d32e155f9c224b590ce47b5eba.jpg', '07/12/2022 08:00:00 AM', '07/19/2022 09:00:00 AM', '2022-07-08 07:16:22', '2022-07-08 07:16:22'),
(8, 'dasdas', 'das', '180eee88c980c84b43978ec3a0af9ffd.jpg', '07/12/2022 03:22:40 PM', '07/12/2022 06:22:40 PM', '2022-07-08 07:23:00', '2022-07-08 07:23:00'),
(9, 'Neww Event Title', 'Event Content', '29a949eecb55671d6748c29988a02f55.jpg', '07/09/2022 04:26:12 PM', '07/10/2022 04:11:27 PM', '2022-07-09 08:11:52', '2022-07-09 08:26:18'),
(10, 'dsad', 'dasdsa', '564ff2463c121b9e75c5618295e13db6.jpg', '07/09/2022 04:20:05 PM', '07/10/2022 04:20:05 PM', '2022-07-09 08:20:11', '2022-07-09 08:20:11');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `ID` int(100) NOT NULL,
  `album_title` varchar(300) NOT NULL,
  `album_image` varchar(300) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp(),
  `date_edited` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`ID`, `album_title`, `album_image`, `date_added`, `date_edited`) VALUES
(3, 'Test', 'f0dda83fe5bcede9c168834319d6be9f.jpg', '2022-07-15 06:17:56', '2022-07-15 06:17:56');

-- --------------------------------------------------------

--
-- Table structure for table `infographics`
--

CREATE TABLE `infographics` (
  `ID` int(100) NOT NULL,
  `img_title` varchar(300) NOT NULL,
  `img_file` varchar(300) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp(),
  `date_edited` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `infographics`
--

INSERT INTO `infographics` (`ID`, `img_title`, `img_file`, `date_added`, `date_edited`) VALUES
(1, 'Image 1', '4b9cc6a43fb9f1b50a392d2d6459b8c2.png', '2022-07-18 05:49:09', '2022-07-18 05:55:35');

-- --------------------------------------------------------

--
-- Table structure for table `inquiries`
--

CREATE TABLE `inquiries` (
  `ID` int(100) NOT NULL,
  `Name` varchar(120) DEFAULT NULL,
  `Email` varchar(120) DEFAULT NULL,
  `Subject` varchar(120) DEFAULT NULL,
  `status` varchar(120) DEFAULT NULL,
  `message` varchar(500) NOT NULL,
  `ticket` varchar(40) NOT NULL,
  `date_sent` timestamp NOT NULL DEFAULT current_timestamp(),
  `date_edited` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inquiries`
--

INSERT INTO `inquiries` (`ID`, `Name`, `Email`, `Subject`, `status`, `message`, `ticket`, `date_sent`, `date_edited`) VALUES
(1, 'Jane Doe', 'iamjimuel06@gmail.com', 'Inquiry', 'Addressed', 'I have an inquiry', '78535083088\n', '2022-07-04 10:03:30', '2022-07-04 10:06:32'),
(2, 'dasdas', 'iamjimuel06@gmail.com', 'dasdasd', 'Addressed', 'sadasd', '349227540623\n', '2022-07-05 09:27:14', '2022-07-08 04:31:26'),
(3, 'dasdas', 'iamjimuel06@gmail.com', 'dasdasd', 'Not Addressed', 'sadasd', '601371110976\n', '2022-07-05 09:29:44', '2022-07-05 09:29:44'),
(4, 'dsadas', 'iamjimuel06@gmail.com', 'sdasd', 'Not Addressed', 'dasdsa', '93494605351\n', '2022-07-07 05:07:56', '2022-07-07 05:07:56'),
(5, 'dasdas', 'iamjimuel06@gmail.com', 'dadasd', 'Not Addressed', 'sadsadas', '900867886657\n', '2022-07-07 05:08:48', '2022-07-07 05:08:48'),
(8, 'dasdas', 'iamjimuel06@gmail.com', 'dasd', 'Not Addressed', 'dasdas', '530669547251\n', '2022-07-10 02:36:56', '2022-07-10 02:36:56'),
(9, 'Test', 'iamjimuel06@gmail.com', 'Test', 'Not Addressed', 'Test', '39585402764\n', '2022-07-10 02:37:48', '2022-07-10 02:37:48');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `ID` int(100) NOT NULL,
  `news_title` varchar(300) NOT NULL,
  `news_content` varchar(1000) DEFAULT NULL,
  `news_link` varchar(300) NOT NULL,
  `news_image` varchar(100) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp(),
  `date_edited` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`ID`, `news_title`, `news_content`, `news_link`, `news_image`, `date_added`, `date_edited`) VALUES
(1, 'President Rodrigo Duterte Greets OADR on its 18th Anniversary', 'President Rodrigo Duterte took time to greet the Office of Alternative Dispute Resolution as it celebrates the Republic Act No. 9285, the Alternative Dispute Resolution Act of 2004.\r\n\r\nAccording to President Duterte \"As a Unit of the Department of Justice, the OADR has faithfully performed its mandate to promote and facilitate alternative means of dispute resolution in adherence to the landmark legislation passed decades ago. I commend the agency for helping the Filipino public settle their conflicts in the most amicable manner to free them from the burdens of litigation\".\r\n\r\nAdditionally President Duterte said that    \"Let this occasion prompt you to reassess the established means of dispute resolution and explore new ways to handle the complex battles of a multifaceted, technology-driven and diverse society that is currently recovering from a global crisis. Diligence in your duty is a fulfillment of the government\'s promise to practice the speedy dispensation of justice. May we, as d', '', '4d464de9953306032d830784d5cc3399.png', '2022-07-04 09:50:27', '2022-07-04 09:50:27'),
(2, 'Lorem Ipsum Ipsum dolor sit amet News', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', '', '660cb082d4b2205f7d2b4df462d6fd0b.jpg', '2022-07-04 09:50:27', '2022-07-04 09:50:27'),
(8, 'Completion of the Comprehensive Course on Mediation', NULL, 'https://www.facebook.com/permalink.php?story_fbid=pfbid02PynFFRFqR3SmLpUHH3csTiJcjeTK2ZJvY9h7sx7GoKsxUH9f2fjJgNuKMB9tuqYal&id=100064519667093', '8f62f55d3618583865f80e0a8640e5fd.jpg', '2022-07-18 08:37:37', '2022-07-18 08:37:37'),
(9, 'Congratulations to former Justice Secretary Menardo I. Guevarra for his appointment as Solicitor General.', NULL, 'https://www.facebook.com/permalink.php?story_fbid=pfbid02Q76fLETqTQoUPjWA3a1c33nyWKYhyF4puAADfh9Njwo4bqUo6eGaAmY7Atz7z1DBl&id=100064519667093', '8c03f02c1201cbaa4d2f85081a056831.jpg', '2022-07-18 08:38:14', '2022-07-18 08:38:14'),
(10, 'Atty. Irene De Torres Alogoc, CESO I, has been shortlisted as one of the nominees of the 2021 Presidential Gawad CES.', NULL, 'https://www.facebook.com/permalink.php?story_fbid=pfbid06SvirqTYdtnLjfpdZZPRq5SgvV42RAB69Ts7BSCcfLinVWur9fGccSi8SQDGXX98l&id=100064519667093', '7dca3f64f91686c6d2ddd0fd1e5f5045.jpg', '2022-07-18 08:38:55', '2022-07-18 08:38:55');

-- --------------------------------------------------------

--
-- Table structure for table `pcw`
--

CREATE TABLE `pcw` (
  `ID` int(100) NOT NULL,
  `pcw_title` varchar(300) NOT NULL,
  `pcw_file` varchar(300) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp(),
  `date_edited` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pcw`
--

INSERT INTO `pcw` (`ID`, `pcw_title`, `pcw_file`, `date_added`, `date_edited`) VALUES
(1, 'PCW File 1', '439f2b853ff3b7a484436f418858a04e.pdf', '2022-07-18 06:08:20', '2022-07-18 06:14:29');

-- --------------------------------------------------------

--
-- Table structure for table `planbudget`
--

CREATE TABLE `planbudget` (
  `ID` int(100) NOT NULL,
  `plan_title` varchar(100) NOT NULL,
  `plan_file` varchar(300) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp(),
  `date_edited` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `planbudget`
--

INSERT INTO `planbudget` (`ID`, `plan_title`, `plan_file`, `date_added`, `date_edited`) VALUES
(1, 'Annual Gender and Development Plan and Budget FY 2022', 'b5479cc52c2858f20fff2eb4eb5edfc7.pdf', '2022-07-18 03:29:06', '2022-07-18 03:29:06');

-- --------------------------------------------------------

--
-- Table structure for table `publications`
--

CREATE TABLE `publications` (
  `ID` int(100) NOT NULL,
  `pub_title` varchar(300) NOT NULL,
  `pub_file` varchar(300) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp(),
  `date_edited` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `publications`
--

INSERT INTO `publications` (`ID`, `pub_title`, `pub_file`, `date_added`, `date_edited`) VALUES
(1, 'Publication 1', '7999208ffbad9c23048e07b15bef783a.pdf', '2022-07-18 05:02:11', '2022-07-18 05:09:04');

-- --------------------------------------------------------

--
-- Table structure for table `resources`
--

CREATE TABLE `resources` (
  `ID` int(100) NOT NULL,
  `ResourcesCat` varchar(120) DEFAULT NULL,
  `ResourcesName` varchar(120) DEFAULT NULL,
  `DateAdded` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `cat_id` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resources`
--

INSERT INTO `resources` (`ID`, `ResourcesCat`, `ResourcesName`, `DateAdded`, `cat_id`) VALUES
(1, 'OADR IEC MATHERIALS', 'Newsletter Issue No 1.pdf', '2022-06-21 06:36:56', '1'),
(2, 'OADR IEC MATHERIALS', 'JO19017-NO3 DOJ NEWSLETTER  FINAL_JUNE26 w_bleeding.pdf', '2022-06-21 06:36:58', '1'),
(3, 'OADR IEC MATHERIALS', 'OADR Press Issue 01.pdf', '2022-06-21 06:37:00', '1'),
(4, 'OADR IEC MATHERIALS', 'DOJ_OADR_English Comics FINAL.pdf', '2022-06-21 06:37:02', '1'),
(5, 'OADR IEC MATHERIALS', 'DOJ_OADR_Tagalog Comics 02-17-18_2', '2022-06-21 06:37:05', '1'),
(6, 'OADR-ACCREDITED ADR PRACTITIONERS, APOs AND PUBLIC ADR PROGRAM\r\n', '(1) MEDIATORS (2).pdf', '2022-06-21 06:37:06', '2'),
(7, 'OADR-ACCREDITED ADR PRACTITIONERS, APOs AND PUBLIC ADR PROGRAM', '(2) ARBITRATORS (1).pdf', '2022-06-21 06:37:08', '2'),
(8, 'OADR-ACCREDITED ADR PRACTITIONERS, APOs AND PUBLIC ADR PROGRAM', '(5) EARLY-NEUTRAL.pdf', '2022-06-21 06:37:15', '2'),
(9, 'OADR-ACCREDITED ADR PRACTITIONERS, APOs AND PUBLIC ADR PROGRAM\r\n', '(3) CONCILIATORS.pdf', '2022-06-21 06:37:17', '2'),
(10, 'OADR-ACCREDITED ADR PRACTITIONERS, APOs AND PUBLIC ADR PROGRAM\r\n', '(4) NEGOTIATORS (1).pdf', '2022-06-21 06:37:19', '2'),
(11, 'OADR-ACCREDITED ADR PRACTITIONERS, APOs AND PUBLIC ADR PROGRAM\r\n', '(6) MED-ARB.pdf', '2022-06-21 06:37:22', '2'),
(12, 'OADR-ACCREDITED ADR PRACTITIONERS, APOs AND PUBLIC ADR PROGRAM\r\n', '(7) MINI-TRIAL.pdf', '2022-06-21 06:37:23', '2'),
(13, 'OADR-TRAINED INDIVIDUALS', '2021 OADR-Trained Individuals on Arbitration.pdf', '2022-06-22 07:02:40', '3'),
(14, 'OADR-TRAINED INDIVIDUALS', '2021 OADR-Trained Individuals on Arbitration', '2022-06-22 07:02:42', '3'),
(15, 'ADR-RELATED LAWS, POLICIES AND ISSUANCES', 'RA 9285.pdf', '2022-06-22 07:20:06', '4'),
(16, 'ADR-RELATED LAWS, POLICIES AND ISSUANCES', 'EO 78.pdf', '2022-06-22 07:20:07', '4'),
(17, 'ADR-RELATED LAWS, POLICIES AND ISSUANCES', 'EO 97, s. 2012.pdf', '2022-06-22 07:20:09', '4'),
(18, 'ADR-RELATED LAWS, POLICIES AND ISSUANCES', 'DC 98_IRR_RA 9285.pdf', '2022-06-22 07:20:10', '4'),
(19, 'ADR-RELATED LAWS, POLICIES AND ISSUANCES', 'DC 49.pdf', '2022-06-22 07:20:11', '4'),
(20, 'ADR-RELATED LAWS, POLICIES AND ISSUANCES', 'DC 38', '2022-06-22 07:20:12', '4'),
(21, 'ADR-RELATED LAWS, POLICIES AND ISSUANCES', 'UNIFORM RULES ON DISPUTE RESOLUTION UNDER PD242.pdf', '2022-06-22 07:20:14', '4'),
(22, 'ADR-RELATED LAWS, POLICIES AND ISSUANCES', 'OADR Yearend Report 2020.pdf', '2022-06-22 07:20:19', '4'),
(23, 'ADR-RELATED LAWS, POLICIES AND ISSUANCES', 'OADR Yearend Report 2021.pdf', '2022-06-22 07:20:21', '4'),
(24, 'ADR-RELATED LAWS, POLICIES AND ISSUANCES', 'OADR 2020 Report on EO 97 Implementation.pdf', '2022-06-22 07:20:22', '4'),
(25, 'ADR TRAINING AND ORIENTATION SEMINAR SCHEDULES FOR 2022', '2022_Calendar_Seminars and Trainings.pdf', '2022-06-22 07:21:40', '5'),
(26, 'DOWNLOADABLE FORMS', 'Form 001-APO.pdf', '2022-06-22 07:21:45', '6'),
(27, 'DOWNLOADABLE FORMS', 'Form 002-APO-Public-APO.pdf', '2022-06-22 07:21:47', '6'),
(28, 'DOWNLOADABLE FORMS', 'Form 003-A-IND.pdf', '2022-06-22 07:21:49', '6'),
(29, 'DOWNLOADABLE FORMS', 'Form 003-A-IND.pdf', '2022-06-22 07:21:51', '6'),
(30, 'DOWNLOADABLE FORMS', 'Form 004-PAP.pdf', '2022-06-22 07:21:54', '6'),
(31, 'CITIZEN’S CHARTER', 'OADR_Citizens Charter- Approval of Training Program.pdf', '2022-06-22 07:21:56', '7'),
(32, 'CITIZEN’S CHARTER', 'OADR_Citizens Charter-Individual ADR Practitioner.pdf', '2022-06-22 07:21:58', '7'),
(33, 'CITIZEN’S CHARTER', 'OADR_Citizens Charter-Private APO.pdf', '2022-06-22 07:22:02', '7'),
(34, 'CITIZEN’S CHARTER', 'OADR_Citizens Charter-Public ADR Program.pdf', '2022-06-22 07:22:04', '7'),
(35, 'APPROVED ORGANIZATIONAL STRUCTURE', 'Approved-organizational-structure-1.pdf', '2022-06-22 07:23:10', '8'),
(36, 'dasdas', 'SAMPLE_PDF_-_Copy4.pdfpdf', '2022-06-23 08:40:10', ''),
(40, NULL, 'training_Ageement5.pdfpdf', '2022-06-24 05:44:49', ''),
(41, 'dasdas', 'SAMPLE_PDF_-_Copy10.pdfpdf', '2022-06-24 05:45:01', ''),
(42, 'dasdas', 'training_Ageement6.pdfpdf', '2022-06-24 05:45:01', ''),
(43, 'dasdas', 'SAMPLE_PDF_-_Copy11.pdfpdf', '2022-06-24 05:45:33', '13'),
(44, 'dasdas', 'training_Ageement7.pdfpdf', '2022-06-24 05:45:33', '13'),
(45, 'dasdas', 'SAMPLE_PDF_-_Copy12.pdfpdf', '2022-06-24 05:46:23', '13');

-- --------------------------------------------------------

--
-- Table structure for table `resources_category`
--

CREATE TABLE `resources_category` (
  `ID` int(100) NOT NULL,
  `categoryname` varchar(100) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp(),
  `date_updated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `resources_category`
--

INSERT INTO `resources_category` (`ID`, `categoryname`, `date_added`, `date_updated`) VALUES
(1, 'OADR IEC MATHERIALS', '2022-07-04 09:37:30', '2022-07-04 09:48:30'),
(2, 'OADR-ACCREDITED ADR PRACTITIONERS, APOs AND PUBLIC ADR PROGRAM', '2022-07-04 09:37:30', '2022-07-04 09:45:54'),
(3, 'OADR-TRAINED INDIVIDUALS', '2022-07-04 09:37:30', '2022-07-04 09:45:54'),
(4, 'ADR-RELATED LAWS, POLICIES AND ISSUANCES', '2022-07-04 09:37:30', '2022-07-04 09:45:54'),
(5, 'ADR TRAINING AND ORIENTATION SEMINAR SCHEDULES FOR 2022', '2022-07-04 09:37:30', '2022-07-04 09:45:54'),
(6, 'DOWNLOADABLE FORMS', '2022-07-04 09:37:30', '2022-07-04 09:45:54'),
(7, 'CITIZEN’S CHARTER', '2022-07-04 09:37:30', '2022-07-04 09:45:54'),
(8, 'APPROVED ORGANIZATIONAL STRUCTURE', '2022-07-04 09:37:30', '2022-07-04 09:45:54'),
(15, 'New Category name', '2022-07-09 08:52:20', '2022-07-09 08:59:02');

-- --------------------------------------------------------

--
-- Table structure for table `tokens`
--

CREATE TABLE `tokens` (
  `id` int(11) NOT NULL,
  `provider` varchar(255) NOT NULL,
  `provider_value` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tokens`
--

INSERT INTO `tokens` (`id`, `provider`, `provider_value`) VALUES
(1, 'google', '1//0evpT4CjDQbeoCgYIARAAGA4SNwF-L9Irv4r2qMsuSIRcZB50oaH23RScYcOKvQaeWL50pNS3vxgd5Mc49ERiyiOamNLLgkaVDM4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accomplishmentreport`
--
ALTER TABLE `accomplishmentreport`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `announcements`
--
ALTER TABLE `announcements`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `avm`
--
ALTER TABLE `avm`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `careers`
--
ALTER TABLE `careers`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `infographics`
--
ALTER TABLE `infographics`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `inquiries`
--
ALTER TABLE `inquiries`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `pcw`
--
ALTER TABLE `pcw`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `planbudget`
--
ALTER TABLE `planbudget`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `publications`
--
ALTER TABLE `publications`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `resources`
--
ALTER TABLE `resources`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `resources_category`
--
ALTER TABLE `resources_category`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tokens`
--
ALTER TABLE `tokens`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accomplishmentreport`
--
ALTER TABLE `accomplishmentreport`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `announcements`
--
ALTER TABLE `announcements`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `avm`
--
ALTER TABLE `avm`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `careers`
--
ALTER TABLE `careers`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `infographics`
--
ALTER TABLE `infographics`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `inquiries`
--
ALTER TABLE `inquiries`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `pcw`
--
ALTER TABLE `pcw`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `planbudget`
--
ALTER TABLE `planbudget`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `publications`
--
ALTER TABLE `publications`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `resources`
--
ALTER TABLE `resources`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `resources_category`
--
ALTER TABLE `resources_category`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tokens`
--
ALTER TABLE `tokens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
