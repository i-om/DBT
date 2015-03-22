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

$SearchForList = "
<option value=''></option>
<option value='Count'>Count</option>
<option value='Full Result'>Full Result</option>
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



$valueSex ="<option value=''></option><option value='Male'>Male</option><option value='Female'>Female</option>";

$valueWhoBite = "<option value=''></option><option value='Category I'>Category I</option><option value='Category II'>Category II</option><option value='Category III'>Category III</option>";








$pageHeaderStarts = "<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Strict//EN'
    'http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd'>

<html xmlns='http://www.w3.org/1999/xhtml'>

<head>
  <title>Medicinal and Aromamatic Plants Database  Study</title>
  <link rel='stylesheet' type='text/css' href='css/rvs_css.css'></link>
  <link rel='stylesheet' type='text/css' href='css/stylesheetCommon.css' />
  <script language='javascript' src='js/validatations.js'></script>
<script language='javascript' src='js/utils_print.js'></script>
<script type='text/javascript' src='js/jquery/jquery-1.3.2.js'></script>
	<script type='text/javascript' src='js/jquery/ui/ui.core.js'></script>
   <link type='text/css' href='js/jquery/themes/jquery-ui-1.7.2.custom.css' rel='stylesheet' />
   <script type='text/javascript' src='js/jquery/ui/ui.datepicker.js'></script>




  <meta http-equiv='pragma' content='no-cache' />   ";
 echo   $pageHeaderStarts;
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


  function GoBack()
    {
        javascript:history.go(-1);
    }

      var arrName = new Array();
      var arrValue = new Array();




arrValue[1]='tb_rvs_visit_dTextEntryDate';
arrValue[2]='tb_rvs_visit_sTextName';
arrValue[3]='tb_rvs_visit_sTextAge';
arrValue[4]='tb_rvs_visit_sSelSex';
arrValue[5]='tb_rvs_visit_sTaAddress';
arrValue[6]='tb_rvs_visit_sTextPhoneNum';
arrValue[7]='tb_rvs_visit_sTextCity';
arrValue[8]='tb_rvs_visit_sTextGeographicalLocality';
arrValue[9]='tb_rvs_visit_sTextOccupation';
arrValue[10]='tb_rvs_visit_sKupScale';
arrValue[11]='tb_rvs_visit_sSelHistory';
arrValue[12]='tb_rvs_visit_sTaHistoryAllergies';
arrValue[13]='tb_rvs_visit_sDetailsOfAnimalBiteAnimal';
arrValue[14]='tb_rvs_visit_sTextSiteOfBite';
arrValue[15]='tb_rvs_visit_sDetailsOfAnimalBiteWas';
arrValue[16]='tb_rvs_visit_sDetailsOfAnimalAnimalWas';
arrValue[17]='tb_rvs_visit_dTextBiteDate';
arrValue[18]='tb_rvs_visit_sDetailsAssociatedBleeding';
arrValue[19]='tb_rvs_visit_sDetailsHowSoon';
arrValue[20]='tb_rvs_visit_sDetailsTxAtHome';
arrValue[21]='tb_rvs_visit_sDetailsTxAtLocalP';
arrValue[22]='tb_rvs_visit_sDetailsDogRabidQ';
arrValue[23]='tb_rvs_visit_sDetailsWashWound';
arrValue[24]='tb_rvs_visit_sDetailsinjGiven';
arrValue[25]='tb_rvs_visit_sSelWhoBite';
arrValue[26]='tb_rvs_visit_sSelSystemic';
arrValue[27]='tb_rvs_visit_sSelIgRecv';
arrValue[28]='tb_rvs_visit_sSelWhatHappenedAnimal';
arrValue[29]='tb_rvs_visit_sTextCostTravel';
arrValue[30]='tb_rvs_visit_sTextCostMedVacc';
arrValue[31]='tb_rvs_visit_sTextCostMedSera';
arrValue[32]='tb_rvs_visit_sTextCostMedLocal';
arrValue[33]='tb_rvs_visit_sTextCostLoss';
arrValue[34]='tb_rvs_visit_sTextCostTotal';
arrValue[35]='tb_rvs_visit_sTextLostDaysVictim';
arrValue[36]='tb_rvs_visit_sTextLostDaysAccom';
arrValue[37]='tb_rvs_visit_sTaDay3';
arrValue[38]='tb_rvs_visit_sTaDay7';
arrValue[39]='tb_rvs_visit_sTaDay14';
arrValue[40]='tb_rvs_visit_sTaDay28';


arrName[1]='Date of Entry';
arrName[2]='Name';
arrName[3]='Age';
arrName[4]='Sex';
arrName[5]='Address';
arrName[6]='Phone Number';
arrName[7]='City';
arrName[8]='Geog Locality';
arrName[9]='Occupation';
arrName[10]='Kuppuswamy Scale Score';
arrName[11]='History';
arrName[12]='Allergies';
arrName[13]='Animal Type';
arrName[14]='Site of Bite';
arrName[15]='Provoked/Unprovoked';
arrName[16]='Stray/Pet/Wild';
arrName[17]='Bite Date';
arrName[18]='Associated Bleeding?';
arrName[19]='How Soon did Patient come?';
arrName[20]='Tx at Home?';
arrName[21]='Tx at Local Practioner?';
arrName[22]='Could the Dog be Rabid?';
arrName[23]='Washed wound with soap and water ?';
arrName[24]='injection TT Given?';
arrName[25]='WHO Bite Category';
arrName[26]='Systematic Treatment Given?';
arrName[27]='Immunoglobin Received?';
arrName[28]='Animals subsequent fate?';
arrName[29]='Cost/Bite in Travel';
arrName[30]='Cost/Bite in Vaccines';
arrName[31]='Cost/Bite in Sera';
arrName[32]='Cost/Bite in Local Medicines';
arrName[33]='Cost/Bite in Wage Loss';
arrName[34]='Total Cost/Bite in Rs';
arrName[35]='No of Days Lost by Victim';
arrName[36]='No of Days Lost by Accompanying Person';
arrName[37]='Followed up on Day 3';
arrName[38]='Followed up on Day 7';
arrName[39]='Followed up on Day 14';
arrName[40]='Followed up on Day 28';

var flagg = 0;


    function changeSearchBy(value,id)
    {   flagg = 1;
        var arrId = new Array();
        arrId = id.split('selection');
        var cnt = arrId[1];
        var newId = 'issues'+cnt;
       if(value !='')
       {
          if(value == 'tb_rvs_visit_sSelSex')
          {
              document.getElementById('spanIssues'+cnt).innerHTML =\"<select name='issues[]' id='\"+newId+\"' class='classSelect'>$valueSex</select>\";
          }
          else if(value == 'tb_rvs_visit_sSelWhoBite')
          {
              document.getElementById('spanIssues'+cnt).innerHTML =\"<select name='issues[]' id='\"+newId+\"' class='classSelect'>$valueWhoBite</select>\";
          }
          else if(value == 'BetweenDates')
          {
             document.getElementById('spanIssues'+cnt).innerHTML = \"<input type=text name=issues[] id='\"+newId+\"' class=classTextBox size='6'/>&nbsp;&nbsp;&nbsp;<input type=text  name=issues2 id=issuesB class=classTextBox size='6'/>\";
             $('#'+newId).datepicker({
      			changeMonth: true,
                dateFormat: 'dd-mm-yy',
                changeYear: true

      		});
            $('#issuesB').datepicker({
      			changeMonth: true,
                dateFormat: 'dd-mm-yy',
                changeYear: true

      		});
          }
          else if(value == 'tb_rvs_visit_dTextActualEntryDate' || value == 'LessThanDate' || value =='greaterThanDate')
          {
              document.getElementById('spanIssues'+cnt).innerHTML = \"<input type=text  name=issues[] id='\"+newId+\"' class=classTextBox/>\";
              $('#'+newId).datepicker({
      			changeMonth: true,
                dateFormat: 'dd-mm-yy',
                changeYear: true

      		});
          }
          else
          {
              document.getElementById('spanIssues'+cnt).innerHTML = \"<input type=text  name=issues[] id='\"+newId+\"' class=classTextBox/>\";
          }
        }
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

$arrName = array('','Age','Sex','Date','Occupation','Who Bite');
$arrValue = array('','tb_rvs_visit_sTextAge','tb_rvs_visit_sSelSex','tb_rvs_visit_dTextActualEntryDate','tb_rvs_visit_sTextOccupation','tb_rvs_visit_sSelWhoBite');

$pageBody = "</div>
        <div id='bar'>
            <span id='headBar'>Medicinal and Aromamatic Plants Database</span>                  <b></b>
        </div>

<div id='formbase'>
<form id='frmSearchStats' name='frmSearchStats' action='dbt_search_results.php' method='POST' onsubmit='return validate_form()'>
<div class='hd'>ENTER SEARCH DETAILS </div>
<table>
  <tr>
    <td colspan='5'>
      <div id='issues_div'>
         <div>
         <table class='classTable'>
            <tbody id='idsrchtbody'>
                <tr height='40px' class='classRow'>
                    <td width='200'><label id='idsearchpara1lbl' class='classLabel'>Search Parameter 1</label></td>
                    <td width='200'><select id='idsearchddl1' name='searchddl[]' class='classSelect' onchange='change1(this);'>
                            <option value=''>Select</option>
                            <option value='DBT_number'>DBT Sanction No.</option>
                            <option value='date_of_initiation'>Date of Initiation</option>
                            <option value='	investigator_name'>Investigator(s)</option>
                            <option value='place_of_work'>Places of work</option>
                            <option value='speciality'>Speciality of Investigator</option>
                            <option value='capacity_building'>Capacity Building(M. Sc. / Ph.D. produced)</option>
                            <option value='patent_filed'>Patent Filed</option>
                            <option value='publication'>Publication</option>
                            <option value='title_of_project'>Title of project</option>
                            <option value='plant_name'>Plant name on which work has been done</option>
                            <option value='area_of_research'>Area of research</option>
                            <option value='therapeutic_area_of_research'>Therapeutic area of research</option>
                            <option value='plant_latin_name'>Latin name</option>
                            <option value='plant_vernacular_name'>Vernacular name</option>
                            <option value='traditional_name'>Traditional Medicine name(In Report)</option>
                            <option value='traditionally_mentioned'>Is mentioned in traditional medicine</option>
                            <option value='basis_of_selection_of_plant'>Basis for selection of plant</option>
                            <option value='part_of_plant'>Part of plant used</option>
                            <option value='name_of_Boimaker'>Biomarker's name</option>
                            <option value='description_of_biomaker'>Biomarker's description</option>
                            <option value='chemistry_manufacturig_conrtrol'>Chemistry manufacturing control</option>
                            <option value='raw_material'>Raw material</option>
                            <option value='drug_product'>Drug Product</option>
                            <option value='finished_product'>Finished Product</option>
                            <option value='type_of_extract'>Type of extract(s) used</option>
                            <option value='type_of_study'>Type of study</option>
                            <option value='in_vitro'>In vitro</option>
                            <option value='experimental'>Experimantal</option>
                            <option value='clinical'>Clinical</option>
                            <option value='model'>Model(s) (accuracy and novelty)</option>
                            <option value='appropriate'>Was it appropriate?</option>
                            <option value='novel'>Was it Novel?</option>
                            <option value='other'>Any Other</option>
                            <option value='ayush_trust_area'>Is it on AYUSH Thrust area?</option>
                            <option value='hypothesis_generating'>Hypothesis generating?</option>
                            <option value='confirmatory studies'>Confirmatory studies?</option>
                            <option value='results'>Results</option>
                            <option value='statistical_test'>Statistical tests applied</option>
                            <option value='statistical_test_details'>Statistical details</option>
                            <option value='clinically_relevant'>Clinically relevant?</option>
                            <option value='clinically_relevant_details'>Clinically relevant details</option>
                            <option value='statistically_Significant'>Statistically significant</option>
                            <option value='were_these_tests_appropriate'>Were these tests appropriate?</option>
                            <option value='feasibility_of_Developing_a _drug'>Feasibility of Developing a Drug</option>
                            <option value='coments'>comments</option>
                    </select>
                    </td>
                    <td width='200'><select id='idcompddl1' name='compddl[]' class='classSelect operator' >
                            <option value=''>Select</option>
                            <option value='='>=</option>
                            <option value='&lt;'><</option>
                            <option value='&gt;'>></option>
                            <option value='&gt;='>>=</option>
                            <option value='&lt;='><=</option>
                            <option value='LIKE'>Like</option>
                    </select></td>
                        <td width='200' id='idsearchtd1'><input type='textbox' id='idsearchtxt1' name='searchtxt[]' class='classTextBox'/></td>
                </tr>
            </tbody>
        </table>

</div>

</div>

</td>

</tr>

<tr>

<td>

<div>

<input type='button' name='addanotherbtn' id='idaddanotherbtn' value='Add another Search Parameter' class='classButton' />



</div>




<input type='hidden' name='searchhdd' id='idsearchhdd' value='1' />

</td>

</tr>



</table>



<div class='bottomBar'>Search Options</div>

<table>

<tr>

<td colspan='7'>



&nbsp;



</td>

</tr>

<tr>

<td>


    &nbsp;



    </td>


  <td>

&nbsp;

    </td>
    <td>

    &nbsp;

    </td>
    <td>

&nbsp;    </td>
    <td>

    &nbsp;

    </td>
    <td>

   <input type='submit' id='idsearchbtn' value='Search' class='classButton' />
   <input type='button' id='idsearchbtn' value='Show all Titles' class='classButton' onclick='titleredirect();' />

    </td>
      <td>

    &nbsp;

    </td>

  </tr>
</table>
</form>
</div>
";

echo $pageBody;

$pageFooterStarts ="
        <div id='footer' align=center>";
echo  $pageFooterStarts;

include_once($path_to_root.'cm_footer.php');

$pageFooterEnds = "</div>
 </div>
        <div id=container style='display:none;' ></div>
</div>
                </center>
";

echo $pageFooterEnds;

?>
<script type="text/javascript">

function titleredirect()
{
  window.location.href="dbt_showtitle.php";
}

var chg="";
$(function() {
		$('#trans').datepicker({
			changeMonth: true,
            dateFormat: 'dd-mm-yy',
            changeYear: true
		});
        	$('#dob').datepicker({
			changeMonth: true,
            dateFormat: 'dd-mm-yy',
            changeYear: true
		});
	});



	function validate_form()
	{
		var searchBox = document.getElementById('idsearchtxt1');

		if (searchBox.value == '')
		{

			alert (' Empty Searches are not permitted, Kindly enter appropriate Values')
			return false;

		}


		/*
		aaa = document.getElementById('issues_count').value;

		alert (aaa);

		for (tempCounter=2; tempCounter <= aaa ; tempCounter++)
		{
			var newControl = 'issues'+ tempCounter;

			var searchBox = document.getElementById('newControl');

			alert ('Value is '+ searchBox.value);

			if (searchBox.value == '')
			{

				alert (' Empty Searches are not permitted, Kindly enter a name')
				return false;

			}




		}

		*/

        $(".operator").each(function ()
        {
          this.disabled = false;
        });

	}
    function change1(dis)
        {
         var split_id = dis.id.split("idsearchddl")
        // $("#idsearchddl"+split_id[1]);

          //var chg=document.getElementById('idsearchddl'+split_id[1]);

          if(dis.value == 'date_of_initiation')
          {
            $('#idsearchtxt'+split_id[1]).datepicker({
			changeMonth: true,
            dateFormat: 'dd-mm-yy',
            changeYear: true
		});
          }
        else if(dis.value == 'capacity_building')
        {
          document.getElementById('idcompddl'+split_id[1]).disabled=false; 
         document.getElementById('idsearchtd'+split_id[1]).innerHTML="<select name='searchtxt[]' id='idsearchtxt'"+split_id[1]+ "class='classSelect'><option value=''>Select</option><option value='Yes'>Yes</option><option value='No'>No</option><option value='Not Given'>Not Given</option></select>"
        }

          else if(dis.value == 'patent_filed')
          {
            document.getElementById('idcompddl'+split_id[1]).disabled=false;
            document.getElementById('idsearchtd'+split_id[1]).innerHTML="<select name='searchtxt[]' id='idsearchtxt'"+split_id[1]+ "class='classSelect'><option value=''>Select</option><option value='Yes'>Yes</option><option value='No'>No</option><option value='Not Given'>Not Given</option></select>"
          }

          else if(dis.value == 'publication')
          {
            document.getElementById('idcompddl'+split_id[1]).disabled=false;
            document.getElementById('idsearchtd'+split_id[1]).innerHTML="<select name='searchtxt[]' id='idsearchtxt'"+split_id[1]+" class='classSelect'><option value=''>Select</option><option value='Yes'>Yes</option><option value='No'>No</option><option value='Not Given'>Not Given</option></select>"
          }

         else if(dis.value == 'area_of_research')
          {
            document.getElementById('idcompddl'+split_id[1]).disabled=false;
            document.getElementById('idsearchtd'+split_id[1]).innerHTML="<select name='searchtxt[]' id='idsearchtxt'"+split_id[1]+" class='classSelect' onchange='result();'><option value=''>Select</option><option value='Drug Development'>Drug Development</option><option value='Micro propogation'>Micro propogation</option><option value='Agro Technology'>Agro Technology</option><option value='Biotechnology'>Biotechnology</option><option value='Genetic Engineering'>Genetic Engineering</option><option>Others</option></select>"
          }

         else if(dis.value == 'therapeutic_area_of_research')
          {
            document.getElementById('idcompddl'+split_id[1]).disabled=false;
            document.getElementById('idsearchtd'+split_id[1]).innerHTML="<select name='searchtxt[]' id='idsearchtxt'"+split_id[1]+" class='classSelect'><option value=''>Select</option><option value='CVS'>CVS</option><option value='CNS'>CNS</option><option value='RS'>RS</option><option value='Add other'>Add other</option></select>"
          }

         else if(dis.value == 'plant_vernacular_name')
          {
            document.getElementById('idcompddl'+split_id[1]).disabled=false;
             document.getElementById('idsearchtd'+split_id[1]).innerHTML="<select name='searchtxt[]' id='idsearchtxt'"+split_id[1]+" class='classSelect'><option value=''>Select</option><option value='Hindi'>Hindi</option><option value='English'>English</option><option value='Sanskrit'>Sanskrit</option></select>"
          }

         else if(dis.value == 'traditional_name')
          {
            document.getElementById('idcompddl'+split_id[1]).disabled=false;
            document.getElementById('idsearchtd'+split_id[1]).innerHTML="<select name='searchtxt[]' id='idsearchtxt'"+split_id[1]+" class='classSelect'><option value=''>Select</option><option value='Yes'>Yes</option><option value='No'>No</option><option value='Not Given'>Not Given</option></select>"
          }

         else if(dis.value == 'traditionally_mentioned')
          {
            document.getElementById('idcompddl'+split_id[1]).disabled=false;
            document.getElementById('idsearchtd'+split_id[1]).innerHTML="<select name='searchtxt[]' id='idsearchtxt'"+split_id[1]+" class='classSelect' onchange='traditional();'><option value=''>Select</option><option value='Yes'>Yes</option><option value'No'>No</option><option value='Not Given'>Not Given</option></select>"
          }

          else if(dis.value == 'basis_of_selection_of_plant')
          {
            document.getElementById('idcompddl'+split_id[1]).disabled=false;
            document.getElementById('idsearchtd'+split_id[1]).innerHTML="<select name='searchtxt[]' id='idsearchtxt'"+split_id[1]+" class='classSelect'><option value=''>Select</option><option value='Traditional medicine'>Traditional medicine</option><option value='Literature available'>Literature available</option><option value='Phyto-constituents'>Phyto-constituents</option><option value='Random'>Random</option><br /><option valua='Others'>Others</option></select>"
          }

         else if(dis.value == 'part_of_plant')
          {
            document.getElementById('idcompddl'+split_id[1]).disabled=false;
            document.getElementById('idsearchtd'+split_id[1]).innerHTML="<select name='searchtxt[]' id='idsearchtxt'"+split_id[1]+" class='classSelect'><option value=''>Select</option><option value='Whole plant'>Whole plant</option><option value='Leaf'>Leaf</option><option value='Root'>Root</option><option value='Stem'>Stem</option><option value='Fruit'>Fruit</option><option value='Rhizome'>Rhizome</option><option value='Bark'>Bark</option><option value='Others'>Others</option></select>"
          }

          else if(dis.value == 'chemistry_manufacturig_conrtrol')
          {
            document.getElementById('idcompddl'+split_id[1]).disabled=false;
            document.getElementById('idsearchtd'+split_id[1]).innerHTML="<select name='searchtxt[]' id='idsearchtxt'"+split_id[1]+" class='classSelect'><option value=''>Select</option><option value='Yes'>Yes</option><option value='No'>No</option><option value='Not Given'>Not Given</option></select>"
          }

         else if(dis.value == 'raw_material')
          {
            document.getElementById('idcompddl'+split_id[1]).disabled=false;
            document.getElementById('idsearchtd'+split_id[1]).innerHTML="<select name='searchtxt[]' id='idsearchtxt'"+split_id[1]+" class='classSelect' onchange='raw();'><option value=''>Select</option><option value='Yes'>Yes</option><option value='No'>No</option><option value='NA'>NA</option><option value='Not Given'>Not Given</option></select>"
          }

         else if(dis.value == 'drug_product')
          {
            document.getElementById('idcompddl'+split_id[1]).disabled=false;
            document.getElementById('idsearchtd'+split_id[1]).innerHTML="<select name='searchtxt[]' id='idsearchtxt'"+split_id[1]+" class='classSelect' onchange='drug();'><option value=''>Select</option><option value='Yes'>Yes</option><option value='No'>No</option><option value='NA'>NA</option><option value='Not Given'>Not Given</option></select>"
          }

         else if(dis.value == 'experimental')
          {
            document.getElementById('idcompddl'+split_id[1]).disabled=false;
           document.getElementById('idsearchtd'+split_id[1]).innerHTML="<select name='searchtxt[]' id='idsearchtxt'"+split_id[1]+" class='classSelect'><option value=''>Select</option><option value='In vitro'>In vitro</option><option value='Chemical'>Chemical</option></select>"
          }

         else if(dis.value == 'finished_product')
          {
            document.getElementById('idcompddl'+split_id[1]).disabled=false;
            document.getElementById('idsearchtd'+split_id[1]).innerHTML="<select name='searchtxt[]' id='idsearchtxt'"+split_id[1]+" class='classSelect' onchange='finish();'><option value=''>Select</option><option value='Yes'>Yes</option><option value='No'>No</option><option value='NA'>NA</option><option value='Not Given'>Not Given</option></select>"
          }

         else if(dis.value == 'type_of_study')
          {
            document.getElementById('idcompddl'+split_id[1]).disabled=false;
           document.getElementById('idsearchtd'+split_id[1]).innerHTML="<select name='searchtxt[]' id='idsearchtxt'"+split_id[1]+" class='classSelect' onchange='vitro();'><option value=''>Select</option><option value='In vitro'>In vitro</option><option value='In vivo'>In vivo</option><option VALUE='al'>al</option><option value='Others'>Others</option></select>"
          }

         else if(dis.value == 'type_of_extract')
          {
            document.getElementById('idcompddl'+split_id[1]).disabled=false;
            document.getElementById('idsearchtd'+split_id[1]).innerHTML="<select name='searchtxt[]' id='idsearchtxt'"+split_id[1]+" class='classSelect' onchange='ext(this);'><option value=''>Select</option><option value='Water'>Water</option><option value='Hydrochloric Acid'>Hydrochloric Acid</option><option value='Alcohol'>Alcohol</option><option value='Petroleum Ehter'>Petroleum Ehter</option><option value='Chloroform'>Chloroform</option><option value='Methanol'>Methanol</option><option value='Other'>Other</option></select>"
          }

         else if(dis.value == 'appropriate')
          {
            document.getElementById('idcompddl'+split_id[1]).disabled=false;
            document.getElementById('idsearchtd'+split_id[1]).innerHTML="<select name='searchtxt[]' id='idsearchtxt'"+split_id[1]+" class='classSelect'><option value=''>Select</option><option value='Yes'>Yes</option><option value='No'>No</option></select>"
          }

         else if(dis.value == 'novel')
          {
            document.getElementById('idcompddl'+split_id[1]).disabled=false;
             document.getElementById('idsearchtd'+split_id[1]).innerHTML="<select name='searchtxt[]' id='idsearchtxt'"+split_id[1]+" class='classSelect'><option value=''>Select</option><option value='Yes'>Yes</option><option value='No'>No</option></select>"
          }

         else if(dis.value == 'ayush_trust_area')
          {
            document.getElementById('idcompddl'+split_id[1]).disabled=false;
              document.getElementById('idsearchtd'+split_id[1]).innerHTML="<select name='searchtxt[]' id='idsearchtxt'"+split_id[1]+" class='classSelect'><option value=''>Select</option><option value='Yes'>Yes</option><option value='No'>No</option></select>"
          }

         else if(dis.value == 'statistical_test')
          {
            document.getElementById('idcompddl'+split_id[1]).disabled=false;
             document.getElementById('idsearchtd'+split_id[1]).innerHTML="<select name='searchtxt[]' id='idsearchtxt'"+split_id[1]+" class='classSelect'><option value=''>Select</option><option value='Yes'>Yes</option><option value='No'>No</option></select>"
          }

         else if(dis.value == 'statistically_Significant')
          {
            document.getElementById('idcompddl'+split_id[1]).disabled=false;
            document.getElementById('idsearchtd'+split_id[1]).innerHTML="<select name='searchtxt[]' id='idsearchtxt'"+split_id[1]+" class='classSelect'><option value=''>Select</option><option value='Yes'>Yes</option><option value='No'>No</option></select>"
          }

         else if(dis.value == 'were_these_tests_appropriate')
          {
            document.getElementById('idcompddl'+split_id[1]).disabled=false;
            document.getElementById('idsearchtd'+split_id[1]).innerHTML="<select name='searchtxt[]' id='idsearchtxt'"+split_id[1]+" class='classSelect'><option value=''>Select</option><option value='Yes'>Yes</option><option value='No'>No</option></select>"
          }

         else if(dis.value == 'feasibility_of_Developing_a _drug')
          {
            document.getElementById('idcompddl'+split_id[1]).disabled=false;
             document.getElementById('idsearchtd'+split_id[1]).innerHTML="<select name='searchtxt[]' id='idsearchtxt'"+split_id[1]+" class='classSelect'><option value=''>Select</option><option value='Yes'>Yes</option><option value='No'>No</option></select>"
          }

         else if(dis.value == 'clinically_relevant')
          {
              document.getElementById('idcompddl'+split_id[1]).disabled=false;
             document.getElementById('idsearchtd'+split_id[1]).innerHTML="<select name='searchtxt[]' id='idsearchtxt'"+split_id[1]+" class='classSelect'><option value=''>Select</option><option value='Yes'>Yes</option><option value='No'>No</option></select>"
          }
           else if(dis.value == 'description_of_biomaker')
          {
             document.getElementById('idcompddl'+split_id[1]).value="LIKE";
             document.getElementById('idcompddl'+split_id[1]).disabled=true;
          }
           else if(dis.value == 'clinical')
          {
             document.getElementById('idcompddl'+split_id[1]).value="LIKE";
             document.getElementById('idcompddl'+split_id[1]).disabled=true;
          }
           else if(dis.value == 'model')
          {
             document.getElementById('idcompddl'+split_id[1]).value="LIKE";
             document.getElementById('idcompddl'+split_id[1]).disabled=true;
          }
           else if(dis.value == 'other')
          {
             document.getElementById('idcompddl'+split_id[1]).value="LIKE";
             document.getElementById('idcompddl'+split_id[1]).disabled=true;
          }
           else if(dis.value == 'hypothesis_generating')
          {
             document.getElementById('idcompddl'+split_id[1]).value="LIKE";
             document.getElementById('idcompddl'+split_id[1]).disabled=true;
          }
           else if(dis.value == 'confirmatory studies')
          {
             document.getElementById('idcompddl'+split_id[1]).value="LIKE";
             document.getElementById('idcompddl'+split_id[1]).disabled=true;
          }
           else if(dis.value == 'results')
          {
             document.getElementById('idcompddl'+split_id[1]).value="LIKE";
             document.getElementById('idcompddl'+split_id[1]).disabled=true;
          }
            else if(dis.value == 'statistical_test_details')
          {
             document.getElementById('idcompddl'+split_id[1]).value="LIKE";
             document.getElementById('idcompddl'+split_id[1]).disabled=true;
          }
            else if(dis.value == 'clinically_relevant_details')
          {
             document.getElementById('idcompddl'+split_id[1]).value="LIKE";
             document.getElementById('idcompddl'+split_id[1]).disabled=true;
          }
            else if(dis.value == 'coments')
          {
             document.getElementById('idcompddl'+split_id[1]).value="LIKE";
             document.getElementById('idcompddl'+split_id[1]).disabled=true;
          }
           else if(dis.value == 'plant_name')
          {
             document.getElementById('idcompddl'+split_id[1]).value="LIKE";
             document.getElementById('idcompddl'+split_id[1]).disabled=true;
          }
           else
          {
            document.getElementById('idsearchtd'+split_id[1]).innerHTML="<input type='textbox' id='idsearchtxt'"+split_id[1]+" name='searchtxt[]' class='classTextBox'/>"
          }

          }


  var srch="";

        $(document).ready(function(){

            var divs=document.getElementById('idsrchtbody').getElementsByTagName('tr');
            srch=divs[divs.length-1].cloneNode(true);

            $('#idaddanotherbtn').click(function ()
            {
                var root=document.getElementById('idsrchtbody');
                var divs=root.getElementsByTagName('tr');
                root.appendChild(srch);
                srch = divs[divs.length-1].cloneNode(true);
                var formCounter = document.getElementById('idsearchhdd');
                formCounter.value++;

                aaa = document.getElementById('idsearchhdd').value;

                var xyz = divs[divs.length-1];

                xyz3 = xyz.getElementsByTagName("select");
                xyz2 = xyz.getElementsByTagName("td");
                xyz1 = xyz.getElementsByTagName("input");
                xyz0 = xyz.getElementsByTagName("label");
                //xyz2 = xyz.getElementsByTagName("textarea");

                xyz3[0].setAttribute("id",'idsearchddl'+aaa);
                xyz3[1].setAttribute("id",'idcompddl'+aaa);
                xyz2[3].setAttribute("id",'idsearchtd'+aaa);
                xyz1[0].setAttribute("id",'idsearchtxt'+aaa);
                xyz0[0].innerHTML = "Search Parameter "+ aaa;
                //xyz2[0].setAttribute("id",'miDetail'+aaa);

                /* CKEDITOR.replace( 'miDetail'+aaa,
                {
                    skin : 'office2003'
                });   */
            });

        });

   /*  var cnt=0;
    var clone;
    function clonediv()
    {
        var divs=document.getElementById('issues_div').getElementsByTagName('div');
        clone=divs[divs.length-1].cloneNode(true);

    }
    function addissues()
    {
       var root=document.getElementById('issues_div');
       var divs=root.getElementsByTagName('div');
       root.appendChild(clone);
       clone=divs[divs.length-1].cloneNode(true);

       var formCounter = document.getElementById('issues_count');
       cnt=formCounter.value ++;
       aaa = document.getElementById('issues_count').value;

       var xyz = divs[divs.length-1];
       xyz2 = xyz.getElementsByTagName("td");
       xyz2[0].innerHTML = "Search Parameter "+ aaa;

       xyz1 = xyz.getElementsByTagName("span");

       xyz1[0].setAttribute("id",'spanIssues'+aaa);

       xyz1[0].value='';


    }

  onload = clonediv;


onload = cloneDivSearch();

	  var cloneSearch;

  function cloneDivSearch()
  {
    var divsSearch= document.getElementById('issues_div').getElementsByTagName('div');
    cloneSearch = divsSearch[divsSearch.length-1].cloneNode(true);
  }
  var prevSearch = new Array();
  var prev = 0;
  function AddSearch()
  {
    SearchCnt = document.getElementById('issues_count');
    if(SearchCnt.value<8)
    {
    var rootSearch= document.getElementById('issues_div');
    var divsSearch = rootSearch.getElementsByTagName('div');
    rootSearch.appendChild(cloneSearch);
    cloneSearch = divsSearch[divsSearch.length-1].cloneNode(true);


    SearchCounter = document.getElementById('issues_count');

    SearchCounter.value++;
    var divsSearch1 = rootSearch.getElementsByTagName('div');
    var SearchCnt = document.getElementById('issues_count').value;
    var SearchElements = divsSearch1[divsSearch1.length-1];

xyz2 = SearchElements.getElementsByTagName("td");
       xyz2[0].innerHTML = "Search Parameter "+ SearchCnt;


   //xyz1 = SearchElements.getElementsByTagName("span");

     //  xyz1[0].setAttribute("id",'spanIssues'+SearchCnt);

       //xyz1[0].value='';



    SearchElement2 =  SearchElements.getElementsByTagName('select');
    SearchElement3 =  SearchElements.getElementsByTagName('span');

    SearchElement2[0].setAttribute('id','selection'+SearchCnt);
    SearchElement2[1].setAttribute('id','selection_cndtn'+SearchCnt);

    SearchElement3[0].setAttribute('id','spanIssues'+SearchCnt);

    var NewSearch = SearchCnt-1;
    prevSearch[prev] = document.getElementById('selection'+NewSearch).value;

     var arrSearch = '';
     var arrNewValue = new Array();
     var arrNewName = new Array();


     for(ll=0;ll<arrValue.length;ll++)
     {
         flagFound=0;
            for(jj=0;jj<prevSearch.length;jj++)
            {
                if(arrValue[ll]==prevSearch[jj])
                {
                    flagFound=1;
                }
            }
            if(flagFound==0)
            {
                 arrSearch += '<option value='+arrValue[ll]+'>'+arrName[ll]+'</option>';
            }
         }


    //    document.getElementById('selection'+SearchCnt).innerHTML = arrSearch;

        prev++;
       }
       else
       {
            alert('No Parameter Remaining For Search');
      //      document.getElementById('idBtnAddSearch').disabled='disabled'
       }
    }




 function fnLoader()
 {
 value = document.getElementById('selection1').value;
 id = 'selection1';
 changeSearchBy(value,id);
 }

 onload = fnLoader();
*/

    </script>