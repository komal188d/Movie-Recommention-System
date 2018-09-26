<?php include ('login.php');?>
<?php include ('main_data.php');?>
<!DOCTYPE html>
<html>
<head>
	<title>THE PUURFECT MATCH</title>
	<!-- <link rel="stylesheet" type="text/css" href="ass10.css">
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
	 -->
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet'>
	<link rel="stylesheet" type="text/css" href="mainpage.css">
</head>
<body>
<nav class="navbar fixed-top navbar-expand-lg bg-dark">
		<div class="container">
  <a class="navbar-brand" href="mainpage.html">Purrfect Match</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
    	<li class="nav-item active">
        <a class="nav-link" href="mainpage.html">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contact <span class="sr-only">(current)</span></a>
      </li>
  </ul>
  <!-- <div id='TextBoxesGroup'> -->
	<!-- <div id="TextBoxDiv" style="display: none;"> -->
    <form>
	<input id="TextBoxDiv" style="display: none;" type='text'>
  </form>
	<!-- </div> -->
<!-- </div> -->
  <ul class="nav navbar-nav navbar-right">
  	<li class="nav-item active">
        <i onclick="myFunction()" class="fas fa-search" id="toggleB"></i>
      </li>
  	<li class="nav-item active">
        <a class="nav-link" href="2.php">Sign Up <i class="fas fa-user-plus"></i></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" name="log" href="#" onclick="log()">Login <i class="fas fa-user"></i></a>
      </li>
  </ul>
</div>
  </div>
</nav>
			<!-- <img src="http://www.lifewithcats.tv/wp-content/uploads/2017/05/referencecom.jpg">
 -->
 <modal id="login1" style="display: none;">
<form method="POST">
				  <div class="form-group">
				    <label for="exampleInputEmail1">Email address</label>
				    <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required="true">
				  </div>
				  <div class="form-group">
				    <label for="exampleInputPassword1">Password</label>
				    <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
				  </div>
				  <!-- <div class="form-group form-check">
				    <input type="checkbox" class="form-check-input" id="exampleCheck1">
				    <label class="form-check-label" for="exampleCheck1">Check me out</label>
				  </div> -->
				  <button name="button" type="submit" class="btn btn-primary">Submit</button>
				</form>
</modal>


<h4>UPCOMING MOVIES</h4>

<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="container" id="top">
    <form action="main_data.php">
  <div class="row">
  
    <div onclick="show(0,0)" class="col-sm-6 col-lg-3 col-md-4 col-xl-2">
      <img src="<?php echo $movie_link[0];?>" alt="Doctor Strange">
      <span style="color: white"><b><i><?php echo $movie_name[0]; ?></i></b></span>
    </div >
    <div onclick="show(0,1)" class="col-sm-6 col-lg-3 col-md-4 col-xl-2">
      <img src="<?php echo $movie_link[1];?>">
      <span style="color: white"><b><i><?php echo $movie_name[1]; ?></i></b></span>
    </div >
    <div onclick="show(0,2)" class="col-sm-6 col-lg-3 col-md-4 col-xl-2">
      <img src="<?php echo $movie_link[2];?>">
      <span style="color: white"><b><i><?php echo $movie_name[2]; ?></i></b></span>
    </div >
    <div onclick="show(0,3)" class="col-sm-6 col-lg-3 col-md-4 col-xl-2">
      <img src="<?php echo $movie_link[3];?>">
      <span style="color: white"><b><i><?php echo $movie_name[3]; ?></i></b></span>
    </div >
    <div onclick="show(0,4)" class="col-sm-6 col-lg-3 col-md-4 col-xl-2">
      <img src="<?php echo $movie_link[4];?>">
      <span style="color: white"><b><i><?php echo $movie_name[4]; ?></i></b></span>
    </div >
    <div onclick="show(0,5)" class="col-sm-6 col-lg-3 col-md-4 col-xl-2">
      <img src="<?php echo $movie_link[5];?>">
      <span style="color: white"><b><i><?php echo $movie_name[5]; ?></i></b></span>
    </div>
  
  </div>
  </form>
</div>
    </div>
    <div class="carousel-item">
      <div class="container" id="top">
  <div class="row">
    <div class="col-sm-6 col-lg-3 col-md-4 col-xl-2">
      <img src="http://t2.gstatic.com/images?q=tbn:ANd9GcS1cK4t_uWmqHaRYD9uq69hLEWy7f7NpIfjPlQECdooplpkQcEp">
      <span style="color: white"><b><i>Sultan</i></b></span>
    </div>
    <div class="col-sm-6 col-lg-3 col-md-4 col-xl-2">
      <img src="http://t3.gstatic.com/images?q=tbn:ANd9GcQIXnFlBKGWT1ByyIu3qfxX6opQX6BmeeU_qsiE3X8rX9ZRr63r">
      <span style="color: white"><b><i>Dangal</i></b></span>
    </div>
    <div class="col-sm-6 col-lg-3 col-md-4 col-xl-2">
      <img src="http://t3.gstatic.com/images?q=tbn:ANd9GcT4H2JWKIA8a2_gGVSStPrGQNwGCJHbkbsx_q7Ue1cXN1k1wvC7">
      <span style="color: white"><b><i>Rustom</i></b></span>
    </div>
    <div class="col-sm-6 col-lg-3 col-md-4 col-xl-2">
      <img src="http://t1.gstatic.com/images?q=tbn:ANd9GcTm52BWbxXmwOpfz5rmx0BNBj79kSQoGpYPq4TVt07Jel5En6aC">
      <span style="color: white"><b><i>The Wolf Of Wallstreet</i></b></span>
    </div>
    <div class="col-sm-6 col-lg-3 col-md-4 col-xl-2">
      <img src="https://upload.wikimedia.org/wikipedia/en/f/fc/Thor_poster.jpg">
      <span style="color: white"><b><i>Thor</i></b></span>
    </div>
    <div class="col-sm-6 col-lg-3 col-md-4 col-xl-2">
      <img src="http://t1.gstatic.com/images?q=tbn:ANd9GcTbUWVX-6eusHp85uW6cbtbwzrW5UtBXgpc2FkCQEJ_YUO574gO">
      <span style="color: white"><b><i>Iron Man 2</i></b></span>
    </div>
  </div>
</div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<br>
<br>
<h4>TOP MOVIES</h4>
<div id="carouselExampleControls1" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="container" id="top">
  <div class="row">
    <div class="col-sm-6 col-lg-3 col-md-4 col-xl-2">
      <img src="http://t3.gstatic.com/images?q=tbn:ANd9GcSmG4ms8wxdnuKOwetpc4qltTv7pHopDLRTi-t98dx-L-kt_b1t">
      <span style="color: white"><b><i>Doctor Strange</i></b></span>
    </div>
    <div class="col-sm-6 col-lg-3 col-md-4 col-xl-2">
      <img src="http://t2.gstatic.com/images?q=tbn:ANd9GcRo9vfJCM6dzPkZHIHBVCtlJnAnew9Ai26kEdrli0-tfmatmciD">
      <span style="color: white"><b><i>Inception</i></b></span>
    </div>
    <div class="col-sm-6 col-lg-3 col-md-4 col-xl-2">
      <img src="http://www.gstatic.com/tv/thumb/movieposters/15418836/p15418836_p_v8_aa.jpg">
      <span style="color: white"><b><i>The Kissing Booth</i></b></span>
    </div>
    <div class="col-sm-6 col-lg-3 col-md-4 col-xl-2">
      <img src="http://t0.gstatic.com/images?q=tbn:ANd9GcQhYjUIu2o5v5u3rfJpCq5Cz0Q9WK--XdYxai_N2d0ImohPiIOp">
      <span style="color: white"><b><i>Tiatanic</i></b></span>
    </div>
    <div class="col-sm-6 col-lg-3 col-md-4 col-xl-2">
      <img src="http://t1.gstatic.com/images?q=tbn:ANd9GcQc8OYsNpuM1rOKxYzwtbA1cXJIOOETfFDIbU8ONel_sHaIEEf_">
      <span style="color: white"><b><i>The Notebook</i></b></span>
    </div>
    <div class="col-sm-6 col-lg-3 col-md-4 col-xl-2">
      <img src="http://www.gstatic.com/tv/thumb/movieposters/7951929/p7951929_p_v8_aa.jpg">
      <span style="color: white"><b><i>3 Idiots</i></b></span>
    </div>
  </div>
</div>
    </div>
    <div class="carousel-item">
      <div class="container" id="top">
  <div class="row">
    <div class="col-sm-6 col-lg-3 col-md-4 col-xl-2">
      <img src="http://t2.gstatic.com/images?q=tbn:ANd9GcS1cK4t_uWmqHaRYD9uq69hLEWy7f7NpIfjPlQECdooplpkQcEp">
      <span style="color: white"><b><i>Sultan</i></b></span>
    </div>
    <div class="col-sm-6 col-lg-3 col-md-4 col-xl-2">
      <img src="http://t3.gstatic.com/images?q=tbn:ANd9GcQIXnFlBKGWT1ByyIu3qfxX6opQX6BmeeU_qsiE3X8rX9ZRr63r">
      <span style="color: white"><b><i>Dangal</i></b></span>
    </div>
    <div class="col-sm-6 col-lg-3 col-md-4 col-xl-2">
      <img src="http://t3.gstatic.com/images?q=tbn:ANd9GcT4H2JWKIA8a2_gGVSStPrGQNwGCJHbkbsx_q7Ue1cXN1k1wvC7">
      <span style="color: white"><b><i>Rustom</i></b></span>
    </div>
    <div class="col-sm-6 col-lg-3 col-md-4 col-xl-2">
      <img src="http://t1.gstatic.com/images?q=tbn:ANd9GcTm52BWbxXmwOpfz5rmx0BNBj79kSQoGpYPq4TVt07Jel5En6aC">
      <span style="color: white"><b><i>The Wolf Of Wallstreet</i></b></span>
    </div>
    <div class="col-sm-6 col-lg-3 col-md-4 col-xl-2">
      <img src="https://upload.wikimedia.org/wikipedia/en/f/fc/Thor_poster.jpg">
      <span style="color: white"><b><i>Thor</i></b></span>
    </div>
    <div class="col-sm-6 col-lg-3 col-md-4 col-xl-2">
      <img src="http://t1.gstatic.com/images?q=tbn:ANd9GcTbUWVX-6eusHp85uW6cbtbwzrW5UtBXgpc2FkCQEJ_YUO574gO">
      <span style="color: white"><b><i>Iron Man 2</i></b></span>
    </div>
  </div>
</div>
    </div>
  </div>
  <a class="carousel-control-prev" id="one" href="#carouselExampleControls1" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" id="two" href="#carouselExampleControls1" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>



<h4>TV SHOWS</h4>
<div id="carouselExampleControls2" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="container" id="top">
  <div class="row">
    <div class="col-sm-6 col-lg-3 col-md-4 col-xl-2">
      <img src="http://t3.gstatic.com/images?q=tbn:ANd9GcSmG4ms8wxdnuKOwetpc4qltTv7pHopDLRTi-t98dx-L-kt_b1t">
      <span style="color: white"><b><i>Doctor Strange</i></b></span>
    </div>
    <div class="col-sm-6 col-lg-3 col-md-4 col-xl-2">
      <img src="http://t2.gstatic.com/images?q=tbn:ANd9GcRo9vfJCM6dzPkZHIHBVCtlJnAnew9Ai26kEdrli0-tfmatmciD">
      <span style="color: white"><b><i>Inception</i></b></span>
    </div>
    <div class="col-sm-6 col-lg-3 col-md-4 col-xl-2">
      <img src="http://www.gstatic.com/tv/thumb/movieposters/15418836/p15418836_p_v8_aa.jpg">
      <span style="color: white"><b><i>The Kissing Booth</i></b></span>
    </div>
    <div class="col-sm-6 col-lg-3 col-md-4 col-xl-2">
      <img src="http://t0.gstatic.com/images?q=tbn:ANd9GcQhYjUIu2o5v5u3rfJpCq5Cz0Q9WK--XdYxai_N2d0ImohPiIOp">
      <span style="color: white"><b><i>Tiatanic</i></b></span>
    </div>
    <div class="col-sm-6 col-lg-3 col-md-4 col-xl-2">
      <img src="http://t1.gstatic.com/images?q=tbn:ANd9GcQc8OYsNpuM1rOKxYzwtbA1cXJIOOETfFDIbU8ONel_sHaIEEf_">
      <span style="color: white"><b><i>The Notebook</i></b></span>
    </div>
    <div class="col-sm-6 col-lg-3 col-md-4 col-xl-2">
      <img src="http://www.gstatic.com/tv/thumb/movieposters/7951929/p7951929_p_v8_aa.jpg">
      <span style="color: white"><b><i>3 Idiots</i></b></span>
    </div>
  </div>
</div>
    </div>
    <div class="carousel-item">
      <div class="container" id="top">
  <div class="row">
    <div class="col-sm-6 col-lg-3 col-md-4 col-xl-2">
      <img src="http://t2.gstatic.com/images?q=tbn:ANd9GcS1cK4t_uWmqHaRYD9uq69hLEWy7f7NpIfjPlQECdooplpkQcEp">
      <span style="color: white"><b><i>Sultan</i></b></span>
    </div>
    <div class="col-sm-6 col-lg-3 col-md-4 col-xl-2">
      <img src="http://t3.gstatic.com/images?q=tbn:ANd9GcQIXnFlBKGWT1ByyIu3qfxX6opQX6BmeeU_qsiE3X8rX9ZRr63r">
      <span style="color: white"><b><i>Dangal</i></b></span>
    </div>
    <div class="col-sm-6 col-lg-3 col-md-4 col-xl-2">
      <img src="http://t3.gstatic.com/images?q=tbn:ANd9GcT4H2JWKIA8a2_gGVSStPrGQNwGCJHbkbsx_q7Ue1cXN1k1wvC7">
      <span style="color: white"><b><i>Rustom</i></b></span>
    </div>
    <div class="col-sm-6 col-lg-3 col-md-4 col-xl-2">
      <img src="http://t1.gstatic.com/images?q=tbn:ANd9GcTm52BWbxXmwOpfz5rmx0BNBj79kSQoGpYPq4TVt07Jel5En6aC">
      <span style="color: white"><b><i>The Wolf Of Wallstreet</i></b></span>
    </div>
    <div class="col-sm-6 col-lg-3 col-md-4 col-xl-2">
      <img src="https://upload.wikimedia.org/wikipedia/en/f/fc/Thor_poster.jpg">
      <span style="color: white"><b><i>Thor</i></b></span>
    </div>
    <div class="col-sm-6 col-lg-3 col-md-4 col-xl-2">
      <img src="http://t1.gstatic.com/images?q=tbn:ANd9GcTbUWVX-6eusHp85uW6cbtbwzrW5UtBXgpc2FkCQEJ_YUO574gO">
      <span style="color: white"><b><i>Iron Man 2</i></b></span>
    </div>
  </div>
</div>
    </div>
  </div>
  <a class="carousel-control-prev" id="one" href="#carouselExampleControls2" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" id="two" href="#carouselExampleControls2" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


 <script
  src="http://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
<script type="text/javascript" src="mainpage.js"></script>
</body>
</html>