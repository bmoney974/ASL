
<?php if(isset($records)) : foreach($records as $row) :?>
    <ul class="sortable" style="list-style:none;">
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
                        <?php echo anchor("site/edit/$row->id", "Edit");?>
                    </li>

                </ul>
            </div>
        </li>
    </ul>
<?php endforeach; ?>

<?php else : ?>
    <h2>No Records Found. Please Enter an Event</h2>

<?php endif; ?>