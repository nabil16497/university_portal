$('#search').keyup(function(){
	var search = $('#search').val();
	$.ajax({
		url:'controller/search.php',
		data:'usearch'+search,
		success:function(data){
			$('#searched').html(data);
		}
	});
});