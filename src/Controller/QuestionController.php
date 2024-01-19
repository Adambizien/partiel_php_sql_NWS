<?php
namespace Adam\PartielPhpSqlNws\Controller;

use Adam\PartielPhpSqlNws\Controller\Database;
use PDO;

class QuestionController {
    private $db;
    
    public function __construct() {
        $this->db = new Database('Partiel_PHP_SQL_NWS');
    }
    
    public function addNewQuestion(string $question, string $answer, string $success_message, string $failure_message) {
        try {
            $this->db->table('Questions')->post(['post' => [ "QuestionText" => $question, "ExpectedAnswer" => $answer,"SuccessMessage"=> $success_message, "FailureMessage" => $failure_message ]])->do();
            return true;
        }catch(\Exception $e) { 
            return false;
        }
    }
    
    public function getQuestions(){
        $statement = $this->db->table('Questions')->get([])->do();
        $data = [];
        while ($line = $statement->fetch(PDO::FETCH_ASSOC)) {
            $data[] = $line;
        }
        return $data;
    }
    public function deleteQuestion(int $id){
        try {
            $this->db->table('Questions')->delete(['filters'=>['id'=>$id]],true)->do();
            return true;
        }catch(\Exception $e) {
            
            return false;
        }
    }

    public function getQuestion(int $id){
        $statement = $this->db->table('Questions')->get(['filters'=>['id'=>$id]])->do();
        $data = [];
        while ($line = $statement->fetch(PDO::FETCH_ASSOC)) {
            $data[] = $line;
        }
        return $data;
    }

    public function updateSuccessQuestion($id,$totalCount,$correctCount){
        try {
            $this->db->table('Questions')->update(['post' => ["CorrectAnswers" => $correctCount+1,"TotalAttempts"=>$totalCount+1],'filters'=>['id'=>$id]])->do();
            return true;
        }catch(\Exception $e) {
            return false;
        }

    }
    public function updateFailureQuestion($id,$totalCount){
        try {
            $this->db->table('Questions')->update(['post' => ["TotalAttempts"=>$totalCount+1],'filters'=>['id'=>$id]])->do();
            return true;
        }catch(\Exception $e) {
            return false;
        }

    }
    
}