<?php 
namespace app\controllers;
use Yii;
//use app\models\Employer;
//use app\models\EmployerSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\models\EmployerStats;
use kartik\mpdf\Pdf;

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

    public function actionReport() {
    // get your HTML raw content without any layouts or scripts
           $model = new EmployerStats();
    $model->findStatsdone();   
    $content = $this->renderPartial('done', ['model'=>$model]);

    // setup kartik\mpdf\Pdf component
    $pdf = new Pdf([
        // set to use core fonts only
        'mode' => Pdf::MODE_CORE, 
        // A4 paper format
        'format' => Pdf::FORMAT_A4, 
        // portrait orientation
        'orientation' => Pdf::ORIENT_PORTRAIT, 
        // stream to browser inline
        'destination' => Pdf::DEST_BROWSER, 
        // your html content input
        'content' => $content,  
        // format content from your own css file if needed or use the
        // enhanced bootstrap css built by Krajee for mPDF formatting 
        'cssFile' => '@vendor/kartik-v/yii2-mpdf/assets/kv-mpdf-bootstrap.min.css',
        // any css to be embedded if required
        'cssInline' => '.kv-heading-1{font-size:18px}', 
         // set mPDF properties on the fly
        'options' => ['title' => 'Krajee Report Title'],
         // call mPDF methods on the fly
        'methods' => [ 
            'SetHeader'=>['Rep0rt'], 
            'SetFooter'=>['{PAGENO}'],
        ]
    ]);
    $p = $pdf->render();
    $len = strlen($p);
    Yii::$app->response->format = \yii\web\Response::FORMAT_RAW;
    $headers = Yii::$app->response->headers;
    $headers->add('Content-Type', 'application/pdf');
        // return the pdf output as per the destination setting
        return $p; 
    }
}
?>