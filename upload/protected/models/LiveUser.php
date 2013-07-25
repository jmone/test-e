<?php

/**
 * This is the model class for table "user".
 *
 * The followings are the available columns in table 'user':
 * @property integer $id
 * @property string $type
 * @property string $email
 * @property string $password
 * @property integer $dateline
 */
class LiveUser extends User{
	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules(){
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('email, password, dateline', 'required'),
			array('dateline', 'numerical', 'integerOnly'=>true),
			array('type', 'length', 'max'=>1),
			array('email, password', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, type, email, password, dateline', 'safe', 'on'=>'search'),
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
			'type' => 'Type',
			'email' => 'Email',
			'password' => 'Password',
			'dateline' => 'Dateline',
		);
	}
}