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

  
    <div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
      <p>Find out more:</p>
      <p><a href="https://www.instagram.com/the.mardana.project/">The Mardana Project</a></p>
      <p><a href="https://www.gurmatsangeetcollection.org/">Gurmat Sangeet Collection</a></p>
      <p><a href="http://www.gurmatsangeetproject.com/">Gurmat Sangeet Project</a></p>
    </div>
    <div class="col-sm-8 text-left"> 
      <h1>Welcome</h1>
      <p>The history of Gurmat Sangeet is inextricably linked to the history of the Sikh Gurus - who in addition to being spiritual, social and often military leaders were also expert practitioners and patrons of devotional music.</p>
<p>
The link between music and spirituality was present from the birth of Sikhism. Guru Nanak would sing his divine shabads whilst his companion Bhai Mardana played the Rabab. He would instruct Bhai Mardana which strings to play for a particular shabad in order to create an appropriate mood and atmosphere. Guru Nanak regarded hymn-singing and hymn-listening with devotion as a link between man and God. He writes:</p>
<p>
"Musical sound (nad) originated from God. It's holy in every sense. The best way to worship God is to blend the divine Word with sacred music."
        </p>
        <p>
Guru Nanak's view of music and spirituality contrasted greatly with orthodox Muslim rulers of the time, who saw music to be an immoral art. Guru Nanak confronted such views by expressing the true function of music as a vehicle of spiritual inspiration. Upper caste Hindus were also uncomfortable with Guru Nanak's philosophy since it challenged their dominant position in Indian society. Guru Nanak regarded Kirtan as the highest of all deeds and a path to salvation open to all – regardless of caste, gender or social status.
</p>
<p>
"Singing the Kirtan of the Lord's Praises in the Saadh Sangat, the Company of the Holy, is the highest of all actions." [SGGS p.642]
        </p><p>
"Ravi Daas, the tanner, praised the Lord, and sang the Kirtan of His Praises each and every instant. Although he was of low social status, he was exalted and elevated, and people of all four castes came and bowed at his feet." [SGGS p.733]</p>
<p>
In all Guru Nanak composed 974 hymns in nineteen raags. Gurmat Sangeet continued to be steadily developed and promoted by Guru Angad, Guru Amar Das and Guru Ram Das.</p>
      <p>
          Guru Arjan's greatest contribution to the Sikh religion was his compilation of the Scriptures into the Aad Granth. It contains the hymns not only of the Gurus but also of saints and minstrels belonging to different religions and castes. Guru Arjan installed the Scripture – Aad Granth – in Harmandar Sahib at Amritsar in 1604. It contains his 2218 hymns in thirty raags. Guru Arjan maintained a number of musicians who performed Kirtan at his court. Up until the time of Guru Arjan all the musicians performing Kirtan had been paid professionals, but Guru Arjan ordered that every Sikh should learn Kirtan, and not depend solely on the services of professional musicians. Such non-professional singers came to be known as ragis. He personally trained the ragis in hymn-singing in the appropriate raags. Guru Arjan was not only a great singer, but also an eminent musicologist. He devised a stringed musical instrument called the Saranda which he played whilst singing.</p>
<p>
Guru Hargobind was a great patron of musicians. He established a new class of singers called dhadhis and introduced the new instruments like Dhadh and Sarangi. The dhadis sang heroic deeds of old warriors and inspired the Guru's soldiers. Guru Tegh Bahadur composed 116 hymns in fifteen raags. He introduced a new raag called Jaijawanti and composed four hymns therein.
        </p>
        <p>
Guru Gobind Singh was a great patron of poets and musicians. Guru Gobind Singh himself created and played the Taus, and introduced another stringed instrument, the Dilruba, to Gurmat Sangeet.</p>
      <hr>
      <h3>Find Out More below:</h3>
      <iframe width="853" height="480" src="https://www.youtube.com/embed/videoseries?list=PLd-xGKN4-DgazV6goIFN2Q2Hhm-qvFjPe" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
    <div class="col-sm-2 sidenav">
      <div class="well">
        <p><img src="Images/Bhai%20Mardana.jpg" style="width:150px;"></p>
      </div>
      <div class="well">
        <p><img src="Images/gurmatsangeet.jpg" style="width:150px"></p>
      </div>
    </div>
  </div>
</div>
    
    
    

  <footer>


    <a href=https://www.youtube.com/channel/UCkM3nAu3XpZMeb7M8tQ_EWw> <img src="Images/yt_logo_mono_dark.png"></a>

    <a href="https://soundcloud.com/narsinghbornlion"><img src="Images/soundcloud-256.png"></a>
    
    <a href="https://www.instagram.com/narsingh_bornlion/?hl=en"><img src="Images/icon-instagram-white.png"></a>



  </footer>


</body>

</html>
