-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2022 at 10:31 AM
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
(1, 'Administratorr', 'admin', 63123456789, '21232f297a57a5a743894a0e4a801fc3', 'Administrator', '2022-07-04 10:09:53'),
(3, 'Staff1', 'staff1', 116516641891, '1253208465b1efa876f982d8a9e73eef', 'Staff', '2022-07-04 10:09:53'),
(4, 'Staff2', 'staff2', 32321321321, '1253208465b1efa876f982d8a9e73eef', 'Staff', '2022-07-04 10:09:53'),
(5, 'Staff3', 'staff3', 2313213213, '1253208465b1efa876f982d8a9e73eef', 'Staff', '2022-07-04 10:09:53');

-- --------------------------------------------------------

--
-- Table structure for table `announcements`
--

CREATE TABLE `announcements` (
  `ID` int(100) NOT NULL,
  `announcement_title` varchar(100) NOT NULL,
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
(3, 'Work Announcement', '\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cill', 'd607f7ed116333190c4f40bdb9681569.jpg', '2022-07-04 09:41:45', '2022-07-04 09:41:45'),
(4, 'Supply and Delivery of Various Consumables for Printers', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable Eng', '97cc4c7ddb5525113558de6fcfcf2ad1.jpg', '2022-07-04 09:41:45', '2022-07-04 09:41:45'),
(5, 'OADR Announcement', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarr', '4d206752ebf5a9848cb859e3b18403f0.jpg', '2022-07-04 09:41:45', '2022-07-04 09:41:45'),
(6, 'Procurement and Delivery of Office Chairs and Tables (SANDEE\'S PRINT & COMPUTER CENTER) for the Regi', 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et h', '895dd757e48fecbb4748ee00961a367f.jpg', '2022-07-04 09:41:45', '2022-07-04 09:41:45');

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

--
-- Dumping data for table `careers`
--

INSERT INTO `careers` (`ID`, `Name`, `Email`, `PhoneNum`, `Category`, `status`, `resume_name`, `message`, `appnum`, `date_applied`, `date_edited`) VALUES
(1, 'John Doe', 'iamjimuel06@gmail.com', '4161465165156', 'Chief Administrative Officer', 'Rejected', '9da2948acee3e19bef36c59d123d0315.pdf', 'Test', '576726970997\n', '2022-07-04 10:06:13', '2022-07-04 10:08:11'),
(2, 'Niko Lustre', 'nikocaranguianlustre@gmail.com', '09458196993', 'Technical Consultant', 'Not Addressed', '681fb66f4420d3aedf108e3db65abdaa.pdf', 'im applying', '248177094633\n', '2022-07-08 06:53:07', '2022-07-11 04:14:23'),
(3, 'Niko Lustre', 'nikocaranguianlustre@gmail.com', '09458196993', 'Technical Consultant', 'Not Addressed', '681fb66f4420d3aedf108e3db65abdaa.pdf', 'Im applying', '62983290231\n', '2022-07-08 06:54:19', '2022-07-11 04:14:23'),
(4, 'Niko Lustre', 'nikocaranguianlustre@gmail.com', '09458196993', 'Technical Consultant', 'Not Addressed', '681fb66f4420d3aedf108e3db65abdaa.pdf', 'Im applying', '689846507057\n', '2022-07-08 06:54:52', '2022-07-11 04:14:23'),
(5, 'Niko Lustre', 'nikocaranguianlustre@gmail.com', '09458196993', 'Technical Consultant', 'Not Addressed', '681fb66f4420d3aedf108e3db65abdaa.pdf', 'help', '179972285840\n', '2022-07-08 07:15:01', '2022-07-11 04:14:23'),
(6, 'Niko Lustre', 'nikocaranguianlustre@gmail.com', '09458196993', 'Chief Administrative Officer', 'Not Addressed', '681fb66f4420d3aedf108e3db65abdaa.pdf', 'application', '697459169803\n', '2022-07-08 07:35:53', '2022-07-11 04:14:23'),
(7, 'Niko Lustre', 'nikocaranguianlustre@gmail.com', '09458196993', 'Chief Administrative Officer', 'Not Addressed', '681fb66f4420d3aedf108e3db65abdaa.pdf', 'app', '427809391085\n', '2022-07-08 07:53:00', '2022-07-11 04:14:23'),
(8, 'Niko Lustre', 'nikocaranguianlustre@gmail.com', '09458196993', 'Chief Administrative Officer', 'Not Addressed', '681fb66f4420d3aedf108e3db65abdaa.pdf', 'as', '300697402914\n', '2022-07-08 07:53:11', '2022-07-11 04:14:23'),
(9, 'Niko Lustre', 'nikocaranguianlustre@gmail.com', '09458196993', 'Chief Administrative Officer', 'Not Addressed', '681fb66f4420d3aedf108e3db65abdaa.pdf', 'I am applying', '363989121308\n', '2022-07-11 04:09:51', '2022-07-11 04:14:23'),
(10, 'Niko Lustre', 'nikocaranguianlustre@gmail.com', '09458196993', 'Chief Administrative Officer', 'Not Addressed', '681fb66f4420d3aedf108e3db65abdaa.pdf', 'I am applying', '525793179771\n', '2022-07-11 04:10:13', '2022-07-11 04:14:23'),
(11, 'Niko Lustre', 'nikocaranguianlustre@gmail.com', '09458196993', 'Chief Administrative Officer', 'Not Addressed', '681fb66f4420d3aedf108e3db65abdaa.pdf', 'I am applying for this position.', '534609235869\n', '2022-07-11 04:14:02', '2022-07-11 04:14:23'),
(12, 'Niko Lustre', 'nikocaranguianlustre@gmail.com', '09458196993', 'Chief Administrative Officer', 'Not Addressed', '681fb66f4420d3aedf108e3db65abdaa.pdf', 'Hello I am applying', '437807848777\n', '2022-07-11 04:14:23', '2022-07-11 04:14:23');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `ID` int(100) NOT NULL,
  `event_title` varchar(100) NOT NULL,
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
(1, 'Event 1', 'Test', 'be5ff92a90c6240002742c7f72b64c0e.jpg', '06/20/2022 01:00:00 PM', '06/20/2022 03:00:00 PM', '2022-07-04 09:55:43', '2022-07-04 09:55:43'),
(2, 'OADR Team Building Event', 'We will be having a team building event  that includes all the department next week monday.', '3812b84eb9d5e755d01f16a97e517fef.jpg', '07/12/2022 03:40:37 AM', '07/13/2022 02:59:37 PM', '2022-07-04 09:55:43', '2022-07-08 07:21:28'),
(3, 'Work Event', 'There will be an event in the weekdays', '1d7cfbf6a1e4e238caeddb2c06e1cdd2.jpg', '06/29/2022 11:58:04 AM', '06/30/2022 11:58:04 AM', '2022-07-04 09:55:43', '2022-07-04 09:55:43'),
(4, 'Important Holiday Event', 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat', 'b92ac6639aa0fa90fdd7a50b51902b87.jpg', '07/13/2022 09:22:37 AM', '07/13/2022 09:22:37 PM', '2022-07-04 09:55:43', '2022-07-08 07:27:44'),
(5, 'Work Event', 'There will be an event on the weekdays that will involve the employees.', 'ff4385e5aaff89a6a28614d1aa8781a4.jpg', '07/15/2022 12:00:00 PM', '07/16/2022 01:00:00 PM', '2022-07-08 05:46:16', '2022-07-08 07:22:13'),
(7, 'asdasd', 'asdasdasd', '412f1f2f6d87ffeadbc6d0b8d3428b86.jpg', '07/09/2022 09:00:00 AM', '07/11/2022 02:00:00 PM', '2022-07-08 06:39:58', '2022-07-08 07:21:08');

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
(1, 'Organizational Structure', 'cdcf7a3e9a5e4db3fd3a2e39b5a7770f.png', '2022-07-04 09:58:06', '2022-07-04 09:58:06'),
(2, 'IACM', '3208a89e20c56a0eec458926e3221735.PNG', '2022-07-08 07:55:52', '2022-07-08 07:55:52'),
(3, 'g', '9da999236ddf951439a71d35c1cff167.PNG', '2022-07-11 04:19:52', '2022-07-11 04:19:52'),
(4, 'books', '1910a9b2b5c92180574306e4eeecd257.jpg', '2022-07-11 04:20:32', '2022-07-11 04:21:08'),
(5, 'Freedom of Information', '7e2073d75f7273ee9aed9023fe028ca3.jpg', '2022-07-11 04:20:32', '2022-07-11 04:20:41');

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
(6, 'Niko Lusre', 'nikocaranguianlustre@gmail.com', 'Problem', 'Not Addressed', 'help', '561146926510\n', '2022-07-08 06:55:21', '2022-07-08 06:55:21'),
(7, 'Niko Lusre', 'nikocaranguianlustre@gmail.com', 'Problem', 'Not Addressed', 'help', '697146847421\n', '2022-07-08 07:09:49', '2022-07-08 07:09:49'),
(8, 'Niko Lusre', 'nikocaranguianlustre@gmail.com', 'Problem', 'Not Addressed', 'help', '836513152826\n', '2022-07-08 07:14:21', '2022-07-08 07:14:21'),
(9, 'Niko Lusre', 'nikocaranguianlustre@gmail.com', 'Problem', 'Not Addressed', 'help', '847931894002\n', '2022-07-08 08:02:06', '2022-07-08 08:02:06'),
(10, 'Niko Lusre', 'nikocaranguianlustre@gmail.com', 'Problem', 'Not Addressed', 'I am inquiring.', '868186181754\n', '2022-07-11 04:34:28', '2022-07-11 04:34:28'),
(11, 'Niko Lusre', 'nikocaranguianlustre@gmail.com', 'Problem', 'Not Addressed', 'I am inquiring', '106887987746\n', '2022-07-11 04:36:15', '2022-07-11 04:36:15');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `ID` int(100) NOT NULL,
  `news_title` varchar(100) NOT NULL,
  `news_content` varchar(1000) NOT NULL,
  `news_image` varchar(100) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp(),
  `date_edited` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`ID`, `news_title`, `news_content`, `news_image`, `date_added`, `date_edited`) VALUES
(1, 'President Rodrigo Duterte Greets OADR on its 18th Anniversary', 'President Rodrigo Duterte took time to greet the Office of Alternative Dispute Resolution as it celebrates the Republic Act No. 9285, the Alternative Dispute Resolution Act of 2004.\r\n\r\nAccording to President Duterte \"As a Unit of the Department of Justice, the OADR has faithfully performed its mandate to promote and facilitate alternative means of dispute resolution in adherence to the landmark legislation passed decades ago. I commend the agency for helping the Filipino public settle their conflicts in the most amicable manner to free them from the burdens of litigation\".\r\n\r\nAdditionally President Duterte said that    \"Let this occasion prompt you to reassess the established means of dispute resolution and explore new ways to handle the complex battles of a multifaceted, technology-driven and diverse society that is currently recovering from a global crisis. Diligence in your duty is a fulfillment of the government\'s promise to practice the speedy dispensation of justice. May we, as d', '4d464de9953306032d830784d5cc3399.png', '2022-07-04 09:50:27', '2022-07-04 09:50:27'),
(2, 'Lorem Ipsum Ipsum dolor sit amet News', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', '660cb082d4b2205f7d2b4df462d6fd0b.jpg', '2022-07-04 09:50:27', '2022-07-04 09:50:27'),
(3, 'Approved Organizational Structure for OADR', 'The Department of Justice – Office of Alternative Dispute Resolution Organizational Structure has been approved including the OSSP pursuant to Section 49, Chapter VII OF RA No. 9285. Consistent with existing guidelines on organization and staffing, we are pleased to inform you of the approval of the OSSP.\r\n\r\nAccording to the said approval, “In the evaluation of the OADR\'s proposal, we have considered the organizational structure and staffing which are deemed vital and supportive of the mandated functions of the Office under RA No. 9285 and consistent with the existing organizational and staffing standards and guidelines of the DBM. Specifically, we considered the agency\'s requirements for its start-up operations in the effective and efficient undertaking of its functions, programs and activities. The corresponding Notice of Organization, Staffing and Classification Action (NOSCA) reflecting the creation of positions in the OADR shall be issued by the Budget and Management Bureau for Se', '99259a5688cd096b06246412c523caf0.PNG', '2022-07-04 09:50:27', '2022-07-04 09:50:27'),
(4, 'Maybe News', '\"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?\"', 'ea267ea0a025c09d005c9ad6b9ef58cf.jpg', '2022-07-04 09:50:27', '2022-07-04 09:50:27'),
(5, 'Testing News', '\"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?\"', '063e6553a80e7df0489458d2a265e21f.jpg', '2022-07-04 09:50:27', '2022-07-08 04:31:05'),
(6, 'DOJ celebrates 2022 International AIDS Candlelight Memorial (IACM)', 'The Department of Justice celebrated the 2022 International AIDS Candlelight Memorial (IACM) on 16 May 2022 with the theme, “Keeping the light, honoring our rights, radiating pride.” The short program started with a message of support from Assistant Secretary Margaret V. Castillo-Padilla highlighting the Department’s adoption of non-discriminatory policy on HIV and AIDS that guaranteed a workplace environment free from HIV-related stigma and discrimination. She also underscored the programs and activities of the Department that championed the rights of people living with and affected by HIV (PLHIV) for the last four (4) years. Thereafter, ASec Padilla led the candlelighting ceremony and prayer. The event was participated in by Secretary Menardo I. Guevarra, Undersecretary Juliana G. Sunga, OIC Undersecretary Nicholas Felix L. Ty, Directors and Chiefs and other employees of the Department. She also thanked the Project Red Ribbon Care Management Foundation, a civil society organization-m', '16fdf821724a716fc5ff9cd7cc6fd974.PNG', '2022-07-04 09:50:27', '2022-07-04 09:50:27');

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
(45, 'dasdas', 'SAMPLE_PDF_-_Copy12.pdfpdf', '2022-06-24 05:46:23', '13'),
(46, 'dasdas', 'training_Ageement8.pdfpdf', '2022-06-24 05:46:23', '13');

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
(12, 'New Category', '2022-07-04 09:37:30', '2022-07-04 09:45:54'),
(13, 'dasdasdasdasdas', '2022-07-04 09:37:30', '2022-07-04 09:45:54');

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
(1, 'google', '1//0eZO6NrY2MdC7CgYIARAAGA4SNwF-L9IrrLv1TkRsaaifjd51nwv-QQNvwbTZ0u-ZNXmmx3SgmQO9aoPaQZBfwO4_pmtWJMn-zHE');

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `announcements`
--
ALTER TABLE `announcements`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `careers`
--
ALTER TABLE `careers`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `inquiries`
--
ALTER TABLE `inquiries`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `resources`
--
ALTER TABLE `resources`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `resources_category`
--
ALTER TABLE `resources_category`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tokens`
--
ALTER TABLE `tokens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
