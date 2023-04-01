<?php
require 'database_connection.php';
$display_query = "SELECT event_id, class_name, teacher_name, contact_no, dated, period FROM calendar_event_master";
$results = mysqli_query($con, $display_query);
$count = mysqli_num_rows($results);
if ($count > 0) {
    $data_arr = array();
    $i = 1;
    while ($data_row = mysqli_fetch_array($results, MYSQLI_ASSOC)) {
        $data_arr[$i]['event_id'] = $data_row['event_id'];
        $data_arr[$i]['class_name'] = $data_row['class_name'];
        $data_arr[$i]['teacher_name'] = $data_row['teacher_name'];
        $data_arr[$i]['contact_no'] = $data_row['contact_no'];
        $data_arr[$i]['date'] = date("Y-m-d", strtotime($data_row['dated']));
        $data_arr[$i]['period'] = $data_row['period'];
        // $data_arr[$i]['end'] = date("Y-m-d", strtotime($data_row['event_end_date']));
        $data_arr[$i]['color'] = '#ffc107'; // 'green'; pass colour name
        // $data_arr[$i]['color'] = '#' . substr(uniqid(), -6); // 'green'; pass colour name
        // $data_arr[$i]['url'] = 'https://www.765t67r5.com';
        $i++;
    }

    $data = array(
        'status' => true,
        'msg' => 'successfully!',
        'data' => $data_arr
    );
} else {
    $data = array(
        'status' => false,
        'msg' => 'Error!'
    );
}
echo json_encode($data);
