<!DOCTYPE html>
<html>
  <head>
    <?php include 'headers.php' ?>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script>var PoisonLoaded = 0;</script>
  </head>
<body>
  <div id="YourPoison"><div class="popup"><div id="poison-popup"></div></div></div>
  <div id="Subscribe"><?php include './exercises/subscribe.php' ?></div>
  <section class="menu cid-s48OLK6784" once="menu" id="menu1-h">
    
    <nav class="navbar navbar-dropdown navbar-fixed-top navbar-expand-lg">
        <div class="container">
            <div class="navbar-brand">
                <span class="navbar-logo">
                    <a href="http://se.khoix.net:8080">
                        <img src="assets/images/surprise-exercise-121x127.png" alt="Surprise Exercise" style="height: 3.8rem;">
                    </a>
                </span>
                <span class="navbar-caption-wrap"><a class="navbar-caption text-black display-7" style="text-decoration: none;" href="http://se.khoix.net:8080">Surprise<br>Exercise</a></span>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <div class="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav nav-dropdown nav-right" data-app-modern-menu="true">
                  <li class="nav-item"><a class="nav-link link text-black display-4" href="./exercises/">Manage Workouts<br></a></li>
                  <li class="nav-item"><a class="nav-link link text-black display-4" href="./exercises/catalog/">Exercise Catalog<br></a></li>
                  <li class="nav-item"><a class="nav-link link text-black display-4" onclick="subscribeForm()">Subscribe<br></a></li>
                </ul>
            </div>
        </div>
    </nav>

  </section>
  <section class="header1 cid-s48MCQYojq mbr-fullscreen mbr-parallax-background" id="header1-f">
      <div class="mbr-overlay" style="opacity: 0.6; background-color: rgb(255, 255, 255);"></div>

      <div class="align-center container">
          <div class="row justify-content-center">
              <div class="col-12 col-lg-8">
                  <h1 class="mbr-section-title mbr-fonts-style mb-3 display-1"><strong>You Ready?</strong></h1>
                  
                  <p class="mbr-text mbr-fonts-style display-7"></p>
                  <div class="mbr-section-btn mt-3"><button id="NameYourPoison" class="btn btn-secondary display-4">Let's Do This</button></div>
                  <br><br><br><br><br><br><br><br>
              </div>
          </div>
      </div>
  </section>

  <script src="./assets/web/assets/jquery/jquery.min.js"></script>
  <script src="./assets/jquery-ui/jquery-ui.min.js"></script>
  <script src="./assets/popper/popper.min.js"></script>  
  <script src="./assets/tether/tether.min.js"></script>  
  <script src="./assets/bootstrap/js/bootstrap.min.js"></script>  
  <script src="./assets/smoothscroll/smooth-scroll.js"></script>
  <script src="./assets/parallax/jarallax.min.js"></script>
  <script src="./assets/dropdown/js/nav-dropdown.js"></script>
  <script src="./assets/dropdown/js/navbar-dropdown.js"></script>
  <script src="./assets/touchswipe/jquery.touch-swipe.min.js"></script>
  <script src="./assets/theme/js/script.js"></script>  
  <script src="./js/modalbox.js" type="text/javascript"></script>

  <script>
    $("#YourPoison").myOwnDialog({
      movable:true,
      resizable:true,
      touchOutsideForClose:false,
      width:"350",
      height:"375",
      bg_color: '#101010',
      title: '&nbsp;&nbsp;&nbsp;&nbsp;Surprise Exercise'
    });

    $("#Subscribe").myOwnDialog({
      movable:true,
      resizable:true,
      touchOutsideForClose: true,
      width:"350",
      height:"200",
      bg_color: '#101010',
      title: '&nbsp;&nbsp;&nbsp;&nbsp;Subscribe'
    });

    $("#NameYourPoison").click(function()
    {
        if ( PoisonLoaded == 0 ) {
          $("#YourPoison").myOwnDialog("open"); PoisonLoaded = 1;
        } else { 
          $("#YourPoison").effect( "shake", {times: 3, distance: 10, direction: "up"}, 250);
	}
	$("#poison-popup").load('./exercises/poison.php');
//        $("#poison-popup").load(location.href + " #poison-popup");
        $("#queue-btn-container").load(location.href + " #queue-btn-container");
    });

    function subscribeForm() {
      $("#Subscribe").myOwnDialog("open");
    }

    function queueWorkout(id) {

      $.post("./exercises/submit.php", { current: id, }, 
        function() {
          alert("Workout submitted!");
//          $("#YourPoison").myOwnDialog("close"); PoisonLoaded = 0;
          }
        );
    }

  </script>
</body>
</html>
