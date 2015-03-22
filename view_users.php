<?php

    include_once("cm_chk.php");
    $path_to_root = "";
    $top_title = "Dashboard";

    $open = "";

    if(isset($_GET['open']))
        $open = $_GET['open'];
    //! if Session is set.

    @include_once("util/class.db1UserInfo.php");
    @include_once('left_col.php');

    $aSearchResult = $oUser -> get_data();

    $iArraySize = sizeof($aSearchResult);
    $ResultCnt = $iArraySize;
   // print_r($aSearchResult);

    $iLoop = 0;   //! initialize counter to 0(zero).

    //print_r($aSearchResult);

    echo "<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Strict//EN'
    'http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd'>
    <html xmlns='http://www.w3.org/1999/xhtml'>

    <head>

    <title>User's Information </title>

    <script type='text/javascript' src='js/jquery/jquery-1.3.2.js'></script>
    <script type='text/javascript' src='js/jquery.ingrid.js'></script>
    <link rel='stylesheet' href='css/ingrid.css' type='text/css' media='screen' />

      <script type='text/javascript'>

      $(document).ready(
      	function() {
      		$('#idViewUsers').ingrid({
      			height: 150,
      			rowClasses: ['grid-row-style1','grid-row-style2','grid-row-style3','grid-row-style1','grid-row-style2','grid-row-style3'],
      			sorting: false,
      			paging: true,
                totalRecords:$ResultCnt

      		});
      	}
      );

      function checkDelete(id)
      {
        if(confirm('Are You Sure?'))
        {
            window.location.href = 'delete_user.php?LoginId='+id ;
        }
      }
      </script>
      <meta http-equiv='pragma' content='no-cache' /> ";

 include_once($path_to_root.'cm_top.php');

   echo " </head> ";

    echo "<body oncontextmenu='return false;'>

<div align='center'>";

    include_once($path_to_root.'cm_header.php');
   echo "<div id='main'>
        <div id='leftcol'> ";
          include_once($path_to_root.'cm_left_col.php');

       echo "</div>
        <div id='bar'>
            <span id='headBar'>DBT Study</span>
        </div>
        <div id='containerMain' >
    <center>
    <div id='containerDiv'><div id='head1'><div id='headtitle1'><table border='0'><tr><td valign='middle'>
User Details
</td></tr></table></div></div><div id='containerData'> ";


    if($iArraySize>0)
    {
    echo  "

    <table id='idViewUsers'>
      <thead>
       <tr >

            <th> Sr.No.      </th>

            <th> Login Id    </th>

            <th> Name        </th>

            <th> Email ID    </th>

            <th> Department  </th>

            <th> Contact No  </th>

            <th> Update      </th>

            <th > Delete      </th>

       </tr>
      </thead>  <tbody> ";
    $iSrNo = 0;
    while($iLoop<$iArraySize)
    {

      $sIDLogin = stripslashes($aSearchResult[$iLoop]['login_id']);                //! retrieving value from array.

      $sName = stripslashes($aSearchResult[$iLoop]['name']);                       //! retrieving value from array.

      $sPassword = stripslashes($aSearchResult[$iLoop]['password']);               //! retrieving value from array.

      $sEmail = stripslashes($aSearchResult[$iLoop]['email']);                  //! retrieving value from array.

      $sContact = stripslashes($aSearchResult[$iLoop]['contact_no']);                 //! retrieving value from array.

      $sDepartment = stripslashes($aSearchResult[$iLoop]['department']);                 //! retrieving value from array.

      $iSrNo++;

   echo "

       <tr >

            <td > <span class='classSpanData'> $iSrNo        </span> </td>

            <td> <span class='classSpanData'> $sIDLogin     </span> </td>

            <td > <span class='classSpanData'> $sName        </span> </td>

            <td > <span class='classSpanData'> $sEmail       </span> </td>

            <td > <span class='classSpanData'> $sDepartment  </span> </td>

            <td > <span class='classSpanData'> $sContact     </span> </td>

            <td > <span class='classSpanData'> <a href='update_user.php?userId=$sIDLogin' class='classLink'>Update </a>     </span> </td>

            <td ><a style='cursor:pointer;' onclick=checkDelete('$sIDLogin');  class='classLink'>Delete </a></td>

       </tr>

      ";


    $iLoop++; //! increment of counter by one
    }
    }

    echo "
     </tbody>
    </table>
    <br /><br />

 </div>
    </div>



<div id=bottomBar align='center'>
<input type='button' value='Go To Dashboard' onclick=\"window.location.href='dashboard.php';\" >
</div>
 </center>
</div>

        <div id='footer'> ";

       include_once($path_to_root.'cm_footer.php');

       echo "</div>
 </div>
        <div id=container style='display:none;'></div>
</div>
    </body>
    </html> ";



?>