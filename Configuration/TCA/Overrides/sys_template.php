<?php

declare(strict_types=1);

(static function ($extKey) {
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($extKey, 'Configuration/TypoScript', 'Cookiebot');
})('cookiebot');