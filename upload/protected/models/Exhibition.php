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
class Exhibition extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Exhibition the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'exhibition';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
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
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
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

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('uid',$this->uid);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('start_date',$this->start_date);
		$criteria->compare('expiration_date',$this->expiration_date);
		$criteria->compare('dateline',$this->dateline);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}