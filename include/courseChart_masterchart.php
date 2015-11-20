<?php
function DisplayMasterTableInfo_courseChart($params)
{
	$keys = $params["keys"];
	$detailtable = $params["detailtable"];
	
	$xt = new Xtempl();
	$tName = "courseChart";
	$xt->eventsObject = getEventObject($tName);
	
	$settings = new ProjectSettings($tName, PAGE_CHART);
	$viewControls = new ViewControlsContainer($settings, PAGE_CHART);

	$showKeys = array();
	$keysAssoc = array();


	if( $detailtable == "drop" )
	{
		$keysAssoc["courseNo"] = $keys[1 - 1];
		$keyValue = $viewControls->showDBValue("courseNo", $keysAssoc);
		$showKeys[] = GetFieldLabel("courseChart","courseNo").": ".$keyValue;

		$xt->assign('showKeys', implode(", ", $showKeys));
	}

	if( $detailtable == "selection" )
	{
		$keysAssoc["courseNo"] = $keys[1 - 1];
		$keyValue = $viewControls->showDBValue("courseNo", $keysAssoc);
		$showKeys[] = GetFieldLabel("courseChart","courseNo").": ".$keyValue;

		$xt->assign('showKeys', implode(", ", $showKeys));
	}

	if( $detailtable == "tag" )
	{
		$keysAssoc["courseNo"] = $keys[1 - 1];
		$keyValue = $viewControls->showDBValue("courseNo", $keysAssoc);
		$showKeys[] = GetFieldLabel("courseChart","courseNo").": ".$keyValue;

		$xt->assign('showKeys', implode(", ", $showKeys));
	}
	
	$xt->assign("chart_block", true);
	//set params for the 'xt_showchart' method showing the chart
	$chartXtParams = array(
		"chartname" => "courseChart",
		"table" => "courseChart",
		"ctype" => "Bubble", 
		"showDetails" => false,
		"chartPreview" => true,
		"resize" => false, 
		"id" => "1"
	);
	$xt->assign_function("courseChart_chart", "xt_showchart", $chartXtParams);
	
	$layout = GetPageLayout("courseChart", "masterchart");
	if( $layout )
		$xt->assign("pageattrs", 'class="'.$layout->style." page-".$layout->name.'"');
	
	$xt->displayPartial(GetTemplateName("courseChart", "masterchart"));
}
?>