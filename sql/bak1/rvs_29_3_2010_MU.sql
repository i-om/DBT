-- phpMyAdmin SQL Dump
-- version 2.10.1
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Mar 30, 2010 at 06:42 AM
-- Server version: 5.0.45
-- PHP Version: 5.2.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Database: `rvs`
--
-- to reset Database
DROP DATABASE IF EXISTS `db_rvs` ;

-- create database

CREATE DATABASE `db_rvs` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `db_rvs`;

-- --------------------------------------------------------

-- 
-- Table structure for table `tbrvs`
-- 
CREATE TABLE `tb_rvs_patient` (
  `tb_rvs_patient_id` int(10) NOT NULL auto_increment,
  `tb_rvs_patient_sTextName` varchar(50) default NULL,
  `tb_rvs_patient_sTextAge` varchar(50) default NULL,
  `tb_rvs_patient_sSelSex` varchar(20) default NULL,
  `tb_rvs_patient_sTaAddress` varchar(1000) default NULL,
  `tb_rvs_patient_sTextCity` varchar(50) default NULL,
  `tb_rvs_patient_sTextGeographicalLocality` varchar(1000) default NULL,
  `tb_rvs_patient_sTextOccupation` varchar(100) default NULL,
  `tb_rvs_patient_sTextVisitIds` varchar(100) default NULL,
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
  `tb_rvs_visit_sTextCity` varchar(50) default NULL,
  `tb_rvs_visit_sTextGeographicalLocality` varchar(1000) default NULL,
  `tb_rvs_visit_sTextOccupation` varchar(100) default NULL,
  `tb_rvs_visit_sTextSiteOfBite` varchar(100) default NULL,
  `tb_rvs_visit_sSelAware` varchar(20) default NULL,
  `tb_rvs_visit_sSelHistory` varchar(20) default NULL,
  `tb_rvs_visit_sTaHistoryAllergies` varchar(1000) default NULL,
  `tb_rvs_visit_sTaDetailsOfAnimalBite` varchar(1000) default NULL,
  `tb_rvs_visit_sSelWhoBite` varchar(20) default NULL,
  `tb_rvs_visit_sSelTreatment` varchar(20) default NULL,
  `tb_rvs_visit_sTaLocal` varchar(1000) default NULL,
  `tb_rvs_visit_sSelSystemic` varchar(20) default NULL,
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
  `tb_rvs_visit_sSelBrainDerived` varchar(20) default NULL,
  `tb_rvs_visit_sTextManufacturerNo` varchar(100) default NULL,
  `tb_rvs_visit_sTextRouteOfAdministration` varchar(100) default NULL,
  `tb_rvs_visit_sTextQuantityAdministered` varchar(100) default NULL,
  `tb_rvs_visit_sTaDatesAdministered` varchar(1000) default NULL,
  `tb_rvs_visit_sTaRabiesVaccination` varchar(1000) default NULL,
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
  `tb_rvs_visit_dTextActualEntryDate` date default NULL,
  `tb_rvs_visit_tTextActualEntryTime` time default NULL,
  `tb_rvs_visit_sTextEntryUser` varchar(50) default NULL,
  `tb_rvs_visit_extra1` varchar(100) default NULL,
  `tb_rvs_visit_extra2` varchar(100) default NULL,
  `tb_rvs_visit_extra3` varchar(100) default NULL,
  PRIMARY KEY  (`tb_rvs_visit_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- 
-- Dumping data for table `tbrvs`
-- 

