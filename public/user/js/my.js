 
$(function()
{

    $('.btn-alert').on('click', function(event) 
	{ 

		if($(event.target).attr('id')=='alert1')
		{
	//	alert('alert1 clicked');
		var type = 'success';
		var message = 'action was a success!'
	
		//
		} 
		else if($(event.target).attr('id')=='alert2')
		{
	//	alert('alert2 clicked');
		var type = 'info';
		var message = 'action was a informational!'
	
		//
		} 
		else if($(event.target).attr('id')=='alert3')
		{
		//
		var type = 'warning';
		var message = 'action was a warning!'

		//
		} 
		else if($(event.target).attr('id')=='alert4')
		{
		var type = 'danger';
		var message = 'action was a danger!'

		} 
		
        var alertType = 'alert-'+ type
        
       // alert('alert type is: '+ alertType);
        
        var htmlAlert = '<div class="alert '+ alertType +'"><h3>'+ type +' alert</h3><BR><p>'+ message +'</p></div>';
        
       // alert(htmlAlert);
        
        $(".alert-message").prepend(htmlAlert);
        
        $(".alert-message .alert").first().hide().fadeIn(200).delay(2000).fadeOut(1000, function () { $(this).remove(); });

	});

});
