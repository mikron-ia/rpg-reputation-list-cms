<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "event".
 *
 * @property string $event_id
 * @property string $key
 * @property string $time
 * @property string $name
 * @property string $description
 *
 * @property ReputationEvent[] $reputationEvents
 */
class Event extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'event';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['key', 'name'], 'required'],
            [['description'], 'string'],
            [['key', 'name'], 'string', 'max' => 80],
            [['time'], 'string', 'max' => 40]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'event_id' => 'Event ID',
            'key' => 'Key',
            'time' => 'Time',
            'name' => 'Name',
            'description' => 'Description',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getReputationEvents()
    {
        return $this->hasMany(ReputationEvent::className(), ['event_id' => 'event_id']);
    }
}
