<?php 

//Open a new connection to the MySQL server
$mysqli = new mysqli('localhost:3308', 'root', '', 'jobs');

//Output any connection error
if ($mysqli->connect_error) {
    die('Error : (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
}

    function val($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
if(isset($_POST['jsubmit'])) {
    $cname = val($_POST['cname']);
    $position = val($_POST['position']);
    $jdesc = val($_POST['jdesc']);
    $skills = val($_POST['skills']);
    $ctc = val($_POST['ctc']);

    


    $sql = "INSERT INTO jobs (cname, position, jdesc, skills, ctc) VALUES ('$cname', '$position', '$jdesc', '$skills', '$ctc')";

    if ($mysqli->query($sql) === TRUE) {
        header("location:index.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

if(isset($_POST['japply'])) {
    $canname = val($_POST['canname']);
    $comname = val($_POST['comname']);
    $applying = val($_POST['applying']);
    $qual = val($_POST['qual']);
    $pass = val($_POST['pass']);

    


    $sql = "INSERT INTO candidates (canname, comname, applying, qual, pass) VALUES ('$canname', '$comname', '$applying', '$qual', '$pass')";

    if ($mysqli->query($sql) === TRUE) {
        header("location:career.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$mysqli->close();
?>