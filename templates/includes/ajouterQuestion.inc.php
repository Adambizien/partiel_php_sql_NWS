<?php
    use Adam\PartielPhpSqlNws\Controller\QuestionController;
    if(isset($_POST['submit'])){
        $addNewQuestion = new QuestionController();
        if($addNewQuestion->addNewQuestion($_POST['question'],$_POST['answer'],$_POST['success_message'],$_POST['failure_message'])){
            header('Location: ./?page=accueil&layout=html');
            exit;
        }
    }