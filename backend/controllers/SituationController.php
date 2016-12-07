<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use backend\models\Situation;

/**
 * Site controller
 */
class SituationController extends Controller
{

	public function beforeAction($action){

		return true;
	}

	public function actionAddSituation(){
		$tag = $_POST["tag"];
		$type = $_POST["type"];
		$content = $_POST["content"];
		$sit = new Situation;
		$sit->tag = $tag;
		$sit->type = $type;
		$sit->content = $content;
		if($sit->save()){
			$this->redirect(\Yii::$app->urlManager->createUrl("situation/show-all"));
		}
		else{
			echo $sit->getErrors();
		}
	}

	public function actionShowAddSituation(){
		return $this->render("show-add-situation");
	}

	public function actionShowAll(){
		echo "fkdlfldfdf";
	}


}