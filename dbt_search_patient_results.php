<?php
   include_once("cm_chk.php");
    $path_to_root = "";
    $top_title = "Dashboard";

    $open = "";

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

  $getdbtno=addslashes($_POST['dbtno']);
 $getinvest=addslashes($_POST['investigator']);
 $gettitle=addslashes($_POST['title']);
 $getplant=addslashes($_POST['plant']);
 $getarea=addslashes($_POST['area']);







$whq = "";
if($getdbtno != '')
{
  if($whq == "")
  {
    $whq = "`admin`.`DBT_number` ='".$getdbtno."'";
  }
  else
  {
     $whq .= " AND `admin`.`DBT_number` ='".$getdbtno."'";
  }
}

if($getinvest != '')
{
  if($whq == "")
  {
    $whq = "`admin`.`investigator_name` LIKE'%".$getinvest."%'";
  }
  else
  {
     $whq .= " AND `admin`.`investigator_name` LIKE'%".$getinvest."%'";
  }
}

if($gettitle != '')
{
  if($whq == "")
  {
    $whq = "`admin`.`title_of_project` ='".$gettitle."'";
  }
  else
  {
     $whq .= " AND `admin`.`title_of_project` ='".$gettitle."'";
  }
}

if($getplant != '')
{
  if($whq == "")
  {
    $whq = "`plant`.`plant_name` LIKE'%".$getplant."%'";
  }
  else
  {
     $whq .= " AND `plant`.`plant_name` LIKE'%".$getplant."%'";
  }
}

if($getarea != '')
{
  if($whq == "")
  {
    $whq = "`admin`.`area_of_research` ='".$getarea."'";
  }
  else
  {
     $whq .= " AND `admin`.`area_of_research` ='".$getarea."'";
  }
}


 $query="Select `admin`.`DBT_number`,
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
`results`.`coments`,
`admin`.`admin_id`
FROM `admin` LEFT JOIN `plant` ON `admin`.`admin_id`=`plant`.`admin_id` LEFT JOIN `results` ON `results`.`admin_id`=`plant`.`admin_id`
WHERE ".$whq;

$result=mysqli_query($connect,$query);

$retrieve_array=array();
while($data=mysqli_fetch_array($result))
{
   $retrieve_array[]=$data;
}

//print_r($retrieve_array);
 foreach($retrieve_array as $rowNum => $data)
 {
  // print_r($data);
  $sanction[]=$data['DBT_number'];

  $sInvestigatorname[]=$data['investigator_name'];
  $sInvestigatoradd[]=$data['place_of_work'];

  $title[]=$data['title_of_project'] ;
  $plant[]=$data['plant_name'] ;
  $area[]=$data['area_of_research'];
  $admin_id[]=$data['admin_id'];


}

$count_id=count($retrieve_array);



/*include_once('util/class.dbRvsDetails.php');
include_once('emulator/rvs_functions.php');

$patientName   = @$_REQUEST['patientName'];
$aResultArray = getSearchResultsByName($patientName);*/       ?>
     <link rel="stylesheet" href="css/rvs_css.css" type="text/css" />
<?php
$pageHeaderStarts = "<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Strict//EN'
    'http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd'>

<html xmlns='http://www.w3.org/1999/xhtml'>

<head>
  <title>Search Results</title>
  <link rel='stylesheet' type='text/css' href='css/rvs_css.css'></link>
   <link rel='stylesheet' type='text/css' href='css/stylesheetCommon.css' />
  <script language='javascript' src='js/validatations.js'></script>
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
  function showTable()
  {
      if('$sSelSearchFor' == 'Full Result')
      {
          document.getElementById('divContactSearch').style.display='block';
      }

  }

  function GoBack()
    {
        javascript:history.go(-1);
    }


  function showTableNow()
  {
      document.getElementById('divContactSearch').style.display='block';
  }
  onload = showTable


  </script>
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
<form name='frmContactSearch' id='frmContactSearch' class='classForm'>
<div id='containerDiv'>
<div id='head1'>
<div id='headtitle1'>
<table border='0'>
<tr >
<td valign='middle'>
Search Results
</td>
</tr>
</table>
</div>
</div>
<div id='containerData'>
<br />
    <table class='classTable'>
            <tr height='40px' class='classRow'>
                <td width='200'><label id='idrecordlbl' class='classLabel'>No. of Records found :</label></td>
                <td width='200'><label id='idgetrecordlbl' class='classLabel'>".count($retrieve_array)."</label></td>
            </tr>
        </table>
        <div align='center'>
            <input type='button' id='idshowbtn' value='Show Full Results' class='classButton' onclick='showresult();' />
        </div>
        <div id='idviewdata' style='display:none'>
            <table id='idviewtbl' class='classTable' border='1'>
                    <tr height='40px' class='classRow'>
                         <td ><label id='iddbtno' class='classLabel' >DBT Sanction No.</label></td>
                        <td ><label id='idinvestigatorlbl' class='classLabel' >Investigator's Name and Address</label></td>
                        <td ><label id='idtitlelbl' class='classLabel' >Title of Project</label></td>
                        <td ><label id='idplantlbl' class='classLabel' >Plant name</label></td>
                        <td ><label id='idarea' class='classLabel' >Area of Research</label></td>
                        <td ><label id='idview' class='classLabel' >View</label></td>
                        <td ><label id='idupdate' class='classLabel' >Update</label></td>
                        <td ><label id='iddelete' class='classLabel' >Delete</label></td>
                    </tr>";
                        for ($ii=0; $ii<$count_id; $ii++)
                        {

                            $pageBody.="<tr height='40px'>
                            <td ><label id='idgetdbtnolbl' class='classLabel'>".$sanction[$ii]."</td>
                            <td><table border='1'>
                            <tr>
                            <td ><label id='idinvestigatorname' class='classLabel' style='color:red;'>Name</label></td>
                            <td ><label id='idinvestigatoraddress' class='classLabel' style='color:green;'>Address</label></td>
                            </tr>";

                            $aInvestigatorname=explode("#*",$sInvestigatorname[$ii]);
                            $aInvestigatoradd=explode("#*",$sInvestigatoradd[$ii]);
                             $var=0;
                           foreach( $aInvestigatorname as $data_in )
                            {

                            $pageBody .= "<tr>
                            <td ><label id='idgetinvestigatorlbl' class='classLabel'>".$aInvestigatorname[$var]."</td>
                            <td ><label id='idgetinvestigatoraddlbl' class='classLabel'>". $aInvestigatoradd[$var]."</td>
                            </tr>";
                            $var++;
                            }

                            $pageBody .= "</table> </td>
                            <td ><label id='idgettitlelbl' class='classLabel'>".$title[$ii]."</td>
                            <td ><label id='idgetplantlbl' class='classLabel' style='font-style:italic' >".$plant[$ii]."</td>
                            <td ><label id='idgetarealbl' class='classLabel'>".$area[$ii]."</td>
                            <td ><a href='dbt_view.php?id=".$admin_id[$ii]."' style='color:green; text-decoration:underline' >view</a></td>
                            <td ><a href='dbt_update.php?id=".$admin_id[$ii]."' style='color:blue; text-decoration:underline' >update</a></td>
                            <td ><a href='javascript:confirmDelete(\"dbt_delete.php?id=".$admin_id[$ii]."\")' style='color:red; text-decoration:underline' >Delete</a></td>
                            </tr>";
                        }

   $pageBody.= "</table>
 <br />
 <br />
 </div>
 </div>

";

echo $pageBody;

$pageFooterStarts ="
<div id=bottomBar align='center'>
<input type='button' id='go_Back' value='Go Back' onClick='GoBack();'>
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

<script type="text/javascript" src="js/jquery/jquery-1.4.4.js"></script>

    <script type="text/javascript" >

    function showresult()
    {
      document.getElementById('idviewdata').style.display='block';
    }

    function confirmDelete(delUrl){
      if(confirm("Are you Sure?"))
      {
         window.location.href = delUrl;
      }
    }
    </script>
