<?php

/**
 * This is the model class for table "common_user".
 *
 * The followings are the available columns in table 'common_user':
 * @property integer $uid
 * @property integer $name
 */
class LiveCommonUser extends CommonUser{
	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules(){
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('uid, name', 'required'),
			array('uid, name', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('uid, name', 'safe', 'on'=>'search'),
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
			'uid' => 'Uid',
			'name' => 'Name',
		);
	}
}