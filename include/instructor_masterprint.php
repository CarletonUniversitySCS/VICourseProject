<?php
function DisplayMasterTableInfoForPrint_instructor($params)
{
	global $cman;
	
	$detailtable = $params["detailtable"];
	$keys = $params["keys"];
	
	$xt = new Xtempl();
	
	$tName = "instructor";
	$xt->eventsObject = getEventObject($tName);

	$cipherer = new RunnerCipherer( $tName );
	$settings = new ProjectSettings($tName, PAGE_PRINT);
	$connection = $cman->byTable( $tName );
	
	$masterQuery = $settings->getSQLQuery();
	$viewControls = new ViewControlsContainer($settings, PAGE_PRINT);

	$where = "";
	$keysAssoc = array();
	$showKeys = "";

	if( $detailtable == "course" )
	{
		$keysAssoc["instructorNo"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("instructorNo", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("instructorNo", $keys[1-1], "", true);

				$keyValue = $viewControls->showDBValue("instructorNo", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("instructor","instructorNo").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);	
	}

	if( $detailtable == "selection" )
	{
		$keysAssoc["instructorNo"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("instructorNo", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("instructorNo", $keys[1-1], "", true);

				$keyValue = $viewControls->showDBValue("instructorNo", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("instructor","instructorNo").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);	
	}

	if( $detailtable == "courseChart" )
	{
		$keysAssoc["instructorNo"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("instructorNo", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("instructorNo", $keys[1-1], "", true);

				$keyValue = $viewControls->showDBValue("instructorNo", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("instructor","instructorNo").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);	
	}

	if( $detailtable == "selectionChart" )
	{
		$keysAssoc["instructorNo"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("instructorNo", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("instructorNo", $keys[1-1], "", true);

				$keyValue = $viewControls->showDBValue("instructorNo", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("instructor","instructorNo").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);	
	}

	if( !$where )
		return;

	$str = SecuritySQL("Export", $tName );
	if( strlen($str) )
		$where.= " and ".$str;
	
	$strWhere = whereAdd( $masterQuery->m_where->toSql($masterQuery), $where );
	if( strlen($strWhere) )
		$strWhere= " where ".$strWhere." ";
		
	$strSQL = $masterQuery->HeadToSql().' '.$masterQuery->FromToSql().$strWhere.$masterQuery->TailToSql();
	LogInfo($strSQL);
	
	$data = $cipherer->DecryptFetchedArray( $connection->query( $strSQL )->fetchAssoc() );
	if( !$data )
		return;
	
	// reassign pagetitlelabel function adding extra params
	$xt->assign_function("pagetitlelabel", "xt_pagetitlelabel", array("record" => $data, "settings" => $settings));	
	
	$keylink = "";
	$keylink.= "&key1=".runner_htmlspecialchars(rawurlencode(@$data["instructorNo"]));
	
	$xt->assign("instructorNo_mastervalue", $viewControls->showDBValue("instructorNo", $data, $keylink));
	$format = $settings->getViewFormat("instructorNo");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("instructorNo")))
		$class = ' rnr-field-number';
		
	$xt->assign("instructorNo_class", $class); // add class for field header as field value
	$xt->assign("instructorName_mastervalue", $viewControls->showDBValue("instructorName", $data, $keylink));
	$format = $settings->getViewFormat("instructorName");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("instructorName")))
		$class = ' rnr-field-number';
		
	$xt->assign("instructorName_class", $class); // add class for field header as field value

	$layout = GetPageLayout("instructor", 'masterprint');
	if( $layout )
		$xt->assign("pageattrs", 'class="'.$layout->style." page-".$layout->name.'"');

	$xt->displayPartial(GetTemplateName("instructor", "masterprint"));
}

?>