-- phpMyAdmin SQL Dump
-- version 2.10.1
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: May 31, 2010 at 04:04 AM
-- Server version: 5.0.45
-- PHP Version: 5.2.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Database: `db_rvs_1`
-- 

USE `db_rvs_1`;

-- --------------------------------------------------------

-- 
-- Table structure for table `tb_rvs_visit`
-- 

DROP TABLE IF EXISTS `tb_rvs_visit`;
CREATE TABLE IF NOT EXISTS `tb_rvs_visit` (
  `tb_rvs_visit_id` int(10) NOT NULL auto_increment,
  `tb_rvs_visit_patient_id` varchar(20) default NULL,
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;
