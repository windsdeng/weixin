<?php
class Tx_recordModel extends RelationModel {
	protected $_link = array(
		'User'=>array(
			'mapping_type'  => BELONGS_TO,
//          'class_name'    => 'Users',
			'mapping_name'  => 'user',
			'foreign_key'   => 'uid',//关联id
		),
	);
}