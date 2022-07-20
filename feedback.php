<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="feedbackstyle.css">
  <title>Document</title>
</head>
<body>

  <h2 class="feedbackheadig">FEED BACK FORM</h2>    
<div class="container">    
  <form action="welcome.php" method="post">    
    <div class="row">    
      <div class="col-25">    
        <label for="fname">First Name</label>    
      </div>    
      <div class="col-75">    
        <input type="text" id="fname" name="firstname" placeholder="Your name..">    
      </div>    
    </div>    
    <div class="row">    
      <div class="col-25">    
        <label for="lname">Last Name</label>    
      </div>    
      <div class="col-75">    
        <input type="text" id="lname" name="lastname" placeholder="Your last name..">    
      </div>    
    </div>    
    <div class="row">    
        <div class="col-25">    
          <label for="email">Mail Id</label>    
        </div>    
        <div class="col-75">    
          <input type="email" id="email" name="mailid" placeholder="Your mail id..">    
        </div>    
      </div>    
    <div class="row">    
      <div class="col-25">    
        <label for="country">Country</label>    
      </div>    
      <div class="col-75">    
        <select id="country" name="country">    
            <option value="none">Select Country</option>    
          <option value="australia">Australia</option>    
          <option value="canada">Canada</option>    
          <option value="usa">USA</option>    
          <option value="russia">Russia</option>    
          <option value="japan">Japan</option>    
          <option value="india">India</option>    
          <option value="china">China</option>    
        </select>    
      </div>    
    </div>    
    <div class="row">    
      <div class="col-25">    
        <label for="feed_back">Feed Back</label>    
      </div>    
      <div class="col-75">    
        <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>    
      </div>    
    </div>    
    <div class="row">    
      <input type="submit" value="Submit">    
    </div>    
  </form>  
  
  <?php

$showAlert = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] =="POST"){
   
 $firstname=$_POST['firstname'];
 $lastname=$_POST['lastname'];
 $mailid=$_POST['mailid'];
 $country=$_POST['country'];
 $feedback=$_POST['subject'];
   $exists=false;

// check that the data is exists in database or not?

       $sql="INSERT INTO `feedback` (`id`, `firstname`, `lastname`, `email`, `country`, `message`) VALUES (NULL, '$firstname', '$lastname', '$mailid', '$country', '$feedback');";
       $result=mysqli_query($conn,$sql);

       if($result){
       
          
           echo "data inserted successfully";
            

       }

       else{
           $showError = "Passwords do not match";
           // echo "data can not insert !";
       }
   }


   

?>

<div class="container">



<?php
if($showAlert){
echo 'data inserted ';
}
if($showError){
echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
   <strong>Error!</strong> '. $showError.'
   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
       <span aria-hidden="true">×</span>
   </button>
</div> ';
}
?>
</div>    
</body>
</html>