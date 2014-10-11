<div class="login_form">
    <h1>Log In</h1>
    <?php
        echo form_open("login/validate_credentials");
        echo form_input("username","Username");
        echo form_password("password", "Password");echo "<br/ ><br />";
        echo form_submit("submit", "Login");
        echo anchor("login/signup","Create Account");

    ?>

</div>