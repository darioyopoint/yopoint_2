<?php

/**
 * This is the model class for table "card".
 *
 * The followings are the available columns in table 'card':
 * @property integer $id
 * @property string $owner
 * @property string $number
 * @property string $expire_date
 * @property string $start_date
 * @property string $fk_card_user
 * @property integer $fk_card_type
 *
 * The followings are the available model relations:
 * @property User $fkCardUser
 * @property PCardType $fkCardType
 */
class Card extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'card';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('owner, number, expire_date, fk_card_user, fk_card_type', 'required'),
			array('fk_card_type', 'numerical', 'integerOnly'=>true),
			array('owner', 'length', 'max'=>100),
			array('number, fk_card_user', 'length', 'max'=>20),
			array('start_date', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, owner, number, expire_date, start_date, fk_card_user, fk_card_type', 'safe', 'on'=>'search'),
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
			'fkCardUser' => array(self::BELONGS_TO, 'User', 'fk_card_user'),
			'fkCardType' => array(self::BELONGS_TO, 'PCardType', 'fk_card_type'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'owner' => 'Owner',
			'number' => 'Number',
			'expire_date' => 'Expire Date',
			'start_date' => 'Start Date',
			'fk_card_user' => 'Fk Card User',
			'fk_card_type' => 'Fk Card Type',
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
		$criteria->compare('owner',$this->owner,true);
		$criteria->compare('number',$this->number,true);
		$criteria->compare('expire_date',$this->expire_date,true);
		$criteria->compare('start_date',$this->start_date,true);
		$criteria->compare('fk_card_user',$this->fk_card_user,true);
		$criteria->compare('fk_card_type',$this->fk_card_type);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Card the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
