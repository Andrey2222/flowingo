$().ready(() => {
	const STATUSES = {
			success: 'success',
			failure: 'error'
		};
	$('.registration-button-js').click(() => {
		let email = $("#registration input[name='email']").val();
		let password = $("#registration input[name='password']").val();
		let action = $("#registration form").attr('action');
		$.ajax({
			url:action,
			data: {password,email},
			method: 'POST',
			success: (response, status) => {
				let parsed_response = JSON.parse(response);
				if (parsed_response.status == STATUSES.success){
          			$('#registration').modal('hide');
          			$('#registrated').modal('show');
          			$('#registration form')[0].reset();
          			$('#registration .errors').text('');	
       			}else{
       				let errors_message = parsed_response.errors.join("\n");
       				$('#registration .errors').text(errors_message);
       			}
			}
		})
	})
	$('.authorizing-button-js').click(() => {
		let email = $("#authorizing input[name='email']").val();
		let password = $("#authorizing input[name='password']").val();
		let action = $("#authorizing form").attr('action');
		$.ajax({
			url:action,
			data: {password,email},
			method: 'POST',
			success: (response, status) => {
				let parsed_response = JSON.parse(response);
				if (parsed_response.status == STATUSES.success){
          			$('#authorizing').modal('hide');
          			$('#authorized').modal('show');
          			$('#authorizing form')[0].reset();
          			$('#authorizing .errors').text('');	
       			}else{
       				let errors_message = parsed_response.errors.join("\n");
       				$('#authorizing .errors').text(errors_message);
       			}
			 }
		})
	 });
});