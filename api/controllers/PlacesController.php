<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class PlacesController extends \Phalcon\Mvc\Controller
{

	public function indexAction()
	{
		$text = 'Vamos por el buen camino';
		echo '<h1>'.$text.'</h1>';
	}

}
