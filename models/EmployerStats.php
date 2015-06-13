<?php 
namespace app\models;

use app\models\Users;
use app\models\Employer;
use Yii;
use yii\base\Model;
class EmployerStats extends Model
{
	public $id;
	public $username;
    public $done;
    public $inwork;
    public $thismounth;

    public function attributeLabels()
    {
        return [
            'done' => 'Выполнено',
            'inwork' => 'В работе',
            'thismounth' => 'В этом месяце',
        ];
    }
    public function findAll($id)
    {
    	$this->id = $id;
    	$employer = $this->getEmployer($id);
    	$this->done = $this->getDone($id);
    	$this->inwork = $this->getInwork($id);
    	$this->thismounth = $this->getThismounth($id);
    	$this->username = $employer->Employer_name.' '.$employer->Employer_surname;
    }
    public function getEmployer($id)
    {
    	return Employer::findOne(['Employer_ID' => $id]);
    }
    public function getDone($id){
    	$userid = $this->getEmployer($id)->Users_id;
    	$query = Requests::find()->select('COUNT(*)')
    		->filterWhere(['Users_id' => $userid])
    	 		->andFilterWhere(['>', 'Request_FacticalDateEnding', date('Y-m-d h:m:s')])	
            	;
    	return $id;
    }

    public function getInwork($id){
    	$userid = $this->getEmployer($id)->Users_id;
    	$query = Requests::find()
    		->filterWhere(['Users_id' => $userid,
						'Executionstatus'=>'1'
    			])
    	 		->andWhere(['<', 'Request_FacticalDateEnding', date('Y-m-d h:m:s')])
            		->andWhere(['Request_FacticalDateEnding' => null])		
            			->count()
            	;
    	return $id;
    }
    public function getThismounth($id){
    	$userid = $this->getEmployer($id)->Users_id;
    	$query = Requests::find()
    		->filterWhere(['Users_id' => $userid,
						
    			])
    	 		->andWhere(['<', 'Request_date', '2015-6-1 00:00:00'])
    	 		->andWhere(['>', 'Request_date', '2015-6-31 23:59:59'])
            		
            			->count()
            	;
    	return $id;
    }

}
?>