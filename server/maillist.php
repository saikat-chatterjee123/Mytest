<?php
error_reporting(0);
include('conn.php');
    $sql="SELECT * FROM maillist";
    $query = mysql_query($sql);
    $data = array();
    $json_data = array();
    while($row = mysql_fetch_array($query))
    {
     $json_data['id'] = $row['id'];
     $json_data['from'] = $row['mail_from'];
     $json_data['to'] = $row['mail_to'];
     $json_data['subject'] = $row['mail_subject'];
     $json_data['content'] = $row['mail_content'];
     $json_data['date'] = $row['mail_date'];
     $json_data['time'] = $row['mail_time'];
     array_push($data,$json_data);
    }
    //json_encode($data);
    echo "<pre>";
    print_r(json_encode($data));

// $file = 'maillist.json';
// file_put_contents($file, $data['json_data']);
// header("Content-type: application/json");
// header('Content-Disposition: attachment; filename="'.basename($file).'"');
// header('Content-Length: ' . filesize($file));
// readfile($file);


?>
