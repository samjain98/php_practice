<?php
    /* 
 * Sameer Jain
 * sameejain@my.smccd.edu
 * CIS 380
 * OL
 * midterm
 * Sameer Jain
 * 10/10/15
 */
function get_students()
{
    global $db;
    $query = 'SELECT Student_Name, Gender, Student_id
              FROM student';
    $statement = $db->prepare($query);
    $statement->execute();
    $students = $statement->fetchAll();
    $statement->closeCursor();
    return $students;
}

function get_scores()
{
    global $db;
    $query = 'SELECT student_id, event_id, score
              FROM score';
    $statement = $db->prepare($query);
    $statement->execute();
    $scores = $statement->fetchAll();
    $statement->closeCursor();
    return $scores;
}

function get_grades()
{
    global $db;
    $query = 'SELECT event_id, category, Event_date
              FROM grade_event';
    $statement = $db->prepare($query);
    $statement->execute();
    $grades = $statement->fetchAll();
    $statement->closeCursor();
    return $grades;
}

function get_dates()
{
    global $db;
    $query = 'SELECT Event_date'
            . 'FROM grade_event';
    $statement = $db->prepare($query);
    $statement->execute();
    $dates = $statement->fetchAll();
    $statement->closeCursor();
    return $dates;
}

function get_all_students() {
    global $db;
    $query = 'SELECT Student_Name ,
             Gender ,
             grade_event.event_id ,
             category ,score FROM student, 
             grade_event, 
             score 
             WHERE student.Student_id = score.student_id 
             AND grade_event.event_id = score.event_id;';
    $statement = $db->prepare($query);
    $statement->execute();
    $all_students = $statement->fetchAll();
    $statement->closeCursor();
    return $all_students;
}

function get_product($product_id) {
    global $db;
    $query = 'SELECT * FROM products
              WHERE productID = :product_id';
    $statement = $db->prepare($query);
    $statement->bindValue(":product_id", $product_id);
    $statement->execute();
    $product = $statement->fetch();
    $statement->closeCursor();
    return $product;
}

function delete_product($product_id) {
    global $db;
    $query = 'DELETE FROM products
              WHERE productID = :product_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':product_id', $product_id);
    $statement->execute();
    $statement->closeCursor();
}

function add_event($event_date, $category_type) {
    global $db;
    $query = 'INSERT INTO grade_event
                 (Event_date, category)
              VALUES
                 (:event_date, :category_type)';
    $statement = $db->prepare($query);
    $statement->bindValue(':event_date', $event_date);
    $statement->bindValue(':category_type', $category_type);
    $statement->execute();
    $statement->closeCursor();
}

function add_score($student_id, $event_id, $score) {
    global $db;
    $query = 'INSERT INTO score
                 (student_id, event_id, score)
              VALUES
                 (:student_id, :event_id, :score)';
    $statement = $db->prepare($query);
    
    $statement->bindValue(':student_id', $student_id);
    $statement->bindValue(':event_id', $event_id);
    $statement->bindValue(':score', $score);

    $statement->execute();
    $statement->closeCursor();
}

function add_student($student_name, $gender) {
    global $db;
    
    $query = 'INSERT INTO student
                 (Student_Name, Gender)
              VALUES
                 (:student_name, :gender)';
    
    $statement = $db->prepare($query);
    $statement->bindValue(':student_name', $student_name);
    $statement->bindValue(':gender', $gender);
    $statement->execute();
    $statement->closeCursor();
}
?>