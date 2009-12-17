<?php
class categories extends AppModel {
	var $name = 'categories';
	var $validate = array(
		'name' => array(
			'notempty' => array('rule' => array('notempty')),
		),
	);
	//The Associations below have been created with all possible keys, those that are not needed can be removed
}
?>