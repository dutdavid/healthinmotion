<?php include('server.php') ?>
<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6 lt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7 lt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8 lt8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="UTF-8" />
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
        <title>Login and Registration Form with HTML5 and CSS3</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Login and Registration Form with HTML5 and CSS3" />
        <meta name="keywords" content="html5, css3, form, switch, animation, :target, pseudo-class" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
		<link rel="stylesheet" type="text/css" href="css/animate-custom.css" />
    </head>
    <body>
        <div class="container">
            <!-- Codrops top bar -->
            <div class="codrops-top">
               
                <div class="clr"></div>
            </div><!--/ Codrops top bar -->
            <header>
                <h1>Login and Registration Form <span></span></h1>
			
            </header>
            <section>				
                <div id="container_demo" >
                    <!-- hidden anchor to stop jump http://www.css3create.com/Astuce-Empecher-le-scroll-avec-l-utilisation-de-target#wrap4  -->
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
                        <div id="login" class="animate form">
                        <form method="post" action="register.php">
    <?php include('errors.php'); ?>
                                <h1>Log in</h1> 
                                
                                <p> 
                                    <label for="email" class="email" data-icon="u" > Your email or username </label>
                                    <input id="email" name="email" required="required" type="text" placeholder= mymail@mail.com"/>
                                </p>
                                <p> 
                                    <label for="password" class="youpasswd" data-icon="p"> Your password </label>
                                    <input id="password" name="password" required="required" type="password" placeholder="eg. X8df!90EO" /> 
                                </p>
                                <p class="keeplogin"> 
									<input type="checkbox" name="loginkeeping" id="loginkeeping" value="loginkeeping" /> 
									<label for="loginkeeping">Keep me logged in</label>
                                </p>
                                <p class="signin button"> 
                                <input type="submit" class="btnSubmit" name="submit" value="Login"> 
								</p>
                                <p class="change_link">
									Not a member yet ?
									<a href="#toregister" class="to_register">Join us</a>
								</p>
                            </form>
                        </div>

                        <div id="register" class="animate form">
                        <form method="post" action="register.php">
                         <?php include('errors.php'); ?>
                                <h1> Sign up </h1> 
                                <p> 
                                    <label for="first_name" class="first_name" data-icon="f">Your name</label>
                                    <input id="first_name" name="first_name" required="required" type="text" placeholder="first name" />
                                </p>
                                <p> 
                                    <label for="last_name" class="last_name" data-icon="l" > Last Name</label>
                                    <input id="emailsignup" name="last_name" required="required" type="text" placeholder="David"/> 
                                </p>

                                <p> 
                                    <label for="hospital" class="hospital" data-icon="h">hospital </label>
                                    <input id="hospital" name="hospital" required="required" type="text" placeholder="eg.hospital"/>
                                </p>
                                <p> 
                                    <label for="experience" class="experience" data-icon="x">Experience</label>
                                    <input id="experience" name="experience" required="required" type="text" placeholder="eg. X8df!90EO"/>
                                </p>
                                <p> 
                                    <label for="email" class="email" data-icon="e">Email </label>
                                    <input id="email" name="email" required="required" type="text" placeholder="eg. X8df!90EO"/>
                                </p>

                                <p> 
                                    <label for="dob" class="dob" data-icon="d">DOB </label>
                                    <input id="dob" name="dob" required="required" type="date" placeholder="eg. X8df!90EO"/>
                                </p>
                                <p> 
                                    <label for="password" class="password" data-icon="p">password </label>
                                    <input id="password" name="password" required="required" type="password" placeholder="eg. X8df!90EO"/>
                                </p>
                                <p class="signin button"> 
                                <input type="submit" class="btnSubmit" name="register" value="Register"> 
								</p>
                                <p class="change_link">  
									Already a member ?
									<a href="#tologin" class="to_register"> Go and log in </a>
								</p>
                            </form>
                        </div>
						
                    </div>
                </div>  
            </section>
        </div>
    </body>
</html>