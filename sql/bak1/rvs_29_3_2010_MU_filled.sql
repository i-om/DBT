-- phpMyAdmin SQL Dump
-- version 2.10.1
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Mar 31, 2010 at 08:12 AM
-- Server version: 5.0.45
-- PHP Version: 5.2.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Database: `db_rvs`
-- 
CREATE DATABASE `db_rvs` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `db_rvs`;

-- --------------------------------------------------------

-- 
-- Table structure for table `tb_rvs_patient`
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- 
-- Dumping data for table `tb_rvs_patient`
-- 

INSERT INTO `tb_rvs_patient` (`tb_rvs_patient_id`, `tb_rvs_patient_sTextName`, `tb_rvs_patient_sTextAge`, `tb_rvs_patient_sSelSex`, `tb_rvs_patient_sTaAddress`, `tb_rvs_patient_sTextCity`, `tb_rvs_patient_sTextGeographicalLocality`, `tb_rvs_patient_sTextOccupation`, `tb_rvs_patient_sTextVisitIds`, `tb_rvs_patient_dTextActualEntryDate`, `tb_rvs_patient_tTextActualEntryTime`, `tb_rvs_patient_sTextEntryUser`) VALUES
(1, 'Sandhya Chawala', '25', 'Female', 'Flat No.45, Anand Nagar, Kothrud', 'Pune', 'on tilak road', 'Engineer', NULL, '2010-03-31', '13:37:08', '');

INSERT INTO `tb_rvs_patient` (`tb_rvs_patient_id`, `tb_rvs_patient_sTextName`, `tb_rvs_patient_sTextAge`, `tb_rvs_patient_sSelSex`, `tb_rvs_patient_sTaAddress`, `tb_rvs_patient_sTextCity`, `tb_rvs_patient_sTextGeographicalLocality`, `tb_rvs_patient_sTextOccupation`, `tb_rvs_patient_sTextVisitIds`, `tb_rvs_patient_dTextActualEntryDate`, `tb_rvs_patient_tTextActualEntryTime`, `tb_rvs_patient_sTextEntryUser`) VALUES
(2, 'Sandip Chauhan', '25', 'Male', 'Flat No.45, Mukund Nagar, Kothrud', 'Pune','on FG road', 'Engineer', NULL, '2010-03-31', '13:38:08', '');

INSERT INTO `tb_rvs_patient` (`tb_rvs_patient_id`, `tb_rvs_patient_sTextName`, `tb_rvs_patient_sTextAge`, `tb_rvs_patient_sSelSex`, `tb_rvs_patient_sTaAddress`, `tb_rvs_patient_sTextCity`, `tb_rvs_patient_sTextGeographicalLocality`, `tb_rvs_patient_sTextOccupation`, `tb_rvs_patient_sTextVisitIds`, `tb_rvs_patient_dTextActualEntryDate`, `tb_rvs_patient_tTextActualEntryTime`, `tb_rvs_patient_sTextEntryUser`) VALUES
(3, 'Kumar', '25', 'Male', 'Flat No.45, Anandi Nagar, Kothrud', 'Mumbai','on MG road', 'Engineer', NULL, '2010-03-31', '13:37:08', '');

INSERT INTO `tb_rvs_patient` (`tb_rvs_patient_id`, `tb_rvs_patient_sTextName`, `tb_rvs_patient_sTextAge`, `tb_rvs_patient_sSelSex`, `tb_rvs_patient_sTaAddress`, `tb_rvs_patient_sTextCity`, `tb_rvs_patient_sTextGeographicalLocality`, `tb_rvs_patient_sTextOccupation`, `tb_rvs_patient_sTextVisitIds`, `tb_rvs_patient_dTextActualEntryDate`, `tb_rvs_patient_tTextActualEntryTime`, `tb_rvs_patient_sTextEntryUser`) VALUES
(4, 'Saumya Ambani', '25', 'Female', 'Flat No.45, Anand Nagar, Lohgaon', 'Pune','on JM road', 'Engineer', NULL, '2010-03-31', '13:37:08', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_rvs_visit`
-- 

CREATE TABLE `tb_rvs_visit` (
  `tb_rvs_visit_id` int(10) NOT NULL auto_increment,
  `tb_rvs_visit_patient_id` varchar(20) default NULL,
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- 
-- Dumping data for table `tb_rvs_visit`
-- 

INSERT INTO `tb_rvs_visit` (`tb_rvs_visit_id`, `tb_rvs_visit_patient_id`, `tb_rvs_visit_dTextEntryDate`, `tb_rvs_visit_sTextName`, `tb_rvs_visit_sTextAge`, `tb_rvs_visit_sSelSex`, `tb_rvs_visit_sTaAddress`, `tb_rvs_visit_sTextCity`, `tb_rvs_visit_sTextGeographicalLocality`, `tb_rvs_visit_sTextOccupation`, `tb_rvs_visit_sTextSiteOfBite`, `tb_rvs_visit_sSelAware`, `tb_rvs_visit_sSelHistory`, `tb_rvs_visit_sTaHistoryAllergies`, `tb_rvs_visit_sTaDetailsOfAnimalBite`, `tb_rvs_visit_sSelWhoBite`, `tb_rvs_visit_sSelTreatment`, `tb_rvs_visit_sTaLocal`, `tb_rvs_visit_sSelSystemic`, `tb_rvs_visit_sTaDay0`, `tb_rvs_visit_sSelDay`, `tb_rvs_visit_sTaDay3`, `tb_rvs_visit_sSelDay3`, `tb_rvs_visit_sTaDay7`, `tb_rvs_visit_sSelDay7`, `tb_rvs_visit_sTaDay14`, `tb_rvs_visit_sSelDay14`, `tb_rvs_visit_sTaDay28`, `tb_rvs_visit_sSelDay28`, `tb_rvs_visit_sSelBrainDerived`, `tb_rvs_visit_sTextManufacturerNo`, `tb_rvs_visit_sTextRouteOfAdministration`, `tb_rvs_visit_sTextQuantityAdministered`, `tb_rvs_visit_sTaDatesAdministered`, `tb_rvs_visit_sTaRabiesVaccination`, `tb_rvs_visit_sSelBrainDerivedImmunoglobulin`, `tb_rvs_visit_sTextSensitivityTest`, `tb_rvs_visit_sTextManufacturerNoImmunoglobulin`, `tb_rvs_visit_sTextRouteOfAdministrationImmunoglobulin`, `tb_rvs_visit_sTextQuantityAdministeredImmunoglobulin`, `tb_rvs_visit_sTaDatesAdministeredImmunoglobulin`, `tb_rvs_visit_sTaRabiesImmunoglobulin`, `tb_rvs_visit_sTaAdverseEventsImmunoglobulin`, `tb_rvs_visit_sSelStatus`, `tb_rvs_visit_sTaStatusOfOther`, `tb_rvs_visit_sTextWeight`, `tb_rvs_visit_sTextSexAnimal`, `tb_rvs_visit_sTextBreed`, `tb_rvs_visit_sTextSpecies`, `tb_rvs_visit_sTextAnimalvaccinated`, `tb_rvs_visit_sSelWhatHappenedAnimal`, `tb_rvs_visit_chkFluorescent`, `tb_rvs_visit_chkNegri`, `tb_rvs_visit_chkInoculation`, `tb_rvs_visit_chkOtherTests`, `tb_rvs_visit_dTextActualEntryDate`, `tb_rvs_visit_tTextActualEntryTime`, `tb_rvs_visit_sTextEntryUser`, `tb_rvs_visit_extra1`, `tb_rvs_visit_extra2`, `tb_rvs_visit_extra3`) VALUES
(1, '1', '2010-03-04', 'Sandhya Chawala', '25', 'Female', 'Flat No.45, Anand Nagar, Kothrud', 'Pune', 'on tilak road', 'Engineer', 'right leg', 'Yes', 'No', 'Allergy from dust', 'dog', 'Category II', 'local', 'Bandage on everyday', 'Vaccine+HRIG', 'HRIG is given', 'Yes', 'ERIG is given', 'Yes', '', '', '', '', '', '', 'Yes', '500', 'direct on the injury', '243', '06-03-2010, 07-03-2010', 'none', 'No', '', '', '', '', '', '', '', 'Died of rabies', 'Paining', '23', 'Male', 'Alsecian', '37', 'No', 'Killed', 'Yes', 'No', 'Yes', 'No', '2010-03-31', '13:37:08', '', NULL, NULL, NULL);

INSERT INTO `tb_rvs_visit` (`tb_rvs_visit_id`, `tb_rvs_visit_patient_id`, `tb_rvs_visit_dTextEntryDate`, `tb_rvs_visit_sTextName`, `tb_rvs_visit_sTextAge`, `tb_rvs_visit_sSelSex`, `tb_rvs_visit_sTaAddress`, `tb_rvs_visit_sTextCity`, `tb_rvs_visit_sTextGeographicalLocality`, `tb_rvs_visit_sTextOccupation`, `tb_rvs_visit_sTextSiteOfBite`, `tb_rvs_visit_sSelAware`, `tb_rvs_visit_sSelHistory`, `tb_rvs_visit_sTaHistoryAllergies`, `tb_rvs_visit_sTaDetailsOfAnimalBite`, `tb_rvs_visit_sSelWhoBite`, `tb_rvs_visit_sSelTreatment`, `tb_rvs_visit_sTaLocal`, `tb_rvs_visit_sSelSystemic`, `tb_rvs_visit_sTaDay0`, `tb_rvs_visit_sSelDay`, `tb_rvs_visit_sTaDay3`, `tb_rvs_visit_sSelDay3`, `tb_rvs_visit_sTaDay7`, `tb_rvs_visit_sSelDay7`, `tb_rvs_visit_sTaDay14`, `tb_rvs_visit_sSelDay14`, `tb_rvs_visit_sTaDay28`, `tb_rvs_visit_sSelDay28`, `tb_rvs_visit_sSelBrainDerived`, `tb_rvs_visit_sTextManufacturerNo`, `tb_rvs_visit_sTextRouteOfAdministration`, `tb_rvs_visit_sTextQuantityAdministered`, `tb_rvs_visit_sTaDatesAdministered`, `tb_rvs_visit_sTaRabiesVaccination`, `tb_rvs_visit_sSelBrainDerivedImmunoglobulin`, `tb_rvs_visit_sTextSensitivityTest`, `tb_rvs_visit_sTextManufacturerNoImmunoglobulin`, `tb_rvs_visit_sTextRouteOfAdministrationImmunoglobulin`, `tb_rvs_visit_sTextQuantityAdministeredImmunoglobulin`, `tb_rvs_visit_sTaDatesAdministeredImmunoglobulin`, `tb_rvs_visit_sTaRabiesImmunoglobulin`, `tb_rvs_visit_sTaAdverseEventsImmunoglobulin`, `tb_rvs_visit_sSelStatus`, `tb_rvs_visit_sTaStatusOfOther`, `tb_rvs_visit_sTextWeight`, `tb_rvs_visit_sTextSexAnimal`, `tb_rvs_visit_sTextBreed`, `tb_rvs_visit_sTextSpecies`, `tb_rvs_visit_sTextAnimalvaccinated`, `tb_rvs_visit_sSelWhatHappenedAnimal`, `tb_rvs_visit_chkFluorescent`, `tb_rvs_visit_chkNegri`, `tb_rvs_visit_chkInoculation`, `tb_rvs_visit_chkOtherTests`, `tb_rvs_visit_dTextActualEntryDate`, `tb_rvs_visit_tTextActualEntryTime`, `tb_rvs_visit_sTextEntryUser`, `tb_rvs_visit_extra1`, `tb_rvs_visit_extra2`, `tb_rvs_visit_extra3`) VALUES
(2, '2', '2010-03-05', 'Sandip Chauhan', '25', 'Male', 'Flat No.45, Mukund Nagar, Kothrud', 'Pune', 'on FC road', 'Doctor', 'right hand', 'Yes', 'No', 'Allergy from dust', 'dog', 'Category II', 'local', 'Bandage on every sunday', 'Vaccine+ERIG', 'HRIG is given', 'Yes', 'ERIG is given', 'Yes', '', '', '', '', '', '', 'Yes', '550', 'direct on the injury', '273', '08-03-2010, 07-03-2010', 'none', 'No', '', '', '', '', '', '', '', 'Died of rabies', 'Paining', '23', 'Male', 'Palmelian', '38', 'No', 'Killed', 'Yes', 'No', 'Yes', 'No', '2010-03-31', '13:38:08', '', NULL, NULL, NULL);

INSERT INTO `tb_rvs_visit` (`tb_rvs_visit_id`, `tb_rvs_visit_patient_id`, `tb_rvs_visit_dTextEntryDate`, `tb_rvs_visit_sTextName`, `tb_rvs_visit_sTextAge`, `tb_rvs_visit_sSelSex`, `tb_rvs_visit_sTaAddress`, `tb_rvs_visit_sTextCity`, `tb_rvs_visit_sTextGeographicalLocality`, `tb_rvs_visit_sTextOccupation`, `tb_rvs_visit_sTextSiteOfBite`, `tb_rvs_visit_sSelAware`, `tb_rvs_visit_sSelHistory`, `tb_rvs_visit_sTaHistoryAllergies`, `tb_rvs_visit_sTaDetailsOfAnimalBite`, `tb_rvs_visit_sSelWhoBite`, `tb_rvs_visit_sSelTreatment`, `tb_rvs_visit_sTaLocal`, `tb_rvs_visit_sSelSystemic`, `tb_rvs_visit_sTaDay0`, `tb_rvs_visit_sSelDay`, `tb_rvs_visit_sTaDay3`, `tb_rvs_visit_sSelDay3`, `tb_rvs_visit_sTaDay7`, `tb_rvs_visit_sSelDay7`, `tb_rvs_visit_sTaDay14`, `tb_rvs_visit_sSelDay14`, `tb_rvs_visit_sTaDay28`, `tb_rvs_visit_sSelDay28`, `tb_rvs_visit_sSelBrainDerived`, `tb_rvs_visit_sTextManufacturerNo`, `tb_rvs_visit_sTextRouteOfAdministration`, `tb_rvs_visit_sTextQuantityAdministered`, `tb_rvs_visit_sTaDatesAdministered`, `tb_rvs_visit_sTaRabiesVaccination`, `tb_rvs_visit_sSelBrainDerivedImmunoglobulin`, `tb_rvs_visit_sTextSensitivityTest`, `tb_rvs_visit_sTextManufacturerNoImmunoglobulin`, `tb_rvs_visit_sTextRouteOfAdministrationImmunoglobulin`, `tb_rvs_visit_sTextQuantityAdministeredImmunoglobulin`, `tb_rvs_visit_sTaDatesAdministeredImmunoglobulin`, `tb_rvs_visit_sTaRabiesImmunoglobulin`, `tb_rvs_visit_sTaAdverseEventsImmunoglobulin`, `tb_rvs_visit_sSelStatus`, `tb_rvs_visit_sTaStatusOfOther`, `tb_rvs_visit_sTextWeight`, `tb_rvs_visit_sTextSexAnimal`, `tb_rvs_visit_sTextBreed`, `tb_rvs_visit_sTextSpecies`, `tb_rvs_visit_sTextAnimalvaccinated`, `tb_rvs_visit_sSelWhatHappenedAnimal`, `tb_rvs_visit_chkFluorescent`, `tb_rvs_visit_chkNegri`, `tb_rvs_visit_chkInoculation`, `tb_rvs_visit_chkOtherTests`, `tb_rvs_visit_dTextActualEntryDate`, `tb_rvs_visit_tTextActualEntryTime`, `tb_rvs_visit_sTextEntryUser`, `tb_rvs_visit_extra1`, `tb_rvs_visit_extra2`, `tb_rvs_visit_extra3`) VALUES
(3, '3', '2010-03-06', 'Kumar', '25', 'Male', 'Flat No.45, Anandi Nagar, Kothrud', 'Mumbai', 'on MG road', 'Engineer', 'left leg', 'Yes', 'No', 'Allergy from dust', 'dog', 'Category II', 'local', 'Bandage on everyday', 'Vaccine+HRIG', 'HRIG is given', 'Yes', 'ERIG is given', 'Yes', '', '', '', '', '', '', 'Yes', '500', 'direct on the injury', '243', '06-03-2010, 07-03-2010', 'none', 'No', '', '', '', '', '', '', '', 'Died of rabies', 'Paining', '23', 'Male', 'Alsecian', '37', 'No', 'Killed', 'Yes', 'No', 'Yes', 'No', '2010-03-31', '13:37:08', '', NULL, NULL, NULL);

INSERT INTO `tb_rvs_visit` (`tb_rvs_visit_id`, `tb_rvs_visit_patient_id`, `tb_rvs_visit_dTextEntryDate`, `tb_rvs_visit_sTextName`, `tb_rvs_visit_sTextAge`, `tb_rvs_visit_sSelSex`, `tb_rvs_visit_sTaAddress`, `tb_rvs_visit_sTextCity`, `tb_rvs_visit_sTextGeographicalLocality`, `tb_rvs_visit_sTextOccupation`, `tb_rvs_visit_sTextSiteOfBite`, `tb_rvs_visit_sSelAware`, `tb_rvs_visit_sSelHistory`, `tb_rvs_visit_sTaHistoryAllergies`, `tb_rvs_visit_sTaDetailsOfAnimalBite`, `tb_rvs_visit_sSelWhoBite`, `tb_rvs_visit_sSelTreatment`, `tb_rvs_visit_sTaLocal`, `tb_rvs_visit_sSelSystemic`, `tb_rvs_visit_sTaDay0`, `tb_rvs_visit_sSelDay`, `tb_rvs_visit_sTaDay3`, `tb_rvs_visit_sSelDay3`, `tb_rvs_visit_sTaDay7`, `tb_rvs_visit_sSelDay7`, `tb_rvs_visit_sTaDay14`, `tb_rvs_visit_sSelDay14`, `tb_rvs_visit_sTaDay28`, `tb_rvs_visit_sSelDay28`, `tb_rvs_visit_sSelBrainDerived`, `tb_rvs_visit_sTextManufacturerNo`, `tb_rvs_visit_sTextRouteOfAdministration`, `tb_rvs_visit_sTextQuantityAdministered`, `tb_rvs_visit_sTaDatesAdministered`, `tb_rvs_visit_sTaRabiesVaccination`, `tb_rvs_visit_sSelBrainDerivedImmunoglobulin`, `tb_rvs_visit_sTextSensitivityTest`, `tb_rvs_visit_sTextManufacturerNoImmunoglobulin`, `tb_rvs_visit_sTextRouteOfAdministrationImmunoglobulin`, `tb_rvs_visit_sTextQuantityAdministeredImmunoglobulin`, `tb_rvs_visit_sTaDatesAdministeredImmunoglobulin`, `tb_rvs_visit_sTaRabiesImmunoglobulin`, `tb_rvs_visit_sTaAdverseEventsImmunoglobulin`, `tb_rvs_visit_sSelStatus`, `tb_rvs_visit_sTaStatusOfOther`, `tb_rvs_visit_sTextWeight`, `tb_rvs_visit_sTextSexAnimal`, `tb_rvs_visit_sTextBreed`, `tb_rvs_visit_sTextSpecies`, `tb_rvs_visit_sTextAnimalvaccinated`, `tb_rvs_visit_sSelWhatHappenedAnimal`, `tb_rvs_visit_chkFluorescent`, `tb_rvs_visit_chkNegri`, `tb_rvs_visit_chkInoculation`, `tb_rvs_visit_chkOtherTests`, `tb_rvs_visit_dTextActualEntryDate`, `tb_rvs_visit_tTextActualEntryTime`, `tb_rvs_visit_sTextEntryUser`, `tb_rvs_visit_extra1`, `tb_rvs_visit_extra2`, `tb_rvs_visit_extra3`) VALUES
(4, '4', '2010-03-07', 'Saumya Ambani', '25', 'Female', 'Flat No.45, Anand Nagar, Lohgaon', 'Pune', 'on JM road', 'Engineer', 'right leg', 'Yes', 'No', 'Allergy from dust', 'cat', 'Category II', 'local', 'Bandage on everyday', 'Vaccine+HRIG', 'HRIG is given', 'Yes', 'ERIG is given', 'Yes', '', '', '', '', '', '', 'Yes', '500', 'direct on the injury', '243', '06-03-2010, 07-03-2010', 'none', 'No', '', '', '', '', '', '', '', 'Died of rabies', 'Paining', '23', 'Male', 'Alsecian', '37', 'No', 'Killed', 'Yes', 'No', 'Yes', 'No', '2010-03-31', '13:37:08', '', NULL, NULL, NULL);
