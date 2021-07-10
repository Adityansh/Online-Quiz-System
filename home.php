<?php
include("class/users.php");
$email=$_SESSION['email'];
$profile=new users;
$profile->users_profile($email);
$profile->cat_shows();
//print_r($profile->cat);
//print_r($profile->data);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Quiz System</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Online quiz in PHP</h2>
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
    <li><a data-toggle="tab" href="#menu1">Profile</a></li>
    <li style="float: right"><a href="logout.php">Logout</a></li>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <h3>Home</h3>
      <center><button type="button" class="btn btn-primary" data-toggle="tab" href="#select" >Start Quiz</button></center> 
      <div class="col-sm-4"></div>
	   <div class="col-sm-4"><br>
	   <div id="select" class="tab-pane fade">

		  <form  method="post" action="qus_show.php">
		  <select class="form-control" id="" name="cat">
		  <option>select category</option>
		  <?php		  
		  foreach($profile->cat as $category)
		  {  ?>			  			
			<option value="<?php echo $category['id'];?>"><?php echo $category['cat_name'];?></option>
			<?php   }?>
		  </select><br>
		  <center><input type="submit" value="Submit" class="btn btn-primary" /></center>
		</form>
	  </div>
	  </div>
	  <div class="col-sm-4"></div>
    </div>
    <div id="menu1" class="tab-pane fade">
      <h3>Showing Profile</h3>
      <div class="container">
                        <div class="row">
                            <div class="col-sm-3">
                                <br><br><br>
                                <img style="border-radius: 50%" src="img/<?php foreach ($profile->data as $prof){echo $prof['img'];}?>" alt="" width="200px" height="200px">
                            </div>
                            <div class="col-sm-3">
                                <br><br><br><br><br>
                                <h2 style="color: cornflowerblue;font-weight: bold;font-size: large;">User ID : <span><?php foreach($profile->data as $prof) {echo $prof['id'];}?></span></h2>
                                <h2 style="color: cornflowerblue;font-weight: bold;font-size: large;">User Name : <span><?php foreach($profile->data as $prof) {echo $prof['name'];}?></span></h2>
                                <h2 style="color: cornflowerblue;font-weight: bold;font-size: large;">User Email : <span><?php foreach($profile->data as $prof) {echo $prof['email'];}?></span></h2>
                            </div>
                            <div class="col-sm-6">
                                <h2 style="color: cornflowerblue;font-weight: bold;font-size: large;text-align: center">Your Performance Analysis</h2>
                                <br>  
                            </div>
                        </div>
                        </div>
     </div>
    
  </div>
</div>

</body>
</html>