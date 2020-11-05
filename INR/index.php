<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
  
</head>
<body>

<!--NavBar -->

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Green IT</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="index.php" <a href="./directory/yourfile.pdf" download="newfilename">Download</a> <span class="sr-only">(current)</span></a>
      
      </li>
            <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="userinfo.php">User Info</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Zipcode</a>
          <a class="dropdown-item" href="#">Another Zipcode</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Test</a>
        </div>
      </li>
      
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

<!--Carousel -->

<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/1.png" alt="Los Angeles" width="1100" height="500">
      <div class="carousel-caption">
        <h3>GreenIT</h3>
        <p>Dummy Text</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/2.png" alt="Chicago" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Dummy Text</h3>
        <p>Dummy Text</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/3.png" alt="New York" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Dummy Text</h3>
        <p>Dummy Text</p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

<!-- About -->
<section class="my-5">
	<div class="py-5">
		<h3 class="text-center">About</h3>
	</div>
<div class="container-fluid">
	<div class="row">
		<div class="col-lg-6 col-md-6 col-12">
			<img src="images/7.png" class="img-fluid aboutimg">
		</div>
		<div class="col-lg-6 col-md-6 col-12">
			<h2 class="display-4">Our Team</h2>
			<p class="py-3">According to the team approach to leadership, a team is a type of organizational group of people that are members. A team is composed of members who are dependent on each other, work towards interchangeable achievements, and share common attainment</p>
			<a href="about.php" class="btn btn-success">Check More</a>
		</div>
	</div>
</div>
</section>

<!-- Our Services -->

<section class="my-5">
	<div class="py-5">		
		<h2 class="text-center">Our Services</h2>
        </div>

		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-4 col-md-4 col-12">
					<div class="card">
  <img class="card-img-top" src="images/4.png" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Dummy Text</h4>
    <p class="card-text">Some example text.</p>
    <a href="index.php#" class="btn btn-primary">See Profile</a>
</div>
</div>
</div>
<div class="col-lg-4 col-md-4 col-12">
					<div class="card">
  <img class="card-img-top" src="images/5.png" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Dummy Text</h4>
    <p class="card-text">Some example text.</p>
    <a href="index.php#" class="btn btn-primary">See Profile</a>
</div>
</div>
</div>
<div class="col-lg-4 col-md-4 col-12">
					<div class="card">
  <img class="card-img-top" src="images/6.png" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">The Team</h4>
    <p class="card-text">Some example text.</p>
    <a href="index.php#" class="btn btn-primary">See Profile</a>
</div>
</div>
</div>
</div>
</div>
</section>

<!-- User Information -->

<section class="my-5">
	<div class="py-5">		
		<h2 class="text-center">User Information</h2>
        </div>

        <div class="w-50 m-auto">
        	<form action="userinfo.php" method="post">
        		<div class="form-group">
        			<label>Username</label>
        			<input type="text" name="user" autocomplete="off" class="form-control">        			
        		</div>
        		<div class="form-group">
        			<label>Email Id</label>
        			<input type="text" name="email" autocomplete="off" class="form-control">        			
        		</div>
        		<div class="form-group">
        			<label>Mobile</label>
        			<input type="text" name="mobile" autocomplete="off" class="form-control">        			
        		</div>
        		<div class="form-group">
        			<label>Comments</label>
        			<textarea class="form-control" name="comments">        				
        			</textarea>          			
        		</div>
        		<button type="submit" name="register" class="btn btn-success">Submit</button>
        		
        	</form>
        </div>
</section>



<!-- Footer -->
<footer>
	<p class="p-3 bg-dark text-white text-center">@D4G Pioneers</p>
</footer>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>