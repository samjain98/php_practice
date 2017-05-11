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
                <th>Student Name</th>
                <th>Gender </th>
                <th>Student ID</th>
            </tr>
            <?php foreach ($students as $student) : ?>
            <tr>
                <td><?php echo $student['Student_Name']; ?></td>
                <td><?php echo $student['Gender']; ?></td>
                <td><?php echo $student['Student_id']; ?></td>
            </tr>
            <?php endforeach; ?>
        </table>
        
    <h1>Add Student</h1>
    <form action="student_process.php" method="post" id="add_product_form">

        <label>Student Name:</label>
        <input type="text" name="student_name" />
        <br>

        <label>Gender: </label>
        <select name ="gender">
            <option value ="m">M</option>
            <option value ="f">F</option>
        </select>
        <br>

        <label>&nbsp;</label>
        <input type="submit" value="Add Student" />
        <br>
    </form>
</main>
<?php include '../view/footer.php'; ?>