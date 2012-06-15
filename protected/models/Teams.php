<?php

/**
 * This is the model class for table "{{teams}}".
 *
 * The followings are the available columns in table '{{teams}}':
 * @property integer $id
 * @property string $team_name
 * @property string $jersey_image
 * @property integer $status
 * @property string $udf1
 * @property string $udf2
 *
 * The followings are the available model relations:
 * @property PlayersProfile[] $playersProfiles
 */
class Teams extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Teams the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{teams}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('team_name, status', 'required'),
			array('status', 'numerical', 'integerOnly'=>true),
			array('team_name, jersey_image, udf1, udf2', 'length', 'max'=>250),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, team_name, jersey_image, status, udf1, udf2', 'safe', 'on'=>'search'),
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
			'playersProfiles' => array(self::HAS_MANY, 'PlayersProfile', 'team_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'team_name' => 'Team Name',
			'jersey_image' => 'Jersey Image',
			'status' => 'Status',
			'udf1' => 'Udf1',
			'udf2' => 'Udf2',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('team_name',$this->team_name,true);
		$criteria->compare('jersey_image',$this->jersey_image,true);
		$criteria->compare('status',$this->status);
		$criteria->compare('udf1',$this->udf1,true);
		$criteria->compare('udf2',$this->udf2,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}