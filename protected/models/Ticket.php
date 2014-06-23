<?php

/**
 * This is the model class for table "ticket".
 *
 * The followings are the available columns in table 'ticket':
 * @property string $id
 * @property string $title
 * @property string $description
 * @property string $availability
 * @property string $min_order
 * @property string $max_order
 * @property double $price
 * @property string $sale_start
 * @property string $sale_end
 * @property string $fk_event
 * @property integer $fk_ticket_type
 *
 * The followings are the available model relations:
 * @property Purchase[] $purchases
 * @property Seat[] $seats
 * @property Event $fkEvent
 * @property PTicketType $fkTicketType
 */
class Ticket extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'ticket';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('title, availability, min_order, max_order, fk_event, fk_ticket_type', 'required'),
			array('fk_ticket_type', 'numerical', 'integerOnly'=>true),
			array('price', 'numerical'),
			array('title', 'length', 'max'=>64),
			array('description', 'length', 'max'=>128),
			array('availability, min_order, max_order', 'length', 'max'=>10),
			array('fk_event', 'length', 'max'=>20),
			array('sale_start, sale_end', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, title, description, availability, min_order, max_order, price, sale_start, sale_end, fk_event, fk_ticket_type', 'safe', 'on'=>'search'),
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
			'purchases' => array(self::HAS_MANY, 'Purchase', 'fk_ticket'),
			'seats' => array(self::HAS_MANY, 'Seat', 'fk_ticket_id'),
			'fkEvent' => array(self::BELONGS_TO, 'Event', 'fk_event'),
			'fkTicketType' => array(self::BELONGS_TO, 'PTicketType', 'fk_ticket_type'),
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
			'availability' => 'Availability',
			'min_order' => 'Min Order',
			'max_order' => 'Max Order',
			'price' => 'Price',
			'sale_start' => 'Sale Start',
			'sale_end' => 'Sale End',
			'fk_event' => 'Fk Event',
			'fk_ticket_type' => 'Fk Ticket Type',
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
		$criteria->compare('availability',$this->availability,true);
		$criteria->compare('min_order',$this->min_order,true);
		$criteria->compare('max_order',$this->max_order,true);
		$criteria->compare('price',$this->price);
		$criteria->compare('sale_start',$this->sale_start,true);
		$criteria->compare('sale_end',$this->sale_end,true);
		$criteria->compare('fk_event',$this->fk_event,true);
		$criteria->compare('fk_ticket_type',$this->fk_ticket_type);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Ticket the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
