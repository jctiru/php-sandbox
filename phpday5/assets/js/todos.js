$(document).ready(function() {
	$('ul').on('click', 'li', function(){
		$(this).toggleClass('completed');
		$.post('done.php', {id: $(this).attr('id')}, function(data, textStatus, xhr) {
		});
	});

	$('#newTask').keypress(function(event){
		// console.log(event.which);
		if(event.which ==13){
			var todoText = $(this).val();
			$.post('create.php', {task: todoText}, function(data, textStatus, xhr) {
				var newLine = "<li id=" + data +"><span> <i class='fa fa-trash'></i></span>"+ todoText+ "</li>";
				$('ul').append(newLine);
			});
			$(this).val('');
		}
	});

	$('ul').on('click', 'span', function(e){
		$(this).parent().fadeOut(500, function(){
			$(this).remove();
		});
		// console.log($(this).parent().attr('id'));
		$.post('delete.php', {id: $(this).parent().attr('id')}, function(data, textStatus, xhr) {
			console.log(data);
		});
		e.stopPropagation();
	});
});