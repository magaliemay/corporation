$(document).ready(function() {
    $('#example').DataTable();
} );

//Open new ticket modal
$('#newTicket').click(function(e){
	e.preventDefault();
	$(this).attr('data-toggle', 'modal');
	$(this).attr('data-target', '#addTicket');
});
