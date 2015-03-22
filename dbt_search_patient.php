<?php
$head = "<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Strict//EN'
    'http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd'>

<html xmlns='http://www.w3.org/1999/xhtml'>

<head>
  <title>Search Data</title>
  <link rel='stylesheet' type='text/css' href='css/rvs_css.css'></link>
</head>";

$body = "<form name='frmContactSearch' class='classForm' action='dbt_search_patient_results.php' method='Post'>
<table class='classTable1'>
    <tr class='classRow' width='400px'>
    <td width='200'><label id='iddbtnolbl' class='classTitle'>DBT Sanction No. :</label></td>
    <td width='200'><input type='text' name='dbtno' id='iddbtnotxt' class='classData' /></td> </tr>
    <tr height='40px'>
    <td width='200'><label id='idinvestigatorlbl' class='classTitle'>Investigator's Name :</label></td>
    <td width='200'><input type='text' name='investigator' id='idinvestigatortxt' class='classData' /></td>
    </tr>
    <tr height='40px'>
    <td width='200'><label id='idtitlelbl' class='classTitle'>Title Of Project :</label></td>
    <td width='200'><input type='text' name='title' id='idtitletxt' class='classData' /></td>
    </tr>
     <tr height='40px'>
    <td width='200'><label id='idplantnamelbl' class='classTitle'>Plant Name :</label></td>
    <td width='200'><input type='text' name='plant' id='idplanttxt' class='classData' /></td>
    </tr>
     <tr height='40px'>
    <td width='200'><label id='idarealbl' class='classTitle'>Area Of research :</label></td>
    <td width='200'><select name='area' id='idareatxt' class='classSelect' >
<option value=''>Select</option>
<option value='Drug Development'>Drug Development</option>
<option value='Micro propogation'>Micro propogation</option>
<option value='Agro Technology'>Agro Technology</option>
<option value='Biotechnology'>Biotechnology</option>
<option value='Genetic Engineering'>Genetic Engineering</option>
<option>Others</option>
</select></td>
    </tr>
    <tr class='classRow'>
        <td class='classData'><input type='submit' name='btnSearchButton' id='idSearchButton' class='classButton' value='Search' /></td>
    </tr>
</table>
</form>
</body>
</html>
";

echo $head.$body;
?>
<div class="ui-dialog-titlebar ui-dialog-titlebar ui-widget-header" style="cursor:default;text-align:center;left:-4px;width:100%;bottom:1px;position:absolute;">Copyright &copy <?php echo date("Y") ?> <b><a href=http://www.plus91.in target=_blank >Plus91</a></b>. All Rights Reserved.</div>