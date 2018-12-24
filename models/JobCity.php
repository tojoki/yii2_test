<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "web_job_city".
 *
 * @property int $id
 * @property int $pid
 * @property string $name
 * @property string $note
 * @property int $createtime
 */
class JobCity extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'web_job_city';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['pid', 'createtime'], 'integer'],
            [['note'], 'required'],
            [['name'], 'string', 'max' => 30],
            [['note'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'pid' => 'Pid',
            'name' => 'Name',
            'note' => 'Note',
            'createtime' => 'Createtime',
        ];
    }
}
