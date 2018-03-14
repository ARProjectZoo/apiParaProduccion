<?php
use \Model\Continent;

class Continent extends Base
{
	public function post_configContinent()
	{
		$typeAfrica = new Continent();
		$typeAfrica->type = 'Africa';
		$typeAsia = new Continent();
		$typeAsia->type = 'Asia';
		$typeAN = new Continent();
		$typeAN->type = 'America del Norte';
		$typeAS = new Continent();
		$typeAS->type = 'America del Sur';
		$typeACyC = new Continent();
		$typeACyC->type = 'America central y Caribe';
		$typeEU = new Continent();
		$typeEU->type = 'Europa';
		$typeOceania = new Continent();
		$typeOceania->type = 'Oceania';

		
		$typeAfrica->save();
		$typeAsia->save();
		$typeAN->save();
		$typeAS->save();
		$typeACyC->save();
		$typeEU->save();
		$typeOceania->save();
		$json = $this->response(array(
                    'code' => 201,
                    'message' => 'Type Creados'
                ));
		
	}
}