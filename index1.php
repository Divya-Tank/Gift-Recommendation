<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="index1.css">
    <title>gift</title>

</head>

<body>
<?php

$con = mysqli_connect('localhost','root');
if($con){
    echo "connection sucessfull";
}else{
    echo "not connected";
}

mysqli_select_db($con,'feedback');

$firstname =$_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$country = $_POST['country'];
$message = $_POST['message'];

$query = "insert into feedback_form(firstname, lastname, email, country, message) 
          values ('$firstname','$lastname','$email','$country','$message')";

mysqli_query($con,$query);



?>
<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: signingift.php");
    exit;
}?>
    Welcome - <?php echo $_SESSION['email']?> you are logged in!!!
    <section>
        <header class="header">
            <a class="navbar-brand" href="#">
                <img src="./logogift2.png" width="200" height="60" class="d-inline-block align-top" alt="">

            </a>

            <div id="menu-btn" class="fas fa-bars"></div>

            <nav class="navbar">
                <a href="#home">Home</a>
                <a href="#relation">Relation</a>
                <a href="#blogs">Blogs</a>

                <a href="#feedback">Feedback</a>
                <a href="./signingift.php">Login</a>

            </nav>

        </header>
    </section>
    <br>
    <br>
    <br>
   
    <section class="home" id="home">

        <h1 class="headinghome"> Discover the best gifts ideas</h1>
        <div class="micro-slider">
            <div class="slider-item s1" data-href="#" data-target="_blank"> <img src="./carosoul/1.png" alt=""> </div>
            <div class="slider-item s1" data-href="#" data-target="_blank"> <img src="./carosoul/3.png" alt=""> </div>
            <div class="slider-item s1" data-href="#" data-target="_blank"> <img src="./carosoul/4.png" alt=""> </div>
            <div class="slider-item s1" data-href="#" data-target="_blank"> <img src="./carosoul/2.png" alt=""> </div>
            <div class="slider-item s1" data-href="#" data-target="_blank"> <img src="./carosoul/5.png" alt=""> </div>
            <div class="slider-item s1" data-href="#" data-target="_blank"> <img src="./carosoul/6.png" alt=""> </div>
            <div class="slider-item s1" data-href="#" data-target="_blank"> <img src="./carosoul/7.png" alt=""> </div>

        </div>
    </section>
    <br>
    <br>

    <section>
    <div class="container my-3">
    <div class="alert alert-success" role="alert">
      <h4 class="alert-heading">Welcome - <?php echo $_SESSION['email']?></h4>
      <p>Hey how are you doing? Welcome to GIFTREC. You are logged in as . Aww yeah, you can find out the best gift for the specific person and make special day to your close ones!!!...here the gifts are whuch is sutiable for that .</p>
      <hr>
      <p class="mb-0">Whenever you need to, be sure to logout <a href="/loginsystem/logout.php"> using this link.</a></p>
    </div>
  </div>
    </section>

    <section class="relation" id="relation">

        <div class="main">
            <div class="two alt-two">
                <h1>Relation
                    <span>Find gift ideas on relation</span>
                </h1>
                <br>
                <br>
            </div>

            <ul class="cards">

                <li class="cards_item">

                    <div class="card">
                        <div class="card_image">
                        <a href="./father/father.php">
                            <img src="./giftname/1.png" alt="HTML tutorial" style="width:380px;height: 227px;"></a>
                        </div>

                    </div>

                </li>
                <li class="cards_item">
                    <div class="card">
                    <a href="./mother/mother.php">
                        <div class="card_image"><img src="./giftname/2.png"></div>

                    </div>
                </li>
                <li class="cards_item">
                    <div class="card">
                    <a href="./sister/sister.php">
                        <div class="card_image"><img src="./giftname/3.png"></div>

                    </div>
                </li>
                <li class="cards_item">
                    <div class="card">
                    <a href="./brother/brother.php">
                        <div class="card_image"><img src="./giftname/4.png"></div>

                    </div>
                </li>
                <li class="cards_item">
                    <div class="card">
                    <a href="./wife/wife.php">
                        <div class="card_image"><img src="./giftname/5.png"></div>

                    </div>
                </li>
                <li class="cards_item">
                    <div class="card">
                    <a href="./husband/husband.php">
                        <div class="card_image"><img src="./giftname/6.png"></div>

                    </div>
                </li>
                <li class="cards_item">
                    <div class="card">
                    <a href="./friend/friend.php">
                        <div class="card_image"><img src="./giftname/7.png"></div>

                    </div>
                </li>
                <li class="cards_item">
                    <div class="card">
                   <a href="./kids/kids.php">
                    <div class="card_image"><img src="./giftname/8.png"></div>
                     </a>

                    </div>
                </li>

            </ul>

        </div>

     


    </section>

    <section class="blogs" id="blogs">
        <div class="two alt-two">
            <h1>Blogs <span>some blogs of ours</span>
            </h1>

        </div>

        <div class="blogcontainer">

            <div class="blog">
                <div class="myimg"><img src="giftblog.png" alt="not"></div>
                <div class="aside">
                    <h1>GIFT RECOMMENDATION</h1>
                    <br>
                    <h2 class="marginleft">The secret behind happiness of your close ones.</h2>
                    <p class="marginleft">Are you looking for a gift for your special ones? Are you Exhausted by finding the perfect gift? Hey! You got the talent! <b>Gift Recommendation</b> is the tool which will help you to find the best gift according to your relation with
                        your close one. </p>
                    <p class="marginleft"> <b>Gift Recommendation</b> is using various technologies to find the best gift for you. Here you will find the perfect gift ideas for your near and dear ones. You can also find the gift that has been liked by others. You may also like
                        the gift that you will be giving to your dear ones.
                    </p>
                    <p class="marginleft">Let's find the perfect gift and make them happy!</p>
                </div>

            </div>

        </div>
    </section>


    <section class="feeback" id="feedback">

        <div class="two alt-two">
    
            <h1>Feedback <span>Give your reviews</span>
            </h1>
        </div>
        </form>
        </div> 
        <div class="last">

            <div class="feedback">
           
                <div class="contact">
                    <div class="left-size">
                        <div class="address detail">
                            <i class="fas fa-map-marker-alt"></i>
                            <div class="topic">Address</div>
                            <div class="text-one">Surat, Gujarat</div>
                        </div>
                        <div class="phone detail">
                            <i class="fas fa-phone-alt"></i>
                            <div class="topic">Phone</div>
                            <div class="text-one">+919825944610</div>
                        </div>
                        <div class="email detail">
                            <i class="fas fa-envelope"></i>
                            <div class="topic">email</div>
                            <div class="text-one">contact@gmail.com</div>
                        </div>
                    </div>
                    <div class="right-side">


                        <div class="topic-text">Share your Experience with us</div>
                        <p>Please share your valueable responce with us and If you have any query with our web then please contact us </p>

                        <!-- <form action="" method="post"> -->
                        <form action="index1.php" method="post">
                            <div class="input-box">
                                <input type="text" name="firstname" placeholder="Enter First Name">
                            </div>
                            <div class="input-box">
                                <input type="text" name="lastname" placeholder="Enter Last name">
                            </div>
                            <div class="input-box">
                                <input type="text" name="email" placeholder="Enter your Email">
                            </div>
                            <div class="input-box">
                                <select id="country" name="country" class="country">    
                                <option value="none" style="color: red;"><p class="con">Select Country</p></option>    
                                <option value="australia">Australia</option>    
                                <option value="canada">Canada</option>    
                                <option value="usa">USA</option>    
                                <option value="russia">Russia</option>    
                                <option value="japan">Japan</option>    
                                <option value="india">India</option>    
                                <option value="china">China</option>    
                              </select>
                            </div>
                            <div class="input-box message-box">
                                <textarea name="message" placeholder="Enter your message"></textarea>
                            </div>
                           
                                <button class="button" type="submit" onclick="myfunction()">Send</button>
                           
                        </form>


<!-- <div class="container"> -->

                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="footer" id="footer">
        <div class="container"></div>
        <footer>

<!-- Footer main -->

            <section class="ft-main">
                <div class="ft-main-item">
                    <h2 class="ft-title">About</h2>
                    <ul>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Portfolio</a></li>
                        <li><a href="#">Pricing</a></li>
                        <li><a href="#">Customers</a></li>
                        <li><a href="#">Careers</a></li>
                    </ul>
                </div>
                <div class="ft-main-item">
                    <h2 class="ft-title">Resources</h2>
                    <ul>
                        <li><a href="#">Docs</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">eBooks</a></li>
                        <li><a href="#">Webinars</a></li>
                    </ul>
                </div>
                <div class="ft-main-item">
                    <h2 class="ft-title">Contact</h2>
                    <ul>
                        <li><a href="#">Help</a></li>
                        <li><a href="#">Sales</a></li>
                        <li><a href="#">Advertise</a></li>
                    </ul>
                </div>
                <div class="ft-main-item">
                    <h2 class="ft-title">Stay Updated</h2>
                    <p>Subscribe to our newsletter to get our latest news.</p>
                    <form class="formsub">
                        <input type="email" name="email" placeholder="Enter email address" class="emailfooter">
                        <input type="submit" value="Subscribe">
                    </form>
                </div>
            </section>

<!-- Footer social -->

            <section class="ft-social">
                <ul class="ft-social-list">
                    <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fab fa-github"></i></a></li>
                    <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                    <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                </ul>
            </section>

<!-- Footer legal -->

            <section class="ft-legal">
                <ul class="ft-legal-list">
                    <li><a href="#">Terms &amp; Conditions</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li>&copy; 2019 Copyright Nowrap Inc.</li>
                </ul>
            </section>
        </footer>
    </section>
    <script src="index1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/micro-slider@1.0.9/dist/micro-slider.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/hammer.js/2.0.8/hammer.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>