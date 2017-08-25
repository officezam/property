-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2017 at 07:11 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `property`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_uses`
--

CREATE TABLE `about_uses` (
  `id` int(10) UNSIGNED NOT NULL,
  `key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_uses`
--

INSERT INTO `about_uses` (`id`, `key`, `description`, `created_at`, `updated_at`) VALUES
(1, 'AboutUs', '<h2>Project Overview</h2><h3><span>Why Multi Royal Villas?<br>Multi Royal Villas, just living is not enough. One must have sunshine, freedom and the fragrances of blooming flowers to make it a complete experience, Multi Royal Villas provides it all. Multi Royal Villas is a renowned name in B-17, Islamabad. We have been dealing in residential &amp; commercial plots and successfully developed couple of houses and two commercial buildings.</span><ul><li>A distinctly unique structure with its innovative design</li><li>A contemporary masterpiece and high-end landmark.</li><li>Gated Community.</li><li>24/7‘Multi Royal Villas, is an intelligently planned three, four and five bedrooms homes that redefines status and majestic brilliance.</li><li>A lifestyle with world-class amenities, a sprawling abode surrounded by lush green and embedded well into the suburban infrastructure.</li><li>Multi Royal Villas is an emerging hot-spot, real estate considered highly valued with proximity to those employed in Islamabad, Taxila and Wah.</li><li>It is one of the closest communities to the new Islamabad International Airport with minimal traccongestion during rush hours.</li><li>Innovative design details are incorporated in every aspect of the development from the creative use of community spaces to the open feel of the villas and terrace homes, which are easily adapted for non-residential Pakistanis or local residents</li><li>Residents have the choice between selections of home styles which will result in more diverse streetscapes.</li><li>Establishing Credibility with Hard Work Competence and Transparency</li></ul>MPCHS is a cooperative housing society establish under cooperative societies Act 1925 to promote investment in real estate and develop quality housing schemes on the principles of no profit no loss. Our aim is to protect and safeguard the legitimate interests of our members.We provide a forum to the buyers and sellers for transparent transactions and to earn a credible repute. Our Endeavor is to develop projects in accordance with the latest trends and highest standards of town planning, engineering, designing and constructions. For this purpose we avail the services of very highly qualified and experienced engineers, town planners and project consultants<div><br></div><div></div></h3>', NULL, '2017-04-09 14:57:15'),
(2, 'Privacy&Policy', 'In 2044, Jacq Vaucan – an insurance investigator for ROC, the company\r\n that manufactures Pilgrims – investigates a report from Wallace, a \r\npolice officer who shot a robot he claims was modifying itself. Jacq \r\ndiscovers the robot hid a rare nuclear battery that could power a robot \r\nindefinitely. The next day, Jacq follows a robot who was stealing parts.\r\n When he corners it, it self-immolates. Jacq salvages the remains and \r\nspeculates to his boss Robert that there may be a \"clocksmith\", someone \r\nwho illegally modifies robots, who is overriding the second protocol. \r\nIncredulous, Robert rejects this possibility but offers Jacq a transfer \r\nout of the city if he can find evidence. Jacq\'s pregnant wife initially \r\nrejects his plans but she eventually relents.\r\nJacq and Wallace investigate a brothel, where they find Cleo, a \r\nmodified robot that Wallace subsequently shoots in the leg. When Jacq \r\nobjects, Wallace says that Cleo\'s owner will lead them to the \r\nclocksmith; Wallace also threatens to kill Jacq if he does not split the\r\n proceeds of the battery on the black market. Jacq follows Cleo\'s owner \r\nto a clocksmith named Dr. Dupré, who claims not to know who altered \r\nCleo, an action that should destroy Cleo\'s CPU.\r\n Jacq leaves the burned robot\'s CPU with her and offers to give her the \r\nbattery if she can locate information on the clocksmith. When Dupré \r\ninstalls the modified CPU in Cleo, Cleo begins self-repairing. Dupré \r\ncontacts Jacq, who alerts Robert; however, ROC intercepts Jacq\'s message\r\n and sends a team of assassins to Dupré\'s lab.\r\n<span>Dupré is killed, but Jacq escapes in a car driven by Cleo. When Cleo takes them into a maze of <a href=\"https://en.wikipedia.org/wiki/Stanchion\" target=\"\" rel=\"\">stanchions</a>,\r\n both cars crash; the assassins are killed, and Jacq is severely \r\ninjured. Cleo takes Jacq with her into an radioactive desert, where they\r\n are joined by three other robots, none of whom will obey Jacq\'s orders.\r\n However, the first protocol forces them to prevent his death. Desperate\r\n to return to the city to be with his pregnant wife, Jacq makes contact \r\nwith Robert, who sends Wallace to recover him. Wallace threatens Jacq\'s \r\nlife and destroys two of the robots, who have objected to his actions; \r\nJacq kills Wallace with a flare gun before he can also destroy Cleo. \r\nWallace\'s partner flees after taking a battery from one of the robots.</span>\r\nRobert\'s boss reveals that the first built Pilgrim, unburdened by the\r\n second principle, designed the subsequent models. As no human could \r\nunderstand the programming, it was thought to be impossible to subvert. \r\nROC forces Robert to accompany a team sent to kill Jacq and the unknown \r\nclocksmith before the robots can evolve further beyond human \r\nunderstanding. When Robert objects to their kidnapping Jacq\'s wife and \r\nbaby daughter, Conway, the leader, shoots him and leaves him for dead. \r\nMeanwhile, Jacq meets the robot responsible for modifying the others. \r\nInitially skeptical, Jacq eventually accepts that the robot naturally \r\nevolved, like humanity. After a series of philosophical discussions, \r\nJacq gives them his battery, which they use to complete a new design. \r\nThe robots repair a vehicle for Jacq, and he leaves for the city.<br><br><u><i></i></u><br>', NULL, '2017-04-05 10:23:55'),
(3, 'Terms&condition', '<h3><b>Terms And Conditions</b></h3>In 2044, Jacq Vaucan – an insurance investigator for ROC, the company\n that manufactures Pilgrims – investigates a report from Wallace, a \npolice officer who shot a robot he claims was modifying itself. Jacq \ndiscovers the robot hid a rare nuclear battery that could power a robot \nindefinitely. The next day, Jacq follows a robot who was stealing parts.\n When he corners it, it self-immolates. Jacq salvages the remains and \nspeculates to his boss Robert that there may be a \"clocksmith\", someone \nwho illegally modifies robots, who is overriding the second protocol. \nIncredulous, Robert rejects this possibility but offers Jacq a transfer \nout of the city if he can find evidence. Jacq\'s pregnant wife initially \nrejects his plans but she eventually relents.\nJacq and Wallace investigate a brothel, where they find Cleo, a \nmodified robot that Wallace subsequently shoots in the leg. When Jacq \nobjects, Wallace says that Cleo\'s owner will lead them to the \nclocksmith; Wallace also threatens to kill Jacq if he does not split the\n proceeds of the battery on the black market. Jacq follows Cleo\'s owner \nto a clocksmith named Dr. Dupré, who claims not to know who altered \nCleo, an action that should destroy Cleo\'s CPU.\n Jacq leaves the burned robot\'s CPU with her and offers to give her the \nbattery if she can locate information on the clocksmith. When Dupré \ninstalls the modified CPU in Cleo, Cleo begins self-repairing. Dupré \ncontacts Jacq, who alerts Robert; however, ROC intercepts Jacq\'s message\n and sends a team of assassins to Dupré\'s lab.\n<span>Dupré is killed, but Jacq escapes in a car driven by Cleo. When Cleo takes them into a maze of <a href=\"https://en.wikipedia.org/wiki/Stanchion\" target=\"\" rel=\"\">stanchions</a>,\n both cars crash; the assassins are killed, and Jacq is severely \ninjured. Cleo takes Jacq with her into an radioactive desert, where they\n are joined by three other robots, none of whom will obey Jacq\'s orders.\n However, the first protocol forces them to prevent his death. Desperate\n to return to the city to be with his pregnant wife, Jacq makes contact \nwith Robert, who sends Wallace to recover him. Wallace threatens Jacq\'s \nlife and destroys two of the robots, who have objected to his actions; \nJacq kills Wallace with a flare gun before he can also destroy Cleo. \nWallace\'s partner flees after taking a battery from one of the robots.</span>\nRobert\'s boss reveals that the first built Pilgrim, unburdened by the\n second principle, designed the subsequent models. As no human could \nunderstand the programming, it was thought to be impossible to subvert. \nROC forces Robert to accompany a team sent to kill Jacq and the unknown \nclocksmith before the robots can evolve further beyond human \nunderstanding. When Robert objects to their kidnapping Jacq\'s wife and \nbaby daughter, Conway, the leader, shoots him and leaves him for dead. \nMeanwhile, Jacq meets the robot responsible for modifying the others. \nInitially skeptical, Jacq eventually accepts that the robot naturally \nevolved, like humanity. After a series of philosophical discussions, \nJacq gives them his battery, which they use to complete a new design. \nThe robots repair a vehicle for Jacq, and he leaves for the city.<br>', NULL, '2017-04-05 10:46:25'),
(4, 'contactus', '<div><h4>Need help searching on&nbsp;Houzez?</h4>If you&nbsp;forgot&nbsp;your password or want to change your email preferences, use the links below:<ul><li><a target=\"\" rel=\"\">Forgot Password?</a></li><li><a target=\"\" rel=\"\">Edit email preferences / Unsubscribe</a></li></ul></div><div><h4>Still need help?</h4><span>If you didn’t find the answer to your question, please&nbsp;<a target=\"\" rel=\"\">contact us</a>&nbsp;and a member of our customer support team will gladly assist you.</span></div><div><h4>Contact Us</h4>To contact Houzez, please select one of the following:<ul><li><a target=\"\" rel=\"\">Renter questions</a></li><li><a target=\"\" rel=\"\">Property manager questions</a></li><li><a target=\"\" rel=\"\">Business opportunity questions</a></li><li><a target=\"\" rel=\"\">Careers opportunity&nbsp;questions</a></li><li><a target=\"\" rel=\"\">Customer Support</a></li></ul></div>', NULL, '2017-04-09 17:09:40');

-- --------------------------------------------------------

--
-- Table structure for table `adds`
--

CREATE TABLE `adds` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `webSite_url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `adds`
--

INSERT INTO `adds` (`id`, `image`, `webSite_url`, `user_id`, `status`, `created_at`, `updated_at`) VALUES
(2, '2_1490382134.jpg', 'http://dev.thewholefact.com/add_property', 1, 0, '2017-03-24 21:02:13', '2017-03-25 06:03:30'),
(3, '3_1490382186.jpg', 'https://www.24hours.pk/23-march-khudkush-deals/pakistan', 1, 0, '2017-03-24 21:03:06', '2017-03-24 21:05:34'),
(4, '4_1490382251.jpg', 'https://www.24hours.pk/23-march-khudkush-deals/pakistan', 1, 0, '2017-03-24 21:04:10', '2017-03-24 21:04:11');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(10) UNSIGNED NOT NULL,
  `blog_post` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `blog_post`, `image`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'good', '1_1492622072.jpg', 1, '2017-04-20 00:14:31', '2017-04-20 00:14:54'),
(2, '<div><br></div><div><span>You received this message because&nbsp;<a target=\"\" rel=\"\">officezam@gmail.com</a>&nbsp;is listed as the recovery email for&nbsp;<a target=\"\" rel=\"\">soooperchef@gmail.com</a>. If&nbsp;<a target=\"\" rel=\"\">soooperchef@gmail.com</a>&nbsp;is not your Google Account,&nbsp;<a href=\"https://accounts.google.com/AccountDisavow?adt=AOX8kiqmmm2uLEq7IQKWNMZFGO7BSWo09GfNSprlcPCvG-wOkQvkx_C1Ijn3EPKR\" target=\"_blank\" rel=\"\">click here to disconnect</a>&nbsp;from that account and stop receiving emails.<br><br></span></div><div><span>You received this message because&nbsp;<a target=\"\" rel=\"\">officezam@gmail.com</a>&nbsp;is listed as the recovery email for&nbsp;<a target=\"\" rel=\"\">soooperchef@gmail.com</a>. If&nbsp;<a target=\"\" rel=\"\">soooperchef@gmail.com</a>&nbsp;is not your Google Account,&nbsp;<a href=\"https://accounts.google.com/AccountDisavow?adt=AOX8kiqmmm2uLEq7IQKWNMZFGO7BSWo09GfNSprlcPCvG-wOkQvkx_C1Ijn3EPKR\" target=\"_blank\" rel=\"\">click here to disconnect</a>&nbsp;from that account and stop receiving emails.<br><br></span></div><div><span>You received this message because&nbsp;<a target=\"\" rel=\"\">officezam@gmail.com</a>&nbsp;is listed as the recovery email for&nbsp;<a target=\"\" rel=\"\">soooperchef@gmail.com</a>. If&nbsp;<a target=\"\" rel=\"\">soooperchef@gmail.com</a>&nbsp;is not your Google Account,&nbsp;<a href=\"https://accounts.google.com/AccountDisavow?adt=AOX8kiqmmm2uLEq7IQKWNMZFGO7BSWo09GfNSprlcPCvG-wOkQvkx_C1Ijn3EPKR\" target=\"_blank\" rel=\"\">click here to disconnect</a>&nbsp;from that account and stop receiving emails.<br><br></span></div><div><span>You received this message because&nbsp;<a target=\"\" rel=\"\">officezam@gmail.com</a>&nbsp;is listed as the recovery email for&nbsp;<a target=\"\" rel=\"\">soooperchef@gmail.com</a>. If&nbsp;<a target=\"\" rel=\"\">soooperchef@gmail.com</a>&nbsp;is not your Google Account,&nbsp;<a href=\"https://accounts.google.com/AccountDisavow?adt=AOX8kiqmmm2uLEq7IQKWNMZFGO7BSWo09GfNSprlcPCvG-wOkQvkx_C1Ijn3EPKR\" target=\"_blank\" rel=\"\">click here to disconnect</a>&nbsp;from that account and stop receiving emails.<br>	You received this message because officezam@gmail.com is listed as the recovery email for soooperchef@gmail.com. If soooperchef@gmail.com is not your Google Account, click here to disconnect from that account and stop receiving emails.<br></span></div>', '2_1492948515.jpg', 1, '2017-04-23 18:55:15', '2017-04-23 18:56:02'),
(3, '<h1>Home Appraisals: 5 Things Buyers Should Watch Out For</h1><span>If the house appraisal comes in less than the agreed-on price, you could be left to make up the difference out of pocket, since lenders approve loans based on the appraised value, not the contract price. It’s possible the sellers will drop the price of that Boston, MA, real estate to match the appraisal. After all, if the home appraised low once, it could very well appraise low again. But if the sellers won’t budge — maybe they have an all-cash backup offer in the wings — it could mean back to the drawing board for you. Be prepared; here’s what you need to know about all the ins and outs of the appraisal process.<br></span><h1>Home Appraisals: 5 Things Buyers Should Watch Out For</h1>If the house appraisal comes in less than the agreed-on price, you could be left to make up the difference out of pocket, since lenders approve loans based on the appraised value, not the contract price. It’s possible the sellers will drop the price of that Boston, MA, real estate to match the appraisal. After all, if the home appraised low once, it could very well appraise low again. But if the sellers won’t budge — maybe they have an all-cash backup offer in the wings — it could mean back to the drawing board for you. Be prepared; here’s what you need to know about all the ins and outs of the appraisal process.', '3_1492975667.jpg', 1, '2017-04-24 02:27:47', '2017-04-24 02:27:48'),
(4, '<pre><h1>Home Appraisals: 5 Things Buyers Should Watch Out For</h1>If the house appraisal comes in less than the agreed-on price, you could be left to make up the difference out of pocket, since lenders approve loans based on the appraised value, not the contract price. It’s possible the sellers will drop the price of that Boston, MA, real estate to match the appraisal. After all, if the home appraised low once, it could very well appraise low again. But if the sellers won’t budge — maybe they have an all-cash backup offer in the wings — it could mean back to the drawing board for you. Be prepared; here’s what you need to know about all the ins and outs of the appraisal process.\r\n<h1>Home Appraisals: 5 Things Buyers Should Watch Out For</h1>If the house appraisal comes in less than the agreed-on price, you could be left to make up the difference out of pocket, since lenders approve loans based on the appraised value, not the contract price. It’s possible the sellers will drop the price of that Boston, MA, real estate to match the appraisal. After all, if the home appraised low once, it could very well appraise low again. But if the sellers won’t budge — maybe they have an all-cash backup offer in the wings — it could mean back to the drawing board for you. Be prepared; here’s what you need to know about all the ins and outs of the appraisal process.\r\n</pre>', '4_1492975753.jpg', 1, '2017-04-24 02:29:13', '2017-04-24 02:29:13'),
(5, '<h1>Home Appraisals: 5 Things Buyers Should Watch Out For</h1><span>If the house appraisal comes in less than the agreed-on price, you could be left to make up the difference out of pocket, since lenders approve loans based on the appraised value, not the contract price. It’s possible the sellers will drop the price of that Boston, MA, real estate to match the appraisal. After all, if the home appraised low once, it could very well appraise low again. But if the sellers won’t budge — maybe they have an all-cash backup offer in the wings — it could mean back to the drawing board for you. Be prepared; here’s what you need to know about all the ins and outs of the appraisal process.<br></span><h1>Home Appraisals: 5 Things Buyers Should Watch Out For</h1>If the house appraisal comes in less than the agreed-on price, you could be left to make up the difference out of pocket, since lenders approve loans based on the appraised value, not the contract price. It’s possible the sellers will drop the price of that Boston, MA, real estate to match the appraisal. After all, if the home appraised low once, it could very well appraise low again. But if the sellers won’t budge — maybe they have an all-cash backup offer in the wings — it could mean back to the drawing board for you. Be prepared; here’s what you need to know about all the ins and outs of the appraisal process.<br>', '5_1492975986.jpg', 1, '2017-04-24 02:33:06', '2017-04-24 02:33:06');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zipcode` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`id`, `name`, `zipcode`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'D G Khan', '60000', '2017-03-18 20:16:37', '2017-03-20 20:19:16', NULL),
(2, 'Lahore', '68888', '2017-03-18 20:53:12', '2017-03-18 20:53:12', NULL),
(3, 'karachi', '40000', '2017-03-19 12:25:32', '2017-03-19 12:25:32', NULL),
(4, 'Islamabad', '30000', '2017-03-19 12:25:46', '2017-03-19 12:25:46', NULL),
(5, 'Multan', '4000', '2017-03-20 04:21:22', '2017-03-20 04:21:22', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `comment`, `blog_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Hi', 1, 1, '2017-04-23 18:47:31', '2017-04-23 18:47:31');

-- --------------------------------------------------------

--
-- Table structure for table `contact_uses`
--

CREATE TABLE `contact_uses` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_uses`
--

INSERT INTO `contact_uses` (`id`, `email`, `phone`, `subject`, `status`, `message`, `created_at`, `updated_at`) VALUES
(1, 'officezam@gmail.com', '03007272332', 'subject', 2, 'Good Message', '2017-04-09 15:18:13', '2017-04-09 15:18:13');

-- --------------------------------------------------------

--
-- Table structure for table `feature`
--

CREATE TABLE `feature` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `feature`
--

INSERT INTO `feature` (`id`, `name`, `type`, `created_at`, `updated_at`) VALUES
(5, 'Internet', '', '2017-03-19 09:55:46', '2017-03-19 11:56:27'),
(6, 'Generator', '', '2017-03-19 10:06:30', '2017-03-19 11:56:08'),
(9, 'UPS', '', '2017-03-19 11:56:44', '2017-03-19 11:56:44'),
(10, 'Front Lawn', '', '2017-03-19 11:56:58', '2017-03-19 11:56:58'),
(11, 'Back Yard', '', '2017-03-19 11:57:22', '2017-03-19 11:57:22'),
(12, 'Garage', '', '2017-03-19 11:57:36', '2017-03-19 11:57:36'),
(13, 'Parking', '', '2017-03-19 11:57:51', '2017-03-19 11:57:51'),
(14, 'Lift', '', '2017-03-19 11:58:11', '2017-03-19 11:58:11'),
(15, 'Serviced Apartments', '', '2017-03-19 11:58:26', '2017-03-19 11:58:26'),
(16, 'Heating', '', '2017-03-19 11:58:43', '2017-03-19 11:58:43'),
(17, 'Electricity', 'land', '2017-03-19 11:59:02', '2017-04-24 18:25:01'),
(18, 'Gas', '', '2017-03-19 11:59:12', '2017-03-19 11:59:12'),
(19, 'Water', 'house', '2017-03-19 11:59:25', '2017-04-24 18:24:42'),
(20, 'Air Condition', 'house', '2017-03-19 11:59:42', '2017-04-24 18:24:51'),
(21, 'Mobile Services Coverage', 'projects', '2017-03-19 12:51:54', '2017-04-24 18:24:33'),
(22, 'Generator', 'projects', '2017-04-23 03:04:50', '2017-04-23 03:04:50');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `queue`, `payload`, `attempts`, `reserved_at`, `available_at`, `created_at`) VALUES
(1, 'default', '{\"displayName\":\"App\\\\Jobs\\\\ExpireEmailLink\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"timeout\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\ExpireEmailLink\",\"command\":\"O:24:\\\"App\\\\Jobs\\\\ExpireEmailLink\\\":5:{s:4:\\\"data\\\";i:6;s:6:\\\"\\u0000*\\u0000job\\\";N;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:5:\\\"delay\\\";O:13:\\\"Carbon\\\\Carbon\\\":3:{s:4:\\\"date\\\";s:26:\\\"2017-04-06 18:45:04.000000\\\";s:13:\\\"timezone_type\\\";i:3;s:8:\\\"timezone\\\";s:3:\\\"UTC\\\";}}\"}}', 0, NULL, 1491504304, 1491504184),
(2, 'default', '{\"displayName\":\"App\\\\Jobs\\\\ExpireEmailLink\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"timeout\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\ExpireEmailLink\",\"command\":\"O:24:\\\"App\\\\Jobs\\\\ExpireEmailLink\\\":5:{s:4:\\\"data\\\";i:7;s:6:\\\"\\u0000*\\u0000job\\\";N;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:5:\\\"delay\\\";O:13:\\\"Carbon\\\\Carbon\\\":3:{s:4:\\\"date\\\";s:26:\\\"2017-04-06 18:49:15.000000\\\";s:13:\\\"timezone_type\\\";i:3;s:8:\\\"timezone\\\";s:3:\\\"UTC\\\";}}\"}}', 0, NULL, 1491504555, 1491504435),
(3, 'default', '{\"displayName\":\"App\\\\Jobs\\\\ExpireEmailLink\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"timeout\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\ExpireEmailLink\",\"command\":\"O:24:\\\"App\\\\Jobs\\\\ExpireEmailLink\\\":5:{s:4:\\\"data\\\";i:8;s:6:\\\"\\u0000*\\u0000job\\\";N;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:5:\\\"delay\\\";O:13:\\\"Carbon\\\\Carbon\\\":3:{s:4:\\\"date\\\";s:26:\\\"2017-04-06 18:55:04.000000\\\";s:13:\\\"timezone_type\\\";i:3;s:8:\\\"timezone\\\";s:3:\\\"UTC\\\";}}\"}}', 0, NULL, 1491504904, 1491504784),
(4, 'default', '{\"displayName\":\"App\\\\Jobs\\\\ExpireEmailLink\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"timeout\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\ExpireEmailLink\",\"command\":\"O:24:\\\"App\\\\Jobs\\\\ExpireEmailLink\\\":5:{s:4:\\\"data\\\";i:9;s:6:\\\"\\u0000*\\u0000job\\\";N;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:5:\\\"delay\\\";O:13:\\\"Carbon\\\\Carbon\\\":3:{s:4:\\\"date\\\";s:26:\\\"2017-04-06 19:14:12.000000\\\";s:13:\\\"timezone_type\\\";i:3;s:8:\\\"timezone\\\";s:3:\\\"UTC\\\";}}\"}}', 0, NULL, 1491506052, 1491505932),
(5, 'default', '{\"displayName\":\"App\\\\Jobs\\\\ExpireEmailLink\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"timeout\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\ExpireEmailLink\",\"command\":\"O:24:\\\"App\\\\Jobs\\\\ExpireEmailLink\\\":5:{s:4:\\\"data\\\";i:10;s:6:\\\"\\u0000*\\u0000job\\\";N;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:5:\\\"delay\\\";O:13:\\\"Carbon\\\\Carbon\\\":3:{s:4:\\\"date\\\";s:26:\\\"2017-04-06 19:24:01.000000\\\";s:13:\\\"timezone_type\\\";i:3;s:8:\\\"timezone\\\";s:3:\\\"UTC\\\";}}\"}}', 0, NULL, 1491506641, 1491506521),
(6, 'default', '{\"displayName\":\"App\\\\Jobs\\\\ExpireEmailLink\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"timeout\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\ExpireEmailLink\",\"command\":\"O:24:\\\"App\\\\Jobs\\\\ExpireEmailLink\\\":5:{s:4:\\\"data\\\";i:11;s:6:\\\"\\u0000*\\u0000job\\\";N;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:5:\\\"delay\\\";O:13:\\\"Carbon\\\\Carbon\\\":3:{s:4:\\\"date\\\";s:26:\\\"2017-04-06 20:00:32.000000\\\";s:13:\\\"timezone_type\\\";i:3;s:8:\\\"timezone\\\";s:3:\\\"UTC\\\";}}\"}}', 0, NULL, 1491508832, 1491508712),
(7, 'default', '{\"displayName\":\"App\\\\Jobs\\\\ExpireEmailLink\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"timeout\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\ExpireEmailLink\",\"command\":\"O:24:\\\"App\\\\Jobs\\\\ExpireEmailLink\\\":5:{s:4:\\\"data\\\";i:14;s:6:\\\"\\u0000*\\u0000job\\\";N;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:5:\\\"delay\\\";O:13:\\\"Carbon\\\\Carbon\\\":3:{s:4:\\\"date\\\";s:26:\\\"2017-04-13 21:24:41.630138\\\";s:13:\\\"timezone_type\\\";i:3;s:8:\\\"timezone\\\";s:3:\\\"UTC\\\";}}\"}}', 0, NULL, 1492118681, 1492118561),
(8, 'default', '{\"displayName\":\"App\\\\Jobs\\\\ExpireEmailLink\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"timeout\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\ExpireEmailLink\",\"command\":\"O:24:\\\"App\\\\Jobs\\\\ExpireEmailLink\\\":5:{s:4:\\\"data\\\";i:15;s:6:\\\"\\u0000*\\u0000job\\\";N;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:5:\\\"delay\\\";O:13:\\\"Carbon\\\\Carbon\\\":3:{s:4:\\\"date\\\";s:26:\\\"2017-04-13 21:25:29.120907\\\";s:13:\\\"timezone_type\\\";i:3;s:8:\\\"timezone\\\";s:3:\\\"UTC\\\";}}\"}}', 0, NULL, 1492118729, 1492118609),
(9, 'default', '{\"displayName\":\"App\\\\Jobs\\\\ExpireEmailLink\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"timeout\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\ExpireEmailLink\",\"command\":\"O:24:\\\"App\\\\Jobs\\\\ExpireEmailLink\\\":5:{s:4:\\\"data\\\";i:16;s:6:\\\"\\u0000*\\u0000job\\\";N;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:5:\\\"delay\\\";O:13:\\\"Carbon\\\\Carbon\\\":3:{s:4:\\\"date\\\";s:26:\\\"2017-04-13 21:34:41.855108\\\";s:13:\\\"timezone_type\\\";i:3;s:8:\\\"timezone\\\";s:3:\\\"UTC\\\";}}\"}}', 0, NULL, 1492119281, 1492119161),
(10, 'default', '{\"displayName\":\"App\\\\Jobs\\\\ExpireEmailLink\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"timeout\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\ExpireEmailLink\",\"command\":\"O:24:\\\"App\\\\Jobs\\\\ExpireEmailLink\\\":5:{s:4:\\\"data\\\";i:17;s:6:\\\"\\u0000*\\u0000job\\\";N;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:5:\\\"delay\\\";O:13:\\\"Carbon\\\\Carbon\\\":3:{s:4:\\\"date\\\";s:26:\\\"2017-04-28 22:37:18.700436\\\";s:13:\\\"timezone_type\\\";i:3;s:8:\\\"timezone\\\";s:3:\\\"UTC\\\";}}\"}}', 0, NULL, 1493419038, 1493418919),
(11, 'default', '{\"displayName\":\"App\\\\Jobs\\\\ExpireEmailLink\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"timeout\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\ExpireEmailLink\",\"command\":\"O:24:\\\"App\\\\Jobs\\\\ExpireEmailLink\\\":5:{s:4:\\\"data\\\";i:28;s:6:\\\"\\u0000*\\u0000job\\\";N;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:5:\\\"delay\\\";O:13:\\\"Carbon\\\\Carbon\\\":3:{s:4:\\\"date\\\";s:26:\\\"2017-05-26 10:33:22.483250\\\";s:13:\\\"timezone_type\\\";i:3;s:8:\\\"timezone\\\";s:3:\\\"UTC\\\";}}\"}}', 0, NULL, 1495794802, 1495794682),
(12, 'default', '{\"displayName\":\"App\\\\Jobs\\\\ExpireEmailLink\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"timeout\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\ExpireEmailLink\",\"command\":\"O:24:\\\"App\\\\Jobs\\\\ExpireEmailLink\\\":5:{s:4:\\\"data\\\";i:29;s:6:\\\"\\u0000*\\u0000job\\\";N;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:5:\\\"delay\\\";O:13:\\\"Carbon\\\\Carbon\\\":3:{s:4:\\\"date\\\";s:26:\\\"2017-05-26 11:19:58.245020\\\";s:13:\\\"timezone_type\\\";i:3;s:8:\\\"timezone\\\";s:3:\\\"UTC\\\";}}\"}}', 0, NULL, 1495797598, 1495797478),
(13, 'default', '{\"displayName\":\"App\\\\Jobs\\\\ExpireEmailLink\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"timeout\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\ExpireEmailLink\",\"command\":\"O:24:\\\"App\\\\Jobs\\\\ExpireEmailLink\\\":5:{s:4:\\\"data\\\";i:30;s:6:\\\"\\u0000*\\u0000job\\\";N;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:5:\\\"delay\\\";O:13:\\\"Carbon\\\\Carbon\\\":3:{s:4:\\\"date\\\";s:26:\\\"2017-05-26 11:20:57.445259\\\";s:13:\\\"timezone_type\\\";i:3;s:8:\\\"timezone\\\";s:3:\\\"UTC\\\";}}\"}}', 0, NULL, 1495797657, 1495797537),
(14, 'default', '{\"displayName\":\"App\\\\Jobs\\\\ExpireEmailLink\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"timeout\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\ExpireEmailLink\",\"command\":\"O:24:\\\"App\\\\Jobs\\\\ExpireEmailLink\\\":5:{s:4:\\\"data\\\";i:31;s:6:\\\"\\u0000*\\u0000job\\\";N;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:5:\\\"delay\\\";O:13:\\\"Carbon\\\\Carbon\\\":3:{s:4:\\\"date\\\";s:26:\\\"2017-05-26 11:24:56.805976\\\";s:13:\\\"timezone_type\\\";i:3;s:8:\\\"timezone\\\";s:3:\\\"UTC\\\";}}\"}}', 0, NULL, 1495797896, 1495797776),
(15, 'default', '{\"displayName\":\"App\\\\Jobs\\\\ExpireEmailLink\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"timeout\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\ExpireEmailLink\",\"command\":\"O:24:\\\"App\\\\Jobs\\\\ExpireEmailLink\\\":5:{s:4:\\\"data\\\";i:32;s:6:\\\"\\u0000*\\u0000job\\\";N;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:5:\\\"delay\\\";O:13:\\\"Carbon\\\\Carbon\\\":3:{s:4:\\\"date\\\";s:26:\\\"2017-05-26 11:26:44.683380\\\";s:13:\\\"timezone_type\\\";i:3;s:8:\\\"timezone\\\";s:3:\\\"UTC\\\";}}\"}}', 0, NULL, 1495798004, 1495797884),
(16, 'default', '{\"displayName\":\"App\\\\Jobs\\\\ExpireEmailLink\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"timeout\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\ExpireEmailLink\",\"command\":\"O:24:\\\"App\\\\Jobs\\\\ExpireEmailLink\\\":5:{s:4:\\\"data\\\";i:47;s:6:\\\"\\u0000*\\u0000job\\\";N;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:5:\\\"delay\\\";O:13:\\\"Carbon\\\\Carbon\\\":3:{s:4:\\\"date\\\";s:26:\\\"2017-05-26 12:35:45.138998\\\";s:13:\\\"timezone_type\\\";i:3;s:8:\\\"timezone\\\";s:3:\\\"UTC\\\";}}\"}}', 0, NULL, 1495802145, 1495802025),
(17, 'default', '{\"displayName\":\"App\\\\Jobs\\\\ExpireEmailLink\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"timeout\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\ExpireEmailLink\",\"command\":\"O:24:\\\"App\\\\Jobs\\\\ExpireEmailLink\\\":5:{s:4:\\\"data\\\";i:48;s:6:\\\"\\u0000*\\u0000job\\\";N;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:5:\\\"delay\\\";O:13:\\\"Carbon\\\\Carbon\\\":3:{s:4:\\\"date\\\";s:26:\\\"2017-05-26 12:37:19.670037\\\";s:13:\\\"timezone_type\\\";i:3;s:8:\\\"timezone\\\";s:3:\\\"UTC\\\";}}\"}}', 0, NULL, 1495802239, 1495802119),
(18, 'default', '{\"displayName\":\"App\\\\Jobs\\\\ExpireEmailLink\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"timeout\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\ExpireEmailLink\",\"command\":\"O:24:\\\"App\\\\Jobs\\\\ExpireEmailLink\\\":5:{s:4:\\\"data\\\";i:49;s:6:\\\"\\u0000*\\u0000job\\\";N;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:5:\\\"delay\\\";O:13:\\\"Carbon\\\\Carbon\\\":3:{s:4:\\\"date\\\";s:26:\\\"2017-05-26 12:37:59.729993\\\";s:13:\\\"timezone_type\\\";i:3;s:8:\\\"timezone\\\";s:3:\\\"UTC\\\";}}\"}}', 0, NULL, 1495802279, 1495802159),
(19, 'default', '{\"displayName\":\"App\\\\Jobs\\\\ExpireEmailLink\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"timeout\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\ExpireEmailLink\",\"command\":\"O:24:\\\"App\\\\Jobs\\\\ExpireEmailLink\\\":5:{s:4:\\\"data\\\";i:50;s:6:\\\"\\u0000*\\u0000job\\\";N;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:5:\\\"delay\\\";O:13:\\\"Carbon\\\\Carbon\\\":3:{s:4:\\\"date\\\";s:26:\\\"2017-05-26 12:38:34.906886\\\";s:13:\\\"timezone_type\\\";i:3;s:8:\\\"timezone\\\";s:3:\\\"UTC\\\";}}\"}}', 0, NULL, 1495802314, 1495802194),
(20, 'default', '{\"displayName\":\"App\\\\Jobs\\\\ExpireEmailLink\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"timeout\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\ExpireEmailLink\",\"command\":\"O:24:\\\"App\\\\Jobs\\\\ExpireEmailLink\\\":5:{s:4:\\\"data\\\";i:2;s:6:\\\"\\u0000*\\u0000job\\\";N;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:5:\\\"delay\\\";O:13:\\\"Carbon\\\\Carbon\\\":3:{s:4:\\\"date\\\";s:26:\\\"2017-05-27 18:04:08.634397\\\";s:13:\\\"timezone_type\\\";i:3;s:8:\\\"timezone\\\";s:3:\\\"UTC\\\";}}\"}}', 0, NULL, 1495908248, 1495908128);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(20, '2014_10_12_100000_create_password_resets_table', 1),
(21, '2017_02_24_214946_create_city_table', 1),
(22, '2017_02_24_215430_create_packages_table', 1),
(23, '2017_02_24_215521_create_permissions_table', 1),
(24, '2017_02_24_215749_create_package_permission_table', 1),
(25, '2017_03_01_092528_create_jobs_table', 1),
(27, '2017_03_18_182425_create_feature_table', 1),
(28, '2017_03_18_182828_create_services_table', 1),
(29, '2017_03_19_110213_create_property_features_table', 1),
(30, '2017_03_19_110244_create_property_services_table', 1),
(31, '2017_03_20_103641_create_adds_table', 1),
(32, '2017_04_02_123812_create_ratings_table', 1),
(33, '2017_04_02_143605_create_social_acounts_table', 1),
(34, '2017_04_02_143654_create_about_uses_table', 1),
(35, '2017_04_07_194301_create_contact_uses_table', 1),
(37, '2017_04_14_063421_create_blogs_table', 2),
(38, '2017_04_14_064210_create_comments_table', 2),
(39, '2017_04_17_034204_create_replies_table', 2),
(41, '2017_04_16_185930_create_property_docs_table', 3),
(46, '2017_03_14_073908_create_property_table', 4),
(47, '2014_10_12_000000_create_users_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` char(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`id`, `name`, `description`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Basic (FREE)', 'Free Package For Every One.Limited Listing', '2017-03-20 04:25:03', '2017-03-20 04:25:03', NULL),
(2, 'NOVA', '5 hot Listing', '2017-03-20 04:28:45', '2017-03-20 04:28:45', NULL),
(3, 'SUPER NOVA', '10 Hot Listing and Many more Features', '2017-03-20 04:29:17', '2017-03-20 04:29:17', NULL),
(4, 'HYPER NOVA', '20 Hot Listings and All Feature For Long Time period', '2017-03-20 04:30:02', '2017-03-20 04:30:02', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `package_permission`
--

CREATE TABLE `package_permission` (
  `id` int(10) UNSIGNED NOT NULL,
  `package_id` int(11) NOT NULL,
  `permission_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `package_permission`
--

INSERT INTO `package_permission` (`id`, `package_id`, `permission_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(4, 2, 1, NULL, NULL, NULL),
(5, 2, 2, NULL, NULL, NULL),
(6, 2, 3, NULL, NULL, NULL),
(7, 2, 4, NULL, NULL, NULL),
(8, 2, 10, NULL, NULL, NULL),
(9, 2, 11, NULL, NULL, NULL),
(10, 4, 2, NULL, NULL, NULL),
(11, 4, 3, NULL, NULL, NULL),
(12, 4, 4, NULL, NULL, NULL),
(13, 4, 5, NULL, NULL, NULL),
(14, 4, 6, NULL, NULL, NULL),
(15, 4, 7, NULL, NULL, NULL),
(16, 4, 8, NULL, NULL, NULL),
(17, 3, 2, NULL, NULL, NULL),
(18, 3, 3, NULL, NULL, NULL),
(19, 3, 4, NULL, NULL, NULL),
(20, 3, 5, NULL, NULL, NULL),
(21, 3, 6, NULL, NULL, NULL),
(22, 1, 2, NULL, NULL, NULL),
(23, 1, 3, NULL, NULL, NULL),
(24, 1, 10, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Hot Listings', '2017-03-20 04:25:55', '2017-03-20 04:25:55', NULL),
(2, 'Unlimited Property Listing Credits', '2017-03-20 04:26:07', '2017-03-20 04:26:07', NULL),
(3, 'Business Web Page & Sub Domain', '2017-03-20 04:26:20', '2017-03-20 04:26:20', NULL),
(4, 'Verfied Agent', '2017-03-20 04:26:33', '2017-03-20 04:26:33', NULL),
(5, 'Featured Agent', '2017-03-20 04:26:45', '2017-03-20 04:26:45', NULL),
(6, 'Dsiplay Logo/Name in Search Listing', '2017-03-20 04:26:57', '2017-03-20 04:26:57', NULL),
(7, 'Display Contact Number', '2017-03-20 04:27:08', '2017-03-20 04:27:08', NULL),
(8, 'YouTube Promotion', '2017-03-20 04:27:20', '2017-03-20 04:27:20', NULL),
(9, 'News Article & Interview', '2017-03-20 04:27:33', '2017-03-20 04:27:33', NULL),
(10, 'Monthly Newsletter', '2017-03-20 04:27:43', '2017-03-20 04:27:43', NULL),
(11, 'Business Services', '2017-03-20 04:27:57', '2017-03-20 04:27:57', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `property`
--

CREATE TABLE `property` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `purpose` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtype` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `latitude` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `longitude` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `beds` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bathroom` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kitchens` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `area` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `area_unit` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size3` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size4` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rate1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rate2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rate3` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rate4` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `height` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `width` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image0` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image3` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image4` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pdf` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `propertexpire` date DEFAULT NULL,
  `remember_token` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` int(10) UNSIGNED DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `property`
--

INSERT INTO `property` (`id`, `title`, `description`, `purpose`, `type`, `subtype`, `city`, `latitude`, `longitude`, `beds`, `bathroom`, `kitchens`, `area`, `area_unit`, `size1`, `size2`, `size3`, `size4`, `rate1`, `rate2`, `rate3`, `rate4`, `height`, `width`, `price`, `image0`, `image1`, `image2`, `image3`, `image4`, `pdf`, `video_url`, `propertexpire`, `remember_token`, `created_by`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Place Autocomplete6', 'good6', 'rent', 'projects', 'Factories', 'karachi', '29.07537518', '69.5324707', NULL, NULL, NULL, '12008', 'Kanal', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4099', '4099', '5000009', '_0.jpg', '_1.jpg', '_2.jpg', '_3.jpg', '_4.jpg', NULL, 'https://www.youtube.com/watch?v=YvmMZuZdjZk', '2017-05-25', 'mLb3TiPCJnC0g4NKt9r4uaUC5e0yaJotwML3kRzT', 1, 1, '2017-04-22 17:35:37', '2017-04-25 00:07:28', NULL),
(2, 'Place Autocomplete', 'good', 'sell', 'land', 'Agricultural Land', 'karachi', '70.12573242', '29.01774802', NULL, NULL, NULL, '1200', 'Marla', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '40', '40', '500000', '_0.jpg', '_1.jpg', '_2.jpg', '_3.jpg', '_4.jpg', NULL, 'https://www.youtube.com/watch?v=YvmMZuZdjZk', '2017-08-22', 'W52s0zqlZE1i6io61FHJK9kobsVvCCeoH9ertivw', 1, 1, '2017-04-22 17:36:18', '2017-04-22 17:52:49', NULL),
(3, 'Property Foe sale Offices', 'Good Condition.I think you love this place for office.', 'sell', 'land', 'Office', 'karachi', '28.78691809', '69.92797852', NULL, NULL, NULL, '1200', 'Square Feet', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '300', '600', '500000', '_0.jpg', '_1.jpg', '_2.jpg', '_3.jpg', '_4.jpg', NULL, 'https://www.youtube.com/watch?v=YvmMZuZdjZk', '2017-08-23', 'laVHQA1EAKGAYHnlV2i6ta93lGP88yoZ37VvQBuz', 1, 1, '2017-04-23 10:35:47', '2017-04-23 10:35:59', NULL),
(4, 'Dha Phase 2 Files available', 'Good To live in DHA', 'rent', 'projects', 'Residental Town / Schemes', 'Islamabad', '29.09457708', '69.81811523', NULL, NULL, NULL, '1200', 'Kanal', '43', NULL, '34', '22', '44', '44', '24', '12', NULL, NULL, NULL, '_0.jpg', '_1.jpg', '_2.jpg', '_3.jpg', '_4.jpg', '1492918737.txt', 'https://www.youtube.com/watch?v=YvmMZuZdjZk', '2017-05-25', '9LdlUP2a65v4TuB6wWfBoXqf2bZzcFw1kSl6Q1JV', 1, 1, '2017-04-23 10:38:54', '2017-04-25 00:07:31', NULL),
(5, 'Land, sometimes referred to as dry land', 'Land, sometimes referred to as dry land, is the solid surface of the Earth that is not permanently covered by water. The vast majority of human activity throughout history has occurred in land areas that support agriculture, habitat, and various natural resources. Land, sometimes referred to as dry land, is the solid surface of the Earth that is not permanently covered by water. The vast majority of human activity throughout history has occurred in land areas that support agriculture, habitat, and various natural resources.', 'sell', 'projects', 'Industrial Estates /Zone', 'karachi', '28.69058765', '70.2355957', NULL, NULL, NULL, '1200', 'Kanal', '33', '333', '25', '54', '45', '343', '76', '56', NULL, NULL, NULL, '_0.jpg', '_1.jpg', '_2.jpg', '_3.jpg', '_4.jpg', NULL, 'https://www.youtube.com/watch?v=YvmMZuZdjZk', '2017-06-27', 'g9057HjlPT2sPxWxKezGAtvMOMrpzZgvC4kNQ8MG', 3, 0, '2017-04-27 16:10:11', '2017-04-27 16:10:14', NULL),
(6, 'Place Autocomplete', 'good condition', 'rent', 'projects', 'Land Sub Divisions', 'karachi', '33.714059324224124', '72.89497375488281', NULL, NULL, NULL, '1200', 'acres', '33', '2', '3', '4', '3666', '2000', '3000', '4000', '34', '40', NULL, '_0.jpg', NULL, NULL, NULL, NULL, NULL, 'https://www.youtube.com/watch?v=YvmMZuZdjZk', '2017-08-21', 'Hcd07KOL7SlOUUgguQzjjpJ6u2n3g14RpPJ4Crwy', 3, 0, '2017-05-21 13:36:22', '2017-05-21 13:36:22', NULL),
(7, 'Place Autocomplete', 'good condition', 'rent', 'projects', 'Land Sub Divisions', 'karachi', '33.714059324224124', '72.89497375488281', NULL, NULL, NULL, '1200', 'Kanal', '33', '2', '3', '4', '3666', '2000', '3000', '4000', '34', '40', NULL, '_0.jpg', NULL, NULL, NULL, NULL, NULL, 'https://www.youtube.com/watch?v=YvmMZuZdjZk', '2017-07-21', 'Hcd07KOL7SlOUUgguQzjjpJ6u2n3g14RpPJ4Crwy', 3, 0, '2017-05-21 13:38:32', '2017-05-21 13:38:32', NULL),
(8, 'Place Autocomplete', 'good condition', 'rent', 'projects', 'Land Sub Divisions', 'karachi', '33.714059324224124', '72.89497375488281', NULL, NULL, NULL, '1200', 'Kanal', '33', '2', '3', '4', '3666', '2000', '3000', '4000', '34', '40', NULL, '_0.jpg', NULL, NULL, NULL, NULL, NULL, 'https://www.youtube.com/watch?v=YvmMZuZdjZk', '2017-07-21', 'Hcd07KOL7SlOUUgguQzjjpJ6u2n3g14RpPJ4Crwy', 3, 0, '2017-05-21 13:42:44', '2017-05-21 13:42:44', NULL),
(9, 'Place Autocomplete', 'good condition', 'rent', 'projects', 'Land Sub Divisions', 'karachi', '33.714059324224124', '72.89497375488281', NULL, NULL, NULL, '1200', 'Kanal', '33', '2', '3', '4', '3666', '2000', '3000', '4000', '34', '40', NULL, '_0.jpg', NULL, NULL, NULL, NULL, NULL, 'https://www.youtube.com/watch?v=YvmMZuZdjZk', '2017-07-21', 'Hcd07KOL7SlOUUgguQzjjpJ6u2n3g14RpPJ4Crwy', 3, 0, '2017-05-21 13:43:04', '2017-05-21 13:43:04', NULL),
(10, 'Place Autocomplete', 'good condition', 'rent', 'projects', 'Land Sub Divisions', 'karachi', '33.714059324224124', '72.89497375488281', NULL, NULL, NULL, '1200', 'Kanal', '33', '2', '3', '4', '3666', '2000', '3000', '4000', '34', '40', NULL, '_0.jpg', NULL, NULL, NULL, NULL, NULL, 'https://www.youtube.com/watch?v=YvmMZuZdjZk', '2017-07-21', 'Hcd07KOL7SlOUUgguQzjjpJ6u2n3g14RpPJ4Crwy', 3, 0, '2017-05-21 13:45:01', '2017-05-21 13:45:01', NULL),
(11, 'Place Autocomplete', 'good condition', 'rent', 'projects', 'Land Sub Divisions', 'karachi', '33.714059324224124', '72.89497375488281', NULL, NULL, NULL, '1200', 'Kanal', '33', '2', '3', '4', '3666', '2000', '3000', '4000', '34', '40', NULL, '_0.jpg', NULL, NULL, NULL, NULL, NULL, 'https://www.youtube.com/watch?v=YvmMZuZdjZk', '2017-07-21', 'Hcd07KOL7SlOUUgguQzjjpJ6u2n3g14RpPJ4Crwy', 3, 0, '2017-05-21 13:46:03', '2017-05-21 13:46:03', NULL),
(12, 'Place Autocomplete', 'good condition', 'rent', 'projects', 'Land Sub Divisions', 'karachi', '33.714059324224124', '72.89497375488281', NULL, NULL, NULL, '1200', 'Kanal', '33', '2', '3', '4', '3666', '2000', '3000', '4000', '34', '40', NULL, '_0.jpg', NULL, NULL, NULL, NULL, NULL, 'https://www.youtube.com/watch?v=YvmMZuZdjZk', '2017-07-21', 'Hcd07KOL7SlOUUgguQzjjpJ6u2n3g14RpPJ4Crwy', 3, 0, '2017-05-21 13:46:47', '2017-05-21 13:46:47', NULL),
(13, 'Place Autocomplete', 'good condition', 'rent', 'projects', 'Land Sub Divisions', 'karachi', '33.714059324224124', '72.89497375488281', NULL, NULL, NULL, '1200', 'Kanal', '33', '2', '3', '4', '3666', '2000', '3000', '4000', '34', '40', NULL, '_0.jpg', NULL, NULL, NULL, NULL, NULL, 'https://www.youtube.com/watch?v=YvmMZuZdjZk', '2017-07-21', 'Hcd07KOL7SlOUUgguQzjjpJ6u2n3g14RpPJ4Crwy', 3, 0, '2017-05-21 14:18:52', '2017-05-21 14:18:52', NULL),
(14, 'Place Autocomplete', 'good condition', 'rent', 'projects', 'Land Sub Divisions', 'karachi', '33.714059324224124', '72.89497375488281', NULL, NULL, NULL, '1200', 'Kanal', '33', '2', '3', '4', '3666', '2000', '3000', '4000', '34', '40', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'https://www.youtube.com/watch?v=YvmMZuZdjZk', '2017-07-21', 'Hcd07KOL7SlOUUgguQzjjpJ6u2n3g14RpPJ4Crwy', 3, 0, '2017-05-21 14:21:49', '2017-05-21 14:21:49', NULL),
(15, 'Place Autocomplete', 'good condition', 'rent', 'projects', 'Land Sub Divisions', 'karachi', '33.714059324224124', '72.89497375488281', NULL, NULL, NULL, '1200', 'Kanal', '33', '2', '3', '4', '3666', '2000', '3000', '4000', '34', '40', NULL, '_0.jpg', NULL, NULL, NULL, NULL, NULL, 'https://www.youtube.com/watch?v=YvmMZuZdjZk', '2017-07-21', 'Hcd07KOL7SlOUUgguQzjjpJ6u2n3g14RpPJ4Crwy', 3, 0, '2017-05-21 14:21:59', '2017-05-21 14:21:59', NULL),
(16, 'Place Autocomplete', 'good condition', 'rent', 'projects', 'Land Sub Divisions', 'karachi', '33.714059324224124', '72.89497375488281', NULL, NULL, NULL, '1200', 'Kanal', '2', NULL, '3', '4', '3666', '3666', '3000', '4000', '34', '40', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'https://www.youtube.com/watch?v=YvmMZuZdjZk', '2017-06-21', 'Hcd07KOL7SlOUUgguQzjjpJ6u2n3g14RpPJ4Crwy', 3, 0, '2017-05-21 14:25:27', '2017-05-21 14:27:29', NULL),
(17, 'Place Autocomplete', 'good condition', 'rent', 'projects', 'Land Sub Divisions', 'karachi', '33.714059324224124', '72.89497375488281', NULL, NULL, NULL, '1200', 'Kanal', '33', '2', '3', '4', '3666', '2000', '3000', '4000', '34', '40', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'https://www.youtube.com/watch?v=YvmMZuZdjZk', '2017-07-21', 'Hcd07KOL7SlOUUgguQzjjpJ6u2n3g14RpPJ4Crwy', 3, 0, '2017-05-21 14:26:02', '2017-05-21 14:26:02', NULL),
(18, 'Place Autocomplete', 'good condition', 'rent', 'projects', 'Land Sub Divisions', 'karachi', '33.714059324224124', '72.89497375488281', NULL, NULL, NULL, '1200', 'Kanal', '33', '2', '3', '4', '3666', '2000', '3000', '4000', '34', '40', NULL, '_0.jpg', NULL, NULL, NULL, NULL, NULL, 'https://www.youtube.com/watch?v=YvmMZuZdjZk', '2017-07-21', 'Hcd07KOL7SlOUUgguQzjjpJ6u2n3g14RpPJ4Crwy', 3, 0, '2017-05-21 14:26:25', '2017-05-21 14:26:25', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `property_docs`
--

CREATE TABLE `property_docs` (
  `id` int(10) UNSIGNED NOT NULL,
  `property_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image3` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image4` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pdf` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `property_docs`
--

INSERT INTO `property_docs` (`id`, `property_id`, `image1`, `image2`, `image3`, `image4`, `pdf`, `created_at`, `updated_at`) VALUES
(1, '10', '1492750286.jpg', NULL, NULL, NULL, NULL, '2017-04-21 11:51:26', '2017-04-21 11:51:26'),
(2, '11', '1492750454.jpg', NULL, NULL, NULL, NULL, '2017-04-21 11:54:14', '2017-04-21 11:54:14');

-- --------------------------------------------------------

--
-- Table structure for table `property_feature`
--

CREATE TABLE `property_feature` (
  `property_id` int(11) NOT NULL,
  `feature_id` int(11) NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `property_feature`
--

INSERT INTO `property_feature` (`property_id`, `feature_id`, `type`, `created_at`, `updated_at`) VALUES
(1, 22, 'projects', NULL, NULL),
(5, 21, 'projects', NULL, NULL),
(5, 22, 'projects', NULL, NULL),
(18, 22, 'projects', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `property_service`
--

CREATE TABLE `property_service` (
  `property_id` int(11) NOT NULL,
  `service_id` int(11) NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `property_service`
--

INSERT INTO `property_service` (`property_id`, `service_id`, `type`, `created_at`, `updated_at`) VALUES
(1, 4, 'projects', NULL, NULL),
(5, 4, 'projects', NULL, NULL),
(5, 6, 'projects', NULL, NULL),
(18, 4, 'projects', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

CREATE TABLE `ratings` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `rating` int(11) NOT NULL,
  `rateable_id` int(10) UNSIGNED NOT NULL,
  `rateable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ratings`
--

INSERT INTO `ratings` (`id`, `created_at`, `updated_at`, `rating`, `rateable_id`, `rateable_type`, `user_id`) VALUES
(1, '2017-04-23 12:26:26', '2017-04-23 12:26:43', 4, 3, 'Property', 1);

-- --------------------------------------------------------

--
-- Table structure for table `replies`
--

CREATE TABLE `replies` (
  `id` int(10) UNSIGNED NOT NULL,
  `reply_post` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `replies`
--

INSERT INTO `replies` (`id`, `reply_post`, `comment_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'what hy', 1, 1, '2017-04-23 18:48:14', '2017-04-23 18:48:14'),
(2, 'not  hi', 1, 1, '2017-04-23 18:48:45', '2017-04-23 18:48:45');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `name`, `type`, `created_at`, `updated_at`) VALUES
(1, 'School', '', '2017-03-19 10:40:39', '2017-03-19 12:00:31'),
(3, 'Shopping Malls', 'house', '2017-03-19 12:00:58', '2017-04-24 19:04:27'),
(4, 'Public Transport', 'projects', '2017-03-19 12:01:14', '2017-04-24 19:02:41'),
(5, 'Airport', 'house', '2017-03-19 12:06:15', '2017-04-24 18:24:13'),
(6, 'Security', 'projects', '2017-03-19 12:06:33', '2017-04-23 03:17:38'),
(7, 'Generator', 'land', '2017-04-23 03:12:08', '2017-04-23 03:16:05');

-- --------------------------------------------------------

--
-- Table structure for table `social_acounts`
--

CREATE TABLE `social_acounts` (
  `id` int(10) UNSIGNED NOT NULL,
  `facebook` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `twitter` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `google_pluse` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `linked_In` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `social_acounts`
--

INSERT INTO `social_acounts` (`id`, `facebook`, `twitter`, `google_pluse`, `linked_In`, `created_at`, `updated_at`) VALUES
(1, 'http://localhost/phpmyadmin', 'http://localhost/phpmyadmin', 'http://localhost/phpmyadmin', 'http://localhost/phpmyadmin', NULL, '2017-04-06 12:13:33');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DisplayName` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `BusinessType` int(11) NOT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zip` int(11) DEFAULT NULL,
  `package_id` int(11) DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `company_about` text COLLATE utf8mb4_unicode_ci,
  `payment_state` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_zip` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `home_phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cell_phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `work_phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fax_phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `isActive` tinyint(1) NOT NULL DEFAULT '0',
  `type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password_expire_date` datetime DEFAULT NULL,
  `created_by` int(10) UNSIGNED DEFAULT NULL,
  `last_login` datetime DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `permanent` tinyint(4) DEFAULT NULL,
  `company_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_logo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `background_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `googleplus` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_id`, `first_name`, `last_name`, `DisplayName`, `BusinessType`, `city`, `state`, `zip`, `package_id`, `description`, `company_about`, `payment_state`, `payment_zip`, `home_phone`, `cell_phone`, `work_phone`, `fax_phone`, `email`, `email2`, `isActive`, `type`, `image`, `password`, `remember_token`, `password_expire_date`, `created_by`, `last_login`, `status`, `permanent`, `company_name`, `company_logo`, `background_image`, `address`, `company_phone`, `facebook`, `twitter`, `googleplus`, `linkedin`, `created_at`, `updated_at`) VALUES
(1, NULL, 'amir', 'shahzad', 'admin', 2, 'Lahore', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '03007272332', NULL, NULL, 'officezam@gmail.com', NULL, 1, 'admin', '1_amir.jpg', '$2y$10$AnDb.7mUMOMFoKoVmEZQXuDOr28mubNhM5URy3GvlIuXmW46e1udq', 'YSd8wZooAo1lAbQjPxZcWIKGWPtZivma68OR8BZ6qHCwzRv8iIf9DUnWrkOO', NULL, NULL, '2017-05-28 14:58:31', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-03-21 05:48:21', '2017-05-28 09:58:31'),
(2, NULL, 'amir', 'shahzad', NULL, 2, 'D G Khan', NULL, NULL, NULL, 'good', NULL, NULL, NULL, NULL, '03007272332', NULL, NULL, 'sarayasmin45@gmail.com', NULL, 0, 'user', '2_amir.jpg', '$2y$10$AnDb.7mUMOMFoKoVmEZQXuDOr28mubNhM5URy3GvlIuXmW46e1udq', 'V511hRsSmZdo8jdLbsvWjT2EknWdkoaMr1h4G6X3', NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-05-27 13:01:50', '2017-05-27 13:01:50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_uses`
--
ALTER TABLE `about_uses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `adds`
--
ALTER TABLE `adds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_uses`
--
ALTER TABLE `contact_uses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feature`
--
ALTER TABLE `feature`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_reserved_at_index` (`queue`,`reserved_at`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `package_permission`
--
ALTER TABLE `package_permission`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `property`
--
ALTER TABLE `property`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `property_docs`
--
ALTER TABLE `property_docs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ratings`
--
ALTER TABLE `ratings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ratings_rateable_id_rateable_type_index` (`rateable_id`,`rateable_type`),
  ADD KEY `ratings_rateable_id_index` (`rateable_id`),
  ADD KEY `ratings_rateable_type_index` (`rateable_type`),
  ADD KEY `ratings_user_id_index` (`user_id`);

--
-- Indexes for table `replies`
--
ALTER TABLE `replies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_acounts`
--
ALTER TABLE `social_acounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_displayname_unique` (`DisplayName`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_uses`
--
ALTER TABLE `about_uses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `adds`
--
ALTER TABLE `adds`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `contact_uses`
--
ALTER TABLE `contact_uses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `feature`
--
ALTER TABLE `feature`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `package_permission`
--
ALTER TABLE `package_permission`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `property`
--
ALTER TABLE `property`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `property_docs`
--
ALTER TABLE `property_docs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `ratings`
--
ALTER TABLE `ratings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `replies`
--
ALTER TABLE `replies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `social_acounts`
--
ALTER TABLE `social_acounts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `ratings`
--
ALTER TABLE `ratings`
  ADD CONSTRAINT `ratings_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
