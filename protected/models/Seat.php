<?php

/**
 * This is the model class for table "seat".
 *
 * The followings are the available columns in table 'seat':
 * @property string $id
 * @property string $row
 * @property string $seat
 * @property integer $sold
 * @property string $fk_ticket_id
 *
 * The followings are the available model relations:
 * @property Ticket $fkTicket
 */
class Seat extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'seat';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('row, seat, fk_ticket_id', 'required'),
			array('sold', 'numerical', 'integerOnly'=>true),
			array('row, seat', 'length', 'max'=>4),
			array('fk_ticket_id', 'length', 'max'=>20),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, row, seat, sold, fk_ticket_id', 'safe', 'on'=>'search'),
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
			'fkTicket' => array(self::BELONGS_TO, 'Ticket', 'fk_ticket_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'row' => 'Row',
			'seat' => 'Seat',
			'sold' => 'Sold',
			'fk_ticket_id' => 'Fk Ticket',
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
		$criteria->compare('row',$this->row,true);
		$criteria->compare('seat',$this->seat,true);
		$criteria->compare('sold',$this->sold);
		$criteria->compare('fk_ticket_id',$this->fk_ticket_id,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Seat the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
