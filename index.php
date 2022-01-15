<?php include 'header.php' ?>
        <div style="margin-top: 50px">
            <div class="sidebar" style="font-size:19px; text-align: center;" >
                <a class="active" href="index.php" ><strong>Jobs</strong></a>
                <a href="applied.php"><strong>Candidates Applied</strong></a>
                <a href="about.php"><strong>About</strong></a>
            </div>
        <div class="content">
            <p style="padding:10px">
                <button class="btn btn-blue btn-lg btn-animated" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample" >
                    Post Job 
                </button>  &nbsp; <div id="add_err2"></div>
                                  
            </p>
            
            <div class="collapse" id="collapseExample" style="border: 1px solid #88bdeb; border-radius: 7px; padding:20px;"> 
                <div class="card card-body">
                    <form method="POST" action="postjob.php">
                        <div class="mb-3">
                            <label for="cname" class="form-label">Company Name:</label>
                            <input type="text" class="form-control input-lg" id="cname" name="cname">
                        </div>
                        <div class="mb-3">
                            <label for="position" class="form-label">Position:</label>
                            <input type="text" class="form-control input-lg" id="position" name="position">
                        </div>
                        <div class="mb-3">
                            <label for="jdesc" class="form-label">Job Description:</label>
                            <textarea rows="6" class="form-control" id="jdesc" name="jdesc"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="skills" class="form-label">Skills:</label>
                            <input type="text" class="form-control input-lg" id="skills" name="skills">
                        </div>
                        <div class="mb-3">
                            <label for="ctc" class="form-label">CTC:</label>
                            <input type="text" class="form-control input-lg" id="ctc" name="ctc">
                        </div>
                        <button type="submit" class="btn btn-primary" style="margin-top:10px;" name="jsubmit">Submit</button>  
                    </form>
                </div>
            </div>
            
            
        
        
        <hr style="border-top:3px dotted black;"/>
        <table class="table table-dark table-hover" style="margin-top:15px;">
                <thead style="font-size:21px;">
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Company Name</th>
                    <th scope="col">Position</th>
                    <th scope="col">CTC</th>
                    </tr>
                </thead>
                <?php
                    $mysqli = new mysqli('localhost:3308', 'root', '', 'jobs');
                    $sqli="SELECT cname, position, ctc FROM jobs";
                    $result=mysqli_query($mysqli, $sqli);
                    if($result->num_rows>0) {
                        $i=0;
                        while($rows=$result->fetch_assoc()) {
                            
                            $i++;
                            echo"<tbody style=\"font-size:20px;\">
                                <tr>
                                    <td>".$i."</td>
                                    <td>".$rows['cname']."</td>
                                    <td>".$rows['position']."</td>
                                    <td>". $rows['ctc']."</td>
                                </tr>";
                        }
                    } else {
                        echo "";
                    }
                    $mysqli->close();
                ?>
                </tbody>
            </table>
    </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>	 
</body>
</html>