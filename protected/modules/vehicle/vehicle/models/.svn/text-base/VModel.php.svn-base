<?php

/**
 * This is the model class for table "v_model".
 *
 * The followings are the available columns in table 'v_model':
 * @property integer $id
 * @property string $model
 * @property string $body
 * @property integer $make_id
 * @property string $make_name
 *
 * The followings are the available model relations:
 * @property VMake $make
 * @property VYear[] $vYears
 */
class VModel extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'v_model';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('body, make_id, make_name', 'required'),
			array('make_id', 'numerical', 'integerOnly'=>true),
			array('model', 'length', 'max'=>50),
			array('body', 'length', 'max'=>500),
			array('make_name', 'length', 'max'=>100),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, model, body, make_id, make_name', 'safe', 'on'=>'search'),
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
			'make' => array(self::BELONGS_TO, 'VMake', 'make_id'),
			'vYears' => array(self::HAS_MANY, 'VYear', 'model_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'model' => 'Model',
			'body' => 'Body',
			'make_id' => 'Make',
			'make_name' => 'Make Name',
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
		$criteria->compare('model',$this->model,true);
		$criteria->compare('body',$this->body,true);
		$criteria->compare('make_id',$this->make_id);
		$criteria->compare('make_name',$this->make_name,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return VModel the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
