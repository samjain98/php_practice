<?php include '../view/header.php'; 
    require('../model/database.php');
    require('../model/product_db.php');
    /* 
 * Sameer Jain
 * sameejain@my.smccd.edu
 * CIS 380
 * OL
 * final
 * Sameer Jain
 * 12/18/15
 */
    $reports = get_student_report();
?>

<main>
    <h1>Student Report</h1>
        <table>
            <tr>
                <th>Student ID</th>
                <th>Student Name</th>
                <th>Student Email</th>
                <th>Event ID</th>
                <th>Event Date</th>
                <th>Category</th>
                <th>Score</th>
            </tr>
            
            <?php foreach ($reports as $report) : ?>
            <tr>
                <td><?php echo $report['Student_id']; ?></td>
                <td><?php echo $report['Student_Name']; ?></td>
                <td><?php echo $report['Student_Email']; ?></td>
                <td><?php echo $report['event_id']; ?></td>
                <td><?php echo $report['Event_date']; ?></td>
                <td><?php echo $report['category']; ?></td>
                <td><?php echo $report['score']; ?></td>
            </tr>
            <?php endforeach; ?>
        </table>
</main>
