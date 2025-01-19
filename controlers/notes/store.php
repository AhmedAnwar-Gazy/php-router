<?php
$heading = "Create Notes";



use core\App ;
use core\Database;

$db = App::resolve(Database::class);



$errors = [];

if (!(Validator::string($_POST['titel'], 1, 255))) {
    $errors["titel"] = "Titel  is too short or too long";
}
if (!(Validator::string($_POST['body'], 1, 1000))) {
    $errors["titel"] = " body is too short or long";
}


if (! empty($errors)) {

    require "views/notes/create_view.php";
    die();
}


$db->query("INSERT INTO notes (other_id,titel,body) VALUES (:other_id,:titel,:body)", [
    'titel' => $_POST['titel'],
    'body' => $_POST['body'],
    'other_id' => 1,
]);

header("Location: /notes");
die();


