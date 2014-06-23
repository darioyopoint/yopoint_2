<?php

/**
 * This is the model class for table "event".
 *
 * The followings are the available columns in table 'event':
 * @property string $id
 * @property string $title
 * @property string $description
 * @property string $start_time
 * @property string $end_time
 * @property string $fk_location
 * @property integer $fk_category
 * @property integer $fk_feature
 *
 * The followings are the available model relations:
 * @property EventStats[] $eventStats
 * @property Picture[] $pictures
 * @property Ticket[] $tickets
 * @property UserStats[] $userStats
 */
class Event extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'event';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('title, start_time, end_time, fk_location, fk_category, fk_feature', 'required'),
			array('fk_category, fk_feature', 'numerical', 'integerOnly'=>true),
			array('title', 'length', 'max'=>100),
			array('fk_location', 'length', 'max'=>20),
			array('description', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, title, description, start_time, end_time, fk_location, fk_category, fk_feature', 'safe', 'on'=>'search'),
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
			'eventStats' => array(self::HAS_MANY, 'EventStats', 'fk_event_related'),
			'pictures' => array(self::HAS_MANY, 'Picture', 'fk_event'),
			'tickets' => array(self::HAS_MANY, 'Ticket', 'fk_event'),
			'userStats' => array(self::HAS_MANY, 'UserStats', 'fk_event_number'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'title' => 'Title',
			'description' => 'Description',
			'start_time' => 'Start Time',
			'end_time' => 'End Time',
			'fk_location' => 'Fk Location',
			'fk_category' => 'Fk Category',
			'fk_feature' => 'Fk Feature',
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

		$criteria->compare('id',$this->id,true);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('start_time',$this->start_time,true);
		$criteria->compare('end_time',$this->end_time,true);
		$criteria->compare('fk_location',$this->fk_location,true);
		$criteria->compare('fk_category',$this->fk_category);
		$criteria->compare('fk_feature',$this->fk_feature);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Event the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
