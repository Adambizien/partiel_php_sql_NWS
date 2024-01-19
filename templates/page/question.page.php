<?php

use Adam\PartielPhpSqlNws\Controller\QuestionController;

$questionController = new QuestionController();
$question = $questionController->getQuestion($_GET['id']);
$status = true;

if(isset($_POST['reponse'])){
    if($_POST['reponse'] == $question[0]['ExpectedAnswer']){
        echo '<div class="alert alert-success" role="alert">
        '.$question[0]['SuccessMessage'].'
      </div>';
      $status = false;
        $questionController->updateSuccessQuestion($_GET['id'],$question[0]['TotalAttempts'],$question[0]['CorrectAnswers']);
    }else{
        echo '<div class="alert alert-danger" role="alert">
        '.$question[0]['FailureMessage'].'
      </div>';
      $questionController->updateFailureQuestion($_GET['id'],$question[0]['TotalAttempts']);
      $question = $questionController->getQuestion($_GET['id']);
    }
}
if($question[0]['TotalAttempts'] == 0){
    $winrate = 0;
}else{ 
    $winrate = round(($question[0]['CorrectAnswers'] / $question[0]['TotalAttempts'])*100);
}
?>
<?php if($status): ?>
<div class="container mt-5">
    <h2>Une question à <?php echo $winrate  ?> %  de réussite</h2>

    <form method="post">
        <div class="form-group">
            <label for="nomUtilisateur">Question :</label>
            <p><?php echo $question[0]['QuestionText'] ?></p>
        </div>
        <div class="form-group">
            <label for="reponse">Réponse à la question :</label>
            <input type="text" class="form-control" id="reponse" placeholder="Entrez votre réponse" name="reponse">
        </div>

        <button type="submit" class="btn btn-primary">Envoyer la Réponse</button>
    </form>
</div>
<?php endif; ?>


