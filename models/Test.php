<?php
namespace app\models;
use Yii;
use yii\base\Model;
class Test extends Model{
    public $name;
    public $email;
    public $age;
    // rules方法用来返回数据验证规则的集合
    public function rules(){
        return [
            [['name', 'email','age'], 'required'],//表示name和email字段是必填的
            ['email', 'email'],//表示email字段是邮箱类型的字段
            ['age','integer']
        ];
    }
}