function PrintContent(varSelectedDiv,pageTitle)
{
    var DocumentContainer = document.getElementById(varSelectedDiv);
    var WindowObject = window.open('', "TrackHistoryData","width=740,height=125,top=200,left=250,toolbars=no,scrollbars=yes,status=no,resizable=no");
    WindowObject.document.write('<link href="css/rvs_css.css" rel="stylesheet" type="text/css" media="print" />');
    WindowObject.document.write('<link href="css/style_print.css" rel="stylesheet" type="text/css" media="print" />');
    WindowObject.document.writeln(DocumentContainer.innerHTML);
    WindowObject.document.title = pageTitle;
    WindowObject.document.close();
    WindowObject.focus();
    WindowObject.print();
    WindowObject.close();
}

function PrintContentNoPopUp(varSelectedDiv,pageTitle)
{
    var DocumentContainer = document.getElementById(varSelectedDiv);
    var WindowObject = window.open('', "TrackHistoryData","width=740,height=125,top=200,left=250,toolbars=no,scrollbars=yes,status=no,resizable=no");
    WindowObject.document.write('<link href="css/style_print.css" rel="stylesheet" type="text/css" media="print" />');
    WindowObject.document.writeln(DocumentContainer.innerHTML);
    WindowObject.document.title = pageTitle;
    WindowObject.document.close();
    WindowObject.focus();
    WindowObject.print();
    WindowObject.close();
}