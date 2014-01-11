$(document).ready(function(){
	$("#select-for-book").on("change", function(){
		$.ajax({
			url: "chapter.php",
			data: {book_id: $(this).val()},
			dataType: "JSON",
			method: "GET",

			success:function(r){
				str = "";
				for(i = 1; i <= r.max_chapter; i++){
					str += "<option value='" + i + "'>"+ i + "</option>";
				}
				$("#select-for-chapter").html(str);
			}
		});
	});

	$("#select-for-chapter").on("change", function(){
		$.ajax({
			url: "verse.php",
			data: {book_id: $("#select-for-book").val(), chapter_number: $(this).val()},
			dataType: "JSON",
			method: "GET",

			success:function(r){
				str = "";
				for(i = 1; i <= r.max_verse; i++){
					str += "<option value='" + i + "'>"+ i + "</option>";
				}
				$("#select-for-verse").html(str);
			}
		});
	});

	$("#select-for-verse").on("change", function(){
		$.ajax({
			url: "verseText.php",
			data: {book_id: $("#select-for-book").val(), chapter_number: $("#select-for-chapter").val(), verse_number: $(this).val()},
			dataType: "JSON",
			method: "GET",

			success:function(r){
				str = r.book_name + " " + r.chapter_number + ":" + r.verse_number + "<br/>" + r.verse_text;
				$("#result").html(str);
			}
		});
	});

	$("#btn-for-search").click(function(){
		$.ajax({
			url: "search.php",
			type: "POST",
			data: {user_searching: $("#textbox-for-search").val()},
			dataType: "HTML",

			success:function(r){
				$("#result").html(r);
			}

		});
	});
	
});