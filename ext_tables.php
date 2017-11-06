<?php
if (!defined ('TYPO3_MODE')) {
    die ('Access denied.');
}

if (TYPO3_MODE=="BE"){
    $GLOBALS['TBE_MODULES_EXT']['xMOD_db_new_content_el']['addElClasses']['tx_Addthis_Wizard'] = \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath('addthis').'Classes/Wizard.php';
}
