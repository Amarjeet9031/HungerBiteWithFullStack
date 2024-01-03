<?php
// $insert = false;

include('conect.php');
error_reporting();
if(isset($_POST["submit"]))
{
$name=$_POST["name"];
$servies=$_POST["servies"];
$phone=$_POST["phone"];
// $date=$_POST['date'];
$email=$_POST["email"];
$pwd=$_POST["pwd"];
$cnfpwd=$_POST["cnfpwd"];

$duplicate=mysqli_query($conn,"SELECT * FROM user WHERE email='$email'");
if(mysqli_num_rows($duplicate)>0){
    echo 
    "<script>alert('Email already exists');</script>";
}
    else{
       if($pwd==$cnfpwd){
         $query = "INSERT INTO user ( name,servies,phone,email,pwd,cnfpwd) VALUES ('$name','$servies', '$phone','$email','$pwd','$cnfpwd')";
         mysqli_query($conn,$query);
         echo 
         "<script> alert('Registaion sucessfully.....');</script>";

                         }
         else{
           echo 
              "<script> alert('passowrd be not match');</script>";
        }
    }

}


?>
<!DOCTYPE html>

<html lang="en">


<head>

    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login & Registration Form</title>


    <!-- Css Linking -->

    <style>
        /* Font Name = Poppins ( Link in Description ) */

        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
        /* body{
        background-image: url('food.jpg');
        background-size: cover;
        
    } */

        * {

            padding: 0;

            margin: 0;

            box-sizing: border-box;

            font-family: Poppins;

        }


        body {

            width: 100%;

            height: 100vh;

            display: grid;

            place-items: center;

            background-image: linear-gradient(to bottom, #00809dc8, #ff613dc2);

        }


        .container {

            width: 90%;

            height: 90%;

            background-image: linear-gradient(to right, #33333320, #33333318), url(./3.jpg);

            background-size: cover;

            background-repeat: no-repeat;

            border-radius: 40px;

            box-shadow: 0px 0px 45px hsla(0, 0%, 0%, 0.159);

            display: grid;

            place-items: center;

        }


        .form_container {

            width: 450px;

            height: 630px;

            background-color: #0b0b0b50;

            backdrop-filter: blur(5px);

            border-radius: 30px;

            border: 2px solid #c7c7c7;

            color: #fff;

            overflow: hidden;

        }


        .form_box {

            position: absolute;

            top: 0;

            left: 0;

            width: 900px;

            height: 530px;

            display: flex;

            align-items: center;

            transition: .5s;

        }


        .sign-up-form {

            width: 50%;

            height: 100%;

            padding: 0px 70px;

            display: flex;

            flex-direction: column;

            align-items: center;

        }


        .title {

            font-size: 23px;

            color: #fff;

            font-weight: 500;

            margin-bottom: 20px;

            text-align: center;

        }


        form {

            width: 100%;

        }


        .sign-up-form .input_field {

            width: 100%;

            height: 45px;

            border-bottom: 2.5px solid #fff;

            margin: 15px 0;

            display: flex;

            align-items: center;

            justify-content: space-between;

            padding: 0 10px;

        }


        .input_group .input_field input {

            width: 90%;

            height: 100%;

            background: none;

            border: none;

            outline: none;

            font-size: 16px;

            padding: 0 5px;

            color: #fff;

            letter-spacing: 1px;

        }


        input::placeholder {

            color: #ffffffd1;

            font-size: 15px;

        }



        .sign-up-form p {

            font-size: 13px;

        }


        .term-conditions {

            display: flex;

            align-items: center;

            margin-top: 25px;

        }


        .signUp-btn {

            width: 100%;

            height: 45px;

            font-size: 16px;

            border-radius: 50px;

            border: none;

            margin: 30px 0 40px 0;

            cursor: pointer;

            transition: all .5s;

        }


        .signUp-btn:hover {

            background-color: #FF5733;

            color: #fff;

        }


        .signIn-link {

            display: flex;

            align-items: center;

        }


        .signIn-link p {

            font-size: 14px;

        }


        .signIn-link a {

            color: #fff;

            font-size: 14px;

            text-decoration: none;

            margin-left: 7px;

        }




        .forgot,

        .remember {

            display: flex;

            align-items: center;

            justify-content: space-between;

        }


        .forgot p a {

            color: #fff;

        }


        .forgot {

            margin-top: 25px;

        }


        input[type="checkbox"] {

            margin-right: 6px;

            width: 18px;

            height: 18px;

            border: none;

            outline: none;

        }
    </style>




</head>


<body>

    <div class="container">

        <div class="form_container">

            <div class="form_box" id="formBox">


                <div class="sign-up-form">

                    <h2 class="title">Fill Up Your Details!
                        <br>
                        <br>


                        <form action="index.php" method="POST">
                            <div>
                                <input type="radio" name="servies" value="Donour">Donour
                                <input type="radio" name="servies" value="Food Required"> Food Required
                            </div>
                            <div class="input_group">

                                <div class="input_field">

                                    <ion-icon name="person"></ion-icon>

                                    <input type="text" placeholder="Name" name="name" required>

                                </div>


                                <div class="input_field">

                                    <ion-icon name="call"></ion-icon>

                                    <input type="phone" placeholder="Phone-Number" required name="phone">

                                </div>
                                <div class="input_field">

                                    <ion-icon name="mail"></ion-icon>

                                    <input type="email" name="email" placeholder="Email" required>

                                </div>


                                <div class="input_field">

                                    <ion-icon name="lock"></ion-icon>

                                    <input type="password" placeholder="Password" required name="pwd">

                                </div>
                                <div class="input_field">

                                    <ion-icon name="lock"></ion-icon>

                                    <input type="password" placeholder="Conf-Password" required name="cnfpwd">

                                </div>

                            </div>

                            <div class="term-conditions">

                                <input type="checkbox">

                                <p>I read and agree to <span>Term & Conditions</span></p>

                            </div>

                            <button class="signUp-btn" name="submit">Create Account</button>

                        </form>

                        <div class="signIn-link">

                            <p>Already have an Account ?</p>

                            <a href="singin.php" id="signIn_btn">Sign in</a>

                        </div>

                </div>


               

            </div>

        </div>

    </div>



   


    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>

</body>


</html>