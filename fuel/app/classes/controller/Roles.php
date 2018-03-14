<?php
use \Model\Users;

class Roles extends Base
{
	public function post_configRoles()
	{
		$roleAdmin = new Roles();
		$roleAdmin->type = 'Admin';
		$roleUser = new Roles();
		$roleUser->type = 'User';
		$roleAdmin->save();
		$roleUser->save();
		$json = $this->response(array(
                    'code' => 201,
                    'message' => 'Roles Creados'
                ));
		
	}
}