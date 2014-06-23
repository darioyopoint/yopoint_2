<?php

/**
 * This is the model class for table "purchase".
 *
 * The followings are the available columns in table 'purchase':
 * @property string $id
 * @property double $total_price
 * @property integer $quantity
 * @property string $date
 * @property string $row
 * @property string $seat
 * @property string $fk_user
 * @property string $fk_ticket
 *
 * The followings are the available model relations:
 * @property Payment[] $payments
 * @property Ticket $fkTicket
 * @property User $fkUser
 */
class Purchase extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'purchase';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('fk_user, fk_ticket', 'required'),
			array('quantity', 'numerical', 'integerOnly'=>true),
			array('total_price', 'numerical'),
			array('row, seat', 'length', 'max'=>5),
			array('fk_user, fk_ticket', 'length', 'max'=>20),
			array('date', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, total_price, quantity, date, row, seat, fk_user, fk_ticket', 'safe', 'on'=>'search'),
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
			'payments' => array(self::HAS_MANY, 'Payment', 'fk_purchase'),
			'fkTicket' => array(self::BELONGS_TO, 'Ticket', 'fk_ticket'),
			'fkUser' => array(self::BELONGS_TO, 'User', 'fk_user'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'total_price' => 'Total Price',
			'quantity' => 'Quantity',
			'date' => 'Date',
			'row' => 'Row',
			'seat' => 'Seat',
			'fk_user' => 'Fk User',
			'fk_ticket' => 'Fk Ticket',
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
		$criteria->compare('total_price',$this->total_price);
		$criteria->compare('quantity',$this->quantity);
		$criteria->compare('date',$this->date,true);
		$criteria->compare('row',$this->row,true);
		$criteria->compare('seat',$this->seat,true);
		$criteria->compare('fk_user',$this->fk_user,true);
		$criteria->compare('fk_ticket',$this->fk_ticket,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Purchase the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
