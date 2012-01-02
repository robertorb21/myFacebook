<?php require_once("inc/load.inc.php"); ?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>Welcome to Facebook - Log In, Sign Up or Learn More</title>
        <?php require_once("inc/head.inc.php"); ?>
    </head>

    <body>
        <?php require_once("inc/afterbody.inc.php"); ?>
        <div id='blueTop'>
            <div id='indexBlueTopContents'>
                <a href='./' title='Go to Facebook Home'>
                    <img src="images/index/logo.png" alt="Facebook Logo" id='indexLogo' />
                </a>
                <div id='indexRight'>
                    <form method='post' action='login.php'>
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                                <td align="left" valign="middle" class='loginWords'>Email</td>
                                <td align="left" valign="middle" class='loginWords'>Password</td>
                                <td align="left" valign="middle">&nbsp;</td>
                            </tr>
                            <tr>
                                <td align="left" valign="middle"><input type='text' autocomplete="off" id='email' name='email' tabindex='1' class='loginText' /></td>
                                <td align="left" valign="middle"><input type='password' id='pass' name='pass' tabindex='2' class='loginText' /></td>
                                <td align="left" valign="middle"><input type='submit' value='Log In' tabindex="4" id='indexLogin' /></td>
                            </tr>
                            <tr>
                                <td align="left" valign="middle" id='indexPersist'><label><input type="checkbox" name='stayLogged' tabindex="3" value='1' checked='1' />Keep me logged in</label></td>
                                <td align="left" valign="middle"><a href='recover.php' class='loginLink'>Forgot your password?</a></td>
                                <td align="left" valign="middle">&nbsp;</td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
        </div>
        <div id='indexContents'>
            <div id='indexGuts'>
                <div class='mt40'>
                    <div id='indexRightArea'>
                        <div class='indexBold' id='signUpText'>
                            Sign up
                            <div class='noBold fs16'>It's free and always will be.</div>
                        </div>
                        <div id='regForm'>
                            <form method='post' action='register.php' name='reg' id='reg'>
                                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                    <tr>
                                        <td class='indexLabel'>First Name:</td>
                                        <td><input type='text' class='indexReg' id='firstname' name='firstname' /></td>
                                    </tr>
                                    <tr>
                                        <td class='indexLabel'>Last Name:</td>
                                        <td><input type='text' class='indexReg' id='lastname' name='lastname' /></td>
                                    </tr>
                                    <tr>
                                        <td class='indexLabel'>Your Email:</td>
                                        <td><input type='email' class='indexReg' id='email_reg' name='email_reg' /></td>
                                    </tr>
                                    <tr>
                                        <td class='indexLabel'>Re-enter Email:</td>
                                        <td><input type='text' class='indexReg' id='email_confirm' name='email_confirm' /></td>
                                    </tr>
                                    <tr>
                                        <td class='indexLabel'>New Password:</td>
                                        <td><input type='password' class='indexReg' id='password' name='password' /></td>
                                    </tr>
                                    <tr>
                                        <td class='indexLabel'>I Am:</td>
                                        <td>
                                            <select name='sex' class='indexSelect' id='sex'>
                                                <option selected="selected" value='0'>Select Sex:</option>
                                                <option value='1'>Female</option>
                                                <option value='2'>Male</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class='indexLabel'>Birthday:</td>
                                        <td>
                                            <select name='birthday_month' class='indexSelect' id='birthday_month'>
                                                <option selected="selected" value='0'>Month:</option>
                                                <?
                                                for ($i = 1; $i <= 12; $i++) {
                                                    echo "<option value='$i'>" . date("M", mktime(0, 0, 0, $i)) . "</option>\n";
                                                }
                                                ?>
                                            </select>
                                            <select name='birthday_day' class='indexSelect' id='birthday_day'>
                                                <option selected="selected" value='0'>Day:</option>
                                                <?
                                                for ($i = 1; $i <= 31; $i++) {
                                                    echo "<option value='$i'>$i</option>\n";
                                                }
                                                ?>
                                            </select>
                                            <select name='birthday_year' class='indexSelect' id='birthday_year'>
                                                <option selected="selected" value='0'>Year:</option>
                                                <?
                                                for ($i = date("Y"); $i >= date("Y") - 100; $i--) {
                                                    echo "<option value='$i'>$i</option>\n";
                                                }
                                                ?>
                                            </select><br />
                                            <a href='javascript: void(0);' class='smallLinkA' id='why_provide_birthday'>Why do I need to provide my birthday?</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td><input type='button' id='signup' value='Sign Up' /></td>
                                    </tr>
                                </table>
                            </form>
                        </div>
                        <div id='reg_error' <?php
                                                if (isset($_SESSION['reg_error'])) {
                                                    echo "style='display:block']";
                                                } ?>>
                                 <?php
                                                if (isset($_SESSION['reg_error'])) {
                                                    echo $_SESSION['reg_error'];
                                                    unset($_SESSION['reg_error']);
                                                }
                                 ?>
                                       </div>
                                   </div>
                                   <div class='indexBold w450'>Facebook helps you connect and share with the people in your life
                                       <img src="images/index/world.png" class='p10' />
                                   </div>
                               </div>
                           </div>
                       </div>
<?php require_once("inc/footer.inc.php"); ?>
    </body>
</html>