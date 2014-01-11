<?php 
	include_once("config.php");
	include_once("BibleDAO.php");	

	$max_chapter = BibleDAO::getMaxChapterNumber($_GET['book_id']);

	echo json_encode(
			array('max_chapter'=> $max_chapter
				)
		);
 ?>