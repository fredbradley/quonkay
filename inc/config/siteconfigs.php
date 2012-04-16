<?php
/***************************************
** (c) Fred Bradley                   **
** http://www.fredbradley.me          **
****************************************
** Site using Smarty                  **
** Fred Bradley +44 (0) 7867 953 849  **
** fred@fredbradley.co.uk             **
***************************************/

	/* DEFINES PATHS */
		$ROOT_PATH = "/Users/fredbradley/Sites/smarty_site/";
		$SITE_PATH = $ROOT_PATH."simplysofas/";
		

	/* INCLUDE SMARTY THINGS */
		require_once($ROOT_PATH.'libs/Smarty.class.php'); // THE SCRIPT THAT RUNS SMARTY
		//ANY OTHER SMARTY PLUGINS THAT NEED INCLUDED SHOULD BE ADDED HERE
		$smarty = new Smarty;
define('TWO_SITES_SAME_NAME', 'Two of ya sites have the same host');
	/* INCLUDE DATABASE THINGS */
		require_once($ROOT_PATH.'db.quonkay.php'); 		// Include DB SETTINGS
		define('DB_PREFIX', 'ss_');				// PREFIX (IF USED) FOR THE DATABASE
		define('USERS_TABLE', DB_PREFIX.'users'); 		// (NAME OF USERS TABLE)
		define('CONFIG_TABLE', DB_PREFIX.'config'); 		// (NAME OF CONFIG TABLE)
		require_once($SITE_PATH.'inc/config/db.class.php');	// Include Database Class
		$db = new Database;
		$db->connect(DB_USER, DB_PASSWORD, DB_HOST, DB_DATABASE);

	/* LOAD FUNCTIONS */
		require_once($SITE_PATH.'inc/functions/common.php');

	/* LOG OUT */
		if (isset($_GET['logout'])) {
			if ($_SESSION['user']['acl']==0) {
				session_destroy();
				header("Location: index.php?message=loggedout&locked&user=".$_SESSION['user']['first_name']);
			} else {
				session_destroy();
				header('location: index.php?message=loggedout');
			}
		}
	/* EASY VARIABLES */
		$user = $_SESSION['user'];
		$fanpage = "heartlondon";

	/* SMARTY ASSIGNS */
		$smarty->assign('username', $user['username']);

	/* SMARTY CONFIG */
		$smarty->setTemplateDir($SITE_PATH.'templates');
		$smarty->setCompileDir($SITE_PATH.'templates_c');
		$smarty->setCacheDir($SITE_PATH.'cache');
		$smarty->setConfigDir($SITE_PATH.'configs');
	
	/* FACEBOOK FAN PAGE */
	//	$json_string = 'https://graph.facebook.com/'.$fanpage;
	//	$jsondata = file_get_contents($json_string);
	//	$fanpage = json_decode($jsondata, true);

?>
