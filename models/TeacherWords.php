<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "web_teacher_words".
 *
 * @property int $id
 * @property string $name 姓名
 * @property string $cover 头像
 * @property string $position 职称
 * @property string $intro 证言
 * @property int $sortorder
 * @property int $ctime
 * @property int $is_del
 */
class TeacherWords extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'web_teacher_words';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['intro'], 'string'],
            [['sortorder', 'ctime'], 'integer'],
            [['name'], 'string', 'max' => 20],
            [['cover'], 'string', 'max' => 255],
            [['position'], 'string', 'max' => 50],
            [['is_del'], 'string', 'max' => 1],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'cover' => 'Cover',
            'position' => 'Position',
            'intro' => 'Intro',
            'sortorder' => 'Sortorder',
            'ctime' => 'Ctime',
            'is_del' => 'Is Del',
        ];
    }
}
