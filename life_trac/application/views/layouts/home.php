<div class="row info_area">

    <div class="col-xs-12 col-md-8 info_side"> <!-- info content -->
        <table>
            <tr>
                <td>
                    <div class="place_holder">
                        <p>Image</p>
                    </div>
                </td>
                <td style="padding:10px;">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at

                </td>
            </tr>
        </table>
    </div>

    <div class="col-xs-6 col-md-4 register_side">
        <h3>Create a FREE account!</h3>
        <h4>Log in</h4>
        <div class="reg_modal">
            <div id="container">
                <?php
                    echo form_open(base_url() . 'site/events');
                $username = array(
                    'name' => 'username',
                    'id'  =>  'username',
                    'value'  =>  set_value('username')
                );

                $email = array(
                    'name' => 'email',
                    'id'  =>  'email',
                    'value'  =>  set_value('email')
                );

                $password = array(
                    'name' => 'password',
                    'id'  =>  'password',
                    'value'  =>  ''
                );

                ?>


                <ul>
                    <li>
                       <label>Username</label>
                        <div>
                      <?php echo form_input($username); ?>
                        </div>
                    </li>

                    <li>
                        <label>Email</label>
                        <div>
                            <?php echo form_input($email); ?>
                        </div>
                    </li>

                    <li>
                        <label>Password</label>
                        <div>
                            <?php echo form_password($password); ?>
                        </div>
                    </li>
                    <li><?php echo validation_errors(); ?> </li>
                    <li>
                        <div>
                            <?php echo form_submit(array('name' => 'register'), 'Register'); ?>
                        </div>
                    </li>

                </ul>

                <?php echo form_close(); ?>

            </div>

        </div>


    </div> <!-- sign up -->

</div>
<hr class="style-four" />
<div class="row features">
    <div class="col-xs-6 col-md-4">
        <div class="place_holder">
            <p>Image</p>
        </div>
    </div>
    <div class="col-xs-6 col-md-4">
        <div class="place_holder">
            <p>Image</p>
        </div>
    </div>
    <div class="col-xs-6 col-md-4">
        <div class="place_holder">
            <p>Image</p>
        </div>
    </div>
</div>