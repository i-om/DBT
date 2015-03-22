<?php
function create_reporting($id,$sHospital_name, $sService, $sImpatient_no, $sHead_Of_Service, $sWard_No, $sBed_No, $sPatient_Name, $sAddress, $sRelative_Info,
$iAge_Yrs,$iAge_Mts,$iAge_Days,$sSex,$sStatus,$sCommunity,$sOccupational_Class,$sEconomic_Class,$sEmployee_Of,
$iTelephone_No,$sMunicipal_Ward_No,$sOpd_No,$sCasuality_No,$sPc_On_Duty,$sBrought_By,$sStation,$dAdmission_Date,
$iAdmission_Time_Hr,$iAdmission_Time_Min,$sAdmission_Am_Pm,$dDischarged_Date,$iDischarged_Time_Hr,$iDischarged_Time_Min,
$sDischarged_Am_Pm,$iPrevious_Admission_No_Counter,$sPrevious_Admission_No,$iDays,$sProvisional_Diagnosis,
$sFinal_Diagnosis,$sFinal_Code_No,$sSecondary_Diagnosis,$sSecondary_Code_No,$sComplications,$sComplications_Code_No,
$sOperations,$sOperations_Code_No,$sCured,$sRelieved,$sUnchanged,$sWorse,$sAma,$sExpired,$sAutopsy,$sTransferred_To,
$sSel_Transferred_To,$sWitness,$sRelationship,$sLoginId,$sRights)
    {

    $oXml=simplexml_load_file("../util/xml/report.xml");  //! Load the report.xml xml  file

    $oNew=$oXml->addChild('report');
    $oNew->addAttribute('id',$id );
    $oNew->addChild('hospital_name',$sHospital_name);
    $oNew->addChild('service',$sService);
    $oNew->addChild('Impatient_no',$sImpatient_no);
    $oNew->addChild('Head_Of_Service',$sHead_Of_Service);
    $oNew->addChild('Ward_No',$sWard_No);
    $oNew->addChild('Bed_No',$sBed_No);
    $oNew->addChild('Patient_Name',$sPatient_Name);
    $oNew->addChild('Address',$sAddress);
    $oNew->addChild('Relative_Info',$sRelative_Info);
    $oNew->addChild('Age_Yrs',$iAge_Yrs);
    $oNew->addChild('Age_Mts',$iAge_Mts);
    $oNew->addChild('Age_Days',$iAge_Days);
    $oNew->addChild('Sex',$sSex);
    $oNew->addChild('Status',$sStatus);
    $oNew->addChild('Community',$sCommunity);
    $oNew->addChild('Occupational_Class',$sOccupational_Class);
    $oNew->addChild('Economic_Class',$sEconomic_Class);
    $oNew->addChild('Employee_Of',$sEmployee_Of);
    $oNew->addChild('Telephone_No',$iTelephone_No);
    $oNew->addChild('Municipal_Ward_No',$sMunicipal_Ward_No);
    $oNew->addChild('Opd_No',$sOpd_No);
    $oNew->addChild('Pc_On_Duty',$sPc_On_Duty);
    $oNew->addChild('Brought_By',$sBrought_By);
    $oNew->addChild('Station',$sStation);
    $oNew->addChild('Admission_Date',$dAdmission_Date);
    $oNew->addChild('Admission_Time_Hr',$iAdmission_Time_Hr);
    $oNew->addChild('Admission_Time_Min',$iAdmission_Time_Min);
    $oNew->addChild('Admission_Am_Pm',$sAdmission_Am_Pm);
    $oNew->addChild('Discharged_Date',$dDischarged_Date);
    $oNew->addChild('Discharged_Time_Hr',$iDischarged_Time_Hr);
    $oNew->addChild('Discharged_Time_Min',$iDischarged_Time_Min);
    $oNew->addChild('Discharged_Am_Pm',$sDischarged_Am_Pm);
    $oNew->addChild('Previous_Admission_No_Counter',$iPrevious_Admission_No_Counter);
    $oNew->addChild('Previous_Admission_No',$sPrevious_Admission_No);
    $oNew->addChild('Days',$iDays);
    $oNew->addChild('Provisional_Diagnosis',$sProvisional_Diagnosis);
    $oNew->addChild('Final_Diagnosis',$sFinal_Diagnosis);
    $oNew->addChild('Final_Code_No',$sFinal_Code_No);
    $oNew->addChild('Secondary_Diagnosis',$sSecondary_Diagnosis);
    $oNew->addChild('Secondary_Code_No',$sSecondary_Code_No);
    $oNew->addChild('Complications',$sComplications);
    $oNew->addChild('Complications_Code_No',$sComplications_Code_No);
    $oNew->addChild('Operations',$sOperations);
    $oNew->addChild('Operations_Code_No',$sOperations_Code_No);
    $oNew->addChild('Cured',$sCured);
    $oNew->addChild('Relieved',$sRelieved);
    $oNew->addChild('Unchanged',$sUnchanged);
    $oNew->addChild('Worse',$sWorse);
    $oNew->addChild('Ama',$sAma);
    $oNew->addChild('Expired',$sExpired);
    $oNew->addChild('Autopsy',$sAutopsy);
    $oNew->addChild('Transferred_To',$sTransferred_To);
    $oNew->addChild('Sel_Transferred_To',$sSel_Transferred_To);
    $oNew->addChild('Witness',$sWitness);
    $oNew->addChild('Relationship',$sRelationship);
    $oNew->addChild('LoginId',$sLoginId);
    $oNew->addChild('Rights',$sRights);

    $oXml->asXML();

    $dom=dom_import_simplexml($oXml);

    $Dom=new DOMDocument("1.0");                                //!Creating new DOMDocument Element

    $dom=$Dom->importNode($dom,true);

    $dom=$Dom->appendChild($dom);


    $Dom->save("../util/xml/report.xml");                 //! save the xml file

    }


?>