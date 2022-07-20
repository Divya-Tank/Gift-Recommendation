<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="signupgift.css">
    <script src="signupgift.js"></script>
    <title>sign up</title>
</head>
<body>
<div class="container">
    <form id="form" class="form" autocomplete="off" method="post" action="signupgift.php">
        <h2>Register with us</h2>
        <div class="form-control">
            <label for="username">Username</label>
            <input type="text" name="username" placeholder="Enter username">
            <small>Error message</small>
        </div>
        <div class="form-control">
            <label for="email">Email</label>
            <input type="text" name="email" placeholder="Enter email">
            <small>Error message</small>
        </div>
        <div class="form-control">
            <label for="password">Password</label>
            <input type="password" name="password" placeholder="Enter password">
            <small>Error message</small>
        </div>
        <div class="form-control">
            <label for="password2">Confirm Passsword</label>
            <input type="password" name="cpassword" placeholder="Enter password again">
            <small>Error message</small>
        </div>
        <div class="form-control">
            <label for="age">age</label>
            <input type="number" name="age" placeholder="Enter age">
            <small>Error message</small>
        </div>

        <div class="form-control">
            <label for="city">city</label>
            <input type="city" name="city" placeholder="Enter city">
            <small>Error message</small>
        </div>

        <div class="form-control">
        <label for="profession">Choose a profession</label>
         <select id="profession" name="profession">
         <option value="select" selected >selects</option>
             <option value="businessman">businessman</option>
             <option value="student">student</option>
             <option value="teacher">teacher</option>
             <option value="coworker">co-worker</option>
        </select>
            <small>Error message</small>
        </div>
        <button type="submit">Submit</button>
    </form>
</div>
 
<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "users";

$conn = mysqli_connect($server, $username, $password, $database);
if ($conn){
//   echo "success";
 }
else{
    die("Error". mysqli_connect_error());
}

?>





<!-- insert data into table... -->



<?php
$showAlert = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // include 'partials/_dbconnect.php';
    $username = $_POST["username"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];
    $city = $_POST["city"];
    $age= $_POST["age"];
    $email = $_POST["email"];
    $profession = $_POST["profession"];


    $exists=false;
    if(($password == $cpassword) && $exists==false){
        $sql = "INSERT INTO `users_signup` (`id`, `username`, `email`, `password`, `cpassword`, `age`, `city`, `profession`) VALUES (NULL, '$username', '$email', '$password', '$cpassword', '$age', '$city', '$profession')";
        $result = mysqli_query($conn, $sql);
        if ($result){
            $showAlert = true;
            header('location:index1.php');
        }
    }
    else{
        $showError = "Passwords do not match";
    }
}
    
?>


    
    <?php
    if($showAlert){
    echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> Your account is now created and you can login
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div> ';
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

   
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>


    <script src="app.js"></script>
</body>
</html>