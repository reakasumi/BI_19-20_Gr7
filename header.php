<header>
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
                                    <form action="places.php">
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
                                            <input class="inputStyle_2" type="date" id="myDate1" name="dateStart">
                                        </p>
                                        <p class="inline">
                                            <label class="just-text">Check out</label><br>
                                            <input class="inputStyle_2" type="date" id="myDate2" name="dateEnd">
                                        </p>
                                        <p>
                                            <label class="just-text">Guests</label><br>
                                            <input type="number" class="inputStyle_1" placeholder="How many.." min="1"
                                                max="30" step="1" id="myInput2" name="guests">
                                        </p>

                                        <input type="submit" name="search" id="button1" value="SEARCH">

                                    </form>


                                </div>



                            </div>

                    </li>

                    <li> <?php
                         
                          if(isset($_COOKIE["type4"] )){  
                             
                             echo("<a href='logout.php' target='_self' > LOG OUT");
                           }
                           else{
                               echo("<a href='loginPage.php' target='_self' > LOG IN");
                           }?></a></li>

                </ul>
            </nav>
        </div>
    </header>