<?php
$insert = false;
if(isset($_POST['name'])){
    $server = "localhost";
    $username = "root";
    $password = "";
    $dbname = "agrasenjay";

    $conn = mysqli_connect($server, $username, $password, $dbname);

    // if(!$conn){
    //     die("connection to this database failed due to" . mysqli_connect_error());
    // }
    // echo "Success connecting to the database";


    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $mobile = $_POST['mobile'];
    $father = $_POST['father'];
    $parentmobile = $_POST['parentmobile'];
    $competition = $_POST['competition'];
    $other = $_POST['other'];


    $sql = "INSERT INTO `agrasenjay`.`participation` (`name`, `age`, `gender`, `email`, `address`, `mobile`, `father`, `parentmobile`, `competition`, `other`, `dt`) VALUES ('$name', '$age', '$gender', '$email', '$address', '$mobile', '$father', '$parentmobile', '$competition', '$other', current_timestamp());";
    // echo $sql;

    if($conn->query($sql) == true){
        // echo "Successfully inserted";
        $insert = true;
    }
    else{
        echo "ERROR : $sql <br> $conn->error";
    }
    $conn->close();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thanks for Participating</title>
    <link rel="stylesheet" href="style.css">
</head>
<body style="margin: 0; padding: 0;">
    <?php
    if($insert == true){
    echo "<p class='p2'>
          Thanks for interest and submitting the form.<br>
          We will contact you shortly.<br>
          </p>";};
    ?>
</body>
</html>
