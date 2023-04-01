<center>
    <h1>All Booking Details</h1>
    <?php
    // Get All Data From Database and Display in Table
    require 'database_connection.php';
    $display_query = "SELECT event_id, class_name, teacher_name, contact_no, dated, period FROM calendar_event_master";
    $results = mysqli_query($con, $display_query);
    $count = mysqli_num_rows($results);
    if ($count > 0) {
        $data_arr = array();
        $i = 1;
        echo "<table border='1'>";
        echo "<tr>";
        echo "<th>Event ID</th>";
        echo "<th>Class Name</th>";
        echo "<th>Teacher Name</th>";
        echo "<th>Contact No</th>";
        echo "<th>Date</th>";
        echo "<th>Period</th>";
        echo "</tr>";
        while ($data_row = mysqli_fetch_array($results, MYSQLI_ASSOC)) {
            echo "<tr>";
            echo "<td>" . $data_row['event_id'] . "</td>";
            echo "<td>" . $data_row['class_name'] . "</td>";
            echo "<td>" . $data_row['teacher_name'] . "</td>";
            echo "<td>" . $data_row['contact_no'] . "</td>";
            echo "<td>" . date("Y-m-d", strtotime($data_row['dated'])) . "</td>";
            echo "<td>" . $data_row['period'] . "</td>";
            echo "</tr>";
            $i++;
        }
        echo "</table>";

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
