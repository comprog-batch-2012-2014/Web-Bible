<?php 
	include_once("config.php");
	class bibleDAO{
		public static function search($user_searching){
			$query = "SELECT id, book_name, chapter_number, verse_number, verse_text FROM kjv_english join books WHERE verse_text LIKE '%$user_searching%' and book_id = id";
			$result = mysql_query($query);
			if(mysql_num_rows($result) > 0){
				$row = array();
				while($catch = mysql_fetch_assoc($result)){
					$row[] = $catch;
				}
				return $row;
			}else{
				return null;
			}
		}

		public static function getAllBooks(){
			$query = "SELECT Book_name, id From books";
			$result = mysql_query($query);
			$books = array();
			for($i = 1; $i <= 66; $i++){
				$row = mysql_fetch_assoc($result);
				$books[$i] = $row['Book_name'];
			}
			return $books;
		}

		public static function getBook($book_id){
			$query = "SELECT Book_name FROM books WHERE id = {$book_id}";
			$result = mysql_query($query);
			return mysql_result($result, null);
		}

		public static function getMAXChapterNumber($book_id){
			$query = "SELECT Max(chapter_number) FROM kjv_english WHERE book_id = {$book_id}";
			$result = mysql_query($query);
			return mysql_result($result, null);
		}

		public static function getMaxVerseNumber($book_id, $chapter_number){
			$query = "SELECT MAX(verse_number) FROM kjv_english WHERE book_id = {$book_id} and chapter_number = {$chapter_number}";
			$result = mysql_query($query);
			return mysql_result($result, null);
		}

		public static function getVerseText($book_id, $chapter_number, $verse_number){
			$query = "SELECT verse_text FROM kjv_english WHERE book_id = {$book_id} and chapter_number = {$chapter_number} and verse_number = {$verse_number}";
			$result = mysql_query($query);
			return mysql_result($result, null);
		}
	}



 ?>