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

    $id=addslashes($_REQUEST['id']);

    $query= "DELETE from `admin` where `admin_id` = '$id'";

    $result=mysqli_query($connect,$query);

    ?>

    <link rel="stylesheet" href="css/rvs_css.css" type="text/css" />

    <?php

    $pageHeaderStarts = "<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Strict//EN'
            'http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd'>

    <html xmlns='http://www.w3.org/1999/xhtml'>

        <head>
            <title>Delete Results</title>

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
                                        <td width='200'><label id='idrecordlbl' class='classLabel'>One Record deleted :</label></td>
                                    </tr>
                                </table>";

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

                            /* if (mysqli_affected_rows($connect)==0)
                             {
                                header("location: user.html?error_msg=1");
                             }

                             else
                            {
                                $_SESSION["login"]=1;
                                header("location: first.html?login_status=".$_SESSION["login"]);
                            }*/

?>