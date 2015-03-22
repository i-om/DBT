<?php
function getDisplay($id)
{
        $testObj = new rtCommDisplay();

        $data = retrieveDisplayFromId($testObj);

        $iDisplayNo = $data->iDisplayNo;
        $sDisplayToName = $data->sDisplayToName;
        $iDisplayToUserId = $data->iDisplayToUserId;
        $sTag = $data->sTag;
        $sMessage = $data->sMessage;
        $dScheduledDate = $data->dScheduledDate;
        $tScheduledTime = $data->tScheduledTime;
        $sModuleName = $data->sModuleName;
        $iModuleId = $data->iModuleId;
        $iDisplayManagerId = $data->iDisplayManagerId;
        $iCommunicationManagerId = $data->iCommunicationManagerId;
        $iLastUpdateUserId = $data->iLastUpdateUserId;
        $dLastUpdateDate = $data->dLastUpdateDate;
        $tLastUpdateTime = $data->tLastUpdateTime;
        $sExtra1 = $data->sExtra1;
        $sExtra2 = $data->sExtra2;
        $sExtra3 = $data->sExtra3;
}


?>