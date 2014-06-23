<?php

/**
 * This is the model class for table "wallet".
 *
 * The followings are the available columns in table 'wallet':
 * @property string $id
 * @property string $description
 * @property string $fk_user_id
 * @property integer $fk_action
 *
 * The followings are the available model relations:
 * @property User $fkUser
 * @property PUserAction $fkAction
 */
class Wallet extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'wallet';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('fk_user_id, fk_action', 'required'),
			array('fk_action', 'numerical', 'integerOnly'=>true),
			array('description', 'length', 'max'=>100),
			array('fk_user_id', 'length', 'max'=>20),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, description, fk_user_id, fk_action', 'safe', 'on'=>'search'),
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
			'fkUser' => array(self::BELONGS_TO, 'User', 'fk_user_id'),
			'fkAction' => array(self::BELONGS_TO, 'PUserAction', 'fk_action'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'description' => 'Description',
			'fk_user_id' => 'Fk User',
			'fk_action' => 'Fk Action',
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
		$criteria->compare('description',$this->description,true);
		$criteria->compare('fk_user_id',$this->fk_user_id,true);
		$criteria->compare('fk_action',$this->fk_action);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Wallet the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
