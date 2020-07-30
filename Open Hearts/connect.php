<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Heart to Heart Foundation | Home</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="style.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Manrope&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css">
</head>
<body>
    <div class="jumbo" id="home">
        <header>
            <nav>
                <div class="logo">
                    <a href="index.html"><h1>Heart to <span>Heart</span></h1></a>
                </div>
                <div class="nav-menu">
                    <i class="fas fa-bars" id="mobile"></i>
                    <ul class="menu-list display">
                        <a href="#home">
                            <li>Home</li>
                        </a>
                        <a href="#about">
                            <li>About Us</li>
                        </a>
                        <a href="#donate">
                            <li>Donate</li>
                        </a>
                        <a href="#contact">
                            <li>Contact Us</li>
                        </a>
                    </ul>
                </div>
            </nav>
        </header>
        <div class="landing">
            <h1>Thank Your for opening your <span>Heart</span> and <span>supporting</span> us</h1>
        </div>
    </div>
    <?php 
    if(isset($_POST['submit'])) {
        $name = $_POST['fname' "\n" "lname"];
        $email = $_POST['email'];
        $number = $_POST['number'];
        $fax = $_POST['fax']
        $message = $_POST['comment'];

        $to="Heart2heartConsulting@yahoo.com";
        $subject="Donating to the Heart to Heart Foundation";
        $message="Name: ".$name."\n"."Phone Number: ".$number."\n"."Fax #: ".$fax."\n"."Message: "."\n\n".$message;
        $headers="From: ".$email;
        

        /* if(mail($to, $subject, $message, $headers)) {
            echo "<h1>Sent Succesfully! Thank You"." ".$name.", We will contact you soon!</h1>";
        } 
        else {
            echo "<h1>Did you fill out every field?</h1>";
        } */
    }
?>
    </body>
</html>