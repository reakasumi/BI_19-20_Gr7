
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Log In</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/logIn.css">
    <!-- <script src="js/login.js"></script> -->
</head>

<body>
    <!-- HEADER -->
    <!-- <header>
        <div class="navigation">
            <nav>
                <div class="header-text">
                    <span class="composition-text">
                        Travel
                    </span>

                    <span class="left-text">
                        Dare to live outside your box!
                    </span>
                </div>
                <i class="fa fa-bars menu-toggle"></i>
                <ul>
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="about.html" target="_self">ABOUT</a></li>
                    <li><a href="blog.html" target="_self">BLOG</a></li>
                    <li class="dropdown">
                        <a href="places.php" target="_self">PLACES</a>
                        <div class="dropdown-content">

                            <div class="row">
                                <div class="column">
                                    <form action="newyork.html">
                                        <p>
                                            <label class="just-text">Where do you want to go?</label>
                                            <br>
                                            <input list="browsers" class="inputStyle_1" name="browser"
                                                placeholder="Search.." id="myInput"
                                                style=" background-image: url('images/search.png');">
                                            <datalist id="browsers">
                                                <option value="New York">
                                                <option value="Berlin">
                                                <option value="Paris">
                                            </datalist>
                                        </p>
                                        <p class="inline">
                                            <label class="just-text">Check in</label><br>
                                            <input class="inputStyle_2" type="date" id="myDate1">
                                        </p>
                                        <p class="inline">
                                            <label class="just-text">Check out</label><br>
                                            <input class="inputStyle_2" type="date" id="myDate2">
                                        </p>
                                        <p>
                                            <label class="just-text">Guests</label><br>
                                            <input type="number" class="inputStyle_1" placeholder="How many.." min="1"
                                                max="30" step="1" id="myInput2">
                                        </p>

                                        <input type="button" name="search" id="button1" value="SEARCH">

                                    </form>


                                </div>



                            </div>

                    </li>

                    <li><a href="logIn.html" target="_self">LOG IN</a></li>

                </ul>
            </nav>
        </div>
    </header> -->

    <?php include('header.php')?>

    <!-- //HEADER -->

    <!-- CONTENT -->
    <div class="content-form">
        <form action="login.php" method="post" >
            <h2 class="form-title">Log In</h2>
            <div>
                <label>Username:</label>
                <input type="text" name="username" class="inputType" required autofocus>

            </div>
            <div>
                <label>Password:</label>
                <input type="password" name="password" class="inputType" required>
            </div>
            <div>
                <button type="submit" name="logIn-btn" class="logIn-btn" >Log In</button>
            </div>
            <p>If you don't have an account, you can <a href="signUp.html">Sign Up</a> </p>

        </form>
        <br>


        <p style="text-align:center; color:#E2494C;">Please rate us:</p>
        <form oninput="x.value=parseInt(a.value)+parseInt(b.value)" id="ratings">
            <table class="tabel1" border="0" style="padding: 2rem 1rem;">
                <tr>
                    <td style="text-align: left;">
                        <label>Functionality: </label>
                    </td>
                    <td>
                        <input type="range" id="a" value="25" min="0" max="50">
                    </td>
                    <td style="text-align: right;">
                        0-50
                    </td>
                </tr>
                <tr>
                    <td style="text-align: left;">
                        <label>Visualization: </label>
                    </td>
                    <td>
                        <input type="range" id="b" value="25" min="0" max="50">
                    </td>
                    <td>
                        0-50
                    </td>
                </tr>
                <tr>
                    <td style="text-align: left;">
                        Total: <output name="x" for="a b"></output>%
                    </td>
                    <td colspan="2">
                        <input class="rate-btn" type="submit" name="rate" value="Rate Us" style="margin-left: 118px;">
                    </td>
                </tr>
            </table>
        </form>
    </div>
     <!-- <script src="js/header.js"></script>
    <script src="js/newyork.js"></script> -->
    <?php include('footer.php')?>
</body>
</html>
<!-- onsubmit="return checkMatching2(this) -->