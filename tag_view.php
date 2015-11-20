<?php 
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

require_once("include/dbcommon.php");
require_once("include/tag_variables.php");
require_once('include/xtempl.php');
require_once('classes/viewpage.php');
require_once("classes/searchclause.php");

add_nocache_headers();

$pageMode = ViewPage::readViewModeFromRequest();





$layout = new TLayout("view_basic_left", "BreezeBlue_white", "MobileBlue_white");
$layout->version = 2;
$layout->blocks["top"] = array();
$layout->skins["pdf"] = "empty";

$layout->blocks["top"][] = "pdf";
$layout->containers["fields"] = array();
$layout->container_properties["fields"] = array(  );
$layout->containers["fields"][] = array("name"=>"viewheader", 
	"block"=>"viewheader", "substyle"=>2  );

$layout->containers["fields"][] = array("name"=>"viewfields_simple", 
	"block"=>"", "substyle"=>1  );

$layout->containers["fields"][] = array("name"=>"viewbuttons", 
	"block"=>"viewbuttons", "substyle"=>2  );

$layout->skins["fields"] = "fields";

$layout->blocks["top"][] = "fields";
$layout->skins["details"] = "empty";

$layout->blocks["top"][] = "details";
$page_layouts["tag_view"] = $layout;

$layout->skinsparams = array();
$layout->skinsparams["empty"] = array("button"=>"button2");
$layout->skinsparams["menu"] = array("button"=>"button1");
$layout->skinsparams["hmenu"] = array("button"=>"button1");
$layout->skinsparams["undermenu"] = array("button"=>"button1");
$layout->skinsparams["fields"] = array("button"=>"button1");
$layout->skinsparams["form"] = array("button"=>"button1");
$layout->skinsparams["1"] = array("button"=>"button1");
$layout->skinsparams["2"] = array("button"=>"button2");
$layout->skinsparams["3"] = array("button"=>"button1");







$xt = new Xtempl();

//Set page id
$id = postvalue("id");
$id = intval($id) == 0 ? 1 : $id;

// $keys could not be set properly if editid params were no passed
$keys = array();
$keys["tagNo"] = postvalue("editid1");

//array of params for classes
$params = array();
$params["id"] = $id;
$params["xt"] = &$xt;
$params["keys"] = $keys;
$params["mode"] = $pageMode;
$params["pageType"] = PAGE_VIEW;
$params["tName"] = $strTableName;
$params["pdfMode"] = postvalue("pdf") !== "";

if( $pageMode == VIEW_DASHBOARD ) 
{
	$params["dashElementName"] = postvalue("dashelement");
	$params["dashTName"] = postvalue("table");
} 
if( $pageMode == VIEW_POPUP )
{
	$params["dashTName"] = postvalue("dashTName");
}

$pageObject = new ViewPage($params);
$pageObject->init();

$pageObject->process();

?>