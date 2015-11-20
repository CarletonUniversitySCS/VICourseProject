<?php
$dalTablecourse = array();
$dalTablecourse["courseNo"] = array("type"=>3,"varname"=>"courseNo");
$dalTablecourse["courseName"] = array("type"=>200,"varname"=>"courseName");
$dalTablecourse["level"] = array("type"=>200,"varname"=>"level");
$dalTablecourse["subject"] = array("type"=>200,"varname"=>"subject");
$dalTablecourse["type"] = array("type"=>200,"varname"=>"type");
$dalTablecourse["instructorNo"] = array("type"=>3,"varname"=>"instructorNo");
	$dalTablecourse["courseNo"]["key"]=true;

$dal_info["mydb_at_localhost__course"] = &$dalTablecourse;
?>