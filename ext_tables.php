<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

/*******************************************************************************
 * register handler for Ext.Direct
 */
    if (TYPO3_MODE == 'BE') {
		t3lib_extMgm::registerExtDirectComponent(
			'TYPO3.Coreupdate',
			'EXT:coreupdate/Classes/Controller/ExtDirectController.php:tx_Coreupdate_Controller_ExtDirectController'
		);
    }

/**
 * Toolbar item
 */ 
	if (TYPO3_MODE == 'BE') {
		$GLOBALS['TYPO3_CONF_VARS']['typo3/backend.php']['additionalBackendItems'][]
			= t3lib_extMgm::extPath($_EXTKEY).'Classes/ToolbarItems/Updater/Hook.php';
	}


$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['reports']['tx_reports']['status']['providers']['typo3'][] = 'tx_coreupdate_Hook_Reports_VersionStatusProvider';
?>
