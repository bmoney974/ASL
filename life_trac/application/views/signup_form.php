<h1>Creat an Account</h1>

<fieldset>
    <legend>Personal Information</legend>

    <?php
    echo form_open('login/create_member');
    echo form_input('firstName',set_value('firstName','First Name'));
    echo form_input('lastName', set_value('lastName','Last Name'));
    echo form_input('email',set_value('email','Email '));

    ?>
</fieldset>

<fieldset>
    <legend>Login Information</legend>
    <?php
    echo form_input('username',set_value('username','Username'));
    echo form_password('password',set_value('password','Password'));
    echo form_password('password2',set_value('password2','PasswordConfirm'));
    echo form_submit('submit','Create Account');
    ?>
    <?php echo validation_errors('<p class="error">');?>

</fieldset>