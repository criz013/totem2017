/* ******************************* */
/* SECTION lastEdition PARTENAIRES */
/* ******************************* */

var div = document.getElementById("divCacher")

$('#afficher_div').click(function(e){
	console.log($('#afficher_div'));
  e.preventDefault()
   if(div.style.display == "none") { // Si le div est masqué...
    div.style.display = "block";  // ... on l'affiche...
   
  } else { // S'il est visible...
    div.style.display = "none"; // ... on le masque...
  }
});

// $('.panel-collapse').click(function(){
//    $(this).removeClass("in");
// });

$('.panel-heding').click(function(){
   $(this).parent().removeClass("in");
});
