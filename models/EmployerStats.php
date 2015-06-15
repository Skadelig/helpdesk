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
    public $reddate; 
    private $employer_id;
    public function attributeLabels()
    {
        return [
            'done' => 'Выполнено',
            'inwork' => 'В работе',
            'thismounth' => 'В этом месяце',
            'reddate' => 'Просроченно',
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
        $this->reddate = $this->getReddate();
    	$this->username = $employer->Employer_name.' '.$employer->Employer_surname;
    }
    public function findStatsall()
    {
       
    
        $this->done = $this->getDone();
        $this->inwork = $this->getInwork();
        $this->thismounth = $this->getThismounth();
        $this->reddate = $this->getReddate(); 
       
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
    public function getReddate(){
       $query=Requests::find()
        ->filterWhere(['Users_id' => $this->employer_id])
        ->andWhere(['>', 'Request_FacticalDateEnding', 'Request_DataEnding'])

        ->count()
        ;
        return $query; 
    }

    public function findStatsdone(){
                $query = Requests::find()
        // ->select('COUNT(*)')
            ->filterWhere(['Users_id' => $this->employer_id])
                ->andFilterWhere(['<', 'Request_FacticalDateEnding', date('Y-m-d h:m:s')])->all()
                ;
               
        return $query;
    }
     public function findStatsinwork(){
        $query = Requests::find()
            ->where(['<', 'Request_FacticalDateEnding', date('Y-m-d h:m:s')] )
            ->andFilterWhere(['Users_id' => $this->employer_id,
                        'Executionstatus'=>'1'])
                    ->orFilterWhere(['Request_FacticalDateEnding' => null,
                         'Users_id' => $this->employer_id,
                        'Executionstatus'=>1
                
                        ])      
                        ->all()
                ;
               
        return $query;
     }
     public function findStatsreddate(){
        $query=Requests::find()
        ->filterWhere(['Users_id' => $this->employer_id])
        ->andFilterWhere(['>', 'Request_FacticalDateEnding', 'Request_DataEnding'])
        ->all()
        ;
     }
      public function findStatsmounth(){
        
        $query = Requests::find()
            ->filterWhere(['Users_id' => $this->employer_id,
                        
                ])
                ->andWhere(['>', 'Request_date', '2015-6-1 00:00:00'])
                ->andWhere(['<', 'Request_date', '2015-6-31 23:59:59'])
                    
                        ->all()

                ; 

        return $query;
    }
}
?>