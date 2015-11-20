<?php
require_once(getabspath("classes/cipherer.php"));




$tdatatagChart = array();	
	$tdatatagChart[".ShortName"] = "tagChart";
	$tdatatagChart[".OwnerID"] = "";
	$tdatatagChart[".OriginalTable"] = "tag";

//	field labels
$fieldLabelstagChart = array();
$fieldToolTipstagChart = array();
$pageTitlestagChart = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstagChart["English"] = array();
	$fieldToolTipstagChart["English"] = array();
	$pageTitlestagChart["English"] = array();
	$fieldLabelstagChart["English"]["tagNo"] = "Tag No";
	$fieldToolTipstagChart["English"]["tagNo"] = "";
	$fieldLabelstagChart["English"]["tagName"] = "Tag Name";
	$fieldToolTipstagChart["English"]["tagName"] = "";
	$fieldLabelstagChart["English"]["relevancy"] = "Relevancy";
	$fieldToolTipstagChart["English"]["relevancy"] = "";
	$fieldLabelstagChart["English"]["courseNo"] = "Course No";
	$fieldToolTipstagChart["English"]["courseNo"] = "";
	$fieldLabelstagChart["English"]["courseName"] = "Course Name";
	$fieldToolTipstagChart["English"]["courseName"] = "";
	$fieldLabelstagChart["English"]["level"] = "Level";
	$fieldToolTipstagChart["English"]["level"] = "";
	$fieldLabelstagChart["English"]["subject"] = "Subject";
	$fieldToolTipstagChart["English"]["subject"] = "";
	$fieldLabelstagChart["English"]["type"] = "Type";
	$fieldToolTipstagChart["English"]["type"] = "";
	$fieldLabelstagChart["English"]["instructorNo"] = "Instructor No";
	$fieldToolTipstagChart["English"]["instructorNo"] = "";
	if (count($fieldToolTipstagChart["English"]))
		$tdatatagChart[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelstagChart[""] = array();
	$fieldToolTipstagChart[""] = array();
	$pageTitlestagChart[""] = array();
	$fieldLabelstagChart[""]["tagNo"] = "Tag No";
	$fieldToolTipstagChart[""]["tagNo"] = "";
	$fieldLabelstagChart[""]["courseName"] = "Course Name";
	$fieldToolTipstagChart[""]["courseName"] = "";
	$fieldLabelstagChart[""]["level"] = "Level";
	$fieldToolTipstagChart[""]["level"] = "";
	$fieldLabelstagChart[""]["subject"] = "Subject";
	$fieldToolTipstagChart[""]["subject"] = "";
	$fieldLabelstagChart[""]["type"] = "Type";
	$fieldToolTipstagChart[""]["type"] = "";
	$fieldLabelstagChart[""]["instructorNo"] = "Instructor No";
	$fieldToolTipstagChart[""]["instructorNo"] = "";
	if (count($fieldToolTipstagChart[""]))
		$tdatatagChart[".isUseToolTips"] = true;
}
	
	
	$tdatatagChart[".NCSearch"] = true;

	$tdatatagChart[".ChartRefreshTime"] = 0;


$tdatatagChart[".shortTableName"] = "tagChart";
$tdatatagChart[".nSecOptions"] = 0;
$tdatatagChart[".recsPerRowList"] = 1;
$tdatatagChart[".mainTableOwnerID"] = "";
$tdatatagChart[".moveNext"] = 1;
$tdatatagChart[".nType"] = 3;

$tdatatagChart[".strOriginalTableName"] = "tag";




$tdatatagChart[".showAddInPopup"] = false;

$tdatatagChart[".showEditInPopup"] = false;

$tdatatagChart[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatatagChart[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatatagChart[".fieldsForRegister"] = array();

$tdatatagChart[".listAjax"] = false;

	$tdatatagChart[".audit"] = false;

	$tdatatagChart[".locking"] = false;

$tdatatagChart[".edit"] = true;

$tdatatagChart[".list"] = true;

$tdatatagChart[".inlineEdit"] = true;
$tdatatagChart[".inlineAdd"] = true;
$tdatatagChart[".view"] = true;




$tdatatagChart[".delete"] = true;

$tdatatagChart[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatatagChart[".searchSaving"] = false;
//

$tdatatagChart[".showSearchPanel"] = true;
		$tdatatagChart[".flexibleSearch"] = true;		

if (isMobile())
	$tdatatagChart[".isUseAjaxSuggest"] = false;
else 
	$tdatatagChart[".isUseAjaxSuggest"] = true;




$tdatatagChart[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatagChart[".isUseTimeForSearch"] = false;





$tdatatagChart[".allSearchFields"] = array();
$tdatatagChart[".filterFields"] = array();
$tdatatagChart[".requiredSearchFields"] = array();

$tdatatagChart[".allSearchFields"][] = "tagNo";
	$tdatatagChart[".allSearchFields"][] = "tagName";
	$tdatatagChart[".allSearchFields"][] = "relevancy";
	$tdatatagChart[".allSearchFields"][] = "courseNo";
	$tdatatagChart[".allSearchFields"][] = "courseName";
	$tdatatagChart[".allSearchFields"][] = "level";
	$tdatatagChart[".allSearchFields"][] = "subject";
	$tdatatagChart[".allSearchFields"][] = "type";
	$tdatatagChart[".allSearchFields"][] = "instructorNo";
	

$tdatatagChart[".googleLikeFields"] = array();
$tdatatagChart[".googleLikeFields"][] = "tagNo";
$tdatatagChart[".googleLikeFields"][] = "tagName";
$tdatatagChart[".googleLikeFields"][] = "relevancy";
$tdatatagChart[".googleLikeFields"][] = "courseNo";
$tdatatagChart[".googleLikeFields"][] = "courseName";
$tdatatagChart[".googleLikeFields"][] = "level";
$tdatatagChart[".googleLikeFields"][] = "subject";
$tdatatagChart[".googleLikeFields"][] = "type";
$tdatatagChart[".googleLikeFields"][] = "instructorNo";


$tdatatagChart[".advSearchFields"] = array();
$tdatatagChart[".advSearchFields"][] = "tagNo";
$tdatatagChart[".advSearchFields"][] = "tagName";
$tdatatagChart[".advSearchFields"][] = "relevancy";
$tdatatagChart[".advSearchFields"][] = "courseNo";
$tdatatagChart[".advSearchFields"][] = "courseName";
$tdatatagChart[".advSearchFields"][] = "level";
$tdatatagChart[".advSearchFields"][] = "subject";
$tdatatagChart[".advSearchFields"][] = "type";
$tdatatagChart[".advSearchFields"][] = "instructorNo";

$tdatatagChart[".tableType"] = "chart";

$tdatatagChart[".printerPageOrientation"] = 0;
$tdatatagChart[".nPrinterPageScale"] = 100;

$tdatatagChart[".nPrinterSplitRecords"] = 40;

$tdatatagChart[".nPrinterPDFSplitRecords"] = 40;




// chart settings
$tdatatagChart[".chartType"] = "2DPie";
// end of chart settings

	





// view page pdf

// print page pdf



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatatagChart[".strOrderBy"] = $tstrOrderBy;

$tdatatagChart[".orderindexes"] = array();

$tdatatagChart[".sqlHead"] = "SELECT tag.tagNo,  tag.tagName,  tag.relevancy,  tag.courseNo,  course.courseName,  course.`level`,  course.subject,  course.`type`,  course.instructorNo";
$tdatatagChart[".sqlFrom"] = "FROM tag  INNER JOIN course ON tag.courseNo = course.courseNo";
$tdatatagChart[".sqlWhereExpr"] = "";
$tdatatagChart[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatagChart[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatagChart[".arrGroupsPerPage"] = $arrGPP;

$tdatatagChart[".highlightSearchResults"] = true;

$tableKeystagChart = array();
$tableKeystagChart[] = "tagNo";
$tdatatagChart[".Keys"] = $tableKeystagChart;

$tdatatagChart[".listFields"] = array();
$tdatatagChart[".listFields"][] = "tagNo";
$tdatatagChart[".listFields"][] = "tagName";
$tdatatagChart[".listFields"][] = "relevancy";
$tdatatagChart[".listFields"][] = "courseNo";
$tdatatagChart[".listFields"][] = "courseName";
$tdatatagChart[".listFields"][] = "level";
$tdatatagChart[".listFields"][] = "subject";
$tdatatagChart[".listFields"][] = "type";
$tdatatagChart[".listFields"][] = "instructorNo";

$tdatatagChart[".hideMobileList"] = array();


$tdatatagChart[".viewFields"] = array();
$tdatatagChart[".viewFields"][] = "tagNo";
$tdatatagChart[".viewFields"][] = "tagName";
$tdatatagChart[".viewFields"][] = "relevancy";
$tdatatagChart[".viewFields"][] = "courseNo";
$tdatatagChart[".viewFields"][] = "courseName";
$tdatatagChart[".viewFields"][] = "level";
$tdatatagChart[".viewFields"][] = "subject";
$tdatatagChart[".viewFields"][] = "type";
$tdatatagChart[".viewFields"][] = "instructorNo";

$tdatatagChart[".addFields"] = array();
$tdatatagChart[".addFields"][] = "tagNo";
$tdatatagChart[".addFields"][] = "tagName";
$tdatatagChart[".addFields"][] = "relevancy";
$tdatatagChart[".addFields"][] = "courseNo";

$tdatatagChart[".inlineAddFields"] = array();
$tdatatagChart[".inlineAddFields"][] = "tagNo";
$tdatatagChart[".inlineAddFields"][] = "tagName";
$tdatatagChart[".inlineAddFields"][] = "relevancy";
$tdatatagChart[".inlineAddFields"][] = "courseNo";

$tdatatagChart[".editFields"] = array();
$tdatatagChart[".editFields"][] = "tagNo";
$tdatatagChart[".editFields"][] = "tagName";
$tdatatagChart[".editFields"][] = "relevancy";
$tdatatagChart[".editFields"][] = "courseNo";

$tdatatagChart[".inlineEditFields"] = array();
$tdatatagChart[".inlineEditFields"][] = "tagNo";
$tdatatagChart[".inlineEditFields"][] = "tagName";
$tdatatagChart[".inlineEditFields"][] = "relevancy";
$tdatatagChart[".inlineEditFields"][] = "courseNo";

$tdatatagChart[".exportFields"] = array();
$tdatatagChart[".exportFields"][] = "tagNo";
$tdatatagChart[".exportFields"][] = "tagName";
$tdatatagChart[".exportFields"][] = "relevancy";
$tdatatagChart[".exportFields"][] = "courseNo";
$tdatatagChart[".exportFields"][] = "courseName";
$tdatatagChart[".exportFields"][] = "level";
$tdatatagChart[".exportFields"][] = "subject";
$tdatatagChart[".exportFields"][] = "type";
$tdatatagChart[".exportFields"][] = "instructorNo";

$tdatatagChart[".importFields"] = array();
$tdatatagChart[".importFields"][] = "tagNo";
$tdatatagChart[".importFields"][] = "tagName";
$tdatatagChart[".importFields"][] = "relevancy";
$tdatatagChart[".importFields"][] = "courseNo";
$tdatatagChart[".importFields"][] = "courseName";
$tdatatagChart[".importFields"][] = "level";
$tdatatagChart[".importFields"][] = "subject";
$tdatatagChart[".importFields"][] = "type";
$tdatatagChart[".importFields"][] = "instructorNo";

$tdatatagChart[".printFields"] = array();
$tdatatagChart[".printFields"][] = "tagNo";
$tdatatagChart[".printFields"][] = "tagName";
$tdatatagChart[".printFields"][] = "relevancy";
$tdatatagChart[".printFields"][] = "courseNo";
$tdatatagChart[".printFields"][] = "courseName";
$tdatatagChart[".printFields"][] = "level";
$tdatatagChart[".printFields"][] = "subject";
$tdatatagChart[".printFields"][] = "type";
$tdatatagChart[".printFields"][] = "instructorNo";

//	tagNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "tagNo";
	$fdata["GoodName"] = "tagNo";
	$fdata["ownerTable"] = "tag";
	$fdata["Label"] = GetFieldLabel("tagChart","tagNo"); 
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
	
		$fdata["strField"] = "tagNo"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tag.tagNo";
	
		
		
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

	

	
	$tdatatagChart["tagNo"] = $fdata;
//	tagName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "tagName";
	$fdata["GoodName"] = "tagName";
	$fdata["ownerTable"] = "tag";
	$fdata["Label"] = GetFieldLabel("tagChart","tagName"); 
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
	
		$fdata["strField"] = "tagName"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tag.tagName";
	
		
		
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

	

	
	$tdatatagChart["tagName"] = $fdata;
//	relevancy
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "relevancy";
	$fdata["GoodName"] = "relevancy";
	$fdata["ownerTable"] = "tag";
	$fdata["Label"] = GetFieldLabel("tagChart","relevancy"); 
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
	
		$fdata["strField"] = "relevancy"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tag.relevancy";
	
		
		
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

	

	
	$tdatatagChart["relevancy"] = $fdata;
//	courseNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "courseNo";
	$fdata["GoodName"] = "courseNo";
	$fdata["ownerTable"] = "tag";
	$fdata["Label"] = GetFieldLabel("tagChart","courseNo"); 
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
	$fdata["FullName"] = "tag.courseNo";
	
		
		
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

	

	
	$tdatatagChart["courseNo"] = $fdata;
//	courseName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "courseName";
	$fdata["GoodName"] = "courseName";
	$fdata["ownerTable"] = "course";
	$fdata["Label"] = GetFieldLabel("tagChart","courseName"); 
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

	

	
	$tdatatagChart["courseName"] = $fdata;
//	level
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "level";
	$fdata["GoodName"] = "level";
	$fdata["ownerTable"] = "course";
	$fdata["Label"] = GetFieldLabel("tagChart","level"); 
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

	

	
	$tdatatagChart["level"] = $fdata;
//	subject
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "subject";
	$fdata["GoodName"] = "subject";
	$fdata["ownerTable"] = "course";
	$fdata["Label"] = GetFieldLabel("tagChart","subject"); 
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

	

	
	$tdatatagChart["subject"] = $fdata;
//	type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "type";
	$fdata["GoodName"] = "type";
	$fdata["ownerTable"] = "course";
	$fdata["Label"] = GetFieldLabel("tagChart","type"); 
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

	

	
	$tdatatagChart["type"] = $fdata;
//	instructorNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "instructorNo";
	$fdata["GoodName"] = "instructorNo";
	$fdata["ownerTable"] = "course";
	$fdata["Label"] = GetFieldLabel("tagChart","instructorNo"); 
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

	

	
	$tdatatagChart["instructorNo"] = $fdata;

	$tdatatagChart[".chartXml"] = '<chart>
		<attr value="tables">
			<attr value="0">tagChart</attr>
		</attr>
		<attr value="chart_type">
			<attr value="type">2d_pie</attr>
		</attr>
		
		<attr value="parameters">';
	$tdatatagChart[".chartXml"] .= '<attr value="0">
			<attr value="name">relevancy</attr>
			<attr value="currencyFormat">0</attr>
			<attr value="decimalFormat">2</attr>
			<attr value="customFormat">0</attr>
			<attr value="customFormatStr"></attr>';
	$tdatatagChart[".chartXml"] .= '</attr>';
	$tdatatagChart[".chartXml"] .= '<attr value="1">
		<attr value="name">tagName</attr>
	</attr>';
	$tdatatagChart[".chartXml"] .= '</attr>
			<attr value="appearance">';
	$tdatatagChart[".chartXml"] .= '<attr value="scolor11">FF0000</attr>
			<attr value="scolor12">FF0000</attr>';

	$tdatatagChart[".chartXml"] .= '<attr value="head">'.xmlencode("Course Content").'</attr>
<attr value="foot">'.xmlencode("Tag").'</attr>
<attr value="y_axis_label">'.xmlencode("tagNo").'</attr>

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
$tdatatagChart[".chartXml"] .= '</attr>

<attr value="fields">';
	$tdatatagChart[".chartXml"] .= '<attr value="0">
		<attr value="name">tagNo</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("tagChart","tagNo")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatatagChart[".chartXml"] .= '<attr value="1">
		<attr value="name">tagName</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("tagChart","tagName")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatatagChart[".chartXml"] .= '<attr value="2">
		<attr value="name">relevancy</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("tagChart","relevancy")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatatagChart[".chartXml"] .= '<attr value="3">
		<attr value="name">courseNo</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("tagChart","courseNo")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatatagChart[".chartXml"] .= '<attr value="4">
		<attr value="name">courseName</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("tagChart","courseName")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatatagChart[".chartXml"] .= '<attr value="5">
		<attr value="name">level</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("tagChart","level")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatatagChart[".chartXml"] .= '<attr value="6">
		<attr value="name">subject</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("tagChart","subject")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatatagChart[".chartXml"] .= '<attr value="7">
		<attr value="name">type</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("tagChart","type")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatatagChart[".chartXml"] .= '<attr value="8">
		<attr value="name">instructorNo</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("tagChart","instructorNo")).'</attr>
		<attr value="search"></attr>
	</attr>';
$tdatatagChart[".chartXml"] .= '</attr>


<attr value="settings">
<attr value="name">tagChart</attr>
<attr value="short_table_name">tagChart</attr>
</attr>

</chart>';
	
$tables_data["tagChart"]=&$tdatatagChart;
$field_labels["tagChart"] = &$fieldLabelstagChart;
$fieldToolTips["tagChart"] = &$fieldToolTipstagChart;
$page_titles["tagChart"] = &$pageTitlestagChart;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["tagChart"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["tagChart"] = array();


	
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
					$masterTablesData["tagChart"][0] = $masterParams;	
				$masterTablesData["tagChart"][0]["masterKeys"] = array();
	$masterTablesData["tagChart"][0]["masterKeys"][]="courseNo";
				$masterTablesData["tagChart"][0]["detailKeys"] = array();
	$masterTablesData["tagChart"][0]["detailKeys"][]="courseNo";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_tagChart()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "tag.tagNo,  tag.tagName,  tag.relevancy,  tag.courseNo,  course.courseName,  course.`level`,  course.subject,  course.`type`,  course.instructorNo";
$proto0["m_strFrom"] = "FROM tag  INNER JOIN course ON tag.courseNo = course.courseNo";
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
	"m_strName" => "tagNo",
	"m_strTable" => "tag",
	"m_srcTableName" => "tagChart"
));

$proto5["m_sql"] = "tag.tagNo";
$proto5["m_srcTableName"] = "tagChart";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "tagName",
	"m_strTable" => "tag",
	"m_srcTableName" => "tagChart"
));

$proto7["m_sql"] = "tag.tagName";
$proto7["m_srcTableName"] = "tagChart";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "relevancy",
	"m_strTable" => "tag",
	"m_srcTableName" => "tagChart"
));

$proto9["m_sql"] = "tag.relevancy";
$proto9["m_srcTableName"] = "tagChart";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "courseNo",
	"m_strTable" => "tag",
	"m_srcTableName" => "tagChart"
));

$proto11["m_sql"] = "tag.courseNo";
$proto11["m_srcTableName"] = "tagChart";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "courseName",
	"m_strTable" => "course",
	"m_srcTableName" => "tagChart"
));

$proto13["m_sql"] = "course.courseName";
$proto13["m_srcTableName"] = "tagChart";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "level",
	"m_strTable" => "course",
	"m_srcTableName" => "tagChart"
));

$proto15["m_sql"] = "course.`level`";
$proto15["m_srcTableName"] = "tagChart";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "subject",
	"m_strTable" => "course",
	"m_srcTableName" => "tagChart"
));

$proto17["m_sql"] = "course.subject";
$proto17["m_srcTableName"] = "tagChart";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "type",
	"m_strTable" => "course",
	"m_srcTableName" => "tagChart"
));

$proto19["m_sql"] = "course.`type`";
$proto19["m_srcTableName"] = "tagChart";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "instructorNo",
	"m_strTable" => "course",
	"m_srcTableName" => "tagChart"
));

$proto21["m_sql"] = "course.instructorNo";
$proto21["m_srcTableName"] = "tagChart";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto23=array();
$proto23["m_link"] = "SQLL_MAIN";
			$proto24=array();
$proto24["m_strName"] = "tag";
$proto24["m_srcTableName"] = "tagChart";
$proto24["m_columns"] = array();
$proto24["m_columns"][] = "tagNo";
$proto24["m_columns"][] = "tagName";
$proto24["m_columns"][] = "relevancy";
$proto24["m_columns"][] = "courseNo";
$obj = new SQLTable($proto24);

$proto23["m_table"] = $obj;
$proto23["m_sql"] = "tag";
$proto23["m_alias"] = "";
$proto23["m_srcTableName"] = "tagChart";
$proto25=array();
$proto25["m_sql"] = "";
$proto25["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto25["m_column"]=$obj;
$proto25["m_contained"] = array();
$proto25["m_strCase"] = "";
$proto25["m_havingmode"] = false;
$proto25["m_inBrackets"] = false;
$proto25["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto25);

$proto23["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto23);

$proto0["m_fromlist"][]=$obj;
												$proto27=array();
$proto27["m_link"] = "SQLL_INNERJOIN";
			$proto28=array();
$proto28["m_strName"] = "course";
$proto28["m_srcTableName"] = "tagChart";
$proto28["m_columns"] = array();
$proto28["m_columns"][] = "courseNo";
$proto28["m_columns"][] = "courseName";
$proto28["m_columns"][] = "level";
$proto28["m_columns"][] = "subject";
$proto28["m_columns"][] = "type";
$proto28["m_columns"][] = "instructorNo";
$obj = new SQLTable($proto28);

$proto27["m_table"] = $obj;
$proto27["m_sql"] = "INNER JOIN course ON tag.courseNo = course.courseNo";
$proto27["m_alias"] = "";
$proto27["m_srcTableName"] = "tagChart";
$proto29=array();
$proto29["m_sql"] = "tag.courseNo = course.courseNo";
$proto29["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "courseNo",
	"m_strTable" => "tag",
	"m_srcTableName" => "tagChart"
));

$proto29["m_column"]=$obj;
$proto29["m_contained"] = array();
$proto29["m_strCase"] = "= course.courseNo";
$proto29["m_havingmode"] = false;
$proto29["m_inBrackets"] = false;
$proto29["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto29);

$proto27["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto27);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="tagChart";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tagChart = createSqlQuery_tagChart();


	
									
	
$tdatatagChart[".sqlquery"] = $queryData_tagChart;

$tableEvents["tagChart"] = new eventsBase;
$tdatatagChart[".hasEvents"] = false;

?>