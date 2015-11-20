<?php

/**
* getLookupMainTableSettings - tests whether the lookup link exists between the tables
*
*  returns array with ProjectSettings class for main table if the link exists in project settings.
*  returns NULL otherwise
*/
function getLookupMainTableSettings($lookupTable, $mainTableShortName, $mainField, $desiredPage = "")
{
	global $lookupTableLinks;
	if(!isset($lookupTableLinks[$lookupTable]))
		return null;
	if(!isset($lookupTableLinks[$lookupTable][$mainTableShortName.".".$mainField]))
		return null;
	$arr = &$lookupTableLinks[$lookupTable][$mainTableShortName.".".$mainField];
	$effectivePage = $desiredPage;
	if(!isset($arr[$effectivePage]))
	{
		$effectivePage = PAGE_EDIT;
		if(!isset($arr[$effectivePage]))
		{
			if($desiredPage == "" && 0 < count($arr))
			{
				$effectivePage = $arr[0];
			}
			else
				return null;
		}
	}
	return new ProjectSettings($arr[$effectivePage]["table"], $effectivePage);
}

/** 
* $lookupTableLinks array stores all lookup links between tables in the project
*/
function InitLookupLinks()
{
	global $lookupTableLinks;

	$lookupTableLinks = array();

	$lookupTableLinks["course"]["drop.courseNo"]["edit"] = array("table" => "drop", "field" => "courseNo", "page" => "edit");
	$lookupTableLinks["student"]["drop.studentNo"]["edit"] = array("table" => "drop", "field" => "studentNo", "page" => "edit");
	$lookupTableLinks["student"]["selection.studentNo"]["edit"] = array("table" => "selection", "field" => "studentNo", "page" => "edit");
	$lookupTableLinks["course"]["selection.courseNo"]["edit"] = array("table" => "selection", "field" => "courseNo", "page" => "edit");
	$lookupTableLinks["course"]["tag.courseNo"]["edit"] = array("table" => "tag", "field" => "courseNo", "page" => "edit");
	$lookupTableLinks["student"]["selectionChart.studentNo"]["search"] = array("table" => "selectionChart", "field" => "studentNo", "page" => "search");
	$lookupTableLinks["course"]["selectionChart.courseNo"]["search"] = array("table" => "selectionChart", "field" => "courseNo", "page" => "search");
	$lookupTableLinks["instructor"]["selectionChart.instructorNo"]["search"] = array("table" => "selectionChart", "field" => "instructorNo", "page" => "search");
	$lookupTableLinks["course"]["tagChart.courseNo"]["search"] = array("table" => "tagChart", "field" => "courseNo", "page" => "search");
}

?>