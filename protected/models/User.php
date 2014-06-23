<?php

/**
 * This is the model class for table "user".
 *
 * The followings are the available columns in table 'user':
 * @property string $id
 * @property string $username
 * @property string $password
 * @property string $email
 * @property integer $verified
 * @property integer $gender
 * @property string $createtime
 * @property string $phone
 * @property string $avatar_path
 * @property string $fk_address
 * @property integer $fk_user_role
 * @property integer $fk_user_discount
 * @property integer $fk_user_type
 *
 * The followings are the available model relations:
 * @property Card[] $cards
 * @property Purchase[] $purchases
 * @property PUserDiscount $fkUserDiscount
 * @property Location $fkAddress
 * @property PUserRole $fkUserRole
 * @property PUserType $fkUserType
 * @property UserLog[] $userLogs
 * @property UserStats[] $userStats
 * @property Wallet[] $wallets
 */
class User extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'user';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('username, password, email, fk_address, fk_user_role, fk_user_discount, fk_user_type', 'required'),
			array('verified, gender, fk_user_role, fk_user_discount, fk_user_type', 'numerical', 'integerOnly'=>true),
			array('username, password, email, avatar_path', 'length', 'max'=>128),
			array('phone, fk_address', 'length', 'max'=>20),
			array('createtime', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, username, password, email, verified, gender, createtime, phone, avatar_path, fk_address, fk_user_role, fk_user_discount, fk_user_type', 'safe', 'on'=>'search'),
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
			'cards' => array(self::HAS_MANY, 'Card', 'fk_card_user'),
			'purchases' => array(self::HAS_MANY, 'Purchase', 'fk_user'),
			'fkUserDiscount' => array(self::BELONGS_TO, 'PUserDiscount', 'fk_user_discount'),
			'fkAddress' => array(self::BELONGS_TO, 'Location', 'fk_address'),
			'fkUserRole' => array(self::BELONGS_TO, 'PUserRole', 'fk_user_role'),
			'fkUserType' => array(self::BELONGS_TO, 'PUserType', 'fk_user_type'),
			'userLogs' => array(self::HAS_MANY, 'UserLog', 'fk_user'),
			'userStats' => array(self::HAS_MANY, 'UserStats', 'fk_user_number'),
			'wallets' => array(self::HAS_MANY, 'Wallet', 'fk_user_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'username' => 'Username',
			'password' => 'Password',
			'email' => 'Email',
			'verified' => 'Verified',
			'gender' => 'Gender',
			'createtime' => 'Createtime',
			'phone' => 'Phone',
			'avatar_path' => 'Avatar Path',
			'fk_address' => 'Fk Address',
			'fk_user_role' => 'Fk User Role',
			'fk_user_discount' => 'Fk User Discount',
			'fk_user_type' => 'Fk User Type',
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
		$criteria->compare('username',$this->username,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('verified',$this->verified);
		$criteria->compare('gender',$this->gender);
		$criteria->compare('createtime',$this->createtime,true);
		$criteria->compare('phone',$this->phone,true);
		$criteria->compare('avatar_path',$this->avatar_path,true);
		$criteria->compare('fk_address',$this->fk_address,true);
		$criteria->compare('fk_user_role',$this->fk_user_role);
		$criteria->compare('fk_user_discount',$this->fk_user_discount);
		$criteria->compare('fk_user_type',$this->fk_user_type);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return User the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
