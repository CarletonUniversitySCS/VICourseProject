<?php
require_once(getabspath("classes/cipherer.php"));




$tdataselectionChart = array();	
	$tdataselectionChart[".ShortName"] = "selectionChart";
	$tdataselectionChart[".OwnerID"] = "";
	$tdataselectionChart[".OriginalTable"] = "selection";

//	field labels
$fieldLabelsselectionChart = array();
$fieldToolTipsselectionChart = array();
$pageTitlesselectionChart = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsselectionChart["English"] = array();
	$fieldToolTipsselectionChart["English"] = array();
	$pageTitlesselectionChart["English"] = array();
	$fieldLabelsselectionChart["English"]["selectionid"] = "Selectionid";
	$fieldToolTipsselectionChart["English"]["selectionid"] = "";
	$fieldLabelsselectionChart["English"]["studentNo"] = "Student No";
	$fieldToolTipsselectionChart["English"]["studentNo"] = "";
	$fieldLabelsselectionChart["English"]["courseNo"] = "Course No";
	$fieldToolTipsselectionChart["English"]["courseNo"] = "";
	$fieldLabelsselectionChart["English"]["instructorNo"] = "Instructor No";
	$fieldToolTipsselectionChart["English"]["instructorNo"] = "";
	$fieldLabelsselectionChart["English"]["rate"] = "Rate";
	$fieldToolTipsselectionChart["English"]["rate"] = "";
	$fieldLabelsselectionChart["English"]["difficulty"] = "Difficulty";
	$fieldToolTipsselectionChart["English"]["difficulty"] = "";
	$fieldLabelsselectionChart["English"]["courseNo1"] = "Course No1";
	$fieldToolTipsselectionChart["English"]["courseNo1"] = "";
	$fieldLabelsselectionChart["English"]["courseName"] = "Course Name";
	$fieldToolTipsselectionChart["English"]["courseName"] = "";
	$fieldLabelsselectionChart["English"]["level"] = "Level";
	$fieldToolTipsselectionChart["English"]["level"] = "";
	$fieldLabelsselectionChart["English"]["subject"] = "Subject";
	$fieldToolTipsselectionChart["English"]["subject"] = "";
	$fieldLabelsselectionChart["English"]["type"] = "Type";
	$fieldToolTipsselectionChart["English"]["type"] = "";
	$fieldLabelsselectionChart["English"]["instructorNo1"] = "Instructor No1";
	$fieldToolTipsselectionChart["English"]["instructorNo1"] = "";
	if (count($fieldToolTipsselectionChart["English"]))
		$tdataselectionChart[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsselectionChart[""] = array();
	$fieldToolTipsselectionChart[""] = array();
	$pageTitlesselectionChart[""] = array();
	$fieldLabelsselectionChart[""]["selectionid"] = "Selectionid";
	$fieldToolTipsselectionChart[""]["selectionid"] = "";
	$fieldLabelsselectionChart[""]["courseNo1"] = "Course No1";
	$fieldToolTipsselectionChart[""]["courseNo1"] = "";
	$fieldLabelsselectionChart[""]["courseName"] = "Course Name";
	$fieldToolTipsselectionChart[""]["courseName"] = "";
	$fieldLabelsselectionChart[""]["level"] = "Level";
	$fieldToolTipsselectionChart[""]["level"] = "";
	$fieldLabelsselectionChart[""]["subject"] = "Subject";
	$fieldToolTipsselectionChart[""]["subject"] = "";
	$fieldLabelsselectionChart[""]["type"] = "Type";
	$fieldToolTipsselectionChart[""]["type"] = "";
	$fieldLabelsselectionChart[""]["instructorNo1"] = "Instructor No1";
	$fieldToolTipsselectionChart[""]["instructorNo1"] = "";
	if (count($fieldToolTipsselectionChart[""]))
		$tdataselectionChart[".isUseToolTips"] = true;
}
	
	
	$tdataselectionChart[".NCSearch"] = true;

	$tdataselectionChart[".ChartRefreshTime"] = 0;


$tdataselectionChart[".shortTableName"] = "selectionChart";
$tdataselectionChart[".nSecOptions"] = 0;
$tdataselectionChart[".recsPerRowList"] = 1;
$tdataselectionChart[".mainTableOwnerID"] = "";
$tdataselectionChart[".moveNext"] = 1;
$tdataselectionChart[".nType"] = 3;

$tdataselectionChart[".strOriginalTableName"] = "selection";




$tdataselectionChart[".showAddInPopup"] = false;

$tdataselectionChart[".showEditInPopup"] = false;

$tdataselectionChart[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataselectionChart[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataselectionChart[".fieldsForRegister"] = array();

$tdataselectionChart[".listAjax"] = false;

	$tdataselectionChart[".audit"] = false;

	$tdataselectionChart[".locking"] = false;

$tdataselectionChart[".edit"] = true;

$tdataselectionChart[".list"] = true;

$tdataselectionChart[".inlineEdit"] = true;
$tdataselectionChart[".inlineAdd"] = true;
$tdataselectionChart[".view"] = true;




$tdataselectionChart[".delete"] = true;

$tdataselectionChart[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataselectionChart[".searchSaving"] = false;
//

$tdataselectionChart[".showSearchPanel"] = true;
		$tdataselectionChart[".flexibleSearch"] = true;		

if (isMobile())
	$tdataselectionChart[".isUseAjaxSuggest"] = false;
else 
	$tdataselectionChart[".isUseAjaxSuggest"] = true;




$tdataselectionChart[".addPageEvents"] = false;

// use timepicker for search panel
$tdataselectionChart[".isUseTimeForSearch"] = false;





$tdataselectionChart[".allSearchFields"] = array();
$tdataselectionChart[".filterFields"] = array();
$tdataselectionChart[".requiredSearchFields"] = array();

$tdataselectionChart[".allSearchFields"][] = "selectionid";
	$tdataselectionChart[".allSearchFields"][] = "studentNo";
	$tdataselectionChart[".allSearchFields"][] = "courseNo";
	$tdataselectionChart[".allSearchFields"][] = "instructorNo";
	$tdataselectionChart[".allSearchFields"][] = "rate";
	$tdataselectionChart[".allSearchFields"][] = "difficulty";
	$tdataselectionChart[".allSearchFields"][] = "courseNo1";
	$tdataselectionChart[".allSearchFields"][] = "courseName";
	$tdataselectionChart[".allSearchFields"][] = "level";
	$tdataselectionChart[".allSearchFields"][] = "subject";
	$tdataselectionChart[".allSearchFields"][] = "type";
	$tdataselectionChart[".allSearchFields"][] = "instructorNo1";
	
$tdataselectionChart[".filterFields"][] = "selectionid";	

$tdataselectionChart[".googleLikeFields"] = array();
$tdataselectionChart[".googleLikeFields"][] = "selectionid";
$tdataselectionChart[".googleLikeFields"][] = "studentNo";
$tdataselectionChart[".googleLikeFields"][] = "courseNo";
$tdataselectionChart[".googleLikeFields"][] = "instructorNo";
$tdataselectionChart[".googleLikeFields"][] = "rate";
$tdataselectionChart[".googleLikeFields"][] = "difficulty";
$tdataselectionChart[".googleLikeFields"][] = "courseNo1";
$tdataselectionChart[".googleLikeFields"][] = "courseName";
$tdataselectionChart[".googleLikeFields"][] = "level";
$tdataselectionChart[".googleLikeFields"][] = "subject";
$tdataselectionChart[".googleLikeFields"][] = "type";
$tdataselectionChart[".googleLikeFields"][] = "instructorNo1";


$tdataselectionChart[".advSearchFields"] = array();
$tdataselectionChart[".advSearchFields"][] = "selectionid";
$tdataselectionChart[".advSearchFields"][] = "studentNo";
$tdataselectionChart[".advSearchFields"][] = "courseNo";
$tdataselectionChart[".advSearchFields"][] = "instructorNo";
$tdataselectionChart[".advSearchFields"][] = "rate";
$tdataselectionChart[".advSearchFields"][] = "difficulty";
$tdataselectionChart[".advSearchFields"][] = "courseNo1";
$tdataselectionChart[".advSearchFields"][] = "courseName";
$tdataselectionChart[".advSearchFields"][] = "level";
$tdataselectionChart[".advSearchFields"][] = "subject";
$tdataselectionChart[".advSearchFields"][] = "type";
$tdataselectionChart[".advSearchFields"][] = "instructorNo1";

$tdataselectionChart[".tableType"] = "chart";

$tdataselectionChart[".printerPageOrientation"] = 0;
$tdataselectionChart[".nPrinterPageScale"] = 100;

$tdataselectionChart[".nPrinterSplitRecords"] = 40;

$tdataselectionChart[".nPrinterPDFSplitRecords"] = 40;




// chart settings
$tdataselectionChart[".chartType"] = "Bubble";
// end of chart settings

	





// view page pdf

// print page pdf



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataselectionChart[".strOrderBy"] = $tstrOrderBy;

$tdataselectionChart[".orderindexes"] = array();

$tdataselectionChart[".sqlHead"] = "SELECT selection.selectionid,  selection.studentNo,  selection.courseNo,  selection.instructorNo,  selection.rate,  selection.difficulty,  course.courseNo AS courseNo1,  course.courseName,  course.`level`,  course.subject,  course.`type`,  course.instructorNo AS instructorNo1";
$tdataselectionChart[".sqlFrom"] = "FROM selection  INNER JOIN course ON selection.courseNo = course.courseNo";
$tdataselectionChart[".sqlWhereExpr"] = "";
$tdataselectionChart[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataselectionChart[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataselectionChart[".arrGroupsPerPage"] = $arrGPP;

$tdataselectionChart[".highlightSearchResults"] = true;

$tableKeysselectionChart = array();
$tableKeysselectionChart[] = "selectionid";
$tdataselectionChart[".Keys"] = $tableKeysselectionChart;

$tdataselectionChart[".listFields"] = array();
$tdataselectionChart[".listFields"][] = "selectionid";
$tdataselectionChart[".listFields"][] = "studentNo";
$tdataselectionChart[".listFields"][] = "courseNo";
$tdataselectionChart[".listFields"][] = "instructorNo";
$tdataselectionChart[".listFields"][] = "rate";
$tdataselectionChart[".listFields"][] = "difficulty";
$tdataselectionChart[".listFields"][] = "courseNo1";
$tdataselectionChart[".listFields"][] = "courseName";
$tdataselectionChart[".listFields"][] = "level";
$tdataselectionChart[".listFields"][] = "subject";
$tdataselectionChart[".listFields"][] = "type";
$tdataselectionChart[".listFields"][] = "instructorNo1";

$tdataselectionChart[".hideMobileList"] = array();


$tdataselectionChart[".viewFields"] = array();
$tdataselectionChart[".viewFields"][] = "selectionid";
$tdataselectionChart[".viewFields"][] = "studentNo";
$tdataselectionChart[".viewFields"][] = "courseNo";
$tdataselectionChart[".viewFields"][] = "instructorNo";
$tdataselectionChart[".viewFields"][] = "rate";
$tdataselectionChart[".viewFields"][] = "difficulty";
$tdataselectionChart[".viewFields"][] = "courseNo1";
$tdataselectionChart[".viewFields"][] = "courseName";
$tdataselectionChart[".viewFields"][] = "level";
$tdataselectionChart[".viewFields"][] = "subject";
$tdataselectionChart[".viewFields"][] = "type";
$tdataselectionChart[".viewFields"][] = "instructorNo1";

$tdataselectionChart[".addFields"] = array();
$tdataselectionChart[".addFields"][] = "selectionid";
$tdataselectionChart[".addFields"][] = "studentNo";
$tdataselectionChart[".addFields"][] = "courseNo";
$tdataselectionChart[".addFields"][] = "instructorNo";
$tdataselectionChart[".addFields"][] = "rate";
$tdataselectionChart[".addFields"][] = "difficulty";

$tdataselectionChart[".inlineAddFields"] = array();
$tdataselectionChart[".inlineAddFields"][] = "selectionid";
$tdataselectionChart[".inlineAddFields"][] = "studentNo";
$tdataselectionChart[".inlineAddFields"][] = "courseNo";
$tdataselectionChart[".inlineAddFields"][] = "instructorNo";
$tdataselectionChart[".inlineAddFields"][] = "rate";
$tdataselectionChart[".inlineAddFields"][] = "difficulty";

$tdataselectionChart[".editFields"] = array();
$tdataselectionChart[".editFields"][] = "selectionid";
$tdataselectionChart[".editFields"][] = "studentNo";
$tdataselectionChart[".editFields"][] = "courseNo";
$tdataselectionChart[".editFields"][] = "instructorNo";
$tdataselectionChart[".editFields"][] = "rate";
$tdataselectionChart[".editFields"][] = "difficulty";

$tdataselectionChart[".inlineEditFields"] = array();
$tdataselectionChart[".inlineEditFields"][] = "selectionid";
$tdataselectionChart[".inlineEditFields"][] = "studentNo";
$tdataselectionChart[".inlineEditFields"][] = "courseNo";
$tdataselectionChart[".inlineEditFields"][] = "instructorNo";
$tdataselectionChart[".inlineEditFields"][] = "rate";
$tdataselectionChart[".inlineEditFields"][] = "difficulty";

$tdataselectionChart[".exportFields"] = array();
$tdataselectionChart[".exportFields"][] = "selectionid";
$tdataselectionChart[".exportFields"][] = "studentNo";
$tdataselectionChart[".exportFields"][] = "courseNo";
$tdataselectionChart[".exportFields"][] = "instructorNo";
$tdataselectionChart[".exportFields"][] = "rate";
$tdataselectionChart[".exportFields"][] = "difficulty";
$tdataselectionChart[".exportFields"][] = "courseNo1";
$tdataselectionChart[".exportFields"][] = "courseName";
$tdataselectionChart[".exportFields"][] = "level";
$tdataselectionChart[".exportFields"][] = "subject";
$tdataselectionChart[".exportFields"][] = "type";
$tdataselectionChart[".exportFields"][] = "instructorNo1";

$tdataselectionChart[".importFields"] = array();
$tdataselectionChart[".importFields"][] = "selectionid";
$tdataselectionChart[".importFields"][] = "studentNo";
$tdataselectionChart[".importFields"][] = "courseNo";
$tdataselectionChart[".importFields"][] = "instructorNo";
$tdataselectionChart[".importFields"][] = "rate";
$tdataselectionChart[".importFields"][] = "difficulty";
$tdataselectionChart[".importFields"][] = "courseNo1";
$tdataselectionChart[".importFields"][] = "courseName";
$tdataselectionChart[".importFields"][] = "level";
$tdataselectionChart[".importFields"][] = "subject";
$tdataselectionChart[".importFields"][] = "type";
$tdataselectionChart[".importFields"][] = "instructorNo1";

$tdataselectionChart[".printFields"] = array();
$tdataselectionChart[".printFields"][] = "selectionid";
$tdataselectionChart[".printFields"][] = "studentNo";
$tdataselectionChart[".printFields"][] = "courseNo";
$tdataselectionChart[".printFields"][] = "instructorNo";
$tdataselectionChart[".printFields"][] = "rate";
$tdataselectionChart[".printFields"][] = "difficulty";
$tdataselectionChart[".printFields"][] = "courseNo1";
$tdataselectionChart[".printFields"][] = "courseName";
$tdataselectionChart[".printFields"][] = "level";
$tdataselectionChart[".printFields"][] = "subject";
$tdataselectionChart[".printFields"][] = "type";
$tdataselectionChart[".printFields"][] = "instructorNo1";

//	selectionid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "selectionid";
	$fdata["GoodName"] = "selectionid";
	$fdata["ownerTable"] = "selection";
	$fdata["Label"] = GetFieldLabel("selectionChart","selectionid"); 
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
	
		$fdata["strField"] = "selectionid"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "selection.selectionid";
	
		
		
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

	
//Filters settings
	$fdata["filterTotals"] = 0;	
		$fdata["filterMultiSelect"] = 0;
		$fdata["filterTotalFields"] = "selectionid";	
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;	
	
		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;
	
				
		
	
//end of Filters settings	

	
	$tdataselectionChart["selectionid"] = $fdata;
//	studentNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "studentNo";
	$fdata["GoodName"] = "studentNo";
	$fdata["ownerTable"] = "selection";
	$fdata["Label"] = GetFieldLabel("selectionChart","studentNo"); 
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
	
		$fdata["strField"] = "studentNo"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "selection.studentNo";
	
		
		
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
	
	$edata = array("EditFormat" => "Lookup wizard");
	
			
	
	
// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "student";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
		
		
			
	$edata["LinkField"] = "studentNo";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "studentNo";
	
		
	$edata["LookupOrderBy"] = "";
	
		
			
		
				
	
	
		
		$edata["SelectSize"] = 1;
		
// End Lookup Settings


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
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
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataselectionChart["studentNo"] = $fdata;
//	courseNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "courseNo";
	$fdata["GoodName"] = "courseNo";
	$fdata["ownerTable"] = "selection";
	$fdata["Label"] = GetFieldLabel("selectionChart","courseNo"); 
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
	
	$edata = array("EditFormat" => "Lookup wizard");
	
			
	
	
// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "course";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
		
		
			
	$edata["LinkField"] = "courseNo";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "courseNo";
	
		
	$edata["LookupOrderBy"] = "";
	
		
			
		
				
	
	
		
		$edata["SelectSize"] = 1;
		
// End Lookup Settings


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
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
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataselectionChart["courseNo"] = $fdata;
//	instructorNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "instructorNo";
	$fdata["GoodName"] = "instructorNo";
	$fdata["ownerTable"] = "selection";
	$fdata["Label"] = GetFieldLabel("selectionChart","instructorNo"); 
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
	
		$fdata["strField"] = "instructorNo"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "selection.instructorNo";
	
		
		
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
	
	$edata = array("EditFormat" => "Lookup wizard");
	
			
	
	
// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "instructor";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
		
		
			
	$edata["LinkField"] = "instructorNo";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "instructorNo";
	
		
	$edata["LookupOrderBy"] = "";
	
		
			
		
				
	
	
		
		$edata["SelectSize"] = 1;
		
// End Lookup Settings


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
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
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataselectionChart["instructorNo"] = $fdata;
//	rate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "rate";
	$fdata["GoodName"] = "rate";
	$fdata["ownerTable"] = "selection";
	$fdata["Label"] = GetFieldLabel("selectionChart","rate"); 
	$fdata["FieldType"] = 5;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "rate"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "selection.rate";
	
		
		
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
								
		
	//	End validation
	
		
		
		
	
		
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataselectionChart["rate"] = $fdata;
//	difficulty
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "difficulty";
	$fdata["GoodName"] = "difficulty";
	$fdata["ownerTable"] = "selection";
	$fdata["Label"] = GetFieldLabel("selectionChart","difficulty"); 
	$fdata["FieldType"] = 5;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "difficulty"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "selection.difficulty";
	
		
		
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
								
		
	//	End validation
	
		
		
		
	
		
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataselectionChart["difficulty"] = $fdata;
//	courseNo1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "courseNo1";
	$fdata["GoodName"] = "courseNo1";
	$fdata["ownerTable"] = "course";
	$fdata["Label"] = GetFieldLabel("selectionChart","courseNo1"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
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

	

	
	$tdataselectionChart["courseNo1"] = $fdata;
//	courseName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "courseName";
	$fdata["GoodName"] = "courseName";
	$fdata["ownerTable"] = "course";
	$fdata["Label"] = GetFieldLabel("selectionChart","courseName"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
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

	

	
	$tdataselectionChart["courseName"] = $fdata;
//	level
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "level";
	$fdata["GoodName"] = "level";
	$fdata["ownerTable"] = "course";
	$fdata["Label"] = GetFieldLabel("selectionChart","level"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
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

	

	
	$tdataselectionChart["level"] = $fdata;
//	subject
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "subject";
	$fdata["GoodName"] = "subject";
	$fdata["ownerTable"] = "course";
	$fdata["Label"] = GetFieldLabel("selectionChart","subject"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
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

	

	
	$tdataselectionChart["subject"] = $fdata;
//	type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "type";
	$fdata["GoodName"] = "type";
	$fdata["ownerTable"] = "course";
	$fdata["Label"] = GetFieldLabel("selectionChart","type"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
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

	

	
	$tdataselectionChart["type"] = $fdata;
//	instructorNo1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "instructorNo1";
	$fdata["GoodName"] = "instructorNo1";
	$fdata["ownerTable"] = "course";
	$fdata["Label"] = GetFieldLabel("selectionChart","instructorNo1"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "instructorNo"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "course.instructorNo";
	
		
		
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

	

	
	$tdataselectionChart["instructorNo1"] = $fdata;

	$tdataselectionChart[".chartXml"] = '<chart>
		<attr value="tables">
			<attr value="0">selectionChart</attr>
		</attr>
		<attr value="chart_type">
			<attr value="type">bubble</attr>
		</attr>
		
		<attr value="parameters">';
	$tdataselectionChart[".chartXml"] .= '<attr value="0">
			<attr value="name">difficulty</attr>
			<attr value="currencyFormat">0</attr>
			<attr value="decimalFormat">2</attr>
			<attr value="customFormat">0</attr>
			<attr value="customFormatStr"></attr>';
	$tdataselectionChart[".chartXml"] .= '<attr value="size"></attr>';
	$tdataselectionChart[".chartXml"] .= '</attr>';
	$tdataselectionChart[".chartXml"] .= '<attr value="1">
			<attr value="name">rate</attr>
			<attr value="currencyFormat">0</attr>
			<attr value="decimalFormat">0</attr>
			<attr value="customFormat">0</attr>
			<attr value="customFormatStr"></attr>';
	$tdataselectionChart[".chartXml"] .= '<attr value="size"></attr>';
	$tdataselectionChart[".chartXml"] .= '</attr>';
	$tdataselectionChart[".chartXml"] .= '<attr value="2">
		<attr value="name">rate</attr>
	</attr>';
	$tdataselectionChart[".chartXml"] .= '</attr>
			<attr value="appearance">';
	$tdataselectionChart[".chartXml"] .= '<attr value="scolor11">FF0000</attr>
			<attr value="scolor12">FF0000</attr>';
	$tdataselectionChart[".chartXml"] .= '<attr value="scolor21">0000FF</attr>
			<attr value="scolor22">0000FF</attr>';

	$tdataselectionChart[".chartXml"] .= '<attr value="head">'.xmlencode("selectionChart").'</attr>
<attr value="foot">'.xmlencode("Legend Title").'</attr>
<attr value="y_axis_label">'.xmlencode("selectionid").'</attr>

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

<attr value="slegend">true</attr>
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
<attr value="maxbarscroll">10</attr>';
$tdataselectionChart[".chartXml"] .= '<attr value="bubbletransp">0</attr>';
$tdataselectionChart[".chartXml"] .= '</attr>

<attr value="fields">';
	$tdataselectionChart[".chartXml"] .= '<attr value="0">
		<attr value="name">selectionid</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("selectionChart","selectionid")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataselectionChart[".chartXml"] .= '<attr value="1">
		<attr value="name">studentNo</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("selectionChart","studentNo")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataselectionChart[".chartXml"] .= '<attr value="2">
		<attr value="name">courseNo</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("selectionChart","courseNo")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataselectionChart[".chartXml"] .= '<attr value="3">
		<attr value="name">instructorNo</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("selectionChart","instructorNo")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataselectionChart[".chartXml"] .= '<attr value="4">
		<attr value="name">rate</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("selectionChart","rate")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataselectionChart[".chartXml"] .= '<attr value="5">
		<attr value="name">difficulty</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("selectionChart","difficulty")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataselectionChart[".chartXml"] .= '<attr value="6">
		<attr value="name">courseNo1</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("selectionChart","courseNo1")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataselectionChart[".chartXml"] .= '<attr value="7">
		<attr value="name">courseName</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("selectionChart","courseName")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataselectionChart[".chartXml"] .= '<attr value="8">
		<attr value="name">level</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("selectionChart","level")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataselectionChart[".chartXml"] .= '<attr value="9">
		<attr value="name">subject</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("selectionChart","subject")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataselectionChart[".chartXml"] .= '<attr value="10">
		<attr value="name">type</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("selectionChart","type")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataselectionChart[".chartXml"] .= '<attr value="11">
		<attr value="name">instructorNo1</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("selectionChart","instructorNo1")).'</attr>
		<attr value="search"></attr>
	</attr>';
$tdataselectionChart[".chartXml"] .= '</attr>


<attr value="settings">
<attr value="name">selectionChart</attr>
<attr value="short_table_name">selectionChart</attr>
</attr>

</chart>';
	
$tables_data["selectionChart"]=&$tdataselectionChart;
$field_labels["selectionChart"] = &$fieldLabelsselectionChart;
$fieldToolTips["selectionChart"] = &$fieldToolTipsselectionChart;
$page_titles["selectionChart"] = &$pageTitlesselectionChart;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["selectionChart"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["selectionChart"] = array();


	
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
					$masterTablesData["selectionChart"][0] = $masterParams;	
				$masterTablesData["selectionChart"][0]["masterKeys"] = array();
	$masterTablesData["selectionChart"][0]["masterKeys"][]="instructorNo";
				$masterTablesData["selectionChart"][0]["detailKeys"] = array();
	$masterTablesData["selectionChart"][0]["detailKeys"][]="instructorNo";
		
	
				$strOriginalDetailsTable="course";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="course";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "course";
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
					$masterTablesData["selectionChart"][1] = $masterParams;	
				$masterTablesData["selectionChart"][1]["masterKeys"] = array();
	$masterTablesData["selectionChart"][1]["masterKeys"][]="courseNo";
				$masterTablesData["selectionChart"][1]["detailKeys"] = array();
	$masterTablesData["selectionChart"][1]["detailKeys"][]="courseNo";
		
	
				$strOriginalDetailsTable="student";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="student";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "student";
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
					$masterTablesData["selectionChart"][2] = $masterParams;	
				$masterTablesData["selectionChart"][2]["masterKeys"] = array();
	$masterTablesData["selectionChart"][2]["masterKeys"][]="studentNo";
				$masterTablesData["selectionChart"][2]["detailKeys"] = array();
	$masterTablesData["selectionChart"][2]["detailKeys"][]="studentNo";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_selectionChart()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "selection.selectionid,  selection.studentNo,  selection.courseNo,  selection.instructorNo,  selection.rate,  selection.difficulty,  course.courseNo AS courseNo1,  course.courseName,  course.`level`,  course.subject,  course.`type`,  course.instructorNo AS instructorNo1";
$proto0["m_strFrom"] = "FROM selection  INNER JOIN course ON selection.courseNo = course.courseNo";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
$proto0["m_strTail"] = "";
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
			$obj = new SQLField(array(
	"m_strName" => "selectionid",
	"m_strTable" => "selection",
	"m_srcTableName" => "selectionChart"
));

$proto5["m_sql"] = "selection.selectionid";
$proto5["m_srcTableName"] = "selectionChart";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "studentNo",
	"m_strTable" => "selection",
	"m_srcTableName" => "selectionChart"
));

$proto7["m_sql"] = "selection.studentNo";
$proto7["m_srcTableName"] = "selectionChart";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "courseNo",
	"m_strTable" => "selection",
	"m_srcTableName" => "selectionChart"
));

$proto9["m_sql"] = "selection.courseNo";
$proto9["m_srcTableName"] = "selectionChart";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "instructorNo",
	"m_strTable" => "selection",
	"m_srcTableName" => "selectionChart"
));

$proto11["m_sql"] = "selection.instructorNo";
$proto11["m_srcTableName"] = "selectionChart";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "rate",
	"m_strTable" => "selection",
	"m_srcTableName" => "selectionChart"
));

$proto13["m_sql"] = "selection.rate";
$proto13["m_srcTableName"] = "selectionChart";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "difficulty",
	"m_strTable" => "selection",
	"m_srcTableName" => "selectionChart"
));

$proto15["m_sql"] = "selection.difficulty";
$proto15["m_srcTableName"] = "selectionChart";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "courseNo",
	"m_strTable" => "course",
	"m_srcTableName" => "selectionChart"
));

$proto17["m_sql"] = "course.courseNo";
$proto17["m_srcTableName"] = "selectionChart";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "courseNo1";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "courseName",
	"m_strTable" => "course",
	"m_srcTableName" => "selectionChart"
));

$proto19["m_sql"] = "course.courseName";
$proto19["m_srcTableName"] = "selectionChart";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "level",
	"m_strTable" => "course",
	"m_srcTableName" => "selectionChart"
));

$proto21["m_sql"] = "course.`level`";
$proto21["m_srcTableName"] = "selectionChart";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "subject",
	"m_strTable" => "course",
	"m_srcTableName" => "selectionChart"
));

$proto23["m_sql"] = "course.subject";
$proto23["m_srcTableName"] = "selectionChart";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "type",
	"m_strTable" => "course",
	"m_srcTableName" => "selectionChart"
));

$proto25["m_sql"] = "course.`type`";
$proto25["m_srcTableName"] = "selectionChart";
$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "instructorNo",
	"m_strTable" => "course",
	"m_srcTableName" => "selectionChart"
));

$proto27["m_sql"] = "course.instructorNo";
$proto27["m_srcTableName"] = "selectionChart";
$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "instructorNo1";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto29=array();
$proto29["m_link"] = "SQLL_MAIN";
			$proto30=array();
$proto30["m_strName"] = "selection";
$proto30["m_srcTableName"] = "selectionChart";
$proto30["m_columns"] = array();
$proto30["m_columns"][] = "selectionid";
$proto30["m_columns"][] = "studentNo";
$proto30["m_columns"][] = "courseNo";
$proto30["m_columns"][] = "instructorNo";
$proto30["m_columns"][] = "rate";
$proto30["m_columns"][] = "difficulty";
$obj = new SQLTable($proto30);

$proto29["m_table"] = $obj;
$proto29["m_sql"] = "selection";
$proto29["m_alias"] = "";
$proto29["m_srcTableName"] = "selectionChart";
$proto31=array();
$proto31["m_sql"] = "";
$proto31["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto31["m_column"]=$obj;
$proto31["m_contained"] = array();
$proto31["m_strCase"] = "";
$proto31["m_havingmode"] = false;
$proto31["m_inBrackets"] = false;
$proto31["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto31);

$proto29["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto29);

$proto0["m_fromlist"][]=$obj;
												$proto33=array();
$proto33["m_link"] = "SQLL_INNERJOIN";
			$proto34=array();
$proto34["m_strName"] = "course";
$proto34["m_srcTableName"] = "selectionChart";
$proto34["m_columns"] = array();
$proto34["m_columns"][] = "courseNo";
$proto34["m_columns"][] = "courseName";
$proto34["m_columns"][] = "level";
$proto34["m_columns"][] = "subject";
$proto34["m_columns"][] = "type";
$proto34["m_columns"][] = "instructorNo";
$obj = new SQLTable($proto34);

$proto33["m_table"] = $obj;
$proto33["m_sql"] = "INNER JOIN course ON selection.courseNo = course.courseNo";
$proto33["m_alias"] = "";
$proto33["m_srcTableName"] = "selectionChart";
$proto35=array();
$proto35["m_sql"] = "selection.courseNo = course.courseNo";
$proto35["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "courseNo",
	"m_strTable" => "selection",
	"m_srcTableName" => "selectionChart"
));

$proto35["m_column"]=$obj;
$proto35["m_contained"] = array();
$proto35["m_strCase"] = "= course.courseNo";
$proto35["m_havingmode"] = false;
$proto35["m_inBrackets"] = false;
$proto35["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto35);

$proto33["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto33);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="selectionChart";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_selectionChart = createSqlQuery_selectionChart();


	
												
	
$tdataselectionChart[".sqlquery"] = $queryData_selectionChart;

$tableEvents["selectionChart"] = new eventsBase;
$tdataselectionChart[".hasEvents"] = false;

?>