
$(function() {
		$("#container").dialog({
			bgiframe: true,
            autoOpen: false,
			width:375,
            draggable: true,
            position: "center",
            height: 400,
            resizable: true,
            title: 'ClinION',
			modal: true

		});
	});

$(function() {
		$("#contain").dialog({
			bgiframe: true,
            autoOpen: false,
			width:375,
            draggable: true,
            position: "center",
            height: 400,
            resizable: true,
            title: 'ClinION',
			modal: true

		});
	});

function function_modal(script,height)
{

     $("#container").dialog('close');
    document.getElementById("container").innerHTML = "";
    $("#container").load(script);
    if(height != "" || height != "undefined")
        $("#container").dialog('option','height',height);
    $("#container").dialog('open');
}

function function_modal_account(script,height)
{
   $(function() {
		$("#container_acc").dialog({
			bgiframe: true,
            autoOpen: false,
			width:430,
            draggable: true,
            position: "center",
            height: 400,
            resizable: true,
            title: 'ClinION - Accounts',
			modal: true

		});
	});
     $("#container_acc").dialog('close');
    document.getElementById("container_acc").innerHTML = "";
    $("#container_acc").load(script);
    if(height != "" || height != "undefined")
        $("#container_acc").dialog('option','height',height);

    $("#container_acc").dialog('open');
}

function function_modal_mgmt(script,height)
{
   $(function() {
		$("#container_mgmt").dialog({
			bgiframe: true,
            autoOpen: false,
			width:375,
            draggable: true,
            position: "center",
            height: 400,
            resizable: true,
            title: 'ClinION - Management',
			modal: true

		});
	});
     $("#container_mgmt").dialog('close');
    document.getElementById("container_mgmt").innerHTML = "";
    $("#container_mgmt").load(script);
    if(height != "" || height != "undefined")
        $("#container_mgmt").dialog('option','height',height);
    $("#container_mgmt").dialog('open');
}

function function_modal_ipd_mgmt(script,height)
{
   $(function() {
		$("#container_ipd_mgmt").dialog({
			bgiframe: true,
            autoOpen: false,
			width:375,
            draggable: true,
            position: "center",
            height: 400,
            resizable: true,
            title: 'ClinION - IPD Management',
			modal: true

		});
	});
     $("#container_ipd_mgmt").dialog('close');
    document.getElementById("container_ipd_mgmt").innerHTML = "";
    $("#container_ipd_mgmt").load(script);
    if(height != "" || height != "undefined")
        $("#container_ipd_mgmt").dialog('option','height',height);
    $("#container_ipd_mgmt").dialog('open');
}

function function_modal_referral(script,height)
{
   $(function() {
		$("#container_referral").dialog({
			bgiframe: true,
            autoOpen: false,
			width:375,
            draggable: true,
            position: "center",
            height: 400,
            resizable: true,
            title: 'ClinION - Referral Management',
			modal: true

		});
	});
     $("#container_referral").dialog('close');
    document.getElementById("container_referral").innerHTML = "";
    $("#container_referral").load(script);
    if(height != "" || height != "undefined")
        $("#container_referral").dialog('option','height',height);
    $("#container_referral").dialog('open');
}

function function_modal_inventory(script,height)
{
   $(function() {
		$("#container_inventory").dialog({
			bgiframe: true,
            autoOpen: false,
			width:375,
            draggable: true,
            position: "center",
            height: 400,
            resizable: true,
            title: 'ClinION - Inventory',
			modal: true

		});
	});
     $("#container_inventory").dialog('close');
    document.getElementById("container_inventory").innerHTML = "";
    $("#container_inventory").load(script);
    if(height != "" || height != "undefined")
        $("#container_inventory").dialog('option','height',height);
    $("#container_inventory").dialog('open');
}

function function_modal_mis(script,height)
{
   $(function() {
		$("#container_mis").dialog({
			bgiframe: true,
            autoOpen: false,
			width:375,
            draggable: true,
            position: "center",
            height: 400,
            resizable: true,
            title: 'ClinION - MIS',
			modal: true

		});
	});
     $("#container_mis").dialog('close');
    document.getElementById("container_mis").innerHTML = "";
    $("#container_mis").load(script);
    if(height != "" || height != "undefined")
        $("#container_mis").dialog('option','height',height);
    $("#container_mis").dialog('open');
}

function function_modal_ipd(script,height)
{
   $(function() {
		$("#container_ipd").dialog({
			bgiframe: true,
            autoOpen: false,
			width:375,
            draggable: true,
            position: "center",
            height: 400,
            resizable: true,
            title: 'ClinION - IPD',
			modal: true

		});
	});
     $("#container_ipd").dialog('close');
    document.getElementById("container_ipd").innerHTML = "";
    $("#container_ipd").load(script);
    if(height != "" || height != "undefined")
        $("#container_ipd").dialog('option','height',height);
    $("#container_ipd").dialog('open');
}


function function_modal45(script,height)
{

     $("#container").dialog('close');
    document.getElementById("container").innerHTML = "";
    $("#container").dialog('option','width',600);
    $("#container").dialog('option','height',700);
    $("#container").load(script);
    $("#container").dialog('open');
}
function function_modal46(script,height)
{

     $("#container").dialog('close');
    document.getElementById("container").innerHTML = "";
    $("#container").dialog('option','width',600);
    $("#container").dialog('option','height',600);
    $("#container").load(script);
    $("#container").dialog('open');
}
/*function function_modal88(script,height)
{
    alert('inside modal88');
    $("#contain").dialog('close');
    document.getElementById("contain").innerHTML = "";
    $("#contain").dialog('option','width',525);
    $("#contain").load(script);
    $("#contain").dialog('open');
}*/

function function_modal_consent1(script)
{
    document.getElementById("container").innerHTML = "";
    $("#container").load(script);
    $("#container").dialog('option','height',450);
    $("#container").dialog('option','width',800);
    $("#container").dialog('option','position','center');
    $("#container").dialog('open');
}

function function_modal_consent(script)
{
    document.getElementById("container").innerHTML = "";
    $("#container").load(script);
    $("#container").dialog('option','height',400);
    $("#container").dialog('option','width',400);
    $("#container").dialog('open');
}

