var container = $("#cars-container")
var cars = container.find('.partenaire_car').toArray()

var i = 0
var animateCar = function (car) {
    
    if (i<cars.length) {
        
        //animation de la voiture
        car.classList.add('carAnimated')
        
        //toutes les 500ms je passe à la voiture suivante
        setTimeout(function () {
            i++
            animateCar(cars[i])
        }, 5000)
        
    } else {
        i=0
        animateCar(cars[i])
    }
}

animateCar(cars[i])

//Remove class when animation end
/*
cars.forEach(function(car){
    car.addEventListener('animationend', function(e) {
        car.classList.remove('carAnimated')
    })
})
*/
