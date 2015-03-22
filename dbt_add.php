<?php

    include_once("cm_chk.php");
    $path_to_root = "";
    $top_title = "Dashboard";
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
    $open = "";

    if(isset($_GET['open']))
        $open = $_GET['open'];

////include_once('left_col.php');
include_once('js/validations.js');
include_once('dbt_addddl.php');

$valueSex ="
<option value=''></option>
<option value='Male'>Male</option>
<option value='Female'>Female</option>
";

$valueYesNo = "
<option value=''></option>
<option value='Yes'>Yes</option>
<option value='No'>No</option>
";

$valueWhoBite = "
<option value=''></option>
<option value='Category I'>Category I</option>
<option value='Category II'>Category II</option>
<option value='Category III'>Category III</option>
";

$valueSystemic = "
<option value=''></option>
<option value='Rabies vaccine only'>Rabies vaccine only</option>
<option value='Vaccine+HRIG'>Vaccine+HRIG</option>
<option value='Vaccine+ERIG'>Vaccine+ERIG</option>
";

$valueStatus = "
<option value=''></option>
<option value='Alive'>Alive</option>
<option value='Died of rabies'>Died of rabies</option>
<option value='Died of other causes'>Died of other causes</option>
<option value='Unknown'>Unknown</option>
";

$valueWhatHappenedAnimal = "
<option value=''></option>
<option value='Died'>Died</option>
<option value='Killed'>Killed</option>
<option value='Alive after 2 weeks'>Alive after 2 weeks</option>
<option value='Escaped'>Escaped</option>
<option value='Unknown'>Unknown</option>
";

$valueTreatment = "
<option value=''></option>
<option value='local'>local</option>
<option value='systemic'>systemic</option>
";

$varSelectEducational = "
<option value='7'>Professional Degree/Honours, M.A. or Above</option>
<option value='6'>Graduate or Post Graduate, BA, BSc Degree</option>
<option value='5'>Intermediate or Post High School Diploma</option>
<option value='4'>High School Certificate</option>
<option value='3'>Middle School Certificate</option>
<option value='2'>Primary School Certificate/Literate</option>
<option value='1'>Illiterate</option>
";

$varSelectOccupation = "
<option value='10'>Profession</option>
<option value='6'>Semi-Profession</option>
<option value='5'>Clerical, Shop-Owner, Farmer</option>
<option value='4'>Skilled Worker</option>
<option value='3'>Semi-skilled Worker</option>
<option value='2'>Unskilled Worker</option>
<option value='1'>Unemployed</option>
";

$varSelectMonthlyIncome = "
<option value='12'>Rs 19575 and Above</option>
<option value='10'>Rs 9788-19574 </option>
<option value='6'>Rs 7323-9787</option>
<option value='4'>Rs 4894-7322</option>
<option value='3'>Rs 2936-4893</option>
<option value='2'>Rs 980-2935</option>
<option value='1'>Less than Rs 979</option>
";

$varSelectAnimals = "
<option value='Dog'>Dog</option>
<option value='Cat'>Cat</option>
<option value='Monkey'>Monkey</option>
<option value='Other'>Other</option>
";

$pageHeaderStarts = "<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Strict//EN'
    'http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd'>

<html xmlns='http://www.w3.org/1999/xhtml'>

<head>
  <title>Medicinal and Aromamatic Plants Database  Study</title>
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
</style>


</head>";



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
            <span id='headBar'>Medicinal and Aromamatic Plants Database </span>
        </div>
        <div id='containerMain' >
<form name='frmdbtplantAdd' id='frmdbtplantAdd' class='classForm' action='emulator/em_dbt_add.php' method='Post'>
<div id='containerDiv'>
<div id='head1'>
<div id='headtitle1'>
<table border='0'>
<tr >
<td valign='middle'>
Add Data
</td>
</tr>
</table>
</div>
</div>
<div id='containerData'>
<br />
<div id='idadmindiv'>
<h1 class='classTable' >Administrative</h1>
<table class='classTable'>
<tr height='40px' class='classRow' > 
</tr>
  <tr height='40px' class='classRow' >
    <td width='200'><label name='dbtnolbl' id='iddbtnolbl' class='classLabel' >1. DBT Sanction No. :</label></td>
    <td width='200' class='classData' ><input type='text' name='dbtno' id='iddbtnotxt' class='classTextBox' /></td>
  <td width='200'></td>
  </tr >
  <tr height='40px' class='classRow' >
    <td width='200'><label name='dateofinitiationlbl' id='iddateofinitiationlbl' class='classLabel'>2. Date of Initiation :</label></td>
    <td width='200'><input type='text' name='dateofinitiationtxt' id='iddateofinitiaitontxt' class='classTextBox' /></td>
    <td width='200'></td>
  </tr>
  </table>
  <table class='classTable'>
  <thead>
    <tr height='40px' class='classRow' >
      <td width='200'><label name='investigatorlbl' id='idinvestigatorlbl' class='classLabel' >3a. Investigator(s) :</label></td>
      <td width='200'><label name='placeofworklbl' id='idplaceofworklbl' class='classLabel'>3b. Places of work :</label></td>
       <td width='200'><label name='specialitylbl' id='idspecialitylbl' class='classLabel'>3c. Speciality of Investigator :</label></td>
    </tr>
    </thead>
<tbody id='idinvestigatortbody'>
    <tr height='40px' class='classRow'>
      <td width='200'><input type='text' name='investigatortxt[]' id='idinvestigatortxt1' class='classTextBox' /></td>
      <td width='200'><input type='text' name='placeofworktxt[]' id='idplaceofworktxt1' class='classTextBox' /></td>
      <td width='200'><textarea name='specialitytxt[]' id='idspecialitytxt1' class='classTextBox' ></textarea></td>
      <td><img src='images/cancel.png' onclick='cancel(\"idinvestigatortbody\");' /></td>
    </tr>
    </tbody>
    </table>
    <input type='button' name='addinvestigatorbtn' id='idaddinvestigatorbtn' value='Add another' class='Button'/>
    <input type='hidden' name='investigatorhidden' id='idinvestigatorhidden' value='1' />
    <table class='classTable'>
    <tr height='40px' class='classRow' >
      <td width='400'><label name='capacitybuildinglbl' id='idcapacitybuildinglbl' class='classLabel' >4. Capacity Building(M. Sc. / Ph.D. produced) :</label></td>
      <td width='200'><div id='idcapacityddldiv'><select name='capacitybuildingddl' id='idcapacitybuildingddl' class='classSelect' onchange='capacity();'>
<option value=''>Select</option>
 <option value='Yes'>Yes</option>
  <option value='No'>No</option>
  <option value='NotGiven'>Not Given</option>
 </select></div></td>
      <td width='200'></td>
    </tr>
    <tr height='40px' class='classRow' >
      <td width='400'><label name='patentfiledlbl' id='idpatentfiledlbl' class='classLabel'>5. Patent Filed :</label></td>
      <td width='200'><div id='idpaitentddldiv'><select name='patentfiledddl' id='idpatentfiledddl' class='classSelect' onchange='paitent();'>
<option value=''>Select</option>
<option value='Yes'>Yes</option>
<option value='No'>No</option>
<option value='NotGiven'>Not Given</option>
</select></div>
</td>
      <td width='200'></td>
    </tr>
    <tr height='40px' class='classRow' >
      <td width='400'><label name='publicationlbl' id='idpublicationlbl' class='classLabel'>6. Publication :</label></td>
      <td width='200'><div id='idpublicationdiv' ><select name='publicationddl' id='idpublicationddl' class='classSelect' onchange='publication();'>
      <option value=''>Select</option>
        <option value='Yes'>Yes</option>
            <option value='No'>No</option>
            <option value='NotGiven'>Not Given</option>
            </select></div>
      </td>
      <td width='200'></td>
    </tr>
    </table>
    <table class='classTable'> 
    <tr height='40px' class='classRow' >
      <td width='400'><label name='titlelbl' id='idtitlelbl' class='classLabel'>7. Title of project :</label></td>
      <td ><input type='text' id='idtitletxt'  name='idtitletxt' class='classTitle'/></td>
      <td width='100'></td>
    </tr>
    </table>
    <table class='classTable'>
    <tbody id='idplanttbody'>
        <tr class='classRow' >
            <td width='400' ><label name='plantlbl[]' id='idplantlbl1' class='classLabel'>8. Plant name on which work has been done :</label></td>
            <td width='200' class='classData'><input type='text' name='planttxt[]' id='idplanttxt1' class='classTextBox' style='font-style:italic' /></td>
            <td width='200' ><img src='images/cancel.png' onclick='cancel(\"idplanttbody\");' /></td>
        </tr>
    </tbody>
    </table>
    <input type='button' id='idplantbtn' value='Add another' class='classButton' />
    <input type='hidden' name='planthidden' id='idplanthidden' value='1' />
    <table class='classTable'>
    <tr height='40px' class='classRow' >
    <td width='400'><label name='arealbl' id='idarealbl' class='classLabel'>9. Area of research :</label></td>
    <td width='200'><div id='idareaddldiv'><select name='areaddl' id='idareaddl' class='classSelect' onchange='result();'>
<option value=''>Select</option>";

$xData = retrieve_data_xml('area');
foreach($xData as $vOption)
{
 /* if($vOption == @$area)
    $pageBody .= "<option value='".$vOption."' selected='selected'>".$vOption."</option>";
  else*/
    $pageBody .= "<option value='".$vOption."'>".$vOption."</option>";
}

$pageBody.="
<option value='Others'>Others</option>
</select></div>
</td>
<td width='200'></td>
    </tr>
  </table>
  </div>
<!-- end of admin block -->
 <br />
 <br />
 <br />
<!-- start of result block -->
<div id='idresultdiv' style='display:none'>
<hr />
<hr />
<h1 class='classTable' >Results</h1>
<table class='classTable'>
  <tr height='40px' class='classRow' >
    <td width='300'><label name='therapeuticlbl' id='idtherapeuticlbl' class='classLabel'>1. Therapeutic area of research :</label></td>
    <td width='200'><input type='text' name='therapeuticddl' id='idterapeuticddl' class='classTextBox' />";
   /* <td width='200'><div id='idtheraputicddldiv'><select name='therapeuticddl' id='idterapeuticddl' class='classSelect' onchange='theraputic();' >
<option value=''>Select</option>*/

/*$xData = retrieve_data_xml('theraputic');
foreach($xData as $vOption)
{
  /*if($vOption == @$therapuretic)
    $pageBody .= "<option value='".$vOption."' selected='selected'>".$vOption."</option>";
  else*/
  //  $pageBody .= "<option value='".$vOption."'>".$vOption."</option>";
//}

$pageBody .="<!--<option value='Add other'>Add other</option>-->
<!--</select></div>-->
</td>
    <td width='200'></td>
  </tr>
  </table>";
  for($ii=1; $ii<50; $ii++)
 {
   if($ii !=1)
   {
    $pageBody.="<div id='idaddplant_$ii' style='display:none'>";
   }
   else
  $pageBody.="<div id='idaddplant_$ii'>";

  $pageBody.="<hr />
  <table id='idaddplanttbl' name='addplant' class='classTable' >
  <tr height='40px' class='classRow' >
  <th colspan='4' class='classTable' align='left' >Plants on which work done</th>
  </tr>
  <tr height='40px' class='classRow' >
    <td width='300' class='classData'><label name='latinlbl[]' id='idlatinlbl_{$ii}' class='classLabel'>2a. Latin name :</label></td>
    <td width='200'><input type='text' name='latintxt[]' id='idlatintxt_{$ii}' class='classTextBox' style='font-style:italic' /></td>
  </tr>
  <tr height='40px' class='classRow' >
    <td width='300'><label name='vernacularlbl[]' id='idvernacularlbl_{$ii}' class='classLabel'>2b. Vernacular name :</label></td>
    <td width='200'><select name='vernacularddl[]' id='idvernacularddl_{$ii}' class='classSelect' onchange='vernacular(this);'>
<!--<option value=''>Select</option>-->
<option value='Hindi'>Hindi</option>
<option value='English'>English</option>
<option value='Sanskrit'>Sanskrit</option>
<option value='Other'>Other</option>
</select>
</td>
<td width='200'><input type='text' id='idvernaculartxt_{$ii}' class='classTextBox' name='vernaculartxt[]' style='display:none' />
</td>
  </tr>
  <tr height='40px' class='classRow' >
    <td width='300'><label name='traditionallbl[]' id='idtardionalbl_{$ii}' class='classLabel'>2c. Traditional Medicine name(In Report):</label></td>
    <td width='200'><select name='traditionalddl[]' id='idtradionalddl_{$ii}' class='classSelect'>
<option value=''>Select</option>
<option value='Yes'>Yes</option>
<option value='No'>No</option>
<option value='Not Given'>Not Given</option>
 </select>
</td>
<td width='200'><input type='text' name='refrencetxt[]' id='idrefrencetxt_{$ii}' class='classTextBox' /></td>
</tr>
<tr height='40px' class='classRow' >
    <td width='300'><label name='ismentionedlbl[]' id=idismentionedlbl_{$ii}' class='classLabel'>2d. Is it mentioned in Traditional medicine? :</label></td>
    <td width='200'><select name='ismentionedddl[]' id='idismentionedddl_{$ii}' class='classSelect' onchange='traditional(this);'>
<option value=''>Select</option>
<option value='Yes'>Yes</option>
<option value'No'>No</option>
<option value='Not Given'>Not Given</option>
</select>
</td>
<td width='200'><div id='idifyesdiv_$ii'><select name='ifyesddl[]' id='idifyesddl_{$ii}' class='classSelect' style='display:none' onchange='mention(this);'>
<option value=''>Select</option>";

$xData = retrieve_data_xml('mention');
foreach($xData as $vOption)
{
 /* if($vOption == @$therapuretic)
    $pageBody .= "<option value='".$vOption."' selected='selected'>".$vOption."</option>";
  else*/
    $pageBody .= "<option value='".$vOption."'>".$vOption."</option>";
}

$pageBody .="<option value='Others'>Others</option>
<option value='Not Given'>Not Given</option>
</select> </div>
</td>
  </tr>
  <tr height='40px' class='classRow' >
   <td width='300'><label name='ismentionedayurlbl[]' id=idismentionedayurlbl_{$ii}' class='classLabel'>2e. Is it mentioned in Ayurvedic Pharmacopoeia of India? :</label></td>
   <td width='200'><select name='ismentionedayurddl[]' id='idismentionedayurddl_{$ii}' class='classSelect' >
<option value=''>Select</option>
<option value='Yes'>Yes</option>
<option value'No'>No</option>
<option value='Not Given'>Not Given</option>
</select>
  </tr>
  <tr height='40px' class='classRow' >
    <td width='200'><label name='plantselectionlbl[]' id='idplantselectionlbl_{$ii}' class='classLabel'>3. Basis for selection of plant :</label></td>
    <td width='200'><div id='idplantselectiondiv_{$ii}'><select name='plantselectionddl[]' id='idplantselectionddl_{$ii}' class='classSelect' onchange='selection(this);'>
<option value=''>Select</option>";

$xData = retrieve_data_xml('basis');
foreach($xData as $vOption)
{
  /*if($vOption == @$therapuretic)
    $pageBody .= "<option value='".$vOption."' selected='selected'>".$vOption."</option>";
  else*/
    $pageBody .= "<option value='".$vOption."'>".$vOption."</option>";
}

$pageBody .="<option valua='Others'>Others</option>
<option value='Not Given'>Not Given</option>
</select></div>
</td>
    <td width='200'></td>
  </tr>
  </table>
  <table class='classTable'>
  <tbody id='idparttbody_$ii'>
  <tr height='40px' class='classRow' >
    <td width='300'><label name='partlbl' id='idpartlbl_$ii_1' class='classLabel'>4. Part of plant used :</label></td>
    <td width='200'><div id='idpartdiv_{$ii}_1'><select name='partddl_{$ii}[]' id='idpartddl1_{$ii}_1' class='classSelect' onchange='part_select(this);'>
<option value=''>Select</option>";

$xData = retrieve_data_xml('part');
foreach($xData as $vOption)
{
 /* if($vOption == @$therapuretic)
    $pageBody .= "<option value='".$vOption."' selected='selected'>".$vOption."</option>";
  else*/
    $pageBody .= "<option value='".$vOption."'>".$vOption."</option>";
}

$pageBody .="<option value='Others'>Others</option>
<option value='Not Given'>Not Given</option>
</select></div>
</td>
 <td width='200'><img src='images/cancel.png' onclick='cancel(\"idparttbody_$ii\");' /></td>
  </tr>
  </tbody>
  </table>
  <input type='button' name='partbtn' id='idpartbtn_{$ii}' value='Add another' class='classButton classPart' />
  <input type='hidden' name='parthidden_{$ii}[]' id='idparthidden_{$ii}' value='1' />
  <table class='classTable'>
  <th colspan='4' class='classTable' align='left'>Active constituents of biomarkers</th>
  <tbody id='idbiomakertbody_$ii'>
    <tr height='40px' class='classRow' >
    <td width='300'><label name='cnamelbl_{$ii}[]' id='idcnamelbl_{$ii}_1' class='classLabel'>Name :</label></td>
    <td width='200'><input type='text' name='constituentsnametxt_{$ii}[]' id='idconstituentsnametxt1_{$ii}_1' class='classTextBox' /></td>
    <td><img src='images/cancel.png' onclick='cancel(\"idbiomakertbody_$ii\");' /></td>
    </tr>
    <tr height='40px' class='classRow' >
   <td width='300'><label name='constituentsdesclbl_{$ii}[]' id='idconstituentsdesclbl_{$ii}_1' class='classLabel'>Description :</label></td>
    <td ><textarea name='constituentsdesctxtarea_{$ii}[]' id='idconstituentsdesctxtarea1_{$ii}_1' class='classTA'></textarea></td>
  </tr>
  </tbody>
  </table>
  <input type='button' id='idaddbiomakerbtn_{$ii}' value='Add another' class='classButton classbiomarker' />
  <input type='hidden' name='addbiomakerhidden_{$ii}[]' id='idaddbiomakerhidden_{$ii}' value='1' />
  <table class='classTable'>
  <tr height='40px' class='classRow' >
    <td width='300'><label name='chemistrylbl[]' id='idchemistrylbl_$ii' class='classLabel'>5. Chemistry manufacturing control :</label></td>
    <td width='200'><select name='chemistryddl[]' id='idchemistryddl_$ii' class='classSelect'>
<option value=''>Select</option>
<option value='Yes'>Yes</option>
<option value='No'>No</option>
<option value='NA'>NA</option>
</select>
</td>
<td width='200'></td>
</tr>
<tr height='40px' class='classRow' >
    <td width='300'><label name='rawlbl' id='idrawlbl_$ii' class='classLabel'>a. Raw material :</label></td>
    <td width='200'><div id='idrawdiv_{$ii}'><select name='rawddl[]' id='idrawddl_{$ii}' class='classSelect' onchange='raw(this);'>
<option value=''>Select</option>
<option value='Yes'>Yes</option>
<option value='No'>No</option>
<option value='NA'>NA</option>
<option value='Not Given'>Not Given</option>
</select></div>
</td>
<td width='200'></td>
  </tr>
  <tr height='40px' class='classRow' >
    <td width='300'><label name='druglbl' id='iddruglbl_$ii' class='classLabel'>b. Drug Product :</label></td>
    <td width='200'><div id='iddrugdiv_{$ii}'><select name='drugddl[]' id='iddrugddl_{$ii}' class='classSelect' onchange='drug(this);'>
<option value=''>Select</option>
<option value='Yes'>Yes</option>
<option value='No'>No</option>
<option value='NA'>NA</option>
<option value='Not Given'>Not Given</option>
</select></div>
</td>
<td width='200'></td>
</tr>
<tr height='40px' class='classRow' > 
    <td width='300'><label name='finishedlbl' id='idfinishedlbl_{$ii}' class='classLabel'>d. Finished Product :</label></td>
    <td width='200'><div id='idfinishdiv_{$ii}'><select name='finisheddll[]' id='idfinishedddl_{$ii}' class='classSelect' onchange='finish(this);'>
<option value=''>Select</option>
<option value='Yes'>Yes</option>
<option value='No'>No</option>
<option value='NA'>NA</option>
<option value='Not Given'>Not Given</option>
</select></div>
</td>
<td width='200'></td>
  </tr>
  </table>
  <table class='classTable'>
  <tbody id='idextracttbody_{$ii}'>
  <tr height='40px' class='classRow' >
    <td width='300'><label name='extractlbl' id='idextractlbl_{$ii}_1' class='classLabel'>7. Type of extract(s) used :</label></td>
    <td width='200'>
    <select name='extract_{$ii}[]' id='idextractddl1_{$ii}_1' class='classSelect' onchange='ext(this);'>
<option value=''>Select</option>";

$xData = retrieve_data_xml('extract');
foreach($xData as $vOption)
{
  /*if($vOption == @$therapuretic)
    $pageBody .= "<option value='".$vOption."' selected='selected'>".$vOption."</option>";
  else*/
    $pageBody .= "<option value='".$vOption."'>".$vOption."</option>";
    }
$pageBody .="<option value='Other'>Other</option>
</select>
</td>
<td width='200'><textarea id='idextracttxt1_{$ii}_1' name='extracttxt_{$ii}[]' style='display:none' class='classTextBox' ></textarea></td>
<td><img src='images/cancel.png' onclick='cancel(\"idextracttbody_{$ii}\");' /></td>
</tr>
  </tbody>
  </table>
  <input type='button' id='idaddextractbtn_{$ii}' value='Add another' class='classButton classextract' />
  <input type='hidden' name='extracthidden_{$ii}[]' id='idaddextracthidden_{$ii}' value='1' />
  <table class='classTable'>
  <tr height='40px' class='classRow' >
  <td width='300'><label name='plantwiseresultlbl[]' id='idplantwiseresultlbl_{$ii}' class='classLabel'>Plantwise Results :</label></td>
  </tr>
  <tr height='40px' class='classRow' >
  <td ><textarea name='plantwiseresulttxtarea[]' id='idplantwiseresulttxtarea_{$ii}' class='classTA'></textarea></td>
  </tr>
  </table>
  </table>
  <hr />
  <input type='button' id='iddelplantbtn_{$ii}' class='classButton' value='Cancel Plant' style='float:right;' onclick='cancelplant(this);'/>
  </div>";
}
$pageBody.="<input type='button' id='idaddplantbtn' value='Add another plant' class='classButton'/>
            <input type='hidden' id='idaddplanthidden' name='addplanthidden' value='1' />";
$pageBody.="<table class='classTable'>
  <tr height='40px' class='classRow' >
    <td width='300'><label name='typeofstudylbl' id='idtypeofstudylbl' class='classLabel'>8. Type of study :</label></td>
    <td width='200'><!--<select name='typeofstudyddl' id='idtypeofstudyddl' class='classSelect' onchange='vitro();'>
<option value=''>Select</option>
<option value='In vitro'>In vitro</option>
<option value='In vivo'>In vivo</option>
<option VALUE='clinical'>Clinical</option>
<option value='Others'>Others</option>
</select>-->
<input type='text' name='typeofstudyddl' id='idtypeofstudyddl' class='classTextBox' />
</td>
 <td width='200'></td>
 </tr>
    <tr height='40px' class='classRow'>
    <td width='300'><label name='invitrolbl' id='idinvitrolbl' class='classLabel' >a. In vitro</label></td>
    <td width='200'><!--<select name='idifyesvitroddl' id='idifyesvitroddl' class='classSelect' style='display:none'>
<option value=''>Select</option>
<option value='Model'>Model</option>
<option value='Disease'>Disease</option>
</select>-->
<input type='text' name='ifyesvitroddl' id='idifyesvitroddl' class='classTextBox' />
</td>
 <td width='200'></td>
</tr>
  <tr height='40px' class='classRow' >
    <td width='300'><label name='experimentallbl' id='idexperimentallbl' class='classLabel'>b. Experimental :</label></td>
    <td width='200'><!--<select name='experimentalddl' id='idexperimentalddl' class='classSelect'>
<option value=''>Select</option>
<option value='In vitro'>In vitro</option>
<option value='Chemical'>Chemical</option>
</select>-->
</td> <td width='200'></td>
</tr>
</table>
<table class='classTable'> 
    <tr height='40px' class='classRow'><td ><textarea name='experimentaltxtarea' id='idexperimentaltxt' class='classTA'></textarea></td></tr>
  <tr height='40px' class='classRow' >
    <td width='300'><label name='clinicallbl' id='idclinicallbl' class='classLabel'>c.Clinical :</label></td>
    <tr height='40px' class='classRow'><td ><textarea name='clinicaltxtarea' id='idclinicaltxtarea' class='classTA'></textarea></td></tr>
  </table>
  <table class='classTable'>
  <thead id='modelthead'>
  <tr height='40px' class='classRow' >
    <td width='450'><label name='modellbl' id='idmodellbl' class='classLabel'>9a. Model(s) (accuracy and novelty) :</label></td>
    <td width='200'><label name='appropriatelbl' id='idappropriatelbl' class='classLabel'>9b. Was it appropriate? :</label></td>
    <td width='200'><label name='novellbl' id='idnovellbl' class='classLabel'>9c. Was it Novel? :</label></td>
  </tr>
  </thead>
  </table>
  <table class='classTable'>
  <tbody id='idmodeltbody'>
  <tr height='40px' class='classRow' >
     <td width='450'><textarea name='modeltxtarea[]' id='idmodeltxtarea1' class='classTA'></textarea></td>
    <td width='200'><select name='appropriateddl[]' id='idappropriateddl1' class='classSelect'>
<option value=''>Select</option>
<option value='Yes'>Yes</option>
<option value='No'>No</option>
</select>
</td>
    <td width='200'><select name='novelddl[]' id='idnovelddl1' class='classSelect'>
<option value=''>Select</option>
<option value='Yes'>Yes</option>
<option value='No'>No</option>
</select>
</td>
<td><img src='images/cancel.png' onclick='cancel(\"idmodeltbody\");' /></td>
  </tr>
  </tbody>
  </table>
  <input type='button' id='idaddmodelbtn' value='Add another' class='classButton' />
  <input type='hidden' name='idaddmodelhidden' id='idaddmodelhidden' value='1' />
  <table class='classTable'>
  <tr height='40px' class='classRow' >
    <td width='300'><label name='otherlbl' id='idotherlbl' class='classLabel'>9d. Any Other :</label></td>
    </tr>
    <tr height='40px' class='classRow' > 
    <td ><textarea name='othertxtarea' id='idothertxtarea' class='classTA'></textarea></td>
  </tr>
  </table>
  <table class='classTable'> 
  <tr height='40px' class='classRow' >
  <td width='300'><label name='trustlbl' id='idtrustlbl' class='classLabel'>10. Is it on AYUSH Trust area?</label></td>
  <td width='200'><select name='trustddl' id='idtrustddl' class='classSelect'>
<option value=''>Select</option>
<option value='Yes'>Yes</option>
<option value='No'>No</option>
</select>
</td>
  <td width='200'><input type='text' name='trusttxt' id='idtrusttxt' class='classTextBox' /></td>
  </tr>
  </table>
  <table class='classTable'> 
   <tr height='40px' class='classRow' >
  <td width='300'><label name='hypothesislbl' id='idhypothesislbl' class='classLabel'>11a. Hypothesis generating? :</label></td>
  </tr>
  <tr height='40px' class='classRow' > 
  <td ><textarea name='hypothesistxtarea' id='idhypothesistxtarea' class='classTA'></textarea></td>
  <tr height='40px' class='classRow'>
  <td width='300'><label name='confirmatorylbl' id='idconfirmatorylbl' class='classLabel'>11b. Confirmatory studies? :</label></td>
 </tr>
 <tr height='40px' class='classRow' > 
 <td ><textarea name='confirmatorytxtarea' id='idconfirmatorytxtarea' class='classTA'></textarea></td></tr>
  </tr>
 <tr height='40px' class='classRow' >
  <td width='300'><label name='resultlbl' id='idresultlbl' class='classLabel'>11c. Results :</label></td>
  </tr>
  <tr height='40px' class='classRow' >
  <td ><textarea name='resulttxtarea' id='idresulttxtarea' class='classTA'></textarea></td>
  </tr>
  </table>
  <table class='classTable'> 
  <tr height='40px' class='classRow' >
  <td width='300'><label name='statisticallbl' id='idstatisticallbl' class='classLabel'>12. Statistical tests applied :</label></td>
  <td width='200'><select name='statisticalddl' id='idstatisticalddl' class='classSelect'>
<option value=''>Select</option>
<option value='Yes'>Yes</option>
<option value='No'>No</option>
<option value='Not Given'>Not Given</option>
</select>
</td>
</table>
<table class='classTable'> 
    <tr height='40px' class='classRow'>
    <td width='300'><label name='detaillbl' id='iddetaillbl' class='classLabel'>12a. Details :</label></td>
    </tr>
    <tr height='40px' class='classRow' > 
    <td ><textarea name='statisticaltxtarea' id='idstatisticaltxtarea' class='classTA'></textarea></td></tr>
</tr>
</table>
<table class='classTable'> 
 <tr height='40px' class='classRow' >
  <td width='300'><label name='clinicallylbl' id='idclinicallylbl' class='classLabel'>13. Clinically relevant? :</label></td>
  <td width='200'><select name='clinicallyddl' id='idclinicallyddl' class='classSelect'>
<option value=''>Select</option>
<option value='Yes'>Yes</option>
<option value='No'>No</option>
</select>
</td>
<td width='200'></td>
</tr>
</table>
<table class='classTable'> 
  <tr height='40px' class='classRow'>
  <td width='300'><label name='cdetaillbl' id='idcdetaillbl' class='classLabel'>13a. Details :</label></td>
</tr>
<tr height='40px' class='classRow' > 
 <td ><textarea name='clinicallytxtarea' id='idclinicallytxtarea' class='classTA'></textarea></td></tr>
  </tr>
  </table>
  <table class='classTable'>
 <tr height='40px' class='classRow' >
  <td width='300'><label name='satisticallysignlbl' id='statisticallysignlbl' class='classLabel'>14a. Statistically significant :</label></td>
  <td width='200'><select name='statisticallysignddl' id='idstatisticallysignddl' class='classSelect'>
<option value=''>Select</option>
<option value='Yes'>Yes</option>
<option value='No'>No</option>
<option value='NA'>NA</option>
<option value='Not Given'>Not Given</option>
</select>
</td>
<td width='200'></td>
</tr>
  <tr height='40px' class='classRow'>
  <td width='300'><label name='testlbl' id='idtestlbl' class='classLabel'>14b. Were these tests appropriate? :</label></td>
  <td width='200'><select name='testddl' id='idtestddl' class='classSelect'>
<option value=''>Select</option>
<option value='Yes'>Yes</option>
<option value='No'>No</option>
</select>
</td>
<td width='200'></td>
  </tr>
 <tr height='40px' class='classRow' >
  <td width='300'><label name='feasibilitylbl' id='idfeasibilitylbl' class='classLabel'>15. Feasibility of Developing a Drug :</label></td>
  <td width='200'><select name='feasibilityddl' id='idfeasibilityddl' class='classSelect'>
<option value=''>Select</option>
<option value='Yes'>Yes</option>
<option value='No'>No</option>
</select>
</td>
<td width='200'></td>
  </tr>
  </table>
  <table class='classTable'>
 <tr height='40px' class='classRow' >
  <td width='300'><label name='commentlbl' id='idcommentlbl' class='classLabel'>16. Comments :</label></td>
 </tr>
 <tr height='40px' class='classRow' >
  <td ><textarea name='commenttxtarea' id='idcommenttxtarea' class='classTA'></textarea></td>
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
<input type='reset' name='btnReset' id='btnReset' class='classButton' value='Reset'/>
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
              <!--  </center>   -->
                </body>
                </html>";

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
  var addplant=1;
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
        xyz4 = xyz.getElementsByTagName("textarea");
        //xyz2 = xyz.getElementsByTagName("textarea");

        xyz3[0].setAttribute("id",'idinvestigatortxt'+aaa);
        xyz3[1].setAttribute("id",'idplaceofworktxt'+aaa);
        xyz4[0].setAttribute("id",'idspecialitytxt'+aaa);
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