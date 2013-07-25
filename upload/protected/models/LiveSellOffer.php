<?php

/**
 * This is the model class for table "sell_offer".
 *
 * The followings are the available columns in table 'sell_offer':
 * @property integer $id
 * @property integer $uid
 * @property string $name
 * @property string $picture
 * @property string $description
 * @property integer $amount
 * @property integer $price
 * @property integer $dateline
 */
class LiveSellOffer extends SellOffer{
	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules(){
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('uid, name, description, amount, price, dateline', 'required'),
			array('uid, amount, price, dateline', 'numerical', 'integerOnly'=>true),
			array('name', 'length', 'max'=>100),
			array('picture', 'length', 'max'=>200),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, uid, name, picture, description, amount, price, dateline', 'safe', 'on'=>'search'),
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
			'picture' => 'Picture',
			'description' => 'Description',
			'amount' => 'Amount',
			'price' => 'Price',
			'dateline' => 'Dateline',
		);
	}
}