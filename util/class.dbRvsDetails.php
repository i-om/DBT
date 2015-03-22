<?php
/*! Include file for connection  */
include_once('class.dbConnect.php');

/*! Class for interaction with database thorugh methods */
class dbRvsDetails extends dbConnect
{
    /*! Function to add record in the database */
     function set_visit_details($pid, $dTextEntryDate, $sTextName, $sTextAge, $sSelSex, $sTaAddress, $sTextPhoneNum, $sTextCity, $sTextGeographicalLocality, $sTextOccupation, $sSelKupEdu, $sSelKupOcu, $sSelKupInc, $sKupScale, $sSelHistory, $sTaHistoryAllergies, $sDetailsOfAnimalBiteAnimal, $sDetailsOtherAnimal, $sTextSiteOfBite, $sDetailsOfAnimalBiteWas, $sDetailsOfAnimalAnimalWas, $dTextBiteDate, $sTaBiteDetailsAndExtent, $sDetailsAssociatedBleeding, $sDetailsHowSoon, $sDetailsTxAtHome, $sDetailsTxAtLocalP, $sDetailsDogRabidQ, $sSelAware, $sDetailsWashWound, $sDetailsinjGiven, $sSelWhoBite, $sTaLocal, $sSelSystemic, $sTaOther, $sTaConcommitant, $sSelBrainDerived, $sTextManufacturerNo, $sTextRouteOfAdministration, $sTextQuantityAdministered, $sTaDatesAdministered, $sTaRabiesVaccination, $sSelIgRecv, $sTaImmunoNotRcvdWhy, $sTaImmunoRcvdSE, $sSelBrainDerivedImmunoglobulin, $sTextSensitivityTest, $sTextManufacturerNoImmunoglobulin, $sTextRouteOfAdministrationImmunoglobulin, $sTextQuantityAdministeredImmunoglobulin, $sTaDatesAdministeredImmunoglobulin, $sTaRabiesImmunoglobulin, $sTaAdverseEventsImmunoglobulin, $sSelStatus, $sTaStatusOfOther, $sTextDetailsBitingRVC, $sTextDetailsBitingARV, $sTextDetailsBitingML, $sTextDetailsStray, $sTextWeight, $sTextSexAnimal, $sTextBreed, $sTextSpecies, $sTextAnimalvaccinated, $sSelWhatHappenedAnimal, $chkFluorescent, $chkNegri, $chkInoculation, $chkOtherTests, $sTextCostTravel, $sTextCostMedVacc, $sTextCostMedSera, $sTextCostMedLocal, $sTextCostLoss, $sTextCostTotal, $sTextLostDaysVictim, $sTextLostDaysAccom, $sTaDay0, $sSelDay, $sTaDay3, $sSelDay3, $sTaDay7, $sSelDay7, $sTaDay14, $sSelDay14, $sTaDay28, $sSelDay28, $dTextActualEntryDate, $tTextActualEntryTime, $sTextEntryUser, $extra1, $extra2, $extra3, $extra4, $extra5, $extra6)
     {
        parent::get_connection();    /*! Connecting to database */

        $sQuery = "INSERT INTO `tb_rvs_visit` (`tb_rvs_visit_id`, `tb_rvs_visit_patient_id`, `tb_rvs_visit_dTextEntryDate`, `tb_rvs_visit_sTextName`, `tb_rvs_visit_sTextAge`, `tb_rvs_visit_sSelSex`, `tb_rvs_visit_sTaAddress`, `tb_rvs_visit_sTextPhoneNum`, `tb_rvs_visit_sTextCity`, `tb_rvs_visit_sTextGeographicalLocality`, `tb_rvs_visit_sTextOccupation`, `tb_rvs_visit_sSelKupEdu`, `tb_rvs_visit_sSelKupOcu`, `tb_rvs_visit_sSelKupInc`, `tb_rvs_visit_sKupScale`, `tb_rvs_visit_sSelHistory`, `tb_rvs_visit_sTaHistoryAllergies`, `tb_rvs_visit_sDetailsOfAnimalBiteAnimal`, `tb_rvs_visit_sDetailsOtherAnimal`, `tb_rvs_visit_sTextSiteOfBite`, `tb_rvs_visit_sDetailsOfAnimalBiteWas`, `tb_rvs_visit_sDetailsOfAnimalAnimalWas`, `tb_rvs_visit_dTextBiteDate`, `tb_rvs_visit_sTaBiteDetailsAndExtent`, `tb_rvs_visit_sDetailsAssociatedBleeding`, `tb_rvs_visit_sDetailsHowSoon`, `tb_rvs_visit_sDetailsTxAtHome`, `tb_rvs_visit_sDetailsTxAtLocalP`, `tb_rvs_visit_sDetailsDogRabidQ`, `tb_rvs_visit_sSelAware`, `tb_rvs_visit_sDetailsWashWound`, `tb_rvs_visit_sDetailsinjGiven`, `tb_rvs_visit_sSelWhoBite`, `tb_rvs_visit_sTaLocal`, `tb_rvs_visit_sSelSystemic`, `tb_rvs_visit_sTaOther`, `tb_rvs_visit_sTaConcommitant`, `tb_rvs_visit_sSelBrainDerived`, `tb_rvs_visit_sTextManufacturerNo`, `tb_rvs_visit_sTextRouteOfAdministration`, `tb_rvs_visit_sTextQuantityAdministered`, `tb_rvs_visit_sTaDatesAdministered`, `tb_rvs_visit_sTaRabiesVaccination`, `tb_rvs_visit_sSelIgRecv`, `tb_rvs_visit_sTaImmunoNotRcvdWhy`, `tb_rvs_visit_sTaImmunoRcvdSE`, `tb_rvs_visit_sSelBrainDerivedImmunoglobulin`, `tb_rvs_visit_sTextSensitivityTest`, `tb_rvs_visit_sTextManufacturerNoImmunoglobulin`, `tb_rvs_visit_sTextRouteOfAdministrationImmunoglobulin`, `tb_rvs_visit_sTextQuantityAdministeredImmunoglobulin`, `tb_rvs_visit_sTaDatesAdministeredImmunoglobulin`, `tb_rvs_visit_sTaRabiesImmunoglobulin`, `tb_rvs_visit_sTaAdverseEventsImmunoglobulin`, `tb_rvs_visit_sSelStatus`, `tb_rvs_visit_sTaStatusOfOther`, `tb_rvs_visit_sTextDetailsBitingRVC`, `tb_rvs_visit_sTextDetailsBitingARV`, `tb_rvs_visit_sTextDetailsBitingML`, `tb_rvs_visit_sTextDetailsStray`, `tb_rvs_visit_sTextWeight`, `tb_rvs_visit_sTextSexAnimal`, `tb_rvs_visit_sTextBreed`, `tb_rvs_visit_sTextSpecies`, `tb_rvs_visit_sTextAnimalvaccinated`, `tb_rvs_visit_sSelWhatHappenedAnimal`, `tb_rvs_visit_chkFluorescent`, `tb_rvs_visit_chkNegri`, `tb_rvs_visit_chkInoculation`, `tb_rvs_visit_chkOtherTests`, `tb_rvs_visit_sTextCostTravel`, `tb_rvs_visit_sTextCostMedVacc`, `tb_rvs_visit_sTextCostMedSera`, `tb_rvs_visit_sTextCostMedLocal`, `tb_rvs_visit_sTextCostLoss`, `tb_rvs_visit_sTextCostTotal`, `tb_rvs_visit_sTextLostDaysVictim`, `tb_rvs_visit_sTextLostDaysAccom`, `tb_rvs_visit_sTaDay0`, `tb_rvs_visit_sSelDay`, `tb_rvs_visit_sTaDay3`, `tb_rvs_visit_sSelDay3`, `tb_rvs_visit_sTaDay7`, `tb_rvs_visit_sSelDay7`, `tb_rvs_visit_sTaDay14`, `tb_rvs_visit_sSelDay14`, `tb_rvs_visit_sTaDay28`, `tb_rvs_visit_sSelDay28`, `tb_rvs_visit_dTextActualEntryDate`, `tb_rvs_visit_tTextActualEntryTime`, `tb_rvs_visit_sTextEntryUser`, `tb_rvs_visit_extra1`, `tb_rvs_visit_extra2`, `tb_rvs_visit_extra3`, `tb_rvs_visit_extra4`, `tb_rvs_visit_extra5`, `tb_rvs_visit_extra6`) VALUES  ('', '$pid', '$dTextEntryDate', '$sTextName', '$sTextAge', '$sSelSex', '$sTaAddress', '$sTextPhoneNum', '$sTextCity', '$sTextGeographicalLocality', '$sTextOccupation', '$sSelKupEdu', '$sSelKupOcu', '$sSelKupInc', '$sKupScale', '$sSelHistory', '$sTaHistoryAllergies', '$sDetailsOfAnimalBiteAnimal', '$sDetailsOtherAnimal', '$sTextSiteOfBite', '$sDetailsOfAnimalBiteWas', '$sDetailsOfAnimalAnimalWas', '$dTextBiteDate', '$sTaBiteDetailsAndExtent', '$sDetailsAssociatedBleeding', '$sDetailsHowSoon', '$sDetailsTxAtHome', '$sDetailsTxAtLocalP', '$sDetailsDogRabidQ', '$sSelAware', '$sDetailsWashWound', '$sDetailsinjGiven', '$sSelWhoBite', '$sTaLocal', '$sSelSystemic', '$sTaOther', '$sTaConcommitant', '$sSelBrainDerived', '$sTextManufacturerNo', '$sTextRouteOfAdministration', '$sTextQuantityAdministered', '$sTaDatesAdministered', '$sTaRabiesVaccination', '$sSelIgRecv', '$sTaImmunoNotRcvdWhy', '$sTaImmunoRcvdSE', '$sSelBrainDerivedImmunoglobulin', '$sTextSensitivityTest', '$sTextManufacturerNoImmunoglobulin', '$sTextRouteOfAdministrationImmunoglobulin', '$sTextQuantityAdministeredImmunoglobulin', '$sTaDatesAdministeredImmunoglobulin', '$sTaRabiesImmunoglobulin', '$sTaAdverseEventsImmunoglobulin', '$sSelStatus', '$sTaStatusOfOther', '$sTextDetailsBitingRVC', '$sTextDetailsBitingARV', '$sTextDetailsBitingML', '$sTextDetailsStray', '$sTextWeight', '$sTextSexAnimal', '$sTextBreed', '$sTextSpecies', '$sTextAnimalvaccinated', '$sSelWhatHappenedAnimal', '$chkFluorescent', '$chkNegri', '$chkInoculation', '$chkOtherTests', '$sTextCostTravel', '$sTextCostMedVacc', '$sTextCostMedSera', '$sTextCostMedLocal', '$sTextCostLoss', '$sTextCostTotal', '$sTextLostDaysVictim', '$sTextLostDaysAccom', '$sTaDay0', '$sSelDay', '$sTaDay3', '$sSelDay3', '$sTaDay7', '$sSelDay7', '$sTaDay14', '$sSelDay14', '$sTaDay28', '$sSelDay28', '$dTextActualEntryDate', '$tTextActualEntryTime', '$sTextEntryUser', '$extra1', '$extra2', '$extra3', '$extra4', '$extra5', '$extra6')";
       // var_dump($sQuery);exit;
        parent::dbQuery($sQuery);   /*! Executing Query */

        $id = mysql_insert_id($this->iPatientId);      /*! Getting last inserted record id */

        parent::close_connection();           /*! Closing connection */

        return $id;

     }
     function set_patient_details($sTextName,$sTextAge,$sSelSex,$sTaAddress,$sTextCity,$sTextGeographicalLocality,$sTextOccupation,$dTextActualEntryDate,$tTextActualEntryTime,$sTextEntryUser,$sTextPhoneNum,$sSelKupEdu,$sSelKupOcu,$sSelKupInc,$sKupScale)
     {
        parent::get_connection();    /*! Connecting to database */

        $sQuery = "insert into `tb_rvs_patient`(`tb_rvs_patient_id` ,`tb_rvs_patient_sTextName` ,`tb_rvs_patient_sTextAge` ,`tb_rvs_patient_sSelSex` ,`tb_rvs_patient_sTaAddress` ,`tb_rvs_patient_sTextPhoneNum` ,`tb_rvs_patient_sTextCity` ,`tb_rvs_patient_sTextGeographicalLocality` ,`tb_rvs_patient_sTextOccupation` ,`tb_rvs_patient_sSelKupEdu` ,`tb_rvs_patient_sSelKupOcu` ,`tb_rvs_patient_sSelKupInc` ,`tb_rvs_patient_sKupScale` ,`tb_rvs_patient_sTextVisitIds` ,`tb_rvs_patient_dTextActualEntryDate` ,`tb_rvs_patient_tTextActualEntryTime` ,`tb_rvs_patient_sTextEntryUser` ) values ('' ,'$sTextName' ,'$sTextAge' ,'$sSelSex' ,'$sTaAddress' ,'$sTextPhoneNum' ,'$sTextCity' ,'$sTextGeographicalLocality' ,'$sTextOccupation' ,'$sSelKupEdu' ,'$sSelKupOcu' ,'$sSelKupInc' ,'$sKupScale' ,'$sTextVisitIds' ,'$dTextActualEntryDate' ,'$tTextActualEntryTime' ,'$sTextEntryUser')";
      //  var_dump($sQuery);exit;
        parent::dbQuery($sQuery);   /*! Executing Query */

        $id = mysql_insert_id($this->iPatientId);      /*! Getting last inserted record id */

        parent::close_connection();           /*! Closing connection */

        return $id;

     }

     /*! Function to View(Retrieve) particular record from database */
     function get_visit_details($id)
     {
         parent::get_connection();      /*! Connecting to database */

         $sQuery = "select * from `tb_rvs_visit` where tb_rvs_visit_id = $id";

         $sResult = parent::dbQuery($sQuery);       /*! Executing Query */

         $aResultArray =  array();

         $aResultArray = parent::fetch_result($sResult);  /*! Fetching Results  */

         parent::close_connection();                /*! Closing connection */

         return  $aResultArray ;

     }
     /*! Function to View(Retrieve) particular record from database by entry date */
      function get_visit_details_by_date($date)
     {
         parent::get_connection();      /*! Connecting to database */
         $arrEntryDate = split('-',$date);
         $dTextEntryDate = $arrEntryDate[2]."-".$arrEntryDate[1]."-".$arrEntryDate[0];

         $sQuery = "select * from `tb_rvs_visit` where tb_rvs_visit_dTextEntryDate = '$dTextEntryDate'" ;

         $sResult = parent::dbQuery($sQuery);       /*! Executing Query */

         $aResultArray =  array();

         $aResultArray = parent::fetch_result($sResult);  /*! Fetching Results  */

         parent::close_connection();                /*! Closing connection */

         return  $aResultArray ;

     }

      /*! Function to Count records retrieved from database by  date */
     function count_visit_details_by_date($date)
     {
         $getResults = array();
         $getResults = $this->get_visit_details_by_date($date);
         $countResults = count($getResults);
         $getResults['count'] =  $countResults;
         return $getResults;
     }

     /*! Function to View(Retrieve) particular record from database by actual entry date */
      function get_visit_details_by_actual_date($date)
     {
         parent::get_connection();      /*! Connecting to database */
         $arrEntryDate = split('-',$date);
         $dTextActualEntryDate = $arrEntryDate[2]."-".$arrEntryDate[1]."-".$arrEntryDate[0];

         $sQuery = "select * from `tb_rvs_visit` where tb_rvs_visit_dTextActualEntryDate = '$dTextActualEntryDate'" ;

         $sResult = parent::dbQuery($sQuery);       /*! Executing Query */

         $aResultArray =  array();

         $aResultArray = parent::fetch_result($sResult);  /*! Fetching Results  */

         parent::close_connection();                /*! Closing connection */

         return  $aResultArray ;

     }

      /*! Function to Count records retrieved from database by actual date */
     function count_visit_details_by_actual_date($date)
     {
         $getResults = array();
         $getResults = $this->get_visit_details_by_actual_date($date);
         $countResults = count($getResults);
         $getResults['count'] =  $countResults;
         return $getResults;
     }

     /*! Function to View(Retrieve) records from database with actual entry date greater than given date  and counting them */
      function count_visit_details_by_actual_date_greater($date)
     {
         parent::get_connection();      /*! Connecting to database */
         $arrEntryDate = split('-',$date);
         $dTextActualEntryDate = $arrEntryDate[2]."-".$arrEntryDate[1]."-".$arrEntryDate[0];

         $sQuery = "select * from `tb_rvs_visit` where tb_rvs_visit_dTextActualEntryDate > '$dTextActualEntryDate'" ;

         $sResult = parent::dbQuery($sQuery);       /*! Executing Query */

         $aResultArray =  array();

         $aResultArray = parent::fetch_result($sResult);  /*! Fetching Results  */

         $countResults = count($aResultArray);
         $aResultArray['count'] =  $countResults;

         parent::close_connection();                /*! Closing connection */

         return  $aResultArray ;

     }

      /*! Function to View(Retrieve) records from database with actual entry date less than given date  and counting them */
      function count_visit_details_by_actual_date_less($date)
     {
         parent::get_connection();      /*! Connecting to database */
         $arrEntryDate = split('-',$date);
         $dTextActualEntryDate = $arrEntryDate[2]."-".$arrEntryDate[1]."-".$arrEntryDate[0];

         $sQuery = "select * from `tb_rvs_visit` where tb_rvs_visit_dTextActualEntryDate < '$dTextActualEntryDate'" ;

         $sResult = parent::dbQuery($sQuery);       /*! Executing Query */

         $aResultArray =  array();

         $aResultArray = parent::fetch_result($sResult);  /*! Fetching Results  */

         $countResults = count($aResultArray);
         $aResultArray['count'] =  $countResults;

         parent::close_connection();                /*! Closing connection */

         return  $aResultArray ;

     }

     /*! Function to View(Retrieve) records from database with actual entry date between the given dates and counting them */
      function count_visit_details_by_actual_date_between($date1,$date2)
     {
         parent::get_connection();      /*! Connecting to database */
         $arrEntryDate1 = split('-',$date1);
         $dTextActualEntryDate1 = $arrEntryDate1[2]."-".$arrEntryDate1[1]."-".$arrEntryDate1[0];

         $arrEntryDate2 = split('-',$date2);
         $dTextActualEntryDate2 = $arrEntryDate2[2]."-".$arrEntryDate2[1]."-".$arrEntryDate2[0];

         $sQuery = "select * from `tb_rvs_visit` where tb_rvs_visit_dTextActualEntryDate between '$dTextActualEntryDate1' and '$dTextActualEntryDate2'" ;

         $sResult = parent::dbQuery($sQuery);       /*! Executing Query */

         $aResultArray =  array();

         $aResultArray = parent::fetch_result($sResult);  /*! Fetching Results  */

         $countResults = count($aResultArray);
         $aResultArray['count'] =  $countResults;

         parent::close_connection();                /*! Closing connection */

         return  $aResultArray ;

     }


     /*! Function to View(Retrieve) particular record from database by Name */
      function get_visit_details_by_name($Name)
     {
         parent::get_connection();      /*! Connecting to database */
         $SlashedName = addslashes($Name);

         $sQuery = "select * from `tb_rvs_visit` where tb_rvs_visit_sTextName like '$SlashedName%'" ;

         $sResult = parent::dbQuery($sQuery);       /*! Executing Query */
         //print_r($sQuery) ; exit;
         $aResultArray =  array();

         $aResultArray = parent::fetch_result($sResult);  /*! Fetching Results  */

         parent::close_connection();                /*! Closing connection */

         return  $aResultArray ;

     }
      /*! Function to View(Retrieve) particular record from database by Age */
      function get_visit_details_by_age($Age)
     {
         parent::get_connection();      /*! Connecting to database */
         $SlashedAge = addslashes($Age);

         $sQuery = "select * from `tb_rvs_visit` where tb_rvs_visit_sTextAge = '$SlashedAge'" ;

         $sResult = parent::dbQuery($sQuery);       /*! Executing Query */

         $aResultArray =  array();

         $aResultArray = parent::fetch_result($sResult);  /*! Fetching Results  */

         parent::close_connection();                /*! Closing connection */

         return  $aResultArray ;

     }
     /*! Function to Count records retrieved from database by Age */
     function count_visit_details_by_age($Age)
     {
         $getResults = array();
         $getResults = $this->get_visit_details_by_age($Age);
         $countResults = count($getResults);
         $getResults['count'] =  $countResults;
         return $getResults;
     }
     /*! Function to View(Retrieve) particular record from database by Sex */
      function get_visit_details_by_sex($Sex)
     {
         parent::get_connection();      /*! Connecting to database */
         $SlashedSex = addslashes($Sex);

         $sQuery = "select * from `tb_rvs_visit` where tb_rvs_visit_sSelSex = '$SlashedSex'" ;

         $sResult = parent::dbQuery($sQuery);       /*! Executing Query */

         $aResultArray =  array();

         $aResultArray = parent::fetch_result($sResult);  /*! Fetching Results  */

         parent::close_connection();                /*! Closing connection */

         return  $aResultArray ;

     }

      /*! Function to Count records retrieved from database by Sex */
     function count_visit_details_by_sex($Sex)
     {
         $getResults = array();
         $getResults = $this->get_visit_details_by_sex($Sex);
         $countResults = count($getResults);
         $getResults['count'] =  $countResults;
         return $getResults;
     }

     /*! Function to View(Retrieve) particular record from database by Address */
      function get_visit_details_by_address($Address)
     {
         parent::get_connection();      /*! Connecting to database */
         $SlashedAddress = addslashes($Address);

        $sQuery = "select * from `tb_rvs_visit` where tb_rvs_visit_sTaAddress = '$SlashedAddress'" ;

         $sResult = parent::dbQuery($sQuery);       /*! Executing Query */

         $aResultArray =  array();

         $aResultArray = parent::fetch_result($sResult);  /*! Fetching Results  */

         parent::close_connection();                /*! Closing connection */

         return  $aResultArray ;

     }

     /*! Function to Count records retrieved from database by Address */
     function count_visit_details_by_address($Address)
     {
         $getResults = array();
         $getResults = $this->get_visit_details_by_address($Address);
         $countResults = count($getResults);
         $getResults['count'] =  $countResults;
         return $getResults;
     }


     /*! Function to View(Retrieve) particular record from database by Address */
      function get_visit_details_by_city($City)
     {
         parent::get_connection();      /*! Connecting to database */
         $SlashedCity = addslashes($City);

         $sQuery = "select * from `tb_rvs_visit` where tb_rvs_visit_sTextCity = '$SlashedCity'" ;

         $sResult = parent::dbQuery($sQuery);       /*! Executing Query */

         $aResultArray =  array();

         $aResultArray = parent::fetch_result($sResult);  /*! Fetching Results  */

         parent::close_connection();                /*! Closing connection */

         return  $aResultArray ;

     }

     /*! Function to Count records retrieved from database by City */
     function count_visit_details_by_city($City)
     {
         $getResults = array();
         $getResults = $this->get_visit_details_by_city($City);
         echo $countResults = count($getResults);
         $getResults['count'] =  $countResults;
         return $getResults;
     }
     /*! Function to View(Retrieve) particular record from database by Locality */
     function get_visit_details_by_locality($Locality)
     {
         parent::get_connection();      /*! Connecting to database */
         $SlashedLocality = addslashes($Locality);

         $sQuery = "select * from `tb_rvs_visit` where tb_rvs_visit_sTextGeographicalLocality = '$SlashedLocality'" ;

         $sResult = parent::dbQuery($sQuery);       /*! Executing Query */

         $aResultArray =  array();

         $aResultArray = parent::fetch_result($sResult);  /*! Fetching Results  */

         parent::close_connection();                /*! Closing connection */

         return  $aResultArray ;

     }

      /*! Function to Count records retrieved from database by Locality */
     function count_visit_details_by_locality($Locality)
     {
         $getResults = array();
         $getResults = $this->get_visit_details_by_locality($Locality);
         $countResults = count($getResults);
         $getResults['count'] =  $countResults;
         return $getResults;
     }

      /*! Function to View(Retrieve) particular record from database by Locality */
      function get_visit_details_by_occupation($Occupation)
     {
         parent::get_connection();      /*! Connecting to database */
         $SlashedOccupation = addslashes($Occupation);

         $sQuery = "select * from `tb_rvs_visit` where tb_rvs_visit_sTextOccupation = '$SlashedOccupation'" ;

         $sResult = parent::dbQuery($sQuery);       /*! Executing Query */

         $aResultArray =  array();

         $aResultArray = parent::fetch_result($sResult);  /*! Fetching Results  */

         parent::close_connection();                /*! Closing connection */

         return  $aResultArray ;

     }

     /*! Function to Count records retrieved from database by Locality */
     function count_visit_details_by_occupation($Occupation)
     {
         $getResults = array();
         $getResults = $this->get_visit_details_by_occupation($Occupation);
         $countResults = count($getResults);
         $getResults['count'] =  $countResults;
         return $getResults;
     }

      /*! Function to View(Retrieve) particular record from database by who bite category */
     function get_visit_details_by_who_bite_category($WhoBite)
     {
         parent::get_connection();      /*! Connecting to database */
         $SlashedWhoBite = addslashes($WhoBite);

         $sQuery = "select * from `tb_rvs_visit` where tb_rvs_visit_sSelWhoBite = '$SlashedWhoBite'" ;
        // print_r($sQuery); exit;
         $sResult = parent::dbQuery($sQuery);       /*! Executing Query */

         $aResultArray =  array();

         $aResultArray = parent::fetch_result($sResult);  /*! Fetching Results  */

         parent::close_connection();                /*! Closing connection */

         return  $aResultArray ;

     }
     /*! Function to Count records retrieved from database by who bite category */
     function count_visit_details_by_who_bite_category($WhoBite)
     {
         $getResults = array();
         $getResults = $this->get_visit_details_by_who_bite_category($WhoBite);
         $countResults = count($getResults);
         $getResults['count'] =  $countResults;
         return $getResults;
     }

     /*! Function to View(Retrieve) particular record from Patient Table */
     function get_patient_details($id)
     {
         parent::get_connection();      /*! Connecting to database */

         $sQuery = "select * from `tb_rvs_patient` where tb_rvs_patient_id = $id" ;

         $sResult = parent::dbQuery($sQuery);       /*! Executing Query */

         $aResultArray =  array();

         $aResultArray = parent::fetch_result($sResult);  /*! Fetching Results  */

         parent::close_connection();                /*! Closing connection */

         return  $aResultArray ;

     }


     /*! Function to Update particular record from database */
     function update_visit_details($id,$dTextEntryDate,$sTextName,$sTextAge,$sSelSex,$sTaAddress,$sTextCity,$sTextGeographicalLocality,$sTextOccupation,$sTextSiteOfBite,$sSelAware,$sSelHistory,$sTaHistoryAllergies,$sTaDetailsOfAnimalBite,$sSelWhoBite,$sSelTreatment,$sTaLocal,$sSelSystemic,$sTaDay0,$sSelDay,$sTaDay3,$sSelDay3,$sTaDay7,$sSelDay7,$sTaDay14,$sSelDay14,$sTaDay28,$sSelDay28,$sSelBrainDerived,$sTextManufacturerNo,$sTextRouteOfAdministration,$sTextQuantityAdministered,$sTaDatesAdministered,$sTaRabiesVaccination,$sSelBrainDerivedImmunoglobulin,$sTextSensitivityTest,$sTextManufacturerNoImmunoglobulin,$sTextRouteOfAdministrationImmunoglobulin,$sTextQuantityAdministeredImmunoglobulin,$sTaDatesAdministeredImmunoglobulin,$sTaRabiesImmunoglobulin,$sTaAdverseEventsImmunoglobulin,$sSelStatus,$sTaStatusOfOther,$sTextWeight,$sTextSexAnimal,$sTextBreed,$sTextSpecies,$sTextAnimalvaccinated,$sSelWhatHappenedAnimal,$chkFluorescent,$chkNegri,$chkInoculation,$chkOtherTests,$dTextActualEntryDate,$tTextActualEntryTime,$sTextEntryUser)
     {
        parent::get_connection();              /*! Connecting to database */

           $sQuery = "update `tb_rvs_visit` set tb_rvs_visit_dTextEntryDate = '$dTextEntryDate',tb_rvs_visit_sTextName = '$sTextName',tb_rvs_visit_sTextAge = '$sTextAge',tb_rvs_visit_sSelSex = '$sSelSex',tb_rvs_visit_sTaAddress = '$sTaAddress',tb_rvs_visit_sTextCity = '$sTextCity',tb_rvs_visit_sTextGeographicalLocality = '$sTextGeographicalLocality',tb_rvs_visit_sTextOccupation = '$sTextOccupation',tb_rvs_visit_sTextSiteOfBite = '$sTextSiteOfBite',tb_rvs_visit_sSelAware = '$sSelAware',tb_rvs_visit_sSelHistory = '$sSelHistory',tb_rvs_visit_sTaHistoryAllergies = '$sTaHistoryAllergies',tb_rvs_visit_sTaDetailsOfAnimalBite = '$sTaDetailsOfAnimalBite',tb_rvs_visit_sSelWhoBite = '$sSelWhoBite',tb_rvs_visit_sSelTreatment = '$sSelTreatment',tb_rvs_visit_sTaLocal = '$sTaLocal',tb_rvs_visit_sSelSystemic = '$sSelSystemic',tb_rvs_visit_sTaDay0 = '$sTaDay0',tb_rvs_visit_sSelDay = '$sSelDay',tb_rvs_visit_sTaDay3 = '$sTaDay3',tb_rvs_visit_sSelDay3 = '$sSelDay3',tb_rvs_visit_sTaDay7 = '$sTaDay7',tb_rvs_visit_sSelDay7 = '$sSelDay7',tb_rvs_visit_sTaDay14 = '$sTaDay14',tb_rvs_visit_sSelDay14 = '$sSelDay14',tb_rvs_visit_sTaDay28 = '$sTaDay28',tb_rvs_visit_sSelDay28 = '$sSelDay28',tb_rvs_visit_sSelBrainDerived = '$sSelBrainDerived',tb_rvs_visit_sTextManufacturerNo = '$sTextManufacturerNo',tb_rvs_visit_sTextRouteOfAdministration = '$sTextRouteOfAdministration',tb_rvs_visit_sTextQuantityAdministered = '$sTextQuantityAdministered',tb_rvs_visit_sTaDatesAdministered = '$sTaDatesAdministered',tb_rvs_visit_sTaRabiesVaccination = '$sTaRabiesVaccination',tb_rvs_visit_sSelBrainDerivedImmunoglobulin = '$sSelBrainDerivedImmunoglobulin',tb_rvs_visit_sTextSensitivityTest = '$sTextSensitivityTest',tb_rvs_visit_sTextManufacturerNoImmunoglobulin = '$sTextManufacturerNoImmunoglobulin',tb_rvs_visit_sTextRouteOfAdministrationImmunoglobulin = '$sTextRouteOfAdministrationImmunoglobulin',tb_rvs_visit_sTextQuantityAdministeredImmunoglobulin = '$sTextQuantityAdministeredImmunoglobulin',tb_rvs_visit_sTaDatesAdministeredImmunoglobulin = '$sTaDatesAdministeredImmunoglobulin',tb_rvs_visit_sTaRabiesImmunoglobulin = '$sTaRabiesImmunoglobulin',tb_rvs_visit_sTaAdverseEventsImmunoglobulin = '$sTaAdverseEventsImmunoglobulin',tb_rvs_visit_sSelStatus = '$sSelStatus',tb_rvs_visit_sTaStatusOfOther = '$sTaStatusOfOther',tb_rvs_visit_sTextWeight = '$sTextWeight',tb_rvs_visit_sTextSexAnimal = '$sTextSexAnimal',tb_rvs_visit_sTextBreed = '$sTextBreed',tb_rvs_visit_sTextSpecies = '$sTextSpecies',tb_rvs_visit_sTextAnimalvaccinated = '$sTextAnimalvaccinated',tb_rvs_visit_sSelWhatHappenedAnimal = '$sSelWhatHappenedAnimal',tb_rvs_visit_chkFluorescent = '$chkFluorescent',tb_rvs_visit_chkNegri = '$chkNegri',tb_rvs_visit_chkInoculation = '$chkInoculation',tb_rvs_visit_chkOtherTests = '$chkOtherTests', tb_rvs_visit_dTextActualEntryDate = '$dTextActualEntryDate', tb_rvs_visit_tTextActualEntryTime = '$tTextActualEntryTime',tb_rvs_visit_sTextEntryUser = '$sTextEntryUser' where tb_rvs_visit_id= '$id'";
         //   print_r($sQuery); exit;
        parent::dbQuery($sQuery);              /*! Executing Query */


        parent::close_connection();                 /*! Closing connection */


     }
     function update_patient_details($id,$dTextEntryDate,$sTextName,$sTextAge,$sSelSex,$sTaAddress,$sTextCity,$sTextGeographicalLocality,$sTextOccupation,$dTextActualEntryDate,$tTextActualEntryTime,$sTextEntryUser)
     {
        parent::get_connection();              /*! Connecting to database */

           $sQuery = "update `tb_rvs_patient` set tb_rvs_patient_dTextEntryDate = '$dTextEntryDate',tb_rvs_patient_sTextName = '$sTextName',tb_rvs_patient_sTextAge = '$sTextAge',tb_rvs_patient_sSelSex = '$sSelSex',tb_rvs_patient_sTaAddress = '$sTaAddress',tb_rvs_patient_sTextCity = '$sTextCity',tb_rvs_patient_sTextGeographicalLocality = '$sTextGeographicalLocality',tb_rvs_patient_sTextOccupation = '$sTextOccupation', tb_rvs_patient_dTextActualEntryDate = '$dTextActualEntryDate', tb_rvs_visit_tTextActualEntryTime = '$tTextActualEntryTime',tb_rvs_patient_sTextEntryUser = '$sTextEntryUser' where tb_rvs_patient_id= $id";

        parent::dbQuery($sQuery);              /*! Executing Query */

        parent::close_connection();                 /*! Closing connection */


     }

      /*! Function to View(Retrieve) records from database based on All Criteria */
     function get_search_results_for_all_criteria($fieldName, $parameter, $parameter2)
     {   //print_r($parameter);   exit;
         parent::get_connection();                    /*! Connecting to database */
         //print_r("field name...".count($fieldName)." Parameter...".count($parameter)."<br />");
         $sQuery = "select * from `tb_rvs_visit` where ";
         for($pp=0;$pp<count($fieldName);$pp++)
         {  //print_r($parameter[$pp]."....");   exit;
            if($fieldName[$pp] == 'greaterThanDate')
            {   $date = $parameter[$pp];
                $arrEntryDate = split('-',$date);
                $dTextActualEntryDate = $arrEntryDate[2]."-".$arrEntryDate[1]."-".$arrEntryDate[0];

                $sQuery .=  " tb_rvs_visit_dTextActualEntryDate > '".$dTextActualEntryDate."' and ";
            }
            else if($fieldName[$pp] == 'LessThanDate')
            {
                $date = $parameter[$pp];
                $arrEntryDate = split('-',$date);
                $dTextActualEntryDate = $arrEntryDate[2]."-".$arrEntryDate[1]."-".$arrEntryDate[0];

                $sQuery .=  " tb_rvs_visit_dTextActualEntryDate < '".$dTextActualEntryDate."' and ";
            }
            else if($fieldName[$pp] == 'BetweenDates')
            {
                $date1 =  $parameter[$pp];
                $date2 = $parameter2 ;
                $arrEntryDate1 = split('-',$date1);
               $dTextActualEntryDate1 = $arrEntryDate1[2]."-".$arrEntryDate1[1]."-".$arrEntryDate1[0];

               $arrEntryDate2 = split('-',$date2);
               $dTextActualEntryDate2 = $arrEntryDate2[2]."-".$arrEntryDate2[1]."-".$arrEntryDate2[0];

               $sQuery .=  " tb_rvs_visit_dTextActualEntryDate between '".$dTextActualEntryDate1."' and '".$dTextActualEntryDate2."' and ";
            }
            else if($fieldName[$pp] == 'tb_rvs_visit_dTextActualEntryDate')
            {
                $date = $parameter[$pp];
                $arrEntryDate = split('-',$date);
                $dTextActualEntryDate = $arrEntryDate[2]."-".$arrEntryDate[1]."-".$arrEntryDate[0];

               $sQuery .=  " tb_rvs_visit_dTextActualEntryDate = '".$dTextActualEntryDate."' and ";
            }
            else if ($fieldName[$pp] =='')
            {

            }
            else
            {
                $sQuery .=  $fieldName[$pp]." = '".$parameter[$pp]."' and ";
            }


         }
         $sQuery .= '1';

         //print_r($sQuery); exit;
         $sResult = parent::dbQuery($sQuery);         /*! Executing Query */

         $aResultArray =  array();

         $aResultArray = parent::fetch_result($sResult);    /*! Fetching Results  */

         parent::close_connection();                 /*! Closing connection */

         return  $aResultArray ;

     }


     function executeQuery($queryToRun)
     {
         parent::get_connection();      /*! Connecting to database */
         
         $sQuery = $queryToRun;

         $sResult = parent::dbQuery($sQuery);       /*! Executing Query */

         $aResultArray =  array();

         $aResultArray = parent::fetch_result($sResult);  /*! Fetching Results  */

         $countResults = count($aResultArray);

	 $aResultArray['count'] =  $countResults;

         parent::close_connection();                /*! Closing connection */

         return  $aResultArray ;

     }


     /*! Function to Delete particular record from database */

     function delete_visit_contact($id)
     {
         parent::get_connection();              /*! Connecting to database */

        $sQuery = "delete from `tb_rvs_visit` where id= $id ";

        parent::dbQuery($sQuery);              /*! Executing Query */

        
        parent::close_connection();
     }

}


?>