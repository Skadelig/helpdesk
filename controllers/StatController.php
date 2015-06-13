<?php 
namespace app\controllers;
use Yii;
//use app\models\Employer;
//use app\models\EmployerSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

class StatController extends Controller
{
    // public function behaviors()
    // {
    //     return [
    //         'verbs' => [
    //             'class' => VerbFilter::className(),
    //             'actions' => [
    //                 'delete' => ['post'],
    //             ],
    //         ],
    //     ];
    // }

    /**
     * Lists all Employer models.
     * @return mixed
     */
    public function actionIndex()
    {
//         $searchModel = new StatSearch();
//         $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
echo "1234567";
        // return $this->render('index', [
        //     'searchModel' => $searchModel,
        //     'dataProvider' => $dataProvider,
        // ]);
    }
}
?>