<?php
namespace app\controllers;
use Yii;
use yii\web\controller;
use app\models\Test;
use app\models\YjUser;
use app\models\YjUserType;
use yii\data\Pagination;

use app\models\JobCity;
// use app\db\conditions\AllNotNullCondition;
// use app\db\conditions\AllGreaterCondition;

header("Content-type:text/html;charset=utf-8");
class TestController extends Controller{
	public function actionIndex($name='tojoki',$age='22'){
		$words='Hello,'.$name.'('.$age.')';
		return $this->render('index',array('words'=>$words));
	}

	public function actionTestForm(){
		$model=new Test;
		if($model->load(Yii::$app->request->post())){
			if($model->validate()){
				echo "验证通过<br>您输入的数据为".$model->name.'<br>'.$model->email.'<br>'.$model->age;
			}else{
				echo "验证失败";
			}
			die;
		}
		return $this->render('test-form',array('model'=>$model));
	}

	public function actionTestList(){
		$query = YjUser::find();

	    $pagination = new Pagination([
	        'defaultPageSize' => 5,
	        'totalCount' => $query->count(),
	    ]);

	    $countries = $query->orderBy('name')
	        ->offset($pagination->offset)
	        ->limit($pagination->limit)
	        ->all();
	    return $this->render('test-list', [
	        'countries' => $countries,
	        'pagination' => $pagination,
	    ]);
	}

	public function actionTestCode(){
		// $email=\Yii::$app->params['adminEmail'];
		// $email=\Yii::$app->params['aaa'];
		// echo $email;die;
		// $module = \Yii::$app->controller->module;
		// // var_dump($module->id);die;
		// $abc=\Yii::$app->user;
		// var_dump($abc);die;
		\Yii::$app->myfunctions->hello();
	}

	public function actionTest(){
		$model=YjUser::find();
		$query=$model->select('id')->orderBy('id desc');
		// $where=[
		// 	'and',
		// 	['not',['type'=>null]],
		// 	['not',['one_type'=>null]],
		// 	['not',['name'=>null]]
		// ];
		// $where=(new AllNotNullCondition(['type','name','one_type']));
		// $where=(new AllGreaterCondition(['type','name','one_type'],1));
		// $where=(['ALL>',['type','name','one_type'],1111]);
		$where=(['ALL NOT NULL',['type','name','one_type']]);
		$list=$query->where($where)->asArray()->all();
		// foreach($query->each() as $v){
		// 	echo "<pre>";
		// 	var_dump($v->toArray());
		// 	echo "</pre>";
		// }
		echo $model->createCommand()->getRawSql();
		dump($list);
	}

}