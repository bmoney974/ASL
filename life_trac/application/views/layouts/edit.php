<div class="event">

   <?php  foreach($records as $row) ?>


    <?php echo form_open("site/update/$row->id"); ?>
    <ul>
        <li>
            <label>Event Name</label><br />
            <input type="text" name="eventName2" id="eventName" />
        </li>

        <li>
            <label>Event Date</label><br />
            <input type="text" name="eventDate2" id="eventDate" placeholder="yyyy-mm-dd"/>
        </li>

        <li>
            <label>Event Location</label><br />
            <input type="text" name="eventLocation2" id="eventLocation" />
        </li>

        <li>
            <label>Choose Block</label><br />
            <select name="eventBlock2" id="eventBlock">
                <option value="Business">Business</option>
                <option value="Personal">Personal</option>
            </select>

        </li>

        <li>
            <input type="submit" value="Edit Event">
        </li>
    </ul>

    <?php  echo form_close(); ?>


</div>