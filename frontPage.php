<html>
	<head>
		<title>Bible</title>
		<link rel="stylesheet" type="text/css" href="css/rodrigo_style.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	</head>
	<body>
		<?php 
			include_once("config.php");
			include_once("BibleDAO.php");

			$books = BibleDAO::getAllBooks();
			$chapter = BibleDAO::getMaxChapterNumber(1);
			$verse = BibleDAO::getMaxVerseNumber(1,1);
			$verse_text = BibleDAO::getVerseText(1,1,1);
		 ?>
			<div id = "top-border">
				<input type = "search" class= "search-query" id = "textbox-for-search" placeholder = "Search . . ." style = "margin: 10px"/>
				<button id = "btn-for-search"><div class = "icon-search"></div></button>
			</div>

			<div id = "middle-border">
				<b id = "book">Books</b>
				<b id = "chapter">Chapters</b>
				<b id = "verse">Verses</b>
				<select id = "select-for-book">
					<?php for($i = 1; $i <= 66; $i++): ?>
						<option id = "option-value-for-book" value = "<?= $i; ?>"><?= $books[$i]; ?></option>
					<?php endfor; ?>
				</select>
				<select id = "select-for-chapter">
					<?php for($i = 1; $i <= $chapter; $i++): ?>
						<option id = "option-value-for-chapter" value = "<?= $i; ?>"><?= $i; ?></option>
					<?php endfor; ?>
				</select>
				<select id = "select-for-verse">
					<?php for($i = 1; $i <= $verse; $i++): ?>
						<option id = "option-value-for-verse" value = "<?= $i; ?>"><?= $i; ?></option>
					<?php endfor; ?>
				</select>
			</div>

			<div id = "bottom-border">
				<div id = "result">
					<?= $books[1]; ?>
					<?= 1; ?>
					<?= 1; ?>
					<?= $verse_text; ?>
				</div>
				
			</div>

		<script type="text/javascript" src = "js/jquery-1.8.3.js"></script>
		<script type="text/javascript" src = "js/bootstrap.js"></script>
		<script type="text/javascript" src = "js/rodrigo_js.js"></script>
	</body>
</html>