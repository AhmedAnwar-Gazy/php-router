<?php
$heading = "Note";
use core\App ;
use core\Database ;

$db = App::resolve(Database::class);

$userID = 1;
 

$note = $db->query("SELECT * from notes where id = :id ", [
  'id' => $_POST['id'],
])->findOrFail();

authorize($note['other_id'] == $userID);

$db->query("DELETE FROM notes where id = :id", [
  'id' => $_POST['id'],
]);
header("Location: /notes");
exit();


//require "views/notes/show_view.php";
