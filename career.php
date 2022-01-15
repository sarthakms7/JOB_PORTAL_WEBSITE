<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/jobportal.css">
    <style>
      .bg-image {
     
        background-image: url("Images/banner-career0.jpg");

        filter: blur(5px);
        -webkit-filter: blur(5px);

        
        height:270px;

        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
      }
    </style>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Job Portal - Candidate</title>
</head>
<body>
    <div class="container1 container-fluid">
    <div class="bg-image"></div>

    <div class="bg-text">
      <div class="logo-holder logo">
              <a href="#">
                <h3><strong>Job</strong> <span>Portal</span></h3>
              </a>
      </div>
      <p style="font-size: 30px;">Best jobs available matching your skills!</p>
    </div>
    </div>
            <div class="container2 container-fluid">
            <?php 
                  $mysqli = new mysqli('localhost:3308', 'root', '', 'jobs');
                  $sqlij="SELECT cname, position, jdesc, ctc, skills FROM jobs";
                  $resultj=mysqli_query($mysqli, $sqlij);
                  if($resultj->num_rows>0) {
                      while($rows=$resultj->fetch_assoc()) {
                          $i=0;
                          echo "<div class=\"jobsPosted\" style=\"padding:8px; font-size:20px;\">
                                  <div class=\"jobs\">
                                      <h3 style=\"text-align: center;\">".$rows['position']."</h3>
                                      <h4 style=\"text-align: center;\"><strong>".$rows['cname']."</strong></h4><hr />
                                      <p style=\"color: black; text-align:justify;\">".$rows['jdesc']."</p>
                                      <p style=\"color: black;\"><b>Skills Required:&nbsp;</b>".$rows['skills']."</p>
                                      <p style=\"color: black;\"><b>CTC:&nbsp;</b>".$rows['ctc']."</p>
                                      <p>
                                      <button style=\"margin-left:75%; \" class=\"btn btn-success btn-animated\" data-bs-target=\"#exmodal\" data-bs-toggle=\"modal\" type=\"button\" aria-expanded=\"false\" >
                                        <strong>Apply now</strong>
                                      </button>
                                      </p>
                                  </div>
                                </div>";
                      }
                  } else {
                      echo "";
                  }
                  
            ?>
            <div class="modal fade" id="exmodal" tabindex="-1" aria-labelledby="mlabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="mlabel">Apply for job!</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <form method="POST" action="postjob.php">
                    <div class="mb-3">
                      <label for="canname" class="col-form-label">Candidate name:</label>
                      <input type="text" class="form-control" id="canname" name="canname">
                    </div>
                    <div class="mb-3">
                      <label for="comname" class="col-form-label">Company name:</label><br>
                      <!--<input type="text" class="form-control" id="comname" name="comname">-->
                      <select name="comname" class="select">
                      <?php
                            $mysqli = new mysqli('localhost:3308', 'root', '', 'jobs');
                            $sqli="SELECT cname FROM jobs";
                            $result=mysqli_query($mysqli, $sqli);
                            if($result->num_rows>0) {
                                while($rows=$result->fetch_assoc()) {
                                    $i=0;
                                    $value1 = $rows['cname'];
                                    echo"<option value=\"$value1\">".$rows['cname']."</option>";
                                }
                            } else {
                                echo "";
                            }
                            $mysqli->close();
                        ?>
                      </select>
                    </div>
                    <div class="mb-3">
                      <label for="applying" class="col-form-label">Applying for:</label><br>
                      <!--<input type="text" class="form-control" id="applying" name="applying">-->
                      <select name="applying" class="select">
                      <?php
                            $mysqli = new mysqli('localhost:3308', 'root', '', 'jobs');
                            $sqli="SELECT position FROM jobs";
                            $result=mysqli_query($mysqli, $sqli);
                            if($result->num_rows>0) {
                                while($rows=$result->fetch_assoc()) {
                                    $i=0;
                                    $value2 = $rows['position'];
                                    echo"<option value=\"$value2\">".$rows['position']."</option>";
                                }
                            } else {
                                echo "";
                            }
                            $mysqli->close();
                        ?>
                      </select>
                    </div>
                    <div class="mb-3">
                      <label for="qual" class="col-form-label">Qualification:</label>
                      <input type="text" class="form-control" id="qual" name="qual">
                    </div>
                    <div class="mb-3">
                      <label for="pass" class="col-form-label">Year passout:</label>
                      <input type="text" class="form-control" id="pass" name="pass">
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary" name="japply">Apply</button>
                    </div>
                  </form>
                </div>
                
              </div>
            </div>
            </div>
              
    </div>
   
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>	 
</body>
</html>