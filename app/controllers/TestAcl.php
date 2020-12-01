<?php

namespace controllers;

use Ubiquity\security\acl\controllers\AclControllerTrait;

/**
 * Controller TestAcl
 *
 * @resource('TestAcl')
 */
class TestAcl extends ControllerBase {
	use AclControllerTrait;
	/**
	 *
	 * @permission('name'=>'READ','level'=>5)
	 * @allow('role'=>"@MOI",'resource'=>'TestAcl','permission'=>'READ')
	 * @allow('role'=>"@AUTRE")
	 */
	public function index() {
		echo "index";
	}
	public function _getRole() {
		return '@MOI';
	}
	/**
	 *
	 * @allow('role'=>'pasMoi','permission'=>'NONE')
	 */
	public function tt() {
	}
}
