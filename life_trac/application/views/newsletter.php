<!DOCTYPE html>
<html>
<head>
    <title>Newsletter</title>
    <style type="text/css" >
        label{
            display: block;
        }

    </style>
</head>

<body>
<div  class="newsletter_form">
    <?php echo form_open('site/send'); ?>
   <?php $name_data = array(
        'name' => 'name',
        'id' => 'name',
        'value' => set_value('name')

    );
    ?>

    <p><label for= "name">Name: </label><?php echo form_input($name_data); ?></p>
    <p><label for="name">Email Address: </label><input type="text" name="email" class="email" value="<?php set_value('email'); ?>"> </p>

    <p><?php echo form_submit('submit','Submit'); ?></p>

    <?php echo form_close(); ?>

    <?php echo validation_errors(); ?>

</div><!-- end newsletter form -->
</body>

</html>
