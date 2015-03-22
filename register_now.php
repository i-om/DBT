<?php

    include_once("cm_chk.php");
    $path_to_root = "";
    $top_title = "Dashboard";

    $open = "";

    if(isset($_GET['open']))
        $open = $_GET['open'];

//include_once('left_col.php');
    include_once('js/validations.js');

    $sHintList = "<option value=\"\">[Select One]</option><option value=\"Whatisthenameofyourfirstschool?\">What is the name of your first school?</option><option value=\"Whatisyourfavouritepass-time?\">What is your favourite pass-time?</option><option value=\"Whatisyourmother\"smaidenname?\">What is your mother\"s maiden name?</option><option value=\"Whatisyourfavouritefood?\">What is your favourite food?</option><option value=\"Whatisyourexacttimeofbirth?\">What is your exact time of birth?</option><option value=\"Any Other\">Any Other</option>";

    echo "<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Strict//EN'
                'http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd'>

                <html xmlns='http://www.w3.org/1999/xhtml'>

                <head>
                <title>Registration</title>
                <link rel='stylesheet' type='text/css' href='css/stylesheetCommon.css' />
                <script language='javascript' type='text/javascript'>

                function getXmlHttpRequestObject()
                 {
                  if (window.XMLHttpRequest)
                  {
                   return new XMLHttpRequest();
                  }
                  else if(window.ActiveXObject)
                  {
                   return new ActiveXObject('Microsoft.XMLHTTP');
                  }
                 }

                var oSendReq = getXmlHttpRequestObject();

                function checkAvail()
                {
                  var LoginId = document.getElementById('idLoginId').value;
                  if(!valid_loginId(LoginId))
                   {
                   return false;
                   }
                   else
                   {
                   oSendReq.onreadystatechange = HandleOpenConnection;

                   oSendReq.open('GET', 'checkUserAvailability.php?userLoginId='+LoginId, true);

                   oSendReq.send(null);
                  }
                }
                function cngHint(val)
                {
                if(val=='Any Other')
                   {
                    document.getElementById('idHint').innerHTML='<input type=\"text\" name=\"sHintQuestion\" id=\"idHintQuestion\" class=\"classTextBox\" ondblclick=\"cngHintText()\" />';
                   }
                }

                function cngHintText()
                {
                    document.getElementById('idHint').innerHTML='<select name=\"sHintQuestion\" id=\"idHintQuestion\" class=\"classSelectBox\" onchange=\"cngHint(this.value)\">$sHintList</select>';
                }

                /*! Validations for inputs */
                function validate()
                {

                    var name = document.getElementById('idName').value;
                    var LoginId = document.getElementById('idLoginId').value;
                    var Password = document.getElementById('idPassword').value;
                    var ConfirmPassword = document.getElementById('idConfirmPassword').value;
                    var AvailState = document.getElementById('idAvailableUser').innerHTML;

                if(name=='' || LoginId=='' || Password=='' || ConfirmPassword=='')       /*! Check for blank fields  */
                {
                    alert('Please Enter all Mandetory Fields');
                    return false;
                }
                else if (!(valid_name(name)  && valid_password(Password) && valid_loginId(LoginId)&& valid_password(ConfirmPassword)) )     /*! check for valid fields  */
                {
                    return false;
                }
                else if(!confirm_password())
                {
                    return false;
                }
                else if(AvailState!='')
                {
                    alert('Login Id Not Available..Try with Different Login Id');
                    return false;
                }
                else
                {
                    return true;
                }

                }

                function confirm_password()
                {
                    var Password=document.getElementById('idPassword').value;
                    var ConfirmPassword=document.getElementById('idConfirmPassword').value;

                if(Password != ConfirmPassword)
                {
                    alert('Confirm Password should be same as Password');
                    return false;
                }
                else
                {
                    return true;
                }
                }

                function HandleOpenConnection()
                {

                   if (oSendReq.readyState == 4)
                      {
                        Res = oSendReq.responseText;
                        document.getElementById('idAvailableUser').innerHTML = Res;
                      }

                }
                </script>
                <meta http-equiv='pragma' content='no-cache' />   ";

                include_once($path_to_root.'cm_top.php');

  echo "        <style type='text/css'>
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
                </head>";

  echo "<body oncontextmenu='return false;'>

<div align='center'>";

include_once($path_to_root.'cm_header.php');
   echo "<div id='main'>
        <div id='leftcol'> ";
           include_once($path_to_root.'cm_left_col.php');

       echo "</div>
        <div id='bar'>
            <span id='headBar'>Add New User</span>
        </div>
        <div id='containerMain' >
                <form name='frmRegister' class='classFormFormat' action='emulator/em_register_now.php' method='post' onsubmit='return validate();' >
                    <div id='containerDiv'><div id='head1'><div id='headtitle1'><table border='0'><tr><td valign='middle'>
Add User
</td></tr></table></div></div><div id='containerData'>
                    <table name='tbRegister' id='idRegister' class='classTableFormat' align='center'>

                         <tr class='classTableRow'>
                              <td class='classTableData'>Name</td>
                              <td class='classTableData'><input type='text' name='textName' id='idName' class='classTextBox' maxlength='15' onchange='valid_name(this.value)' /></td>
                         </tr>

                         <tr class='classTableRow'>
                              <td class='classTableData'>Log-In ID</td>
                              <td class='classTableData'><input type='text' name='textLoginId' id='idLoginId' class='classTextBox' maxlength='8' onblur='checkAvail();' />
                              <span id='idAvailableUser' class='classSpanData'></span>  </td>
                         </tr>

                         <tr class='classTableRow'>
                              <td class='classTableData'>Password</td>
                              <td class='classTableData'><input type='password' name='textPassword' id='idPassword' class='classTextBox' maxlength='8' onchange='valid_password(this.value)'/></td>
                         </tr>

                         <tr class='classTableRow'>
                              <td class='classTableData'>Confirm Password</td>
                              <td class='classTableData'><input type='password' name='textConfirmPassword' id='idConfirmPassword' class='classTextBox'  maxlength='8' onchange='confirm_password()'/></td>
                         </tr>

                         <tr class='classTableRow'>
                              <td class='classTableData'>Hint Question</td>
                              <td class='classTableData'>
                                <span id='idHint' class='classSpanData'>
                                <select name='sHintQuestion' id='idHintQuestion' class='classSelectBox' onchange='cngHint(this.value);'>
                                $sHintList
                                </select>
                                </span>
                              </td>
                         </tr>

                         <tr class='classTableRow'>
                              <td class='classTableData'>Answer</td>
                              <td class='classTableData'><input type='text' name='textAnswer' id='idAnswer' class='classTextBox' /></td>
                         </tr>
                         <tr class='classTableRow'>
                              <td class='classTableData'>Email Address</td>
                              <td class='classTableData'><input type='text' name='textEmail' id='idEmail' class='classTextBox' /></td>
                         </tr>
                         <tr class='classTableRow'>
                              <td class='classTableData'>Department</td>
                              <td class='classTableData'><input type='text' name='textDept' id='idDept' class='classTextBox' /></td>
                         </tr>
                         <tr class='classTableRow'>
                              <td class='classTableData'>Contact Number</td>
                              <td class='classTableData'><input type='text' name='textContact' id='idContact' class='classTextBox' /></td>
                         </tr>

                         <tr class='classTableRow' style='display:none'>
                              <td class='classTableData'>Administrator Rights</td>
                              <td class='classTableData'><input type='checkbox' name='chkRights' id='idRights' class='classCheckBox' value='admin' /></td>
                         </tr>

                         <tr class='classTableRow'>
                              <td class='classTableData'>User Type</td>
                              <td class='classTableData'>
                              <select name='selUserType' id='idSelUserType' class='classSelectBox'>
                                <option value='Doctor'>Doctor</option>
                                <option value='General'>General</option>
                              </select>
                              </td>
                         </tr>
                    </table>

                  </div>
                </div>



<div id=bottomBar align='center'> <input type='submit' name='btnSave' id='idSaveButton' class='classButton' value='Save' />
                    <input type='reset' name='btnReset' id='idResetButton' class='classButton' value='Reset' />
<input type='button' value='Go To Dashboard' onclick=\"window.location.href='dashboard.php';\" >
</div>

</form>

 </div>
        <div id='footer' align=center>";

      include_once($path_to_root.'cm_footer.php');
echo "</div>
 </div>
        <div id=container style='display:none;' ></div>
</div>
                </center>
                </body></html>";


?>