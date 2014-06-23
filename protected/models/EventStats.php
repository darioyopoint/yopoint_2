<?php

/**
 * This is the model class for table "event_stats".
 *
 * The followings are the available columns in table 'event_stats':
 * @property string $id
 * @property integer $view_counter
 * @property integer $purchase_counter
 * @property integer $like_counter
 * @property integer $comment_counter
 * @property integer $share_counter
 * @property string $fk_event_related
 *
 * The followings are the available model relations:
 * @property Event $fkEventRelated
 */
class EventStats extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'event_stats';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('fk_event_related', 'required'),
			array('view_counter, purchase_counter, like_counter, comment_counter, share_counter', 'numerical', 'integerOnly'=>true),
			array('fk_event_related', 'length', 'max'=>20),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, view_counter, purchase_counter, like_counter, comment_counter, share_counter, fk_event_related', 'safe', 'on'=>'search'),
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
			'fkEventRelated' => array(self::BELONGS_TO, 'Event', 'fk_event_related'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'view_counter' => 'View Counter',
			'purchase_counter' => 'Purchase Counter',
			'like_counter' => 'Like Counter',
			'comment_counter' => 'Comment Counter',
			'share_counter' => 'Share Counter',
			'fk_event_related' => 'Fk Event Related',
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
		$criteria->compare('view_counter',$this->view_counter);
		$criteria->compare('purchase_counter',$this->purchase_counter);
		$criteria->compare('like_counter',$this->like_counter);
		$criteria->compare('comment_counter',$this->comment_counter);
		$criteria->compare('share_counter',$this->share_counter);
		$criteria->compare('fk_event_related',$this->fk_event_related,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return EventStats the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
