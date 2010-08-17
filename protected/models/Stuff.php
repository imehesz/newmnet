<?php

/**
 * This is the model class for table "stuff".
 *
 * The followings are the available columns in table 'stuff':
 * @property integer $deleted
 * @property string $description
 * @property string $extlink
 * @property integer $id
 * @property integer $inblock
 * @property string $name
 * @property integer $weight
 */
class Stuff extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Stuff the static model class
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
		return 'stuff';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
            array( 'name', 'required' ),
			array('deleted, inblock, weight', 'numerical', 'integerOnly'=>true),
			array('extlink', 'length', 'max'=>240),
			array('name', 'length', 'max'=>50),
			array('description', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('deleted, description, extlink, id, inblock, name, weight', 'safe', 'on'=>'search'),
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
			'deleted' => 'Deleted',
			'description' => 'Description',
			'extlink' => 'Extlink',
			'id' => 'Id',
			'inblock' => 'Inblock',
			'name' => 'Name',
			'weight' => 'Weight',
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

		$criteria->compare('deleted',$this->deleted);

		$criteria->compare('description',$this->description,true);

		$criteria->compare('extlink',$this->extlink,true);

		$criteria->compare('id',$this->id);

		$criteria->compare('inblock',$this->inblock);

		$criteria->compare('name',$this->name,true);

		$criteria->compare('weight',$this->weight);

		return new CActiveDataProvider('Stuff', array(
			'criteria'=>$criteria,
		));
	}
}
