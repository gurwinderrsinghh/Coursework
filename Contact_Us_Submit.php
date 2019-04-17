
<?php
session_start();


$con =  mysqli_connect("localhost","root","");
if (!$con){
	die("Database Connection Failed: ".mysqli_error());
}
$db_select = mysqli_select_db($con,"contactus");
if(!$db_select){
	die("Database selection failed: ".mysqli_error());
}

?>
<!DOCTYPE html>
<html>


<head>
    
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="engine1/jquery.js"></script>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" type="text/css" href="engine1/style.css" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
  


  <title>Narsingh Bornlion</title>
</head>

<body>


  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a href="/Homepage.html"><img src="Images/Logo.png" height="75px" width="75px"></a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li>
            <a href="/Homepage.html"s>Home</a>
          </li>
          <li>
            <a href="#">History</a>
          </li>
          <li>
            <a href="/Homepage.html#instruments">Instruments</a>
          </li>
          <li>
            <a href="/Kirtanis.html">Kirtanis</a>
          </li>
          <li>
            <a href="#">Media</a>
          </li>
          <li>
            <a href="/Contact%20Us.html">Contact Us</a>
          </li>
          <li>
            <div id="pageAudio">
              <!-- Music -->

              <button id="playpausebtn"></button>
              <button id="mutebtn"></button>
              <script>
                var audio, playbtn, mutebtn, seek_bar;

                function initAudioPlayer() {
                  audio = new Audio();
                  audio.src = "/Audio/RaagBhairvi.mp3";
                  audio.loop = true;
                  audio.play();
                  // Set object references
                  playbtn = document.getElementById("playpausebtn");
                  mutebtn = document.getElementById("mutebtn");
                  // Add Event Handling
                  playbtn.addEventListener("click", playPause);
                  mutebtn.addEventListener("click", mute);
                  // Functions
                  function playPause() {
                    if (audio.paused) {
                      audio.play();
                      playbtn.style.background = "url(/Images/Pause.png) no-repeat";
                    } else {
                      audio.pause();
                      playbtn.style.background = "url(/Images/Play.png) no-repeat";
                    }
                  }

                  function mute() {
                    if (audio.muted) {
                      audio.muted = false;
                      mutebtn.style.background = "url(/Images/Volume.png) no-repeat";
                    } else {
                      audio.muted = true;
                      mutebtn.style.background = "url(/Images/Mute.png) no-repeat";
                    }
                  }
                }
                window.addEventListener("load", initAudioPlayer);
              </script>
            </div>
          </li>

        </ul>
      </div>
    </div>
  </nav>

    

    
<div class="container bg-secondary">
    <div class="row">
         

        <div class="col-sm-12">
            <h2>Contact Us</h2>
            <form name="contactus" action="Contact_Us_Submit.php" onsubmit=validate()>
                
                <label for="forename">Forename:</label><br>
                <input type="text" id="forename" name="forename" placeholder="Type forename here...">
                <br>
                <label for="surname">Surname:</label><br>
                <input type="text" id="surname" name="surname" placeholder="Type surname here...">
                <br>
                
                <label for="email">Email</label><br>
                <input type="email" id="email1" name="email" placeholder="example@example.com">
                <br>
                
                <label for="subject">Subject</label><br>
                <select id="subject" name="subject">
                  <option value="soundcloudrequest">SoundCloud Request</option>
                  <option value="questions">Questions</option>
                  <option value="other">Other</option>
                </select>
                <br>
                <label for="more">Please state here:</label><br>
    <textarea id="more" name="more" placeholder="Write something.." style="height:200px"></textarea>
                <br>
            <input type="submit" value="Submit">
            </form>
        </div>
    
    
    </div>
    
    
    <?php 
	
	$forename =  $_POST["forename"];
    $surname =  $_POST["surname"];
    $email =  $_POST["email"];
    $subject =  $_POST["subject"];
    $more =  $_POST["more"];
	
	
	echo $forename;
	echo $surname;
	echo $email;
	echo $subject;
	echo $more;
	
    mysqli_query($con,"INSERT INTO `tblqueries`(`forename`, `surname`, `email`, `subject`, `more`) VALUES ('$forename','$surname','$email','$subject','$more')");
    echo "<script type='text/javascript'>alert('Query has been added');</script>";
    ?>
    </div>

    
    
    


  <footer>


    <a href=https://www.youtube.com/channel/UCkM3nAu3XpZMeb7M8tQ_EWw> <img src="Images/yt_logo_mono_dark.png"></a>

    <a href="https://soundcloud.com/narsinghbornlion"><img src="Images/soundcloud-256.png"></a>
    
      <a href="https://www.instagram.com/narsingh_bornlion/?hl=en"><img src="Images/icon-instagram-white.png"></a>



  </footer>


</body>

</html>
