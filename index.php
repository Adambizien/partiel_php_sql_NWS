<?php

require 'vendor/autoload.php';
require_once './configs/bootstrap.php';
session_start();
ob_start();

$argumentGet = ["page", "layout","product","id","category"];

// if (isset($_SESSION['user_role']) && $_SESSION['user_role'] === 999) {
//     $argumentGet[] = "adminMod";
// }
$extraKeys = array_diff(array_keys($_GET), $argumentGet);
if (!empty($extraKeys)) {
    header('Location: ./?page=accueil&layout=html');
    exit;
}
if(isset($_GET["page"]) ){
    if(frompage($_GET['page']) === false){
        header('Location: ./?page=accueil&layout=html');
        exit;
    };
}else{
    header('Location: ./?page=accueil&layout=html');
    exit;
}







$pageContent = [
    "html" => ob_get_clean(),
];

if(isset($_GET["layout"])){
    include "./templates/layouts/". $_GET["layout"] .".layout.php";

}else{
    include "./templates/layouts/html.layout.php";
}


