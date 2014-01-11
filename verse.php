<?php 
	include_once("config.php");
	include_once("BibleDAO.php");

	$max_verse = BibleDAO::getMaxVerseNumber($_GET['book_id'], $_GET['chapter_number']);

	echo json_encode(
			array('max_chapter'=> $max_chapter,
				'max_verse'=> $max_verse
				)
		);

 ?>