<?php

$heading = "update Notes";

require 'core\\' . "Validator.php";

use core\App ;
use core\Database;

$db = App::resolve(Database::class);



$userID = 1;



$note = $db->query("SELECT * from notes where id = :id ", [
  'id' => $_POST['id'],
])->findOrFail();

authorize($note['other_id'] == $userID);




$errors = [];

if (!(Validator::string($_POST['titel'], 1, 255))) {
    $errors["titel"] = "Titel  is too short or too long";
}
if (!(Validator::string($_POST['body'], 1, 1000))) {
    $errors["titel"] = " body is too short or long";
}


if (! empty($errors)) {
  
    require "views/notes/edit_view.php";
    die();
}
 

$db->query("UPDATE notes set titel = :titel , body = :body WHERE id = :id " , [
    'titel' => $_POST['titel'],
    'body' => $_POST['body'],
    'id' =>  $_POST['id']
]);



header("Location: /notes");
die();


