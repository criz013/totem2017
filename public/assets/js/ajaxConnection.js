/**
 * Traitement en ajax du formulaire d'inscription 
 */

$(function(){
	
	$("#sign-up").on("submit", function(event){
		event.preventDefault();
		var urlAjax = $(this).attr('action');
		var infosFormulaire = $(this).serialize();
	       $.ajax({
	            method:     'POST',
	            url:        urlAjax,        // ???
	            dataType:   'json',
	            data:       infosFormulaire
	        })
	        .done(function(reponseJSON){
	        	console.log(reponseJSON);
	        	//$("#form")[0].reset();
	        	
	        	$("#sign-up .msgErreurs").html(reponseJSON.message);
	        });
	});
	
	$("#login").on("submit", function(event){
		//event.preventDefault();
		var urlAjax = $(this).attr('action');
		var infosFormulaire = $(this).serialize();
	       $.ajax({
	            method:     'POST',
	            url:        urlAjax,        // ???
	            dataType:   'json',
	            data:       infosFormulaire
	        })
	        .done(function(reponseJSON){
	        	$("#login .msgErreurs").html(reponseJSON.message);
	        });
	});
	
	});