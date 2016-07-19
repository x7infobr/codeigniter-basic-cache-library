<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Cache{
	function __construct(){
		$this->ci =& get_instance();
        if (!is_dir('cache')) {
            mkdir('cache');
        }
	}


    public function save($data='', $file_name=''){

    	if ($file_name=='') {
    		$file_name = uniqid();
    	}
    	
    	file_put_contents('cache/'.$file_name.'.json', json_encode($data));
    	return $file_name;
    }

    public function get($file_name=''){

    	if (is_file('cache/'.$file_name.'.json')) {
    		return json_decode(file_get_contents('cache/'.$file_name.'.json'));
    	}else{
    		return false;
    	}
    	

    }



}