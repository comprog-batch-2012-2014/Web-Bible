<?php 
	class Bible{
		private $_bible_book;
		private $_bible_book_id;
		private $_bible_chapter_number;
		private $_bible_verse_number;
		private $_bible_verse_text;

		public function __construct($config){
			if(!is_null($config['BookName'])){
				$this->_bible_book = $config['BookName'];
			}
			if(!is_null($config['book_id'])){
				$this->_bible_book_id = $config['book_id'];
			}
			if(!is_null($config['chapter_number'])){
				$this->_bible_chapter_number = $config['chapter_number'];
			}
			if(!is_null($config['verse_number'])){
				$this->_bible_verse_number = $config['verse_number'];
			}
			if(!is_null($config['verse_text'])){
				$this->_bible_verse_text = $config['verse_text'];
			}
		}

		public function getBook(){
			return $this->_bible_book;
		}

		public function getBookId(){
			return $this->_bible_book_id;
		}

		public function getChapterNumber(){
			return $this->_bible_chapter_number;
		}

		public function getVerseNumber(){
			return $this->_bible_verse_number;
		}

		public function getVerseText(){
			return $this->_bible_verse_text;
		}

		public function setBook($book){
			$this->_bible_book = $book;
		}

		public function setBookId($book_id){
			$this->_bible_book_id = $book_id;
		}

		public function setChapterNumber($chapter_number){
			$this->_bible_chapter_number = $chapter_number;
		}

		public function setVerseNumber($verse_number){
			$this->_bible_verse_number = $verse_number;
		}

		public function setVerseText($verse_text){
			$this->_bible_verse_text = $verse_text;
		}

	}



 ?>