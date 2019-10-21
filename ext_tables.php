<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'MJPR.Cookiebot',
            'Cookiebot',
            'Cookiebot'
        );

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('cookiebot', 'Configuration/TypoScript', 'Cookiebot');

    }
);
