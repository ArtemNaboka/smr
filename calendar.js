$(document).ready(function(){
	$('img').click(function(){
		
		var s = $(this).attr("class");
		$('div.date').html(s + " Апреля");
		
		document.location.href = '/scripts/AddNote.php?t='+s;
	})
})