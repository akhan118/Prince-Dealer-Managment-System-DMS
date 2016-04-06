<?php

/**
 * This is the model class for table "vehicle".
 *
 * The followings are the available columns in table 'vehicle':
 * @property integer $id
 * @property string $vin
 * @property string $purchase_date
 * @property integer $stock_num
 * @property string $year
 * @property string $make
 * @property string $model
 * @property string $body_style
 * @property string $color
 * @property integer $miles
 * @property string $miles_type
 * @property string $cost
 * @property string $asking_price
 * @property integer $title_num
 * @property string $title_type
 * @property string $title_origin
 * @property integer $cat_fee
 * @property integer $purchase_id
 * @property integer $order_managment_id
 *
 * The followings are the available model relations:
 * @property Purchase $purchase
 */
class Vehicle extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'vehicle';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('stock_num, miles, title_num, cat_fee, purchase_id, order_managment_id', 'numerical', 'integerOnly'=>true),
			array('vin, year', 'length', 'max'=>20),
			array('make, model, body_style', 'length', 'max'=>150),
			array('color, miles_type, title_origin', 'length', 'max'=>100),
			array('cost, asking_price', 'length', 'max'=>12),
			array('title_type', 'length', 'max'=>50),
			array('purchase_date', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, vin, purchase_date, stock_num, year, make, model, body_style, color, miles, miles_type, cost, asking_price, title_num, title_type, title_origin, cat_fee, purchase_id, order_managment_id', 'safe', 'on'=>'search'),
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
			'purchase' => array(self::BELONGS_TO, 'Purchase', 'purchase_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'vin' => 'Vin',
			'purchase_date' => 'Purchase Date',
			'stock_num' => 'Stock Num',
			'year' => 'Year',
			'make' => 'Make',
			'model' => 'Model',
			'body_style' => 'Body Style',
			'color' => 'Color',
			'miles' => 'Miles',
			'miles_type' => 'Miles Type',
			'cost' => 'Cost',
			'asking_price' => 'Asking Price',
			'title_num' => 'Title Num',
			'title_type' => 'Title Type',
			'title_origin' => 'Title Origin',
			'cat_fee' => 'Cat Fee',
			'purchase_id' => 'Purchase',
			'order_managment_id' => 'Order Managment',
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
		$criteria->compare('vin',$this->vin,true);
		$criteria->compare('purchase_date',$this->purchase_date,true);
		$criteria->compare('stock_num',$this->stock_num);
		$criteria->compare('year',$this->year,true);
		$criteria->compare('make',$this->make,true);
		$criteria->compare('model',$this->model,true);
		$criteria->compare('body_style',$this->body_style,true);
		$criteria->compare('color',$this->color,true);
		$criteria->compare('miles',$this->miles);
		$criteria->compare('miles_type',$this->miles_type,true);
		$criteria->compare('cost',$this->cost,true);
		$criteria->compare('asking_price',$this->asking_price,true);
		$criteria->compare('title_num',$this->title_num);
		$criteria->compare('title_type',$this->title_type,true);
		$criteria->compare('title_origin',$this->title_origin,true);
		$criteria->compare('cat_fee',$this->cat_fee);
		$criteria->compare('purchase_id',$this->purchase_id);
		$criteria->compare('order_managment_id',$this->order_managment_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Vehicle the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
        
                    public function states() {
        return array(
            'AL' => 'Alabama', 'AK' => 'Alaska', 'AZ' => 'Arizona', 'AR' => 'Arkansas', 'CA' => 'California', 'CO' => 'Colorado',
            'CT' => 'Connecticut', 'DE' => 'Delaware', 'FL' => 'Florida', 'GA' => 'Georgia', 'HI' => 'Hawaii', 'ID' => 'Idaho', 'IL' => 'Illinois',
            'IN' => 'Indiana', 'IA' => 'Iowa', 'KS' => 'Kansas', 'KY' => 'Kentucky', 'LA' => 'Louisiana', 'ME' => 'Maine', 'MD' => 'Maryland',
            'MA' => 'Massachusetts', 'MI' => 'Michigan', 'MN' => 'Minnesota', 'MS' => 'Mississippi', 'MO' => 'Missouri', 'MT' => 'Montana',
            'NE' => 'Nebraska', 'NV' => 'Nevada', 'NH' => 'New Hampshire', 'NJ' => 'New Jersey', 'NM' => 'New Mexico', 'NY' => 'New York',
            'NC' => 'North Carolina', 'ND' => 'North Dakota', 'OH' => 'Ohio', 'OK' => 'Oklahoma', 'OR' => 'Oregon', 'PA' => 'Pennsylvania',
            'RI' => 'Rhode Island', 'SC' => 'South Carolina', 'SD' => 'South Dakota', 'TN' => 'Tennessee', 'TX' => 'Texas', 'UT' => 'Utah',
            'VT' => 'Vermont', 'VA' => 'Virginia', 'WA' => 'Washington', 'WV' => 'West Virginia', 'WI' => 'Wisconsin', 'WY' => 'Wyoming',
                );
    }

    public function Title_type() {

        return array('Clear' => 'Clear', 'Salvage' => 'Salvage', 'Flood' => 'Flood', 'Rebuilt Salvage' => 'Rebuilt Salvage',
            'scrap' => 'Scrap', 'Rebuilt Salvage Flood' => 'Rebuilt Salvage Flood');
    }

    public function Millage_type() {

        return array('actual' => 'Actual', 'Not Actual' => 'Not Actual', 'Exempt' => 'Exempt');
    }
}
