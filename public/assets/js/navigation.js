/* *************************** */
/* NAVIGATION Fixed to top     */
/* *************************** */
var navigationFixed = function () {
    var nav = $("#nav-onepage")
    if (nav.length > 0)
    {
        var navPosition = nav.offset().top
        
        // Au scroll de la page
        $(document).scroll(function(){
            var scroll = $(document).scrollTop() // Taille du scroll en pixel
            
            if (scroll > navPosition) { // Si on scroll plus loin que la position de la nav
               nav.addClass("fixedToTop") // On ajoute une classe à la nav
               //nav.find(".navbar-nav li").addClass("navbar-li-fixed")
               nav.find('.navbar-brand').fadeIn()
            } else {
                nav.removeClass("fixedToTop") // Quand on remonte, on enlève cette classe
                $('.navbar-brand').fadeOut()
                $(".navbar-nav li").removeClass("navbar-li-fixed")
            }
        })
    }
}

/* *************************** */
/* NAVIGATION Fluid Scroll     */
/* *************************** */
var navigationScroll = function () {
    $('.navbar-onepage a').click(function(e){
        e.preventDefault()
        var link = $(this).attr('href')
        $('body').animate({scrollTop: $(link).offset().top }, 750)
    })
}

$("#navEditionsList li a").click(function()
    {
        //rajouter la classe in sur l'id correspondant au hash
        $(this.hash).addClass("in");
        
    });