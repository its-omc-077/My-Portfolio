
    <?php  include('dbcon.php'); ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>my-skills</title>
    <style>
        *
        {
             margin: 0; 
             padding: 0;
             box-sizing: border-box;
        }
        .contactbody
        {
            display: flex;
            justify-content: center;
            align-items: center;
             width: 100%;
             height: 800px;
             background-color: rgb(30, 27, 27);
        }
        .contactbox
        {
             display: flex;
            padding: 100px 40px;
                width: 87%;
                height:700px;
                background-color: rgb(30, 27, 27);

        }
        .contacttitle
        {
            display: flex;
            align-items: center;
            gap: 20px;
            width: 200px;
            transform: rotate(270deg);
            margin-right: -120px;
            margin-top: -230px;
        }
        .contacttext
        {
            color: white;
           font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
           text-transform: uppercase;

        }
        .contactline
        {
            width: 80px;
            height: 2px ;
            background-color: white;
        }
        .contactheadingbox
        {
            width: 45%;
            height: 250px;
            padding: 50px 0 0 30px;
        }
        .contactheading
        {
            color: white;
            font-size: 30px;
            font-weight: 600;
            letter-spacing: 1px;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }
        .contactdis
        {
            font-size: 12px;
            margin-top: 18px;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            line-height: 17px;
            text-align: left;
            letter-spacing: 1px;
            color: white;
            font-weight: 100;

        }
        .contactform
        {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 20px;
            flex-wrap: wrap;
            width: 50%;
            height: 550px;
            box-sizing: border-box;
            padding: 55px 0 0 200px;

        }
        .cform
        {
            display: flex;
            align-items: start;
            flex-direction: column;
                width: 500px;
                height: 500px;
        }
        label
        {
            color:  white;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }
        input
        {
            height: 45px;
            width: 320px;
            background-color: rgb(54, 44, 44);
            color: white;
            border: none;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            padding: 5px 10px;
        }
        .msg
        {
            padding: 15px 10px;
            height: 120px;
            width: 320px;
            border: none;
            color: white;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            background-color: rgb(54, 44, 44);
        }
        .sendbtn
        {
            background-color: white;
            cursor: pointer;
            color: black;
            margin-top: 20px;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            letter-spacing: 1px;
            text-transform: capitalize;
            font-weight: bold;
            transition: 0.5s;
        }
        .sendbtn:hover
        {
            color: white;
            background-color: red;
        }

    </style>
</head>
<body>
    <div class="contactbody">
        <div class="contacttitle">
            <div class="contactline"></div>
            <div class="contacttext">contact</div>
        </div>
            <div class="contactbox">
                <div class="contactheadingbox">
                   <div class="contactheading"> Have you any Project ?<br> Please drop a message</div>
                    <div class="contactdis">
                        Lorem ipsum dolor sit amet consectetur, adipisicing Laudantium, voluptatibus ullam voluptatum velit omnis nostrum saollitia culpa beatae odit veniam harum, fugiat atque.
                    </div>
                </div>
                <div class="contactform">
                        <form method="post" class="cform">
                            <label>Name :</label><br>
                            <input type="text" placeholder="Name" class="name" name="fname"><br>
                            <label>Email :</label><br>
                            <input type="email" placeholder="Email" class="email" name="email"><br>
                            <label>Message :</label><br>
                            <textarea class="msg" placeholder="Enter message" name="message"></textarea><br>
                            <input type="submit" value="send" class="sendbtn" name="submit">
                        </form>
                </div>
            </div>
    </div>
</body>
</html>

<?php
 
            if(isset($_POST['submit']))
            {
                    $client = $_POST['fname'];
                    $email = $_POST['email'];
                    $message = $_POST['message'];

                    if(empty($client) OR empty($email) OR empty($message));
                    {
                        echo "all fields are required";
                    }

                    
                    $insertquery = "INSERT INTO contact (client_name,email,message) VALUES ('$client','$email','$message')";

                    $iquery = mysqli_query($conn,$insertquery);

                    if($iquery)
                    {
                        echo "<script>alert('Message sent.!')
                        window.location.href='portfolio.php'
                        </script>";
                    }
                    else
                    {
                        echo '<script>alert("something went wrong..!")</script>';

                    }
            }
?>