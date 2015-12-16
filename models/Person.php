<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "person".
 *
 * @property string $person_id
 * @property string $key
 * @property string $name
 * @property string $description
 *
 * @property ReputationEvent[] $reputationEvents
 */
class Person extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'person';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['key', 'name'], 'required'],
            [['description'], 'string'],
            [['key', 'name'], 'string', 'max' => 80]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'person_id' => 'Person ID',
            'key' => 'Key',
            'name' => 'Person\'s name',
            'description' => 'Description',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getReputationEvents()
    {
        return $this->hasMany(ReputationEvent::className(), ['person_id' => 'person_id']);
    }
}
