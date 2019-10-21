<?php

/***************************************************************
 * Extension Manager/Repository config file for ext: "cookiebot"
 ***************************************************************/

$EM_CONF[$_EXTKEY] = [
    'title' => 'Cookiebot',
    'description' => 'Implement cookiebot (cookiebot.com) consent-banner in TYPO3. Also delivers a content-plugin to place cookiebots cookie declaration whereever you need it.',
    'category' => 'plugin',
    'author' => 'Matthias Pruy',
    'author_email' => 'dev@mjpr.de',
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 0,
    'version' => '1.0.1',
    'constraints' => [
        'depends' => [
            'typo3' => '8.7.0-10.2.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
