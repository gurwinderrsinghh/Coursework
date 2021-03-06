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



  <title>Narsingh Bornlion</title>
</head>


<body  onload="init();">


  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a href="Homepage.php"><img src="Images/Logo.png" height="75px" width="75px"></a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li>
            <a href="Homepage.php">Home</a>
          </li>
          <li>
            <a href="History.php">History</a>
          </li>
          <li>
            <a href="Homepage.php#instruments">Instruments</a>
          </li>
          <li>
            <a href="Kirtanis.php">Kirtanis</a>
          </li>
          <li>
            <a href="#">Media</a>
          </li>
          <li>
            <a href="Contact%20Us.php">Contact Us</a>
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
                  audio.src = "Audio/RaagBhairvi.mp3";
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
                      playbtn.style.background = "url(Images/Pause.png) no-repeat";
                    } else {
                      audio.pause();
                      playbtn.style.background = "url(Images/Play.png) no-repeat";
                    }
                  }

                  function mute() {
                    if (audio.muted) {
                      audio.muted = false;
                      mutebtn.style.background = "url(Images/Volume.png) no-repeat";
                    } else {
                      audio.muted = true;
                      mutebtn.style.background = "url(Images/Mute.png) no-repeat";
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
    <div class="subdiv">
        <canvas id="MyCanvas1" width="1080" height="50">
        This browser or document mode doesn't support canvas object
        </canvas>
    </div>
<script type="text/javascript">
    var can, ctx, step, steps = 0,
      delay = 20;

    function init() {
      can = document.getElementById("MyCanvas1");
      ctx = can.getContext("2d");
      ctx.fillStyle = "Black";
      ctx.font = "20pt Verdana";
      ctx.textAlign = "center";
      ctx.textBaseline = "middle";
      step = 0;
      steps = can.width + 50;
      RunTextLeftToRight();
    }

    function RunTextLeftToRight() {
      step++;
      ctx.clearRect(0, 0, can.width, can.height);
      ctx.save();
      ctx.translate(step, can.height / 2);
      ctx.fillText("Narsingh BornLion", 0, 0);
      ctx.restore();
      if (step == steps)
        step = 0;
      if (step < steps)
        var t = setTimeout('RunTextLeftToRight()', delay);
    }
  </script>

  <div class="container bg-secondary">
    <div class="row">
      <div class="col-sm-8">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
            <li data-target="#myCarousel" data-slide-to="4"></li>
            <li data-target="#myCarousel" data-slide-to="5"></li>
            <li data-target="#myCarousel" data-slide-to="6"></li>
          </ol>

          <!-- Wrapper for slides -->
          <div class="carousel-inner" role="listbox">
            <div class="item active">
              <img src="Images/Bhai%20Avtar%20Singh%20and%20Jatha.png" alt="Image">
              <div class="carousel-caption">
                <h3>Bhai Avtar Singh & Jatha</h3>
                <h5>Bhai Gurcharan Singh, Bhai Gurcharan Singh, Bhai Swaran Singh</h5>
              </div>
            </div>

            <div class="item">
              <img src="Images/Bhai%20Baljit%20Singh.png" alt="Image">
              <div class="carousel-caption">
                <h3>Bhai Baljit Singh & Jatha</h3>
                <h5>Bhai Gurmeet Singh, Bhai Baljit Singh, Bhai Fateh Singh</h5>
              </div>
            </div>

            <div class="item">
              <img src="Images/Bhai%20Dhram%20Singh%20Ji%20and%20Jatha.png" alt="Image">
              <div class="carousel-caption">
                <h3>Bhai Dhram Singh Zakhami & Jatha </h3>
                <h5>Bhai Amrik Singh Zakhami, Bhai Samsher Singh Zakhami, Bhai Dharam Singh Zakhami,Bhai Hariqbal Singh Zakhmi</h5>
              </div> 
            </div>


            <div class="item">
              <img src="Images/Bhai%20Dilbagh%20Singh%20Bhai%20Gulbagh%20Singh.png" alt="Image">
              <div class="carousel-caption">
                <h3>Bhai Dilbagh Singh & Bhai Gulbagh Singh </h3>
                <h5>Puratan Kirtanis </h5>
              </div>
            </div>


            <div class="item">
              <img src="Images/Nihang%20Kirtanis.png" alt="Image">
              <div class="carousel-caption">
                <h3>Nihang Kirtani</h3>
                <h5>Nihang Kirtanis from Budha Dal</h5>
              </div>
            </div>


            <div class="item">
              <img src="Images/Prof%20Kartar%20Singh.png" alt="Image">
              <div class="carousel-caption">
                <h3>Professor Kartar Singh </h3>
                <h5>Hazoori Ragi</h5>
              </div>
            </div>


            <div class="item">
              <img src="Images/Rababis.png" alt="Image">
              <div class="carousel-caption">
                <h3>Puratan Rababis</h3>
                <h5>Ragis of the old</h5>
              </div>
            </div>





          </div>

          <!-- Left and right controls -->
          <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>


      <div class="col-sm-4">
        <div class="well">
          <p>Narsingh Bornlion is an initiative to promote Gurmat Sangeet, a branch of indian classical music. Gurmat Sangeet popularly known as Kirtan, can be described as signing and performing devotional music in accordance to the teaching of the
            sikh gurus. Within Gurmat Sangeet an emphasis is placed on raag and the shabads, the religious hymns.</p>
          <br>
          <p>Within the past century Gurmat Sangeet has seen a heavy divergence from its origins. From the divergence of the original instruments used and the rules attributed to its form of music. For example this includes the introduction of the
            harmonium which is not a Sikh instrument and singing compositions not within a raag.</p>
        </div>
      </div>
    </div>
    <hr>
  </div>






  <div class="container1">
    <div class="chevron"></div>
    <div class="chevron"></div>
    <div class="chevron"></div>
  </div>

  <div class="container2">
    <div class="chevron"></div>
    <div class="chevron"></div>
    <div class="chevron"></div>
  </div>

  <p class="pulsate" style="text-align: center">SCROLL DOWN</p>





  <div class="container text-center">
    <h3>FIND OUT MORE</h3>
    <br>
    <div class="row">





      Listen to our latest track:
      <iframe width="100%" height="166" scrolling="no" frameborder="no" allow="autoplay"
        src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/538663254&color=%23ff5500&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true"></iframe>



    </div>
    <hr>
  </div>



  <div class="container">
      <div class="container text-center" id="instruments">
        <h1 >Instruments</h1>
      </div>
    <div class="row">
      <div class="col-sm-3">
        <div class="hovereffect">
          <img class="img-responsive" src="Images/Bhai%20Avtar%20Singh%20Taus.jpg" id="Image" style="width: 100%">
          <div class="overlay">
            <h2>Taus</h2>
            <p>
              Taus meaning peackock in Persian, is a Punjabi stringed instrument made by the sixth Guru of the Sikhs. In India it is also called the Mayuri Veena. The Taus can have 28 to 30 strings.
            </p>
          </div>
        </div>
      </div>


      <div class="col-sm-3">
        <div class="hovereffect">
          <img class="img-responsive" src="Images/Saranda.jpg" id="Image" style="width: 100%">
          <div class="overlay">
            <h2>Saranda</h2>
            <p>
              The Saranda is a unique bowed instrument which originated among the sikhs and was designed, created and played by the fifth Sikh Guru, Guru Arjun Dev Ji.
            </p>
          </div>
        </div>
      </div>

      <div class="col-sm-3">
        <div class="hovereffect">
          <img class="img-responsive" src="Images/Rabab.JPG" alt="Image" style="width: 100%" height="100px">
          <div class="overlay">
            <h2>Rabab</h2>
            <p>
              The mellow yet piercing sound comes due to the it’s hollow base which is covered with animal skin. The Rabab comes in several styles, shapes, and sizes. The Rabab, made by Bhai Firanda, known as ‘Firandia Rabab’ was a huge blessing. This Rabab was the spiritual tool used by Guru Nanak Dev.
            </p>
          </div>
        </div>
      </div>



      <div class="col-sm-3">
        <div class="hovereffect">
          <img class="img-responsive" src="Images/Raag.jpg" alt="Image" style="width: 100%">
          <div class="overlay">
            <h2>Raag</h2>
            <p>
              A raga is a complex structure of musical melody used in the Indian classical music. It is a set of rules of how to build a melody which can ignite a certain mood in the reciter and listeners.
            </p>
          </div>
        </div>
      </div>

    </div>
  </div><br>

  <div class="container">
    <div class="row">
      <div class="col-sm-3">
        <div class="hovereffect">
          <img class="img-responsive" src="Images/Jori.jpg" alt="Image" style="width: 100%">
          <div class="overlay">
            <h2>Jori Pakhawaj</h2>
            <p>
                The Jori was brought into existence in the court of Guru Arjan Dev (1563-1606). Created by splitting a century-old one-barrel instrument – Pakhawaj – into a two piece drum set.
            </p>
          </div>
        </div>
      </div>

      <div class="col-sm-3">
        <div class="hovereffect">
          <img class="img-responsive" src="Images/Tanpura.jpg" alt="Image" style="width: 100%">
          <div class="overlay">
            <h2>Tanpura</h2>
            <p>
              Tanpura is a drone instrument.This is one of the oldest & popular Saaj used for accompaniment of vocal music. The tanpura is known for its very rich sound.
            </p>
          </div>
        </div>
      </div>

      <div class="col-sm-3">
        <div class="hovereffect">
          <img class="img-responsive" src="Images/Harmonium.jpg" alt="Image" style="width: 100%">
          <div class="overlay">
            <h2>Harmonium</h2>
            <p>
              The Harmonium is a small, manually-pumped musical instrument using fixed reeds to create the basic sounds.
            </p>
          </div>
        </div>
      </div>

      <div class="col-sm-3">
        <div class="hovereffect">
          <img class="img-responsive" src="Images/Bhai-Gurmit-Singh-Virdee.jpg" alt="Image" style="width: 100%">
          <div class="overlay">
            <h2>Taal</h2>
            <p>
              Tala in Indian music and Gurbani Kirtan refers to a complete and complex system for the execution and transcription of Rhythms and Beats.
            </p>
          </div>
        </div>
      </div>


    </div>

  </div>
  <br><br>

  <footer>


    <a href=https://www.youtube.com/channel/UCkM3nAu3XpZMeb7M8tQ_EWw> <img src="Images/yt_logo_mono_dark.png"></a>

    <a href="https://soundcloud.com/narsinghbornlion"><img src="Images/soundcloud-256.png"></a>
    
    <a href="https://www.instagram.com/narsingh_bornlion/?hl=en"><img src="Images/icon-instagram-white.png"></a>

    



  </footer>


</body>

</html>
