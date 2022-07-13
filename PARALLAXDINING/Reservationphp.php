<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paralax Dining-Reservation</title>
     <!-- to add google icons -->
     <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

     <!-- to add social media icons -->
     <link href="https://netdna.bootstrapcdn.com/font-awesome/4.0.1/css/font-awesome.css" rel="stylesheet">
     
 
    <!-- OUR RESERVATION CSS -->
    <link rel="stylesheet" href="css/Reservation_style.css">
    <link rel="stylesheet" href="css/Footer_style.css">

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
    </section>

    <!-- Table reservation header -->
    <div class="main">
    <section class="section1">
        <div class="welcome-text center">
            <br>
        <div class="clingHeads">
            <h1 class="curvey headlarge ">Reservation</h1>
            <h1 style="font-size:100px">Book A Table</h1>
        </div>
        ______________ <span class="material-icons">
            restaurant_menu
            </span> ______________

        </div>
    </section>



    <!-- Customer's booking detail -->
    <section class="section2">
        <div class="booking menu">
   
        <ul class="List1">
    
    <li>
    
    <!-- image on left half of the booking section -->
    <img src="https://images.unsplash.com/photo-1621206174528-8a1a23bf0f31?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1868&q=80" height="500px" width="500px">
    </li>

    <!-- form on right half of the booking section -->
    <li class="right-half">
        <form action="Reservationphp.php" class="booking-form" method="post">
        <div>
        <label for="name">Your Name</label> 
        <input type="text" id="name" name="name" class="form-text"  value required>
                          <!-- We use value = " ?php echo var_name ?>" to keep the data filled in the form even after submittion -->
        </div>
        
        <div>
        <label for="phoneno">Your Phone Number</label>
        <input type="number" id="phoneno" name="phoneno" class="form-text"  value required>
        </div>
                    
        <div>
        <label for="date"> Date</label>
        <input type="date" id="date" name="date" class="form-text" placeholder="DD-MM-YYYY"  value required>
        </div>

        <div class="timediv">
        <!-- TIME dropdown -->
        <label for='time'>Time of Dinner</label>
        <select name='time' id='time' class="black_drop">
            <option value=""> Choose a time </option>
            <option value="7pm">7-8 p.m.</option>
            <option value="8pm">8-9 p.m.</option>
            <option value="9pm">9-10 p.m.</option>
        </select>
        </div>

        <!-- NUMBER OF PEOPLE -->
        <div class="form-radio">
        <label for="people" class="people">Choose your dining space</label>
        <br>
        <label class="radio-item">2
        <input type="radio" checked="checked" name="people" value="2">
        <span class="checkmark"></span>
        </label>
        <label class="radio-item">4
        <input type="radio" checked="checked" name="people" value="4">
        <span class="checkmark"></span>
        </label>
        <label class="radio-item">6
        <input type="radio" checked="checked" name="people" value="6">
        <span class="checkmark"></span>
        </label>  
        </div>
        
        <!-- Form's submit button -->
        <button type="submit" name = "submit" class="button" >Book a table!</button> 
        <br>
        <br>

    <!-- USING PHP TO MAKE THE PAGE DYNAMIC -->

      <?php
      //Taking in the user data

        if (isset($_POST['submit'])) {
            $name = $_POST['name'];
            $date = $_POST['date'];                
            $people=$_POST['people'];
            $time=$_POST['time'];
            $phoneno=$_POST['phoneno'];
              
        
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
            $sql="INSERT INTO tablereservation ( `Name`, `Phone Number`, `No. of People`, `Date`, `Time`) VALUES ('$name','$phoneno','$people', '$date', '$time')";
                                //table name            //columns                                                   //Different cases or row data


            //making a query be connecting the database to the page
            $result= mysqli_query($conn, $sql);

            // Add a new booking to the Table reservation database and Provide response to the user.
            if ($result) {
            echo "<small><strong>Congratulations <strong> $name! We have successfully booked a table for $people people.<small>";
            echo "<br>";
            echo "Hoping to see you on $date at $time";
            } 
            else {
            echo "Error in storing your details :| --> ".
            mysqli_error($conn);
                    }
                }
            }
        ?>
        </form>
    </li>
    </ul>
    </section>
    </div>



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