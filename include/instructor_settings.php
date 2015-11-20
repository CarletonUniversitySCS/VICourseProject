<?php
require_once(getabspath("classes/cipherer.php"));




$tdatainstructor = array();	
	$tdatainstructor[".truncateText"] = true;
	$tdatainstructor[".NumberOfChars"] = 80; 
	$tdatainstructor[".ShortName"] = "instructor";
	$tdatainstructor[".OwnerID"] = "";
	$tdatainstructor[".OriginalTable"] = "instructor";

//	field labels
$fieldLabelsinstructor = array();
$fieldToolTipsinstructor = array();
$pageTitlesinstructor = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsinstructor["English"] = array();
	$fieldToolTipsinstructor["English"] = array();
	$pageTitlesinstructor["English"] = array();
	$fieldLabelsinstructor["English"]["instructorNo"] = "Instructor No";
	$fieldToolTipsinstructor["English"]["instructorNo"] = "";
	$fieldLabelsinstructor["English"]["instructorName"] = "Instructor Name";
	$fieldToolTipsinstructor["English"]["instructorName"] = "";
	if (count($fieldToolTipsinstructor["English"]))
		$tdatainstructor[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsinstructor[""] = array();
	$fieldToolTipsinstructor[""] = array();
	$pageTitlesinstructor[""] = array();
	if (count($fieldToolTipsinstructor[""]))
		$tdatainstructor[".isUseToolTips"] = true;
}
	
	
	$tdatainstructor[".NCSearch"] = true;



$tdatainstructor[".shortTableName"] = "instructor";
$tdatainstructor[".nSecOptions"] = 0;
$tdatainstructor[".recsPerRowList"] = 1;
$tdatainstructor[".mainTableOwnerID"] = "";
$tdatainstructor[".moveNext"] = 1;
$tdatainstructor[".nType"] = 0;

$tdatainstructor[".strOriginalTableName"] = "instructor";




$tdatainstructor[".showAddInPopup"] = false;

$tdatainstructor[".showEditInPopup"] = false;

$tdatainstructor[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatainstructor[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatainstructor[".fieldsForRegister"] = array();

$tdatainstructor[".listAjax"] = false;

	$tdatainstructor[".audit"] = false;

	$tdatainstructor[".locking"] = false;


$tdatainstructor[".list"] = true;






$tdatainstructor[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatainstructor[".searchSaving"] = false;
//

$tdatainstructor[".showSearchPanel"] = true;
		$tdatainstructor[".flexibleSearch"] = true;		

if (isMobile())
	$tdatainstructor[".isUseAjaxSuggest"] = false;
else 
	$tdatainstructor[".isUseAjaxSuggest"] = true;

$tdatainstructor[".rowHighlite"] = true;



$tdatainstructor[".addPageEvents"] = false;

// use timepicker for search panel
$tdatainstructor[".isUseTimeForSearch"] = false;



$tdatainstructor[".useDetailsPreview"] = true;


$tdatainstructor[".allSearchFields"] = array();
$tdatainstructor[".filterFields"] = array();
$tdatainstructor[".requiredSearchFields"] = array();

$tdatainstructor[".allSearchFields"][] = "instructorNo";
	$tdatainstructor[".allSearchFields"][] = "instructorName";
	

$tdatainstructor[".googleLikeFields"] = array();
$tdatainstructor[".googleLikeFields"][] = "instructorNo";
$tdatainstructor[".googleLikeFields"][] = "instructorName";


$tdatainstructor[".advSearchFields"] = array();
$tdatainstructor[".advSearchFields"][] = "instructorNo";
$tdatainstructor[".advSearchFields"][] = "instructorName";

$tdatainstructor[".tableType"] = "list";

$tdatainstructor[".printerPageOrientation"] = 0;
$tdatainstructor[".nPrinterPageScale"] = 100;

$tdatainstructor[".nPrinterSplitRecords"] = 40;

$tdatainstructor[".nPrinterPDFSplitRecords"] = 40;





	





// view page pdf

// print page pdf


$tdatainstructor[".pageSize"] = 20;

$tdatainstructor[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatainstructor[".strOrderBy"] = $tstrOrderBy;

$tdatainstructor[".orderindexes"] = array();

$tdatainstructor[".sqlHead"] = "SELECT instructorNo,  instructorName";
$tdatainstructor[".sqlFrom"] = "FROM instructor";
$tdatainstructor[".sqlWhereExpr"] = "";
$tdatainstructor[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatainstructor[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatainstructor[".arrGroupsPerPage"] = $arrGPP;

$tdatainstructor[".highlightSearchResults"] = true;

$tableKeysinstructor = array();
$tableKeysinstructor[] = "instructorNo";
$tdatainstructor[".Keys"] = $tableKeysinstructor;

$tdatainstructor[".listFields"] = array();
$tdatainstructor[".listFields"][] = "instructorNo";
$tdatainstructor[".listFields"][] = "instructorName";

$tdatainstructor[".hideMobileList"] = array();


$tdatainstructor[".viewFields"] = array();

$tdatainstructor[".addFields"] = array();

$tdatainstructor[".inlineAddFields"] = array();

$tdatainstructor[".editFields"] = array();

$tdatainstructor[".inlineEditFields"] = array();

$tdatainstructor[".exportFields"] = array();

$tdatainstructor[".importFields"] = array();

$tdatainstructor[".printFields"] = array();

//	instructorNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "instructorNo";
	$fdata["GoodName"] = "instructorNo";
	$fdata["ownerTable"] = "instructor";
	$fdata["Label"] = GetFieldLabel("instructor","instructorNo"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "instructorNo"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "instructorNo";
	
		
		
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

	

	
	$tdatainstructor["instructorNo"] = $fdata;
//	instructorName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "instructorName";
	$fdata["GoodName"] = "instructorName";
	$fdata["ownerTable"] = "instructor";
	$fdata["Label"] = GetFieldLabel("instructor","instructorName"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "instructorName"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "instructorName";
	
		
		
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

	

	
	$tdatainstructor["instructorName"] = $fdata;

	
$tables_data["instructor"]=&$tdatainstructor;
$field_labels["instructor"] = &$fieldLabelsinstructor;
$fieldToolTips["instructor"] = &$fieldToolTipsinstructor;
$page_titles["instructor"] = &$pageTitlesinstructor;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["instructor"] = array();
//	course
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="course";
		$detailsParam["dOriginalTable"] = "course";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "course";
	$detailsParam["dCaptionTable"] = GetTableCaption("course");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
	$detailsParam["dispChildCount"] = "1";
		$detailsParam["hideChild"] = false;
	$detailsParam["previewOnList"] = 1;
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["instructor"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["instructor"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["instructor"][$dIndex]["masterKeys"][]="instructorNo";

				$detailsTablesData["instructor"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["instructor"][$dIndex]["detailKeys"][]="instructorNo";
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
			
	$detailsTablesData["instructor"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["instructor"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["instructor"][$dIndex]["masterKeys"][]="instructorNo";

				$detailsTablesData["instructor"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["instructor"][$dIndex]["detailKeys"][]="instructorNo";
//	courseChart
	
	

		$dIndex = 2;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="courseChart";
		$detailsParam["dOriginalTable"] = "course";
			$detailsParam["dType"]=PAGE_CHART;
		$detailsParam["dShortTable"] = "courseChart";
	$detailsParam["dCaptionTable"] = GetTableCaption("courseChart");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
	$detailsParam["dispChildCount"] = "1";
		$detailsParam["hideChild"] = false;
	$detailsParam["previewOnList"] = 1;
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["instructor"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["instructor"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["instructor"][$dIndex]["masterKeys"][]="instructorNo";

				$detailsTablesData["instructor"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["instructor"][$dIndex]["detailKeys"][]="instructorNo";
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
			
	$detailsTablesData["instructor"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["instructor"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["instructor"][$dIndex]["masterKeys"][]="instructorNo";

				$detailsTablesData["instructor"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["instructor"][$dIndex]["detailKeys"][]="instructorNo";
	
// tables which are master tables for current table (detail)
$masterTablesData["instructor"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_instructor()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "instructorNo,  instructorName";
$proto0["m_strFrom"] = "FROM instructor";
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
	"m_strName" => "instructorNo",
	"m_strTable" => "instructor",
	"m_srcTableName" => "instructor"
));

$proto5["m_sql"] = "instructorNo";
$proto5["m_srcTableName"] = "instructor";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "instructorName",
	"m_strTable" => "instructor",
	"m_srcTableName" => "instructor"
));

$proto7["m_sql"] = "instructorName";
$proto7["m_srcTableName"] = "instructor";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto9=array();
$proto9["m_link"] = "SQLL_MAIN";
			$proto10=array();
$proto10["m_strName"] = "instructor";
$proto10["m_srcTableName"] = "instructor";
$proto10["m_columns"] = array();
$proto10["m_columns"][] = "instructorNo";
$proto10["m_columns"][] = "instructorName";
$obj = new SQLTable($proto10);

$proto9["m_table"] = $obj;
$proto9["m_sql"] = "instructor";
$proto9["m_alias"] = "";
$proto9["m_srcTableName"] = "instructor";
$proto11=array();
$proto11["m_sql"] = "";
$proto11["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto11["m_column"]=$obj;
$proto11["m_contained"] = array();
$proto11["m_strCase"] = "";
$proto11["m_havingmode"] = false;
$proto11["m_inBrackets"] = false;
$proto11["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto11);

$proto9["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto9);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="instructor";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_instructor = createSqlQuery_instructor();


	
		
	
$tdatainstructor[".sqlquery"] = $queryData_instructor;

$tableEvents["instructor"] = new eventsBase;
$tdatainstructor[".hasEvents"] = false;

?>