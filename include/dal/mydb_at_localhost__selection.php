<?php
$dalTableselection = array();
$dalTableselection["selectionid"] = array("type"=>3,"varname"=>"selectionid");
$dalTableselection["studentNo"] = array("type"=>3,"varname"=>"studentNo");
$dalTableselection["courseNo"] = array("type"=>3,"varname"=>"courseNo");
$dalTableselection["instructorNo"] = array("type"=>3,"varname"=>"instructorNo");
$dalTableselection["rate"] = array("type"=>5,"varname"=>"rate");
$dalTableselection["difficulty"] = array("type"=>5,"varname"=>"difficulty");
	$dalTableselection["selectionid"]["key"]=true;

$dal_info["mydb_at_localhost__selection"] = &$dalTableselection;
?>