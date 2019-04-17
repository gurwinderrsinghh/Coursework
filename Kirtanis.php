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
        <a href="/Homepage.php"><img src="Images/Logo.png" height="75px" width="75px"></a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li>
            <a href="Homepage.php">Home</a>
          </li>
          <li>
            <a href="/History.php">History</a>
          </li>
          <li>
            <a href="Homepage.php#instruments">Instruments</a>
          </li>
          <li>
            <a href="#">Kirtanis</a>
          </li>
          <li>
            <a href="#">Media</a>
          </li>
          <li>
            <a href="/Contact%20Us.php">Contact Us</a>
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

    

    
<div class="container bg-secondary">
    <div class="row">
         

        <div class="col-sm-12">
            <h2>Kirtanis (Artists)</h2>
            <h4>Search Artist: Quick Jump</h4>
            <form>
                <input type="text" name="my-input" list="my-list">
<datalist id="my-list">
  <option value="Bhai Avtar Singh">
    <a href="Kirtanis.php#BhaiAvtar"></a></option>
  <option value="Bhai Samund Singh">
    <a href="Kirtanis.php#BhaiSamund"></a></option>
  <option value="Professor Kartar Singh">
    <a href="Kirtanis.php#ProfessorKartar"></a></option>
  <option value="Bhai Balbir Singh">
    <a href="Kirtanis.php#BhaiBalbir"></a></option>
   <option value="Bhai Bakshish ">
    <a href="Kirtanis.php#BhaiBakshish"></a></option>
</datalist>

            </form>
            
            
            
            
<script>
    $(document).ready(function() {
  $("[list='my-list']").on("input propertychange", function() {
    window.location = $("#my-list option[value='"+$("[list='my-list']").val()+"']").find("a").attr("href")
  });
});
</script>
        <br>
        <br>
       
        
</div>
</div>
         <div class="row">
        <div class="col-sm-12">
        <div class="well">
            <div id="BhaiAvtar">
                <h2>Bhai Avtar Singh</h2>
                <p><img src="Images/Bhai%20Avtar%20Singh.jpg" class="bioimage">Bhai Avtar Singh (1925-2006) was always an ardent exponent of Gurmat Sangeet who practised the traditional style of Kirtan in keeping with the historic melodies of Guru's Ragis. It was with great sadness that the Sikh community acknowledged the loss of their most dedicated Gurbani Kirtania who passed away peacefully at about 10.50 PM (IST), November 24th, 2006. Bhai Avtar Singh who was 81 years old, passed away at his residence, with his whole family present.
                <br><br>
                Bhai Sahib Avtar Singh Ji and Bhai Sahib Gurcharan Singh Ji have rendered invaluable service to the Sikh Panth by preserving Gurmat Sangeet in its pristine form. They accomplished this by their unwavering commitment to the tradition over the years even when Gurmat Sangeet was being subverted by the pressures of popular culture and film music. The crowning achievement of their career was the publication of "Gurbani Sangeet Prachin Reet Ratnavali" in which they documented hundreds of traditional Gurmat Sangeet compositions handed down from generation to generation in an unbroken oral tradition.    
                </p>
                <script>
    var c = document.getElementById("cvs");
    var ctx = c.getContext("2d");

    var grad1 = ctx.createLinearGradient(0, 0, 0, c.height);
    grad1.addColorStop(0, "violet");
    grad1.addColorStop(1, "red");

    var jsData = {
      "fields": ["1960s", "1970s", "1980s", "1990s", "2000s", "2010s"],
      "data": [
        [62000, 136000, 257000, 231000, 987957, 522000],
        [0, 0, 0, 0, 0, 0]
      ]
    };

    var niData = jsData.data[0].map((val, idx) => val - jsData.data[1][idx]);


    var myData = {
      labels: jsData.fields,
      datasets: [{
          label: "Sales",
          data: jsData.data[0],
          backgroundColor: grad1,
          hoverBackgroundColor: "red",
          pointStyle: "rect",
        },

      ]
    };

    var myChart = Chart.Bar(ctx, {
      data: myData,
      options: {
        responsive: false,

        title: {
          display: true,
          text: "Popular Album Sales",
          fontSize: 16,
        },

        legend: {
          display: true,
          position: "bottom",
          labels: {
            usePointStyle: true,
          },
          onClick: null,
        },

        scales: {
          xAxes: [{
            scaleLabel: {
              display: false,
            },
            gridLines: {
              display: false,
            },
            barPercentage: 0.8,
            categoryPercentage: 0.6,
          }],
          yAxes: [{
            scaleLabel: {
              display: true,
              labelString: "Average sales per year",
            },
            gridLines: {
              display: true,
            },

            type: "logarithmic",

            ticks: {
              min: 1e4,
              max: 3e6,

              callback: function(label) {
                if ([1e4, 1e5, 1e6].indexOf(label) != -1)
                  return label / 1000 + "K";
              },
            }
          }],
        }
      }
    });
  </script>
                 <canvas id="cvs" width="600" height="400"></canvas>

  

            </div>
        </div>
      </div>
            </div>
    
    <div class="row">
        <div class="col-sm-12">
        <div class="well">
            <div id="ProfessorKartar">
                <h2>Professor Kartar Singh</h2>
                
                <p><img src="Images/ProfK.jpg" class="bioimage">
                    Prof Kartar Singh was born in 1928 in Ghumanke village in Lahore district of Punjab, now in Pakistan. He was initially trained in the traditional Gurbani music by several teachers including Giani Gurcharan Singh, Bhai Sunder Singh Kasoorwale, Bhai Dalip Singh, and J.S. Bhanwra. Later, he honed his art under the guidance of Balwant Rai Jaswal. Among the foremost singers of Gurbani today, Professor Kartar Singh has at the same time pursued a career in the teaching of music. He taught first at the Malwa Central College of Education and later served at the Guru Nanak Girls College, Ludhiana, as Head of its department of music.
                    <br><br>
                    At present, he is Director of the Gurmat Sangeet Academy at Sri Anandpur Sahib, Ropar, where he has trained a large number of students. He has participated in the Basant Gurmat Samagam during the Hola Mohalla festivities at Sri Anandpur Sahib since 2000. He also attended the Gurmat Samagam commemorating three hundred years of the Gurta Gaddi of Sri Guru Granth Sahib, rendering Gurbani in prescribed ragas accompanied by traditional instruments. Recordings of Shabads sung by Shri Kartar Singh have been widely disseminated. He has also authored several books on Gurbani music. For his work in propagating Gurmat Sangeet, he has received wide acclaim from the general public and concerned institutions
                </p>
            </div>
        </div>
      </div>
            </div>
    
    <div class="row">
        <div class="col-sm-12">
        <div class="well">
            <div id="BhaiSamund">
                <h2>Bhai Samund Singh </h2>
                <p><img src="Images/Bhai%20Samund%20Singh.jpg" class="bioimage">Born at village Mulla Hamza in Montgomery District (now in Pakistan) in 1900 A.D., Bhai Samund Singh was given training in music by his father Bhai Hazur Singh Ji from his early child-hood. As a little boy he won a number of prizes and distinctions at musical concerts. He came to be known as 'Kaka Samund Singh' and was much in demand at Sikh congregations. His party came to be known as the best in the understanding of their art and almost perfect in presentation of Gurbani Kirtan.
                <br><br>    
                With his unique melo-dious voice, an extensive and deep understanding of Gur-bani, correct interpretation of ragas, attractive style of sing-ing and great human qualities, he reigned supreme for sixty years in the world of Gurbani Kirtan. He performed kirtan at the Gurdwara Janam Sthan, Sri Nankana Sahib, the birth place of Guru Nanak Dev, for many years. He broadcast kirtan for 36 years from All India Radio, Lahore and later from Jalandhar and commanded wide listening. Passers-by stopped in the streets to listen to his kirtan irrespective of their faith. He was invited to perform kirtan in the National Programme of Music by All India Radio, the highest recognition of his art. He was given State award by the Punjab Government in 1971. He passed away at Ludhiana (5th January, 1972).</p>
            </div>
        </div>
      </div>
            </div>
    
    <div class="row">
        <div class="col-sm-12">
        <div class="well">
            <div id="BhaiBalbir">
                <h2>Bhai Balbir Singh</h2>
                <p><img src="Images/Bhai%20Balbir%20Singh.jpg" class="bioimage">
                Bhai Balbir Singh Ji Sidki was born in his maternal village Mrigindpura near Bhikhiwind (Amritsar), Punjab on March 23rd, 1933 to Mata Prasan Kaur Ji and Bhai Santa Singh Ji. Bhai Sahib Ji was the eldest of the four brothers. His father Bhai Santa Singh Ji was a famous tabla/pakhawaj exponent who taught at the Gurmat Vidyalaya in Taran Tarn (Amritsar). Bhai Balbir Singh Ji received his initial training in Gurbani Kirtan from his father, his grandfather Bhai Kundan Singh Ji, and great-grandfather Bhai Hira Singh Ji.
                <br><br>    
                Bhai Balbir Singh Ji began learning singing at the tender age of four. Bhai Sahib Ji made his debut at the Darbar Sahib, Taran Taran at the tender age of seven where he sang two compositions. Bhai Balbir Singh Ji accompanied his father who travelled extensively to Benaras, Lucknow, Gwalior, Pune, Calcutta and Delhi for music conferences. Bhai Sahib Ji was able to listen to and seek blessings from some of the finest names in Indian classical music.
                <p>
            </div>
        </div>
      </div>
            </div>
    
    
    
    <div class="row">
        <div class="col-sm-12">
        <div class="well">
            <div id="BhaiBakshish">
                <h2>Bhai Bakshish Singh</h2>
                <p><img src="Images/bhai%20bakhshish%20singh%20hazuri%20raagi.jpg" class="bioimage">
                Bhai Bakhshish Singh, the renowned Hazoori Ragi, kirtaniya of divine hymns of Guru Granth Sahib composed in different ragas and singer of other forms of spiritual music. God had bestowed on Bhai Bakhshish Singh a vibrant, captivating and golden voice most appropriate for singing Gurbani according to the classical specifications laid down for different shabads. His kirtan created a celestial atmosphere synchronising with the gist of the holy hymns. He lifted the listeners to divine heights. He ferried them across the ocean of life to Sachkhand, illumined their minds and made them feel one with the eternal Supreme Lord. 
                <br><br><br>
                </p>
            </div>
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
