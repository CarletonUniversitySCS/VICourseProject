<?php
require_once(getabspath("classes/cipherer.php"));




$tdatacourse = array();	
	$tdatacourse[".truncateText"] = true;
	$tdatacourse[".NumberOfChars"] = 80; 
	$tdatacourse[".ShortName"] = "course";
	$tdatacourse[".OwnerID"] = "";
	$tdatacourse[".OriginalTable"] = "course";

//	field labels
$fieldLabelscourse = array();
$fieldToolTipscourse = array();
$pageTitlescourse = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelscourse["English"] = array();
	$fieldToolTipscourse["English"] = array();
	$pageTitlescourse["English"] = array();
	$fieldLabelscourse["English"]["courseNo"] = "Course No";
	$fieldToolTipscourse["English"]["courseNo"] = "";
	$fieldLabelscourse["English"]["courseName"] = "Course Name";
	$fieldToolTipscourse["English"]["courseName"] = "";
	$fieldLabelscourse["English"]["level"] = "Level";
	$fieldToolTipscourse["English"]["level"] = "";
	$fieldLabelscourse["English"]["subject"] = "Subject";
	$fieldToolTipscourse["English"]["subject"] = "";
	$fieldLabelscourse["English"]["type"] = "Type";
	$fieldToolTipscourse["English"]["type"] = "";
	$fieldLabelscourse["English"]["AVG_rate_"] = "rate";
	$fieldToolTipscourse["English"]["AVG(rate)"] = "";
	$fieldLabelscourse["English"]["AVG_difficulty_"] = "difficulty";
	$fieldToolTipscourse["English"]["AVG(difficulty)"] = "";
	if (count($fieldToolTipscourse["English"]))
		$tdatacourse[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelscourse[""] = array();
	$fieldToolTipscourse[""] = array();
	$pageTitlescourse[""] = array();
	$fieldLabelscourse[""]["courseNo"] = "Course No";
	$fieldToolTipscourse[""]["courseNo"] = "";
	$fieldLabelscourse[""]["AVG_rate_"] = "AVG(rate)";
	$fieldToolTipscourse[""]["AVG(rate)"] = "";
	$fieldLabelscourse[""]["AVG_difficulty_"] = "AVG(difficulty)";
	$fieldToolTipscourse[""]["AVG(difficulty)"] = "";
	if (count($fieldToolTipscourse[""]))
		$tdatacourse[".isUseToolTips"] = true;
}
	
	
	$tdatacourse[".NCSearch"] = true;



$tdatacourse[".shortTableName"] = "course";
$tdatacourse[".nSecOptions"] = 0;
$tdatacourse[".recsPerRowList"] = 1;
$tdatacourse[".mainTableOwnerID"] = "";
$tdatacourse[".moveNext"] = 1;
$tdatacourse[".nType"] = 0;

$tdatacourse[".strOriginalTableName"] = "course";




$tdatacourse[".showAddInPopup"] = false;

$tdatacourse[".showEditInPopup"] = false;

$tdatacourse[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatacourse[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatacourse[".fieldsForRegister"] = array();

$tdatacourse[".listAjax"] = false;

	$tdatacourse[".audit"] = false;

	$tdatacourse[".locking"] = false;


$tdatacourse[".list"] = true;






$tdatacourse[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatacourse[".searchSaving"] = false;
//

$tdatacourse[".showSearchPanel"] = true;
		$tdatacourse[".flexibleSearch"] = true;		

if (isMobile())
	$tdatacourse[".isUseAjaxSuggest"] = false;
else 
	$tdatacourse[".isUseAjaxSuggest"] = true;

$tdatacourse[".rowHighlite"] = true;


				
$tdatacourse[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacourse[".isUseTimeForSearch"] = false;



$tdatacourse[".useDetailsPreview"] = true;


$tdatacourse[".allSearchFields"] = array();
$tdatacourse[".filterFields"] = array();
$tdatacourse[".requiredSearchFields"] = array();

$tdatacourse[".allSearchFields"][] = "AVG(difficulty)";
	$tdatacourse[".allSearchFields"][] = "AVG(rate)";
	$tdatacourse[".allSearchFields"][] = "courseNo";
	$tdatacourse[".allSearchFields"][] = "courseName";
	$tdatacourse[".allSearchFields"][] = "level";
	$tdatacourse[".allSearchFields"][] = "subject";
	$tdatacourse[".allSearchFields"][] = "type";
	
$tdatacourse[".filterFields"][] = "subject";	
$tdatacourse[".filterFields"][] = "level";	
$tdatacourse[".filterFields"][] = "type";	

$tdatacourse[".googleLikeFields"] = array();
$tdatacourse[".googleLikeFields"][] = "AVG(rate)";
$tdatacourse[".googleLikeFields"][] = "AVG(difficulty)";
$tdatacourse[".googleLikeFields"][] = "courseName";
$tdatacourse[".googleLikeFields"][] = "subject";
$tdatacourse[".googleLikeFields"][] = "level";
$tdatacourse[".googleLikeFields"][] = "type";
$tdatacourse[".googleLikeFields"][] = "courseNo";


$tdatacourse[".advSearchFields"] = array();
$tdatacourse[".advSearchFields"][] = "AVG(difficulty)";
$tdatacourse[".advSearchFields"][] = "AVG(rate)";
$tdatacourse[".advSearchFields"][] = "courseNo";
$tdatacourse[".advSearchFields"][] = "courseName";
$tdatacourse[".advSearchFields"][] = "level";
$tdatacourse[".advSearchFields"][] = "subject";
$tdatacourse[".advSearchFields"][] = "type";

$tdatacourse[".tableType"] = "list";

$tdatacourse[".printerPageOrientation"] = 0;
$tdatacourse[".nPrinterPageScale"] = 100;

$tdatacourse[".nPrinterSplitRecords"] = 40;

$tdatacourse[".nPrinterPDFSplitRecords"] = 40;





	





// view page pdf

// print page pdf


$tdatacourse[".pageSize"] = 20;

$tdatacourse[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatacourse[".strOrderBy"] = $tstrOrderBy;

$tdatacourse[".orderindexes"] = array();

$tdatacourse[".sqlHead"] = "SELECT AVG(selection.rate) AS `AVG(rate)`,  AVG(selection.difficulty) AS `AVG(difficulty)`,  course.courseName,  course.subject,  course.`level`,  course.`type`,  course.courseNo";
$tdatacourse[".sqlFrom"] = "FROM course  LEFT OUTER JOIN `drop` ON course.courseNo = `drop`.courseNo  LEFT OUTER JOIN tag ON course.courseNo = tag.courseNo  LEFT OUTER JOIN selection ON course.courseNo = selection.courseNo";
$tdatacourse[".sqlWhereExpr"] = "";
$tdatacourse[".sqlTail"] = "GROUP BY course.courseName, course.subject, course.`level`, course.`type`, course.courseNo";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacourse[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacourse[".arrGroupsPerPage"] = $arrGPP;

$tdatacourse[".highlightSearchResults"] = true;

$tableKeyscourse = array();
$tdatacourse[".Keys"] = $tableKeyscourse;

$tdatacourse[".listFields"] = array();
$tdatacourse[".listFields"][] = "AVG(rate)";
$tdatacourse[".listFields"][] = "AVG(difficulty)";
$tdatacourse[".listFields"][] = "courseNo";
$tdatacourse[".listFields"][] = "courseName";
$tdatacourse[".listFields"][] = "level";
$tdatacourse[".listFields"][] = "subject";
$tdatacourse[".listFields"][] = "type";

$tdatacourse[".hideMobileList"] = array();


$tdatacourse[".viewFields"] = array();

$tdatacourse[".addFields"] = array();

$tdatacourse[".inlineAddFields"] = array();

$tdatacourse[".editFields"] = array();

$tdatacourse[".inlineEditFields"] = array();

$tdatacourse[".exportFields"] = array();

$tdatacourse[".importFields"] = array();

$tdatacourse[".printFields"] = array();

//	AVG(rate)
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "AVG(rate)";
	$fdata["GoodName"] = "AVG_rate_";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("course","AVG_rate_"); 
	$fdata["FieldType"] = 5;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "rate"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "AVG(selection.rate)";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Number");
	
		
		
		
		
		
		
		$vdata["DecimalDigits"] = 2;
	
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
			
	
	


		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
			$edata["HTML5InuptType"] = "number";
	
		$edata["EditParams"] = "";
			
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
			
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdatacourse["AVG(rate)"] = $fdata;
//	AVG(difficulty)
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "AVG(difficulty)";
	$fdata["GoodName"] = "AVG_difficulty_";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("course","AVG_difficulty_"); 
	$fdata["FieldType"] = 5;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "difficulty"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "AVG(selection.difficulty)";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Number");
	
		
		
		
		
		
		
		$vdata["DecimalDigits"] = 2;
	
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
			
	
	


		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
			$edata["HTML5InuptType"] = "number";
	
		$edata["EditParams"] = "";
			
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
			
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdatacourse["AVG(difficulty)"] = $fdata;
//	courseName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "courseName";
	$fdata["GoodName"] = "courseName";
	$fdata["ownerTable"] = "course";
	$fdata["Label"] = GetFieldLabel("course","courseName"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "courseName"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "course.courseName";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
			$edata["HTML5InuptType"] = "text";
	
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=45";
	
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatacourse["courseName"] = $fdata;
//	subject
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "subject";
	$fdata["GoodName"] = "subject";
	$fdata["ownerTable"] = "course";
	$fdata["Label"] = GetFieldLabel("course","subject"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "subject"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "course.subject";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
			$edata["HTML5InuptType"] = "text";
	
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=45";
	
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	
//Filters settings
	$fdata["filterTotals"] = 0;	
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;	
	
		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;
	
				
		
	
//end of Filters settings	

	
	$tdatacourse["subject"] = $fdata;
//	level
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "level";
	$fdata["GoodName"] = "level";
	$fdata["ownerTable"] = "course";
	$fdata["Label"] = GetFieldLabel("course","level"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "level"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "course.`level`";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
			$edata["HTML5InuptType"] = "text";
	
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=45";
	
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	
//Filters settings
	$fdata["filterTotals"] = 0;	
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;	
	
		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;
	
				
		
	
//end of Filters settings	

	
	$tdatacourse["level"] = $fdata;
//	type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "type";
	$fdata["GoodName"] = "type";
	$fdata["ownerTable"] = "course";
	$fdata["Label"] = GetFieldLabel("course","type"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "type"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "course.`type`";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
			$edata["HTML5InuptType"] = "text";
	
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=45";
	
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	
//Filters settings
	$fdata["filterTotals"] = 0;	
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;	
	
		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;
	
				
		
	
//end of Filters settings	

	
	$tdatacourse["type"] = $fdata;
//	courseNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "courseNo";
	$fdata["GoodName"] = "courseNo";
	$fdata["ownerTable"] = "course";
	$fdata["Label"] = GetFieldLabel("course","courseNo"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "courseNo"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "course.courseNo";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
			
	
	


		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
			$edata["HTML5InuptType"] = "number";
	
		$edata["EditParams"] = "";
			
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
			
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdatacourse["courseNo"] = $fdata;

	
$tables_data["course"]=&$tdatacourse;
$field_labels["course"] = &$fieldLabelscourse;
$fieldToolTips["course"] = &$fieldToolTipscourse;
$page_titles["course"] = &$pageTitlescourse;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["course"] = array();
//	drop
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="drop";
		$detailsParam["dOriginalTable"] = "drop";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "drop";
	$detailsParam["dCaptionTable"] = GetTableCaption("drop");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
	$detailsParam["dispChildCount"] = "1";
		$detailsParam["hideChild"] = false;
	$detailsParam["previewOnList"] = 1;
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["course"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["course"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["course"][$dIndex]["masterKeys"][]="courseNo";

				$detailsTablesData["course"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["course"][$dIndex]["detailKeys"][]="courseNo";
//	selection
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="selection";
		$detailsParam["dOriginalTable"] = "selection";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "selection";
	$detailsParam["dCaptionTable"] = GetTableCaption("selection");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
	$detailsParam["dispChildCount"] = "1";
		$detailsParam["hideChild"] = false;
	$detailsParam["previewOnList"] = 1;
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["course"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["course"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["course"][$dIndex]["masterKeys"][]="courseNo";

				$detailsTablesData["course"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["course"][$dIndex]["detailKeys"][]="courseNo";
//	tag
	
	

		$dIndex = 2;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="tag";
		$detailsParam["dOriginalTable"] = "tag";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "tag";
	$detailsParam["dCaptionTable"] = GetTableCaption("tag");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
	$detailsParam["dispChildCount"] = "1";
		$detailsParam["hideChild"] = false;
	$detailsParam["previewOnList"] = 1;
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["course"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["course"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["course"][$dIndex]["masterKeys"][]="courseNo";

				$detailsTablesData["course"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["course"][$dIndex]["detailKeys"][]="courseNo";
//	selectionChart
	
	

		$dIndex = 3;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="selectionChart";
		$detailsParam["dOriginalTable"] = "selection";
			$detailsParam["dType"]=PAGE_CHART;
		$detailsParam["dShortTable"] = "selectionChart";
	$detailsParam["dCaptionTable"] = GetTableCaption("selectionChart");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
	$detailsParam["dispChildCount"] = "1";
		$detailsParam["hideChild"] = false;
	$detailsParam["previewOnList"] = 1;
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["course"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["course"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["course"][$dIndex]["masterKeys"][]="courseNo";

				$detailsTablesData["course"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["course"][$dIndex]["detailKeys"][]="courseNo";
//	tagChart
	
	

		$dIndex = 4;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="tagChart";
		$detailsParam["dOriginalTable"] = "tag";
			$detailsParam["dType"]=PAGE_CHART;
		$detailsParam["dShortTable"] = "tagChart";
	$detailsParam["dCaptionTable"] = GetTableCaption("tagChart");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
	$detailsParam["dispChildCount"] = "1";
		$detailsParam["hideChild"] = false;
	$detailsParam["previewOnList"] = 1;
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["course"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["course"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["course"][$dIndex]["masterKeys"][]="courseNo";

				$detailsTablesData["course"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["course"][$dIndex]["detailKeys"][]="courseNo";
	
// tables which are master tables for current table (detail)
$masterTablesData["course"] = array();


	
				$strOriginalDetailsTable="instructor";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="instructor";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "instructor";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "0";
	$masterParams["dispInfo"]= "1";
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 0;
	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["course"][0] = $masterParams;	
				$masterTablesData["course"][0]["masterKeys"] = array();
	$masterTablesData["course"][0]["masterKeys"][]="instructorNo";
				$masterTablesData["course"][0]["detailKeys"] = array();
	$masterTablesData["course"][0]["detailKeys"][]="instructorNo";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_course()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "AVG(selection.rate) AS `AVG(rate)`,  AVG(selection.difficulty) AS `AVG(difficulty)`,  course.courseName,  course.subject,  course.`level`,  course.`type`,  course.courseNo";
$proto0["m_strFrom"] = "FROM course  LEFT OUTER JOIN `drop` ON course.courseNo = `drop`.courseNo  LEFT OUTER JOIN tag ON course.courseNo = tag.courseNo  LEFT OUTER JOIN selection ON course.courseNo = selection.courseNo";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
$proto0["m_strTail"] = "GROUP BY course.courseName, course.subject, course.`level`, course.`type`, course.courseNo";
			$proto0["cipherer"] = null;
$proto1=array();
$proto1["m_sql"] = "";
$proto1["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto1["m_column"]=$obj;
$proto1["m_contained"] = array();
$proto1["m_strCase"] = "";
$proto1["m_havingmode"] = false;
$proto1["m_inBrackets"] = false;
$proto1["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto1);

$proto0["m_where"] = $obj;
$proto3=array();
$proto3["m_sql"] = "";
$proto3["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto3["m_column"]=$obj;
$proto3["m_contained"] = array();
$proto3["m_strCase"] = "";
$proto3["m_havingmode"] = false;
$proto3["m_inBrackets"] = false;
$proto3["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto3);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto5=array();
			$proto6=array();
$proto6["m_functiontype"] = "SQLF_AVG";
$proto6["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "rate",
	"m_strTable" => "selection",
	"m_srcTableName" => "course"
));

$proto6["m_arguments"][]=$obj;
$proto6["m_strFunctionName"] = "AVG";
$obj = new SQLFunctionCall($proto6);

$proto5["m_sql"] = "AVG(selection.rate)";
$proto5["m_srcTableName"] = "course";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "AVG(rate)";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$proto9=array();
$proto9["m_functiontype"] = "SQLF_AVG";
$proto9["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "difficulty",
	"m_strTable" => "selection",
	"m_srcTableName" => "course"
));

$proto9["m_arguments"][]=$obj;
$proto9["m_strFunctionName"] = "AVG";
$obj = new SQLFunctionCall($proto9);

$proto8["m_sql"] = "AVG(selection.difficulty)";
$proto8["m_srcTableName"] = "course";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "AVG(difficulty)";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "courseName",
	"m_strTable" => "course",
	"m_srcTableName" => "course"
));

$proto11["m_sql"] = "course.courseName";
$proto11["m_srcTableName"] = "course";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "subject",
	"m_strTable" => "course",
	"m_srcTableName" => "course"
));

$proto13["m_sql"] = "course.subject";
$proto13["m_srcTableName"] = "course";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "level",
	"m_strTable" => "course",
	"m_srcTableName" => "course"
));

$proto15["m_sql"] = "course.`level`";
$proto15["m_srcTableName"] = "course";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "type",
	"m_strTable" => "course",
	"m_srcTableName" => "course"
));

$proto17["m_sql"] = "course.`type`";
$proto17["m_srcTableName"] = "course";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "courseNo",
	"m_strTable" => "course",
	"m_srcTableName" => "course"
));

$proto19["m_sql"] = "course.courseNo";
$proto19["m_srcTableName"] = "course";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto21=array();
$proto21["m_link"] = "SQLL_MAIN";
			$proto22=array();
$proto22["m_strName"] = "course";
$proto22["m_srcTableName"] = "course";
$proto22["m_columns"] = array();
$proto22["m_columns"][] = "courseNo";
$proto22["m_columns"][] = "courseName";
$proto22["m_columns"][] = "level";
$proto22["m_columns"][] = "subject";
$proto22["m_columns"][] = "type";
$proto22["m_columns"][] = "instructorNo";
$obj = new SQLTable($proto22);

$proto21["m_table"] = $obj;
$proto21["m_sql"] = "course";
$proto21["m_alias"] = "";
$proto21["m_srcTableName"] = "course";
$proto23=array();
$proto23["m_sql"] = "";
$proto23["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto23["m_column"]=$obj;
$proto23["m_contained"] = array();
$proto23["m_strCase"] = "";
$proto23["m_havingmode"] = false;
$proto23["m_inBrackets"] = false;
$proto23["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto23);

$proto21["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto21);

$proto0["m_fromlist"][]=$obj;
												$proto25=array();
$proto25["m_link"] = "SQLL_LEFTJOIN";
			$proto26=array();
$proto26["m_strName"] = "drop";
$proto26["m_srcTableName"] = "course";
$proto26["m_columns"] = array();
$proto26["m_columns"][] = "dropid";
$proto26["m_columns"][] = "courseNo";
$proto26["m_columns"][] = "studentNo";
$obj = new SQLTable($proto26);

$proto25["m_table"] = $obj;
$proto25["m_sql"] = "LEFT OUTER JOIN `drop` ON course.courseNo = `drop`.courseNo";
$proto25["m_alias"] = "";
$proto25["m_srcTableName"] = "course";
$proto27=array();
$proto27["m_sql"] = "course.courseNo = `drop`.courseNo";
$proto27["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "courseNo",
	"m_strTable" => "course",
	"m_srcTableName" => "course"
));

$proto27["m_column"]=$obj;
$proto27["m_contained"] = array();
$proto27["m_strCase"] = "= `drop`.courseNo";
$proto27["m_havingmode"] = false;
$proto27["m_inBrackets"] = false;
$proto27["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto27);

$proto25["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto25);

$proto0["m_fromlist"][]=$obj;
												$proto29=array();
$proto29["m_link"] = "SQLL_LEFTJOIN";
			$proto30=array();
$proto30["m_strName"] = "tag";
$proto30["m_srcTableName"] = "course";
$proto30["m_columns"] = array();
$proto30["m_columns"][] = "tagNo";
$proto30["m_columns"][] = "tagName";
$proto30["m_columns"][] = "relevancy";
$proto30["m_columns"][] = "courseNo";
$obj = new SQLTable($proto30);

$proto29["m_table"] = $obj;
$proto29["m_sql"] = "LEFT OUTER JOIN tag ON course.courseNo = tag.courseNo";
$proto29["m_alias"] = "";
$proto29["m_srcTableName"] = "course";
$proto31=array();
$proto31["m_sql"] = "course.courseNo = tag.courseNo";
$proto31["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "courseNo",
	"m_strTable" => "course",
	"m_srcTableName" => "course"
));

$proto31["m_column"]=$obj;
$proto31["m_contained"] = array();
$proto31["m_strCase"] = "= tag.courseNo";
$proto31["m_havingmode"] = false;
$proto31["m_inBrackets"] = false;
$proto31["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto31);

$proto29["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto29);

$proto0["m_fromlist"][]=$obj;
												$proto33=array();
$proto33["m_link"] = "SQLL_LEFTJOIN";
			$proto34=array();
$proto34["m_strName"] = "selection";
$proto34["m_srcTableName"] = "course";
$proto34["m_columns"] = array();
$proto34["m_columns"][] = "selectionid";
$proto34["m_columns"][] = "studentNo";
$proto34["m_columns"][] = "courseNo";
$proto34["m_columns"][] = "instructorNo";
$proto34["m_columns"][] = "rate";
$proto34["m_columns"][] = "difficulty";
$obj = new SQLTable($proto34);

$proto33["m_table"] = $obj;
$proto33["m_sql"] = "LEFT OUTER JOIN selection ON course.courseNo = selection.courseNo";
$proto33["m_alias"] = "";
$proto33["m_srcTableName"] = "course";
$proto35=array();
$proto35["m_sql"] = "course.courseNo = selection.courseNo";
$proto35["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "courseNo",
	"m_strTable" => "course",
	"m_srcTableName" => "course"
));

$proto35["m_column"]=$obj;
$proto35["m_contained"] = array();
$proto35["m_strCase"] = "= selection.courseNo";
$proto35["m_havingmode"] = false;
$proto35["m_inBrackets"] = false;
$proto35["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto35);

$proto33["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto33);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto37=array();
						$obj = new SQLField(array(
	"m_strName" => "courseName",
	"m_strTable" => "course",
	"m_srcTableName" => "course"
));

$proto37["m_column"]=$obj;
$obj = new SQLGroupByItem($proto37);

$proto0["m_groupby"][]=$obj;
												$proto39=array();
						$obj = new SQLField(array(
	"m_strName" => "subject",
	"m_strTable" => "course",
	"m_srcTableName" => "course"
));

$proto39["m_column"]=$obj;
$obj = new SQLGroupByItem($proto39);

$proto0["m_groupby"][]=$obj;
												$proto41=array();
						$obj = new SQLField(array(
	"m_strName" => "level",
	"m_strTable" => "course",
	"m_srcTableName" => "course"
));

$proto41["m_column"]=$obj;
$obj = new SQLGroupByItem($proto41);

$proto0["m_groupby"][]=$obj;
												$proto43=array();
						$obj = new SQLField(array(
	"m_strName" => "type",
	"m_strTable" => "course",
	"m_srcTableName" => "course"
));

$proto43["m_column"]=$obj;
$obj = new SQLGroupByItem($proto43);

$proto0["m_groupby"][]=$obj;
												$proto45=array();
						$obj = new SQLField(array(
	"m_strName" => "courseNo",
	"m_strTable" => "course",
	"m_srcTableName" => "course"
));

$proto45["m_column"]=$obj;
$obj = new SQLGroupByItem($proto45);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="course";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_course = createSqlQuery_course();


	
							
	
$tdatacourse[".sqlquery"] = $queryData_course;

$tableEvents["course"] = new eventsBase;
$tdatacourse[".hasEvents"] = false;

?>