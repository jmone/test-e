<?php

/**
 * This is the model class for table "exhibition".
 *
 * The followings are the available columns in table 'exhibition':
 * @property integer $id
 * @property integer $uid
 * @property string $name
 * @property string $address
 * @property string $description
 * @property integer $start_date
 * @property integer $expiration_date
 * @property integer $dateline
 */
class LiveExhibition extends Exhibition{
	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules(){
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('uid, name, address, description, start_date, expiration_date, dateline', 'required'),
			array('uid, start_date, expiration_date, dateline', 'numerical', 'integerOnly'=>true),
			array('name', 'length', 'max'=>20),
			array('address', 'length', 'max'=>200),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, uid, name, address, description, start_date, expiration_date, dateline', 'safe', 'on'=>'search'),
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
			'address' => 'Address',
			'description' => 'Description',
			'start_date' => 'Start Date',
			'expiration_date' => 'Expiration Date',
			'dateline' => 'Dateline',
		);
	}
}