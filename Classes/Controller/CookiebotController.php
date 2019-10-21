<?php
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
/**
 * CookiebotController
 */
class CookiebotController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * action declaration
     * 
     * @return void
     */
    public function declarationAction()
    {
		$apikey = $this->settings['apikey'];
		if($apikey){
			$this->view->assign('CookiebotApiKey',$apikey);
		} else {
			$this->view->assign('CookiebotApiKey',0);
		}
    }

}
