<?php
$heading = "Note";
use core\App ;
use core\Database ;


$db = App::resolve(Database::class);


$userID = 1;



$note = $db->query("SELECT * from notes where id = :id ", [
  'id' => $_GET['id'],
])->findOrFail();

authorize($note['other_id'] == $userID);



require "views/notes/show_view.php";
