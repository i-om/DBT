<?php
/*! Collecting values from UI and using that to search within database */  
    include_once('../util/class.dbContactDetails.php');

    $sSearchBy = addslashes($_REQUEST['idSearchBy']);
    $sParam = addslashes($_REQUEST['idParam']);
    /*! Function to search a record in the database */
    $aResultArray = search_contact($sSearchBy, $sParam);
    /*Redirecting to result page */
    header("location:../search_result.php")

?>