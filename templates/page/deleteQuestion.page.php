<?php

use Adam\PartielPhpSqlNws\Controller\QuestionController;

$questionController = new QuestionController();

$question = $questionController->deleteQuestion($_GET['id']);
header('Location: ./?page=accueil&layout=html');