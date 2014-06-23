<?php

/**
 * This is the model class for table "user_stats".
 *
 * The followings are the available columns in table 'user_stats':
 * @property integer $id
 * @property integer $like
 * @property integer $comment
 * @property integer $share
 * @property integer $view_counter
 * @property integer $purchase_counter
 * @property string $fk_event_number
 * @property string $fk_user_number
 *
 * The followings are the available model relations:
 * @property Event $fkEventNumber
 * @property User $fkUserNumber
 */
class UserStats extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'user_stats';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id, fk_event_number, fk_user_number', 'required'),
			array('id, like, comment, share, view_counter, purchase_counter', 'numerical', 'integerOnly'=>true),
			array('fk_event_number, fk_user_number', 'length', 'max'=>20),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, like, comment, share, view_counter, purchase_counter, fk_event_number, fk_user_number', 'safe', 'on'=>'search'),
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
			'fkEventNumber' => array(self::BELONGS_TO, 'Event', 'fk_event_number'),
			'fkUserNumber' => array(self::BELONGS_TO, 'User', 'fk_user_number'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'like' => 'Like',
			'comment' => 'Comment',
			'share' => 'Share',
			'view_counter' => 'View Counter',
			'purchase_counter' => 'Purchase Counter',
			'fk_event_number' => 'Fk Event Number',
			'fk_user_number' => 'Fk User Number',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('like',$this->like);
		$criteria->compare('comment',$this->comment);
		$criteria->compare('share',$this->share);
		$criteria->compare('view_counter',$this->view_counter);
		$criteria->compare('purchase_counter',$this->purchase_counter);
		$criteria->compare('fk_event_number',$this->fk_event_number,true);
		$criteria->compare('fk_user_number',$this->fk_user_number,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return UserStats the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
