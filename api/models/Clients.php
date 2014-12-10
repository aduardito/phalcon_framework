<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Clients extends \Phalcon\Mvc\Model
{
	
	private $id;
	private $name;
	
	public function initialize()
	{
		$this->hasMany('id', 'RobotsParts', 'robots_id');
		
		/*
		Method 	Description
		hasMany 	Defines a 1-n relationship
		hasOne 	Defines a 1-1 relationship
		belongsTo 	Defines a n-1 relationship
		 * $this->belongsTo("robots_id", "Robots", "id");
		 * * first param:  field local model
		 * * second param: name of referenced model
		 * * third param:  field name of referenced model
		 * 
		hasManyToMany 	Defines a n-n relationship
		 */
		
	}
	
	public function getId()
	{
		return $this->id;
	}
	
	public function setName( $name )
	{
		$this->name = $name;
		return $this;
	}
	
	public function getName( $name )
	{
		return $this->name;
	}
	
	
}