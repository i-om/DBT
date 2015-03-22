-- phpMyAdmin SQL Dump
-- version 2.10.1
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Apr 15, 2011 at 08:52 AM
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

-- 
-- Dumping data for table `admin`
-- 

INSERT INTO `admin` (`admin_id`, `DBT_number`, `date_of_initiation`, `investigator_name`, `place_of_work`, `speciality`, `capacity_building`, `patent_filed`, `publication`, `title_of_project`, `area_of_research`) VALUES 
(1, 'BT/PR3202/PBD/17/209/2002', '02-12-2003', 'Dr V  V Asha', 'Division of Ethnopharmacology, Rajiv Gandhi Center for Biotechnology, Pujapura, Trivendram -14', 'Ethnopharmacology', 'No', 'No', 'No', 'Hepatoprotective evaluation of Phyllanthus kozhikodianus, Momordica subangulata,Wedelia trilobata using various experimental models', 'Drug Development'),
(2, 'BT/PR4157/PBD/17/270/2003', '01-11-2004', 'Dr Asish Kumar Sen', 'Department of Organic Chemistry (Carbohydrate),  Indian Institute of Chemical Biology 4, Raja S C Mullick Road, Jadhavpur, Kolkata - 700 032', 'Chemical Biology (Carbohydrate)', 'No', 'No', 'No', 'Immunomodulation and anti- microbicidal activity: effect of Bael (Aegle marmelos) exudate gum, and mucilage and other polysaccharides from semi- ripe Bael fruit. ', 'Drug Development'),
(3, '', '01-10-2007', 'Dr Anuradha Lohia,Dr Pratima Sinha', 'Bose Institute,P1/ 12CIT Scheme VIIM Kolkata.', ',', 'No', 'Yes', 'No', 'Development of a product from Oxalis corniculata against Entamoeba histolytica', 'Drug Development'),
(4, '', '04-08-2004', 'Dr Sanjai Saxena', 'Department of Biotechnology and environmental Sciences, Thapar University, Patiala, Punjab - 147 004', '', 'No', 'Yes', 'Yes', 'Antimicrobial leads of Callistemon rigidus and their efficacy against standard drugs.', 'Drug Development'),
(5, 'BT/PR4031/PBD/17/261/2003', '03-01-2003', 'Dr Samir Bhattacharya,Dr Bikesh Pal,Dr Arun Bandyopadhyay,,Dr Sib Sankar Roy,Dr Sibnath Majumdar', 'Department of Zoology, School of Life Science,Visva- Bharati (A central University) Santiniketan - 731 235,Indian Institute of Chemical Biology (IICB) 4,Raja S C Mullick Road, Kolkata- 700 032.', ',,,,', 'No', 'No', 'Yes', 'Development of herbal drug for non- insulin dependent Diabetes Mellitus', 'Drug Development'),
(6, 'BT/PR3057/PBD/17/198/2002', '15-06-2003', 'Dr Durgadas Ghosh,Dr Debasish Bhattacharyya', 'Department of Life Sciences, Tripura University, Suryamanigar, agartala, Tripura West- 799 130 ,Indian Institute of Chemical Biology, 4, Raja S C Mallick Road, Jadhavpore, Kolkatta- 700 032 ', ',', 'No', 'No', 'Yes', 'Studies on Immunomodulatory activities of extracts of different Pineapple (Ananas comosus) cultivators of Tripura', 'Drug Development'),
(7, 'BT/PR1314/PB/17/059/98', '31-05-1999', 'Dr Shakti N Upadhyay,Dr P Sahai,Dr Akhil C Banerjea,,', 'National Institute of Immunology,J N U Complex,Aruna Asaf Ali Marg,New Delhi - 110 067 ,', 'Immunology,Immunology,Immunology,,', 'No', 'No', 'No', '', 'Drug Development'),
(8, '', '01-11-2002', 'Dr C M Gupta,Dr Man Mohan Singh,Dr Rakesh Maurya', 'Central Drug Research Institute,Chattar Manzil Palace,Lucknow- 226 001', ',,', 'No', 'Yes', 'No', 'Development of anti- osteoporotic agents from Indian medicinal plants.', 'Drug Development'),
(9, 'BT/PR2905/PBD/17/169/2002', '01-06-2002', 'Dr Anuradha Lohia,Dr Pratima Sinha', 'Department of Biochemistry, Bose Institute, P1/12 CIT Scheme, VIIM, Kolkata- 700 054,', ',', 'No', 'No', 'Yes', 'Identification of Medicinal plants for anti-proliferative properties against E. histolytica', 'Drug Development'),
(10, 'BT/PR3842/PBD/17/247/2003', '05-05-2004', 'Dr Maheep Bhatnagar', 'Department of Zoology, M L S University, Udaipur- 313001, Rajasthan', '', 'No', 'No', 'No', 'Evaluation of neuroprotechtive properties of certain plant extracts: An in vivo and in vitro study.', 'Drug Development'),
(11, 'BT/PR3836/PBD/17/245/2003', '01-01-2005', 'Dr Pulok K Mukherjee,Dr B P Saha', 'Department of Pharmaceutical Technology, School of Natural Products Studies,,Jadhavpur University, Kolkata- 700 032, India.', 'Pharmaceutics,Pharmaceutics', 'No', 'No', 'Yes', 'Botanicals as Acetyl Choninesterase (AChE) Inhibitors from Indian Medicinal Plants.', 'Drug Development'),
(12, '', '', 'Dr P Vijayan', 'J S S College of Pharmacy, Rocklands, Ootacacmund- 643 001, The Nilgiris, TamilNadu.', '', 'Yes', 'No', 'Yes', 'Investigations on the Antiviral Activity of Medicinal Plant Extracts.', 'Drug Development'),
(13, '', '', 'Dr Vijayalaxmi Ravindranathan', '', '', '', 'No', '', 'Evaluation of the molecular basis of the pharmacological action of medicinal preparations used in the treatment of mental illness including Dementia.', 'Drug Development'),
(14, 'BT/PR6378/PBD/17/396/2005', '', 'Dr M S Nagarsenkar,Dr S R Kulkarni,Dr Renuka Munshi,Dr Supriya Bhalerao ', 'Bombay College of Pharmacy,Kalina, Santacruz (E),Mumbai.,NMC and BYL Nair Hospital,Mumbai Central, Mumbai.', ',,,', 'No', 'No', 'No', 'Development of an antidiabetic formulation from leaf extract of Annona squamosa', 'Drug Development'),
(15, '', '', 'Dr R T Sane,Dr Ganesh Iyer ', 'Analytical and Animal Testing Unit, Ramnarayan Ruia College, Matunga, Mumbai- 400 019,', ',', 'No', 'No', 'No', 'Development of new herbal mosquito repellent', 'Drug Development'),
(16, '', '', 'Dr R R Kalorey,Dr Reena Mukherjee,Dr S Ramesh,Dr Aniraban Pal,Dr V S Rajora', 'Department of Microbiology, Nagpur Veterinary College, Maharashtra Animal and Fishery Sciences University, Seminary Hills, Nagpur- 440 006.,Department of Microbiology, Nagpur Veterinary College, Maharashtra Animal and Fishery Sciences University, Seminary Hills, Nagpur- 440 006.,Division of Medicine, IVRI, Izatnagar- 243 122 (UP).,Department of Veterinery Pharmacology and Toxicology, TANUVAS, Veprery, Chennai- 600 007.,Department of Clinical Medicine Ethics and Jurisprudence, College of Veterinery and Animal Sciences, G B Pant University of Agriculture and Technology, Pantnagar- 263 145.', ',,,,', 'No', 'No', 'No', '', 'Drug Development');

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

INSERT INTO `plant` (`plant_id`, `plant_name`, `plant_latin_name`, `plant_vernacular_name`, `traditional_name`, `traditionally_mentioned`, `traditionally_mentioned_yes`, `part_of_plant`, `admin_id`) VALUES 
(1, 'Phyllanthus kozhikodianus (P. rheedii),Momordica subangulata,Wedelia trilobata', 'Phyllanthus kozhikodianus (P. rheedii), Momordica subangulata,Wedelia trilobata ', '', 'No', 'No', '', '', 1),
(2, 'Aegle marmelos', 'Aegle marmelos', '', '', 'Yes', 'Ayurvedic', 'Whole plant', 2),
(3, 'Oxalis corniculata', 'Oxalis corniculata', '', '', 'Yes', 'Ayurvedic', 'Whole plant', 3),
(4, 'Callistemon rigidus ', 'Callistemon rigidus ', '', '', '', '', 'Leaf', 4),
(5, 'Pueraria tuberosa', 'Pueraria tuberosa', '', '', '', '', 'Root', 5),
(6, 'Ananas comosus', 'Ananas comosus', '', '', '', '', 'Fruit', 6),
(7, 'Physalis angulata,Physalis peruviana', 'Physalis angulata and Physalis peruviana', 'English', 'No', 'Yes', 'Others', 'Fruit', 7),
(8, 'Allophylus serratus,Butea monosperma,Cissus quadrangularis,Ficus bengalensis, Vitex negundo', 'Allophylus serratus, Butea monosperma, Cissus quadrangularis, Ficus bengalensisand Vitex negundo', '', '', '', '', 'Leaf,Bark,Root,Rhizome,Stem', 8),
(9, 'Phyllanthus urinaria,Polygala grinerisis,Curcuma longa,Cyperus rotundus,Oxalis corniculata,Punica granatum,Piper longum,Plumbago indica,Holorrhena antidysentrica,Limolia acidissima.', 'Phyllanthus urinaria, Polygala grinerisis, Curcuma longa,Cyperus rotundus, Oxalis corniculata, Punica granatum, Piper longum, Plumbago indica, Holorrhena antidysentrica, Limolia acidissima.', '', '', '', '', 'Whole plant,Rhizome,Fruit', 9),
(10, 'Asparagus racemosus, Withania somnifera,Convolvulus pluricaulis,Centella asiatica.', 'Asparagus racemosus, Withania somnifera, Convolvulus pluricaulis, Centella asiatica.', '', '', '', '', '', 10),
(11, 'Acorus calamus,Clitoria ternatea.', 'Acorus calamus and Clitoria ternatea.', 'Hindi', 'Yes', 'Yes', 'European', 'Rhizome,Leaf,Root,Others', 11),
(12, 'Aristolochia bracheolata,Aristolochia indica,Erythrina indica,Clitoria ternatea,Euphorbia hirta,Zizipus jujieba,Callistemon citrinus,Hypericum species', 'Aristolochia bracheolata, Aristolochia indica, Erythrina indica, Clitoria ternatea, Euphorbia hirta, Zizipus jujieba, Callistemon citrinus, Hypericum species', 'Hindi', 'No', 'No', '', 'Whole plant,Leaf,Root,Stem,Fruit,Rhizome,Bark', 12),
(13, 'Bacopa monnieri,Centella asiatica, Withania somnifera,Acorus calamus,Celastrus paniculatus,Nardostachys jatamansi,Canscora diffusa,Clitorea ternatea', 'Bacopa monnieri, Centella asiatica, Withania somnifera, Acorus calamus, Celastrus paniculatus, Nardostachys jatamansi, Clitorea ternatea, Canscora diffusa', '', 'No', 'No', '', 'Whole plant,Whole plant,Root,Rhizome,Others,Stem,Root,Whole plant', 13),
(14, 'Annona squamosa', 'Annona squamosa', '', '', '', '', 'Leaf', 14),
(15, 'Blumea lacera', 'Blumea lacera', '', '', '', '', 'Leaf', 15),
(16, 'Andrographis paniculata,Zingiber officianale,Allium sativum,Ocimum spp.,Cleome viscosa,Withania somnifera.', 'Andrographis paniculata, Zingiber officianale,Allium sativum, Ocimum spp.,Cleome viscosa, Withania somnifera.', '', 'No', 'No', '', 'Whole plant,Rhizome,Leaf,Others', 16);

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

INSERT INTO `results` (`result_id`, `therapeutic_area_of_research`, `basis_of_selection_of_plant`, `name_of_Boimaker`, `description_of_biomaker`, `chemistry_manufacturig_conrtrol`, `raw_material`, `drug_product`, `finished_product`, `type_of_extract`, `extract_txt`, `type_of_study`, `in_vitro`, `experimental`, `experimental_txt`, `clinical`, `model`, `appropriate`, `novel`, `other`, `ayush_trust_area`, `ayush_txt`, `hypothesis_generating`, `confirmatory studies`, `results`, `statistical_test`, `statistical_test_details`, `clinically_relevant`, `clinically_relevant_details`, `statistically_Significant`, `were_these_tests_appropriate`, `feasibility_of_Developing_a _drug`, `coments`, `admin_id`) VALUES 
(1, 'hepatisis', 'Traditional medicine', '', '', '', 'Ethanol and hexane extracts of Phyllanthus kozhikodianus (P. rheedii), Momordica subangulata,Wedelia trilobata', 'NA', 'No', 'Other', 'Extracts of the plant with different solvents of varying polarity (Hexane- Ethanol-Water)', '', '', 'In vitro', 'iv vivo and in vitro', 'NA', 'in vivo Duck model', 'Yes', 'No', 'NA', 'Yes', '', 'YES', 'Yes', 'The extract treatment has resulted in a reduction of 39.71% that of the D-GalN control.Similarly there was a 24.37% increase in the mean GAPDH to TGF &#946;1 ratio of D GalN control.The treatment has resulted in a 20.69% decrease that of D-GalN control.', 'No', 'NA', 'Yes', 'The extract tratment has down regulated TGF &#946;1 mRNA levels showing its potency in preventing induction of hepatic fibrosis. Hence it is a potential candidate to prevent hepatic fibrosis and hepatocyte damage.', '', '', 'No', 'Further studies are required to establish the activity of this extract in the cell lines that produce virions and HBsAg. In vivo studies using duck model will also have to be done on the extracts.', 1),
(2, 'immunomodulation', 'Others', 'Polysaccharides', 'higer oligomers', '', 'Fresh fruits and exudate gum', '', 'Polysaccharides', 'Water,Alcohol', ',', '', '', 'In vitro', 'iv vivo and in vitro', 'NA', '', '', '', 'NA', 'Yes', '', 'Yes', 'Yes', 'Different polysaccharides from Bael fruit were extracted using standard protocol. The hot and cold water soluble fractions were further fractionated to give neutral and acidic polysaccharides. These fractions were further purified by Gel permeation chromatography. The cold water soluble contains only monosaccharides and small oligomers, whereas, the acidic fraction contains an acidic polysaccharide which contains glucose, galactose and arabinose and galacturonic acid. The hot water soluble fraction contains some neutral oligosaccharides and acidic polysaccharide. The neutral fraction which was not further fractioned contains rhamnose, arabinose, galactose and glucose. The acidic polysaccharide contains all these sugars and galacturonic acid. The crude 1 % ammonium oxalate and sodium chorite extracted material contain pectin. The acidic sugar present in the purified acidic polysaccharide (fraction IIb) was reduced with CMC. The increase of percentage of galactose as revealed by GLC clearly indicated that only galacturonic acid is present in the polysaccharide. The fraction II b , V and VI showed significant zone against enteropathogenic E. coli (0114) . The fraction II b and V gave best bactericidal activity with 50 µg of polysaccharide. Fraction VI showed significant but delayed activity.', 'No', 'NA', '', 'Different polysaccharides were isolated from semi ripe Bael fruit pulp using standard extraction procedure. The acidic polysaccharides isolated from the cold water and hot water soluble fractions and the 4 M and 1 M sodium hydroxide extracted materials showed significant inhibition of bacterial growth (E. coli). Therefore it appears that these polysaccharides have significant biological importance and need further investigation. ', '', '', 'Yes', 'Different polysaccharides were isolated from semi ripe Bael fruit pulp using standard extraction procedure. The acidic polysaccharides isolated from the cold water and hot water soluble fractions and the 4 M and 1 M sodium hydroxide extracted materials showed significant inhibition of bacterial growth (E. coli). Therefore it appears that these polysaccharides have significant biological importance and need further investigation. Further purification, fractionation and preliminary structural analysis of the biologically active fractions have been taken up.', 2),
(3, 'antiamoebic', '', 'fatty acids,,', 'a group of long chain saturated fatty acids,long chain primary alcohols,a galacto glycerolipid.', 'Yes', 'Whole plant', '', 'Active fractions A and B', 'Methanol', '', '', '', 'In vitro', 'iv vivo and in vitro', 'NA', '', '', '', 'NA', 'Yes', '', '', '', 'Methyl and Ethyl acetate extracts of Oxalis corniculata had significant inhibitory effect of growth of Entamoeba histolytica and Giardia lamblia in vitro From Ethyl acetate fraction, two active fractions A and B were identified. Fraction A yielded two types of active compounds (Oc-1 and Oc-2) and Fraction B yielded a pure oily compound (Oc-3). Oc- 3 a galacto- glycerolipid was seen to be most potent amoebicidal effects.Thisgalacto- glycerolipid also displayed strong activity against another enteric pathogen Giardia lamblia. The Human cell line HEK 293 showed virtually negative cytotoxicity when trated with Oxalis corniculata extracts and purified compounds.     ', 'No', 'NA', '', 'The methanolic extracts of Oxalis corniculata has significant inhibitory effect on growth of Entamoeba histolytica and Giardia lamblia in vitro. Methanolic extract was further fractioned with ethyl acetate and n- butanol.Most of the active constituents was recovered in ethyl acetate. From Ethyl acetate fraction, two active fractions A and B were identified. Fraction A yielded two types of active compounds (Oc-1 and Oc-2) and Fraction B yielded a pure oily compound (Oc-3). The active compounds isolated from Oxalis corniculata are i) a group of long chain saturated fatty acids ii) long chain primary alcohols and iii) a galacto glycerolipid.Significant growth inhibition of Giardia lamblia by Oc-3 and Metronidazole was comparable.Cytotoxicity test against human embryonic kidney cells (HEK- 293) and on mice model showed that the ethanolic extracts and purified compounds do not have any significant toxicity. ', '', '', 'Yes', 'The Ethyl acetate extracts of Oxalis corniculata has significant inhibitory effect on growth of Entamoeba histolytica and Giardia lamblia in vitro. The process for isolating, purifying and characterizing of the same should be looked for.', 3),
(4, 'antimicrobial', '', 'Alkaloids', 'Alkaloids', 'Yes', 'Leaves', '', 'Alkaloids', 'Methanol', '', '', '', 'In vitro', '', 'NA', '', '', '', '', 'Yes', '', '', '', 'The crude alkaloid was active against all Staphylococcus aureus clinical and reference isolets at 3.125 µg/ml. The Chloramphenicol exhibited maximum activity against the test strains. ', 'No', '', '', 'The crude alkaloid was active against all Staphylococcus aureus clinical and reference isolets at 3.125 µg/ml. The Chloramphenicol exhibited maximum activity against the test strains. ', '', '', 'Yes', 'The evalution of MIC of commercial antibiotics against test isolates signifies the potential of the bioactive lead as compared to the standard antibiotic. ', 4),
(5, 'antidiabetic', '', 'fatty acids', 'free fatty acid', 'Yes', 'Roots', '', 'free fatty acid', 'Methanol', '', '', '', 'In vitro', '', '', '', '', '', '', 'Yes', '', 'Yes', '', 'Damage of insulin activity by afree fatty acid, palmitate could be prevented by Pueraria tuberosa root extract and LPA4 ,a marker molecule in the extract.', 'No', '', '', 'Free fatty acids are responsible for insulin resistance and type 2 diabetes. An incubation of L6 skeletal muscle cells with Free fatty acids i.e. palmitate inhibited insulin stimulated uptake of 3H-2deoxyglucosesignificantly.Addition of Pueraria tuberosa root extract strongly prevented this inhibition whereas Glimipiride, a market available drug showed no effect. Administration of Pueraria tuberosa root extract to nutrionally induced diabetic rats and hamster significantly reduced the increase in plasma glucose.Both acute and subacute toxicity tests seems to be destituteof toxic effects. ', '', '', 'Yes', 'All the finding along with the stability and toxicity data indicate Pueraria tuberosa root extract to be safe, stable and highly effective preparation for treating type 2 diabetes. Also Both acute and subacute toxicity tests seems to be destituteof toxic effects, which could be safe and efficaciousherbal therapeutic agent for insulin resistance and type 2 diabetes.', 5),
(6, 'immunomodulation', '', 'Bromelain', 'Bromelain', 'Yes', 'Juice of Fruit', '', '', 'Other', 'Acetone', '', '', 'In vitro', '', 'NA', '', '', '', '', 'Yes', '', 'Yes', 'Yes', '1.Ananain and comosain, two cysteine endopeptidases have been detected in extract. 2.The bromelain trated animals were found  to be more reactive towards a foreign antigen (SRBC) compared to the ones that were not treated with bromelain. 3.A 30- 35% increase in specific antibody secreting cells on tratment of the animals with fruit and stem bromelain.', 'Yes', '', '', 'Ananain and comosain are found in fruit bromelain. Immunomodulatory property of bromelain was shown by using ovalbumin as antigen. A 20- 30% increase in specific antibody secreting cells was observed.Also Queen cultiver contains higher higher quantity of enzymes and so it is superior with respect to medicinal value.', '', '', 'Yes', 'Ananain was found to be present in fruit bromelain. A 20- 30% increase in specific antibody secreting cells was observed. Hence fruit and stem bromelain shows an indication of immunostimulation.Attempts were made to separate the two fractionsof bromelain. This cluster needsto be characterized both in terms of physical association and immunological properties.', 6),
(7, 'immunology', '', '', '', 'No', 'Yes', 'Yes', 'Yes', '', '', '', '', 'In vitro', '', '', '', 'No', 'No', '', 'Yes', '', 'Yes', 'Yes', 'Extracts of Physalis peruviana was found lymphoproliferative and immunomodulatory, HIV-1 RT inhibitory and syncitia inhibitory.', 'No', '', 'No', '', 'No', 'No', 'Yes', '', 7),
(8, 'osteoporosis', '', '', '', 'Yes', 'Chloroform, n Butanol, Hexane', '', '', 'Chloroform,Other', ',n Butanol, Hexane soluble extracts', 'In vitro', '', '', '', '', '', 'Yes', 'No', '', 'Yes', '', 'Yes', 'Yes', 'ethanolic extracts of Butea monosperma showing promising osteogenic activity and devoid of estrogen agonistic activity.', 'No', '', 'Yes', 'Primary osteoblast cell culture from cells isolated from calavaria of neonatal Balb/c mice to confluency in 7 days to evaluate agents for promotion of bone formation activity has been achieved.Using expression of alkaline phosphatase activity in cultured osteoblasts, promising osteoblast proliferative activity was observed in ethanolic extract of stem bark of Butea monosperma. Effect on osteoblast proliferation, matrix maturation and mineralization was, therefore, analysed using osteoblastsderived from primary cultures obtained from neonatal Balb/c mouse calvaria/ immortal MG- 63 osteogenic cell line by different tests in 1.Proliferation and diffrentiation phase,2. Extra cellular matrix maturation phase, 3. Mineralization phase. Promising osteogenic activity was observed in five compounds nos. K051,  K052,  K054,  K080 (isolated from butanol soluble fraction) and   K095 (isolated from chloroform soluble fraction)', 'No', '', 'Yes', 'The study has led to the identification of 5 compounds showing promising osteogenic activity in vivo. Further studies are required to develop suitable formulation of these 5 compounds. Also their suitable pharmaceutical formulation, molecular mechanism of osteogenic action and preclinical development should be studied. ', 8),
(9, 'antiamoebic', 'Traditional medicine', 'Docosanoic acid,Lignoseric acid,Hexacosanoic acid,Octacosanoic acid,Curcumin', 'Docosanoic acid,Lignoseric acid,Hexacosanoic acid, Octacosanoic acid,Curcumin', 'Yes', 'Methanol, Ethyl Acetate, n Butanol, Hexane ', '', 'No', 'Methanol,Other', ',Ethyl Acetate,n Butanol,Hexane ', 'In vitro', '', '', '', '', '', 'Yes', 'No', '', 'Yes', '', 'Yes', 'Yes', '1. Oxalis corniculata contains active principles that have anti E. histolytica activity.2. Fractions of Cyperus rotundus showed very good anti-amoebic activity 3. Crude methanol and ethyl acetate extracts of Piper longum showed good anti  amoebic activity.4. Strong anti-amoebic activity with different extracts of Curcuma longa which include curcumin and new compount H3.', 'No', '1. Oxalis corniculata contains active principles that have anti E. histolytica properties,these active principles are primarily saturated fatty acids of C22-C30 lengths.Pure fatty acids of C22-C28 show similar anti- amoebic activity.2. Fractions of Cyperus rotundus Fr 18-28 and Fr 42-65 showed very good anti-amoebic activity.3. Crude methanol and ethyl acetate extracts of Piper longum showed good anti  amoebic activity.but it has to be further purified for its cytotoxicity against human cell lines 4.trong anti-amoebic activity with different extracts of Curcuma longa which include curcumin and new compount H3.', 'Yes', '', '', '', 'No', '1. Complete elucidation of structure - side chains , characterization should be studied.2.  Fractions of Cyperus rotundus Fr 18-28 and Fr 42-65 and Crude methanol and ethyl acetate extracts of Piper longum showed very good anti-amoebic activity further purification should be studied, also cytotoxicity of human cell line should be studied. It will be necessary to see that herbal mixures are more useful in its crude form than its purified form.3.Standardization of methods for identifying molecular targets for curcumin (and other compounds) in yeast.', 9),
(10, 'neuroprotection', '', '', '', 'Yes', 'Methanol', '', '', 'Methanol', '', '', '', '', 'NA', '', 'L-929 Human Fibroblast', 'Yes', 'No', '', 'Yes', '', 'No', 'No', 'All samples were found to cause lethal cytotoxic effects at a dose level 1 mg/ml if the exposure period is for 24 hrs.', 'No', 'following tests were conducted for in vitro cell viability tests 1. Dead Cell counting, 2. Propidium iodide staining for viable and dead cells,2. DAPI staining, 4. Acridine orange staining after DNA denaturation, 5. LDH assay, 6. MTT assay for cell viability. Increase in dead cell number was significantly high after treatment with neurotoxins as compared to control. ', '', '', '', '', 'No', '', 10),
(11, 'alzheimerdisease', 'Traditional medicine', '1. Acorus calamus - Asarone, &#946; asarone, calamenol, calamenone, eugenol, methyl eugenol, a-pinene and camphene,2. Clitoria ternatea- Root- taraxerol and taraxerone. Leaf- flanols, lactones, aparajitin and clitorin.Seed- cinnamic acid and an anthoxanthin glucoside.,', '1. Acorus calamus - Asarone, &#946; asarone, calamenol, calamenone, eugenol, methyl eugenol, a-pinene and camphene,2. Clitoria ternatea- Root- taraxerol and taraxerone. Leaf- flanols, lactones, aparajitin and clitorin.Seed- cinnamic acid and an anthoxanthin glucoside.', 'Yes', 'Ethanol, n- Hexane', '', 'No', 'Other', 'Ethanol', 'In vitro', '', '', '', '', '', '', '', '', 'Yes', '', 'Yes', 'Yes', '', 'No', '', '', '', '', '', 'No', '', 11),
(12, 'alzheimerdisease', '', '1. Acorus calamus - Asarone, &#946; asarone, calamenol, calamenone, eugenol, methyl eugenol, a-pinene and camphene,2. Clitoria ternatea- Root- taraxerol and taraxerone. Leaf- flanols, lactones, aparajitin and clitorin.Seed- cinnamic acid and an anthoxanthin glucoside.,', '1. Acorus calamus - Asarone, &#946; asarone, calamenol, calamenone, eugenol, methyl eugenol, a-pinene and camphene ,2. Clitoria ternatea- Root- taraxerol and taraxerone. Leaf- flanols, lactones, aparajitin and clitorin.Seed- cinnamic acid and an anthoxanthin glucoside.', 'Yes', 'Ethanol,Methanol, Petroleum ether, Chloroform, Ethyl Acetate', '', 'No', 'Petroleum Ehter,Chloroform,Other,Methanol', ',,Ethyl Acetate, Ethanol,', 'In vitro', '', '', '', '', '', '', '', '', 'Yes', '', 'No', 'No', '', 'No', '', '', '', '', '', 'No', '', 12),
(13, 'mentalillness', '', '', '', 'Yes', 'Methanol, Chloroform', '', '', 'Methanol,Chloroform,Water', ',,', 'In vitro', '', '', '', '', '', '', '', '', 'Yes', '', 'Yes', 'Yes', 'Acorus calamus and Withania somnifera were able to displace the binding of the radioligand to the muscarinic receptors indicating their substancial affinity for the receptor.', '', '', '', '', '', '', 'No', '', 13),
(14, 'antidiabetic', '', '', '', 'Yes', 'Water, Polyphenol, Dimethylsulphoxide', '', '', 'Water,Other', ',Polyphenol, Dimethylsulphoxide', '', '', '', '', '', '', 'Yes', 'Yes', '', '', '', 'Yes', 'Yes', '1.In in vivo study the streptozotocin induced hyperglycemia model, the Polyphenolic extract showed a statistically significant decrease in the fasting blood sugar at 10 mg/kg, 50mg/kg and 100mg/kg doses as compaired to disease control after 15 days of treatment. The best result was observed in 50 mg/kg dose with a mean percentage fall of 66 % in blood sugar.2. In in vitro studies, Polyphenolic extract at a concentration of 5 and 10ug/ml showed protection against STZ on cell cycle analysis studied on flowcytometer.3. In in ovo studies an increase in angiogenesis was observed with the Polyphenolic extract at all doses tested, however the maximum effect was observed at a dose of 0.5 ug/ml, which is statistically compared to untrated control using both Drabkin''s method and stereomicroscopy methods.', 'No', '', 'Yes', '', 'Yes', 'Yes', 'Yes', '', 14),
(15, 'mosquitorepellent', '', '', '', 'Yes', 'Diethyl Ether', '', 'Oil', 'Other', 'Diethyl Ether', '', '', '', '', '', '', 'Yes', 'Yes', '', 'Yes', '', '', '', '', 'No', '', '', '', 'Yes', 'Yes', 'Yes', '', 15),
(16, 'bovinemastitis', '', '', '', 'No', 'Yes', 'Yes', 'Yes', ',', ',', '', '', '', '', '', '', 'Yes', 'Yes', '', 'Yes', '', 'Yes', 'Yes', '1.In in vivo study the streptozotocin induced hyperglycemia model, the Polyphenolic extract showed a statistically significant decrease in the fasting blood sugar at 10 mg/kg, 50mg/kg and 100mg/kg doses as compaired to disease control after 15 days of treatment. The best result was observed in 50 mg/kg dose with a mean percentage fall of 66 % in blood sugar.2. In in vitro studies, Polyphenolic extract at a concentration of 5 and 10ug/ml showed protection against STZ on cell cycle analysis studied on flowcytometer.3. In in ovo studies an increase in angiogenesis was observed with the Polyphenolic extract at all doses tested, however the maximum effect was observed at a dose of 0.5 ug/ml, which is statistically compared to untrated control using both Drabkin''s method and stereomicroscopy methods.', 'No', '', 'Yes', '', 'Yes', 'Yes', 'Yes', '', 16);

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
