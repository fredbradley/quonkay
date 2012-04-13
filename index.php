<?php
/***************************************
** (c) Fred Bradley                   **
** http://www.fredbradley.me          **
****************************************
** Site using Smarty                  **
** Fred Bradley +44 (0) 7867 953 849  **
** fred@fredbradley.co.uk             **
***************************************/

	/* Page Setup */
		session_start();

	/* LOAD CONFIG (each file) */
		require_once 'inc/config/siteconfigs.php';

	/* LOAD VARIABLES */
		$site = $db->getSiteConfig($_SERVER['SERVER_NAME']);		

		$debugformat = array('nositefound' => "Sorry, theres not site configured for your URL");
		$debug = $db->error($debugformat['nositefound']);


	/* LOAD FUNCTIONS */
		require_once($SITE_PATH."inc/functions/common.php");

	/* SMARTY ASSIGNS */
		$smarty->assign('SITE', $site);
		$smarty->assign('TITLE', $site['title']);
		$smarty->assign('error', $debug);
		$smarty->assign('FACEPAGE', $fanpage);

	/* DISPLAY PAGE */
		$smarty->display('site_index.tpl');
?>
