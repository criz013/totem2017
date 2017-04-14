var sideNav = function () {
    
    console.log("sidenav loaded")
    
    var closeBtn = $(".close")
    var signinBtn = $("#btn-participer")
    var loginBtn = $("#btn-seconnecter")
    var signinSection = $("#sidenav-participer")
    var loginSection = $("#sidenav-seconnecter")
    
    signinBtn.click(function () {
        console.log("TEST");
        signinSection.addClass("slideLeft")
        $("main").css("background", "rgba(0,0,0,.5)")
    })
    
    loginBtn.click(function () {
        loginSection.addClass("slideLeft")
    })
    
    closeBtn.click(function () {
      $(this).parent().removeClass("slideLeft slideFullScreen")
      // signinSection.css("width", "30vw")
      // signinSection.css("transform", "translateX(30vw)")
      $("main").css("background", "none")
      $("#sidenav-content").fadeOut()
      $("#sidenavMenu").fadeIn()
    })
    
    var twizzyFormBtn = $("#sponsortwizzy").find('a');
    
    twizzyFormBtn.click(function(e) {
        e.preventDefault()
        $("#sidenavMenu").fadeOut()
        signinSection.css("width", "100vw")
        signinSection.css("transform", "translateX(0vw)")
        signinSection.removeClass("slideLeft")
        $("#sidenav-content").fadeIn()
    })
    
    /*
    var userAccountForm = $("#useraccount")
    var userProfileForm = $("#userprofile")
    var twizzyTeamForm = $("#twizzyteam")
    */
    
    var next = $("#nextstep")
    var steps = $(".step").toArray()
    var currentStep = step[0];
    console.log(totalSteps)
    
    next.click(function(e) {
        e.preventDefault()
        displayNext(currentStep)
    })
    
    function displayNext (current) {
        current.fadeOut()
        current.next().fadeIn()
    }
    
    
    
    /*userProfileForm.hide()
    twizzyTeamForm.hide()*/
    
    
    
}