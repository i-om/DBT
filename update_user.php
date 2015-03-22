<?php

    include_once("cm_chk.php");
    $path_to_root = "";
    $top_title = "Dashboard";

    $open = "";

    if(isset($_GET['open']))
        $open = $_GET['open'];

    @include_once("util/class.db1UserInfo.php");
    @include_once('left_col.php');
    @include_once('js/validations.js');

    $sLoginID = $_GET['userId'];

    $aSearchResult = $oUser -> search_userLog($sLoginID);

    $iArraySize = sizeof($aSearchResult);

   // print_r($aSearchResult);

    $iLoop = 0;   //! initialize counter to 0(zero).

    //print_r($aSearchResult);

    echo "<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Strict//EN'
    'http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd'>
    <html xmlns='http://www.w3.org/1999/xhtml'>

    <head>

    <title>User's Information </title>

     <script language='javascript' type='text/javascript'>

        /*! Validations for inputs */
                function validate()
                {

                    var name = document.getElementById('idName').value;
                    var LoginId = document.getElementById('idLoginId').value;
                    var Password = document.getElementById('idPassword').value;


                if(name=='' || LoginId=='' || Password=='' || ConfirmPassword=='')       /*! Check for blank fields  */
                {
                    alert('Please Enter all Mandetory Fields');
                    return false;
                }
                else if (!(valid_name(name)  && valid_password(Password) && valid_loginId(LoginId)&& valid_password(ConfirmPassword)) )     /*! check for valid fields  */
                {
                    return false;
                }

                else
                {
                    return true;
                }

                }

     </script>

       <meta http-equiv='pragma' content='no-cache' />";

include_once($path_to_root.'cm_top.php');



    echo "</head> ";

    echo "

    <body oncontextmenu='return false;'>

   <div align='center'> ";

       include_once($path_to_root.'cm_header.php');
   echo "<div id='main'>
        <div id='leftcol'>";
          include_once($path_to_root.'cm_left_col.php');

       echo "</div>
        <div id='bar'>
            <span id='headBar'>Medicinal and Aromamatic Plants Database  Study</span>
        </div>
        <div id='containerMain' >
    <center>
    <form name='updateUserForm' class='classFormFormat' action='emulator/em_update_user.php' method='post' onsubmit='return validate();'>
    <div id='containerDiv'><div id='head1'><div id='headtitle1'><table border='0'><tr><td valign='middle'>
User Details
</td></tr></table></div></div><div id='containerData'>";


    if($iArraySize>0)
    {

      $sIDLogin = stripslashes($aSearchResult[$iLoop]['login_id']);                //! retrieving value from array.

      $sName = stripslashes($aSearchResult[$iLoop]['name']);                       //! retrieving value from array.

      $sPassword = stripslashes($aSearchResult[$iLoop]['password']);               //! retrieving value from array.

      $sEmail = stripslashes($aSearchResult[$iLoop]['email']);                  //! retrieving value from array.

      $sContact = stripslashes($aSearchResult[$iLoop]['contact_no']);                 //! retrieving value from array.

      $sUserRights = stripslashes($aSearchResult[$iLoop]['rights']);

      $sDepartment = stripslashes($aSearchResult[$iLoop]['department']);


   echo "


       <table class='classTableFormat'>

       <tr class='classTableRow'>

            <td class='classTableData'> Login Id    </td>

            <td class='classTableData'> <input type='text' name='txtLoginId' id='idLoginId' readonly class='classTextBox' value='$sIDLogin' /> </td>

       </tr>

       <tr class='classTableRow'>

            <td class='classTableData'> Name        </td>

            <td class='classTableData'> <input type='text' name='txtName' id='idName' class='classTextBox' value='$sName'/>        </td>

       </tr>

       <tr class='classTableRow'>

            <td class='classTableData' > Password    </td>

            <td class='classTableData'> <input type='text' name='txtPassword' id='idPassword' class='classTextBox' value='$sPassword' />     </td>

       </tr>

       <tr class='classTableRow'>

            <td class='classTableData'> Email ID    </td>

            <td class='classTableData'> <input type='text' name='txtEmail' id='idEmail' class='classTextBox' value='$sEmail' />      </td>

       </tr>

       <tr class='classTableRow'>

            <td class='classTableData'> Department    </td>

            <td class='classTableData'> <input type='text' name='txtDepartment' id='idDept' class='classTextBox' value='$sDepartment' />      </td>

       </tr>


       <tr class='classTableRow'>

            <td class='classTableData'> Contact No   </td>

            <td class='classTableData'> <input type='text' name='txtContact' id='idContact' class='classTextBox' value='$sContact' />   </td>

       </tr>";
       if($sUserRights !='admin')
       {
       ?>
          <tr class='classTableRow'>
                   <td class='classTableData'>User Type</td>
                   <td class='classTableData'>
                       <select name='selUserType' id='idSelUserType' class='classSelectBox'>
                       <option value='Doctor' <?php if($sUserRights=='Doctor') {echo "selected";}?>>Doctor</option>
                       <option value='General' <?php if($sUserRights=='General') {echo "selected";}?>>General</option>
                       </select>
                   </td>
                </tr>
       <?php

       }

   }

    echo "
    </table>
    <br /><br />



    </div>
</div>


<div id=bottomBar align='center'> <input type='submit' name='updateButton' value='Update' class='classUpdateButton' />


<input type='button' value='Go To Dashboard' onclick=\"window.location.href='dashboard.php';\" >
</div>

</form>
</center>
 </div>
        <div id='footer' align=center>";

      include_once($path_to_root.'cm_footer.php');
      echo " </div>
 </div>
        <div id=container style='display:none;'></div>
</div>

    </body>
    </html> ";



?>