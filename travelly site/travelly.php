<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <meta name="description" content="teavelly is a travel agency that helps you pick out your holiday vaction"/>
    <meta name="robots" content="index,follow"/>
    <link rel="icon" href="/icons/airplane.svg">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Pattaya&family=Poppins:wght@400;500&display=swap" rel="stylesheet">
    <title>Traveling Agency</title>
    <style>
        /*CGLOBAL STYLES */
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        html{
            font-size: 62.5%;
        }
        body{
            font-family: 'Poppins', sans-serif;
        }
        h1{
            font-size: 2.6rem;
        }
        li, button, label, input, p{
            font-size: 2rem;
        }
        h2{
            font-size: 4.8rem;
        }
        h3{
            font-size: 2.7rem ;
            font-weight: normal;
        }
        h4, h5{
            font-size: 3rem;
        }
        a{
            color: white;
            text-decoration: none;
        }
        button{
            padding: 2rem 6rem;
            background-color: #4c6d97;
            border: none;
            color: white;
            font-size: 1.8rem;
            cursor: pointer;
            transition: background 0.5s ease-out;
            
        }
        button:hover{
            background-color: rgb(53, 53, 95);
        }
        /* Nav Section */
        .main-head{
            background-color: black;
            color: white;
        }
        nav{
            height: 13vh;
            display: flex;
            width:90%;
            margin: auto;
            align-items: center; 
            flex-wrap: wrap;
        }

        nav ul{
           display: flex;
           flex: 1 1 40rem;
           justify-content: space-around;
           align-items: center;
           list-style: none;

        }

       #logo{
            flex: 1 1 40rem;
            font-family: 'Pattaya', sans-serif;
            font-weight: normal;
       }

       /* Hero Section */

       .hero{
           min-height: 120vh;
           background:linear-gradient(rgb(0, 0, 0, 0.5), transparent) ,url('/images/landing-page.jpg');
           background-size: cover;
           background-position: center;
           color: white;
           display: flex;
           flex-direction: column;
           justify-content: center;
           align-items: center;
           text-align: center;
       }

       .hero h3{
           padding: 5rem;
       }

       /* The locations section */
       #locations{
           min-height: 140vh;
           background:linear-gradient(rgb(0, 0, 0, 0.5), transparent), url('/images/new-york-page.png');
           background-size: cover;
           background-position: center;
           display: flex;
           align-items: center;
           position: relative;
           overflow: hidden;
       }
       .locations-head{
           width: 90%;
           margin: auto;
       }
       .locations-head h2{
        padding: 2rem 0rem;
           text-decoration: underline; 
       }

       .locations-head h3{
           padding:1rem 0rem;
       }

       .cloud{
            position: absolute;
            top: 0%;
            right:0%;
            animation: cloudAnimations 2s infinite alternate ease-in-out;
       }
   
       .moving-cloud-2{
           top:20%;
           z-index: -1;
           opacity: 0.5;
       }
    

        @keyframes cloudAnimations {
            from{
                transform: translate(10%, -10%);
            }
            to{
                transform: translate(0%, 0%);
            }
        }

        /* The benefits section */
        .benefits-head{
            min-height:30vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            background-color: #343c44;
            text-align: center;
            padding:3rem;
            color: white;
        }
        .benefits-head h2{
            font-weight: normal;
        }
        .all-cards{
           display: flex; 
           width: 90%;
            margin: auto;
            min-height: 70vh;
            align-items: center;
            text-align: center;
            flex-wrap: wrap;
        }
       .card{
            border: 2px solid;
            flex: 1 1 25rem;
            min-height: 40vh;
            margin: 2rem 4rem;
            box-shadow: -10px -10px 40px rgb(54, 54, 54);
            
        }
        .card p {
            padding: 2rem;
        }
        .card-icon{
            background-color: rgb(95, 83, 83);
        }
        .all-cards img{
            height: 90px;
        }

        /*Contact Section */
        #contact{
            min-height: 100vh;
            background:linear-gradient(rgb(0, 0, 0, 0.5), transparent), url('/images/contact-mountain.png');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .form-wrapper{
            background-color:rgb(19, 28, 39,0.8);
            width: 50%;
            color: white;
            border-radius: 20px;
        }
        .form-head{
            text-align: center;
            padding: 4rem;
        }
        .name-form, .email-form{
            padding: 3rem;
            text-align: center;
        }
        .form-wrapper label{
            margin: 0rem 3rem;
        }
        .form-wrapper button{
            width: 100%;
            padding: 2rem;
            margin-top: 8rem;
            border-bottom-left-radius: 20px;
            border-bottom-right-radius:20px ;
        }
        .form-wrapper input{
            padding: 1rem 2rem;
        }

        /*Footer Section */
         footer{
             color: white;
             background:rgb(19, 28, 39,1);
         }
         .footer-wrapper{
             display: flex;
             padding: 2 rem;
             width: 90%;
             margin: auto;
             min-height: 10vh;
             align-items: center;
             flex-wrap: wrap;
         }
         .footer-wrapper ul{
             display: flex;
             flex: 1 1 40rem;
             list-style: none;
             justify-content: space-between;
             align-items: center;
             
         }
         .footer-wrapper h5{
             flex: 1 1 40rem;
         }

       /* Media Queries */
       @media screen and (max-width:1042px) {
           html{
               font-size: 45%;
           }
           nav{
               text-align: center;
           }

           .moving-cloud-2{
               z-index: -2;
           }
           .moving-cloud-1{
               z-index: -1;
           }

           .footer-wrapper h5{
               text-align: center;
           }
       }
     
    </style>
</head>
<body>
    <!--  Main Navigation  -->
    <header class="main-head">
        <nav>
            <h1 id="logo">Travelly</h1>
            <ul>
                <li><a href="#locations">Locations</a></li>
                <li><a href="#benefits">Benefits</a></li>
                <li><a href="#contacts">Contatcs</a></li>
            </ul>
        </nav>
    </header>

    <!--  Hero Section  -->
    <section class="hero">
        <h2>Travel beyond limits</h2>
        <h3>Start Your travel at a affordables price<br> with travelly. Contat us now</h3>
        <button>Book now</button>
    </section>

    <!--  Locations Section  -->
    <section id="locations">
        <header class="locations-head">
            <h2>The perfect traveling exerpience.</h2>
            <h3>We cover everything from picking the perfect hotel <br> 
            flight and traveling destination</h3>
            <img src="/images/cloud.png" class="moving-cloud-1 cloud">
            <img src="/images/cloud.png" class="moving-cloud-2 cloud">
        </header>
    </section>

    <!--  Benefits Section  -->
    <section id="benefits">
        <header class="benefits-head">
            <h2>The Perfect travel </h2>
            <h3>We cover everything from picking the perfect hotel <br>
             to the flightand destination</h3>
        </header>

        <div class="all-cards">

            <div class="card">
                <div class="card-icon">
            <img src="/icon/route-solid.svg" alt="">
            </div>
            <h4>Travel</h4>
            <p>Travel over 250 countries with no effort</p>
            </div>

            <div class="card">
                <div class="card-icon">
                <img src="/icon/bed-solid.svg" alt="">
                </div>
               <h4>Hotels</h4>
                <p>Hotels located in near popular areas </p>
            </div>
    

            <div class="card">
                <div class="card-icon">
                <img src="/icon/plane-departure-solid.svg" alt="">
                </div>
               <h4>Hotels</h4>
                <p>Flight included in every travels </p>
            </div>
    </div> 
</section>

        <!-- Form Section -->
        <section id="contact">
            <div class="form-wrapper">
                <header class="form-head">
                 <h2>Contact Us</h2>
                </header>

                <form action="travelly.php" method="post">
                    <div class="name-form">
                        <label for="name">Name:</label>
                        <input type="text" name="name">
                    </div>
                    <div class="email-form">
                        <label for="email">Email:</label>
                        <input type="text" name="email">
                    </div>

            <!--When Form is submitted try database connection-->
                    <?php
                 if($_SERVER['REQUEST_METHOD'] =='POST'){

                    if(empty($_POST['name']) || empty($_POST['email'])){
                    echo"<h4>You need to fill out the following fields<h4>";
                        }

                    //Start database connecton if succesfull
                    $dbc = mysqli_connect('localhost', 'puser1', 'cis2800puser1', 'test') or
                    die('Connection Failed.'.mysqli_connect_error());
                    
                    //Create input for variables
                    $name=$_POST['name'];
                    $email= $_POST['email'];

                    //Create query and execute
                    $sql = "INSERT INTO travelly(name, email) VALUES('$name', '$email')";
                    $r = mysqli_query($dbc, $sql); 

                    //Validate input

                    if(!empty($_POST['name']) && !empty($_POST['email'])){
                        echo"<p style='text-align:center';>Thank you $name, will be in touch soon...</p>";
                    }
                }
                    ?>
                    <button type="submit">Submit</button>
                </form>
            </div>
        </section>
        <footer>
            <div class="footer-wrapper">
                <h5>Travelly &copy;</h5>
                <ul>
                    <li><a href="#" title="youtube"><img src="icon/youtube.svg" alt=""></a></li>
                    <li><a href="#"><img src="/icon/instagram.svg" alt=""></a></li>
                    <li><a href="#"><img src="/icon/twitter.svg" alt=""></a></li>
                    
                </ul>
            </div>
        </footer>
      
</body>
</html>