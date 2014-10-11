<div class="">



    <?php
    echo form_open('site/events');
    echo form_input('eventName','Event Name');
    echo form_input('eventDate','Event Date ');
    echo form_input('eventLocation','Event Location ');
    echo form_submit('submit','Add Event');
    ?>

</div>





<?php  foreach($records as $row) :?>
    <div class="events">
        <h5></h5>
        <ul>
            <li>
                <?php echo "<h3>Event Name:</h3> <br />" . $row->eventName ; ?>
            </li>
            <li>
                <?php echo "<h3>Event Date:</h3> <br /> " . $row->eventDate ; ?>
            </li>
            <li>
                <?php echo "<h3>Event Location:</h3> <br /> " . $row->eventLocation; ?>
            </li>

        </ul>
    </div>
<?php endforeach; ?>

