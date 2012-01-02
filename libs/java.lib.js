// Our Javascript Library.
$(document).ready(function(){
    function Open(id) {
        document.getElementById(id).style.display='block';
    }
    function Close(id) {
        document.getElementById(id).style.display='none';
    }
    function changeText(id, text) {
        document.getElementById(id).innerHTML=text;
    }
    $('#signup').click(function() {
        firstname = document.getElementById('firstname');
        lastname = document.getElementById('lastname');
        email = document.getElementById('email_reg');
        email_confirm = document.getElementById('email_confirm');
        password = document.getElementById('password');
        sex = document.getElementById('sex');
        birthday_month = document.getElementById('birthday_month');
        birthday_day = document.getElementById('birthday_day');
        birthday_year = document.getElementById('birthday_year');
        emailExp = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
        if(firstname.value.length<3 || !email.value.match(emailExp) || !email_confirm.value.match(emailExp) || email.value.toLowerCase()!=email_confirm.value.toLowerCase() ||  lastname.value.length<3 || sex.value==0 || birthday_month.value==0 || birthday_day.value==0 || birthday_year.value==0 || password.value.length<5) {
            if(firstname.value.length<3) {
                firstname.focus();
                changeText('reg_error', 'First name must be 3+ characters');
            }
            else if(lastname.value.length<3) {
                lastname.focus();
                changeText('reg_error', 'Last name must be 3+ characters');
            }
            else if(!email.value.match(emailExp)) {
                email.focus();
                changeText('reg_error', 'Must be a valid email');
            }
            else if(!email_confirm.value.match(emailExp)) {
                email_confirm.focus();
                changeText('reg_error', 'Confirm your email');
            }
            else if(email.value.toLowerCase()!=email_confirm.value.toLowerCase() || email.value=='' || email_confirm.value=='') {
                email_confirm.value='';
                email_confirm.focus();
                changeText('reg_error', 'Emails did not match');
            }
            else if(password.value.length<5) {
                password.focus();
                changeText('reg_error', 'Password must be 5+ characters');
            }
            else if(sex.value==0) {
                sex.focus();
                changeText('reg_error', 'Select your sex');
            }
            else if(birthday_month.value==0) {
                birthday_month.focus();
                changeText('reg_error', 'Select your birth month');
            }
            else if(birthday_day.value==0) {
                birthday_day.focus();
                changeText('reg_error', 'Select your birth day');
            }
            else if(birthday_year.value==0) {
                birthday_year.focus();
                changeText('reg_error', 'Select your birth year');
            }
            $('#reg_error').fadeIn(300);
            return;
        } else {
            $("#reg").submit();
            return;
        }
    });
});