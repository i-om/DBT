
<br /><br /> <br />
<?php
session_start();
    $sLoginId = $_SESSION["LoginId"];
    $sRights = $_SESSION["Rights"];
    if($sRights == 'admin')
    {
?>
<table align=center>
    <tr>
       <td> <input type='button' name='' value='Add New User' onclick="window.location.href='register_now.php';" style="width : 200px; height:30px;"/> </td>

    </tr>

    <tr>
       <td> <input type='button' name='' value='View User Details' onclick="window.location.href='view_users.php';" style="width : 200px;height:30px;" /> </td>
    </tr>
    <tr>
       <td> <input type="button" value="Close" onclick="modalClose();" style="width : 200px;height:30px;"/></td>
    </tr>
</table>
<?php
    }
    else
    {
      echo "
      <table align='center'>
        <tr>
            <td><b>You Don't Have Privilege To View Theses Contents.</b></td>
        </tr>
        <tr><td>&nbsp;</td></tr>
        <tr><td>&nbsp;</td></tr>
        <tr>
       <td align='center'> <input type='button' value='Close' onclick='modalClose();'/></td>
    </tr>
      </table>
      ";

    }
?>
<br />

<br />

<div class="ui-dialog-titlebar ui-dialog-titlebar ui-widget-header" style="cursor:default;text-align:center;left:-4px;width:100%;bottom:1px;position:absolute;">Copyright &copy <?php echo date("Y") ?> <b><a href=http://www.plus91.in target=_blank >Plus91</a></b>. All Rights Reserved.</div>
