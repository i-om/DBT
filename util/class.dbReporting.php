<?php

/*! Include file for connection  */
include_once('class.dbConnect.php');
include_once('xml_reporting.php');

/*! Class for interaction with database thorugh methods */

class dbt extends dbConnect
{
    /*! Function to add record in the database */

     function set_reporting($sHospital_name, $sService, $sImpatient_no, $sHead_Of_Service, $sWard_No, $sBed_No, $sPatient_Name, $sAddress, $sRelative_Info, $iAge_Yrs,$iAge_Mts,$iAge_Days,$sSex,$sStatus,$sCommunity,$sOccupational_Class,$sEconomic_Class,$sEmployee_Of,$iTelephone_No,$sMunicipal_Ward_No,$sOpd_No,$sCasuality_No,$sPc_On_Duty,$sBrought_By,$sStation,$dAdmission_Date,$iAdmission_Time_Hr,$iAdmission_Time_Min,$sAdmission_Am_Pm,$dDischarged_Date,$iDischarged_Time_Hr,$iDischarged_Time_Min,$sDischarged_Am_Pm,$iPrevious_Admission_No_Counter,$sPrevious_Admission_No,$iDays,$sProvisional_Diagnosis,$sFinal_Diagnosis,$sFinal_Code_No,$sSecondary_Diagnosis,$sSecondary_Code_No,$sComplications,$sComplications_Code_No,$sOperations,$sOperations_Code_No,$sCured,$sRelieved,$sUnchanged,$sWorse,$sAma,$sExpired,$sAutopsy,$sTransferred_To,$sSel_Transferred_To,$sWitness,$sRelationship,$sLoginId,$sRights)
     {
        parent::get_connection();    /*! Connecting to database */

        $sQuery = "insert into reporting(hospital_name,service,impatient_no,Head_Of_Service,Ward_No,Bed_No,Patient_Name,Address,Relative_Info,Age_Yrs,Age_Mts,Age_Days,Sex,Status,Community,Occupational_Class,Economic_Class, Employee_Of,Telephone_No, Municipal_Ward_No,Opd_No, Casuality_No, Pc_On_Duty,Brought_By,Station,Admission_Date,Admission_Time_Hr,Admission_Time_Min,Admission_Am_Pm,Discharged_Date, Discharged_Time_Hr,Discharged_Time_Min,Discharged_Am_Pm,Previous_Admission_No_Counter,Previous_Admission_No,Days,Provisional_Diagnosis,Final_Diagnosis,Final_Code_No,Secondary_Diagnosis,Secondary_Code_No,Complications,Complications_Code_No,Operations,Operations_Code_No,Cured,Relieved,Unchanged,Worse,Ama,Expired,Autopsy,Transferred_To,sel_Transferred_To,Witness,Relationship,login_id) values
                                        ('$sHospital_name', '$sService', '$sImpatient_no', '$sHead_Of_Service', '$sWard_No', '$sBed_No', '$sPatient_Name', '$sAddress', '$sRelative_Info', '$iAge_Yrs','$iAge_Mts','$iAge_Days','$sSex','$sStatus','$sCommunity','$sOccupational_Class','$sEconomic_Class','$sEmployee_Of','$iTelephone_No','$sMunicipal_Ward_No','$sOpd_No','$sCasuality_No','$sPc_On_Duty','$sBrought_By','$sStation','$dAdmission_Date','$iAdmission_Time_Hr','$iAdmission_Time_Min','$sAdmission_Am_Pm','$dDischarged_Date','$iDischarged_Time_Hr','$iDischarged_Time_Min','$sDischarged_Am_Pm','$iPrevious_Admission_No_Counter','$sPrevious_Admission_No','$iDays','$sProvisional_Diagnosis','$sFinal_Diagnosis','$sFinal_Code_No','$sSecondary_Diagnosis','$sSecondary_Code_No','$sComplications','$sComplications_Code_No','$sOperations','$sOperations_Code_No','$sCured','$sRelieved','$sUnchanged','$sWorse','$sAma','$sExpired','$sAutopsy','$sTransferred_To','$sSel_Transferred_To','$sWitness','$sRelationship','$sLoginId')";

        parent::dbQuery($sQuery);   /*! Executing Query */

        $id = mysql_insert_id($this->iContactId);      /*! Getting last inserted record id */
        create_reporting($id,$sHospital_name, $sService, $sImpatient_no, $sHead_Of_Service, $sWard_No, $sBed_No, $sPatient_Name, $sAddress, $sRelative_Info, $iAge_Yrs,$iAge_Mts,$iAge_Days,$sSex,$sStatus,$sCommunity,$sOccupational_Class,$sEconomic_Class,$sEmployee_Of,$iTelephone_No,$sMunicipal_Ward_No,$sOpd_No,$sCasuality_No,$sPc_On_Duty,$sBrought_By,$sStation,$dAdmission_Date,$iAdmission_Time_Hr,$iAdmission_Time_Min,$sAdmission_Am_Pm,$dDischarged_Date,$iDischarged_Time_Hr,$iDischarged_Time_Min,$sDischarged_Am_Pm,$iPrevious_Admission_No_Counter,$sPrevious_Admission_No,$iDays,$sProvisional_Diagnosis,$sFinal_Diagnosis,$sFinal_Code_No,$sSecondary_Diagnosis,$sSecondary_Code_No,$sComplications,$sComplications_Code_No,$sOperations,$sOperations_Code_No,$sCured,$sRelieved,$sUnchanged,$sWorse,$sAma,$sExpired,$sAutopsy,$sTransferred_To,$sSel_Transferred_To,$sWitness,$sRelationship,$sLoginId,$sRights);
        parent::close_connection();           /*! Closing connection */

        return $id;

     }

     /*! Function to View(Retrieve) particular record from database */
     function get_reporting($id,$sLoginId)
     {
         parent::get_connection();      /*! Connecting to database */
         /*if($sRights == 'admin')
         {*/
            $sQuery = "select * from reporting where id = $id" ;
        /* }
         else
         {
            $sQuery = "select * from reporting where id = $id and login_id ='$sLoginId'" ;
         }*/

         $sResult = parent::dbQuery($sQuery);       /*! Executing Query */

         $aResultArray =  array();

         $aResultArray = parent::fetch_result($sResult);  /*! Fetching Results  */

         parent::close_connection();                /*! Closing connection */

         return  $aResultArray ;

     }

     /*! Function to View(Retrieve) all records from database */
     function get_all_reporting($sLoginId)
     {
         parent::get_connection();                 /*! Connecting to database */
         /*if($sRights == 'admin')
         {
           */ $sQuery = "select * from reporting" ;
        /* }
         else
         {
           $sQuery = "select * from reporting where login_id ='$sLoginId'" ;
         }*/
         $sResult = parent::dbQuery($sQuery);     /*! Executing Query */

         $aResultArray =  array();

         $aResultArray = parent::fetch_result($sResult);    /*! Fetching Results  */

         parent::close_connection();              /*! Closing connection */

         return  $aResultArray ;
     }

     /*! Function to View(Retrieve) records from database based on ceratin condition */
     function search_reporting($fieldName, $parameter,$sLoginId)
     {
         parent::get_connection();                    /*! Connecting to database */

        /*
         if($sRights=='admin')
         {*/
            $sQuery = "select * from reporting where ";
             for($pp=0;$pp<count($fieldName);$pp++)
             {
                 $sQuery .=  $fieldName[$pp]." like '".$parameter[$pp]."%' and ";
             }
              $sQuery .= '1';

        /* }
         else
         {
             $sQuery = "select * from reporting where ";
             for($pp=0;$pp<count($fieldName);$pp++)
             {
                 $sQuery .=  $fieldName[$pp]." like '".$parameter[$pp]."%' and ";
             }

             $sQuery .= "login_id ='$sLoginId'" ;
         }*/


         $sResult = parent::dbQuery($sQuery);         /*! Executing Query */

         $aResultArray =  array();

         $aResultArray = parent::fetch_result($sResult);    /*! Fetching Results  */

         parent::close_connection();                 /*! Closing connection */

         return  $aResultArray ;

     }

     /*! Function to View(Retrieve) records from database based on ceratin condition */
     function search_reporting_date($fieldName, $parameter,$sLoginId,$sStartDate,$sEndDate)
     {
         parent::get_connection();                    /*! Connecting to database */


             $sQuery = "select * from `reporting` where `Admission_Date` >= '$sStartDate' and `Admission_Date` <= '$sEndDate' and ";
             for($pp=0;$pp<count($fieldName);$pp++)
             {
               if($parameter[$pp]!='AllServices')
               {
                   $sQuery .=  "`".$fieldName[$pp]."` = '".$parameter[$pp]."' and ";
               }

             }
              $sQuery .= '1 = 1';


         
         $sResult = parent::dbQuery($sQuery);         /*! Executing Query */

         $aResultArray =  array();

         $aResultArray = parent::fetch_result($sResult);    /*! Fetching Results  */

         parent::close_connection();                 /*! Closing connection */

         return  $aResultArray ;

     }

     function getDistinctService()
     {
         parent::get_connection();                    /*! Connecting to database */


         $sQuery = "select DISTINCT `service` from reporting";

         $sResult = parent::dbQuery($sQuery);         /*! Executing Query */

         $aResultArray =  array();

         $aResultArray = parent::fetch_result($sResult);    /*! Fetching Results  */

         parent::close_connection();                 /*! Closing connection */

         return  $aResultArray ;

     }

     /*! Function to Update particular record from database */
     function update_reporting($id,$sHospital_name, $sService, $sImpatient_no, $sHead_Of_Service, $sWard_No, $sBed_No, $sPatient_Name, $sAddress, $sRelative_Info, $iAge_Yrs,$iAge_Mts,$iAge_Days,$sSex,$sStatus,$sCommunity,$sOccupational_Class,$sEconomic_Class,$sEmployee_Of,$iTelephone_No,$sMunicipal_Ward_No,$sOpd_No,$sCasuality_No,$sPc_On_Duty,$sBrought_By,$sStation,$dAdmission_Date,$iAdmission_Time_Hr,$iAdmission_Time_Min,$sAdmission_Am_Pm,$dDischarged_Date,$iDischarged_Time_Hr,$iDischarged_Time_Min,$sDischarged_Am_Pm,$iPrevious_Admission_No_Counter,$sPrevious_Admission_No,$iDays,$sProvisional_Diagnosis,$sFinal_Diagnosis,$sFinal_Code_No,$sSecondary_Diagnosis,$sSecondary_Code_No,$sComplications,$sComplications_Code_No,$sOperations,$sOperations_Code_No,$sCured,$sRelieved,$sUnchanged,$sWorse,$sAma,$sExpired,$sAutopsy,$sTransferred_To,$sSel_Transferred_To,$sWitness,$sRelationship,$sLoginId,$sRights)
     {
        parent::get_connection();              /*! Connecting to database */
        if($sRights == 'admin')
        {
            $sQuery = "update reporting set hospital_name='$sHospital_name', service= '$sService',impatient_no='$sImpatient_no',Head_Of_Service='$sHead_Of_Service', Ward_No='$sWard_No',
                        Bed_No='$sBed_No', Patient_Name='$sPatient_Name', Address='$sAddress', Relative_Info='$sRelative_Info', Age_Yrs='$iAge_Yrs',
                        Age_Mts ='$iAge_Mts',Age_Days='$iAge_Days',Sex='$sSex',Status='$sStatus',Community='$sCommunity',Occupational_Class='$sOccupational_Class',
                        Economic_Class='$sEconomic_Class',Employee_Of='$sEmployee_Of',Telephone_No='$iTelephone_No',Municipal_Ward_No='$sMunicipal_Ward_No',
                        Opd_No='$sOpd_No',Casuality_No='$sCasuality_No', Pc_On_Duty='$sPc_On_Duty',Brought_By='$sBrought_By',Station='$sStation',
                        Admission_Date='$dAdmission_Date',Admission_Time_Hr='$iAdmission_Time_Hr',Admission_Time_Min='$iAdmission_Time_Min',
                        Admission_Am_Pm='$sAdmission_Am_Pm',Discharged_Date = '$dDischarged_Date',Discharged_Time_Hr='$iDischarged_Time_Hr',
                        Discharged_Time_Min='$iDischarged_Time_Min',Discharged_Am_Pm='$sDischarged_Am_Pm',
                        Previous_Admission_No_Counter='$iPrevious_Admission_No_Counter',Previous_Admission_No='$sPrevious_Admission_No',Days='$iDays',
                        Provisional_Diagnosis='$sProvisional_Diagnosis',Final_Diagnosis='$sFinal_Diagnosis',Final_Code_No='$sFinal_Code_No',
                        Secondary_Diagnosis='$sSecondary_Diagnosis',Secondary_Code_No='$sSecondary_Code_No',Complications='$sComplications',
                        Complications_Code_No='$sComplications_Code_No',Operations='$sOperations',Operations_Code_No='$sOperations_Code_No',
                        Cured='$sCured',Relieved='$sRelieved',Unchanged='$sUnchanged',Worse='$sWorse',Ama='$sAma',Expired='$sExpired',Autopsy='$sAutopsy',
                        Transferred_To='$sTransferred_To',Sel_Transferred_To='$sSel_Transferred_To',Witness='$sWitness',Relationship='$sRelationship'
                        where id= $id";
            
        }
        else
        {
           $sQuery = "update reporting set hospital_name='$sHospital_name', service= '$sService',impatient_no='$sImpatient_no',Head_Of_Service='$sHead_Of_Service', Ward_No='$sWard_No',
                      Bed_No='$sBed_No', Patient_Name='$sPatient_Name', Address='$sAddress', Relative_Info='$sRelative_Info', Age_Yrs='$iAge_Yrs',
                      Age_Mts ='$iAge_Mts',Age_Days='$iAge_Days',Sex='$sSex',Status='$sStatus',Community='$sCommunity',Occupational_Class='$sOccupational_Class',
                      Economic_Class='$sEconomic_Class',Employee_Of='$sEmployee_Of',Telephone_No='$iTelephone_No',Municipal_Ward_No='$sMunicipal_Ward_No',
                      Opd_No='$sOpd_No',Casuality_No='$sCasuality_No', Pc_On_Duty='$sPc_On_Duty',Brought_By='$sBrought_By',Station='$sStation',
                      Admission_Date='$dAdmission_Date',Admission_Time_Hr='$iAdmission_Time_Hr',Admission_Time_Min='$iAdmission_Time_Min',
                      Admission_Am_Pm='$sAdmission_Am_Pm',Discharged_Date = '$dDischarged_Date',Discharged_Time_Hr='$iDischarged_Time_Hr',
                      Discharged_Time_Min='$iDischarged_Time_Min',Discharged_Am_Pm='$sDischarged_Am_Pm',
                      Previous_Admission_No_Counter='$iPrevious_Admission_No_Counter',Previous_Admission_No='$sPrevious_Admission_No',Days='$iDays',
                      Provisional_Diagnosis='$sProvisional_Diagnosis',Final_Diagnosis='$sFinal_Diagnosis',Final_Code_No='$sFinal_Code_No',
                      Secondary_Diagnosis='$sSecondary_Diagnosis',Secondary_Code_No='$sSecondary_Code_No',Complications='$sComplications',
                      Complications_Code_No='$sComplications_Code_No',Operations='$sOperations',Operations_Code_No='$sOperations_Code_No',
                      Cured='$sCured',Relieved='$sRelieved',Unchanged='$sUnchanged',Worse='$sWorse',Ama='$sAma',Expired='$sExpired',Autopsy='$sAutopsy',
                      Transferred_To='$sTransferred_To',Sel_Transferred_To='$sSel_Transferred_To',Witness='$sWitness',Relationship='$sRelationship'
                       where id= $id   and login_id ='$sLoginId'";
        }
        parent::dbQuery($sQuery);              /*! Executing Query */


        parent::close_connection();                 /*! Closing connection */

        //return $id;

     }

     /*! Function to Delete particular record from database */

     function delete_reporting($id)
     {
         parent::get_connection();              /*! Connecting to database */

        $sQuery = "delete from reporting where id= $id ";

        parent::dbQuery($sQuery);              /*! Executing Query */


        parent::close_connection();
     }
}
?>