
<?php

use Adam\PartielPhpSqlNws\Controller\QuestionController;
$questionController = new QuestionController();
$questions = $questionController->getQuestions();
$columns = ['Question', 'Réponse', 'Message de succès', 'Message d\'échec','% de réussite','lien de question'];
$actions = [
    ['url' => 'delete.php', 'icon' => 'fa fa-trash'],
];
$data = [];
foreach($questions as $question){
    if($question['TotalAttempts'] == 0){
        $winrate = 0;
    }else{
        $winrate = ($question['CorrectAnswers'] / $question['TotalAttempts'])*100;
    }
    $data[] = [
        'Question' => $question['QuestionText'],
        'Réponse' => $question['ExpectedAnswer'],
        'Message de succès' => $question['SuccessMessage'],
        'Message d\'échec' => $question['FailureMessage'],
        '% de réussite' => $winrate.'%',
        'lien de question' => '<a href="./?page=question&layout=html&id='.$question['id'].'">lien</a>',
        'action'=> false,
        'delete'=> [
            'url' => './?page=deleteQuestion&layout=html&id='.$question['id'],
        ],
    ];
}
$tri = isset($_POST['tri']) ? $_POST['tri'] : 'croissant';

usort($data, function ($a, $b) use ($tri) {
    if ($tri === 'decroissant') {
        return strcmp($b['% de réussite'], $a['% de réussite']);
    } else {
        return strcmp($a['% de réussite'], $b['% de réussite']);
    }
});
fromTool('table');
generateTable($data, $columns, $actions);
 