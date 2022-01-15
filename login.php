<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-eqiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <style>
            body {
                background-image: url('Images/background-postjob.jpg');
                background-size: cover;
            }
            form {
                background-color: #fff;
                margin-top: 10%;
                margin-left: 30%;
                margin-right: 20%;
                padding: 30px;
                box-shadow: 10px 10px 8px 10px #888888;
            }
        </style>
        <script src="JS/jquery.js"></script>
	
	        <script type="text/javascript">
        		$(document).ready(function(){
			
			   $("#login").click(function(){
				
					email=$("#email").val();
					password=$("#password").val();
					 $.ajax({
						type: "POST",
						url: "pcheck.php",
						data: "email="+email+"&password="+password,
						success: function(html){
						  if(html=='true')
						  {
							  
							  $("#add_err2").html('<div class="alert alert-success"> \
													<strong>Authenticated</strong> \ \
												</div>');

							window.location.href = "index.php";
						  
						  } else if (html=='false') {
								$("#add_err2").html('<div class="alert alert-danger"> \
													<strong>Authentication</strong> failure. \ \
												</div>');
								
						  
						  } else {
								$("#add_err2").html('<div class="alert alert-danger"> \
													<strong>Error</strong> processing request. Please try again. \ \
												</div>');
						  }
						},
						beforeSend:function()
						{
                            $("#add_err2").html("loading...");
						}
					});
					 return false;
				});
            });
            </script>
       
        <title>Login</title>
    </head>
    <body>
        <div class="container">
            <form>
                <h2 class="intro-text text-center">
                    <strong>Login</strong>
                </h2>
                    <?php
		
                        if (isset($_GET["logout"])) {
                            
                            if ($_GET["logout"] == "true") { ?>
                                
                                <div class="alert alert-success">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                <strong>You have been logged out of the system.</strong>
                                </div>   

                        <?php
                            }
                        }
                    ?>
                
                <div id="add_err2"></div>
                <hr>
                <div class="mb-3">
                    <label for="email" class="form-label"><strong>Email address:</strong></label>
                    <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label"><strong>Password:</strong></label>
                    <input type="password" class="form-control" id="password">
                </div>
                <button type="submit" id="login" class="btn btn-primary">Login</button>
                <p style="text-align: center;">New User?<br>Creat Account <a href="register.php">Sign Up</a></p>
            </form>
        </div>
    

        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>	 
    </body>

</html>