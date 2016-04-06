<?php

/**
 * This is the model class for table "order_managment".
 *
 * The followings are the available columns in table 'order_managment':
 * @property integer $id
 * @property string $first_name
 * @property string $middle_name
 * @property string $last_name
 * @property string $company
 * @property string $address
 * @property string $Sale_date
 * @property string $zip
 * @property string $city
 * @property string $state
 * @property string $county
 * @property string $county_code
 * @property string $Driver_lic
 * @property string $DOB
 * @property string $miles_out
 * @property string $miles_type
 * @property string $Sold_amount
 * @property string $Broker
 * @property string $comment
 * @property string $time_stamp
 * @property string $vehicle_id
 */
class OrderManagment extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'order_managment';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('first_name, middle_name, last_name, company, address, Sale_date, zip, city, state, county, county_code, Driver_lic, DOB, miles_out, miles_type, Sold_amount, Broker, comment, time_stamp, vehicle_id', 'safe'),
			array('first_name, last_name, company, address', 'length', 'max'=>120),
			array('middle_name, miles_out, miles_type, Sold_amount, Broker, vehicle_id', 'length', 'max'=>100),
			array('Sale_date, city, state, county, county_code, DOB', 'length', 'max'=>20),
			array('zip', 'length', 'max'=>10),
			array('Driver_lic', 'length', 'max'=>50),
			array('comment', 'length', 'max'=>250),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, first_name, middle_name, last_name, company, address, Sale_date, zip, city, state, county, county_code, Driver_lic, DOB, miles_out, miles_type, Sold_amount, Broker, comment, time_stamp, vehicle_id', 'safe', 'on'=>'search'),
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
			'first_name' => 'First Name',
			'middle_name' => 'Middle Name',
			'last_name' => 'Last Name',
			'company' => 'Company',
			'address' => 'Address',
			'Sale_date' => 'Sale Date',
			'zip' => 'Zip',
			'city' => 'City',
			'state' => 'State',
			'county' => 'County',
			'county_code' => 'County Code',
			'Driver_lic' => 'Driver Lic',
			'DOB' => 'Dob',
			'miles_out' => 'Miles Out',
			'miles_type' => 'Miles Type',
			'Sold_amount' => 'Sold Amount',
			'Broker' => 'Broker',
			'comment' => 'Comment',
			'time_stamp' => 'Time Stamp',
			'vehicle_id' => 'Vehicle',
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
		$criteria->compare('first_name',$this->first_name,true);
		$criteria->compare('middle_name',$this->middle_name,true);
		$criteria->compare('last_name',$this->last_name,true);
		$criteria->compare('company',$this->company,true);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('Sale_date',$this->Sale_date,true);
		$criteria->compare('zip',$this->zip,true);
		$criteria->compare('city',$this->city,true);
		$criteria->compare('state',$this->state,true);
		$criteria->compare('county',$this->county,true);
		$criteria->compare('county_code',$this->county_code,true);
		$criteria->compare('Driver_lic',$this->Driver_lic,true);
		$criteria->compare('DOB',$this->DOB,true);
		$criteria->compare('miles_out',$this->miles_out,true);
		$criteria->compare('miles_type',$this->miles_type,true);
		$criteria->compare('Sold_amount',$this->Sold_amount,true);
		$criteria->compare('Broker',$this->Broker,true);
		$criteria->compare('comment',$this->comment,true);
		$criteria->compare('time_stamp',$this->time_stamp,true);
		$criteria->compare('vehicle_id',$this->vehicle_id,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return OrderManagment the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
