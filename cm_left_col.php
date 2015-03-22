<div id='leftWidget'>
<img alt="Plus91 Technologies Pvt Ltd" src="images/logo.jpg" style=" width: 100%"  />
</div>
<br />
<div id='leftWidget'>
    <div id='head'>
        <table>
            <tr>
                <td></td>
                <td valign="middle"><div id='headtitle'>Quick Links</div></td>
            </tr>
        </table>
    </div>
    <div id='ql'>
        <div id='leftWidgetContent'>
            <a href=dashboard.php >Dashboard</a><br />
            <a href=dbt_add.php >Add New Entry</a><br />

        </div>
    </div>
</div>
<br />

<div id='leftWidget'>
    <div id='head'>
        <table>
            <tr>
                <td></td>
                <td valign="middle"><div id='headtitle'>Login Status</div> </td>
            </tr>
        </table>
    </div>
    <div id='login'>
        <div id='leftWidgetContentLogin'   >
   <?php
   $sRights = $_SESSION["Rights"];
   $sName = $_SESSION["Name"];  ?>
            Login As: <?php echo @$sName ?><br />
UserType: <?php echo @$sRights ?><br />
<a href=logout.php >Logout</a><br />

        </div>
    </div>
</div>