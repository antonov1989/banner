<?php

include './database/connection.php';

$conn = OpenCon();
//Connected Successfully

$sql = "SELECT * FROM statistic ORDER BY view_date DESC";

$result = $conn->query($sql);

CloseCon($conn);
echo 'Ip Address | View date | Page url | Views count | User Agent <br /><br />';

while ($row = $result->fetch_row()) {
    //var_dump($row); exit;
    printf("%s | %s | %s | %s | %s<br />", $row[0], $row[2], $row[3], $row[4], $row[1]);
}
