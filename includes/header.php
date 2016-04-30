<?php 

    //$logginUser = isset($_SESSION['logginUser']) ? $_SESSION['logginUser'] : '';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Login</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/navbar.css" rel="stylesheet">
     <link href="css/signin.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
 
  <body>
     <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Contact Manager</a>
        </div>
        
        <div id="navbar" class="navbar-collapse collapse">
         <?php 
            if($_SESSION['loggedInUser']) {   
         ?>
          <ul class="nav navbar-nav">
              <li><a href="clients.php">My Contacts</a></li>
              <li><a href="add.php">Add Contact</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
         
            <li><a href="../navbar-static-top/">Hello <?php echo $_SESSION['loggedInUser']; ?> </a></li>
                <a href="logout.php">Log out </a></li>
            </ul>
            <?php 
                } else { 
            ?>
            <ul class="nav navbar-nav navbar-right">
                <li class="active"><a href="index.php">Log in <span class="sr-only">(current)</span></a></li>
            </ul>
            <?php
            }
            ?>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <?php 
      
//       if(mysqli_query($conn,$query1)){
//           echo "Inserted";
//       }else{
//           echo "Not inserted".mysqli_error($conn);
//       }
      ?>
    <div class="container">
