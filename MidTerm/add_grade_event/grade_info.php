r<?php include '../view/header.php';
    /* 
 * Sameer Jain
 * sameejain@my.smccd.edu
 * CIS 380
 * OL
 * midterm
 * Sameer Jain
 * 10/10/15
 */
?>
<main>
    <h1>Present Events</h1>
        <table>
            <tr>
                <th>Event Id</th>
                <th>Category </th>
                <th>Event Date</th>
            </tr>
            <?php foreach ($grades as $grade) : ?>
            <tr>
                <td><?php echo $grade['event_id']; ?></td>
                <td><?php echo $grade['category']; ?></td>
                <td><?php echo $grade['Event_date']; ?></td>
            </tr>
            <?php endforeach; ?>
        </table>
    <form action="grade_process.php" method="post" id="add_product_form">
    <h1>Add Events</h1>
    
        
        <label>Event Date: (yyyy/mm/dd)</label>
        <input type="text" name="event_date" />
        <br>

        <label>Category: </label>
        <select name ="category_type">
            <option value ="q">Q</option>
            <option value ="t">T</option>
        </select>
        <br>

        <label>&nbsp;</label>
        <input type="submit" value="Add Event" />
        <br>
    </form>
</main>
<?php include '../view/footer.php'; ?>