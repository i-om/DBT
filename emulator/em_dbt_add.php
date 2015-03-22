<?php
//print_r($_REQUEST);exit;
//$ii=0;
/*********** Getting data from Add Page ************/
/*session_start();*/

/*include_once('../util/class.dbRvsDetails.php'); */

$connect=mysqli_connect('localhost','root','');
if (!$connect)
{
  $output = 'Unable to connect to the server';
  print $output;
  exit();
}
if (!mysqli_select_db($connect,'dbt'))
{
  $output ='Unable to locate the database';
  print $output;
  exit();
}

include_once("../dbt_addddl.php");
$modpart='';
$modbioname='';
$modbiodesc='';
 $modextract='';
 $modextracttxt='';

$sanction=addslashes($_POST['dbtno']);
$date=addslashes($_POST['dateofinitiationtxt']);
$capacity=addslashes($_POST['capacitybuildingddl']);
$patent=addslashes($_POST['patentfiledddl']);
$publication=addslashes($_POST['publicationddl']);
$title=addslashes($_POST['idtitletxt']);
//$plant=addslashes($_POST['planttxt[]']);
$area=addslashes($_POST['areaddl']);

//print_r($area);
 if($area != '')
                             {
                                $returnValue = search_xml($area,'area','../xml/');
                                if($returnValue == '')
                                {
                                  insert_xml($area,'area','../xml/');
                                }
                             }


$therapuretic=addslashes($_POST['therapeuticddl']);

if($therapuretic != '')
                             {
                                $returnValue = search_xml($therapuretic,'theraputic','../xml/');
                                if($returnValue == '')
                                {
                                  insert_xml($therapuretic,'theraputic','../xml/');
                                }
                             }

/*$latin=addslashes($_POST['latintxt']);
$vernacular=addslashes($_POST['vernacularddl']);
$vernacularname=addslashes($_POST['vernaculartxt']);
$tradional=addslashes($_POST['traditionalddl']);
$mention=addslashes($_POST['ismentionedddl']);
$ifyesment=addslashes($_POST['ifyesddl']);
$basis=addslashes($_POST['plantselectionddl']);
//$part=addslashes($_POST['partddl[]']);
//$bioname=addslashes($_POST['constituentsnametxt[]']);
//$biodesc=addslashes($_POST['constituentsdesctxtarea[]']);
$chemistry=addslashes($_POST['chemistryddl']);
$raw=addslashes($_POST['rawddl']);
$drug=addslashes($_POST['drugddl']);
$finish=addslashes($_POST['finisheddll']); */
//$extract=addslashes($_POST);
$study=addslashes($_POST['typeofstudyddl']);
$invitro=addslashes($_POST['ifyesvitroddl']);
$expddl=addslashes($_POST['experimentalddl']);
$exptxt=addslashes($_POST['experimentaltxtarea']);
$clinictxt=addslashes($_POST['clinicaltxtarea']);
$other=addslashes($_POST['othertxtarea']);
$ayushddl=addslashes($_POST['trustddl']);
$ayushtxt=addslashes($_POST['trusttxt']);
$hypothesis=addslashes($_POST['hypothesistxtarea']);
$confirmatory=addslashes($_POST['confirmatorytxtarea']);
$results=addslashes($_POST['resulttxtarea']);
$stats=addslashes($_POST['statisticalddl']);
$statsdetail=addslashes($_POST['statisticaltxtarea']);
$clin=addslashes($_POST['clinicallyddl']);
$clindetail=addslashes($_POST['clinicallytxtarea']);
$satssign=addslashes($_POST['statisticallysignddl']);
$testapp=addslashes($_POST['testddl']);
$feasibile=addslashes($_POST['feasibilityddl']);
$comments=addslashes($_POST['commenttxtarea']);



$countInvest=addslashes($_POST['investigatorhidden']);
for($i=0; $i<$countInvest; $i++)
{
  $aInvestigator[]=addslashes($_POST['investigatortxt'][$i]);
  $aPlace[]=addslashes($_POST['placeofworktxt'][$i]);
  $aSpeciality[]=addslashes($_POST['specialitytxt'][$i]);
}
$sInvestigator=implode("#*",$aInvestigator);

$sPlace=implode("#*",$aPlace);
$sSpeciality=implode("#*",$aSpeciality);

$countPlant=addslashes($_POST['planthidden']);
for($i=0; $i<$countPlant; $i++)
{
  $aPlant[]=addslashes($_POST['planttxt'][$i]);
}
 $sPlant=implode("#*",$aPlant);


$countModel=addslashes($_POST['idaddmodelhidden']);
for($i=0; $i<$countModel; $i++)
{
 $aModel[]=addslashes($_POST['modeltxtarea'][$i]);
 $aAppropriate[]=addslashes($_POST['appropriateddl'][$i]);
 $aNovel[]=addslashes($_POST['novelddl'][$i]);

}
$sModel=implode("#*",$aModel);
$sAppropriate=implode("#*",$aAppropriate);
$sNovel=implode("#*",$aNovel);

/*if($raw=="Yes")
{
$ifyesraw=addslashes($_POST['ifrawyestxt']);
}
else
{
 $ifyesraw=$raw;
}

if($drug=="Yes")
{
  $ifyesdrug=addslashes($_POST['ifyesdrugtxt']);
}
else
{
  $ifyesdrug=$drug;
}

if($finish=="Yes")
{
  $ifyesfinish=addslashes($_POST['ifyesfinishedtxt']);
}
else
{
  $ifyesfinish=$finish;
} */

$ii = 0;
$countplant=addslashes($_POST['addplanthidden']);
/*if($countplant!=1)
    $countplant+=-1; */
for($i=0; $i<$countplant; $i++)
{
  $aPart=array();
  $aBioname=array();
  $aBiodesc=array();
  $aExtract=array();
  $aExtracttxt=array();
   $ii++;
$aLatin[]=addslashes($_POST['latintxt'][$i]);
$aVernacular[]=addslashes($_POST['vernacularddl'][$i]);
$aVernacular_name[]=addslashes($_POST['vernaculartxt'][$i]);
$aTradional[]=addslashes($_POST['traditionalddl'][$i]);
$aRefrence[]=addslashes($_POST['refrencetxt'][$i]);
$aMention[]=addslashes($_POST['ismentionedddl'][$i]);
$aIfyesment[]=addslashes($_POST['ifyesddl'][$i]);
$aMentionayur[]=addslashes($_POST['ismentionedayurddl'][$i]);

$ifyestemp=$aIfyesment[count($aIfyesment) - 1];
    if($ifyestemp != '')
                             {
                                $returnValue = search_xml($ifyestemp,'mention','../xml/');
                                if($returnValue == '')
                                {

                                  insert_xml($ifyestemp,'mention','../xml/');
                                }
                             }


$aBasis[]=addslashes($_POST['plantselectionddl'][$i]);
$basistemp=$aBasis[count($aBasis) - 1];
  if($basistemp != '')
                             {
                                $returnValue = search_xml($basistemp,'basis','../xml/');
                                if($returnValue == '')
                                {

                                  insert_xml($basistemp,'basis','../xml/');
                                }
                             }
//$part=addslashes($_POST['partddl[]']);
//$bioname=addslashes($_POST['constituentsnametxt[]']);
//$biodesc=addslashes($_POST['constituentsdesctxtarea[]']);
$aChemistry[]=addslashes($_POST['chemistryddl'][$i]);
$aRaw[]=addslashes($_POST['rawddl'][$i]);
$aDrug[]=addslashes($_POST['drugddl'][$i]);
$aFinish[]=addslashes($_POST['finisheddll'][$i]);
echo $aPlantwiseresult[]=addslashes($_POST['plantwiseresulttxtarea'][$i]);


$countPart=addslashes($_POST['parthidden_'.($i + 1)][0]);
for($a=0; $a<$countPart; $a++)
{
    $aPart[]=addslashes($_POST['partddl_'.($i + 1)][$a]);

    $parttemp=$aPart[count($aPart) - 1];
    $returnValue = search_xml($parttemp,'part','../xml/');
    if($returnValue == '')
    {

      insert_xml($parttemp,'part','../xml/');
    }
}

 $sPart=implode("#*",$aPart);
 $modpart1 .= $sPart."%$";


  $countBio=addslashes($_POST['addbiomakerhidden_'.($i + 1)][0]);
for($b=0; $b<$countBio; $b++)
{
 $aBioname[]=addslashes($_POST['constituentsnametxt_'.($i + 1)][$b]);
 $aBiodesc[]=addslashes($_POST['constituentsdesctxtarea_'.($i + 1)][$b]);
}
$sBioname=implode("#*",$aBioname);
$sBiodesc=implode("#*",$aBiodesc);

  $modbioname1 .= $sBioname."%$";
  $modbiodesc1 .= $sBiodesc."%$";


 $countExtract=addslashes($_POST['extracthidden_'.($i + 1)][0]);
for($c=0; $c<$countExtract; $c++)
{
  $aExtract[]=addslashes($_POST['extract_'.($i + 1)][$c]);
  $aExtracttxt[]=addslashes($_POST['extracttxt_'.($i + 1)][$c]);

  $extracttemp=$aExtract[count($aExtract) - 1];
  $returnValue = search_xml($extracttemp,'extract','../xml/');

                                if($returnValue == '')
                                {
                                  insert_xml($extracttemp,'extract','../xml/');
                                }
}
 $sExtract=implode("#*",$aExtract);
 $sExtracttxt=implode("#*",$aExtracttxt);

 $modextract1 .= $sExtract."%$";
 $modextracttxt1 .= $sExtracttxt."%$";

}
$sLatin=implode("%$",$aLatin);
 $sVernacular=implode("%$",$aVernacular);
$sVernacular_name=implode("%$",$aVernacular_name);
 $sTradional=implode("%$",$aTradional);
 $sRefrence=implode("%$",$aRefrence);
 $sMention=implode("%$",$aMention);
 $sMentionayur=implode("%$",$aMentionayur);
 $sIfyesment=implode("%$",$aIfyesment);
 $sBasis=implode("%$",$aBasis);
//$part=addslashes($_POST['partddl[]']);
//$bioname=addslashes($_POST['constituentsnametxt[]']);
//$biodesc=addslashes($_POST['constituentsdesctxtarea[]']);
$sChemistry=implode("%$",$aChemistry);
$sRaw=implode("%$",$aRaw);
$sDrug=implode("%$",$aDrug);
$sFinish=implode("%$",$aFinish);
$sPlantwiseresult=implode("%$",$aPlantwiseresult);
$modpart = substr("$modpart1", 0, -2);
$modbioname = substr("$modbioname1", 0, -2);
$modbiodesc = substr("$modbiodesc1", 0, -2);
$modextract = substr("$modextract1", 0, -2);
$modextracttxt = substr("$modextracttxt1", 0, -2);


 /*
 if($_REQUEST['test_data".$sLabel."_name'] != '')
                             {
                                $returnValue = search_xml($_REQUEST['test_data".$sLabel."_name'],'".$tempRep."_test_data".$sLabel."','');
                                if($returnValue == '')
                                {
                                  insert_xml($_REQUEST['test_data".$sLabel."_name'],'".$tempRep."_test_data".$sLabel."','');
                                }
                             }*/


$query="INSERT INTO `dbt`.`admin`
(`DBT_number` ,
`date_of_initiation` ,
`investigator_name` ,
`place_of_work` ,
`speciality` ,
`capacity_building` ,
`patent_filed` ,
`publication` ,
`title_of_project` ,
`area_of_research`
)
VALUES (
'$sanction', '$date', '$sInvestigator', '$sPlace', '$sSpeciality', '$capacity', '$patent', '$publication', '$title', '$area'
);";
$result=mysqli_query($connect,$query);
if (!$result)
{
  $error=mysqli_error($connect);
  print $error;
  exit();
}

if ( !mysqli_affected_rows($connect)==0)
{
     $insertid = mysqli_insert_id($connect);


}

if(is_numeric($insertid))
{
$query1="INSERT INTO `dbt`.`plant` (
`plant_name` ,
`plant_latin_name` ,
`plant_vernacular_name` ,
`plant_vernacular_name_type`,
`traditional_name` ,
`refrence` ,
`traditionally_mentioned` ,
`traditionally_mentioned_yes` ,
`ismentionayur` ,
`part_of_plant` ,
`plantwiseresult` ,
`admin_id`
)
VALUES (
'$sPlant', '$sLatin', '$sVernacular', '$sVernacular_name', '$sTradional', '$sRefrence', '$sMention', '$sIfyesment' , '$sMentionayur', '$modpart', '$sPlantwiseresult', '$insertid'
)";


$result=mysqli_query($connect,$query1);
/*if (!$result)
{
  $error=mysqli_error($connect);
  print $error;
  exit();
}

if ( !mysqli_affected_rows($connect)==0)
{
     $insertid = mysqli_insert_id($connect);


}*/

 $query2="INSERT INTO `dbt`.`results` (
`therapeutic_area_of_research` ,
`basis_of_selection_of_plant` ,
`name_of_Boimaker` ,
`description_of_biomaker` ,
`chemistry_manufacturig_conrtrol` ,
`raw_material` ,
`drug_product` ,
`finished_product` ,
`type_of_extract` ,
`extract_txt` ,
`type_of_study` ,
`in_vitro` ,
`experimental` ,
`experimental_txt` ,
`clinical` ,
`model` ,
`appropriate` ,
`novel` ,
`other` ,
`ayush_trust_area` ,
`ayush_txt` ,
`hypothesis_generating` ,
`confirmatory studies` ,
`results` ,
`statistical_test` ,
`statistical_test_details` ,
`clinically_relevant` ,
`clinically_relevant_details` ,
`statistically_Significant` ,
`were_these_tests_appropriate` ,
`feasibility_of_Developing_a _drug` ,
`coments` ,
`table_count` ,
`admin_id`
)
VALUES (
'$therapuretic' , '$sBasis' , '$modbioname' , '$modbiodesc' , '$sChemistry' , '$sRaw' , '$sDrug' , '$sFinish' , '$modextract' , '$modextracttxt' , '$study' ,
'$invitro' , '$expddl' , '$exptxt' , '$clinictxt' , '$sModel' , '$sAppropriate' , '$sNovel' , '$other' , '$ayushddl' , '$ayushtxt' , '$hypothesis' ,
'$confirmatory' , '$results' , '$stats' , '$statsdetail' , '$clin' , '$clindetail' , '$satssign' , '$testapp' , '$feasibile' , '$comments' , '$countplant', '$insertid'
)";
$result=mysqli_query($connect,$query2);
/*if (!$result)
{
  $error=mysqli_error($connect);
  print $error;
  exit();
}

if ( !mysqli_affected_rows($connect)==0)
{
     $insertid = mysqli_insert_id($connect);


}*/
header('location:../dbt_view.php?id='.$insertid);


}

/*$dDate=addslashes($_REQUEST['dTextEntryDate']);
$arrEntryDate = split('-',$dDate);
$dTextEntryDate = $arrEntryDate[2]."-".$arrEntryDate[1]."-".$arrEntryDate[0];

$sTextName=addslashes($_REQUEST['sTextName']);
$sTextAge=addslashes($_REQUEST['sTextAge']);
$sSelSex=addslashes($_REQUEST['sSelSex']);
$sTaAddress=addslashes($_REQUEST['sTaAddress']);
$sTextPhoneNum=addslashes($_REQUEST['sTextPhoneNum']);



$sTextCity=addslashes($_REQUEST['sTextCity']);
$sTextGeographicalLocality=addslashes($_REQUEST['sTextGeographicalLocality']);
$sTextOccupation=addslashes($_REQUEST['sTextOccupation']);
$sSelKupEdu=addslashes($_REQUEST['sSelKupEdu']);
$sSelKupOcu=addslashes($_REQUEST['sSelKupOcu']);
$sSelKupInc=addslashes($_REQUEST['sSelKupInc']);
$sKupScale=addslashes($_REQUEST['sKupScale']);

$sDetailsOfAnimalBiteAnimal=addslashes($_REQUEST['sDetailsOfAnimalBiteAnimal']);
$sDetailsOtherAnimal=addslashes($_REQUEST['sDetailsOtherAnimal']);
$sDetailsOfAnimalBiteWas=addslashes($_REQUEST['sDetailsOfAnimalBiteWas']);
$sDetailsOfAnimalAnimalWas=addslashes($_REQUEST['sDetailsOfAnimalAnimalWas']);
$dTextBiteDate=addslashes($_REQUEST['dTextBiteDate']);
$sTaBiteDetailsAndExtent=addslashes($_REQUEST['sTaBiteDetailsAndExtent']);
$sDetailsAssociatedBleeding=addslashes($_REQUEST['sDetailsAssociatedBleeding']);
$sDetailsHowSoon=addslashes($_REQUEST['sDetailsHowSoon']);
$sDetailsTxAtHome=addslashes($_REQUEST['sDetailsTxAtHome']);
$sDetailsTxAtLocalP=addslashes($_REQUEST['sDetailsTxAtLocalP']);
$sDetailsDogRabidQ=addslashes($_REQUEST['sDetailsDogRabidQ']);
$sDetailsWashWound=addslashes($_REQUEST['sDetailsWashWound']);
$sDetailsinjGiven=addslashes($_REQUEST['sDetailsinjGiven']);
$sTaLocal=addslashes($_REQUEST['sTaLocal']);
$sSelSystemic=addslashes($_REQUEST['sSelSystemic']);
$sTaOther=addslashes($_REQUEST['sTaOther']);
$sTaConcommitant=addslashes($_REQUEST['sTaConcommitant']);
$sSelIgRecv=addslashes($_REQUEST['sSelIgRecv']);
$sTaImmunoNotRcvdWhy=addslashes($_REQUEST['sTaImmunoNotRcvdWhy']);
$sTaImmunoRcvdSE=addslashes($_REQUEST['sTaImmunoRcvdSE']);
$sTextDetailsBitingRVC=addslashes($_REQUEST['sTextDetailsBitingRVC']);
$sTextDetailsBitingARV=addslashes($_REQUEST['sTextDetailsBitingARV']);
$sTextDetailsBitingML=addslashes($_REQUEST['sTextDetailsBitingML']);
$sTextDetailsStray=addslashes($_REQUEST['sTextDetailsStray']);
$sTextCostTravel=addslashes($_REQUEST['sTextCostTravel']);
$sTextCostMedVacc=addslashes($_REQUEST['sTextCostMedVacc']);
$sTextCostMedSera=addslashes($_REQUEST['sTextCostMedSera']);
$sTextCostMedLocal=addslashes($_REQUEST['sTextCostMedLocal']);
$sTextCostLoss=addslashes($_REQUEST['sTextCostLoss']);
$sTextCostTotal=addslashes($_REQUEST['sTextCostTotal']);
$sTextLostDaysVictim=addslashes($_REQUEST['sTextLostDaysVictim']);
$sTextLostDaysAccom=addslashes($_REQUEST['sTextLostDaysAccom']);


$sTextSiteOfBite=addslashes($_REQUEST['sTextSiteOfBite']);
$sSelAware=addslashes($_REQUEST['sSelAware']);
$sSelHistory=addslashes($_REQUEST['sSelHistory']);
$sTaHistoryAllergies=addslashes($_REQUEST['sTaHistoryAllergies']);
$sTaDetailsOfAnimalBite=addslashes($_REQUEST['sTaDetailsOfAnimalBite']);
$sSelWhoBite=addslashes($_REQUEST['sSelWhoBite']);
$sSelTreatment=addslashes($_REQUEST['sSelTreatment']);
$sTaLocal=addslashes($_REQUEST['sTaLocal']);
$sSelSystemic=addslashes($_REQUEST['sSelSystemic']);
$sTaDay0=addslashes($_REQUEST['sTaDay0']);
$sSelDay=addslashes($_REQUEST['sSelDay']);
$sTaDay3=addslashes($_REQUEST['sTaDay3']);
$sSelDay3=addslashes($_REQUEST['sSelDay3']);
$sTaDay7=addslashes($_REQUEST['sTaDay7']);
$sSelDay7=addslashes($_REQUEST['sSelDay7']);
$sTaDay14=addslashes($_REQUEST['sTaDay14']);
$sSelDay14=addslashes($_REQUEST['sSelDay14']);
$sTaDay28=addslashes($_REQUEST['sTaDay28']);
$sSelDay28=addslashes($_REQUEST['sSelDay28']);
$sSelBrainDerived=addslashes($_REQUEST['sSelBrainDerived']);
$sTextManufacturerNo=addslashes($_REQUEST['sTextManufacturerNo']);
$sTextRouteOfAdministration=addslashes($_REQUEST['sTextRouteOfAdministration']);
$sTextQuantityAdministered=addslashes($_REQUEST['sTextQuantityAdministered']);
$sTaDatesAdministered=addslashes($_REQUEST['sTaDatesAdministered']);
$sTaRabiesVaccination=addslashes($_REQUEST['sTaRabiesVaccination']);
$sSelBrainDerivedImmunoglobulin=addslashes($_REQUEST['sSelBrainDerivedImmunoglobulin']);
$sTextSensitivityTest=addslashes($_REQUEST['sTextSensitivityTest']);
$sTextManufacturerNoImmunoglobulin=addslashes($_REQUEST['sTextManufacturerNoImmunoglobulin']);
$sTextRouteOfAdministrationImmunoglobulin=addslashes($_REQUEST['sTextRouteOfAdministrationImmunoglobulin']);
$sTextQuantityAdministeredImmunoglobulin=addslashes($_REQUEST['sTextQuantityAdministeredImmunoglobulin']);
$sTaDatesAdministeredImmunoglobulin=addslashes($_REQUEST['sTaDatesAdministeredImmunoglobulin']);
$sTaRabiesImmunoglobulin=addslashes($_REQUEST['sTaRabiesImmunoglobulin']);
$sTaAdverseEventsImmunoglobulin=addslashes($_REQUEST['sTaAdverseEventsImmunoglobulin']);
$sSelStatus=addslashes($_REQUEST['sSelStatus']);
$sTaStatusOfOther=addslashes($_REQUEST['sTaStatusOfOther']);
$sTextWeight=addslashes($_REQUEST['sTextWeight']);
$sTextSexAnimal=addslashes($_REQUEST['sTextSexAnimal']);
$sTextBreed=addslashes($_REQUEST['sTextBreed']);
$sTextSpecies=addslashes($_REQUEST['sTextSpecies']);
$sTextAnimalvaccinated=addslashes($_REQUEST['sTextAnimalvaccinated']);
$sSelWhatHappenedAnimal=addslashes($_REQUEST['sSelWhatHappenedAnimal']);
$chkFluorescent=addslashes($_REQUEST['chkFluorescent']);
$chkNegri=addslashes($_REQUEST['chkNegri']);
$chkInoculation=addslashes($_REQUEST['chkInoculation']);
$chkOtherTests=addslashes($_REQUEST['chkOtherTests']);
if($chkFluorescent != 'Yes')
{
   $chkFluorescent = 'No';
}
if($chkNegri != 'Yes')
{
   $chkNegri = 'No';
}
if($chkInoculation != 'Yes')
{
   $chkInoculation = 'No';
}
if($chkOtherTests != 'Yes')
{
   $chkOtherTests = 'No';
}

$date = date('Y-m-d');
$time = date('H:i:s',(time()+19600));
$dTextActualEntryDate = $date;
$tTextActualEntryTime = $time;
$sTextEntryUser = $_SESSION["Name"];
/*! Database Integration */

/*$objInfo = new dbRvsDetails('dbt');

$pid = $objInfo->set_patient_details($sTextName,$sTextAge,$sSelSex,$sTaAddress,$sTextCity,$sTextGeographicalLocality,$sTextOccupation,$dTextActualEntryDate,$tTextActualEntryTime,$sTextEntryUser,$sTextPhoneNum,$sSelKupEdu,$sSelKupOcu,$sSelKupInc,$sKupScale);

$visitId = $objInfo->set_visit_details($pid, $dTextEntryDate, $sTextName, $sTextAge, $sSelSex, $sTaAddress, $sTextPhoneNum, $sTextCity, $sTextGeographicalLocality, $sTextOccupation, $sSelKupEdu, $sSelKupOcu, $sSelKupInc, $sKupScale, $sSelHistory, $sTaHistoryAllergies, $sDetailsOfAnimalBiteAnimal, $sDetailsOtherAnimal, $sTextSiteOfBite, $sDetailsOfAnimalBiteWas, $sDetailsOfAnimalAnimalWas, $dTextBiteDate, $sTaBiteDetailsAndExtent, $sDetailsAssociatedBleeding, $sDetailsHowSoon, $sDetailsTxAtHome, $sDetailsTxAtLocalP, $sDetailsDogRabidQ, $sSelAware, $sDetailsWashWound, $sDetailsinjGiven, $sSelWhoBite, $sTaLocal, $sSelSystemic, $sTaOther, $sTaConcommitant, $sSelBrainDerived, $sTextManufacturerNo, $sTextRouteOfAdministration, $sTextQuantityAdministered, $sTaDatesAdministered, $sTaRabiesVaccination, $sSelIgRecv, $sTaImmunoNotRcvdWhy, $sTaImmunoRcvdSE, $sSelBrainDerivedImmunoglobulin, $sTextSensitivityTest, $sTextManufacturerNoImmunoglobulin, $sTextRouteOfAdministrationImmunoglobulin, $sTextQuantityAdministeredImmunoglobulin, $sTaDatesAdministeredImmunoglobulin, $sTaRabiesImmunoglobulin, $sTaAdverseEventsImmunoglobulin, $sSelStatus, $sTaStatusOfOther, $sTextDetailsBitingRVC, $sTextDetailsBitingARV, $sTextDetailsBitingML, $sTextDetailsStray, $sTextWeight, $sTextSexAnimal, $sTextBreed, $sTextSpecies, $sTextAnimalvaccinated, $sSelWhatHappenedAnimal, $chkFluorescent, $chkNegri, $chkInoculation, $chkOtherTests, $sTextCostTravel, $sTextCostMedVacc, $sTextCostMedSera, $sTextCostMedLocal, $sTextCostLoss, $sTextCostTotal, $sTextLostDaysVictim, $sTextLostDaysAccom, $sTaDay0, $sSelDay, $sTaDay3, $sSelDay3, $sTaDay7, $sSelDay7, $sTaDay14, $sSelDay14, $sTaDay28, $sSelDay28, $dTextActualEntryDate, $tTextActualEntryTime, $sTextEntryUser, $extra1, $extra2, $extra3, $extra4, $extra5, $extra6);

*/
/*********** ************/



?>