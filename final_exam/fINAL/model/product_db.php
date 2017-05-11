<?php
    /* 
 * Sameer Jain
 * sameejain@my.smccd.edu
 * CIS 380
 * OL
 * final
 * Sameer Jain
 * 12/18/15
 */
function get_students()
{
    global $db;
    $query = 'SELECT Student_Name, Gender, Student_id, Student_Email, Student_Phone
              FROM student';
    $statement = $db->prepare($query);
    $statement->execute();
    $students = $statement->fetchAll();
    $statement->closeCursor();
    return $students;
}
function get_student_report()
{
    global $db;
    $query = ' DROP TABLE IF EXISTS Student_Report;
                CREATE TABLE Student_Report AS
                (SELECT s.Student_id, s.Student_Name, s.Student_Email, g.event_id, g.Event_date, g.category, sc.score
                FROM student s, grade_event g, score sc
                WHERE s.Student_id = sc.student_id
                AND g.event_id = sc.event_id);';
    $statement = $db->prepare($query);
    $statement->execute();
    $statement->closeCursor();
    
    global $db;
    $query2 = ' SELECT Student_id, Student_Name, Student_Email, event_id, Event_date, category, score
                FROM Student_report';
    $statement2 = $db->prepare($query2);
    $statement2->execute();
    $reports = $statement2->fetchAll();
    $statement2->closeCursor();

    return $reports;
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
    $query = 'SELECT event_id, category, Event_date, Status_Message
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

function add_event($event_date, $category_type, $status_message) {
    global $db;
    $query = 'INSERT INTO grade_event
                 (Event_date, category, Status_Message)
              VALUES
                 (:event_date, :category_type, :status_message)';
    $statement = $db->prepare($query);
    $statement->bindValue(':event_date', $event_date);
    $statement->bindValue(':category_type', $category_type);
    $statement->bindValue(':status_message', $status_message);
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

function add_student($student_name, $gender, $student_email, $student_number) {
    global $db;
    
    $query = 'INSERT INTO student
                 (Student_Name, Gender, Student_Email, Student_Phone)
              VALUES
                 (:student_name, :gender, :student_email, :student_number)';
    
    $statement = $db->prepare($query);
    $statement->bindValue(':student_name', $student_name);
    $statement->bindValue(':gender', $gender);
    $statement->bindValue(':student_email', $student_email);
    $statement->bindValue(':student_number', $student_number);
    $statement->execute();
    $statement->closeCursor();
}
?>