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
/*
$sSelSearchFor   = @$_REQUEST['sSelSearchFor'];
$sSelSearchBy    = @$_REQUEST['sSelSearchBy'];

$hidSearchCounter    = @$_REQUEST['hidSearchCounter'];
//echo $hidSearchCounter."......";
$arrSerachWhat = array();
$arrSearchBy = array();
for($kk=0;$kk<$hidSearchCounter;$kk++)
{
    $arrSearchBy[] = addslashes(@$_REQUEST['sSelSearchBy'][$kk]);
    $arrSerachWhat[] = addslashes(@$_REQUEST['sTextSerachWhat'][$kk]);
}
//print_r($arrSerachWhat);   exit;
$sTextSerachWhat2 = @$_REQUEST['sTextSerachWhat2'];


$selection_cndtn = $_POST['selection_cndtn'];

$selection = $_POST['selection'];

$issues = $_POST['issues'];

$issues_count = $_POST['issues_count'];

$search_str = "WHERE ";
$search_str_for_display = "Search Parameters: ";
for ($ii = 0; $ii< $issues_count ; $ii++)
{
	if  ($issues[$ii] != '')
	{
		$search_str .= "$selection[$ii] "."$selection_cndtn[$ii] "."'$issues[$ii]'". " AND " ;
		$this_selection = $selection[$ii];
//		$display_selection = $criteria_db_map[$this_selection];
//		$search_str_for_display .= "$display_selection "."$selection_cndtn[$ii] "."'$issues[$ii]' ";
	}else
	{

		header("location:search_stats.php?error=1");
	}
}



$search_str .= "tb_rvs_visit_id > 0";

$search_str = "select * from `tb_rvs_visit` ".$search_str;

//$search_results = get_search_results($search_str);

$aResultArray = getSearchStraight($search_str);

$num_Responses =  $aResultArray['count'];*/
//echo $search_str;
//$num_Responses = count($search_results);


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
        //echo $hi=addslashes($_POST['compddl1']);


      $countSearch=addslashes($_POST['searchhdd']);
        $str ="";
        for($i=0; $i<$countSearch; $i++)
        {
            $com=addslashes($_POST['compddl'][$i]);
            $srch=addslashes($_POST['searchtxt'][$i]);

            if($com == 'LIKE')
            {
              $srch = "%$srch%";
            }

            else
            {
               $srch = "$srch";
            }

            if($str == "")
            {
                $str .= " ".addslashes($_POST['searchddl'][$i])." ".$com." '".$srch."'";
            }
            else
            {
                $str .= " AND ".addslashes($_POST['searchddl'][$i])." ".$com." '".$srch."'";
            }
        }

       /* if($getarea != '')
        {
            if($whq == "")
            {
                $whq = "`admin`.`area_of_research` ='".$getarea."'";
            }
            else
            {
                $whq .= " AND `admin`.`area_of_research` ='".$getarea."'";
            }
        }*/

        $str;
 $query="Select `admin`.`DBT_number`,
`admin`.`investigator_name` ,
`admin`.`place_of_work` ,
`admin`.`title_of_project` ,
`admin`.`area_of_research`,
`plant`.`plant_name` ,
`admin`.`admin_id`
FROM `admin` LEFT JOIN `plant` ON `admin`.`admin_id`=`plant`.`admin_id` LEFT JOIN `results` ON `results`.`admin_id`=`plant`.`admin_id`
WHERE ".$str;

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

$pageHeaderStarts = "<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Strict//EN'
    'http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd'>

<html xmlns='http://www.w3.org/1999/xhtml'>

<head>
  <title>Medicinal and Aromamatic Plants Database</title>
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
  function showTableNow()
  {
      document.getElementById('divContactSearch').style.display='block';
  }

   function GoBack()
    {
        javascript:history.go(-1);
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

   $pageBody .= "</table>
   </div>
  <br />
  <br />
 </div>
 </div>
";

echo $pageBody;

$pageFooterStarts ="
<div id=bottomBar align='center'><input type='button' id='go_Back' value='Go Back' onClick='GoBack()'>
<input type='button' value='Go To Dashboard' class='classButton' onclick=\"window.location.href='dashboard.php';\" >
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

