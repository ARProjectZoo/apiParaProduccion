<?php
use \Model\Type;

class Type extends Base
{
	public function post_configType()
	{
		$typeRest = new Type();
		$typeRest->name = 'Restaurantes';
		$typeExh = new Type();
		$typeExh->name = 'Exhibiciones';
		
		$typeRest->save();
		$typeExh->save();
		$json = $this->response(array(
                    'code' => 201,
                    'message' => 'Type Creados'
                ));
		
	}
}