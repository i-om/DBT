<?php
include_once('../util/class.dbt.php');
include_once('../util/class.db1Services.php');
session_start();
$sLoginId = $_SESSION["LoginId"];
$sRights = $_SESSION["Rights"];
$id = addslashes($_REQUEST['hidId']);

$sTextHospital=addslashes($_REQUEST['textHospital']);
$sTextSERVICE=addslashes($_REQUEST['textSERVICE']);

$sIsNumber = is_numeric($sTextSERVICE);
echo $sIsNumber;
if($sIsNumber != '1')
{
 $sResult = $oService->set_data($sTextSERVICE);
 $sTextSERVICE = $sResult;
 echo $sTextSERVICE;
}

$iTextImpatientNo=addslashes($_REQUEST['textImpatientNo']);
$sTextHeadOfService=addslashes($_REQUEST['textHeadOfService']);
$iTextWardNo=addslashes($_REQUEST['textWardNo']);
$iTextBedNo=addslashes($_REQUEST['textBedNo']);
$sTextPatientName=addslashes($_REQUEST['textPatientName']);
$sTaAddress=addslashes($_REQUEST['taAddress']);
$sTaRelative=addslashes($_REQUEST['taRelative']);
$iTextAgeYrs=addslashes($_REQUEST['textAgeYrs']);
$iTextAgeMts=addslashes($_REQUEST['textAgeMts']);
$iTextAgeDays=addslashes($_REQUEST['textAgeDays']);
$sSelSex=addslashes($_REQUEST['selSex']);
$sSelStatus=addslashes($_REQUEST['selStatus']);
$sTextCommunity=addslashes($_REQUEST['textCommunity']);
$sTextOccupationalClass=addslashes($_REQUEST['textOccupationalClass']);
$sTextEconomicClass=addslashes($_REQUEST['textEconomicClass']);
$sSelEmployeeOf=addslashes($_REQUEST['selEmployeeOf']);
$iTextTelephoneNo=addslashes($_REQUEST['textTelephoneNo']);
$iTextMunicipalWardNo=addslashes($_REQUEST['textMunicipalWardNo']);
$iTextOpdNo=addslashes($_REQUEST['textOpdNo']);
$iTextCasualityNo=addslashes($_REQUEST['textCasualityNo']);
$sTextPcOnDuty=addslashes($_REQUEST['textPcOnDuty']);
$sTextBroughtBy=addslashes($_REQUEST['textBroughtBy']);
$sTextStation=addslashes($_REQUEST['textStation']);
$sTextAdmissionDate=addslashes($_REQUEST['textAdmissionDate']);
$iSelAdmissionTimeHr=addslashes($_REQUEST['selAdmissionTimeHr']);
$iSelAdmissionTimeMin=addslashes($_REQUEST['selAdmissionTimeMin']);
$sSelAdmissionAmPm=addslashes($_REQUEST['selAdmissionAmPm']);
$sTextDischargedDate=addslashes($_REQUEST['textDischargedDate']);
$iSelDischargedTimeHr=addslashes($_REQUEST['selDischargedTimeHr']);
$iSelDischargedTimeMin=addslashes($_REQUEST['selDischargedTimeMin']);
$sSelDischargedAmPm=addslashes($_REQUEST['selDischargedAmPm']);

$iHidPreviousAdmissionNoCounter=addslashes($_REQUEST['hidPreviousAdmissionNoCounter']);
$aTextPreviousAdmissionNo = array();
for($ii=0;$ii<$iHidPreviousAdmissionNoCounter;$ii++)
{
    $aTextPreviousAdmissionNo[$ii] =  addslashes($_REQUEST['textPreviousAdmissionNo'][$ii]);
}
$sTextPreviousAdmissionNo = implode('::',$aTextPreviousAdmissionNo);

$sTextDays=addslashes($_REQUEST['textDays']);
$sTaProvisionalDiagnosis=addslashes($_REQUEST['taProvisionalDiagnosis']);
$sTaFinalDiagnosis=addslashes($_REQUEST['taFinalDiagnosis']);
$iTextFinalCodeNo=addslashes($_REQUEST['textFinalCodeNo']);
$sTaSecondaryDiagnosis=addslashes($_REQUEST['taSecondaryDiagnosis']);
$iTextSecondaryCodeNo=addslashes($_REQUEST['textSecondaryCodeNo']);
$sTaComplications=addslashes($_REQUEST['taComplications']);
$iTextComplicationsCodeNo=addslashes($_REQUEST['textComplicationsCodeNo']);
$sTaOperations=addslashes($_REQUEST['taOperations']);
$iTextOperationsCodeNo=addslashes($_REQUEST['textOperationsCodeNo']);
$sChkCured=addslashes($_REQUEST['chkCured']);
$sChkRelieved=addslashes($_REQUEST['chkRelieved']);
$sChkUnchanged=addslashes($_REQUEST['chkUnchanged']);
$sChkWorse=addslashes($_REQUEST['chkWorse']);
$sChkAma=addslashes($_REQUEST['chkAma']);
$sChkExpired=addslashes($_REQUEST['chkExpired']);
$sSelAutopsy=addslashes($_REQUEST['selAutopsy']);
$sTextTransferredTo=addslashes($_REQUEST['textTransferredTo']);
$sSelTransferredTo=addslashes($_REQUEST['selTransferredTo']);
$sTextWitness=addslashes($_REQUEST['textWitness']);
$sTextRelationship=addslashes($_REQUEST['textRelationship']);

$dateArray1 = explode('-',$sTextAdmissionDate  );

$dAdmissionDate = $dateArray1[2]."-".$dateArray1[1]."-".$dateArray1[0];

$dateArray2 = explode('-',$sTextDischargedDate);

$dDischargedDate   = $dateArray2[2]."-".$dateArray2[1]."-".$dateArray2[0];



$objReport = new dbt("dbt");
/*! Function to insert a record into the database.
It returns Id of last inserted record */
$objReport->update_reporting($id,$sTextHospital,$sTextSERVICE,$iTextImpatientNo,$sTextHeadOfService,$iTextWardNo,$iTextBedNo,$sTextPatientName,
$sTaAddress,$sTaRelative,$iTextAgeYrs,$iTextAgeMts,$iTextAgeDays,$sSelSex,$sSelStatus,$sTextCommunity,$sTextOccupationalClass,
$sTextEconomicClass,$sSelEmployeeOf,$iTextTelephoneNo,$iTextMunicipalWardNo,$iTextOpdNo,$iTextCasualityNo,
$sTextPcOnDuty,$sTextBroughtBy,$sTextStation,$dAdmissionDate,$iSelAdmissionTimeHr,$iSelAdmissionTimeMin,$sSelAdmissionAmPm,
$dDischargedDate,$iSelDischargedTimeHr,$iSelDischargedTimeMin,$sSelDischargedAmPm,$iHidPreviousAdmissionNoCounter,$sTextPreviousAdmissionNo,$sTextDays,$sTaProvisionalDiagnosis,$sTaFinalDiagnosis,
$iTextFinalCodeNo,$sTaSecondaryDiagnosis,$iTextSecondaryCodeNo,$sTaComplications,$iTextComplicationsCodeNo,$sTaOperations,$iTextOperationsCodeNo,$sChkCured,
$sChkRelieved,$sChkUnchanged,$sChkWorse,$sChkAma,$sChkExpired,$sSelAutopsy,$sTextTransferredTo,$sSelTransferredTo,$sTextWitness,$sTextRelationship,$sLoginId,$sRights);
/*! Redirectiong to the view page */
//print_r($id);  exit;
header("location:../indoor_reporting_view.php?id=$id");

?>