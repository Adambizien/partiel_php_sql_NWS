
<?php
fromInc('ajouterQuestion');
$labels = ['Question:', 'Réponse attendue:', 'Message de succès:', 'Message de mauvaise réponse:'];
$inputs = [
    ['id' => 'question', 'name' => 'question', 'type' => 'text', 'placeholder' => 'Entrez votre question',  'required' => true],
    ['id' => 'answer', 'name' => 'answer', 'type' => 'text', 'placeholder' => 'Entrez la réponse attendue',  'required' => true],
    ['id' => 'success_message', 'name' => 'success_message', 'type' => 'text', 'placeholder' => 'Entrez le message de succès',  'required' => true],
    ['id' => 'failure_message', 'name' => 'failure_message', 'type' => 'text', 'placeholder' => 'Entrez le message de mauvaise réponse',  'required' => true]
];

fromTool('formulaire');

buildForm('Ajouter une question',$labels, $inputs,'Soumettre','POST','#');