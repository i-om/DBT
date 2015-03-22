<?php

    include_once("cm_chk.php");
    $path_to_root = "";
    $top_title = "Dashboard";
     include_once("dbt_addddl.php");
?>
<meta http-equiv='pragma' content='no-cache' />
  <script type='text/javascript' src='js/jquery/jquery-1.3.2.js'></script>
	<script type='text/javascript' src='js/jquery/ui/ui.core.js'></script>
   <link type='text/css' href='js/jquery/themes/jquery-ui-1.7.2.custom.css' rel='stylesheet' />
   <script type='text/javascript' src='js/jquery/ui/ui.datepicker.js'></script>


    <link type='text/css' href='js/jquery/themes/ui.all.css' rel='stylesheet' />
	<script type='text/javascript' src='js/jquery/ui/ui.draggable.js'></script>
	<script type='text/javascript' src='js/jquery/ui/ui.resizable.js'></script>
	<script type='text/javascript' src='js/jquery/ui/ui.dialog.js'></script>
	<script type='text/javascript' src='js/jquery/ui/effects.core.js'></script>
	<script type='text/javascript' src='js/jquery/ui/effects.highlight.js'></script>
	<script type='text/javascript' src='js/jquery/external/bgiframe/jquery.bgiframe.js'></script>
    <link type='text/css' href='js/jquery/themes/jquery-ui-1.7.2.custom.css' rel='stylesheet' />



    <script type='text/javascript' src='js/jquery/ui/effects.blind.js'></script>
    <script type='text/javascript' src='js/p91_scoring_kuppuswamy.js'></script>

    <script type='text/javascript'>

      $(function() {

      		$('#dTextEntryDate').datepicker({
      			changeMonth: true,
			dateFormat: 'dd-mm-yy',
		        changeYear: true



      		});

		$('#dTextBiteDate').datepicker({
			changeMonth: true,
			dateFormat: 'dd-mm-yy',
			changeYear: true
		})

      	});

function fnChangeSelectionDetailsBiteAnimal()
{

    if(document.getElementById('sDetailsOfAnimalBiteAnimal').value == 'Other' )
     {
         document.getElementById('spanDetailsOtherAnimal').style.visibility = 'visible';
     }
     else
     {
         document.getElementById('spanDetailsOtherAnimal').style.visibility = 'hidden';
     }
}

function fnIgRcvd()
{


}


function calculateTotalCostPerBite()
{

    var iCostTravel = 0;
    var iCostMedicinesVaccines = 0;
    var iCostMedicinesSera = 0;
    var iCostMedicinesLocalTreatment = 0;
    var iCostLossInWages = 0;

    iCostTravel = parseInt(document.getElementById('sTextCostTravel').value);
    iCostMedicinesVaccines = parseInt(document.getElementById('sTextCostMedVacc').value);
    iCostMedicinesSera = parseInt(document.getElementById('sTextCostMedSera').value);
    iCostMedicinesLocalTreatment = parseInt(document.getElementById('sTextCostMedLocal').value);
    iCostLossInWages = parseInt(document.getElementById('sTextCostLoss').value);

    document.getElementById('sTextCostTotal').value = iCostTravel + iCostMedicinesVaccines + iCostMedicinesSera + iCostMedicinesLocalTreatment + iCostLossInWages;

}

    function traditional (dis)
{
  var split_traditional=dis.id.split("idismentionedddl_");
if(document.getElementById(dis.id).value=='Yes')
{
  alert(split_traditional[1]);
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
   var loop_no = split_part[1].split("_");
   document.getElementById('idpartdiv_'+split_part[1]).innerHTML="<input type='text' name='partddl_"+loop_no[0]+"[]' id='idpartddl1_"+split_part[1]+"' class='classTextBox' />";
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

function cancel(dis)
{
  if($('#'+dis+' > tr').length > 1)
  $('#'+dis+' > tr:last-child').remove();
}


function cancelplant(dis)

{
  addplant--;
   var split_cancel=dis.id.split("iddelplantbtn_");

   document.getElementById('idaddplant_'+split_cancel[1]).style.display='none';
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

   <style type='text/css'>
		body { font-size: 100%; }
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

<?php
    if(isset($_GET['open']))
        $open = $_GET['open'];

//include_once('left_col.php');
include_once('js/validations.js');


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
       //print_r($part);exit;
$sBioname=$data[20];
$aBioname=explode("%$",$sBioname);

$countbioname=count($aBioname);
$bioname = array();
for($b=0; $b<$countbioname; $b++)
{
  $bioname[]=explode("#*",$aBioname[$b]);

}
//   print_r($bioname);exit;
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

echo $sTradional=$data[14];
$aTradional=explode("%$",$sTradional);

echo $sMention=$data[15];
$aMention=explode("%$",$sMention);

echo $sIfyesment=$data[16];
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
$sFinish=explode("%$",$sFinish);

$sPlantwiseresult=$data[51];
$aPlantwiseresult=explode("%$",$sPlantwiseresult);

$sMentionayur=$data[52];
$aMentionayur=explode("%$",$sMentionayur);

$sRefrence=$data[53];
$aRefrence=explode("%$",$sRefrence);

$pageHeaderStarts = "<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Strict//EN'
    'http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd'>

<html xmlns='http://www.w3.org/1999/xhtml'>

<head>
  <title>Medicinal and Aromamatic Plants Database</title>
  <link rel='stylesheet' type='text/css' href='css/rvs_css.css'></link>
   <link rel='stylesheet' type='text/css' href='css/stylesheetCommon.css' />
  <script language='javascript' src='js/validatations.js'></script>

 ";
 echo   $pageHeaderStarts;
 include_once($path_to_root.'cm_top.php');


$pageHeaderEnds ="
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
</style>";


echo $pageHeaderEnds;

$pageBodyStarts = "<body>

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
<form name='frmRabiesVaccineAdd' id='frmRabiesVaccineAdd' class='classForm' action='emulator/em_dbt_update.php' method='Post'>
<input type='hidden' name='idinsert' value='".$id."'/>
<div id='containerDiv'><div id='head1'><div id='headtitle1'>
<table border='0'>
<tr>
<td valign='middle'>
<span class='classPrintTitle'> Medicinal and Aromamatic Plants Database  - Update Plant details : </span>
</td>
</tr>
</table>
</div>
</div>

<div id='containerData'>
<br />
<div>
<table class='classTable'>
<tr>
</tr>
  <tr height='40px' class='classRow'>
    <td width='300'><label name='dbtnolbl' id='iddbtnolbl' class='classLabel'>1. DBT Sanction No. :</label></td>
    <td width='200'><input type='text' name='dbtno' id='iddbtnotxt' class='classTextBox' value='".$sanction."' /></td>
    <td width='200'></td>
  </tr>
  <tr height='40px' class='classRow'>
    <td width='300'><label name='dateofinitiationlbl' id='iddateofinitiationlbl' class='classLabel'>2. Date of Initiation :</label></td>
    <td width='200'><input type='text' name='dateofinitiationtxt' id='iddateofinitiaitontxt' class='classTextBox' value='".$date."' /></td>
    <td width='200'></td>
  </tr>
  </table>
  <table class='classTable'>
  <thead>
    <tr height='40px' class='classRow'>
      <td width='200'><label name='investigatorlbl' id='idinvestigatorlbl' class='classLabel'>3a. Investigator(s) :</label></td>
      <td width='200'><label name='placeofworklbl' id='idplaceofworklbl' class='classLabel'>3b. Places of work :</label></td>
       <td width='200'><label name='specialitylbl' id='idspecialitylbl' class='classLabel'>3c. Speciality of Investigator :</label></td>
    </tr>
    </thead>
<tbody id='idinvestigatortbody'>";
   for($ii = 0; $ii < count($aInvestigator); $ii++)
   {
    $pageBody.="<tr height='40px' class='classRow'>
      <td width='200'><input type='text' name='investigatortxt[]' id='idinvestigatortxt1' class='classTextBox' value='".$aInvestigator[$ii]."' /></td>
      <td width='200'><input type='text' name='placeofworktxt[]' id='idplaceofworktxt1' class='classTextBox' value='".$aPlace[$ii]."' /></td>
      <td width='200'><textarea name='specialitytxt[]' id='idspecialitytxt1' class='classTextBox' >".$aSpeciality[$ii]."</textarea></td>
      <td><img src='images/cancel.png' onclick='cancel(\"idinvestigatortbody\");' /></td>
    </tr>";
    }

    $pageBody.="</tbody>
    </table>
    <input type='button' name='addinvestigatorbtn' id='idaddinvestigatorbtn' class='classButton' value='Add another' />
    <input type='hidden' name='investigatorhidden' id='idinvestigatorhidden' value='".count($aInvestigator)."' />
    <table class='classTable'>
    <tr height='40px' class='classRow'>
      <td width='400'><label name='capacitybuildinglbl' id='idcapacitybuildinglbl' class='classLabel'>4. Capacity Building(M. Sc. / Ph.D. produced) :</label></td>
      <td width='200'><div id='idcapacityddldiv'>
  ";

  if($capacity == 'Yes' || $capacity == 'No' || $capacity == 'Not Given')
  {
    $pageBody.= "<select name='capacitybuildingddl' id='idcapacitybuildingddl' class='classSelect' onchange='capacity();'>
  <option value=''>Select</option>";
  if($capacity == 'Yes')
   {
      $pageBody.= "<option value='Yes' selected='selected'>Yes</option>";
      $pageBody.= "<option value='No' >No</option>";
      $pageBody.= "<option value='NotGiven'>Not Given</option>";
      }
  elseif($capacity == 'No')
  {
        $pageBody.= "<option value='Yes' >Yes</option>";
      $pageBody.= "<option value='No' selected='selected'>No</option>";
       $pageBody.= "<option value='NotGiven'>Not Given</option>";
  }
  elseif($capacity == 'Not Given')
  {
        $pageBody.= "<option value='Yes' >Yes</option>";
      $pageBody.= "<option value='No'>No</option>";
       $pageBody.= "<option value='NotGiven' selected='selected'>Not Given</option>";
  }
  $pageBody.= "</select>";
  }
  else
  {
        $pageBody.="<input type='text' name='patentfiledddl' id='idpatentfiledddl' class='classTextBox' value='".$capacity."' />" ;

  }
  $pageBody.="</div></td>
      <td width='200'></td>
    </tr>
    <tr height='40px' class='classRow'>
      <td width='400'><label name='patentfiledlbl' id='idpatentfiledlbl' class='classLabel'>5. Patent Filed :</label></td>
      <td width='200'><div id='idpaitentddldiv'>";
if($patent == 'Yes' || $patent == 'No' || $patent == 'Not Given')
{
  $pageBody.="<select name='patentfiledddl' id='idpatentfiledddl' class='classSelect' onchange='paitent();'>
<option value=''>Select</option>";
if($patent == 'Yes')
{
  $pageBody.="<option value='Yes' selected='selected'>Yes</option>";
  $pageBody.= "<option value='No' >No</option>";
  $pageBody.= "<option value='NotGiven'>Not Given</option>";
  }

elseif ($patent == 'No')
{
  $pageBody.="<option value='Yes' >Yes</option>";
  $pageBody.= "<option value='No' selected='selected'>No</option>";
  $pageBody.= "<option value='NotGiven'>Not Given</option>";
}
elseif ($patent == 'Not Given')
{
  $pageBody.="<option value='Yes' >Yes</option>";
  $pageBody.= "<option value='No' >No</option>";
  $pageBody.= "<option value='NotGiven' selected='selected>Not Given</option>";
}
    $pageBody.="</select>";
}
else
{
  $pageBody.="<input type='text' name='patentfiledddl' id='idpatentfiledddl' class='classTextBox' value='".$patent."'/>";
}
$pageBody.="</div></td>
      <td width='200'></td>
    </tr>
    <tr height='40px' class='classRow'>
      <td width='400'><label name='publicationlbl' id='idpublicationlbl' class='classLabel'>6. Publication :</label></td>
      <td width='200'><div id='idpublicationdiv' >";
      if($publication == 'Yes' || $publication == 'No' || $publication == 'Not Given')
      {
        $pageBody.="<select name='publicationddl' id='idpublicationddl' class='classSelect' onchange='publication();'>
      <option value=''>Select</option>";
       if($publication == 'Yes')
       {
  $pageBody.="<option value='Yes' selected='selected'>Yes</option>";
  $pageBody.= "<option value='No' >No</option>";
  $pageBody.= "<option value='NotGiven'>Not Given</option>";
}
 elseif ($patent == 'No')
 {
  $pageBody.="<option value='Yes' >Yes</option>";
  $pageBody.= "<option value='No' selected='selected'>No</option>";
  $pageBody.= "<option value='NotGiven'>Not Given</option>";
  }
  elseif ($patent == 'Not Given')
{
  $pageBody.="<option value='Yes' >Yes</option>";
  $pageBody.= "<option value='No' >No</option>";
  $pageBody.= "<option value='NotGiven' selected='selected>Not Given</option>";
}
$pageBody.="</select>";
}
else
{
    $pageBody.="<input type='text' name='publicationddl' id='idpublicationddl' value='".$publication."' class='classTextBox' />";
}
  $pageBody.="</div>
      </td>
      <td width='200'></td>
    </tr>
    </table>
    <table>
    <tr height='40px' class='classRow'>
      <td width='400'><label name='titlelbl' id='idtitlelbl' class='classLabel'>7. Title of project :</label></td>
      <td ><input type='text' id='idtitletxt' class='classTitle' name='idtitletxt' value='".$title."' /></td>
      <td width='100'></td>
    </tr>
    </table>
    <table class='classTable'>
    <tbody id='idplanttbody'>";
     for($ii = 0; $ii < count($aPlant); $ii++)
   {
      $pageBody.="<tr height='40px' class='classRow'>
            <td width='400'><label name='plantlbl[]' id='idplantlbl1' class='classLabel'>8. Plant name on which work has been done :</label></td>
            <td width='200'><input type='text' name='planttxt[]' id='idplanttxt1' class='classTextBox' style='font-style:italic' value='".$aPlant[$ii]."' /></td>
            <td width='200'><img src='images/cancel.png' onclick='cancel(\"idplanttbody\");' /></td>
        </tr>";
          }
    $pageBody.="</tbody>
    </table>
    <input type='button' id='idplantbtn' value='Add another' class='classButton' />
    <input type='hidden' name='planthidden' id='idplanthidden' value='".count($aPlant)."' />
    <table class='classTable'>
    <tr height='40px' class='classRow'>
    <td width='400'><label name='arealbl' id='idarealbl' class='classLabel'>9. Area of research :</label></td>
    <td width='200'><select name='areaddl' id='idareaddl' class='classSelect' onchange='result();'>
<option value=''>Select</option>";

$xData = retrieve_data_xml('area');
foreach($xData as $vOption)
{
  if($vOption == @$area)
    $pageBody .= "<option value='".$vOption."' selected='selected'>".$vOption."</option>";
  else
    $pageBody .= "<option value='".$vOption."'>".$vOption."</option>";
}

$pageBody.="
<option value='Others'>Others</option>
</select></div>
</td>
<td width='200'></td>
    </tr>
  </table>
<!-- end of admin block -->
</div>
 <br />
 <br />
<!-- start of result block -->";
  if($area=='Drug Development')
 {
$pageBody.="<div id='idresultdiv'>";
 }
 else
 {
$pageBody.="<div id='idresultdiv' style='display:none'>";
 }
$pageBody.="<hr /><hr /><h1 align='center'><b>Results</b></h1>
<table class='classTable'>
  <tr height='40px' class='classRow'>
    <td width='300'><label name='therapeuticlbl' id='idtherapeuticlbl' class='classLabel'>1. Therapeutic area of research :</label></td>
    <td width='200'><!--<select name='therapeuticddl' id='idterapeuticddl' class='classSelect'>
<option value=''>Select</option>-->
<input type='text' name='therapeuticddl' id='idterapeuticddl' class='classTextBox' value='".$therapuretic."' />";

/*$xData = retrieve_data_xml('theraputic');
foreach($xData as $vOption)
{
  if($vOption == @$therapuretic)
    $pageBody .= "<option value='".$vOption."' selected='selected'>".$vOption."</option>";
  else
    $pageBody .= "<option value='".$vOption."'>".$vOption."</option>";
}*/

$pageBody .="<!--<option value='Add other'>Add other</option>
</select></div>-->
</td>
    <td width='200'></td>
  </tr>
  </table>";
  //echo $counttable;exit;
   for($ii=0; $ii<50; $ii++)
 {
   $iii= $ii + 1;
   if($iii > $counttable)
    {
    $pageBody.="<div id='idaddplant_{$iii}' style='display:none'>";
   }
   else
  $pageBody .="<div id='idaddplant_{$iii}'>";

  $pageBody .="<hr />
  <table id='idaddplanttbl' name='addplant' class='classTable' >
  <tr height='40px' class='classRow' >
  <th colspan='4' class='classTable' align='left' >Plants on which work done</th>
  </tr>
  <tr height='40px' class='classRow' >
    <td width='300' class='classData'><label name='latinlbl[]' id='idlatinlbl_{$iii}' class='classLabel'>2a. Latin name :</label></td>
    <td width='200'><input type='text' name='latintxt[]' id='idlatintxt_{$iii}' class='classTextBox' style='font-style:italic' value='".$aLatin[$ii]."'/></td>
    <td width='200'></td>
    </tr>
  <tr height='40px' class='classRow' >
    <td width='300'><label name='vernacularlbl[]' id='idvernacularlbl_{$iii}' class='classLabel'>2b. Vernacular name :</label></td>
    <td width='200'><select name='vernacularddl[]' id='idvernacularddl_{$iii}' class='classSelect' onchange='vernacular(this);'>
<!--<option value=''>Select</option>-->";
if($aVernacular[$ii] == 'Hindi')
{
$pageBody.="<option value='Hindi' selected='selected'>Hindi</option>";
$pageBody.="<option value='English' >English</option>";
$pageBody.="<option value='Sanskrit' >Sanskrit</option>";
$pageBody.= "<option value='Other'>Other</option>";
}
else if($aVernacular[$ii] == 'English')
{
$pageBody.="<option value='Hindi' >Hindi</option>";
$pageBody.="<option value='English' selected='selected'>English</option>";
$pageBody.="<option value='Sanskrit' >Sanskrit</option>";
$pageBody.= "<option value='Other'>Other</option>";
}
else if($aVernacular[$ii] == 'Sanskrit')
{
$pageBody.="<option value='Hindi' >Hindi</option>";
$pageBody.="<option value='English' >English</option>";
$pageBody.="<option value='Sanskrit' selected='selected'>Sanskrit</option>";
$pageBody.= "<option value='Other'>Other</option>";
}
else if($aVernacular[$ii] == 'Other')
{
$pageBody.="<option value='Hindi' >Hindi</option>";
$pageBody.="<option value='English' >English</option>";
$pageBody.="<option value='Sanskrit' >Sanskrit</option>";
$pageBody.= "<option value='Other' selected='selected'>Other</option>";
}
$pageBody.="</select>
</td>
<td width='200'><input type='text' id='idvernaculartxt_{$iii}' class='classTextBox' name='vernaculartxt[]' value='".$aVernacular_name[$ii]."' />
</td>
  </tr>
  <tr height='40px' class='classRow' >
    <td width='200'><label name='traditionallbl[]' id='idtardionalbl_{$iii}' class='classLabel'>2c. Traditional Medicine name(In Report):</label></td>
    <td width='200'><select name='traditionalddl[]' id='idtradionalddl_{$iii}' class='classSelect' >
<option value=''>Select</option>";
if($aTradional[$ii] == 'Yes')
{
$pageBody.="<option value='Yes' selected='selected'>Yes</option>";
$pageBody.="<option value='No' >No</option>";
$pageBody.="<option value='Not Given' >Not Given</option>";
}
else if($aTradional[$ii] == 'No')
{
  $pageBody.="<option value='Yes' >Yes</option>";
$pageBody.="<option value='No' selected='selected'>No</option>";
$pageBody.="<option value='Not Given' >Not Given</option>";
}
else if($aTradional[$ii] == 'Not Given')
{
$pageBody.="<option value='Yes' >Yes</option>";
$pageBody.="<option value='No' >No</option>";
$pageBody.="<option value='Not Given' selected='selected'>Not Given</option>";
}
$pageBody.=" </select>
</td>
<td width='200'><input type='text' name='refrencetxt[]' id='idrefrencetxt_{$iii}' class='classTextBox' value='".$aRefrence[$ii]."'/></td>
</tr>
<tr>
    <td width='200'><label name='ismentionedlbl[]' id=idismentionedlbl_{$iii}' class='classLabel'>2d. Is it mentioned in Traditional medicine? :</label></td>
    <td width='200'><select name='ismentionedddl[]' id='idismentionedddl_{$iii}' class='classSelect' onchange='traditional(this);'>
<option value=''>Select</option>";
if($aMention[$ii] == 'Yes')
{
$pageBody.="<option value='Yes' selected='selected'>Yes</option>";
$pageBody.="<option value='No' >No</option>";
$pageBody.="<option value='Not Given' >Not Given</option>";
}
else if($aMention[$ii] == 'No')
{
$pageBody.="<option value='Yes' >Yes</option>";
$pageBody.="<option value'No' selected='selected'>No</option>";
$pageBody.="<option value='Not Given' >Not Given</option>";
}
else if($aMention[$ii] == 'Not Given')
{
$pageBody.="<option value='Yes' >Yes</option>";
$pageBody.="<option value'No' >No</option>";
$pageBody.="<option value='Not Given' selected='selected'>Not Given</option>";
}
$pageBody.="</select>
</td>
    <td width='200'>";
    $pageBody1 = "";
    if($aMention[$ii] == 'Yes')
    {
        $pageBody1.="<div id='idifyesdiv_{$iii}'><select name='ifyesddl[]' id='idifyesddl_{$iii}' class='classSelect'  onchange='mention(this);'>";
$pageBody1 .="<option value=''>Select</option>";

$xData = retrieve_data_xml('mention');
foreach($xData as $vOption)
{
  if($vOption == @$aIfyesment[$ii])
    $pageBody1 .= "<option value='".$vOption."' selected='selected'>".$vOption."</option>";
  else
    $pageBody1 .= "<option value='".$vOption."'>".$vOption."</option>";
}
$pageBody1 .="<option value='Others'>Others</option>
<option value='Not Given'>Not Given</option>
</select> </div>";
    }


$pageBody .=$pageBody1."
</td>
  </tr>
  <tr height='40px' class='classRow' >
    <td width='200'><label name='ismentionayurlbl[]' id='idismentionayur_{$iii}' class='classLabel'>2e.Is it mentioned in Ayurvedic Pharmacopoeia of India? :</label></td>
    <td width='200'><select name='ismentionayurddl[]' id='idismentionayur_{$iii}' class='classSelect' >
<option value=''>Select</option>";
if($aMentionayur[$ii] == 'Yes')
{
$pageBody.="<option value='Yes' selected='selected'>Yes</option>";
$pageBody.="<option value='No' >No</option>";
$pageBody.="<option value='Not Given' >Not Given</option>";
}
else if($aMentionayur[$ii] == 'No')
{
  $pageBody.="<option value='Yes' >Yes</option>";
$pageBody.="<option value='No' selected='selected'>No</option>";
$pageBody.="<option value='Not Given' >Not Given</option>";
}
else if($aMentionayur[$ii] == 'Not Given')
{
$pageBody.="<option value='Yes' >Yes</option>";
$pageBody.="<option value='No' >No</option>";
$pageBody.="<option value='Not Given' selected='selected'>Not Given</option>";
}
$pageBody.=" </select>
</td>
</tr>
  <tr height='40px' class='classRow' >
    <td width='200'><label name='plantselectionlbl[]' id='idplantselectionlbl_{$iii}' class='classLabel'>3. Basis for selection of plant :</label></td>
    <td width='200'><div id='idplantselectiondiv_{$iii}'><select name='plantselectionddl[]' id='idplantselectionddl_{$iii}' class='classSelect' onchange='selection(this);'>
<option value=''>Select</option>";
$xData = retrieve_data_xml('basis');
foreach($xData as $vOption)
{
  if($vOption == @$aBasis[$ii])
    $pageBody .= "<option value='".$vOption."' selected='selected'>".$vOption."</option>";
  else
    $pageBody .= "<option value='".$vOption."'>".$vOption."</option>";
}

$pageBody .="<option value='Others'>Others</option>
<option value='Not Given'>Not Given</option>
</select></div>
</td>
    <td width='200'></td>
  </tr>
  </table>
   <table class='classTable'>
  <tbody id='idparttbody_{$iii}'>";
    $partFlag =0;
  for($aa = 0; $aa < count($part[$ii]); $aa++)
  {
    $partFlag = 1;
  $pageBody.=" <tr height='40px' class='classRow' >
    <td width='300'><label name='partlbl' id='idpartlbl_{$iii}_1' class='classLabel'>4. Part of plant used :</label></td>
    <td width='200'><div id='idpartdiv_{$iii}_1'><select name='partddl_{$iii}[]' id='idpartddl1_{$iii}_1' class='classSelect' onchange='part_select(this);'>
<option value=''>Select</option>";

$xData = retrieve_data_xml('part');
foreach($xData as $vOption)
{
  if($vOption == @$part[$ii][$aa])
    $pageBody .= "<option value='".$vOption."' selected='selected'>".$vOption."</option>";
  else
    $pageBody .= "<option value='".$vOption."'>".$vOption."</option>";
}

$pageBody .="<option value='Others'>Others</option>
<option value='Not Given'>Not Given</option>
</select></div>
</td>
 <td width='200'><img src='images/cancel.png' onclick='cancel(\"idparttbody_{$iii}\");' /></td>
  </tr>";
  }
  if($partFlag == 0)
  {
    $pageBody.=" <tr height='40px' class='classRow' >
    <td width='300'><label name='partlbl' id='idpartlbl_{$iii}_1' class='classLabel'>4. Part of plant used :</label></td>
    <td width='200'><div id='idpartdiv_{$iii}_1'><select name='partddl_{$iii}[]' id='idpartddl1_{$iii}_1' class='classSelect' onchange='part_select(this);'>
<option value=''>Select</option>";

$xData = retrieve_data_xml('part');
foreach($xData as $vOption)
{
    $pageBody .= "<option value='".$vOption."'>".$vOption."</option>";
}

$pageBody .="<option value='Others'>Others</option>
<option value='Not Given'>Not Given</option>
</select></div>
</td>
 <td width='200'></td>
  </tr>";
  }
  $pageBody.="</tbody>
  </table>
 <input type='button' name='partbtn' id='idpartbtn_{$iii}' value='Add another' class='classButton classPart' />";
 if($partFlag==0)
 {
  $pageBody.="<input type='hidden' name='parthidden_{$iii}[]' id='idparthidden_{$iii}' value='1' />";
  }
  else
  {
  $pageBody.="<input type='hidden' name='parthidden_{$iii}[]' id='idparthidden_{$iii}' value='".count($part)."' />";
  }

  $pageBody.="<table class='classTable'>
  <th colspan='4' class='classTable' align='left'>Active constituents of biomarkers</th>
  <tbody id='idbiomakertbody_{$iii}'>";
            $bioFlag = 0;
  for($aa = 0; $aa < count($bioname[$ii]); $aa++)
  {         $bioFlag=1;

    $pageBody.="    <tr height='40px' class='classRow' >
    <td width='300'><label name='cnamelbl_{$iii}[]' id='idcnamelbl_{$iii}_1' class='classLabel'>Name :</label></td>
    <td width='200'><input type='text' name='constituentsnametxt_{$iii}[]' id='idconstituentsnametxt1_{$iii}_1' class='classTextBox' value='".$bioname[$ii][$aa]."' /></td>
    <td><img src='images/cancel.png' onclick='cancel(\"idbiomakertbody_{$iii}\");' /></td>
    </tr>
    <tr>
   <td width='300'><label name='constituentsdesclbl_{$iii}[]' id='idconstituentsdesclbl_{$iii}_1' class='classLabel'>Description :</label></td>
    <td ><textarea name='constituentsdesctxtarea_{$iii}[]' id='idconstituentsdesctxtarea1_{$iii}_1' class='classTA' value='".$biodesc[$ii][$aa]."'></textarea></td>
  </tr>";
  }
  if($bioFlag==0)
  {
       $pageBody.="    <tr height='40px' class='classRow' >
    <td width='300'><label name='cnamelbl_{$iii}[]' id='idcnamelbl_{$iii}_1' class='classLabel'>Name :</label></td>
    <td width='200'><input type='text' name='constituentsnametxt_{$iii}[]' id='idconstituentsnametxt1_{$iii}_1' class='classTextBox' value='' /></td>
    </tr>
    <tr>
   <td width='300'><label name='constituentsdesclbl_{$iii}[]' id='idconstituentsdesclbl_{$iii}_1' class='classLabel'>Description :</label></td>
    <td ><textarea name='constituentsdesctxtarea_{$iii}[]' id='idconstituentsdesctxtarea1_{$iii}_1' class='classTA' value=''></textarea></td>

  </tr>";
  }
  $pageBody.=" </tbody>
  </table>
  <input type='button' id='idaddbiomakerbtn_{$iii}' value='Add another' class='classButton classbiomarker' />";
  if($bioFlag==0)
 {
  $pageBody.="<input type='hidden' name='addbiomakerhidden_{$iii}[]' id='idaddbiomakerhidden_{$iii}' value='1' />";
  }
  else
  {
  $pageBody.="<input type='hidden' name='addbiomakerhidden_{$iii}[]' id='idaddbiomakerhidden_{$iii}' value='".count($bioname[$ii])."' />";
  }

  $pageBody.="<table class='classTable'>
  <tr height='40px' class='classRow' >
    <td width='300'><label name='chemistrylbl' id='idchemistrylbl_{$iii}' class='classLabel'>5. Chemistry manufacturing control :</label></td>
    <td width='200'><select name='chemistryddl' id='idchemistryddl_{$iii}' class='classSelect' >
<option value=''>Select</option>";
if($aChemistry[$ii] == 'Yes')
{
$pageBody.="<option value='Yes' selected='selected'>Yes</option>";
$pageBody.="<option value='No' >No</option>";
$pageBody.="<option value='NA' >NA</option>";
}
elseif ($aChemistry[$ii] == 'No')
{
$pageBody.="<option value='Yes' >Yes</option>";
$pageBody.="<option value='No' selected='selected'>No</option>";
$pageBody.="<option value='NA' >NA</option>";
}
else
{
$pageBody.="<option value='Yes' >Yes</option>";
$pageBody.="<option value='No' >No</option>";
$pageBody.="<option value='NA' selected='selected'>NA</option>";
}
$pageBody.="</select>
</td>
<td width='200'></td>
</tr>
<tr>
    <td width='300'><label name='rawlbl' id='idrawlbl_{$iii}' class='classLabel'>a. Raw material :</label></td>
    <td width='200'><div id='idrawdiv_{$iii}'>";

    $rawsplitid=explode("#",$split_raw[1]);

if($aRaw[$ii] == 'Yes' || $aRaw[$ii] == 'No' ||  $aRaw[$ii] == 'NA' || $aRaw[$ii] == 'Not Given')
{
  $pageBody .="<select name='rawddl[]' id='idrawddl_{$iii}' class='classSelect' onchange='raw(this);'>
<option value=''>Select</option>";
if($aRaw[$ii] == 'Yes')
{
$pageBody.="<option value='Yes' selected='selected'>Yes</option>";
$pageBody.="<option value='No' >No</option>";
$pageBody.="<option value='NA' >NA</option>";
$pageBody.="<option value='Not Given' >Not Given</option>";
}
else if($aRaw[$ii] == 'No')
{
$pageBody.="<option value='Yes' >Yes</option>";
$pageBody.="<option value='No' selected='selected'>No</option>";
$pageBody.="<option value='NA' >NA</option>";
$pageBody.="<option value='Not Given' >Not Given</option>";
}
else if($aRaw[$ii] == 'NA')
{
$pageBody.="<option value='Yes' >Yes</option>";
$pageBody.="<option value='No' >No</option>";
$pageBody.="<option value='NA' selected='selected'>NA</option>";
$pageBody.="<option value='Not Given' >Not Given</option>";
}
else if($aRaw[$ii] == 'Not Given')
{
$pageBody.="<option value='Yes' >Yes</option>";
$pageBody.="<option value='No' >No</option>";
$pageBody.="<option value='NA' >NA</option>";
$pageBody.="<option value='Not Given' selected='selected'>Not Given</option>";
}
$pageBody.="</select>";
}
else
{
  $pageBody.="<input type='text' name='rawddl[]' id='idrawddl_".$rawsplitid."'  value='".$aRaw[$ii]."'  class='classTextBox' />";
}

$pageBody.="</div>
</td>
<td width='200'></td>
  </tr>
  <tr height='40px' class='classRow' >
    <td width='300'><label name='druglbl' id='iddruglbl_{$iii}' class='classLabel'>b. Drug Product :</label></td>
    <td width='200'><div id='iddrugdiv_{$iii}'>";

    $drugsplitid=explode("#",$split_drug[1]);

if($aDrug[$ii] == 'Yes' || $aDrug[$ii] == 'No' ||  $aDrug[$ii] == 'NA' || $aDrug[$ii] == 'Not Given')
{
  $pageBody.="<select name='drugddl[]' id='iddrugddl_{$iii}' class='classSelect' onchange='drug(this);'>
<option value=''>Select</option>";

if($aDrug[$ii] == 'Yes')
{
$pageBody.="<option value='Yes' selected='selected'>Yes</option>";
$pageBody.="<option value='No' >No</option>";
$pageBody.="<option value='NA' >NA</option>";
$pageBody.="<option value='Not Given' >Not Given</option>";
}
else if($aDrug[$ii] == 'No')
{
$pageBody.="<option value='Yes' >Yes</option>";
$pageBody.="<option value='No' selected='selected'>No</option>";
$pageBody.="<option value='NA' >NA</option>";
$pageBody.="<option value='Not Given' >Not Given</option>";
}
else if($aDrug[$ii] == 'Not Given')
{
$pageBody.="<option value='Yes' >Yes</option>";
$pageBody.="<option value='No' >No</option>";
$pageBody.="<option value='NA' >NA</option>";
$pageBody.="<option value='Not Given' selected='selected'>Not Given</option>";
}
$pageBody.="</select>";
}
else
{
$pageBody.="<input type='text' name='drugddl[]' id='iddrugddl_".$drugsplitid."' value='".$aDrug[$ii]."' class='classTextBox' />";
}
$pageBody.="</div>
</td>
<td width='200'></td>
</tr>
<tr>
    <td width='300'><label name='finishedlbl' id='idfinishedlbl_{$iii}' class='classLabel'>d. Finished Product :</label></td>
    <td width='200'><div id='idfinishdiv_{$iii}'>";

$finishsplitid=explode("#",$split_finish[1]);

 if($aFinish[$ii] == 'Yes' || $aFinish[$ii] == 'No' ||  $aFinish[$ii] == 'NA' || $aFinish[$ii] == 'Not Given')
 {
   $pageBody.="<select name='finisheddll[]' id='idfinishedddl_{$iii}' class='classSelect'  onchange='finish(this);'>
<option value=''>Select</option>";
if ($aFinish[$ii] == 'Yes')
{
$pageBody.="<option value='Yes' selected='selected'>Yes</option>";
$pageBody.="<option value='No' >No</option>";
$pageBody.="<option value='NA' >NA</option>";
$pageBody.="<option value='Not Given' >Not Given</option>";
}
else if($aFinish[$ii] == 'No')
{
$pageBody.="<option value='Yes' >Yes</option>";
$pageBody.="<option value='No' selected='selected'>No</option>";
$pageBody.="<option value='NA' >NA</option>";
$pageBody.="<option value='Not Given' >Not Given</option>";
}
else if($aFinish[$ii] == 'NA')
{
$pageBody.="<option value='Yes' >Yes</option>";
$pageBody.="<option value='No' >No</option>";
$pageBody.="<option value='NA' selected='selected'>NA</option>";
$pageBody.="<option value='Not Given' >Not Given</option>";
}
else if($aFinish[$ii] == 'Not Given')
{
$pageBody.="<option value='Yes' >Yes</option>";
$pageBody.="<option value='No' >No</option>";
$pageBody.="<option value='NA' selected='selected'>NA</option>";
$pageBody.="<option value='Not Given' selected='selected'>Not Given</option>";
}
$pageBody.="</select>";
}
else
{
  $pageBody.="<input type='text' name='finisheddll[]' id='idfinishedddl_".$finishsplitid."' value='".$aFinish[$ii]."' class='classTextBox' />";
}
$pageBody.="</div>
</td>
<td width='200'></td>
  </tr>
  </table>
 <table class='classTable'>
  <tbody id='idextracttbody_{$iii}'";
    $extFlag=0;
  for ($aa = 0; $aa < count($aExtract[$ii]); $aa++)
  {      $extFlag=1;
  $pageBody.="<tr height='40px' class='classRow' >
    <td width='300'><label name='extractlbl' id='idextractlbl_{$iii}_1' class='classLabel'>7. Type of extract(s) used :</label></td>
    <td width='200'>
    <select name='extract_{$iii}[]' id='idextractddl1_{$iii}_1' class='classSelect' onchange='ext(this);'>
<option value=''>Select</option>";
$xData = retrieve_data_xml('extract');
foreach($xData as $vOption)
{
  if($vOption == @$aExtract[$ii][$aa])
    $pageBody .= "<option value='".$vOption."' selected='selected'>".$vOption."</option>";
  else
    $pageBody .= "<option value='".$vOption."'>".$vOption."</option>";
}

$pageBody .="<option value='Other'>Other</option>
</select>
</td>
<td width='200'>";
if($aExtract[$ii][$aa] == 'Other')
$pageBody.="<textarea id='idextracttxt1' name='extract[]' class='classTextBox' >".$aExtracttxt[$ii][$aa]."</textarea>";
$pageBody.="</td><td><img src='images/cancel.png' onclick='cancel(\"idextracttbody_{$iii}\");' /></td>
  </tr>";
  }
  if($extFlag==0)
  {
     $pageBody.="<tr height='40px' class='classRow' >
    <td width='300'><label name='extractlbl' id='idextractlbl_{$iii}_1' class='classLabel'>7. Type of extract(s) used :</label></td>
    <td width='200'>
    <select name='extract_{$iii}[]' id='idextractddl1_{$iii}_1' class='classSelect' onchange='ext(this);'>
<option value=''>Select</option>";
$xData = retrieve_data_xml('extract');
foreach($xData as $vOption)
{

    $pageBody .= "<option value='".$vOption."'>".$vOption."</option>";
}

$pageBody .="<option value='Other'>Other</option>
</select>
</td>
<td width='200'>";

$pageBody.="</td>
  </tr>";
    }
  $pageBody.="</tbody>
  </table>
  <input type='button' id='idaddextractbtn_{$iii}' value='Add another' class='classButton classextract' />
  ";
  if($extFlag==0)
 {
  $pageBody.="<input type='hidden' name='extracthidden_{$iii}[]' id='idaddextracthidden_{$iii}' value='1' />";
  }
  else
  {
  $pageBody.="<input type='hidden' name='extracthidden_{$iii}[]' id='idaddextracthidden_{$iii}' value='".count($aExtract[$ii])."' />";
  }

  $pageBody.="<table class='classTable'>
  <tr height='40px' class='classRow'>
  <td width='300'><label name='plantwiseresultlbl[]' id='idplantwiseresultlbl_{$iii}' class='classLabel'>Plantwise Result :</label></td>
  </tr>
  </table>
  <table>
  <tr>
  <td ><textarea name='plantwiseresulttxtarea[]' id='idplantwiseresulttxtarea_{$iii}' class='classTA'>".$aPlantwiseresult[$ii]."</textarea></td>
  </tr>
  </table>
  <hr />
  <input type='button' id='iddelplantbtn_{$ii}' class='classButton' value='Cancel Plant' style='float:right;' onclick='cancelplant(this);'/>
  </div>";
  }
$pageBody.="
<input type='button' id='idaddplantbtn' value='Add another plant' class='classButton'/>
            <input type='hidden' id='idaddplanthidden' name='addplanthidden' value='1' />";
  $pageBody .="<table class='classTable'>
  <tr height='40px' class='classRow'>
    <td width='300'><label name='typeofstudylbl' id='idtypeofstudylbl' class='classLabel'>8. Type of study :</label></td>
    <td width='200'><!--<select name='typeofstudyddl' id='idtypeofstudyddl' class='classSelect' onchange='vitro();'>
<option value=''>Select</option>-->
<input type='text' name='typeofstudyddl' id='idtypeofstudyddl' class='classTextBox' value='".$study."'/>";
/*if($study == 'In vitro')
{
$pageBody.="<option value='In vitro' selected='selected'>In vitro</option>";
$pageBody.="<option value='In vivo' >In vivo</option>";
$pageBody.="<option VALUE='clinical' >clinical</option>";
$pageBody.="<option value='Others' >Others</option>";
}
else if($study == 'In vivo')
{
$pageBody.="<option value='In vitro' >In vitro</option>";
$pageBody.="<option value='In vivo' selected='selected'>In vivo</option>";
$pageBody.="<option VALUE='clinical' >clinical</option>";
$pageBody.="<option value='Others' >Others</option>";
}
else if($study == 'clinical')
{
$pageBody.="<option value='In vitro' >In vitro</option>";
$pageBody.="<option value='In vivo' >In vivo</option>";
$pageBody.="<option VALUE='clinical' selected='selected'>clinical</option>";
$pageBody.="<option value='Others' >Others</option>";
}
else if($study == 'Others')
{
$pageBody.="<option value='In vitro' >In vitro</option>";
$pageBody.="<option value='In vivo' >In vivo</option>";
$pageBody.="<option VALUE='clinical' >clinical</option>";
$pageBody.="<option value='Others' selected='selected'>Others</option>";
} */
$pageBody.="<!--</select>-->
</td>
<td width='200'></td>
<tr>
    <td width='300'><label name='invitrolbl' id='idinvitrolbl' class='classLabel' >a. In vitro</label></td>
    <td width='200'><!--<select name='ifyesvitroddl' id='idifyesvitroddl' class='classSelect' 'style='display:none''>-->
    <input type='text' name='idifyesvitroddl' id='idifyesvitroddl' class='classTextBox' value='".$invitro."' />";
/*    if($study == 'In vitro')*/
/*    $pageBody.="<!--<select name='ifyesvitroddl' id='idifyesvitroddl' class='classSelect' >
<option value=''>Select</option>-->";*/
/*if($invitro == 'Model')
{
$pageBody.="<option value='Model' selected='selected'>Model</option>";
$pageBody.="<option value='Disease' >Disease</option>";
}
else if($invitro == 'Disease')
{
$pageBody.="<option value='Model' >Model</option>";
$pageBody.="<option value='Disease' selected='selected'>Disease</option>";
}*/
$pageBody.="<!--</select> -->
</td>
<td width='200'></td>
  </tr>
  <tr height='40px' class='classRow'>
    <td width='200'><label name='experimentallbl' id='idexperimentallbl' class='classLabel'>b. Experimental :</label></td>
    <td width='200'><!--<select name='experimentalddl' id='idexperimentalddl' class='classSelect'>
<option value=''>Select</option>-->";
/*if($expddl == 'In vitro')
{
$pageBody.="<option value='In vitro' selected='selected'>In vitro</option>";
$pageBody.="<option value='Chemical' >Chemical</option>";
}
else if($expddl == 'Chemical')
{
$pageBody.="<option value='In vitro' >In vitro</option>";
$pageBody.="<option value='Chemical' selected='selected'>Chemical</option>";
}*/
$pageBody.="<!--</select>-->
</td>
    </tr>
    <tr height='40px' class='classRow'><td ><textarea name='experimentaltxtarea' id='idexperimentaltxt' class='classTA' >".$exptxt."</textarea></td>
    <td width='200'></td>
  </tr>
  <tr height='40px' class='classRow'>
    <td width='200'><label name='clinicallbl' id='idclinicallbl' class='classLabel'>c. Clinical :</label></td>
    </tr>
    <tr height='40px' class='classRow'><td ><textarea name='clinicaltxtarea' id='idclinicaltxtarea' class='classTA' >".$txt."</textarea></td>
  </tr>
  </table>
  <table class='classTable'>
  <thead id='modelthead'>
  <tr height='40px' class='classRow'>
    <td width='450'><label name='modellbl' id='idmodellbl' class='classLabel'>9a. Model(s) (accuracy and novelty) :</label></td>
    <td width='200'><label name='appropriatelbl' id='idappropriatelbl' class='classLabel'>9b. Was it appropriate? :</label></td>
    <td width='200'><label name='novellbl' id='idnovellbl' class='classLabel'>9c. Was it Novel? :</label></td>
  </tr>
  </thead>
  </table>
  <table class='classTable'>
  <tbody id='idmodeltbody'>";
  for ($ii = 0; $ii < count($aModel); $ii++)
  {
    $pageBody.="<tr height='40px' class='classRow'>
     <td width='450'><textarea name='modeltxtarea[]' id='idmodeltxtarea1' class='classTA'>".$aModel[$ii]."</textarea></td>
    <td width='200'><select name='appropriateddl[]' id='idappropriateddl1' class='classSelect'>
<option value=''>Select</option>";
if($aAppropriate[$ii] == 'Yes')
{
$pageBody.="<option value='Yes' selected='selected'>Yes</option>";
 $pageBody.= "<option value='No' >No</option>";
}
 else if($aAppropriate[$ii] == 'No')
 {
$pageBody.="<option value='Yes' >Yes</option>";
 $pageBody.= "<option value='No' selected='selected'>No</option>";
}
$pageBody.="</select>
</td>
    <td width='200'><select name='novelddl[]' id='idnovelddl1' class='classSelect'>
<option value=''>Select</option>";
if($aNovel[$ii] == 'Yes')
{
$pageBody.="<option value='Yes' selected='selected'>Yes</option>";
 $pageBody.= "<option value='No' >No</option>";
 }
 else if($aNovel[$ii] == 'No')
 {
$pageBody.="<option value='Yes' >Yes</option>";
 $pageBody.= "<option value='No' selected='selected'>No</option>";
 }
$pageBody.="</select>
</td><td><img src='images/cancel.png' onclick='cancel(\"idmodeltbody\");' /></td>
  </tr>";
  }
$pageBody.="</tbody>
  </table>
  <input type='button' id='idaddmodelbtn' value='Add another' />
  <input type='hidden' name='idaddmodelhidden' id='idaddmodelhidden' value='".count($aModel)."' />
  <table class='classTable'>
  <tr height='40px' class='classRow'>
    <td width='300'><label name='otherlbl' id='idotherlbl' class='classLabel'>9d. Any Other :</label></td>
  </tr>
  </table>
  <table>
  <tr>
   <td width='200'><textarea name='othertxtarea' id='idothertxtarea' class='classTA'>".$other."</textarea></td>
  </tr>
  </table>
  <table>
  <tr height='40px' class='classRow'>
  <td width='300'><label name='trustlbl' id='idtrustlbl' class='classLabel'>10. Is it on AYUSH Trust area?</label></td>
  <td width='200'><select name='trustddl' id='idtrustddl' class='classSelect'>
<option value=''>Select</option>";
if($ayushddl == 'Yes')
{
$pageBody.="<option value='Yes' selected='selected'>Yes</option>";
 $pageBody.= "<option value='No' >No</option>";
}
else if($ayushddl == 'No')
{
$pageBody.="<option value='Yes' >Yes</option>";
 $pageBody.= "<option value='No' selected='selected'>No</option>";
}
$pageBody.="</select>
</td>
  <td width='200'><input type='text' name='trusttxt' id='idtrusttxt' class='classTextBox' value='".$ayushtxt."'/></td>
  </tr>
   <tr height='40px' class='classRow'>
  <td width='300'><label name='hypothesislbl' id='idhypothesislbl' class='classLabel'>11a. Hypothesis generating? :</label></td>
</tr>
</table>
<table>
<tr>
 <td width='200'><textarea name='hypothesistxtarea' id='idhypothesistxtarea' class='classTA'>".$hypothesis."</textarea></td>
  </tr>
  </table>
  <table>
  <tr height='40px' class='classRow'>
  <td width='300'><label name='confirmatorylbl' id='idconfirmatorylbl' class='classLabel'>11b. Confirmatory studies? :</label></td>
  </tr>
  </table>
  <table>
  <tr>
  <td width='200'><textarea name='confirmatorytxtarea' id='idconfirmatorytxtarea' class='classTA'>".$confirmatory."</textarea></td>
  </tr>
  </table>
  <table>
 <tr height='40px' class='classRow'>
  <td width='300'><label name='resultlbl' id='idresultlbl' class='classLabel'>11c. Results :</label></td>
  </tr>
  </table>
  <table>
  <tr>
  <td ><textarea name='resulttxtarea' id='idresulttxtarea' class='classTA'>".$results."</textarea></td>
  </tr>
  </table>
  <table>
  <tr height='40px' class='classRow'>
  <td width='300'><label name='statisticallbl' id='idstatisticallbl' class='classstatisticallbl'>12. Statistical tests applied :</label></td>
  <td width='200'><select name='statisticalddl' id='idstatisticalddl' class='classSelect'>
<option value=''>Select</option>";
if($stats == 'Yes')
{
$pageBody.="<option value='Yes' selected='selected'>Yes</option>";
$pageBody.= "<option value='No' >No</option>";
$pageBody.= "<option value='Not Given' >Not Given</option>";
}
else if($stats == 'No')
{
$pageBody.="<option value='Yes' >Yes</option>";
$pageBody.= "<option value='No' selected='selected'>No</option>";
$pageBody.= "<option value='Not Given' >Not Given</option>";
}
else if($stats == 'Not Given')
{
$pageBody.= "<option value='Yes' >Yes</option>";
$pageBody.= "<option value='No' >No</option>";
$pageBody.= "<option value='Not Given' selected='selected'>Not Given</option>";
}
$pageBody.="</select>
</td>
<td width='200'></td>
</tr>
<tr height='40px' class='classRow'>
    <td width='300'><label name='detaillbl' id='iddetaillbl' class='classLabel'>12a. Details :</label></td>
    </tr>
    </table>
    <table>
    <tr>
    <td ><textarea name='statisticaltxtarea' id='idstatisticaltxtarea' class='classTA'>".$statsdetail."</textarea></td>
</tr>
</table>
<table>
 <tr height='40px' class='classRow'>
  <td width='300'><label name='clinicallylbl' id='idclinicallylbl' class='classLabel'>13. Clinically relevant? :</label></td>
  <td width='200'><select name='clinicallyddl' id='idclinicallyddl' class='classSelect'>
<option value=''>Select</option>";
if($clin == 'Yes')
{
$pageBody.="<option value='Yes' selected='selected'>Yes</option>";
 $pageBody.= "<option value='No' >No</option>";
}
 else if($clin == 'No')
 {
$pageBody.="<option value='Yes' >Yes</option>";
 $pageBody.= "<option value='No' selected='selected'>No</option>";
 }
$pageBody.="</select>
</td>
<td width='200'></td>
</tr>
<tr height='40px' class='classRow'>
  <td width='300'><label name='cdetaillbl' id='idcdetaillbl' class='classLabel'>13a. Details :</label></td>
  </tr>
  </table>
  <table>
  <tr>
  <td ><textarea name='clincallytxtarea' id='idclinicallytxtarea' class='classTA'>".$clindetail."</textarea></td>
  </tr>
  </table>
  <table>
 <tr height='40px' class='classRow'>
  <td width='300'><label name='satisticallysignlbl' id='statisticallysignlbl' class='classLabel'>14a. Statistically significant :</label></td>
  <td width='200'><select name='statisticallysignddl' id='idstatisticallysignddl' class='classSelect'>
<option value=''>Select</option>";
if($satssign == 'Yes')
{
$pageBody.="<option value='Yes' selected='selected'>Yes</option>";
$pageBody.= "<option value='No' >No</option>";
$pageBody.= "<option value='NA' >NA</option>";
$pageBody.= "<option value='Not Given' >Not Given</option>";
}
else if($satssign == 'No')
{
$pageBody.="<option value='Yes' >Yes</option>";
$pageBody.= "<option value='No' selected='selected'>No</option>";
$pageBody.= "<option value='NA' >NA</option>";
$pageBody.= "<option value='Not Given' >Not Given</option>";
}
else if($satssign == 'NA')
{
$pageBody.="<option value='Yes' >Yes</option>";
$pageBody.= "<option value='No' >No</option>";
$pageBody.= "<option value='NA' selected='selected'>NA</option>";
$pageBody.= "<option value='Not Given' >Not Given</option>";
}
else if($satssign == 'Not Given')
{
$pageBody.="<option value='Yes' >Yes</option>";
$pageBody.= "<option value='No' >No</option>";
$pageBody.= "<option value='NA' >NA</option>";
$pageBody.= "<option value='Not Given' selected='selected'>Not Given</option>";
}
$pageBody.="</select>
</td>
<td width='200'></td>
</tr>
<tr height='40px' class='classRow'>
  <td width='300'><label name='testlbl' id='idtestlbl' class='classLabel'>14b. Were these tests appropriate? :</label></td>
  <td width='200'><select name='testddl' id='idtestddl' class='classSelect'>
<option value=''>Select</option>";
if($testapp == 'Yes')
{
$pageBody.="<option value='Yes' selected='selected'>Yes</option>";
 $pageBody.= "<option value='No' >No</option>";
}
else if($testapp == 'No')
{
 $pageBody.="<option value='Yes' >Yes</option>";
 $pageBody.= "<option value='No' selected='selected'>No</option>";
}
$pageBody.="</select>
</td>
<td width='200'></td>
  </tr>
 <tr height='40px' class='classRow'>
  <td width='300'><label name='feasibilitylbl' id='idfeasibilitylbl' class='classLabel'>15. Feasibility of Developing a Drug :</label></td>
  <td width='200'><select name='feasibilityddl' id='idfeasibilityddl' class='classSelect'>
<option value=''>Select</option>";
if($feasibile == 'Yes')
{
$pageBody.="<option value='Yes' selected='selected'>Yes</option>";
 $pageBody.= "<option value='No' >No</option>";
}
 else if($feasibile == 'No')
{
  $pageBody.="<option value='Yes' >Yes</option>";
 $pageBody.= "<option value='No' selected='selected'>No</option>";
}
$pageBody.="</select>
</td>
<td width='200'></td>
  </tr>
 <tr height='40px' class='classRow'>
  <td width='300'><label name='commentlbl' id='idcommentlbl' class='classLabel'>16. Comments :</label></td>
  </tr>
  <table>
  <tr>
  <td ><textarea name='commenttxtarea' id='idcommenttxtarea' class='classTA'>".$comments."</textarea></td>
  </tr>
</table>
</div>
<br />
</div>
</div>
";

echo $pageBody;

$pageFooterStarts ="
<div id=bottomBar align='center'>
<input type='submit' name='btnSave' id='btnSave' class='classButton' value='Save'/>
<!--<input type='reset' name='btnReset' id='btnReset' class='classButton' value='Reset'/>   -->
<input type='button' value='Go To Dashboard' onclick=\"window.location.href='dashboard.php';\" >
</div>
</form>
 </div>
        <div id='footer' align=center>";
echo  $pageFooterStarts;

include_once($path_to_root.'cm_footer.php');

$pageFooterEnds = "</div>
 </div>
        <div id=container style='display:none;' ></div>
</div>
                </center>
                </body></html>";

echo $pageFooterEnds;
?>

    <script type="text/javascript">
  var clone2="";
  var plant="";
  var part_add_select="";
  var model="";
  var bio="";
  var bio1="";
  var extract="";
  var addplant= "<?php echo $counttable ?>";
  var regexp=/^[a-zA-Z]*$/;
    $(document).ready(function()
    {
          $('#iddateofinitiaitontxt').datepicker({
    	  changeMonth: true,
          dateFormat: 'dd-mm-yy',
          changeYear: true ,
          });

           $('#btnSave').click(function()
  {
        /*if ((($('#iddbtnotxt').val().length <= 0)&&($('#idinvestigatortxt1').val().length <=0)&&($('#idtitletxt').val().length <=0)&&($('#idplanttxt1').val().length <=0)&&($('#idareaddl').val().length <=0)||
        (($('#iddbtnotxt').val().length <=0)&&($('#idinvestigatortxt1').val().length <=0))||
         (($('#iddbtnotxt').val().length <=0)&&($('#idtitletxt').val().length <=0))||
         (($('#iddbtnotxt').val().length <=0)&&($('#idplanttxt1').val().length <=0))||
         (($('#iddbtnotxt').val().length <=0)&&($('#idareaddl').val().length <=0))||
         (($('#idinvestigatortxt1').val().length <=0)&&($('#idareaddl').val().length <=0))||
         (($('#idinvestigatortxt1').val().length <=0)&&($('#idplanttxt1').val().length <=0))||
         (($('#idinvestigatortxt1').val().length <=0)&&($('#idtitletxt').val().length <=0))||
           (($('#idtitletxt').val().length <=0)&&($('#idplanttxt1').val().length <=0))||
            (($('#idtitletxt').val().length <=0)&&($('#idareaddl').val().length <=0))||
            (($('#idplanttxt1').val().length <=0)&&($('#idareaddl').val().length <=0))||
            (($('#iddbtnotxt').val().length <= 0)&&($('#idinvestigatortxt1').val().length <=0)&&($('#idtitletxt').val().length <=0))||
            (($('#iddbtnotxt').val().length <= 0)&&($('#idinvestigatortxt1').val().length <=0)&&($('#idareaddl').val().length <=0))||
            (($('#iddbtnotxt').val().length <= 0)&&($('#idinvestigatortxt1').val().length <=0)&&($('#idplanttxt1').val().length <=0))||
            (($('#iddbtnotxt').val().length <= 0)&&($('#idtitletxt').val().length <=0)&&($('#idplanttxt1').val().length <=0))||
            (($('#iddbtnotxt').val().length <= 0)&&($('#idtitletxt').val().length <=0)&&($('#idareaddl').val().length <=0))||
            (($('#iddbtnotxt').val().length <= 0)&&($('#idplanttxt1').val().length <=0)&&($('#idareaddl').val().length <=0))||
            (($('#idinvestigatortxt1').val().length <= 0)&&($('#idtitletxt').val().length <=0)&&($('#idplanttxt1').val().length <=0))||
            (($('#idinvestigatortxt1').val().length <= 0)&&($('#idtitletxt').val().length <=0)&&($('#idareaddl').val().length <=0))||
      (($('#idinvestigatortxt1').val().length <= 0)&&($('#idplanttxt1').val().length <=0)&&($('#idareaddl').val().length <=0))||
      (($('#idtitletxt').val().length <= 0)&&($('#idplanttxt1').val().length <=0)&&($('#idareaddl').val().length <=0))||
    (($('#iddbtnotxt').val().length <= 0)&&($('#idinvestigatortxt1').val().length <=0)&&($('#idtitletxt').val().length <=0)&&($('#idplanttxt1').val().length <=0))||
    (($('#iddbtnotxt').val().length <= 0)&&($('#idinvestigatortxt1').val().length <=0)&&($('#idtitletxt').val().length <=0)&&($('#idareaddl').val().length <=0))||
    (($('#iddbtnotxt').val().length <= 0)&&($('#idtitletxt').val().length <=0)&&($('#idplanttxt1').val().length <=0)&&($('#idareaddl').val().length <=0))||
  (($('#iddbtnotxt').val().length <= 0)&&($('#idinvestigatortxt1').val().length <=0)&&($('#idplanttxt1').val().length <=0)&&($('#idareaddl').val().length <=0))||
   (($('#idtitletxt').val().length <= 0)&&($('#idinvestigatortxt1').val().length <=0)&&($('#idplanttxt1').val().length <=0)&&($('#idareaddl').val().length <=0))))
  {
    alert("Please enter 1.DBT Sanction No. 3a.Investigator's name 7.Title 8.Plant name and 9.Area!");
    return false;
  }*/

 });

 $('#idaddplantbtn').click(function(){
         addplant++;
          document.getElementById('idaddplanthidden').value=addplant;
       if(addplant<50)
       {
         document.getElementById('idaddplant_'+addplant).style.display="block";
       }
       else
    {
        document.getElementById('idaddplant_'+addplant).style.display='none';
    }
});

    var divs=document.getElementById('idinvestigatortbody').getElementsByTagName('tr');
    clone2=divs[divs.length-1].cloneNode(true);

     var divs=document.getElementById('idplanttbody').getElementsByTagName('tr');
    plant=divs[divs.length-1].cloneNode(true);

    var divs=document.getElementById('idparttbody_1').getElementsByTagName('tr');
    part_add_select=divs[divs.length-1].cloneNode(true);

    var divs=document.getElementById('idbiomakertbody_1').getElementsByTagName('tr');
    var marker= divs.length;
    bio=divs[marker-2].cloneNode(true);
    bio1=divs[marker-1].cloneNode(true);

    var divs=document.getElementById('idextracttbody_1').getElementsByTagName('tr');
    extract=divs[divs.length-1].cloneNode(true);




    var divs=document.getElementById('idmodeltbody').getElementsByTagName('tr');
    model=divs[divs.length-1].cloneNode(true);

    });


 $('#idaddinvestigatorbtn').click(function ()
    {
        var root=document.getElementById('idinvestigatortbody');
        var divs=root.getElementsByTagName('tr');
        root.appendChild(clone2);
        clone2 = divs[divs.length-1].cloneNode(true);
        var formCounter = document.getElementById('idinvestigatorhidden');
        formCounter.value++;

        aaa = document.getElementById('idinvestigatorhidden').value;

        var xyz = divs[divs.length-1];

        xyz3 = xyz.getElementsByTagName("input");
        //xyz2 = xyz.getElementsByTagName("textarea");

        xyz3[0].setAttribute("id",'idinvestigatortxt'+aaa);
        xyz3[1].setAttribute("id",'idplaceofworktxt'+aaa);
        xyz3[2].setAttribute("id",'idspecialitytxt'+aaa);
        //xyz2[0].setAttribute("id",'miDetail'+aaa);

       /* CKEDITOR.replace( 'miDetail'+aaa,
        {
        skin : 'office2003'
        });   */
    });

    $('#idplantbtn').click(function ()
    {
        var root=document.getElementById('idplanttbody');
        var divs=root.getElementsByTagName('tr');
        root.appendChild(plant);
        plant = divs[divs.length-1].cloneNode(true);
        var formCounter = document.getElementById('idplanthidden');
        formCounter.value++;

        aaa = document.getElementById('idplanthidden').value;

        var xyz = divs[divs.length-1];

        xyz3 = xyz.getElementsByTagName("input");
       // xyz2 = xyz.getElementsByTagName("label");

        //xyz2 = xyz.getElementsByTagName("textarea");

        xyz3[0].setAttribute("id",'idplanttxt'+aaa);
       // xyz2[0].setAttribute("id",'idplantlbl1'+aaa);
        //xyz2[0].setAttribute("id",'miDetail'+aaa);

       /* CKEDITOR.replace( 'miDetail'+aaa,
        {
        skin : 'office2003'
        });   */
    });


    $('.classPart').click(function ()
    {
        var tcs=this.id.split("idpartbtn_");
        var root=document.getElementById('idparttbody_'+tcs[1]);
        var divs=root.getElementsByTagName('tr');
        root.appendChild(part_add_select);
        part_add_select = divs[divs.length-1].cloneNode(true);
        var formCounter = document.getElementById('idparthidden_'+tcs[1]);
        formCounter.value++;

        aaa = document.getElementById('idparthidden_'+tcs[1]).value;

        var xyz = divs[divs.length-1];

        xyz3 = xyz.getElementsByTagName("select");
        xyz1 = xyz.getElementsByTagName("div");
       // xyz2 = xyz.getElementsByTagName("label");

        //xyz2 = xyz.getElementsByTagName("textarea");

        xyz3[0].setAttribute("id",'idpartddl1_'+tcs[1]+'_'+aaa);
        xyz3[0].setAttribute("name",'partddl_'+tcs[1]+'[]');
        xyz1[0].setAttribute("id",'idpartdiv_'+tcs[1]+'_'+aaa);
       // xyz2[0].setAttribute("id",'idplantlbl1'+aaa);
        //xyz2[0].setAttribute("id",'miDetail'+aaa);

       /* CKEDITOR.replace( 'miDetail'+aaa,
        {
        skin : 'office2003'
        });   */
    });


  $('#idaddmodelbtn').click(function ()
    {
        var root=document.getElementById('idmodeltbody');
        var divs=root.getElementsByTagName('tr');
        root.appendChild(model);
        model = divs[divs.length-1].cloneNode(true);
        var formCounter = document.getElementById('idaddmodelhidden');
        formCounter.value++;

        aaa = document.getElementById('idaddmodelhidden').value;

        var xyz = divs[divs.length-1];

        xyz3 = xyz.getElementsByTagName("textarea");
        xyz2 = xyz.getElementsByTagName("select");

        xyz3[0].setAttribute("id",'idmodeltxtarea1'+aaa);
        xyz2[0].setAttribute("id",'idappropriateddl1'+aaa);
        xyz2[1].setAttribute("id",'idnovelddl1'+aaa);
        //xyz2[0].setAttribute("id",'miDetail'+aaa);

       /* CKEDITOR.replace( 'miDetail'+aaa,
        {
        skin : 'office2003'
        });   */
    });


     $('.classextract').click(function ()
    {
        var tcs=this.id.split("idaddextractbtn_");
        var root=document.getElementById('idextracttbody_'+tcs[1]);
        var divs=root.getElementsByTagName('tr');
        root.appendChild(extract);
        extract = divs[divs.length-1].cloneNode(true);
        var formCounter = document.getElementById('idaddextracthidden_'+tcs[1]);
        formCounter.value++;

        aaa = document.getElementById('idaddextracthidden_'+tcs[1]).value;

        var xyz = divs[divs.length-1];

        xyz3 = xyz.getElementsByTagName("select");
        xyz4 = xyz.getElementsByTagName("input");
       // xyz2 = xyz.getElementsByTagName("textarea");

        xyz3[0].setAttribute("id",'idextractddl1_'+tcs[1]+'_'+aaa);
        xyz3[0].setAttribute("name",'extract_'+tcs[1]+'[]');
        xyz4[0].setAttribute("id",'idextracttxt1_'+tcs[1]+'_'+aaa);
        xyz4[0].setAttribute("name",'extracttxt_'+tcs[1]+'[]');
      //  xyz2[0].setAttribute("id",'idconstituentsdesctxtarea1'+aaa);
      //  xyz2[1].setAttribute("id",'idnovelddl1'+aaa);
        //xyz2[0].setAttribute("id",'miDetail'+aaa);

       /* CKEDITOR.replace( 'miDetail'+aaa,
        {
        skin : 'office2003'
        });   */
    });


       $('.classbiomarker').click(function ()
    {
       var tcs=this.id.split("idaddbiomakerbtn_");
        var root=document.getElementById('idbiomakertbody_'+tcs[1]);
        var divs=root.getElementsByTagName('tr');
        root.appendChild(bio);
        root.appendChild(bio1);
        var marker=divs.length;
        bio = divs[marker-2].cloneNode(true);
        bio1 = divs[marker-1].cloneNode(true);
        var formCounter = document.getElementById('idaddbiomakerhidden_'+tcs[1]);
        formCounter.value++;

        aaa = document.getElementById('idaddbiomakerhidden_'+tcs[1]).value;
        var marker=divs.length;
        var xyz = divs[marker-2];

        xyz3 = xyz.getElementsByTagName("input");
        xyz3[0].setAttribute("id",'idconstituentsnametxt_'+tcs[1]+'_'+aaa);
        xyz3[0].setAttribute("name",'extracttxt_'+tcs[1]+'[]');

        var xyz = divs[marker-1];
        xyz2 = xyz.getElementsByTagName("textarea");
       // xyz2 = xyz.getElementsByTagName("label");

        //xyz2 = xyz.getElementsByTagName("textarea");


        xyz2[0].setAttribute("id",'idconstituentsdesctxtarea_'+tcs[1]+'_'+aaa);
        xyz2[0].setAttribute("name",'idconstituentsdesctxtarea1_'+tcs[1]+'[]');
       // xyz2[0].setAttribute("id",'idplantlbl1'+aaa);
        //xyz2[0].setAttribute("id",'miDetail'+aaa);

       /* CKEDITOR.replace( 'miDetail'+aaa,
        {
        skin : 'office2003'
        });   */

    });


  </script>