<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CAREERS with Parallax</title>
    <link rel="stylesheet" href="css/careers_style.css">
    <link rel="stylesheet" href="css/Footer_style.css">

    <!-- to add google icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <!-- to add social media icons -->
       <link href="https://netdna.bootstrapcdn.com/font-awesome/4.0.1/css/font-awesome.css" rel="stylesheet">
   
</head>
<body>

    
        <!-- OUR NAVIGATION BAR -->
  
        <div>
            <ul class="topnav">
                <li> <div class="closeheads">
             
                    <img src="images/Nature Flower Red beauty salon stamp Logo .png" width="100px">
                </div></li>
            <li> <a href="PARALLEX DINING.html" class="navig1">HOME </a></li>
            <li> <a href="menu.html" class="navig1" >MENU </a></li>
            <li> <a href="Reservationphp.php" class="navig1">RESERVATION </a></li>
            <li> <a href="REVIEWSphp.php" class="navig1">CUSTOMER REVIEWS </a></li>
            <li> <a href="OrderOnline/orderMenu.html" class="navig1">ORDER ONLINE </a></li>
            <li> <a href="CAREERSphp.php" class="navig1">CAREERS </a></li>
            </ul>
    
        <div> 
    

    <div class="JoinUsIntro">
    <h1 class="curvey"> Work with us </h1>
 <p>If you are interested in joining PARALLAX’s team, please use the form below to tell us more about yourself. <br>
     We look forward to meeting. <p> 
     </div>
<Br><BR>
    <div class="regform"><h1>Registration Form</h1></div>
    <div class="main">
        <form action="CAREERSphp.php" method="post"> 
            <div id="name">
                <h2 class="name">Name</h2>
                <input class="firstname" type="text" name="name" value required><br>
                <label class="firstlabel">Enter your Name</label>
            </div>

            <h2 class="name">Permanent Address</h2>
            <textarea class="address" name="address" row="8" cols="40" value required></textarea>

            <h2 class="name">Email</h2>
            <input class="email" type="text" name="email" value required>

            <h2 class="name">Phone</h2>
            <input class="code" type="text" name="area_code" value required>
            <label class="area-code">Area Code</label>
            <input class="number" type="text" name="phoneno" value required>
            <label class="phone-number">Phone Number</label>

            <h2 class="name">Position Seeking</h2>
            <select class="option" name="position" value required>>
                <option disabled="disabled" selected="selected" value=" ">Choose a job profile</option>
                <option value="Restaurant Manager">Restautant Manager</option>
                <option value="Head Chef">Head Chef</option>
                <option value="Host">Host</option>
                <option value="Bar Tender">Bar Tender</option>
                <option value="Cashier">Cashier</option>
                <option value="Busser">Busser</option>
                <option value="Server">Server</option>

            </select>

                <h2 id="student">Upload Your Resume</h2>
                <input class="file" type="file" name="Resume" value="" accept="application/pdf" value required>

            <button type="submit" name="submit">Register</button>

    <!-- USING PHP TO MAKE THE PAGE DYNAMIC -->

      <?php
      //Taking in the user data

  
        
        if (isset($_POST['submit'])) {
            
            $name = $_POST['name'];
            $address = $_POST['address'];                
            $email=$_POST['email'];
            $area_code=$_POST['area_code'];
            $phoneno=$_POST['phoneno'];
            $position=$_POST['position'];
            $resume=$_POST['Resume'];

              
        
        // Connecting to the Database

        //these are the by default values we use on our local server.
        //Once the website goes to the public domain the username and server names change
            $servername="localhost";
            $username="root";
            $password="";
        //Name of the DataBase we want to use
            $database="PARALLAX USER DATA";

        //Creating a connection with MySql i.e., connecting the user data with database

        //the function used to connect is myseli_connect and it takes the 4 parameters defined above
            $conn=mysqli_connect($servername, $username, $password, $database);
        
        //mysqli_connect gives a bool value of true or false
        #if sql connects successfully, insert the data else display error

            if ($conn) {
            //Submitting user response to our database
            //SQL query to be executed
            $sql="INSERT INTO `careers`(`Name`, `Address`, `Email`, `Area Code`, `Phone Number`, `Position`,`Resume`) VALUES ('$name','$address','$email','$area_code','$phoneno','$position','$resume')" ;
                              //table name            //columns                                                             //Different cases or row data


            //making a query connect the database to the page
            $result= mysqli_query($conn, $sql);

            // Add a new booking to the Table reservation database and Provide response to the user.
            if ($result) {
            echo "<strong> Hey $name!  <strong> We have successfully received your details!";
            echo "<br> Expect a response from us in next 5 working days";
            } 
        }

            else {
                echo "Error in storing your details :| --> ".
                mysqli_error($conn);
                        }
        }
        ?>
   

        </form>


    </div>
    <br>
    <br>
    <br>
    

    
        <!-- footer of the WebPage -->
        <footer>
            <ul>
            <li class="footerli">
                <div class="li1">  
                    <h5 class="newfont">CONTACT US</h5>
                 
                 
                        <div class="newfont" style="font-size:13px">
                            <span class="material-icons" id="smallicon">
                                phone
                                </span>
                            +91 8839574839
                            <br>
                            <div>
                            <span class="material-icons" id="smallicon">
                                alternate_email
                                </span>
                                info@parallaxdining.com
                            </div>
                        </div>
                
                    
                          
                           
                       
                </div>

            </li>
            <li class="footerli">
                <div class="li2">  
                    <h5 class="newfont">FOLLOW US</h5>
                
                
                        <!-- adding social media icons -->
                        <div >

                            <i class="fa fa-facebook circle"></i>
                            <i class="fa fa-twitter circle"></i>
                            <i class="fa fa-google-plus circle"></i>

                        </div>
                          
                           
                       
                </div>

                <li class="footerli">
                    <div class="li3">  
                    <h5 class="newfont">DEVELOPED BY</h5>
                    
                    
                    <!-- adding social media icons -->
                        <div >
                                <span class="material-icons" id="smallicon">person</span> Ayushi Choudhary
                                    <br>
                                    <span class="material-icons" id="smallicon">
                                        person
                                        </span> Astha Vishnoi
                                        <br>
                                        <span class="material-icons" id="smallicon">
                                            person
                                            </span> Disha Patel

    
                            </div>
                              
                               
                           
                    </div>

            </li>
        </ul>

        </footer>

</body>
</html>