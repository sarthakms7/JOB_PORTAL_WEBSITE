<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
            body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            }

            html {
            box-sizing: border-box;
            }

            *, *:before, *:after {
            box-sizing: inherit;
            }

            .column {
            float: left;
            width: 33.3%;
            margin-bottom: 16px;
            padding: 0 8px;
            }

            .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            margin: 8px;
            }

            .about-section {
            padding: 50px;
            text-align: center;
            background-color: #474e5d;
            color: white;
            }

            .container {
            padding: 0 16px;
            }

            .container::after, .row::after {
            content: "";
            clear: both;
            display: table;
            }

            .title {
            color: grey;
            }

            @media screen and (max-width: 1100px) {
            .column {
                margin-left:12%;
                margin-right:12%;
                width: 76%;
                display: block;
            }
            }

            
            p {
                font-size: 20px;
            }
    </style>

<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="CSS/jobportal.css">


<title>About</title>
</head>
<body>
    <div>  
		<nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container-fluid">
				<div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#nav1">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
				    <a class="navbar-brand" href="#" style="font-size:23px;"><strong>Admin Dashboard</strong></a>
				</div>
                <div class="collapse navbar-collapse" id="nav1">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="logout.php" style="font-size:17px;">
                            Log out&nbsp;&nbsp;<span class="glyphicon glyphicon-log-out"></span>
                        </a></li>
                    </ul>
				</div>
            </div>
        </nav>
    </div>
	<div style="margin-top: 50px">
            <div class="sidebar" style="font-size:19px; text-align: center;" >
                <a href="index.php" ><strong>Jobs</strong></a>
                <a href="applied.php"><strong>Candidates Applied</strong></a>
                <a href="about.php" class="active"><strong>About</strong></a>
            </div>
        <div class="content">
        <div class="about-section">
  <h1><strong>About Creater</strong></h1>
  <p>Hello! I'm Sarthak Kumar Mishra from IIIT Manipur.</p>
  <p style="color:#ede374;">I have added AJAX authentication to every field in the register page. And I have also added a 
      logout button in the Dashboard page which will lead you to the login page.  </p>
   <p>I have also created a logo on job portal page and also added a select menu linked to database for company name 
       and job role selection.
   </p>
  </div>

<h2 style="text-align:center"><strong>----------&nbsp;Our Team&nbsp;----------</strong></h2>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="sarthak.jpg" alt="Sarthak" style="width:100%">
      <div class="container">
        <h2>Sarthak Mishra</h2>
        <p class="title">Page creater</p>
        <p>Good coder and creative.</p>
        <p>smishra20@iiitmanipur.ac.in</p>
      </div>
    </div>
  </div>
  <div class="column">
    <div class="card">
      <img src="sarthak.jpg" alt="Sarthak" style="width:100%">
      <div class="container">
        <h2>Sarthak Mishra</h2>
        <p class="title">Page creater</p>
        <p>Good coder and creative.</p>
        <p>smishra20@iiitmanipur.ac.in</p>
      </div>
    </div>
  </div>
  <div class="column">
    <div class="card">
      <img src="sarthak.jpg" alt="Sarthak" style="width:100%">
      <div class="container">
        <h2>Sarthak Mishra</h2>
        <p class="title">Page creater</p>
        <p>Good coder and creative.</p>
        <p>smishra20@iiitmanipur.ac.in</p>
      </div>
    </div>
  </div>
  
</div>



        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>