<?php

class googleMapController extends \Phalcon\MVCzController
{
	
	private $google_api_key = '';
	
	public function circleRoundAction( $qty = 0, $measure = 'miles' )
	{
		$key = $this->getKey();
		
	}
	
	public function getCoordinatesAction()
	{
		
	}
	
	private function getKey()
	{
		return $this->google_api_key;
	}
	
}

