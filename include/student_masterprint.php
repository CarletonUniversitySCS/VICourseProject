<?php
function DisplayMasterTableInfoForPrint_student($params)
{
	global $cman;
	
	$detailtable = $params["detailtable"];
	$keys = $params["keys"];
	
	$xt = new Xtempl();
	
	$tName = "student";
	$xt->eventsObject = getEventObject($tName);

	$cipherer = new RunnerCipherer( $tName );
	$settings = new ProjectSettings($tName, PAGE_PRINT);
	$connection = $cman->byTable( $tName );
	
	$masterQuery = $settings->getSQLQuery();
	$viewControls = new ViewControlsContainer($settings, PAGE_PRINT);

	$where = "";
	$keysAssoc = array();
	$showKeys = "";

	if( $detailtable == "drop" )
	{
		$keysAssoc["studentNo"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("studentNo", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("studentNo", $keys[1-1], "", true);

				$keyValue = $viewControls->showDBValue("studentNo", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("student","studentNo").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);	
	}

	if( $detailtable == "selection" )
	{
		$keysAssoc["studentNo"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("studentNo", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("studentNo", $keys[1-1], "", true);

				$keyValue = $viewControls->showDBValue("studentNo", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("student","studentNo").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);	
	}

	if( $detailtable == "selectionChart" )
	{
		$keysAssoc["studentNo"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("studentNo", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("studentNo", $keys[1-1], "", true);

				$keyValue = $viewControls->showDBValue("studentNo", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("student","studentNo").": ".$keyValue;
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
	$keylink.= "&key1=".runner_htmlspecialchars(rawurlencode(@$data["studentNo"]));
	
	$xt->assign("studentNo_mastervalue", $viewControls->showDBValue("studentNo", $data, $keylink));
	$format = $settings->getViewFormat("studentNo");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("studentNo")))
		$class = ' rnr-field-number';
		
	$xt->assign("studentNo_class", $class); // add class for field header as field value
	$xt->assign("studentName_mastervalue", $viewControls->showDBValue("studentName", $data, $keylink));
	$format = $settings->getViewFormat("studentName");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("studentName")))
		$class = ' rnr-field-number';
		
	$xt->assign("studentName_class", $class); // add class for field header as field value
	$xt->assign("subject_mastervalue", $viewControls->showDBValue("subject", $data, $keylink));
	$format = $settings->getViewFormat("subject");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("subject")))
		$class = ' rnr-field-number';
		
	$xt->assign("subject_class", $class); // add class for field header as field value
	$xt->assign("level_mastervalue", $viewControls->showDBValue("level", $data, $keylink));
	$format = $settings->getViewFormat("level");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("level")))
		$class = ' rnr-field-number';
		
	$xt->assign("level_class", $class); // add class for field header as field value

	$layout = GetPageLayout("student", 'masterprint');
	if( $layout )
		$xt->assign("pageattrs", 'class="'.$layout->style." page-".$layout->name.'"');

	$xt->displayPartial(GetTemplateName("student", "masterprint"));
}

?>