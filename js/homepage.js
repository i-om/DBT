$(function()
{
    $("#container").dialog({
	bgiframe: true,
        autoOpen: false,
        width:600,
        draggable: false,
        position: "center",
        height: 400,
        resizable: false,
        title: 'Medicinal and Aromamatic Plants Database Study',
	modal: true
        });

});


//! Modal load script function
function function_modal(script)
{
    document.getElementById("container").innerHTML = "";
    $("#container").load(script);
    $("#container").dialog('open');
    //$("#container").dialog('Title':title);
}

function searchPatientForm()
{
    function_modal("dbt_search_patient.php");
}

function userManagement()
{
   function_modal("user_Management.php");
}
//! Close the modal
function modalClose()
{
    document.getElementById("container").innerHTML = "";
    $("#container").dialog('close');
}

function searchPatient()
{
    patientN = document.getElementById('patientName').value;
    indoorN = document.getElementById('indoorNo').value;

    if(patientN == "" && indoorN == "")
    {
        alert('Please Specify Atleast Patient Name and/or Indoor Number.');
        return false;
    }

    if(patientN != "")
    {
        if(patientN.length < 3)
        {
            alert('Patient Name Should Have atleast 3 characters.')
        }
    }

    $.post("fetch_patient.php", {patientN:patientN,indoorN:indoorN}, function(data)
    {
        document.getElementById("docResult").innerHTML = data;
    });
}

function statistic()
{
    //function_modal("dbt_search.php");
    parent.location='dbt_search.php';
}

function datewise()
{
    modalClose()
    function_modal("datewise_search.php");
}

function servicewise()
{
    modalClose()
    function_modal("servicewise_search.php");
}