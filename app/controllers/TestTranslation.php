<?php

namespace controllers;

use Ubiquity\translation\TranslatorManager;

/**
 * Controller TestTranslation
 *
 * @property \Ajax\php\ubiquity\JsUtils $jquery
 */
class TestTranslation extends ControllerBase {
	public function index() {
		$switchTo = (TranslatorManager::getLocale () === 'en_EN') ? 'fr_FR' : 'en_EN';
		$this->jquery->getHref ( 'a', null, [ 
				'hasLoader' => 'internal',
				'historize' => false
		] );
		$this->jquery->renderView ( "TestTranslation/index.html", compact ( 'switchTo' ) );
	}
	/**
	 *
	 * @get('translate/{locale}','name'=>'translate')
	 */
	public function translate($locale) {
		TranslatorManager::setLocale ( $locale );
		$this->index ();
	}
}
