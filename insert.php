<?php
include_once 'db_conn.php';
if(isset($_POST['submit']))
{    
     $name = $_POST['name'];
     $mobile = $_POST['mobile'];
     $grade = $_POST['grade'];
     $pickup = $_POST['pickup'];
     $dropoff = $_POST['dropoff'];

     $sql = "INSERT INTO application (id,name_&_surname,mobile_number,grade,Morning_pickup,Afternoon_dropoff)
     VALUES (0,'$name','$mobile','$grade','$pickup','$dropoff')";
     if (mysqli_query($conn, $sql))
     {
        echo "New record has been added successfully !";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);}

}
?>