-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2018 at 05:46 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `our-blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `image_table`
--

CREATE TABLE `image_table` (
  `image_num` int(11) NOT NULL,
  `image_description` varchar(255) DEFAULT NULL,
  `image_account` varchar(50) DEFAULT NULL,
  `image_name` varchar(60) DEFAULT NULL,
  `category` varchar(50) DEFAULT NULL,
  `image_path` varchar(120) DEFAULT NULL,
  `image_filename` varchar(50) DEFAULT NULL,
  `image_ref` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `image_table`
--

INSERT INTO `image_table` (`image_num`, `image_description`, `image_account`, `image_name`, `category`, `image_path`, `image_filename`, `image_ref`) VALUES
(1, 'Female Mannequin \"Elle\" Position 23 Black Satin Color', 'cofrad', 'CFM001683', '0', 'public/assets/img/site_images/cofrad/', 'sample.png', 'MN-Y10050-17-BLACK'),
(2, 'Female Sitting Mannequin Pure 24 Zoe Head Dis Pure 24 Realistic Feet Cut Toe\r\nPainted In Amethyste Grey Satin', 'cofrad', 'CFM001691', '0', 'public/assets/img/site_images/cofrad/', 'sample.png', 'MN-Y10050-22-GREY'),
(3, 'Mannequin Pure 24 Eve Head In White Matte Finish\r\nRealistic Toe Cut (Split Toe)', 'cofrad', 'CFM001717', '0', 'public/assets/img/site_images/cofrad/', 'sample.png', 'MN-Y10050-PURE24-EVE'),
(4, 'Male Torso Size 48 With Head Covered Bizzone Fabric', 'cofrad', 'CFM001718', '0', 'public/assets/img/site_images/cofrad/', 'sample.png', 'MN-B10050-DIS-CAN25AH'),
(5, 'Pair Of Men Wooden Arms Hands Magnet Fitting Raw Finish', 'cofrad', 'CFM001718', '0', 'public/assets/img/site_images/cofrad/', 'sample.png', 'MN-WD328-RAW'),
(6, 'Female Torso Size 36 With Head In Linen 001 Bizonne Fabric', 'cofrad', 'CFM001718', '0', 'public/assets/img/site_images/cofrad/', 'sample.png', 'MN-COF-DIS.CAN17AH'),
(7, 'Pair Of Women Wooden Arms Magnet Fitting Raw Finish', 'cofrad', 'CFM001718', '0', 'public/assets/img/site_images/cofrad/', 'sample.png', 'MN-WD329-RAW'),
(8, 'Man Antique Boxer Form Dirty Matte White', 'cofrad', 'CFM001741', '0', 'public/assets/img/site_images/cofrad/', 'sample.png', 'MN-Y10050-DIS-LUBF/A'),
(9, 'Size 36 - 3/4 Female Torso With \"V\" Shoulders\r\nFabric Linen 3001', 'cofrad', 'CFM001754', '0', 'public/assets/img/site_images/cofrad/', 'sample.png', 'MN-COF-DIS-CAN17AH-3001'),
(10, 'Thin Metal Top Cap For Female - 95mm Diameter With\r\nScrew Gloss White', 'cofrad', 'CFM001754', '0', 'public/assets/img/site_images/cofrad/', 'sample.png', 'MN-COF-DIS-TC8'),
(11, 'New Dressmaker Wheeled Base For Torso Black Sanded 100', 'cofrad', 'CFM001754', '0', 'public/assets/img/site_images/cofrad/', 'sample.png', 'MN-COF-DIS-B1-T'),
(12, 'Female Half Bust Covered With \r\nFabric Linen 3001', 'cofrad', 'CFM001754', '0', 'public/assets/img/site_images/cofrad/', 'sample.png', 'MN-COF-DIS-CAN15'),
(13, 'Thin Metal Top Cap For Female - 95mm Diameter With\r\nScrew Gloss White', 'cofrad', 'CFM001754', '0', 'public/assets/img/site_images/cofrad/', 'sample.png', 'MN-COF-DIS-TC8'),
(14, 'Square Metal Base 30*30 With Tube Centered Ht\r\n40cm Black Sanded 100', 'cofrad', 'CFM001754', '0', 'public/assets/img/site_images/cofrad/', 'sample.png', 'MN-COF-DIS-B20'),
(15, 'Bm Stocking Leg Painted Satin White\r\n', 'cofrad', 'CFM001767', '0', 'public/assets/img/site_images/cofrad/', 'sample.png', 'MN-COF-DIS-BMLEG'),
(16, 'Size 36 - 3/4 Female Torso With Articulated Arms\r\nAnd Head\r\nBizonne Fabric', 'cofrad', 'CFM001782', '0', 'public/assets/img/site_images/cofrad/', 'sample.png', 'MN-COF-DIS.CAN17AH'),
(17, 'Female Magnetic Wooden Arm Pair\r\nRaw Finish', 'cofrad', 'CFM001782', '0', 'public/assets/img/site_images/cofrad/', 'sample.png', 'MN-COF-DIS.FMA'),
(18, 'Metal Base 400x300x4mm - Off Centre Double Tube\r\n700+450mm\r\nBrushed Chrome', 'cofrad', 'CFM001782', '0', 'public/assets/img/site_images/cofrad/', 'sample.png', 'MN-COF-DIS.CF149'),
(19, 'Thin Metal Top Cap For Female - 95mm Diameter With\r\nScrew\r\nBrushed Chrome', 'cofrad', 'CFM001782', '0', 'public/assets/img/site_images/cofrad/', 'sample.png', 'MN-COF-DIS.TC8'),
(20, 'Size 46 - 3/4 Male Torso With Articulated Arms And\r\nHead\r\nBizonne Fabric', 'cofrad', 'CFM001782', '0', 'public/assets/img/site_images/cofrad/', 'sample.png', 'MN-COF-DIS.CAN19AH'),
(21, 'Male Magnetic Wooden Arm Pair\r\nBrushed Chrome', 'cofrad', 'CFM001782', '0', 'public/assets/img/site_images/cofrad/', 'sample.png', 'MN-COF-DIS.MMA'),
(22, 'Metal Base 400x300x4mm - Off Centre Double Tube\r\n700+450mm\r\nBrushed Chrome', 'cofrad', 'CFM001782', '0', 'public/assets/img/site_images/cofrad/', 'sample.png', 'MN-COF-DIS.CF149'),
(23, 'Thin Metal Topcap For Male - 106mm Diameter - To Be\r\nScrewed On Neck\r\nBrushed Chrome', 'cofrad', 'CFM001782', '0', 'public/assets/img/site_images/cofrad/', 'sample.png', 'MN-COF-DIS.TC3'),
(24, 'Straight Right Antique Foot Lg 27 Cm Ht31cm Size 42 In Dirty Matte White', 'cofrad', 'CFM001800', '0', 'public/assets/img/site_images/cofrad/', 'sample.png', 'MN-COF-DIS.RFOOT/A'),
(25, 'Man Antique Boxer Form Dirty Matte White', 'cofrad', 'CFM001800', '0', 'public/assets/img/site_images/cofrad/', 'sample.png', 'MN-DIS.LUBF/A'),
(26, 'Mannequin Jantzen Girl', 'cofrad', 'CFM001692', '0', 'public/assets/img/site_images/cofrad/', 'sample.png', 'MANNEQUIN JANTZEN GIRL'),
(27, 'Mannequin Brigitte Bardot', 'cofrad', 'CFM001692', '0', 'public/assets/img/site_images/cofrad/', 'sample.png', 'MANNEQUIN BRIGITTE BARDOT'),
(28, 'Bikini Displayer 5 Branches', 'cofrad', 'CFM001692', '0', 'public/assets/img/site_images/cofrad/', 'sample.png', 'BIKINI DISPLAYER 5 BRANCHES'),
(29, 'Female Crossed Legs Matte White Finish', 'cofrad', 'CFM001742', '0', 'public/assets/img/site_images/cofrad/', 'sample.png', 'MN-COF-DIS-FCL-0053'),
(30, 'Female Trousers Legs Matte White Finish', 'cofrad', 'CFM001742', '0', 'public/assets/img/site_images/cofrad/', 'sample.png', 'MN-COF-DIS-PUPF-0053'),
(31, 'Child Mannequin Junior 12yrs Boy In Ral 9003', 'cofrad', 'CFM001768', '0', 'public/assets/img/site_images/cofrad/', 'sample.png', 'MN-DIS-JC12B-RAL9003'),
(32, 'Child Mannequin 6yrs In Ral 9003', 'cofrad', 'CFM001768', '0', 'public/assets/img/site_images/cofrad/', 'sample.png', 'MN-DIS-JC6-H-RAL9003'),
(33, 'Child Mannequin 8yrs In Ral 9003', 'cofrad', 'CFM001768', '0', 'public/assets/img/site_images/cofrad/', 'sample.png', 'MN-DIS-JC8-RFA-RAL9003'),
(34, 'Child Mannequin 6yrs Sitted In Ral 9003', 'cofrad', 'CFM001768', '0', 'public/assets/img/site_images/cofrad/', 'sample.png', 'MN-DIS-JC6-SF-RAL9003'),
(35, 'Female Torso W/o Shoulders Size 90d', 'cofrad', 'CFM001693', '0', 'public/assets/img/site_images/cofrad/', 'sample.png', 'MN-B10050-DIS-CAN32-PINK'),
(36, 'Satin Brass Cap ?95mm +m8', 'cofrad', 'CFM001693', '0', 'public/assets/img/site_images/cofrad/', 'sample.png', 'MN-DP10050-39-BR-DIS.TC'),
(37, 'Female Truck With Fitting For Base B12/t', 'cofrad', 'CFM001693', '0', 'public/assets/img/site_images/cofrad/', 'sample.png', 'MN-B10050-DIS-GL11'),
(38, 'Bra Form W/o Shoulders Size 90d', 'cofrad', 'CFM001693', '0', 'public/assets/img/site_images/cofrad/', 'sample.png', 'MN-B10050-DIS-CAN33'),
(39, 'Satin Brass Cap ?95mm +m8', 'cofrad', 'CFM001693', '0', 'public/assets/img/site_images/cofrad/', 'sample.png', 'MN-DP10050-39-BR-DIS.TC'),
(40, 'Metal Han Tripod Dis.b12/t', 'cofrad', 'CFM001693', '0', 'public/assets/img/site_images/cofrad/', 'sample.png', 'MN-DP10050-43'),
(41, 'Hanging Tube +cap ?95mm In Satin Brass', 'cofrad', 'CFM001693', '0', 'public/assets/img/site_images/cofrad/', 'sample.png', 'MN-DP10050-38-BR'),
(42, 'Male Mannequin Collection Theme Ref 1a With\r\nArticulated Arms\r\nRal 9005 Satin', 'cofrad', 'CFM001750', '0', 'public/assets/img/site_images/cofrad/', 'sample.png', 'MN-COF-ATE.THM1A/A'),
(43, 'Male Mannequin Collection Theme Ref 1a With\r\nArticulated Arms\r\nRal 9003 Satin', 'cofrad', 'CFM001750', '0', 'public/assets/img/site_images/cofrad/', 'sample.png', 'MN-COF-ATE.THM1A/A'),
(44, 'Square Metal Base 400*400*4mm Brushed Chrome\r\nMetal', 'cofrad', 'CFM001750', '0', 'public/assets/img/site_images/cofrad/', 'sample.png', 'MN-COF-DIS.OPSMB'),
(45, 'Male Magnetic Wooden Arm Pair\r\n**black', 'cofrad', 'CFM001750', '0', 'public/assets/img/site_images/cofrad/', 'sample.png', 'MN-COF-DIS.MMA'),
(46, 'Removable Metal Bag Hook + Inner\r\nPolished Chrome', 'cofrad', 'CFM001750', '0', 'public/assets/img/site_images/cofrad/', 'sample.png', 'MN-COF-DIS.SP-MBHOOKI'),
(47, 'Male Wire Mesh Head\r\nSatin Black', 'cofrad', 'CFM001750', '0', 'public/assets/img/site_images/cofrad/', 'sample.png', 'MN-COF-DIS.WMHM'),
(48, 'Male Wire Mesh Head\r\nRal 2004 Satin', 'cofrad', 'CFM001750', '0', 'public/assets/img/site_images/cofrad/', 'sample.png', 'MN-COF-DIS.WMHM'),
(49, 'Sitting Male Mannequin\r\nRal 9005 Satin', 'cofrad', 'CFM001750', '0', 'public/assets/img/site_images/cofrad/', 'sample.png', 'MN-COF-DIS.DRV12'),
(50, 'Female Mannequin Collection Theme Position\r\nThf4a W/ Articulated Arms\r\nRal 9005 Satin', 'cofrad', 'CFM001750', '0', 'public/assets/img/site_images/cofrad/', 'sample.png', 'MN-COF-ATE.THF4A-4'),
(51, 'Female Mannequin Collection Theme Position\r\nThf4a W/ Articulated Arms\r\nRal 9003 Satin', 'cofrad', 'CFM001750', '0', 'public/assets/img/site_images/cofrad/', 'sample.png', 'MN-COF-ATE.THF4A-4'),
(52, 'Square Metal Base 400*400*4mm Brushed Chrome\r\nMetal', 'cofrad', 'CFM001750', '0', 'public/assets/img/site_images/cofrad/', 'sample.png', 'MN-COF-DIS.OPSMB'),
(53, 'Female Magnetic Wooden Arm Pair\r\nBlack', 'cofrad', 'CFM001750', '0', 'public/assets/img/site_images/cofrad/', 'sample.png', 'MN-COF-DIS.FMA'),
(54, 'Removable Metal Bag Hook + Inner\r\nPolished Chrome', 'cofrad', 'CFM001750', '0', 'public/assets/img/site_images/cofrad/', 'sample.png', 'MN-COF-DIS.SP-MBHOOKI'),
(55, 'Female Wire Mesh Head\r\nSatin Black', 'cofrad', 'CFM001750', '0', 'public/assets/img/site_images/cofrad/', 'sample.png', 'MN-COF-DIS.WMHF'),
(56, 'Female Wire Mesh Head\r\nRal 2004 Satin', 'cofrad', 'CFM001750', '0', 'public/assets/img/site_images/cofrad/', 'sample.png', 'MN-COF-DIS.WMHF'),
(57, 'Sitting Female Mnq Pos. 12- Square Tight Fitt. In 2\r\nBoth Legs\r\nRal 9005 Satin', 'cofrad', 'CFM001750', '0', 'public/assets/img/site_images/cofrad/', 'sample.png', 'MN-COF-DIS.ELLE12'),
(58, 'Wire Mesh Head On 150mm Round Metal Base\r\nRal 2004 Satin', 'cofrad', 'CFM001750', '0', 'public/assets/img/site_images/cofrad/', 'sample.png', 'MN-COF-DIS.WMH'),
(59, 'Wire Mesh Head On 150mm Round Metal Base\r\nSatin Black', 'cofrad', 'CFM001750', '0', 'public/assets/img/site_images/cofrad/', 'sample.png', 'MN-COF-DIS.WMH'),
(60, 'Female Mannequin Cof/dis.elle1a', 'cofrad', 'CFM001781', '0', 'public/assets/img/site_images/cofrad/', 'sample.png', 'MN-COF-DIS.ELLE1A'),
(61, 'Female Mannequin Cof/dis.elle3a', 'cofrad', 'CFM001781', '0', 'public/assets/img/site_images/cofrad/', 'sample.png', 'MN-COF-DIS.ELLE3A'),
(62, 'Female Mannequin Cof/dis.elle7a', 'cofrad', 'CFM001781', '0', 'public/assets/img/site_images/cofrad/', 'sample.png', 'MN-COF-DIS.ELLE7A'),
(63, 'Male Mannequin Homme Cof/dis.rivm21a', 'cofrad', 'CFM001781', '0', 'public/assets/img/site_images/cofrad/', 'sample.png', 'MN-COF-DIS.RIVM21A'),
(64, 'Male Mannequin Cof/dis.rivm32a', 'cofrad', 'CFM001781', '0', 'public/assets/img/site_images/cofrad/', 'sample.png', 'MN-COF-DIS.RIVM32A'),
(65, 'Male Mannequin Cof/dis.rivm23a', 'cofrad', 'CFM001781', '0', 'public/assets/img/site_images/cofrad/', 'sample.png', 'MN-COF-DIS.RIVM23A'),
(66, 'Female Mannequin Cof/dis.elle6a\r\nCovered Custom Fabric', 'cofrad', 'CFM001786', '0', 'public/assets/img/site_images/cofrad/', 'sample.png', 'MN-COF-DIS.ELLE6A-FABRIC'),
(67, 'Female Magnetic Wooden Arm Pair\r\nRal 9005', 'cofrad', 'CFM001786', '0', 'public/assets/img/site_images/cofrad/', 'sample.png', 'MN-COF-DIS.FMA'),
(68, 'Square Metal Base 400*400*4mm Covered In Fabric', 'cofrad', 'CFM001786', '0', 'public/assets/img/site_images/cofrad/', 'sample.png', 'MN-COF-DIS.OPSMB'),
(69, 'Dis Can 1 In China Beige Fabric', 'cofrad', 'CFM001790', '0', 'public/assets/img/site_images/cofrad/', 'sample.png', 'MN-COF-DIS.CAN1-1009'),
(70, 'Thiner Tripod Metal Base - 1200*25mm Tube - Without\r\nWasher\r\nMatt Black', 'cofrad', 'CFM001790', '0', 'public/assets/img/site_images/cofrad/', 'sample.png', 'MN-COF-DIS.B12'),
(71, 'Thin Metal Top Cap For Female - 95mm Diameter With\r\nScrew\r\nMatt Black', 'cofrad', 'CFM001790', '0', 'public/assets/img/site_images/cofrad/', 'sample.png', 'MN-COF-DIS.TC8'),
(72, 'Podium De H60 X L30 X L30cm Plaque Plexiglass En L\r\nRal 9005 Matt', 'cofrad', 'CFM001790', '0', 'public/assets/img/site_images/cofrad/', 'sample.png', 'MN-COF-DIS.PODIUM-60'),
(73, 'Podium De H90 X L30 X L30cm Plaque Plexiglass En L\r\nRal 9005 Matt', 'cofrad', 'CFM001790', '0', 'public/assets/img/site_images/cofrad/', 'sample.png', 'MN-COF-DIS.PODIUM-90'),
(74, 'Podium De H60 X L30 X L30cm Plaque Plexiglass En L\r\nRal 9010 Mat', 'cofrad', 'CFM001790', '0', 'public/assets/img/site_images/cofrad/', 'sample.png', 'MN-COF-DIS.PODIUM-60'),
(75, 'Podium De H90 X L30 X L30cm Plaque Plexiglass En L\r\nRal 9010 Mat', 'cofrad', 'CFM001790', '0', 'public/assets/img/site_images/cofrad/', 'sample.png', 'MN-COF-DIS.PODIUM-90'),
(76, 'Table De Pliage Metallique H90 X L100 X L40cm\r\nMatt Black', 'cofrad', 'CFM001790', '0', 'public/assets/img/site_images/cofrad/', 'sample.png', 'MN-COF-DIS.TABLE-100'),
(77, 'Table De Pliage Metallique H90 X L60 X L40cm\r\nMatt Black', 'cofrad', 'CFM001790', '0', 'public/assets/img/site_images/cofrad/', 'sample.png', 'MN-COF-DIS.TABLE-60'),
(78, 'Podium Carre 5cm En 5x10x10cm Chrome', 'cofrad', 'CFM001790', '0', 'public/assets/img/site_images/cofrad/', 'sample.png', 'MN-COF-DIS.PODIUM-5/10'),
(79, 'Podium Rectangle 5cm En 5x21x10cm Chrome', 'cofrad', 'CFM001790', '0', 'public/assets/img/site_images/cofrad/', 'sample.png', 'MN-COF-DIS.PODIUM-5/21'),
(80, 'Podium Rectangle 2cm En 2x21x10cm Chrome', 'cofrad', 'CFM001790', '0', 'public/assets/img/site_images/cofrad/', 'sample.png', 'MN-COF-DIS.PODIUM-2/21'),
(81, '', '', '', '', 'public/assets/img/site_images/cofrad/', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `post_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `status` int(11) NOT NULL COMMENT '0 = delete, 1 = active',
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`post_id`, `title`, `date`, `status`, `user_id`) VALUES
(1, 'test', '2018-03-11 22:26', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `post_details`
--

CREATE TABLE `post_details` (
  `post_detail_id` int(11) NOT NULL,
  `rel_post_id` int(11) NOT NULL,
  `post_text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post_details`
--

INSERT INTO `post_details` (`post_detail_id`, `rel_post_id`, `post_text`) VALUES
(1, 1, 'asdasdasd');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `createdDate` varchar(50) NOT NULL,
  `acc` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`, `createdDate`, `acc`) VALUES
(62, 'admin', 'admin', 'admin', '', 'admin'),
(63, 'cofrad', 'cofrad@admin.com', 'bb9423305452f27bfa8892f21dea623c', '', 'cofrad'),
(64, 'admin', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', '', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `image_table`
--
ALTER TABLE `image_table`
  ADD UNIQUE KEY `image_num` (`image_num`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `post_details`
--
ALTER TABLE `post_details`
  ADD PRIMARY KEY (`post_detail_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `image_table`
--
ALTER TABLE `image_table`
  MODIFY `image_num` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `post_details`
--
ALTER TABLE `post_details`
  MODIFY `post_detail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
