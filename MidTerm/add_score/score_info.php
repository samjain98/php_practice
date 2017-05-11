<?php include '../view/header.php'; 
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
    <h1>Current Scores</h1>
        <table>
            <tr>
                <th>Student ID</th>
                <th>Event ID </th>
                <th>Score</th>
            </tr>
            <?php foreach ($scores as $score) : ?>
            <tr>
                <td><?php echo $score['student_id']; ?></td>
                <td><?php echo $score['event_id']; ?></td>
                <td><?php echo $score['score']; ?></td>
            </tr>
            <?php endforeach; ?>
        </table>
    <h1>Add Scores</h1>
    <form action="score_process.php" method="post" id="add_product_form">
        <input type="hidden" name="action" value="add_product">

        <label>Student ID:</label>
        <input type="text" name="student_id" />
        <br>
        <label>Event ID: </label>
        <input type="text" name="event_id" />
        <br>
        <label>Score:</label>
        <input type="text" name="score" />
        <br>

        <label>&nbsp;</label>
        <input type="submit" value="Add Score" />
        <br>
    </form>
</main>
<?php include '../view/footer.php'; ?>