<?php

/**
 * This is the model class for table "{{players_profile}}".
 *
 * The followings are the available columns in table '{{players_profile}}':
 * @property integer $id
 * @property string $players_name
 * @property integer $team_id
 * @property string $position
 * @property double $curr_price
 * @property string $curr_status
 * @property integer $total_goals
 * @property integer $total_appearance
 * @property double $curr_avg_rating
 * @property string $player_key
 * @property integer $status
 * @property double $curr_profit_pct
 * @property integer $curr_profit
 * @property string $description
 */
class PlayersProfile extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return PlayersProfile the static model class
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
		return '{{players_profile}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('players_name, team_id, position, status', 'required'),
			array('team_id, total_goals, total_appearance, status, curr_profit', 'numerical', 'integerOnly'=>true),
			array('curr_price, curr_avg_rating, curr_profit_pct', 'numerical'),
			array('players_name', 'length', 'max'=>250),
			array('position, curr_status', 'length', 'max'=>50),
			array('player_key', 'length', 'max'=>20),
			array('description', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, players_name, team_id, position, curr_price, curr_status, total_goals, total_appearance, curr_avg_rating, player_key, status, curr_profit_pct, curr_profit, description', 'safe', 'on'=>'search'),
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
			'players_name' => 'Players Name',
			'team_id' => 'Team',
			'position' => 'Position',
			'curr_price' => 'Curr Price',
			'curr_status' => 'Curr Status',
			'total_goals' => 'Total Goals',
			'total_appearance' => 'Total Appearance',
			'curr_avg_rating' => 'Curr Avg Rating',
			'player_key' => 'Player Key',
			'status' => 'Status',
			'curr_profit_pct' => 'Curr Profit Pct',
			'curr_profit' => 'Curr Profit',
			'description' => 'Description',
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
		$criteria->compare('players_name',$this->players_name,true);
		$criteria->compare('team_id',$this->team_id);
		$criteria->compare('position',$this->position,true);
		$criteria->compare('curr_price',$this->curr_price);
		$criteria->compare('curr_status',$this->curr_status,true);
		$criteria->compare('total_goals',$this->total_goals);
		$criteria->compare('total_appearance',$this->total_appearance);
		$criteria->compare('curr_avg_rating',$this->curr_avg_rating);
		$criteria->compare('player_key',$this->player_key,true);
		$criteria->compare('status',$this->status);
		$criteria->compare('curr_profit_pct',$this->curr_profit_pct);
		$criteria->compare('curr_profit',$this->curr_profit);
		$criteria->compare('description',$this->description,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}