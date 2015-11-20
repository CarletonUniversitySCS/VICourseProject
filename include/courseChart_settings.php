<?php
require_once(getabspath("classes/cipherer.php"));




$tdatacourseChart = array();	
	$tdatacourseChart[".ShortName"] = "courseChart";
	$tdatacourseChart[".OwnerID"] = "";
	$tdatacourseChart[".OriginalTable"] = "course";

//	field labels
$fieldLabelscourseChart = array();
$fieldToolTipscourseChart = array();
$pageTitlescourseChart = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelscourseChart["English"] = array();
	$fieldToolTipscourseChart["English"] = array();
	$pageTitlescourseChart["English"] = array();
	$fieldLabelscourseChart["English"]["courseNo"] = "Course No";
	$fieldToolTipscourseChart["English"]["courseNo"] = "";
	$fieldLabelscourseChart["English"]["courseName"] = "Course Name";
	$fieldToolTipscourseChart["English"]["courseName"] = "";
	$fieldLabelscourseChart["English"]["level"] = "Level";
	$fieldToolTipscourseChart["English"]["level"] = "";
	$fieldLabelscourseChart["English"]["subject"] = "Subject";
	$fieldToolTipscourseChart["English"]["subject"] = "";
	$fieldLabelscourseChart["English"]["type"] = "Type";
	$fieldToolTipscourseChart["English"]["type"] = "";
	$fieldLabelscourseChart["English"]["AVG_rate_"] = "AVG(rate)";
	$fieldToolTipscourseChart["English"]["AVG(rate)"] = "";
	$fieldLabelscourseChart["English"]["AVG_difficulty_"] = "AVG(difficulty)";
	$fieldToolTipscourseChart["English"]["AVG(difficulty)"] = "";
	$fieldLabelscourseChart["English"]["COUNT_dropid_"] = "COUNT(dropid)";
	$fieldToolTipscourseChart["English"]["COUNT(dropid)"] = "";
	$fieldLabelscourseChart["English"]["courseNo1"] = "Course No1";
	$fieldToolTipscourseChart["English"]["courseNo1"] = "";
	$fieldLabelscourseChart["English"]["COUNT_selectionid_"] = "COUNT(selectionid)";
	$fieldToolTipscourseChart["English"]["COUNT(selectionid)"] = "";
	$fieldLabelscourseChart["English"]["courseNo2"] = "Course No2";
	$fieldToolTipscourseChart["English"]["courseNo2"] = "";
	if (count($fieldToolTipscourseChart["English"]))
		$tdatacourseChart[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelscourseChart[""] = array();
	$fieldToolTipscourseChart[""] = array();
	$pageTitlescourseChart[""] = array();
	$fieldLabelscourseChart[""]["courseNo"] = "Course No";
	$fieldToolTipscourseChart[""]["courseNo"] = "";
	$fieldLabelscourseChart[""]["AVG_rate_"] = "AVG(rate)";
	$fieldToolTipscourseChart[""]["AVG(rate)"] = "";
	$fieldLabelscourseChart[""]["AVG_difficulty_"] = "AVG(difficulty)";
	$fieldToolTipscourseChart[""]["AVG(difficulty)"] = "";
	$fieldLabelscourseChart[""]["COUNT_dropid_"] = "COUNT(dropid)";
	$fieldToolTipscourseChart[""]["COUNT(dropid)"] = "";
	$fieldLabelscourseChart[""]["courseNo1"] = "Course No1";
	$fieldToolTipscourseChart[""]["courseNo1"] = "";
	$fieldLabelscourseChart[""]["COUNT_selectionid_"] = "COUNT(selectionid)";
	$fieldToolTipscourseChart[""]["COUNT(selectionid)"] = "";
	$fieldLabelscourseChart[""]["courseNo2"] = "Course No2";
	$fieldToolTipscourseChart[""]["courseNo2"] = "";
	if (count($fieldToolTipscourseChart[""]))
		$tdatacourseChart[".isUseToolTips"] = true;
}
	
	
	$tdatacourseChart[".NCSearch"] = true;

	$tdatacourseChart[".ChartRefreshTime"] = 0;


$tdatacourseChart[".shortTableName"] = "courseChart";
$tdatacourseChart[".nSecOptions"] = 0;
$tdatacourseChart[".recsPerRowList"] = 1;
$tdatacourseChart[".mainTableOwnerID"] = "";
$tdatacourseChart[".moveNext"] = 1;
$tdatacourseChart[".nType"] = 3;

$tdatacourseChart[".strOriginalTableName"] = "course";




$tdatacourseChart[".showAddInPopup"] = false;

$tdatacourseChart[".showEditInPopup"] = false;

$tdatacourseChart[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatacourseChart[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatacourseChart[".fieldsForRegister"] = array();

$tdatacourseChart[".listAjax"] = false;

	$tdatacourseChart[".audit"] = false;

	$tdatacourseChart[".locking"] = false;

$tdatacourseChart[".edit"] = true;

$tdatacourseChart[".list"] = true;

$tdatacourseChart[".inlineEdit"] = true;
$tdatacourseChart[".inlineAdd"] = true;
$tdatacourseChart[".view"] = true;




$tdatacourseChart[".delete"] = true;

$tdatacourseChart[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatacourseChart[".searchSaving"] = false;
//

$tdatacourseChart[".showSearchPanel"] = true;
		$tdatacourseChart[".flexibleSearch"] = true;		

if (isMobile())
	$tdatacourseChart[".isUseAjaxSuggest"] = false;
else 
	$tdatacourseChart[".isUseAjaxSuggest"] = true;



				
$tdatacourseChart[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacourseChart[".isUseTimeForSearch"] = false;



$tdatacourseChart[".useDetailsPreview"] = true;


$tdatacourseChart[".allSearchFields"] = array();
$tdatacourseChart[".filterFields"] = array();
$tdatacourseChart[".requiredSearchFields"] = array();

$tdatacourseChart[".allSearchFields"][] = "AVG(rate)";
	$tdatacourseChart[".allSearchFields"][] = "AVG(difficulty)";
	$tdatacourseChart[".allSearchFields"][] = "courseName";
	$tdatacourseChart[".allSearchFields"][] = "subject";
	$tdatacourseChart[".allSearchFields"][] = "level";
	$tdatacourseChart[".allSearchFields"][] = "type";
	$tdatacourseChart[".allSearchFields"][] = "courseNo";
	$tdatacourseChart[".allSearchFields"][] = "COUNT(dropid)";
	$tdatacourseChart[".allSearchFields"][] = "courseNo1";
	$tdatacourseChart[".allSearchFields"][] = "COUNT(selectionid)";
	$tdatacourseChart[".allSearchFields"][] = "courseNo2";
	
$tdatacourseChart[".filterFields"][] = "subject";	
$tdatacourseChart[".filterFields"][] = "level";	
$tdatacourseChart[".filterFields"][] = "type";	

$tdatacourseChart[".googleLikeFields"] = array();
$tdatacourseChart[".googleLikeFields"][] = "AVG(rate)";
$tdatacourseChart[".googleLikeFields"][] = "AVG(difficulty)";
$tdatacourseChart[".googleLikeFields"][] = "courseName";
$tdatacourseChart[".googleLikeFields"][] = "subject";
$tdatacourseChart[".googleLikeFields"][] = "level";
$tdatacourseChart[".googleLikeFields"][] = "type";
$tdatacourseChart[".googleLikeFields"][] = "courseNo";
$tdatacourseChart[".googleLikeFields"][] = "COUNT(dropid)";
$tdatacourseChart[".googleLikeFields"][] = "courseNo1";
$tdatacourseChart[".googleLikeFields"][] = "COUNT(selectionid)";
$tdatacourseChart[".googleLikeFields"][] = "courseNo2";


$tdatacourseChart[".advSearchFields"] = array();
$tdatacourseChart[".advSearchFields"][] = "AVG(rate)";
$tdatacourseChart[".advSearchFields"][] = "AVG(difficulty)";
$tdatacourseChart[".advSearchFields"][] = "courseName";
$tdatacourseChart[".advSearchFields"][] = "subject";
$tdatacourseChart[".advSearchFields"][] = "level";
$tdatacourseChart[".advSearchFields"][] = "type";
$tdatacourseChart[".advSearchFields"][] = "courseNo";
$tdatacourseChart[".advSearchFields"][] = "COUNT(dropid)";
$tdatacourseChart[".advSearchFields"][] = "courseNo1";
$tdatacourseChart[".advSearchFields"][] = "COUNT(selectionid)";
$tdatacourseChart[".advSearchFields"][] = "courseNo2";

$tdatacourseChart[".tableType"] = "chart";

$tdatacourseChart[".printerPageOrientation"] = 0;
$tdatacourseChart[".nPrinterPageScale"] = 100;

$tdatacourseChart[".nPrinterSplitRecords"] = 40;

$tdatacourseChart[".nPrinterPDFSplitRecords"] = 40;




// chart settings
$tdatacourseChart[".chartType"] = "Bubble";
// end of chart settings

	





// view page pdf

// print page pdf



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatacourseChart[".strOrderBy"] = $tstrOrderBy;

$tdatacourseChart[".orderindexes"] = array();

$tdatacourseChart[".sqlHead"] = "SELECT AVG(selection.rate) AS `AVG(rate)`,  AVG(selection.difficulty) AS `AVG(difficulty)`,  course.courseName,  course.subject,  course.`level`,  course.`type`,  course.courseNo,  COUNT(`drop`.dropid) AS `COUNT(dropid)`,  `drop`.courseNo AS courseNo1,  COUNT(selection.selectionid) AS `COUNT(selectionid)`,  selection.courseNo AS courseNo2";
$tdatacourseChart[".sqlFrom"] = "FROM course  RIGHT OUTER JOIN selection ON selection.courseNo = course.courseNo  LEFT OUTER JOIN `drop` ON course.courseNo = `drop`.courseNo  LEFT OUTER JOIN tag ON course.courseNo = tag.courseNo";
$tdatacourseChart[".sqlWhereExpr"] = "";
$tdatacourseChart[".sqlTail"] = "GROUP BY course.courseName, course.subject, course.`level`, course.`type`, course.courseNo, `drop`.courseNo, selection.courseNo";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacourseChart[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacourseChart[".arrGroupsPerPage"] = $arrGPP;

$tdatacourseChart[".highlightSearchResults"] = true;

$tableKeyscourseChart = array();
$tableKeyscourseChart[] = "courseNo";
$tdatacourseChart[".Keys"] = $tableKeyscourseChart;

$tdatacourseChart[".listFields"] = array();
$tdatacourseChart[".listFields"][] = "AVG(rate)";
$tdatacourseChart[".listFields"][] = "AVG(difficulty)";
$tdatacourseChart[".listFields"][] = "courseName";
$tdatacourseChart[".listFields"][] = "subject";
$tdatacourseChart[".listFields"][] = "level";
$tdatacourseChart[".listFields"][] = "type";
$tdatacourseChart[".listFields"][] = "courseNo";
$tdatacourseChart[".listFields"][] = "COUNT(dropid)";
$tdatacourseChart[".listFields"][] = "courseNo1";
$tdatacourseChart[".listFields"][] = "COUNT(selectionid)";
$tdatacourseChart[".listFields"][] = "courseNo2";

$tdatacourseChart[".hideMobileList"] = array();


$tdatacourseChart[".viewFields"] = array();
$tdatacourseChart[".viewFields"][] = "AVG(rate)";
$tdatacourseChart[".viewFields"][] = "AVG(difficulty)";
$tdatacourseChart[".viewFields"][] = "courseName";
$tdatacourseChart[".viewFields"][] = "subject";
$tdatacourseChart[".viewFields"][] = "level";
$tdatacourseChart[".viewFields"][] = "type";
$tdatacourseChart[".viewFields"][] = "courseNo";
$tdatacourseChart[".viewFields"][] = "COUNT(dropid)";
$tdatacourseChart[".viewFields"][] = "courseNo1";
$tdatacourseChart[".viewFields"][] = "COUNT(selectionid)";
$tdatacourseChart[".viewFields"][] = "courseNo2";

$tdatacourseChart[".addFields"] = array();
$tdatacourseChart[".addFields"][] = "courseName";
$tdatacourseChart[".addFields"][] = "subject";
$tdatacourseChart[".addFields"][] = "level";
$tdatacourseChart[".addFields"][] = "type";
$tdatacourseChart[".addFields"][] = "courseNo";

$tdatacourseChart[".inlineAddFields"] = array();
$tdatacourseChart[".inlineAddFields"][] = "courseName";
$tdatacourseChart[".inlineAddFields"][] = "subject";
$tdatacourseChart[".inlineAddFields"][] = "level";
$tdatacourseChart[".inlineAddFields"][] = "type";
$tdatacourseChart[".inlineAddFields"][] = "courseNo";

$tdatacourseChart[".editFields"] = array();
$tdatacourseChart[".editFields"][] = "courseName";
$tdatacourseChart[".editFields"][] = "subject";
$tdatacourseChart[".editFields"][] = "level";
$tdatacourseChart[".editFields"][] = "type";
$tdatacourseChart[".editFields"][] = "courseNo";

$tdatacourseChart[".inlineEditFields"] = array();
$tdatacourseChart[".inlineEditFields"][] = "courseName";
$tdatacourseChart[".inlineEditFields"][] = "subject";
$tdatacourseChart[".inlineEditFields"][] = "level";
$tdatacourseChart[".inlineEditFields"][] = "type";
$tdatacourseChart[".inlineEditFields"][] = "courseNo";

$tdatacourseChart[".exportFields"] = array();
$tdatacourseChart[".exportFields"][] = "AVG(rate)";
$tdatacourseChart[".exportFields"][] = "AVG(difficulty)";
$tdatacourseChart[".exportFields"][] = "courseName";
$tdatacourseChart[".exportFields"][] = "subject";
$tdatacourseChart[".exportFields"][] = "level";
$tdatacourseChart[".exportFields"][] = "type";
$tdatacourseChart[".exportFields"][] = "courseNo";
$tdatacourseChart[".exportFields"][] = "COUNT(dropid)";
$tdatacourseChart[".exportFields"][] = "courseNo1";
$tdatacourseChart[".exportFields"][] = "COUNT(selectionid)";
$tdatacourseChart[".exportFields"][] = "courseNo2";

$tdatacourseChart[".importFields"] = array();
$tdatacourseChart[".importFields"][] = "AVG(rate)";
$tdatacourseChart[".importFields"][] = "AVG(difficulty)";
$tdatacourseChart[".importFields"][] = "courseName";
$tdatacourseChart[".importFields"][] = "subject";
$tdatacourseChart[".importFields"][] = "level";
$tdatacourseChart[".importFields"][] = "type";
$tdatacourseChart[".importFields"][] = "courseNo";
$tdatacourseChart[".importFields"][] = "COUNT(dropid)";
$tdatacourseChart[".importFields"][] = "courseNo1";
$tdatacourseChart[".importFields"][] = "COUNT(selectionid)";
$tdatacourseChart[".importFields"][] = "courseNo2";

$tdatacourseChart[".printFields"] = array();
$tdatacourseChart[".printFields"][] = "AVG(rate)";
$tdatacourseChart[".printFields"][] = "AVG(difficulty)";
$tdatacourseChart[".printFields"][] = "courseName";
$tdatacourseChart[".printFields"][] = "subject";
$tdatacourseChart[".printFields"][] = "level";
$tdatacourseChart[".printFields"][] = "type";
$tdatacourseChart[".printFields"][] = "courseNo";
$tdatacourseChart[".printFields"][] = "COUNT(dropid)";
$tdatacourseChart[".printFields"][] = "courseNo1";
$tdatacourseChart[".printFields"][] = "COUNT(selectionid)";
$tdatacourseChart[".printFields"][] = "courseNo2";

//	AVG(rate)
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "AVG(rate)";
	$fdata["GoodName"] = "AVG_rate_";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("courseChart","AVG_rate_"); 
	$fdata["FieldType"] = 5;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "AVG(rate)"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "AVG(selection.rate)";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Number");
	
		
		
		
		
		
		
		$vdata["DecimalDigits"] = 2;
	
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["chart"] = $vdata;
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
	
		
		
		
	
		
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdatacourseChart["AVG(rate)"] = $fdata;
//	AVG(difficulty)
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "AVG(difficulty)";
	$fdata["GoodName"] = "AVG_difficulty_";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("courseChart","AVG_difficulty_"); 
	$fdata["FieldType"] = 5;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "AVG(difficulty)"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "AVG(selection.difficulty)";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Number");
	
		
		
		
		
		
		
		$vdata["DecimalDigits"] = 2;
	
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["chart"] = $vdata;
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
	
		
		
		
	
		
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdatacourseChart["AVG(difficulty)"] = $fdata;
//	courseName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "courseName";
	$fdata["GoodName"] = "courseName";
	$fdata["ownerTable"] = "course";
	$fdata["Label"] = GetFieldLabel("courseChart","courseName"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "courseName"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "course.courseName";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["chart"] = $vdata;
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
	
		
		
		
	
		
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatacourseChart["courseName"] = $fdata;
//	subject
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "subject";
	$fdata["GoodName"] = "subject";
	$fdata["ownerTable"] = "course";
	$fdata["Label"] = GetFieldLabel("courseChart","subject"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "subject"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "course.subject";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["chart"] = $vdata;
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
	
		
		
		
	
		
	$fdata["EditFormats"]["search"] = $edata;
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

	
	$tdatacourseChart["subject"] = $fdata;
//	level
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "level";
	$fdata["GoodName"] = "level";
	$fdata["ownerTable"] = "course";
	$fdata["Label"] = GetFieldLabel("courseChart","level"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "level"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "course.`level`";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["chart"] = $vdata;
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
	
		
		
		
	
		
	$fdata["EditFormats"]["search"] = $edata;
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

	
	$tdatacourseChart["level"] = $fdata;
//	type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "type";
	$fdata["GoodName"] = "type";
	$fdata["ownerTable"] = "course";
	$fdata["Label"] = GetFieldLabel("courseChart","type"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "type"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "course.`type`";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["chart"] = $vdata;
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
	
		
		
		
	
		
	$fdata["EditFormats"]["search"] = $edata;
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

	
	$tdatacourseChart["type"] = $fdata;
//	courseNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "courseNo";
	$fdata["GoodName"] = "courseNo";
	$fdata["ownerTable"] = "course";
	$fdata["Label"] = GetFieldLabel("courseChart","courseNo"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "courseNo"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "course.courseNo";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["chart"] = $vdata;
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
	
		
		
		
	
		
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdatacourseChart["courseNo"] = $fdata;
//	COUNT(dropid)
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "COUNT(dropid)";
	$fdata["GoodName"] = "COUNT_dropid_";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("courseChart","COUNT_dropid_"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "COUNT(dropid)"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "COUNT(`drop`.dropid)";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["chart"] = $vdata;
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
	
		
		
		
	
		
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdatacourseChart["COUNT(dropid)"] = $fdata;
//	courseNo1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "courseNo1";
	$fdata["GoodName"] = "courseNo1";
	$fdata["ownerTable"] = "drop";
	$fdata["Label"] = GetFieldLabel("courseChart","courseNo1"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "courseNo"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`drop`.courseNo";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["chart"] = $vdata;
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
	
		
		
		
	
		
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdatacourseChart["courseNo1"] = $fdata;
//	COUNT(selectionid)
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "COUNT(selectionid)";
	$fdata["GoodName"] = "COUNT_selectionid_";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("courseChart","COUNT_selectionid_"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "COUNT(selectionid)"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "COUNT(selection.selectionid)";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["chart"] = $vdata;
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
	
		
		
		
	
		
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdatacourseChart["COUNT(selectionid)"] = $fdata;
//	courseNo2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "courseNo2";
	$fdata["GoodName"] = "courseNo2";
	$fdata["ownerTable"] = "selection";
	$fdata["Label"] = GetFieldLabel("courseChart","courseNo2"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "courseNo"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "selection.courseNo";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["chart"] = $vdata;
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
	
		
		
		
	
		
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdatacourseChart["courseNo2"] = $fdata;

	$tdatacourseChart[".chartXml"] = '<chart>
		<attr value="tables">
			<attr value="0">courseChart</attr>
		</attr>
		<attr value="chart_type">
			<attr value="type">bubble</attr>
		</attr>
		
		<attr value="parameters">';
	$tdatacourseChart[".chartXml"] .= '<attr value="0">
			<attr value="name">AVG(difficulty)</attr>
			<attr value="currencyFormat">0</attr>
			<attr value="decimalFormat">0</attr>
			<attr value="customFormat">0</attr>
			<attr value="customFormatStr"></attr>';
	$tdatacourseChart[".chartXml"] .= '<attr value="size">AVG(rate)</attr>';
	$tdatacourseChart[".chartXml"] .= '</attr>';
	$tdatacourseChart[".chartXml"] .= '<attr value="1">
		<attr value="name">type</attr>
	</attr>';
	$tdatacourseChart[".chartXml"] .= '</attr>
			<attr value="appearance">';
	$tdatacourseChart[".chartXml"] .= '<attr value="scolor11">FF0000</attr>
			<attr value="scolor12">FF0000</attr>';

	$tdatacourseChart[".chartXml"] .= '<attr value="head">'.xmlencode("Courses").'</attr>
<attr value="foot">'.xmlencode("").'</attr>
<attr value="y_axis_label">'.xmlencode("courseNo").'</attr>

<attr value="color51">49563A</attr>
<attr value="color52">49563A</attr>
<attr value="color61">49563A</attr>
<attr value="color62">49563A</attr>
<attr value="color71">C7CDC1</attr>
<attr value="color72">C7CDC1</attr>
<attr value="color81">ECF0E8</attr>
<attr value="color82">ECF0E8</attr>
<attr value="color91">68838B</attr>
<attr value="color92">68838B</attr>
<attr value="color101">48505A</attr>
<attr value="color102">48505A</attr>
<attr value="color111">45595F</attr>
<attr value="color112">45595F</attr>
<attr value="color121"></attr>
<attr value="color122"></attr>
<attr value="color131">000000</attr>
<attr value="color132">000000</attr>
<attr value="color141">000000</attr>
<attr value="color142">000000</attr>

<attr value="slegend">false</attr>
<attr value="sgrid">false</attr>
<attr value="sname">true</attr>
<attr value="sval">true</attr>
<attr value="sanim">true</attr>
<attr value="sstacked">false</attr>
<attr value="saxes">false</attr>
<attr value="slog">false</attr>
<attr value="aqua">0</attr>
<attr value="cview">0</attr>
<attr value="is3d">0</attr>
<attr value="isstacked">0</attr>
<attr value="linestyle">0</attr>
<attr value="autoupdate">0</attr>
<attr value="autoupmin">60</attr>
<attr value="cscroll">true</attr>
<attr value="maxbarscroll">50</attr>';
$tdatacourseChart[".chartXml"] .= '<attr value="bubbletransp">0</attr>';
$tdatacourseChart[".chartXml"] .= '</attr>

<attr value="fields">';
	$tdatacourseChart[".chartXml"] .= '<attr value="0">
		<attr value="name">AVG(rate)</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("courseChart","AVG_rate_")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatacourseChart[".chartXml"] .= '<attr value="1">
		<attr value="name">AVG(difficulty)</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("courseChart","AVG_difficulty_")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatacourseChart[".chartXml"] .= '<attr value="2">
		<attr value="name">courseName</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("courseChart","courseName")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatacourseChart[".chartXml"] .= '<attr value="3">
		<attr value="name">subject</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("courseChart","subject")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatacourseChart[".chartXml"] .= '<attr value="4">
		<attr value="name">level</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("courseChart","level")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatacourseChart[".chartXml"] .= '<attr value="5">
		<attr value="name">type</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("courseChart","type")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatacourseChart[".chartXml"] .= '<attr value="6">
		<attr value="name">courseNo</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("courseChart","courseNo")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatacourseChart[".chartXml"] .= '<attr value="7">
		<attr value="name">COUNT(dropid)</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("courseChart","COUNT_dropid_")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatacourseChart[".chartXml"] .= '<attr value="8">
		<attr value="name">courseNo1</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("courseChart","courseNo1")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatacourseChart[".chartXml"] .= '<attr value="9">
		<attr value="name">COUNT(selectionid)</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("courseChart","COUNT_selectionid_")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatacourseChart[".chartXml"] .= '<attr value="10">
		<attr value="name">courseNo2</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("courseChart","courseNo2")).'</attr>
		<attr value="search"></attr>
	</attr>';
$tdatacourseChart[".chartXml"] .= '</attr>


<attr value="settings">
<attr value="name">courseChart</attr>
<attr value="short_table_name">courseChart</attr>
</attr>

</chart>';
	
$tables_data["courseChart"]=&$tdatacourseChart;
$field_labels["courseChart"] = &$fieldLabelscourseChart;
$fieldToolTips["courseChart"] = &$fieldToolTipscourseChart;
$page_titles["courseChart"] = &$pageTitlescourseChart;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["courseChart"] = array();
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
			
	$detailsTablesData["courseChart"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["courseChart"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["courseChart"][$dIndex]["masterKeys"][]="courseNo";

				$detailsTablesData["courseChart"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["courseChart"][$dIndex]["detailKeys"][]="courseNo";
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
			
	$detailsTablesData["courseChart"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["courseChart"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["courseChart"][$dIndex]["masterKeys"][]="courseNo";

				$detailsTablesData["courseChart"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["courseChart"][$dIndex]["detailKeys"][]="courseNo";
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
			
	$detailsTablesData["courseChart"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["courseChart"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["courseChart"][$dIndex]["masterKeys"][]="courseNo";

				$detailsTablesData["courseChart"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["courseChart"][$dIndex]["detailKeys"][]="courseNo";
	
// tables which are master tables for current table (detail)
$masterTablesData["courseChart"] = array();


	
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
					$masterTablesData["courseChart"][0] = $masterParams;	
				$masterTablesData["courseChart"][0]["masterKeys"] = array();
	$masterTablesData["courseChart"][0]["masterKeys"][]="instructorNo";
				$masterTablesData["courseChart"][0]["detailKeys"] = array();
	$masterTablesData["courseChart"][0]["detailKeys"][]="instructorNo";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_courseChart()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "AVG(selection.rate) AS `AVG(rate)`,  AVG(selection.difficulty) AS `AVG(difficulty)`,  course.courseName,  course.subject,  course.`level`,  course.`type`,  course.courseNo,  COUNT(`drop`.dropid) AS `COUNT(dropid)`,  `drop`.courseNo AS courseNo1,  COUNT(selection.selectionid) AS `COUNT(selectionid)`,  selection.courseNo AS courseNo2";
$proto0["m_strFrom"] = "FROM course  RIGHT OUTER JOIN selection ON selection.courseNo = course.courseNo  LEFT OUTER JOIN `drop` ON course.courseNo = `drop`.courseNo  LEFT OUTER JOIN tag ON course.courseNo = tag.courseNo";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
$proto0["m_strTail"] = "GROUP BY course.courseName, course.subject, course.`level`, course.`type`, course.courseNo, `drop`.courseNo, selection.courseNo";
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
	"m_srcTableName" => "courseChart"
));

$proto6["m_arguments"][]=$obj;
$proto6["m_strFunctionName"] = "AVG";
$obj = new SQLFunctionCall($proto6);

$proto5["m_sql"] = "AVG(selection.rate)";
$proto5["m_srcTableName"] = "courseChart";
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
	"m_srcTableName" => "courseChart"
));

$proto9["m_arguments"][]=$obj;
$proto9["m_strFunctionName"] = "AVG";
$obj = new SQLFunctionCall($proto9);

$proto8["m_sql"] = "AVG(selection.difficulty)";
$proto8["m_srcTableName"] = "courseChart";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "AVG(difficulty)";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "courseName",
	"m_strTable" => "course",
	"m_srcTableName" => "courseChart"
));

$proto11["m_sql"] = "course.courseName";
$proto11["m_srcTableName"] = "courseChart";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "subject",
	"m_strTable" => "course",
	"m_srcTableName" => "courseChart"
));

$proto13["m_sql"] = "course.subject";
$proto13["m_srcTableName"] = "courseChart";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "level",
	"m_strTable" => "course",
	"m_srcTableName" => "courseChart"
));

$proto15["m_sql"] = "course.`level`";
$proto15["m_srcTableName"] = "courseChart";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "type",
	"m_strTable" => "course",
	"m_srcTableName" => "courseChart"
));

$proto17["m_sql"] = "course.`type`";
$proto17["m_srcTableName"] = "courseChart";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "courseNo",
	"m_strTable" => "course",
	"m_srcTableName" => "courseChart"
));

$proto19["m_sql"] = "course.courseNo";
$proto19["m_srcTableName"] = "courseChart";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$proto22=array();
$proto22["m_functiontype"] = "SQLF_COUNT";
$proto22["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "dropid",
	"m_strTable" => "drop",
	"m_srcTableName" => "courseChart"
));

$proto22["m_arguments"][]=$obj;
$proto22["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto22);

$proto21["m_sql"] = "COUNT(`drop`.dropid)";
$proto21["m_srcTableName"] = "courseChart";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "COUNT(dropid)";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "courseNo",
	"m_strTable" => "drop",
	"m_srcTableName" => "courseChart"
));

$proto24["m_sql"] = "`drop`.courseNo";
$proto24["m_srcTableName"] = "courseChart";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "courseNo1";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$proto27=array();
$proto27["m_functiontype"] = "SQLF_COUNT";
$proto27["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "selectionid",
	"m_strTable" => "selection",
	"m_srcTableName" => "courseChart"
));

$proto27["m_arguments"][]=$obj;
$proto27["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto27);

$proto26["m_sql"] = "COUNT(selection.selectionid)";
$proto26["m_srcTableName"] = "courseChart";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "COUNT(selectionid)";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "courseNo",
	"m_strTable" => "selection",
	"m_srcTableName" => "courseChart"
));

$proto29["m_sql"] = "selection.courseNo";
$proto29["m_srcTableName"] = "courseChart";
$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "courseNo2";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto31=array();
$proto31["m_link"] = "SQLL_MAIN";
			$proto32=array();
$proto32["m_strName"] = "course";
$proto32["m_srcTableName"] = "courseChart";
$proto32["m_columns"] = array();
$proto32["m_columns"][] = "courseNo";
$proto32["m_columns"][] = "courseName";
$proto32["m_columns"][] = "level";
$proto32["m_columns"][] = "subject";
$proto32["m_columns"][] = "type";
$proto32["m_columns"][] = "instructorNo";
$obj = new SQLTable($proto32);

$proto31["m_table"] = $obj;
$proto31["m_sql"] = "course";
$proto31["m_alias"] = "";
$proto31["m_srcTableName"] = "courseChart";
$proto33=array();
$proto33["m_sql"] = "";
$proto33["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto33["m_column"]=$obj;
$proto33["m_contained"] = array();
$proto33["m_strCase"] = "";
$proto33["m_havingmode"] = false;
$proto33["m_inBrackets"] = false;
$proto33["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto33);

$proto31["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto31);

$proto0["m_fromlist"][]=$obj;
												$proto35=array();
$proto35["m_link"] = "SQLL_RIGHTJOIN";
			$proto36=array();
$proto36["m_strName"] = "selection";
$proto36["m_srcTableName"] = "courseChart";
$proto36["m_columns"] = array();
$proto36["m_columns"][] = "selectionid";
$proto36["m_columns"][] = "studentNo";
$proto36["m_columns"][] = "courseNo";
$proto36["m_columns"][] = "instructorNo";
$proto36["m_columns"][] = "rate";
$proto36["m_columns"][] = "difficulty";
$obj = new SQLTable($proto36);

$proto35["m_table"] = $obj;
$proto35["m_sql"] = "RIGHT OUTER JOIN selection ON selection.courseNo = course.courseNo";
$proto35["m_alias"] = "";
$proto35["m_srcTableName"] = "courseChart";
$proto37=array();
$proto37["m_sql"] = "selection.courseNo = course.courseNo";
$proto37["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "courseNo",
	"m_strTable" => "selection",
	"m_srcTableName" => "courseChart"
));

$proto37["m_column"]=$obj;
$proto37["m_contained"] = array();
$proto37["m_strCase"] = "= course.courseNo";
$proto37["m_havingmode"] = false;
$proto37["m_inBrackets"] = false;
$proto37["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto37);

$proto35["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto35);

$proto0["m_fromlist"][]=$obj;
												$proto39=array();
$proto39["m_link"] = "SQLL_LEFTJOIN";
			$proto40=array();
$proto40["m_strName"] = "drop";
$proto40["m_srcTableName"] = "courseChart";
$proto40["m_columns"] = array();
$proto40["m_columns"][] = "dropid";
$proto40["m_columns"][] = "courseNo";
$proto40["m_columns"][] = "studentNo";
$obj = new SQLTable($proto40);

$proto39["m_table"] = $obj;
$proto39["m_sql"] = "LEFT OUTER JOIN `drop` ON course.courseNo = `drop`.courseNo";
$proto39["m_alias"] = "";
$proto39["m_srcTableName"] = "courseChart";
$proto41=array();
$proto41["m_sql"] = "course.courseNo = `drop`.courseNo";
$proto41["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "courseNo",
	"m_strTable" => "course",
	"m_srcTableName" => "courseChart"
));

$proto41["m_column"]=$obj;
$proto41["m_contained"] = array();
$proto41["m_strCase"] = "= `drop`.courseNo";
$proto41["m_havingmode"] = false;
$proto41["m_inBrackets"] = false;
$proto41["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto41);

$proto39["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto39);

$proto0["m_fromlist"][]=$obj;
												$proto43=array();
$proto43["m_link"] = "SQLL_LEFTJOIN";
			$proto44=array();
$proto44["m_strName"] = "tag";
$proto44["m_srcTableName"] = "courseChart";
$proto44["m_columns"] = array();
$proto44["m_columns"][] = "tagNo";
$proto44["m_columns"][] = "tagName";
$proto44["m_columns"][] = "relevancy";
$proto44["m_columns"][] = "courseNo";
$obj = new SQLTable($proto44);

$proto43["m_table"] = $obj;
$proto43["m_sql"] = "LEFT OUTER JOIN tag ON course.courseNo = tag.courseNo";
$proto43["m_alias"] = "";
$proto43["m_srcTableName"] = "courseChart";
$proto45=array();
$proto45["m_sql"] = "course.courseNo = tag.courseNo";
$proto45["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "courseNo",
	"m_strTable" => "course",
	"m_srcTableName" => "courseChart"
));

$proto45["m_column"]=$obj;
$proto45["m_contained"] = array();
$proto45["m_strCase"] = "= tag.courseNo";
$proto45["m_havingmode"] = false;
$proto45["m_inBrackets"] = false;
$proto45["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto45);

$proto43["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto43);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto47=array();
						$obj = new SQLField(array(
	"m_strName" => "courseName",
	"m_strTable" => "course",
	"m_srcTableName" => "courseChart"
));

$proto47["m_column"]=$obj;
$obj = new SQLGroupByItem($proto47);

$proto0["m_groupby"][]=$obj;
												$proto49=array();
						$obj = new SQLField(array(
	"m_strName" => "subject",
	"m_strTable" => "course",
	"m_srcTableName" => "courseChart"
));

$proto49["m_column"]=$obj;
$obj = new SQLGroupByItem($proto49);

$proto0["m_groupby"][]=$obj;
												$proto51=array();
						$obj = new SQLField(array(
	"m_strName" => "level",
	"m_strTable" => "course",
	"m_srcTableName" => "courseChart"
));

$proto51["m_column"]=$obj;
$obj = new SQLGroupByItem($proto51);

$proto0["m_groupby"][]=$obj;
												$proto53=array();
						$obj = new SQLField(array(
	"m_strName" => "type",
	"m_strTable" => "course",
	"m_srcTableName" => "courseChart"
));

$proto53["m_column"]=$obj;
$obj = new SQLGroupByItem($proto53);

$proto0["m_groupby"][]=$obj;
												$proto55=array();
						$obj = new SQLField(array(
	"m_strName" => "courseNo",
	"m_strTable" => "course",
	"m_srcTableName" => "courseChart"
));

$proto55["m_column"]=$obj;
$obj = new SQLGroupByItem($proto55);

$proto0["m_groupby"][]=$obj;
												$proto57=array();
						$obj = new SQLField(array(
	"m_strName" => "courseNo",
	"m_strTable" => "drop",
	"m_srcTableName" => "courseChart"
));

$proto57["m_column"]=$obj;
$obj = new SQLGroupByItem($proto57);

$proto0["m_groupby"][]=$obj;
												$proto59=array();
						$obj = new SQLField(array(
	"m_strName" => "courseNo",
	"m_strTable" => "selection",
	"m_srcTableName" => "courseChart"
));

$proto59["m_column"]=$obj;
$obj = new SQLGroupByItem($proto59);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="courseChart";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_courseChart = createSqlQuery_courseChart();


	
											
	
$tdatacourseChart[".sqlquery"] = $queryData_courseChart;

$tableEvents["courseChart"] = new eventsBase;
$tdatacourseChart[".hasEvents"] = false;

?>