<?php


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


 $id=addslashes($_REQUEST['idinsert']);

$modpart='';
$modbioname='';
$modbiodesc='';
 $modextract='';
 $modextracttxt='';

 $sanction=addslashes($_REQUEST['dbtno']);
 $date=addslashes($_REQUEST['dateofinitiationtxt']);
$capacity=addslashes($_REQUEST['capacitybuildingddl']);
 $patent=addslashes($_REQUEST['patentfiledddl']);
$publication=addslashes($_REQUEST['publicationddl']);
 $title=addslashes($_REQUEST['idtitletxt']);
//$plant=addslashes($_REQUEST['planttxt[]']);
 $area=addslashes($_REQUEST['areaddl']);

//print_r($area);
 if($area != '')
                             {
                                $returnValue = search_xml($area,'area','../xml/');
                                if($returnValue == '')
                                {
                                  insert_xml($area,'area','../xml/');
                                }
                             }


$therapuretic=addslashes($_REQUEST['therapeuticddl']);

if($therapuretic != '')
                             {
                                $returnValue = search_xml($therapuretic,'theraputic','../xml/');
                                if($returnValue == '')
                                {
                                  insert_xml($therapuretic,'theraputic','../xml/');
                                }
                             }

/*$latin=addslashes($_REQUEST['latintxt']);
$vernacular=addslashes($_REQUEST['vernacularddl']);
$vernacularname=addslashes($_REQUEST['vernaculartxt']);
$tradional=addslashes($_REQUEST['traditionalddl']);
$mention=addslashes($_REQUEST['ismentionedddl']);
$ifyesment=addslashes($_REQUEST['ifyesddl']);
$basis=addslashes($_REQUEST['plantselectionddl']);
//$part=addslashes($_REQUEST['partddl[]']);
//$bioname=addslashes($_REQUEST['constituentsnametxt[]']);
//$biodesc=addslashes($_REQUEST['constituentsdesctxtarea[]']);
$chemistry=addslashes($_REQUEST['chemistryddl']);
$raw=addslashes($_REQUEST['rawddl']);
$drug=addslashes($_REQUEST['drugddl']);
$finish=addslashes($_REQUEST['finisheddll']); */
//$extract=addslashes($_REQUEST);
$study=addslashes($_REQUEST['typeofstudyddl']);
$invitro=addslashes($_REQUEST['ifyesvitroddl']);
$expddl=addslashes($_REQUEST['experimentalddl']);
$exptxt=addslashes($_REQUEST['experimentaltxtarea']);
$clinictxt=addslashes($_REQUEST['clinicaltxtarea']);
$other=addslashes($_REQUEST['othertxtarea']);
$ayushddl=addslashes($_REQUEST['trustddl']);
$ayushtxt=addslashes($_REQUEST['trusttxt']);
$hypothesis=addslashes($_REQUEST['hypothesistxtarea']);
$confirmatory=addslashes($_REQUEST['confirmatorytxtarea']);
$results=addslashes($_REQUEST['resulttxtarea']);
$stats=addslashes($_REQUEST['statisticalddl']);
$statsdetail=addslashes($_REQUEST['statisticaltxtarea']);
$clin=addslashes($_REQUEST['clinicallyddl']);
$clindetail=addslashes($_REQUEST['clinicallytxtarea']);
$satssign=addslashes($_REQUEST['statisticallysignddl']);
$testapp=addslashes($_REQUEST['testddl']);
$feasibile=addslashes($_REQUEST['feasibilityddl']);
$comments=addslashes($_REQUEST['commenttxtarea']);



$countInvest=addslashes($_REQUEST['investigatorhidden']);
for($i=0; $i<$countInvest; $i++)
{
  $aInvestigator[]=addslashes($_REQUEST['investigatortxt'][$i]);
  $aPlace[]=addslashes($_REQUEST['placeofworktxt'][$i]);
  $aSpeciality[]=addslashes($_REQUEST['specialitytxt'][$i]);
}
$sInvestigator=implode("#*",$aInvestigator);

$sPlace=implode("#*",$aPlace);
$sSpeciality=implode("#*",$aSpeciality);

$countPlant=addslashes($_REQUEST['planthidden']);
for($i=0; $i<$countPlant; $i++)
{
  $aPlant[]=addslashes($_REQUEST['planttxt'][$i]);
}
 $sPlant=implode("#*",$aPlant);


$countModel=addslashes($_REQUEST['idaddmodelhidden']);
for($i=0; $i<$countModel; $i++)
{
 $aModel[]=addslashes($_REQUEST['modeltxtarea'][$i]);
 $aAppropriate[]=addslashes($_REQUEST['appropriateddl'][$i]);
 $aNovel[]=addslashes($_REQUEST['novelddl'][$i]);

}
$sModel=implode("#*",$aModel);
$sAppropriate=implode("#*",$aAppropriate);
$sNovel=implode("#*",$aNovel);

/*if($raw=="Yes")
{
$ifyesraw=addslashes($_REQUEST['ifrawyestxt']);
}
else
{
 $ifyesraw=$raw;
}

if($drug=="Yes")
{
  $ifyesdrug=addslashes($_REQUEST['ifyesdrugtxt']);
}
else
{
  $ifyesdrug=$drug;
}

if($finish=="Yes")
{
  $ifyesfinish=addslashes($_REQUEST['ifyesfinishedtxt']);
}
else
{
  $ifyesfinish=$finish;
} */

$ii = 0;
$countplant=addslashes($_REQUEST['addplanthidden']);
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
$aLatin[]=addslashes($_REQUEST['latintxt'][$i]);
$aVernacular[]=addslashes($_REQUEST['vernacularddl'][$i]);
$aVernacular_name[]=addslashes($_REQUEST['vernaculartxt'][$i]);
$aTradional[]=addslashes($_REQUEST['traditionalddl'][$i]);
$aRefrence[]=addslashes($_REQUEST['refrencetxt'][$i]);
$aMention[]=addslashes($_REQUEST['ismentionedddl'][$i]);
$aMentionayur[]=addslashes($_REQUEST['ismentionayurddl'][$i]);
$aIfyesment[]=addslashes($_REQUEST['ifyesddl'][$i]);

$ifyestemp=$aIfyesment[count($aIfyesment) - 1];
    if($ifyestemp != '')
                             {
                                $returnValue = search_xml($ifyestemp,'mention','../xml/');
                                if($returnValue == '')
                                {

                                  insert_xml($ifyestemp,'mention','../xml/');
                                }
                             }


$aBasis[]=addslashes($_REQUEST['plantselectionddl'][$i]);
$basistemp=$aBasis[count($aBasis) - 1];
  if($basistemp != '')
                             {
                                $returnValue = search_xml($basistemp,'basis','../xml/');
                                if($returnValue == '')
                                {

                                  insert_xml($basistemp,'basis','../xml/');
                                }
                             }
//$part=addslashes($_REQUEST['partddl[]']);
//$bioname=addslashes($_REQUEST['constituentsnametxt[]']);
//$biodesc=addslashes($_REQUEST['constituentsdesctxtarea[]']);
$aChemistry[]=addslashes($_REQUEST['chemistryddl'][$i]);
$aRaw[]=addslashes($_REQUEST['rawddl'][$i]);
$aDrug[]=addslashes($_REQUEST['drugddl'][$i]);
$aFinish[]=addslashes($_REQUEST['finisheddll'][$i]);
$aPlantwiseresult[]=addslashes($_REQUEST['plantwiseresulttxtarea'][$i]);


$countPart=addslashes($_REQUEST['parthidden_'.($i + 1)][0]);
for($a=0; $a<$countPart; $a++)
{
    $aPart[]=addslashes($_REQUEST['partddl_'.($i + 1)][$a]);

    $parttemp=$aPart[count($aPart) - 1];
    $returnValue = search_xml($parttemp,'part','../xml/');
    if($returnValue == '')
    {

      insert_xml($parttemp,'part','../xml/');
    }
}

 $sPart=implode("#*",$aPart);
 $modpart1 .= $sPart."%$";


  $countBio=addslashes($_REQUEST['addbiomakerhidden_'.($i + 1)][0]);
for($b=0; $b<$countBio; $b++)
{
 $aBioname[]=addslashes($_REQUEST['constituentsnametxt_'.($i + 1)][$b]);
 $aBiodesc[]=addslashes($_REQUEST['constituentsdesctxtarea_'.($i + 1)][$b]);
}
$sBioname=implode("#*",$aBioname);
$sBiodesc=implode("#*",$aBiodesc);

  $modbioname1 .= $sBioname."%$";
  $modbiodesc1 .= $sBiodesc."%$";


 $countExtract=addslashes($_REQUEST['extracthidden_'.($i + 1)][0]);
for($c=0; $c<$countExtract; $c++)
{
  $aExtract[]=addslashes($_REQUEST['extract_'.($i + 1)][$c]);
  $aExtracttxt[]=addslashes($_REQUEST['extracttxt_'.($i + 1)][$c]);

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
//$part=addslashes($_REQUEST['partddl[]']);
//$bioname=addslashes($_REQUEST['constituentsnametxt[]']);
//$biodesc=addslashes($_REQUEST['constituentsdesctxtarea[]']);
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


$query="UPDATE `admin` LEFT JOIN `plant` ON `admin`.`admin_id`=`plant`.`admin_id` LEFT JOIN `results` ON `results`.`admin_id`=`plant`.`admin_id`
SET `admin`.`DBT_number`='$sanction' ,
 `admin`.`date_of_initiation`='$date' ,
 `admin`.`investigator_name`='$sInvestigator' ,
 `admin`.`place_of_work`='$sPlace' ,
 `admin`.`speciality`='$sSpeciality' ,
 `admin`.`capacity_building`='$capacity' ,
 `admin`.`patent_filed`='$patent' ,
 `admin`.`publication`='$publication' ,
 `admin`.`title_of_project`='$title' ,
 `admin`.`area_of_research`='$area',
 `plant`.`plant_name`='$sPlant' ,
 `plant`.`plant_latin_name`='$sLatin' ,
 `plant`.`plant_vernacular_name`='$sVernacular' ,
 `plant`.`plant_vernacular_name_type`='$sVernacular_name',
 `plant`.`traditional_name`='$sTradional' ,
 `plant`.`traditionally_mentioned`='$sMention' ,
 `plant`.`traditionally_mentioned_yes`='$sIfyesment' ,
 `plant`.`part_of_plant`='$modpart' ,
 `plant`.`plantwiseresult`='$sPlantwiseresult' ,
 `plant`.`ismentionayur`='$sMentionayur' ,
 `plant`.`refrence`='$sRefrence' ,
 `results`.`therapeutic_area_of_research`='$therapuretic' ,
 `results`.`basis_of_selection_of_plant`='$sBasis' ,
 `results`.`name_of_Boimaker`='$modbioname' ,
 `results`.`description_of_biomaker`='$modbiodesc' ,
 `results`.`chemistry_manufacturig_conrtrol`='$sChemistry' ,
 `results`.`raw_material`='$sRaw' ,
 `results`.`drug_product`='$sDrug' ,
 `results`.`finished_product`='$sFinish' ,
 `results`.`type_of_extract`='$modextract' ,
 `results`.`extract_txt`='$modextracttxt' ,
 `results`.`type_of_study`='$study' ,
 `results`.`in_vitro`='$invitro' ,
 `results`.`experimental`='$expddl' ,
 `results`.`experimental_txt`='$exptxt' ,
 `results`.`clinical`='$clinictxt' ,
 `results`.`model`='$sModel' ,
 `results`.`appropriate`='$sAppropriate' ,
 `results`.`novel`='$sNovel' ,
 `results`.`other`='$other' ,
 `results`.`ayush_trust_area`='$ayushddl' ,
 `results`.`ayush_txt`='$ayushtxt' ,
 `results`.`hypothesis_generating`='$hypothesis' ,
 `results`.`confirmatory studies`='$confirmatory' ,
 `results`.`results`='$results' ,
 `results`.`statistical_test`='$stats' ,
 `results`.`statistical_test_details`='$statsdetail' ,
 `results`.`clinically_relevant`='$clin' ,
 `results`.`clinically_relevant_details`='$clindetail' ,
 `results`.`statistically_Significant`='$satssign' ,
 `results`.`were_these_tests_appropriate`='$testapp' ,
 `results`.`feasibility_of_Developing_a _drug`='$feasibile' ,
 `results`.`coments`='$comments',
 `results`.`table_count`='$countplant'
WHERE `admin`.`admin_id`='$id'";

$result=mysqli_query($connect,$query);
if (!$result)
{
  $error=mysqli_error($connect);
  print $error;
  exit();
}

// header("location: View.php?id=".$id);


//$ii=0;
/*********** Getting data from Add Page ************/
/*
include_once('../util/class.dbRvsDetails.php');
$dDate=addslashes($_REQUEST['dTextEntryDate']);
$arrEntryDate = split('-',$dDate);
$dTextEntryDate = $arrEntryDate[2]."-".$arrEntryDate[1]."-".$arrEntryDate[0];

$sTextName=addslashes($_REQUEST['sTextName']);
$sTextAge=addslashes($_REQUEST['sTextAge']);
$sSelSex=addslashes($_REQUEST['sSelSex']);
$sTaAddress=addslashes($_REQUEST['sTaAddress']);
$sTextCity=addslashes($_REQUEST['sTextCity']);
$sTextGeographicalLocality=addslashes($_REQUEST['sTextGeographicalLocality']);
$sTextOccupation=addslashes($_REQUEST['sTextOccupation']);
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


$hidVisitId = addslashes($_REQUEST['hidVisitId']);

$date = date('Y-m-d');
$time = date('H:i:s',(time()+19600));
$dTextActualEntryDate = $date;
$tTextActualEntryTime = $time;
$sTextEntryUser = '';
/*! Database Integration */

/*
$dDate=addslashes($_REQUEST['dTextEntryDate']);
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


$objInfo = new dbRvsDetails('dbt');

$objInfo->update_visit_details($id,$dTextEntryDate,$sTextName,$sTextAge,$sSelSex,$sTaAddress,$sTextCity,$sTextGeographicalLocality,$sTextOccupation,$sTextSiteOfBite,$sSelAware,$sSelHistory,$sTaHistoryAllergies,$sTaDetailsOfAnimalBite,$sSelWhoBite,$sSelTreatment,$sTaLocal,$sSelSystemic,$sTaDay0,$sSelDay,$sTaDay3,$sSelDay3,$sTaDay7,$sSelDay7,$sTaDay14,$sSelDay14,$sTaDay28,$sSelDay28,$sSelBrainDerived,$sTextManufacturerNo,$sTextRouteOfAdministration,$sTextQuantityAdministered,$sTaDatesAdministered,$sTaRabiesVaccination,$sSelBrainDerivedImmunoglobulin,$sTextSensitivityTest,$sTextManufacturerNoImmunoglobulin,$sTextRouteOfAdministrationImmunoglobulin,$sTextQuantityAdministeredImmunoglobulin,$sTaDatesAdministeredImmunoglobulin,$sTaRabiesImmunoglobulin,$sTaAdverseEventsImmunoglobulin,$sSelStatus,$sTaStatusOfOther,$sTextWeight,$sTextSexAnimal,$sTextBreed,$sTextSpecies,$sTextAnimalvaccinated,$sSelWhatHappenedAnimal,$chkFluorescent,$chkNegri,$chkInoculation,$chkOtherTests,$dTextActualEntryDate,$tTextActualEntryTime,$sTextEntryUser);
//$pid = $objInfo->set_patient_details($sTextName,$sTextAge,$sSelSex,$sTaAddress,$sTextCity,$sTextGeographicalLocality,$sTextOccupation,$dTextActualEntryDate,$tTextActualEntryTime,$sTextEntryUser);

/*********** ************/

header("location:../dbt_view.php?id=".$id);

?>