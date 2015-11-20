<?php
require_once(getabspath("classes/cipherer.php"));




$tdatastudent = array();	
	$tdatastudent[".truncateText"] = true;
	$tdatastudent[".NumberOfChars"] = 80; 
	$tdatastudent[".ShortName"] = "student";
	$tdatastudent[".OwnerID"] = "";
	$tdatastudent[".OriginalTable"] = "student";

//	field labels
$fieldLabelsstudent = array();
$fieldToolTipsstudent = array();
$pageTitlesstudent = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsstudent["English"] = array();
	$fieldToolTipsstudent["English"] = array();
	$pageTitlesstudent["English"] = array();
	$fieldLabelsstudent["English"]["studentNo"] = "Student No";
	$fieldToolTipsstudent["English"]["studentNo"] = "";
	$fieldLabelsstudent["English"]["studentName"] = "Student Name";
	$fieldToolTipsstudent["English"]["studentName"] = "";
	$fieldLabelsstudent["English"]["subject"] = "Subject";
	$fieldToolTipsstudent["English"]["subject"] = "";
	$fieldLabelsstudent["English"]["level"] = "Level";
	$fieldToolTipsstudent["English"]["level"] = "";
	if (count($fieldToolTipsstudent["English"]))
		$tdatastudent[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsstudent[""] = array();
	$fieldToolTipsstudent[""] = array();
	$pageTitlesstudent[""] = array();
	if (count($fieldToolTipsstudent[""]))
		$tdatastudent[".isUseToolTips"] = true;
}
	
	
	$tdatastudent[".NCSearch"] = true;



$tdatastudent[".shortTableName"] = "student";
$tdatastudent[".nSecOptions"] = 0;
$tdatastudent[".recsPerRowList"] = 1;
$tdatastudent[".mainTableOwnerID"] = "";
$tdatastudent[".moveNext"] = 1;
$tdatastudent[".nType"] = 0;

$tdatastudent[".strOriginalTableName"] = "student";




$tdatastudent[".showAddInPopup"] = false;

$tdatastudent[".showEditInPopup"] = false;

$tdatastudent[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatastudent[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatastudent[".fieldsForRegister"] = array();

$tdatastudent[".listAjax"] = false;

	$tdatastudent[".audit"] = false;

	$tdatastudent[".locking"] = false;


$tdatastudent[".list"] = true;

$tdatastudent[".view"] = true;





$tdatastudent[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatastudent[".searchSaving"] = false;
//

$tdatastudent[".showSearchPanel"] = true;
		$tdatastudent[".flexibleSearch"] = true;		

if (isMobile())
	$tdatastudent[".isUseAjaxSuggest"] = false;
else 
	$tdatastudent[".isUseAjaxSuggest"] = true;

$tdatastudent[".rowHighlite"] = true;



$tdatastudent[".addPageEvents"] = false;

// use timepicker for search panel
$tdatastudent[".isUseTimeForSearch"] = false;



$tdatastudent[".useDetailsPreview"] = true;


$tdatastudent[".allSearchFields"] = array();
$tdatastudent[".filterFields"] = array();
$tdatastudent[".requiredSearchFields"] = array();

$tdatastudent[".allSearchFields"][] = "studentNo";
	$tdatastudent[".allSearchFields"][] = "studentName";
	$tdatastudent[".allSearchFields"][] = "subject";
	$tdatastudent[".allSearchFields"][] = "level";
	

$tdatastudent[".googleLikeFields"] = array();
$tdatastudent[".googleLikeFields"][] = "studentNo";
$tdatastudent[".googleLikeFields"][] = "studentName";
$tdatastudent[".googleLikeFields"][] = "subject";
$tdatastudent[".googleLikeFields"][] = "level";


$tdatastudent[".advSearchFields"] = array();
$tdatastudent[".advSearchFields"][] = "studentNo";
$tdatastudent[".advSearchFields"][] = "studentName";
$tdatastudent[".advSearchFields"][] = "subject";
$tdatastudent[".advSearchFields"][] = "level";

$tdatastudent[".tableType"] = "list";

$tdatastudent[".printerPageOrientation"] = 0;
$tdatastudent[".nPrinterPageScale"] = 100;

$tdatastudent[".nPrinterSplitRecords"] = 40;

$tdatastudent[".nPrinterPDFSplitRecords"] = 40;





	





// view page pdf

// print page pdf


$tdatastudent[".pageSize"] = 20;

$tdatastudent[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatastudent[".strOrderBy"] = $tstrOrderBy;

$tdatastudent[".orderindexes"] = array();

$tdatastudent[".sqlHead"] = "SELECT studentNo,  studentName,  subject,  `level`";
$tdatastudent[".sqlFrom"] = "FROM student";
$tdatastudent[".sqlWhereExpr"] = "";
$tdatastudent[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatastudent[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatastudent[".arrGroupsPerPage"] = $arrGPP;

$tdatastudent[".highlightSearchResults"] = true;

$tableKeysstudent = array();
$tableKeysstudent[] = "studentNo";
$tdatastudent[".Keys"] = $tableKeysstudent;

$tdatastudent[".listFields"] = array();
$tdatastudent[".listFields"][] = "studentNo";
$tdatastudent[".listFields"][] = "studentName";
$tdatastudent[".listFields"][] = "subject";
$tdatastudent[".listFields"][] = "level";

$tdatastudent[".hideMobileList"] = array();


$tdatastudent[".viewFields"] = array();
$tdatastudent[".viewFields"][] = "studentNo";
$tdatastudent[".viewFields"][] = "studentName";
$tdatastudent[".viewFields"][] = "subject";
$tdatastudent[".viewFields"][] = "level";

$tdatastudent[".addFields"] = array();
$tdatastudent[".addFields"][] = "studentNo";
$tdatastudent[".addFields"][] = "studentName";
$tdatastudent[".addFields"][] = "subject";
$tdatastudent[".addFields"][] = "level";

$tdatastudent[".inlineAddFields"] = array();
$tdatastudent[".inlineAddFields"][] = "studentNo";
$tdatastudent[".inlineAddFields"][] = "studentName";
$tdatastudent[".inlineAddFields"][] = "subject";
$tdatastudent[".inlineAddFields"][] = "level";

$tdatastudent[".editFields"] = array();
$tdatastudent[".editFields"][] = "studentNo";
$tdatastudent[".editFields"][] = "studentName";
$tdatastudent[".editFields"][] = "subject";
$tdatastudent[".editFields"][] = "level";

$tdatastudent[".inlineEditFields"] = array();
$tdatastudent[".inlineEditFields"][] = "studentNo";
$tdatastudent[".inlineEditFields"][] = "studentName";
$tdatastudent[".inlineEditFields"][] = "subject";
$tdatastudent[".inlineEditFields"][] = "level";

$tdatastudent[".exportFields"] = array();
$tdatastudent[".exportFields"][] = "studentNo";
$tdatastudent[".exportFields"][] = "studentName";
$tdatastudent[".exportFields"][] = "subject";
$tdatastudent[".exportFields"][] = "level";

$tdatastudent[".importFields"] = array();
$tdatastudent[".importFields"][] = "studentNo";
$tdatastudent[".importFields"][] = "studentName";
$tdatastudent[".importFields"][] = "subject";
$tdatastudent[".importFields"][] = "level";

$tdatastudent[".printFields"] = array();
$tdatastudent[".printFields"][] = "studentNo";
$tdatastudent[".printFields"][] = "studentName";
$tdatastudent[".printFields"][] = "subject";
$tdatastudent[".printFields"][] = "level";

//	studentNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "studentNo";
	$fdata["GoodName"] = "studentNo";
	$fdata["ownerTable"] = "student";
	$fdata["Label"] = GetFieldLabel("student","studentNo"); 
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
	$fdata["FullName"] = "studentNo";
	
		
		
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

	

	
	$tdatastudent["studentNo"] = $fdata;
//	studentName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "studentName";
	$fdata["GoodName"] = "studentName";
	$fdata["ownerTable"] = "student";
	$fdata["Label"] = GetFieldLabel("student","studentName"); 
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
	
		$fdata["strField"] = "studentName"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "studentName";
	
		
		
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

	

	
	$tdatastudent["studentName"] = $fdata;
//	subject
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "subject";
	$fdata["GoodName"] = "subject";
	$fdata["ownerTable"] = "student";
	$fdata["Label"] = GetFieldLabel("student","subject"); 
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
	$fdata["FullName"] = "subject";
	
		
		
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

	

	
	$tdatastudent["subject"] = $fdata;
//	level
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "level";
	$fdata["GoodName"] = "level";
	$fdata["ownerTable"] = "student";
	$fdata["Label"] = GetFieldLabel("student","level"); 
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
	$fdata["FullName"] = "`level`";
	
		
		
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

	

	
	$tdatastudent["level"] = $fdata;

	
$tables_data["student"]=&$tdatastudent;
$field_labels["student"] = &$fieldLabelsstudent;
$fieldToolTips["student"] = &$fieldToolTipsstudent;
$page_titles["student"] = &$pageTitlesstudent;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["student"] = array();
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
			
	$detailsTablesData["student"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["student"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["student"][$dIndex]["masterKeys"][]="studentNo";

				$detailsTablesData["student"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["student"][$dIndex]["detailKeys"][]="studentNo";
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
			
	$detailsTablesData["student"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["student"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["student"][$dIndex]["masterKeys"][]="studentNo";

				$detailsTablesData["student"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["student"][$dIndex]["detailKeys"][]="studentNo";
//	selectionChart
	
	

		$dIndex = 2;
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
			
	$detailsTablesData["student"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["student"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["student"][$dIndex]["masterKeys"][]="studentNo";

				$detailsTablesData["student"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["student"][$dIndex]["detailKeys"][]="studentNo";
	
// tables which are master tables for current table (detail)
$masterTablesData["student"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_student()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "studentNo,  studentName,  subject,  `level`";
$proto0["m_strFrom"] = "FROM student";
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
	"m_strName" => "studentNo",
	"m_strTable" => "student",
	"m_srcTableName" => "student"
));

$proto5["m_sql"] = "studentNo";
$proto5["m_srcTableName"] = "student";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "studentName",
	"m_strTable" => "student",
	"m_srcTableName" => "student"
));

$proto7["m_sql"] = "studentName";
$proto7["m_srcTableName"] = "student";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "subject",
	"m_strTable" => "student",
	"m_srcTableName" => "student"
));

$proto9["m_sql"] = "subject";
$proto9["m_srcTableName"] = "student";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "level",
	"m_strTable" => "student",
	"m_srcTableName" => "student"
));

$proto11["m_sql"] = "`level`";
$proto11["m_srcTableName"] = "student";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto13=array();
$proto13["m_link"] = "SQLL_MAIN";
			$proto14=array();
$proto14["m_strName"] = "student";
$proto14["m_srcTableName"] = "student";
$proto14["m_columns"] = array();
$proto14["m_columns"][] = "studentNo";
$proto14["m_columns"][] = "studentName";
$proto14["m_columns"][] = "subject";
$proto14["m_columns"][] = "level";
$obj = new SQLTable($proto14);

$proto13["m_table"] = $obj;
$proto13["m_sql"] = "student";
$proto13["m_alias"] = "";
$proto13["m_srcTableName"] = "student";
$proto15=array();
$proto15["m_sql"] = "";
$proto15["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto15["m_column"]=$obj;
$proto15["m_contained"] = array();
$proto15["m_strCase"] = "";
$proto15["m_havingmode"] = false;
$proto15["m_inBrackets"] = false;
$proto15["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto15);

$proto13["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto13);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="student";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_student = createSqlQuery_student();


	
				
	
$tdatastudent[".sqlquery"] = $queryData_student;

$tableEvents["student"] = new eventsBase;
$tdatastudent[".hasEvents"] = false;

?>