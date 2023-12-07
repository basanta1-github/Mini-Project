<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Forms</title>
</head>
<body>
    <div class="header">
        <h1>Thanks For Contacting</h1>
    </div>
    <div class="class">
        <?php
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            $name = $_POST["name"];
            $email = $_POST["email"];
            $Message = $_POST["Message"];

            echo"<p>Your Name :$name</p>";
            echo"<p>Your Email Id :$email</p>";
            echo"<p>Your Message :$Message</p>";
        }
        ?>
        <p>We will get in touch with you very soon..</p>
    </div>
</body>
</html>