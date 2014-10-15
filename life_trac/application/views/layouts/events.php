<div class="">


    <h2>Add Event</h2>


    <?php echo form_open('site/events'); ?>
    <p>
        <label>Event Name</label>
        <input type="text name="eventName" id="eventName" />
    </p>

    <p>
        <label>Event Date</label>
        <input type="text name="eventDate" id="eventDate" />
    </p>

    <p>
        <label>Event Locaton</label>
        <input type="text name="eventLocation" id="eventLocation" />
    </p>

    <p>
        <input type="submit" value="Add Event">
    </p>


   <?php  echo form_close(); ?>


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

