-- phpMyAdmin SQL Dump
-- version 2.10.1
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Mar 08, 2010 at 07:44 PM
-- Server version: 5.0.45
-- PHP Version: 5.2.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Database: `db_rvs_1`
--
DROP DATABASE IF EXISTS `db_rvs_1` ;
DROP DATABASE IF EXISTS `db_rvs_2` ;

CREATE DATABASE `db_rvs_1` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `db_rvs_1`;

-- --------------------------------------------------------

-- 
-- Table structure for table `contact`
-- 

CREATE TABLE `contact` (
  `id` int(5) NOT NULL auto_increment,
  `first_name` varchar(35) default NULL,
  `last_name` varchar(35) default NULL,
  `address` varchar(110) default NULL,
  `city` varchar(100) default NULL,
  `pincode` varchar(100) default NULL,
  `state` varchar(110) default NULL,
  `country` varchar(110) default NULL,

  `phone_no` varchar(100) default NULL,
  `mobile_no` varchar(100) default NULL,
  `email` varchar(35) default NULL,
  `login_id` varchar(100) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- 
-- Dumping data for table `contact`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `rt_comm_display`
-- 

CREATE TABLE `rt_comm_display` (
  `rt_comm_display_id` int(11) unsigned NOT NULL auto_increment,
  `rt_comm_to_name` varchar(128) default NULL,
  `rt_comm_to_user_id` int(10) default NULL,
  `rt_comm_tag` varchar(256) default NULL,
  `rt_comm_message` text,
  `rt_comm_sched_date` date NOT NULL default '0000-00-00',
  `rt_comm_sched_time` time NOT NULL default '00:00:00',
  `rt_comm_module_name` varchar(128) default NULL,
  `rt_comm_module_id` int(11) default NULL,
  `rt_comm_creation_date` date NOT NULL default '0000-00-00',
  `rt_comm_creation_time` time NOT NULL default '00:00:00',
  `rt_comm_creation_user_id` varchar(30) default NULL,
  `rt_comm_last_update_date` date NOT NULL default '0000-00-00',
  `rt_comm_last_update_time` time NOT NULL default '00:00:00',
  `rt_comm_last_update_user_id` varchar(30) default NULL,
  `rt_comm_display_manager_id` int(10) default NULL,
  `rt_comm_manager_id` int(10) default NULL,
  `rt_comm_extra1` varchar(256) default NULL,
  `rt_comm_extra2` varchar(256) default NULL,
  `rt_comm_extra3` varchar(256) default NULL,
  PRIMARY KEY  (`rt_comm_display_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- 
-- Dumping data for table `rt_comm_display`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `rt_comm_display_default_message`
-- 

CREATE TABLE `rt_comm_display_default_message` (
  `rt_comm_display_message_id` int(11) unsigned NOT NULL auto_increment,
  `rt_comm_display_name` varchar(128) default NULL,
  `rt_comm_display_message` text,
  `rt_comm_display_creation_date` date NOT NULL default '0000-00-00',
  `rt_comm_display_creation_time` time NOT NULL default '00:00:00',
  `rt_comm_display_creation_user_id` varchar(30) default NULL,
  `rt_comm_display_last_update_date` date NOT NULL default '0000-00-00',
  `rt_comm_display_last_update_time` time NOT NULL default '00:00:00',
  `rt_comm_display_last_update_user_id` varchar(30) default NULL,
  `rt_comm_display_extra1` varchar(256) default NULL,
  `rt_comm_display_extra2` varchar(256) default NULL,
  `rt_comm_display_extra3` varchar(256) default NULL,
  PRIMARY KEY  (`rt_comm_display_message_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- 
-- Dumping data for table `rt_comm_display_default_message`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `rt_comm_display_manager`
-- 

CREATE TABLE `rt_comm_display_manager` (
  `rt_display_manager_id` int(11) unsigned NOT NULL auto_increment,
  `rt_display_manager_name` varchar(128) default NULL,
  `rt_display_manager_creation_date` date NOT NULL default '0000-00-00',
  `rt_display_manager_creation_time` time NOT NULL default '00:00:00',
  `rt_display_manager_creation_user_id` varchar(30) default NULL,
  `rt_display_manager_last_update_date` date NOT NULL default '0000-00-00',
  `rt_display_manager_last_update_time` time NOT NULL default '00:00:00',
  `rt_display_manager_last_update_user_id` varchar(30) default NULL,
  `rt_display_manager_extra1` varchar(256) default NULL,
  `rt_display_manager_extra2` varchar(256) default NULL,
  `rt_display_manager_extra3` varchar(256) default NULL,
  PRIMARY KEY  (`rt_display_manager_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- 
-- Dumping data for table `rt_comm_display_manager`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `rt_comm_display_module_manager`
-- 

CREATE TABLE `rt_comm_display_module_manager` (
  `rt_comm_display_module_manager_id` int(11) unsigned NOT NULL auto_increment,
  `rt_comm_display_module_name` varchar(128) default NULL,
  `rt_comm_display_module_manager_ids` varchar(512) default NULL,
  `rt_comm_display_module_message_ids` varchar(512) default NULL,
  `rt_comm_display_module_creation_date` date NOT NULL default '0000-00-00',
  `rt_comm_display_module_creation_time` time NOT NULL default '00:00:00',
  `rt_comm_display_module_creation_user_id` varchar(30) default NULL,
  `rt_comm_display_module_last_update_date` date NOT NULL default '0000-00-00',
  `rt_comm_display_module_last_update_time` time NOT NULL default '00:00:00',
  `rt_comm_display_module_last_update_user_id` varchar(30) default NULL,
  `rt_comm_display_module_extra1` varchar(256) default NULL,
  `rt_comm_display_module_extra2` varchar(256) default NULL,
  `rt_comm_display_module_extra3` varchar(256) default NULL,
  PRIMARY KEY  (`rt_comm_display_module_manager_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- 
-- Dumping data for table `rt_comm_display_module_manager`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `rt_comm_email`
-- 

CREATE TABLE `rt_comm_email` (
  `rt_comm_email_id` int(11) unsigned NOT NULL auto_increment,
  `rt_comm_to_name` varchar(8500) default NULL,
  `rt_comm_to_email_id` varchar(16000) default NULL,
  `rt_comm_from_name` varchar(128) default NULL,
  `rt_comm_from_email_id` varchar(128) default NULL,
  `rt_comm_subject` varchar(256) default NULL,
  `rt_comm_message` text,
  `rt_comm_attachment` varchar(1024) default NULL,
  `rt_comm_status` enum('pending','sent') NOT NULL default 'pending',
  `rt_comm_sched_date` date NOT NULL default '0000-00-00',
  `rt_comm_sched_time` time NOT NULL default '00:00:00',
  `rt_comm_sent_date` date NOT NULL default '0000-00-00',
  `rt_comm_sent_time` time NOT NULL default '00:00:00',
  `rt_comm_module_name` varchar(128) default NULL,
  `rt_comm_module_id` int(11) default NULL,
  `rt_comm_creation_date` date NOT NULL default '0000-00-00',
  `rt_comm_creation_time` time NOT NULL default '00:00:00',
  `rt_comm_creation_user_id` varchar(30) default NULL,
  `rt_comm_last_update_date` date NOT NULL default '0000-00-00',
  `rt_comm_last_update_time` time NOT NULL default '00:00:00',
  `rt_comm_last_update_user_id` varchar(30) default NULL,
  `rt_comm_email_manager_id` int(11) default NULL,
  `rt_comm_manager_id` int(10) default NULL,
  `rt_comm_extra1` varchar(256) default NULL,
  `rt_comm_extra2` varchar(256) default NULL,
  `rt_comm_extra3` varchar(256) default NULL,
  PRIMARY KEY  (`rt_comm_email_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- 
-- Dumping data for table `rt_comm_email`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `rt_comm_email_default_message`
-- 

CREATE TABLE `rt_comm_email_default_message` (
  `rt_comm_email_message_id` int(11) unsigned NOT NULL auto_increment,
  `rt_comm_email_name` varchar(128) default NULL,
  `rt_comm_email_subject` varchar(256) default NULL,
  `rt_comm_email_message` text,
  `rt_comm_email_creation_date` date NOT NULL default '0000-00-00',
  `rt_comm_email_creation_time` time NOT NULL default '00:00:00',
  `rt_comm_email_creation_user_id` varchar(30) NOT NULL,
  `rt_comm_email_last_update_date` date NOT NULL default '0000-00-00',
  `rt_comm_email_last_update_time` time NOT NULL default '00:00:00',
  `rt_comm_email_last_update_user_id` varchar(30) default NULL,
  `rt_comm_email_extra1` varchar(256) default NULL,
  `rt_comm_email_extra2` varchar(256) default NULL,
  `rt_comm_email_extra3` varchar(256) default NULL,
  PRIMARY KEY  (`rt_comm_email_message_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- 
-- Dumping data for table `rt_comm_email_default_message`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `rt_comm_email_manager`
-- 

CREATE TABLE `rt_comm_email_manager` (
  `rt_email_manager_id` int(11) unsigned NOT NULL auto_increment,
  `rt_email_manager_name` varchar(128) default NULL,
  `rt_email_manager_email_id` varchar(128) default NULL,
  `rt_email_manager_email_password` varchar(128) default NULL,
  `rt_email_manager_email_name` varchar(128) default NULL,
  `rt_email_manager_creation_date` date NOT NULL default '0000-00-00',
  `rt_email_manager_creation_time` time NOT NULL default '00:00:00',
  `rt_email_manager_creation_user_id` varchar(30) default NULL,
  `rt_email_manager_last_update_date` date NOT NULL default '0000-00-00',
  `rt_email_manager_last_update_time` time NOT NULL default '00:00:00',
  `rt_email_manager_last_update_user_id` varchar(30) default NULL,
  `rt_email_manager_extra1` varchar(256) default NULL,
  `rt_email_manager_extra2` varchar(256) default NULL,
  `rt_email_manager_extra3` varchar(256) default NULL,
  PRIMARY KEY  (`rt_email_manager_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- 
-- Dumping data for table `rt_comm_email_manager`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `rt_comm_email_module_manager`
-- 

CREATE TABLE `rt_comm_email_module_manager` (
  `rt_comm_email_module_manager_id` int(11) unsigned NOT NULL auto_increment,
  `rt_comm_email_module_name` varchar(128) default NULL,
  `rt_comm_email_module_manager_ids` varchar(512) default NULL,
  `rt_comm_email_module_message_ids` varchar(512) default NULL,
  `rt_comm_email_module_creation_date` date NOT NULL default '0000-00-00',
  `rt_comm_email_module_creation_time` time NOT NULL default '00:00:00',
  `rt_comm_email_module_creation_user_id` varchar(30) default NULL,
  `rt_comm_email_module_last_update_date` date NOT NULL default '0000-00-00',
  `rt_comm_email_module_last_update_time` time NOT NULL default '00:00:00',
  `rt_comm_email_module_last_update_user_id` varchar(30) default NULL,
  `rt_comm_email_module_extra1` varchar(256) default NULL,
  `rt_comm_email_module_extra2` varchar(256) default NULL,
  `rt_comm_email_module_extra3` varchar(256) default NULL,
  PRIMARY KEY  (`rt_comm_email_module_manager_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- 
-- Dumping data for table `rt_comm_email_module_manager`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `rt_comm_manager`
-- 

CREATE TABLE `rt_comm_manager` (
  `rt_comm_manager_id` int(11) unsigned NOT NULL auto_increment,
  `rt_comm_manager_type` enum('COMM_DISPLAY','COMM_EMAIL','COMM_SMS','COMM_DISPLAY_EMAIL','COMM_DISPLAY_SMS','COMM_EMAIL_SMS','COMM_DISPLAY_EMAIL_SMS') NOT NULL default 'COMM_DISPLAY',
  `rt_comm_manager_type_ids` varchar(1024) default NULL,
  `rt_comm_manager_message_details` varchar(512) default NULL,
  `rt_comm_manager_from_user_id` int(11) default NULL,
  `rt_comm_manager_schedule_date` date NOT NULL default '0000-00-00',
  `rt_comm_manager_repeat` enum('no','yes') NOT NULL default 'no',
  `rt_comm_manager_expire_date` date NOT NULL default '0000-00-00',
  `rt_comm_manager_frequency` varchar(8) default NULL,
  `rt_comm_manager_creation_date` date NOT NULL default '0000-00-00',
  `rt_comm_manager_creation_time` time NOT NULL default '00:00:00',
  `rt_comm_manager_creation_user_id` varchar(30) default NULL,
  `rt_comm_manager_last_update_date` date NOT NULL default '0000-00-00',
  `rt_comm_manager_last_update_time` time NOT NULL default '00:00:00',
  `rt_comm_manager_last_update_user_id` varchar(30) default NULL,
  `rt_comm_manager_extra1` varchar(256) default NULL,
  `rt_comm_manager_extra2` varchar(256) default NULL,
  `rt_comm_manager_extra3` varchar(256) default NULL,
  PRIMARY KEY  (`rt_comm_manager_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- 
-- Dumping data for table `rt_comm_manager`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `rt_comm_sms`
-- 

CREATE TABLE `rt_comm_sms` (
  `rt_comm_sms_id` int(11) unsigned NOT NULL auto_increment,
  `rt_comm_to_name` varchar(8500) default NULL,
  `rt_comm_to_mobile` varchar(3500) default NULL,
  `rt_comm_from_name` varchar(128) default NULL,
  `rt_comm_from_mobile` varchar(128) default NULL,
  `rt_comm_message` text,
  `rt_comm_status` enum('pending','sent') NOT NULL default 'pending',
  `rt_comm_sched_date` date NOT NULL default '0000-00-00',
  `rt_comm_sched_time` time NOT NULL default '00:00:00',
  `rt_comm_sent_date` date NOT NULL default '0000-00-00',
  `rt_comm_sent_time` time NOT NULL default '00:00:00',
  `rt_comm_module_name` varchar(128) default NULL,
  `rt_comm_module_id` int(11) default NULL,
  `rt_comm_creation_date` date NOT NULL default '0000-00-00',
  `rt_comm_creation_time` time NOT NULL default '00:00:00',
  `rt_comm_creation_user_id` varchar(30) default NULL,
  `rt_comm_last_update_date` date NOT NULL default '0000-00-00',
  `rt_comm_last_update_time` time NOT NULL default '00:00:00',
  `rt_comm_last_update_user_id` varchar(30) default NULL,
  `rt_comm_sender_id` varchar(128) default NULL,
  `rt_comm_plus91_sms_id` varchar(128) default NULL,
  `rt_comm_sms_manager_id` int(10) default NULL,
  `rt_comm_manager_id` int(10) default NULL,
  `rt_comm_extra1` varchar(256) default NULL,
  `rt_comm_extra2` varchar(256) default NULL,
  `rt_comm_extra3` varchar(256) default NULL,
  PRIMARY KEY  (`rt_comm_sms_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- 
-- Dumping data for table `rt_comm_sms`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `rt_comm_sms_default_message`
-- 

CREATE TABLE `rt_comm_sms_default_message` (
  `rt_comm_sms_message_id` int(11) unsigned NOT NULL auto_increment,
  `rt_comm_sms_name` varchar(128) default NULL,
  `rt_comm_sms_message` text,
  `rt_comm_sms_creation_date` date NOT NULL default '0000-00-00',
  `rt_comm_sms_creation_time` time NOT NULL default '00:00:00',
  `rt_comm_sms_creation_user_id` varchar(30) default NULL,
  `rt_comm_sms_last_update_date` date NOT NULL default '0000-00-00',
  `rt_comm_sms_last_update_time` time NOT NULL default '00:00:00',
  `rt_comm_sms_last_update_user_id` varchar(30) default NULL,
  `rt_comm_sms_extra1` varchar(256) default NULL,
  `rt_comm_sms_extra2` varchar(256) default NULL,
  `rt_comm_sms_extra3` varchar(256) default NULL,
  PRIMARY KEY  (`rt_comm_sms_message_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- 
-- Dumping data for table `rt_comm_sms_default_message`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `rt_comm_sms_manager`
-- 

CREATE TABLE `rt_comm_sms_manager` (
  `rt_sms_manager_id` int(11) unsigned NOT NULL auto_increment,
  `rt_sms_manager_plus91_sms_id` varchar(128) default NULL,
  `rt_sms_manager_name` varchar(128) default NULL,
  `rt_sms_manager_mobile` varchar(128) default NULL,
  `rt_sms_manager_sender_id` varchar(128) default NULL,
  `rt_sms_manager_organization_name` varchar(128) default NULL,
  `rt_sms_manager_pending_credits` varchar(128) default NULL,
  `rt_sms_manager_expire_date` date NOT NULL default '0000-00-00',
  `rt_sms_manager_last_purchase_date` date NOT NULL default '0000-00-00',
  `rt_sms_manager_last_purchase_credits` varchar(128) default NULL,
  `rt_sms_manager_last_expire_date` date NOT NULL default '0000-00-00',
  `rt_sms_manager_creation_date` date NOT NULL default '0000-00-00',
  `rt_sms_manager_creation_time` time NOT NULL default '00:00:00',
  `rt_sms_manager_creation_user_id` varchar(30) default NULL,
  `rt_sms_manager_last_update_date` date NOT NULL default '0000-00-00',
  `rt_sms_manager_last_update_time` time NOT NULL default '00:00:00',
  `rt_sms_manager_last_update_user_id` varchar(30) default NULL,
  `rt_sms_manager_extra1` varchar(256) default NULL,
  `rt_sms_manager_extra2` varchar(256) default NULL,
  `rt_sms_manager_extra3` varchar(256) default NULL,
  PRIMARY KEY  (`rt_sms_manager_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- 
-- Dumping data for table `rt_comm_sms_manager`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `rt_comm_sms_module_manager`
-- 

CREATE TABLE `rt_comm_sms_module_manager` (
  `rt_comm_sms_module_manager_id` int(11) unsigned NOT NULL auto_increment,
  `rt_comm_sms_module_name` varchar(128) default NULL,
  `rt_comm_sms_module_manager_ids` varchar(512) default NULL,
  `rt_comm_sms_module_message_ids` varchar(512) default NULL,
  `rt_comm_sms_module_creation_date` date NOT NULL default '0000-00-00',
  `rt_comm_sms_module_creation_time` time NOT NULL default '00:00:00',
  `rt_comm_sms_module_creation_user_id` varchar(30) default NULL,
  `rt_comm_sms_module_last_update_date` date NOT NULL default '0000-00-00',
  `rt_comm_sms_module_last_update_time` time NOT NULL default '00:00:00',
  `rt_comm_sms_module_last_update_user_id` varchar(30) default NULL,
  `rt_comm_sms_module_extra1` varchar(256) default NULL,
  `rt_comm_sms_module_extra2` varchar(256) default NULL,
  `rt_comm_sms_module_extra3` varchar(256) default NULL,
  PRIMARY KEY  (`rt_comm_sms_module_manager_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- 
-- Dumping data for table `rt_comm_sms_module_manager`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `services`
-- 

CREATE TABLE `services` (
  `id` int(2) NOT NULL auto_increment,
  `name` varchar(30) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- 
-- Dumping data for table `services`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `templates`
-- 

CREATE TABLE `templates` (
  `idTemp` int(5) NOT NULL auto_increment,
  `title` varchar(30) NOT NULL,
  `message` varchar(100) default NULL,
  `type` varchar(10) NOT NULL,
  `login_id` varchar(10) NOT NULL,
  PRIMARY KEY  (`idTemp`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- 
-- Dumping data for table `templates`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `userinfo`
-- 

CREATE TABLE `userinfo` (
  `id` int(5) NOT NULL auto_increment,
  `login_id` varchar(15) NOT NULL COMMENT 'unique id for login',
  `password` varchar(6) NOT NULL COMMENT 'password of user',
  `name` varchar(30) NOT NULL COMMENT 'name of user',
  `hint_question` varchar(50) NOT NULL COMMENT 'hint question',
  `hint_answer` varchar(20) NOT NULL COMMENT 'answer of question',
  `email` varchar(30) default NULL,
  `rights` varchar(10) NOT NULL default 'General',
  `department` varchar(30) NOT NULL,
  `contact_no` varchar(15) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

-- 
-- Dumping data for table `userinfo`
-- 

INSERT INTO `userinfo` (`id`, `login_id`, `password`, `name`, `hint_question`, `hint_answer`, `email`, `rights`, `department`, `contact_no`) VALUES 
(1, 'admin', 'admin', 'Admin', 'Whatisthenameofyourfirstschool?', 'admin', 'support@plus91.in', 'admin', 'Management', '9821142465');

-- Table structure for table `tbrvs`
--
CREATE TABLE `tb_rvs_patient` (
  `tb_rvs_patient_id` int(10) NOT NULL auto_increment,
  `tb_rvs_patient_sTextName` varchar(100) default NULL,
  `tb_rvs_patient_sTextAge` varchar(50) default NULL,
  `tb_rvs_patient_sSelSex` varchar(20) default NULL,
  `tb_rvs_patient_sTaAddress` varchar(1000) default NULL,
  `tb_rvs_patient_sTextPhoneNum` varchar(20) default NULL,
  `tb_rvs_patient_sTextCity` varchar(100) default NULL,
  `tb_rvs_patient_sTextGeographicalLocality` varchar(1000) default NULL,
  `tb_rvs_patient_sTextOccupation` varchar(100) default NULL,
  `tb_rvs_patient_sSelKupEdu` varchar(10) default NULL,
  `tb_rvs_patient_sSelKupOcu` varchar(10) default NULL,
  `tb_rvs_patient_sSelKupInc` varchar(10) default NULL,
  `tb_rvs_patient_sKupScale` varchar(10) default NULL,
  `tb_rvs_patient_sTextVisitIds` varchar(1000) default NULL,
  `tb_rvs_patient_dTextActualEntryDate` date default NULL,
  `tb_rvs_patient_tTextActualEntryTime` time default NULL,
  `tb_rvs_patient_sTextEntryUser` varchar(50) default NULL,
  PRIMARY KEY  (`tb_rvs_patient_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;




CREATE TABLE `tb_rvs_visit` (
  `tb_rvs_visit_id` int(10) NOT NULL auto_increment,
  `tb_rvs_visit_patient_id` varchar(20)default NULL,
  `tb_rvs_visit_dTextEntryDate` date default NULL,
  `tb_rvs_visit_sTextName` varchar(50) default NULL,
  `tb_rvs_visit_sTextAge` varchar(50) default NULL,
  `tb_rvs_visit_sSelSex` varchar(20) default NULL,
  `tb_rvs_visit_sTaAddress` varchar(1000) default NULL,
  `tb_rvs_visit_sTextPhoneNum` varchar(20) default NULL,
  `tb_rvs_visit_sTextCity` varchar(50) default NULL,
  `tb_rvs_visit_sTextGeographicalLocality` varchar(1000) default NULL,
  `tb_rvs_visit_sTextOccupation` varchar(100) default NULL,
  `tb_rvs_visit_sSelKupEdu` varchar(10) default NULL,
  `tb_rvs_visit_sSelKupOcu` varchar(10) default NULL,
  `tb_rvs_visit_sSelKupInc` varchar(10) default NULL,
  `tb_rvs_visit_sKupScale` varchar(10) default NULL,
  `tb_rvs_visit_sSelHistory` varchar(20) default NULL,
  `tb_rvs_visit_sTaHistoryAllergies` varchar(1000) default NULL,
  `tb_rvs_visit_sDetailsOfAnimalBiteAnimal` varchar(20) default NULL,
  `tb_rvs_visit_sDetailsOtherAnimal` varchar(100) default NULL,
  `tb_rvs_visit_sTextSiteOfBite` varchar(100) default NULL,
  `tb_rvs_visit_sDetailsOfAnimalBiteWas` varchar(20) default NULL,
  `tb_rvs_visit_sDetailsOfAnimalAnimalWas` varchar(20) default NULL,
  `tb_rvs_visit_dTextBiteDate` varchar(40) default NULL,
  `tb_rvs_visit_sTaBiteDetailsAndExtent` varchar(1000) default NULL,
  `tb_rvs_visit_sDetailsAssociatedBleeding` varchar(10) default NULL,
  `tb_rvs_visit_sDetailsHowSoon` varchar(100) default NULL,
  `tb_rvs_visit_sDetailsTxAtHome` varchar(100) default NULL,
  `tb_rvs_visit_sDetailsTxAtLocalP` varchar(100) default NULL,
  `tb_rvs_visit_sDetailsDogRabidQ` varchar(15) default NULL,
  `tb_rvs_visit_sSelAware` varchar(20) default NULL,
  `tb_rvs_visit_sDetailsWashWound` varchar(10) default NULL,
  `tb_rvs_visit_sDetailsinjGiven` varchar(15) default NULL,
  `tb_rvs_visit_sSelWhoBite` varchar(20) default NULL,
  `tb_rvs_visit_sTaLocal` varchar(1000) default NULL,
  `tb_rvs_visit_sSelSystemic` varchar(20) default NULL,
  `tb_rvs_visit_sTaOther` varchar(500) default NULL,
  `tb_rvs_visit_sTaConcommitant` varchar(1000) default NULL,
  `tb_rvs_visit_sSelBrainDerived` varchar(20) default NULL,
  `tb_rvs_visit_sTextManufacturerNo` varchar(100) default NULL,
  `tb_rvs_visit_sTextRouteOfAdministration` varchar(100) default NULL,
  `tb_rvs_visit_sTextQuantityAdministered` varchar(100) default NULL,
  `tb_rvs_visit_sTaDatesAdministered` varchar(1000) default NULL,
  `tb_rvs_visit_sTaRabiesVaccination` varchar(1000) default NULL,
  `tb_rvs_visit_sSelIgRecv` varchar(20) default NULL,
  `tb_rvs_visit_sTaImmunoNotRcvdWhy` varchar(500) default NULL,
  `tb_rvs_visit_sTaImmunoRcvdSE` varchar(500) default NULL,
  `tb_rvs_visit_sSelBrainDerivedImmunoglobulin` varchar(20) default NULL,
  `tb_rvs_visit_sTextSensitivityTest` varchar(100) default NULL,
  `tb_rvs_visit_sTextManufacturerNoImmunoglobulin` varchar(100) default NULL,
  `tb_rvs_visit_sTextRouteOfAdministrationImmunoglobulin` varchar(100) default NULL,
  `tb_rvs_visit_sTextQuantityAdministeredImmunoglobulin` varchar(100) default NULL,
  `tb_rvs_visit_sTaDatesAdministeredImmunoglobulin` varchar(1000) default NULL,
  `tb_rvs_visit_sTaRabiesImmunoglobulin` varchar(1000) default NULL,
  `tb_rvs_visit_sTaAdverseEventsImmunoglobulin` varchar(1000) default NULL,
  `tb_rvs_visit_sSelStatus` varchar(20) default NULL,
  `tb_rvs_visit_sTaStatusOfOther` varchar(1000) default NULL,
  `tb_rvs_visit_sTextDetailsBitingRVC` varchar(100) default NULL,
  `tb_rvs_visit_sTextDetailsBitingARV` varchar(100) default NULL,
  `tb_rvs_visit_sTextDetailsBitingML` varchar(100) default NULL,
  `tb_rvs_visit_sTextDetailsStray` varchar(100) default NULL,
  `tb_rvs_visit_sTextWeight` varchar(100) default NULL,
  `tb_rvs_visit_sTextSexAnimal` varchar(100) default NULL,
  `tb_rvs_visit_sTextBreed` varchar(100) default NULL,
  `tb_rvs_visit_sTextSpecies` varchar(100) default NULL,
  `tb_rvs_visit_sTextAnimalvaccinated` varchar(100) default NULL,
  `tb_rvs_visit_sSelWhatHappenedAnimal` varchar(20) default NULL,
  `tb_rvs_visit_chkFluorescent` varchar(3) default NULL,
  `tb_rvs_visit_chkNegri` varchar(3) default NULL,
  `tb_rvs_visit_chkInoculation` varchar(3) default NULL,
  `tb_rvs_visit_chkOtherTests` varchar(3) default NULL,
  `tb_rvs_visit_sTextCostTravel` varchar(10) default NULL,
  `tb_rvs_visit_sTextCostMedVacc` varchar(10) default NULL,
  `tb_rvs_visit_sTextCostMedSera` varchar(10) default NULL,
  `tb_rvs_visit_sTextCostMedLocal` varchar(10) default NULL,
  `tb_rvs_visit_sTextCostLoss` varchar(10) default NULL,
  `tb_rvs_visit_sTextCostTotal` varchar(10) default NULL,
  `tb_rvs_visit_sTextLostDaysVictim` varchar(10) default NULL,
  `tb_rvs_visit_sTextLostDaysAccom` varchar(10) default NULL,
  `tb_rvs_visit_sTaDay0` varchar(1000) default NULL,
  `tb_rvs_visit_sSelDay` varchar(20) default NULL,
  `tb_rvs_visit_sTaDay3` varchar(1000) default NULL,
  `tb_rvs_visit_sSelDay3` varchar(20) default NULL,
  `tb_rvs_visit_sTaDay7` varchar(1000) default NULL,
  `tb_rvs_visit_sSelDay7` varchar(20) default NULL,
  `tb_rvs_visit_sTaDay14` varchar(1000) default NULL,
  `tb_rvs_visit_sSelDay14` varchar(20) default NULL,
  `tb_rvs_visit_sTaDay28` varchar(1000) default NULL,
  `tb_rvs_visit_sSelDay28` varchar(20) default NULL,
  `tb_rvs_visit_dTextActualEntryDate` date default NULL,
  `tb_rvs_visit_tTextActualEntryTime` time default NULL,
  `tb_rvs_visit_sTextEntryUser` varchar(50) default NULL,
  `tb_rvs_visit_extra1` varchar(100) default NULL,
  `tb_rvs_visit_extra2` varchar(100) default NULL,
  `tb_rvs_visit_extra3` varchar(100) default NULL,
  `tb_rvs_visit_extra4` varchar(100) default NULL,
  `tb_rvs_visit_extra5` varchar(100) default NULL,
  `tb_rvs_visit_extra6` varchar(100) default NULL,
  PRIMARY KEY  (`tb_rvs_visit_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `tbrvs`
--

--
-- Database: `db_rvs_2`
--
--
CREATE DATABASE `db_rvs_2` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `db_rvs_2`;

-- --------------------------------------------------------

-- 
-- Table structure for table `reporting`
-- 

CREATE TABLE `reporting` (
  `id` int(5) NOT NULL auto_increment,
  `hospital_name` varchar(20) default NULL,
  `service` varchar(20) default NULL,
  `impatient_no` varchar(10) default NULL,
  `Head_Of_Service` varchar(20) default NULL,
  `Ward_No` varchar(10) default NULL,
  `Bed_No` varchar(10) default NULL,
  `Patient_Name` varchar(30) default NULL,
  `Address` varchar(100) default NULL,
  `Relative_Info` varchar(100) default NULL,
  `Age_Yrs` int(10) default NULL,
  `Age_Mts` int(10) default NULL,
  `Age_Days` int(10) default NULL,
  `Sex` varchar(10) default NULL,
  `Status` varchar(10) default NULL,
  `Community` varchar(20) default NULL,
  `Occupational_Class` varchar(20) default NULL,
  `Economic_Class` varchar(20) default NULL,
  `Employee_Of` varchar(20) default NULL,
  `Telephone_No` int(15) default NULL,
  `Municipal_Ward_No` varchar(10) default NULL,
  `Opd_No` varchar(10) default NULL,
  `Casuality_No` varchar(10) default NULL,
  `Pc_On_Duty` varchar(20) default NULL,
  `Brought_By` varchar(20) default NULL,
  `Station` varchar(30) default NULL,
  `Admission_Date` date default NULL,
  `Admission_Time_Hr` int(10) default NULL,
  `Admission_Time_Min` int(10) default NULL,
  `Admission_Am_Pm` varchar(5) default NULL,
  `Discharged_Date` date default NULL,
  `Discharged_Time_Hr` int(10) default NULL,
  `Discharged_Time_Min` int(10) default NULL,
  `Discharged_Am_Pm` varchar(5) default NULL,
  `Previous_Admission_No_Counter` int(10) default NULL,
  `Previous_Admission_No` varchar(100) default NULL,
  `Days` varchar(10) default NULL,
  `Provisional_Diagnosis` varchar(100) default NULL,
  `Final_Diagnosis` varchar(100) default NULL,
  `Final_Code_No` varchar(10) default NULL,
  `Secondary_Diagnosis` varchar(100) default NULL,
  `Secondary_Code_No` varchar(10) default NULL,
  `Complications` varchar(100) default NULL,
  `Complications_Code_No` varchar(10) default NULL,
  `Operations` varchar(100) default NULL,
  `Operations_Code_No` varchar(10) default NULL,
  `Cured` varchar(5) default NULL,
  `Relieved` varchar(5) default NULL,
  `Unchanged` varchar(5) default NULL,
  `Worse` varchar(5) default NULL,
  `Ama` varchar(5) default NULL,
  `Expired` varchar(5) default NULL,
  `Autopsy` varchar(5) default NULL,
  `Transferred_To` varchar(30) default NULL,
  `sel_Transferred_To` varchar(20) default NULL,
  `Witness` varchar(20) default NULL,
  `Relationship` varchar(20) default NULL,
  `extra1` varchar(30) default NULL,
  `extra2` varchar(30) default NULL,
  `extra3` varchar(30) default NULL,
  `extra4` varchar(30) default NULL,
  `extra5` varchar(30) default NULL,
  `extra6` varchar(30) default NULL,
  `login_id` varchar(10) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- 
-- Dumping data for table `reporting`
-- 

