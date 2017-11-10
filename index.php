<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="index_style.css" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body class="body">
<?php

  require 'Oracle_connect.php';
 
  if(!isset($_SESSION['uname'])){//若使用者尚未登入
	  header('Location:login.php');
  }
  else{
	   echo $_SESSION['uname'].'您好!'.'<a href="logout.php">登出</a>' ;
  }
?>
<div class="container">
  <div class="jumbotron type">
  <h1 align="center">Let's Swap!</h1>
    <div class="btn-group btype" role="group">
      
      <div class="btn-group" role="group">
        <button id="btnDropdown1" type="button" class="btn btn-default dropdown-toggle B1" data-toggle="dropdown" aria-expanded="false">服飾<span class="caret"></span></button>
        <ul class="dropdown-menu" role="menu" aria-labelledby="btnDropdown1">
          <li><a href="#">女生</a></li>
          <li><a href="#">男生</a></li>
        </ul>
      </div>
            <div class="btn-group" role="group">
        <button id="btnDropdown1" type="button" class="btn btn-default dropdown-toggle B2" data-toggle="dropdown" aria-expanded="false">鞋類<span class="caret"></span></button>
        <ul class="dropdown-menu" role="menu" aria-labelledby="btnDropdown1">
          <li><a href="#">女生</a></li>
          <li><a href="#">男生</a></li>
        </ul>
      </div>
      <button type="button" class="btn btn-default B3">生活用品</button>
      <button type="button" class="btn btn-default B4">3C</button>
      <button type="button" class="btn btn-default B5">書本</button>
      <button type="button" class="btn btn-default B6">文具</button>
    </div>
  </div>
  <div class="row rs">
    <div class="col-sm-4 cs">
      <h3>Item</h3>
      <img src=".jpg" alt=""/>
      <p>Description...</p>
      <button type="button" class="btn btn-sm btn-default like"></button>
    </div>
    <div class="col-sm-4">
      <h3>Column 2</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
    </div>
    <div class="col-sm-4">
      <h3>Column 3</h3>        
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
    </div>
  </div>
</div>
</body>
</html>
