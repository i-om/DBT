<?php
    include_once("cm_chk.php");
    $path_to_root = "";
    $top_title = "Dashboard";

    $open = "";

    if(isset($_GET['open']))
        $open = $_GET['open'];

    /*session_start();
    $sLoginId = $_SESSION["LoginId"];
    $sRights = $_SESSION["Rights"];*/

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="pragma" content="no-cache" />
    <?php include_once($path_to_root.'cm_top.php');?>


    <link type="text/css" href="js/jquery/themes/ui.all.css" rel="stylesheet" />
	<script type="text/javascript" src="js/jquery/jquery-1.4.4.js"></script>
	<script type="text/javascript" src="js/jquery/ui/ui.core.js"></script>
	<script type="text/javascript" src="js/jquery/ui/ui.draggable.js"></script>
	<script type="text/javascript" src="js/jquery/ui/ui.resizable.js"></script>
	<script type="text/javascript" src="js/jquery/ui/ui.dialog.js"></script>
	<script type="text/javascript" src="js/jquery/ui/effects.core.js"></script>
	<script type="text/javascript" src="js/jquery/ui/effects.highlight.js"></script>
	<script type="text/javascript" src="js/jquery/external/bgiframe/jquery.bgiframe.js"></script>
    <link type="text/css" href="js/jquery/themes/jquery-ui-1.7.2.custom.css" rel="stylesheet" />
    <script type='text/javascript' src='js/jquery/ui/ui.datepicker.js'></script>
    <script type='text/javascript' src='js/homepage.js'></script>


    <script type="text/javascript" src="js/jquery/ui/effects.blind.js"></script>



    <style type="text/css">
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


</head>
<body oncontextmenu="return false;">

<div align="center">
    <?php include_once($path_to_root.'cm_header.php'); ?>
    <div id='main'>
        <div id='leftcol'>
            <?php include_once($path_to_root.'cm_left_col.php'); ?>
        </div>
        <div id='rightcol' >

        </div>
        <div id='containerMain' style="width:730px;">

<div id=buttonContainer>
    <a title='Search Database' onclick="searchPatientForm();">
        <!--<img src=<?php echo $path_to_root;?>"images/visit.png" width=82 height=82 /><div id=title >Schedule Manager</div>-->
        <img src=<?php echo $path_to_root;?>"images/clinoin.icons/Scheduled-Tasks-icon.png" width=82 height=82 /><div id=title >Search Study Database</div>
    </a>
    <a  title='Add to Database.' href='dbt_add.php' >
        <img src=<?php echo $path_to_root;?>"images/account.png"  width=82 height=82 /><div id=title >Add New Entry</div>
    </a>

    <a  title='Statistics.' onclick="statistic();" >
        <img src=<?php echo $path_to_root;?>"images/patient.png" width=82 height=82 /><div id=title >Statistics</div>
    </a>

    <a  title='Management.' onclick="userManagement()" >
        <img src=<?php echo $path_to_root;?>"images/clinoin.icons/Lightbrown-Themes-WIP-icon.png" width=82 height=82 /><div id=title >Management</div>
    </a>


</div>

        </div>

        <div id='footer'>
          <?php include_once($path_to_root.'cm_footer.php'); ?>
        </div>
    </div>
    <!-- Modal Part -->
    <div id=container style="display:none;"></div>

</div>
</body>
</html>
