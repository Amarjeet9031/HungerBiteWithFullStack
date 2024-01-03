<?php
// $insert = false;

include('conect.php');
// error_reporting();
if(isset($_POST["submit"]))
{
$name=$_POST["name"];
$services=$_POST["services"];
$phone=$_POST["phone"];
// $date=$_POST['date'];
$email=$_POST["email"];
$pwd=$_POST["pwd"];
$cnfpwd=$_POST["cnfpwd"];




$sql = "INSERT INTO user ( name,services,phone,email,pwd,cnfpwd) VALUES ('$name','$services', '$phone','$email','$pwd','$cnfpwd')";
if(mysqli_query($conn, $sql)){
// echo  "Cong";
 ?>
    <script>
        alert("Thanks For Registation On our Website");
    </script>
    <?php

} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

}

?>