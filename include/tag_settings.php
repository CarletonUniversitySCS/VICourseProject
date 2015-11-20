<?php
require_once(getabspath("classes/cipherer.php"));




$tdatatag = array();	
	$tdatatag[".truncateText"] = true;
	$tdatatag[".NumberOfChars"] = 80; 
	$tdatatag[".ShortName"] = "tag";
	$tdatatag[".OwnerID"] = "";
	$tdatatag[".OriginalTable"] = "tag";

//	field labels
$fieldLabelstag = array();
$fieldToolTipstag = array();
$pageTitlestag = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstag["English"] = array();
	$fieldToolTipstag["English"] = array();
	$pageTitlestag["English"] = array();
	$fieldLabelstag["English"]["tagNo"] = "Tag No";
	$fieldToolTipstag["English"]["tagNo"] = "";
	$fieldLabelstag["English"]["tagName"] = "Tag Name";
	$fieldToolTipstag["English"]["tagName"] = "";
	$fieldLabelstag["English"]["relevancy"] = "Relevancy";
	$fieldToolTipstag["English"]["relevancy"] = "";
	$fieldLabelstag["English"]["courseNo"] = "Course No";
	$fieldToolTipstag["English"]["courseNo"] = "";
	if (count($fieldToolTipstag["English"]))
		$tdatatag[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelstag[""] = array();
	$fieldToolTipstag[""] = array();
	$pageTitlestag[""] = array();
	$fieldLabelstag[""]["tagNo"] = "Tag No";
	$fieldToolTipstag[""]["tagNo"] = "";
	if (count($fieldToolTipstag[""]))
		$tdatatag[".isUseToolTips"] = true;
}
	
	
	$tdatatag[".NCSearch"] = true;



$tdatatag[".shortTableName"] = "tag";
$tdatatag[".nSecOptions"] = 0;
$tdatatag[".recsPerRowList"] = 1;
$tdatatag[".mainTableOwnerID"] = "";
$tdatatag[".moveNext"] = 1;
$tdatatag[".nType"] = 0;

$tdatatag[".strOriginalTableName"] = "tag";




$tdatatag[".showAddInPopup"] = false;

$tdatatag[".showEditInPopup"] = false;

$tdatatag[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatatag[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatatag[".fieldsForRegister"] = array();

$tdatatag[".listAjax"] = false;

	$tdatatag[".audit"] = false;

	$tdatatag[".locking"] = false;


$tdatatag[".list"] = true;

$tdatatag[".view"] = true;





$tdatatag[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatatag[".searchSaving"] = false;
//

$tdatatag[".showSearchPanel"] = true;
		$tdatatag[".flexibleSearch"] = true;		

if (isMobile())
	$tdatatag[".isUseAjaxSuggest"] = false;
else 
	$tdatatag[".isUseAjaxSuggest"] = true;

$tdatatag[".rowHighlite"] = true;



$tdatatag[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatag[".isUseTimeForSearch"] = false;





$tdatatag[".allSearchFields"] = array();
$tdatatag[".filterFields"] = array();
$tdatatag[".requiredSearchFields"] = array();

$tdatatag[".allSearchFields"][] = "tagName";
	$tdatatag[".allSearchFields"][] = "relevancy";
	$tdatatag[".allSearchFields"][] = "courseNo";
	

$tdatatag[".googleLikeFields"] = array();
$tdatatag[".googleLikeFields"][] = "tagNo";
$tdatatag[".googleLikeFields"][] = "tagName";
$tdatatag[".googleLikeFields"][] = "relevancy";
$tdatatag[".googleLikeFields"][] = "courseNo";


$tdatatag[".advSearchFields"] = array();
$tdatatag[".advSearchFields"][] = "tagName";
$tdatatag[".advSearchFields"][] = "relevancy";
$tdatatag[".advSearchFields"][] = "courseNo";

$tdatatag[".tableType"] = "list";

$tdatatag[".printerPageOrientation"] = 0;
$tdatatag[".nPrinterPageScale"] = 100;

$tdatatag[".nPrinterSplitRecords"] = 40;

$tdatatag[".nPrinterPDFSplitRecords"] = 40;





	





// view page pdf

// print page pdf


$tdatatag[".pageSize"] = 20;

$tdatatag[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatatag[".strOrderBy"] = $tstrOrderBy;

$tdatatag[".orderindexes"] = array();

$tdatatag[".sqlHead"] = "SELECT tagNo,  tagName,  relevancy,  courseNo";
$tdatatag[".sqlFrom"] = "FROM tag";
$tdatatag[".sqlWhereExpr"] = "";
$tdatatag[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatag[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatag[".arrGroupsPerPage"] = $arrGPP;

$tdatatag[".highlightSearchResults"] = true;

$tableKeystag = array();
$tableKeystag[] = "tagNo";
$tdatatag[".Keys"] = $tableKeystag;

$tdatatag[".listFields"] = array();
$tdatatag[".listFields"][] = "tagName";
$tdatatag[".listFields"][] = "relevancy";
$tdatatag[".listFields"][] = "courseNo";

$tdatatag[".hideMobileList"] = array();


$tdatatag[".viewFields"] = array();
$tdatatag[".viewFields"][] = "tagName";
$tdatatag[".viewFields"][] = "relevancy";
$tdatatag[".viewFields"][] = "courseNo";

$tdatatag[".addFields"] = array();

$tdatatag[".inlineAddFields"] = array();

$tdatatag[".editFields"] = array();

$tdatatag[".inlineEditFields"] = array();

$tdatatag[".exportFields"] = array();

$tdatatag[".importFields"] = array();

$tdatatag[".printFields"] = array();

//	tagNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "tagNo";
	$fdata["GoodName"] = "tagNo";
	$fdata["ownerTable"] = "tag";
	$fdata["Label"] = GetFieldLabel("tag","tagNo"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "tagNo"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tagNo";
	
		
		
				
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
	
	
	
	

	

	
	$tdatatag["tagNo"] = $fdata;
//	tagName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "tagName";
	$fdata["GoodName"] = "tagName";
	$fdata["ownerTable"] = "tag";
	$fdata["Label"] = GetFieldLabel("tag","tagName"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "tagName"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tagName";
	
		
		
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

	

	
	$tdatatag["tagName"] = $fdata;
//	relevancy
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "relevancy";
	$fdata["GoodName"] = "relevancy";
	$fdata["ownerTable"] = "tag";
	$fdata["Label"] = GetFieldLabel("tag","relevancy"); 
	$fdata["FieldType"] = 5;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "relevancy"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "relevancy";
	
		
		
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

	

	
	$tdatatag["relevancy"] = $fdata;
//	courseNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "courseNo";
	$fdata["GoodName"] = "courseNo";
	$fdata["ownerTable"] = "tag";
	$fdata["Label"] = GetFieldLabel("tag","courseNo"); 
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

	

	
	$tdatatag["courseNo"] = $fdata;

	
$tables_data["tag"]=&$tdatatag;
$field_labels["tag"] = &$fieldLabelstag;
$fieldToolTips["tag"] = &$fieldToolTipstag;
$page_titles["tag"] = &$pageTitlestag;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["tag"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["tag"] = array();


	
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
					$masterTablesData["tag"][0] = $masterParams;	
				$masterTablesData["tag"][0]["masterKeys"] = array();
	$masterTablesData["tag"][0]["masterKeys"][]="courseNo";
				$masterTablesData["tag"][0]["detailKeys"] = array();
	$masterTablesData["tag"][0]["detailKeys"][]="courseNo";
		
	
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
			$masterTablesData["tag"][1] = $masterParams;	
				$masterTablesData["tag"][1]["masterKeys"] = array();
	$masterTablesData["tag"][1]["masterKeys"][]="courseNo";
				$masterTablesData["tag"][1]["detailKeys"] = array();
	$masterTablesData["tag"][1]["detailKeys"][]="courseNo";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_tag()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "tagNo,  tagName,  relevancy,  courseNo";
$proto0["m_strFrom"] = "FROM tag";
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
	"m_srcTableName" => "tag"
));

$proto5["m_sql"] = "tagNo";
$proto5["m_srcTableName"] = "tag";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "tagName",
	"m_strTable" => "tag",
	"m_srcTableName" => "tag"
));

$proto7["m_sql"] = "tagName";
$proto7["m_srcTableName"] = "tag";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "relevancy",
	"m_strTable" => "tag",
	"m_srcTableName" => "tag"
));

$proto9["m_sql"] = "relevancy";
$proto9["m_srcTableName"] = "tag";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "courseNo",
	"m_strTable" => "tag",
	"m_srcTableName" => "tag"
));

$proto11["m_sql"] = "courseNo";
$proto11["m_srcTableName"] = "tag";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto13=array();
$proto13["m_link"] = "SQLL_MAIN";
			$proto14=array();
$proto14["m_strName"] = "tag";
$proto14["m_srcTableName"] = "tag";
$proto14["m_columns"] = array();
$proto14["m_columns"][] = "tagNo";
$proto14["m_columns"][] = "tagName";
$proto14["m_columns"][] = "relevancy";
$proto14["m_columns"][] = "courseNo";
$obj = new SQLTable($proto14);

$proto13["m_table"] = $obj;
$proto13["m_sql"] = "tag";
$proto13["m_alias"] = "";
$proto13["m_srcTableName"] = "tag";
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
$proto0["m_srcTableName"]="tag";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tag = createSqlQuery_tag();


	
				
	
$tdatatag[".sqlquery"] = $queryData_tag;

$tableEvents["tag"] = new eventsBase;
$tdatatag[".hasEvents"] = false;

?>