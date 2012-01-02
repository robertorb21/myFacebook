<?php
require_once'inc/load.inc.php';
require_once 'libs/fb_functions.php';
$error = 0;
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Log In | Facebook</title>
        <?php require_once("inc/head.inc.php"); ?>
    </head>

    <body>
        <?php require_once("inc/afterbody.inc.php"); ?>
        <div id='blueTop'>
            <div id='indexBlueTopContents'>
                <a href='./' title='Go to Facebook Home'>
                    <img src="images/index/logo.png" alt="Facebook Logo" id='indexLogo' />
                </a>
            </div>
        </div>
        <div id="underBlueTop">
            <div id="underBlueTopContents">
                <a href="./" class="signupSmall mr14 noUnderline">Sign Up</a> Facebook helps you connect and share with the people in your life
            </div>
        </div>
        <div id='indexContentsW'>
            <div id='indexGuts'>
                <div id="login_frame">
                    <div id="login_title">
                        Facebook Login
                    </div>
                    <?php if($error) { ?>
                    <div id="login_error">
                        <span id="login_error_title">Please re-enter your password</span>
                        The password you entered is incorrect. Please try again (make sure your caps lock is off).<br />
                        Forgot your password? <a href="recover.php" class="redLink">Request a new one.</a>
                    </div>
                    <?php } ?>
                    <div>
                        <form method="post" action="login.php">
                            <div id="login_form_container">
                                <div class="dInlineB">
                                    <label class="login_form_label" for="email">Email:</label>
                                    <input type="email" name="email" id="email" tabindex="1" class="login_form_input" <?=(isset($_POST["email"]) ? " value='".$_POST["email"]."'" : "");?> />
                                </div>
                                <div class="dInlineB" align="left">
                                    <label class="login_form_label" for="password">Password:</label>
                                    <input type="password" name="password" id="password" tabindex="2" class="login_form_input" />
                                </div>
                                <div align="left">
                                    <div class="login_form_spacer">&nbsp;</div>
                                    <div class="dInline fs11">
                                        <label for="login_form_stay">
                                            <input type="checkbox" name="stayLogged" tabindex="3" checked="checked" value="1" id="login_form_stay" />
                                            Keep me logged in
                                        </label>
                                    </div>
                                </div>
                                <div class="mt4">
                                    <div class="login_form_spacer">&nbsp;</div>
                                    <input type="submit" name="login" tabindex="4" value="Log In" id="login_button" />
                                    <span class="fs11"> or <a href="./" class="boldBlue">Sign up for Facebook</a> </span>
                                </div>
                                <div class="mt4">
                                    <div class="login_form_spacer">&nbsp;</div>
                                    <a href="recover.php" class="fs11 lightBlue">Forgot your password?</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div id="login_page_footer">
                    <?php require_once("inc/footer.inc.php"); ?>
                </div>
            </div>
        </div>
        
    </body>
</html>