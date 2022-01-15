<?php include 'header.php'?>
        <div style="margin-top: 50px">
                <div class="sidebar" style="font-size:19px; text-align: center;" >
                    <a href="index.php" ><strong>Jobs</strong></a>
                    <a href="applied.php"  class="active"><strong>Candidates Applied</strong></a>
                    <a href="about.php"><strong>About</strong></a>
                </div>
        <div class="content">
                <table class="table table-dark table-hover" style="margin-top:15px;">
                            <thead style="font-size:21px;">
                                <tr>
                                <th scope="col">#</th>
                                <th scope="col">Candidate Name</th>
                                <th scope="col">Company Name</th>
                                <th scope="col">Position</th>
                                <th scope="col">Year passout</th>
                                </tr>
                            </thead>
                            <?php
                                $mysqli = new mysqli('localhost:3308', 'root', '', 'jobs');
                                $sqli="SELECT canname, comname, applying, pass FROM candidates";
                                $result=mysqli_query($mysqli, $sqli);
                                if($result->num_rows>0) {
                                    $i=0;
                                    while($rows=$result->fetch_assoc()) {
                                        echo"<tbody style=\"font-size:20px;\">
                                            <tr>
                                                <td>".++$i."</td>
                                                <td>".$rows['canname']."</td>
                                                <td>".$rows['comname']."</td>
                                                <td>".$rows['applying']."</td>
                                                <td>". $rows['pass']."</td>
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



