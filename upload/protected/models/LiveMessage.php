<?php

/**
 * This is the model class for table "message".
 *
 * The followings are the available columns in table 'message':
 * @property integer $id
 * @property integer $from_uid
 * @property integer $to_uid
 * @property string $title
 * @property string $content
 * @property integer $dateline
 */
class LiveMessage extends Message{
	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules(){
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('from_uid, to_uid, title, dateline', 'required'),
			array('from_uid, to_uid, dateline', 'numerical', 'integerOnly'=>true),
			array('title', 'length', 'max'=>20),
			array('content', 'length', 'max'=>200),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, from_uid, to_uid, title, content, dateline', 'safe', 'on'=>'search'),
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
			'from_uid' => 'From Uid',
			'to_uid' => 'To Uid',
			'title' => 'Title',
			'content' => 'Content',
			'dateline' => 'Dateline',
		);
	}
}