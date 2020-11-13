<?php

declare(strict_types=1);

namespace MJPR\Cookiebot\Controller;

/***
 *
 * This file is part of the "cookiebot" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2019 Matthias Pruy <dev@mjpr.de>
 *
 ***/
class CookiebotController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    public function declarationAction()
    {
        $this->view->assign('CookiebotApiKey', $this->settings['apikey'] ?: 0);
    }
}
