

<script type="text/javascript">


function traditional (dis)
{
  var split_traditional=dis.id.split("idismentionedddl_");
if(document.getElementById(dis.id).value=='Yes')
{
   document.getElementById('idifyesddl_'+split_traditional[1]).style.display='block';
}
else
{
  document.getElementById('idifyesddl_'+split_traditional[1]).style.display='none';
}
}

function raw(dis)
{
  var split_raw=dis.id.split("idrawddl_");
 if(document.getElementById(dis.id).value=='Yes')
{
   document.getElementById('idrawdiv_'+split_raw[1]).innerHTML="<input type='text' name='rawddl[]' id='idrawddl_"+split_raw[1]+"' class='classTextBox' />";
  // document.getElementById('idifrawyestxt').style.display='block';
}
/*else
{
  document.getElementById('idifrawyestxt').style.display='none';
}  */
}

function drug(dis)
{
  var split_drug=dis.id.split("iddrugddl_");
 if(document.getElementById(dis.id).value=='Yes')
{
   document.getElementById('iddrugdiv_'+split_drug[1]).innerHTML="<input type='text' name='drugddl[]' id='iddrugddl_"+split_drug[1]+"' class='classTextBox' />";
}
/*else
{
   document.getElementById('idifyesdrugtxt').style.display='none';
}  */
}

function finish(dis)
{
  var split_finish=dis.id.split("idfinishedddl_");
 if(document.getElementById(dis.id).value=='Yes')
{
   document.getElementById('idfinishdiv_'+split_finish[1]).innerHTML="<input type='text' name='finisheddll[]' id='idfinishedddl_"+split_finish[1]+"' class='classTextBox' />";
}
/*else
{
  document.getElementById('idifyesfinishedtxt').style.display='none';
}  */
}

function ext(dis)
{
  var split_id = dis.id.split("idextractddl1_")
  if(dis.value == "Other")
       $("#idextracttxt1_"+split_id[1]).show();
  else
       $("#idextracttxt1_"+split_id[1]).hide();
}

function vitro()
{
  if(document.getElementById('idtypeofstudyddl').value=='In vitro')
{
   document.getElementById('idinvitrolbl').style.display='block';
   document.getElementById('idifyesvitroddl').style.display='block';
}
else
{
  document.getElementById('idinvitrolbl').style.display='none';
  document.getElementById('idifyesvitroddl').style.display='none';
}
}

function result()
{
  if(document.getElementById('idareaddl').value=='Drug Development')
{
   document.getElementById('idresultdiv').style.display='block';
   //document.getElementById('idifyesvitroddl').style.display='block';
}
else
{
  document.getElementById('idresultdiv').style.display='none';
 // document.getElementById('idifyesvitroddl').style.display='none';
}
 if(document.getElementById('idareaddl').value=='Others')
{
   document.getElementById('idareaddldiv').innerHTML="<input type='text' name='areaddl' id='idareaddl' class='classTextBox' />";
   //document.getElementById('idifyesvitroddl').style.display='block';
}
}

function capacity()
{
  if(document.getElementById('idcapacitybuildingddl').value=='Yes')
{
   document.getElementById('idcapacityddldiv').innerHTML="<input type='text' name='capacitybuildingddl' id='idcapacitybuildingddl' class='classTextBox' />";
   //document.getElementById('idifyesvitroddl').style.display='block';
}
/*else
{
  document.getElementById('idresultdiv').style.display='none';
 // document.getElementById('idifyesvitroddl').style.display='none';
}*/
}

function paitent()
{
  if(document.getElementById('idpatentfiledddl').value=='Yes')
{
   document.getElementById('idpaitentddldiv').innerHTML="<input type='text' name='patentfiledddl' id='idpatentfiledddl' class='classTextBox' />";
   //document.getElementById('idifyesvitroddl').style.display='block';
}
}

function publication()
{
  if(document.getElementById('idpublicationddl').value=='Yes')
{
   document.getElementById('idpublicationdiv').innerHTML="<input type='text' name='publicationddl' id='idpublicationddl' class='classTextBox' />";
   //document.getElementById('idifyesvitroddl').style.display='block';
}
}

function theraputic()
{
  if(document.getElementById('idterapeuticddl').value=='Add other')
{
   document.getElementById('idtheraputicddldiv').innerHTML="<input type='text' name='therapeuticddl' id='idterapeuticddl' class='classTextBox' />";
   //document.getElementById('idifyesvitroddl').style.display='block';
}
}

function mention(dis)
{
    var split_mention = dis.id.split("idifyesddl_");
  if(document.getElementById(dis.id).value=='Others')
{
   document.getElementById('idifyesdiv_'+split_mention[1]).innerHTML="<input type='text' name='ifyesddl[]' id='idifyesddl_"+split_mention[1]+"' class='classTextBox' />";
   //document.getElementById('idifyesvitroddl').style.display='block';
}
}

function selection(dis)
{
  var split_selection=dis.id.split("idplantselectionddl_");
  if(document.getElementById(dis.id).value=='Others')
{
   document.getElementById('idplantselectiondiv_'+split_selection[1]).innerHTML="<input type='text' name='plantselectionddl[]' id='idplantselectionddl_"+split_selection[1]+"' class='classTextBox' /></div>";
   //document.getElementById('idifyesvitroddl').style.display='block';
}
}

function part_select(dis)
{
  var split_part=dis.id.split("idpartddl1_");
  if(document.getElementById(dis.id).value=='Others')
{
   document.getElementById('idpartdiv_'+split_part[1]).innerHTML="<input type='text' name='partddl_{$ii}[]' id='idpartddl1_"+split_part[1]+"' class='classTextBox' />";
   //document.getElementById('idifyesvitroddl').style.display='block';
}
}

function vernacular(dis)
{
  var split_vernacular=dis.id.split("idvernacularddl_");
  if(document.getElementById(dis.id).value=='Hindi' || document.getElementById(dis.id).value=='English' || document.getElementById(dis.id).value=='Sanskrit' || document.getElementById(dis.id).value=='Other')
{
   document.getElementById('idvernaculartxt_'+split_vernacular[1]).style.display='block';
   //document.getElementById('idifyesvitroddl').style.display='block';
}
else
{
  document.getElementById('idvernaculartxt_'+split_vernacular[1]).style.display='none';
 // document.getElementById('idifyesvitroddl').style.display='none';
}
}

 function confirmDelete(delUrl){
      if(confirm("Are you Sure?"))
      {
         window.location.href = delUrl;
      }
    }
/*function dis()
        {
          if(document.getElementById('idterapeuticddl').value=='Add other')
          {
            document.getElementById('idterapeuticddl').innerHtml="<"
}
else
{
  document.getElementById('idaddothertd').style.display='none';
}
          }
*/



</script>


<?php


include_once("cm_chk.php");
    $path_to_root = "";
    $top_title = "Dashboard";

    $open = "";

    if(isset($_GET['open']))
        $open = $_GET['open'];

//include_once('left_col.php');
include_once('js/validations.js');


/*include_once('util/class.dbRvsDetails.php');
include_once('emulator/rvs_functions.php');*/





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
$id=addslashes($_REQUEST['id']);
$query="Select `admin`.`DBT_number` ,
`admin`.`date_of_initiation` ,
`admin`.`investigator_name` ,
`admin`.`place_of_work` ,
`admin`.`speciality` ,
`admin`.`capacity_building` ,
`admin`.`patent_filed` ,
`admin`.`publication` ,
`admin`.`title_of_project` ,
`admin`.`area_of_research`,
`plant`.`plant_name` ,
`plant`.`plant_latin_name` ,
`plant`.`plant_vernacular_name` ,
`plant`.`plant_vernacular_name_type` ,
`plant`.`traditional_name` ,
`plant`.`traditionally_mentioned` ,
`plant`.`traditionally_mentioned_yes` ,
`plant`.`part_of_plant` ,
`results`.`therapeutic_area_of_research` ,
`results`.`basis_of_selection_of_plant` ,
`results`.`name_of_Boimaker` ,
`results`.`description_of_biomaker` ,
`results`.`chemistry_manufacturig_conrtrol` ,
`results`.`raw_material` ,
`results`.`drug_product` ,
`results`.`finished_product` ,
`results`.`type_of_extract` ,
`results`.`extract_txt` ,
`results`.`type_of_study` ,
`results`.`in_vitro` ,
`results`.`experimental` ,
`results`.`experimental_txt` ,
`results`.`clinical` ,
`results`.`model` ,
`results`.`appropriate` ,
`results`.`novel` ,
`results`.`other` ,
`results`.`ayush_trust_area` ,
`results`.`ayush_txt` ,
`results`.`hypothesis_generating` ,
`results`.`confirmatory studies` ,
`results`.`results` ,
`results`.`statistical_test` ,
`results`.`statistical_test_details` ,
`results`.`clinically_relevant` ,
`results`.`clinically_relevant_details` ,
`results`.`statistically_Significant` ,
`results`.`were_these_tests_appropriate` ,
`results`.`feasibility_of_Developing_a _drug` ,
`results`.`coments` ,
`results`.`table_count` ,
`plant`.`plantwiseresult` ,
`plant`.`ismentionayur` ,
`plant`.`refrence`
FROM `admin` LEFT JOIN `plant` ON `admin`.`admin_id`=`plant`.`admin_id` LEFT JOIN `results` ON `results`.`admin_id`=`plant`.`admin_id`
WHERE `admin`.`admin_id`='$id'";

$result=mysqli_query($connect,$query);

$retrieve_array=array();
while($data=mysqli_fetch_array($result))
{
   $retrieve_array[]=$data;
}

 foreach($retrieve_array as $rowNum => $data)
 {
  // print_r($data);
$sanction=$data[0];
$date=$data[1];
$capacity=$data[5];
$patent=$data[6];
$publication=$data[7];
$title=$data[8];
//$plant=addslashes($_POST['planttxt[]']);
$area=$data[9];
//$therapuretic=$data[11];
$therapuretic=$data[18];
/*$latin=$data[12];
$vernacular=$data[13];
$tradional=$data[14];
$mention=$data[15];
$ifyesment=$data[18];*/
/*$latin=$data[11];
$vernacular=$data[12];
$vernacularname=$data[13];
$tradional=$data[14];
$mention=$data[15];
$ifyesment=$data[16];
//$basis=$data[17];
$basis=$data[19];
//$part=addslashes($_POST['partddl[]']);
//$bioname=addslashes($_POST['constituentsnametxt[]']);
//$biodesc=addslashes($_POST['constituentsdesctxtarea[]']);
$chemistry=$data[22];
$raw=$data[23];
$drug=$data[24];
$finish=$data[25];*/
//$extract=addslashes($_POST);
$study=$data[28];
$invitro=$data[29];
$expddl=$data[30];
$exptxt=$data[31];
$txt=$data[32];
$other=$data[36];
$ayushddl=$data[37];
$ayushtxt=$data[38];
$hypothesis=$data[39];
$confirmatory=$data[40];
$results=$data[41];
$stats=$data[42];
$statsdetail=$data[43];
$clin=$data[44];
$clindetail=$data[45];
$satssign=$data[46];
$testapp=$data[47];
$feasibile=$data[48];
$comments=$data[49];
$counttable=$data[50];

$sInvestigator=$data[2];
$aInvestigator=explode("#*",$sInvestigator);

$sPlace=$data[3];
$aPlace=explode("#*",$sPlace);

$sSpeciality=$data[4];
$aSpeciality=explode("#*",$sSpeciality);

$sPlant=$data[10];
$aPlant=explode("#*",$sPlant);

$sPart=$data[17];
$aPart=explode("%$",$sPart);
$countpart=count($aPart);
$part = array();
for($a=0; $a<$countpart; $a++)
{
  $part[]=explode("#*",$aPart[$a]);
}


$sBioname=$data[20];
$aBioname=explode("%$",$sBioname);

$countbioname=count($aBioname);
$bioname = array();
for($b=0; $b<$countbioname; $b++)
{
  $bioname[]=explode("#*",$aBioname[$b]);

}

$sBiodesc=$data[21];
 $aBiodesc=explode("%$",$sBiodesc);  //print_r($aBiodesc); exit;
 $biodesc  = array();
          //print_r($aBiodesc);
for($b=0; $b<$countbioname; $b++)
{
  $biodesc[]=explode("#*",$aBiodesc[$b]);

}
  //print_r($biodesc); exit("dfg");
$sExtract=$data[26];
$aExtract=explode("%$",$sExtract);
$countextract=count($aExtract);
$extract=array();

 for($c=0; $c<$countextract; $c++)
{
  $extract[]=explode("#*",$aExtract[$c]);
}

/*for($aa=0; $aa<$counttable; $aa++)
{
     ("#*",$aExtract[$aa])
}*/

$sExtracttxt=$data[27];
$aExtracttxt=explode("#*",$sExtracttxt);


$sModel=$data[33];
$aModel=explode("#*",$sModel);

$sAppropriate=$data[34];
$aAppropriate=explode("#*",$sAppropriate);

$sNovel=$data[35];
$aNovel=explode("#*",$sNovel);
}


   $sLatin=$data[11];
   $aLatin=explode("%$",$sLatin);

$sVernacular=$data[12];
$aVernacular=explode("%$",$sVernacular);

$sVernacular_name=$data[13];
$aVernacular_name=explode("%$",$sVernacular_name);

$sTradional=$data[14];
$aTradional=explode("%$",$sTradional);

$sMention=$data[15];
$aMention=explode("%$",$sMention);

$sIfyesment=$data[16];
$aIfyesment=explode("%$",$sIfyesment);
//$basis=$data[17];
$sBasis=$data[19];
$aBasis=explode("%$",$sBasis);
//$part=addslashes($_POST['partddl[]']);
//$bioname=addslashes($_POST['constituentsnametxt[]']);
//$biodesc=addslashes($_POST['constituentsdesctxtarea[]']);
$sChemistry=$data[22];
$aChemistry=explode("%$",$sChemistry);

$sRaw=$data[23];
$aRaw=explode("%$",$sRaw);

$sDrug=$data[24];
$aDrug=explode("%$",$sDrug);

$sFinish=$data[25];
$aFinish=explode("%$",$sFinish);

$sPlantwiseresult=$data[51];
$aPlantwiseresult=explode("%$",$sPlantwiseresult);

$sMentionayur=$data[52];
$aMentionayur=explode("%$",$sMentionayur);

$sRefrence=$data[53];
$aRefrence=explode("%$",$sRefrence);











/*$visitId = @$_REQUEST['visitId'];
//$visitId= 1;

$data = getPatientInfo($visitId);
for($ii=0; $ii<count($data); $ii++)
{
    /*! Get the Data Locally --> presented as an associative array
      $dDate=stripslashes($data[$ii]['tb_rvs_visit_dTextEntryDate']);

    //$tb_rvs_visit_id = stripslashes($data[$ii]['tb_rvs_visit_id']);
$tb_rvs_visit_patient_id = stripslashes($data[$ii]['tb_rvs_visit_patient_id']);
$tb_rvs_visit_dTextEntryDate = stripslashes($data[$ii]['tb_rvs_visit_dTextEntryDate']);

$arrEntryDate = split('-',$tb_rvs_visit_dTextEntryDate);
$dTextEntryDate  =  $arrEntryDate[2]."-".$arrEntryDate[1]."-".$arrEntryDate[0];

$tb_rvs_visit_dateDay3 = date("d-m-Y", strtotime(date("Y-m-d", strtotime($tb_rvs_visit_dTextEntryDate)) . " +3 day"));
$tb_rvs_visit_dateDay7 = date("d-m-Y",strtotime(date("Y-m-d", strtotime($tb_rvs_visit_dTextEntryDate)) . " +7 day"));
$tb_rvs_visit_dateDay14 = date("d-m-Y",strtotime(date("Y-m-d", strtotime($tb_rvs_visit_dTextEntryDate)) . " +14 day"));
$tb_rvs_visit_dateDay28 = date("d-m-Y",strtotime(date("Y-m-d", strtotime($tb_rvs_visit_dTextEntryDate)) . " +28 day"));

$tb_rvs_visit_sTextName = stripslashes($data[$ii]['tb_rvs_visit_sTextName']);
$tb_rvs_visit_sTextAge = stripslashes($data[$ii]['tb_rvs_visit_sTextAge']);
$tb_rvs_visit_sSelSex = stripslashes($data[$ii]['tb_rvs_visit_sSelSex']);
$tb_rvs_visit_sTaAddress = stripslashes($data[$ii]['tb_rvs_visit_sTaAddress']);
$tb_rvs_visit_sTextPhoneNum = stripslashes($data[$ii]['tb_rvs_visit_sTextPhoneNum']);
$tb_rvs_visit_sTextCity = stripslashes($data[$ii]['tb_rvs_visit_sTextCity']);
$tb_rvs_visit_sTextGeographicalLocality = stripslashes($data[$ii]['tb_rvs_visit_sTextGeographicalLocality']);
$tb_rvs_visit_sTextOccupation = stripslashes($data[$ii]['tb_rvs_visit_sTextOccupation']);
$tb_rvs_visit_sSelKupEdu = stripslashes($data[$ii]['tb_rvs_visit_sSelKupEdu']);
$tb_rvs_visit_sSelKupOcu = stripslashes($data[$ii]['tb_rvs_visit_sSelKupOcu']);
$tb_rvs_visit_sSelKupInc = stripslashes($data[$ii]['tb_rvs_visit_sSelKupInc']);
$tb_rvs_visit_sKupScale = stripslashes($data[$ii]['tb_rvs_visit_sKupScale']);
$tb_rvs_visit_sSelHistory = stripslashes($data[$ii]['tb_rvs_visit_sSelHistory']);
$tb_rvs_visit_sTaHistoryAllergies = stripslashes($data[$ii]['tb_rvs_visit_sTaHistoryAllergies']);
$tb_rvs_visit_sDetailsOfAnimalBiteAnimal = stripslashes($data[$ii]['tb_rvs_visit_sDetailsOfAnimalBiteAnimal']);
$tb_rvs_visit_sDetailsOtherAnimal = stripslashes($data[$ii]['tb_rvs_visit_sDetailsOtherAnimal']);
$tb_rvs_visit_sTextSiteOfBite = stripslashes($data[$ii]['tb_rvs_visit_sTextSiteOfBite']);
$tb_rvs_visit_sDetailsOfAnimalBiteWas = stripslashes($data[$ii]['tb_rvs_visit_sDetailsOfAnimalBiteWas']);
$tb_rvs_visit_sDetailsOfAnimalAnimalWas = stripslashes($data[$ii]['tb_rvs_visit_sDetailsOfAnimalAnimalWas']);
$tb_rvs_visit_dTextBiteDate = stripslashes($data[$ii]['tb_rvs_visit_dTextBiteDate']);
$tb_rvs_visit_sTaBiteDetailsAndExtent = stripslashes($data[$ii]['tb_rvs_visit_sTaBiteDetailsAndExtent']);
$tb_rvs_visit_sDetailsAssociatedBleeding = stripslashes($data[$ii]['tb_rvs_visit_sDetailsAssociatedBleeding']);
$tb_rvs_visit_sDetailsHowSoon = stripslashes($data[$ii]['tb_rvs_visit_sDetailsHowSoon']);
$tb_rvs_visit_sDetailsTxAtHome = stripslashes($data[$ii]['tb_rvs_visit_sDetailsTxAtHome']);
$tb_rvs_visit_sDetailsTxAtLocalP = stripslashes($data[$ii]['tb_rvs_visit_sDetailsTxAtLocalP']);
$tb_rvs_visit_sDetailsDogRabidQ = stripslashes($data[$ii]['tb_rvs_visit_sDetailsDogRabidQ']);
$tb_rvs_visit_sSelAware = stripslashes($data[$ii]['tb_rvs_visit_sSelAware']);
$tb_rvs_visit_sDetailsWashWound = stripslashes($data[$ii]['tb_rvs_visit_sDetailsWashWound']);
$tb_rvs_visit_sDetailsinjGiven = stripslashes($data[$ii]['tb_rvs_visit_sDetailsinjGiven']);
$tb_rvs_visit_sSelWhoBite = stripslashes($data[$ii]['tb_rvs_visit_sSelWhoBite']);
$tb_rvs_visit_sTaLocal = stripslashes($data[$ii]['tb_rvs_visit_sTaLocal']);
$tb_rvs_visit_sSelSystemic = stripslashes($data[$ii]['tb_rvs_visit_sSelSystemic']);
$tb_rvs_visit_sTaOther = stripslashes($data[$ii]['tb_rvs_visit_sTaOther']);
$tb_rvs_visit_sTaConcommitant = stripslashes($data[$ii]['tb_rvs_visit_sTaConcommitant']);
$tb_rvs_visit_sSelBrainDerived = stripslashes($data[$ii]['tb_rvs_visit_sSelBrainDerived']);
$tb_rvs_visit_sTextManufacturerNo = s($data[$ii]['tb_rvs_visit_sTextManufacturerNo']);
$tb_rvs_visit_sTextRouteOfAdministration = stripslashes($data[$ii]['tb_rvs_visit_sTextRouteOfAdministration']);
$tb_rvs_visit_sTextQuantityAdministered = stripslashes($data[$ii]['tb_rvs_visit_sTextQuantityAdministered']);
$tb_rvs_visit_sTaDatesAdministered = stripslashes($data[$ii]['tb_rvs_visit_sTaDatesAdministered']);
$tb_rvs_visit_sTaRabiesVaccination = stripslashes($data[$ii]['tb_rvs_visit_sTaRabiesVaccination']);
$tb_rvs_visit_sSelIgRecv = stripslashes($data[$ii]['tb_rvs_visit_sSelIgRecv']);
$tb_rvs_visit_sTaImmunoNotRcvdWhy = stripslashes($data[$ii]['tb_rvs_visit_sTaImmunoNotRcvdWhy']);
$tb_rvs_visit_sTaImmunoRcvdSE = stripslashes($data[$ii]['tb_rvs_visit_sTaImmunoRcvdSE']);
$tb_rvs_visit_sSelBrainDerivedImmunoglobulin = stripslashes($data[$ii]['tb_rvs_visit_sSelBrainDerivedImmunoglobulin']);
$tb_rvs_visit_sTextSensitivityTest = stripslashes($data[$ii]['tb_rvs_visit_sTextSensitivityTest']);
$tb_rvs_visit_sTextManufacturerNoImmunoglobulin = stripslashes($data[$ii]['tb_rvs_visit_sTextManufacturerNoImmunoglobulin']);
$tb_rvs_visit_sTextRouteOfAdministrationImmunoglobulin = stripslashes($data[$ii]['tb_rvs_visit_sTextRouteOfAdministrationImmunoglobulin']);
$tb_rvs_visit_sTextQuantityAdministeredImmunoglobulin = stripslashes($data[$ii]['tb_rvs_visit_sTextQuantityAdministeredImmunoglobulin']);
$tb_rvs_visit_sTaDatesAdministeredImmunoglobulin = stripslashes($data[$ii]['tb_rvs_visit_sTaDatesAdministeredImmunoglobulin']);
$tb_rvs_visit_sTaRabiesImmunoglobulin = stripslashes($data[$ii]['tb_rvs_visit_sTaRabiesImmunoglobulin']);
$tb_rvs_visit_sTaAdverseEventsImmunoglobulin = stripslashes($data[$ii]['tb_rvs_visit_sTaAdverseEventsImmunoglobulin']);
$tb_rvs_visit_sSelStatus = stripslashes($data[$ii]['tb_rvs_visit_sSelStatus']);
$tb_rvs_visit_sTaStatusOfOther = stripslashes($data[$ii]['tb_rvs_visit_sTaStatusOfOther']);
$tb_rvs_visit_sTextDetailsBitingRVC = stripslashes($data[$ii]['tb_rvs_visit_sTextDetailsBitingRVC']);
$tb_rvs_visit_sTextDetailsBitingARV = stripslashes($data[$ii]['tb_rvs_visit_sTextDetailsBitingARV']);
$tb_rvs_visit_sTextDetailsBitingML = stripslashes($data[$ii]['tb_rvs_visit_sTextDetailsBitingML']);
$tb_rvs_visit_sTextDetailsStray = stripslashes($data[$ii]['tb_rvs_visit_sTextDetailsStray']);
$tb_rvs_visit_sTextWeight = stripslashes($data[$ii]['tb_rvs_visit_sTextWeight']);
$tb_rvs_visit_sTextSexAnimal = stripslashes($data[$ii]['tb_rvs_visit_sTextSexAnimal']);
$tb_rvs_visit_sTextBreed = stripslashes($data[$ii]['tb_rvs_visit_sTextBreed']);
$tb_rvs_visit_sTextSpecies = stripslashes($data[$ii]['tb_rvs_visit_sTextSpecies']);
$tb_rvs_visit_sTextAnimalvaccinated = stripslashes($data[$ii]['tb_rvs_visit_sTextAnimalvaccinated']);
$tb_rvs_visit_sSelWhatHappenedAnimal = stripslashes($data[$ii]['tb_rvs_visit_sSelWhatHappenedAnimal']);
$tb_rvs_visit_chkFluorescent = stripslashes($data[$ii]['tb_rvs_visit_chkFluorescent']);
$tb_rvs_visit_chkNegri = stripslashes($data[$ii]['tb_rvs_visit_chkNegri']);
$tb_rvs_visit_chkInoculation = stripslashes($data[$ii]['tb_rvs_visit_chkInoculation']);
$tb_rvs_visit_chkOtherTests = stripslashes($data[$ii]['tb_rvs_visit_chkOtherTests']);
$tb_rvs_visit_sTextCostTravel = stripslashes($data[$ii]['tb_rvs_visit_sTextCostTravel']);
$tb_rvs_visit_sTextCostMedVacc = stripslashes($data[$ii]['tb_rvs_visit_sTextCostMedVacc']);
$tb_rvs_visit_sTextCostMedSera = stripslashes($data[$ii]['tb_rvs_visit_sTextCostMedSera']);
$tb_rvs_visit_sTextCostMedLocal = stripslashes($data[$ii]['tb_rvs_visit_sTextCostMedLocal']);
$tb_rvs_visit_sTextCostLoss = stripslashes($data[$ii]['tb_rvs_visit_sTextCostLoss']);
$tb_rvs_visit_sTextCostTotal = stripslashes($data[$ii]['tb_rvs_visit_sTextCostTotal']);
$tb_rvs_visit_sTextLostDaysVictim = stripslashes($data[$ii]['tb_rvs_visit_sTextLostDaysVictim']);
$tb_rvs_visit_sTextLostDaysAccom = stripslashes($data[$ii]['tb_rvs_visit_sTextLostDaysAccom']);
$tb_rvs_visit_sTaDay0 = stripslashes($data[$ii]['tb_rvs_visit_sTaDay0']);
$tb_rvs_visit_sSelDay = stripslashes($data[$ii]['tb_rvs_visit_sSelDay']);
$tb_rvs_visit_sTaDay3 = stripslashes($data[$ii]['tb_rvs_visit_sTaDay3']);
$tb_rvs_visit_sSelDay3 = stripslashes($data[$ii]['tb_rvs_visit_sSelDay3']);
$tb_rvs_visit_sTaDay7 = stripslashes($data[$ii]['tb_rvs_visit_sTaDay7']);
$tb_rvs_visit_sSelDay7 = stripslashes($data[$ii]['tb_rvs_visit_sSelDay7']);
$tb_rvs_visit_sTaDay14 = stripslashes($data[$ii]['tb_rvs_visit_sTaDay14']);
$tb_rvs_visit_sSelDay14 = stripslashes($data[$ii]['tb_rvs_visit_sSelDay14']);
$tb_rvs_visit_sTaDay28 = stripslashes($data[$ii]['tb_rvs_visit_sTaDay28']);
$tb_rvs_visit_sSelDay28 = stripslashes($data[$ii]['tb_rvs_visit_sSelDay28']);
$tb_rvs_visit_dTextActualEntryDate = stripslashes($data[$ii]['tb_rvs_visit_dTextActualEntryDate']);
$tb_rvs_visit_tTextActualEntryTime = stripslashes($data[$ii]['tb_rvs_visit_tTextActualEntryTime']);
$tb_rvs_visit_sTextEntryUser = stripslashes($data[$ii]['tb_rvs_visit_sTextEntryUser']);
$tb_rvs_visit_extra1 = stripslashes($data[$ii]['tb_rvs_visit_extra1']);
$tb_rvs_visit_extra2 = stripslashes($data[$ii]['tb_rvs_visit_extra2']);
$tb_rvs_visit_extra3 = stripslashes($data[$ii]['tb_rvs_visit_extra3']);
$tb_rvs_visit_extra4 = stripslashes($data[$ii]['tb_rvs_visit_extra4']);
$tb_rvs_visit_extra5 = stripslashes($data[$ii]['tb_rvs_visit_extra5']);
$tb_rvs_visit_extra6 = stripslashes($data[$ii]['tb_rvs_visit_extra6']);

}
*/
//print_r($data); exit;
/*********** ************/

$pageHeaderStarts = "<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Strict//EN'
    'http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd'>

<html xmlns='http://www.w3.org/1999/xhtml'>

<head>
  <title>Medicinal and Aromamatic Plants Database</title>
  <link rel='stylesheet' type='text/css' href='css/rvs_css.css'></link>
  <link rel='stylesheet' type='text/css' href='css/stylesheetCommon.css' />
  <script language='javascript' src='js/validatations.js'></script>
<script language='javascript' src='js/utils_print.js'></script>
  <meta http-equiv='pragma' content='no-cache' />   ";
 echo $pageHeaderStarts;
 include_once($path_to_root.'cm_top.php');

$pageHeaderEnds ="<style type='text/css'>
		body { font-size: 62.5%; }
        label, input { display:inline; }
		input.text { margin-bottom:12px; width:95%; padding: .4em; }
		fieldset { padding:0; border:0; margin-top:25px; }
		h1 { font-size: 1.2em; margin: .6em 0; }
		div#users-contain {  width: 350px; margin: 20px 0; }
		div#users-contain table { margin: 1em 0; border-collapse: collapse; width: 100%; }
		div#users-contain table td, div#users-contain table th { border: 1px solid #eee; padding: .6em 10px; text-align: left; }
		.ui-button { outline: 0; margin:0; padding: .4em 1em .5em; text-decoration:none;  !important; cursor:pointer; position: relative; text-align: center; }
		.ui-dialog .ui-state-highlight, .ui-dialog .ui-state-error { padding: .3em;  }
        #ui-datepicker-div
{
    z-index:1250;
    font-size: 100%;
}

	</style>
  <script language='javascript' type='text/javascript'>

  function redirect()
  {
    window.location.href = 'dbt_update.php?id=$id';
  }

   function Show()
  {
    window.location.href = 'dbt_show_results.php';
  }

  function GoBack()
    {
        javascript:history.go(-1);
    }
  function GoToPrint()
  {
      //window.open('dbt_print.php?id=$id');
 window.print();
  }

</script>
<style type='text/css'>
.classTable {
padding-top: 12px;
}
.classTitle
{
font-size: 17px;
    font-family:Arial;
}
.classLabel
{
font-size: 14px;
    font-family:Arial;
    font-weight:normal;
}
.classInstruction
{
    font-size: 12px;
    font-family:Arial;
    font-weight:normal;
    font-style: italic;
    color:#2266AA;

}
</style>


</head>";


echo $pageHeaderEnds;

$pageBodyStarts = "<body oncontextmenu='return false;'>

<div align='center'>";
echo $pageBodyStarts;
include_once($path_to_root.'cm_header.php');

  $pageBodyLeftCol = "<div id='main'>
        <div id='leftcol'> ";
echo $pageBodyLeftCol;

include_once($path_to_root.'cm_left_col.php');

$pageBody = "</div>
        <div id='bar'>
            <span id='headBar'>Medicinal and Aromamatic Plants Database</span>
        </div>
        <div id='containerMain' >
<form name='frmRabiesVaccineAdd' id='frmRabiesVaccineAdd' class='classForm' action='emulator/em_dbt_add.php' method='Post'>
<div id='containerDiv'><div id='head1'><div id='headtitle1'>
<table border='0'>
<tr >
<td valign='middle'>
<span class='classPrintTitle'>Medicinal and Aromamatic Plants Database  - View Plant details :</span>
</td>
</tr>
</table>
</div>
</div>
<div id='containerData'>
<br />
<table class='classTable'>
<tr height='40px' class='classRow' >
</tr>
   <tr height='40px' class='classRow' >
    <td width='300'><label id='iddbtnolbl' class='classLabel'>1. DBT Sanction No. :</label></td>
     <td width='200'><label id='idgetdbtnolbl' class='classLabelResult'>".$sanction."</label></td>
     <td width='200'></td>

  </tr >
   <tr height='40px' class='classRow' >
    <td width='300'><label name='dateofinitiationlbl' id='iddateofinitiationlbl' class='classLabel'>2. Date of Initiation :</label></td>
    <td width='200'><label id='idgetdateofinitiationlbl' class='classLabelResult'>".$date."</label></td>
    <td width='200'></td>

  </tr>
  </table>
  <table class='classTable'>
  <thead>
     <tr height='40px' class='classRow' >
      <td width='200'><label name='investigatorlbl' id='idinvestigatorlbl' class='classLabel'>3a. Investigator(s) :</label></td>
      <td width='200'><label name='placeofworklbl' id='idplaceofworklbl' class='classLabel'>3b. Places of work :</label></td>
       <td width='200'><label name='specialitylbl' id='idspecialitylbl' class='classLabel'>3c. Speciality of Investigator :</label></td>
    </tr>
    </thead>
<tbody id='idinvestigatortbody'>";

    for($ii = 0; $ii < count($aInvestigator); $ii++)
    {
    $pageBody .="<tr height='40px' class='classRow' ><td width='200'><label id='idgetinvestigatorlbl' class='classLabelResult'>$aInvestigator[$ii]</label></td>
       <td width='200'><label id='idgetplaceofworklbl' class='classLabelResult'>$aPlace[$ii]</label></td>
       <td width='200'><label id='idgetspecialitylbl' class='classLabelResult'>$aSpeciality[$ii]</label></td></tr>";
    }

   $pageBody .= "</tbody>
    </table>
    <table class='classTable'>
     <tr height='40px' class='classRow' >
      <td width='300'><label name='capacitybuildinglbl' id='idcapacitybuildinglbl' >4. Capacity Building(M. Sc. / Ph.D. produced) :</label></td>
      <td width='200'><label id='idgetcapacitybuildinglbl' class='classLabelResult'>".$capacity."</label></td>
      <td width='200'></td>
    </tr>
     <tr height='40px' class='classRow' >
      <td width='300'><label name='patentfiledlbl' id='idpatentfiledlbl' class='classLabel'>5. Patent Filed :</label></td>
      <td width='200'><label id='idgetpatentfiledlbl' class='classLabelResult'>".$patent."</label></td>
      <td width='200'></td>
    </tr>
     <tr height='40px' class='classRow' >
      <td width='300'><label name='publicationlbl' id='idpublicationlbl' class='classLabel'>6. Publication :</label></td>
      <td width='200'><label id='idgetpublicationlbl' class='classLabelResult'>".$publication."</label></td>
      <td width='200'></td>
    </tr>
    </table>
    <table>
     <tr height='40px' class='classRow' >
      <td width='300'><label name='titlelbl' id='idtitlelbl' class='classLabel'>7. Title of project :</label></td>
      <td ><label id='idgettitlelbl' class='classTitle'>".$title."</label></td>
      <td width='100'></td>
    </tr>
    </table>
    <table class='classTable'>
    <tbody id='idplanttbody'>";

    for($ii = 0; $ii < count($aPlant); $ii++)
    {
     $pageBody .= "<tr height='40px' class='classRow' >
            <td width='300'><label name='plantlbl[]' id='idplantlbl1' class='classLabel'>8. Plant name on which work has been done :</label></td>
            <td width='200'><label id='idgetplantlbl' class='classLabelResult' style='font-style:italic' >$aPlant[$ii]</label></td>
            <td width='200'></td></tr>";
    }

    $pageBody .="</tbody>
    </table>
    <table class='classTable'>
     <tr height='40px' class='classRow' >
    <td width='300'><label name='arealbl' id='idarealbl' class='classLabel'>9. Area of research :</label></td>
    <td width='200'><label id='idgetarealbl' class='classLabelResult'>".$area."</label></td>
    <td width='200'></td>
    </tr>
  </table>
  </div>
<!-- end of admin block -->
 <br />
 <br />
 <br />
<!-- start of result block -->";

  if($area=='Drug Development')
 {
 $pageBody .="'<div id='idresultdiv'>'";
 }
 else
 {
 $pageBody .="'<div id='idresultdiv' style='display:none'>'";
 }

//<div id='idresultdiv'>
$pageBody .="
<table class='classTable'>
<th colspan='4' align='left'>Results</th>
   <tr height='40px' class='classRow' >
    <td width='300'><label name='therapeuticlbl' id='idtherapeuticlbl' class='classLabel'>1. Therapeutic area of research :</label></td>
    <td width='200'><label id='idgettherapeuticlbl' class='classLabelResult'>".$therapuretic."</label></td>
    <td width='200'></td>
  </tr>
  </table>";

  for($aa=0; $aa < $counttable; $aa++)
  {
  $pageBody .="<hr />
  <table class='classTable'>
   <tr height='40px' class='classRow' >
  <th colspan='4' align='left'>Plants on which work done</th>
  </tr>
   <tr height='40px' class='classRow' >
    <td width='300'><label name='latinlbl' id='idlatinlbl' class='classLabel'>a. Latin name :</label></td>
    <td width='200'><label id='idgetlatinlbl' class='classLabelResult' style='font-style:italic' >{$aLatin[$aa]}</label></td>
    <td width='200'></td>
    </tr>
    <tr height='40px' class='classRow' >
    <td width='300'><label name='vernacularlbl' id='idvernacularlbl' class='classLabel'>b. Vernacular name :</label></td>
    <td width='200'><label id='idgetvernacularlbl' class='classLabelResult'>{$aVernacular[$aa]}</label></td>
    <td width='200'><label id='idgetvernacularnamelbl' class='classLabelResult'>{$aVernacular_name[$aa]}</label></td></td>
  </tr>
   <tr height='40px' class='classRow' >
    <td width='300'><label name='traditionallbl' id='idtardionalbl' class='classLabel'>c. Traditional Medicine name(In Report):</label></td>
    <td width='200'><label id='idgettraditional' class='classLabelResult'>{$aTradional[$aa]}</label></td>
    <td width='200'><label name='refrencelbl' id='idrefrencelbl' class='classLabelResult' />{$aRefrence[$aa]}</label></td>
    </tr>
    <tr height='40px' class='classRow' >
    <td width='300'><label name='ismentionedlbl' id=idismentionedlbl' class='classLabel'>d. Is it mentioned in Traditional medicine? :</label></td>
    <td width='200'><label id='idgetmentionedlbl' class='classLabelResult'>{$aMention[$aa]}</label></td>
    <td width='200'><label id='idgetifyeslbl' class='classLabelResult'>{$aIfyesment[$aa]}</label>
</td>
  </tr>
   </tr>
    <tr height='40px' class='classRow' >
    <td width='300'><label name='ismentionedayurlbl' id=idismentionedayurlbl' class='classLabel'>e. Is it mentioned in Ayurvedic Pharmacopoeia of India? :</label></td>
    <td width='200'><label id='idgetmentionedayurlbl' class='classLabelResult'>{$aMentionayur[$aa]}</label></td>
    <td width='200'></td>
  </tr>
   <tr height='40px' class='classRow' >
    <td width='300'><label name='plantselectionlbl' id='idplantselectionlbl' class='classLabel'>3. Basis for selection of plant :</label></td>
    <td width='200'><label id='idgetplantselectionlbl' class='classLabelResult'>{$aBasis[$aa]}</label></td>
    <td width='200'></td>
  </tr>
  </table>
  <table class='classTable'>
  <tbody id='idparttbody'>";

    for($ii = 0; $ii < count($part[$aa]); $ii++)
    {
     $pageBody .="<tr height='40px' class='classRow' >
    <td width='300'><label name='partlbl' id='idpartlbl' class='classLabel'>4. Part of plant used :</label></td>
    <td width='200'><label id='idgetpartlbl' class='classLabelResult'>".$part[$aa][$ii]."</label></td>
    <td width='200'></td></tr>";
    }

  $pageBody .="</tbody>
  </table>
  <table class='classTable'>
  <th colspan='4' align='left'>Active constituents of biomarkers</th>
  <tbody id='idbiomakertbody'>";

       //echo count($bioname);
    for($ii = 0; $ii < count($bioname[$aa]); $ii++)
    {

      $pageBody .="<tr height='40px' class='classRow' >
      <td width='300'><label name='cnamelbl' id='idcnamelbl' class='classLabel'>Name :</label></td>
      <td width='200'><label id='idgetcname' class='classLabelResult'>".$bioname[$aa][$ii]."</label></td>
      <td width='200'></td>
      </tr>
      <tr height='40px' class='classRow' >
      <td width='300'><label name='constituentsdesclbl' id='idconstituentsdesclbl' class='classLabel'>Description :</label></td>
      <td width='200'><label id='idgetcdesclbl' class='classLabelResult'>".$biodesc[$aa][$ii]."</label></td>
      <td width='200'></td></tr>";
    }



  $pageBody .="</tbody>
  </table>
  <table class='classTable'>
   <tr height='40px' class='classRow' >
    <td width='300'><label name='chemistrylbl' id='idchemistrylbl' class='classLabel'>5. Chemistry manufacturing control :</label></td>
    <td width='200'><label id='idgetchemistrylbl' class='classLabelResult'>$aChemistry[$aa]</label>
</td>
    <td width='200'></td>
    </tr>
    <tr height='40px' class='classRow' >
    <td width='300'><label name='rawlbl' id='idrawlbl' class='classLabel'>a. Raw material :</label></td>
    <td width='200'><label id='idgetrawlbl' class='classLabelResult'>$aRaw[$aa]</label></td>
    <td width='200'></td>
  </tr>
   <tr height='40px' class='classRow' >
    <td width='300'><label name='druglbl' id='iddruglbl' class='classLabel'>b. Drug Product :</label></td>
    <td width='200'><label id='idgetdruglbl' class='classLabelResult'>$aDrug[$aa]</label></td>
    <td width='200'></td>
    </tr>
    <tr height='40px' class='classRow' >
    <td width='300'><label name='finishedlbl' id='idfinishedlbl' class='classLabel'>d. Finished Product :</label></td>
    <td width='200'><label id='idgetfinishedlbl' class='classLabelResult'>$aFinish[$aa]</label>
</td>
<td width='200'></td>
  </tr>
  </table>
  <table class='classTable'>
  <tbody id='idextracttbody'>";

    for($ii = 0; $ii < count($extract[$aa]); $ii++)
    {
     $pageBody .="<tr height='40px' class='classRow' >
    <td width='300'><label name='extractlbl' id='idextractlbl' class='classLabel'>7. Type of extract(s) used :</label></td>
    <td width='200'><label id='idgetextractlbl' class='classLabelResult'>".$extract[$aa][$ii]."</label></td>
     <td width='200'><label id='idgetextracttxtlbl' class='classLabelResult'>".$extracttxt[$aa][$ii]."</label></td></tr>";
     }

  $pageBody .="</tbody>
  </table>
  <table class='classTable'>
  <tr height='40px' class='classRow' >
  <td width='300'><label name='plantwiseresultlbl' id='idplantwiseresultlbl' class='classLabel'>Plantwise Result :</label></td>
  </tr>
  </table>
  <table class='classTable'>
  <tr height='40px' class='classRow' >
  <td width='300'><label id='idgetplantwiseresultlbl' class='classLabelResult'>$aPlantwiseresult[$aa]</label></td>
  </tr>
  </table><hr/>";
   }
  $pageBody .="<table class='classTable'>
   <tr height='40px' class='classRow' >
    <td width='300'><label name='typeofstudylbl' id='idtypeofstudylbl' class='classLabel'>8. Type of study :</label></td>
    <td width='200'><label id='idgettypeofstudylbl' class='classLabelResult'>".$study."</label>
</td>
<td width='200'></td>
</tr>
<tr height='40px' class='classRow' >
    <td width='300'><label name='invitrolbl' id='idinvitrolbl' class='classLabel' >a. In vitro</label></td>
    <td width='200'><label id='idgetinvitrolbl' class='classLabelResult'>".$invitro."</label>
</td>
<td width='200'></td>
  </tr>
   <tr height='40px' class='classRow' >
    <td width='300'><label name='experimentallbl' id='idexperimentallbl' class='classLabel'>b. Experimental :</label></td>
    <td width='200'><label id='idgetexperimentallbl' class='classLabelResult'>".$expddl."</label>
</td>
      <td width='200'></td>
    </tr>
   </table>
   <table class='classTable'>
   <tr height='40px' class='classRow' >
    <td width='400'><label id='idgetexperimentaltxtlbl' class='classLabelResult'>".$exptxt."</label></td>
  </tr>
  </table>
  <table class='classTable'>
   <tr height='40px' class='classRow' >
    <td width='300'><label name='clinicallbl' id='idclinicallbl' class='classLabel'>c. Clinical :</label></td>
    </tr>
    </table>
    <table class='classTable'>
    <tr height='40px' class='classRow' >
    <td width='400'><label id='idgetallbl' class='classLabelResult'>".$txt."</label></td>
  </tr>
  </table>
  <table class='classTable'>
  <thead id='modelthead'>
   <tr height='40px' class='classRow' >
    <td width='200'><label name='modellbl' id='idmodellbl' class='classLabel'>9a. Model(s) (accuracy and novelty) :</label></td>
    <td width='200'><label name='appropriatelbl' id='idappropriatelbl' class='classLabel'>9b. Was it appropriate? :</label></td>
    <td width='200'><label name='novellbl' id='idnovellbl' class='classLabel'>9c. Was it Novel? :</label></td>
  </tr>
  </thead>
  </table>
  <table class='classTable'>
  <tbody id='idmodeltbody'>";

    for($ii = 0; $ii < count($aModel); $ii++)
    {
    $pageBody .="<tr height='40px' class='classRow' ><td width='200'><label id='idgetmodellbl' class='classLabelResult'>$aModel[$ii]</label></td>
    <td width='200'><label id='idgetappropriatelbl' class='classLabelResult'>$aAppropriate[$ii]</label></td>
    <td width='200'><label id='idgetnovellbl' class='classLabelResult'>$aNovel[$ii]</label></td></tr>";
    }

  $pageBody .="</tbody>
  </table>
  <table class='classTable'>
   <tr height='40px' class='classRow' >
    <td width='300'><label name='otherlbl' id='idotherlbl' class='classLabel'>9d. Any Other :</label></td>
    </tr>
    </table>
    <table class='classTable'>
    <tr height='40px' class='classRow' >
    <td><label id='idgetotherlbl' class='classLabelResult'>".$other."</label></td>
  </tr>
  </table>
  <table class='classTable'>
   <tr height='40px' class='classRow' >
  <td width='300'><label name='trustlbl' id='idtrustlbl' class='classLabel'>10. Is it on AYUSH Trust area?</label></td>
  <td width='200'><label id='idgettrustlbl' class='classLabelResult'>".$ayushddl."</label>
</td>
  <td width='200'><label id='idgettrusttxtlbl' class='classLabelResult'>".$ayushtxt."</label></td>
  </tr>
    <tr height='40px' class='classRow' >
  <td width='300'><label name='hypothesislbl' id='idhypothesislbl' class='classLabel'>11a. Hypothesis generating? :</label></td>
  </tr>
  </table>
  <table class='classTable'>
  <tr height='40px' class='classRow' >
  <td><label id='idgethypothesislbl' class='classLabelResult'>".$hypothesis."</label></td>
   </tr>
   </table>
   <table class='classTable'>
   <tr height='40px' class='classRow' >
  <td width='300'><label name='confirmatorylbl' id='idconfirmatorylbl' class='classLabel'>11b. Confirmatory studies? :</label></td>
  </tr>
  </table>
  <table class='classTable'>
  <tr height='40px' class='classRow' >
  <td><label id='idgetconfirmatorylbl' class='classLabelResult'>".$confirmatory."</label></td>
  </tr>
  </table>
  <table class='classTable'>
  <tr height='40px' class='classRow' >
  <td width='300'><label name='resultlbl' id='idresultlbl' class='classLabel'>11c. Results :</label></td>
  </tr>
  </table>
  <table class='classTable'>
  <tr height='40px' class='classRow' >
  <td width='300'><label id='idgetresultlbl' class='classLabelResult'>".$results."</label></td>
  </tr>
  </table>
  <table class='classTable'>
   <tr height='40px' class='classRow' >
  <td width='300'><label name='statisticallbl' id='idstatisticallbl' class='classstatisticallbl'>12. Statistical tests applied :</label></td>
  <td width='200'><LABEL id='idgetstatisticallbl' class='classLabelResult'>".$stats."</Label>
</td>
<td width='200'></td>
</tr>
<tr height='40px' class='classRow' >
    <td width='300'><label name='detaillbl' id='iddetaillbl' class='classLabel'>12a. Details :</label></td>
   </tr>
   </table>
   <table class='classTable'>
   <tr height='40px' class='classRow' >
    <td ><label id='idgetdetaillbl' class='classLabelResult'>".$statsdetail."</label></td>
</tr>
</table>
<table class='classTable'>
  <tr height='40px' class='classRow' >
  <td width='300'><label name='clinicallylbl' id='idclinicallylbl' class='classLabel'>13. Clinically relevant? :</label></td>
  <td width='200'><label id='idgetallylbl' class='classLabelResult'>".$clin."</label>
</td>
<td width='200'></td>
</tr>
<tr height='40px' class='classRow' >
  <td width='300'><label name='cdetaillbl' id='idcdetaillbl' class='classLabel'>13a. Details :</label></td>
  </tr>
  </table>
  <table class='classTable'>
  <tr height='40px' class='classRow' >
  <td width='400'><label id='idgetcdetaillbl' class='classLabelResult'>".$clindetail."</label></td>
  </tr>
  </table>
  <table class='classTable'>
  <tr height='40px' class='classRow' >
  <td width='300'><label name='satisticallysignlbl' id='statisticallysignlbl' class='classLabel'>14a. Statistically significant :</label></td>
  <td width='200'><label id='idgetstatisticallysignlbl' class='classLabelResult'>".$satssign."</label>
</td>
<td width='200'></td>
</tr>
<tr height='40px' class='classRow' >
  <td width='300'><label name='testlbl' id='idtestlbl' class='classLabel'>14b. Were these tests appropriate? :</label></td>
  <td width='200'><label id='idgettestlbl' class='classLabelResult'>".$testapp."</label>
</td>
<td width='200'></td>
  </tr>
  <tr height='40px' class='classRow' >
  <td width='300'><label name='feasibilitylbl' id='idfeasibilitylbl' class='classLabel'>15. Feasibility of Developing a Drug :</label></td>
  <td width='200'><label id='idgetfeasibilitylbl' class='classLabelResult'>".$feasibile."</label>
</td>
  <td width='200'></td>
  </tr>
  <tr height='40px' class='classRow' >
  <td width='300'><label name='commentlbl' id='idcommentlbl' class='classLabel'>16. Comments :</label></td>
  </tr>
  </table>
  <table class='classTable'>
  <tr height='40px' class='classRow' >
  <td width='400'><label id='idgetcommentlbl' class='classLabelResult'>".$comments."</label></td>
  </tr>
</table>
<br />
</div>
</div>
";

echo $pageBody;

$pageFooterStarts ="
<div id=bottomBar align='center'>
<input type='button' name='btnUpdate' id='btnUpdate' value='Update' class='classButton' onclick = 'redirect();'>
<input type='button' name='btndelete' id='btndelete' value='Delete' class='classButton' onclick = 'confirmDelete(\"dbt_delete.php?id=".$id."\");'>
<input type='button' name='btnShowfull' id='btnShowfull' value='Show All Results' class='classButton' onclick = 'Show();'>
<input type='button' value='Go To Dashboard' class='classButton' onclick=\"window.location.href='dashboard.php';\" >
<input type='button' id='go_Back' value='Go Back' class='classButton' onClick='GoBack()'>
<input type='button' id='Print' value='Print'  class='classButton' onClick=\"PrintContent('containerDiv','DBT-$tb_rvs_visit_sTextName-$tb_rvs_visit_dTextEntryDate');\">
</div>
</form>
 </div>
        <div id='footer' align=center>";
echo $pageFooterStarts;

include_once($path_to_root.'cm_footer.php');

$pageFooterEnds = "</div>
 </div>
        <div id=container style='display:none;'></div>
</div>
                </center>
                </body></html>";

echo $pageFooterEnds;

?>