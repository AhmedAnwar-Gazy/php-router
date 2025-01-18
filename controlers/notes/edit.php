<?php
$heading = "Edit Notes";

use core\App ;
use core\Database ;


$db = App::resolve(Database::class);


$userID = 1;



$note = $db->query("SELECT * from notes where id = :id ", [
  'id' => $_GET['id'],
])->findOrFail();

authorize($note['other_id'] == $userID);






require "views/notes/edit_view.php";
