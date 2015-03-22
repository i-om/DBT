<?php
function search_xml($search_words,$file,$path = '')
{
  $fileName = $path.$file.".xml";
    $data = array();
    if(file_exists($fileName))
    {
        $oXml = simplexml_load_file($fileName);
        for($cc=0;$cc<count($oXml->word);$cc++)
        {
           if(strcmp($oXml->word[$cc],$search_words)==0)
           {   //  exit("21");
             return "yes";
           }
        }
    }
     //exit("ye");
    return "";
    }


function insert_xml($search_words,$file,$path = '')
{
     if($search_words !='')
{
    $fileName = $path.$file.".xml";
    $data = array();
    if(file_exists($fileName))
    {
        $oXml = simplexml_load_file($fileName);
        }
    else
    {
        $oXml = simplexml_load_string('<?xml version="1.0"?><words></words>');
     }
    $countEntries = count($oXml->word);
//                   print_r($oXml);
  //             print_r($oXml->word);
            //   echo "and the count is $countEntries $search_words";




  $oXml->word[$countEntries] = $search_words;
    //echo $path."xml/".$file."_xml.xml";

   file_put_contents($fileName,$oXml->asXML());
   }
}


function retrieve_data_xml($file,$path = '',$path1='')
{
   $data = array();
    $oXml = simplexml_load_file($path1."xml/".$path.$file.".xml");
    foreach($oXml as $xml1)
    {
        $data[] = $xml1;
    }
    return $data;
}
?>