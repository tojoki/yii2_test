<?php
namespace app\models;
use yii\db\ActiveRecord;
class YjUserType extends ActiveRecord{
    public static function tableName(){
        return '{{%web_yj_user_type}}';//写你表名就是了{{%XXX}}是用表前辍，没有设置可以直接写表名比如 “info”
    }

    public function getUsers(){
    	// $lists=$this->hasMany(YjUser::className(),array('type'=>'id'))->asArray()->all();
    	$lists=$this->hasMany(YjUser::className(),array('type'=>'id'))->asArray();
    	return $lists;
    }
}