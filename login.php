<?php 

  session_start(); 

  include "conn.php";

  if(!empty($_POST)) {
    
    $user = $_POST['username'];
    $pass = $_POST['password'];

    $sql = mysqli_query($conn,"Select * from user where username ='".$user."' and password ='".$pass."'");

    $num = mysqli_num_rows($sql);

    if($num > 0){
      while ($row = mysqli_fetch_Array($sql)) {
        $uerid   = $row['userid'];
        $username   = $row['username'];        

        //session_start();
        $_SESSION['userid']   = $userid;
        $_SESSION['username'] = $username;


            header('Location: admin.php');
            
      }
    }
  }
?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/style.css">

  <script src="js/bootstrap.min.js"></script>

  <title>ระบบจองรถ</title>

    <style type="text/css">
      nav {
          border-bottom: 3px solid;
          border-image: linear-gradient(to right, #1565C0 0%, #64B5F6 100%);
          border-image-slice: 1; 
          box-shadow: 0 0px 8px 0 rgba(0, 0, 0, 0.2), 0 2px 15px 0 rgba(0, 0, 0, 0.19);
    }
      .border-bottom {
        border-bottom: 3px solid;
        border-image: linear-gradient(to left, #495aff 0%, #0acffe 100%);
        border-image-slice: 1;      
    }
      .fa-user-circle-o, .fa-registered {
        display: block;
        text-align: center; 
        margin-bottom: 25px;      
        background: -webkit-linear-gradient(#495aff, #0acffe);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
      }
      .email-password {
        color: white;
        background-image: linear-gradient(-20deg, #495aff 0%, #0acffe 100%);
      }
      .input-login {
        margin: auto;
        margin-top: 10px;
        max-width: 400px;
      }
      .card-preview {
          margin: auto;
        margin-top: 5%;
        max-width: 500px;
        height: 100%;
        padding: 25px;
        border-radius: 5px;
        border: 1px solid lightgray;
      }
      .btn-fg {
        display: flex;
        justify-content: center;
        align-items: center;
      }
      .btn-primary, .btn-danger {
        width: 400px;
        margin-top: 10px;
      }
      .btn-block {
        margin-top: 50px;
        max-width: 400px;
        margin: auto;
      }
      .btn-outline-primary:hover, .btn-outline-primary:active {
          color: white;      
          background-image: linear-gradient(to left, #495aff 0%, #0acffe 100%);
      }
      .btn-primary:hover, .btn-primary:active {
        color: white;      
        background-image: linear-gradient(to left, #495aff 0%, #0acffe 100%);
      }
      footer {
        margin-top: 25px;
        background-image: linear-gradient(-20deg, #1565C0 0%, #64B5F6 100%);
        height: 100%;
        width: 100%;
        color: white;
        text-align: center;
        padding: 20px;
      }
    </style>
</head>
<body>

  <!--Navbar-->
  <nav class="navbar navbar-expand-md bg-white navbar-light">
    <!-- Brand -->
    <div class="container-fluid">
      <a class="navbar-brand mx-auto" href="#">
        <img style="width: 12%;" src="img/logo-khonkaen.png">
        <span style="font-size: 20px; font-weight: bold; color: #1E88E5;">เทศบาลขอนแก่น</span>
      </a>

      <!-- Toggler/collapsibe Button -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Navbar links -->
      <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav mr-auto mt-2 mt-md-0"></ul>
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href=""><i class="fas fa-car mr-2" aria-hidden="true"></i>หน้าแรก</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href=""><i class="fas fa-reply-all mr-2" aria-hidden="true"></i>ตรวจสอบสถานะรถ</a>
          </li>       
          <li class="nav-item">
            <a class="nav-link" href="login.php"><i class="fas fa-sign-out mr-2" aria-hidden="true"></i>เข้าสู่ระบบ</a>
          </li> 
        </ul>
      </div>
    </div> 
  </nav>


<div class="container">
  <div class="card-preview">
    <center><img src="img/logo.png" width="200" style="margin-bottom: 20px;"></center>
    <form class="login" method="POST">
        <div class="input-group input-login">
            <span class="input-group-addon email-password"><i class="fa fa-user" aria-hidden="true"></i></span>
            <input id="username" type="text" class="form-control" name="username" placeholder="Username">
        </div>
        <div class="input-group input-login">
            <span class="input-group-addon email-password"><i class="fa fa-lock" aria-hidden="true"></i></span>
            <input id="password" type="password" class="form-control" name="password" placeholder="Password">
        </div>
        <button type="submit" class="btn btn-outline-primary btn-block" style="margin-top:10px;">Login</button>
      </form>
      <hr>
  </div>
</div>  
<br>

  <footer>
    <span style="font-style: italic;font-size: 20px;">ระบบ</span> 
    <span style="font-weight: bold;font-size: 20px;">จองรถ</span>
    <hr style="width: 150px;background-color: white;">
    <div style="line-height: 5px;margin-top: 30px;">
      <p>Copyright &copy; 2018</p>
      <p style="margin-bottom: 20px;">by Team Enter</p>
    </div>
  </footer>

  <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

</body>
</html>