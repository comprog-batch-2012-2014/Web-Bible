<?php 
	include_once("config.php");
	include_once("BibleDAO.php");

	$results = BibleDAO::search($_POST['user_searching']);
	foreach($results as $row){
		echo $row['book_name'] .  $row['chapter_number'] . ":" . $row['verse_number'] . "<br/>" . $row['verse_text'] . "<br/>";
	}
	
 ?>
 