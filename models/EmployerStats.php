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

    private $employer_id;
    public function attributeLabels()
    {
        return [
            'done' => 'Выполнено',
            'inwork' => 'В работе',
            'thismounth' => 'В этом месяце',
        ];
    }
    public function findStatsuser($id)
    {
    	$this->id = $id;
    	$employer = $this->getEmployer($this->id);
        $this->employer_id = $employer->Employer_ID;
    	$this->done = $this->getDone();
    	$this->inwork = $this->getInwork();
    	$this->thismounth = $this->getThismounth();
    	$this->username = $employer->Employer_name.' '.$employer->Employer_surname;
    }
    public function findStatsall()
    {
       
    
        $this->done = $this->getDone();
        $this->inwork = $this->getInwork();
        $this->thismounth = $this->getThismounth();
       
    }
    public function getEmployer($id)
    {
    	return Employer::findOne(['Employer_ID' => $id]);
    }
    public function getDone(){
    	
    	$query = Requests::find()
        // ->select('COUNT(*)')
    		->filterWhere(['Users_id' => $this->employer_id])
    	 		->andFilterWhere(['<', 'Request_FacticalDateEnding', date('Y-m-d h:m:s')])->count()	
            	;
               
    	return $query;
    }

    public function getInwork(){
    	
    	$query = Requests::find()
    		->where(['<', 'Request_FacticalDateEnding', date('Y-m-d h:m:s')] )
            ->andFilterWhere(['Users_id' => $this->employer_id,
                        'Executionstatus'=>'1'])
            		->orFilterWhere(['Request_FacticalDateEnding' => null,
                         'Users_id' => $this->employer_id,
                        'Executionstatus'=>1
                
                        ])		
            			->count()
            	;
               
    	return $query;
    }
    public function getThismounth(){
    	
    	$query = Requests::find()
    		->filterWhere(['Users_id' => $this->employer_id,
						
    			])
    	 		->andWhere(['>', 'Request_date', '2015-6-1 00:00:00'])
    	 		->andWhere(['<', 'Request_date', '2015-6-31 23:59:59'])
            		
            			->count()

            	; 

    	return $query;
    }

}
?>