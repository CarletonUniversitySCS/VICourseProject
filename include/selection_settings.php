<?php
require_once(getabspath("classes/cipherer.php"));




$tdataselection = array();	
	$tdataselection[".truncateText"] = true;
	$tdataselection[".NumberOfChars"] = 80; 
	$tdataselection[".ShortName"] = "selection";
	$tdataselection[".OwnerID"] = "";
	$tdataselection[".OriginalTable"] = "selection";

//	field labels
$fieldLabelsselection = array();
$fieldToolTipsselection = array();
$pageTitlesselection = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsselection["English"] = array();
	$fieldToolTipsselection["English"] = array();
	$pageTitlesselection["English"] = array();
	$fieldLabelsselection["English"]["studentNo"] = "Student No";
	$fieldToolTipsselection["English"]["studentNo"] = "";
	$fieldLabelsselection["English"]["courseNo"] = "Course No";
	$fieldToolTipsselection["English"]["courseNo"] = "";
	$fieldLabelsselection["English"]["rate"] = "Rate";
	$fieldToolTipsselection["English"]["rate"] = "";
	$fieldLabelsselection["English"]["difficulty"] = "Difficulty";
	$fieldToolTipsselection["English"]["difficulty"] = "";
	if (count($fieldToolTipsselection["English"]))
		$tdataselection[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsselection[""] = array();
	$fieldToolTipsselection[""] = array();
	$pageTitlesselection[""] = array();
	if (count($fieldToolTipsselection[""]))
		$tdataselection[".isUseToolTips"] = true;
}
	
	
	$tdataselection[".NCSearch"] = true;



$tdataselection[".shortTableName"] = "selection";
$tdataselection[".nSecOptions"] = 0;
$tdataselection[".recsPerRowList"] = 1;
$tdataselection[".mainTableOwnerID"] = "";
$tdataselection[".moveNext"] = 1;
$tdataselection[".nType"] = 0;

$tdataselection[".strOriginalTableName"] = "selection";




$tdataselection[".showAddInPopup"] = false;

$tdataselection[".showEditInPopup"] = false;

$tdataselection[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataselection[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataselection[".fieldsForRegister"] = array();

$tdataselection[".listAjax"] = false;

	$tdataselection[".audit"] = false;

	$tdataselection[".locking"] = false;


$tdataselection[".list"] = true;






$tdataselection[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataselection[".searchSaving"] = false;
//

$tdataselection[".showSearchPanel"] = true;
		$tdataselection[".flexibleSearch"] = true;		

if (isMobile())
	$tdataselection[".isUseAjaxSuggest"] = false;
else 
	$tdataselection[".isUseAjaxSuggest"] = true;

$tdataselection[".rowHighlite"] = true;



$tdataselection[".addPageEvents"] = false;

// use timepicker for search panel
$tdataselection[".isUseTimeForSearch"] = false;





$tdataselection[".allSearchFields"] = array();
$tdataselection[".filterFields"] = array();
$tdataselection[".requiredSearchFields"] = array();

$tdataselection[".allSearchFields"][] = "studentNo";
	$tdataselection[".allSearchFields"][] = "courseNo";
	$tdataselection[".allSearchFields"][] = "rate";
	$tdataselection[".allSearchFields"][] = "difficulty";
	

$tdataselection[".googleLikeFields"] = array();
$tdataselection[".googleLikeFields"][] = "studentNo";
$tdataselection[".googleLikeFields"][] = "courseNo";
$tdataselection[".googleLikeFields"][] = "rate";
$tdataselection[".googleLikeFields"][] = "difficulty";


$tdataselection[".advSearchFields"] = array();
$tdataselection[".advSearchFields"][] = "studentNo";
$tdataselection[".advSearchFields"][] = "courseNo";
$tdataselection[".advSearchFields"][] = "rate";
$tdataselection[".advSearchFields"][] = "difficulty";

$tdataselection[".tableType"] = "list";

$tdataselection[".printerPageOrientation"] = 0;
$tdataselection[".nPrinterPageScale"] = 100;

$tdataselection[".nPrinterSplitRecords"] = 40;

$tdataselection[".nPrinterPDFSplitRecords"] = 40;





	





// view page pdf

// print page pdf


$tdataselection[".pageSize"] = 20;

$tdataselection[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataselection[".strOrderBy"] = $tstrOrderBy;

$tdataselection[".orderindexes"] = array();

$tdataselection[".sqlHead"] = "SELECT studentNo,  courseNo,  rate,  difficulty";
$tdataselection[".sqlFrom"] = "FROM selection";
$tdataselection[".sqlWhereExpr"] = "";
$tdataselection[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataselection[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataselection[".arrGroupsPerPage"] = $arrGPP;

$tdataselection[".highlightSearchResults"] = true;

$tableKeysselection = array();
$tdataselection[".Keys"] = $tableKeysselection;

$tdataselection[".listFields"] = array();
$tdataselection[".listFields"][] = "studentNo";
$tdataselection[".listFields"][] = "courseNo";
$tdataselection[".listFields"][] = "rate";
$tdataselection[".listFields"][] = "difficulty";

$tdataselection[".hideMobileList"] = array();


$tdataselection[".viewFields"] = array();

$tdataselection[".addFields"] = array();
$tdataselection[".addFields"][] = "studentNo";
$tdataselection[".addFields"][] = "courseNo";
$tdataselection[".addFields"][] = "rate";
$tdataselection[".addFields"][] = "difficulty";

$tdataselection[".inlineAddFields"] = array();

$tdataselection[".editFields"] = array();

$tdataselection[".inlineEditFields"] = array();

$tdataselection[".exportFields"] = array();

$tdataselection[".importFields"] = array();

$tdataselection[".printFields"] = array();

//	studentNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "studentNo";
	$fdata["GoodName"] = "studentNo";
	$fdata["ownerTable"] = "selection";
	$fdata["Label"] = GetFieldLabel("selection","studentNo"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
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
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataselection["studentNo"] = $fdata;
//	courseNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "courseNo";
	$fdata["GoodName"] = "courseNo";
	$fdata["ownerTable"] = "selection";
	$fdata["Label"] = GetFieldLabel("selection","courseNo"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "courseNo"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "courseNo";
	
		
		
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
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataselection["courseNo"] = $fdata;
//	rate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "rate";
	$fdata["GoodName"] = "rate";
	$fdata["ownerTable"] = "selection";
	$fdata["Label"] = GetFieldLabel("selection","rate"); 
	$fdata["FieldType"] = 5;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "rate"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "rate";
	
		
		
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
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataselection["rate"] = $fdata;
//	difficulty
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "difficulty";
	$fdata["GoodName"] = "difficulty";
	$fdata["ownerTable"] = "selection";
	$fdata["Label"] = GetFieldLabel("selection","difficulty"); 
	$fdata["FieldType"] = 5;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "difficulty"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "difficulty";
	
		
		
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
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataselection["difficulty"] = $fdata;

	
$tables_data["selection"]=&$tdataselection;
$field_labels["selection"] = &$fieldLabelsselection;
$fieldToolTips["selection"] = &$fieldToolTipsselection;
$page_titles["selection"] = &$pageTitlesselection;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["selection"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["selection"] = array();


	
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
					$masterTablesData["selection"][0] = $masterParams;	
				$masterTablesData["selection"][0]["masterKeys"] = array();
	$masterTablesData["selection"][0]["masterKeys"][]="courseNo";
				$masterTablesData["selection"][0]["detailKeys"] = array();
	$masterTablesData["selection"][0]["detailKeys"][]="courseNo";
		
	
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
					$masterTablesData["selection"][1] = $masterParams;	
				$masterTablesData["selection"][1]["masterKeys"] = array();
	$masterTablesData["selection"][1]["masterKeys"][]="instructorNo";
				$masterTablesData["selection"][1]["detailKeys"] = array();
	$masterTablesData["selection"][1]["detailKeys"][]="instructorNo";
		
	
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
					$masterTablesData["selection"][2] = $masterParams;	
				$masterTablesData["selection"][2]["masterKeys"] = array();
	$masterTablesData["selection"][2]["masterKeys"][]="studentNo";
				$masterTablesData["selection"][2]["detailKeys"] = array();
	$masterTablesData["selection"][2]["detailKeys"][]="studentNo";
		
	
				$strOriginalDetailsTable="course";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="courseChart";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "courseChart";
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
			$masterParams["type"] = PAGE_CHART;
			$masterTablesData["selection"][3] = $masterParams;	
				$masterTablesData["selection"][3]["masterKeys"] = array();
	$masterTablesData["selection"][3]["masterKeys"][]="courseNo";
				$masterTablesData["selection"][3]["detailKeys"] = array();
	$masterTablesData["selection"][3]["detailKeys"][]="courseNo";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_selection()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "studentNo,  courseNo,  rate,  difficulty";
$proto0["m_strFrom"] = "FROM selection";
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
	"m_strTable" => "selection",
	"m_srcTableName" => "selection"
));

$proto5["m_sql"] = "studentNo";
$proto5["m_srcTableName"] = "selection";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "courseNo",
	"m_strTable" => "selection",
	"m_srcTableName" => "selection"
));

$proto7["m_sql"] = "courseNo";
$proto7["m_srcTableName"] = "selection";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "rate",
	"m_strTable" => "selection",
	"m_srcTableName" => "selection"
));

$proto9["m_sql"] = "rate";
$proto9["m_srcTableName"] = "selection";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "difficulty",
	"m_strTable" => "selection",
	"m_srcTableName" => "selection"
));

$proto11["m_sql"] = "difficulty";
$proto11["m_srcTableName"] = "selection";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto13=array();
$proto13["m_link"] = "SQLL_MAIN";
			$proto14=array();
$proto14["m_strName"] = "selection";
$proto14["m_srcTableName"] = "selection";
$proto14["m_columns"] = array();
$proto14["m_columns"][] = "selectionid";
$proto14["m_columns"][] = "studentNo";
$proto14["m_columns"][] = "courseNo";
$proto14["m_columns"][] = "instructorNo";
$proto14["m_columns"][] = "rate";
$proto14["m_columns"][] = "difficulty";
$obj = new SQLTable($proto14);

$proto13["m_table"] = $obj;
$proto13["m_sql"] = "selection";
$proto13["m_alias"] = "";
$proto13["m_srcTableName"] = "selection";
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
$proto0["m_srcTableName"]="selection";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_selection = createSqlQuery_selection();


	
				
	
$tdataselection[".sqlquery"] = $queryData_selection;

$tableEvents["selection"] = new eventsBase;
$tdataselection[".hasEvents"] = false;

?>