<?php 
  if(! isset($_SESSION)){
    session_start();
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Online Car Shoppers</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!--   <script type="text/javascript" src="test.js"></script> -->
 
 

  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
    
  .carousel-inner img {
      width: 100%; /* Set width to 100% */

      margin: auto;
      min-height:200px;

  }
    .carousel-caption{
      position: absolute;
    }
  .main-text {
    position: absolute;
    top: 50px;
    width: 96.66666666666666%;
    color: #FFF;
}


.star-rating {
  line-height:32px;
  font-size:1.25em;
  cursor: pointer;
}

.table.table-borderless td, .table.table-borderless th {
    border: 0 !important;
}

.table.table-borderless {
    margin-bottom: 0px;
}

  /* Hide the carousel text when the screen is less than 600 pixels wide */
  @media (max-width: 600px) {
    .carousel-caption {
      display: none; 
    }
  }
  </style>





</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">CarOnline</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php">Home</a></li>
        <li><a href="searchPage.php">Search</a></li> 
        <li><a href="myFavourite.php">My Favourite</a></li>   


  



        
      </ul>
      <ul class="nav navbar-nav navbar-right">
        
       <li>
             <?php
 
        echo "<h4 style='color:white'>Hi ".$_SESSION['Username'].'</h4>'; 
        ?>
        </li>

          <li>
           <a href="Logout.php">Sign Out</a>              

        </li>


      </ul>
    </div>
  </div>
</nav>

