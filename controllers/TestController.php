<?php
namespace app\controllers;
use Yii;
use yii\web\controller;
use app\models\Test;
use app\models\YjUser;
use app\models\YjUserType;
use yii\data\Pagination;

use app\models\JobCity;

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
		// $gender=\Yii::$app->request->get('gender');
		// $is_del=\Yii::$app->request->get('is_del');
		// // $sql="select * from web_test where gender=:gender and is_del=:is_del";
		// // $result=YjUser::findBySql($sql,array(':gender'=>$gender,':is_del'=>$is_del))->all();
		// // $result=YjUser::find()->where(array('like','name','少'))->all();
		// // $result=YjUser::findAll(array(1,2,3));
		// // $result=YjUser::find()->asArray()->where(array('like','name','少'))->one();
		// foreach(YjUser::find()->batch(50) as $v){
		// 	$result[]=$v;
		// }
		// dump($result);
		// return $this->render('test',compact('result'));

		// $model=new JobCity();
		// $model->pid=0;
		// $model->name='hahaha';
		// $model->note='22';
		// $model->createtime=1000001;
		// $add=$model->save();
		// if(!$add){
		// 	var_dump($model->getErrors());
		// }else{
		// 	echo $model->attributes['id'];
		// }
		// $info=JobCity::findOne(88);
	 //    $info->name='aaa';
	 //    // $info->note=1;
	 //    $edit=$info->update();
	 //    // dump($edit);
	 //    if($edit===false){
	 //        dump($info->getErrors());
	 //    }
		// $set=JobCity::updateAllCounters(array('pid'=>-1,'note'=>2),array('id'=>88));
		// dump($set);
		// $cate=YjUserType::findOne(2);
		// // $list=$cate->hasMany(YjUser::className(),array('type'=>'id'))->where(array('like','name','导'))->all();
		// // $lists=$cate->getUsers();
		// $lists=$cate->users;
		// dump($lists);

		// $user=YjUser::findOne();
  //   	// $info=$user->hasOne('app\models\YjUserType',array('id'=>'type'))->asArray()->one();
  //   	$info=$user->hasOne(YjUserType::className(),array('id'=>'type'))->asArray()->one();
  //   	dump($info);
		// $user=YjUser::findOne(1);
  //   	$info=$user->userType;
  //   	dump($info);
  //   	die;

		$cate=YjUser::find()->with('UserType')->asArray()->all();
		dump($cate);
	}
}