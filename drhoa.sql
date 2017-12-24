-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 24, 2017 at 02:21 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `drhoa`
--

-- --------------------------------------------------------

--
-- Table structure for table `regcodes`
--

CREATE TABLE `regcodes` (
  `id` int(10) UNSIGNED NOT NULL,
  `invitecode` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `regcodes`
--

INSERT INTO `regcodes` (`id`, `invitecode`) VALUES
(1, 'HOA2016A'),
(2, 'HOA2017B');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uid` int(10) UNSIGNED NOT NULL,
  `email` varchar(60) NOT NULL,
  `pwd` varchar(512) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(60) NOT NULL,
  `house_number` varchar(6) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `date_entered` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `email`, `pwd`, `first_name`, `last_name`, `house_number`, `phone`, `date_entered`) VALUES
(1, 'carollc@comcast.net', '$2y$12$HOhTDfVf.MCxc7JQu14q9.BgCEopveLIr5vs4cBAsqoqaozIzw0Ni', 'Carol', 'Biederman', '10337', '5037035128', '2016-09-11 03:11:31'),
(2, 'adinbied@gmail.com', '$2y$12$4pAoElrnhV/nRrsS.BgQH.Qz2XamukW23Yjg5Qe1XTcnzT7wfb002', 'Adin', 'Biederman', '10337', '9712697292', '2016-09-11 03:18:46'),
(3, '294241@bsd48.org', '$2y$12$Z1jk90cApys.s9Ebo.lTQucfJKnh2YLfUJdTVMzFC6AUbp3A3ePae', 'Adin', 'Biederman', '10337', '9712697292', '2016-09-14 03:33:30'),
(4, 'deanna.mckey@gmail.com', '$2y$12$Gy8VWXHCEIeR2IoDOjeV8uISd1dSolyRZqBtVNIeT9kBPBRHweveW', 'Deanna', 'Erhardt', '10311', '5036212593', '2016-09-14 04:15:50'),
(5, 'test@test.test', '$2y$12$o3KxS464ruioFj33voRdyO5oTByssXW9eYg5x6SweMZRmHzkMufES', 'test', 'test', 'test', 'test', '2016-10-22 23:15:59'),
(6, 'test2@test.test', '$2y$12$iM67K0tYpJ24Z.hYScdZh.VZRgMKNGtkpKjmDd10faMEg62a4bS0u', 'test2', 'test2', 'test2', 'test2', '2016-10-22 23:39:43'),
(7, 'test2@test.test', '$2y$12$tdQr85TcaKE70DN7cu8H3uP//SbDkyJt39mF2i23eGKziCRugkNXa', 'test2', 'test2', 'test2', 'test2', '2016-10-22 23:41:11'),
(8, 'testtest', '$2y$12$2Qm5b.k5of2feosG6zSGvOPdDP1rdannMou506W/0bhXr/PTlkf.W', 'testtest', 'testtest', 'testte', 'testtest', '2016-10-22 23:43:06'),
(9, 'test3@test.test', '$2y$12$D5qDz5nD9DIGTzqx7T0CXO01QthSwrTs/HPv0TBqz9S/NqqBKTEYm', 'test3', 'test3', 'test3', 'test3', '2016-10-22 23:43:56'),
(10, 'arg', '$2y$12$am.b9Q2FuEsggH2eY9SX2O69M9uRIsQm4.UOLxuNlPFrKt3TDyHCq', 'arg', 'arg', 'arg', 'arg', '2016-10-22 23:44:58'),
(11, 'ifguy', '$2y$12$cxmyhwyxd2qD23d04zCYfu/xLYoathjo8jahBcmloXSnZMYQ735n2', 'jhgfjadsj', 'hjfgsjg', 'ghjdga', 'jhdgsajg', '2016-10-22 23:45:46'),
(12, 'test', '$2y$12$ia3CRAo43gG8dYgdKUssNeVgRaIO64.zhsFme8TVEqz23rRAmsdeO', 'test', 'test', 'test', 'test', '2016-10-22 23:47:30'),
(13, 'lol@lol.lol', '$2y$12$To8Co4d1n5F/oOgMymyO..kFRQHGsiY3vk9JcZtGYLW8d.yUxOcki', 'lol', 'lol', 'lol', 'lol', '2016-10-24 15:51:59'),
(14, 'lol@lol.lol', '$2y$12$9ZC9BYObkaeQzV/Zak3DWetf8Na/oPFRlNgbOVfj/jQ4jrUqkYECm', 'lol', 'lol', 'lol', 'lol', '2016-10-24 15:59:28'),
(15, 'lol', '$2y$12$DYujH.rOqZQ5NWUDmWPTOe0U3OeUqt8Xxxnfxf8ceKug8w4Yc3oPq', 'lol', 'lol', 'lol', 'lol', '2016-10-24 16:01:07'),
(16, 'adinbied@gmail.com', '$2y$12$1WPTdkONGvVFeVI82fPhE.XFjnGQag.snmkgADeGz5MB4JGDAOEHe', 'jkhfsdk', 'kjhqkhkfh', 'kjfdh', 'kjedhk', '2016-10-24 16:02:06'),
(17, 'potato@potato.com', '$2y$12$e7MFtDKyCz5LwKCAsAW74uVyb6wbH6HWJ2oPugbfrN2OC2BvXTl8m', 'potato', 'potato', 'potato', 'potato', '2016-10-24 16:13:31'),
(18, 'testemail@test.test', '$2y$12$nAyHy935rGepd0RZnq9sOeZKy0HzGRa8W.uSQtkUK3dFUfFXUP.Vy', 'test', 'test', '19999', '2749484747', '2017-10-29 18:24:03'),
(19, 'testemail@test.com', '$2y$12$gpuE8fMtHYGPLW3Fhe5.XOu2bc7UO.QLf7/DmwVS/xahz5AaCq6Ua', 'kjshkfjh', 'skjfdhk', '38409', '857295847', '2017-10-29 18:25:35'),
(20, 'yoyo', '$2y$12$KMARiNXbM9fXt589m65sq.Knj5oUVcB8qHzZncRp9b4ERtSiy/SVa', 'adinzev', 'adinbied', '2222', '22222', '2017-10-29 18:31:22'),
(21, 'testingemail123@gmai.com', '$2y$12$8qTh9iKDcyG4/TaptZokXOwEGRD51EKD/9XHmW.F3Gvn9anUAK8rO', 'test', 'test', '2222', '222222', '2017-10-29 18:34:30'),
(22, 'testuhfskjdhk', '$2y$12$/qgzudXjbiELpZVnJ38AoeVN3IJUSCaZS5z7QVjHpzdYn6MNg2.ue', 'test', 'tewst', '37838', '844784', '2017-11-06 19:43:00'),
(23, 'fhcskjdhifhdiuh', '$2y$12$avqzf8M7RyMMzbhlsHPa0OGOG/24i06CepgrD1AmDRN47gbcOV.SW', 'sjfhkdsj', 'jsfhkjhfkjsd', '877878', '88899', '2017-11-06 19:43:24'),
(24, 'iuhgiiu', '$2y$12$/ixH30TDSMHClFdZzyc3L.QcVGAIWKMhwbk24WBWFlRFtJyA9p6Ou', 'iuhhiuh', 'uhiuhihi', 'hiuiuh', 'huiiuhih', '2017-11-06 19:45:16'),
(25, 'tdsjhkdjfh', '$2y$12$arslefgTq.cxr3xeYW/I4OTo49laT7CVU.i3MEeuaCftyftR84KO2', 'kkjshsdkjhdkj', 'kjfhskdjk', 'kfjshk', 'jkkfsdhkjfhd', '2017-11-06 19:55:26'),
(26, 'fjkdskfskjhn', '$2y$12$dAzDjuWoLh3aQcbQf9cRy.pnniDy8dohDpqjw925Gj/fYdSuE7Hsq', 'jkshdkjfh', 'kjsfkjdfh', 'khsefk', 'khskfdjhk', '2017-11-06 19:56:57'),
(27, 'hdskjhk', '$2y$12$uc2LMl1.WZfbKR3oSPnXmu90vf8Df7V/.CZs94mdZu0BTmMmYzdWO', 'kjshdkjh', 'kjhfskjdhk', 'kjhfdk', 'kjshdkjh', '2017-11-06 19:58:09'),
(28, 'fhjkhdsak`', '$2y$12$TgdlvqgszXKtYo7EPBHSGeBGtxzoyERFumw3teDIbyNqSMS/RSMTe', 'jkshkdh', 'kjfhekjh', 'jkhkjh', 'jhkjhcf', '2017-11-06 22:42:28'),
(29, 'testggfd', '$2y$12$rcofWRMrhUU502jvy3fKxuRGYzgtemkVY8THvmnF55IUv/wFr7Nu2', 'tdfgjh', 'dgffd', 'dfdf', 'dfdf', '2017-11-06 22:51:07'),
(30, 'testemail@yahoo.com', '$2y$12$AlJruOi4968avELedjW6qe7063VW5nZnQNVsdFrbb08AnGq4WMAeO', 'ahjdjk', 'jhkj', 'kjhkj', 'jkhjh', '2017-11-07 01:16:05'),
(31, 'ujkhkjhkkjh', '$2y$12$Qiy9Oi/M34HhJq5r28NI5eV30qgHZaay79fhgCQSndFdMh/QAUmwu', 'ghjhgjhgj', 'jhgjhgj', 'gjhgjh', 'hjgjgjhg', '2017-11-07 02:02:29'),
(32, 'adinbied@gmail.com', '$2y$12$BI5OJ5GTi/HUplQNNHhjveGk.MoL4dHDaCuE7czDh2NL./VeBcNXq', 'jhgjhg', 'jhgjh', 'gjh', 'hgj', '2017-11-07 02:09:18'),
(33, 'adinbied@gmail.com', '$2y$12$8Pyt1d7k3mkhCSnkObX.tepVP614kCwcCe1ZJYC.aEcITEkdKoAqO', '', '', '', '', '2017-11-07 02:10:40'),
(34, 'myrealemail@test.com', '$2y$12$HQgof2o1Rva3jkN2hH8XJeTbpQuDVWDjNIPgyMSzEHRLEVdGvEmki', 'Testymctestface', 'test', 'test', 'test', '2017-11-09 20:16:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `regcodes`
--
ALTER TABLE `regcodes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `regcodes`
--
ALTER TABLE `regcodes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
