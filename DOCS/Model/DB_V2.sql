-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Jun 23, 2014 at 12:44 PM
-- Server version: 5.5.34
-- PHP Version: 5.5.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `yopoint`
--

-- --------------------------------------------------------

--
-- Table structure for table `card`
--

CREATE TABLE `card` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `owner` varchar(100) NOT NULL,
  `number` varchar(20) NOT NULL,
  `expire_date` datetime NOT NULL,
  `start_date` datetime DEFAULT NULL,
  `fk_card_user` bigint(20) unsigned NOT NULL,
  `fk_card_type` smallint(5) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `number_UNIQUE` (`number`),
  KEY `fk_card_user1_idx` (`fk_card_user`),
  KEY `fk_card_p_card_type1_idx` (`fk_card_type`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `start_time` datetime NOT NULL,
  `end_time` datetime NOT NULL,
  `fk_location` bigint(20) unsigned NOT NULL,
  `fk_category` smallint(5) unsigned NOT NULL,
  `fk_feature` smallint(5) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_event_location1_idx` (`fk_location`),
  KEY `fk_event_category1_idx` (`fk_category`),
  KEY `fk_event_p_event_feature1_idx` (`fk_feature`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `title`, `description`, `start_time`, `end_time`, `fk_location`, `fk_category`, `fk_feature`) VALUES
(1, 'Demo', 'Demo', '2014-06-22 00:00:00', '2014-12-22 00:00:00', 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `event_stats`
--

CREATE TABLE `event_stats` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `view_counter` int(11) DEFAULT '0',
  `purchase_counter` int(11) DEFAULT '0',
  `like_counter` int(11) DEFAULT '0',
  `comment_counter` int(11) DEFAULT '0',
  `share_counter` int(11) DEFAULT '0',
  `fk_event_related` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_event_stats_event1_idx` (`fk_event_related`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `city` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `street` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `number` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `postcode` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `longitude` double DEFAULT NULL,
  `latitude` double DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `latitude_UNIQUE` (`latitude`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`id`, `city`, `street`, `number`, `postcode`, `longitude`, `latitude`) VALUES
(1, 'City', 'Street', 'Number', 'AAAAA', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `date` datetime NOT NULL,
  `fk_purchase` bigint(20) unsigned NOT NULL,
  `fk_p_payment_type` smallint(5) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_payment_purchase1_idx` (`fk_purchase`),
  KEY `fk_payment_p_payment_type1_idx` (`fk_p_payment_type`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `picture`
--

CREATE TABLE `picture` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `path` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'single',
  `width` smallint(6) DEFAULT NULL,
  `height` smallint(6) DEFAULT NULL,
  `format` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `copyright` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `caption` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_cover` tinyint(1) DEFAULT '0',
  `fk_event` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_pic_event1_idx` (`fk_event`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

CREATE TABLE `purchase` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `total_price` float NOT NULL DEFAULT '0',
  `quantity` smallint(6) DEFAULT '0',
  `date` datetime DEFAULT NULL,
  `row` varchar(5) COLLATE utf8_unicode_ci DEFAULT NULL,
  `seat` varchar(5) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fk_user` bigint(20) unsigned NOT NULL,
  `fk_ticket` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_ticket_has_user_user1_idx` (`fk_user`),
  KEY `fk_ticket_has_user_ticket1_idx` (`fk_ticket`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `p_card_type`
--

CREATE TABLE `p_card_type` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `description` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `p_card_type`
--

INSERT INTO `p_card_type` (`id`, `description`) VALUES
(1, 'Visa'),
(2, 'Mastercard');

-- --------------------------------------------------------

--
-- Table structure for table `p_category`
--

CREATE TABLE `p_category` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `tags` text COLLATE utf8_unicode_ci,
  `logo_path` text COLLATE utf8_unicode_ci,
  `rgba_color` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name_UNIQUE` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9 ;

--
-- Dumping data for table `p_category`
--

INSERT INTO `p_category` (`id`, `name`, `tags`, `logo_path`, `rgba_color`) VALUES
(1, 'All', 'General', '', 'rgba(40,140,170,1)'),
(2, 'Music', 'Music', '', 'rgba(80,50,120,1)'),
(3, 'Exposition', 'Exposition', 'Exposition', 'rgba(130,70,50,1);'),
(4, 'Sports &amp; Outdoor', 'Sports &amp; Outdoor', '', 'rgba(0,130,90,1)'),
(5, 'Attractions', 'Attractions', '', 'rgba(30,150,200,1)'),
(6, 'Family', 'Family', '', 'rgba(180,70,100,1)'),
(7, 'Theatre &amp; Comedy', 'Theatre,Comedy', '', 'rgba(140,40,40,1)'),
(8, 'Festivals', 'Festivals', '', 'rgba(250,120,20,1)');

-- --------------------------------------------------------

--
-- Table structure for table `p_event_feature`
--

CREATE TABLE `p_event_feature` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `description` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `logo` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `p_event_feature`
--

INSERT INTO `p_event_feature` (`id`, `description`, `logo`) VALUES
(1, 'Free', ''),
(2, 'Hot', '');

-- --------------------------------------------------------

--
-- Table structure for table `p_payment_type`
--

CREATE TABLE `p_payment_type` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `description` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `p_payment_type`
--

INSERT INTO `p_payment_type` (`id`, `description`) VALUES
(1, 'Card'),
(2, 'Cash Back');

-- --------------------------------------------------------

--
-- Table structure for table `p_ticket_type`
--

CREATE TABLE `p_ticket_type` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `description` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Dumping data for table `p_ticket_type`
--

INSERT INTO `p_ticket_type` (`id`, `description`) VALUES
(1, 'default'),
(2, 'single'),
(3, 'couple'),
(4, 'family'),
(5, 'group');

-- --------------------------------------------------------

--
-- Table structure for table `p_top_up`
--

CREATE TABLE `p_top_up` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `description` varchar(50) NOT NULL,
  `amount` float NOT NULL,
  `reward` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `p_top_up`
--

INSERT INTO `p_top_up` (`id`, `description`, `amount`, `reward`) VALUES
(1, 'Voucher_5', 5, 0.5),
(2, 'Voucher_10', 10, 1.5),
(3, 'Voucher_15', 15, 3);

-- --------------------------------------------------------

--
-- Table structure for table `p_user_action`
--

CREATE TABLE `p_user_action` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `description` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `reward` float NOT NULL DEFAULT '0',
  `amount` float NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=11 ;

--
-- Dumping data for table `p_user_action`
--

INSERT INTO `p_user_action` (`id`, `description`, `reward`, `amount`) VALUES
(1, 'login', 0.01, 0),
(2, 'logout', 0, 0),
(3, 'share', 0.025, 0),
(4, 'like', 0.1, 0),
(5, 'comment', 0, 0),
(6, 'purchase', 0.05, 0),
(7, 'refer-friend', 0.5, 0),
(8, 'topup_5', 1, 5),
(9, 'cash_back_2_5', 0, -2.5),
(10, 'top_up_10', 2.5, 10);

-- --------------------------------------------------------

--
-- Table structure for table `p_user_discount`
--

CREATE TABLE `p_user_discount` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `percentage` smallint(6) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `title_UNIQUE` (`title`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Dumping data for table `p_user_discount`
--

INSERT INTO `p_user_discount` (`id`, `title`, `percentage`) VALUES
(1, 'none', 0),
(2, 'promo', 10),
(3, 'half', 50),
(4, 'group', 10),
(5, 'family', 15);

-- --------------------------------------------------------

--
-- Table structure for table `p_user_role`
--

CREATE TABLE `p_user_role` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `description` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `p_user_role`
--

INSERT INTO `p_user_role` (`id`, `description`) VALUES
(1, 'demo'),
(2, 'member'),
(3, 'publisher'),
(4, 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `p_user_type`
--

CREATE TABLE `p_user_type` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `description` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `p_user_type`
--

INSERT INTO `p_user_type` (`id`, `description`) VALUES
(1, 'single'),
(2, 'group'),
(3, 'family'),
(4, 'school');

-- --------------------------------------------------------

--
-- Table structure for table `seat`
--

CREATE TABLE `seat` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `row` varchar(4) NOT NULL,
  `seat` varchar(4) NOT NULL,
  `sold` tinyint(1) NOT NULL DEFAULT '0',
  `fk_ticket_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_seat_ticket_idx` (`fk_ticket_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE `ticket` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(128) COLLATE utf8_unicode_ci DEFAULT NULL,
  `availability` int(10) unsigned NOT NULL,
  `min_order` int(10) unsigned NOT NULL,
  `max_order` int(10) unsigned NOT NULL,
  `price` float NOT NULL DEFAULT '0',
  `sale_start` datetime DEFAULT NULL,
  `sale_end` datetime DEFAULT NULL,
  `fk_event` bigint(20) unsigned NOT NULL,
  `fk_ticket_type` smallint(5) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_ticket_event1_idx` (`fk_event`),
  KEY `fk_ticket_type1_idx` (`fk_ticket_type`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `ticket`
--

INSERT INTO `ticket` (`id`, `title`, `description`, `availability`, `min_order`, `max_order`, `price`, `sale_start`, `sale_end`, `fk_event`, `fk_ticket_type`) VALUES
(2, 'Demo', 'Demo', 20, 1, 5, 5, '2014-06-23 00:00:00', '2014-12-23 00:00:00', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `verified` tinyint(1) NOT NULL DEFAULT '0',
  `gender` tinyint(1) DEFAULT NULL,
  `createtime` datetime DEFAULT NULL,
  `phone` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `avatar_path` varchar(128) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fk_address` bigint(20) unsigned NOT NULL,
  `fk_user_role` smallint(5) unsigned NOT NULL,
  `fk_user_discount` smallint(5) unsigned NOT NULL,
  `fk_user_type` smallint(5) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email_UNIQUE` (`email`),
  UNIQUE KEY `username_UNIQUE` (`username`),
  KEY `fk_user_location1_idx` (`fk_address`),
  KEY `fk_user_role1_idx` (`fk_user_role`),
  KEY `fk_user_discount1_idx` (`fk_user_discount`),
  KEY `fk_user_type1_idx` (`fk_user_type`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `email`, `verified`, `gender`, `createtime`, `phone`, `avatar_path`, `fk_address`, `fk_user_role`, `fk_user_discount`, `fk_user_type`) VALUES
(1, 'demo', 'demo', 'dario@yopoint.com', 1, 0, '2014-06-22 00:00:00', '07456610387', '''''', 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_log`
--

CREATE TABLE `user_log` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `datetime` datetime NOT NULL,
  `fk_user` bigint(20) unsigned NOT NULL,
  `fk_user_action` smallint(5) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_user_log_user1_idx` (`fk_user`),
  KEY `fk_user_log_action1_idx` (`fk_user_action`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `user_stats`
--

CREATE TABLE `user_stats` (
  `id` int(11) NOT NULL,
  `like` tinyint(1) DEFAULT '0',
  `comment` smallint(5) unsigned DEFAULT '0',
  `share` smallint(5) unsigned DEFAULT '0',
  `view_counter` smallint(5) unsigned DEFAULT '0',
  `purchase_counter` smallint(5) unsigned DEFAULT '0',
  `fk_event_number` bigint(20) unsigned NOT NULL,
  `fk_user_number` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_user_stats_event1_idx` (`fk_event_number`),
  KEY `fk_user_stats_user1_idx` (`fk_user_number`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `wallet`
--

CREATE TABLE `wallet` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `description` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fk_user_id` bigint(20) unsigned NOT NULL,
  `fk_action` smallint(5) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_user_has_reward_type_user1_idx` (`fk_user_id`),
  KEY `fk_wallet_p_user_action1_idx` (`fk_action`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `card`
--
ALTER TABLE `card`
  ADD CONSTRAINT `fk_card_user1` FOREIGN KEY (`fk_card_user`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_card_p_card_type1` FOREIGN KEY (`fk_card_type`) REFERENCES `p_card_type` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `event_stats`
--
ALTER TABLE `event_stats`
  ADD CONSTRAINT `fk_event_stats_event1` FOREIGN KEY (`fk_event_related`) REFERENCES `event` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `fk_payment_purchase1` FOREIGN KEY (`fk_purchase`) REFERENCES `purchase` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_payment_p_payment_type1` FOREIGN KEY (`fk_p_payment_type`) REFERENCES `p_payment_type` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `picture`
--
ALTER TABLE `picture`
  ADD CONSTRAINT `fk_pic_event1` FOREIGN KEY (`fk_event`) REFERENCES `event` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `purchase`
--
ALTER TABLE `purchase`
  ADD CONSTRAINT `fk_ticket_has_user_ticket1` FOREIGN KEY (`fk_ticket`) REFERENCES `ticket` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_ticket_has_user_user1` FOREIGN KEY (`fk_user`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `seat`
--
ALTER TABLE `seat`
  ADD CONSTRAINT `fk_seat_ticket` FOREIGN KEY (`fk_ticket_id`) REFERENCES `ticket` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `ticket`
--
ALTER TABLE `ticket`
  ADD CONSTRAINT `fk_ticket_event1` FOREIGN KEY (`fk_event`) REFERENCES `event` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_ticket_type1` FOREIGN KEY (`fk_ticket_type`) REFERENCES `p_ticket_type` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `fk_user_discount1` FOREIGN KEY (`fk_user_discount`) REFERENCES `p_user_discount` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_user_location1` FOREIGN KEY (`fk_address`) REFERENCES `location` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_user_role1` FOREIGN KEY (`fk_user_role`) REFERENCES `p_user_role` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_user_type1` FOREIGN KEY (`fk_user_type`) REFERENCES `p_user_type` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `user_log`
--
ALTER TABLE `user_log`
  ADD CONSTRAINT `fk_user_log_user1` FOREIGN KEY (`fk_user`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_user_log_action1` FOREIGN KEY (`fk_user_action`) REFERENCES `p_user_action` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `user_stats`
--
ALTER TABLE `user_stats`
  ADD CONSTRAINT `fk_user_stats_event1` FOREIGN KEY (`fk_event_number`) REFERENCES `event` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_user_stats_user1` FOREIGN KEY (`fk_user_number`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `wallet`
--
ALTER TABLE `wallet`
  ADD CONSTRAINT `fk_user_has_reward_type_user1` FOREIGN KEY (`fk_user_id`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_wallet_p_user_action1` FOREIGN KEY (`fk_action`) REFERENCES `p_user_action` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;
