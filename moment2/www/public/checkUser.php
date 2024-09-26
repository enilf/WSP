<?php
header('Content-type:text/plain; charset=utf-8');
if (!isset($_POST['name'])) {
    header("location: index.php");
    exit;
}

include ('inc/users.php');

$usr = $_POST['name'];
$pwd = $_POST['password'];

for($i = 0; $i < count($userArray); $i++){
    if($usr == $userArray[$i]["name"] && $pwd == $userArray[$i]["password"]){
        header("location: userPage.php?name" . $userArray[$i]["name"]);
        exit;
    }
}

header("location: index.html");
