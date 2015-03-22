-- phpMyAdmin SQL Dump
-- version 2.10.1
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Apr 15, 2011 at 09:19 AM
-- Server version: 5.0.45
-- PHP Version: 5.2.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Database: `dbt`
-- 
CREATE DATABASE `dbt` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `dbt`;

-- --------------------------------------------------------

-- 
-- Table structure for table `admin`
-- 

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL auto_increment,
  `DBT_number` varchar(500) default NULL,
  `date_of_initiation` varchar(500) default NULL,
  `investigator_name` varchar(1000) default NULL,
  `place_of_work` varchar(1000) default NULL,
  `speciality` varchar(1000) default NULL,
  `capacity_building` varchar(500) default NULL,
  `patent_filed` varchar(500) default NULL,
  `publication` varchar(500) default NULL,
  `title_of_project` varchar(500) default NULL,
  `area_of_research` varchar(500) default NULL,
  PRIMARY KEY  (`admin_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- 
-- Dumping data for table `admin`
-- 


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
-- Table structure for table `plant`
-- 

CREATE TABLE `plant` (
  `plant_id` int(11) NOT NULL auto_increment,
  `plant_name` varchar(1000) default NULL,
  `plant_latin_name` varchar(500) default NULL,
  `plant_vernacular_name` varchar(500) default NULL,
  `traditional_name` varchar(500) default NULL,
  `traditionally_mentioned` varchar(500) default NULL,
  `traditionally_mentioned_yes` varchar(500) default NULL,
  `part_of_plant` varchar(500) default NULL,
  `admin_id` int(11) NOT NULL,
  PRIMARY KEY  (`plant_id`),
  KEY `admin_id` (`admin_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

-- 
-- Dumping data for table `plant`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `results`
-- 

CREATE TABLE `results` (
  `result_id` int(11) NOT NULL auto_increment,
  `therapeutic_area_of_research` varchar(500) default NULL,
  `basis_of_selection_of_plant` varchar(500) default NULL,
  `name_of_Boimaker` varchar(500) default NULL,
  `description_of_biomaker` varchar(3000) default NULL,
  `chemistry_manufacturig_conrtrol` varchar(500) default NULL,
  `raw_material` varchar(500) default NULL,
  `drug_product` varchar(500) default NULL,
  `finished_product` varchar(500) default NULL,
  `type_of_extract` varchar(500) default NULL,
  `extract_txt` varchar(500) default NULL,
  `type_of_study` varchar(500) default NULL,
  `in_vitro` varchar(500) default NULL,
  `experimental` varchar(500) default NULL,
  `experimental_txt` varchar(3000) default NULL,
  `clinical` varchar(3000) default NULL,
  `model` varchar(3000) default NULL,
  `appropriate` varchar(500) default NULL,
  `novel` varchar(500) default NULL,
  `other` varchar(3000) default NULL,
  `ayush_trust_area` varchar(500) default NULL,
  `ayush_txt` varchar(500) default NULL,
  `hypothesis_generating` varchar(3000) default NULL,
  `confirmatory studies` varchar(3000) default NULL,
  `results` varchar(3000) default NULL,
  `statistical_test` varchar(500) default NULL,
  `statistical_test_details` varchar(3000) default NULL,
  `clinically_relevant` varchar(500) default NULL,
  `clinically_relevant_details` varchar(3000) default NULL,
  `statistically_Significant` varchar(500) default NULL,
  `were_these_tests_appropriate` varchar(500) default NULL,
  `feasibility_of_Developing_a _drug` varchar(500) default NULL,
  `coments` varchar(3000) default NULL,
  `admin_id` int(11) NOT NULL,
  PRIMARY KEY  (`result_id`),
  KEY `admin_id` (`admin_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

-- 
-- Dumping data for table `results`
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- 
-- Dumping data for table `userinfo`
-- 

INSERT INTO `userinfo` (`id`, `login_id`, `password`, `name`, `hint_question`, `hint_answer`, `email`, `rights`, `department`, `contact_no`) VALUES 
(1, 'admin', 'admin', 'Admin', 'Whatisthenameofyourfirstschool?', 'admin', 'support@plus91.in', 'admin', 'Management', '9821142465');

-- 
-- Constraints for dumped tables
-- 

-- 
-- Constraints for table `plant`
-- 
ALTER TABLE `plant`
  ADD CONSTRAINT `plant_ibfk_1` FOREIGN KEY (`admin_id`) REFERENCES `admin` (`admin_id`) ON DELETE CASCADE ON UPDATE CASCADE;

-- 
-- Constraints for table `results`
-- 
ALTER TABLE `results`
  ADD CONSTRAINT `results_ibfk_1` FOREIGN KEY (`admin_id`) REFERENCES `admin` (`admin_id`) ON DELETE CASCADE ON UPDATE CASCADE;
