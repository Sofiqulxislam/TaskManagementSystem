<?php    
    include('includes/connection.php');
    if(isset($_POST['userRegistration'])){
        $query = "insert into users values(null,'$_POST[name]','$_POST[email]','$_POST[password]',$_POST[mobile])";
          $query_run = mysqli_query($connection,$query);
        if($query_run){
          echo "<script type='text/javascript'>
              alert('User registered successfully....');
            window.location.href = 'index.php';  
          </script>";
        }
        else{
          echo "<script type='text/javascript'>
              alert('Error...Plz try again.');
              window.location.href = 'index.php';
          </script>";
        }
    }
?>
<html>
<head>
    <title>User Login</title>
    <!-- jQuery file -->
    <script src="includes/juqery_latest.js"></script>
    <!-- Bootstrap files -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- External CSS file -->
    <link rel="stylesheet" href="css/style.css">
    <style>
        #register_home_page {
            background-color: #81CACF ;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.5);
        }
    </style>
</head>
<body>
    <div class="row">
        <div class="col-md-3 m-auto" id="register_home_page">
            <center><h3>User Registration</h3>
            <form action="" method="post">
                <div class="form-group">
                    <input type="text" class="form-control" name="name" placeholder="Enter Username" required>
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" name="email" placeholder="Enter Email" required>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="password" placeholder="Enter Password" required>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="mobile" placeholder="Mobile No." required>
                </div>
                <div class="form-group">
                <input type="submit" class="btn btn-warning" name="userRegistration" value="Register">
                <a href="index.php" class="btn btn-danger">Go to Home</a>
                </div>
            </form>
        </center>
        </div>
    </div>
</body>
</html>