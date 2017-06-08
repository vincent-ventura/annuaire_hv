<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'HV.' . $_EXTKEY,
	'Pi1',
	array(
		'Contact' => 'list, show',
		
	),
	// non-cacheable actions
	array(
		'Contact' => 'list',
		
	)
);

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'HV.' . $_EXTKEY,
	'Pi2',
	array(
		'Contact' => 'search',
		
	),
	// non-cacheable actions
	array(
		'Contact' => 'search',
		
	)
);

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'HV.' . $_EXTKEY,
	'Pi3',
	array(
		'Organisme' => 'list, show, contactList, serviceList, serviceShow',
		
	),
	// non-cacheable actions
	array(
		'Organisme' => 'show, serviceShow',
		
	)
);
