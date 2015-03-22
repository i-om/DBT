-- phpMyAdmin SQL Dump
-- version 2.10.1
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: May 31, 2010 at 04:05 AM
-- Server version: 5.0.45
-- PHP Version: 5.2.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Database: `db_rvs_2`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `reporting`
-- 

DROP TABLE IF EXISTS `reporting`;
CREATE TABLE IF NOT EXISTS `reporting` (
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
