<?php
namespace app\models;
use yii\db\ActiveRecord;
class YjUser extends ActiveRecord{
    public static function tableName(){
        return '{{%web_yj_user}}';//写你表名就是了{{%XXX}}是用表前辍，没有设置可以直接写表名比如 “info”
    }

    public function getUserType(){
    	$info=$this->hasOne(YjUserType::className(),array('id'=>'type'))->asArray()->one();
    	return $info;
    }
}