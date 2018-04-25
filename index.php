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

	<img class="img-fluid w-100" alt="Responsive image" src="img/header.png">

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