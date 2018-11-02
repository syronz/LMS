<?php
require_once '../class/exam.class.php';
if(!isset($_SESSION['user']))
		die();
	//file_put_contents('a.txt', print_r($_GET, true));
switch ($_GET['action']) {

	case 'list':
		echo exam::lists($_GET["jtSorting"],$_GET["jtStartIndex"],$_GET["jtPageSize"]);
		break;
	case 'create':
		// dsh($_GET);
		echo exam::create($_GET['data']);
		break;
	case 'update':
		echo exam::update($_POST);
		break;
	case 'delete':
		echo exam::delete($_POST['id']);
		break;

	case 'search_list':
		echo exam::search_list($_GET["jtSorting"],$_GET["jtStartIndex"],$_GET["jtPageSize"],$_GET['search_str']);
		break;

	case 'json_list':
		echo exam::json_list($_GET['part'],@$_GET['for_all']);
		break;

	 
	default:
		
		break;
}




?>