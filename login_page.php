<?php

$sHeader = "<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Strict//EN'
             'http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd'>

            <html xmlns='http://www.w3.org/1999/xhtml'>

            <head>
            <title>Log-In Page</title>
            </head>";

$sBody =   "<body>
            <br /><br />
            <center>
            <label class='classHeading'> LOGIN </label>
            <br /><br />
            <form name='frmLogin'class='classFormFormat' action='verifyLog.php' method='post' >

            <table name='tbLogin' id='idLoginTable' class='classTableFormat'>

                 <tr class='classTableRow'>
                      <td class='classTableData'>Login ID</td>
                      <td class='classTableData'><input type='text' name='textLoginId' id='idLogin' class='classTextBox' value=''/></td>
                 </tr>

                 <tr class='classTableRow'>
                      <td class='classTableData'>Password</td>
                      <td class='classTableData'><input type='password' name='textPassword' id='idPassword' class='classTextBox classPassword' value=''/></td>
                 </tr>

                 <tr class='classTableRow'>
                     <!-- <td class='classTableData'><a href='register_now.php' class='classLink'>Register Now</a></td>   -->
                      <td class='classTableData'><a href='forgetPassword.php' class='classLink'>Forget Password ?.</a></td>
                 </tr>
             </table>
             <br />
             <input type='submit' name='btnLogin' id='idBtnLogin' class='classButton' value='Log-In' />

             </center>
             </form>

             </body>
             </html>";

echo $sHeader.$sBody;

?>
