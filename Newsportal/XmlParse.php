<?php

function sqlToXml($queryResult, $rootElementName, $childElementName)
{ 
    $xmlData = "<?xml version=\"1.0\" encoding=\"ISO-8859-1\" ?>\n"; 
    $xmlData .= "<" . $rootElementName . ">";
 
    while($record = @mysql_fetch_object($queryResult))
    { 
        
        $xmlData .= "<" . $childElementName . ">";
 
        for ($i = 0; $i < @mysql_num_fields($queryResult); $i++)
        { 
            $fieldName = @mysql_field_name($queryResult, $i); 
 
            
            $xmlData .= "<" . $fieldName . ">";
 
            
                
            if(!empty($record->$fieldName))
                $xmlData .= $record->$fieldName; 
            else
                $xmlData .= "null"; 
 
            $xmlData .= "</" . $fieldName . ">"; 
        } 
        $xmlData .= "</" . $childElementName . ">"; 
    } 
    $xmlData .= "</" . $rootElementName . ">"; 
 
    return $xmlData; 
} 

$servername = "localhost";
$username = "root";
$password = "";
$dbName = "dbtest";


$conn = @mysql_connect("localhost", "root", "");
   @mysql_select_db($dbName, $conn);

$result = @mysql_query("SELECT * from users");

header("Content-Type: application/xml");
echo sqlToXml($result,"Clients","client");
?>