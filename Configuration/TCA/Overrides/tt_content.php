<?php
if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

call_user_func(function () {
    /**
     * Register plugin
     */
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
        'addthis',
        'Pi1',
        'AddThis'
    );

    /**
     * Register Flexforms-configuration for plugin
     */
    $pluginSignature = 'addthis_pi1';
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue(
        $pluginSignature,
        'FILE:EXT:addthis/Configuration/FlexForms/Buttons.xml'
    );
    $GLOBALS['TCA']['tt_content']['types']['list']['subtypes_excludelist'][$pluginSignature] = 'layout,recursive,select_key,pages';
    $GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$pluginSignature] = 'pi_flexform';
});
