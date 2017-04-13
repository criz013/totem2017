<!-- 
Fichier home-video (c'est le header de notre one page) contenant :
- Background vidéo
- Compteur
- boutons s'inscrire et se connecter (appelle la sidenav)
- logo du challenge
- lien edition 2017
-->

<?php /*
<video poster="<?= $this->assetUrl('../uploads/video/poster.png') ?>" id="bgvid" playsinline autoplay muted loop>
<source src="<?= $this->assetUrl('../uploads/video/trailer2017.webm') ?>" type="video/webm">
<source src="<?= $this->assetUrl('../uploads/video/trailer2017.mp4') ?>" type="video/mp4">
</video>
*/
?>

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><img src="<?= $this->assetUrl('img/totem.png') ?>" alt="logo challenge" width="150" /></a>
    </div>
    
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#contact">Nous contacter</a></li>
        <li><a href="#" id="btn-participer">Participer</a></li>
        <li><a href="#" id="btn-seconnecter">Se connecter</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

  
<div class="container">  
    
    	  <div id="countdown" class="row">
          <div class="cd-box col-xs-6 col-sm-6 col-md-3 col-lg-3">
            <div class="numberContainer text-center">
                <p class="numbers days">00</p>
            </div>
            <div class="stringContainer text-center">
                <p class="strings timeRefDays">Jours</p>
            </div>
          </div>
          <div class="cd-box col-xs-6 col-sm-6 col-md-3 col-lg-3">
            <div class="numberContainer text-center">
              <p class="numbers hours">00</p>
            </div>
            <div class="stringContainer text-center">
              <p class="strings timeRefHours">Heures</p>
            </div>
          </div>
          <div class="cd-box col-xs-6 col-sm-6 col-md-3 col-lg-3">
            <div class="numberContainer text-center">
              <p class="numbers minutes">00</p>
            </div>
            <div class="stringContainer text-center">
              <p class="strings timeRefMinutes">Minutes</p>
            </div>
          </div>
          <div class="cd-box col-xs-6 col-sm-6 col-md-3 col-lg-3">
            <div class="numberContainer text-center">
              <p class="numbers seconds">00</p>
            </div>
            <div class="stringContainer text-center">
              <p class="strings timeRefSeconds">Secondes</p>
            </div>
          </div>
        </div><!--/countdown row-->
  
</div>

<script type="text/javascript" src="">
  $(document).ready(function(){
	//
  (function(e){
		e.fn.countdown = function (t, n){
			function i(){
				eventDate = Date.parse(r.date) / 1e3;
				currentDate = Math.floor(e.now() / 1e3);
				//
				if(eventDate <= currentDate){
					n.call(this);
					clearInterval(interval)
				}
				//
				seconds = eventDate - currentDate;
				days = Math.floor(seconds / 86400);
				seconds -= days * 60 * 60 * 24;
				hours = Math.floor(seconds / 3600);
				seconds -= hours * 60 * 60;
				minutes = Math.floor(seconds / 60);
				seconds -= minutes * 60;
				//
				days == 1 ? thisEl.find(".timeRefDays").text("Days") : thisEl.find(".timeRefDays").text("Days");
				hours == 1 ? thisEl.find(".timeRefHours").text("Hours") : thisEl.find(".timeRefHours").text("Hours");
				minutes == 1 ? thisEl.find(".timeRefMinutes").text("Minutes") : thisEl.find(".timeRefMinutes").text("Minutes");
				seconds == 1 ? thisEl.find(".timeRefSeconds").text("Seconds") : thisEl.find(".timeRefSeconds").text("Seconds");
				//
				if(r["format"] == "on"){
					days = String(days).length >= 2 ? days : "0" + days;
					hours = String(hours).length >= 2 ? hours : "0" + hours;
					minutes = String(minutes).length >= 2 ? minutes : "0" + minutes;
					seconds = String(seconds).length >= 2 ? seconds : "0" + seconds
				}
				//
				if(!isNaN(eventDate)){
					thisEl.find(".days").text(days);
					thisEl.find(".hours").text(hours);
					thisEl.find(".minutes").text(minutes);
					thisEl.find(".seconds").text(seconds)
				}
        else{
          errorMessage = "Invalid date. Example: 27 March 2015 17:00:00";
					alert(errorMessage);
					console.log(errorMessage);
					clearInterval(interval)
				}
			}
			//
			var thisEl = e(this);
			var r = {
				date: null,
				format: null
			};
			//
			t && e.extend(r, t);
			i();
			interval = setInterval(i, 1e3)
		}
	})(jQuery);
	//
	$(document).ready(function(){
		function e(){
			var e = new Date;
			e.setDate(e.getDate() + 60);
			dd = e.getDate();
			mm = e.getMonth() + 1;
			y = e.getFullYear();
			futureFormattedDate = mm + "/" + dd + "/" + y;
			return futureFormattedDate
		}
		//
		$("#countdown").countdown({
			date: "31 July 2018 23:59:59", // change date/time here - do not change the format!
			format: "on"
		});
	});
});
</script>