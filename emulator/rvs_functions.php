<?php

function getPatientInfo($visitId)
{
    $data = array();
    $objInfo = new dbRvsDetails('dbt');
    $data = $objInfo->get_visit_details($visitId);
    return $data;
}

function getSearchResults($sSelSearchBy,$sTextSerachWhat,$sTextSerachWhat2)
{
  $data = array();
  $objSearch = new dbRvsDetails("dbt");

  if($sSelSearchBy == 'Age')
  {
     $data = $objSearch->count_visit_details_by_age($sTextSerachWhat);
  }
  else if($sSelSearchBy == 'Sex')
  {
     $data = $objSearch->count_visit_details_by_sex($sTextSerachWhat);
  }
  else if($sSelSearchBy == 'Date')
  {
     $data = $objSearch->count_visit_details_by_actual_date($sTextSerachWhat);
  }
  else if($sSelSearchBy == 'greater Than Date')
  {
     $data = $objSearch->count_visit_details_by_actual_date_greater($sTextSerachWhat);

  }
  else if($sSelSearchBy == 'Less Than Date')
  {
     $data = $objSearch->count_visit_details_by_actual_date_less($sTextSerachWhat);
  }
  else if($sSelSearchBy == 'Between Dates')
  {
     $data = $objSearch->count_visit_details_by_actual_date_between($sTextSerachWhat,$sTextSerachWhat2);
  }
  else if($sSelSearchBy == 'Occupation')
  {
     $data = $objSearch->count_visit_details_by_occupation($sTextSerachWhat);
  }
  else if($sSelSearchBy == 'Who Bite')
  {
     $data = $objSearch->count_visit_details_by_who_bite_category($sTextSerachWhat);
  }
  return $data;
}

 /*! Function to View(Retrieve) records from database based on All Criteria */
     function getSearchResultsForAllCriteria($arrSearchBy, $arrSerachWhat, $sTextSerachWhat2)
     {
         $data = array();
         $objSearch = new dbRvsDetails("dbt");
         //echo "hello..";
         //print_r($arrSearchBy);   exit;
         $data = $objSearch->get_search_results_for_all_criteria($arrSearchBy, $arrSerachWhat, $sTextSerachWhat2) ;
        // print_r($data); exit;
         return $data;
     }


     function getSearchStraight($query)
     {
	  $data = array();
         $objSearch = new dbRvsDetails("dbt");
         //echo "hello..";
         //print_r($arrSearchBy);   exit;
         $data = $objSearch->executeQuery($query);
        // print_r($data); exit;
         return $data;


     }

function getSearchResultsByName($Name)
{
    $data = array();
    $objSearch = new dbRvsDetails("dbt");
    $data = $objSearch->get_visit_details_by_name($Name);
    return $data;
}

?>