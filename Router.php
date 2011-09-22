<?php

class Router {
	
	const URI_SYSTEM_DEFAULT = 'uri_default';
	const URI_SYSTEM_INFOPATH = 'uri_infopath';
	const URI_SYSTEM_HTACCESS = 'uri_htaccess';
	
	public $options = array();
	
	public $controller = array();
	
	public $actions = array();
	
	public $path = '/';
	
	public function __construct () {
		
		$options = Evy::Init()->otions;
		
		$this->options = array(
			'system_uri_type' 	=> ( isset( $options['system_uri_type'] ) ) ? $options['system_uri_type'] : self::URI_SYSTEM_DEFAULT ,
			'system_uri_site' 	=> $options['system_uri_site'] . $options['system_uri_path'],
			
			'front_controller' 	=> $options['front_controller'],
			
			'uri_structure' 	=> array(),
			'uri_query_tags' 	=> array(),
			'uri_query_replace' => array()
			);
		
		$this->path = $options['system_uri_path'];
		
		return $this;
		
	}
	
	public function Add_Options () {
		return $this->options;
	}
	
	public function Request () {
		
		return $this;
		
	}
	
	
	
}


