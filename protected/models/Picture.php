<?php

/**
 * This is the model class for table "picture".
 *
 * The followings are the available columns in table 'picture':
 * @property string $id
 * @property string $path
 * @property string $type
 * @property integer $width
 * @property integer $height
 * @property string $format
 * @property string $copyright
 * @property string $caption
 * @property integer $is_cover
 * @property string $fk_event
 *
 * The followings are the available model relations:
 * @property Event $fkEvent
 */
class Picture extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'picture';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('path, fk_event', 'required'),
			array('width, height, is_cover', 'numerical', 'integerOnly'=>true),
			array('path', 'length', 'max'=>250),
			array('type', 'length', 'max'=>50),
			array('format', 'length', 'max'=>10),
			array('copyright, caption', 'length', 'max'=>100),
			array('fk_event', 'length', 'max'=>20),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, path, type, width, height, format, copyright, caption, is_cover, fk_event', 'safe', 'on'=>'search'),
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
			'fkEvent' => array(self::BELONGS_TO, 'Event', 'fk_event'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'path' => 'Path',
			'type' => 'Type',
			'width' => 'Width',
			'height' => 'Height',
			'format' => 'Format',
			'copyright' => 'Copyright',
			'caption' => 'Caption',
			'is_cover' => 'Is Cover',
			'fk_event' => 'Fk Event',
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
		$criteria->compare('path',$this->path,true);
		$criteria->compare('type',$this->type,true);
		$criteria->compare('width',$this->width);
		$criteria->compare('height',$this->height);
		$criteria->compare('format',$this->format,true);
		$criteria->compare('copyright',$this->copyright,true);
		$criteria->compare('caption',$this->caption,true);
		$criteria->compare('is_cover',$this->is_cover);
		$criteria->compare('fk_event',$this->fk_event,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Picture the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
