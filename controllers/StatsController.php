<?php 
namespace app\controllers;
use Yii;
//use app\models\Employer;
//use app\models\EmployerSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

class StatsController extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all Employer models.
     * @return mixed
     */
    public function actionIndex()
    {   

         return $this->render('index');
    }
}
?>