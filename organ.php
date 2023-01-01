
<?php
 
 $servername= "localhost";
$username= "root";
$password= "";
$dbn= "project";

$conn= new mysqli($servername, $username, $password, $dbn);
if($conn->connect_error){
	die("Connection Failed". $conn->connect_error);
}

// else{
// 	echo "Connection successful<br>";
// }

$email = $_POST["email"];
$mci = $_POST["mci"];
$pswd=$_POST["password"];
$name = $_POST["name"];
$guard_name = $_POST["guardian"];
$blood = $_POST["blood"];
$dob = $_POST["dob"];
$organ = $_POST["type"];
$d = date('Y-m-d H:i:s');

// SQL query to select data from database
$sql1 = "SELECT * FROM hospital WHERE (email='$email' AND mci_register='$mci' AND passwordd ='$pswd')";
$rs = mysqli_query($conn,$sql1);

if (mysqli_num_rows($rs) > 0) 
{
    $sql2 = "SELECT * FROM donor WHERE (organs='$organ' AND blood_group='$blood')";
    $rs1 = mysqli_query($conn,$sql2);

    $sql = "INSERT INTO request VALUES('$email','$mci','$pswd','$name','$guard_name','$blood','$dob','$organ','$d')";
    if(mysqli_query($conn, $sql)){
    if(mysqli_num_rows($rs1)<=0)
    {
                header("Location:success.html");  
            
    }

		

	} else{
		echo "ERROR: Hush! Sorry $sql. "
			. mysqli_error($conn);
	}
  
// } 
// else {
//   echo "You are Not authorised to make an organ request!!";
// }
mysqli_close($conn);
?>
<!-- HTML code to display data in tabular format -->
<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="utf-8">
    <title>Organ_Donation</title>
    <script defer src="index.js"></script>
    <link rel="icon" href="favicon.ico">
    <link rel="stylesheet" href="style_hospital.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>

    <!-- CSS FOR STYLING THE PAGE -->
    <style>
        *{
    margin:0;
    padding:0;
    box-sizing: border-box;
  }
  body{
    /* display: flex;
    justify-content: center;
    align-items: center; */
    min-height: 100vh;
    background: linear-gradient(45deg,#8460ed,#cfd7d2);
  }
  
  
  
  .search
  {
    background-color: linear-gradient(rgba(0,8,51,0.9),rgba(0,8,51,0.9));
    display: flex;
    align-content: center;
    justify-content: center;
  }
  .search-bar{
    width:100%;
    height: 50px;
    max-width: 700px;
    background: rgba(255,255,255,0.2);
    display: flex;
    align-items: center;
    border-radius: 60px;
    padding: 10px 20px;
    backdrop-filter:blur(4px) saturate(180% );
  }
  
  .search-bar input
  {
    background: transparent;
    flex:1;
    border:0;
    outline: none;
    padding: 24px 20px;
    font-size: 20px;
    color: #cac7ff;
  }
  ::placeholder
  {
    color:#cac7ff;
  }
  .search-bar button img
  {
    width:22px;
  }
  .search-bar button
  {
    border:0;
    border-radius: 50%;
    width: 30px;
    height: 30px;
    background: #58629b;
    cursor: pointer;
    transition: all 0.3s ease 0s;
  }
  
  .search-bar button  hover
  {
    background: #58629d;
  }
  
  header
  {
    height:140px;
    display: flex;
    justify-content: space-between;
    align-content: center;
    background-color: #111110;
    padding:30px 10%;
  }
  .logo
  {
    width:90px;
    height: 90px;
    border-radius: 50%;
    cursor: pointer;
  }
  .nav_links
  {
    list-style: none;
  }
  .nav_links li
  {
    display: inline-block;
    padding: 0px 20px;
  }
  .nav_links li a
  {
    font-size: 20px;
    transition: all 0.3s ease 0s;
  }
  .nav-links li a:hover
  {
    color:#0088a9;
  }
  
  body{
  
    min-height: 100vh;
    background: linear-gradient(45deg,#8460ed,#cfd7d2);
  }
  
  footer
{
  width: 99%;
  position: relative;
  margin-left: 10px;
  margin-right: 10px;
  bottom: 20px;
  /* position: absolute;
  bottom: 0; */
  background: linear-gradient(to right,#00093c,#2d0b00);
  color:#fff;
  padding: 40px 0 30px;
  border-radius: 75px;
  font-size: 13px;
  line-height: 20px;
  flex-shrink: 0;
  box-shadow: 1px 1px 1px 1px white;

}
.row
{
  width: 85%;
  margin: auto;
  display: flex;
  flex-wrap: wrap;
  align-items: flex-start;
  justify-content: space-between;
}

.col
{
  flex-basis: 25%;
  padding: 10px;
}


.col:nth-child(2),.col:nth-child(3)
{
  flex-basis: 15%;
}
.col h3
{
  width:fit-content;
  margin-bottom: 40px;
  position: relative;
}
ul li
{
  list-style: none;
  margin-bottom: 12px;
}
ul li a
{
  text-decoration: none;
  color: #fff;
}
.social-icons .fab
{
  width: 40px;
  height: 40px;
  border-radius: 50%;
  text-align: center;
  line-height: 40px;
  font-size: 20px;
  color: #000;
  background: #fff;
  margin-right: 15px;
  cursor: pointer;
}

.underline
{
  width: 100%;
  height:5px;
  background: #767676;
  border-radius: 3px;
  position: absolute;
  top:25px;
  left: 0;
  overflow: hidden;
}
.underline span{
  width: 15px;
  height: 100%;
  background: #fff;
  border-radius: 3px;
  position: absolute;
  top:0;
  left: 10px;
  animation: moving 2s linear infinite;

}
@keyframes moving
{
  0%{left: -20px;}
  100%{left:100%;}
}

.animate-charcter
{
   margin: 20px;
   text-transform: uppercase;
   text-align: center;
   background-image: linear-gradient(
    -225deg,
    #231557 0%,
    #44107a 29%,
    #ff1361 67%,
    #fff800 100%
  );
  width: auto;
  background-size: auto auto;
  background-clip: border-box;
  background-size: 200% auto;
  color: #fff;
  background-clip: text;
  text-fill-color: transparent;
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  animation: textclip 2s linear infinite;
  /* display: inline-block; */
  font-size: 40px;
}
.animate-charcter2
{
   margin: 20px;
   text-transform: uppercase;
   text-align: center;
   background-image: linear-gradient(
    -225deg,
    #fff800 0%,
    #ff1361 29%,
    #44107a 67%,
    #231557 100%
  );
  width: auto;
  background-size: auto auto;
  background-clip: border-box;
  background-size: 200% auto;
  color: #fff;
  background-clip: text;
  text-fill-color: transparent;
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  animation: textclip 2s linear infinite;
  /* display: inline-block; */
  font-size: 40px;
}

@keyframes textclip {
  to {
    background-position: 200% center;
  }
}
hr{
  width: 90%;
  border:0;
  border-bottom: 1px solid #ccc;
  margin: 20px auto;
}
.copyright{
  text-align: center;
}
.logo
{
  width:90px;
  height: 90px;
  border-radius: 50%;
  cursor: pointer;
}
.igr
{
  width:50px;
  margin-bottom: 30px;
  border-radius: 45%;
  cursor: pointer;
}
        table {
            margin: 0 auto;
            font-size: large;
            border: 1px solid black;
        }
 
        h1 {
            text-align: center;
            color: #006600;
            font-size: xx-large;
            font-family: 'Gill Sans', 'Gill Sans MT',
            ' Calibri', 'Trebuchet MS', 'sans-serif';
        }
 
        td {
            background-color: #E4F5D4;
            border: 1px solid black;
        }
 
        th,
        td {
            font-weight: bold;
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }
 
        td {
            font-weight: lighter;
        }

        .kon
        {
            padding:60px;
            height:800px;
        }
    </style>
</head>
 
<body>
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

  <div class="kon"> 
    <section>
        <h1>Organ-Request-Record</h1>
        <!-- TABLE CONSTRUCTION -->
        <table>
            <tr>
                <th>NAME</th>
                <th>CITY</th>
                <th>STATE</th>
                <th>MOBILE NUMBER</th>
                <th>SOCIAL MEDIA</th>
                <th>DOB</th>
                <th>ORGAN</th>
            </tr>
            <!-- PHP CODE TO FETCH DATA FROM ROWS -->
            <?php
                // LOOP TILL END OF DATA
                if(mysqli_num_rows($rs1)>0)
                {
                while($rows = mysqli_fetch_assoc($rs1))
                {
            ?>
            <tr>
                <!-- FETCHING DATA FROM EACH
                    ROW OF EVERY COLUMN -->
                <td><?php echo $rows['name'];?></td>
                <td><?php echo $rows['city'];?></td>
                <td><?php echo $rows['state'];?></td>
                <td><?php echo $rows['mobile_number'];?></td>
                <td><?php echo $rows['social_media'];?></td>
                <td><?php echo $rows['dob'];?></td>
                <td><?php echo $rows['organs'];?></td>
            </tr>
            <?php
                }
            }
          } 
          else {
            header("Location:unsuccess.html");  
                    }
            
            ?>
        </table>
    </section>
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
            <a href="#">Home</a>
          </li>
          <li>
            <a href="know_us.html">Know_us</a>
          </li>
          <li>
            <a href="#">FAQ</a>
          </li>
          <li>
            <a href="#">Get Involved</a>
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
            <br>
            <br>
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
</body>
 
</html>

