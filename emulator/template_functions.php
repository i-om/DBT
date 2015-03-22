<?php
function getTemplates($sType,$sLoginId)
{
    $objTemplate = new dbTemplate("dbt");
    $arrResult = $objTemplate->get_all_templates($sType,$sLoginId);

    return $arrResult;
}

function getAllTemplates($LoginId,$Rights)
{
    $objTemplate = new dbTemplate("dbt");
    $arrResult = $objTemplate->get_templates($LoginId,$Rights);

    return $arrResult;
}

function getTemplatesFromId($idTemp)
{
   $objTemplate = new dbTemplate("dbt");
   $arrResult = $objTemplate->get_template_from_id($idTemp);

   return $arrResult;
}

?>