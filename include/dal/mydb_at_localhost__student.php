<?php
$dalTablestudent = array();
$dalTablestudent["studentNo"] = array("type"=>3,"varname"=>"studentNo");
$dalTablestudent["studentName"] = array("type"=>200,"varname"=>"studentName");
$dalTablestudent["subject"] = array("type"=>200,"varname"=>"subject");
$dalTablestudent["level"] = array("type"=>200,"varname"=>"level");
	$dalTablestudent["studentNo"]["key"]=true;

$dal_info["mydb_at_localhost__student"] = &$dalTablestudent;
?>