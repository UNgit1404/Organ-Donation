<?php
 $servername= "localhost";
 $username= "root";
 $password= "";
 $dbn= "project";
 
 $conn= new mysqli($servername, $username, $password, $dbn);
 if($conn->connect_error){
   die("Connection Failed". $conn->connect_error);
 }

 $sql = "SELECT * FROM hospital ";
 $rs = mysqli_query($conn,$sql);

 $vart = mysqli_num_rows($rs);


 $sql1 = "SELECT * FROM volunteer ";
 $rs1 = mysqli_query($conn,$sql1);

 $varti = mysqli_num_rows($rs1);
?> 

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Organ_Donation</title>
    <script defer src="index.js"></script>
    <link rel="icon" href="favicon.ico">
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
  </head>
  <body>
    <!-- <div class="topnav">
    <a class="active" href="#home">Home</a>
    <a href="#news">News</a>
    <a href="#contact">Contact</a>
    <a href="#about">About</a>
  </div> -->
  <header>
    <img class="logo" src="logo.jpg" alt="logo" />
    <nav class="access">
      <ul class="nav_links">
        <li>
          <div class="dlp"><a href="index.php">Home</a></div>
        </li>
        <li>
          <div class="dlp"><a href="about.html">About Us</a></div>
        </li>
        <li>
          <div class="dlp"><a href="know_us.html">Resources</a></li></div>
        </li>
        <li>
          <div class="dlp"><a href="contact.html">Contact Us</a></div>
        </li>
      </ul>
      </nav>
      <div class="search">
        <form action="https://www.google.com/search" method="get" class="search-bar">
          <input type="text" placeholder="search anything" name="q" />
          <button type="submit"><img src="search.png"></button>
        </form>
      </div>
  </header>

    <div class="top">
    <div class = "menu">
      <div class="toggle"><ion-icon name="add-outline"></ion-icon></div>
      <li style = "--i:0;">
        <a href="#"><ion-icon name="home-outline"></ion-icon></a>
      </li>
      <li style = "--i:1;">
        <a href="#"><ion-icon name="people-outline"></ion-icon></a>
      </li>
      <li style = "--i:2;">
        <a href="#"><ion-icon name="settings-outline"></ion-icon></a>
      </li>
      <li style = "--i:3;">
        <a href="#"><ion-icon name="mail-outline"></ion-icon></a>
      </li>
      <li style = "--i:4;">
        <a href="#"><ion-icon name="key-outline"></ion-icon></a>
      </li>
      <li style = "--i:5;">
        <a href="#"><ion-icon name="videocam-outline"></ion-icon></a>
      </li>
      <li style = "--i:6;">
        <a href="#"><ion-icon name="game-controller-outline"></ion-icon></a>
      </li>
      <li style = "--i:7;">
        <a href="#"><ion-icon name="camera-outline"></ion-icon></a>
      </li>
    </div>

     <div class="slogan">
      <h2>BE A SYMBOL OF HOPE FOR THOSE WHO ARE WAITING!</h2>
       <div class="moving">
        <h3 style="text-align:center;"><span id="words">Be a Believer</span></h3>
      </div>
    </div>


    </div>
  <div class="middle">
    <div class = "daye">
      <div class="x">
        <div class="baye" id="baye1">
            <div class="saved">
              <h2 class="animate-charcter">STATISTICS AT A GLANCE</h2>
              <div class="cnt">
              <div class="a1">:Number Of Lives Saved:</div>
              <div class="website-counter"></div>
              <!-- <div class="a2">:Number Of Centre Setup:</div> -->
              <div class="a2">:Number Of Hospital Tied: </div>
              <div class="website-counter"><?php echo $vart; ?></div>
              <div class="a2">:Number Of Volunteers:</div>
              <div class="website-counter"><?php echo $varti; ?></div>
              <br /><br /><br />
              <!-- <div class="website-counter"></div> -->
              <div class="info1"> <a href="org_day.html">ORGAN DONATION DAY</a>
                <div class="info2">
                  <a href="login.html">Volunteer to Save Lives</a>
                </div>
              </div>
              </div>

            </div>
        </div>
      </div>

      <div class="y">
        <div class="baye" id="baye21">
          <div class="need">
            <div class="container1">
    <h2 class="animate-charcter">VIRTUAL ASSISTANT</h2>
    <div class="chat"></div>
    <div class="busy"></div>
    <div class="input">
      <input type="text" placeholder="Chat with me!" />
      <a><ion-icon name="paper-plane-outline"></ion-icon></a>
    </div>
  </div>


    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js'></script>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="main11.js"></script>

          </div>
        </div>
    </div>
    </div>
  </div>

  <div class="end">
    <h1 class="animate-charcter">FOR PROFESSIONALS</h2>
      <div class="Help">
          <h2><a href="helpus.html">Help Us</a></h2>
          <p>
            UN-Donate is requesting information on ways to strengthen and improve the Organ Procurement and Transplantation Network.
          </p>
      </div>
      <div class="Partner">
          <h2><a href="Know_us.html">Partner With Us</a></h2>
          <p>
            Find out what workplace partners do, view current members, and sign up your group or business.
          </p>
      </div>
      <div class="Outreach">
        <h2><a href="research.html">Grants and Research</a></h2>
        <p>
          Un-Donate's Division of Organ Transplantation helps raise funds for various grant projects to increase awareness about the need for organ, eye, and tissue donors.
        </p>
      </div>
  </div>

  <div class="end">
    <h1 class="animate-charcter2">FOR HOSPITALS</h2>
      <div class="Help">
          <h2><a href="hospital_reg.html">Get Registered</a></h2>
          <p>
            UN-Donate harbours one of the longest chain of hospitals. Get your hospital registered on our website and serve the mankind.
          </p>
      </div>
      <div class="Partner">
          <h2><a href="organ.html">Book an Organ Request</a></h2>
          <p>
            List any requirements specifying the intrinsic details of the same and we will notify you when we get a match
          </p>
      </div>
      <div class="Outreach">
        <h2><a href="search.html">Search Records</a></h2>
        <p>
        Search your patient id to find whether the individual has registered for Organ_Donation on our website or not!
        </p>
      </div>
  </div>

  <div class="end">
    <h1 class="animate-charcter">FOR DONORS</h2>
      <div class="Help">
          <h2><a href="why.html">Why Should I Sign Up?</a></h2>
          <p>
            The number of patients waiting for organs changes every day. As of February 2021, the number of patients on the national transplant waiting list was more than 107,000. Every nine minutes, another person is added to the list.
          </p>
      </div>
      <div class="Partner">
          <h2><a href="donor_reg.html">Ready To Sign Up?</a></h2>
          <p>
            Signing up as an organ donor happens through your state. Anyone over the age of 18 can sign up, and in some states, people younger than 18 (ages 15-17) can sign up.
          </p>
      </div>
      <div class="Outreach">
        <h2><a href="plasma.pdf">Plasma Donation Centre</a></h2>
        <p>
         Get to know all the verified Plasma Donation Centres available across various states of our Country.Un-Donate provides you with a list of all those centres.
        </p>
      </div>
  </div>

    <footer>
      <div class="row">
        <div class="col">
          <img src="logo.jpg" class="igr" />
          <p>
            Organ donation provides a life-giving, life-enhancing opportunity to those who are at the end of the line for hope;
            and is far more important than many of us realize for society and for the individuals it directly affects.
          </p>
        </div>
        <div class="col">
          <h3>Office<div class="underline"><span></span></div></h3>
          <ul>
            <li>
              <a href="#">Bangalore</a>
            </li>
            <li>
              <a href="#">Chennai</a>
            </li>
            <li>
              <a href="#">Hyderabad</a>
            </li>
            <li>
              <a href="#">Noida</a>
            </li>
          </ul>
        </div>
        <div class="col">
          <h3>Links<div class="underline"><span></span></div></h3>
          <ul>
            <li>
              <a href="index.php">Home</a>
            </li>
            <li>
              <a href="know_us.html">Know_us</a>
            </li>
            <li>
              <a href="why.html">FAQ</a>
            </li>
            <li>
              <a href="helpus.html">Get Involved</a>
            </li>
          </ul>

        </div>
        <div class="col">
          <h3>Newsletter <div class="underline"><span></span></div></h3>
          <form>

              <ion-icon class="far" name="mail-outline"></ion-icon>

            <input type="email" placeholder="Enter your email id" required />
            <button type="submit"><ion-icon class = "fas" name="mail-outline"></ion-icon></button>
          </form>

          <div class="social-icons">
            <ion-icon class="fab" name="logo-facebook"></ion-icon>
            <ion-icon class="fab" name="logo-twitter"></ion-icon>
            <ion-icon class="fab" name="logo-instagram"></ion-icon>
            <ion-icon class="fab" name="logo-linkedin"></ion-icon>
          </div>
        </div>
      </div>
      <hr />
      <p class="copyright">
        © G'verse2022 - All Rights Reserved.
      </p>
    </footer>
    <script type="text/javascript">
          (function () {
            var words = ["Be a Doer","Become a Donator","Continue to live after you die"],
            i = 0;
            setInterval(function(){ $('#words').fadeOut(function(){
                $(this).html(words[(i = (i + 1) % words.length)]).fadeIn();
              }); }, 5000)
          })();
        </script>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <script>
      let toggle = document.querySelector('.toggle');
      let menu = document.querySelector('.menu');
      toggle.onclick = function()
      {
        menu.classList.toggle('active')
      }
    </script>

  </body>
</html>
