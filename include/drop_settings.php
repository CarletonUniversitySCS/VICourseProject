<?php
require_once(getabspath("classes/cipherer.php"));




$tdatadrop = array();	
	$tdatadrop[".truncateText"] = true;
	$tdatadrop[".NumberOfChars"] = 80; 
	$tdatadrop[".ShortName"] = "drop";
	$tdatadrop[".OwnerID"] = "";
	$tdatadrop[".OriginalTable"] = "drop";

//	field labels
$fieldLabelsdrop = array();
$fieldToolTipsdrop = array();
$pageTitlesdrop = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsdrop["English"] = array();
	$fieldToolTipsdrop["English"] = array();
	$pageTitlesdrop["English"] = array();
	$fieldLabelsdrop["English"]["dropid"] = "Dropid";
	$fieldToolTipsdrop["English"]["dropid"] = "";
	$fieldLabelsdrop["English"]["courseNo"] = "Course No";
	$fieldToolTipsdrop["English"]["courseNo"] = "";
	$fieldLabelsdrop["English"]["studentNo"] = "Student No";
	$fieldToolTipsdrop["English"]["studentNo"] = "";
	if (count($fieldToolTipsdrop["English"]))
		$tdatadrop[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsdrop[""] = array();
	$fieldToolTipsdrop[""] = array();
	$pageTitlesdrop[""] = array();
	if (count($fieldToolTipsdrop[""]))
		$tdatadrop[".isUseToolTips"] = true;
}
	
	
	$tdatadrop[".NCSearch"] = true;



$tdatadrop[".shortTableName"] = "drop";
$tdatadrop[".nSecOptions"] = 0;
$tdatadrop[".recsPerRowList"] = 1;
$tdatadrop[".mainTableOwnerID"] = "";
$tdatadrop[".moveNext"] = 1;
$tdatadrop[".nType"] = 0;

$tdatadrop[".strOriginalTableName"] = "drop";




$tdatadrop[".showAddInPopup"] = false;

$tdatadrop[".showEditInPopup"] = false;

$tdatadrop[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatadrop[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatadrop[".fieldsForRegister"] = array();

$tdatadrop[".listAjax"] = false;

	$tdatadrop[".audit"] = false;

	$tdatadrop[".locking"] = false;


$tdatadrop[".list"] = true;

$tdatadrop[".view"] = true;





$tdatadrop[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatadrop[".searchSaving"] = false;
//

$tdatadrop[".showSearchPanel"] = true;
		$tdatadrop[".flexibleSearch"] = true;		

if (isMobile())
	$tdatadrop[".isUseAjaxSuggest"] = false;
else 
	$tdatadrop[".isUseAjaxSuggest"] = true;

$tdatadrop[".rowHighlite"] = true;



$tdatadrop[".addPageEvents"] = false;

// use timepicker for search panel
$tdatadrop[".isUseTimeForSearch"] = false;





$tdatadrop[".allSearchFields"] = array();
$tdatadrop[".filterFields"] = array();
$tdatadrop[".requiredSearchFields"] = array();

$tdatadrop[".allSearchFields"][] = "courseNo";
	$tdatadrop[".allSearchFields"][] = "studentNo";
	

$tdatadrop[".googleLikeFields"] = array();
$tdatadrop[".googleLikeFields"][] = "dropid";
$tdatadrop[".googleLikeFields"][] = "courseNo";
$tdatadrop[".googleLikeFields"][] = "studentNo";


$tdatadrop[".advSearchFields"] = array();
$tdatadrop[".advSearchFields"][] = "courseNo";
$tdatadrop[".advSearchFields"][] = "studentNo";

$tdatadrop[".tableType"] = "list";

$tdatadrop[".printerPageOrientation"] = 0;
$tdatadrop[".nPrinterPageScale"] = 100;

$tdatadrop[".nPrinterSplitRecords"] = 40;

$tdatadrop[".nPrinterPDFSplitRecords"] = 40;





	





// view page pdf

// print page pdf


$tdatadrop[".pageSize"] = 20;

$tdatadrop[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatadrop[".strOrderBy"] = $tstrOrderBy;

$tdatadrop[".orderindexes"] = array();

$tdatadrop[".sqlHead"] = "SELECT dropid,  courseNo,  studentNo";
$tdatadrop[".sqlFrom"] = "FROM `drop`";
$tdatadrop[".sqlWhereExpr"] = "";
$tdatadrop[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatadrop[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatadrop[".arrGroupsPerPage"] = $arrGPP;

$tdatadrop[".highlightSearchResults"] = true;

$tableKeysdrop = array();
$tableKeysdrop[] = "dropid";
$tdatadrop[".Keys"] = $tableKeysdrop;

$tdatadrop[".listFields"] = array();
$tdatadrop[".listFields"][] = "courseNo";
$tdatadrop[".listFields"][] = "studentNo";

$tdatadrop[".hideMobileList"] = array();


$tdatadrop[".viewFields"] = array();
$tdatadrop[".viewFields"][] = "courseNo";
$tdatadrop[".viewFields"][] = "studentNo";

$tdatadrop[".addFields"] = array();

$tdatadrop[".inlineAddFields"] = array();

$tdatadrop[".editFields"] = array();

$tdatadrop[".inlineEditFields"] = array();

$tdatadrop[".exportFields"] = array();

$tdatadrop[".importFields"] = array();

$tdatadrop[".printFields"] = array();

//	dropid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "dropid";
	$fdata["GoodName"] = "dropid";
	$fdata["ownerTable"] = "drop";
	$fdata["Label"] = GetFieldLabel("drop","dropid"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "dropid"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dropid";
	
		
		
				
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
	
	
	
	

	

	
	$tdatadrop["dropid"] = $fdata;
//	courseNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "courseNo";
	$fdata["GoodName"] = "courseNo";
	$fdata["ownerTable"] = "drop";
	$fdata["Label"] = GetFieldLabel("drop","courseNo"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
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

	

	
	$tdatadrop["courseNo"] = $fdata;
//	studentNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "studentNo";
	$fdata["GoodName"] = "studentNo";
	$fdata["ownerTable"] = "drop";
	$fdata["Label"] = GetFieldLabel("drop","studentNo"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
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

	

	
	$tdatadrop["studentNo"] = $fdata;

	
$tables_data["drop"]=&$tdatadrop;
$field_labels["drop"] = &$fieldLabelsdrop;
$fieldToolTips["drop"] = &$fieldToolTipsdrop;
$page_titles["drop"] = &$pageTitlesdrop;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["drop"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["drop"] = array();


	
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
					$masterTablesData["drop"][0] = $masterParams;	
				$masterTablesData["drop"][0]["masterKeys"] = array();
	$masterTablesData["drop"][0]["masterKeys"][]="courseNo";
				$masterTablesData["drop"][0]["detailKeys"] = array();
	$masterTablesData["drop"][0]["detailKeys"][]="courseNo";
		
	
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
					$masterTablesData["drop"][1] = $masterParams;	
				$masterTablesData["drop"][1]["masterKeys"] = array();
	$masterTablesData["drop"][1]["masterKeys"][]="studentNo";
				$masterTablesData["drop"][1]["detailKeys"] = array();
	$masterTablesData["drop"][1]["detailKeys"][]="studentNo";
		
	
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
			$masterTablesData["drop"][2] = $masterParams;	
				$masterTablesData["drop"][2]["masterKeys"] = array();
	$masterTablesData["drop"][2]["masterKeys"][]="courseNo";
				$masterTablesData["drop"][2]["detailKeys"] = array();
	$masterTablesData["drop"][2]["detailKeys"][]="courseNo";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_drop()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "dropid,  courseNo,  studentNo";
$proto0["m_strFrom"] = "FROM `drop`";
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
	"m_strName" => "dropid",
	"m_strTable" => "drop",
	"m_srcTableName" => "drop"
));

$proto5["m_sql"] = "dropid";
$proto5["m_srcTableName"] = "drop";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "courseNo",
	"m_strTable" => "drop",
	"m_srcTableName" => "drop"
));

$proto7["m_sql"] = "courseNo";
$proto7["m_srcTableName"] = "drop";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "studentNo",
	"m_strTable" => "drop",
	"m_srcTableName" => "drop"
));

$proto9["m_sql"] = "studentNo";
$proto9["m_srcTableName"] = "drop";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto11=array();
$proto11["m_link"] = "SQLL_MAIN";
			$proto12=array();
$proto12["m_strName"] = "drop";
$proto12["m_srcTableName"] = "drop";
$proto12["m_columns"] = array();
$proto12["m_columns"][] = "dropid";
$proto12["m_columns"][] = "courseNo";
$proto12["m_columns"][] = "studentNo";
$obj = new SQLTable($proto12);

$proto11["m_table"] = $obj;
$proto11["m_sql"] = "`drop`";
$proto11["m_alias"] = "";
$proto11["m_srcTableName"] = "drop";
$proto13=array();
$proto13["m_sql"] = "";
$proto13["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto13["m_column"]=$obj;
$proto13["m_contained"] = array();
$proto13["m_strCase"] = "";
$proto13["m_havingmode"] = false;
$proto13["m_inBrackets"] = false;
$proto13["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto13);

$proto11["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto11);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="drop";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_drop = createSqlQuery_drop();


	
			
	
$tdatadrop[".sqlquery"] = $queryData_drop;

$tableEvents["drop"] = new eventsBase;
$tdatadrop[".hasEvents"] = false;

?>