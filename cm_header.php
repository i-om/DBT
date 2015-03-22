<div id='header'>

<div style='float:left'>
    <!--
    Customization Req:
    Replace :
    html ->
        alt attrib in img tag to Institute Name + Logo
    php ->
        _addr to contain Institute Address

    -->
<img alt='KEM LOGO' src='images/KEM-logo.png' height='85' style="padding:4px"/>
</div>
<div id='company'>
<?php
$_addr = "<span class='clHeaderAddrTitle'>King Edward Memorial Hospital, Mumbai</span><br />
                <span class='clHeaderAddr'>Acharya Donde Marg,
                Parel,<br /> Mumbai 400 012. India.<br />
                Tel.: 91-22-2410 7000 <br />Fax: 91-22-2414 3435
                </span>";
    if(isset($_addr))
        echo $_addr;
?>
</div>

<!--<div style="float:left"><img alt='KEM LOGO' src='images/KEM-logo.png' height='86' /></div> -->
<!--<div><img alt='KEM LOGO' src='images/hd_logo.png' height='86' /></div>  -->
<div id='banner' style="float: left">Medicinal and Aromamatic Plants Database
<span class='minorHeading'><span class='minorLabel'>Software Version :</span> 1.00 <span class='minorLabel'>Release Date:</span> 12/04/2011</span>
<span class='minorHeading'><span class='minorLabel'>Support Email:</span> dbt.support@plus91.in</span>
</div>
<div style="padding:4px;"><img alt='Medicinal and Aromamatic Plants Database LOGO' src="images/Government-of-India_logo.png" height='65'/>
<div class='clHeaderAddrTitle' style="float:right;">Department of Biotechnology</div></div>
<!--<img alt='Plus91 Technologies' id='logo' src='<?php echo $path_to_root;?>images/KEM-logo.png' />-->
</div>