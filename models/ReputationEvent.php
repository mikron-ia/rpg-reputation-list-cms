<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "reputation_event".
 *
 * @property string $reputation_event_id
 * @property string $rep_network_code
 * @property integer $change
 * @property string $event_id
 * @property string $person_id
 *
 * @property Event $event
 * @property Person $person
 */
class ReputationEvent extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'reputation_event';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['rep_network_code', 'person_id'], 'required'],
            [['change', 'event_id', 'person_id'], 'integer'],
            [['rep_network_code'], 'string', 'max' => 16]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'reputation_event_id' => 'Reputation Event ID',
            'rep_network_code' => 'Rep Network Code',
            'change' => 'Change',
            'event_id' => 'Event ID',
            'person_id' => 'Person ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEvent()
    {
        return $this->hasOne(Event::className(), ['event_id' => 'event_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPerson()
    {
        return $this->hasOne(Person::className(), ['person_id' => 'person_id']);
    }
}
