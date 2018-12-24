<?php
namespace app\components;
use Yii;
use yii\base\Component;
use yii\base\InvalidConfigException;

class HelpComponent extends Component {
    public function hello(){
        echo "hello world test";
    }
} 
?>