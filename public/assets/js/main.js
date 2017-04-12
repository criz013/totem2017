$(document).ready(function () {
    console.log("JS LOADED...")
    
    //loadSection_equipage() // Charge le script pour le suivi d'équipage en temps réel
    
    navigationFixed() // Charge le script pour la barre de navigation
    navigationScroll() // Charge le script pour le scroll fluide de la page
    
    sideNav() // Charge le script pour les formulaires
    
    $('.carousel').carousel({
      interval: 2000
    })
    
    
})