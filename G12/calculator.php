<!DOCTYPE html>
<!-- Adapted from http://getbootstrap.com/examples/starter-template/ -->
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="A League of Legends fanpage complete with news, information, and damage calculator">
        <meta name="author" content="hwc, mk, mdl, plm, bw">
        <link rel="icon" href="images/icon.png">

        <title>Calculator</title>

        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap/bootstrap.min.css" rel="stylesheet">
        <!-- Base style -->
        <link href="css/base.css" rel="stylesheet">
        <!-- Custom page style -->
        <link href="css/calc.css" rel="stylesheet">


    </head>
    <!-- Display a warning for disabled Javascript -->
    <noscript>
        <div class="alert alert-warning" role="alert"><strong>JavaScript is disabled!</strong> The items page, calculator, and sign in function requires JavaScript. Please reenable JavaScript to access these functions.</div>
    </noscript>
    <body>
        <script>
            function validateForm(){
                var form = document.forms["calculator"]["champions"].value;
                var form2 = document.forms["calculator"]["items1"].value;
                var form3 = document.forms["calculator"]["items2"].value;
                var form4 = document.forms["calculator"]["items3"].value;
                var form5 = document.forms["calculator"]["items4"].value;
                var form6 = document.forms["calculator"]["items5"].value;
                var form7 = document.forms["calculator"]["items6"].value;
                if(form != tryndamere || form != annnie || form != amumu || form2 != null form2 !=botrk || form2 !=ie ||form2 != fh|| form2 !=berserkers_shoes || form2 !=randuins || form2 !=spirit || form2 !=rylais || form2 !=iceborn || form2 !=deathcap form2 != null form3 !=botrk || form3 !=ie ||form3 != fh|| form3 !=berserkers_shoes || form3 !=randuins || form3 !=spirit || form3 !=rylais || form3 !=iceborn || form3 !=deathcap form4 != null form4 !=botrk || form4 !=ie ||form4 != fh|| form4 !=berserkers_shoes || form4 !=randuins || form4 !=spirit || form4 !=rylais || form4 !=iceborn || form4 !=deathcap form5 != null form5 !=botrk || form5 !=ie ||form5 != fh|| form5 !=berserkers_shoes || form5 !=randuins || form5 !=spirit || form5 !=rylais || form5 !=iceborn || form5 !=deathcap form6 != null form6 !=botrk || form6 !=ie ||form6 != fh|| form6 !=berserkers_shoes || form6 !=randuins || form6 !=spirit || form6 !=rylais || form6 !=iceborn || form6 !=deathcap form6 != null form6 !=botrk || form6 !=ie ||form6 != fh|| form6 !=berserkers_shoes || form6 !=randuins || form6 !=spirit || form6 !=rylais || form6 !=iceborn || form6 !=deathcap form6 != null form7 !=botrk || form7 !=ie ||form7 != fh|| form7 !=berserkers_shoes || form7 !=randuins || form7 !=spirit || form7 !=rylais || form7 !=iceborn || form7 !=deathcap  )
                    alert ("bad input")
                    return false
            }
        </script>
        <div class="container">
            <a href="index.html"><img alt="League of Legends logo" src="images/League_of_legends_logo_transparent.png" width="190" height="75"></a>

            <nav class="navbar navbar-inverse navbar-fixed-top">
                <div class="navbar-header">
                    <!-- Collapsed navbar hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand"></a>
                </div>
                <div id="navbar" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="index.html">News</a></li>
                        <li><a href="intro.html">Intro</a></li>
                        <li>
                            <!-- Show the dropdown for Media if Javascript is enabled -->
                            <script type="text/javascript">
                                document.write(" \
<a href=\"\" data-toggle=\"dropdown\">Media<span class=\"caret\"></span></a> \
<ul class=\"dropdown-menu inverse-dropdown\"> \
<li><a href=\"videos.html\">Videos</a></li> \
<li><a href=\"lcs.html\">Pro teams</a></li> \
                                </ul> \
")
                            </script>
                            <!-- Else show plain links -->

                            <noscript>
                                <div id="noscript-media">
                                    <a href="videos.html">Videos</a><br>
                                    <a href="lcs.html">Pro teams</a>
                                </div>
                            </noscript>

                        </li>
                        <li><a href="champions.html">Champions</a></li>
                        <li><a href="items.html">Items</a></li>
                        <li class="active"><a href="calculator.html">Calculator</a></li>
                        <li>
                            <script type="text/javascript">
                                document.write(" \
<a href=\"#signin\" data-toggle=\"modal\" data-target=\"#signInModal\">Sign in</a> \
")
                            </script>

                            <noscript>
                                <div id="noscript-signin">
                                    <a href="signin.html">Sign in</a>
                                </div>
                            </noscript>
                        </li>
                    </ul>
                </div><!--/.nav-collapse -->

            </nav>

            <div class="middle-container">
                <h1><span class="h1-capital">C</span>ALCULATOR</h1>
                <div class="middle-content">
                    <div class = "row">
                        <form name = "calculator" action = "http://localhost/calc.php" onsubmit = "validateForm()" method="post">
                            <div class="col-md-4 border-right">
                                <!--Click on the icon to select your champion. A pop-up should appear to let you select from 20+ champions.
For milestone 4 we've only included 3 to show functionality. More will be included once we have access
to database.-->
                                <h4>Champion selection</h4>
                                <select name="champions" id="btn-champ">
                                    <option value="tryndamere">Tryndamere</option>
                                    <option value="annie">Annie</option>
                                    <option value="amumu">Amumu</option>
                                </select>
                            </div>
                            <!--Click on any slot, 10 sample items will show up for selection. More will be available once we have
database-->
                            <div class="col-md-8">
                                <h4 class="align">Please click to select your items</h4>
                                <div class="btn-group">
                                    <select name="items1" id="items1">
                                        <option value="null"> &nbsp; </option>
                                        <option value="botrk">botrk</option>
                                        <option value="ie">ie</option>
                                        <option value="berserkers_shoes">berserkers shoes</option>
                                        <option value="fh">fh</option>
                                        <option value="randuins">randuins</option>
                                        <option value="spirit">spirit</option>
                                        <option value="rod">rod</option>
                                        <option value="deathcap">deathcap</option>
                                        <option value="rylais">rylais</option>
                                        <option value="iceborn">iceborn</option>
                                    </select>
                                </div>

                                <div class="btn-group">
                                    <select name="items2" id="items2">
                                        <option value="null"> &nbsp; </option>
                                        <option value="botrk">botrk</option>
                                        <option value="ie">ie</option>
                                        <option value="berserkers_shoes">berserkers shoes</option>
                                        <option value="fh">fh</option>
                                        <option value="randuins">randuins</option>
                                        <option value="spirit">spirit</option>
                                        <option value="rod">rod</option>
                                        <option value="deathcap">deathcap</option>
                                        <option value="rylais">rylais</option>
                                        <option value="iceborn">iceborn</option>
                                    </select>
                                </div>
                                <div class="btn-group">
                                    <select name="items3" id="items3">
                                        <option value="null"> &nbsp; </option>
                                        <option value="botrk">botrk</option>
                                        <option value="ie">ie</option>
                                        <option value="berserkers_shoes">berserkers shoes</option>
                                        <option value="fh">fh</option>
                                        <option value="randuins">randuins</option>
                                        <option value="spirit">spirit</option>
                                        <option value="rod">rod</option>
                                        <option value="deathcap">deathcap</option>
                                        <option value="rylais">rylais</option>
                                        <option value="iceborn">iceborn</option>
                                    </select>
                                </div>
                                <!--                    </div>-->
                                <br>
                                <!--                        <div class="row">-->
                                <div class="btn-group">
                                    <select name="items4" id="items4">
                                        <option value="null"> &nbsp; </option>
                                        <option value="botrk">botrk</option>
                                        <option value="ie">ie</option>
                                        <option value="berserkers_shoes">berserkers shoes</option>
                                        <option value="fh">fh</option>
                                        <option value="randuins">randuins</option>
                                        <option value="spirit">spirit</option>
                                        <option value="rod">rod</option>
                                        <option value="deathcap">deathcap</option>
                                        <option value="rylais">rylais</option>
                                        <option value="iceborn">iceborn</option>
                                    </select>
                                </div>
                                <div class="btn-group">
                                    <select name="items5" id="items5">
                                        <option value="null"> &nbsp; </option>
                                        <option value="botrk">botrk</option>
                                        <option value="ie">ie</option>
                                        <option value="berserkers_shoes">berserkers shoes</option>
                                        <option value="fh">fh</option>
                                        <option value="randuins">randuins</option>
                                        <option value="spirit">spirit</option>
                                        <option value="rod">rod</option>
                                        <option value="deathcap">deathcap</option>
                                        <option value="rylais">rylais</option>
                                        <option value="iceborn">iceborn</option>
                                    </select>
                                </div>
                                <div class="btn-group">
                                    <select name="items6" id="items6">
                                        <option value="null"> &nbsp; </option>
                                        <option value="botrk">botrk</option>
                                        <option value="ie">ie</option>
                                        <option value="berserkers_shoes">berserkers shoes</option>
                                        <option value="fh">fh</option>
                                        <option value="randuins">randuins</option>
                                        <option value="spirit">spirit</option>
                                        <option value="rod">rod</option>
                                        <option value="deathcap">deathcap</option>
                                        <option value="rylais">rylais</option>
                                        <option value="iceborn">iceborn</option>
                                    </select>
                                </div>
                            </div>
                            </div>


                        <!--Champbase is used to store values passed from the child window.-->
                        <br><br id="champbase">
                        <div id="ro" class="row">
                            <!--The compute outcome will be displayed here. Damage per hit is the damage it does in the normal sense.
Damage over time takes into consideration of the ability cooldown and attack speed (for auto-attack)-->

                            <div id="SelfQ" class="col-md-3 col-sm-6">
                                <div id="content">
                                <h5>Bloodlust</h5>
                                <br>Damage per hit: <span id="Qdmg">0</span>
                                <br>Damage per second: <span id="Qdps">0</span>
                                    </div>
                            </div>
                            <div id="SelfW" class="col-md-3 col-sm-6">
                                <h5>Mocking Shout</h5>
                                <br>Damage per hit: <span id="Wdmg">0</span>.
                                <br>Damage per second: <span id="Wdps">0</span>.
                            </div>
                            <div id="SelfE" class="col-md-3 col-sm-6">
                                <h5>Spinning Slash</h5> 
                                <br>Damage per hit:<span id="Edmg">0</span>. 
                                <br>Damage per second: <span id="Edps">0</span>.
                            </div>
                            <div id="SelfR" class="col-md-3 col-sm-6">
                                <h5>Undying Rage</h5>
                                <br>Damage per hit: <span id="Rdmg">0</span>. 
                                <br>Damage per second: <span id="Rdps">0</span>.
                            </div>
                        </div>
                        <br>
                        <div id="row">
                            <div id="auto-attk" class="col-md-4">
                                <h5>Auto Attack</h5>
                                Damage per hit:
                                <br>Damage per second:
                                
                            </div>
                            <div class="col-md-6"></div>
                            <div class="col-md-2"><button id="calculatestats" class="btn btn-default">Calculate it now!</button></div>
                        </div>
                        <!--stats1 to stats 6 are used to hold item stats passed from child windows.-->
                        
                        <!--these id's here display their respective values-->
                        </form>
                    
                </div>


                <footer class="row">
                    <div class="col-md-4 footer-left">
                        Group 12: hwc, mk, mdl, plm, bw
                        <br>
                        <a href="mailto:someone@example.com">someone@example.com</a>
                    </div>
                    <div class="col-md-4 footer-center">
                        <a href="#"><img alt="News page" src="images/League_of_legends_logo_transparent.png" width="190" height="75"></a>
                    </div>
                    <div class="col-md-4 footer-right">
                        Disclaimer notice
                        <br>
                        &copy; 2015 Copyright notice&nbsp;			
                    </div>
                </footer>
            </div>
        </div><!-- /.middle -->

        <!-- Sign in modal -->
        <div class="modal fade" id="signInModal" tabindex="-1" role="dialog" aria-labelledby="signInModal" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form name="signIn" action="http://webdevfoundations.net/scripts/formdemo.asp" onsubmit="return validateSignIn()" method="POST">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h1 id="signin-title">Sign in</h1>
                        </div>
                        <div class="modal-body">
                            <!-- Email -->
                            <span class="modal-title">Email: <span id="email-star">*</span></span><br>
                            <input type="text" placeholder="example@email.com" name="email" size="40">
                            <br>
                            <!-- Submit -->
                            <input id="submitButton" type="submit" class="btn btn-primary pull-right" value="Go!">
                            <br>
                            <!-- Password -->
                            <span class="modal-title">Password: <span id="password1-star">*</span></span><br>
                            <input type="password" name="password1" size="40">
                            <!-- Register -->
                            <a id="registerLink" href="#" onclick="registerToggle()" class="small pull-right">Register</a>
                            <br>
                            <!-- Forgot your password -->
                            <a href="#" class="small">Forgot your password?</a>
                            <!-- Hidden registration area -->
                            <div id="registerArea">
                                <hr class="hr-white">
                                <!-- Repeat password -->
                                <span class="modal-title">Repeat password: <span id="password2-star">*</span></span><br>
                                <input type="password" name="password2" size="40">
                                <br>
                                <!-- Terms -->
                                <input type="checkbox" name="termsConditions">
                                <span class="small">I accept the <a href="#" data-toggle="tooltip" data-placement="right" title="By accepting, you forfeit all your assets to us.">terms and conditions</a> <span id="terms-star">*</span></span>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div><!-- End of modal -->

        <!-- Bootstrap core JavaScript
================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/calc.js"></script>
        <script src="js/base.js"></script>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <!--script src="js/ie10-viewport-bug-workaround.js"></script-->
    </body>
</html>
