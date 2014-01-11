<?php 
	include_once("config.php");
	include_once("BibleDAO.php");	

	$book_name = BibleDAO::getBook($_GET['book_id']);
	$chapter = BibleDAO::getMaxChapterNumber($_GET['book_id']);
	$verse = BibleDAO::getMaxVerseNumber($_GET['book_id'], $_GET['chapter_number']);
	$verse_text = BibleDAO::getVerseText($_GET['book_id'], $_GET['chapter_number'], $_GET['verse_number']);

	echo json_encode(
			array(
				'book_name'=> $book_name,
				'chapter_number'=> $chapter,
				'verse_number'=> $verse,
				'verse_text'=> $verse_text
				)
		);
 ?>