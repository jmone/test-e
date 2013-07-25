<?php

/**
 * This is the model class for table "friend_link".
 *
 * The followings are the available columns in table 'friend_link':
 * @property integer $id
 * @property integer $uid
 * @property string $name
 * @property string $logo
 * @property string $url
 * @property integer $order_num
 * @property integer $dateline
 */
class LiveFriendLink extends FriendLink{
	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules(){
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('uid, name, url, dateline', 'required'),
			array('uid, order_num, dateline', 'numerical', 'integerOnly'=>true),
			array('name', 'length', 'max'=>20),
			array('logo', 'length', 'max'=>200),
			array('url', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, uid, name, logo, url, order_num, dateline', 'safe', 'on'=>'search'),
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
			'logo' => 'Logo',
			'url' => 'Url',
			'order_num' => 'Order Num',
			'dateline' => 'Dateline',
		);
	}
}