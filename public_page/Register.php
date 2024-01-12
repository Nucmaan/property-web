<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="../includes/style.css" type="text/css">
    <link rel="icon" type="image/x-icon" href="../includes/images/logo.png">
    <link rel="stylesheet" href="./styleone.css">

</head>

<body>

    <div class="header">

        <div class="left">
            <div class="logo-image">
                <img class="sawirkalogada-cabirkiisa" src="../includes/images/logo.png" alt="" srcset="">
            </div>
            <div class="logo-Name">
                <a href="../index.php">MyHomeHunt</a>
            </div>

        </div>

        <div class="midle">
            <a class="midle-nav-space" href="../index.php">Home</a>
            <a class="midle-nav-space" href="#">Rentals</a>
            <a class="midle-nav-space" href="#">News</a>
            <a class="midle-nav-space" href="#">About Us</a>
            <a class="midle-nav-space" href="#">Contact Us</a>
        </div>

        <div class="right">
            <!--<img class="usersignin" src="includes/images/user-sign.svg" alt="" srcset="">-->
            <a class="midle-nav-space1" id="home-color" href="../public_page/login.php">Login</a>
            <button class="signin-button"><a href="Register.php">Sign up</a></button>
        </div>

    </div>


    <div class="loginpage">

        <div class="loginleft">
            <img src="../includes/images/signupform.webp" alt="" srcset="">
        </div>

        <div class="loginright"  id = "registertop">

            <h2 id="regform" class="hello1">Registration <span class="form12">form</span></h2>

            <div class="username">
                <input class="inputwidthholder" type="text" placeholder="Enter First Name">
            </div>

            <div class="username">
                <input class="inputwidthholder" type="text" placeholder="Enter Middle Name">
            </div>

            <div class="username">
                <input class="inputwidthholder" type="text" placeholder="Enter Last Name">
            </div>

            <div class="username">
                <input class="inputwidthholder" type="email" placeholder="Enter Email">
            </div>

            <div class="username">
                <input class="inputwidthholder" type="password" placeholder="Enter Password">
            </div>

            <div class="userpassword"  id = "sikiformka">
                <label  class = "labelstatsu">Select Your Gender</label>
                <form  class = "formonegnefdre">
                    <label>
                        <input type="radio" name="gender" value="male" class = "statusmale"> Male
                    </label>

                    <label>
                        <input type="radio" name="gender" value="female" class = "statusmale"> Female
                    </label>
                </form>
            </div>

            <div class="userpassword" id = "sikiformka">
                <label   class = "labelstatsu">Select Your Status</label>
                <form  class = "formone233">
                    <select id="gender" name="gender" class = "selectwidht">
                    <option value="female" class = "statusmale">Select Status</option>
                        <option value="female" class = "statusmale">Renter</option>
                        <option value="male" class = "statusmale">HomeOwner</option>
                        <option value="female" class = "statusmale">Real Estate Agent</option>
                    </select>
                </form>
            </div>

            <button class="loginsingin" type="submit">Register</button>

            <p class="donthaveanacount">Have An Account <a href="login.php"><span class="clickhereaccount"> Click Here
                    </span></a></p>

        </div>

    </div>





    <div class="qeeybtaHooose">

        <div class="contacts">

            <div class="bidixdaftrk">
                <div class="ftrlgo">
                    <img class="sawirkalogada-cabirkiisa1" src="includes/images/logo.png" alt="" srcset="">
                </div>
                <div class="lgname2">
                    <h3 class="contaus109">MyHomeHunt</h3>
                </div>
            </div>

            <div class="ots1">
                <div class="ots2">
                    <p class="ftrlrft3">Effortlessly discover your dream home on our user-friendly platform. <br>
                        Streamlining house hunting for a simpler and faster experience.
                        <br> Find your ideal property with ease.
                    </p>
                </div>

                <div class="ots3">

                    <div class="ots4">

                        <a href="#"><img class="socialmedia1" src="../includes/images/facebook.svg" alt=""
                                srcset=""></a>

                    </div>

                    <div class="ots4">

                        <a href="#"><img class="socialmedia1" src="../includes/images/instagram-with-circle.svg" alt=""
                                srcset=""></a>

                    </div>

                    <div class="ots4">

                        <a href="#"><img class="socialmedia1" src="../includes/images/youtube-round.svg" alt=""
                                srcset=""></a>

                    </div>

                    <div class="ots4">

                        <a href="#"><img class="socialmedia12" src="../includes/images/tiktok-logo-logo.svg" alt=""
                                srcset=""></a>

                    </div>

                </div>
            </div>

        </div>

        <div class="contacts">


            <h3 class="contaus">Companey</h3>

            <p class="informationsie">My Account</p>
            <p class="informationsie">Payment</p>
            <p class="informationsie">My Account</p>
            <p class="informationsie">Payment</p>

        </div>

        <div class="contacts">

            <h3 class="contaus">Contact</h3>

            <p class="informationsie">+60182985863</p>
            <p class="informationsie">www.MyHomeHunt.com</p>
            <p class="informationsie">lucmaan1999@gmail.com</p>
            <p class="informationsie">Degmada Hodan Km4 Tarabuunka Isgooska Taleex</p>

        </div>

        <div class="contacts">

            <h3 class="contaus">Support</h3>
            <p class="informationsie">My Account</p>
            <p class="informationsie">Payment</p>
            <p class="informationsie">My Account</p>
            <p class="informationsie">Payment</p>

        </div>


    </div>

    <div class="copyright">

        <div class="copyinfo">
            <p class="rightinfocopy">Copyright @ 2023 MyHomeHunt All Right Reserved.</p>
        </div>

        <div class="termsinfo">
            <p class="rightinfocopy">User Terms And Conditions | Privacy Policy.</p>
        </div>

    </div>

</body>

</html>