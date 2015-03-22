<?php
    $path_to_root = "";
    $top_title = "Login";
    $ip = $_SERVER["REMOTE_ADDR"];

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script language="javascript" >
function blank_valid()
{
  if(document.getElementById('password').value=='' || document.getElementById('username').value=='')
  {
    document.getElementById('invalid_as').style.display = 'block';
    return false;
  }
}
/*function hide_details()
{
  if(document.getElementById('password').value=='' || document.getElementById('username').value=='') ;
  else
  {
    document.getElementById('invalid').style.display = 'block';
    return false;
  }
}*/
</script>
    <meta http-equiv="pragma" content="no-cache" />
    <?php include_once($path_to_root.'cm_top.php');?>
</head>
<body class="yui-skin-sam" oncontextmenu="return false;">
<div align="center">
    <?php include_once($path_to_root.'cm_header.php'); ?>
    <div id='main'>
        <div id='barLogin'>
            <span id='headBar' class="headbar">Login</span>
        </div>
        <div id='containerMain' style='width:100%'>

<div id='containerDiv' style='width:100%'><div id='head1' style="height:0px;"><div id='headtitle1'><table border="0"><tr><td valign="middle">
</td></tr></table></div></div><div id='containerData' style='width:100%'>
                  <br /><br />
<form name='frmLogin'class='classFormFormat' action='verifyLog.php' method='post' >
      <table align=center border=0 width=400> <tr><td id='invalid_as' align=center width=40 style='font-size:13px;color:red;display:none'>Username and Password can not be blank</td></tr></table>
  <table align=center border=0>
  <?php
        if(@$_GET['error'] == 1)
        {
            echo "<tr><td  colspan=2 align=center style='font-size:13px;color:red;'>Invalid Username/Password ...</td></tr>";
        }
    ?>

                 <tr class='classTableRow'>
                      <td class='classTableData'>Login ID</td>
                      <td class='classTableData'><input type='text' name='textLoginId' id='idLogin' class='classTextBox' value=''/></td>
                 </tr>

                 <tr class='classTableRow'>
                      <td class='classTableData'>Password</td>
                      <td class='classTableData'><input type='password' name='textPassword' id='idPassword' class='classTextBox classPassword' value=''/></td>
                 </tr>


                <tr class='classTableRow'>
                     <td colspan=2 align='center' ><input type='submit' name='btnLogin' id='idBtnLogin' class='classButton' value='Login' />  </td>
                </tr>
    </table>
      <br /><br />
</form>
</div></div>



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