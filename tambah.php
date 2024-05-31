<?php
include('koneksi.php');

if (isset($_POST['submit'])) {
    $Username = $_POST['Username'];
    $Password = $_POST['Password'];
    $Email = $_POST['Email'];
    $Role = $_POST['Role'];
    $Gender = $_POST['Gender'];
    $Hobi = $_POST['hobi'];

    $Hobi = implode(',', $_POST['hobi']);

    $sqlquery = "INSERT INTO register (Username, Password, Email, Role, Gender, Hobi) 
    VALUES('$Username', '$Password', '$Email', '$Role', '$Gender', '$Hobi')";
    $result = mysqli_query($conn, $sqlquery);

    if ($result) {
        header("Location: login.php?msg=New record created successfully");
     } else {
        echo "Failed: " . mysqli_error($conn);
     }

}


 ?>