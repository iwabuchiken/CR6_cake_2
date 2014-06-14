<?php

class Word extends AppModel {

	//REF http://www.packtpub.com/article/working-with-simple-associations-using-cakephp
	var $name = 'Word';

	var $belongsTo = 'Lang';

	public $validate = array(
			'w1' => array(
					'rule'		=> 'isUnique',
					'message'	=> 'This word already exists'
			)
	);
	
	
	//REF http://book.cakephp.org/2.0/en/models/associations-linking-models-together.html
	// 	public $hasMany = 'Text';

	// 	public function get_Msg() {

	// 		return "Message";

	// 	}
}
