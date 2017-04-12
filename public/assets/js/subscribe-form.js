(function($) {
    "use strict";
	
	var options2 = { success: showResponseContact, beforeSubmit: showRequestContact}; 
    $('#subscribe-form').submit(function() { 
        $(this).ajaxSubmit(options2); 
        return false; 
    });
	
	})(jQuery);

function showResponseContact(responseText, statusText)  { 
	if (statusText == 'success') {
		$('#subscribe-form-holder').html('<h5>Email cadastrado</h5>'); 
		$('#subscribe-contact').html('<p>' + $('someText', responseText).html()  + '</p>'); 
	} else {
		alert('status: ' + statusText + '\n\nSomething is wrong here');
	}
}

function showRequestContact(formData, jqForm, options2) { 
	var form = jqForm[0];
	var validRegExp = /^[^@]+@[^@]+.[a-z]{2,}$/i;
	
	if (!form.email.value) {
		$('#subscribe-contact').html('<div class="output2">Por favor, preencha o campo email!</div>'); 
		return false; 
	} else if (form.email.value.search(validRegExp) == -1) {
		$('#subscribe-contact').html('<div class="output2">Por favor, insira um email válido!</div>'); 
		return false; 
	}
	else {	   
	 $('#subscribe-contact').html('Cadastrando seu email...!');  		
		return true;
	}
}