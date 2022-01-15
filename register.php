<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Job Portal - Company</title>

    <style>
            body {
                background-image: url('Images/background-postjob.jpg');
                background-size: cover;
            }
            form {
                width: 50%;
                
                background-color: #fff;
                margin-top: 4%;
                margin-left: 30%;
                margin-right: 20%;
                padding: 30px;
                box-shadow: 10px 10px 8px 10px #888888;
            }
    </style>
    <link rel="stylesheet" href="CSS/jobportal.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="JS/jquery.js"></script>
	
	<!-- Script -->
	<script type="text/javascript">
        $(document).ready(function () {

            $("#register").click(function () {

                fname = $("#fname").val();
                phone = $("#phone").val();
                email = $("#email").val();
                password = $("#password").val();
                cpassword = $("#cpassword").val();

                $.ajax({
                    type: "POST",
                    url: "adduser.php",
                    data: "fname=" + fname + "&phone=" + phone + "&email=" + email + "&password=" + password + "&cpassword=" + cpassword,
                    success: function (html) {
                        if (html == 'true') {

                            $("#add_err2").html('<div class="alert alert-success"> \
                                                 <strong>Account</strong> processed. \ \
                                                 </div>');

                            window.location.href = "index.php";

                        } else if (html == 'false') {
                            $("#add_err2").html('<div class="alert alert-danger"> \
                                                 <strong>Email Address</strong> already in system. \ \
                                                 </div>');                    

                        } else if (html == 'fname') {
                            $("#add_err2").html('<div class="alert alert-danger"> \
                                                 <strong>Full Name</strong> is required. \ \
                                                 </div>');
												 
						} else if (html == 'phone') {
                            $("#add_err2").html('<div class="alert alert-danger"> \
                                                 <strong>Last Name</strong> is required. \ \
                                                 </div>');

                        } else if (html == 'eshort') {
                            $("#add_err2").html('<div class="alert alert-danger"> \
                                                 <strong>Email Address</strong> is required. \ \
                                                 </div>');

                        } else if (html == 'eformat') {
                            $("#add_err2").html('<div class="alert alert-danger"> \
                                                 <strong>Email Address</strong> format is not valid. \ \
                                                 </div>');
												 
						} else if (html == 'pshort') {
                            $("#add_err2").html('<div class="alert alert-danger"> \
                                                 <strong>Password</strong> must be at least 4 characters . \ \
                                                 </div>');
                        } else if (html == 'nomatch') {
                            $("#add_err2").html('<div class="alert alert-danger"> \
                                                 <strong>Password</strong> and confirm password should match. \ \
                                                 </div>');

                        } else {
                            $("#add_err2").html('<div class="alert alert-danger"> \
                                                 <strong>Error</strong> processing request. Please try again. \ \
                                                 </div>');
                        }
                    },
                    beforeSend: function () {
                        $("#add_err2").html("loading...");
                    }
                });
                return false;
            });
        });
    </script>

</head>

<body>

    

<div class="container">
                   
                   <form role="form">
                   <h2 align="center"><strong>Registration</strong></h2>
                   <div id="add_err2"></div>
                   <hr>
                       <div class="mb-3">
                           <label for="fname" class="form-label"><strong>Full Name:</strong></label>
                           <input type="text" class="form-control" maxlength="60" id="fname" name="fname">
                       </div>
                       <div class="mb-3">
                           <label for="phone" class="form-label"><strong>Phone Number:</strong></label>
                           <input type="text" class="form-control" maxlength="60" id="phone" name="phone">
                           
                       <div class="mb-3">
                           <label for="email" class="form-label"><strong>Email:</strong></label>
                           <input type="text" class="form-control" maxlength="60" aria-describedby="emailHelp" id="email" name="email">
                       </div>
                       <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                       </div>
                       <div class="mb-3">
                           <label for="password" class="form-label"><strong>Password:</strong></label>
                           <input type="password" class="form-control" maxlength="15" id="password" name="password">
                       </div>
                       <div class="mb-3">
                           <label for="cpassword" class="form-label"><strong>Confirm Password:</strong></label>
                           <input type="password" class="form-control" maxlength="15" id="cpassword" name="cpassword">
                       </div>
                      
                       <button type="submit" class="btn btn-primary" id="register">Submit</button>
                       Already Registered? <a href="login.php">Login</a>
                   </form>
</div>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>	 

</body>

</html>
