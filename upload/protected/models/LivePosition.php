<?php

/**
 * This is the model class for table "position".
 *
 * The followings are the available columns in table 'position':
 * @property integer $id
 * @property integer $uid
 * @property string $name
 * @property string $description
 * @property integer $count
 * @property integer $expiration_date
 * @property integer $dateline
 */
class LivePosition extends Position{
	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules(){
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('uid, name, description, count, expiration_date, dateline', 'required'),
			array('uid, count, expiration_date, dateline', 'numerical', 'integerOnly'=>true),
			array('name', 'length', 'max'=>20),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, uid, name, description, count, expiration_date, dateline', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations(){
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels(){
		return array(
			'id' => 'ID',
			'uid' => 'Uid',
			'name' => 'Name',
			'description' => 'Description',
			'count' => 'Count',
			'expiration_date' => 'Expiration Date',
			'dateline' => 'Dateline',
		);
	}
}