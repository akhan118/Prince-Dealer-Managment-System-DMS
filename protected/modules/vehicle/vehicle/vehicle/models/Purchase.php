<?php

/**
 * This is the model class for table "purchase".
 *
 * The followings are the available columns in table 'purchase':
 * @property integer $id
 * @property string $last_name_company
 * @property string $first_name
 * @property string $middle_name
 * @property string $address
 * @property string $zip
 * @property string $city
 * @property string $state
 * @property string $broker
 * @property string $comments
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
			array('last_name_company, first_name, middle_name, address, zip, city, state, broker, comments', 'safe'),
			array('last_name_company, broker', 'length', 'max'=>100),
			array('first_name, middle_name', 'length', 'max'=>50),
			array('address', 'length', 'max'=>150),
			array('zip', 'length', 'max'=>10),
			array('city, state', 'length', 'max'=>70),
			array('comments', 'length', 'max'=>250),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, last_name_company, first_name, middle_name, address, zip, city, state, broker, comments', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'last_name_company' => 'Last Name / Company',
			'first_name' => 'First Name',
			'middle_name' => 'Middle Name',
			'address' => 'Address',
			'zip' => 'Zip',
			'city' => 'City',
			'state' => 'State',
			'broker' => 'Broker',
			'comments' => 'Comments',
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
		$criteria->compare('last_name_company',$this->last_name_company,true);
		$criteria->compare('first_name',$this->first_name,true);
		$criteria->compare('middle_name',$this->middle_name,true);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('zip',$this->zip,true);
		$criteria->compare('city',$this->city,true);
		$criteria->compare('state',$this->state,true);
		$criteria->compare('broker',$this->broker,true);
		$criteria->compare('comments',$this->comments,true);

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
