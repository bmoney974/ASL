


<button class="click add_btn">Add New</button>
<div class="event_edit">

    <div class="event">

        <h3 style="text-align: center;">Add an Event</h3>



        <?php echo form_open('site/create'); ?>
        <ul>
            <li>
                <label>Event Name</label><br />
                <input type="text" name="eventName" id="eventName" />
            </li>

            <li>
                <label>Event Date</label><br />
                <input type="date" name="eventDate" id="eventDate" placeholder="yyyy-mm-dd"/>
            </li>

            <li>
                <label>Event Locaton</label><br />
                <input type="text" name="eventLocation" id="eventLocation" />
            </li>

            <li>
                <label>Choose Block</label><br />
                <select name="eventBlock" id="eventBlock">
                    <option value="Business">Business</option>
                    <option value="Personal">Personal</option>
                </select>

            </li>

            <li>
                <input type="submit" value="Add Event">
            </li>
        </ul>

        <?php  echo form_close(); ?>


    </div>

</div>


<?php if(isset($records)) : foreach($records as $row) :?>
    <ul class="sortable" style="list-style:none; width:100%; height:auto;">
        <li>
            <div class="events">
                <h5><?php echo "<h3>Event Block: " . $row->eventBlock . "</h3>" ; ?></h5>
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

                    <li>
                        <?php echo anchor("site/delete/$row->id", "Delete");?>
                    </li>

                    <li>
                        <span class="click"><?php echo anchor("site/edit/$row->id", "Edit");?></span>
                    </li>


                </ul>
            </div>
        </li>
    </ul>
<?php endforeach; ?>

<?php else : ?>
<h2>No Records Found. Please Enter an Event</h2>

<?php endif; ?>




