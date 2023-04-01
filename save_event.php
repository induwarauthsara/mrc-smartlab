<?php
require 'database_connection.php';
$class_name = $_POST['class_name'];
$teacher_name = $_POST['teacher_name'];
$contact_no = $_POST['contact_no'];
$date = date("y-m-d", strtotime($_POST['date']));
$period = $_POST['period'];
// print_r($_POST);
// Check this date and period is already exist or not in database
$check_query = "SELECT * FROM calendar_event_master WHERE dated = '" . $date . "' AND period = '" . $period . "'";
// echo $check_query;
$check_result = mysqli_query($con, $check_query);
$check_count = mysqli_num_rows($check_result);
if ($check_count > 0) {
    $data = array(
        'status' => false,
        'msg' => 'Sorry, This date and period is already exist.'
    );
    echo json_encode($data);
    exit;
}


$insert_query = "insert into `calendar_event_master`(`class_name`,`teacher_name`,`contact_no`,`dated`,`period`) values ('" . $class_name . "','" . $teacher_name . "','" . $contact_no . "','" . $date . "','" . $period . "')";
//insert into `calendar_event_master`(`class_name`,`teacher_name`,`contact_no`,`date`,`period`) values ('sad','j','563','70-01-01'.,'sada'){"status":false,"msg":"Sorry, Event not added."}
//http://192.168.1.2/calander/save_event.php?class_name=sad&teacher_name=j&contact_no=563&date=kjhju&period=sada
// echo $insert_query;
if (mysqli_query($con, $insert_query)) {
    $data = array(
        'status' => true,
        'msg' => 'Event added successfully!'
    );
} else {
    $data = array(
        'status' => false,
        'msg' => 'Sorry, Event not added.'
    );
}
echo json_encode($data);
