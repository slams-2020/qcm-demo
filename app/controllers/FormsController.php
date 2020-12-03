<?php

namespace controllers;

use Ubiquity\orm\DAO;
use Ubiquity\utils\http\URequest;
use models\Typeq;
use models\User;
use services\UIService;

/**
 * Controller FormsController
 *
 * @property \Ajax\php\ubiquity\JsUtils $jquery
 */
class FormsController extends ControllerBase {
	private $uiService;
	public function initialize() {
		parent::initialize ();
		$this->uiService = new UIService ( $this->jquery );
	}
	public function index() {
		$frm = $this->uiService->userForm ();
		$frm->fieldAsSubmit ( 'submit', 'green', 'FormsController/submit', '#response', [ 
				'ajax' => [ 
						'hasLoader' => 'internal'
				]
		] );

		$this->jquery->renderView ( "FormsController/index.html" );
	}
	public function submit() {
		$user = new User ();
		URequest::setValuesToObject ( $user );
		DAO::insert ( $user );
	}
	public function question() {
		$frm = $this->uiService->questionForm ();
		$this->jquery->getOnClick ( '#dropdown-form-typeq-0 .item', 'FormsController/detailsQ', '#response', [ 
				'attr' => 'data-value',
				'hasLoader' => false
		] );
		$this->jquery->renderView ( "FormsController/question.html" );
	}
	public function detailsQ($id) {
		$type = DAO::getById ( Typeq::class, 'id=' . $id );
		echo $type->getCaption ();
	}
}

















