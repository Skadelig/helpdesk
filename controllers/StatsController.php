<?php 
namespace app\controllers;
use Yii;
//use app\models\Employer;
//use app\models\EmployerSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\models\EmployerStats;
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
         $model = new EmployerStats();
         $model->findStatsall();
         return $this->render('index',['model'=>$model]);
    }
    public function actionDone()
    {
         $model = new EmployerStats();
         $model->findStatsdone();
         return $this->render('done',['model'=>$model]);
    }
    public function actionThismonth()
    {
         $model = new EmployerStats();
         $model->findStatsmounth();
         return $this->render('thismonth',['model'=>$model]);
    }
    public function actionInwork()
    {
         $model = new EmployerStats();
         $model->findStatsdone();
         return $this->render('inwork',['model'=>$model]);
    }
    public function actionReddate()
    {
        $model = new EmployerStats(); 
        $model->findStatsreddate(); 
        return $this->render('reddate',['model'=>$model]);
    }
}
?>