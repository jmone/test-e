<?php

/**
 * This is the model class for table "company_user".
 *
 * The followings are the available columns in table 'company_user':
 * @property integer $uid
 * @property string $name
 */
class LiveCompanyUser extends CompanyUser{
	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules(){
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('uid, name', 'required'),
			array('uid', 'numerical', 'integerOnly'=>true),
			array('name', 'length', 'max'=>100),
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