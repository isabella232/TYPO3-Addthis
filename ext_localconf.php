<?php
if (!defined ('TYPO3_MODE')) {
    die ('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'addthis',
	'Pi1',
	array(
		'Buttons' => 'index'
	)
);
