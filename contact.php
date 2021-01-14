<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Cormorant+SC:wght@500&family=Halant&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/cb8de7caa2.js" crossorigin="anonymous"></script>
        <title>Contact Page</title>
        <style>
            body{
                margin: 0;
                padding: 0;
                font-family: 'Cormorant SC', serif;
                background-image: url('images/white.jpg');
            }
            .row-menu{
                margin: 0;
                display: flex;
                justify-content: space-between;
                align-items: center;
                background-color: rgba(214, 203, 203, 0.705);
            }
            .leftSide{
                color: rgb(24, 100, 185);
                margin-left:35px;
                font-size: 15px;
                cursor: pointer;
            }

            .rightSide {
                    margin-right: 35px;
            }
            .rightSide a{
                color: rgb(24, 100, 185);
                padding: 0 15px;
                text-decoration: none;
                font-size: 25px;
            }

            .main{
                display: flex;
               justify-content: center;
               line-height: 50px;
               margin-top: 80px;
            }
            .mainLeft{
                margin:0px 35px 0px 0px;
            }
            .mainRight{
                margin: 0px 0px 0px 65px;
                font-size: 15px;
            }
            .btn{
                font-size: 15px;
                padding: 0px 25px;
                font-family:'Cormorant SC', serif; ;
                border-radius: 5px;
            }
            .btn:hover{
                background-color: rgb(165, 165, 165);
                cursor: pointer;
            }

            .social{
                display: flex;
                flex-direction:row;
                justify-content: center;
                line-height: 100px;
                margin-top:210px;
                background-color: rgba(214, 203, 203, 0.705);
            }
            .social a{
                color:rgb(24, 100, 185);
                font-size: 40px;
                margin: 0 25px;
            }

            .social a:hover{
                color: black;
            }

            .container{
                text-align:center;
            }
        </style>
    </head>
    <body>
        <!--                   Menu Bar            -->
        <div class="row-menu">
            <div class="leftSide">
                <h1>Marques Smalley</h1>
            </div>
            
            <div class="rightSide">
                <a href="play.html">Home</a>
                <a href="#">Projects</a>
                <a href="contact.php">Contact</a>
            </div>
        </div>

            <!--              Main Content                 -->

        <p style="text-align: center; font-size: 35px; border-bottom: solid;">Lets Connect!</p>
        <div class="main">
            <div class="mainLeft">
            <form action="contact.php" method="POST">
                <input type="text" name="f_name" maxlength="50" size="40" placeholder="Your Name"><?php
            if($_SERVER['REQUEST_METHOD']=='POST'){
                if(empty($_POST['f_name'])){
                    echo"Please enter your first name";
                }
            }
           ?><br>
                <input type="text" name="email" size="40" placeholder="Email"><?php
            if($_SERVER['REQUEST_METHOD']=='POST'){
                if(empty($_POST['email'])){
                    echo"Please enter your email";
                }
            }
           ?><br>
                <textarea name="message" rows="4" cols="35" placeholder="Message"></textarea><?php
            if($_SERVER['REQUEST_METHOD']=='POST'){
                if(empty($_POST['message'])){
                    echo"Please type your message";
                }
            }
           ?><br>
                <input class="btn" type="submit" value="submit">
            </form>
            </div>

            <div class="mainRight">
                <p><i class="fas fa-location-arrow" style="color:rgb(24, 100, 185); margin-right: 10px;"></i>Grand Rapids, MI</p>
                <p><i class="fas fa-phone-alt" style="color: rgb(24, 100, 185); margin-right: 10px;"></i>(616)460-1788</p>
                <p><i class="fas fa-envelope" style="color: rgb(24, 100, 185); margin-right: 10px;"></i>marquessmalley@gmail.com</p>
            </div>
        </div>

        <!--  When form is submitted connect to database  -->
            <?php
                if($_SERVER['REQUEST_METHOD']=='POST'){
                    //connect to database
                    $dbc = mysqli_connect('localhost', 'puser1', 'cis2800puser1', 'test') or
                    die('Cannot connect to DB.'.mysqli_connect_error());

                    //Create Input variables
                    $f_name = $_POST['f_name'];
                    $email = $_POST['email'];
                    $message = $_POST['message'];

                    //Create Query and Execute
                    $sql = "INSERT INTO feedback(name, email, message) VALUES
                    ('$f_name', '$email', '$message')";
                    $r = mysqli_query($dbc, $sql); 
                    
                    if(empty($_SERVER['f_name']) || empty($_POST['email']) || empty($_POST['message'])){
                        die('could not connect'.mysqli_connect_error());
                    }

                }
            ?>

        <!--            Social Footer            -->
        <div class="social">
            <a href="#"><i class="fab fa-facebook"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-linkedin"></i></a>
        </div>


        
        
    </body>
</html>