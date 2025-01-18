<?php
use core\App ;
use core\Database ;
$db = App::resolve(Database::class);


$heading = "My Notes";


$notes = $db->query("SELECT * from notes where other_id = 1;")->fetchAll();


require "views/notes/index_view.php";


?>