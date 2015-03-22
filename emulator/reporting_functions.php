<?php

  function getIndoorReportingInfoForId($id,$sLoginId)
  {
        $objReport = new dbt("dbt");
        $aData = $objReport->get_reporting($id,$sLoginId);

        $aReporting = array();
        $aReporting['textHospital']=$aData[0]['hospital_name'];
        $aReporting['textSERVICE']=$aData[0]['service'];
        $aReporting['textImpatientNo']=$aData[0]['impatient_no'];
        $aReporting['textHeadOfService']=$aData[0]['Head_Of_Service'];
        $aReporting['textWardNo']=$aData[0]['Ward_No'];
        $aReporting['textBedNo']=$aData[0]['Bed_No'];
        $aReporting['textPatientName']=$aData[0]['Patient_Name'];
        $aReporting['taAddress']=$aData[0]['Address'];
        $aReporting['taRelative']=$aData[0]['Relative_Info'];
        $aReporting['textAgeYrs']=$aData[0]['Age_Yrs'];
        $aReporting['textAgeMts']=$aData[0]['Age_Mts'];
        $aReporting['textAgeDays']=$aData[0]['Age_Days'];
        $aReporting['selSex']=$aData[0]['Sex'];
        $aReporting['selStatus']=$aData[0]['Status'];
        $aReporting['textCommunity']=$aData[0]['Community'];
        $aReporting['textOccupationalClass']=$aData[0]['Occupational_Class'];
        $aReporting['textEconomicClass']=$aData[0]['Economic_Class'];
        $aReporting['selEmployeeOf']=$aData[0]['Employee_Of'];
        $aReporting['textTelephoneNo']=$aData[0]['Telephone_No'];
        $aReporting['textMunicipalWardNo']=$aData[0]['Municipal_Ward_No'];
        $aReporting['textOpdNo']=$aData[0]['Opd_No'];
        $aReporting['textCasualityNo']=$aData[0]['Casuality_No'];
        $aReporting['textPcOnDuty']=$aData[0]['Pc_On_Duty'];
        $aReporting['textBroughtBy']=$aData[0]['Brought_By'];
        $aReporting['textStation']=$aData[0]['Station'];
        $aReporting['textAdmissionDate']=$aData[0]['Admission_Date'];
        $aReporting['selAdmissionTimeHr']=$aData[0]['Admission_Time_Hr'];
        $aReporting['selAdmissionTimeMin']=$aData[0]['Admission_Time_Min'];
        $aReporting['selAdmissionAmPm']=$aData[0]['Admission_Am_Pm'];
        $aReporting['textDischargedDate']=$aData[0]['Discharged_Date'];
        $aReporting['selDischargedTimeHr']=$aData[0]['Discharged_Time_Hr'];
        $aReporting['selDischargedTimeMin']=$aData[0]['Discharged_Time_Min'];
        $aReporting['selDischargedAmPm']=$aData[0]['Discharged_Am_Pm'];
        $aReporting['hidPreviousAdmissionNoCounter']=$aData[0]['Previous_Admission_No_Counter'];
        $aReporting['textPreviousAdmissionNo']=$aData[0]['Previous_Admission_No'];

        $aReporting['textDays']=$aData[0]['Days'];
        $aReporting['textProvisionalDiagnosis']=$aData[0]['Provisional_Diagnosis'];
        $aReporting['textFinalDiagnosis']=$aData[0]['Final_Diagnosis'];
        $aReporting['textFinalCodeNo']=$aData[0]['Final_Code_No'];
        $aReporting['textSecondaryDiagnosis']=$aData[0]['Secondary_Diagnosis'];
        $aReporting['textSecondaryCodeNo']=$aData[0]['Secondary_Code_No'];
        $aReporting['textComplications']=$aData[0]['Complications'];
        $aReporting['textComplicationsCodeNo']=$aData[0]['Complications_Code_No'];
        $aReporting['textOperations']=$aData[0]['Operations'];
        $aReporting['textOperationsCodeNo']=$aData[0]['Operations_Code_No'];
        $aReporting['chkCured']=$aData[0]['Cured'];
        $aReporting['chkRelieved']=$aData[0]['Relieved'];
        $aReporting['chkUnchanged']=$aData[0]['Unchanged'];
        $aReporting['chkWorse']=$aData[0]['Worse'];
        $aReporting['chkAma']=$aData[0]['Ama'];
        $aReporting['chkExpired']=$aData[0]['Expired'];
        $aReporting['selAutopsy']=$aData[0]['Autopsy'];
        $aReporting['textTransferredTo']=$aData[0]['Transferred_To'];
        $aReporting['selTransferredTo']=$aData[0]['sel_Transferred_To'];
        $aReporting['textWitness']=$aData[0]['Witness'];
        $aReporting['textRelationship']=$aData[0]['Relationship'];
        // print_r( $aReporting);
        return $aReporting;
  }

?>