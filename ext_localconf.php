<?php

defined('TYPO3_MODE') or die();

(static function () {
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
        'MJPR.Cookiebot',
        'Cookiebot',
        [
            'Cookiebot' => 'declaration'
        ],
        [
            'Cookiebot' => ''
        ]
    );

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        'mod {
            wizards.newContentElement.wizardItems.plugins {
                elements {
                    cookiebot {
                        iconIdentifier = cookiebot-plugin-cookiebot
                        title = LLL:EXT:cookiebot/Resources/Private/Language/locallang_db.xlf:tx_cookiebot_cookiebot.name
                        description = LLL:EXT:cookiebot/Resources/Private/Language/locallang_db.xlf:tx_cookiebot_cookiebot.description
                        tt_content_defValues {
                            CType = list
                            list_type = cookiebot_cookiebot
                        }
                    }
                }
                show = *
            }
       }'
    );

    $iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
    $iconRegistry->registerIcon(
        'cookiebot-plugin-cookiebot',
        \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
        ['source' => 'EXT:cookiebot/Resources/Public/Icons/icon_plugin_cookiebot.svg']
    );
})();
