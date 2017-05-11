<?php include '../view/header.php'; 
    /* 
 * Sameer Jain
 * sameejain@my.smccd.edu
 * CIS 380
 * OL
 * final
 * Sameer Jain
 * 12/18/15
 */
?>

<main>
    <h1>Student Info</h1>

    <section>
        <!-- display a table of students -->
        <table>
            <tr>
                <th>Student Name</th>
                <th>Gender</th>
                <th>Event Id</th>
                <th>Category</th>
                <th>Score</th>
            </tr>
            <?php foreach ($all_students as $student) : ?>
            <tr>
                <td><?php echo $student['Student_Name']; ?></td>
                <td><?php echo $student['Gender']; ?></td>
                <td class="right"><?php echo $student['event_id']; ?></td>
                <td><?php echo $student['category']; ?></td>
                <td><?php echo $student['score']; ?></td>
            </tr>
            <?php endforeach; ?>
        </table>
    </section>
</main>
<?php include '../view/footer.php'; ?>