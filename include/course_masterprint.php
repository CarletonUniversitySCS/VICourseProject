<?php
function DisplayMasterTableInfoForPrint_course($params)
{
	global $cman;
	
	$detailtable = $params["detailtable"];
	$keys = $params["keys"];
	
	$xt = new Xtempl();
	
	$tName = "course";
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
		$keysAssoc["courseNo"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("courseNo", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("courseNo", $keys[1-1], "", true);

				$keyValue = $viewControls->showDBValue("courseNo", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("course","courseNo").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);	
	}

	if( $detailtable == "selection" )
	{
		$keysAssoc["courseNo"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("courseNo", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("courseNo", $keys[1-1], "", true);

				$keyValue = $viewControls->showDBValue("courseNo", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("course","courseNo").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);	
	}

	if( $detailtable == "tag" )
	{
		$keysAssoc["courseNo"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("courseNo", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("courseNo", $keys[1-1], "", true);

				$keyValue = $viewControls->showDBValue("courseNo", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("course","courseNo").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);	
	}

	if( $detailtable == "selectionChart" )
	{
		$keysAssoc["courseNo"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("courseNo", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("courseNo", $keys[1-1], "", true);

				$keyValue = $viewControls->showDBValue("courseNo", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("course","courseNo").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);	
	}

	if( $detailtable == "tagChart" )
	{
		$keysAssoc["courseNo"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("courseNo", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("courseNo", $keys[1-1], "", true);

				$keyValue = $viewControls->showDBValue("courseNo", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("course","courseNo").": ".$keyValue;
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
	
	$xt->assign("AVG_rate__mastervalue", $viewControls->showDBValue("AVG(rate)", $data, $keylink));
	$format = $settings->getViewFormat("AVG(rate)");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("AVG(rate)")))
		$class = ' rnr-field-number';
		
	$xt->assign("AVG_rate__class", $class); // add class for field header as field value
	$xt->assign("AVG_difficulty__mastervalue", $viewControls->showDBValue("AVG(difficulty)", $data, $keylink));
	$format = $settings->getViewFormat("AVG(difficulty)");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("AVG(difficulty)")))
		$class = ' rnr-field-number';
		
	$xt->assign("AVG_difficulty__class", $class); // add class for field header as field value
	$xt->assign("courseName_mastervalue", $viewControls->showDBValue("courseName", $data, $keylink));
	$format = $settings->getViewFormat("courseName");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("courseName")))
		$class = ' rnr-field-number';
		
	$xt->assign("courseName_class", $class); // add class for field header as field value
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
	$xt->assign("type_mastervalue", $viewControls->showDBValue("type", $data, $keylink));
	$format = $settings->getViewFormat("type");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("type")))
		$class = ' rnr-field-number';
		
	$xt->assign("type_class", $class); // add class for field header as field value
	$xt->assign("courseNo_mastervalue", $viewControls->showDBValue("courseNo", $data, $keylink));
	$format = $settings->getViewFormat("courseNo");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("courseNo")))
		$class = ' rnr-field-number';
		
	$xt->assign("courseNo_class", $class); // add class for field header as field value

	$layout = GetPageLayout("course", 'masterprint');
	if( $layout )
		$xt->assign("pageattrs", 'class="'.$layout->style." page-".$layout->name.'"');

	$xt->displayPartial(GetTemplateName("course", "masterprint"));
}

?>