<div id='leftWidget'>
    <div id='head'>
        <table>
            <tr>
                <td></td>
                <td valign="middle"><div id='headtitle'>Patient Search</div></td>
            </tr>
        </table>
    </div>
    <div id='ql'>
      <form name="quickSearchPatient" id="quickSearchPatient" action="search_record1.php" method="post">
        <div id='leftWidgetContent'>
                Patient Name:<br />
                <input type=text name=fnam id=fnam size=15 /><br />
                <input type=button value=Search style="width:100px" onclick='checkEmpty();' /><br />
        </div>
      </form>
    </div>
</div>
<br />
<div id='leftWidget'>
    <div id='head'>
        <table>
            <tr>
                <td></td>
                <td valign="middle"><div id='headtitle'>Report Search</div> </td>
            </tr>
        </table>
    </div>
    <div id='login'>
     <form name="quickSearchPatientReg" id="quickSearchPatientReg" action="search_report1.php" method="post">
        <div id='leftWidgetContent'   >
                Patient Registration No:<br />
                <input type=text name=pregno id=pregno  size=15 /><br />
                <input type=button value=Search style="width:100px"  onclick="checkEmpty1();"/><br />
        </div>
     </form>
    </div>
</div>
<br>

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

            <a href=schedule_bed.php >Bed Manager</a><br />
            <a href=schedule_room.php >Room Manager</a><br />
            <a href=schedule_ot.php >OT Manager</a><br />
            <a href=mm_add_ot.php >Add OT</a><br />
            <a href=mm_add_room.php >Add Room</a><br />
            <a href=mm_add_bed.php >Add Bed</a><br />
            <a href=m_prescription.php >Prescription Chart</a>
        </div>
    </div>
</div>
<br />

<div id='leftWidget'>
    <div id='head'>
        <table>
            <tr>
                <td></td>
                <td valign="middle"><div id='headtitle'>Server Messages</div></td>
            </tr>
        </table>
    </div>
    <div id='ql'>
        <div id='leftWidgetContent'>
            <marquee direction=up height=110px onmouseover="this.stop();" onmouseout="this.start();" scrollamount="2">
                Online Data Backup Pending for 3 days.<br /><br />
                Nov 7 is Guru Nanak Jayanti.<br /><br />
                New Issue of B+ Health Magazine is out.<br /><br />
                Ranbaxy Launches New Drug in the Generic Albendazole.<br /><br />
             </marquee>
        </div>
    </div>
</div>